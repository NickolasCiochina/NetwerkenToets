<?php

$dbhost = 'localhost';
$dbuser = 'net24nciochina_toets';
$dbpass = 'SP761(P9wRug';
$dbname = 'net24nciochina_toetsNetwerken';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>