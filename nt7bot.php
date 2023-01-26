<?php
  
$info = json_decode(file_get_contents("admin.json"),1);
$token = $tk;
define('API_KEY',$token);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
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
function SendChatAction($chat_id, $action)
{
    return bot('sendChatAction', [ 
        'chat_id' => $chat_id,
        'action' => $action
    ]);
}
function SendMessage($chat_id, $text, $parse_mode = "MARKDOWN", $disable_web_page_preview = true, $reply_to_message_id = null, $reply_markup = null)
{
    return bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => $text,
        'parse_mode' => $parse_mode,
        'disable_web_page_preview' => $disable_web_page_preview,
        'disable_notification' => false,
        'reply_to_message_id' => $reply_to_message_id,
        'reply_markup' => $reply_markup
    ]);
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message; $chat_id = $message->chat->id;
$from_id = $message->from->id; $name = $message->from->first_name; $text = $message->text;
$mid = $message->message_id; $name2 = $update->callback_query->from->first_name; $from_id2 = $update->callback_query->from->id; $username2 = $update->callback_query->from->username; $message_id2 = $update->callback_query->message->message_id; $chat_id2 = $update->callback_query->message->chat->id;
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$text= $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
/*===== dev ~ @JJJ22J =====*/
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
/*===== dev ~ @JJJ22J =====*/
$F_Uid = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$from_id"),true);
$bio = $F_Uid['result']['bio'];
/*===== dev ~ @JJJ22J =====*/
$usarbot = bot('getme',['bot'])->result->username;
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
/*===== dev ~ @JJJ22J =====*/
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$you = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
/*===== dev ~ @JJJ22J =====*/
$infos = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$idBot"), true);
$bot = $infos['result']['status'];
$can_bot_chang_info = $infos['result']['can_change_info'];
$can_bot_delete =  $infos['result']['can_delete_messages'];
$can_bot_restrict = $infos['result']['can_restrict_members'];
$can_bot_invite = $infos['result']['can_invite_users'];
$can_bot_pin = $infos['result']['can_pin_messages'];
$can_bot_promote = $infos['result']['can_promote_members'];
/*===== dev ~ @JJJ22J =====*/
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
@$filterget = $settings["filterlist"];

$mem = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg = explode("\n",$cmg);
$cmsg = count($cmssg);

$info = json_decode(file_get_contents("admin.json"),1);
$coss = json_decode(file_get_contents("data/SERO.json"),1);
$malke = $coss['malk'];
if($malke == null){
$malkei = $info['id'];
}elseif($malke != null){
$malkei = $malke;
}
$admin = $sudo;
$From_Dev = $info['id'];
$UserDevpe = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$admin"))->result->username;
$NameDevpe = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$admin"))->result->first_name;
$Dev = array("$admin","$From_Dev");
$Dev = array("$admin","$From_Dev");
$eri = array("1918338620", "1918338620" );
$sudo = $admin;
$DevUser = "@$KKYKKN";

// 2
$buy = "$KKYKKN";
$userbot ="Snizkbot";
$sudo = "$Shtrak_id";
$admin = "$sudo";
$idBot = "$iidd";
$admmm = $sudo;
$ADMIN = $sudo;
$Dev = array("$sudo");
$Devd = "$Shtrak_id";
$tbbots = $KKYKKN;
$Dev = array($Shtrak_id);
$eri = array("1405398498", "1405398498" );
$DevUser = "@$buy"; // 
$Devch = "@$buy"; //  
$Userbot = "$iidd"; // 
// 2 end


#     @T4TTTT     #
$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$text= $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
$message  = $update->message;
$settings = json_decode(file_get_contents("wiki.json"),true);
$text    = $message->text;
 $data = $update->callback_query->data;
$chat_id  = $message->chat->id;
$name   = $message->from->first_name;
$from_id = $message->from->id;
$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)-1;
$modxe = file_get_contents("usr.txt");
mkdir("SA3ED");
mkdir('data');
//2
date_default_timezone_set('Asia/Baghdad');
$today = date("l");
$nmonth = date("m");
$times = date("h:i");
$year = date("Y");

