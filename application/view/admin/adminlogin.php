<?php

include_once("includes/connection.php");


if (isset($_SESSION['90.213.149.103'])) {
    // Check failed: we'll start a brand new session
    session_regenerate_id(FALSE);
    session_unset();
}

if(isset($_POST['submit'])) {
$username = $_POST['username'];
$password = $_POST['password'];


if ($username&&$password)
{
	
	$query = mysql_query("SELECT * FROM admin WHERE name='$username'");

	if($query === false) {
    var_dump(mysql_error());
}
else {
    print_r(mysql_num_rows($query));
}
	
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

			Redirect::to('admin/admin_page'); 
			
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
}
 ?>