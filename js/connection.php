<?php 
//error_reporting(0)
	
	$username   = "root";
	$password   = "";
	$dbname     = "form";
	
	$conn = new mysqli('localhost',$username,$password,$dbname) or die("Unable to connect");
	echo "connection Successful";
?>
'localhost'