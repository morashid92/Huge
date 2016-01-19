<?php
include_once('includes/connection.php');

if($_SESSION['user_name'])
	{
		//login_page
		}
else{
	header("location:error.php");
	}

?>
<html>
<head>
<title>results</title>
<style type="text/css">
	body{
		font-family:"Times New Roman", Times, serif;
		background:rgba(255,255,255,0.9);
		}
	#passenger{
		position:absolute;
		top:10px;
		left:18%;
		background:rgba(240,240,240,0.9);
		font-family:Georgia, "Times New Roman", Times, serif;
		width:700px;
		font-size:16px;
		color:#00F;
		border-radius:20px;
		padding:10px;
	}
	table{
		margin-top:20px;
	}
	th{
		font-family:Arial, Helvetica, sans-serif;
		background:rgba(245,245,245,1);
		padding:5px;
		color:#000;
		size:18pt;
	}
	td{
		color:#00F;
		text-align:center;
		border:0px solid #CF0;
		padding-left:20px;
		padding-right:20px;
		padding-bottom:10px;
		padding-top:10px;
		background:rgba(245,245,245,1);
	}
	#head{
		background:#06F;
		border-radius:5px;
		padding:5px;
		color:white;
		font-weight:bolder;
	}
	p.pnr{
		color:#F00;
		font-family:"Times New Roman", Times, serif;
	}
	td.tab{
		font-family:"Times New Roman", Times, serif;
		color:#000;
	}
</style>
</head>
<body>
<div id="passenger">
<div id="head">
	Ticket Reservation
</div>
	<?php
		include_once("includes/connection.php");
		$query = "SELECT * FROM ticket";
		$result = mysql_query($query) or die(mysql_error());
		$row = mysql_fetch_array($result);
		echo"<p class='pnr'>";
		echo "YOUR PNR NO :&nbsp;&nbsp;&nbsp;$row[pnr]";
		echo "</p>";
		echo "<table align='center' cellspacing='5px'>";
		echo "<tr><td class='tab'>TRAIN NO </td><td>$row[train_no]</td>";
		echo "<td class='tab'>TRAIN NAME </td><td>$row[train_name]</td></tr>";
		echo "<tr><td class='tab'>SOURCE </td><td>$row[source]</td>";
		echo "<td class='tab'>DESTINATION </td><td>$row[destination]</td></tr>";
		echo "<tr><td class='tab'>DATE </td><td>$row[day]/$row[month]/$row[year]</td>";
		echo "<td class='tab'>CLASS </td><td>$row[class]</td></tr>";
		echo "</table>";
?>
		
		
		
		
		
<?php
		
		
			include_once("includes/connection.php");
			
				$sql = "SELECT * FROM passenger ORDER BY ID DESC LIMIT 1";
				$result=mysql_query($sql) or die(mysql_error());
				$row =mysql_fetch_array($result);
				echo "<table align='center'>";
				echo "<tr><th>SNo</th><th>Name</th><th>Age</th><th>Sex</th><th>Berth preference</th></tr>";
				echo "<tr><td>";
				echo "1";
				echo "</td><td>";
				echo "$row[p_name]";
				echo "</td><td>";
				echo "$row[age]";
				echo "</td><td>";
				echo "$row[gender]";
				echo "</td><td>";
				echo "$row[berth]";
				echo "</td></tr>";
				
				echo "</table>";
				error_reporting(E_ALL ^ E_DEPRECATED);
				$dbcon =mysql_connect('localhost', 'root');
				mysql_close($dbcon);
	?>
    Make your payment
    </div>
</body>
</html>