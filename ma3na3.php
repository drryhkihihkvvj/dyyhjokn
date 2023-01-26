  <?php
ob_start();
define('API_KEY','توكن');
$admin = 1390519416;
echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

//»»»»»»»»»»»»»»»»»»
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$from_id = $message->from->id;
date_default_timezone_set('Asia/Riyadh');
$date = date('h:i:s'); $d = date('A');
 $aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
date_default_timezone_set('Asia/Baghdad');

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$name = $message->from->first_name;
$username = $message->from->username;
$chat_id = $message->chat->id;
$text = $message->text;
$from_id = $message->from->id;
$tkk = json_decode(file_get_contents('tkk.json'),true);
date_default_timezone_set('Asia/Riyadh');
$date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
 
$update = json_decode(file_get_contents('php://input'));
$message = $update->message; $chat_id = $message->chat->id;
$from_id = $message->from->id; $name = $message->from->first_name; $text = $message->text;
$mid = $message->message_id; $name2 = $update->callback_query->from->first_name; $message_id2 = $update->callback_query->message->message_id; $chat_id2 = $update->callback_query->message->chat->id;
$from_id2 = $update->callback_query->from->id; $message_id = $update->callback_query->message->message_id; $data = $update->callback_query->data;
$info_token = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo"); $info_tokens = json_decode($info_token);
$get_files = file_get_contents('nt7bot.php'); $get_done = file_get_contents('infos/explode.php');
$done = explode("\n", $get_done);
$get_id = file_get_contents('infos/nt7bothloobotsyria.txt'); $get_ids = explode("\n", $get_id);
$from_id = $message->from->id;
mkdir("infos");
mkdir("geme");
//======================================================//
$urls="https://example.com/";//رابط استضافه
//»»»»»»»»»»»»»»»»»»
if($data == 'addbot' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
bot('editMessageText',
['chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
⚠️꒐ لديك بوت من المصنع بالفعل .
*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• رجوع •','callback_data'=>'cancle']]
]])
]);return false;
}

if($text == '/start' and !in_array($from_id, $get_ids)){
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*
◾أهلا بك في صانع بوتات اشتراك الاجباري 👋🏻 ،
*
◽البوت مقدم من قناة » . [ سيرو .](https://t.me/SeroBots)

◾يمكنك الان صنع بوت واحد فقط من صانع البوتات

     عليك استخدام اوامر التحكم اسفل وبدء الانشاء🔻
⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯
[⚙️꒐ سيرو .](https://t.me/SeroBots)
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حذف البوت ✖️','callback_data'=>'delete'],['text'=>'صنع بوت ➕','callback_data'=>'addbot']],
[['text'=>'‹ شرح انشاء توكن ›','callback_data'=>'help'],['text'=>'الدعم ⚙️', 'callback_data'=>"hkt"]],],])]);}
if($data == 'addbot' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){file_put_contents('infos/nt7bothloobotsyria.txt', "\n" . $chat_id2 . "\n",FILE_APPEND); bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"*
📭꒐ قم بارسال توكن البوت الان :
*
",'parse_mode'=>"markdown",
'reply_markup'=>json_encode(['inline_keyboard'=>
[[['text'=>'• رجوع •','callback_data'=>'cancle']],
]])
]);
}

if($data == 'addbot' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('infos/nt7bothloobotsyria.txt', "\n" . $chat_id2 . "\n",FILE_APPEND); 
bot('editMessageText',
['chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
📭꒐ قم بارسال توكن البوت الان :
*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• رجوع •','callback_data'=>'cancle']],
]])
]);
}



if($text and in_array($from_id, $get_ids) and $info_tokens->ok == "true" ){
    if($info_tokens->ok == "true"){
for($i = $mid - 3; $i < $mid; $i++){bot('deleteMessage',[
'chat_id'=>$chat_id,'message_id'=>$i]);}
$str = str_replace($from_id, '', $get_id);    
file_put_contents('infos/nt7bothloobotsyria.txt', $str);    
file_get_contents("https://api.telegram.org/bot$text/sendMessage?chat_id=$chat_id&text=شكرا لاستخدامك سورس سيرو ✅");
file_put_contents('infos/explode.php', $from_id . "\n", FILE_APPEND);
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$userbot = $json_info->result->username;
$idbot =  $json_info->result->id;
$namebot =  $json_info->result->first_name;
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"*

✅꒐ تم صنع البوت الخاص بك بنجاح .
*
- أسم البوت › [$namebot](https://t.me/$userbot)

- معرف البوت › @$userbot
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• رجوع •','callback_data'=>"cancle"]],
]])]); 




bot('sendMessage',['chat_id'=>$admin,'text'=>"

٭ تم صنع بوت جديد في الصانع الخاص بك 📝
            -----------------------
• معلومات الشخص الذي صنع البوت .

• الاسم : $nsme
• المعرف : @$username
• الايدي : `$from_id`
            -----------------------
• نوع البوت المصنوع : شتراك اجباري
• معرف البوت المصنوع : @$userr
            -----------------------
",'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",]);
mkdir("geme/$from_id");
$nt7botnesb_sy = '<?php $nt7bot_id = "'.$from_id.'"; $tk = "'.$text.'"; ?>';
file_put_contents("geme/$from_id/SeroBots.php","$nt7botnesb_sy \n $get_files");
file_put_contents("info.txt",$from_id ."\n",FILE_APPEND);
file_put_contents("geme/$from_id/chat.php", $from_id . "\n");
file_put_contents("geme/$from_id/index.html","$index");
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=$urls/geme/$from_id/SeroBots.php");
    $tkk[$from_id] = ($tkk[$from_id]=$text);
    file_put_contents('tkk.json',json_encode($tkk));
