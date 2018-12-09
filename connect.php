<?php

	$uname = 'root';
	$pass = '';
	$host = 'localhost';
	$db = 'store';
	
	$con = mysqli_connect($host, $uname, $pass, $db);
	
	if(!$con)
	{
		die('Error in connection');
	}
?>