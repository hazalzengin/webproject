<?php
require_once("ayarlar/fonksiyonlar.php");
require_once("uyegirissonuc.php");
require_once("ayarlar/ayar.php");
$_SESSION["Kullanici"]=$GelenEmailAdresi;
?>
<?php
if($_SESSION["Kullanici"]==$GelenEmailAdresi){?>
  <tr>
    <td width="500"><table width="500" align="center" border="0" cellspacing="0" cellpadding="0">
      <form action="index.php?sayfakodu=31" method="post">
      <tr height="40">
        <td style="color: red" bottom:"0px"><h3>Hesabım Üyelik Bilgilerim</h3></td>
      </tr>
      <tr height="30">
        <td    valign= "top" style="border-bottom:1px dashed #CCCCCC">Aşağıdan üyelik bilgilerini görüntüleyebilirsin.</td>
</tr>
<tr height="30">
  <td valign="bottom" align="left" color:"red">E-Mail Adresi</td>
</tr>

<tr height="30">
  <td align="left"><?php echo $EmailAdresi;?></td>
</tr>

<tr height="30">
  <td    valign="bottom" align="left">Şifre</td>
</tr>

<tr height="30">
  <td    valign="bottom" align="left"><?php echo $Sifre; ?></td>
</tr>

<tr height="30">
  <td    valign="bottom" align="left">Isim Soyisim</td>
</tr>

<tr height="30">
  <td    valign="bottom" align="left"><?php echo $IsimSoyisim; ?></td>
</tr>


<tr height="30">
  <td    valign="bottom" align="left">Telefon Numarası</td>
</tr>

<tr height="30">
  <td    valign="bottom" align="left"><?php echo $TelefonNumarasi; ?></td>
</tr>

<tr height="30">
  <td    valign="bottom" align="left">Cinsiyet</td>
</tr>

<tr height="30">
  <td    valign="bottom" align="left"><?php echo $Cinsiyet; ?></td>
</tr>

<tr height="30">
  <td    valign="bottom" align="left">Kayıt Tarihi</td>
</tr>

<tr height="30">
  <td    valign="bottom" align="left"><?php echo $KayitTarihi; ?></td>
</tr>

<tr height="30">
  <td     align="center"> <a href="index.php?sayfakodu=12">YAPTIĞINIZ BAĞIŞLARI GÖRMEK İÇİN TIKLAYINIZ.</a></td>
</tr>
</form>
</td>
</table>
<?php }
?>
