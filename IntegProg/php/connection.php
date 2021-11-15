<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "restforwant"; 
	
	$con = new mysqli ("$dbhost" , "$dbuser" , "$dbpass", "$dbname");
	if($con->connect_error){
		echo "failed";
		die();
	}