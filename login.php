<!DOCTYPE html>
<html>
<head>
	<title>FBI - Log In</title>
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
	<div class="image"></div>
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
					<li><a href="signup.php">Register</a></li>
				</ul>
			</div>
		</div>
	</nav>
  <div class="container">
  	<div class="container-fluid content">
	<div class="header">
		<div class="col-md-12">
			<h1><b>Log In</b></h1>
		</div>
	</div>
	<div>
		<form action="action_login.php" method="POST">
			<div class="form-group row">
	      <div class="form-group col-md-6">
		    	<label for="mobile">Agent ID:</label>
      		<input type="text" name="agentid" id="mobile" required placeholder="XXXXXX" class="form-control" maxlength="6">
		  	</div>
			</div>
			<div class="form-group row">
		  	<div class="form-group col-md-6">
		    	<label for="pass">Password:</label>
		    	<input type="password" class="form-control" id="pass" name="password" placeholder="Password" pattern=".{5,10}" title="5 to 10 characters">
		  	</div>
			</div>
				<br><br>
  		  <div class="col-md-12">
  		  	<button type="submit" class="btn btn-primary" style="color: black;">Log In</button>
  		  </div>
		</form>
		<div class="col-md-4" style="text-align: center; color: green"><?php
		session_start();
		if(isset($_SESSION['message']))
		{
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		}
		?>
		</div>
		<div class="col-md-4" style="text-align: center; color: red"><?php
		session_start();
		if(isset($_SESSION['msg']))
		{
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<br><br><br>
		</div>
	</div>
	</div>
	</div>

	<!-- <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
</body>
</html>
