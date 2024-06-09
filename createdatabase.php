
<?php 

 $servername = "localhost";
 $username = "root";
 $password ="";
//create connection
$conn= mysqli_connect($servername,$username,$password);
//check connection
if(!$conn){
	die("connection failed");
 }
//create database
 $sql = "CREATE DATABASE db_studentinfo";
 if(mysqli_query($conn, $sql)){
 	echo "Database created sucessfully";
 }
 	else{
 		echo "Error creating database:";
 	
 }
 mysqli_close($conn);
 ?>
