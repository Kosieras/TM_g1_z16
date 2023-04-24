<HTML> <HEAD> 
  <style>
    svg{
    
     width:1000px;
      height:1000px;
      
    }
  </style>
  
  
  </HEAD> <BODY>
  
 <?php
    	//Połączenie z BD
	$connection = mysqli_connect('localhost', 'kosierap_z16', 'Laboratorium123', 'kosierap_z16');
	if (!$connection){
		echo " MySQL Connection error." . PHP_EOL;
		echo "Errno: " . mysqli_connect_errno() . PHP_EOL; echo "Error: " . mysqli_connect_error() . PHP_EOL; exit;
	}
	$result = mysqli_query($connection, "Select * from animacje order by id desc") or die ("DB error: $dbname");
	while ($row = mysqli_fetch_array ($result)){
      if($row[1]>$row[3] && $row[3]!=0) $left = $row[3] . "px";
    	if($row[3]<0) $left = "0px";
          else $left = $row[1] . "px";
       if($row[2]>$row[4] && $row[4]!=0) $top = $row[4] ."px";
      if($row[4]<0) $top = "0px";
        else $top = $row[2] . "px";
     
      $xposition = 0;
      
      $yposition = 0;
      $begin = $row[5] . "s";
      $time = $row[7] ."s";
     
    //Warunek sprawdzający typ pliku/wiadomości
   print "
   
   <div id='$row[0]' style='position:absolute; left: $left; top:$top; visibility:visible;'> <svg xmlns='http://www.w3.org/2000/svg'>
<circle cx='$row[6]' cy='$row[6]' r='$row[6]' fill='$row[8]' >";
       if($row[3]!=0){
         $xposition = $row[1] + $row[3];
         print "<animate attributeName='cx' from='$row[1]' to='$xposition' begin='$begin' dur=$time repeatCount=indefinite keyTimes='0;1'/>";
       }
      if($row[4]!=0) {
        $yposition = $row[2] + $row[4];
         print "<animate attributeName='cy' from='$row[2]' to='$yposition' begin='$begin' dur=$time repeatCount=indefinite keyTimes='0;1'/>";
       }


print "</circle> </svg>
</div>
   
   
   
   ";    
}
   mysqli_close($connection); 

?>
  </BODY> </HTML>