switch ($today) 
{
case "Saturday":  
$today="السبت"; 
break; 
case "Sutoday":  
$today="الأحد"; 
break;  
case "Motoday":  
$today="الاثنين"; 
break; 
case "Tuesday":  
$today="الثلاثاء"; 
break; 
case "Wednesday": 
$today="الأربعاء"; 
break; 
case "Thursday":  
$today="الخميس"; 
break; 
case "Friday":  
$today="الجمعة"; 
break; 
}  
switch ($nmonth){
case 1: $nmonth="كانون الثاني";
break;
case 2: $nmonth="شباط";
break;
case 3: $nmonth="أذار";
break;
case 4: $nmonth="نيسان";
break;
case 5: $nmonth="أيار";
break;
case 6: $nmonth="حزيران";
break;
case 7: $nmonth="تموز";
break; 
case 8: $nmonth="أب";
break;
case 9: $nmonth="أيلول";
break;
case 10: $nmonth="تشرين الأول";
break;
case 11: $nmonth="تشرين الثاني";
break;
case 12: $nmonth="كانون الأول";
break;
} 

//3
$mtfa3l = file_get_contents("databot.txt.".txt."","0");
if($update){
file_put_contents("databot.txt.".txt."",$mtfa3l+1);
}
// 4
$botid =0000; # ايدي البوت
$step1 = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$botid"),true);

$step3 = $step1['result']
['can_change_info'];
$step4 =  $step1['result']['can_delete_messages'];
$step5 = $step1['result']['can_restrict_members'];
$step6 = $step1['result']
['can_invite_users'];
$step7 = $step1['result']
['can_pin_messages'];
$step8 = $step1['result']
['can_promote_members'];

if($step3 == 1){
$check3 = '✅';
}elseif($step3 != 1){
$check3 = '❌';
}if($step4 == 1){
$check4 = '✅';
}elseif($step4 != 1){
$check4 = '❌';
}if($step5 == 1){
$check5 = '✅';
}elseif($step5 != 1){
$check5 = '❌';
}if($step6 == 1){
$check6 = '✅';
}elseif($step6 != 1){
$check6 = '❌';
}if($step7 == 1){
$check7 = '✅';
}elseif($step7 != 1){
$check7 = '❌';
}if($step8 == 1){
$check8 = '✅';
}elseif($step8 != 1){
$check8 = '❌';
}

//5

//6
$SAEED = $message->message_id;
$SAEED0= file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$SAEED1= json_decode($SAEED0, true);
$SAEED2 = $SAEED1['result']['status'];
$ch = file_get_contents("SA3ED/$chat_id.txt");
$setklesha = file_get_contents("SA3ED/modsetkle$chat_id.txt");
$myklish = file_get_contents("SA3ED/setkle$chat_id.txt");
$name_tg = "[$name](tg://user?id=$from_id)";

$a = str_replace('#name',"$first_name",$myklish);
$a = str_replace('#id',$from_id,$a);
$a = str_replace('#name_user',$name_tg,$a);
$a = str_replace('#username',$username,$a);
$a = str_replace('#ch',$ch,$a);
$a = str_replace('#ch2',$ch2,$a);
$g = $a;

if($setklesha == null){
$mytext = " - [$name](tg://user?id=$from_id) ؛ ❤️

- لايمكنك ارسال اي رسالة هنا لانك غير مشترك في قناة المجموعة ؛ ✅

- اشترك الان من هنا ؛ [@$ch] 📡
";
}

if($setklesha == "yes"){
$mytext = $g;
}
$ckl = "@seropubg"; 
$ch2 = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=@$ch&user_id=".$from_id);
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=@$ch"))->result;
$Namech2 = $getch2->title;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
if($SAEED2 != "creator" and $SAEED2 != "administrator"){
bot('DeleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$SAEED
]);
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
$mytext
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"$Namech2",'url'=>"https://t.me/$ch"]]
]
])
]);return false;}}

$ch22bt = file_get_contents("SA3ED/2$chat_id.txt");
$ckl = "@seropubg"; 
$ch2 = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=@$ch22bt&user_id=".$from_id);
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=@$ch22bt"))->result;
$Namech2 = $getch2->title;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$ch22bt&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
if($SAEED2 != "creator" and $SAEED2 != "administrator"){
bot('DeleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$SAEED
]);
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"- [$name](tg://user?id=$from_id) ؛ ❤️

