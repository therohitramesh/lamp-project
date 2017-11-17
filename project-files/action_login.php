<?php

$con= mysqli_connect("127.0.0.1","root","rohitramesh","fbi")or     die("Could not connect: " . mysql_error());

$mobile=$_POST['mobile'];
$password=$_POST['password'];

$sql="SELECT * FROM user WHERE mobile='$mobile' and password='$password'";


$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

$temp = mysqli_fetch_array( $result );

if($count == 0)
{
	 session_start();
	 $_SESSION["message"]="Invalid Agent ID or Password";
	 header("location:login.php");
}
else
{
	session_start();
	$_SESSION['user'] = $temp; //what is 'user'? - Mir
	header("location:client.php");
}

// $_SESSION['user']['mobile'];

?>
