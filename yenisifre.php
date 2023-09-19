<?php
require_once ("ayarlar/fonksiyonlar.php");
if(isset($_POST["AktivasyonKodu"])){
  $GelenAktivasyonKodu=Guvenlik($_POST["AktivasyonKodu"]);
}else{
  $GelenAktivasyonKodu="";
}
if(isset($_POST["EmailAdresi"])){
  $GelenEmail=Guvenlik($_POST["EmailAdresi"]);
}else{
  $GelenEmail="";
}

if(isset($_POST["Sifre"])){
  $GelenSifre=Guvenlik($_POST["Sifre"]);
}else{
  $GelenSifre="";
}

if(isset($_POST["YeniSifreTekrar"])){
  $GelenYeniSifreTekrar=Guvenlik($_POST["YeniSifreTekrar"]);
}else{
  $GelenYeniSifreTekrar="";
}

$AktivasyonKodu=AktivasyonKoduUret();

if(($GelenAktivasyonKodu!="")and ($GelenEmail!="")and ($GelenSifre!="") and ($GelenSifreTekrar!="")){
    $KontrolSorgusu=$veritabanibaglantisi->prepare("UPDATE uyeler SET  Sifre= ? WHERE  EmailAdresi= ? AND aktivasyon= ? LIMIT 1");
    $KontrolSorgusu->execute([$GelenAktivasyonKodu,$GelenEmail]);
    $KayitKontrol=$KontrolSorgusu->rowCount();
    $KullaniciKaydi= $KontrolSorgusu->fetch(PDO::FETCH_ASSOC);

    if($KullaniciKaydi>0){
    ?>

<?php
}else{
  header("Location:index.php?sayfakodu=aaaa");
  exit();
}
}
?>
<form action="index.php?sayfakodu=41 " method="post">
<table width="1000" align="center" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td width="500"><table width="500" align="center" border="0" cellspacing="0" cellpadding="0">
              <tr height="40">
             <td style="color: red" bottom:"0px"><h3>Şifremi Unuttum</h3></td>
           </tr>
           <tr height="30">
             <td colspan="2" valign= "top" style="border-bottom:1px dashed #CCCCCC">Aşağıdan hesabına yeni şifre oluşturma talebi başlatabilirsiniz.</td>
                 </tr>
<tr height="30">
<td colspan="2" valign="bottom" align="left">Yeni Şifre</td>
</tr>
<tr height="30">
<td colspan="2" valign="top"><input type="password" name="YeniSifre" class="InputAlani"></td>
</tr>

<tr height="30">
<td colspan="2" valign="bottom" align="left">Yeni Sifre Tekrar</td>
</tr>
<tr height="30">
<td colspan="2" valign="top"><input type="password" name="YeniSifreTekrar" class="InputAlani"></td>
</tr>

<td colspan="2" align="center"><input type="submit" value="Şifremi Güncelle" class="YesilButon"></td>
</table>
</td>
<td width="20">&nbsp;</td>
<td width="500"><table width="500" align="center" border="0" cellspacing="0">
</tr>
</table></td>
</tr>
</table>
</form>
