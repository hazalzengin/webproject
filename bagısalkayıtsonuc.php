<?php
// bağlantı oluşturma
try {
  $conn = new PDO("mysql:host=localhost;dbname=hazalzengin", "root", "");
  // Hata modunu etkinleştirme
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}

if (isset($_POST["submit"])) {
$ad=$_POST["isim"];
$soyad=$_POST['soyad'];
$email=$_POST['email'];
$yas=$_POST['yas'];
$ogretim=$_POST['ogretim'];
$aile=$_POST['aile'];
$dosya=$_FILES["resim"]["name"];
$sayi=$_POST['calisansayisi'];
$cinsiyet=$_POST['cinsiyet'];
$msg=$_POST['msg'];
$pass=$_POST['password'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO bagısaluye (isim, soyisim, yas,ogretimdurumu,aile,gelir,calısan,cinsiyet,email,sifre,message,durum)
VALUES ('$ad', '$soyad', '$yas','$ogretim','$aile','$dosya','$sayi','$cinsiyet','$email','$pass','$msg',1)";
header("Location:index.php?sayfakodu=3");

}
else{
    header("Location:index.php?sayfakodu=");
}

?>
