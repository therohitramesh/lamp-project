<!DOCTYPE html>
<html>
<head>
	<title>FBI</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="fav icon" href="images/FBIicon.ico" type="image/x-icon">
		  <link rel="stylesheet" href="css/style.css">
		  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <style type="text/css">
    body{
    	color: white;
    }
    .header{
    	font-size: 50px;
    }
    .navbar-inverse {
      background: black;
      color: white;
    }
    .navbar-inverse .navbar-brand, .navbar-inverse a{
      color:white;
    }
    .navbar-inverse .navbar-nav>li>a {
      color: white;
    }
    input.transparent-input{
       background-color:transparent !important;
       border:none !important;
    }
  </style>

</head>
<body>
	<div class="container"></div>
	<div class="image"></div>
	<div class="row">
		<div class="col-md-4"></div>

		<div class="col-md-4"></div>
	</div>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
				<a href="index.php" class="navbar-brand"><span class="glyphicon glyphicon-picture"></span> FBI</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-nav-demo">
				<ul class="nav navbar-nav">
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>

  <div class="container">
	<div class="header">
		<div class="col-md-12">
			<h1><b>Criminal Records</b></h1>
		</div>
	</div>
	<div class="col-md-4" style="text-align: center; color: green"><?php
		session_start();
		if(isset($_SESSION['msg']))
		{
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
	</div>
	<!-- <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->

<?php
      $con= mysqli_connect("127.0.0.1","root","mynameisrohit","fbi")or     die("Could not connect: " . mysql_error());

      $criminalid = $_POST['criminalid'];

      $sql="SELECT * FROM `fbi-criminals` WHERE `criminalid`=$criminalid";
		
		$result=mysqli_query($con,$sql);
      
      while($temp = mysqli_fetch_array($result))
      {
        $criminalid = $temp['crimnalid'];
        $name = $temp['name'];
        $crime_comm = $temp['crime-comm'];
        $area = $temp['area'];
        $year = $temp['year'];
        $src = $temp['img'];

        // // echo "<div class='row'>"
        // echo "<div class='col-lg-4 col-sm-6' style="float:left"><p><img src='$src'  alt = 'pic'></img>";
        // echo "<br>";
        echo "NAME: ".$name;
        echo "ID: ".$criminalid;




        // echo "<div class='col-md-12'>
        // 		<div class='row'>
        // 			<img class=criminalimg src=$src alt='criminal image' style='float:left;'></img>
        // 			<div class='info'>
        // 				Criminal ID : $crminalid<br>
        // 				Name : $name<br>
        // 				Crime Committed : $crime_comm<br>
        // 				Area : $area<br>
        // 				Year : $year<br>
      		// 		</div>
      		// 	</div>
      		// </div>"
      }
?>
</div>
</body>
</html>

