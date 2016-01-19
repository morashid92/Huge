<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>User Registration Page</title>
<style type="text/css">
	body {
		background:#3A5598;
		
	}
	table {	
			background:rgba(248,248,255, 0.8);
			padding-left:15px;
			padding-right:15px;
			padding-top:15px;
			padding-bottom:15px;
			width:60%;
			border-radius:10px;
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
var x=document.forms["reg"]["username"].value
var y=document.forms["reg"]["password"].value
var z=document.forms["reg"]["rpassword"].value
var t=document.forms["reg"]["question"].value
var b=document.forms["reg"]["answer"].value
var c=document.forms["reg"]["fname"].value
var d=document.forms["reg"]["lname"].value
var e=document.forms["reg"]["day"].value
var f=document.forms["reg"]["month"].value
var g=document.forms["reg"]["year"].value
var h=document.forms["reg"]["occupation"].value
var i=document.forms["reg"]["email"].value
var j=document.forms["reg"]["mobile"].value
var k=document.forms["reg"]["nationality"].value
var l=document.forms["reg"]["address"].value
var m=document.forms["reg"]["city"].value
var n=document.forms["reg"]["state"].value
var o=document.forms["reg"]["zip"].value
var p=document.forms["reg"]["country"].value
if (x==null || x=="")
  {
  alert("Username must be filled out");
  return false;
  }
if (y==null || y=="")
  {
  alert("Please enter your password");
  return false;
  }
if (z==null || z=="")
  {
  alert("Please re-enter your password");
  return false;
  }
if (t=="9")
  {
  alert("Please select a security question");
  return false;
  }
if (b==null || b=="")
  {
  alert("Please give your answer to the security question");
  return false;
  }
if (c==null || c=="")
  {
  alert("First name must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("Last name must be filled out");
  return false;
  }
if (e=="00")
  {
  alert("Please enter a date");
  return false;
  }
if (f=="0")
  {
  alert("Please enter month");
  return false;
  }
if (g=="")
  {
  alert("Please enter year");
  return false;
  }
if (h=="7")
  {
  alert("Please select your occupation");
  return false;
  }
var atpos=i.indexOf("@");
var dotpos=i.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=i.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
if (j==null || j=="")
  {
  alert("Please enter your mobile number");
  return false;
  }
if (k=="")
  {
  alert("Please select your nationality");
  return false;
  }
if (l==null || l=="")
  {
  alert("Address must be filled out");
  return false;
  }
if (m=="")
  {
  alert("Please select your city");
  return false;
  }
if (n=="")
  {
  alert("Please select your state");
  return false;
  }
if (o==null || o=="")
  {
  alert("Please enter pincode");
  return false;
  }
if (p=="")
  {
  alert("Please select your country");
  return false;
  }

}
</script>


</head>
<body>
<form name="reg" action='insert.php' onsubmit="return validateForm();" method='post'>
<table align="center">
	<tr>
		<td class="hr" colspan="2">Individual Registration &nbsp;<span>&#40;* fields are Mandatory&#41;</span></td>
	</tr>

	<tr>
		<td colspan="2"><br /></td>
	</tr>
	<tr>
		<td colspan="2"><br /></td>
	</tr>
	
	
	<tr>
		<td>Username</td><td><input type="text" name="username" size="20" maxlength="20">*&#40;max 12 characters&#41;</td>
	</tr>
	<tr>
		<td>Password</td><td><input type="password" name="password" size="30" maxlength="30">*</td>
	</tr>
	<tr>
		<td>repeat Password</td><td><input type="password" name="rpassword" size="30" maxlength="30">*</td>
	</tr
	<tr>
		<td>select security question</td>
		<td><select name="question">
		<option selected="selected" value="9">--Select One--</option>
		<option value="0">What is your pets name?</option>
		<option value="1">What was the name of your first school?</option>
		<option value="2">Who was your childhood hero?</option>
		<option value="3">What is your favorite pass-time?</option>
		<option value="4">What is your all-time favorite sports team?</option>
		<option value="5">What is your fathers middle name?</option>
		<option value="6">What was your high school mascot?</option>
		<option value="7">What make was your first car or bike?</option>
		<option value="8">Where did you first meet your spouse?</option>
		</select></td>
	</tr>
	<tr>
		<td>Your answer</td>
		<td><input type="text" name="answer" maxlength="20"></td>
	</tr>
	<tr>
		<td>First name</td>
		<td><input type="text" name="fname" size="15" maxlength="15"></td>
	</tr>
	<tr>
		<td>Last name</td>
		<td><input type="text" name="lname" size="15" maxlength="15"></td>
	</tr>
	<tr>
		<td>Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
		<select name="gender">
		<option selected="selected">Male</option>
		<option>Female</option>
		</select></td>
		<td>Maritial status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select name="maritialstatus">
		<option selected="selected">Married</option>
		<option>Unmarried</option>
		</select></td>
	</tr>
	<tr>
		<td>Date of birth</td>
		<td>
		
		<input name="date" type="hidden">
		
		<select name="year">
		<option value="" selected="selected">Year</option>
		<option value="1993">1993</option>
		<option value="1992">1992</option>
		<option value="1991">1991</option>
		<option value="1990">1990</option>
		<option value="1989">1989</option>
		<option value="1988">1988</option>
		<option value="1987">1987</option>
		<option value="1986">1986</option>
		<option value="1985">1985</option>
		<option value="1984">1984</option>
		<option value="1983">1983</option>
		<option value="1982">1982</option>
		<option value="1981">1981</option>
		<option value="1980">1980</option>
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
		</select>
		
		
		</td>
	</tr>
	<tr>
		<td>occupation</td>
		<td><select name="occupation">
		<option selected="selected" value="7">--Select One--</option>
		<option value="0">Government</option>
		<option value="1">Public</option>
		<option value="2">Private</option>
		<option value="3">Professional</option>
		<option value="4">Self Employed</option>
		<option value="5">Student</option>
		<option value="6">Other</option>
		</select></td>
	</tr>
	<tr>
		<td>E-mail id</td>
		<td><input type="text" name="email" size="30" maxlength="30">*<span>your password will be sent to this email id</span></td>
	</tr>
	<tr>
		<td>Mobile</td>
		<td>+91<input type="text" name="mobile" size="10" maxlength="10"></td>
	</tr>
	<tr>
		<td>Nationality</td>
		<td><select name="nationality">
	<option value="" selected="selected">-- Select One --</option>
	<option value="India">India</option>
	<option value="Afghanistan">Afghanistan</option>
	<option value="Albania">Albania</option>
	<option value="Algeria">Algeria</option>
	<option value="Andorra">Andorra</option>
	<option value="Angola">Angola</option>
	<option value="Not Listed">Not Listed</option>
	</select></td>
	</tr>
	<tr>
		<td colspan="2"><br /></td>
	</tr>
	
	<tr>
		<td class="hr" colspan="2">Residential Address</td>
	</tr>
	
	<tr>
		<td colspan="2"><br /></td>
	</tr>
	
	<tr>
		<td colspan="2"><br /></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input type="text" name="address" size="30" maxlength="30"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="text" name="address2" size="30" maxlength="30">&#40;optional&#41;</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="text" name="address3" size="30" maxlength="30">&#40;optional&#41;</td>
	</tr>
	<tr>
		<td>City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select name="city">
		<option value="" selected="selected">-- Select One --</option>
		<option value="Itanagar">Itanagar</option>
		<option value="Guwahati">Guwahati</option>
		<option value="Patna">Patna</option>
		<option value="NewDelhi">NewDelhi</option>
		<option value="Chennai">Chennai</option>
		<option value="Kolkata">Kolkata</option>
		<option value="Banglore">Banglore</option>
		<option value="Kharagpur">Kharagpur</option>
		<option value="Other">Other</option>
		</select></td>
		<td>other&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="othercity" size="15" maxlength="15"></td>
	</tr>
	<tr>
		<td>state &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select name="state">
		<option value="" selected="selected">-- Select One --</option>
		<option value="Assam">Assam</option>
		<option value="Bihar">Bihar</option>
		<option value="Kolkata">Kolkata</option>
		<option value="Delhi">Delhi</option>
		<option value="Mumbai">Mumbai</option>
		<option value="Manipur">Manipur</option>
		<option value="Meghalaya">Meghalaya</option>
		<option value="Goa">Goa</option>
		<option value="Other">Other</option>
		</select></td>
		<td>other&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="otherstate" size="15" maxlength="15"></td>
	</tr>
	<tr>
		<td>Zip/Pin</td>
		<td><input type="text" name="zip" size="6" maxlength="6"></td>
	</tr>
	
	<tr>
		<td>Country</td>
		<td><select name="country">
		<option value="" selected="selected">-- Select One --</option>
		<option value="India">India</option>
		<option value="Not Listed">Not Listed</option>
		</select></td>
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