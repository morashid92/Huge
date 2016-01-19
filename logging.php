<?php


session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username&&$password)
{

	include_once("includes/connection.php");
	
	$query = mysql_query("SELECT * FROM register WHERE username='$username'");
	
	$numrows = mysql_num_rows($query);
	
	if ($numrows!=0)
	{
			
			while($row = mysql_fetch_assoc($query))
			{
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
			}
			
		//matching
		if($username == $dbusername&&$password == $dbpassword)
		{
			header("location:login.php");
			
			$_SESSION['username'] = $username;
		}
		else
			echo"
			<b><i>
			Your password is incorrect!!
			</i></b>
			";
			
	}else
		die("<b>That user does not exist!!!</b>") ;
	
	
	}
else
     die("<b>please enter your username and password!</b>");
?>