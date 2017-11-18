<?php

$con= mysqli_connect("127.0.0.1","root","mynameisrohit","fbi")or     die("Could not connect: " . mysql_error());

$agentid=$_POST['agentid'];
$password=$_POST['password'];

$sql="SELECT * FROM fbi-user WHERE agentid='$agentid' and password='$password'";

$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

$temp = mysqli_fetch_array( $result );

if($result && $count == 0)
{
	 session_start();
	 $_SESSION["message"]="Invalid Agent ID or Password";
	 $_SESSION["message_name"]=""
	 header("location:login.php");
}
else if($result && $count != 0)
{
	session_start();
	$_SESSION['user'] = $temp;

	header("location:client.php");
}

// $_SESSION['user']['mobile'];

?>
