<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    input,textarea,p {
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
}
.contact .fields {
    position: relative;
    padding: 15px;
}
.contact input[type="text"], .contact input[type="email"] {
    display: block;
    margin-top: 15px;
    padding: 15px;
    border: 1px solid #dfe0e0;
    width: 300px;
}
.contact input[type="text"]:focus, .contact input[type="email"]:focus {
    border: 1px solid #c6c7c7;
}
.contact input[type="text"]::placeholder,
.contact input[type="email"]::placeholder,
.contact textarea::placeholder {
    color: #858688;
}
.contact textarea {
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
.contact input[type="submit"] {
    display: block;
    margin-top: 15px;
    padding: 15px;
    border: 0;
    background-color: #518acb;
    font-weight: bold;
    color: #fff;
    cursor: pointer;
    width: 500px;
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
.contact label i {
    position: absolute;
    color: #dfe2e5;
    top: 31px;
    left: 15px;
    z-index: 10;
}
.contact label i ~ input {
    padding-left: 45px !important;
}
.contact .responses {
    padding: 15px;
    margin: 0;
}
    </style>
  </head>
  <body>
    <form class="contact" method="post" action="">
			<h1>Contact Form</h1>
			<div class="fields">
				<label for="email">
					<input id="email" type="email" name="email" placeholder="Your Email" required>
				</label>
				<label for="name">

					<input type="text" name="name" placeholder="Your Name" required>
				<label>
				<input type="text" name="subject" placeholder="Subject" required>
				<textarea name="msg" placeholder="Message" required></textarea>
      </input>
    </label>
			</div>
			<input type="submit" name="submit">
		</form>
    <?php

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

    $ad=$_POST['name'];
    $email=$_POST['email'];
    $sub=$_POST['subject'];
    $mesg=$_POST['msg'];


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO tblcontact (user_name, user_email,subject,content)
    VALUES ('$ad', '$email','$sub','$mesg')";
    $conn->exec($sql);
    echo "<h1 style='color:red'> YOUR MESSAGE SENT US</h1>";
    }

    ?>
    <br>
      <p><img src="https://teknosafari.net/wp-content/uploads/2020/08/konum-takibiyle-ilgili-riskler.jpg" width="75" height="50">Havaalanı Yolu Üzeri 8. km, 27010 Şahinbey/Gaziantep</p>
     <p><img src=" https://thumbs.dreamstime.com/b/ic%C3%B4ne-de-ligne-t%C3%A9l%C3%A9phonique-dans-le-noir-avec-des-vagues-135675000.jpg" width="50" height="50" >03422118080</p>
     <br>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12744.710648288408!2d37.435425333887984!3d37.00555774640468!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7b3c32754b83a6a9!2sHasan%20Kalyoncu%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1672084323994!5m2!1str!2str" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<br></br>
  </body>
</html>
