<?php
session_start();
?>
<?php
  ob_start();
  $_SESSION["searchcon"]=0;
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
	th
	{
		 text-align: center;
	}
	td
	{
		 text-align: center;
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
			   <li ><a href="index.html</li>
			   <li class="active"><a href="#">Database</a></li>
			   <li><a href="#Feedback">Search</a></li>
			   <li class="dropdown">
			       <a href="#" class="dropdown-toggle" data-toggle="dropdown" >More<span class="caret"></span></button></a>
			   	   <ul class="dropdown-menu">
			   	       <li><a href="#Gallery">Gallery</a></li>
			   	       <li><a href="#FAQs">FAQs</a></li>
			   	   </ul>
			   </li>
			</ul>
			
			
			<ul class="nav navbar-nav navbar-right">
    
               <li><a href="log.php"><span class="glyphicon glyphicon-log-out"> login</span></a></li>

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
  <h2><b>COMPOSITION OF THE MEDICINE</b></h2>
    <?php
 $search=$_POST['search'];
 $content = array();
 $conn = new mysqli("localhost", "root", "", "medicine");
 if(!$conn)
   { 
	die("can not connect:". mysql_error());
	}
 $result = $conn->query("SELECT medicine FROM names");
 $x=0;
 while($rs = $result->fetch_array(MYSQLI_ASSOC)) 
  {
	if($search==$rs['medicine'])
	{
		$x=1;
	}
  }
  if($x==0)
  {
	  $_SESSION["searchcon"]=1;
	  header( "Location: index.php" );
  }
  else
  {
	  
	      echo '<table class="table table-hover table-bordered ">
		  <thead>
          <tr>
          <th>-RESULT-</th>
          </tr></thead>';
	     $con1=mysqli_connect('localhost' , 'root' , '' , 'medicine');
	     $ser="SELECT*FROM $search";
         $mydata=mysqli_query($con1,$ser);
		 $x=0;
	     do
         {
	      $remain = mysqli_fetch_array($mydata);
          $data=$remain['content'];
	        echo'
			<tbody>
			<tr>
		    <td>'.$data.'</td>
            </tr>
			</tbody>';
	       
         }
        while($remain);
		echo'</table>';
        mysqli_close($con1);
        $_POST["search"]="";
      }
  
  
 $conn->close();
?>
   <div class="col-sm-3">
  </div>
 </div>
 </div>
</html>
