<?php
error_reporting(E_ALL ^ E_DEPRECATED);
if($_SESSION['user_name'])
	{
		//echo $_SESSION['username'];
		}
else{
	header("location:error.php");
	}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>

</head>
<body>
<div align="center"  id="details">
<?php

	if(isset($_POST['class'], $_POST['train_no'], $_POST['no'])){
	
	$class=$_POST['class'];
	$hel=$_POST['no'];
	

	include_once("includes/connection.php");

	$query = "SELECT * FROM train WHERE train_no = '".mysql_real_escape_string($_POST['train_no'])."'";
	$result = mysql_query($query) or die("Error processing query. ".mysql_error());
	$row = mysql_fetch_object($result);
	
	
	echo "<table align='center' cellspacing='5px'>";
		
		echo "<tr><th colspan='4'>TICKET RESERVATION</th></tr>";
		echo "<tr><td colspan='4'><hr></td></tr>";
		echo "<tr><td>TRAIN NO </td><td class='text'>$row->train_no</td>";
		echo "<td>TRAIN NAME </td><td class='text'>$row->train_name</td></tr>";
		echo "<tr><td>SOURCE </td><td class='text'>$row->source</td>";
		echo "<td>DESTINATION </td><td class='text'>$row->destination</td></tr>";
		echo "<tr><td>DATE </td><td class='text'>$row->day/$row->month/$row->year</td>";
		echo "<td>CLASS </td><td class='text'>$class</td></tr>";
	echo "</table>";
	}
	else{
		die("erroe".mysql_error());
	}
	
	$sql = "INSERT INTO ticket(train_no, train_name, source, destination, day, month, year, class, pnr) VALUES('$row->train_no', '$row->train_name', '$row->source',
	'$row->destination', '$row->day', '$row->month', '$row->year', '$class', '$hel')";
	$rs = mysql_query($sql) or die("error".mysql_error());
?>
<div id="passenger">
	<fieldset><legend>Passengers Details</legend>
	<form action="<?php echo Config::get('URL'); ?>index/passenger" method="post">
    <input type="hidden" name="train_no" value="<?php $row->train_no ?>">
  admin
    	<table cellspacing="5px" cellpadding="5px">
        	<tr>
            	<th>SNo</th><th>Name</th><th>Age</th><th>Sex</th><th>Berth Preference</th>
    		</tr>
            <tr>
            	<td>1</td><td><input type="text" name="name"></td><td><input type="text" name="age"></td>
                <td><select name="sex"><option selected="selected" value="0">you are</option><option>male</option><option>female</option></select></td>
                <td><select name="berth">
                <option selected="selected" value='0'>choose Berth</option>
                <option>Upper</option>
                <option>Lower</option>
                <option>Middle</option>
                <option>Side Upper</option>
                <option>Side Lower</option>
                </select></td>
            </tr>
            
      
            
            <tr>
            	<td colspan="5" class="red">*Please note that Berth preference does not guarantee allotment of prefered Berth type.</td>
            </tr>
            <tr>
            	<td colspan="5" class="button">
                	<input type="submit" name="submit" value="Go">
                    <input type="reset" name="reset" value="reset">
                    <a href="<?php echo Config::get('URL'); ?>index/index"><input type="button" value="Replan"></a>
                </td>
            </tr>
        </table>
    </form>
    </fieldset>
</div>
</div>
</body>
</html>