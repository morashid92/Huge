<?php
ob_start();
session_start();

mysql_connect('localhost', 'root', 'root');
mysql_select_db('minor_pro');

include 'user.func.php';
?>