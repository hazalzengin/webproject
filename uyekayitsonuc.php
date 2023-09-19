<?php
require_once("ayarlar/ayar.php");

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP();

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
if(isset($_POST["IsimSoyisim"])){
  $GelenIsimSoyisim=Guvenlik($_POST["IsimSoyisim"]);
}else{
  $GelenIsimSoyisim="";
}

if(isset($_POST["TelefonNumarasi"])){
  $GelenTelefonNumarasi=Guvenlik($_POST["TelefonNumarasi"]);
}else{
  $GelenTelefonNumarasi="";
}

if(isset($_POST["Cinsiyet"])){
  $GelenCinsiyet=Guvenlik($_POST["Cinsiyet"]);
}else{
  $GelenCinsiyet="";
}
if(isset($_POST["SozlesmeOnay"])){
  $GelenSozlesmeOnay=Guvenlik($_POST["SozlesmeOnay"]);
}else{
  $GelenSozlesmeOnay="";
}
$AktivasyonKodu=AktivasyonKoduUret();
if(($GelenIsimSoyisim!="")and($GelenEmailAdresi!="")and($GelenTelefonNumarasi!="")and($GelenCinsiyet!="")and($GelenSozlesmeOnay!="")){
      $MailIcerigiHazirla="Merhaba sayın ".$GelenIsimSoyisim."<br /> <br /> Sitemize kayıt olmak için linke tıklayıp hesabınızı aktive ediniz.
           <a href='"."yenisifre.php".$AktivasyonKodu."'>buraya tıklayınız</a>.<br />";
           $UyeEklemeSorgusu=$VeritabaniBaglantisi->prepare(" INSERT INTO uyeler (EmailAdresi,Sifre,IsimSoyisim,TelefonNumarasi,Cinsiyet,Durumu,KayitTarihi,aktivasyon) values (?,?,?,?,?,?,?,?)");
           $UyeEklemeSorgusu->execute([$GelenEmailAdresi,$GelenSifre,$GelenIsimSoyisim,$GelenTelefonNumarasi,$GelenCinsiyet,1,date("Y-m-d H:i:s"),$AktivasyonKodu]);
           $KayitKontrol=$UyeEklemeSorgusu->rowCount();
            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = "smtp.yandex.com";
            $mail->Port = 465; // or 587
            $mail->IsHTML(true);
            $mail->Username = "hazal1311@yandex.com";
            $mail->Password = "lubalgyzhxaxivpm";
            $mail->SetFrom("hazal1311@yandex.com");
            $mail->Subject = "KOD";
            $mail->Body = $MailIcerigiHazirla;
            $mail->AddAddress($GelenEmailAdresi);

             if(!$mail->Send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
             } else {
                header("Location:index.php?sayfakodu=3");
             }

    }

else{
  header("Location:index.php?sayfakodu=5");
  exit();
}

  ?>
