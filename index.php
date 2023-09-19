<?php
session_start();ob_start();
require_once("ayarlar/ayar.php");
require_once("ayarlar/fonksiyonlar.php");
require("sitesayfalari.php");
if(isset($_REQUEST["sayfakodu"])){
  $SayfaKoduDeger =SayiliIcerikleriFiltrele($_REQUEST["sayfakodu"]);
}else{
  $SayfaKoduDeger= 0;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $SiteTitle; ?></title>
    <script src="jquery.js" type="text/javascript"></script>
    <script src="kay.js" type="text/javascript"></script>
    <link href="ayarlar/still.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.page{
  width: 1000px;
  margin: 0 auto;
}
.sliderKonum{
    position: relative;
    width: 1000px;
    height:500px;
    overflow: hidden;
}
.img-bir{left: 0px;}
.img-iki{left: 700px;}
.img-uc{left: 1400px;}
.sliderKonum > .slider{
     position: absolute;
     left:0px;
     width: 2800px;
     height: 200px;
     -webkit-animation-duration: 10s;
     -webkit-animation-name: sliders;
     -webkit-animation-iteration-count:infinite;
     -moz-animation-duration: 10s;
     -moz-animation-name: sliders;
     -moz-animation-iteration-count:infinite;
     -ms-animation-duration: 10s;
     -ms-animation-name: sliders;
     -ms-animation-iteration-count:infinite;
     animation-duration: 10s;
     animation-iteration-count:infinite;
   }
   @-webkit-keyframes sliders{

     20% {left:-700px;}
     30% {left:-700px;}
     40% {left:-1400px;}
     50% {left:-1400px;}
   }
   @-moz-keyframes sliders{
     0% {left:0px;}
     10% {left:0px;}
     20% {left:-700px;}
     30% {left:-700px;}
     40% {left:-1400px;}
     50% {left:-1400px;}
   }
   @-ms-keyframes sliders {
     0% {left:0px;}
     10% {left:0px;}
     20% {left:-700px;}
     30% {left:-700px;}
     40% {left:-1400px;}
     50% {left:-1400px;}
   }
   @keyframes sliders{
     0% {left:0px;}
     10% {left:0px;}
     20% {left:-700px;}
     30% {left:-700px;}
     40% {left:-1400px;}
     50% {left:-1400px;}
   }

 @-webkit-keyframes come-in {
   0% {
     -webkit-transform: translatey(100px);
             transform: translatey(100px);
     opacity: 0;
   }
   30% {
     -webkit-transform: translateX(-50px) scale(0.4);
             transform: translateX(-50px) scale(0.4);
   }
   70% {
     -webkit-transform: translateX(0px) scale(1.2);
             transform: translateX(0px) scale(1.2);
   }
   100% {
     -webkit-transform: translatey(0px) scale(1);
             transform: translatey(0px) scale(1);
     opacity: 1;
   }
 }
 @keyframes come-in {
   0% {
     -webkit-transform: translatey(100px);
             transform: translatey(100px);
     opacity: 0;
   }
   30% {
     -webkit-transform: translateX(-50px) scale(0.4);
             transform: translateX(-50px) scale(0.4);
   }
   70% {
     -webkit-transform: translateX(0px) scale(1.2);
             transform: translateX(0px) scale(1.2);
   }
   100% {
     -webkit-transform: translatey(0px) scale(1);
             transform: translatey(0px) scale(1);
     opacity: 1;
   }
 }

 ul {
     list-style-type: none;
     overflow: hidden;
     padding: 0;
     margin: 0;
 }

 li {
     float: left;
 }

 li a {
     color: white;
     display: block;
     text-align: center;
     padding: 10px 10px;
     text-decoration: none;
 }
 ul li a:hover{
   background-color: white;
   color:red;
 }
 .to-up{
    display: none;
    height: 60px;
    width: 60px;
    border-radius: 60px;
    background-color:red;
    color: white;
    font-size: 24px;
    line-height: 60px;
    text-align: center;
    position: fixed;
    top: 600px;
    left:15px
    z-index: 1;
}

