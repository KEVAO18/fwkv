<?php 

/**
 * create controllers
 */
class create_controllers{
	
	function __construct(){
		
	}

	public function newus($fl){
		copy('newus.php',$fl.'/web/controllers/newus.php');
	}


	public function usvalid($fl){
		copy('usvalid.php', $fl.'/web/controllers/usvalid.php');
	}


	public function q($fl){
		copy('q.php',$fl.'/web/controllers/q.php');
	}
}



?>