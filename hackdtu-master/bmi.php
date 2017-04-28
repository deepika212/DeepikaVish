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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
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
			   	       <li><a href="bmi.php">BMI-Calculator</a></li>
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
  <div><h2><b>KNOW YOUR BMI</b></h2></div>
  <form name="bmiForm" action="bmidata.php" method="post">
  Your Login: <input type="text" name="loginid" size="10"><br />
  Your Weight(kg): <input type="text" name="weight" size="10"><br />
  Your Height(cm): <input type="text" name="height" size="10"><br />
  <button type="submit" class="btn btn-default"><b>Submit</b></button><br />
  </form>
   <div class="col-sm-3">
  </div>
 </div>
 </div>
</html>
<html>
<script language="JavaScript">
<!--
function calculateBmi() {
var login = document.bmiForm.weight.value
var weight = document.bmiForm.weight.value
var height = document.bmiForm.height.value
if(weight > 0 && height > 0){	
var finalBmi = weight/(height/100*height/100)
document.bmiForm.bmi.value = finalBmi
if(finalBmi < 18.5){
document.bmiForm.meaning.value = "That you are too thin."
}
if(finalBmi > 18.5 && finalBmi < 25){
document.bmiForm.meaning.value = "That you are healthy."
}
if(finalBmi > 25){
document.bmiForm.meaning.value = "That you have overweight."
}
}
else{
alert("Please Fill in everything correctly")
}
}
//-->
</script>
</html>