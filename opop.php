<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);
$API_KEY = "5220682308:AAHnaK71GQuivofKxPnZNTSgAUyy21uOsMU";
$kindi = "5220682308:AAHnaK71GQuivofKxPnZNTSgAUyy21uOsMU";

define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$Alsh = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$Alsh";
$Alsh = file_get_contents($url);
return json_decode($Alsh);}
//»»»»»»»»»»»»»»»»»»
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$text = $message->text;
$name = $message->from->first_name;
$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$onstart = file_get_contents("onstart.txt");
$ch = file_get_contents("ch.txt");
$tv = file_get_contents("tv.txt");
$reply = file_get_contents("reply.txt");
$send = file_get_contents("send.txt");
$hkok = file_get_contents("hkok.txt");
$g = file_get_contents('server.txt');
$members = explode("\n",file_get_contents("members.txt"));
$band_id = explode("\n",file_get_contents("band_id.txt"));
$memberscount = count($members);
$band_user = explode("\n",file_get_contents("band_user.txt"));
$tw = file_get_contents("tw.txt");
$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$onstart = file_get_contents("onstart.txt");
$tv = file_get_contents("tv.txt");
$reply = file_get_contents("reply.txt");
$send = file_get_contents("send.txt");
$members = explode("\n",file_get_contents("members.txt"));
$band_id = explode("\n",file_get_contents("band_id.txt"));
$memberscount = count($members);
$band_user = explode("\n",file_get_contents("band_user.txt"));
$tw = file_get_contents("tw.txt");
$photo = $update->message->photo;
$video = $update->message->video;
$sticker = $update->message->sticker;
$file = $update->message->document;
$music = $update->message->audio;
$voice = $update->message->voice;
$caption = $message->caption;
$photo_id = $update->message->photo[0]->file_id;
$video_id= $update->message->video->file_id;
$sticker_id = $update->message->sticker->file_id;
$file_id = $update->message->document->file_id;
$music_id = $update->message->audio->file_id;
$voice_id = $update->message->voice->file_id;
$id = $update->inline_query->from->id;
#######################
$admin = "1882958873";
$sudo = array("1882958873","1882958873");
$bot_id = 5220682308;
$buy = "https://t.me/nnn_e";
$channel = "https://t.me/nnn_e";
$g = str_replace('http://','',$SAIEDZip14);
$SAIEDZip14 = "alivrx.tk/yotop";
###########
 $ch1 = file_get_contents("https://api.telegram.org/bot".$kindi."/getChatMember?chat_id=$ch&user_id=$from_id");
$ch2 = file_get_contents("https://api.telegram.org/bot".$kindi."/getChatMember?chat_id=$ch&user_id=".$from_id);
$tv1 = file_get_contents("https://api.telegram.org/bot".$kindi."/getChatMember?chat_id=$tv&user_id=$from_id");
$tv2 = file_get_contents("https://api.telegram.org/bot".$kindi."/getChatMember?chat_id=$tv&user_id=".$from_id);
#$export1 = json_decode(file_get_contents("https://api.telegram.org/bot".$kindi."/exportChatInviteLink?chat_id=$tv"));
#$linkchannel1 = $export1->result;
#$export2 = json_decode(file_get_contents("https://api.telegram.org/bot".$kindi."/exportChatInviteLink?chat_id=$ch"));
#$linkchannel2 = $export2->result;
if ($message && !in_array($from_id, $members)) {
    file_put_contents("members.txt", $from_id."\n",FILE_APPEND);
  }
$tvp = str_replace('@','',$tv);
if($message && (strpos($tv1,'"status":"left"') or strpos($tv1,'"Bad Request: USER_ID_INVALID"') or strpos($tv1,'"status":"kicked"') or strpos($tv2,'"status":"left"') or strpos($tv2,'"Bad Request: USER_ID_INVALID"') or strpos($tv2,'"status":"kicked"'))!== false){
$linktv=file_get_contents("linktv.txt");
if($linktv==null){
$linktv="https://t.me/$tvp";
}
bot('sendmessage', [
'chat_id'=>$chat_id,
'text'=>"
*🎭 ¦ مرحبا بڪك عزيزي🌿،
📬 ¦ لا يمڪنـك استخدام البوت ،
🗃 ¦ عليك الإشتراڪك في قناهہ‌‏ البوت ،
📡 ¦ *[اضغط هنا للإشتراڪك في القناهہ‌‏]($linktv)* ،
──────────────
🛰- بعـد الاشتراڪك ارسل { /start } ،*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'٠ اضغط هنا للاشتراك ✓','url'=>"$linktv"]
],
]])
]);return false;}
$chp = str_replace('@','',$ch);
if($message && (strpos($ch1,'"status":"left"') or strpos($ch1,'"Bad Request: USER_ID_INVALID"') or strpos($ch1,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
$linkch=file_get_contents("linkch.txt");
if($linkch==null){
$linkch="https://t.me/$chp";
}
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
*🎭 ¦ مرحبا بڪك عزيزي🌿،
📬 ¦ لا يمڪنـك استخدام البوت ،
🗃 ¦ عليك الإشتراڪك في قناهہ‌‏ البوت ،
📡 ¦ *[اضغط هنا للإشتراڪك في القناهہ‌‏]($linkch)* ،
──────────────
🛰- بعـد الاشتراڪك ارسل { /start } ،*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'٠ اضغط هنا للاشتراك ✓' ,'url'=>"$linkch"]
],
]])
]);return false;}
if($user == null){}else{$user5 = $user;}
if ($message && !in_array($from_id, $members)) {
    file_put_contents("members.txt", $from_id."\n",FILE_APPEND);
  }
