<?php include('config.php'); ?>
<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Generic - Urban by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">Urban <span>by TEMPLATED</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
				<li><a href="index.html">Home</a></li>
					<li><a href="aboutus.html">About Us</a></li>
					<li><a href="Contactus.html">Contact Us</a></li>
                     <li><a href="Signup.php">Sign up</a></li>
					<li><a href="Signin.php">Sign in</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper">
						<div class="inner">
							<header class="align-center">
								<h1>Sign In</h1>
								
							</header>
					<form method="post">
<table>
<tr>
<td>email</td>
<td><input type="email" name="email"></td>
</tr>
<tr>
<td>password</td>
<td><input type="password" name="pwd"></td>
</tr>
<tr>
<td><input type="submit" name="ok" value="signin"></td>
</tr>
</table>
</body>
</form>
<?php
if(isset($_POST['ok']))
{
	
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$Verify=mysqli_query($Con,"SELECT * FROM signup WHERE email='$email' AND pwd='$pwd'") or die(mysqli_error($Con));
	if(mysqli_num_rows($Verify)>0)
	{
		$row = mysqli_fetch_array($Verify);
		
		$_SESSION['login']= $row;
		header('location:index1.php');
		exit();
	}
	else
	{
		echo "<p>Invalid user email or password</p>";
	}
}

?>

						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style1"></section>

			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
					</ul>
					<p>&copy; Untitled. All rights reserved. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>