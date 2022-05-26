<?php
	require 'vendor/autoload.php';
	// connect to mongodb
	$client = new MongoDB\Client('mongodb+srv://SmithaMenon:Verity123@cluster0.pgpsl.mongodb.net/?retryWrites=true&w=majority');
	
	echo "Connection to database successfully";
	// select a database
	$db = $client->airport_db;
	
	echo ",   Database airport_db selected";
   
	$collect = $db->test;
	echo ",     collection test selected";
	
	//$cursor = $collect->find();
   // iterate cursor to display Region of documents
	
   //foreach ($cursor as $document) {
   //   echo $document["Region"] . "\n";
   //}
?>
