<?php include('config.php');
if(empty($_SESSION['login']))
{
	header('location:login.php');
	exit();
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>home page</title>
</head>

<body>
<h1>welcome <?php echo $_SESSION['login']['name'] ?> your email id is <?php echo $_SESSION['login']['email']?> </h1>
<h5><a href="file:///G|/sakshi1/logout.php">logout</a></h5>
</body>
</html>