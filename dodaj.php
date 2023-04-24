<?php
$x0 = $_POST['x0']; 
$y0 = $_POST['y0']; 
$x_delta = $_POST['x_delta']; 
$y_delta = $_POST['y_delta']; 
$begin = $_POST['begin']; 
$diameter = $_POST['diameter']; 
$time = $_POST['time']; 
$color = $_POST['color']; 

if (IsSet($_POST['x0']) && IsSet($_POST['y0'])&& IsSet($_POST['time'])  && IsSet($_POST['color']))
{
	$dbhost="localhost"; 
  $dbuser="kosierap_z16"; 
  $dbpassword="Laboratorium123"; 
  $dbname="kosierap_z16"; 
  $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if (!$connection)
{
echo " MySQL Connection error." . PHP_EOL;
echo "Errno: " . mysqli_connect_errno() . PHP_EOL; echo "Error: " . mysqli_connect_error() . PHP_EOL; exit;
}
$result = mysqli_query($connection, "INSERT INTO animacje (x0,y0,x_delta,y_delta,begin,diameter,time,color) VALUES ('$x0','$y0','$x_delta','$y_delta','$begin','$diameter','$time','$color');") or die ("DB error: $dbname"); mysqli_close($connection);
}

 header("Refresh: 1; URL=index.php");
?>