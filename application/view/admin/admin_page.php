<?php
error_reporting(E_ALL ^ E_DEPRECATED);
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

</head>
<body>
<table align='center' class='main_tab' cellspacing= "0" cellpadding= "0">

</table>
<table align="center" width="960px"  class='main_tab' cellspacing= "0" cellpadding= "0">
	<tr>
		<td ><p class="user1">welcome &nbsp;&nbsp;<?php echo $_SESSION['username'] ?></p></td>
	</tr>
	<tr>
		<td class="user" width="800px"><a href="<?php echo Config::get('URL'); ?>admin/add_train">Add Train</a></td>
		
	</tr>
    <tr>
		<td class="user" width="800px"><a href="<?php echo Config::get('URL'); ?>admin/rem_train">Remove Train</a></td>
		
	</tr>
	<tr>
		<td class="user" width="800px"><a href="<?php echo Config::get('URL'); ?>admin/full_p">Full Passenger List</a></td>
		
	</tr>

	<tr>
		<td class="user"><a href="ticket_cancel.php">Cancel Tickets</a></td>
		
	</tr>
	<tr>
		<td class="user"><a href="<?php echo Config::get('URL'); ?>admin/logout1">Logout</a></td>
		
	</tr>
	
</div>	
</body>
</html>