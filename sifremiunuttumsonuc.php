<?php
require_once("ayarlar/ayar.php");

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP();
if(isset($_POST["Email"])){
  $GelenEmailAdresi=Guvenlik($_POST["Email"]);
}else{
  $GelenEmailAdresi="";
}
if(isset($_POST["TelefonNumarasi"])){
  $GelenTelefonNumarasi=Guvenlik($_POST["TelefonNumarasi"]);
}else{
  $GelenTelefonNumarasi="";
}
if(isset($_POST["IsimSoyisim"])){
  $GelenIsimSoyisim=Guvenlik($_POST["IsimSoyisim"]);
}else{
  $GelenIsimSoyisim="";
}
if(($GelenEmailAdresi!="") or ($GelenTelefonNumarasi!="")){
  $MailIcerigiHazirla= "Merhaba sayın "."<br /> <br /> Sitemizde kayıtlı olan şifrenizi sıfırlamak için lütfen
       <a href='"."http://localhost/webproject/index.php?sayfakodu=42'>buraya tıklayınız</a>.<br />";

       $KontrolSorgusu=$VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE EmailAdresi = ? OR TelefonNumarasi = ?  ");
       $KontrolSorgusu->execute([$GelenEmailAdresi,$GelenTelefonNumarasi]);
       $KullaniciSayisi=$KontrolSorgusu->rowCount();
       $KullaniciKaydi= $KontrolSorgusu->fetch(PDO::FETCH_ASSOC);
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
            ?>
            <h1><p style="color:red">  MESSAGE HAS BEEN SENT..</p></h1>
            <?php
         }

        //  header("Location:index.php?sayfakodu=qqqq");
          exit();
      }
    else {
      header("Location:index.php?sayfakodu=zzz");
      exit();
    }

?>




  ?>
