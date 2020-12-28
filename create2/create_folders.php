<?php 

/**
 * create folders class
 */
class Create_folders{
	
	function __construct(){
		
	}

/*
* crea las carpetas
* - main folder (it has the name of the app)
* - assets
* - styles
* - scripts
* - media
* - config
* - public
* - web
* - controllers
* - views
*/

	public function main_folders($fl){
		mkdir($fl);
		mkdir($fl.'/assets');
		mkdir($fl.'/assets/media');
		mkdir($fl.'/assets/scripts');
		mkdir($fl.'/assets/styles');
		echo "creados con exito";
	}

	public function config($fl){
		mkdir($fl.'/config');
		mkdir($fl.'/public');
		mkdir($fl.'/web');
		mkdir($fl.'/web/controllers');
		mkdir($fl.'/web/views');
	}
}

?>