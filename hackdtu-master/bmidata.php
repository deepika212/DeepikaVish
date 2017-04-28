<?php
session_start();
$_POST['loginid']="shivansh";
$_POST['weight']=55;
$_POST['height']=177;
?>
<?php
 $loginid=$_POST['loginid'];
 $weight=$_POST['weight'];
 $height=$_POST['height'];
 $finalBmi=0;
 if(($weight > 0) && ($height > 0))
 {	
 $finalBmi = $weight/($height/100*$height/100);
  echo "Your final bmi is:".$finalBmi." ";
	if($finalBmi < 18.5){
	echo "That you are too thin.";
	}
	if(($finalBmi > 18.5) && ($finalBmi < 25)){
	echo "That you are healthy.";
	}
	if($finalBmi > 25){
	echo "That you have overweight.";
	}
   }
 $time=date("d/m/Y");
 $con=mysqli_connect('localhost' , 'root' , '' , 'bmi');

  $conn = new mysqli("localhost", "root", "", "bmi");
  if(!$conn)
   { 
	die("can not connect:". mysql_error());
	}
   $result = $conn->query("SELECT loginid FROM names");
  $x=0;
  while($rs = $result->fetch_array(MYSQLI_ASSOC)) 
    {
	if($loginid==$rs['loginid'])
	{
		$x=1;
	}
   }
  if($x==0)
  {
	 $conn->query("INSERT INTO names (loginid) VALUE('".$loginid."')"); 
  }
 $conn->close();
 $con=mysqli_connect('localhost' , 'root' , '' , 'bmi');
 if(!$con)
   { 
	die("can not connect:". mysql_error());
	}
$create= "CREATE TABLE $loginid (bmi INT(50))";
  $add="INSERT INTO $loginid (bmi,date) VALUE('".$finalBmi."''".$time."')";
  mysqli_query($con,$create);
  mysqli_query($con,$add);
  mysqli_close($con);
?>