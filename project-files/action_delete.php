<?php

$con=mysqli_connect("127.0.0.1","root","mynameisrohit","fbi")or
    die("Could not connect: " . mysql_error());

$crimid = $_POST['crimid'];

$qry = "SELECT * FROM `fbi-criminals` WHERE criminalid=$crimid";

if(mysqli_query($con,$qry)){
	session_start();
	$del = "DELETE FROM `fbi-criminals` WHERE criminalid=$crimid";
	mysqli_query($con,$del);
	$_SESSION['message'] = "Record deleted!";
	header("location:admin_client.php");
}
else{
	session_start();
	$_SESSION['msg'] = "Record not found. Try again.";
	header("location:delete_record.php");
}
?>
