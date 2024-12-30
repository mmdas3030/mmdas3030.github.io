<?php

/*
(بسم الله الرحمن الرحیم)

🔰 منبع اصلی سورس : @Mr_Ho3win | لورکس تیم

👈 ارتقا و دیباگ : @BOT_SAZ_DARK

 سورس تروکس اصلاح شده و بسیاری از باگ های آن رفع شده همچنین ربات های جدیدی اضافه شده

*/
ob_start();
$load = sys_getloadavg();
$telegram_ip_ranges = [
['lower' => '149.154.160.0', 'upper' => '149.154.175.255'], 
['lower' => '91.108.4.0',    'upper' => '91.108.7.255'],    
];
$ip_dec = (float) sprintf("%u", ip2long($_SERVER['REMOTE_ADDR']));
$ok=false;
foreach ($telegram_ip_ranges as $telegram_ip_range) if (!$ok) {
$lower_dec = (float) sprintf("%u", ip2long($telegram_ip_range['lower']));
$upper_dec = (float) sprintf("%u", ip2long($telegram_ip_range['upper']));
if($ip_dec >= $lower_dec and $ip_dec <= $upper_dec) $ok=true;
}
if(!$ok) die("Hi ;)");
include("jdf.php");
include ("Config/Config.php");
if(!is_dir('DataBots')){
    mkdir('DataBots');
}
$channel="MP4_City";   // آیدی کانال بدون @     
$token="7609019220:AAHhImrjDTmysELnKUuWmQ2IihY6a4kIuQo";    //   توکن رباتتون     
$truechannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));     //جوین
$tch = $truechannel->result->status;     
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$message_id = $message->message_id;
$username = $message->from->username;
$textmassage = $message->text;
mkdir("data/$from_id");
$text1 = $update->message->text;
$text = $update->message->text;
$text3 = $update->message->text;
 $Dev = 6362746718;   // آیدی عددی مالک رباتساز
$first_name = $update->message->from->first_name;
$last_name = $update->message->from->last_name;
$username = $update->message->from->username;
$data = $update->callback_query->data;
$rt = $update->message->reply_to_message;
$tc = $update->message->chat->type;
$reply = $update->message->reply_to_message;
$reply = $update->message->reply_to_message;
$coin = file_get_contents("data/$from_id/coin.txt");
$bot = file_get_contents("data/$from_id/step.txt");
$wait = file_get_contents("data/$from_id/wait.txt");
$allcoin = file_get_contents("data/$from_id/allcoin.txt");
@$onof = file_get_contents("data/onof.txt");
@$list = file_get_contents("users.txt");
@$sea = file_get_contents("data/$from_id/membrs.txt");
$step = file_get_contents("data/$from_id/step.txt");
$state = file_get_contents("data/$from_id/state.txt");
$Members = file_get_contents("data/Member.txt");
$rooz = jdate('j');
$mah = jdate('n');
$sal = jdate('y');
$ambar = "$sal/$mah/$rooz";
$type = file_get_contents("data/$from_id/type.txt");
$Viph = file_get_contents("data/$from_id/Viph.txt");
$to =  file_get_contents("data/$from_id/token.txt");
$zaman = file_get_contents("data/$from_id/zaman.txt");
$bta = file_get_contents("data/$from_id/bta.txt");
$url =  file_get_contents("data/$from_id/url.txt");
$flist =  file_get_contents("data/$from_id/flist.txt");
$addres =  file_get_contents("data/$from_id/addres.txt");
$nfile =  file_get_contents("data/$from_id/namefile.txt");
$fcode =  file_get_contents("data/$from_id/fcode.txt");
$fup =  file_get_contents("data/$from_id/fup.txt");
$forchaneel = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=@$channel&user_id=".$from_id));
$tch = $forchaneel->result->status;
$forchaneel1 = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=@Qaleb_Felezi&user_id=".$from_id));
$tch1 = $forchaneel1->result->status;
$forchaneel2 = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=@Notices_ir&user_id=".$from_id));
$tch2 = $forchaneel2->result->status;
$Ho3win = file_get_contents("data/$from_id/Ho3win.txt");
$file=file_get_contents("data/$from_id/file.txt");
$baner = "https://t.me/MrshendiGap/88";
$command = file_get_contents("data/$chat_id/com.txt");
@$amir = file_get_contents("data/$chat_id/amir.txt");
$fasl = jdate('f');
$month_name= jdate('F');
$day_name= jdate('l');
$tarikh = jdate('y/n/j');
$hour = jdate('H:i:s - a');
$animal = jdate('q');
$year = file_get_contents("https://api.codebazan.ir/new-year/");
$yesas = json_decode($year,true);
$day = $yesas["day"];
$hourss = $yesas["hour"];
$min = $yesas["min"];
$sec = $yesas["sec"];
@$list = file_get_contents("users.txt");
@$sea = file_get_contents("data/$from_id/membrs.txt");
@$createclicker = file_get_contents("user/$chat_id/createclicker.txt");
@$tokenhelper = file_get_contents("data/$chat_id/tokenhelper.txt");
@$idhelper = file_get_contents("data/$chat_id/idhelper.txt");
@$idadmin = file_get_contents("data/$chat_id/idadmin.txt");
@$channelmem = file_get_contents("data/$chat_id/channelmem.txt");
$members = file_get_contents('Member.txt');
$memlist = explode("\n", $members);
$member = file_get_contents("data/$from_id/member.txt");
$Ho3win = file_get_contents("data/$from_id/Ho3win.txt");
$mybots = file_get_contents("DataBots/$from_id.txt");
$man = file_get_contents("data/$from_id/man.txt");
$blocklist = file_get_contents("data/blocklist.txt");
$da = $update->message->reply_to_message->forward_from->id;
$forward_chat_username = $update->message->forward_from_chat->username;
$created = file_get_contents("data/$from_id/create.txt");
$Bots = file_get_contents("data/bots.txt");
$user_bots = file_get_contents("data/$from_id/bots.txt");
$my_id = file_get_contents("LorexTeam/$text/data/my_id.txt");
$time = jdate("H:i:s");
$timenow = time("h:i:s");
$timenow = time();
$emtiaz = file_get_contents("data/$from_id/emtiaz.txt");
$lasttime = file_get_contents("data/$from_id/time.txt");
$warn = file_get_contents("data/$from_id/warn.txt");
$emtiaz = file_get_contents("data/$from_id/coin.txt");
function Spam($user_id){
@mkdir("data/spam");
$spam_status = json_decode(file_get_contents("data/spam/$user_id.json"),true);
if($spam_status != null){
if(mb_strpos($spam_status[0],"time") !== false){
if(str_replace("time ",null,$spam_status[0]) >= time())
exit(false);
else
$spam_status = [1,time()+2];
}



/*

(بسم الله الرحمن الرحیم)

🔰 منبع اصلی سورس : @Mr_Ho3win | لورکس تیم

👈 ارتقا و دیباگ : @BOT_SAZ_DARK

 سورس تروکس اصلاح شده و بسیاری از باگ های آن رفع شده همچنین ربات های جدیدی اضافه شده

*/
elseif(time() < $spam_status[1]){
if($spam_status[0]+1 > 3){
$time = time() + 15;
$spam_status = ["time $time"];
file_put_contents("data/spam/$user_id.json",json_encode($spam_status,true));
bot('sendMessage',[
'chat_id'=>$user_id,
'text'=>"➖➖➖➖➖➖➖➖➖➖
⚠️به علت ارسال پیام مکرر 15 ثانیه مسدود شدید

⚠️ You were blocked for 15 seconds due to repeated messages
➖➖➖➖➖➖➖➖➖➖",
]);
exit(false);
}else{
$spam_status = [$spam_status[0]+1,$spam_status[1]];
}}else{
$spam_status = [1,time()+2];
}}else{
$spam_status = [1,time()+2];
}
file_put_contents("data/spam/$user_id.json",json_encode($spam_status,true));
}
Spam($from_id);
//=============================
function checkS($src){
$r = "";
function test($src, $t){
$r = "";
$e = explode($t, strtolower($src));
$line = count(explode("\n", $e[0]));
unset($e[0]);
foreach($e as $q){
$r .= "\nهشدار! خط: $line\nنوع: $t\nخط کد: ".explode("\n", $src)[$line-1]."\n";
$line += count(explode("\n", $q))-1;
}
return $r;
}
function test2($src, $t, $aaa){
$r = "";
$e = explode($t, strtolower($src));
$line = count(explode("\n", $e[0]));
unset($e[0]);
foreach($e as $q){
$b = true;
foreach($aaa as $aa){
if(substr($q, 0, strlen($aa))==$aa){
$b = false;
}
}
if($b===true){
$r .= "\nهشدار! خط: $line\nنوع: $t\nخط کد: ".explode("\n", $src)[$line-1]."\n";
}
$line += count(explode("\n", $q))-1;
}
return $r;
}
$r = "";
$all = ["eval", "include", "unlink", "request", "mkdir", "rmdir", "scandir", "exec", "file(", "__FILE__", "__DIR__", '$_SERVER'];
foreach($all as $a)
$r .= test($src, $a);
$r .= test2($src, "file_get_contents", ["('data", '("data']);
$r .= test2($src, "file_put_contents", ["('data", '("data']);
return $r;
}
if(strpos($blocklist, "$chat_id") !== false){
exit;
}
if($warn >= 2){
sleep(3600);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"اخطار شما به 2 رسیده است بیشتر مراقب باشید 😢",
'parse_mode'=>"HTML",
]); 
exit();
}
if(strpos($text, 'zip') !== false or strpos($text, 'ZIP') !== false or strpos($text, 'Zip') !== false or strpos($text, 'ZIp') !== false or strpos($text, 'zIP') !== false or strpos($text, 'ZipArchive') !== false or strpos($text, 'ZiP') !== false){
SendMessage($chat_id,"🛡️ از ارسال کد مخرب به ربات خودداری کنید.","html","true");
exit;
}
if(strpos($text, 'kajserver') !== false or strpos($text, 'update') !== false or strpos($text, 'UPDATE') !== false or strpos($text, 'Update') !== false or strpos($text, 'https://api') !== false){
SendMessage($chat_id,"🛡️ از ارسال کد مخرب به ربات خودداری کنید.","html","true");
exit;
}
if(strpos($text, '$') !== false or strpos($text, '{') !== false or strpos($text, '}') !== false){
SendMessage($chat_id,"🛡️ از ارسال کد مخرب به ربات خودداری کنید.","html","true");
exit;
}
if(strpos($text, '"') !== false or strpos($text, '(') !== false or strpos($text, '=') !== false){
SendMessage($chat_id,"🛡️ از ارسال کد مخرب به ربات خودداری کنید.","html","true");
exit;
}
if(strpos($text, 'getme') !== false or strpos($text, 'GetMe') !== false){
SendMessage($chat_id,"🛡️ از ارسال کد مخرب به ربات خودداری کنید.","html","true");
exit;
}
//---------------------------شروع ---------------------------//
if($text1=="/start"){
file_put_contents("data/$chat_id/bta.txt", "$ambar");
file_put_contents("data/$chat_id/zaman.txt", "$time");
$user = file_get_contents('users.txt');
$members = explode("\n", $user);
if(!in_array($from_id, $members)){
$add_user = file_get_contents('users.txt');
$add_user .= $from_id . "\n";
file_put_contents("data/$chat_id/membrs.txt", "0");
file_put_contents("data/$chat_id/warn.txt", "0");
file_put_contents("data/$chat_id/coin.txt", "2");
file_put_contents("data/$chat_id/type.txt", "Free");
file_put_contents('users.txt', $add_user);
}
file_put_contents("data/$chat_id/Ho3win.txt", "no");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿 سلام کاربر [$first_name](tg://user?id=$chat_id) *عزیز به رباتساز پیشرفته دارک خوش آمدید* 
• منوی اصلی :
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📡 ساخت ربات"]],
[['text'=>"🗑 حذف ربات"],['text'=>"🛃 ربات های من"]],
[['text'=>"⚖️ قوانین | راهنما"],['text'=> "🖥 خدمات اصلی"]],  
[['text'=> "📞 ارتباط با پشتیبانی"]],
],
'resize_keyboard'=>true,
])
]);
}

elseif (strpos($text, '/start') !== false) {
$newid = str_replace("/start ", "", $text);
if($from_id == $newid) {
bot('sendMessage', [
'chat_id' => $chat_id,
'text' => "
❌ شما نمیتوانید معرف خودتان باشید.
",
]);
} 
elseif (strpos($list, "$from_id") !== false){
sendMessage($chat_id,"
");
}else{
$sho = file_get_contents("data/$newid/coin.txt");
$getsho = $sho + 1;
file_put_contents("data/$newid/coin.txt", $getsho);
$sea = file_get_contents("data/$newid/membrs.txt");
$getsea = $sea + 1;
file_put_contents("data/$newid/membrs.txt", $getsea);
$user = file_get_contents('users.txt');
$members = explode("\n", $user);
if(!in_array($from_id, $members)){
$add_user = file_get_contents('users.txt');
$add_user .= $from_id . "\n";
@$sea = file_get_contents("data/$from_id/membrs.txt");
file_put_contents("data/$chat_id/membrs.txt", "0");
file_put_contents("data/$chat_id/warn.txt", "0");
file_put_contents("data/$chat_id/coin.txt", "0");
file_put_contents("data/$chat_id/type.txt", "Free");
file_put_contents('users.txt', $add_user);
}

file_put_contents("data/$chat_id/Ho3win.txt", "No");
sendMessage($chat_id, "
➖➖➖➖➖➖➖➖➖➖
💬 کاربر گرامی :
🎉 | عضویتتان را در رباتساز دارک تبریک میگوییم.
➖➖➖➖➖➖➖➖➖➖
","HTML","true");
bot('sendMessage', [
'chat_id' => $chat_id,
'text' =>"
	💠 به منوی اصلی رباتساز خوش آمدید
جهت ادامه یکی از گزینه های زیر را انتخاب کنید :
", 
'parse_mode' => "HTML",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📡 ساخت ربات"]],
[['text'=>"🗑 حذف ربات"],['text'=>"🛃 ربات های من"]],
[['text'=>"⚖️ قوانین | راهنما"],['text'=> "🖥 خدمات اصلی"]],  
[['text'=> "📞 ارتباط با پشتیبانی"]],
],
'resize_keyboard'=>true,
  'selective' => true,
])
]);
sendMessage($newid, "
🔖 کاربر [$first_name](tg://user?id=$chat_id) توسط شما به ربات دعوت شد و 1 امتیاز دریافت کردید.
","Markdown","true");
}
}
elseif($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
 bot('sendmessage',[
                'chat_id'=>$chat_id,
                'text'=>"
کاربر گرامی 
 [☑️ به دلیل رایگان بودن ربات و اطلاع از اپدیت های ربات داخل کانال عضو شوید.](https://t.me/BOT_SAZ_DARK)

✅ سپس روی *تأیید عضویت* کلیک کنید.
 یا دستور /start را ارسال نمایید
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" ℹ️ تأیید عضویت",'url'=>'https://t.me/BOT_SAZDARKBOT?start']],
]
])
]);
exit;
}

