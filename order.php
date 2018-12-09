<?php
	require('connect.php');
	
	$name = $_POST['name'];
	$address  = $_POST['add']
	$product = $_POST['product'];
	$qty = $_POST['quantity'];
	
	//echo "</br>name : ".$name."</br>pass : ".$pass."</br>maiil : ".$mail;
	
	//$qu = "INSERT INTO `users` (`sl.no`, `uname`, `pass`, `email`) VALUES (NULL, '".$name."', '".$pass."', '".$mail."')";
	
	//echo "</br>".$qu;
	
	$qu = mysqli_query($con, "INSERT INTO `order` (`sl.no`,`name`, `address`, `product`, `qty`) VALUES (NULL, '".$name."', '".$address."', '".$product."', '".$qty."')");
	
	if(!$qu)
	{
		echo "Unable to register\nPlease try again".mysqli_error($con);
		
	}
	else{
		echo "(: Order added:)";
		
	}
?>