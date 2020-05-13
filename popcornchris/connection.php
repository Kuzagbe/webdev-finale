<?php

function Connect()
{
	$dbhost = "localhost";
	$dbuser = "id13461773_root";
	$dbpass = "Monicasodjicofie-666";
	$dbname = "id13461773_foodorder";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>