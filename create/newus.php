<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registrando un nuevo usuario</title>
</head>
<body>
	
</body>
</html>
<?php 
	
$us = $_POST['user'];

$em = $_POST['email'];

$p = $_POST['pass'];

$rp = $_POST['repass'];

$tyc = $_POST['tyc'];

$pe =  password_hash($p, PASSWORD_BCRYPT, ['cost' => 8]);

// include 'config.php';

include 'q.php';

$query = new querys();

if (password_verify($rp, $pe)) {

	$query->pers("INSERT INTO `users`(`user`,`email`,`pass`,`tyc`) VALUES('$us','$em','$pe','1');");

	header("location: ../../public/?p=login");
}else{
	header('location: ../../public/?p=signup&al=1');
}

?>