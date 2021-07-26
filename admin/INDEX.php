<?php include('../kms/config.php'); ?>
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
		<link rel="stylesheet" href="../kms/assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
            <tr>WELCOME ADMIN</tr>
				<div class="logo"><a href="../kms/index.html">KMS <span>by TICT</span></a></div>
				
			</header>

		<!-- Main -->
			<div id="main"><style type="text/css">label.error{color:red; font-family:"Comic Sans MS", cursive; font-size:18px}</style>

				<!-- Section -->
					<section class="wrapper">
						<div class="inner">
							<header class="align-center">
								<h1>Sign In</h1>
								
							</header>
					<form method="post" id="frm">
<table>
<tr>
<td>email</td>
<td><input type="email" name="email" id="email"></td>
</tr>
<tr>
<td>password</td>
<td><input type="password" name="pwd" id="pwd"></td>
</tr>
<tr>
<td><input type="submit" name="ok" value="signin" id="ok"></td>
</tr>
</table>
</body>
</form>

<?php
if(isset($_POST['ok']))
{
	
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$Verify=mysqli_query($Con,"SELECT * FROM admin WHERE email='$email' AND pwd='$pwd'") or die(mysqli_error($Con));
	if(mysqli_num_rows($Verify)>0)
	{
		$row = mysqli_fetch_array($Verify);
		
		$_SESSION['login']= $row;
		header('location:profile.php');
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
			<script src="../kms/assets/js/jquery.min.js"></script>
			<script src="../kms/assets/js/jquery.scrolly.min.js"></script>
			<script src="../kms/assets/js/jquery.scrollex.min.js"></script>
			<script src="../kms/assets/js/skel.min.js"></script>
			<script src="../kms/assets/js/util.js"></script>
			<script src="../kms/assets/js/main.js"></script>
            <script src="../jquery_validate.js"></script>
    <script>
	$(document).ready(function(e) {
		
		$("#ok").click(function(){
			//alert('Hi');
			$("#frm").validate({
				
				rules:{
					email:{
						required:true
					},
					pwd:{
						required:true
					}
				
			},
				messages:{
					email:{
						required:" What is your email????"
					},
					pwd:{
						required:"Enter your password"
					}
				}
				
				
				
			})
			
		});
        
    });
	</script>


	</body>
</html>