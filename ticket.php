<?php

if(isset($_POST['year'], $_POST['month'], $_POST['day'], $_POST['train_name'], $_POST['tarin_no'], $_POST['class']))
{

	
	$year = htmlentities($_POST['year']);
	$month = htmlentities($_POST['month']);
	$day = htmlentities($_POST['day']);
	$train_name = htmlentities($_POST['train_name']);
	$train_no = htmlentities($_POST['train_no']);
	$class = htmlentities($_POST['class']);
	
	if(empty($year) || empty($month) || empty($day) || empty($train_name) || empty($train_no) || empty($class)){
    header("location:error.php");
	}
	else{
	
	
	//database connection
	include_once("includes/connection.php");
	
	
	$query = "SELECT * FROM train WHERE year = '$year' AND month='$month' AND day='$day' AND train_name='$train_name' AND train_no='$train_no' AND class ='$class'";
	
	$result = mysql_query($query) or die(mysql_error());

	while($row = mysql_fetch_row($result)){ 
	
	
		echo $row['year'];
		echo $row['month'];
		echo $row['day'];
		echo $row['train_name'];
		echo $row['train_no'];
		echo $row['class'];
	}
 }//end of the main if..
}
?> 