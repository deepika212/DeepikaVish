<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
   .navbar {
      margin-bottom: 0;
      background-color: #ADD8E6;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
	  font-color: #FFFFFF;
  }
   body  
	{
     background-image: url('img2.jpg');
     background-repeat: no-repeat;
     background-attachment: fixed;
	   background-size: 1366px 768px;
     }
    h1
    {
	 color:#FFFFFF;
    }
	h3
    {
	 color:#FFFFFF;
    }
	h4
    {
	 color:#FFFFFF;
    }
	h5
    {
	 color:#FFFFFF;
    }
</style>
</head>
<title>MyShortStories</title>
<head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
     </button>
      <a class="navbar-brand" href="#"><b>HappyLife.com</b></a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav">
        <li><a href="index.php">HOME</a></li>
        <li><a href="log.php">DATA-BASE</a></li>
        <li><a href="contact.php">SEARCH</a></li>
        <li><a href="about.php">ABOUT</a></li>
     </ul>
	</div>
  </div>
</nav>
</body>
<body background="img2.jpg">
<p align="left" style="font-family:Courier; color:white; font-size: 45px;">
 <b><h1>UPDATE DATA-BASE</h1></b>
</p>
<p align="left" style="font-family:Courier; color:white; font-size: 20px;">
 <b><h4> .</h4></b>
</p>
<div class="container">
  <form class="form-horizontal" action="update.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"><h5>MEDICINE-NAME:</h5></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Medicine-name" name="medicine" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"><h5>CONTENT:</h5></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Login-id" name="content" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">UPDATE</button>
      </div>
    </div>
  </form>
</div>
</body>
</head>
</html>