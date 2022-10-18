<?php
	require 'vendor/autoload.php';
	// connect to mongodb
	$client = new MongoDB\Client('mongodb+srv://SmithaMenon:Verity123@cluster0.pgpsl.mongodb.net/?retryWrites=true&w=majority');
	
	echo "Connection to database successful" . "<br/>";
	// select a database
	$db = $client->collegemgmt;
	echo "Database: collegemgmt" . "<br/>";
   
   
	//Fetch and display the College Collection
	$college_list = $db->college;
	echo "Collection: college" . "<br/>";
	echo "College ID" . " - " . "College Name" . " - " . "Branch" . "<br/>";
	$cursor = $college_list->find();
	foreach ( $cursor as $document)
	{
		echo $document["college_id"] . " - " . $document["collegename"] . " - " . $document["branch"] . "<br/>";
	}
	
	//Fetch and display the Role Collection
	echo "<br/><br/>";	
	$role_list = $db->role;
	echo "Collection: role" . "<br/>";
	echo "Role ID" . " - " . "Role Name" . "<br/>";
	$cursor = $role_list->find();
	foreach ( $cursor as $document)
	{
		echo $document["role_id"] . " - " . $document["rolename"] . "<br/>";
	}

	
	//Fetch and display the User Collection	
	echo "<br/><br/>";
	$user_list = $db->user;
	echo "Collection: user" . "<br/>";
	echo "User ID" . " - " . "User Name" . " - " . "Email" . "<br/>";
	$cursor = $user_list->find();
	foreach ( $cursor as $document)
	{
		echo $document["user_id"] . " - " . $document["username"] . " - " . $document["email"] . "<br/>";
	}
	
	
	//Fetch and display the Student Collection
	echo "<br/><br/>";	
	$student_list = $db->student;
	echo "Collection: student" . "<br/>";
	echo "Student ID" . " - " . "Student Name" . " - " . "Email" . "<br/>";
	$cursor = $student_list->find();
	foreach ( $cursor as $document)
	{
		echo $document["id"] . " - " . $document["studentname"] . " - " . $document["email"] . "<br/>";
	}

?>