.new-size{
    font-size: 40px;
}

.to-up:hover{
    cursor: pointer;
    background-color: purple;
    transition: 0.5s;
}



/* donate button */
.donate{
    display: none;
    height: 60px;
    width: 60px;
    border-radius: 30px;
    background-color: red;
    color: white;
    font-size: 40px;
    line-height: 60px;
    text-align: center;
    position: fixed;
    top: 500px;
    z-index: 1;
    text-decoration: none;
    transition: 0.4s;
    font-size: 24px;
    line-height: 60px;
}
.donate:hover{
    width: 200px;
    background-color: purple;
}

 </style>
  </head>
  <body>
    <div class="sayfa">
    <header>
      <a href="index.php?sayfakodu=54"><img src="resimler/heart.svg" width="100" height="100"></a>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="new.css" type="text/css" rel="stylesheet"/>
      <div class="floating-container">
        <div class="floating-button">+</div>
        <div class="element-container">
          <a href="tel:+905005005050">
           <span class="float-element tooltip-left">
           <i class="material-icons">phone
            </i>
          </span></a>
            <a href="mailto:someone@example.com">
              <span class="float-element">
            <i class="material-icons">email
      </i></a>
          </span>
          <a href="https://wa.me/905001234567">
            <span class="float-element">
            <i class="material-icons">chat</i>
          </span>
          </a>
        </div>
      </div>
      <div>
      <a class="to-up">UP</a>
          <a href="index.php?sayfakodu=12" class="donate">DONATE<i class="fa-solid fa-arrow-right"></i></a>
    </div>
      <div class="float">
              <form method="get" action="/webproject/" >
              <input id="call" autocomplete="off" class= "inputs" type="text" name="search" placeholder="Searching  about donate  " />
              <input  class="Formbuton" type="submit" value="SUBMIT"></form></div>
              <div class="float">
                  <td class="AltMenu"><a href="index.php?sayfakodu=1"></td>
                  <img  src="https://w7.pngwing.com/pngs/426/859/png-transparent-computer-icons-user-membership-black-area-user-thumbnail.png" width="50" height="50" alt="üyegiris">
                </a>
              <td class="AltMenu"><a href="index.php?sayfakodu=6"></td>
                  <img style='background-color:white;' src="https://www.nfitdiyet.com/images/memberIcon.png" width="50" height="50">
                  </a>
                </div>
                <?php
              if(isset($_GET['search'])){
                $kelime = $_GET['search'];
                if ($kelime== "clothes") {
                    header("Location:http://localhost/webproject/index.php?sayfakodu=28");
                }
                if ($kelime== "trousers") {
                    header("Location:http://localhost/webproject/index.php?sayfakodu=25");
                }
                if ($kelime== "sweater") {
                    header("Location:http://localhost/webproject/index.php?sayfakodu=21");
                }
                if ($kelime== "t-shirt") {
                    header("Location:http://localhost/webproject/index.php?sayfakodu=28");
                }
                if ($kelime== "bags") {
                    header("Location:http://localhost/webproject/index.php?sayfakodu=28");
                }
                if ($kelime== "donate") {
                    header("Location:http://localhost/webproject/index.php?sayfakodu=12");
                }
                if ($kelime== "another") {
                    header("Location:http://localhost/webproject/index.php?sayfakodu=38");
                }
              }

                ?>

                <ul>
                    <li><a href="index.php?sayfakodu=0"><b>HOME PAGE</b></a></li>
                    <li><a href="index.php?sayfakodu=48"><b>ABOUT US<b></a></li>
                    <li><a href="index.php?sayfakodu=43"><b>GET DONATE</a>
                    </b></li>
                  <li><a href="index.php?sayfakodu=31"><b>CONTACT<b></a></li>
                </ul>

  </header>
  <section>
