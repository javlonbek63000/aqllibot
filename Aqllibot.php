<?php 

ob_start();

//Kod @Clay_haker tomonidan yozildi sizgacha xatoliklarga yol qoyilgan bolsa yozuvchi javob bermaydi//

$API_KEY = '626432072:AAHbIdj1dR4GpAtSGuWnpbsD0eQzxXYc1zs ';
$kanalimz = "@love_you_forever7":
$admin = "237996536";

define('API_KEY',$API_KEY);
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
 function sendmessage($chat_id, $text, $model){
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$mode
	]);
	}
	function sendaction($chat_id, $action){
	bot('sendchataction',[
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
	}
	function Forward($KojaShe,$AzKoja,$KodomMSG)
{
    bot('ForwardMessage',[
        'chat_id'=>$KojaShe,
        'from_chat_id'=>$AzKoja,
        'message_id'=>$KodomMSG
    ]);
}
function sendphoto($chat_id, $photo, $action){
	bot('sendphoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'action'=>$action
	]);
	}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->id;
$chat_id = $message->chat->id;
$text = $message->text;
$ali = file_get_contents("ali.txt");
$imgm = file_get_contents("http://buildabot.tk/b/data/men.php");
$imgw = file_get_contents("http://buildabot.tk/b/data/women.php");
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$message_id = $update->callback_query->message->message_id;
$ADMIN = "Bot admini"; //smi yoki useri ham boladi//

if($text == '/start'){
$user = file_get_contents('us.txt');
    $members = explode("\n",$user);
    if (!in_array($chat_id,$members)){
      $add_user = file_get_contents('us.txt');
      $add_user .= $chat_id."\n";
     file_put_contents('us.txt',$add_user);
    }
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>" 👋 *Assalomu aleykum* $name *botimizga xush kelibsiz siz bu botda o`z jinsingiz haqida batafsil bilib olasiz* 😜       🛠 Yaratuvchi [@Clay_haker]",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  	  [
	  ['text'=>"olga",'callback_data'=>"go"]
	  ]
		]
		])
  ]);
}

if($text == '/haqida'){
$user = file_get_contents('us.txt');
    $members = explode("\n",$user);
    if (!in_array($chat_id,$members)){
      $add_user = file_get_contents('us.txt');
      $add_user .= $chat_id."\n";
     file_put_contents('us.txt',$add_user);
    }
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"Shu hali aytganimizdak bu bot orqali zerikmayasizde deyarli lekin sizga bitta taklif bor kanalimizga qo'shilsangiz undan ham zerikmaysiz 💖",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  	  [
	  ['text'=>"📣 Zeriktirmaydigan kanal 💖",'url'=>"http://telegram.me/$kanalimz"]
	  ]
		]
		])
  ]);
}

//Admin uchun qulay panel

elseif($text == "/panel" && $chat_id == $ADMIN){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"$name Meni xojayinim siz ekansiz demak siz bob panelim xojayin!!!"
      'reply_markup'=>json_encode([
            'keyboard'=>[",
                'parse_mode'=>'html',
              [
              ['text'=>"Botdagi A`zolar"],['text'=>"Yangiliklar 💎"]
              ]
              ],'resize_keyboard'=>true
        ])
            ]);
        }
elseif($text == "Yangiliklar 💎" && $chat_id == $ADMIN){
	sendaction($chat_id,'typing');
    $user = file_get_contents("us.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
	sendmessage($chat_id , "Xojayin qiziq ekansizu yangilik korish uchun yangilik kiritingda menga💎   : $member_count" , "html");
}
elseif($text == " Yangiliklar 💎" && $chat_id == $ADMIN){
    file_put_contents("ali.txt","bc");
	sendaction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"Botga hozircha yangiliklar yozilmagan 📝",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'/panel']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($ali == "bc" && $chat_id == $ADMIN){
    file_put_contents("ali.txt","none");
	SendAction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"Xojayin sal menga ham etibor berib turing kanalizga men odam toplaymabmana.",
  ]);
	$all_member = fopen( "us.txt", "r");
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
			SendMessage($user,$text,"html");
		}
}

elseif ($data == "go") {
sendaction($chat_id,'typing');
  bot('editmessagetext',[
    'chat_id'=>$chatid,
	'message_id'=>$message_id,
    'text'=>"Sizi odamligizga shubxa qildm jinsizi korsatvoring 😌",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
		['text'=>"Mujik",'callback_data'=>"erkak"],['text'=>"Ayol",'callback_data'=>"ayol"]
	  ]
      ]
    ])
  ]);
 }
elseif ($data == "o") {
sendaction($chat_id,'typing');
  bot('sendmessage',[
    'chat_id'=>$chatid,
	'message_id'=>$message_id,
    'text'=>"Odamligizi tasdiqlash uchun jinsingizni ko`rsating 😞 Ozingiz haqingizda batafsil bilish uchun $kanalimz orqali bilib oling",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
		['text'=>"Erkak",'callback_data'=>"erkak"],['text'=>"Ayol",'callback_data'=>"ayol"]
	  ]
      ]
    ])
  ]);
 }
elseif($data == "erkak" ){
    file_put_contents("ali.txt","man");
	sendaction($chat_id,'typing');
	bot('editmessagetext',[
        'chat_id'=>$chatid,
	'message_id'=>$message_id,
    'text'=>"Salom botimizni $name ismli mujigi yoge mushigi albatta hazil erkagi qalaysiz endi.Bir erkakligizi korsatib shu sizdaqa ajoyib erkaklar kanaliga qoshilmaysizmi ? hamma erkaklar bor faqat siz kamde $kanalimz kiring hammamiz kutyapmiz",
  ]);
}
elseif($data == "ayol" ){
    file_put_contents("ali.txt","woman");
	sendaction($chat_id,'typing');
	bot('editmessagetext',[
       'chat_id'=>$chatid,
	'message_id'=>$message_id,
    'text'=>"Salom botimizni $name ismli gozal va betakror ayoli sizni kordimu botligim esimdan chiqib qoldi. Shu sizdan bitta iltimos borda siz kabi chiroyli qizlar bor joyga tashrif buyurishingizni juda ham istardimda",
  ]);
}
elseif($ali == "erkak" ){
sendaction($chat_id,'typing');
    file_put_contents("ali.txt","no");
	sendaction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"Ha brat qale ishlar endi $kanalimz kirasizmi hammamiz sizni kutyapmiz siz haqizda juda maqtab yozdik kiringda 😼  ....",
        	    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  	  [
	  ['text'=>"Kirib korish 😂",'callback_data'=>"o"]
	  ]
		]
		])
  ]);
  sendaction($chat_id,'upload_photo');
  bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>$imgm,
    	'caption'=>" Botga rasmiy vazifa yuklanmoqda 🙈"
  ]);
}
elseif($ali == "ayol" ){
sendaction($chat_id,'typing');
    file_put_contents("ali.txt","no");
	sendaction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"$Name juda ham chiroylisiz gap yo qareng sizi rasmlarizi tarqatishvoribdi kiring korasiz $kanalimz 😼.....",
        	    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  	  [
	  ['text'=>"Marhamat qiling xonim ! 😂",'callback_data'=>"o"]
	  ]
		]
		])
  ]);
  sendaction($chat_id,'upload_photo');
  bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>$imgw,
    	'caption'=>"Rasmiy vazifa botga yuklandi 🙈",
  ]);
}
  								?>
