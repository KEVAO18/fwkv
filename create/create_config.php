<?php 

/**
 * create configuration file
 */
class create_config{
	
	function __construct(){
		
	}


	public function config($fl, $appname, $admin, $email, $user, $pass, $db){


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
			function routes($name){
				if (isset($_GET["p"])) {
					$p = $_GET["p"];
				}else{
					if (isset($_GET["search"])) {
						$p = "search";
					}else{
						$p = "home";
					}
				}

				if ($p == "home") {
					include "../web/views/".$p.".php";
					home($name);
				}elseif ($p == "search") {
					include "../web/views/".$p.".php";
					search();
				}elseif ($p == "login") {
					include "../web/views/".$p.".php";
					login();
				}elseif ($p == "signup") {
					include "../web/views/".$p.".php";
					signup();
				}elseif ($p == "tyc") {
					include "../web/views/".$p.".php";
					tyc();
				}else{
			    ?>
			      <div class="container">
			        <div class="row py-4 text-center">
			          <div class="col-12 display-1 pt-3">404</div>
			          <div class="col-12 display-4 pb-5">Página no encontrada</div>
			        </div>
			      </div>
			    <?php
			  }
			}


			function logRoutes($name){
				if (isset($_GET["p"])) {
					$p = $_GET["p"];
				}else{
					if (isset($_GET["search"])) {
						$p = "search";
					}else{
						$p = "dashboard";
					}
				}

				if ($p == "dashboard") {
					include "../../web/views/logged/".$p.".php";
					dashboard($name);
				}elseif ($p == "tyc") {
					include "../../web/views/logged/".$p.".php";
					tyc();
				}else{
			    ?>
			      <div class="container">
			        <div class="row py-4 text-center">
			          <div class="col-12 display-1 pt-3">404</div>
			          <div class="col-12 display-4 pb-5">Page Not Found</div>
			        </div>
			      </div>
			    <?php
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
}

?>