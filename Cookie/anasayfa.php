<?php

$username = "user";
$password = "kadir";
$message = "";

setcookie($username, $password, time() + (86400 * 30), "/"); // 86400 = 1 gün

if (isset($_POST['username'])&& isset($_POST['password'])) {
	
	if ($_POST['username'] == $username && $_POST['password'] == $password) {
        require "giris.php";
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
<title>Cookie Uygulaması</title>
</head>
<body>

<h3 style="text-align:center;"><?php echo $message; ?></h3>

<form method="post" style="text-align:center;">
	<p>Kullanıcı Adı: <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"> </p>
	<p>Şifre: <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"> </p>
	<p><input type="checkbox" name="remember" />Beni Hatırla</p>
	<p><input type="submit" value="Giris"></p>
</form>
</body>
</html>