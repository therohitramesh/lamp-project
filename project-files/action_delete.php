<?php

$con=mysqli_connect("127.0.0.1","root","mynameisrohit","fbi")or
    die("Could not connect: " . mysql_error());

$crimid = $_POST['crimid'];

$qry = "SELECT * FROM `fbi-criminals` WHERE criminalid=$crimid";
$result = mysqli_num_rows(mysqli_query($con,$qry));

if($result!=0){
	session_start();
	$del = "DELETE FROM `fbi-criminals` WHERE criminalid=$crimid";
	if(mysqli_query($con,$del)){
		$_SESSION['msg'] = "<br>Record deleted!";
		header("location:admin_client.php");
	}
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
}
else if($result==0){
	session_start();
	$_SESSION['message'] = "Record not found. Try again.";
	header("location:delete_record.php");
}
?>
