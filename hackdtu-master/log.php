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
   body  
	{
     background-image: url('img1.jpg');
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
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
		   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
		        <span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
		   </button>
		</div>
		<div class="collapse navbar-collapse" id="mainNavBar">
		    <ul class="nav navbar-nav">
			   <li ><a href="index.php">Home</a></li>
			   <li><a href="new.html">About</a></li>
			   <li><a href="#Feedback">Feedback</a></li>

			   <li class="dropdown">
			       <a href="#" class="dropdown-toggle" data-toggle="dropdown" >More<span class="caret"></span></button></a>
			   	   <ul class="dropdown-menu">
			   	       <li><a href="#Gallery">Gallery</a></li>
			   	       <li><a href="#FAQs">FAQs</a></li>
			   	   </ul>
			   </li>
			</ul>
			
			
			<ul class="nav navbar-nav navbar-right">
    
               <li class="active"><a href="#"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>

            </ul>
		</div>
	</div>
 </nav>
</body>
<body background="img2.jpg">
<?php
  function customError($errno, $errstr)
   {
   }
   set_error_handler("customError");
   {
    echo'';
   }
 if($_SESSION["key"]==9)
 {
  echo '<tr><b><h3>**WRONG ENTRIES**</h3><b></tr>';  
 }
 if($_SESSION["key"]==10)
 {
  echo '<tr><b><h3>**SESSION EXPIRED LOGIN AGAIN**<h3><b></tr>';  
 }
 if($_SESSION["key"]==11)
 {
  echo '<tr><b><h3>**SUCCESSFULLY LOGGED OUT**</h3><b></tr>';  
 }
?>
<?php
$_SESSION["key"]=0;
?>
 <p align="left" style="font-family:Courier; color:white; font-size: 45px;">
 <b><h1>LOGIN</h1></b>
 </p>
 <div class="container">
  <form class="form-horizontal" action="login.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"><h5>LOGIN-ID:</h5></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="name" placeholder="Login-id" name="loginid" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><h5>PASSWORD:</h5></label>
      <div class="col-sm-6">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>