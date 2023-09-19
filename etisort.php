<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <style>

    .contact {
        background-color: #fff;
        margin: 0 auto;
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,.2);
        float:left;
        width:300px;
    }
    .contact .fields {
        position:relative;
        padding: 15px;
    }
    .contact input[type="text"], .contact input[type="num"] ,.contact select{
        display: block;
        margin-top: 15px;
        padding: 15px;
        border: 1px solid #dfe0e0;

    }
    .contact input[type="text"]:focus, .contact input[type="num"]:focus .contact select:focus{
        border: 1px solid #c6c7c7;
    }
    .contact input[type="text"]::placeholder,
    .contact input[type="file"]::placeholder,
    .contact input[type="num"]::placeholder {
        color: #858688;
    }

    .contact input[type="submit"] {
        display: block;
        margin-top: 15px;
        padding: 15px;
        border: 0;
        background-color: #518acb;
        font-weight: bold;
        color: #fff;
        cursor: pointer;


    }
    .contact input[type="Submit"]:hover {
        background-color: #3670b3;
    }
    .contact label {
        position: relative;
    }
    .contact .responses {
        padding: 15px;
        margin: 0;
    }
    </style>
</head>
<body>
<h1 style="color:#518acb">TİŞÖRT ALANIDA BAĞIŞINDA BULUNMAK İÇİN AŞAĞIDAKİ FORMU DOLDURUNUZ.</h1>
<form method="post" action="index.php?sayfakodu=40"  enctype="multipart/form-data" >
<table class="contact">
	<tr class="fields">
		<td><label style="color:#3a87ad; font-size:18px;">İsim</label></td>
		<td><input type="text" name="ad" placeholder="Adınız" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Soyisim</label></td>
		<td><input type="text" name="soyad" placeholder="Soyadınız" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Resim Seçin</label></td>
		<td><input type="file" name="resim"></td>
	</tr>
  <tr>
		<td><label style="color:#3a87ad; font-size:18px;">Beden</label></td>
		<td><input type="text" name="beden" placeholder="Beden" required /></td>
	</tr>
  <tr>
		<td><label style="color:#3a87ad; font-size:18px;">Yaş</label></td>
		<td><input type="num" name="yas" placeholder="Yaş" required /></td>
	</tr>
  <tr>
		<td><label style="color:#3a87ad; font-size:18px;">Renk</label></td>
		<td><input type="text" name="renk" placeholder="Renk" required /></td>
	</tr>
  <tr>
		<td><select style="color:#3a87ad; font-size:16px;" name="cont" placeholder="Contact" required />
		<option selected>Do you want contact?</option>
    <option >Evet</option>
    <option >Hayır</option>
	</tr>
  <tr>
		<td><select  style="color:#3a87ad; font-size:16px;" name="konum" placeholder="Konumunuz" required />
        <option selected>Bağış Yapmak İstediğiniz Yeri Seçiniz</option>
  <option >Adana</option>
  <option >Adıyaman</option>
  <option >Ağrı</option>
  <option>Amasya</option>
  <option >Ankara</option>
  <option >Antalya</option>
  <option >Artvin</option>
  <option >Aydın</option>
  <option >Balıkesir</option>
  <option >Bilecik</option>
  <option >Bingöl</option>
  <option >Bitlis</option>
  <option>Bolu</option>
  <option>Burdur</option>
  <option >Bursa</option>
  <option >Çanakkale</option>
  <option>Çankırı</option>
  <option>Çorum</option>
  <option>Denizli</option>
  <option >Diyarbakır</option>
  <option >Edirne</option>
  <option >Elazığ</option>
  <option >Erzincan</option>
  <option>Erzurum</option>
  <option>Eskişehir</option>
  <option >Gaziantep</option>
  <option >Giresun</option>
  <option >Gümüşhane</option>
  <option >Hakkâri</option>
  <option >Hatay</option>
  <option >Isparta</option>
  <option >Mersin</option>
  <option >İstanbul</option>
  <option >İzmir</option>
  <option >Kars</option>
  <option >Kastamonu</option>
  <option> Kayseri</option>
  <option >Kırklareli</option>
  <option >Kırşehir</option>
  <option >Kocaeli</option>
  <option >Konya</option>
  <option>Kütahya</option>
  <option >Malatya</option>
  <option >Manisa</option>
  <option >Kahramanmaraş</option>
  <option >Mardin</option>
  <option >Muğla</option>
  <option >Muş</option>
  <option >Nevşehir</option>
  <option >Niğde</option>
  <option >Ordu</option>
  <option >Rize</option>
  <option >Sakarya</option>
  <option >Samsun</option>
  <option >Siirt</option>
  <option >Sinop</option>
  <option>Sivas</option>
  <option >Tekirdağ</option>
  <option >Tokat</option>
  <option >Trabzon</option>
  <option >Tunceli</option>
  <option >Şanlıurfa</option>
  <option >Uşak</option>
  <option >Van</option>
  <option >Yozgat</option>
  <option >Zonguldak</option>
  <option >Aksaray</option>
  <option >Bayburt</option>
  <option>Karaman</option>
  <option >Kırıkkale</option>
  <option >Batman</option>
  <option >Şırnak</option>
  <option >Bartın</option>
  <option >Ardahan</option>
  <option>Iğdır</option>
  <option >Yalova</option>
  <option >Karabük</option>
  <option v>Kilis</option>
  <option >Osmaniye</option>
  <option >Düzce</option>
</select></td></tr>
<tr>
<td>
<input type="submit" name="submit"></input></td>
    </tr>
</table>
</form>
<img style="float:right" src="resimler/man2.webp" width="400" height="400">
<div style="float:right"> Gardırobunuzu en son ne zaman düzenlediniz? Düzenlerken belki yıllardır giyilmeyen kıyafetler buldunuz ve belki bir gün giyerim diyerek özenle katlayıp en arkalara yerleştirdiniz mi?
     Şu an farkında olmasanız da o kıyafetler aslında sizin için bir yük. Ve artık bu yüklerden kurtulma zamanı geldi. Nasıl mı? Eski kıyafetleri bağışlamak bunun için en güzel yol. Peki, eski kıyafetler nereye verilir? Gelin bu sorunun cevabına birlikte bakalım.
<br></br>
   </div>
</body>
</html>