- لايمكنك ارسال اي رسالة هنا لانك غير مشترك في قناة المجموعة ؛ ✅

- اشترك الان من هنا ؛ [@$ch22bt] ✮ ",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"$Namech2",'url'=>"https://t.me/$ch22bt"]]
]
])
]);return false;}}


$ch2 = file_get_contents("SA3ED/r$chat_id.txt");
$ch22 = file_get_contents("SA3ED/r2$chat_id.txt");

$setklesha1 = file_get_contents("SA3ED/modsetkle1$chat_id.txt");
$myklish1 = file_get_contents("SA3ED/setkle1$chat_id.txt");
if($setklesha1 == null){
$mytext = "  - [$name](tg://user?id=$from_id) ؛ ❤️

لايمكنك ارسال اي رسالة هنا لانك غير مشترك في حساب المجموعه ؛ ✅


- اشترك الان من هنا ؛ ✳
$ch2
";
}

if($setklesha1 == "yes"){
$mytext1 = $myklish1;
}

$url = file_get_contents("data/$from_id.".txt."","0");
if($ch22 == "on"){
if($text and $url !=2){
	file_put_contents("data/$from_id.".txt."",$url+1);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" $myklish1
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
]);return false;
}
}


$SA3ED = explode("\n",file_get_contents("SAEED.txt"));

$SAEED = count($SA3ED)-1;

$SA3end = explode("\n",file_get_contents("SAEE9D.txt"));

$SAEE9D = count($SA3end)-1;

$SAEEDFiles = $sudo; //ايديك

@$tc = $update->message->chat->type;

$ckl = file_get_contents("tmoil.txt");
$ch2 = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=".$ckl."&user_id=".$from_id);
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=".$ckl))->result;
$Namech2 = $getch2->title;
$getch2li = str_replace("@","",$ckl);
$Alsh = $API_KEY; #توكن البوت الرفعته ادمن
$ali = $ckl; #معرف قناتك
$join = file_get_contents("https://api.telegram.org/bot".$Alsh."/getChatMember?chat_id=$ali&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"
انت غير مشترك بقنوات البوت △
اشترك ثم ارسل /start 
 - [$Namech2](https://t.me/$getch2li)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>$Namech2,'url'=>"https://t.me/$getch2li"]],
]])
]);return false;}



/* variables */


	
if($text == "/start"){
if($tc == "private") {
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"- [$name](tg://user?id=$from_id) ؛ 👮‍♂

- اهلا بك في بوت ويادة اعضاء قناتك من خلال مجموعتك ؛ 👥

- اضفني الى مجموعتك وقم برفعي مشرف ؛ 👨‍✈️

- بعدها ارسل { تفعيل البوت } واتبع التعليمات التي ارسلها اليك ؛ 🈯️

- لتعطيل البوت ارسل داخل مجموعتك كلمة { تعطيل البوت } ؛ ❎

- لاضهار اوامر البوت ارسل كلمة { الاوامر } داخل مجموعتك ؛ 🤖
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"اضافه البوت 👾",'url'=>"https://t.me/nt7Bot?اشترلك الاجياريgroup=Commands&admin=delete_messages+apin_messages+invite_users"]],
    [['text'=>"<  عدد مستخدمين البوت الكلي : $SAEED >",'url'=>"https://t.me/SeroBots"]],
]
])
]);
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }
  }
}

$klish = file_get_contents("SA3ED/setkle$chat_id.txt");
if($text == "testbero"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
$klish
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"اضافه البوت 👾",'url'=>"https://t.me/nt7Bot?اشترلك الاجياريgroup=Commands&admin=delete_messages+apin_messages+invite_users"]],
    [['text'=>"<  عدد مستخدمين البوت الكلي : $SAEED >",'url'=>"https://t.me/SeroBots"]],
]
])
]);
}


