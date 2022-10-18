<?php
	require 'vendor/autoload.php';
	// connect to mongodb
	$client = new MongoDB\Client('mongodb+srv://SmithaMenon:Verity123@cluster0.pgpsl.mongodb.net/?retryWrites=true&w=majority');
	
	echo "Connection to database successful" . "<br/>";
	

?>
