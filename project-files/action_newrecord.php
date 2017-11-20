<?php

$con=mysqli_connect("127.0.0.1","root","mynameisrohit","fbi")or
    die("Could not connect: " . mysql_error());
$name = $_POST['name'];
$crimid = $_POST['crimid'];
$area = $_POST['area'];
$crime = $_POST['crime'];
$year = $_POST['year'];



$qry2 = "SELECT * from `fbi-criminals` WHERE crimid="$crimid";
$qry = "INSERT INTO `fbi-criminals` (`name`, `crimid`, `area`, `crime`, `year`) VALUES ('$name', '$crimid', '$area', '$crime', '$year');";
$result = mysqli_num_rows($qry2);

if(mysqli_query($con,$qry) && $result!=0){
	session_start();
$_SESSION['message'] = "Successfully added record!";
   header("location:admin_client.php");
}
else if(mysqli_query($con,$qry) && $result==0){
	session_start();
	$_SESSION['message'] = "<br>Sorry agent, you will have to try again! The ID you have entered already exists.";
	header("location:new_record.php");

}

?>
