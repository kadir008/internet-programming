<?php

session_start();
    
	$message = "";
	$username = "admin";
    $password = "admin";
	
if (isset($_POST['username']) && isset($_POST['password'])) {
	
	if ($_POST['username'] == $username && $_POST['password'] == $password) {
		$message = "Giriş Başarılı";
		include "giris.php";
		exit();
	}
	else {
		$message = "Hatalı kullanici bilgileri";
	}
}

?>

<html>
<head>
<meta charset = "utf-8" />
<title>Session Uygulaması</title>
</head>
<body>

<form method="post" style="text-align:center;">
	<p>Kullanıcı Adı: <input name="username" type="text" > </p>
	<p>Şifre: <input name="password" type="password" > </p>
	<p><input type="submit" value="Giris"></p>
</form>

<h3 style="text-align:center;"><?php echo $message; ?></h3>

</body>
</html>
