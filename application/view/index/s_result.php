<?php
error_reporting(E_ALL ^ E_DEPRECATED);

if($_SESSION['user_name'])
	{
		//login_page
		}
else{
	header("location:error.php");
	}

?>
<!DOCTYPE html>
<div class="container">
        <div class="login-page-box">
        <div class="table-wrapper">
                <div class="login-box">


<html>
<head>

    
   
    
</head>
<body>

<body style='font-family:arial;font-size:13pt;'> 
<div id="php">

<strong>YOUR SEARCH RESULT:</strong>



<?php
	//database connection
include_once("includes/connection.php");
	
if(isset($_POST['source'], $_POST['destination'], $_POST['month'], $_POST['day'])){

	
	$source = htmlentities($_POST['source']);
	$dest = htmlentities($_POST['destination']);
	$day = htmlentities($_POST['day']);
	$month = htmlentities($_POST['month']);
	
	if(empty($source) || empty($dest) || empty($month) || empty($day)){
          Redirect::to('index/index'); 
	}
	else{
	
	$query = "SELECT* FROM train WHERE source = '$source' AND destination='$dest' AND day='$day' AND month='$month'";
	$result = mysql_query($query) or die(mysql_error());
	$num_rows =mysql_num_rows($result);
	echo "<i><font size='3pt' color='red'>$num_rows results found..</font></i>";
	
	
	
	$hel = substr(number_format(time()*mt_rand(),0,'',''),0,10); //unique 10 digit number....
	
	$url = Config::get('URL');
	echo "<form action='$url\index/testing' method='POST'>";
	
	echo "<table>";
    echo "<tr><th>select</th><th>Train no</th> <th>Train Name</th> <th>Departs</th> <th>Arrives</th> <th>Gen</th> <th>AC1</th> <th>AC2</th> <th>FC</th> <th>SLP</th></tr>";
	
	while($row = mysql_fetch_object($result)) 
	{ 
	echo "<tr><td>";
	echo "<input type='radio' name='train_no' value = '".$row->train_no."'>";
	echo "</td><td>";
	echo $row->train_no;
	echo "</td><td>";
	echo $row->train_name;
	echo "</td><td>";
	echo $row->departs;
	echo "</td><td>";
	echo $row->arrives;
	echo "</td><td>";
	echo $row->GEN;
	echo "</td><td>";
	echo $row->AC1;
	echo "</td><td>";
	echo $row->AC2;
	echo "</td><td>";
	echo $row->FC;
	echo "</td><td>";
	echo $row->SLP;
	echo "</td></tr>";
	}
	echo "<tr><td colspan='2'>";
	echo "select your class";
	echo "</td><td colspan='8' class='adj'>";
	echo "<select name='class'>";
	echo "<option>GEN</option>";
	echo "<option>AC1</option>";
	echo "<option>AC2</option>";
	echo "<option>FC</option>";
	echo "<option>SLP</option>";
	echo "</select>";
	echo "</td></tr>";
	echo "</table>";
	
	
	echo "<input type='hidden' name='no' value= '$hel' >";
	
	echo "<input type='submit' name='submit' value='go'>";
	
	echo "</form>";
 }//end of the main if..
}
?> 
	
</div>


</body> 
</html>
</div>
</div>
</div>
</div>