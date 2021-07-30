<?php

	session_start();



	if(isset($_REQUEST['login'])) //if login submit button is clicked or not???
	{
		$username = $_REQUEST['unm'];
		$_SESSION['session_var1'] = $username;
		header("Location: dashboard.php");
		// echo "your session name is".$_SESSION['session_var1'];
	}

?>
<html>
	<body>
		<form method="post">

				username:<input type="text" name="unm"><br>
				password:<input type="password" name="pwd"><br>
				<input type="submit" name="login">
		</form>	
	</body>
</html>