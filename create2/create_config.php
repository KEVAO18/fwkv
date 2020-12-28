<?php 

/**
 * create configuration file
 */
class create_config{
	
	function __construct(){
		
	}


	public function config($fl, $appname, $admin, $email, $user, $pass, $db, $s){


		$dir = fopen($fl.'/config/config.php', 'a');
		fwrite($dir, "<?php ");
		fwrite($dir, "\n");
		fwrite($dir, "\n");
		fwrite($dir, '$autor = "'.$admin.'";');
		fwrite($dir, "\n");
		fwrite($dir, "\n");
		fwrite($dir, '$appName = "'.$appname.'";');
		fwrite($dir, "\n");
		fwrite($dir, "\n");
		fwrite($dir, '$email = "'.$email.'";');
		fwrite($dir, "\n");
		fwrite($dir, "\n");
		fwrite($dir, '$date = date("Y-m-d");');
		fwrite($dir, "\n");
		fwrite($dir, "\n");
		fwrite($dir, '$icoName = "favicon";');
		fwrite($dir, "\n");
		fwrite($dir, "\n");
		fwrite($dir, '$serve = "'.$s.'";');
		fwrite($dir, "\n");
		fwrite($dir, "\n");
		fwrite($dir, '$host = "localhost";');
		fwrite($dir, "\n");
		fwrite($dir, "\n");
		fwrite($dir, '$user = "'.$user.'";');
		fwrite($dir, "\n");
		fwrite($dir, "\n");
		fwrite($dir, '$pass = "'.$pass.'";');
		fwrite($dir, "\n");
		fwrite($dir, "\n");
		fwrite($dir, '$db = "'.$db.'";');
		fwrite($dir, "\n");
		fwrite($dir, "\n");
		fwrite($dir, '$con = new mysqli($host, $user, $pass, $db) or die("Fallo en la conexion a la base de datos");');
		fwrite($dir, "\n");
		fwrite($dir, "\n");
		fwrite($dir, "?>");
	}


	public function route($fl){
		$dir = fopen($fl.'/config/route.php', 'a');
		fwrite($dir, '
			<?php
			function routes($name, $s){
				include "../config/config.php";
				$ruta = array();
				if (isset($_GET["p"])) {
					$p = $_GET["p"];
					$ruta = explode("/", $p);
				}

				switch ($ruta[0]) {
					case "home":
						include "../web/views/".$ruta[0].".php";
						home($name, $s);
						break;
					case "search":
						include "../web/views/".$ruta[0].".php";
						search($s);
						break;
					case "login":
						include "../web/views/".$ruta[0].".php";
						login($s);
						break;
					case "signup":
						include "../web/views/".$ruta[0].".php";
						signup($s);
						break;
					case "tyc":
						include "../web/views/".$ruta[0].".php";
						tyc($s);
						break;
					default:
					    ?>
					      <div class="container">
					        <div class="row py-4 text-center">
					          <div class="col-12 display-1 pt-3">404</div>
					          <div class="col-12 display-4 pb-5">Página no encontrada</div>
					        </div>
					      </div>
					    <?php
						break;
				}
			}
		?>
		');
	}


	public function logout($fl){
		$dir = fopen($fl.'/public/logged/logout.php', 'a');
		fwrite($dir,'
			<?php 
				session_start();
				session_unset();
				session_destroy();
				header("location: ../?p=home");
			?>
		');
	}

	public function accessht($fl){
		$dir = fopen($fl.'/public/logged/logout.php', 'a');
		fwrite($dir,'
			<?php 
				session_start();
				session_unset();
				session_destroy();
				header("location: ../?p=home");
			?>
		');
	}
}

?>