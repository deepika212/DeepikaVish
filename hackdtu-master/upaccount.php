<?php
session_start();
?>
<?php
 ob_start();
 if(($_SESSION["key"]!=1)&&($_SESSION["key"]!=2)&&($_SESSION["key"]!=12)&&($_SESSION["key"]!=13)&&($_SESSION["key"]!=14)&&($_SESSION["key"]!=15)&&($_SESSION["key"]!=16)&&($_SESSION["key"]!=17))
  {
	$_SESSION["key"]=10;
	header( "Location: log.php" ); 
  } 
?> 
<!DOCTYPE html>
<html>
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
	 background-size: 1366px 768px;
     background-attachment: fixed;
     }
    p
	{
		text-align: center;
	}
    h2
    {
	 color:#FFFFFF;
    }
	h2
    {
	 color:#777;
	 text-align: center;
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
	 color:#777;
    }
	
</style>
</head>
<head>
<title>HappyLife</title>
</head>
<body background="img2.jpg">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Logo -->
        <div class="navbar-header">
		   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
		        <span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
		   </button>
		</div>
		<!-- Main Menu -->
		<div class="collapse navbar-collapse" id="mainNavBar">
		    <ul class="nav navbar-nav">
			   <li ><a href="index.php">Home</a></li>
			   <li class="active"><a href="#">Database</a></li>
			   <li><a href="#Feedback">Search</a></li>
			   <li class="dropdown">
			       <a href="#" class="dropdown-toggle" data-toggle="dropdown" >More<span class="caret"></span></button></a>
			   	   <ul class="dropdown-menu">
			   	       <li><a href="#Gallery">BMI-Calculator</a></li>
			   	       <li><a href="#FAQs">FAQs</a></li>
			   	   </ul>
			   </li>
			</ul>
			
			
			<ul class="nav navbar-nav navbar-right">
    
               <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> logout</span></a></li>

            </ul>
		</div>
	</div>
 </nav>
</body>
 <div class="container-fluid" style="max-width:1320px;margin-top:70px;">
 <div class="row">
  <div class="col-sm-2" >
  
  </div>
  <div class="col-sm-7" id="demo">
 
  </div>
  <div class="jumbotron">
  <h2><b>UPDATE DATABASE</b></h2>
    <form class="form-horizontal" action="update.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"><h5>MEDICINE-NAME: </h5></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Medicine-name" name="medicine" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"><h5>CONTENT: </h5></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="content" name="content" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">UPDATE</button>
      </div>
    </div>
  </form>
   <div class="col-sm-3">
  </div>
 </div>
 </div>
</html>