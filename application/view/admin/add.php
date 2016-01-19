<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include_once("includes/connection.php");





$checkbox1 = $_POST['chk1'];
if($_POST['Submit']=="Submit")
{
	for ($i=0; $i<sizeof($checkbox1);$i++) {
		$query="INSERT INTO `train` (train_no, train_name, source, destination, distance, day, month, year, departs, arrives) VALUES ('$_POST[trainno]', '$_POST[trainname]', '$_POST[source]', '$_POST[destination]','$_POST[distance]','$_POST[day]','$_POST[month]','$_POST[year]','$_POST[depart]','$_POST[arrive]')";
		mysql_query($query) or die(mysql_error());
	}
	echo "Record is inserted";
}
error_reporting(E_ALL ^ E_DEPRECATED);

mysql_close();

?>