<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Validando usuario</title>
</head>
<body>
	
</body>
</html>
<?php 
	
$us = $_POST['user'];

$p = $_POST['pass'];

include 'q.php';

$query = new querys();

$data = $query->pers("SELECT * FROM `users` WHERE `user` = '$us';");

foreach ($data as $key) {
	if (password_verify($p, $key['pass'])) {
		session_start();
		$_SESSION['user'] = $key['user'];
		$_SESSION['email'] = $key['email'];

		header("location: ../../public/?p=login&u=".$us);
	}else{
		header("location: ../../public/?p=login&e=pass");
	}
}



?>