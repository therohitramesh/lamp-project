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

$qry = "INSERT INTO `fbi-users` (`first-name`, `last-name`, `agentid`, `dept`, `password`,`admin`) VALUES ('$firstName', '$lastName', '$agentid', '$dept', '$password', '$admin');";

if(mysqli_query($con,$qry) && $qry != 0){
	session_start();
$_SESSION['msg'] = "Successfully Registered! Now you can login!";
   header("location:login.php");
}
else if(mysqli_query($con,$qry) && $qry == 0){
	session_start();
	$_SESSION['msg'] = "<br>Sorry Agent ".$firstName." you will have to try again!";
	$url='signup.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
	
}

?>