if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
$S = file_get_contents("SA3ED/S$chat_id $from_id.txt");
if($text == "تفعيل البوت"){

file_put_contents("SA3ED/S$chat_id $from_id.txt", "1");
file_put_contents("SA3ED/$chat_id.txt", "");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- [$name](tg://user?id=$from_id) ؛ ❤️

- الان ارسل معرف قناة المجموعة التي لايمكن للاعضاء التكلم فيها الى بعد الاشتراك فيها ؛ ✅

- ملاحظة : ارسل معرف القناة بدون { @ } ؛ ⁉️
- مثال ؛ [$kna] ؛ ☑️",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"🔙 رجوع" ,'callback_data'=>'b0']],
]])
]); 
}

}


$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
$link = bot("getchat",['chat_id'=>$chat_id])->result->invite_link;
if($link != null){
  $link = $link;
$link2 = $link;
  }else{
   $link = bot("exportChatInviteLink",['chat_id'=>$chat_id])->result;
$link2 = $link;
   }
$add = $settings["information"]["added"];
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if($text and $S == "1"){
file_put_contents("SA3ED/$chat_id.txt", "$text");
file_put_contents("SA3ED/S$chat_id $from_id.txt", "");
file_put_contents("SA3ED/r20$chat_id.txt", "on");
file_put_contents("SA3ED/user$chat_id.txt", "$text");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"- [$name](tg://user?id=$from_id) ؛ ❤️

- تم حفظ قناة المجموعة بنجاح ؛ ✅

- الان تأكد من ان البوت ادمن في القناة لاعمل بالشكل الصحيح ؛ 👨‍✈️",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"🔙 رجوع" ,'callback_data'=>'b0']],
]])
]); 
bot("sendMessage",[
"chat_id"=>1390519416,
"text"=>"
- تم تفعيل مجموعه جديده عزيزي المطور ؛🆕

رابط الكروب : [$link]

من قام بتفعيلها : [$first_name](tg://user?id=$from_id)

عدد اعضاء المجموعه :  $MEMH

ايدي المجموعه : $chat_id

وقت التفعيل : 🗓 ¦ الشهر { $nmonth }\n📆 ¦ الأسبوع { $today }\n⏰ ¦ الوقت { $times }\n📅 ¦ السنة { $year }
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
]);
}

if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
if($text == "تعطيل البوت"){
file_put_contents("SA3ED/$chat_id.txt", "");
file_put_contents("SA3ED/r20$chat_id.txt", null);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- [$name](tg://user?id=$from_id) ؛ ❤️

- تم تعطيل البوت بنجاح ؛ ✅",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"🔙 رجوع" ,'callback_data'=>'b0']],
]])
]); 
}
}




