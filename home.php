<!DOCTYPE html>
<html>
<head>
<title>ajax_chat</title>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
<style type="text/css">


</style>


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
<input type="text" class="txtarea" name="text" placeholder="buraya yaz...">
</form>
</div>


</body>
</html>
