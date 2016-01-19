<?php
include_once("constants.php");
$con = mysql_connect('localhost','root') or die(mysql_error());
$db = mysql_select_db('huge', $con) or die(mysql_error());
?>