<?php

$server = "localhost" ;
$db = "myRegistrations" ;
$user = "root" ;
$pass = "" ;


try {
		$conn = new PDO("mysql:host=$server;dbname=$db;", $user, $pass);
}
catch (PDOException $ex) {
		die("Connection Failed.". $ex->getMessage()) ;
}

?>