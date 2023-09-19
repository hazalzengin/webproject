<?php
try {
  $conn = new PDO("mysql:host=localhost;dbname=hazalzengin", "root", "");
  // Hata modunu etkinleştirme
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
echo $sql . "<br>" . $e->getMessage();
}?>
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
<?php
$result = $conn->prepare("SELECT * FROM etisort ORDER BY id ASC");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$id=$row['id'];
?>
<tr>
<td> <?php echo $row ['ad']; ?></td>
<td> <?php echo $row ['soyad']; ?></td>
<td> <?php echo $row ['renk']; ?></td>
<td> <?php echo $row ['beden']; ?></td>
<td> <?php echo $row ['yas']; ?></td>
<td> <?php echo $row ['konum']; ?></td>
<?php if($row['resim_konum'] != ""): ?>
 <td>
<img src="resimler/<?php echo $row['resim_konum']; ?>" width="200px" style="border:1px solid #333333;">
<?php else: ?>
<img src="resimler/bagıs.png" width="200px" height="200px" style="border:1px solid #333333;">
<?php endif; ?>
</td>
</tr>
<?php } ?>
