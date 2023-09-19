<?php
 require_once ("ayarlar/fonksiyonlar.php");
$Veritabanibaglantisi= new PDO("mysql:host=localhost; dbname=hazalzengin; charset=UTF8","root","");
if(isset($_POST["email"])){
  $GelenEmailAdresi=Guvenlik($_POST["email"]);
}else{
  $GelenEmailAdresi="";
}
if(isset($_POST["pass"])){
  $GelenSifre=Guvenlik($_POST["pass"]);
}else{
  $GelenSifre="";
}

if($_POST){
  $result = $Veritabanibaglantisi->prepare("SELECT * FROM bagısaluye WHERE email='$GelenEmailAdresi' AND sifre='$GelenSifre'");
  $result->execute();
  $KullaniciSayisi=$result->rowCount();
  $KullaniciKaydi= $result->fetch(PDO::FETCH_ASSOC);
  if($KullaniciSayisi>0){
      header("Location:index.php?sayfakodu=47");
    ?>
    s
    <?php
  }
  else{
      header("Location:index.php?sayfakodu=49");
  }
}
  ?>
