<?php

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

<body>
<div id="main">
<form name="#" action="<?php echo Config::get('URL'); ?>admin/p_result" method="post">
    <h2>PASSENGERS LIST</h2>
	<table>
	<tr>
		<td>TRAIN NAME</td> <td><input type="text" name="source"  size="30"/></td>
	</tr>
	<tr>
		<td>DATE OF TRAVEL</td>
		<td>
		<input type="hidden" name="time" value="true" />
		
		<select name="year">
			<option value="" selected="selected">Year</option>
			<option value="2011">2011</option>
			<option value="2012">2012</option>
		</select>&nbsp;&nbsp;&nbsp;
			
		<select name="month">
			<option value="0">Month</option>
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
<div id="back"><a href="<?php echo Config::get('URL'); ?>admin/admin_page">GoBack</a></div>

</div>
</body>
