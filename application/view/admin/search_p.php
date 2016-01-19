<?php

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
	<title>passenger details</title>
	
	<style type="text/css">
			
	
		body{
				background:rgba(240,240,240,0.9);
				font-family:normal Arial, Helvetica, sans-serif;
				margin:auto;
				color:#E06C31;
				background:url(images/9.jpg);
				background-repeat:repeat;
			}
		h2{
			background:blue;
			font-family:Georgia, "Times New Roman", Times, serif;
			width:392px;
			text-align:center;
			color:#FFF;
		}
		a{
			text-decoration:none;
		}
		a:hover{
			color:rgba(255,255,255,0.5);
		}
		
		table{
				padding-left:30px;
		}
	
		td{
		
			border:0px orange solid;
			text-align:right;
			font-weight:bold;

		}
		td.class{
		    
			text-align:left;
		}
		
		#main{
			margin:0 0 10px 0;

            padding:35px 15px;

            background:#222;
            box-shadow :30px 30px 30px grey; 
            border:0px solid;
			border-radius : 5px;
			position: absolute;

            top:50px;

            left:300px;

            width:600px;

            border-bottom: 1px double #660000;

            border-top: 1px double #660000;

            border-left:1px double #FF0033;

            border-right:1px double #FF0033;

		}
		#back {
		        background:rgba(255,69,0,0.5);
				width:80px;
				border-radius:10px;
				text-align:center;
				position:relative;
				left:500px;
				padding-top:5px;
				padding-bottom:5px;
			
				
		}
	
	</style>
	
</head>
<body>
<div id="main">
<form name="#" action="<?php echo Config::get('URL'); ?>admin/p_result" method="post">
    <h2>PASSENGER DETAILS</h2>
	<table>
	<tr>
		<td>TRAIN</td> <td><input type="text" name="source"  size="30"/></td>
	</tr>
	<tr>
		<td>DATE OF TRAVEL</td>
		<td>
		<input type="hidden" name="time" value="true" />
		
		<select name="year">
			<option value="" selected="selected">Year</option>
			<option value="2011">2011</option>
		</select>&nbsp;&nbsp;&nbsp;
			
		<select name="month">
			<option value="0">Month</option>
			<option value="jan">Jan</option>
			<option value="feb">Feb</option>
			<option value="mar">Mar</option>
			<option value="apr">Apr</option>
			<option value="may">May</option>
			<option value="jun">Jun</option>
			<option value="jul">Jul</option>
			<option value="aug">Aug</option>
			<option value="sep">Sep</option>
			<option value="oct">Oct</option>
			<option value="nov">Nov</option>
			<option value="dec">Dec</option>
		</select>&nbsp;&nbsp;&nbsp;

		

		<select name="day">
			<option value="0">DAY</option>
			<option value="01">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>
		</td>
	</tr>
	
	
	<tr>
		<td colspan="2"><input type="submit" name="submit" value="View List" /> 
		<input type="reset" value="RESET" /></td>
	</tr>
	</table>


</form>
<div id="back"><a href="admin_page.php">GoBack</a></div>

</div>
</body>
