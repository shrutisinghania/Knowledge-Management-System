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
    <?php include ('config.php');
	if(empty($_SESSION['login']['id'])){
		header('location:signup.php');
		exit();
	}
	$getUser = mysqli_query($Con,"SELECT * FROM signup WHERE id = '".$_SESSION['login']['id']."'");
    $row = mysqli_fetch_array($getUser);
	
?>
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
			<div id="main">

				<!-- Section -->
					<section class="wrapper">
						<div class="inner">
							<header class="align-center">
								<h1>Edit your Profile</h1>
							</header>
						<form method="post">
	<table>
    
        
 <tr>
 <td width="120">First Name</td>
 <td width="182"><input type="text" name="fname" value="<?php echo $row['fname']?>">
</td>
 </tr>
 <tr>
 <td width="120">Middle Name</td>
 <td width="182"><input type="text" name="mname" value="<?php echo $row['mname']?>">
 </td>
 </tr>
 <tr>
 <td width="120">Last Name</td>
 <td width="182"><input type="text" name="lname" value="<?php echo $row['lname']?>">
          </td>
 </tr>
 <tr>
 <td>address</td>
<td><textarea name="addr"><?php echo $row['addr']?>
</textarea></td>
</tr>
 <tr>
<td>date of birth</td>
<td><input type="date" name=" dob" value="<?php echo $row['dob']?>">
           </td>
</tr>

<tr>
 <td>About</td>
<td><textarea name="about" ><?php echo $row['about']?>
</textarea></td>
</tr>
<tr>
<td>Occupation</td>
<td><input type="text" name="occp" value="<?php echo $row['occp']?>">
      </td>
</tr>

<tr>
<td>Security Question</td>
<td><input type="text" name="sque" value="<?php echo $row['sque']?>">
            </td>
</tr>
<tr>
<td>Security Answer</td>
<td><input type="text" name="sans" value="<?php echo $row['sans']?>">
            </td>
</tr>
<tr>
<td>phone no</td>
<td><input type="text" name="phno" value="<?php echo $row['phno']?>">
      </td>
</tr>
 
 
        <tr>
        	<td><input type="submit" name="upd" value="Save Changes"></td>	
        </tr>
    </table>
</form>
<?php
 
 if(isset($_POST['upd'])){
# get all data from super global variables via POST Method
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$addr = $_POST['addr'];
$dob = $_POST['dob'];

$about=$_POST['about'];
$occp = $_POST['occp'];

$sque = $_POST['sque'];
$sans = $_POST['sans'];
$phno = $_POST['phno'];

$DataUpd = mysqli_query($Con,"UPDATE signup SET fname='$fname',mname='$mname',lname='$lname', addr='$addr', dob='$dob',about='$about',occp='$occp',sque='$sque',sans='$sans',phno='$phno' WHERE id = '".$_SESSION['login']['id']."'") or die(mysqli_error($Con));

	
	if($DataUpd){
		header('location:index1.php');
		exit();
	}



}
?>
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