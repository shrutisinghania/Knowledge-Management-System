<?php include ('config.php'); ?>
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
				<div class="logo"><a href="index.html">KMS <span>by TICT</span></a></div>
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
							<h1>SIGN UP</h1>
							</header>
							<div class="flex flex-2">
								
								<div class="col col1 first">
									<div class="inner">
									  <header class="align-center">
									  
<form method="post"  enctype="multipart/form-data">
<table width="314%">

 <tr>
 <td>email</td>
 <td><input type="email" name="email" /></td>
 </tr>
 <tr>
 <td>Password</td>
 <td><input type="password" name="pwd" /></td>
 </tr>
 <tr>
 <td width="120">First Name</td>
 <td width="182"><input type="text" name="fname" /></td>
 </tr>
 <tr>
 <td width="120">Middle Name</td>
 <td width="182"><input type="text" name="mname" /></td>
 </tr>
 <tr>
 <td width="120">Last Name</td>
 <td width="182"><input type="text" name="lname" /></td>
 </tr>
  <tr>
 <td>address</td>
<td><textarea name="addr"></textarea></td>
</tr>
 <tr>
<td>date of birth</td>
<td><input type="date" name=" dob"></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gnd" value="male">male&nbsp;
<input type="radio" name="gnd" value="female">female&nbsp;
<input type="radio" name="gnd" value="others">others</td>
</tr>
<tr>
 <td>About</td>
<td><textarea name="about"></textarea></td>
</tr>
<tr>
<td>Occupation</td>
<td><input type="text" name="occp"></td>
</tr>
<tr>
<td>upload profile pic</td>
<td><input type="file" name="ppic"></td>
</tr>
<tr>
<td>Security Question</td>
<td><input type="text" name="sque"></td>
</tr>
<tr>
<td>Security Answer</td>
<td><input type="text" name="sans"></td>
</tr>
<tr>
<td>phone no</td>
<td><input type="number" name="phno"></td>
</tr>
 <tr>
 <td><input type="submit" name="ok" value="signup" /></td>
 </tr>
 </table>
 </form>
 
 <?php
 

 
 if(isset($_POST['ok'])){
# get all data from super global variables via POST Method
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$addr = $_POST['addr'];
$dob = $_POST['dob'];
$gnd = $_POST['gnd'];
$about=$_POST['about'];
$occp = $_POST['occp'];
$fname = $_FILES['ppic']['name'];
$fsize = $_FILES['ppic']['size'];
$ftype = $_FILES['ppic']['type'];

if($fsize > 39999999){
	echo "File size exceeding!!!";
	exit();
}

if($ftype == "jpej/jpg"){
	
	$dirname = 'root';
	if(!file_exists($dirname)){
		mkdir($dirname);
		
	}
		$serverpath = $dirname."/".$_FILES['ppic']['name'];
		
		$UPLOAD = move_uploaded_file($_FILES['ppic']['tmp_name'],$serverpath) or die($_FILES['ppic']['error']);
		if($UPLOAD){
		
$Query = mysqli_query($Con,"INSERT INTO signup VALUES ('','$email','$pwd','$fname','$mname','$lname','$addr','$dob','$gnd','$about','$occp','$ppic','$sque,'$sans','phno')") or die(mysqli_error($Con)); 

if($Query){
		echo "Mr/Ms. $name, You form have been submited successfully";
	}

		}
	
}

else{
	echo 'File type incorrect, kindly upload a correct profile pic';
	
}

}

$sque = $_POST['sque'];
$sans = $_POST['sans'];
$phno = $_POST['phno'];
$email= $_POST['email'];
$pwd=$_POST['pwd'];
$Verify=mysqli_query($Con,"SELECT * FROM signup WHERE email='$email'") or die(mysqli_error($Con));
	if(mysqli_num_rows($Verify)>0)
	{
		$row = mysqli_fetch_array($Verify);
		echo 'email already exist';
		exit();
	}
else
{
	
 #fire sql quer for saving data into db table
 $Query = mysqli_query($Con,"INSERT INTO signup VALUES
 ('','$email','$pwd','$fname','$mname','$lname','$addr','$dob','$gnd','$about','$occp','$ppic','$sque,'$sans','phno')") or die(mysqli_error($Con)); 
  #if Query returns true then the data gets saved else will return an error
  if($Query){
	  echo "<p style='background-colour:green; colour:white;
	  padding:5px'>Mr/Ms. $fname, You have been registered successfully</p>";
  }
}
 
 
	?>  </div>
							  </div>
							</div>
								
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





