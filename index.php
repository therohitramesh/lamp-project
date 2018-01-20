<!DOCTYPE html>
<html>
<head>
	<title>FBI - Homepage</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="fav icon" href="images/FBIicon.ico" type="image/x-icon">
		  <link rel="stylesheet" href="css/style.css">
		  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	
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

	.norm {
		width: 350px;
		height: 250px;
		background-color: rgba(0, 0, 0, 0.0);
		color: white;
		}

		.center {
			text-decoration: none !important;
			text-align: center;
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
					<li><a href="login.php">Login</a></li>
					<li><a href="signup.php">Register</a></li>
				</ul>
			</div>
		</div>
	</nav>

		<div class="container content">

		<div class="header">

			<div class="col-md-12">
				<h1>FBI</h1>
				<p>What would you like to do?</p>

				<p class="center" >
				  	<a href="login.php"><button type="button" class="btn norm">Log In</button></a>
					<a href="signup.php"><button type="button" class="btn norm">Register</button></a>
					<a href="hq.php"><button type="button" class="btn norm">HQ</button></a>
				</p>
				<p class="center">
				  	<a href="contact.php"><button type="button" class="btn norm">Contact Us</button></a>
					<a href="createdby.php"><button type="button" class="btn norm">Created By</button></a>
					<a href="about.php"><button type="button" class="btn norm">About Us</button></a>
				</p>
			</div>

			</div>
		</div>




	<!-- <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
</body>
</html>
