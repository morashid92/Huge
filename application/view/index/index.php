<?php
error_reporting(E_ALL ^ E_DEPRECATED);
if($_SESSION['user_name'])
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
    <title>search for train</title>
    
    <style type="text/css">
            
    
        body{
                background:rgba(240,240,240,0.9);
                font-family:Arial, Helvetica, sans-serif;
                margin:auto;
                color:#E06C31;
                background:url(images/test2.jpg);
                background-repeat:repeat;
            }
        h2{
            background:rgba(0,0,238,0.9);
            font-family:Georgia, "Times New Roman", Times, serif;
            width:392px;
            text-align:center;
            color:#FF0;
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
        
            border:0px yellow solid;
            text-align:right;
            font-weight:bold;
        }
        td.class{
            text-align:left;
        }
        
        #main{
            border:0px red solid;
            border-radius:5px;
            border-top-right-radius:90px;
            border-bottom-left-radius:90px;
            
            background:rgba(240,255,240,0.6);
            box-shadow:15px 15px 15px grey;
            position:absolute;
            padding-left:35px;
            padding-bottom:15px;
            top:50px; left:100px;
            width:600px;
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
<form name="#" action="<?php echo Config::get('URL'); ?>index/s_result" method="post">
    <h2>PLAN YOUR JOURNERY</h2>
    <table>
    <tr>
        <td>FROM</td> <td><input type="text" name="source"  size="30"/></td>
    </tr>
    <tr>
        <td>TO</td> <td><input type="text" name="destination" size="30" /></td>
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
        <td colspan="2"><input type="submit" name="submit" value="Find Train" /> 
        <input type="reset" value="Clear Fields" /></td>
    </tr>
    </table>


</form>
<div id="back"><a href="login.php">GoBack</a></div>

</div>
</body>
