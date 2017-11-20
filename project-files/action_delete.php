<?php

$con=mysqli_connect("127.0.0.1","root","mynameisrohit","fbi")or
    die("Could not connect: " . mysql_error());

$crimid = $_POST['crimid'];

$qry = "SELECT * FROM `fbi-criminals` WHERE crimid='$crimid'";

if(mysqli_query($con,$qry) && $qry != 0){
	session_start();

$del = "DELETE FROM `fbi-criminals` WHERE crimid=$crimid";
mysqli_query($del);

	header("location:search_results.php");
}
else if(mysqli_query($con,$qry) || $qry == 0){
	session_start();
	$_SESSION['msg'] = "Record not found. Try again.";
	header("location:delete_record.php");
}


?>