<table id="test" style='background-color:white;'>
  <td width="100"><a class="l" href="index.php?sayfakodu=28"> CLOTHES </a></td>
  <td width="100"><a  class="l" href="index.php?sayfakodu=29"> SWEATER     </a>  </td>
  <td width="100"><a class="l" href="index.php?sayfakodu=51">TROUSERS </a>   </td>
  <td width="100"><a class="l" href="index.php?sayfakodu=52">T-SHIRT </a></td>
<td width="100"><a class="l" href="index.php?sayfakodu=53">ANOTHER </a></td>
  <td width="100"></td>
  <td width="100"></td>
  <td width="100"></td>
  <td width="100"></td>
  <td width="800"></td>
  <td width="100"></td>
        </section>
  <div class="page">
            <div class="sliderKonum">
                <div class="slider">
                    <a class="img-bir" href="">
                        <img src="https://www.gelisimhastanesi.com/Content/UserFiles/Slider/Orjinal/organ-bagisi_organ-bagisi-web-banner-421t7.jpg"  width="700" height="500" alt="resim">
                    </a>
                    <a class="img-iki" href="">
                        <img src="https://static.daktilo.com/sites/814/uploads/2022/11/07/large/zmitte-kiyafet-bagisi-dayanismasi-devam-ediyor-1-1667812424.jpeg" width="700" height="500" alt="resim">
                    </a>
                    <a class="img-uc" href="">
                        <img src=" https://yesilyama.com/yesilyama/uploads/2016/02/giyilmeyen-kiyafetler.jpg" width="700" height="500" alt="resim">
                    </a>
                </div>
            </div>
      </div>


      <table width="1000" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center"> <?php
                  if((!$SayfaKoduDeger) or ($SayfaKoduDeger=="") or ($SayfaKoduDeger==0)){
                    include($sayfa[0]);
                  }else{  
                    include($sayfa[$SayfaKoduDeger]);
                  }
                   ?>
               </td>
             </tr>
           </table>
      <footer>
        <table id="test">
          <tr id="test" >
            <td style="border-bottom:3px dashed #CCCCCC ">Kurumsal </td>
            <td  style="border-bottom:3px dashed #CCCCCC " width="500"> &nbsp;</td>
            <td style="border-bottom:3px dashed #CCCCCC " width="200"> Üyelik & Hizmetler  </td>
            <td style="border-bottom:3px dashed #CCCCCC " width="500"> &nbsp;</td>
            <td style="border-bottom:3px dashed #CCCCCC " width="200"> Bizi Takip Edin </td>
            </tr>
            <tr id="test">
              <td><a class="l" href="index.php?sayfakodu=0" > Hizmetler </a></td>
              <td width="500"> &nbsp;</td>
              <td> <a class="l" href="index.php?sayfakodu=6" >Giriş Yap</a> </td>
              <td width="500"> &nbsp;</td>
              <td><img src= "https://www.facebook.com/images/fb_icon_325x325.png" width="15" height="15"><a class="l" href="https://tr-tr.facebook.com/login/device-based/regular/login/?login_attempt=1" target="_blank">Facebook</a> </td>
            </tr>
            <tr id="test" >
              <td> <a class="l" href="index.php?sayfakodu=31" >İletişim </a></td>
              <td width="500"> &nbsp;</td>
              <td> <a class="l" href="index.php?sayfakodu=1" >Yeni Üye Ol</a></td>
              <td width="500"> &nbsp;</td>
              <td><img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Instagram_logo_2022.svg" width="15" height="15"><a class="l" href=" https://www.instagram.com/" target="_blank">İnstagram </a></td>
            </tr>
        </table>

      </footer>
    </div>
  </div>
</div>
  </body>
</html>
<?php
$Veritabanibaglantisi=null; ?>
