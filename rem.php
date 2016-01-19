<?php
//connecting to the database
include_once("includes/connection.php");

$sql="DELETE FROM train WHERE train_name = '$_POST[trainname]'";
mysql_query($sql,$con);
if(!mysql_query($sql,$con)){
	die("error:" .mysql_error());
}
header('Location:thankadmin.php');

mysql_close($con);
?>