//»»»»»»»»»»»»
$baageel = file_get_contents("baageel.txt");
if($text == "〽️┇› تفعيل البوت" and in_array($from_id,$sudo)){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮¦ تم تفعيل البوت بنجاح ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("baageel.txt","on");
}
if($text == "⚠️┇› تعطيل البوت" and in_array($from_id,$sudo)){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"📮¦ تم بنجاح تعطيل البوت ✓",
]);
file_put_contents("baageel.txt","off");
} 
if($message and $baageel =="off" and $chat_id != $admin ){
 bot("sendmessage",[
 "chat_id"=>$from_id,
 "text"=>"*👨🏻‍💻 ¦ مرحبا بك عزيزي 
⚠️ ¦ #نعتذر عن التوقف للبوت
⚙ ¦ فقط تحت الصيانة والتحديث
⏰ ¦ سيتم اعادته للخدمة الساعات القادمة
✓*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[
],
]])
]);return false;}
include "az.php";

#──────────────
if($user == null){}else{$user5 = $user;}
if($message and in_array($user5, $band_user) and $user != null) {
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>'عذرا انت محظور 😓']);return false;}
  if($message && in_array($from_id, $band_id)) {
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>'عذرا انت محظور 😓']);return false;}
#──────────────
if($text == '/start' or $text == '🏡┇› الصفحة الرئيسية'){
	$start = str_replace('الاسم',$name,$start);
bot('sendMessage',[
        'chat_id'=>$from_id,
        'text'=>$start,
'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
 'reply_markup'=>json_encode([
'keyboard'=>[
 [['text'=>'🚸╽BotFather'],['text'=>'🚸╽ايقاف البوت']],
[['text'=>'🗑╽حذف يوزر'],['text'=>'🚸╽انشاء يوزر']],
[['text'=>'🚸╽حذف التنصيب']],
[['text'=>'🚸╽كشف اليوزرات'],['text'=>'🚸╽تعيين الباسورد']],
[['text'=>'🚸╽فتح السكرين'],['text'=>'🚸╽السكرينات المفتوحه']],
[['text'=>'🚸╽متصفح السيرفر'],['text'=>'']],
[['text'=>'🚸╽ايقاف السكرينات'],['text'=>'🚸╽ترسيت السيرفر']],
[['text'=>'🚸╽مكاتب السيرفر'],['text'=>'🚸╽سورس النيزك']],
[['text'=>'🚸╽اكلت بي'],['text'=>'']],
[['text'=>'🚸╽تطبيق الاستضافات'],['text'=>'🚸╽تطبيق الليمونة']],
[['text'=>'👨🏻‍💻╽خدمات المطور'],['text'=>'']],

],
"resize_keyboard"=>true,
])
]);
} 

if($text == "العودة للخلف 🔙"){
$start = str_replace('الاسم',$name,$start);
	unlink('send.txt');
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*♻️ انتظر قليلا يتم تحميل الصفحة....*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
]);
sleep(4);
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>"$start
",'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'🚸╽BotFather'],['text'=>'🚸╽ايقاف البوت']],
[['text'=>'🗑╽حذف يوزر'],['text'=>'🚸╽انشاء يوزر']],
[['text'=>'🚸╽حذف التنصيب']],
[['text'=>'🚸╽كشف اليوزرات'],['text'=>'🚸╽تعيين الباسورد']],
[['text'=>'🚸╽فتح السكرين'],['text'=>'🚸╽السكرينات المفتوحه']],
[['text'=>'🚸╽متصفح السيرفر'],['text'=>'']],
[['text'=>'🚸╽ايقاف السكرينات'],['text'=>'🚸╽ترسيت السيرفر']],
[['text'=>'🚸╽مكاتب السيرفر'],['text'=>'🚸╽سورس النيزك']],
[['text'=>'🚸╽اكلت بي'],['text'=>'']],
[['text'=>'🚸╽تطبيق الاستضافات'],['text'=>'🚸╽تطبيق الليمونة']],
[['text'=>'👨🏻‍💻╽خدمات المطور'],['text'=>'']],
],
"resize_keyboard"=>true,
])
]);
} 

