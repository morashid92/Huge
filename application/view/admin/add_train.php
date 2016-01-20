<!DOCTYPE html>
<html>
<head>
<title>Train Addition Page</title>
<style type="text/css">
	body {
		background-color: grey;
		background-image:url('images/bg1.gif');
	}
	table {	
			background-color:#F8F8FF;
			padding-left:15px;
			padding-right:15px;
			padding-top:15px;
			padding-bottom:15px;
			width:60%;
			border: 0px red solid;
			font-family:Verdana, Geneva, sans-serif;
			cellpadding:5px; 
			cellspacing:5px;
	}
	td {
		border-bottom: 1px green dotted;
		height:30px;
	}
	span {
		color:red;
		font-size:8pt;
	}
	td.hr {
		border-bottom: 1px blue solid;
		font-size:15pt;
		color:blue;
		font-weight:bold;
	}
	td.nb {
		border-bottom:0px green dotted;
	}
	td.last_hr {
		border-bottom:1px blue solid;
		border-bottom-left-radius:2em;
		border-bottom-right-radius:2em;
	}
</style>

<script type="text/javascript">
function validateForm()
{
var a=document.forms["add"]["trainno"].value
var b=document.forms["add"]["trainname"].value
var c=document.forms["add"]["source"].value
var d=document.forms["add"]["destination"].value
var e=document.forms["add"]["distance"].value
var f=document.forms["add"]["ahour"].value
var g=document.forms["add"]["aminute"].value
var h=document.forms["add"]["dhour"].value
var i=document.forms["add"]["dminute"].value

if (a==null || a=="")
  {
  alert("Train number must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Enter the Train name");
  return false;
  }
if (c==null || c=="")
  {
  alert("Enter the source");
  return false;
  }
if (d==null || d=="")
  {
  alert("Enter the destination");
  return false;
  }
if (e==null || e=="")
  {
  alert("Enter distance between source and destination");
  return false;
  }
if (f=="0")
  {
  alert("Enter arrival hour");
  return false;
  }
if (g=="0")
  {
  alert("Enter arrival minute");
  return false;
  }
if (h=="0")
  {
  alert("Enter departure hour");
  return false;
  }
if (i=="0")
  {
  alert("Enter departure minute");
  return false;
  }
}

</script>


</head>
<body>
<form name="add" action='<?php echo Config::get('URL'); ?>admin/add' onsubmit="return validateForm();" method='post'>
<table align="center">
	<tr>
		<td class="hr" colspan="2">Train Addition </td>
	</tr>
	<tr>
		<td colspan="2"><br /></td>
	</tr>


	<tr>
		<td>Train No</td><td><input type="text" name="trainno" size="20" maxlength="20"></td>
	</tr>
	<tr>
		<td>Train Name</td><td><input type="text" name="trainname" size="30" maxlength="30"></td>
	</tr>
	<tr>
		<td>Source</td>
		<td><input type="text" name="source" size="30" maxlength="15"></td>
	</tr>
	<tr>
		<td>Destination</td>
		<td><input type="text" name="destination" size="30" maxlength="15"></td>
	</tr>
	<tr>
		<td>Distance(in KM)</td>
		<td><input type="text" name="distance" size="30" maxlength="30"></td>
	</tr>
	<tr>
		<td>Day</td>
		<td>
                <input name="date" type="hidden">
                <select name="day">
		<option selected="selected"  value="00">Day</option>
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
		</select>&nbsp;&nbsp;&nbsp;

		<select name="month">
		<option selected="selected"  value="0">Month</option>
		<option value="1">Jan</option>
		<option value="2">Feb</option>
		<option value="3">Mar</option>
		<option value="4">Apr</option>
		<option value="5">May</option>
		<option value="6">Jun</option>
		<option value="7">Jul</option>
		<option value="8">Aug</option>
		<option value="9">Sep</option>
		<option value="10">Oct</option>
		<option value="11">Nov</option>
		<option value="12">Dec</option>
		</select>&nbsp;&nbsp;&nbsp;

		<select name="year">
		<option value="" selected="selected">Year</option>
		<option value="2011">2011</option>
		<option value="2012">2012</option>
		</select>
                </td>
	</tr>


        <tr>
		<td>Departure time</td>
		<td><input type="text" name="depart" size="30" maxlength="30"> HH:MM:SS</td>
	</tr>
	<tr>
		<td>Arrival time</td>
		<td><input type="text" name="arrive" size="30" maxlength="30"> HH:MM:SS</td>
	</tr>
	<tr>
		<td>General</td>
		<td><input type="text" name="gen" size="30" maxlength="30"></td>
	</tr>
	<tr>
		<td>AC1</td>
		<td><input type="text" name="ac1" size="30" maxlength="30"></td>
	</tr>
	<tr>
		<td>AC2</td>
		<td><input type="text" name="ac2" size="30" maxlength="30"></td>
	</tr>
	<tr>
		<td>FC</td>
		<td><input type="text" name="fc" size="30" maxlength="30"></td>
	</tr>
	<tr>
		<td>SLP</td>
		<td><input type="text" name="slp" size="30" maxlength="30"></td>
	</tr>
	<tr>
		<td class="nb" colspan="2"><br /></td>
	</tr>
	<tr>
		<td class="nb" colspan="2"><br /></td>
	</tr>
	<tr>

		<td colspan="2" class="last_hr" align="center"><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="clear" value="Reset"></td>

	</tr>
</table>
</form>
</body>
</html>