<?php

class ConexionPGSQL{

//declaración de variables

public $host; // para conectarnos a localhost o el ip del servidor de postgres

public $db; // seleccionar la base de datos que vamos a utilizar

public $user; // seleccionar el usuario con el que nos vamos a conectar

public $pass; // la clave del usuario

public $conexion;  //donde se guardara la conexión

public $url; //dirección de la conexión que se usara para destruirla mas adelante

//creación del constructor

		function __construct(){

		}

//creación de la función para cargar los valores de la conexión.

	public function conectar(){

		$host = "localhost";
		$database = "usuarios_iaim";
		$user = "postgres";
		$password = "root";
		$connection = pg_connect("host=$host dbname=$database user=$user password=$password")
				or die(pg_last_error());

		return $connection;
	

	}	
	

	//función para destruir la conexión.

	function destruir(){

		pg_close($this->connection);

	}

}

?>