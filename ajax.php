<?php

if ($_POST){

$txt=$_POST['txt'];
$dosya="txt.txt";

if (!empty($txt)){

$oku=fopen("$dosya","a");
fwrite($oku,"\nMisafir:{$txt}\r");
fclose($oku);

}

}

 ?>
