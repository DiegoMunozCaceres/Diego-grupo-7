<?php

// iniciar session 
 if (!isset($_SESSION)) {
    session_start();
 }   

//DATOS DE CONEXION A MYSQLI_CONNECT
$db_host = "146.83.194.142";
$db_user = "E7software";
$db_pass = "E7software1128";
$db_name = "E7software_bd";


	$host = "146.83.194.142";
	$dbname = "E7software_bd";
	$user = "E7software";
	$pass = "E7software1128";
	$dsn = "mysql:host=$host;dbname=$dbname";
	try {
		$bd= new PDO($dsn, $user, $pass);
		$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $error){
		echo $error->getMessage();
        echo 'no se pudo conectar a la base de datos:' .mysqli_connect_errno()();
	}



//CONEXIÓN CON  MYSQLI_CONNECT ($con)
$con  = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

    if(!$con){

    echo 'no se pudo conectar a la base de datos:' .mysqli_connect_errno()();

    }else{

   
    }

 
?>
