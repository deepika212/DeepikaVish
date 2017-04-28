<?php
session_start();
?>
<!doctype html>
<html>
<head lang="en">
<style>
  .center
  {
  position: center;
	}
</style>
<title>Health And Medicine</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 <!--load font awesome-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<link rel="stylesheet" href="med.css">
</head>
<body>
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
			   <li class="active"><a href="#Home">Home</a></li>
			   <li><a href="about.html">About</a></li>
			   <li><a href="#Feedback">Feedback</a></li>
			   <li class="dropdown">
			       <a href="#" class="dropdown-toggle" data-toggle="dropdown" >More<span class="caret"></span></button></a>
			   	   <ul class="dropdown-menu">
			   	       <li><a href="bmi.php">BMI-Calculator</a></li>
			   	       <li><a href="#FAQs">FAQs</a></li>
			   	   </ul>
			   </li>
			</ul>
			
			
			<ul class="nav navbar-nav navbar-right">
    
               <li><a href="log.php"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>

            </ul>
		</div>
	</div>
 </nav><br>
<div class="jumbotron" style="border: 1px solid black;">
     <div class="container text-center">
         <h1>HAPPY LIFE</h1>
         <p>“Physical fitness is not only one of the most important keys to a healthy body, it is the basis of dynamic and creative intellectual activity.”</p>
   
             <div class="form-group form-inline">
			 <form class="form-horizontal" action="search.php" method="post">
                <div class="input-group">
                   <input type="text" name="search" method="post" class="form-control" placeholder="Search" style="width: 400px;">
                   <div class="input-group-btn">
                   <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button> 
                   </div>   
                </div>    
				</form>
             </div>
			 <div>
			                  <?php
			                   if($_SESSION["searchcon"]==1)
							    {
                                echo'<p class="center">THE MEDICINE IS NOT IN THE DATABASE</p>';
							    }
								$_SESSION["searchcon"]=0;
                               ?>
			 </div>
        
    </div>
 </div> <!-- end of jumbotron -->
