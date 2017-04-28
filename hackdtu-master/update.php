<?php
session_start();
?>
<?php
 $_SESSION["medicine"]=$_POST['medicine'];
 $medicine=$_POST['medicine'];
 $content=$_POST['content'];
 $con=mysqli_connect('localhost' , 'root' , '' , 'medicine');
 if(!$con)
   { 
	die("can not connect:". mysql_error());
	}
  while($remain);
  $conn = new mysqli("localhost", "root", "", "medicine");
  if(!$conn)
   { 
	die("can not connect:". mysql_error());
	}
   $result = $conn->query("SELECT medicine FROM names");
  $x=0;
  while($rs = $result->fetch_array(MYSQLI_ASSOC)) 
    {
	if($medicine==$rs['medicine'])
	{
		$x=1;
	}
   }
  if($x==0)
  {
	 $conn->query("INSERT INTO names (medicine) VALUE('".$medicine."')"); 
  }
  $conn->close();
  $create= "CREATE TABLE $medicine (content VARCHAR(50))";
  $add="INSERT INTO $medicine (content) VALUE('".$content."')";
  mysqli_query($con,$create);
  mysqli_query($con,$add);
  mysqli_close($con);
   header( "Location: upaccount.php" );
?>