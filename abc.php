<?php include ('config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Registration Form</title>
</head>

<body>
<h2> Signup here</h2>
<form method="post">
<table>
<tr>
 <td>Name</td>
 <td><input type="text" name="name" /></td>
 </tr>
 <tr>
 <td>email</td>
 <td><input type="email" name="email" /></td>
 </tr>
 <tr>
 <td>Password</td>
 <td><input type="password" name="password" /></td>
 </tr>
 <tr>
 <td><input type="submit" name="ok" value="signup" /></td>
 </tr>
 </table>
 </form>
 <h3><a href="file:///G|/sakshi1/login.php">or click here to login</a></h3>
 <?php
 
 if(isset($_POST['ok'])){
# get all data from super global variables via POST Method
$name = $_POST['name'];
$email= $_POST['email'];
$password=$_POST['password'];
$Verify=mysqli_query($Con,"SELECT * FROM signup WHERE email='$email'") or die(mysqli_error($Con));
	if(mysqli_num_rows($Verify)>1)
	{
		$row = mysqli_fetch_array($Verify);
		echo 'email already exist';
		exit();
	}
else
{
	
 #fire sql quer for saving data into db table
 $Query = mysqli_query($Con,"INSERT INTO signup VALUES
 ('','$name','$email','$password')") or die(mysqli_error($Con));
  #if Query returns true then the data gets saved else will return an error
  if($Query){
	  echo "<p style='background-colour:green; colour:white;
	  padding:5px'>Mr/Ms. $name, You have been registered successfully</p>";
  }
}
 }
	?>  	 
</body>

</html>