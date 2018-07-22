<?php
date_default_timezone_set('Asia/Jakarta');
$yx = opendir('addtoken1');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=1&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
$x=$stat[data][$i-1][id].'~'; 
$y= fopen('komen.txt','a');
fwrite($y,$x); fclose($y);
$text = array(
'✌ ʙʀᴏᴛʜᴇʀx :* sᴀʟʟᴜ :* ᴀᴍᴇᴇ :* ᴢᴀɪɴᴜ <3 ʜᴀsɴᴏ <3 ʜᴀʙɪʙ :* ᴘᴏʟᴜ ;) ᴀᴍᴍᴀᴅ ✌ ',
);

$comments = $text[rand(0,count($text)-1)];

$site = ''.$emoticon.' '.$emoticon.'';

$return = ' '.$comments.' 
'.$site.' ';

$react = array(
'WOW',
'LIKE',
'LOVE',
);
$stickers= array('392309624199683','334188620117492','785424294962258', '575284979224213','465624336970446','396449313832508',);
$mess=$stickers[rand(0,count($stickers)-1)];
$reaction = $react[rand(0,count($react)-1)];

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($comments).'&attachment_id='.$mess.'&access_token='.$token.'&method=POST');
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/reactions?type=LOVE&method=POST&access_token='.$token.'');
echo '<center><hr>Done To => '.$stat[data][$i-1][from][name].' </hr></center>';
}
}

function auto($url) {
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl); 
return $ch;
}

?>