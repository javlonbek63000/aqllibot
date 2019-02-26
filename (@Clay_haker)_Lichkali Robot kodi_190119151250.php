<?php 

// token maydoni
define('bot_token','tokeningizni_shu_yerga_yozing');

$admin = "ID-Raqamiz";

//ozizni id raqamizni yozing

function get($fayl){ 
$get = file_get_contents("$fayl"); 
return $get;
}
function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
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
$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$from_user_first_name = $message->reply_to_message->from->first_name;
$id = $message->reply_to_message->from->id;
$text1 = $message->text;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$mtext = $message->text;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$cidtyp = $message->chat->type;    
$tx = $message->text;    
$tgg = $message->reply_to_message->from->first_name;  
$tfuu = $message->reply_to_message->message_id;
$cidtyp = $message->chat->type;    
$tx = $message->text;

//sozlar
 
 if(stripos($mtext,"salom") !== false){
  $name = $message->from->first_name;
  $input = array("salom", "qalesiz", "Namuncha salom beruras", "Ahssalomu aleykum", "salom $name", "qalesiz ine kiyin");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
} 
  if(stripos($mtext,"Qalesan") !== false){
  $name = $message->from->first_name;
  $input = array("Ha yaxshi o`zinchi", "qalesiz", "Nima deb o`ylaysiz", "Assalomu Aleykum", "Ha iplos $name qalesan yuribsammi telegramda sholdirab", "qalesiz ine kiyin");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
} 
  if(stripos($mtext,"nima") !== false){
  $name = $message->from->first_name;
  $input = array("Nima nma harp");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
} 
  if(stripos($mtext,"Chunmadim") !== false){
  $name = $message->from->first_name;
  $input = array("$name sani kot ekanligini etudi $username rost etgan ekan");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
} 
  if(stripos($mtext,"Yban") !== false){
  $name = $message->from->first_name;
  $input = array("sõkinma haromi");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
} 
  if(stripos($mtext,"haromi") !== false){
  $name = $message->from->first_name;
  $input = array("Og`zinga ske søska");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
} 
  if(stripos($mtext,"kot") !== false){
  $name = $message->from->first_name;
  $input = array("$name sen meni kõt dedingmi hozir ozing kõtsanu dalban");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}  
  if(stripos($mtext,"Gandon") !== false){
  $name = $message->from->first_name;
  $input = array("Bu sani ikkinchi ismingmi Gandon");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
} 
  if(stripos($mtext,"Isqirt") !== false){
  $name = $message->from->first_name;
  $input = array("Isqirt deb sandaqalani etadi hhhh $name shu isminga isqirt sozini ham qoshvol");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
} 
  if(stripos($mtext,"bot") !== false){
  $name = $message->from->first_name;
  $input = array("Hm men bot emasman odamman harp hahahahahahahahahahahaha");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
} 
  if(stripos($mtext,"daden") !== false){
  $name = $message->from->first_name;
  $input = array("sani daden ammi???");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
} 
  if(stripos($mtext,"Ismiz nima") !== false){
  $name = $message->from->first_name;
  $input = array("Nimedi...");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
} 
  if(stripos($mtext,"Ismiz nma") !== false){
  $name = $message->from->first_name;
  $input = array("Nma qilasiz");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
} 
  if(stripos($mtext,"Ismiz nima?") !== false){
  $name = $message->from->first_name;
  $input = array("SARVAR sanikici");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
} 
  if(stripos($mtext,"Am") !== false){
  $name = $message->from->first_name;
  $input = array("salom");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ])); 
  } 
  if(stripos($mtext,"Xayr") !== false){
  $name = $message->from->first_name;
  $input = array("Xayr unda mayli sog boling");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
  } 
  if(stripos($mtext,"@Clay_haker") !== false){
  $name = $message->from->first_name;
  $input = array("Iyy bu mani dostimku!");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
  } 
  if(stripos($mtext,"Buyimi ami") !== false){
  $name = $message->from->first_name;
  $input = array("Bu gapinii buvangga aytasan");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
  } 
  if(stripos($mtext,"Omad") !== false){
  $name = $message->from->first_name;
  $input = array("sanga ham");
  $rand=rand(0,9);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
} 
//uzr dostlar agar bot kodi ishlamasi ming bor uzr chunki bu kodni garov oynagan holda 10 daqiqada yozdim ishlasa omad ishlamasa uzr endi
//Hurmat bilan @Clay_haker