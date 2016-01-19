<?php

include_once("includes/connection.php");
error_reporting(E_ALL ^ E_DEPRECATED);

$sql="DELETE FROM train WHERE train_name = '$_POST[trainname]'";
mysql_query($sql,$con);
if(!mysql_query($sql,$con)){
	die("error:" .mysql_error());
}
Redirect::to('admin/thankadmin');

mysql_close($con);
?>