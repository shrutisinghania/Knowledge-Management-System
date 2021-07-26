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
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="../index.html">Urban <span>by TEMPLATED</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
                <li><a href="profile.php">Home</a></li>
					<li><a href="view.php">View Uploads</a></li>
					
                    
					<li><a href="viewuser.php">View users</a></li>
					<li><a href="changepassword.php">Change password</a></li>
					<li><a href="signout.php">Signout</a></li>
				
				</ul>
			</nav>

		<!-- Main -->
			<div id="main">
				<section class="wrapper style1">
					<div class="inner">

						<header class="align-center">
							<h1>View Users</h1>
							
						</header>
                        <?php
$Query = mysqli_query($Con,"SELECT * FROM signup") or die(mysqli_error($Con));	
if(mysqli_num_rows($Query)>0){
	?><table border="1" cellpadding="5">
		<thead>
        	<tr>
            	<th>Sl No</th>
                <th>Email</th>
                <th>Password</th>
                <th>First Name</th>
                <th>Middle Name</th>
				<th>Last Name</th>
				<th>Address</th>
				<th>Date of Birth</th>
				<th>Gender</th>
				<th>About</th>
				<th>Occupation</th>
				<th>Profile Pic</th>
               
				<th>Phone Number</th>
               
            </tr>
        </thead>
		<tbody>
        <?php
		$sl = 1; 
		
		while($row=mysqli_fetch_array($Query)){
			
			?>
        	<tr>
            	<td><?php echo $sl?></td>
                <td><?php echo $row['email']?></td>
				<td><?php echo $row['pwd']?></td>
				<td><?php echo $row['fname']?></td>
				<td><?php echo $row['mname']?></td>
				<td><?php echo $row['lname']?></td>	 
			   <td><?php echo $row['addr']?></td>
			   <td><?php echo $row['dob']?></td>
			   <td><?php echo $row['gnd']?></td>
			   <td><?php echo $row['about']?></td>
			   <td><?php echo $row['occp']?></td>
			   <td><?php echo $row['ppic']?></td>	 
			   <td><?php echo $row['phno']?></td>
      <td><a href="../<?php echo $row['ppic']?>" target="_blank">image</a></td>
                
            </tr>
            <?php $sl++; } ?>
        </tbody>
	</table><?php
	
	
}
else{
	echo 'No records found';
}




?>

	
    
		
						<!-- Break -->
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
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>