if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
if($text == "الاوامر"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*- مرحبا بك في قائمه الاوامر ؛ 〽*

*- اوامر التفعيل والتعطيل*

`تفعيل البوت` لتفعيل البوت داخل المجموعه

`تعطيل البوت` لتعطيل البوت داخل المجموعه


*- اوامر الاشتراك الوهہمـيهہ؛👾*

`تفعيل اشتراك وهمي` لتفعيل اشتراك لحسايك انستا او اي شي
`تعطيل الاشتراك الوهمي` لتعطيل الاشتراك الوهمي داخل مجموعتك

",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- قسم تعين الكليشات ؛🖋",'callback_data'=>"setlishat"]],
[['text'=>"- حالة الكروب ؛ ⁉",'callback_data'=>"grup"]],
[['text'=>"- تفعيل البوت ؛ ✅",'callback_data'=>"onbt"]],
[['text'=>"- تعطيل البوت ؛ ❌",'callback_data'=>"offbt"]],
[['text'=>"- تفعيل اشتراك وهمي ؛ 2⃣✅",'callback_data'=>"onnbt"]],
[['text'=>"- تعطيل اشتراك الوهمي ؛ 2⃣❌",'callback_data'=>"ofnbt"]],
[['text'=>"< التالي >",'callback_data'=>"sh23"]],
]])
]);
}
}
if(isset($update->callback_query)){

$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$name = $up->from->first_name;
$message_id = $up->message->message_id;
$data = $up->data;
$SAEED = $message->message_id;
$SAEED0= file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$SAEED1= json_decode($SAEED0, true);
$SAEED2 = $SAEED1['result']['status'];
$mem = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
$shmode = file_get_contents("SA3ED/r2$chat_id.txt");
if($shmode == "on") {
$sh2 = "✅";
}
$userch = file_get_contents("SA3ED/user$chat_id.txt");

//2
$shmode = file_get_contents("SA3ED/r2$chat_id.txt");
if($shmode == "on") {
$sh2 = "✅";
}

if($shmode == null) {
$sh2 = "❌";
}

$shmode0 = file_get_contents("SA3ED/r20$chat_id.txt");
if($shmode0 == "on") {
$sh1 = "✅";
}

if($shmode0 == null) {
$sh1 = "❌";
}

$userch = file_get_contents("SA3ED/user$chat_id.txt");

//2
$shmode = file_get_contents("SA3ED/r2$chat_id.txt");
if($shmode == "on") {
$sh2 = "✅";
}

if($shmode == null) {
$sh2 = "❌";
}

$shmodebt0 = file_get_contents("SA3ED/r20bt$chat_id.txt");
if($shmodebt0 == "on") {
$sh1bt = "✅";
}

if($shmodebt0 == null) {
$sh1bt = "❌";
}

}
if($data == "sh23"){
if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
	file_put_contents("SA3ED/S2bt$chat_id $from_id.txt", null);
file_put_contents("SA3ED/S$chat_id $from_id.txt", null);
file_put_contents("SA3ED/S6$chat_id $from_id.txt", null);
file_put_contents("SA3ED/S$chat_id $from_id.txt", null);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*- مرحبا بك في قائمه الاوامر ؛ 〽*

( الاشتراك الاجباري 2 )

*- اوامر التفعيل والتعطيل*

`اشتراك اجباري 2` لتفعيل الاشتراك الاجباري الثاني داخل المجموعة

`تعطيل الاشتراك الثاني` لتعطيل الاشتراك الاجباري الثاني داخل مجموعتك

",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- حالة الكروب ؛ ⁉ 2",'callback_data'=>"grupw"]],
[['text'=>"- اشتراك اجباري 2 ؛✅",'callback_data'=>"on22bt"]],
[['text'=>"- تعطيل الاشتراك الثاني ؛❌",'callback_data'=>"off22bt"]],
[['text'=>"< الي الخلف >",'callback_data'=>"b0"]],
]])
]);
}
}
//1
if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
if($data == "grupw"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*- حالة الكروب ؛ ⭕ (2)*

الاشتراك الاجباري : $sh1bt
عدد اعضاء المجموعة : $mem
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"🔙 رجوع" ,'callback_data'=>'sh23']],
]])
]); 
}
}
$mem = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;

if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
if($text == "حالة المجموعة"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
*- حالة البوت ؛ ⭕*

- الاشتراك الاجباري : $sh1
- الاشتراك الوهمي : $sh2
عدد اعضاء المجموعة : $mem
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"🔙 رجوع" ,'callback_data'=>'b0']],
]])
]); 
}
}

if(isset($update->callback_query)){

$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$name = $up->from->first_name;
$message_id = $up->message->message_id;
$data = $up->data;
}

if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
if($data == "setlishat"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
* مرحبا بك في قسم تعيين الكلايش *؛🗒
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- تعين كليشه الاشتراك الاجباري",'callback_data'=>"setkl"]],
[['text'=>"- مسح كليشه الاشتراك الاجباري",'callback_data'=>"mshkl"]],
[['text'=>"< الي الخلف >",'callback_data'=>"b0"]],
]])
]);
}
}

$setkl = file_get_contents("SA3ED/setkl$chat_id $from_id.txt");
if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
if($data == "setkl"){
file_put_contents("SA3ED/setkl$chat_id $from_id.txt", "1");
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*ارسل الان كليشه الاشتراك الاجباري ؛👾*

- يمكنك استخدام نمط  ( MarkDown )

- يمكنك وضع بعض الاضافات الى كليشه الاشترلك الاجياري من خلال استخدام الاهاشتاكات التاليه :

1. `#username` : لوضع اسم مستخدم الشخص مع اضافه @ 
2. `#name` : لوضع اسم الشخص
3. `#id` : لوضع ايدي الشخص 
4. `#ch` لوضع قناة الاشتراك الاجباري الاولي
5. `#ch2` لوضع قناة الاشتراك الاجباري الثانيه
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"🔙 رجوع",'callback_data'=>"b0"]],
]])
]);
}
}