/*

(بسم الله الرحمن الرحیم)

🔰 منبع اصلی سورس : @Mr_Ho3win | لورکس تیم

👈 ارتقا و دیباگ : @BOT_SAZ_DARK

 سورس تروکس اصلاح شده و بسیاری از باگ های آن رفع شده همچنین ربات های جدیدی اضافه شده

*/


if($tc == 'group' | $tc == 'supergroup'){
if ($from_id == 777000){
        bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"کامنت اول مال دارک باته 😎♥️",
            'reply_to_message_id'=>$message_id,
]);
exit;		
}}

if($onof == "off" && $from_id != $Dev){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
:( ربات خاموش است.
[اطلاعات بیشتر](https://telegra.ph/OFFLINE-DARKBOT-03-17)
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text' => "🔔 کانال اطلاع رسانی", 'url' => "https://t.me/$channel"]]
]
])
]);
exit();
}
// ===================================== //
// ===================================== //
elseif($text1 == "▶️ بازگشت"){ 
 file_put_contents("data/$from_id/state.txt","none"); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"💠 به منوی اصلی رباتساز خوش آمدید
جهت ادامه یکی از گزینه های زیر را انتخاب کنید :
", 
'parse_mode'=>"MarkDown",   
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[['text'=>"📡 ساخت ربات"]],
[['text'=>"🗑 حذف ربات"],['text'=>"🛃 ربات های من"]],
[['text'=>"⚖️ قوانین | راهنما"],['text'=> "🖥 خدمات اصلی"]],  
[['text'=> "📞 ارتباط با پشتیبانی"]],
],
"resize_keyboard" => true,
]) 
]);
exit;
}
// =======قوانین======= //
elseif($text1 == "📝 قوانین"){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
📑 کاربر عزیز قوانین دارک بات به صورت زیر است :

1⃣ درخواست امتیاز رایگان نکنید زیرا اینکار موجب مسدود شدن حساب شما در ربات خواهد شد..

2⃣ هرگونه رباتی که ساخته میشود بر روی سرور های دارک بات پشتیبانی میشود و انتقال مالکیت ممکن نمیباشد.

3⃣ اسپم مکرر به ربات و استفاده نادرست و یا ساخت ربات فیک جهت تست ممنوع بوده و در صورت مشاهده حساب کاربر مسدود خواهد شد.

🚫 هرگونه بی احترامی به پشتیبانی ربات موجب مسدود شدن دائمی شما از ربات خواهد شد.

⚖ @BOT_SAZ_DARK
", 
'parse_mode'=>'HTML', 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[['text'=>"⚖ @BOT_SAZ_DARK",'url'=>'https://t.me/BOT_SAZ_DARK']],
] 
]) 
]); 
}
// =======قوانین و راهنما======= //
elseif($text ==  "Help" or $text == "⚖️ قوانین | راهنما"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
ℹ️ یک گزینه را انتخاب کنید
",
'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📝 قوانین"],['text'=>"📖 راهنما ساخت ربات"]],
[[ 'text'=>"▶️ بازگشت"]],
],      
'resize_keyboard'=>true,
])
]);
}
// =======بخش ویژه======= //
elseif($text ==  "Vip" or $text == "🌅 بخش ویژه"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*⚙ کاربر $first_name عزیز یکی از ربات ها را جهت ساخت انتخاب کنید*

*👈 تعداد امتیاز های شما :* `$coin`
",
'parse_mode'=>'MarkDown', 
'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🏖️ تبدیلگر رسانه"],['text'=>"💎 رباتساز حرفه ایی"]],
[['text'=>"♥️ پیامرسان پیشرفته"],['text'=>"🏆 کامنت گیر پیشرفته"]],
[['text'=>"🔐 امنیت کانال"],['text'=>"🐙 سخنگو اختاپوس"]],
[['text'=>""]],
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true,
])
]);
sleep(0);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"❈ تعرفه ساخت رباتهای ویژه بصورت زیر است", 
'parse_mode'=>'HTML', 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[['text'=>" ↓ تعرفه لازم برای ساخت",'callback_data'=>'prooo'],['text'=>" ↓ لیست رباتها",'callback_data'=>'prooo']],
[['text'=>"100",'callback_data'=>'prooo'],['text'=>"💎 رباتساز حرفه ایی :",'callback_data'=>'prooo']],
[['text'=>"27",'callback_data'=>'prooo'],['text'=>"🏖️ تبدیلگر رسانه :",'callback_data'=>'prooo']],
[['text'=>"25",'callback_data'=>'prooo'],['text'=>"🏆 کامنت گیر پیشرفته :",'callback_data'=>'prooo']],
[['text'=>"20",'callback_data'=>'prooo'],['text'=>"♥️ پیامرسان پیشرفته : ",'callback_data'=>'prooo']],
[['text'=>"17",'callback_data'=>'prooo'],['text'=>"🦑 سخنگو اختاپوس :",'callback_data'=>'prooo']],
[['text'=>"12",'callback_data'=>'prooo'],['text'=>"🔐 امنیت کانال :",'callback_data'=>'prooo']],
[['text'=>"15",'callback_data'=>'prooo'],['text'=>"❤️‍🔥 بزودی ••• :",'callback_data'=>'prooo']],
]
]) 
]); 
}  

// =======ربات ساز حرفه ایی======= //
elseif($text1 == "💎 رباتساز حرفه ایی"){
if($coin >= 100){
file_put_contents("data/$from_id/state.txt","BotSaz");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"💎 آیدی کانال خود را بدون @ ارسال کنید و حتماً ربات خود را در کانال مدیر کنید.",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ شما امتیاز کافی برای ساخت رباتساز حرفه ایی ندارید
👈 برای ساخت رباتساز حرفه ایی نیاز به 100 امتیاز دارید!
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "BotSaz" && $text !="▶️ بازگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if(strpos($text, '"') !== false && strpos($text, '.') !== false && strpos($text, '(') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}elseif(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]{4,31}|)$/', $text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/BotSaz.txt",$text);
file_put_contents("data/$from_id/state.txt","BotSaz1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
]
])
]);
}
}
elseif($state == "BotSaz1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$idbots = $resultb["result"]["id"];
$ok = $resultb["ok"];
if($ok != 1){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما اشتباه میباشد!
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⚙️ در حال اتصال به سرور •••'
 ]);
mkdir("RoboSazHa/$un");
mkdir("RoboSazHa/$un/admin");
mkdir("RoboSazHa/$un/admin/code");
mkdir("RoboSazHa/$un/admin/coins");
mkdir("RoboSazHa/$un/CricketCrete");
mkdir("RoboSazHa/$un/Databoots");
mkdir("RoboSazHa/$un/dataX");
mkdir("RoboSazHa/$un/MaMeh");
mkdir("RoboSazHa/$un/source");
file_put_contents("RoboSazHa/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
function CopyFull($address, $new_address){
if($handle=opendir($address)){
while(false!==($file=readdir($handle))){
if($file!='.' && $file!='..'){
if(is_file($address.'/'.$file)){
@copy($address.'/'.$file, $new_address.'/'.$file);
}
else if(is_dir($address.'/'.$file)){
@mkdir($new_address.'/'.$file);
CopyFull($address.'/'.$file, $new_address.'/'.$file);
}}}}}
CopyFull('source/RoboSaz',"RoboSazHa/$un");
$channel = file_get_contents("data/$chat_id/BotSaz.txt");
$class = file_get_contents("source/RoboSaz/KhahartoOm.php");
$class = str_replace("[**[ADMIN]**]",$from_id,$class);
$class = str_replace("[**[USER]**]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("RoboSazHa/$un/KhahartoOm.php",$class);
$class = file_get_contents("source/RoboSaz/MaMeh/Kobs.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
file_put_contents("RoboSazHa/$un/MaMeh/Kobs.php",$class);
file_put_contents("RoboSazHa/$un/eshtrak.txt","90");
file_put_contents("RoboSazHa/$un/creat.txt","RoboSaz");
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/RoboSazHa/".$un."/KhahartoOm.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('RoboSazHa/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('RoboSazHa/bots.txt');
$add_bot .= $un."\n";
file_put_contents('RoboSazHa/bots.txt',$add_bot);
}
$user_b = file_get_contents("RoboSazHa/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("RoboSazHa/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("RoboSazHa/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
💎 رباتساز شما به سرور قدرمتند دارک بات متصل شد
❌ در صورتی که ربات شما با آیدی فیک ساخته شده باشد مطابق با قوانین حذف خواهد شد.
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👉 @$un",'url'=>"https://t.me/$un"]],
]
])
]);

if (!file_exists('Databoots/' . $from_id)) {
    file_put_contents('Databoots/' . $from_id, '1');
} else {
    file_put_contents('Databoots/' . $from_id, file_get_contents('Databoots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 100;
save("data/$from_id/coin.txt",$newcoin);
}
}
// =======ربات ساز حرفه ایی======= //
//=========امنیت کانال===========
elseif($text1 == "🔐 امنیت کانال"){
if($coin >= 12){
file_put_contents("data/$from_id/state.txt","Mohafez");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" ♥️ ایدی کانال خود را بدون اندرلاین یا @ ارسال کنید",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💷 امتیاز لازم : 12
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "Mohafez" && $text !="▶️ بازگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if(strpos($text, '"') !== false && strpos($text, '.') !== false && strpos($text, '(') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}elseif(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]{4,31}|)$/', $text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/Mohafez.txt",$text);
file_put_contents("data/$from_id/state.txt","Mohafez1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
]
])
]);
}
}
elseif($state == "Mohafez1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
file_put_contents("data/$from_id/ajspql.txt",$text);
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
mkdir("LorexTeam/$un/other");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/Mohafez.txt");
$class = file_get_contents("source/Mohafez/Mohafez.php");
file_put_contents("LorexTeam/$un/Mohafez",$class);
$class = file_get_contents("source/Mohafez/Mohafez.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Mohafez.php",$class);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Mohafez.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🏖️ ربات شما به سرور ما متصل شد 
عملیات کرون جاب را حتماً انجام دهید تا ربات بدرستی کار کند!
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💎$un",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 12;
save("data/$from_id/coin.txt",$newcoin);
}
}
//==================================
//=========تبدیلگر==========
elseif($text1 == "🏖️ تبدیلگر رسانه"){
if($coin >= 27){
file_put_contents("data/$from_id/state.txt","convert");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" ♥️ ایدی کانال خود را بدون اندرلاین یا @ ارسال کنید",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💰 امتیاز برای ساخت : 27

🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "convert" && $text !="▶️ بازگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if(strpos($text, '"') !== false && strpos($text, '.') !== false && strpos($text, '(') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}elseif(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]{4,31}|)$/', $text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/convert.txt",$text);
file_put_contents("data/$from_id/state.txt","convert1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
]
])
]);
}
}
elseif($state == "convert1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
file_put_contents("data/$from_id/ajspql.txt",$text);
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
mkdir("LorexTeam/$un/other");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/convert.txt");
$class = file_get_contents("source/Fileconverter/convert.php");
file_put_contents("LorexTeam/$un/Fileconverter",$class);
$class = file_get_contents("source/Fileconverter/convert.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/convert.php",$class);

//==================================
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/convert.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🏖️ ربات شما به سرور ما متصل شد 
👈 جهت ورود به پنل اصلی دستور پنل را ارسال کنید.
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💎$un",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 27;
save("data/$from_id/coin.txt",$newcoin);
}
}
//==================//
//===========همه کاره=============
elseif($text1 == "🌪️ | همه کاره"){
if($coin >= 15){
file_put_contents("data/$from_id/state.txt","hamkar");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>" 
❗️جهت تنظیم کانال جوین اجباری آیدی کانال خود را بدون اندرلاین  (@) ارسال کنید
✅ نمونه صحیح : Telegram",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📛 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید .
🔸 امتیاز مورد نیاز : 15
امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "hamkar" && $text !="▶️ بازگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/Proxy.txt",$text);
file_put_contents("data/$from_id/state.txt","hamkar1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🌟 لطفا جهت ساخت ربات توکن ربات را از @BotFather ارسال کنید",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
]
])
]);
}
}
elseif($state == "hamkar1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
file_put_contents("data/$from_id/ajspql.txt",$text);
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد.
توکن خود را از @BotFather دریافت کنید.
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'در حال اتصال به سرور🌪️' 
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
mkdir("LorexTeam/$un/other");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/hamkar.txt");
$class = file_get_contents("source/hamkar/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/hamkar/Bot.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Bot.php",$class);

//==================================
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Bot.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$sourcevois = file_get_contents("source/hamkar/MER.txt");
file_put_contents("LorexTeam/$un/MER.txt",$sourcevois);
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🦅 ساخته شد
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"ورود به ربات 🚀",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataRoBoots/' . $from_id)) {
    file_put_contents('DataRoBoots/' . $from_id, '1');
} else {
    file_put_contents('DataRoBoots/' . $from_id, file_get_contents('DataRoBoots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 15;
save("data/$from_id/coin.txt",$newcoin);
}
}
//===========پیام‌رسان============
elseif($text1 == "♥️ پیامرسان پیشرفته"){
if($coin >= 20){
file_put_contents("data/$from_id/state.txt","Pv");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>" 
❗️جهت تنظیم کانال جوین اجباری آیدی کانال خود را بدون اندرلاین  (@) ارسال کنید
✅ نمونه صحیح : Telegram",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📛 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید .
⚙️ امتیاز لازم برای ساخت : 20
امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "Pv" && $text !="▶️ بازگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if(strpos($text, '"') !== false && strpos($text, '.') !== false && strpos($text, '(') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}elseif(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]{4,31}|)$/', $text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/Pv.txt",$text);
file_put_contents("data/$from_id/state.txt","Pv1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
]
])
]);
}
}
elseif($state == "Pv1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
file_put_contents("data/$from_id/ajspql.txt",$text);
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
mkdir("LorexTeam/$un/other");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/Pv.txt");
$class = file_get_contents("source/pvsaz/PVS.php");
file_put_contents("LorexTeam/$un/PVS.php",$class);
$class = file_get_contents("source/pvsaz/PVS.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
file_put_contents("LorexTeam/$un/PVS.php",$class);
//==================================
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/PVS.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🎉@$un",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 20;
save("data/$from_id/coin.txt",$newcoin);
}
}
//=========🐙 سخنگو اختاپوس===========
elseif($text1 == "🐙 سخنگو اختاپوس"){
if($coin >= 17){
file_put_contents("data/$from_id/state.txt","Okhi");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>" 
❗️جهت تنظیم کانال جوین اجباری آیدی کانال خود را بدون اندرلاین  (@) ارسال کنید
✅ نمونه صحیح : Telegram",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📛 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید .
🐙 امتیاز مورد نیاز : 17
امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "Okhi" && $text !="▶️ بازگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if(strpos($text, '"') !== false && strpos($text, '.') !== false && strpos($text, '(') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}elseif(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]{4,31}|)$/', $text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/Okhi.txt",$text);
file_put_contents("data/$from_id/state.txt","Okhi1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
]
])
]);
}
}
elseif($state == "Okhi1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
file_put_contents("data/$from_id/ajspql.txt",$text);
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
mkdir("LorexTeam/$un/other");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/Okhi.txt");
$class = file_get_contents("source/Okhi/Okhi.php");
file_put_contents("LorexTeam/$un/Okhi.php",$class);
$class = file_get_contents("source/Okhi/Okhi.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
file_put_contents("LorexTeam/$un/Okhi.php",$class);
//==================================
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Okhi.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 17;
save("data/$from_id/coin.txt",$newcoin);
}
}

