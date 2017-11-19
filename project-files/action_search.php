<?php

$con = mysqli_connect("localhost","root","mynameisrohit","fbi-criminals");
	or
	die("Could not connect: ".mysql_error());

$criminalid = $_POST['search'];

$qry = "SELECT * FROM `fbi-criminals` WHERE criminalid=$criminalid";

if(mysqli_query($con,$qry) && $qry != 0){
	session_start();
	$_SESSION['msg'] = "Record found!";
	header("location:search_results.php");
}
else if(mysqli_query($con,$qry) || $qry == 0){
	session_start();
	$_SESSION['msg'] = "Record not found. Try again.";
	header("location:client.php");
}

?>