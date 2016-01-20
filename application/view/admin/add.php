<?php
include_once("includes/connection.php");
error_reporting(E_ALL ^ E_DEPRECATED);
if($con){
$sql="INSERT INTO `train`(train_no, train_name, source, destination, distance, day, month, year,departs, arrives, GEN, AC1, AC2, FC, SLP)
		values ('$_POST[trainno]', '$_POST[trainname]', '$_POST[source]', '$_POST[destination]','$_POST[distance]','$_POST[day]','$_POST[month]','$_POST[year]','$_POST[depart]','$_POST[arrive]','$_POST[gen]','$_POST[ac1]','$_POST[ac2]','$_POST[fc]','$_POST[slp]')";

$res = mysql_query($sql);
if($res){
			echo "the train is successfully added";
		}
		else
		{
			echo "train can not be added at this moment";
		}
mysql_close();
}
?>