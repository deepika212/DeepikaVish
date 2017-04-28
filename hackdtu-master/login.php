<?php
session_start();
?>
<?php
 $login_id=$_POST['loginid'];
 $password=$_POST['password'];
 $con=mysqli_connect('localhost' , 'root' , '' , 'medicine');
 if(!$con)
   { 
	die("can not connect:". mysql_error());
	}
 $ser="SELECT*FROM userid_password";
 $mydata=mysqli_query($con,$ser);
 do
  {
	$remain = mysqli_fetch_array($mydata);
    $data1=$remain['loginid'];
	$data2=$remain['password'];
    if(($login_id==$data1)&&($password==$data2))
	{
	  $_SESSION["key"]=1;
	  $_SESSION["name"]=$data3;
	  $_SESSION["loginid"]=$data1;
	  header( "Location: upaccount.php" );
	}		
  }
  while($remain);
  if($_SESSION["key"]==0)
  {
	 $_SESSION["key"]=9; 
	 header( "Location: log.php" ); 
  }	  
  mysqli_close($con);
?>