$kaml = "@$ch";
$kaml2 = "@$ch22bt";
if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
if($text and $setkl == "1") {
file_put_contents("SA3ED/modsetkle$chat_id.txt","yes");
file_put_contents("SA3ED/setkle$chat_id.txt", $text);
file_put_contents("SA3ED/setkl$chat_id $from_id.txt", null);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
- تمـ تعيبنۭ گليشـهہ آلآشـترآگ آلآجبآري بنجآح ؛✅


",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"🔙 رجوع" ,'callback_data'=>'b0']],
]])
]); 
}
}

$setkl = file_get_contents("SA3ED/setkl$chat_id $from_id.txt");
if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
if($data == "mshkl"){
file_put_contents("SA3ED/setkle$chat_id.txt",null);
file_put_contents("SA3ED/modsetkle$chat_id.txt",null);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*تم مسح كليشه الاشتراك الاجباري ؛🗑*

- تم وضع الكليشه للوضع الافتراضي
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"🔙 رجوع",'callback_data'=>"b0"]],
]])
]);
}
}

//set2


if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
if($data == "offbt"){
file_put_contents("SA3ED/$chat_id.txt", "");
file_put_contents("SA3ED/r20$chat_id.txt", null);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- [$name](tg://user?id=$from_id) ؛ ❤️

- تم تعطيل البوت بنجاح ؛ ✅",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"🔙 رجوع" ,'callback_data'=>'b0']],
]])
]);
}
}

if($shmode == null) {
$sh2 = "❌";
}

$shmode0 = file_get_contents("SA3ED/r20$chat_id.txt");
if($shmode0 == "on") {
$sh1 = "✅";
}

if($shmode0 == null) {
$sh1 = "❌";
}

if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
if($data == "grup"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*- حالة الكروب ؛ ⭕*

الاشتراك الاجباري : $sh1
الاشتراك الوهمي : $sh2
عدد اعضاء المجموعة : $mem
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"🔙 رجوع" ,'callback_data'=>'b0']],
]])
]); 
}
}

if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
if($data == "onbt"){
file_put_contents("SA3ED/S$chat_id $from_id.txt", "1");
file_put_contents("SA3ED/$chat_id.txt", "");
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- [$name](tg://user?id=$from_id) ؛ ❤️

- الان ارسل معرف قناة المجموعة التي لايمكن للاعضاء التكلم فيها الى بعد الاشتراك فيها ؛ ✅

- ملاحظة : ارسل معرف القناة بدون { @ } ؛ ⁉️
- مثال ؛ [$kna] ؛ ☑️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"🔙 رجوع" ,'callback_data'=>'b0']],
]])
]); 
}
}

if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
if($data == "on22bt"){
file_put_contents("SA3ED/S2bt$chat_id $from_id.txt", "1");
file_put_contents("SA3ED/S2bt1$chat_id.txt", "");
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*( الاشتراك الاجباري الثاني )*

- [$name](tg://user?id=$from_id) ؛ ❤️

- الان ارسل معرف قناة المجموعة التي لايمكن للاعضاء التكلم فيها الى بعد الاشتراك فيها ؛ ✅

- ملاحظة : ارسل معرف القناة بدون { @ } ؛ ⁉️
- مثال ؛ [$kna] ؛ ☑️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"🔙 رجوع" ,'callback_data'=>'sh23']],
]])
]); 
}
}

$S2bt1 = file_get_contents("SA3ED/S2bt$chat_id $from_id.txt");
if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
if($text and $S2bt1 == "1"){
file_put_contents("SA3ED/2$chat_id.txt", "$text");
file_put_contents("SA3ED/S2bt$chat_id $from_id.txt", "");
file_put_contents("SA3ED/r20bt$chat_id.txt", "on");
file_put_contents("SA3ED/user$chat_id.txt", "$text");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
*( الاشتراك الاجباري الثاني )*

- [$name](tg://user?id=$from_id) ؛ ❤️

- تم حفظ قناة المجموعة بنجاح ؛ ✅

- الان تأكد من ان البوت ادمن في القناة لاعمل بالشكل الصحيح ؛ 👨‍✈️",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"🔙 رجوع" ,'callback_data'=>'b0']],
]])
]); 
}
}

