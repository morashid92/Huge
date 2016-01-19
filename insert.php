<?php
//connecting to the database
include_once("includes/connection.php");

// Create database
if (mysql_query("CREATE DATABASE IF NOT EXISTS rrs",$con))
  {
	
// Create table
$sql = "CREATE TABLE IF NOT EXISTS register(
userID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(userID),
username varchar(20),
password varchar(20),
Rpassword varchar(20),
Squestion varchar(150),
answer varchar(50),
firstname varchar(30),
lastname varchar(30),
gender varchar(10),
maritial varchar(20),
year int(4),
month varchar(20),
day int(2),
occupation varchar(20),
email varchar(30),
mobile int(10),
nationality varchar(15),
address varchar(50),
address2 varchar(50),
address3 varchar(50),
city varchar(10),
state varchar(10),
zip int(6),
country varchar(10)
)";
$tab = mysql_query($sql, $con);
if($tab){
$sql1="INSERT INTO register(userID, username, password, Rpassword, Squestion, answer, firstname, lastname, gender, maritial, year, month, day, occupation, email, mobile,
nationality, address, address2, address3, city, state, zip, country)
		values ('', '$_POST[username]', '$_POST[password]', '$_POST[rpassword]', '$_POST[question]','$_POST[answer]','$_POST[fname]','$_POST[lname]',
		'$_POST[gender]','$_POST[maritialstatus]','$_POST[year]' ,'$_POST[month]' ,'$_POST[day]' ,'$_POST[occupation]', '$_POST[email]', '$_POST[mobile]', '$_POST[nationality]', '$_POST[address]', '$_POST[address2]', '$_POST[address3]', '$_POST[city]', 
		'$_POST[state]', '$_POST[zip]', '$_POST[country]')";

		if(!mysql_query($sql1,$con)){
			die("error:" .mysql_error());
		}else{
			header('Location:thank.php');
		}
		mysql_close($con);
		}
else{
		echo "table doestnot exit";
	}
}
  else{
	  echo"database doesn't exit";
  }
?>