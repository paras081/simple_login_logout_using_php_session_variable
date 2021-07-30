<?php

	
	session_start();

	if(isset($_SESSION['session_var1']) && !empty($_SESSION['session_var1']))
	{
		session_destroy();
		header("Location: login.php");
	}
	
?>