<?php 
$servername = "localhost";
$username = "spcom_userbarro";
$password = "FM5KPXJGNIQD";
$dbname = "spcom_barro";

try {
	$pdo = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
	$pdo -> setAttribute(PDO:: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);
} catch (PDOEXception $e) {	
	die(print_r("erreur bdd:".$e -> getMessage()));
}

 ?>