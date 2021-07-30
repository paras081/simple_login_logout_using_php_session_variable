<?php

session_start();

if(isset($_SESSION['session_var1']) && !empty($_SESSION['session_var1']))
{

?>


<html>
			<!-- <a href="logout.php">Logout</a> -->
			<head>
				<link rel="stylesheet" href="css/style.css">
			</head>
			<body>
				<ul>
				  <li><a href="dashboard.php">Dashboard</a></li>
				  <li><a  class="active"  href="contactus.php">Contact</a></li>
				  <li><a href="product.php">Product</a></li>
				  <li><a href="registration.php">Register</a></li>
				   <li><a href="logout.php">Log out</a></li>
				</ul>
			</body>
		</html>
<?php
		}
?>