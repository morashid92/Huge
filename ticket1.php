<html>
<head>
	<style type="text/css">
		body{
			background:rgba(173,255,47,0.5);
		}
		td{
			padding:10px;
			text-align:left;
			background:#663;
			font-family:Georgia, "Times New Roman", Times, serif;
			color:#CCC;
		}
		th{
			background:rgba(244,250,250,0.5);
			padding:10px;
			text-align:center;
			font-family:Georgia, "Times New Roman", Times, serif;
			color:#000;
		}
		#design{
			background:rgba(154,50,205, 0.5);
			width:407px;
		}
    </style>
</head>
<body>
<div id="design" align="center">
<?php

$train_name=$_POST['train_name'];
$train_no=$_POST['train_no'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$class=$_POST['class'];


    include_once("includes/connection.php");
	// Create table
	$sql="SELECT * FROM train WHERE train_no='$train_no' AND day='$day' AND month='$month' AND year='$year'";
	$result=mysql_query($sql) or die(mysql_error());
	if($row=mysql_fetch_array($result)){
	echo "<table>";
    echo "<tr><th>Train_name</th> <th>Train_no</th> <th>Class</th> <th>Date</th></tr>";
	echo "<tr><td>";
	echo $row['train_name'];
	echo "</td><td>";
	echo $row['train_no'];
	echo "</td><td>";
	echo $row['class'];
	echo "</td><td>";
	echo $row['day'].'-'.$row['month'].'-'.$row['year'];
	echo "</td></tr>";
	echo "</table>";
		
	}else{
		die('no results found!!');
	}
	mysql_close($dbcon);
?>
</div>
</body>
</html>