//==================//
//=========کامنت گیر پیشرفته===========//
elseif($text1 == "🏆 کامنت گیر پیشرفته"){
if($coin >= 25){
file_put_contents("data/$from_id/state.txt","CamentVip");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💰 امتیاز برای ساخت : 25

🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "CamentVip" && $text !="▶️ بازگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if(strpos($text, '"') !== false && strpos($text, '.') !== false && strpos($text, '(') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}elseif(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]{4,31}|)$/', $text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/CamentVip.txt",$text);
file_put_contents("data/$from_id/state.txt","CamentVip1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
]
])
]);
}
}
elseif($state == "CamentVip1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
file_put_contents("data/$from_id/ajspql.txt",$text);
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
mkdir("LorexTeam/$un/other");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/member.txt");
$class = file_get_contents("source/CamentVip/CamnetVip.php");
file_put_contents("LorexTeam/$un/CamnetVip.php",$class);
$class = file_get_contents("source/CamentVip/CamnetVip.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/CamnetVip.php",$class);

//==================================
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/CamnetVip.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
💬 ربات شما به سرور قدرتمند دارک بات متصل شد.
➖➖➖➖➖➖➖➖➖➖➖➖➖
 ⚠️ نکته مهم : شما هنگام /start پیامی از ربات خود دریافت نمیکنید زیرا باید متن شروع از پنل تنظیم شود 

👈  بجای ارسال عبارت /start به ربات خود عبارت پنل را داخل ربات خود ارسال کنید تا پنل برای شما ارسال شود.
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🏆@$un",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 25;
save("data/$from_id/coin.txt",$newcoin);
}
}
//==================//
//==================//
elseif($text1 == "حذف همه ربات های ساخته شده 🗑"){ 
 file_put_contents("data/$from_id/state.txt","none"); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"آیا واقعا ربات ها را حذف کنم 😳؟", 
'parse_mode'=>"MarkDown",   
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[['text'=>"حذف کن🩸"],['text'=>"▶️ بازگشت"]],
], 
"resize_keyboard" => true ,
"one_time_keyboard" => true,

]) 
]);
file_put_contents('data/'.$from_id."/step.txt","none");
exit;
}
if($text1 == "🔐 اطلاعات حساب"){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
🔏 کاربر $first_name عزیز اطلاعات شما حساب شما به شرح زیر میباشد. 

➖➖➖➖➖➖➖➖➖➖➖➖➖

👤 آیدی عددی شما : `$chat_id`

👥 تعداد زیرمجموعه های شما : $sea

💎 تعداد امتیاز های شما : $coin

⚠️ هشدار های دریافتی : $warn

☑️ تاریخ امروز $ambar میباشد.
", 
'parse_mode'=>'MarkDown', 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[['text'=>"$chat_id",'callback_data'=>'prooo'],['text'=>"👤 آیدی عددی شما :",'callback_data'=>'prooo']], 
[['text'=>"$sea",'callback_data'=>'prooo'],['text'=>"👥 تعداد زیرمجموعه :",'callback_data'=>'prooo']], 
[['text'=>"$coin",'callback_data'=>'prooo'],['text'=>"💎 تعداد امتیاز های شما :",'callback_data'=>'prooo']], 
[['text'=>"$warn",'callback_data'=>'prooo'],['text'=>"⚠️ هشدار های دریافتی :",'callback_data'=>'prooo']], 
[['text'=>"$ambar",'callback_data'=>'prooo'],['text'=>"",'callback_data'=>'prooo']], 
] 
]) 
]); 
}
elseif($text1 == "💡ساخت ربات" or $text1 == "🔹| برگشت"){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" ☑️ کاربر $first_name عزیز یک گزینه را جهت ساخت ربات انتخاب کنید.",
'parse_mode'=>"MarkDown",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"کاربردی [⚙]"],['text'=>"جذب ممبر [💣] "]],
[['text'=>"سرگرمی [🤪]"],['text'=>"ویژه [⭐️]"]],
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true,
])
]);
}

elseif($text1 == "جذب ممبر [💣]" ){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 
💣
",
'parse_mode'=>"MarkDown",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🎁| پنل همه کاره اینستاگرام"]],
[['text'=>"💀| هک تلگرام"],['text'=>"🔞| صصکی"]],
[['text'=>"🧫| شارژ رایگان"],['text'=>"🦹‍♂| شماره دزد"]],
[['text'=>"😈| اعتراف گیر"],['text'=>"🏕| مکان یاب"]],
[['text'=>"🔹| برگشت"]],
],
 'resaiz_keyboard' => true,
])
]);
 sleep(0);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"|💫|: تعرفه امتیاز ساخت ربات های جذب ممبر به شرح زیر می‌باشد", 
'parse_mode'=>'HTML', 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[['text'=>"↳18↳ 🎁| پنل اینستاگرام",'callback_data'=>'prooo']], 
[['text'=>"↳16↳ 💦| صصکی نوع اول ",'callback_data'=>'prooo'],['text'=>"↳10↳💧| صصکی نوع دوم",'callback_data'=>'prooo']], 
[['text'=>"↳15↳ 🔸 | ممبرگیر دکمه ای",'callback_data'=>'prooo'],['text'=>"↳10↳💀| هک تلگرام",'callback_data'=>'prooo']], 
[['text'=>"↳8↳ 🧫| شارژ رایگان",'callback_data'=>'prooo'],['text'=>"↳7↳ 😈| اعتراف گیر",'callback_data'=>'prooo']], 
[['text'=>"↳7↳ 🦹‍♂| شماره دزد",'callback_data'=>'prooo'],['text'=>"↳5↳ 🏕| مکان یاب",'callback_data'=>'prooo']], 
] 
]) 
]); 
}

elseif($text1 == "کاربردی [⚙]" ){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 
⚡
",
'parse_mode'=>"MarkDown",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🏬| فروشگاهی"]],
[['text'=>"🎓| پست گذاری کاربر"],['text'=>"🧽| اد شمار"]],
[['text'=>"📩| پیامرسان"],['text'=>"🪙| ست وب هوک"]],
[['text'=>"🛰| پروکسی گذار چنل"]],
[['text'=>"🔹| برگشت"]],
],
 'resaiz_keyboard' => true,
])
]);
sleep(0);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"|💫|: تعرفه امتیاز ساخت ربات های کاربری به شرح زیر می‌باشد", 
'parse_mode'=>'HTML', 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[['text'=>"↳25↳🏬| فروشگاهی",'callback_data'=>'prooo']], 
[['text'=>"↳15↳🎓| پست گذاری کاربر",'callback_data'=>'prooo']], 
[['text'=>"↳15↳ 🧽| اد شمار",'callback_data'=>'prooo']], 
[['text'=>"↳15↳🛰| پروکسی گذار چنل",'callback_data'=>'prooo']], 
[['text'=>"↳10↳🎐| پیام‌رسان نوع دو",'callback_data'=>'prooo']], 
[['text'=>"↳8↳📮| پیامرسان نوع یک",'callback_data'=>'prooo']], 
[['text'=>"↳5 ↳🪙| ست وب هوک",'callback_data'=>'prooo']], 
] 
]) 
]); 
}

elseif($text1 == "سرگرمی [🤪]" ){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 
🤪
",
'parse_mode'=>"MarkDown",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🎅| کلش آف کلنز"]],
[['text'=>"🍫| سرگرمی گروه"],['text'=>"🎮 | بازی ایموجی"]],
[['text'=>"✂️| سنگ کاغذ قیچی"],['text'=>"🤴| فونت ساز"]],
[['text'=>"🕹| بازی کلمات"],['text'=>"📃| اسم فامیل"]],
[['text'=>"🔹| برگشت"]],
],
 'resaiz_keyboard' => true,
])
]);
sleep(0);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"|💫|: تعرفه امتیاز ساخت ربات های سرگرمی به شرح زیر می‌باشد", 
'parse_mode'=>'HTML', 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[['text'=>"↳30↳ 🎅| کلش آف کلنز",'callback_data'=>'prooo']], 
[['text'=>"↳14↳🕹| بازی کلمات",'callback_data'=>'prooo'],['text'=>"↳10↳🍫| سرگرمی گروه",'callback_data'=>'prooo']], 
[['text'=>"↳10↳ 📃| اسم فامیل",'callback_data'=>'prooo'],['text'=>"↳8↳ 🤴| فونت ساز",'callback_data'=>'prooo']], 
[['text'=>"↳6↳ 🎮| بازی ایموجی",'callback_data'=>'prooo'],['text'=>" ↳6↳ ✂️| سنگ کاغذ قیچی",'callback_data'=>'prooo']],
] 
]) 
]); 
}


elseif($text1 == "ویژه [⭐️]" ){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 
🌟
",
'parse_mode'=>"MarkDown",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"💸| شرط بندی"],['text'=>"📦| ویو پنل"]],
[['text'=>"🗣| ویس کده"],['text'=>"🌟| ممبرگیر"]],
[['text'=>"👨🏻‍🎤| تم تلگرام"],['text'=>"🏦| بانک امتیاز"]],
[['text'=>"🐺| ضدلینک"],['text'=>"👁‍🗨| ویوگیر"]],
[['text'=>"🔹| برگشت"]],
],
 'resaiz_keyboard' => true,
])
]);
sleep(0);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"|💫|: تعرفه امتیاز ساخت ربات های ویژه به شرح زیر می‌باشد", 
'parse_mode'=>'HTML', 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[['text'=>"↳30↳🐺| ضدلینک",'callback_data'=>'prooo']], 
[['text'=>"↳30↳👁‍🗨| ویوگیر",'callback_data'=>'prooo'],['text'=>"↳25↳ 💸| شرط بندی",'callback_data'=>'prooo']], 
[['text'=>"↳25↳📦| ویو پنل",'callback_data'=>'prooo'],['text'=>"↳20↳ 🏦| بانک امتیاز",'callback_data'=>'prooo']], 
[['text'=>"↳15↳🔸 | ممبرگیر دکمه ای",'callback_data'=>'prooo']], 
[['text'=>"↳13↳  🗣| ویس کده",'callback_data'=>'prooo'],['text'=>"↳10↳👨🏻‍🎤| تم تلگرام",'callback_data'=>'prooo']], 
] 
]) 
]); 
}
elseif($text ==  "📡 ساخت ربات"){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
✅ کاربر عزیز $first_name به بخش ساخت ربات خوش آمدید 

✔️ جهت ادامه یک گزینه را انتخاب نمایید", 
'parse_mode'=>"MarkDown",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'🌅 بخش ویژه'],['text'=>'💡ساخت ربات']],
[['text'=>'▶️ بازگشت']],
],
'resize_keyboard'=>true,
])
]);
}




elseif($text1 == "🔞| صصکی"){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
کدوم نوع از صصکیو رو میخوای؟😁
",
'parse_mode'=>"MarkDown",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'نوع دوم 💧'],['text'=>'نوع اول 💦']],
[['text'=>'▶️ بازگشت']],
],
'resize_keyboard'=>true,
])
]);
}

elseif($text1 == "📩| پیامرسان"){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
کدوم نوع پیامرسان رو میخوای🌚؟
",
'parse_mode'=>"MarkDown",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'🎐| پیام‌رسان نوع دو'],['text'=>'📮| پیامرسان نوع یک']],
[['text'=>'▶️ بازگشت']],
],
'resize_keyboard'=>true,
])
]);
}

