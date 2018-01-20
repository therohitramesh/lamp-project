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
    table
    {
    border-style:solid;
    border-width:2px;
    border-color:black;
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
			<h1><b>Search Results</b></h1>
		</div>
	</div>
	<div>
    <?php

    $con = mysqli_connect("127.0.0.1","root","mynameisrohit","fbi");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
    $qry = "SELECT * FROM `fbi-criminals`";
    $result = $con->query($qry);

    


    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Year</th>
    <th>Area</th>
    <th>Crime</th>
    </tr>";

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row['criminalid'] . "</td>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['year'] . "</td>";
          echo "<td>" . $row['area'] . "</td>";
          echo "<td>" . $row['crime-comm'] . "</td>";
          echo "</tr>";
      }
    } else {
        echo "0 results";
    }
    echo "</table>";

    mysqli_close($con);
    ?>



	</div>
	</div>
  </div>

</body>
</html>
