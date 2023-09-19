<?php
require_once("ayarlar/ayar.php");
$Veritabanibaglantisi= new PDO("mysql:host=localhost; dbname=hazalzengin; charset=UTF8","root","");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Frameworks/PHPMailer-master/src/Exception.php';
require 'Frameworks/PHPMailer-master/src/PHPMailer.php';
require 'Frameworks/PHPMailer-master/src/SMTP.php';



if(isset($_POST["EmailAdresi"])){
  $GelenEmailAdresi=Guvenlik($_POST["EmailAdresi"]);
}else{
  $GelenEmailAdresi="";
}
if(isset($_POST["Sifre"])){
  $GelenSifre=Guvenlik($_POST["Sifre"]);
}else{
  $GelenSifre="";
}

if($_POST){
if(($GelenEmailAdresi!="") and ($GelenSifre!="")){
   $KontrolSorgusu=$Veritabanibaglantisi->prepare("SELECT * FROM uyeler WHERE EmailAdresi = ? AND Sifre = ?  ");
   $KontrolSorgusu->execute([$GelenEmailAdresi, $GelenSifre]);
   $KullaniciSayisi=$KontrolSorgusu->rowCount();
   $KullaniciKaydi= $KontrolSorgusu->fetch(PDO::FETCH_ASSOC);
    if($KullaniciSayisi>0){
      if($KullaniciKaydi["Durumu"]==1){
        $_SESSION["Kullanici"]=$GelenEmailAdresi;
        if($_SESSION["Kullanici"]==$KullaniciKaydi["EmailAdresi"]){

         header("Location:index.php?sayfakodu=11");

         exit();
        }else{
          header("Location:index.php?sayfakodu=9");
         exit();
        }

      }
    else {
      header("Location:index.php?sayfakodu=17");
      exit();
    }
  }
else{
  header("Location:index.php?sayfakodu=10");
  exit();
}
}
}


//$veritabanibaglantisi=null;

  ?>
