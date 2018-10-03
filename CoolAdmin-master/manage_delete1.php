<?php
$id=$_GET['id'];
include_once("connection.php");
$str="delete from add_user where id=".$id;
	$res=mysqli_query($con,$str);

	if($res)
	{
		header("location:manage_tpassword.php");
	}

?>
