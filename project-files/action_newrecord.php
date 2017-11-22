<?php

$con=mysqli_connect("127.0.0.1","root","mynameisrohit","fbi")or
    die("Could not connect: " . mysql_error());
$name = $_POST['name'];
$crimid = $_POST['crimid'];
$area = $_POST['area'];
$crime = $_POST['crime'];
$year = $_POST['year'];


$qry2 = "SELECT * from `fbi-criminals` WHERE criminalid=$crimid";
$result = mysqli_num_rows(mysqli_query($con,$qry2));

if($result==0){
	session_start();
	$qry = "INSERT INTO `fbi-criminals` (`criminalid`, `name`, `crime-comm`, `area`, `year`) VALUES ('$crimid', '$name', '$crime', '$area', '$year');";
if (mysqli_query($con, $qry)) {
    $_SESSION['msg'] = "<br>Record added.";
	header("location:admin_client.php");	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
else if($result!=0){
	session_start();
	$_SESSION['message'] = "<br>Sorry agent, you will have to try again! The ID you have entered already exists.";
	header("location:new_record.php");	
}

?>
