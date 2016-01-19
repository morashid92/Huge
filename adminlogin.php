<?php
include_once("includes/connection.php");
require_once ("<?php echo Config::get('URL'); ?>admin/index>");
session_start();
if(isset($_POST['send'])) {
$username = $_POST['username'];
$password = $_POST['password'];
}
if ($username&&$password)
{
	
	$query = mysql_query("SELECT * FROM `admin` WHERE name='$username'");
	
	$numrows = mysql_num_rows($query);
	
	if ($numrows!=0)
	{
			
			while($row = mysql_fetch_assoc($query))
			{
				$dbusername = $row['name'];
				$dbpassword = $row['password'];
			}
			
		//matching
		if($username == $dbusername&&$password == $dbpassword)
		{
			header("location:admin_page.php");
			
			$_SESSION['username'] = $username;
		}
		else
			echo"
			<b><i>
			Your password is incorrect!!
			</i></b>
			";
			
	}else
		die("<b>that user does not exist</b>") ;
	
	
	}
else
     die("<b>please enter your username and password!</b>");
?>