<?php
session_start();
ob_start();
require_once("ayarlar/ayar.php");
require_once ('ayarlar/fonksiyonlar.php');
if(isset($_POST["aktivasyon"])){
  $GelenAktivasyonKodu=Guvenlik($_POST["aktivasyon"]);
}else{
  $GelenAktivasyonKodu="";
}

if(isset($_POST["EmailAdresi"])){
  $GelenEmail=Guvenlik($_POST["EmailAdresi"]);
}else{
  $GelenEmail="";
}

if(($GelenAktivasyonKodu!="")and ($GelenEmailAdresi)){
  $KontrolSorgusu=$veritabanibaglantisi->prepare("Select * FROM  uyeler  WHERE  EmailAdresi= ? AND AktivasyonKodu= ? LIMIT 1");
  $KontrolSorgusu->execute([$GelenAktivasyonKodu,$GelenEmail]);
  $KayitKontrol=$KontrolSorgusu->rowCount();
  $KullaniciKaydi= $KontrolSorgusu->fetch(PDO::FETCH_ASSOC);
}


 ?>
