<?php
/*class Connection{
 

public static function runQuery($query)
	{
	
	$link = mysqli_connect("localhost","root","","gimnasio");// linea de conexion a la base (ip host,usario,pass,nombre_base)

		if (!$link) {
			echo "Error: connect a MySQL." . PHP_EOL;
			echo "error: " . mysqli_connect_errno() . PHP_EOL;
		 exit;
		}
        mysqli_set_charset($link,"utf8");
		
		$result = mysqli_query($link ,$query);// ejecuta la sentencia sql 
		
		mysqli_close($link); // cierra
   return $result; // retorna el resultado 
}
}*/


class Conexion{	  
    public static function Conectar() {        
        define('servidor', 'localhost');
        define('nombre_bd', 'gimnasio');
        define('usuario', 'root');
        define('password', '');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}
?>