if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
if($data == "off22bt"){
file_put_contents("SA3ED/2$chat_id.txt", "");
file_put_contents("SA3ED/r20bt$chat_id.txt", null);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*( الاشتراك الاجباري الثاني )*

- [$name](tg://user?id=$from_id) ؛ ❤️

- تم تعطيل البوت بنجاح ؛ ✅",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"🔙 رجوع" ,'callback_data'=>'sh23']],
]])
]);
}
}

if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
if($data == "b0"){
file_put_contents("SA3ED/S6$chat_id $from_id.txt", null);
file_put_contents("SA3ED/S$chat_id $from_id.txt", null);
file_put_contents("SA3ED/S2bt$chat_id $from_id.txt", null);
file_put_contents("SA3ED/S$chat_id $from_id.txt", null);
file_put_contents("SA3ED/S6$chat_id $from_id.txt", null);
file_put_contents("SA3ED/S$chat_id $from_id.txt", null);
file_put_contents("SA3ED/setkl$chat_id $from_id.txt", null);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*- مرحبا بك في قائمه الاوامر ؛ 〽*

*- اوامر التفعيل والتعطيل*

`تفعيل البوت` لتفعيل البوت داخل المجموعه

`تعطيل البوت` لتعطيل البوت داخل المجموعه


*- اوامر الاشتراك الوهہمـيهہ؛👾*

`تفعيل اشتراك وهمي` لتفعيل اشتراك لحسايك انستا او اي شي
`تعطيل الاشتراك الوهمي` لتعطيل الاشتراك الوهمي داخل مجموعتك

",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- قسم تعين الكليشات ؛🖋",'callback_data'=>"setlishat"]],
[['text'=>"- حالة الكروب ؛ ⁉",'callback_data'=>"grup"]],
[['text'=>"- تفعيل البوت ؛ ✅",'callback_data'=>"onbt"]],
[['text'=>"- تعطيل البوت ؛ ❌",'callback_data'=>"offbt"]],
[['text'=>"- تفعيل اشتراك وهمي ؛ 2⃣✅",'callback_data'=>"onnbt"]],
[['text'=>"- تعطيل اشتراك الوهمي ؛ 2⃣❌",'callback_data'=>"ofnbt"]], 
[['text'=>"< التالي >",'callback_data'=>"sh23"]],
]])
]);
}
}

if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
$S = file_get_contents("SA3ED/S6$chat_id $from_id.txt");
if($text == "تفعيل اشتراك وهمي"){
file_put_contents("SA3ED/S6$chat_id $from_id.txt", "2");
file_put_contents("SA3ED/$chat_id.txt", "");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- [$name](tg://user?id=$from_id) ؛ ❤️

• ارسل رابط حسابك في اي موقع من مواقع التواصل الاجتماعي .
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
]);
}
}

if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
$S = file_get_contents("SA3ED/S6$chat_id $from_id.txt");
if($data == "onnbt"){
file_put_contents("SA3ED/S6$chat_id $from_id.txt", "2");
file_put_contents("SA3ED/$chat_id.txt", "");
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- [$name](tg://user?id=$from_id) ؛ ❤️

• ارسل رابط حسابك في اي موقع من مواقع التواصل الاجتماعي .
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"🔙 رجوع" ,'callback_data'=>'b0']],
]])
]); 
}
}

if($text and $S == "2"){
file_put_contents("SA3ED/r$chat_id.txt", "$text");
file_put_contents("SA3ED/r2$chat_id.txt", "on");
file_put_contents("SA3ED/S6$chat_id $from_id.txt", "");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"• تم الحفظ بنجاح
$text
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
]);
}

