<?php
include ('config.php');

if(!empty($_GET['id'])){

	$UPDATE = mysqli_query($Con,"UPDATE upload SET status = '0' WHERE id = '".$_GET['id']."'") or die(mysqli_error($Con));
	
	if($UPDATE){
	
		header('location:view.php');
		exit();
	
	}






}
else{
	header('location:view.php');
	exit();
}



?>