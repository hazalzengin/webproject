<?php
$Veritabanibaglantisi= new PDO("mysql:host=localhost; dbname=hazalzengin; charset=UTF8","root","");

require_once ("ayarlar/fonksiyonlar.php");
if(isset($_POST["Sifre"])){
  $GelenSifre=Guvenlik($_POST["Sifre"]);
}else{
  $GelenSifre="";
}
if(isset($_POST["EmailAdresi"])){
  $GelenEmailAdresi=Guvenlik($_POST["EmailAdresi"]);
}else{
  $GelenEmailAdresi="";
}

if(isset($_POST["YeniSifreTekrar"])){
  $GelenYeniSifreTekrar=Guvenlik($_POST["YeniSifreTekrar"]);
}else{
  $GelenYeniSifreTekrar="";
}

if(($GelenSifre!="") and ($GelenSifreTekrar!="")){
  if($GelenSifre!=$GelenSifreTekrar){
    echo "ŞİFRELERİNİZ UYUŞMAMAKTADIR!!";
  }
  else{
    $UyeGuncellemeSorgusu=$Veritabanibaglantisi->prepare("UPDATE uyeler SET Sifre =? WHERE EmailAdresi=? AND aktivasyon=? ");
    $UyeGuncellemeSorgusu->execute([$GelenSifre]);
    $Kontrol=$UyeGuncellemeSorgusu->rowCount();
    if($Kontrol>0){
      echo "TEBRİKLER, ŞİFRENİZ GÜNCELLENMİŞTİR";
    }
    else{
      echo "ŞİFRENİZ GÜNCELLENEMEDİ. TEKRAR KONTROL EDİNİZ";
    }
  }

}
else{
  echo "EKSİK ALAN BIRAKTINIZ";
}
?>
