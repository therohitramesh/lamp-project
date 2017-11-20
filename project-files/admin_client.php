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
    .input.transparent-input{
       background-color:transparent !important;
       border:none !important;
    }
    .sizer{
      font-size: 18px;
      font-weight: lighter;
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
    <h1>Admin Client</h1>
  </div>

  <div class="body">
    <h1>Add Record:</h1>
    <form action="new_record.php">
      <button type="submit" value="Add" style="color: black;">Add</button>
    </form>

    <br>
    <h1>Delete Record:</h1>
    <form action="action_delete.php">
      <button type="submit" value="Del" style="color: black;">Delete</button>

    </form>
    <form action="action_search.php" method="POST">
      <div class="form-group row">
        <div class="form-group col-md-6">

          <h1>
          <label for="search">Search:</label>
          </h1>
          <h3>(By ID or name)</h3>
            <font color="black">
              <input type="text" name="search" placeholder="XXXXXX">
            </font>
        </div>
      </div>
      <h2>OR</h2>
      <div class="form-group row">
        <div class="form-group col-md-12">
          <label for="pass"><h3>Area:</h3></label><br>

            <input type="radio" name="ichch" value ="ichch"><b class="sizer">Ichchanath</b>
            <input type="radio" name="athwa" value="athwa"><b class="sizer">Athwa</b>
            <input type="radio" name="vesu" value="vesu"><b class="sizer">Vesu</b>

        </div>
      </div>

      <div class="form-group row">
        <div class="form-group col-md-12">

          <label for="pass"><h3>Crime:</h3></label><br>
            <input type="radio" name="robb" value="robb"><b class="sizer">Robbery</b>
            <input type="radio" name="kid" value ="kid"><b class="sizer">Kidnapping</b>
            <input type="radio" name="smug" value="smug"><b class="sizer">Smuggling</b>
        </div>
      </div>

      <div class="form-group row">
        <div class="form-group col-md-12">
          <label for="pass"><h3>Year:</h3></label><br>
            <input type="radio" name="2017" value="2017"><b class="sizer">2017</b>
            <input type="radio" name="2015" value="2016"><b class="sizer">2016</b>
            <input type="radio" name="2016" value="2015"><b class="sizer">2015</b>
            <input type="radio" name="2014" value="2014"><b class="sizer">2014</b>
            <input type="radio" name="2013" value="2013"><b class="sizer">2013</b>
            <input type="radio" name="2012" value="2012"><b class="sizer">2012</b>
            <input type="radio" name="2011" value="2011"><b class="sizer">2011</b>
            <input type="radio" name="2010" value="2010"><b class="sizer">2010</b>
            <input type="radio" name="2009" value="2009"><b class="sizer">2009</b>
            <input type="radio" name="2008" value="2008"><b class="sizer">2008</b>
        </div>
      </div>

      <br>

          <button type="submit" class="btn btn-primary" style="color: black;">Submit</button>

    </form>

    <br>
    <br>
    <br>
    <br>



    <div class="col-md-4" style="text-align: center; color: green">
    <?php
    session_start();
    if(isset($_SESSION['message']))
    {
      echo $_SESSION['message'];
      unset($_SESSION['message']);
    }
    ?>
    </div>
  </div>
  </div>


  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
