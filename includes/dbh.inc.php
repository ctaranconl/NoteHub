<?php

$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "1234";
$dbName = "notehub";

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

if(!conn){
	die("La conexión ha fallado: " . mysqli_connect_error());
}
