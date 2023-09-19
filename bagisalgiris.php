<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    input,p {
    outline: 0;
}
h1 {
    margin: 0;
    padding: 10px;
    font-size: 22px;
    text-align: center;
    border-bottom: 1px solid #eceff2;
    color: #6a737f;
    font-weight: 600;
}
.contact {
    background-color: #fff;
    width: 500px;
    margin: 0 auto;
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,.2);
    height:500px;
}
.contact .fields {
    position: relative;
    padding: 15px;
}
.contact input[type="password"], .contact input[type="email"] {
    display: block;
    margin-top: 15px;
    padding: 15px;
    border: 1px solid #dfe0e0;
    width: 300px;
}
.contact input[type="password"]:focus, .contact input[type="email"]:focus {
    border: 1px solid #c6c7c7;
}
.contact input[type="password"]::placeholder,
.contact input[type="email"]::placeholder,
.contact textarea::placeholder {
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
.contact input[type="submit"]:hover {
    background-color: #3670b3;
}
.contact input[name="email"] {
    position: relative;
    display: block;
}
.contact label {
    position: relative;

}
a{
  margin: 0;
  padding: 10px;
  font-size: 18px;
  text-align: center;

  color: #6a737f;
  text-decoration: none;
}
a:hover{
  color:red;
}
    </style>
  </head>
  <body>
    <form class="contact" method="post" action="index.php?sayfakodu=46">
			<h1>LOGIN FOR TAKE DONATE</h1>
			<div class="fields">
				<label for="email">
					<input id="email" type="email" name="email" placeholder="EMAİL ADRES" required>
				</label>
				<label>
					<input type="password" name="pass" placeholder="PASSWORD" required>
        </label>
			</div>
			<input type="submit" value="SUBMİT" >
          <p><a href="index.php?sayfakodu=44"> You don't have account you can create a new account</a></p>
          <p><a href="index.php?sayfakodu=18"> Forget Password</a></p>
		</form>

  </body>
</html>
