<?php include('config.php'); 

?>
<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Elements - Urban by TEMPLATED</title>
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
					<li><a href="index1.php">Home</a></li>
					<li><a href="upload.php">Upload</a></li>
					<li><a href="search.php">Search</a></li>
                    <li><a href="editprofile.php">Edit Profile</a></li>
					<li><a href="editpassword.php">Edit Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<div id="main"><style type="text/css">label.error{color:red; font-family:"Comic Sans MS", cursive; font-size:18px}</style>
				<section class="wrapper style1">
					<div class="inner">

						<header class="align-center">
							<h1>Edit Password</h1>
							
						</header>

	<form method="post" id="frm">
    <table>
    <tr>
    <td>Old Password</td>
    <td><input type="text" name="oldpwd" id="oldpwd"></td>
    </tr>
    <tr>
    <td>New Password</td>
    <td><input type="password" name="newpwd" id="newpwd"></td>
    </tr>
    <tr>
    <td>Confirm Password</td>
    <td><input type="password" name="copwd" id="copwd"></td>
    </tr>
    <tr>
    <td><input type="submit" name="ok" value="submit" id="ok"></td>
    </tr>
    </table>
    </form>
    </div>
    </section>
    </div>
    <?php
	
	
$user = $_SESSION['login']['email'];
if($user)
{ 
if(isset($_POST['ok']))
{
	$oldpwd=$_POST['oldpwd'];
	$newpwd=$_POST['newpwd'];
	$copwd=$_POST['copwd'];

	$query=mysqli_query($Con,"SELECT * FROM signup WHERE email='".$_SESSION['login']['email']."'") or die(mysqli_error($Con));
	$row = mysqli_fetch_array($query);
	$oldpwd1=$row['pwd'];
	if($oldpwd==$oldpwd1)
	{
		if($newpwd==$copwd)
		
		{
			$querychange=mysqli_query($Con,"UPDATE signup SET pwd='$newpwd' WHERE email='".$_SESSION['login']['email']."'");
			
			if($querychange){
			
			?><script>
			alert('your password has been changed successfully');
			window.location.href='signin.php';
			</script><?php

			}
		

}
else{
	echo 'password mismatch!';
}
}
else{
	echo 'old password invalid';
}
}
}

		?>						<!-- Break -->
								<div class="4u 12u$(medium)">
									<h3>&nbsp;</h3>
								</div>
								<div class="4u$ 12u$(medium)"></div>
							</div>

						<hr class="major" />

						<!-- Elements -->
							<h2 id="elements">&nbsp;</h2>
					</div>
				</section>
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
            <script src="jquery_validate.js"></script>
    <script>
	$(document).ready(function(e) {
		
		$("#ok").click(function(){
			//alert('Hi');
			$("#frm").validate({
				
				rules:{
					oldpwd:{
						required:true
					},
					newpwd:{
						required:true
					},
					copwd :{
						required:true
					}
					
				
			},
				messages:{
					oldpwd:{
						required:" What is old password????"
					},
					newpwd:{
						required:"Enter your new password"
					},
					copwd:{
						required:"confirm your new password"
					}
				}
				
				
				
			})
			
		});
        
    });
	</script>


	</body>
</html>