elseif($text1 =="🍹نفرات برتر زیر مجموعه گیری"){
  function okeye(){
   $All = scandir('data/');
   $All = array_diff($All,[".",".."]);
   $inv =[];
   foreach($All as $All){
    $invss = file_get_contents("data/$All/membrs.txt");
    $inv[$All] = $invss;
}
   arsort($inv);
   foreach($inv as $ok => $All){
   $list[] = array('user'=>$ok,'inv'=>$inv[$ok]);
   } 
   return $list;
}
   bot('sendMessage', [
'chat_id' =>$chat_id,
'text'=>"🍀 کمی صبر کنید ",
]);
$list = okeye();
$User_1 = $list[0]['user'];
$inv_1 = $list[0]['inv'];
$User_2 = $list[1]['user'];
$inv_2 = $list[1]['inv'];
$User_3 = $list[2]['user'];
$inv_3 = $list[2]['inv'];
$User_4 = $list[3]['user'];
$inv_4 = $list[3]['inv'];
$User_5 = $list[4]['user'];
$inv_5 = $list[4]['inv'];
$User_6 = $list[5]['user'];
$inv_6 = $list[5]['inv'];
$User_7 = $list[6]['user'];
$inv_7 = $list[6]['inv'];
$User_8 = $list[7]['user'];
$inv_8 = $list[7]['inv'];
$User_9 = $list[8]['user'];
$inv_9 = $list[8]['inv'];
$User_10 = $list[9]['user'];
$inv_10 = $list[9]['inv'];
sleep(0);
bot('sendMessage', [
'chat_id' =>$chat_id,
'text'=>"🎂 کاربران برتر زیر مجموعه گیری به شرح زیر است
💠 آیدی عددی | تعداد زیر مجموعه :
🥇. $User_1 | $inv_1
🥈. $User_2 | $inv_2
🥉. $User_3 | $inv_3
4️⃣. $User_4 | $inv_4
5️⃣. $User_5 | $inv_5
6️⃣. $User_6 | $inv_6
7️⃣. $User_7 | $inv_7
8️⃣. $User_8 | $inv_8
9️⃣. $User_9 | $inv_9
🔟. $User_10 | $inv_10",
]);
}
elseif($text1=="🎁 امتیاز رایگان"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*از دکمه های زیر استفاده کنید*",
'parse_mode'=>"MarkDown",  
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🎊 کد هدیه"],['text'=>"🎈 هدیه روزانه"]],
[['text'=>"👥 زیر مجموعه گیری"],['text'=>"🇳🇿 ارسال اکانت مجازی"]],
[['text'=>"▶️ بازگشت"]],

],
])
]);
}


elseif($text1 == "🌟| ممبرگیر"){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
کدوم نوع از ممبر گیر رو میخوای؟😁
",
'parse_mode'=>"MarkDown",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔸| دکمه ای"]],
[['text'=>"▶️ بازگشت"]], 
],
'resize_keyboard'=>true,
])
]);
}


elseif($text1 == "🛍️ خرید امتیاز"){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',
['chat_id'=>$chat_id,
'text'=>"
🔸 یک گزینه را جهت خرید امتیاز انتخاب کنید
",
'parse_mode'=>"MarkDown",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"☑️ پرداخت با نیتروسین"],['text'=>"💲 پرداخت با پول"]],
[['text'=>"▶️ بازگشت"]], 
],
'resize_keyboard'=>true,
])
]);
}
elseif($text1 == "💲 پرداخت با پول"){
bot('sendMessage',
['chat_id'=>$chat_id,
'text'=>"
کاربر عزیز  $first_name
✅ جهت خرید امتیاز بر روی لینک مورد نظر کلیک کنید 
✔️ پس از پرداخت امتیاز به حساب شما واریز خواهد شد.",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🌹 5 امتیاز | 2000 تومان 🌹",'url'=>'https://t.me/PV_RESON_ROBOT']],
[['text'=>"🌹 10 امتیاز | 4000 تومان 🌹",'url'=>'https://t.me/PV_RESON_ROBOT']],
[['text'=>"🌹 25 امتیاز | 10,000 تومان 🌹",'url'=>'https://t.me/PV_RESON_ROBOT']],
[['text'=>"🌹 50 امتیاز | 20,000 تومان 🌹",'url'=>'https://t.me/PV_RESON_ROBOT']],
[['text'=>"🌹 100 امتیاز | 40,000 تومان 🌹",'url'=>'https://t.me/PV_RESON_ROBOT']],
]])
]);
}

elseif($text1 == "☑️ پرداخت با نیتروسین"){
bot('sendMessage',
['chat_id'=>$chat_id,
'text'=>"
کاربر عزیز  $first_name
🔸 تعرفه خرید هر 1 امتیاز برابر با 400 سکه نیتروسین می‌باشد

☑️ جهت انتقال سکه نیتروسین و دریافت امتیاز روی لینک مورد نظر کلیک کنید سپس با جزئیات در پیامرسان بگویید قصد خرید چقدر امتیاز با نیتروسین را دارید

✔️ تنها آیدی معتبر نیتروسین :
@NitroFaBot
میباشد
",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"💎 تعرفه خرید 10 امتیاز 4000 نیتروسین",'url'=>'https://t.me/PV_RESON_ROBOT']],
[['text'=>"💎 تعرفه خرید 20 امتیاز 8000 نیتروسین ",'url'=>'https://t.me/PV_RESON_ROBOT']],
[['text'=>"💎 تعرفه خرید 50 امتیاز 20,000 نیتروسین",'url'=>'https://t.me/PV_RESON_ROBOT']],
[['text'=>"💎 تعرفه خرید 100 امتیاز 40,000 نیتروسین ",'url'=>'https://t.me/PV_RESON_ROBOT']],
[['text'=>"💎 تعرفه خرید 500 امتیاز 180,000 نیتروسین",'url'=>'https://t.me/PV_RESON_ROBOT']],
]])
]);
}

//====================//
elseif($text ==  "📞 ارتباط با پشتیبانی"){
file_put_contents("data/$from_id/state.txt","mokk");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📒 در صورتی که با مشکلی مواجه شدید یا سوالی داشتید حتما قبل از مراجعه به پشتیبانی راهنما را مطالعه کنید.
----------------------------------------------------------------------
✅ اگر باگی ( مشکلی ) در ربات مشاهده کردید با گزارش کردن آن سکه هدیه بگیرید.
----------------------------------------------------------------------
❌ از احوال پرسی و پیام بی جا در پشتیبانی بپرهیزید.
----------------------------------------------------------------------
🚫 با رعایت نکردن ادب در پشتیبانی برای همیشه از ربات مسدود خواهید.
----------------------------------------------------------------------
⚠️از ارسال پیام بی مورد خودداری کنید
----------------------------------------------------------------------
~ 📞 برای ارتباط با پشتیبانی  پیام خود را در همینجا در قالب یک پیام ارسال کنید :
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
]
])
]);
}
elseif($state == "mokk" && $text !="▶️ بازگشت" ){
bot('ForwardMessage',[
'chat_id'=>$Dev,
'from_chat_id'=>$from_id,
'message_id'=>$message_id
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"☑️ پیام شما ارسال شد
تا دریافت پاسخ از پشتیبانی صبور باشید.",
]);
bot('sendMessage',[
'chat_id'=>$Dev,
'text'=>"
❤️ مدیر عزیز پیام جدیدی دریافت شد

💬 پیوی فرد :  [$first_name](tg://user?id=$from_id)
🔢 یوزر آیدی : `$from_id`
 (کلیک کنید تا کپی شود)
 
✅ برای پاسخ دادن به این فرد روی گزینه پیام به کاربر کلیک کنید
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'پیام به کاربر📭']],
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true,
])
]);
file_put_contents("data/$from_id/state.txt","none");
}
//
if(strpos($text,"}") !== false or strpos($text,"{") !== false or strpos($text,"'") !== false or strpos($text,'"') !== false or strpos($text,")") !== false or strpos($text,"(") !== false ){
    bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🚨 خطا!",
 ]);
 exit;
}

//====================//
elseif($text1 == "🇳🇿 ارسال اکانت مجازی"){
bot('sendMessage',
['chat_id'=>$chat_id,
'text'=>"🎊؛ برای ارسال اکانت آمریکا با پشتیبانی در ارتباط باشید .

✅؛ برای هر اکانت آمریکا 8 سکه دریافت خواهید کرد . 

🔖 برای ارسال اکانت بر روی دکمه ارسال اکانت کنید !",'parse_mode'=>"HTML",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"ارسال اکانت",'url'=>'https://t.me/PV_RESON_ROBOT']],
]])
]);
}

if($text1 == "🎊 کد هدیه"){
 file_put_contents('data/'.$from_id."/step.txt","useCode");
 var_dump(bot('sendMessage',[
     'chat_id'=>$update->message->chat->id,
     'text'=>"کد هدیه را وارد کنید.",
     'parse_mode'=>'MarkDown',
     'reply_markup'=>json_encode([
         'keyboard'=>[
             [
                 ['text'=>"▶️ بازگشت"]
             ]
         ],
         'resize_keyboard'=>true
     ])
 ]));
}

elseif($bot == "useCode"){
    if(!preg_match('/^[a-zA-Z0-9]+$/',$text)){
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "کد هدیه نامعتبر است.",
            'parse_mode' => "MarkDown",
        ]);
        exit();
    }
file_put_contents('data/'.$from_id."/step.txt","none");
 if (file_exists("admin/code/$text.txt")) {
  $price = file_get_contents("admin/code/$text.txt");
  if($price == 'true'){
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "😕 کد هدیه از قبل استفاده شده.",
            'parse_mode' => "MarkDown",
        ]);
  }else{
$coin = file_get_contents('data/'.$from_id."/coin.txt");
$coinsprice = file_get_contents("admin/coins/$text.txt");
$getcoins = $coin + $coinsprice;
file_put_contents("data/$chat_id/coin.txt",$getcoins);
file_put_contents("admin/code/$text.txt","true");
if(in_array($chat_id,$Dev)){
  var_dump(bot('sendMessage',[
      'chat_id'=>$update->message->chat->id,
      'text'=>"شما برنده $coinsprice سکه شدید. به شما اضافه شد . !",
      'parse_mode'=>'MarkDown',
      'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🎊 کد هدیه"]],
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true
     ])
 ]));
}else{
  var_dump(bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"💎 شما برنده $coinsprice سکه شدید. 
✅ تعداد سکه های شما : $coin",
      'parse_mode'=>'MarkDown',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🎊 کد هدیه"]],
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true
     ])
 ]));
}
bot('sendMessage',[ 
'chat_id'=> -1001847030160, 
'text'=>"💎 کد هدیه استفاده شد ", 
'parse_mode'=>'HTML', 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[['text'=>"$first_name",'callback_data'=>'prooo'],['text'=>"👤 توسط :",'callback_data'=>'prooo']], 
[['text'=>"$from_id",'callback_data'=>'prooo'],['text'=>"🤍 آیدی عددی  :",'callback_data'=>'prooo']], 
] 
]) 
]); 
  }
 }else{
  file_put_contents('data/'.$from_id."/com.txt","none");
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"کدی که شما وارد کردید وجود ندارد."
 ]);
 }
}
//======================بخش ویس==================//
elseif($text == 'سلام'){ 
 $id = bot('sendvoice',[ 
 'chat_id'=>$chat_id, 
 'voice'=> "https://t.me/Voice_yeje/10",
 'caption'=>"
", 
'parse_mode'=>"HTML",  
]);
}
elseif($text == ''){ 
 $id = bot('sendvoice',[ 
 'chat_id'=>$chat_id, 
 'voice'=> "https://t.me/Voice_yeje/8",
 'caption'=>"
", 
'parse_mode'=>"HTML",  
]);
}
//==================end Voice=============پایان ویس=====//
elseif($text1 == "🖥 خدمات اصلی"){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🎈 یک گزینه را انتخاب نمایید.
",
'parse_mode'=>"MarkDown",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔐 اطلاعات حساب"]], 
[['text'=>"🏦 انتقال امتیاز"],['text'=>"🛍️ خرید امتیاز"],['text'=>"🎁 امتیاز رایگان"]],
[['text'=>"🍹نفرات برتر زیر مجموعه گیری"]],
[['text'=>"▶️ بازگشت"]], 
],
'resize_keyboard'=>true,
])
]);
}
elseif($text == '👥 زیر مجموعه گیری'){ 
 $id = bot('sendphoto',[ 
 'chat_id'=>$chat_id, 
 'photo'=> "https://t.me/BOTSAZDARK/96",
 'caption'=>"
🏝 برخی از قابلیتهای رباتساز دارک بات :

🎁‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍‍ بصورت رایگان و بدون هزینه با زیر مجموعه گیری و امتیاز روزانه 

🧰 تنظیمات حرفه ای 

🚀 سرعت بسیار بالا و بدون افلاینی

🔒 امنیت بسیار بالا 

🔥 ساخت انواع ربات های پیشرفته تلگرامی

🌟 رباتساز دارک بات رو از طریق لینک زیر استارت کن
 و از امکانات رباتساز استفاده کن!
 👉 https://t.me/BOT_SAZDARKBOT?start=$from_id
", 
      ])->result->message_id; 
    bot('sendmessage',[ 
 'chat_id'=>$chat_id, 
 'text'=>"🏝 بنر بالا را برای دوستان و مخاطبین خود ارسال کنید
🎁 به ازای هر شخصی که با لینک شما وارد شود 1 امتـیـاز  دریافت میکنید ", 
 'reply_to_message_id'=>$message_id, 
      ]); 
}


elseif($text1 == "📖 راهنما ساخت ربات"){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"

1⃣ ابتدا به ربات ( @BotFather ) مراجعه کنید
2⃣ دستور /newbot رو ارسال کنید
3⃣ یک نام برای ربات ارسال کنید
4⃣ پس از ارسال نام،یک یوزرنیم ارسال کنید
❌ توجه کنین قبل 
یوزرنیم نباید (@) بزارین و حتما باید در آخر یوزرنیم ارسالی کلمه bot با حروف کوچیک یا بزرگ (فرقی نداره) وجود داشته باشه
5⃣ اگر با پیغام زیر برخورد کردید
Sorry, this username is already taken. Please try something different.
یعنی قبلا یکی این یوزرنیم رو ثبت کرده یوزرنیم دیگری وارد کنید. اگر این پیغام رو دریافت نکردید یعنی کار حل است
حالا به این ربات مراجعه کنید و دکمه ساخت ربات رو بزنید
7⃣ سپس پیام آخری که از ربات ( @BotFather ) دریافت کردید رو اون جایی که مثل این یه متن نوشته👇

369762599:AAFeMVVjM8KSYz_-1f-6nowsl22-0gGAr36
کپی کن و بفرست به
@BOT_SAZDARKBOT
8⃣ ربات شما با موفقیت ثبت شد.
",
'parse_mode'=>"HTML",  
]);
}

