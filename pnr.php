<html>
<head>
<style type="text/css">
#pnr{
	font-family:"Times New Roman", Times, serif;
	background:rgba(100,149,237,0.7);
	padding:10px;
	width:400px;
	color:#FFF;
	font-size:18pt;
	font-weight:bold;
}
#main{
	position:absolute;
	left:400px;
}
h2{
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:18pt;
	color:#00F;
}
p.one{
	font-family:"Comic Sans MS", cursive;
	color:#F00;
	font-size:18px;
}
a{
	font-family:"Times New Roman", Times, serif;
	text-decoration:none;
	
}
</style>
</head>
<body>
<div id="main">
<h2>Passenger current status:</h2>
<p class="one">
<?php
session_start();
if($_SESSION['username'])
	{
		//echo $_SESSION['username'];
		}
else{
	header("location:error.php");
	}


if(isset($_POST['enq'])){

	$pnr=$_POST['enq'];
	
	if(empty($enq)){
		
	include_once("includes/connection.php");

	$query = "SELECT status FROM ticket WHERE pnr = '$pnr' ";
	$result = mysql_query($query) or die("Error processing query. ".mysql_error());
	$rs = mysql_fetch_object($result) or die(mysql_error()); 
	echo $rs->status;
	
	}
	}

?>
</p>
<div id="pnr">
	<form action="" method="POST">
    <p>ENTER YOUR PNR NO <input type ="text" name="enq" size="15" /></p>
    <p><input type="submit" name="submit" value="check" /> <a href='login.php'> <input type="button" value="go back"></a></p>
    </form>
    
</div>
</div>
</body>
</html>