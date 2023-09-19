<?php
$IpAdresi=$_SERVER["REMOTE_ADDR"];
$ZamanDamgası=time();
$tarih=date("d.m.Y H:i.s",$ZamanDamgası);

function RakamalarHaricTumKarakterleriSil($Deger){
  $Islem=preg_replace("/[^0-9]/","",$Deger);
  $Sonuc=$Islem;
  return $Sonuc;
}

function DonusumleriGeriDondur($Deger){
  $GeriDondur=htmlspecialchars_decode($Deger,ENT_QUOTES);
  $Sonuc=$GeriDondur;
  return $Sonuc;

}
function Guvenlik($Deger){
  $bosluksil=trim($Deger);
  $TaglarıTemizle=strip_tags($bosluksil);
  $etkisizyap=htmlspecialchars($TaglarıTemizle);
   $sonuc=$etkisizyap;
   return $sonuc;

}
function SayiliIcerikleriFiltrele($Deger){
  $bosluksil=trim($Deger);
  $TaglarıTemizle=strip_tags($bosluksil);
  $etkisizyap=htmlspecialchars($TaglarıTemizle);
  $Temizle=RakamalarHaricTumKarakterleriSil($etkisizyap);
   $sonuc=$Temizle;
   return $sonuc;

}
function AktivasyonKoduUret(){
  $IlkBesli = rand(10000,99999);
  $IkinciBesli=rand(10000,99999);
  $UcuncuBesli=rand(10000,99999);
  $Kod=$IlkBesli."-".$IkinciBesli."-".$UcuncuBesli;
  $sonuc=$Kod;
  return $sonuc;
}
function FiyatBicimlendir($Deger){
  $Bicimlendir = number_format($Deger,"2",",",".");
  $Sonuc= $Bicimlendir;
  return $Sonuc;
}

 ?>
