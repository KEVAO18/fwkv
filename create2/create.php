<?php 

include 'create_folders.php';
include 'create_config.php';
include 'create_pages.php';
include 'create_controllers.php';
include 'create_styles.php';

$f = new create_folders();
$c = new create_config();
$s = new create_styles();
$p = new create_pages();
$m = new create_controllers();


$appname = $_POST['appname'];
$admin = $_POST['admin'];
$email = $_POST['email'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$db = $_POST['db'];
$s = $_POST['serve'];

$dir='../'.$appname;
if (!file_exists($dir)) {
	$f::main_folders($dir); // crea las carpetas assets - styles - scripts - media
	$f::config($dir); // crea las carpetas - config - public - web - logged - views - controllers
	$s::main_styles($dir); // crea el css main styles
	$s::colors($dir); // crea el css colors
	$s::padding($dir); // crea el css padding
	$s::margin($dir); // crea el css margin
	$s::hw($dir); // crea el css hw
	$c::config($dir, $appname, $admin, $email, $user, $pass, $db, $s); // crea las configuraciones config.php
	$c::route($dir); // crea el documento de rutas route.php
	$c::logout($dir); // crea el documento de salida logout.php
	$p::index($dir); // crea la plantilla principal
	$p::logged($dir); // crea la plantilla para la sesion iniciada
	$p::views($dir); // crea las vistas home - login - signup
	$m::newus($dir); // copia la validacion para usuarios nuevos o registros
	$m::usvalid($dir); // copia la validacion de usuarios existentes o inicio de sesion
	$m::q($dir); // copia las querys que vienen predefinidas a este proyecto

	header("Location: ../".$appname."/public");
}else{
	echo "Ya existe";
	header("Location: ../".$appname."/public");
}

?>