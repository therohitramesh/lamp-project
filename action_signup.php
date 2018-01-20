<?php

$con=mysqli_connect("127.0.0.1","root","mynameisrohit","fbi")or
    die("Could not connect: " . mysql_error());
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$agentid = $_POST['agentid'];
$dept = $_POST['dept'];
$password = $_POST['password'];
$admin = 0;

// $qry = "insert into studentdb(enrol,name) values(".$_POST['txtname'].",'".$_POST['txtname']."')";

$qry2 = "SELECT * from `fbi-users` WHERE agentid=$agentid";
$result = mysqli_num_rows(mysqli_query($con,$qry2));

if($result==0){
	session_start();
	$qry = "INSERT INTO `fbi-users` (`first-name`, `last-name`, `agentid`, `dept`, `password`,`admin`) VALUES ('$firstName', '$lastName', '$agentid', '$dept', '$password', '$admin');";
	$con->query($qry);
	$_SESSION['message'] = "Successfully Registered! Now you can login!";
	header("location:login.php");
	
}
else if($result!=0){
	session_start();
	$_SESSION['message'] = "<br>Sorry Agent ".$firstName." you will have to try again! The ID you have entered already exists.";
	header("location:signup.php");	
}

?>