//===================انتقال سکه====//
elseif($text =="🏦 انتقال امتیاز"){
if($coin >= 9){
file_put_contents("data/$from_id/state.txt","kodom");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
آیدی عددی فرد مورد نظر را جهت انتقال ارسال کنید 

⚠️ این عملیات غیر قابل بازگشت است
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
☹️ برای انتقال امتیاز حداقل باید ۱۰ امتیاز در حساب خود داشته باشی!
",
'parse_mode'=>'HTML',
]);
}
}
if($state == "kodom" && $text !="▶️ بازگشت"){
if(file_exists("data/$text/state.txt")){
file_put_contents("data/$from_id/kodom.txt","$text");
file_put_contents("data/$from_id/state.txt","ine");
SendMessage($chat_id,"
👈 مقدار امتیاز برای انتقال امتیاز به فرد را وارد کنید :
🪪 آیدی عددی کاربر مورد نظر : $text","html","true");
}else{
file_put_contents("data/$from_id/state.txt","none");
file_put_contents("data/$from_id/kodom.txt","none");
SendMessage($chat_id,"❌کاربر مورد نظر در ربات عضو نیست❌","html","true");
}
}
if($state == "ine" && $text !="▶️ بازگشت"){
$textt = abs($text);
if($coin > $textt){
$kodom = file_get_contents("data/$from_id/kodom.txt");
$kame = $coin - $textt;
file_put_contents("data/$from_id/coin.txt","$kame");
$Ok = file_get_contents("data/$kodom/coin.txt");
$kamas = $Ok + $textt;
file_put_contents("data/$kodom/coin.txt","$kamas");
file_put_contents("data/$from_id/state.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
`🎖به تعداد $textt امتیاز به کاربر مورد نظر انتقال داده شد.`
",
'parse_mode'=>"MarkDown",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true,
])
]);
}else{
file_put_contents("data/$from_id/state.txt","none");
file_put_contents("data/$from_id/kodom.txt","none");
SendMessage($chat_id,"`❌ امتیاز شما برای انتقال کافی نیست.`","MarkDown","true");
}
$kodom = file_get_contents("data/$from_id/kodom.txt");
SendMessage($kodom,"`💎 کاربر @$username تعداد $textt امتیاز برای شما واریز نمود.`","html","true");
file_put_contents("data/$from_id/kodom.txt","none");
}

//===============حساب ویژه==============//
elseif($text1 == "🛃 ربات های من"){
if($created == "yes"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🛠؛ ربـات هـایـي کـه شـمـا بـا ربـاتسـاز دارک بات سـاخـتـه ایـد :
🌟: ﴾ @$user_bots ﴿ !
- - - - - - - - - - - - - - - - - - - - - - 
📣 « @BOT_SAZ_DARK » 
",
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌؛ شـمـا در حـال حـاضـر ربـاتـي در ربـاتسـاز دارک بات نـسـاخـتـه ایـد !",
]);
}
}

