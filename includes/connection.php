<?php

include_once("constants.php");
$con = mysql_connect('localhost','root') or die(mysql_error());
$db = mysql_select_db('rrs', $con) or die(mysql_error());
?>