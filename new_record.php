<!DOCTYPE html>
<html>
<head>
	<title>FBI - Register</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="fav icon" href="images/FBIicon.ico" type="image/x-icon">
		  <link rel="stylesheet" href="css/style.css">
		  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		  <link rel="stylesheet" type="text/css" src="fonts//home/rohitramesh/version-control/lamp-project/project-files/fonts/TypoWriter Light Demo.otf">
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
	<?php 
  session_start();
  if(!isset($_SESSION['user'])){
    $_SESSION["msg"]="Your session has expired";
    header("location:login.php");
  }
?>
	<div class="container"></div>
	<div class="image"></div>
	<div class="row">
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
				<a href="index.php" class="navbar-brand">FBI</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-nav-demo">
				<ul class="nav navbar-nav">
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="admin_client.php">Profile</a></li>
					<li><a href="login.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>

  <div class="container">
  	<div class="container-fluid content">
	<div class="header">
		<div class="col-md-12">
			<h1><b>Add Record</b></h1>
		</div>
	</div>
	<div>

	    <form action="action_newrecord.php" method="POST">
	      <div class="form-group col-md-6">
		  	<label for="name">Name:</label>
	      	<input type="text" name="name" id="name" required placeholder="John Doe" class="form-control">
		  </div>
		  <div class="form-group col-md-6">
		  	<label for="last">Criminal ID:</label>
	      	<input type="text" name="crimid" id="crimid" required placeholder="XXXXXX" class="form-control" pattern=".{5,10}" title="5 to 10 characters">
		  </div>
	      <div class="form-group col-md-6">
		    <label for="agentid">Area:</label>
      		<input type="text" name="area" id="area" required placeholder="Athwa" class="form-control" maxlength="15">
		  </div>
		  <div class="form-group col-md-6">
		    <label for="dept">Crime:</label>
      		<input type="text" name="crime" id="crime" required placeholder="Robbery" class="form-control">
		  </div>
		  <div class="form-group col-md-6">
		    <label for="pass">Year:</label>
		    <input type="text" class="form-control" id="year" name="year" required placeholder="YYYY">
		  </div>

  		  <br><br><br>
  		  <div class="col-md-12">
  		  	<button type="submit" class="btn btn-primary" style="color: black;">Submit</button>
  		  </div>
		</form>
		<div class="col-md-4" style="text-align: center; color: red"><?php
		session_start();
		if(isset($_SESSION['message']))
		{
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		}
		?>
		<br>
		<br>
		</div>
	</div>
	</div>
  </div>


	<!-- <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
</body>
</html>
