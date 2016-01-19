<?php
session_start();
if($_SESSION['username'])
	{
		//login_page
		}
else{
	header("location:error.php");
	}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<?php
	

if(isset($_POST['name']))
{

	$p_name = htmlentities($_POST['name']);
	$age = htmlentities($_POST['age']);
	$gender = htmlentities($_POST['sex']);
	$berth = htmlentities($_POST['berth']);
	
	
	$test = $_POST['train_no']; //experimenting somethings

	
	
	if(empty($p_name) || empty($age) || empty($gender) || empty($berth)){
    header("location:alert.php");
	}
	else{
	
	
	//database connection
	include_once("includes/connection.php");
	
		$sql="INSERT INTO passenger(ID, p_name, gender, age, berth) 
		values ('', '$p_name', '$gender', '$age', '$berth')";
			
		if(!mysql_query($sql,$con)){
		die("error:" .mysql_error());
		}else{
			$test=$_POST['train_no'];
			header("location:booking.php");
		}
		mysql_close($dbcon);
		}	
	}
?>



</body>
</html>