<hr>
 <div class="container">
    <section>
    	   <div class="carousel slide" id="screenshot-carousel" data-ride="carousel" >
    	       <ol class="carousel-indicators">
    	          <li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
    	          <li data-target="#screenshot-carousel" data-slide-to="1"></li>
    	          <li data-target="#screenshot-carousel" data-slide-to="2"></li>
    	          <li data-target="#screenshot-carousel" data-slide-to="3"></li>
    	       </ol>
    	       <div class="carousel-inner">
    	           <div class="item active">
    	               <img src="http://www.pixelstalk.net/wp-content/uploads/2016/10/Doctor-Backgrounds-Free-Download.jpg" style="width:1800px;height: 800px;">
    	               <div class="carousel-caption">
    	                 
    	                   <p style="color: black;font-size: 20px;">“Time And health are two precious assets that we don’t recognize and appreciate until they have been depleted.”</p>
    	               </div>
    	           </div>
    	           <div class="item">
    	               <img src="http://www.ocalapost.com/wp-content/uploads/2013/12/Health.jpeg" alt="text of the image" style="width:1800px;height: 800px;">
    	               <div class="carousel-caption">
    	           
    	                   <p style="font-size: 20px;">“Our bodies are our gardens – our wills are our gardeners.”</p>
    	               </div>
    	           </div>
    	           <div class="item">
    	               <img src="http://medicure.cmsmasters.net/wp-content/uploads/2014/02/image-2.jpg" alt="text of the image" style="width:1800px;height: 800px;">
    	               <div class="carousel-caption">
    	                 
    	                   <p style="color: black;font-size: 20px;"> “In order to change we must be sick and tired of being sick and tired.” </p>
    	               </div>
    	           </div>
    	           <div class="item">
    	               <img src="http://eskipaper.com/images/brain-3.jpg" alt="text of the image" style="width:1800px;height: 800px;">
    	               <div class="carousel-caption">
    	                 
    	                   <p style="font-size: 20px;">“The best and most efficient pharmacy is within your own system.”</p>
    	               </div>
    	           </div>
    	       </div>
    	       <a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
    	                <span class="glyphicon glyphicon-chevron-left"></span>
    	        </a>
    	        <a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
    	                <span class="glyphicon glyphicon-chevron-right"></span>
    	        </a>
    </section>
 </div>
 <hr>
 <div class="container">
    <section>
      <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-info">
                <div class="panel-heading"><h4 style="text-align: center;">FACTS</h4></div>
            	<div class="panel body">
            		
            		<ul style="list-style-type: circle;">
            		   <li>Aspirin and alcoholcan be absorbed directly into the bloodstream through the stomach lining.</li>
            		   <li>Enamel, found on our teeth, is the hardest substance in the human body.</li>
            		   <li>If you remove the minerals from a bone by soaking it overnight in a six percent solution of hydrochloric acid, it will become so soft, you could tie it in a knot.</li>
            		   <li>Like fingerprints, every person has a unique tongue print.</li>
            		   <li>Antibiotics can be useful in fighting off bacteria but they are ineffective against viruses, this is because bacteria and virus are completely different, both having unique characteristics that need specialized treatments.</li>
            		</ul>
            	</div>
            </div> 
        </div>
        <div class="col-lg-4">
            <div class="panel panel-success">
                <div class="panel-heading"><h4 style="text-align: center;">IMPORTANT DATES</h4></div>
            	<div class="panel body">
            		<ul style="list-style-type: circle;">
            			<li>February 4- <b>World Cancer Day</b></li>
            			<li>March 12- <b>World Kidney Day</b></li>
            			<li>March 24-<b> World Tuberclosis Day</b></li>
            			<li>April 7-<b> World Health Day</b></li>
            			<li>May 5- <b>World Asthama Day</b></li>
            			<li>May 19- <b>World Hepatitis Day</b></li>
            			<li>May 31-<b> Anti-tobacco Day</b></li>
            			<li>June-14-<b> World Blood Donor Day</b></li>
            			<li>July 1-<b> Doctors Day</b></li>
            			<li>September 1-7 - <b>National Nutrition Week</b></li>
            			<li>September 28 -<b> World Health Day</b></li>
            			<li>October 12-<b> World Arthritis Day</b></li>
            			<li>Oct 15-19- <b>World Obesity Awareness Week</b></li>
               			<li>November 10-<b> World Immunization Day</b></li>
            			<li>December 1-<b> World AIDS Day</b></li>
                    </ul>
            	</div>
            </div> 
        </div>
        <div class="col-lg-4">
            <div class="panel panel-danger">
                <div class="panel-heading"><h4 style="text-align: center;">RECENT UPDATES IN MEDICAL SCIENCE</h4></div>
            	<div class="panel body">
            		<ul style="list-style-type: circle;">
            		   <li><a href="https://www.sciencedaily.com/releases/2017/02/170210150255.htm" target="_blank">Micronutrients in Human mini brains</a></li>
            		   <li><a href="https://www.sciencedaily.com/releases/2017/02/170209133355.htm" target="_blank">New simple method quickly reveals kidney damage</a></li>
            		   <li><a href="https://www.sciencedaily.com/releases/2017/02/170207162110.htm" target="_blank">How life survives: Researchers confirm basic mechanism of DNA repair</a></li>
            		   <li><a href="https://www.sciencedaily.com/releases/2017/02/170210130951.htm" target="_blank">Prebiotics may help to cope with stress</a></li>
            		   <li><a href="https://www.sciencedaily.com/releases/2017/02/170209163841.htm" target="_blank">New method of genetic engineering indispensable tool in biotechnological applications</a></li>
            		   <li><a href="https://www.sciencedaily.com/releases/2017/02/170210150233.htm" target="_blank">Newfound effect of cancer drug may expand its use</a></li>
            		   <li><a href="https://www.sciencedaily.com/releases/2017/02/170210131016.htm" target="_blank">Alzheimer's may be linked to defective brain cells spreading disease</a></li>
            		   <li><a href="https://www.sciencedaily.com/releases/2017/02/170209142705.htm" target="_blank">Scientists identify aggressive pancreatic cancer cells and their vulnerability</a></li>
            		</ul>
                </div>
            </div> 
        </div>
    </div>
   </section>
 </div> 
 <hr>
 <div class="jumbotron">
    <section class="container text-center">
    	<h4>CONNECT WITH US</h4>
    	<ul class="list-inline">
 	      <li> <a href="#"><button class="btn azm-social azm-btn azm-border-bottom azm-facebook"><i class="fa fa-facebook"></i> Log in with Facebook</button></a></li>
 	      <li> <a href="#"><button class="btn"><i class="fa fa-twitter"></i> Log in with Twitter</button></a></li>
 	      <li> <a href="#"><button class="btn"><i class="fa fa-google-plus"></i> Log in with google</button></a></li>
 	    </ul>
 	    <p>&copy; Copyright @ 2017</p>
    </section>
 </div>
</body>
</html>