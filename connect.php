<?php

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$id = filter_input(INPUT_POST, 'id');


$host = "localhost";
$dbusername = "root";
$dbpassword = "1234";
$dbname = "users"


$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error() ){
	die('Connect Error ('.mysqli_connect_errno() . ') ' . .mysqli_connect_error());
		
} else {
	$sql = "INSERT INTO users.people (firstname, lastname, email, id) 
	values ('$firstname', '$lastname', '$email', '$id' )";
	if ($conn->query($sql)){
		echo "new record inserted sucessfully";
	} else {
		echo "ERROR inserting new record";
	}
	$conn->close();
}




?>