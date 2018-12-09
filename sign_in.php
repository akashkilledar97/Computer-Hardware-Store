<?php
	require('connect.php');
	
	$name = $_POST['uname'];
	$pass = $_POST['pass'];
	$mail = $_POST['email'];
	
	echo "</br>name : ".$name."</br>pass : ".$pass."</br>maiil : ".$mail;
	
	$qu = mysqli_query($con, "INSERT INTO `users` (`sl.no`, `uname`, `pass`, `email`) VALUES (NULL, '".$name."', '".$pass."', '".$mail."')");
	
	if(!$qu)
	{
		echo "Unable to register\nPlease try again".mysqli_error($con);
		
	}
	else{
		echo "(: Sign in success :)";
		setCookie('user', $uname, time() + (86400*30), "/");
		header('Location: index1.php?uname='.$uname);
		
	}
?>