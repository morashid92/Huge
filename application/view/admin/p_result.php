<?php

if($_SESSION['username'])
	{
		//login_page
		}
else{
	header("location:error.php");
	}

?>




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html> 
<head> 
   <title>results</title>
   
   <style type = "text/css">
		body{
				background:url(images/res1.jpg);
				
				background-repeat:no-repeat;
				
				
		}
		
		table{
			border-radius:10px;
			padding-top:10px;
			padding-bottom:10px;
			background:rgba(255,250,205,0.3);
		}
		th{
			background:white;
			text-align:center;
			padding-left:10px;
			padding-right:10px;
			
		}
		td{
			text-align:center;
			background:blue;
			padding-left:10px;
			padding-right:10px;
		}
</style>
</head> 
<body>
<body style='font-family:arial;font-size:13pt;'> 
<div id="php">
<strong>YOUR SEARCH RESULT:</strong>



<?php
	

if(isset($_POST['source'],$_POST['month'], $_POST['day']))
{

	
	$source = htmlentities($_POST['source']);
	$month = htmlentities($_POST['month']);
	$day = htmlentities($_POST['day']);
	
	if(empty($source) || empty($month) || empty($day)){
    Redirect::to('admin/search_p'); 
	}
	else{
	
	
	//database connection
	include_once("includes/connection.php");
	
	$result =mysql_query( "SELECT * FROM pass_list WHERE train_name = '$source' AND month = '$month' AND day = '$day' ");
	
   echo "<table border='1'>";
   echo "<tr> <th>&nbsp;Train name&nbsp;</th> <th>&nbsp;&nbsp;PNR&nbsp;&nbsp;</th> <th>&nbsp;First name &nbsp;</th> <th>&nbsp; Last name &nbsp;</th> <th>&nbsp;&nbsp; Age &nbsp;&nbsp; </th> <th> &nbsp;&nbsp;Gender &nbsp;&nbsp; </th> <th> &nbsp;&nbsp;Address &nbsp;&nbsp;</th> <th> BoardingStation</th> <th>DestinationStation</th> <th>&nbsp;&nbsp;Status&nbsp;&nbsp;</th></tr>";
  
	
	while($row = mysql_fetch_array($result)) 


	{ 
	
	         echo "<tr><td>";
	         echo $row ['train_name'] ;
			 echo "</td><td>"; 
	         echo  " " . $row['PNR'] ;
			 echo "</td><td>"; 
	         echo " " . $row['firstname'] ;
			 echo "</td><td>"; 
	         echo" " . $row['lastname'] ;
			 echo "</td><td>"; 
			 echo" " . $row['age'] ;
			 echo "</td><td>"; 
			 echo" " . $row['gender'] ;
			 echo "</td><td>"; 
			 echo" " . $row['address'] ;
			 echo "</td><td>"; 
			 echo" " . $row['boardingStation'] ;
			 echo "</td><td>"; 
			 echo" " . $row['destinationStation'] ;
			 echo "</td><td>"; 
			 echo" " . $row['status'] ;
			 echo "</td></tr>";
			  }
	
 echo"</table>";

 }//end of the main if..
}
?> 
</div>

</body>
</html>



