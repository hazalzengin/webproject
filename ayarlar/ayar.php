  <?php
try{
  $VeritabaniBaglantisi= new PDO("mysql:host=localhost;dbname=hazalzengin;charset=UTF8","root","");

}catch(PDOException $Hata){
  die();
}
$AyarlarSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM ayarlar LIMIT 1");
$AyarlarSorgusu->execute();
$AyarSayisi =$AyarlarSorgusu->rowCount();

$Ayarlar=$AyarlarSorgusu->fetch(PDO::FETCH_ASSOC);
if($AyarSayisi>0){
  $SiteAdi=$Ayarlar["SiteAdi"];
  $SiteTitle=$Ayarlar["SiteTitle"];
  $SiteDescription=$Ayarlar["SiteDescription"];
  $SiteKeywords=$Ayarlar["SiteKeywords"];
  $SiteCopyrightMetni=$Ayarlar["SiteCopyrightMetni"];
  $SiteLogosu=$Ayarlar["SiteLogosu"];
  $SiteEmailAdresi=$Ayarlar["SiteEmailAdresi"];
  $SiteEmailSifresi=$Ayarlar["SiteEmailSifresi"];

}else{
die();
}


if(isset($_SESSION["Kullanici"])){
  $KullaniciSorgusu=$VeritabaniBaglantisi->prepare("SELECT*FROM uyeler WHERE EmailAdresi = ? LIMIT 1");
  $KullaniciSorgusu->execute([$_SESSION["Kullanici"]]);
  $KullaniciSayisi=$KullaniciSorgusu->rowCount();
  $Kullanici=$KullaniciSorgusu->fetch(PDO::FETCH_ASSOC);
  if($KullaniciSayisi>0){
    $KullaniciID = $Kullanici["id"];
    $EmailAdresi = $Kullanici["EmailAdresi"];
    $Sifre = $Kullanici["Sifre"];
    $IsimSoyisim =$Kullanici["IsimSoyisim"];
    $TelefonNumarasi =$Kullanici["TelefonNumarasi"];
    $Cinsiyet =$Kullanici["Cinsiyet"];
    $Durumu =$Kullanici["Durumu"];
    $KayitTarihi =$Kullanici["KayitTarihi"];
  }else{
    echo"site ayar sorgusu hatalı <br />";
    die();
  }
}


 ?>
