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


if (isset($_POST['Submit'])) {
  $dosya=$_FILES["resim"]["name"];
  $ad=$_POST['ad'];
  $soyad=$_POST['soyad'];
  $renk=$_POST['renk'];
  $beden=$_POST['beden'];
  $konum=$_POST['konum'];
  $yas=$_POST['yas'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO tisort (isim, soyisim, resim,renk,beden,konum,yas)
VALUES ('$ad', '$soyad', '$dosya','$renk','$beden','$konum','$yas')";

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
 $result = $conn->prepare("SELECT * FROM tisort ORDER BY id ASC");
 $result->execute();
 for($i=0; $row = $result->fetch(); $i++){
 $id=$row['id'];
?>
<tr>
<td> <?php echo $row ['isim']; ?></td>
<td> <?php echo $row ['soyisim']; ?></td>
<td> <?php echo $row ['renk']; ?></td>
<td> <?php echo $row ['beden']; ?></td>
<td> <?php echo $row ['yas']; ?></td>
<td> <?php echo $row ['konum']; ?></td>
<?php if($row['resim'] != ""): ?>
  <td>
<img src="resimler/<?php echo $row['resim']; ?>" width="200px" style="border:1px solid #333333;">
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