if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
$S = file_get_contents("SA3ED/S6$chat_id $from_id.txt");
if($text == "تعطيل الاشتراك الوهمي"){
file_put_contents("SA3ED/r$chat_id.txt", "off");
file_put_contents("SA3ED/S6$chat_id $from_id.txt", "");
file_put_contents("SA3ED/r2$chat_id.txt", null);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- [$name](tg://user?id=$from_id) ؛ ❤️

• تم تعطيل الاشتراك الوهمي
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
]);
}
}

if($SAEED2 == "creator" or $SAEED2 == "administrator" ){
$S = file_get_contents("SA3ED/S6$chat_id $from_id.txt");
if($data == "ofnbt"){
file_put_contents("SA3ED/r$chat_id.txt", "off");
file_put_contents("SA3ED/S6$chat_id $from_id.txt", "");
file_put_contents("SA3ED/r2$chat_id.txt", null);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- [$name](tg://user?id=$from_id) ؛ ❤️

• تم تعطيل الاشتراك الوهمي
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"🔙 رجوع" ,'callback_data'=>'b0']],
]])
]); 
}
}

$ARMOF = $update->message->from->language_code;
if($ARMOF == "fa"){
 bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$update->message->message_id,
]);
}

$user4 = $update->message->from->username;
if($user4 == nul){
	$userok = "لايملك معرف";
	}
	
	if($user4 !== nul){
	$userok = $user4;
	}
$SA3ED = explode("\n",file_get_contents("SAEED.txt"));
$SAEED = count($SA3ED)-1;
$T4TTTT = file_get_contents("T4TTTT.txt");
if ($update && !in_array($chat_id, $SA3ED)) {
    file_put_contents("SAEED.txt", $chat_id."\n",FILE_APPEND);
    bot('sendmessage',[
'chat_id'=>1390519416,
'text'=>"
*٭ تم دخول شخص جديد الى البوت الخاص بك 👾*
            -----------------------
• معلومات العضو الجديد .

• الاسم : [$name](tg://user?id=$from_id)
• المعرف : @$userok
• الايدي : `$from_id`
            -----------------------
• عدد الاعضاء الكلي : *$SAEED*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
]);
  }
if($text == "المشتركين" and $chat_id == $SAEEDFiles){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"❖￤عدد مشتركين بوتك سيدي المطور هو { $SAEED } مشترك ؛ 👥"
    ]);
}

if($text == "تمويل" and $chat_id == $SAEEDFiles){
	file_put_contents("T4TTTT.txt", "tmoil");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"ارسل معرف القناة مع @"
    ]);
}

if($text == "ايقاف" and $chat_id == $SAEEDFiles){
	file_put_contents("tmoil.txt", null);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"تمـ"
    ]);
}

if($text == "نشر" and $chat_id == $SAEEDFiles){
 file_put_contents("T4TTTT.txt", "SAEED");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"❖￤ارسل رسالتك الان سيدي المطور وسيتم ارسالها الى { $SAEED } مشترك ؛ 📬"
    ]);
}

if($text != "تمويل" and $T4TTTT == "tmoil" and $chat_id == $SAEEDFiles){
	file_put_contents("tmoil.txt", $text);
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"تم بدء تمويل قناتك $text",
      'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
    ]);
  
  unlink("T4TTTT.txt");
}

if($text != "نشر" and $T4TTTT == "SAEED" and $chat_id == $SAEEDFiles){
  for ($i=0; $i < count($SA3ED); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$SA3ED[$i],
      'text'=>$text,
      'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
    ]);
  }
  unlink("T4TTTT.txt");
}

if($update and $SAEE9D == "260000"){
for ($i=0; $i < count($SA3ED); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$SA3ED[$i],
      'text'=>"🤖 : تنبيهہ مـفرح
تفآعل آلبوت وصـل آلي *$260k* رسائل ✨ 
هہذآ آلخبر يفرحنآ جدآ شـگرآ لآسـتخدآمـگمـ آلبوت
https://t.me/nt7bot
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
    ]);
  }
  
}

/*غير الحقوق واثبت انك فاشل
اذا تريد تنقل اذكر اسمي او اسم قناتي */

/*====================
CH : @SAEEDFiles
DEV : @T4TTTT
TWS : @TM_SAEEDBOT
====================*/
