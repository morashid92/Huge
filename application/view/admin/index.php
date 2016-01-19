<!DOCTYPE html>
<html>
<head>
	<title>Admin Login page</title>
	

</head>

<body>
	<table align='center' class='main_tab' cellspacing= "0" cellpadding= "0">

	
	<tr>
	 <td class='login_table' align='left'>
		<form action="<?php echo Config::get('URL'); ?>admin/adminlogin" method='post'>		
		<table class="login_tab">
			<tr>
				<td colspan="2" class='login_nam' valign='middle'>Administrator Login</td>
			</tr>
			<tr>
				<td class='login'>Username:</td>
				<td class='login'><input type='text' name='username'> </td>
			</tr>
			<tr>
				<td class='login'>Password:</td>
				<td class='login'><input type='password' name='password'> </td>
			</tr>
			<tr>
				<td class='login' colspan='2'>
				<input type='submit' value='Login' name='submit'></td>
			</tr>
			
			
			
	  </table>
	  </form>

</div>	
</body>