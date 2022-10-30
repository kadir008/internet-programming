<?php

$message = "";
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	$message = "Beni hatırla aktif.<br><br>"; 
} else {
	setcookie("username","");
	setcookie("password","");
	$message = "Beni hatırla aktif değil.<br><br>"; 
}

?>

<html>
<head>
   <title>Giriş Başarılı</title>
  </head>
  <body>
  <h1 style="background-color:powderblue; text-align:center;">HOŞGELDİN</h1>
  <h3 style="text-align:center;"><?php echo $message; ?></h3>
  <form action="anasayfa.php" style="text-align:center;">
 <input type="submit" name="logout" value="Çıkış Yap">
</form>
  </body>
</html>