file_put_contents("geme/index.html","$index");
file_put_contents("zreaf/	geme/$from_id","$index");
}else{
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"⚠️꒐ التوكن خطأ ارسل توكن صالح",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>'• رجوع •','callback_data'=>'cancle']]]])]);}}

if($data == 'cancle' and in_array($from_id, $get_ids)){
$str = str_replace($chat_id2, "", $get_id) ;
file_put_contents('infos/nt7bothloobotsyria.txt', $str);
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"*
◾أهلا بك في صانع بوتات اشتراك الاجباري 👋🏻 ،
*
◽البوت مقدم من قناة » . [ سيرو .](https://t.me/SeroBots)

◾يمكنك الان صنع بوت واحد فقط من صانع البوتات

     عليك استخدام اوامر التحكم اسفل وبدء الانشاء🔻
⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯
[⚙️꒐ سيرو .](https://t.me/SeroBots)

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حذف البوت ✖️','callback_data'=>'delete'],['text'=>'صنع بوت ➕','callback_data'=>'addbot']],
[['text'=>'‹ شرح انشاء توكن ›','callback_data'=>'help'],['text'=>'الدعم ⚙️', 'callback_data'=>"hkt"]],],])]);}
if($data == 'home'){
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"*
◾أهلا بك في صانع بوتات اشتراك الاجباري 👋🏻 ، 
*
◽البوت مقدم من قناة » . [ سيرو .](https://t.me/SeroBots)

◾يمكنك الان صنع بوت واحد فقط من صانع البوتات

     عليك استخدام اوامر التحكم اسفل وبدء الانشاء🔻
⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯
[⚙️꒐ سيرو .](https://t.me/SeroBots)
*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حذف البوت ✖️','callback_data'=>'delete'],['text'=>'صنع بوت ➕','callback_data'=>'addbot']],
[['text'=>'‹ شرح انشاء توكن ›','callback_data'=>'help'],['text'=>'الدعم ⚙️', 'callback_data'=>"hkt"]],],])]);}
if($data == 'help'){
bot('editMessageText',
['chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
- مرحبا بك عزيزي في قسم الشرح : 👤
 • لأنشاء بوت جديد اتبع مايلي :
 - اذهب الى بوت فاذر : @BotFather
2-ارسل الامر /newbot
3- ارسل اسم للبوت كمثال : Lose
4- ارسل معرف للبوت شرط بالنهايه bot
 كمثال لمعرف البوت :  @h9ebot
 بعدها يظهر الك رساله تحتوي على التوكن 
كمثال للتوكن : 5202924365:AAEQ 
 5- قم بأرسال التوكن لصنع بوتك 
⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯
-قناة السورس @SeroBots
- بوت تواصل دعم السورس : @SHGBOT
*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• رجوع •','callback_data'=>'cancle']]
]])
]);
}
//============================//
if($data == 'delete' and in_array($chat_id2,$done)){bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>'*
⁉️꒐ هل انت متأكد من حذف بوتك .؟
*
','parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'الـغاء ✖', 'callback_data'=>'home'],['text'=>'تأكـيـد ✅','callback_data'=>'yesdel'],]]])]);}
if($data == 'yesdel' and in_array($chat_id2, $done)){bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"*
☑️꒐ تم حذف وايقاف البوت بنجاح
*
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'• رجوع •','callback_data'=>"cancle"]]]])]);
$str1 = str_replace($chat_id2, '', $get_done);
file_put_contents('infos/explode.php', $str1);
$get_token = $tkk[$from_id];
$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");
$json = json_decode($get_url);
$url = $json->result->url;
file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");
unlink("geme/$chat_id2/SeroBots.php");
}
if($data == 'delete' and !in_array($chat_id2,$done)){bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"*
⚠️꒐ عذرا لا تمتلك بوت بالفعل .
*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'• رجوع •', 'callback_data'=>"cancle"]],],])]);}
echo "Errors No found";
$get_ids = file_get_contents('info.txt');
$ids = explode("\n", $get_ids);
$get_bc = file_get_contents('bc.txt');
$bc = explode("\n", $get_bc);
$count = count($ids);
//************//
if($data == "hkt"){
bot('editMessageText',
['chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
‎- مرحباً بك من• مرحبا بك عزيزي في قسم الدعم : 👤

◽مبرمج المصنع : » . #Bero:  >
‎• بوت تواصل المطور : @SHGBOT

‎• أضغط على الرابط اسفل للأنضمام الى مجموعة
‎الدعم الخاصة في السورس ولمصنع .

~ link: - https://t.me/SeroBots
⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯ ⎯
‎- قناة قناة  السورس : @SeroBots .
‎- بوت تواصل دعم السورس : @ShgBot .
*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• رجوع •','callback_data'=>'cancle']]
]])
]);
}
$alshh3 = file_get_contents("Alsh.txt");
$member_id = explode("\n",$alshh3);
if($text == "تحديث" and $from_id == $sudo){
foreach(scandir('geme/') as $f2){
if($f2 != '.' and $f2 != '..'){
unlink("geme/$f2/SeroBots.php");
$ckkkk = file_get_contents('nt7bot.php');
$nt7botnesb_sy1 = '<?php $nt7bot_id = "'.$f2.'"; $tk = "'.$tkk[$f2].'"; ?>';
file_put_contents("geme/$f2/SeroBots.php","$nt7botnesb_sy1 $ckkkk"); 
}}
bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*🛠┊› تم تحديث البوتات بنجاح √؛ 
ـ┄─━━━━━━━─┄
📟┊› عدد البوتات المصنوعة ◄❨ *$count* ❩-؛
👥┊› عدد المشترڪين ◄❨ *$memberscount* ❩-؛
⏰┊› الوقت ◄❨ $date $aa ❩-؛
➺*
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}