<?php
 require_once ("ayarlar/fonksiyonlar.php");
$Veritabanibaglantisi= new PDO("mysql:host=localhost; dbname=hazalzengin; charset=UTF8","root","");
if(isset($_POST["msg"])){
  $msg=Guvenlik($_POST["msg"]);
}else{
  $msg="";
}

if($_POST){
  $result = $Veritabanibaglantisi->prepare("INSERT INTO bagıslar  (message)VALUE('$msg')");
  $result->execute();?>
  <img src="resimler/donate.jpg" width="600">
  <?php
  echo "<h1>WE CAN TAKE YOUR MESSAGE AND WE TO REACH YOU.</h1>";
}
  ?>
