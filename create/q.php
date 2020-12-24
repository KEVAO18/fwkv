<?php 

/**
 * 
 */
class querys{
	
	function __construct(){

	}



	/*
	/***  trae todos los datos de la tabla
	/***  especificada en la funcion
	*/
	public function all($tabla){

		include '../../config/config.php';

		$query = "Select * From $tabla;";

		$exe = $con->query($query);

		return $exe;
	}




	/*
	/***  trae unicamente los datos especificados de la tabla
	/***  especificada en la funcion
	*/
	public function where($tabla, $column, $value, $operator = '='){

		include '../../config/config.php';

		$query = "Select * From $tabla WHERE $column $operator $value;";

		$exe = $con->query($query);

		return $exe;
	}




	/*
	/***  trae unicamente los datos especificados de la tabla
	/***  especificada en la funcion con una limitacion establecida
	*/
	public function limitWhere($tabla, $column, $value, $operator = '=', $limitador){

		include '../../config/config.php';

		$query = "Select * From $tabla WHERE $column $operator $value LIMIT $limitador;";

		$exe = $con->query($query);

		return $exe;
	}



	/*
	/***  trae unicamente los datos aproximados de la tabla
	/***  especificada en la funcion
	*/
	public function likeWhere($tabla, $column, $value){

		include '../../config/config.php';

		$query = "Select * From $tabla WHERE $column LIKE '$value';";

		$exe = $con->query($query);

		return $exe;
	}



	/*
	/***  inserta los datos dados en la tabla
	/***  especificada en la funcion
	*/
	public function insert($tabla, $rows, $values){

		include '../../config/config.php';

		$query = "INSERT INTO `$tabla`($rows) VALUES($values);";

		$exe = $con->query($query);

		return $exe;
		
	}



	/*
	/***  actualiza los datos dados en la tabla
	/***  especificada en la funcion
	*/
	public function update($tabla, $id, $value, $row, $operator = '='){
		
	}



	/*
	/***  ejecuta consultas
	*/
	public function pers($query){

		include '../../config/config.php';

		$exe = $con->query($query);

		return $exe;
	}
}

?>


