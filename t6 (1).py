from os import system
from requests import Session
from json import loads, JSONDecodeError
from uuid import uuid4
from time import sleep
import sys
from colorama import Fore, Style
from hashlib import md5
from requests.exceptions import ReadTimeout, ConnectionError
from random import choice
import sqlite3
import os

user_agents = [
    'Dalvik/2.1.0 (Linux; U; Android 10; PO-X1100 Build/RP1A.200320.012)',
    'Dalvik/2.1.0 (Linux; U; Android 9; SM-A505F Build/PPR1.180610.011)',
]

def decode(data):
    final_string = ''
    for key in data.keys():
        final_string += f"{key}={data[key]}&"
    return final_string[:-1]

def chenge_url_bace():
    global url_bace
    if url_bace == 'http://iran.fruitcraft.ir/':
        url_bace = 'https://iran.fruitcraft.ir/'
    else:
        url_bace = 'http://iran.fruitcraft.ir/'
        
def load(restore_key):
    data = {'game_version': '1.7.10655', 'device_name': 'unknown', 'os_version': '10', 'model': 'SM-A750F', 
            'udid': str(uuid4().int), 'store_type': 'iraqapps', 'restore_key': restore_key, 'os_type': 2}
    
    while True:
        try:
            response = session.post(f'{url_bace}player/load', decode(data), timeout=5)
            return loads(response.text)
        except (ReadTimeout, ConnectionError):
            print("Connection issue encountered, waiting 5 seconds before retrying...")
            sleep(5)
            chenge_url_bace()
        except JSONDecodeError:
            print("Error decoding JSON. Waiting 5 seconds before retrying...")
            sleep(5)

def save_high_gold_players_to_file(players, filename='gold.txt'):
    existing_players = set()
    if os.path.exists(filename):
        with open(filename, 'r') as f:
            for line in f:
                if line.strip():
                    player_id = line.split(",")[1].split(":")[1].strip()
                    existing_players.add(player_id)

    with open(filename, 'a') as f:
        for player in players:
            if player['gold'] > 500000000000 and str(player['id']) not in existing_players:
                f.write(f"Name: {player['name']}, ID: {player['id']}, League: {player['league_id']}, Gold: {player['gold']}, Tribe: {player['tribe_name']}\n")

def fetch_players_from_server(session, min_level=8):
    try:
        response = session.get(f'{url_bace}battle/getopponents', timeout=5)
        #print(f"Response from server: {response.text}")
        players = loads(response.text)['data']['players']
        save_high_gold_players_to_file(players)

        return [{
            'id': p['id'],
            'def_power': p['def_power'],
            'level': p['level'],
            'league_id': p['league_id'],
            'gold': p['gold'],
            'name': p['name'],
            'tribe': p['tribe_name']  # Changed to tribe_name
        } for p in players if p['level'] >= min_level]
    except (ReadTimeout, ConnectionError, JSONDecodeError):
        print("Error fetching players from server.")
        chenge_url_bace()
        return []

def create_or_open_db(db_path):
    conn = sqlite3.connect(db_path)
    cursor = conn.cursor()
    cursor.execute('''CREATE TABLE IF NOT EXISTS Accounts (
                        id TEXT UNIQUE,
                        power NUMERIC,
                        level NUMERIC,
                        league NUMERIC,
                        PRIMARY KEY(id))''')
    conn.commit()
    return conn, cursor

def update_players_in_db(cursor, players, min_level_for_storage):
    for player in players:
        if player['level'] >= min_level_for_storage:
            cursor.execute('''INSERT INTO Accounts (id, power, level, league)
                              VALUES (?, ?, ?, ?)
                              ON CONFLICT(id) DO UPDATE SET
                                  power=excluded.power,
                                  level=excluded.level,
                                  league=excluded.league''',
                           (player['id'], player['def_power'], player['level'], player['league_id']))

def getenemys_from_db(db_path, max_power, min_level):
    conn = sqlite3.connect(db_path)
    cursor = conn.cursor()
    query = '''SELECT id, power, level, league FROM Accounts WHERE level >= ?'''
    cursor.execute(query, (min_level,))
    enemies = cursor.fetchall()
    conn.close()
    return [{'id': e[0], 'power': e[1], 'level': e[2], 'league': e[3]} for e in enemies]

def battle(opponent_id, q, cards, attacks_in_today, hero_id=None):
    data = {'opponent_id': opponent_id, 'check': md5(str(q).encode()).hexdigest(), 
            'cards': str(cards).replace(' ', ''), 'attacks_in_today': 0}
    if hero_id: data['hero_id'] = hero_id

    while True:
        try:
            response = session.get(f'{url_bace}battle/battle?' + decode(data), timeout=5)
            return loads(response.text)
        except (ReadTimeout, ConnectionError):
            print("Connection issue during battle, waiting 30 seconds before retrying...")
            sleep(30)
            chenge_url_bace()

def update_cards():
    global cards
    if cards:
        cards.append(cards[0])
        cards.pop(0)

