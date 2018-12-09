<?php

	require('connect.php');
	
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	
	
	$q = "select * from `users` where `uname` = '".$uname."' and `pass` = '".$pass."'";
	
	$res = mysqli_query($con, $q);	
	
	if(!$res)
	{
		echo "Error : </br> ".mysqli_error($con)."</br>";
	}
	else{
		if(mysqli_num_rows($res) != 0)
		{
			setCookie('user', $uname, time() + (86400*30), "/");
			if(strcmp($uname,'admin') == 0)
			{
				header('Location: admin.php?uname='.$uname);
			}
			else
				header('Location: index1.php?uname='.$uname);
		}
		else
		{
			echo "</br>-----------User not found-----------</br>";
		}			
	}
	
?>