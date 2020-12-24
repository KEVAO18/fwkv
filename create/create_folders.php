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
*/

	public function main_folders($fl){
		mkdir($fl);
		mkdir($fl.'/assets');
		mkdir($fl.'/assets/styles');
		mkdir($fl.'/assets/scripts');
		mkdir($fl.'/assets/media');
		echo "creados con exito";
	}

	public function config($fl){
		mkdir($fl.'/config');
		mkdir($fl.'/public');
		mkdir($fl.'/public/logged');
		mkdir($fl.'/web');
		mkdir($fl.'/web/views');
		mkdir($fl.'/web/views/logged');
		mkdir($fl.'/web/controllers');
	}
}

?>