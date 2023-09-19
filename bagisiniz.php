<? include ("bagisal.php");?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
<style>
h1{
  color:red;
  text-align: center;
}
h3{
  color:black;
  font-family: sans-serif;
  font-size: 12pt;
}
.contact {
    background-color: #fff;
    width: 500px;
    margin: 0 auto;
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,.2);
    resize: none;
    margin-top: 15px;
    padding: 15px;
    border: 1px solid #dfe0e0;
    width: 300px;
    height: 150px;
}
.contact textarea:focus {
    border: 1px solid #c6c7c7;
}
</style>
  </head>

<body>

  <h1>  WELCOME YOU COME TO FOR GET DONATE</h1>
  <h2></h2>
  <h3>Please send us the information of the products you want to receive donations by writing them in the message box. We will contact you when we decide that you can donate these products.</h3>
  <form method="post" action="index.php?sayfakodu=50">
  <label>
  <textarea  class="contact" name="msg" placeholder="You want which product or donate" required></textarea>
</label>
<input type="submit" >
</form>
</body>
</html>
