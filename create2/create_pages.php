<?php 

/**
 * create pages
 */
class create_pages{
	
	function __construct(){
		# code...
	}

	public function index($fl){


		$dir = fopen($fl.'/public/index.php', 'a');
		fwrite($dir, '
			<?php 

			include "../config/route.php";

			include "../config/config.php";

			session_start();

			if (isset($_SESSION["user"]) && isset($_SESSION["email"])) {

			  header("location: logged/?p=dashboard");

			}

			?>

			<!DOCTYPE html>
			<html lang="en">
			  <head>
			    <meta charset="utf-8">
			    <meta name="viewport" content="width=device-width, user-scalable=no">
			    <meta name="author" content="Kevin Orrego">
			    <meta name="description" content="">
			    <meta name="keywords" content=""/>
			    <meta name="copyright" content="Kevin Orrego" />
			    <meta name="robots" content="index,follow" />
			    <meta http-equiv="cache-control" content="3600" />
			    <meta http-equiv="X-UA-Compatible" content="IE=edge">

			    <title><?=$appName?></title>

			    <link rel="icon" href="assets/media/<?=$icoName?>.svg">

			    <!-- Font Awesome -->
			    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
			    <!-- Bootstrap core CSS -->
			    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
			    <!-- Material Design Bootstrap -->
			    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">

			    <!-- css -->
			    <link rel="stylesheet" href="../assets/styles/colores.css">
			    <link rel="stylesheet" href="../assets/styles/margin.css">
			    <link rel="stylesheet" href="../assets/styles/padding.css">
			    <link rel="stylesheet" href="../assets/styles/hw.css">
			    <link rel="stylesheet" href="../assets/styles/st1.css">
			  </head>
			  <body>
			    <div class="bg-3">
			      <div class="py-1 container">
			        <ul class="nav justify-content-end">
			          <li class="nav-item">
			            <a class="nav-link top-bar" href="https://kevaosportafolio.000webhostapp.com/" target="_blank"><i class="fas fa-info-circle"></i></a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link top-bar" href="http://github.com/KEVAO18" target="_blank"><i class="fab fa-github"></i></a>
			          </li>
			        </ul>
			      </div>
			    </div>
			    <nav class="navbar navbar-expand-lg navbar-dark bg-main sticky-top scrolling-navbar color-2">
			      <div class="container-fluid">
			        <a class="navbar-brand text-capitalize" href="?p=home">
			          <?=$appName?>
			        </a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			          <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarSupportedContent">
			          <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
			            <li class="nav-item">
			              <a class="nav-link active" aria-current="page" href="?p=tyc">Terms and Conditions</a>
			            </li>
			            <li class="nav-item dropdown">
			              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
			                More
			              </a>
			              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			                <li><a class="dropdown-item" href="?p=login">Log In</a></li>
			                <li><a class="dropdown-item" href="?p=signup">Sign Up</a></li>
			              </ul>
			            </li>
			          </ul>
			        </div>
			      </div>
			    </nav>
			    <?php
			      routes($appName);
			    ?>
				<footer class="page-footer font-small bg-main">

			        <div class="bg-3">

			          <div class="container">

			            <!-- Grid row-->
			            <div class="row py-4 d-flex align-items-center">

			              <!-- Grid column -->
			              <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
			                <h6 class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
			              </div>
			              <!-- Grid column -->

			            </div>
			            <!-- Grid row-->

			          </div>

			        </div>

			      <div class="container pt-4">
			        <div class="row text-white">
			          <div class="col-sm-12 col-md-8 py-2">
			              <h5>Founder</h5>
			              <p><?=$autor?> <br><span style="font-size: 12px;">(FullStack web developer)</span></p>
			              <p style="font-size: 12px;"><?=$date ?></p>
			          </div>
			          <div class="col-sm-12 col-md-4 py-2">
						  <!-- Links -->
			              <h6 class="text-uppercase font-weight-bold">Contact</h6>
			              <p>
			                <i class="fas fa-home mr-3"></i>Medellín - Antioquia Cll72 N°42 - 14</p>
			              <p>
			                <i class="fas fa-envelope mr-3"></i> <?=$email?></p>
			              <p>
			                <i class="fas fa-phone mr-3"></i> +57 312 689 9514</p>
			          </div>
			        </div>
			      </div>
			        <center class="text-white p-2">
			          © 2019 Copyright: <?=$appName?>.
			        </center>
			    </footer>
			    <!-- B -->
			    <!-- ajax -->
			    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			    <!-- JQuery -->
			    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			    <!-- Bootstrap tooltips -->
			    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
			    <!-- Bootstrap core JavaScript -->
			    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
			    <!-- MDB core JavaScript -->
			    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
			    <!-- scripts -->
			  </body>
			</html>
		');
	}


	public function logged($fl){
		$dir = fopen($fl.'/public/logged/index.php', 'a');
		fwrite($dir, '
			<?php 

			include "../../config/route.php";

			include "../../config/config.php";

			session_start();

			if (!isset($_SESSION["user"]) || !isset($_SESSION["email"])) {
			  header("location: ../");

			}

			?>

			<!DOCTYPE html>
			<html lang="en">
			  <head>
			    <meta charset="utf-8">
			    <meta name="viewport" content="width=device-width, user-scalable=no">
			    <meta name="author" content="Kevin Orrego">
			    <meta name="description" content="">
			    <meta name="keywords" content=""/>
			    <meta name="copyright" content="Kevin Orrego" />
			    <meta name="robots" content="index,follow" />
			    <meta http-equiv="cache-control" content="3600" />
			    <meta http-equiv="X-UA-Compatible" content="IE=edge">

			    <title><?=$appName?></title>

			    <link rel="icon" href="../assets/media/<?=$icoName?>.svg">

			    <!-- Font Awesome -->
			    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
			    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
			    <!-- Bootstrap core CSS -->
			    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
			    <!-- Material Design Bootstrap -->
			    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">

			    <!-- css -->
			    <link rel="stylesheet" href="../../assets/styles/colores.css">
			    <link rel="stylesheet" href="../../assets/styles/margin.css">
			    <link rel="stylesheet" href="../../assets/styles/padding.css">
			    <link rel="stylesheet" href="../../assets/styles/wh.css">
			    <link rel="stylesheet" href="../../assets/styles/st1.css">
			  </head>
			  <body class="">

			    <div class="bg-3">
			      <div class="py-1 container">
			        <ul class="nav justify-content-end">
			          <li class="nav-item">
			            <a class="nav-link top-bar" href="https://kevaosportafolio.000webhostapp.com/" target="_blank"><i class="fas fa-info-circle"></i></a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link top-bar" href="http://github.com/KEVAO18" target="_blank"><i class="fab fa-github"></i></a>
			          </li>
			        </ul>
			      </div>
			    </div>
			    <nav class="navbar navbar-expand-lg navbar-dark bg-main sticky-top scrolling-navbar color-1">
			      <div class="container-fluid">
			        <a class="navbar-brand text-capitalize" href="?p=dashboard">
			          <?=$appName?>
			        </a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barra" aria-controls="barra" aria-expanded="false" aria-label="Toggle navigation">
			          <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="barra">
			          <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
			            <li class="nav-item">
			              <a class="nav-link" href="#" id="modalActivate" type="button" data-toggle="modal" data-target="#menu"><i class="fas fa-user"></i></a>
			            </li>
			            <li class="nav-item">
			              <a class="nav-link waves-effect waves-light">
			                <i class="fas fa-bell"></i>
			              </a>
			            </li>
			            <li class="nav-item">
			              <a class="nav-link" href="#" id="modalActivate" type="button" data-toggle="modal" data-target="#game"><i class="fas fa-chess"></i></a>
			            </li>
			          </ul>
			        </div>
			      </div>
			    </nav>

			    <!-- Modal -->
			    <div class="modal fade" id="menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			      aria-hidden="true">
			      <div class="modal-dialog modal-sm" role="document">
			        <div class="modal-content">
			          <div class="modal-header">
			            <h5 class="modal-title" id="exampleModalLabel">Menu</h5>
			            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			              <span aria-hidden="true">&times;</span>
			            </button>
			          </div>
			          <center>
			            <div class="modal-body row">
			              <div class="col-12">
			                <a class="btn btn-block bg-3 my-3 color-2" href="?p=profile">profile</a>
			              </div>
			              <div class="col-12">
			                <a class="btn btn-block bg-3 my-3 color-2" href="?p=tyc">Terms and Conditions</a>
			              </div>
			              <div class="col-12">
			                <a class="btn btn-block bg-3 my-3 color-2" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
			              </div>
			            </div>
			          </center>
			        </div>
			      </div>
			    </div>


			    <!-- Modal -->
			    <div class="modal fade" id="game" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			      aria-hidden="true">
			      <div class="modal-dialog" role="document">
			        <div class="modal-content">
			          <div class="modal-header">
			            <h5 class="modal-title" id="exampleModalLabel">Quickplay</h5>
			            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			              <span aria-hidden="true">&times;</span>
			            </button>
			          </div>
			          <center>
			            <div class="modal-body row">
			              <div class="col-12">
			                <a class="btn btn-block bg-3 my-3 color-2" href="?p=Quickplay&dif=easy">Beginner</a>
			              </div>
			              <div class="col-12">
			                <a class="btn btn-block bg-3 my-3 color-2" href="?p=Quickplay&dif=middle">what difference does it make?</a>
			              </div>
			              <div class="col-12">
			                <a class="btn btn-block bg-3 my-3 color-2" href="?p=Quickplay&dif=hard">This is going to get ugly</a>
			              </div>
			              <div class="col-12">
			                <a class="btn btn-block bg-3 my-3 color-2" href="?p=Quickplay&dif=vh">Teacher</a>
			              </div>
			            </div>
			          </center>
			        </div>
			      </div>
			    </div>

			    <?php
			      logRoutes($appName);
			    ?>
				<footer class="page-footer font-small bg-main">

			        <div class="bg-3">

			          <div class="container">

			            <!-- Grid row-->
			            <div class="row py-4 d-flex align-items-center">

			              <!-- Grid column -->
			              <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
			                <h6 class="mb-0 btn-text" id="pi">π</h6>
			              </div>
			              <!-- Grid column -->

			            </div>
			            <!-- Grid row-->

			          </div>

			        </div>

			      <div class="container pt-4">
			        <div class="row text-white">
			          <div class="col-sm-12 col-md-8 py-2">
			              <h5>Founder</h5>
			              <p>Kevin Andres Orrego Martinez <br><span style="font-size: 12px;">(FullStack web developer)</span></p>
			              <p style="font-size: 12px;"><?=$date ?></p>
			          </div>
			          <div class="col-sm-12 col-md-4 py-2">
						  <!-- Links -->
			              <h6 class="text-uppercase font-weight-bold">Contact</h6>
			              <p>
			                <i class="fas fa-home mr-3"></i>Medellín - Antioquia Cll72 N°42 - 14</p>
			              <p>
			                <i class="fas fa-envelope mr-3"></i> <?=$email?></p>
			              <p>
			                <i class="fas fa-phone mr-3"></i> +57 312 689 9514</p>
			          </div>
			        </div>
			      </div>
			        <center class="text-white p-2">
			          © 2019 Copyright: <?=$appName?>.
			        </center>
			    </footer>
			    <!-- B -->
			    <!-- ajax -->
			    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			    <!-- JQuery -->
			    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			    <!-- Bootstrap tooltips -->
			    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
			    <!-- Bootstrap core JavaScript -->
			    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
			    <!-- MDB core JavaScript -->
			    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
			    <!-- scripts -->
			    <script src="../assets/scripts/scp1.js"></script>
			  </body>
			</html>

		');
	}

	public function views($fl){


		$dir = fopen($fl.'/web/views/home.php', 'a');
		fwrite($dir, '
			<?php 

			function home($appName){
				?>
			    <!--Main Navigation-->
			    <header>
			      <div class="view intro-2 paralax">
			        <div class="full-bg-img">
			          <div class="mask rgba-black-strong flex-center">
			            <div class="container">
			              <div class="white-text text-center mx-auto">
			                <h5>Welcome to</h5>
			                <h1><?=$appName?></h1>
			                <hr class="w-80-p mx-auto bg-3">
			                <!-- <h5>the social network that also teaches you english</h5> -->
			                <a href="?p=login" class="btn bg-4 mx-auto" title="Sign In">Log In</a>
			                or
			                <a href="?p=signup" class="btn bg-4 mx-auto" title="Sign In">Sign Up</a>
			              </div>
			            </div>
			          </div>
			        </div>
			      </div>
			    </header>
				<?php
			}

			?>
		');


		$dir = fopen($fl.'/web/views/login.php', 'a');
		fwrite($dir, '
			<?php 

			function login(){
				?>
			    <header>
			      <div class="view intro-2 paralax">
			        <div class="full-bg-img">
			          <div class="mask rgba-black-strong flex-center">
			            <div class="container">
			              <div class="white-text text-center mx-auto">
			                <h1>Log In</h1>
			                <hr class="w-80-p mx-auto bg-3">
			                <?php 
				                if (isset($_GET["e"]) && $_GET["e"] == "pass") {
				                	?>
						              <div class="alert bg-1 w-70-p mx-auto" role="alert">
						                <p class="color-2">Incorrect password</p>
						              </div>
				                	<?php
				                }
			                ?>
							<div class="w-80-p mx-auto">
								<form action="../web/controllers/usvalid.php" method="post" accept-charset="utf-8">
									<div class="md-form">
								  		<input type="text" id="user" name="user" class="form-control">
								  		<label for="user">User Name</label>
									</div>
									<div class="md-form">
								  		<input type="password" id="pass" name="pass" class="form-control">
								  		<label for="pass">Password</label>
									</div>
									<small><a href="?p=forgot" title="" class="color-1">I forgot my password</a></small>
									<br>
									<small>Do not you have an account yet? <a href="?p=signup" title="" class="color-1">Sign Up</a></small>
									<br>
					                <button type="submit" class="btn bg-4 w-60-p mx-auto my-4">Ok</button>
								</form>
							</div>
			              </div>
			            </div>
			          </div>
			        </div>
			      </div>
			    </header>

				<?php
			}

			?>
		');


		$dir = fopen($fl.'/web/views/signup.php', 'a');
		fwrite($dir, '
			<?php 

			function signup(){
				?>
				<style>
					html,body,header,.alto {
					  height: 50rem;
					}
				</style>
			    <header>
			      <div class="view alto intro-2 paralax">
			        <div class="full-bg-img">
			          <div class="mask rgba-black-strong flex-center">
			            <div class="container">
			              <div class="white-text text-center mx-auto">
			                <h1>Sign Up</h1>
			                <hr class="w-80-p mx-auto">
			                <?php 
				                if (isset($_GET["al"]) && $_GET["al"] == 1) {
				                	?>
						            <div class="alert bg-1 w-70-p mx-auto" role="alert">
						                <p class="color-2">different passwords or username in use</p>
						              </div>
				                	<?php
				                }
			                ?>
							<div class="w-80-p mx-auto">
								<form action="../web/controllers/newus.php" method="post" accept-charset="utf-8">
									<div class="md-form">
								  		<input type="email" id="email" name="email" class="form-control">
								  		<label for="email">E-mail</label>
									</div>
									<div class="md-form">
								  		<input type="text" id="user" name="user" class="form-control">
								  		<label for="user">User Name</label>
									</div>
									<div class="md-form">
								  		<input type="password" id="pass" name="pass" class="form-control">
								  		<label for="pass">Password</label>
									</div>
									<div class="md-form">
								  		<input type="password" id="repass" name="repass" class="form-control">
								  		<label for="repass">Re-Password</label>
									</div>
									<div class="custom-control custom-switch">
									  <input type="checkbox" class="custom-control-input" name="tyc" id="tyc">
									  <label class="custom-control-label" for="tyc">I agree to terms and conditions</label>
									</div>
									<hr class="w-80-p mx-auto">
									<small>Do you have an account yet? <a href="?p=login" title="" class="color-1">Log In</a></small>
									<br>
			                		<button type="submit" class="btn bg-4 w-60-p mx-auto my-4">Ok</button>
								</form>
							</div>
			              </div>
			            </div>
			          </div>
			        </div>
			      </div>
			    </header>

				<?php
			}

			?>
		');

		$dir = fopen($fl.'/web/views/tyc.php', 'a');
		fwrite($dir, '
			<?php 

				function tyc(){
					?>
					<div class="bg-3 color-2">
						<div class="container py-20-px">
							<h2 class="text-center">
								<strong>Terms and Conditions of Use</strong>
							</h2>
							<p>&nbsp;</p>
							<p>
								<strong>RELEVANT INFORMATION</strong>
							</p>
							<p>
								It is necessary for the acquisition of the services offered on this site, to read and accept the following Terms and Conditions that are written below. Your use of our&nbsp; services will imply that you have read and accepted the Terms and Conditions of Use herein. To purchase a service, it will be necessary to register by the user, with login of reliable personal data and definition of a password.
							</p>
							<p>
								The user can choose and change the key for their account management access at any time, if they have registered and deemed it necessary. <a href="https://boockofface.com" class="color-main" target="_blank">https://boockofface.com</a> assumes no responsibility in the event that you hand over such key to third parties.
							</p>
							<p>
								All purchases and transactions carried out through this website are subject to a confirmation and verification process, which may include verification of stock and product availability, validation of the form of payment, validation of the invoice (if any) and compliance with the conditions required by the selected means of payment. In some cases, verification via email may be required.
							</p>
							<p>
								The prices of the products offered in this Online Store are valid only for purchases made on this website.
							</p>
							<p>
								<strong>License</strong>
							</p>
							<p>
								Book Of Face&nbsp; through its website grants a license for users to use&nbsp; the services that are presented on this website in accordance with the Terms and Conditions described herein.
							</p>
							<p>
								<strong>UNAUTHORIZED USE</strong>
							</p>
							<p>
								You may not place one of our products, modified or unmodified, on a CD, website or any other means and offer them for redistribution or resale of any kind.
							</p>
							<p>
								<strong>Property</strong>
							</p>
							<p>
								All products are the property of content providers. If not otherwise specified, our products are provided without any&nbsp; warranty, express or implied. In no event shall this company be liable for any damages including but not limited to direct, indirect, special, incidental&nbsp; or consequential damages or other losses resulting from the use or inability to use our products.
							</p>
							<p>
								<strong>Privacy</strong>
							</p>
							<p>
								This <a href="https://boockofface.com" class="color-main" target="_blank">https://boockofface.com</a> ensures that the personal information you submit is securely available. The data entered per user or in the case of requiring validation of orders could be delivered to third parties in compliance with a court order or other requirements.
							</p>
							<p>
								Subscription to advertising email newsletters is voluntary and may be selected when you create your account.
							</p>
							<p>
								Book Of Face reserves the right to change or modify these terms without notice.
							</p>
							<p>
								These terms and conditions have been generated in&nbsp;<a href="https://terminosycondicionesdeusoejemplo.com/" class="color-main" target="_blank">terminosycondicionesdeusoejemplo.com</a>.
							</p>
						</div>
					</div>
					<?php
				}

			?>
		');

		$dir = fopen($fl.'/web/views/logged/tyc.php', 'a');
		fwrite($dir, '
			<?php 

				function tyc(){
					?>
					<div class="bg-3 color-2">
						<div class="container py-20-px">
							<h2 class="text-center">
								<strong>Terms and Conditions of Use</strong>
							</h2>
							<p>&nbsp;</p>
							<p>
								<strong>RELEVANT INFORMATION</strong>
							</p>
							<p>
								It is necessary for the acquisition of the services offered on this site, to read and accept the following Terms and Conditions that are written below. Your use of our&nbsp; services will imply that you have read and accepted the Terms and Conditions of Use herein. To purchase a service, it will be necessary to register by the user, with login of reliable personal data and definition of a password.
							</p>
							<p>
								The user can choose and change the key for their account management access at any time, if they have registered and deemed it necessary. <a href="https://boockofface.com" class="color-main" target="_blank">https://boockofface.com</a> assumes no responsibility in the event that you hand over such key to third parties.
							</p>
							<p>
								All purchases and transactions carried out through this website are subject to a confirmation and verification process, which may include verification of stock and product availability, validation of the form of payment, validation of the invoice (if any) and compliance with the conditions required by the selected means of payment. In some cases, verification via email may be required.
							</p>
							<p>
								The prices of the products offered in this Online Store are valid only for purchases made on this website.
							</p>
							<p>
								<strong>License</strong>
							</p>
							<p>
								Book Of Face&nbsp; through its website grants a license for users to use&nbsp; the services that are presented on this website in accordance with the Terms and Conditions described herein.
							</p>
							<p>
								<strong>UNAUTHORIZED USE</strong>
							</p>
							<p>
								You may not place one of our products, modified or unmodified, on a CD, website or any other means and offer them for redistribution or resale of any kind.
							</p>
							<p>
								<strong>Property</strong>
							</p>
							<p>
								All products are the property of content providers. If not otherwise specified, our products are provided without any&nbsp; warranty, express or implied. In no event shall this company be liable for any damages including but not limited to direct, indirect, special, incidental&nbsp; or consequential damages or other losses resulting from the use or inability to use our products.
							</p>
							<p>
								<strong>Privacy</strong>
							</p>
							<p>
								This <a href="https://boockofface.com" class="color-main" target="_blank">https://boockofface.com</a> ensures that the personal information you submit is securely available. The data entered per user or in the case of requiring validation of orders could be delivered to third parties in compliance with a court order or other requirements.
							</p>
							<p>
								Subscription to advertising email newsletters is voluntary and may be selected when you create your account.
							</p>
							<p>
								Book Of Face reserves the right to change or modify these terms without notice.
							</p>
							<p>
								These terms and conditions have been generated in&nbsp;<a href="https://terminosycondicionesdeusoejemplo.com/" class="color-main" target="_blank">terminosycondicionesdeusoejemplo.com</a>.
							</p>
						</div>
					</div>
					<?php
				}

			?>
		');


		$dir = fopen($fl.'/web/views/logged/dashboard.php', 'a');
		fwrite($dir, '
			<?php 

				function dashboard($name){
					?>
						<div class="container">
							<p class="ti-text text-center pt-2-r">Welcome <?=$_SESSION["user"]?></p>
							<p class="ti-text text-center">Game modes</p>
							<div class="row">
								<div class="col-md-6 text-center py-1-r">
									<a href="" class="btn btn-block bg-main color-2 py-2-r btn-text">History</a>
								</div>
								<div class="col-md-6 text-center py-1-r">
									<a href="#" id="modalActivate" type="button" data-toggle="modal" data-target="#game" class="btn btn-block bg-main color-2 py-2-r btn-text">Quickplay</a>
								</div>
								<div class="col-md-6 text-center py-1-r">
									<a href="" class="btn btn-block bg-main color-2 py-2-r btn-text">More</a>
								</div>
								<div class="col-md-6 text-center py-1-r">
									<a href="" class="btn btn-block bg-main color-2 py-2-r btn-text">Settings</a>
								</div>
							</div>	
							<p class="ti-text text-left">Updates</p>
							<div class=" container row">
								<div class="col-12">
									<div class="color-6">
										<p class="p-text">	
											no updates for now
										</p>
									</div>
								</div>
							</div>
						</div>
					<?php
				}

			?>
		');
	}
}

?>