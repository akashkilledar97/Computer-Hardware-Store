<?php
	setCookie('user', $uname, time() - (86400*30), "/");
	header('Location:index.php');
?>