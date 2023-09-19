<?php

if ($_GET){

$count=count(file("txt.txt"));
if ($count>100){
	$ok=fopen("txt.txt","w");
fwrite($ok,"");
fclose($ok);
}else {


$dosya="txt.txt";
$oku=fopen("$dosya","r");


while (!feof($oku)){

echo fgets($oku)."<br>";
}
fclose($oku);

}
}//get son

 ?>
