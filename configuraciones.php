<?php 


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="assets/media/favicon.png">
	<title>KevFrame config create</title>
    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>
    <!-- Bootstrap core CSS -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <!-- Material Design Bootstrap -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css' rel='stylesheet'>

    <!-- css -->
    <link rel="stylesheet" href="assets/styles/colores.css">
    <link rel="stylesheet" href="assets/styles/margin.css">
    <link rel="stylesheet" href="assets/styles/padding.css">
    <link rel="stylesheet" href="assets/styles/hw.css">
    <link rel="stylesheet" href="assets/styles/st1.css">
</head>
<body class="bg-3">
	
	<div class="container">
		<div class="row mt-10-p mb-4-r">
			<div class="col-2"></div>
			<div class="col-8">
				<div class="progress">
				  <div class="progress-bar progress-bar-striped bg-dark progress-bar-animated" id='barra' role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="col-2"></div>
		</div>
		<div class="row">
			<div class="col-md-8 mx-auto mb-10-p">
				<div class="card">
					<div class="card-header">
						<p class="display-4">Config Create</p>
					</div>
					<div class="card-body container">
						<form action="create/create.php" method="POST" enctype='multipart/form-data'>

							<p class="h4 py-1">Main config</p>
							<div class="md-form">
						  		<input type="text" id="admin" name="admin" class="form-control">
						  		<label for="admin">Admin</label>
							</div>
							<div class="md-form">
						  		<input type="text" id="appname" name="appname" class="form-control">
						  		<label for="appname">Page name</label>
							</div>
							<div class="md-form">
						  		<input type="text" id="email" name="email" class="form-control">
						  		<label for="email">email</label>
							</div>

							<p class="h4 py-1">DB config</p>
							<div class="md-form">
						  		<input type="text" id="user" name="user" class="form-control">
						  		<label for="user">user</label>
							</div>
							<div class="md-form">
						  		<input type="password" id="pass" name="pass" class="form-control">
						  		<label for="pass">pass</label>
							</div>
							<div class="md-form">
						  		<input type="text" id="db" name="db" class="form-control">
						  		<label for="db">DB</label>
							</div>
							<div class="my-2-r mx-auto">
								<button class="btn btn-outline-black btn-block w-50-p" type="submit">Go!</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	

    <!-- B -->
    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- JQuery -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <!-- Bootstrap tooltips -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js'></script>
    <!-- Bootstrap core JavaScript -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <!-- MDB core JavaScript -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js'></script>
    <!-- scripts -->

    <script>

	var br = document.getElementById('barra');

	var e1 = document.getElementById('admin');
	var e2 = document.getElementById('appname');
	var e3 = document.getElementById('email');
	var e4 = document.getElementById('user');
	var e5 = document.getElementById('pass');
	var e6 = document.getElementById('db');

	var progreso = 0;
	var i = 0;

	e1.onkeypress = function(){
		if (e1.value != "" && i == 0) {
			i += 1;
			progreso += 16;
			br.style.width = progreso+'%';
		}
	};

	e2.onkeypress = function(){
		if (e1.value != "" && i == 1) {
			i += 1;
			progreso += 16;
			br.style.width = progreso+'%';
		}
	};

	e3.onkeypress = function(){
		if (e1.value != "" && i == 2) {
			i += 1;
			progreso += 16;
			br.style.width = progreso+'%';
		}
	};

	e4.onkeypress = function(){
		if (e1.value != "" && i == 3) {
			i += 1;
			progreso += 16;
			br.style.width = progreso+'%';
		}
	};

	e5.onkeypress = function(){
		if (e1.value != "" && i == 4) {
			i += 1;
			progreso += 16;
			br.style.width = progreso+'%';
		}
	};

	e6.onkeypress = function(){
		if (e1.value != "" && i == 5) {
			i += 1;
			progreso += 20;
			br.style.width = progreso+'%';
		}
	};


    </script>
</body>
</html>