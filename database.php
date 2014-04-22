<?php 

$db_host 		= "buyouseafood.db.10712744.hostedresource.com";
$db_username 	= "buyouseafood";
$db_password 	= "M@yD@y48!B2!";
$db_name 		= "buyouseafood";

try {
$db = new PDO("mysql:host=" . $db_host . ";dbname=" . $db_name, $db_username, $db_password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}

catch(PDOException $e) {
	echo $e->getMessage(); //This method returns the error message.
}

?>