def attack_offline():
    global db_file  # اضافه کردن این خط تا db_file سراسری شود
    q = load['data']['q']
    win = 0
    lost = 0
    xp = 0
    doon = 0
    attacked = {}
    #max_power = load['data']['def_power']

    while True:
        # ابتدا از دیتابیس بازیکنان را انتخاب کنید
        enemys = getenemys_from_db(db_file, max_power, min_level)
        
        new_players = fetch_players_from_server(session, min_level=min_level)
        update_players_in_db(cursor, new_players, min_level_for_storage)
        conn.commit()
        # اگر بازیکنی مطابق معیارها نبود، بازیکنان جدید از سرور دریافت شوند
        if not enemys:
            print("No enemies found in the database matching your criteria.")
            enemys = fetch_players_from_server(session, min_level=8)
            enemys = getenemys_from_db(db_file, max_power, min_level)
 
            
            if not enemys:
                print("No players fetched from the server.")
                return
        
        for enemy in enemys:
            attacked[enemy['id']] = 0
            print(f"Attacking player ID: {Fore.BLUE}{enemy['id']}{Fore.RESET}...Level: {Fore.GREEN}{enemy['level']}{Fore.RESET}")
            initial_xp = xp
            for i in range(max_attempts_per_player):
                try:
                    q_response = battle(enemy['id'], q, [cards[0]], attacked[enemy['id']])
                    
                    if q_response['data'].get('xp_added', 0) > 0:
                        xp = q_response["data"]["xp_added"]
                        win += 1
                        #print(f"• player ID: {Fore.MAGENTA}{enemy['id']}{Fore.RESET} --- • Win: {Fore.GREEN}{win}{Fore.RESET} --- • Lose: {Fore.RED}{lost}{Fore.RESET} --- • Doon: {doon} --- • XP: {Fore.RED}{xp}{Fore.RESET}")
                        
                    else:
                        lost += 1
                        #print(f"• player ID: {Fore.MAGENTA}{enemy['id']}{Fore.RESET} --- • Win: {Fore.GREEN}{win}{Fore.RESET} --- • Lose: {Fore.RED}{lost}{Fore.RESET} --- • Doon: {doon} --- • XP: {Fore.RED}{xp}{Fore.RESET}")
                        break
                        #sleep(0.7)
                    
                    doon = q_response['data'].get('weekly_score', 0)
                    q = q_response['data']['q']
                    attacked[enemy['id']] += 1
                    print(f"• player ID: {Fore.MAGENTA}{enemy['id']}{Fore.RESET} --- • Win: {Fore.GREEN}{win}{Fore.RESET} --- • Lose: {Fore.RED}{lost}{Fore.RESET} --- • Doon: {doon} --- • XP: {Fore.RED}{xp}{Fore.RESET}")
                    
                    sleep(0.3)  # کاهش فاصله بین حملات به 3 دهم ثانیه
                except KeyError:
                    pass
                except JSONDecodeError:
                    sleep(2)
                    print("Error decoding JSON. Waiting 25 seconds...")
                    pass
                except KeyboardInterrupt:
                    exit()
                except Exception as e:
                    print(e, type(e))
                    exit()
                update_cards()
            
            # دریافت بازیکنان جدید از سرور بعد از هر حمله و بروزرسانی دیتابیس
            new_players = fetch_players_from_server(session, min_level=min_level)
            update_players_in_db(cursor, new_players, min_level_for_storage)
            conn.commit()
            print(f"{len(new_players)} players updated in the database.")

            print(f"Finished attacking player ID: {enemy['id']}... Waiting 3 seconds before next player.")
            sleep(0.3)
        print("Restarting the list of enemies...")

system("clear")

restore_key = input('Enter your restore key: ')
session = Session()
selected_user_agent = choice(user_agents)
session.headers.update({
    'User-Agent': selected_user_agent,
    'Accept-Encoding': 'gzip',
    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
})
url_bace = 'http://iran.fruitcraft.ir/'

load = load(restore_key)

if load['status']:
    print(f"{Fore.GREEN}Connection successful!{Style.RESET_ALL}")
    account_info = load['data']
    tribe_name = account_info['tribe']['name']
    print(f"Account Name: {Fore.CYAN}{account_info['name']}{Style.RESET_ALL}, Level: {Fore.YELLOW}{account_info['level']}{Style.RESET_ALL}, Gold: {Fore.MAGENTA}{account_info['gold']}{Style.RESET_ALL}, Tribe: {Fore.BLUE}{tribe_name}{Style.RESET_ALL}")
else:
    print(f"{Fore.RED}Connection failed! Please check your restore key.{Style.RESET_ALL}")
    exit()
max_power = int(input('Your power: '))
min_level = int(input('Level Up to attack: '))
min_level_for_storage = int(input('Level up To Save Database: '))
max_attempts_per_player = int(input('Number of Attacks to Enemy: '))

cards = [i['id'] for i in account_info['cards'] if i['power'] < 100]

players = fetch_players_from_server(session, min_level=min_level)
if not players:
    print("No players fetched from the server.")
    exit()

league_id = players[0]['league_id']
db_file = f'Leage_{league_id}.db'

if not os.path.exists(db_file):
    conn, cursor = create_or_open_db(db_file)
    print(f"Database file '{db_file}' created.")
else:
    conn, cursor = create_or_open_db(db_file)
    print(f"Using existing database file '{db_file}'.")

update_players_in_db(cursor, players, min_level_for_storage)
conn.commit()
print(f"{len(players)} players fetched from server and stored in the database with level >= {min_level_for_storage}.")

if len(cards) < 20:
    print("You have less than 20 cards!!!")
    exit()

while True:
    print("\n" * 4)
    attack_offline()
