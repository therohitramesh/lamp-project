<?php

$con= mysqli_connect("127.0.0.1","root","mynameisrohit","fbi")or
	die("Could not connect: " . mysql_error());

$agentid=$_POST['agentid'];
$password=$_POST['password'];

$sql="SELECT * FROM `fbi-users` WHERE `agentid`='$agentid' and `password`='$password'";

$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

$temp = mysqli_fetch_array( $result );
$admin = $temp['admin'];

if($count == 0)
{
	 session_start();
	 $_SESSION["msg"]="Invalid Agent ID or Password";
	 header("location:login.php");
}
else
{
	if($admin == 0)
	{
		session_start();
		$_SESSION['user'] = $temp;
		header("location:client.php");
	}
	else if($admin == 1)
	{
		session_start();
		$_SESSION['user'] = $temp;
		header("location:admin_client.php");
	}
}

?>
