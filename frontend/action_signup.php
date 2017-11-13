<?php

$con=mysqli_connect("127.0.0.1","root","mynameisrohit","fbi")or
    die("Could not connect: " . mysql_error());
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$agentid = $_POST['agentid'];
$password = $_POST['password'];
$date = $_POST['date'];
$email = $_POST['dept'];


// $qry = "insert into studentdb(enrol,name) values(".$_POST['txtname'].",'".$_POST['txtname']."')";

$qry = "INSERT INTO `user` (`firstName`, `lastName`, `agentid`, `dept`, `password`, `dob`) VALUES ('$firstName', '$lastName', '$agentid', '$dept', '$password', '$date');";


if(mysqli_query($con,$qry)){
	session_start();
$_SESSION['msg'] = "Successfully Registered! Now you can login!";
	$url='login.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}
else{
	session_start();
	$_SESSION['msg'] = "Sorry Agent ".$firstName." you will have to try again!";
	$url='signup.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
	
}

?>