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


<!DOCTYPE html>

<html>
<head>
<style type="text/css">
	body {
			background-color: grey;
			background-image:url('images/bg1.gif');
			
		}
		
	table {
				border:0px red solid;
				background-color:white;
				padding-top:0px;
				margin-top:0px;
				cellspacing:0px; 
				cellpadding:0px;
	}
	td {
		border: 0px green dotted;
		background-color:#F8F8FF;
	}
	
	
	a {
		font-family:Arial, Helvetica, sans-serif;
		color:#999933;
		text-decoration:none;
		
		
	}
	a:hover {
	
		
		text-decoration:underline;
		color:#00CC66;
		background-color:yellow;
	}
	p.user1 {
		font-family:Georgia, "Times New Roman", Times, serif;
		color:#00F;
		font-size:12pt;
		font-style:oblique;
		padding-left:30px;
		text-decoration:none
	}
	td.user {
			
			height:50px;
			font-size:18pt;
			padding-left:30px;
	}
	td.footer {
		background-color:#2952A3;
		background-image:url('images/tdback1.gif');
		font-weight:bold;
		color:#999933;
		text-align:center;
		font-size:8pt;
		padding-bottom:5px;
		padding-top:5px;
	}
	
	p.link {
		font-size:12pt;
		text-decoration:underline;
		padding-left:10px;
		}
	ul {
		font-size:10pt;
		text-decoration:none;
		color:#999933;
		list-style-image: url('images/link.png');
	}
	#links {
			border-left:1px #999933 solid;
			padding-left:5px;
			position:absolute;
			top:290px;
			left:970px
			
	}
</style>
</head>
<body>
<table align='center' class='main_tab' cellspacing= "0" cellpadding= "0">
	<tr>
		<td colspan="2"><img src="images/rail.jpg" /></td>
	</tr>
</table>
<table align="center" width="960px"  class='main_tab' cellspacing= "0" cellpadding= "0">
	<tr>
		<td ><p class="user1">WELCOME: <?php echo $_SESSION['username']; ?></p></td>
	</tr>
  	<tr>
 
    </tr>
	<tr>
		<td class="user" width="800px"><a href="search_t.php">Search For Trains</a></td>
		
	</tr>
	<tr>
		<td class="user"><a href="pnr.php">Enquiry PNR</a></td>
		
	</tr>
	<tr>
		<td class="user"><a href="cancel.php">Cancel Tickets</a></td>
		
	</tr>
	<tr>
		<td class="user"><a href="logout.php">Logout</a></td>
		
	</tr>
	<tr>
	<td class="footer">S C H O O L O F T E C H N O L O G Y, N E H U<br />Copyright &copy; R A I L W A Y R E S E R V A T I O N S Y S T E M</td>
	</tr>
</table>
<div id="links">
		<p class="link">Links</p>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="admin.php">Admin Page</a></li>
		<li><a href="index.php">Normal Login</a></li>
	</ul>
</div>	
</body>
</html>