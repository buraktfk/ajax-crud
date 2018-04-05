<?php
$dbhost = "localhost";
$dbname = "ajax-urunler";
$dbusername = "root";
$dbpassword = "root";
try {
	$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
} 
catch (Exception $e) {
	echo $e->getMessage();
}
?>