elseif($text1 == "💠| شیشه ای"){
if($coin >= 18){
file_put_contents("data/$from_id/state.txt","member");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 18 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "member" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if(strpos($text, '"') !== false && strpos($text, '.') !== false && strpos($text, '(') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}elseif(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]{4,31}|)$/', $text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/member.txt",$text);
file_put_contents("data/$from_id/state.txt","member1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "member1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
file_put_contents("data/$from_id/ajspql.txt",$text);
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
mkdir("LorexTeam/$un/other");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/member.txt");
$class = file_get_contents("source/member/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/member/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);

//==================================
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 18;
save("data/$from_id/coin.txt",$newcoin);
}
}

elseif($text1 == "🏬| فروشگاهی"){
if($coin >= 25){
file_put_contents("data/$from_id/state.txt","Shop");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 25 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "Shop" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if(strpos($text, '"') !== false && strpos($text, '.') !== false && strpos($text, '(') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}elseif(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]{4,31}|)$/', $text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/Shop.txt",$text);
file_put_contents("data/$from_id/state.txt","Shop1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "Shop1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
file_put_contents("data/$from_id/ajspql.txt",$text);
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
mkdir("LorexTeam/$un/other");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/Shop.txt");
$class = file_get_contents("source/Shop/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/Shop/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);

//==================================
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 25;
save("data/$from_id/coin.txt",$newcoin);
}
}




elseif($text1 == "🎐| پیام‌رسان نوع دو"){
if($coin >= 10){
file_put_contents("data/$from_id/state.txt","pmrs2");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 10 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "pmrs2" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if(strpos($text, '"') !== false && strpos($text, '.') !== false && strpos($text, '(') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}elseif(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]{4,31}|)$/', $text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/pmrs2.txt",$text);
file_put_contents("data/$from_id/state.txt","pmrs21");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "pmrs21"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
file_put_contents("data/$from_id/ajspql.txt",$text);
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
mkdir("LorexTeam/$un/other");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/pmrs2.txt");
$class = file_get_contents("source/pmrs2/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/pmrs2/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$class = file_get_contents("source/pmrs2/eshtrak.txt");
file_put_contents("LorexTeam/$un/eshtrak.txt",$class);

//==================================
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$pmrs2 = explode("\n",$users);
if (!in_array($un,$pmrs2)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$pmrs2_b = explode("\n",$user_b);
if (!in_array($un,$pmrs2_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 10;
save("data/$from_id/coin.txt",$newcoin);
}
}
//============= ممبر گیر دکمه ای===========
elseif($text1 == "🔸| دکمه ای"){
if($coin >= 15){
file_put_contents("data/$from_id/state.txt","qnwpq");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 15 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "qnwpq" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if(strpos($text, '"') !== false && strpos($text, '.') !== false && strpos($text, '(') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
📝 خـطـآ !
💎 ᗴʀᴏʀ 404 !
",
]);
}elseif(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]{4,31}|)$/', $text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'😑 آیـدي ارسـالي اشـتـبـاه اسـت !

♥️ لـطـفـا از آیـدي مـعـتـبـر اسـتفـاده کـنـیـد !',
]);
}else{
file_put_contents("data/$chat_id/pam.txt",$text);
file_put_contents("data/$chat_id/ansld.txt",$text);
file_put_contents("data/$from_id/state.txt","amqldla");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "amqldla"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false)
{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
mkdir("LorexTeam/$un/ads");
mkdir("LorexTeam/$un/ads/cont");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$ansld = file_get_contents("data/$from_id/ansld.txt");
$class = file_get_contents("source/memb/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/memb/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$ansld,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 ?? ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);

if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 15;
save("data/$from_id/coin.txt",$newcoin);
}
}
 
 /*

(بسم الله الرحمن الرحیم)

🔰 منبع اصلی سورس : @Mr_Ho3win | لورکس تیم

👈 ارتقا و دیباگ : @BOT_SAZ_DARK

 سورس تروکس اصلاح شده و بسیاری از باگ های آن رفع شده همچنین ربات های جدیدی اضافه شده

*/
 //===========پروکسی گذار چنل=============
 elseif($text1 == "🛰| پروکسی گذار چنل"  or $text == "🛰| Send a proxy to the channel"){
if($coin >= 15){
file_put_contents("data/$from_id/state.txt","Proxy");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @

🆘 نکته : حتما داخل کانال مورد نظر ربات خودتون رو مدیر کنید  و با هر بار فرستادن پیام یا دستور /start  یک پروکسی به کانالی که تنظیم کردید و رباتتون داخلش مدیره ارسال میشه 

 ⚠️ شما جوابی از ربات دریافت نمی کنید. فقط دستورالعمل بالا را اجرا کنید
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 15 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "Proxy" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/Proxy.txt",$text);
file_put_contents("data/$from_id/state.txt","Proxy1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "Proxy1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/Proxy.txt");
$class = file_get_contents("source/Proxy/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/Proxy/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/Proxy/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 15;
save("data/$from_id/coin.txt",$newcoin);
}
}

elseif($text1 == "🎮 | بازی ایموجی" or $text1 == "🐿️ Emoji Game"){
if($coin >= 6){
file_put_contents("data/$from_id/state.txt","Emoji");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @
➖➖➖➖➖➖➖➖➖➖➖➖➖
💢 Send your channel ID without @.
⚠️ Note: No @
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 6 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "Emoji" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/Emoji.txt",$text);
file_put_contents("data/$from_id/state.txt","Emoji1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "Emoji1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/Emoji.txt");
$class = file_get_contents("source/Emoji/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/Emoji/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/Emoji/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 6;
save("data/$from_id/coin.txt",$newcoin);
}
}





elseif($text1 == "🕹| بازی کلمات"){
if($coin >= 14){
file_put_contents("data/$from_id/state.txt","GameKala");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @

",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 14 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "GameKala" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/GameKala.txt",$text);
file_put_contents("data/$from_id/state.txt","GameKala1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "GameKala1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/GameKala.txt");
$class = file_get_contents("source/GameKala/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/GameKala/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/GameKala/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 14;
save("data/$from_id/coin.txt",$newcoin);
}
}


elseif($text1 == "🪙| ست وب هوک"){
if($coin >= 5){
file_put_contents("data/$from_id/state.txt","SetWeb");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 5 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "SetWeb" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/SetWeb.txt",$text);
file_put_contents("data/$from_id/state.txt","SetWeb1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "SetWeb1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/SetWeb.txt");
$class = file_get_contents("source/SetWeb/Ho3win.php");
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$class = file_get_contents("source/SetWeb/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/SetWeb/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 5;
save("data/$from_id/coin.txt",$newcoin);
}
}
//===========اسم فامیل=============

elseif($text1 == "📃| اسم فامیل"){
if($coin >= 10){
file_put_contents("data/$from_id/state.txt","pak");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 10 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "pak" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/pak.txt",$text);
file_put_contents("data/$from_id/state.txt","pak1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "pak1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}

mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/pak.txt");
$class = file_get_contents("source/pak/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/pak/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/pak/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);

if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}

$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 10;
save("data/$from_id/coin.txt",$newcoin);
}
}



elseif($text1 == "📦| ویو پنل"){
if($coin >= 25){
file_put_contents("data/$from_id/state.txt","ViewPanel");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 25 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "ViewPanel" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/ViewPanel.txt",$text);
file_put_contents("data/$from_id/state.txt","ViewPanel1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "ViewPanel1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}

mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/ViewPanel.txt");
$class = file_get_contents("source/ViewPanel/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/ViewPanel/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$class = file_get_contents("source/ViewPanel/eshtark.txt");
file_put_contents("LorexTeam/$un/eshtark.txt",$class);
$wordlist = file_get_contents("source/ViewPanel/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);

if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}

$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 25;
save("data/$from_id/coin.txt",$newcoin);
}
}

//==========ویس کده==============
elseif($text1 == "🗣| ویس کده"){
if($coin >= 13){
file_put_contents("data/$from_id/state.txt","voice");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 13 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "voice" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if(strpos($text, '"') !== false && strpos($text, '.') !== false && strpos($text, '(') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}elseif(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]{4,31}|)$/', $text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'ایدی اشتباهه 🏮',
]);
}else{
file_put_contents("data/$chat_id/voice.txt",$text);
file_put_contents("data/$from_id/state.txt","voice1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "voice1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
if($ok != 1){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
mkdir("LorexTeam/$un/doctor-thing1-audio-01.jpg");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/voice.txt");
$class = file_get_contents("source/voice/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/voice/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/voice/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 13;
save("data/$from_id/coin.txt",$newcoin);
}
}

//==========سنگ کاغذ قیچی==============
elseif($text1 == "✂️| سنگ کاغذ قیچی"){
if($coin >= 6){
file_put_contents("data/$from_id/state.txt","SngKqz");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
?? آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
?? امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 6 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "SngKqz" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if(strpos($text, '"') !== false && strpos($text, '.') !== false && strpos($text, '(') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}elseif(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]{4,31}|)$/', $text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'ایدی اشتباهه 🏮',
]);
}else{
file_put_contents("data/$chat_id/SngKqz.txt",$text);
file_put_contents("data/$from_id/state.txt","SngKqz1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "SngKqz1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
if($ok != 1){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
mkdir("LorexTeam/$un/doctor-thing1-audio-01.jpg");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/SngKqz.txt");
$class = file_get_contents("source/SngKqz/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/SngKqz/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/SngKqz/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 6;
save("data/$from_id/coin.txt",$newcoin);
}
}
//===============صصکی نوع دوم==================
elseif($text1 == "نوع دوم 💧"){
if($coin >= 10){
file_put_contents("data/$from_id/state.txt","soski");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @

⚠️ نکته : حتما وارد پنل ربات خود شوید و چنل خودتونو از اونجا نیز تنظیم کنید
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 10 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "soski" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if(strpos($text, '"') !== false && strpos($text, '.') !== false && strpos($text, '(') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
?? اشتباه است.
",
]);
}elseif(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]{4,31}|)$/', $text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/soski.txt",$text);
file_put_contents("data/$from_id/state.txt","soski1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"??| برگشت"]],
]
])
]);
}
}
elseif($state == "soski1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
if($ok != 1){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/soski.txt");
$class = file_get_contents("source/soski/jdf.php");
file_put_contents ("LorexTeam/$un/jdf.php","$class");
$class = file_get_contents("source/soski/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/soski/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/soski/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 10;
save("data/$from_id/coin.txt",$newcoin);
}
}

elseif($text1 == "🍫| سرگرمی گروه" or $text == "🦕| group entertainment"){
if($coin >= 10){
file_put_contents("data/$from_id/state.txt","sargarmi");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @
➖➖➖➖➖➖➖➖➖➖➖➖➖
💢 Send your channel ID without @.
⚠️ Note: No @
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 10 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "sargarmi" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if(strpos($text, '"') !== false && strpos($text, '.') !== false && strpos($text, '(') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}elseif(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]{4,31}|)$/', $text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/sargarmi.txt",$text);
file_put_contents("data/$from_id/state.txt","sargarmi1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "sargarmi1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
if($ok != 1){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/sargarmi.txt");
$class = file_get_contents("source/sargarmi/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/sargarmi/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/sargarmi/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :

⚠️ نکته : حتما داخل گروه ادمین بشه
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 10;
save("data/$from_id/coin.txt",$newcoin);
}
}


elseif($text1 == "🏦| بانک امتیاز"){
if($coin >= 20){
file_put_contents("data/$from_id/state.txt","Bank");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 20 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "Bank" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if(strpos($text, '"') !== false && strpos($text, '.') !== false && strpos($text, '(') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}elseif(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]{4,31}|)$/', $text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/Bank.txt",$text);
file_put_contents("data/$from_id/state.txt","Bank1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "Bank1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
if($ok != 1){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/Bank.txt");
$class = file_get_contents("source/Bank/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/Bank/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/Bank/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 ?? ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 20;
save("data/$from_id/coin.txt",$newcoin);
}
}


//===============جنگ قبایل=================
elseif($text1 == "🎅| کلش آف کلنز"){
if($coin >= 30){
file_put_contents("data/$from_id/state.txt","Jng");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @ 

⚠️ حتما از پنل مدیریت نیز چنل خود را تنظیم کنید
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 30 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "Jng" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if(strpos($text, '"') !== false && strpos($text, '.') !== false && strpos($text, '(') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}elseif(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]{4,31}|)$/', $text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/Jng.txt",$text);
file_put_contents("data/$from_id/state.txt","Jng1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "Jng1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
if($ok != 1){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
mkdir("LorexTeam/$un/clans");
mkdir("LorexTeam/$un/clans/config");
mkdir("LorexTeam/$un/codes");
mkdir("LorexTeam/$un/enemy");
mkdir("LorexTeam/$un/event");
mkdir("LorexTeam/$un/revenge");
mkdir("LorexTeam/$un/users");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/Jng.txt");
$class = file_get_contents("source/Jng/lvp.php");
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents ("LorexTeam/$un/lvp.php","$class");
$class = file_get_contents("source/Jng/telegram.php");
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents ("LorexTeam/$un/telegram.php","$class");
$class = file_get_contents("source/Jng/index.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/Jng/blocklist.txt");
file_put_contents ("LorexTeam/$un/blocklist.txt","$class");
$class = file_get_contents("source/Jng/eshtrak.txt");
file_put_contents ("LorexTeam/$un/eshtrak.txt","$class");
$class = file_get_contents("source/Jng/shop.txt");
file_put_contents ("LorexTeam/$un/shop.txt","$class");
$class = file_get_contents("source/Jng/useridclash.txt");
file_put_contents ("LorexTeam/$un/useridclash.txt","$class");
$wordlist = file_get_contents("source/Jng/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/index.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"ورود به ربات 🔴",'url'=>"https://t.me/$un"]],
]
])
]);
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 30;
save("data/$from_id/coin.txt",$newcoin);
}
}


elseif($text1 == "📦| ویو پنل"){
if($coin >= 25){
file_put_contents("data/$from_id/state.txt","ViewPanel");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"?? آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 25 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "ViewPanel" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/ViewPanel.txt",$text);
file_put_contents("data/$from_id/state.txt","ViewPanel1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "ViewPanel1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}

mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/ViewPanel.txt");
$class = file_get_contents("source/ViewPanel/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/ViewPanel/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$class = file_get_contents("source/ViewPanel/eshtark.txt");
file_put_contents("LorexTeam/$un/eshtark.txt",$class);
$wordlist = file_get_contents("source/ViewPanel/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);

if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}

$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 25;
save("data/$from_id/coin.txt",$newcoin);
}
}


elseif($text1 == "🧽| اد شمار"){
if($coin >= 15){
file_put_contents("data/$from_id/state.txt","add");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 15 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "add" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/add.txt",$text);
file_put_contents("data/$from_id/state.txt","add1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "add1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}

mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/add.txt");
$class = file_get_contents("source/add/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/add/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/add/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 ?? ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);

if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}

$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 15;
save("data/$from_id/coin.txt",$newcoin);
}
}
//===========صصکی نوع اول===============
elseif($text1 == "نوع اول 💦"){
if($coin >= 16){
file_put_contents("data/$from_id/state.txt","hal");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @

⚠️ نکته : حتما با دستور /panel وارد پنل ربات خود شوید و چنل خودتونو از اونجا نیز تنظیم کنید
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 16 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "hal" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/hal.txt",$text);
file_put_contents("data/$from_id/state.txt","hal1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "hal1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/hal.txt");
$class = file_get_contents("source/hal/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/hal/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/hal/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
//==================================
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 16;
save("data/$from_id/coin.txt",$newcoin);
}
}



elseif($text1 == "💸| شرط بندی"){
if($coin >= 25){
file_put_contents("data/$from_id/state.txt","Shart");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @

⚠️ نکته : حتما با دستور /panel وارد پنل ربات خود شوید و چنل خودتونو از اونجا نیز تنظیم کنید
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 25 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "Shart" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/Shart.txt",$text);
file_put_contents("data/$from_id/state.txt","Shart1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "Shart1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/Shart.txt");
$class = file_get_contents("source/Shart/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/Shart/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$class = file_get_contents("source/Shart/eshtrak.txt");
file_put_contents("LorexTeam/$un/eshtrak.txt",$class);
$wordlist = file_get_contents("source/Shart/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
//==================================
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 25;
save("data/$from_id/coin.txt",$newcoin);
}
}

//============شماره دزد==============
elseif($text1 == "🦹‍♂| شماره دزد"){
if($coin >= 7){
file_put_contents("data/$from_id/state.txt","shomarh");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 7 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "shomarh" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
اشتباه است.
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/shomarh.txt",$text);
file_put_contents("data/$from_id/state.txt","shomarh1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "shomarh1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$class = file_get_contents("source/shomarh/send.php");
file_put_contents ("LorexTeam/$un/send.php","$class");
$channel = file_get_contents("data/$chat_id/shomarh.txt");
$class = file_get_contents("source/shomarh/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/shomarh/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/shomarh/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);

if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 7;
save("data/$from_id/coin.txt",$newcoin);
}
}


elseif($text1 == "👁‍🗨| ویوگیر"){
if($coin >= 30){
file_put_contents("data/$from_id/state.txt","ViewGir");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 30 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "ViewGir" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
اشتباه است 😑
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/ViewGir.txt",$text);
file_put_contents("data/$from_id/state.txt","ViewGir1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "ViewGir1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$class = file_get_contents("source/ViewGir/send.php");
file_put_contents ("LorexTeam/$un/send.php","$class");
$channel = file_get_contents("data/$chat_id/ViewGir.txt");
$class = file_get_contents("source/ViewGir/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/ViewGir/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$class = file_get_contents("source/ViewGir/eshtrak.txt");
file_put_contents("LorexTeam/$un/tshtrak.txt",$class);
$wordlist = file_get_contents("source/ViewGir/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);

if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 30;
save("data/$from_id/coin.txt",$newcoin);
}
}

elseif($text1 == "🎁| پنل همه کاره اینستاگرام"){
if($coin >= 18){
file_put_contents("data/$from_id/state.txt","instaPa");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 18 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "instaPa" && $text !="??| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/instaPa.txt",$text);
file_put_contents("data/$from_id/state.txt","instaPa1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "instaPa1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/instaPa.txt");
$class = file_get_contents("source/instaPa/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/instaPa/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/instaPa/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 18;
save("data/$from_id/coin.txt",$newcoin);
}
}


elseif($text1 == "🐺| ضدلینک"){
if($coin >= 30){
file_put_contents("data/$from_id/state.txt","Zdlink");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 30 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "Zdlink" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/Zdlink.txt",$text);
file_put_contents("data/$from_id/state.txt","Zdlink1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "Zdlink1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/Zdlink.txt");
$class = file_get_contents("source/Zdlink/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/Zdlink/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/Zdlink/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 30;
save("data/$from_id/coin.txt",$newcoin);
}
}



elseif($text1 == "🎓| پست گذاری کاربر"){
if($coin >=15){
file_put_contents("data/$from_id/state.txt","Post");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 15 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "Post" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/Post.txt",$text);
file_put_contents("data/$from_id/state.txt","Post1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "Post1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/Post.txt");
$class = file_get_contents("source/Post/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/Post/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/Post/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 15;
save("data/$from_id/coin.txt",$newcoin);
}
}


//===========مکان یاب=============
elseif($text1 == "🏕| مکان یاب"){
if($coin >= 5){
file_put_contents("data/$from_id/state.txt","MaKanYab");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @ 
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 5 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "MaKanYab" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/MaKanYab.txt",$text);
file_put_contents("data/$from_id/state.txt","MaKanYab1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "MaKanYab1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/MaKanYab.txt");
$class = file_get_contents("source/MaKanYab/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/MaKanYab/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/MaKanYab/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 5;
save("data/$from_id/coin.txt",$newcoin);
}
}

//==========تم تلگرام==============
elseif($text1 == "👨🏻‍🎤| تم تلگرام"){
if($coin >= 10){
file_put_contents("data/$from_id/state.txt","ThemeTel");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"
💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @
",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"??| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 10 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "ThemeTel" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/ThemeTel.txt",$text);
file_put_contents("data/$from_id/state.txt","ThemeTel1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "ThemeTel1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/ThemeTel.txt");
$class = file_get_contents("source/ThemeTel/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/ThemeTel/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/ThemeTel/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 10;
save("data/$from_id/coin.txt",$newcoin);
}
}

//============اعتراف گیر============
elseif($text1 == "😈| اعتراف گیر"){
if($coin >= 7){
file_put_contents("data/$from_id/state.txt","fal");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 7 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "fal" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if(strpos($text, '"') !== false && strpos($text, '.') !== false && strpos($text, '(') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}elseif(!preg_match('/^([a-zA-Z][a-zA-Z0-9_]{4,31}|)$/', $text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/fal.txt",$text);
file_put_contents("data/$from_id/state.txt","fal1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "fal1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
if($ok != 1){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/fal.txt");
$class = file_get_contents("source/fal/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/fal/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 7;
save("data/$from_id/coin.txt",$newcoin);
}
}

//==============پیامرسان===================
elseif($text1 == "📮| پیامرسان نوع یک"){
if($coin >= 8){
file_put_contents("data/$from_id/state.txt","pmrs");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 8 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "pmrs" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/pmrs.txt",$text);
file_put_contents("data/$from_id/state.txt","pmrs1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "pmrs1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐!
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/pmrs.txt");
$class = file_get_contents("source/pmrs/jdf.php");
file_put_contents ("LorexTeam/$un/jdf.php","$class");
$class = file_get_contents("source/pmrs/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/pmrs/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/pmrs/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);

if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 8;
save("data/$from_id/coin.txt",$newcoin);
}
}



elseif($text1 == "🧫| شارژ رایگان"){
if($coin >= 8){
file_put_contents("data/$from_id/state.txt","NetFree");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 8 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "NetFree" && $text !="??| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/NetFree.txt",$text);
file_put_contents("data/$from_id/state.txt","NetFree1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "NetFree1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐!
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/NetFree.txt");
$class = file_get_contents("source/NetFree/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/NetFree/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/NetFree/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);

if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 8;
save("data/$from_id/coin.txt",$newcoin);
}
}


elseif($text1 == "💀| هک تلگرام"){
if($coin >= 10){
file_put_contents("data/$from_id/state.txt","HackTel");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 10 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "HackTel" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/HackTel.txt",$text);
file_put_contents("data/$from_id/state.txt","HackTel1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "HackTel1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐!
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/HackTel.txt");
$class = file_get_contents("source/HackTel/jdf.php");
file_put_contents("LorexTeam/$un/jdf.php",$class);
$class = file_get_contents("source/HackTel/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/HackTel/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/HackTel/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);

if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 10;
save("data/$from_id/coin.txt",$newcoin);
}
}

//==============فونت ساز===============
elseif($text1 == "🤴| فونت ساز" or $text == "🖌️ | font maker"){
if($coin >= 8){
file_put_contents("data/$from_id/state.txt","fontsz");
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"💢 آیدی کانال خود را بدون @ ارسال کنید.
⚠️ توجه : بدون @",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🥀 امتیاز شما کافی نیست لطفاً امتیاز جمع آوری کنید مجدد به این بخش بازگردید.

💫 امتیاز مورد نیاز ~ | 8 |
🏅 امتیاز شما : $coin
",
'parse_mode'=>'HTML',
]);
}
}
elseif($state == "fontsz" && $text !="🔹| برگشت" ){
if($text[0] == '@')$text = substr($text, 1);
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "
❌ | آیدی ارسالی اشتباه میباشد!
",
]);
}
if((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'یوزر اشتباه است ⛔',
]);
}else{
file_put_contents("data/$chat_id/fontsz.txt",$text);
file_put_contents("data/$from_id/state.txt","fontsz1");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ توکن ربات خود را از @BotFather دریافت کنید و برای ربات ارسال کنید.",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔹| برگشت"]],
]
])
]);
}
}
elseif($state == "fontsz1"){
function objectToArrays( $object ){
if( !is_object( $object ) && !is_array( $object ))
{
return $object;
}
if( is_object( $object ))
{
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}
$userbot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getme"));
$resultb = objectToArrays($userbot);
$un = $resultb["result"]["username"];
$ok = $resultb["ok"];
		if($ok != 1  or (strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ توکن شما معتبر نمی باشد!

توکن خود را از @BotFather دریافت کنید 😐!
",
]);
}else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➖➖➖➖➖➖➖➖➖➖➖➖➖'
 ]);

if($type =="Gold"){
file_put_contents("LorexTeam/$un/data/bottype.txt","gold");
}else{
file_put_contents("LorexTeam/$un/data/bottype.txt","free");
}
mkdir("LorexTeam/$un");
mkdir("LorexTeam/$un/data");
file_put_contents("LorexTeam/$un/data/my_id.txt","$from_id");
file_put_contents("data/$from_id/state.txt","none");
$channel = file_get_contents("data/$chat_id/fontsz.txt");
$class = file_get_contents("source/fontsz/jdf.php");
file_put_contents ("LorexTeam/$un/jdf.php","$class");
$class = file_get_contents("source/fontsz/index.php");
file_put_contents("LorexTeam/$un/index.php",$class);
$class = file_get_contents("source/fontsz/Ho3win.php");
$class = str_replace("[*[TOKEN]*]",$text,$class);
$class = str_replace("[*[ADMIN]*]",$from_id,$class);
$class = str_replace("[*[USERNAME]*]",$un,$class);
$class = str_replace("[*[CHANNEL]*]",$channel,$class);
file_put_contents("LorexTeam/$un/Ho3win.php",$class);
$wordlist = file_get_contents("source/fontsz/wordlist.json");
file_put_contents("LorexTeam/$un/data/wordlist.json",$wordlist);
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/LorexTeam/".$un."/Ho3win.php");
file_put_contents("data/$from_id/create.txt","yes");
$users = file_get_contents('data/bots.txt');
$member = explode("\n",$users);
if (!in_array($un,$member)){
$add_bot = file_get_contents('data/bots.txt');
$add_bot .= $un."\n";
file_put_contents('data/bots.txt',$add_bot);
}
$user_b = file_get_contents("data/$from_id/bots.txt");
$member_b = explode("\n",$user_b);
if (!in_array($un,$member_b)){
$add_bot = file_get_contents("data/$from_id/bots.txt");
$add_bot .= $un."\n";
file_put_contents("data/$from_id/bots.txt",$add_bot);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
 🔌 ربات شما با موفقیت به سرور پر قدرت ما متصل شد.
 جهت ورود به ربات روی دکمه زیر کلیک کنید :
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↗️ ورود به ربات",'url'=>"https://t.me/$un"]],
]
])
]);

if (!file_exists('DataBots/' . $from_id)) {
    file_put_contents('DataBots/' . $from_id, '1');
} else {
    file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) + 1);
}
$coin = file_get_contents("data/$from_id/coin.txt");
settype($coin,"integer");
$newcoin = $coin - 8;
save("data/$from_id/coin.txt",$newcoin);
}
}


elseif($text1 == "حذف همه ربات های ساخته شده 🗑"){ 
 file_put_contents("data/$from_id/state.txt","none"); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"آیا واقعا ربات ها را حذف کنم 😳؟", 
'parse_mode'=>"MarkDown",   
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[['text'=>"حذف کن??"],['text'=>"▶️ بازگشت"]],
], 
"resize_keyboard" => true ,
"one_time_keyboard" => true,

]) 
]);
file_put_contents('data/'.$from_id."/step.txt","none");
exit;
}

//=================================
elseif($text1 == "🎈 هدیه روزانه"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
🏕 به بخش امتیاز روزانه خوش آمدید
🔸کاربر $first_name عزیز یک گزینه را برای افزایش امتیاز انتخاب کنید.",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
  'resize_keyboard'=>true,
  'keyboard'=>[
  [['text'=>"🤍"],['text'=>"🖤"],['text'=>'🤎']],
  [['text'=>"💚"],['text'=>"💙"],['text'=>'💛']],
    [['text'=>"❤️"],['text'=>"🧡"],['text'=>'💜']],
   [['text'=>'▶️ بازگشت']],
   ]
  ])
]);
}

elseif($text1 == "❤️" or $text1 == "🧡" or $text1 == "💛" or $text1 == "💚"or $text1 == "💙" or $text1 == "💜"or $text1 == "🤍"or $text1 == "🖤" or $text1 == "🤎" ){
    $d = file_get_contents("data/$from_id/date.txt");
      date_default_timezone_set('Asia/Tehran');
       $t = date('Y/m/d');
      if($d != $t){
      $x = rand(1,2);
      $coin += $x;
      file_put_contents("data/$from_id/coin.txt", $coin);
file_put_contents("data/$from_id/date.txt", $t);

      bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🔥 هدیه امروز شما $x سکه است
➖➖➖➖➖➖➖➖➖➖➖➖➖
💎 موجودی جدید شما : $coin سکه
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"♥️",'url'=>"https://t.me/BOT_SAZ_DARK"]],
]
])
]);
    } else {
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❌ | شما هدیه روزانه امروز را دریافت کرده اید.",'parse_mode'=>'MarkDown',
     ]);
    }
}

