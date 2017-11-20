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
    $_SESSION["message"]="Your session has expired";
    header("location:login.php");
  }
?>
  <div class="container">
    <div class="container-fluid content">
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
      <h1><b>
        <?php
          echo "Hello, Agent".$_SESSION['name']."!";
        ?>
      </b></h1>
    </div>
  </div>
    <form action="action_search.php" method="POST">
      <div class="form-group row">
        <div class="form-group col-md-6">
          <div class="col-md-6"><h1><u>Actions</u></h1></div>
          <br><br><br><br><br>
          <label for="search">Search:</label>
            <font color="black">
              <input type="text" name="search" placeholder="XXXXXX">
            </font>
        </div>
      </div>
      <br>
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary" style="color: black;">Submit</button>
        </div>
    </form>
    <br><br><br>
    <h2>OR</h2>
    <br>
    <form action="action_filters.php" method="POST">
      <div class="form-group row">
        <div class="form-group col-md-6">
          <label for="pass"><h3>Other filters:</h3></label><br>
            <input type="radio" name="crime_comm" value="crime_comm">Crime committed
            <input type="radio" name="area" value ="area">Area
            <input type="radio" name="year" value="year">Year
        </div>
      </div>
        <br><br>
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary" style="color: black;">Submit</button>
        </div>
    </form>
    <div class="col-md-4" style="text-align: center; color: green">
    <?php
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
  </div>
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
