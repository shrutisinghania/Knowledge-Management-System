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
								<h1>Search</h1>
								<form method="post">
                                <table>
                                <tr>
                                <td>Book Name</td>
                                <td><input type="text" name="fname"></td>
                                </tr>
                                

    
    
<tr>
<td><input type="submit" name="ok" value="search">
</td>
</tr></table>
</form>
<?php
if(isset($_POST['ok']))
{
	
	$fname=$_POST['fname'];
	
	$Verify=mysqli_query($Con,"SELECT * FROM upload WHERE fname='$fname' AND status='1'") or die(mysqli_error($Con));
	if(mysqli_num_rows($Verify)>0)
	{
		
		?><table border="1" cellpadding="5">
		<thead>
        	<tr>
            <th>Sl no.</th>
            	<th>Book name</th>
                <th>path</th>
                <th>book description</th>
                <th>category</th>
                <th>download file</th>
                
               
				
            </tr>
        </thead>
		<tbody>
        <?php
		$sl = 1; 
		
		while($row=mysqli_fetch_array($Verify)){
			
			?>
        	<tr>
            	<td><?php echo $sl?></td>
                <td><?php echo $row['fname']?></td>
				<td><?php echo $row['fpath']?></td>
				<td><?php echo $row['fdesc']?></td>
				<td><?php echo $row['fcategory']?></td>
				
      <td><a href="<?php echo $row['fpath']?>" target="_blank">download</a></td>
               
            </tr>
            <?php $sl++; } ?>
        </tbody>
	</table>
    	
    
	<?php	
	
        
	}
    
    
	else
	{
		echo "<p>No search found!!!</p>";
	}



}
     ?>                         
                                
                                
							</header>
					
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