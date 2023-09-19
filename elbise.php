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
if (isset($_POST['submit'])) {

$dosya=$_FILES["resim"]["name"];
$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$renk=$_POST['renk'];
$beden=$_POST['beden'];
$konum=$_POST['konum'];
$yas=$_POST['yas'];
$contact=$_POST['cont'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO tbl_resim (ad, soyad, resim_konum,renk,beden,konum,yas,contact)
VALUES ('$ad', '$soyad', '$dosya','$renk','$beden','$konum','$yas','$contact')";

$conn->exec($sql);
echo "<script>alert('Kayıt başarıyla yapıldı!!!');</script>";
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title></title>
</head>
<body>
<table cellpadding="0" cellspacing="0" width=100% >
   <tbody>
     <tr class="elbise">
       <td> Name</td>
       <td>Surname</td>
       <td>Color</td>
       <td> Body Size</td>
       <td>Age</td>
       <td> Location</td>
     </tr>
<?php
 $result = $conn->prepare("SELECT * FROM tbl_resim ORDER BY tbl_resim_id ASC");
 $result->execute();
 for($i=0; $row = $result->fetch(); $i++){
 $id=$row['tbl_resim_id'];
?>
<tr>
<td> <?php echo $row ['ad']; ?></td>
<td> <?php echo $row ['soyad']; ?></td>
<td> <?php echo $row ['renk']; ?></td>
<td> <?php echo $row ['beden']; ?></td>
<td> <?php echo $row ['yas']; ?></td>
<td> <?php echo $row ['konum']; ?></td>
<td>
<?php if($contact=="Evet") {?>
  <head>
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  </head>
  <body>
  <script type="text/javascript">

  $(function(){

  $(".txtarea").keyup(function(e){

  var deger=$(this).val();

  var tcode=e.whitch ? e.whitch : e.keyCode;

  if (tcode=='13'){

  $.post("ajax.php",{txt:deger},function(cevap){


  });

  $(this).val("");
  }


  });


  });//func son

  </script>


  <script type="text/javascript">

  $.loader=function(){
  	var d=5;
  $.get("veri.php",{dd:d},function(cevap){

  $(".yazilar").html(cevap);

  });
  }//func sonu

  setInterval("$.loader()",500);
  </script>
  <div class="yazilar"></div>
  <div class="roteform">
  <form action="" method="post" onsubmit="return false">
  <input type="text" class="txtarea" name="text" placeholder="Contact">
  </form>
  </div>
  </body>
  </html></td>
<?php
}?></td>
<?php if($row['resim_konum'] != ""): ?>
  <td>
<img src="resimler/<?php echo $row['resim_konum']; ?>" width="200px" style="border:1px solid #333333;">
<?php else: ?>
<img src="resimler/bagıs.png" width="200px" height="200px" style="border:1px solid #333333;">
<?php endif; ?>
</td>
</tr>
<?php } ?>
</tbody>
</table>

</body>
</html>