//==================//
elseif($text1 == "/creator"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
♥️ @Reza_id_tell 
",
]);
}
elseif($text1 == "🗑 حذف ربات"){
if($created == "yes"){
file_put_contents("data/$from_id/state.txt","deleterob");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
👈 آیدی ربات خود را بدون داشتن @
ارسال کنید :

🔖 نمونه صحیح : TelegramBot
 ➖➖➖➖➖➖➖➖➖➖➖➖➖
*✅ به حروف های #کوچک و #بزرگ ربات خود حتما دقت کنید.*
",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
]
])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🥀شما ربات فعالی در سرور رباتساز ما  ندارید.",
'parse_mode'=>'Markdown', 
]);
}
}


elseif($state =="deleterob" && $text !="▶️ بازگشت"){
if($chat_id != $my_id  or  ((strlen($text) >50 ) or strpos($text, '/') or strpos($text, '(') or strpos($text, ')') or strpos($text, '}') or strpos($text, '{') or strpos($text, ']') or strpos($text, '[') or strpos($text, '"') !== false))



{ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
❌ خطا

🚫 شما ادمین این ربات نیستید! 
 یا اینکه این ربات توسط سرور ما ساخته نشده است!

⚠️ حتماً عیناً آیدی ربات خود را ارسال کنید.",
]);
}else{ 
deletefolder("LorexTeam/$text"); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"✅ ربات شما با آیدی @$text
 از سرور ما حذف شد", 
]);
 file_put_contents('DataBots/' . $from_id, file_get_contents('DataBots/' . $from_id) - 1); 
} 
}



elseif($text1 == "🎊 | سکه همگانی" && $chat_id == $Dev){
file_put_contents("data/$from_id/step.txt","coin to all");
        bot('sendMessage', [
                'chat_id' =>$chat_id,
                'text' =>"✅ | مقدار سکه همگانی را وارد کنید !",
				'reply_to_message_id' => $message_id,
               'parse_mode'=>'HTML',
			       'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'/panel']],
      ],'resize_keyboard'=>true])
	]);
}

elseif($bot == "coin to all"){
if(preg_match('/^([0-9])/',$text)){
file_put_contents("data/$from_id/wait.txt",$text);
file_put_contents("data/$from_id/step.txt","coin to all 2");
        bot('sendMessage', [
                'chat_id' =>$chat_id,
                'text' =>"⁉️ آیا ارسال $text سکه به تمام کاربران ربات را تایید میکنید ؟

بله یا خیر؟",
				'reply_to_message_id' => $message_id,
               'parse_mode'=>'HTML',
			       'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'/panel']],
	  [['text'=>"خیر"],['text'=>"بله"]],
      ],'resize_keyboard'=>true])
	]);
}else{
        bot('sendMessage', [
                'chat_id' =>$chat_id,
                'text' =>"⚠️ ورودی نامعتبر است !
👈🏻 لطفا فقط عدد ارسال کنید :",
				'reply_to_message_id' => $message_id,
               'parse_mode'=>'HTML',
			       'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'/panel ']],
      ],'resize_keyboard'=>true])
	]);
}
}
elseif($bot == "coin to all 2"){
if($text == "خیر"){
unlink("data/$from_id/wait.txt");
file_put_contents("data/$from_id/step.txt",'none');
        bot('sendMessage', [
                'chat_id' =>$chat_id,
                'text' =>"✅ با موفقیت لغو شد !",
				'reply_to_message_id' => $message_id,
               'parse_mode'=>'HTML',
        	'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'/panel']],
      ],'resize_keyboard'=>true])
	]);
}
elseif($text == "بله"){
$Member = explode("\n",$list);
$count = count($Member)-2;
file_put_contents("data/$from_id/step.txt",'none');
for($z = 0;$z <= $count;$z++){
$user = $Member[$z];
if($user != "\n" && $user != " "){
	$id = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$user));
	$user2 = $id->result->id;
if($user2 != null){
$coin = file_get_contents("data/$user/coin.txt");
file_put_contents("data/$user/coin.txt",$coin + $wait);
        bot('sendMessage', [
                'chat_id' =>$user,
                'text' =>"
*🌹کاربر گرامی 
🎉 برای قدردانی از شما مقدار $wait امتیاز به حساب شما ارسال شد.*
/start 
",
               'parse_mode'=>'MarkDown'
	]);
}
}
}
unlink("data/$from_id/wait.txt");
        bot('sendMessage', [
                'chat_id' =>$chat_id,
                'text' =>"✅ با موفقیت به تمام اعضا مقدار $wait سکه ارسال شد !",
				'reply_to_message_id' => $message_id,
               'parse_mode'=>'HTML',
        	'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'/panel']],
      ],'resize_keyboard'=>true])
	]);
}else{
        bot('sendMessage', [
                'chat_id' =>$chat_id,
                'text' =>"💢 لطفا فقط از کیبورد زیر انتخاب کنید :",
				'reply_to_message_id' => $message_id,
               'parse_mode'=>'HTML',
			       'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'/panel']],
	  [['text'=>"خیر"],['text'=>"بله"]],
      ],'resize_keyboard'=>true])
	]);
}
}
elseif($text1 == "/panel"){
if($from_id == $Dev){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"مدیر عزیز به پنل مدیریت خوش آمدید 🌹",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔖 دریافت لیست ممبر"]],
[['text'=>"پیام به کاربر📭"],['text'=>"‼️ | اطلاعات کاربر"]],
[['text'=>'🎊 | سکه همگانی'],['text'=>'🛠 | حذف ربات']],
[['text'=>"⚠️ | اخطار به کاربر"],['text'=>"🎉 | ساخت کد هدیه"]],
[['text'=>'💎 | ارسال سکه'],['text'=>'💎 | کسر سکه']],
[['text'=>'✅ | روشن ربات'],['text'=>'❌ | خاموش ربات']],
[['text'=>'📊 | آمار ربات'],['text'=>'ربات ها 📮'],['text'=>'🔔 رباتساز ها']],
[['text'=>"حذف اسپم ها 🌀"],['text'=>"📛صفر کردن امتیاز"]],
[['text'=>'آنبلاک کردن ✅'],['text'=>'❌ | بلاک کاربر']],
[['text'=>"حذف همه ربات های ساخته شده 🗑"]],
[['text'=>"📨 | پیام همگانی"],['text'=>"📨 فوروارد پیام"]],
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
sendMessage($chat_id,"
⚠️ شما اجازه دسترسی به این بخش را ندارید","HTML");
}
}
if($text == "📨 فوروارد پیام"){
file_put_contents("data/$from_id/step.txt","forr");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"پیام خود را به ربات 📨 فوروارد کنید.",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"/panel"]],
]
])
]);
}
elseif($step == "forr" && $text != "/panel"){
file_put_contents("data/$from_id/step.txt","none");
$user = file_get_contents("users.txt");
$all_member = explode("\n",$user); 
for ($i=0;$i<=count($all_member)-1;$i++){ 
$koja = $all_member["$i"];
bot('ForwardMessage',[
'chat_id'=>$koja,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id]);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"پیام شما با موفقیت به تمام اعضا فروارد شد✅",
]);
}

elseif($text1 == "💎 | کسر سکه" && $from_id == $Dev){
file_put_contents("data/$from_id/step.txt","kasremm");
bot('sendmessage',[
'chat_id' => $Dev,
'text' =>"🍇ایدی عددی کاربر را وارد کنید:",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"Back | برگشت"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif($step == "kasremm" && $text !="Back | برگشت" ){
file_put_contents("data/$from_id/step.txt","kasrem");
$text20 = $message->text;
file_put_contents("data/$from_id/token.txt",$text20);
$coin1 = file_get_contents("data/$text20/coin.txt");
bot('sendmessage', [
'chat_id' => $Dev,
'text' =>"
این فرد $coin1 امتیاز دارد
چه مقدار امتیاز کسر شود؟
",
]);
}
elseif($step == "kasrem"){
file_put_contents("data/$from_id/step.txt","none");
$text20 = $message->text;
$coin = file_get_contents("data/$to/coin.txt");
settype($coin,"integer");
$newcoin = $coin - $text20;
save("data/$to/coin.txt",$newcoin);
$cooin = $coin - $text20;
bot('sendmessage', [
'chat_id' => $Dev,
'text' =>"به فرد $text20 سکه کسر شد و سکه های او تا الان $cooin میباشد!",
]);
bot('sendmessage',[
'chat_id' => $to,
'text' =>"مقدار $text20 امتیاز از شما کسر شد! 🍒",
]);
}

elseif($text1 == "⚠️ | اخطار به کاربر" && $chat_id == $Dev){
file_put_contents("data/$from_id/Ho3win.txt","iQeuclclco");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ایدی فرد را ارسال کنید",
'parse_mode'=>"HTML",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif($Ho3win == "iQeuclclco" && $text !="بازگشت به منوی اصلی🔙" ){
file_put_contents("data/$from_id/Ho3win.txt","sendpQefjcpm");
file_put_contents("data/$from_id/info.txt","$text");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تعداد اخطاری که میخوایید بهش بدید؟",
'parse_mode'=>"HTML",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif($Ho3win == "sendpQefjcpm"){
file_put_contents("data/$from_id/Ho3win.txt","none");
$info = file_get_contents("data/$from_id/info.txt");
file_put_contents("data/$info/warn.txt",$text);
bot('sendMessage',[
'chat_id'=>$info,
'text'=>"
⚠️شما از طرف مدیریت مقدار $text اخطار دریافت کردید 

⛔️بعد از رسیدن به 3 اخطار از ربات مسدود خواهید شد
",
'parse_mode'=>'HTML',
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"اخطار با موفقیت ارسال شد",
'parse_mode'=>'HTML',
]);
}

elseif($text1 == "🛠 | حذف ربات" && $chat_id == $Dev){
file_put_contents("data/$from_id/step.txt","delezi");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🛡ایدی ربات خود را وارد کنید.......!
ایدی ربات را بدون | @ |  وارد کنید !
",
]);
}
elseif($step =="delezi" && $text !="▶️ بازگشت" ){
file_put_contents("data/$from_id/step.txt","none");
deletefolder("LorexTeam/$text");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ربات حذف شد ✅",
'parse_mode'=>"MarkDown",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true,
])
]);
}

