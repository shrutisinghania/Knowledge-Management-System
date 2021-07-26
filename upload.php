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
			<div id="main"><style type="text/css">label.error{color:red; font-family:"Comic Sans MS", cursive; font-size:18px}</style>

				<!-- Section -->
					<section class="wrapper">
						<div class="inner">
							<header class="align-center">
								<h1>Upload</h1>
								<form method="post" enctype="multipart/form-data" id="frm">
                                <table>
                                <tr>
                                <td>Name</td>
                                <td><input type="text" name="fname" id="fname"></td>
                                </tr>
                                <tr>
                                <td>Upload Files</td>

<td><input type="file" name="fpath" id="fpath"></td>
</tr>
<tr>
<td>Description</td>
<td><textarea name="fdesc" id="fdesc"></textarea></td>
</tr>
<tr>
<td>Category</td>
			
<td><select name="fcategory" id="fcategory">
<option value="">select</option>
<?php
$sl=1;
$Query=mysqli_query($Con,"SELECT * FROM fcategory") or die(mysqli_error($Con));
while($row=mysqli_fetch_array($Query)){
	?>
    
               <option value="<?php echo $row['category']?>"><?php echo $row['category']?></option>
                
                <?php  } ?>



<!--<option value="chem">chem</option>
<option value="phy">phy</option>
<option value="maths">maths</option>
<option value="comp">computer</option>
<option value="other">any other category</option>-->}


</select></td>
</tr>
<tr>
<td><input type="submit" name="ok" value="submit" id="ok">
</td>
</tr></table>
</form>
<?php
if(isset($_POST['ok'])){
$fname= $_POST['fname'];
$fdesc= $_POST['fdesc'];
$fcategory=$_POST['fcategory'];

$finame = $_FILES['fpath']['name'];
$fsize = $_FILES['fpath']['size'];
$ftype = $_FILES['fpath']['type'];

if($fsize > 39999999){
	echo "File size exceeding!!!";
	exit();
}

if($ftype == "application/pdf"){
	
	$dirname = 'root';
	if(!file_exists($dirname)){
		mkdir($dirname);
		
	}
		$serverpath = $dirname."/".$_FILES['fpath']['name'];
		
		$UPLOAD = move_uploaded_file($_FILES['fpath']['tmp_name'],$serverpath) or die($_FILES['cv']['error']);
		if($UPLOAD){
		
$Query = mysqli_query($Con,"INSERT INTO upload VALUES ('','".$_SESSION['login']['id']."','$fname','$serverpath','$fdesc','$fcategory','0')") or die(mysqli_error($Con)); 

if($Query){
		echo " $fname, have been submited successfully";
	}

		}
	
}

else{
	echo 'File type incorrect, kindly upload a  file  like pdf ';
	
}

}
?>
<h3>Your uploaded files</h3>
<?php



	$Verify=mysqli_query($Con,"SELECT * FROM upload WHERE uid = '".$_SESSION['login']['id']."'")  or die(mysqli_error($Con));
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
                <th>status</th>
                
               
				
            </tr>
        </thead>
		<tbody>
        <?php
		$sl = 1; 
		$query=mysqli_query($Con,"SELECT * FROM upload WHERE uid = '".$_SESSION['login']['id']."'")  or die(mysqli_error($Con));
		
		while($row=mysqli_fetch_array($query)){
			
			?>
        	<tr>
            	<td><?php echo $sl?></td>
                <td><?php echo $row['fname']?></td>
				<td><?php echo $row['fpath']?></td>
				<td><?php echo $row['fdesc']?></td>
				<td><?php echo $row['fcategory']?></td>
				<td><?php echo $row['status']?></td>
      
            </tr>
            <?php $sl++; } ?>
        </tbody>
	</table>
    	
    
	<?php	
	
        
	}
    
    
	else
	{
		echo "<p>No file uploaded!!!</p>";
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
<script src="jquery_validate.js"></script>
    <script>
	$(document).ready(function(e) {
		
		$("#ok").click(function(){
			//alert('Hi');
			$("#frm").validate({
				
				rules:{
					fname:{
						required:true
					},
					fpath:{
						required:true
					},
					fcategory:{
						required:true
					},
					fdesc:
				{
					required:true
				}
				
			},
				messages:{
					fname:{
						required:" What is your name????"
					},
					fpath:{
						required:"Upload file"
					},
					fdesc:{
						required:"Enter description for the book"
					},
					fcategory:{
						required:"What is the category of book uploaded"
					}
				}
				
				
				
			})
			
		});
        
    });
	</script>

	</body>
</html>