#-----------------------------------
if($text == "/admin" or $text == "back 🔙" or $text == "❌┇› الغاء الامر"  or $text == 'رجوع 🔙' or $text =="/ADMIN" and in_array($from_id,$sudo)){
	bot('sendmessage',[
	'chat_id'=>$from_id, 
	'text' =>"🙋🏻‍♂️ ¦› أهلا بك عزيزي الأدمن 🔱
⚙️ ¦› هذه الاعدادات الخاصة بك 🌚
",'reply_to_message_id'=>$message_id,
 'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🗃┇› تعيين رسالة /start"]
],
[
['text'=>"🚸┇› وضع قناة الاشتراك¹"],['text'=>"🚸┇› وضع قناة الاشتراك²"]
],
[
['text'=>"🗑┇› حذف قناة الاشتراك¹"],['text'=>"🗑┇› حذف قناة الاشتراك²"]
],
[
['text'=>"🔱┇› تفعيل التنبيه"],['text'=>"⚠️┇› تعطيل التنبيه"]
], 
[
['text'=>"〽️┇› تفعيل البوت"],['text'=>"⚠️┇› تعطيل البوت"]
],
[
['text'=>"🔂┇› تفعيل التوجية"],['text'=>"🔁┇› تعطيل التوجية"]
], 
[
['text'=>"🚷┇› حظر خاص"],['text'=>"🚫┇› الغاء حظر الخاص"]
],
[
['text'=>"🎯┇› قسم الاذاعة"]
],
[
['text'=>"💤┇› حظر بالمعرف"],['text'=>"🌀┇› الغاء الحظر بالمعرف"]
],
[
['text'=>"📊┇› الاحصائيات"],['text'=>"🔍┇› وضع تعليمات"]
],
[
['text'=>"💬┇› تفعيل التواصل"],['text'=>"💬┇› تعطيل التواصل"]
],
[
['text'=>"📮┇› المشتركين"],['text' =>"📁┇› جلب نسخة"]
],
[
['text'=>"🗂┇› رفع نسخة للاعضاء"],['text'=>""]
],
], 
])
]);} 
//»»»»»»»»»»»»»»»»»»
if($text == "🚸┇› وضع قناة الاشتراك¹" and in_array($from_id,$sudo)){
	file_put_contents("sting.txt","knat");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🔰¦ أرسل معرف القناة العام الان
👨🏻‍💻¦ اذكانت خاصة قم بتوجيه منشور .*
",'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
if($text == "إلغاء ❌" and $sting =="knat" and in_array($from_id,$sudo)){
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌¦تم إلغاء الأمر بنجاح 🗳️" 
]) ;
unlink("sting.txt");} 
if($message->forward_from_chat and $sting =="knat" and in_array($from_id,$sudo)){
file_put_contents("sting.txt","link1");
$idchannel= $message->forward_from_chat->id;
file_put_contents("tv.txt","$idchannel"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*🎫 ¦ تم حفظ ايدي القناة بنجاح √
🎟 ¦ ايدي القناة : *$idchannel*
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ قم بارسال الرابط الخاص بالقناة*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
}
if($text!=null and $text != "إلغاء ❌" and $sting =="link1" and in_array($from_id,$sudo) and !$message->forward_from_chat){
file_put_contents("linktv.txt","$text"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "- مرحبا بك عزيزي 💁‍♂
🎫 ¦ تم حفظ رابط القناة بنجاح √
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ الرابط الخاص بك $text
",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if($text!=null and $text != "إلغاء ❌" and $sting =="knat" and in_array($from_id,$sudo) and !$message->forward_from_chat){
file_put_contents("tv.txt","$text"); 
unlink("linktv.txt"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" =>"*- مرحبا بك عزيزي 💁‍♂
🌀 ¦ تم حفظ معرف القناة بنجاح √
🔘 ¦ فضلا تأكد ان البوت أدمن في القناة *
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'   =>true,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
//********♥*****//
if($text == "🗑┇› حذف قناة الاشتراك¹" and in_array($from_id,$sudo)){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🖥️¦تم حذف القناة بنجاح ☑️*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("tv.txt");}
//»»»»»»»»»»»»»»»»»»
if ($text == "🚸┇› وضع قناة الاشتراك²" and in_array($from_id,$sudo)){
file_put_contents("sting.txt","sting");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*- مرحبا بك عزيزي↯
🌀 ¦ أرسل معرف القناة العام الان
♻️ ¦ اذكانت خاصة قم بتوجيه منشور .*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'   =>true,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
if($text == "إلغاء ❌" and $sting =="sting" and in_array($from_id,$sudo)){
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌¦تم إلغاء الأمر بنجاح 🗳️" 
]) ;
unlink("sting.txt");} 
if($message->forward_from_chat and $sting =="sting" and in_array($from_id,$sudo)){
unlink("sting.txt");
$idchannel= $message->forward_from_chat->id;
file_put_contents("ch.txt","$idchannel"); 
file_put_contents("sting.txt","link2"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*🎫 ¦ تم حفظ ايدي القناة بنجاح √
🎟 ¦ ايدي القناة : *$idchannel*
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ قم بارسال الرابط الخاص بالقناة*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])]);
}
if($text!=null and $text != "إلغاء ❌" and $sting =="link2" and in_array($from_id,$sudo) and !$message->forward_from_chat){
file_put_contents("linkch.txt","$text"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "- مرحبا بك عزيزي 💁‍♂
🎫 ¦ تم حفظ رابط القناة بنجاح √
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ الرابط الخاص بك $text
",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if( $text !=null and $text != "إلغاء ❌" and $sting =="sting" and in_array($from_id,$sudo) and !$message->forward_from_chat ){
file_put_contents("ch.txt","$text"); 
unlink("linkch.txt");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
*- مرحبا بك عزيزي 💁‍♂
🌀 ¦ تم حفظ معرف القناة بنجاح √
🔘 ¦ فضلا تأكد ان البوت أدمن في القناة *
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if($text =="🗑┇› حذف قناة الاشتراك²" and in_array($from_id,$sudo)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🖥️¦ تم حذف القناة بنجاح ☑️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("ch.txt") ;
} 
//»»»»»»»»»»»»»»»»»»
if($text == "💤┇› حظر بالمعرف" and in_array($from_id,$sudo)){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"💤¦› حسنا ارسل المعرف العضو الذي تريد حظرة من البوت 
"]) ;
file_put_contents("sting.txt","bandu");
} 
if(preg_match('/^(@)(\S{5,32})/i',$text) and $sting == "bandu" and in_array($from_id,$sudo)){
$tf = str_replace("@","",$text);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"🚷 ¦› تم حظر العضو بنجاح
[$text](https://t.me/$tf) 
",'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>"$text", 
'text'=>"🚸 ¦› عذرا عزيزي
📛 ¦› لقد تم حظرك من البوت
👨‍✈️ ¦› بواسطة المطور الاساسي
"]);$tf = str_replace("@","",$text);
file_put_contents("band_user.txt",$tf."\n",FILE_APPEND);
unlink("sting.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($text =="🌀┇› الغاء الحظر بالمعرف" and in_array($from_id,$sudo)){
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي المطور
🚫 ¦› ارسل ايدي العضو لالغاء الحظر
"]);file_put_contents("sting.txt","unkband1");} 

if($text =="$text" and $sting == "unkband1" and in_array($from_id,$sudo)){
$tf = str_replace("@","",$text);
	$a = str_replace("$tf","",file_get_contents("band_user.txt"));
        file_put_contents("band_user.txt",$a);
$tf = str_replace("@","",$text);
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"🚫 ¦› تم الغاء الحظر بنجاح √
[$text](https://t.me/$tf) 
",'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي العضو
🚫 ¦› لقد تم رفع القيود عنك
🤖 ¦› يمكنك الان استخدام البوت
",]);unlink("sting.txt");
}
//»»»»»»»»»»»»»»»»»»
$rt = $update->message->reply_to_message;
$id = $message->reply_to_message->forward_from->id;
if($tw == "tw" and $from_id != $admin){
	if($text != "/start"){
	bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
	}
	if($tw == "tw" and $rt and in_array($from_id,$sudo)){
		bot("sendMessage",[
"chat_id"=>$id,
"text"=>"
$text
"
]);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"📮¦› تم الارسال بنجاح √
"]);}
if($text == "💬┇› تعطيل التواصل" and in_array($from_id,$sudo)){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"❎ ¦› تم تعطيل التواصل بنجاح
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("tw.txt") ;
	}
if($text == "💬┇› تفعيل التواصل" and in_array($from_id,$sudo)){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"💬 ¦› تم تفعيل التواصل بنجاح 
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents('tw.txt','tw');	}
/*
if($text == "📮┇› المشتركين" and in_array($from_id,$sudo)){
	bot('sendMessage',[
	'chat_id' =>$chat_id, 
	'text'=>" *📊¦› عدد مشتركين البوت هو $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);} 
if($text == "عدد البوتات 🔰 " and in_array($from_id,$sudo)){
	bot('sendMessage',[
	'chat_id' =>$chat_id, 
	'text'=>count($ok)
	, 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
*/
if($text =="🔱┇› تفعيل التنبيه" and in_array($from_id,$sudo)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔔¦› تم تفعيل التنبيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("onstart.txt","start");
} 
if($text =="⚠️┇› تعطيل التنبيه" and in_array($from_id,$sudo)){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔕¦› تم تعطيل ❎ التنبيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])
]);
unlink("onstart.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($text == "🎯┇› قسم الاذاعة" and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂ ¦› أهلا بك عزيزي في قسم الاذاعة
🔘 ¦› إستخدم الأزرار للتحكم بنوع الاذاعة*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"📝┇› نشر رسالة"],['text'=>"📸┇› نشر صورة"]
],
[
['text'=>"📹┇› نشر فيديو"],['text'=>"🏧┇› نشر ملصق"]
],
[
['text'=>"📂┇› نشر ملف"],['text'=>"🎙┇› نشر صوت"]
],
[
['text'=>"Ⓜ️┇› نشر ماركدوان"],['text'=>"⚜┇› نشر HTML"]
],
[
['text'=>"🔄┇› اذاعة عام بالتوجية"],['text'=>"📢┇› اذاعة عام للكل"]
],
[
['text' =>"®┇› اذاعة في القنوات"],['text'=>"↩️┇› اذاعة خاص بالتوجيه"]
],
[
['text'=>"رجوع 🔙"]
],
],
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($text == "❌┇› الغاء الامر"){
	unlink("send.txt");
	}
if($text == "❌┇› الغاء الامر" and $send != null){
	unlink('send.txt');
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*❎ ¦› تم الإلغاء بنجاح 💯
🔙 ¦› سيتم الرجوع للقائمة الرئيسة بعد 5 ثواني*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
]);
sleep(4);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂ ¦› أهلا بك عزيزي في قسم الاذاعة
🔘 ¦› إستخدم الأزرار للتحكم بنوع الاذاعة*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"نشر رسالة 💌"],['text'=>"نشر صورة 🎑"]
],
[
['text'=>"نشر فيديو 🎥"],['text'=>"نشر ملصق 🎐"]
],
[
['text'=>"نشر ملف 📁"],['text'=>"نشر صوت 🎧"]
],
[
['text'=>"نشر ماركدون 🎐"],['text'=>"نشر HTML 📮"]
],
[
['text'=>"🔄┇› اذاعة عام بالتوجية"],['text'=>"📢┇› اذاعة عام للكل"]
],
[
['text'=>"رجوع 🔙"],['text'=>"نشر اعلان في القنوات 💥"]
],
],
])
]);}
//»»»»»»»»»»»»»»»»»»
if($text == "📝┇› نشر رسالة" and in_array($from_id,$sudo)){
	file_put_contents('send.txt','txt');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي شيء لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
if($text == "📸┇› نشر صورة" and in_array($from_id,$sudo)){
	file_put_contents('send.txt','photo');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🌌 ¦› الان ارسل اي صورة لارسلها ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
	}
	if($text == '📹┇› نشر فيديو' and in_array($from_id,$sudo)){
		file_put_contents('send.txt','video');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🌌¦› الان ارسل اي فيديو لارسلها ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
	}
	if($text == "🏧┇› نشر ملصق" and in_array($from_id,$sudo)){
	file_put_contents('send.txt','sticker');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي ملصق لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
	if($text == "📂┇› نشر ملف" and in_array($from_id,$sudo)){
	file_put_contents('send.txt','file');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي ملف او صورة gif لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
	if($text == "🎙┇› نشر صوت" and in_array($from_id,$sudo)){
		file_put_contents('send.txt','music');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي ملف صوتي 🎧 لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
	if($text == "Ⓜ️┇› نشر ماركدوان" and in_array($from_id,$sudo)){
		file_put_contents('send.txt','Markdown');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي نص وسيدعم الماركدون لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
if($text == "⚜┇› نشر HTML" and in_array($from_id,$sudo)){
		file_put_contents('send.txt','HTML');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي نص  وسيدعم الHTML لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($from_id == $admin and $text != "❌┇› الغاء الامر"){
if($text != '❌┇› الغاء الامر' and $send == "txt" and in_array($from_id,$sudo)){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'photo'){
	for($i=0;$i<count($members); $i++){
bot('sendphoto', [
'chat_id'=>$members[$i],
'photo'=>$photo_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'video'){
	for($i=0;$i<count($members); $i++){
bot('Sendvideo',[
'chat_id'=>$members[$i],
'video'=>$video_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'sticker'){
	for($i=0;$i<count($members); $i++){
bot('Sendsticker',[
'chat_id'=>$members[$i],
'sticker'=>$sticker_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'file'){
	for($i=0;$i<count($members); $i++){
 bot('SendDocument',[
'chat_id'=>$members[$i],
'document'=>$file_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'music' and $music){
	for($i=0;$i<count($members); $i++){
 bot('Sendaudio',[
'chat_id'=>$members[$i],
'audio'=>$music_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'music' and $voice){
	for($i=0;$i<count($members); $i++){
 bot('Sendvoice',[
'chat_id'=>$members[$i],
'voice'=>$voice_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'Markdown'){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'HTML'){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
}
if($text == "❌┇› الغاء الامر" and in_array($from_id,$sudo)){
unlink("sting.txt") ;
unlink('send.txt');
}
if($text =="🔂┇› تفعيل التوجية" and in_array($from_id,$sudo)){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔄 ¦› تم تفعيل التوجيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("reply.txt","yhya");
} 
if($from_id == $admin){}else{
if($message and $reply == "yhya" ){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
}}
	if($text == "🔁┇› تعطيل التوجية" and in_array($from_id,$sudo)){
		bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔒¦› تم تعطيل التوجيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("reply.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($text == "🚷┇› حظر خاص" and in_array($from_id,$sudo)){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"👨‍✈️ ¦› مرحبا عزيزي المطور
🚫 ¦› ارسل ايدي العضو لحظره من البوت"]) ;
file_put_contents("sting.txt","band");} 

if(preg_match('/^()(\S{5,32})/i',$text) and $sting == "band" and in_array($from_id,$sudo)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔊 ¦› تم حظره  بنجاح ✔️
[$text](tg://user?id=$text) 
",'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
'text'=>"🚸 ¦› عذرا عزيزي📛 ¦› لقد تم حظرك من البوت
👨‍✈️ ¦› بواسطة المطور الاساسي"]) ;
file_put_contents("band_id.txt",$text."\n",FILE_APPEND);
unlink("sting.txt");
} 

/*end siting admin ⚙️ */
if($text =="🚫┇› الغاء حظر الخاص" and in_array($from_id,$sudo)){
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي المطور
🚫 ¦› ارسل ايدي العضو لالغاء الحظر"]) ;
file_put_contents("sting.txt","unkband");} 
if($text =="$text" and $sting == "unkband" and $from_id == $admin) {
	$a = str_replace("$text","",file_get_contents("band_id.txt"));
        file_put_contents("band_id.txt",$a);
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"🚫 ¦› تم الغاء الحظر بنجاح √
[$text](tg://user?id=$text) 
",'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي العضو
🚫 ¦› لقد تم رفع القيود عنك
🤖 ¦› يمكنك الان استخدام البوت", 
]);unlink("sting.txt");
}
//»»»»»»»»»»»»»»»»»»
if ($text =="🗃┇› تعيين رسالة /start" and in_array($from_id,$sudo)){
file_put_contents("sting.txt","start1");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"📝¦ أرسل نص البدء { /start } 🙋🏻‍♂️
يمكنك وضع الاسم بشرط ان تضعه بين { }
هكذا {الاسم}
"]);
}
if($text and $sting =="start1" and in_array($from_id,$sudo)){
file_put_contents("start.txt","$text"); 
unlink("sting.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂️¦تم حفط نص الترحيب هو 
/start
{ $text }*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}
//»»»»»»»»»»»»»»»»»»
if ($text =="🔍┇› وضع تعليمات" and in_array($from_id,$sudo)){
file_put_contents("sting.txt","help");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"🔰¦ أرسل نص التعليمات 🙋🏻‍♂️
يمكنك وضع اسم المرسل بشرط ان تضعه بين {}
هكذا {الاسم}
"]);
file_put_contents("sting.txt","help");}
if($text and $sting =="help" and in_array($from_id,$sudo)){
file_put_contents("help","txt"); 
unlink("sting.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂️¦تم حفط نص التعليمات بنجاح
/help
{ $hkok } *
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])]);unlink('sting.txt');file_put_contents('hkok.txt',$text);}
//»»»»»»»»»»»»»»»»»»
$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;

$from_id     = $message->from->id;
$first_name = $message->from->first_name;
$type       = $update->message->chat->type;
mkdir("Fri3nd_s");
$message_id = $message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;

if($text == "اذاعه بالتوجيه" || $text == "اذاعه عام بالتوجيه" || $text == "اذاعه للكل بالتوجيه" || $text =="🔄┇› اذاعة عام بالتوجية" and in_array($from_id,$sudo)){
    file_put_contents("Fri3nd_s/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "iBadlz" and in_array($from_id,$sudo)){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}
if($text and $type == "private" and in_array($from_id,$sudo)){
file_put_contents("Fri3nd_s/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type == "supergroup" and in_array($from_id,$sudo)){
file_put_contents("Fri3nd_s/groups.txt", "$chat_id\n",FILE_APPEND);
}
if($text == "اذاعه خاص" || $text =="⌛️¦ اذاعه خاص" and in_array($from_id,$sudo)){
    file_put_contents("Fri3nd_s/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "JJ119" and in_array($from_id,$sudo)){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/iBadlz.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو ،💗ء*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
     'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if ($text == "اذاعه للكل" || $text == "اذاعه عام" || $text == "اذاعه"  ||$text == "📆⎮ اذاعه •" || $text =="📢┇› اذاعة عام للكل" and in_array($from_id,$sudo)){
    file_put_contents("Fri3nd_s/iBadlz.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if($message and $GG1ZZ == "LE_C4_KR" and in_array($from_id,$sudo)){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$message->message_id,
          'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if($text == "اذاعه خاص بالتوجيه" || $text == "↩️┇› اذاعة خاص بالتوجيه" and in_array($from_id,$sudo)){
    file_put_contents("Fri3nd_s/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "od_1j" and in_array($from_id,$sudo)){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
⚜• تم توجيه رسالتك الى $MOhaMMed عضو ،💗ء*",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id,
          'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}
if($text == "📊┇› الاحصائيات" || $text == "📮┇› المشتركين" and in_array($from_id,$sudo)){
	bot('sendMessage',[
	'chat_id' =>$chat_id, 
	'text'=>"الاحصائيات : 🔰 
──────────────
*📡 ¦ عدد المجموعات المفعله ◄ * $MoHaMMedd *
🤖 ¦ عدد البوتات المصنوعة ◄ * $ok * ،
👥 ¦ عدد المشترڪين ◄ * $MOhaMMed * ،
⏰ ¦ الوقت ◄ * $date $aa * ،
✓*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
//»»»»»»»»»»»»»»»»»»
$g = str_replace('http://','',$SAIEDZip14);
function SAIEDZip($SAIEDZip1, $SAIEDZip2){
$SAIEDZip4 = realpath($SAIEDZip1);
$SAIEDZip = new ZipArchive();
$SAIEDZip->open($SAIEDZip2, ZipArchive::CREATE | ZipArchive::OVERWRITE);
$SAIEDZip3 = new RecursiveIteratorIterator(
new RecursiveDirectoryIterator($SAIEDZip4),
RecursiveIteratorIterator::LEAVES_ONLY);
foreach($SAIEDZip3 as $SAIEDZip5 => $SAIEDZip6){
if(!$SAIEDZip6->isDir()){
$SAIEDZip7 = $SAIEDZip6->getRealPath();
$SAIEDZip8 = substr($SAIEDZip7, strlen($SAIEDZip4) + 1);
$SAIEDZip->addFile($SAIEDZip7, $SAIEDZip8);
}}
$SAIEDZip->close();
}
function SAIEDZip1($SAIEDZip9, $SAIEDZip10 = 2){
$SAIEDZip11=array(' B', ' KB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB');
$SAIEDZip12=floor((strlen($SAIEDZip9) - 1) / 3);
return sprintf("%.{$SAIEDZip10}f", $SAIEDZip9 / pow(1024, $SAIEDZip12)) . @$SAIEDZip11[$SAIEDZip12];
}
$SAIEDZip15 = json_decode(file_get_contents('php://input'));
$SAIEDZip16 = $SAIEDZip15->message;
$SAIEDZip17 = $SAIEDZip16->text;
$SAIEDZip18 = $SAIEDZip16->message_id;
if($SAIEDZip17 == "📁┇› جلب نسخة" and in_array($from_id,$sudo)){
$RSAIED = "$admin";
date_default_timezone_set("Asia/Damascus");
$SAIEDZip13 = date("{h-i-s}");
SAIEDZip('',"Backup-$SAIEDZip13.zip");
bot('senddocument',[
'chat_id'=>$RSAIED,
'document'=>"https://$g/Backup-$SAIEDZip13.zip",
'caption'=>"Backup. 📦
Today's date : ".date('Y/m/d')." 📆
The Time is : ".date('h:i A')." ⏰
Team Yemen : ". @THTSS ." ♥
File size : ".SAIEDZip1(filesize("Backup-$SAIEDZip13.zip"))." 🏷",
'reply_to_message_id'=>$SAIEDZip18,
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])]);
unlink("Backup-$SAIEDZip13.zip");
}
#-----------------------
if($text == "👨🏻‍💻╽خدمات المطور"){
$hkok = str_replace('الاسم',$name,$hkok);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$hkok,
'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"العودة للخلف 🔙"] 
],
],
'resize_keyboard'=>true
])
]);
}
#-- -- -- -- -- -- -- -- -- -- -- -- -- --
if($text =="/start" and $onstart == "start" and in_array($from_id,$sudo)){
	bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
👨‍✈️┊مرحبا مطوري 🙋🏽‍♂
⚙┊شخص قام بالدخول الى البوت !
ـ──────────────
*🎭 ⁞ اسم العضو : *[$name](tg://user?id=$from_id)* 
🎟 ⁞ ايدي معلوماته : * `$from_id` * 
💤 ⁞ معرف حسابه : * @$user * 
📟 ⁞ عدد المشترڪين : * $MOhaMMed * 
ـ * $date $aa *
➺ *",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'   =>true,
  ]);
  }

#-- -- -- -- -- -- -- -- -- -- -- -- -- --
$update   = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id    = $message->from->id;

 

if($text == "🚸╽BotFather"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>"
💯┇اوامر بوت فاذر فقط اضغط ونسخ الامر ورسله البوت فاذر  ⚜، 

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ 

📛 | كود حذف البوت : `/deletebot`

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ 

📛 | كود تغير اسم البوت: `/setname`

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ 

📛 | كود تغيروصف: `/setabouttext`

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ 

📛 | كِوَد انشاء بوت  : `/newbot`

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ 

📛 | كود تغيير صوره : `/setuserpic`

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ 

📛 | كود ستخراج التوكن : `/token`

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ ┉

📛 | كود تغيير توكن  : `/revoke`

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉
⚜ | الاوامر لـ بوت فاذر ☜ @BotFather
",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'العودة للخلف 🔙']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "🚸╽ايقاف البوت"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>"
`killall screen`
",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'〽️رجوع']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "🗑╽حذف التنصيب"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
`rm -rf * && cd #HOME && rm -rf *`

`killall screen;rm -fr $HOME/*`

يسد السكرينات + يحذف تنصيبات
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'العودة للخلف 🔙']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == ""){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
 

",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'العودة للخلف 🔙']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "🚸╽انشاء يوزر"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
 كيفيه انشاء يوزر من السيرفر او الروت 

`adduser` + اسم اليوزر
- ثم اوكي 
- الرمز الخاص بك ثم اوكي
- قم باعادة الرمز للتحقق ثم اوكي
- اضغط اوكي خمس مرات حتى يظهر y/n اختار Y

- اخر عملية لتعطي اليوزر مجال التحكم ↯
`adduser` + اسم اليوزر + `sudo`
",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'العودة للخلف 🔙']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "🗑╽حذف يوزر"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
`deluser` اسم اليوزر 
وانتر
`cd /home && rm -fr`+ اسم اليوزر 
وانتر
",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'العودة للخلف 🔙']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "🚸╽كشف اليوزرات"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
 كود معرفه اليوزرات الموجوده بالروت
 
`ls /home`
",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'العودة للخلف 🔙']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "🚸╽تعيين الباسورد"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
 كيفيه تغيير رمز اليوزر او الروت

1- تغير رمز الروت (( السيرفر ))
`passwd `
ونتر
راح يطلب الباسورد الجديد 
واها يكلك اكتب الباسورد م̷ـــِْن جديد
وهاكذا تم تغير رمز الروت
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎ٴ

2 ــ اذا تريد تغير رمز اليوزر من السيرفر دزله امر 
`passwd` + اسم اليوزر 
وراح يطلب منك رمز مرتين 

﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎ٴ
3 ــ اذا تغير من اليوزر دزله 
`passwd `
ويطلب رمز القديم نوب خلي ونتر نوب رمز جديد ونتر نوب الجديد ونتر مره ثانيه وهيج تغير الرمز مال يوزر

",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'العودة للخلف 🔙']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "🚸╽فتح السكرين"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
  
`screen -x+` رقم السكرين
",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'العودة للخلف 🔙']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "🚸╽السكرينات المفتوحه"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
 كود معرفه السكرينات المفتوحه باليوزر

`screen -ls`
",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'العودة للخلف 🔙']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "🚸╽ايقاف السكرينات"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
 لايقاف كل سكرينات البوت 

`killall screen`

لايقاف سكرين معين

`kill screen` + رقم السكرين

🔥رقم السكرين طلعه من هذة الكود

`screen -ls`
",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'العودة للخلف 🔙']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "🚸╽ترسيت السيرفر"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
 كود ترسيت السيرفر
 
`redis-server`

",
'parse_mode'=>"MarkDown",

'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'العودة للخلف 🔙']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "🚸╽اكلت بي"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
 اكلت بي لـ استقرار السيرفر 

 افتح السيرفر دز ⇐ `reboot`

وانتضر دقيقة بعد الدقيقة وروح سوي رن لليوزرات المسخرجها من السيرفر 

 او لـ السيرفر اذا ماعندك يوزرات مستخرجها من السيرفر

",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'العودة للخلف 🔙']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "🚸╽مكاتب السيرفر"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
1- `sudo  wget https://luarocks.org/releases/luarocks-2.4.3.tar.gz`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
2- `sudo  tar zxpf luarocks-2.4.3.tar.gz
cd luarocks-2.4.3
./configure; sudo make bootstrap`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
3- `sudo luarocks install luasocket`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
4- `sudo luarocks install luasec`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
5- `sudo luarocks install luautf8`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
6- `sudo luarocks install redis-lua`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
7- `sudo  luarocks remove lua-cjson2`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
8- `sudo  luarocks remove lua-cjson`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
9- `sudo  apt-get install lua-cjson`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
10- `sudo luarocks install Lua-cURL
cd ..`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

اكواد لـ حل مشاكل السيرفر كلها ⇊
طريقة الاستعمال

- فتح السيرفر ثم ارسل الكود الاول واضغط انتر وارسل الكود الثاني واضغط انتر لحد كود رقم 10 تسوي هذه الطريقة
- بعد ماتكمل اطلع من السيرفر ثم انتضر دقيقة

- وهكذا سيتم حل المشكلة مع التقليل من الضغط وسعة التخزين
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'العودة للخلف 🔙']],],
"resize_keyboard"=>true,
])
]);
} 

#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "🚸╽سورس النيزك"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" *
™
 - لتنصيب سورس النيزك الجديد v2.0 ⇓⇓⇓ 

*`sudo rm -fr ~/N* ; screen -X -S n* quit ; git clone https://github.com/nizks/Nizk.git ;cd Nizk;chmod +x ins;./ins`*

- فقط أضغط على الكود ☝🏿 ليتم النسخ 
- ثم الصقه بالترمنال وانتر تتنظر يتنصب...
- بعدها يطلب منك تخلي المعلومات
- اولا تدخل التوكن ثم انتر
- ثانيا ايدي المطور ثم انتر 
- كود الرن
`~/Nizk/run`
- لاتحتار بالمعرف السورس تلقائيا يستخرج المعرف من الايدي ويخزنه 
- لتغيير المطور الاساسي فقط ارسلل للبوت امر {نقل ملكيه البوت} واتبع التعليمات التي يطلبها البوت*
",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'العودة للخلف 🔙']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "🚸╽تطبيق الليمونة"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
- تطبيق فتح الروتات واليوزرات
- يمكنك استخدامه بشكل مسهل وبسيط 
- [اضغط هنا للتنزيل المجاني](https://t.me/Tmsmix/1118)

",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'العودة للخلف 🔙']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "🚸╽متصفح سيرفرات"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 
« موقع فتح السيرفرات الخاص بك
« سريع وجيد بوجهة نظري يفيدكم للتصفح
« لاتنسى دعم القناة ونشر المعرف التابع لنا @TH1BS

« للدخول الى امتصفح  [اضغط هنا](http://net2ftp.com)

",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'العودة للخلف 🔙']],],
"resize_keyboard"=>true,
])
]);
} 
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉ ┉ ┉ ┉ #
if($text == "🚸╽تطبيق الاستضافات"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 "text"=>" 

X-plore File Manager
https://play.google.com/store/apps/details?id=com.lonelycatgames.Xplore

افضل تطببق لفتح الاستضافات ورفع الملفات
- فقط اذكروني بدعوة مااريد شي منكم
- لمسات برمجية @TH1BS
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>'العودة للخلف 🔙']],],
"resize_keyboard"=>true,
])
]);
} 