elseif($text1 == "📊 | آمار ربات" && $chat_id == $Dev){
$user = file_get_contents("users.txt");
$member_id = explode("\n",$user);
$member_count = count($member_id) -1;
sendMessage($chat_id , "
*🖥 آمار کاربران ربات :* ($member_count)

 *⚡️ پینگ ربات : $load[0]*
〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️〰️
`⏳ ساعت : $time
🗓 تاریخ : $ambar`
" , "MarkDown");
}
elseif($text1 == "📨 | پیام همگانی" && $chat_id == $Dev){
file_put_contents("data/$from_id/step.txt","pm");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📨 | پیام خود را ارسال کنید !",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'▶️ بازگشت']],
],
'resize_keyboard'=>true
])
]);
}
elseif($step == "pm" && $text !="▶️ بازگشت" ){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📥 | پیام شما با موفقیت ارسال شد !",
]);
$all_member = fopen( "users.txt", "r");
while( !feof( $all_member)){
$user = fgets( $all_member);
sendMessage($user,$text1,"HTML");
}
}
elseif($text1 == "💎 | ارسال سکه" && $from_id == $Dev){
file_put_contents("data/$from_id/step.txt","fromidforcoin");
bot('sendMessage',[
'chat_id' => $Dev,
'text' =>"✅ | ایدی عددی کاربر مورد نظر را ارسال کنید !",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif($step == "fromidforcoin" && $text !="▶️ بازگشت" ){
file_put_contents("data/$from_id/step.txt","tedadecoin4set");
$text20 = $message->text;
file_put_contents("data/$from_id/token.txt",$text20);
$coin1 = file_get_contents("data/$text20/coin.txt");
bot('sendMessage', [
'chat_id' => $Dev,
'text' =>"
♻️ | این فرد $coin1 سکه دارد !
چقدر امتیاز به این کاربر گرامی سکه ارسال شود ؟
",
]);
}
elseif($step == "tedadecoin4set"){
file_put_contents("data/$from_id/step.txt","none");
$text20 = $message->text;
$coin = file_get_contents("data/$to/coin.txt");
settype($coin,"integer");
$newcoin = $coin + $text20;
save("data/$to/coin.txt",$newcoin);
$cooin = $coin + $text20;
bot('sendMessage', [
'chat_id' => $Dev,
'text' =>"به فرد $text20 سکه اضافه شد و سکه های او تا الان $cooin میباشد!",
]);
bot('sendMessage',[
'chat_id' => $to,
'text' =>"🎊 | از طرف مدیریت ربات به شما $text20 سکه ارسال شد !",
]);
}
//===
elseif($text1 == "پنل"){
if($from_id == $Dev){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"مدیر عزیز به پنل مدیریت خوش آمدید 🌹",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔖 دریافت لیست ممبر"]],
[['text'=>"پیام به کاربر📭"],['text'=>"‼️ | اطلاعات کاربر"]],
[['text'=>'🎊 | سکه همگانی'],['text'=>'🛠 | حذف ربات']],
[['text'=>"⚠️ | اخطار به کاربر"],['text'=>"🎉 | ساخت کد هدیه"]],
[['text'=>'💎 | ارسال سکه'],['text'=>'💎 | کسر سکه']],
[['text'=>'✅ | روشن ربات'],['text'=>'❌ | خاموش ربات']],
[['text'=>'📊 | آمار ربات'],['text'=>'ربات ها 📮'],['text'=>'🔔 رباتساز ها']],
[['text'=>"حذف اسپم ها 🌀"],['text'=>"📛صفر کردن امتیاز"]],
[['text'=>'آنبلاک کردن ✅'],['text'=>'❌ | بلاک کاربر']],
[['text'=>"حذف همه ربات های ساخته شده 🗑"]],
[['text'=>"📨 | پیام همگانی"],['text'=>"📨 فوروارد پیام"]],
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true
])
]);
}else{
sendMessage($chat_id,"
⚠️ شما اجازه دسترسی به این بخش را ندارید","HTML");
}
}



elseif($text1 == "❌ | بلاک کاربر" && $chat_id == $Dev){
file_put_contents("data/$from_id/Ho3win.txt","shar");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا ایدی فرد مورد نظر را ارسال کنید",
]);
}
elseif($Ho3win == "shar" && $text !="▶️ بازگشت" ){
file_put_contents("data/$from_id/shar.txt","$text");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
ایدی $text از ربات بلاک شد
",
]);
$adduser = file_get_contents("data/blocklist.txt");
$adduser .= $text . "\n";
file_put_contents("data/blocklist.txt", $adduser);
file_put_contents("data/$from_id/Ho3win.txt","no");
$id11 = file_get_contents("data/$from_id/shar.txt");
bot('sendMessage',[
'chat_id'=>$id11,
'text'=>"
📛 بدلیل رعایت نکردن قوانین حساب شما مسدود شد.

🆘 پشتیبانی : @REZA_ID_TELL

🆘 ربات پشتیبانی : @PV_RESON_ROBOT
",
]);
}

elseif($text1 == "آنبلاک کردن ✅"){
file_put_contents("data/$from_id/step.txt","none");
file_put_contents("data/$from_id/step.txt","sharr");
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا ایدی عددی کاربر مورد نظر رو ارسال کنید",
]);
}
elseif($step == "sharr" && $text !="▶️ بازگشت" ){
$newlist = str_replace($text, "", $blocklist);
file_put_contents("data/blocklist.txt", $newlist);
file_put_contents("data/$chat_id/step.txt", "No");
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
خب ایدی $text از بلاکی درآمد 😎
",
]);
}

elseif($text1 == "ربات ها 📮" && $chat_id == $Dev){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
$Bots کل ربات های ساخته شده:
",
]);
}
elseif($text1 == "🔔 رباتساز ها" && $chat_id == $Dev){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
💎 رباتساز های ساخته شده :
@$botsaz
",
]);
}
elseif($text1 == "🛠 | حذف ربات" && $chat_id == $Dev){
file_put_contents("data/$from_id/man.txt","delezi");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🛡ایدی ربات خود را وارد کنید.......!
ایدی ربات را بدون | @ |  وارد کنید !
",
]);
}
elseif($man =="delezi" && $text !="▶️ بازگشت" ){
file_put_contents("data/$from_id/man.txt","none");
deletefolder("LorexTeam/$text");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ربات حذف شد ✅",
'parse_mode'=>"MarkDown",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true,
])
]);
}



elseif($text == '🎉 | ساخت کد هدیه' && $chat_id == $Dev){
file_put_contents("data/$from_id/step.txt","code free");
file_put_contents("data/$from_id/kodomadmin.txt", "$first_name");
 bot('sendMessage',[
     'chat_id'=>$chat_id,
     'text'=>"☢ کد مورد نظر رو وارد کنید",
     'parse_mode'=>'html'
 ]);
}
elseif($bot == "code free"){
file_put_contents("data/$from_id/step.txt","number coins");
file_put_contents("admin/code/$text.txt","false");
file_put_contents("data/$from_id/amir.txt",$text);
 bot('sendMessage',[
     'chat_id'=>$chat_id,
     'text'=>"حالا تعداد سکه ها را تعیین کنید.",
     'parse_mode'=>'html'
 ]);
}
elseif($bot == "number coins"){
file_put_contents("admin/coins/$amir.txt",$text);
file_put_contents("data/$from_id/step.txt","none");
 bot('sendMessage',[
     'chat_id'=>$chat_id,
     'text'=>"☢ کد ثبت شد.",
     'parse_mode'=>'html'
 ]);
  sleep(0);
bot('sendMessage',[
'chat_id'=> -1001847030160,
     'text'=>"
🎉 ⭐️ آماده باشید تا دقایقی دیگر کد هدیه $text امتیازی داخل کانال قرار خواهد گرفت.
",
     'parse_mode'=>'html'
 ]);
    
sleep(5);
 bot('SendPhoto', [
'chat_id'=> -1001847030160,
'photo'=>"https://dynamic.brandcrowd.com/asset/logo/04b9a206-5673-46a2-b548-df7131c8d6cf/logo?v=4&text=$amir",
'caption'=>"
🌹 کد هدیه جدید ساخته شد

🎃 کانال ما : @BOT_SAZ_DARK 
",
'parse_mode'=>'HTML',
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"💫 دارک بات",'url'=>"https://t.me/BOT_SAZDARKBOT"]],
]
])
]);
}

elseif($text1 == "پیام به کاربر📭" && $chat_id == $Dev){
file_put_contents("data/$from_id/Ho3win.txt","info");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا شناسه کاربر را وارد کنید💉",
]);
}
elseif($Ho3win == "info" && $text !="▶️ بازگشت" ){
file_put_contents("data/$from_id/Ho3win.txt","sendpm");
file_put_contents("data/$from_id/info.txt","$text");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا پیام خود را وارد کنید✏",
'parse_mode'=>"HTML",  
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif($Ho3win == "sendpm"){
file_put_contents("data/$from_id/Ho3win.txt","none");
file_put_contents("data/$from_id/sendpm.txt","$text");
$sendpm = file_get_contents("data/$from_id/sendpm.txt");
$info = file_get_contents("data/$from_id/info.txt");
bot('sendMessage',[
'chat_id'=>$info,
'text'=>"
*🔖 | شما یک پیام از پشتیبانی دریافت کردید.*

💬 | پیام ارسال شده :

$sendpm

➖➖➖➖➖➖➖➖➖➖➖➖➖

▫️ کد پیام: `$message_id`
💭 ساعت : $time
🗓️ تاریخ   : $ambar
",
'parse_mode'=>'MarkDown',
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"پیام شما به کاربر مورد نظر ارسال شد📮",
'parse_mode'=>'HTML',
]);
}

elseif($text1 == "آمار 🚀" && $chat_id == $Dev){
$user = file_get_contents("users.txt");
$member_id = explode("\n",$user);
$member_count = count($member_id) -1;
sendMessage($chat_id , "
📈📉 :  $member_count
" , "html");
}

elseif($step == "pm" && $text !="▶️ بازگشت" ){
file_put_contents("data/$from_id/step.txt","none");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"پیام شما فرستاده شد 💫",
]);
$all_member = fopen( "users.txt", "r");
while( !feof( $all_member)){
$user = fgets( $all_member);
sendMessage($user,$text1,"html");
}
}
elseif($text1 == "💎 | ارسال سکه" && $from_id == $Dev){
file_put_contents("data/$from_id/step.txt","fromidforcoin");
bot('sendMessage',[
'chat_id' => $Dev,
'text' =>"🍇ایدی عددی کاربر را وارد کنید:",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"▶️ بازگشت"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif($step == "fromidforcoin" && $text !="▶️ بازگشت" ){
file_put_contents("data/$from_id/step.txt","tedadecoin4set");
$text20 = $message->text;
file_put_contents("data/$from_id/token.txt",$text20);
$coin1 = file_get_contents("data/$text20/coin.txt");
bot('sendMessage', [
'chat_id' => $Dev,
'text' =>"
این فرد $coin1 امتیاز دارد
چه مقدار امتیاز  اضافه کنم؟
",
]);
}


elseif($step == "tedadecoin4set "){
file_put_contents("data/$from_id/step.txt","none");
$text20 = $message->text;
$coin = file_get_contents("data/$to/coin.txt");
settype($coin,"integer");
$newcoin = $coin + $text20;
save("data/$to/coin.txt",$newcoin);
$cooin = $coin + $text20;
bot('sendMessage', [
'chat_id' => $Dev,
'text' =>"به فرد $text20 سکه اضافه شد و سکه های او تا الان $cooin میباشد!",
]);
bot('sendMessage',[
'chat_id' => $to,
'text' =>"از طرف مالک ربات شما  $text20 سکه دریافت کردید . 🙂",
]);
}


elseif($text1 == "‼️ | اطلاعات کاربر" && $chat_id == $Dev){
file_put_contents("data/$from_id/step.txt","informatin");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ایدی عددی شخص را ارسال کنید.",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'/panel']],
],
'resize_keyboard'=>true
])
]);
}
elseif($step == "informatin" && $text !="🔙" ){
file_put_contents("data/$from_id/step.txt","$text");
$zirs = file_get_contents('data/'.$text."/membrs.txt");
$hesab = file_get_contents('data/'.$text."/type.txt");
$coin = file_get_contents('data/'.$text."/coin.txt");
$phone = file_get_contents('data/'.$text."/bots.txt");
$txtt = file_get_contents("data/$text/mems.txt");
$member_id = explode("\n",$txtt);
$mm1 = count($member_id)-1;
unset($member_id[$mm1]);
foreach($member_id as $id => $value){
$new .= "[$value](tg://user?id=$value)\n";
}
sendMessage($chat_id,"
نوع حساب کاربر: $hesab 
پیوی کاربر: [$text](tg://user?id=$text) 
موجودی کاربر : $coin
زیرمجوعه های شخص :$zirs
ربات های شخص : $phone
 ","MarkDown","true");
}
elseif($text1 == "❌ | خاموش ربات"&& $from_id == $Dev){
file_put_contents("data/onof.txt","off");
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"〽️ | ربات با موفقیت خاموش شد",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"/panel"],
],
]
])
]);
}

elseif($text1 == "✅ | روشن ربات"&& $from_id == $Dev){
file_put_contents("data/onof.txt","on");
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"〽️ | ربات با موفقیت روشن شد",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[
['text'=>"/panel"],
],
]
])
]);
}

if($text == "حذف کن🩸" && $chat_id == $Dev ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"همه ربات ها با موفقیت حذف شد 😑🦖",
]);
deleteFolder('LorexTeam');
sleep('2');
mkdir('LorexTeam');
}


 elseif($text == "🔖 دریافت لیست ممبر" && $chat_id == $Dev ){
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('senddocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("users.txt"),
'caption'=>"👌 لیست آیدی عددی افراد ربات!"
]);
}

if($text1 == "حذف اسپم ها 🌀"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"اسپم ها با موفقیت حذف شدند✅",
]);
deleteFolder('data/spam');
sleep('2');
mkdir('data/spam');
}


elseif($text1 == "📛صفر کردن امتیاز" && $chat_id == $Dev){
file_put_contents("data/$from_id/step.txt","em0");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👩‍💻 لطفا آیدی عددی کاربری که میخواهید تعداد امتیازات او را 0 را ارسال کنید :",
]);
}
elseif($step == "em0" && $text !="▶️ بازگشت" ){
$aaddd = file_get_contents("data/$text/coin.txt");
file_put_contents("data/$text/coin.txt","0");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🔪 امتیاز های او صفر شد
",
]);
bot('sendMessage',[
'chat_id'=>$text,
'text'=>"🔥امتیازات شما به دلیل آوردن زیرمجموعه فیک حذف شدند!",
]);
file_put_contents("data/$from_id/step.txt","none");
}

/*
(بسم الله الرحمن الرحیم)

🔰 منبع اصلی سورس : @Mr_Ho3win | لورکس تیم

👈 ارتقا و دیباگ : @BOT_SAZ_DARK

 سورس تروکس اصلاح شده و بسیاری از باگ های آن رفع شده همچنین ربات های جدیدی اضافه شده
*/

unlink('error_log');
?>