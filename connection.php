<?php 

	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'cinema_db';


	//make a connection to the database
	$conn = mysqli_connect($servername,$username,$password);
	//check condition
	if(!$conn){
		echo "Error While Connecting";
	}else{
		echo "<script>alert("Welcome to Geeks for Geeks")</script>";
	}	

?>