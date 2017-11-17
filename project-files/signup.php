<!DOCTYPE html>
<html>
<head>
	<title>FBI-Register</title>
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
      background: #2c3e50;
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
					<li><a href="admin_login.php">Admin Login</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

  <div class="container">
	<div class="header">
		<div class="col-md-12">
			<h1><b>Register</b></h1>
		</div>	
	</div>
	<div>

	    <form action="action_signup.php" method="POST">
	      <div class="form-group col-md-6">
		  	<label for="first">First Name:</label>
	      	<input type="text" name="first-name" id="first-name" required placeholder="Steve" class="form-control">
		  </div>
		  <div class="form-group col-md-6">
		  	<label for="last">Last Name:</label>
	      	<input type="text" name="last-name" id="last-name" required placeholder="Jobs" class="form-control">
		  </div>
	      <div class="form-group col-md-6">
		    <label for="mobile">AgentID:</label>
      		<input type="text" name="agentid" id="mobile" required placeholder="XXXXXX" class="form-control" maxlength="6">
		  </div>
		  <div class="form-group col-md-6">
		    <label for="dept">Department:</label>
      		<input type="text" name="dept" id="dept" required placeholder="abc@xyz.com" class="form-control">
		  </div>
		  <div class="form-group col-md-6">
		    <label for="pass">Password:</label>
		    <input type="password" class="form-control" id="pass" name="password" placeholder="Password" pattern=".{5,10}" title="5 to 10 characters">
		  </div>
		  <div class="form-group col-md-6">
		    <label for="confirm-pass">Confirm Password:</label>
		    <input type="password" class="form-control" id="confirm-pass" placeholder="Password" pattern=".{5,10}" title="5 to 10 characters">
		  </div>
 
		  
		  <div class="form-group col-md-3">
		  	<label for="date">Date of Birth:</label>
		  	<input type="date" name="date" class="form-control">	  		
  		  </div>
  		  <br><br>
  		  <div class="col-md-12">
  		  	<button type="submit" class="btn btn-primary" style="color: black;">Register</button>
  		  </div>
		</form> 
		<div class="col-md-4" style="text-align: center; color: red"><?php
		session_start();
		if(isset($_SESSION['msg']))
		{
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		</div>
	</div>
	</div>
  </div>
    
	<!-- <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
</body>
</html>

