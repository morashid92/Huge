<html>
<head>
<style type="text/css">
	#one{
		background:rgba(189,252,201,0.6);
		padding:5px;
		position:absolute;
		top:5px;
		left:30%;
		font-family:"Times New Roman", Times, serif;
		color:#009;
	}
	p{
		font-family:Georgia, "Times New Roman", Times, serif;
		font-size:18px;
		color:#F00;
		font-style:italic;
	}
</style>
</head>
<body>
<div id="one">
<h2>TICKET CANCELLATION</h2>
<p>
<?php
if(isset($_POST['pnr'],$_POST['trans'],$_POST['source'],$_POST['desti'])){
	$pnr=$_POST['pnr'];
	$tr=$_POST['trans'];
	$source=$_POST['source'];
	$des=$_POST['desti'];
	if(empty($pnr) || empty($tr) || empty($source) || empty($des)){
		echo "fields are empty";
	}else{
		include_once("includes/connection.php");
		$sql="INSERT INTO cancel(id,pnr,transaction_id,source,destination) VALUES('','$pnr','$tr','$source','$des')";
		$res=mysql_query($sql);
		if($res){
			
			echo "YOUR REQUEST HAS BEEN SUBMITTED....";
		}else{
			die(mysql_error());
		}
	}
}
?>
</p>
<form action="cancel.php" method="post">
<table>
<tr><td>PNR Number</td><td><input type="text" name="pnr" size="10"></td><td>transaction ID</td><td><input type="text" name="trans" size="16"></td></tr>
<tr><td>Source station</td><td><input type="text" name="source" size="10"></td><td>Destination station</td><td><input type="text" name="desti" size="16"></td></tr>
<tr><td colspan="2"><input type="submit" value="cancel"></td><td colspan="2"><a href="login.php"><input type="button" value="back"></a></td></tr>
</table>
</form>
</div>
</body>
</head>
</html>