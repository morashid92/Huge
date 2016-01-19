<<<<<<< HEAD
<h1>Rail Way</h1>
<div class="container">
    <div class="login-page-box">
          
        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>
        <div id="LeftPanel" class="col-xs- col-sm-5 col-md-10">
            <div class="search-box">
            <form action="destination.html" method="GET" >
            <fieldset>
                <legend>Find Tickets</legend>
            
        <form id="SearchForm" method="POST" role="form">
            <form class="form-inline well">
                <div class-"form-group">
            <div class="row stations-section">
                <div class="col-xs-12">
                    <div class="form-group departure-station-field">
                        <label class="control-label" for="departureStation">From</label>
                        <input class="form-control" id="departureStation" type="search" name="DepartureStation"  autocomplete="off" autocorrect="off" spellcheck="false" placeholder="Enter departing station..." value=""/>

                        </div>
                    </div>
                    </div>
                </div>
            </form>
             

        <form id="SearchForm" method="POST" role="form">
            <div class="row stations-section">
                <div class="col-xs-12">
                    <div class="form-group return-station-field">
                        <label class="control-label" for="returnStation">To</label>
                            <input class="form-control" id="returnStation" type="search" name="ReturnStation"  autocomplete="off" autocorrect="off" spellcheck="false" placeholder="Enter destination station..." value=""/>

                        </div>
                        </div>
                        </div>
                            
                            
                
                          <hr class="QuickSearch-rule"/>
            <div class="row" data-bind='css: { "has-error": travellersInvalid }'>
                <div class="adults-section col-xs-6">
                    <div class="adults-field">
                        <label class="control-label" for="adults">Adults (16+)</label>
                        <select class="form-control" id="adults" name="AdultsTravelling" data-bind="options: adultsOptions, optionsText: 'text', optionsValue: 'value', value: adults">
                            
                                <option value="0">0</option>
                            
                                <option selected value="1">1</option>
                            
                                <option value="2">2</option>
                            
                                <option value="3">3</option>
                            
                                <option value="4">4</option>
                            
                                <option value="5">5</option>
                            
                                <option value="6">6</option>
                            
                                <option value="7">7</option>
                            
                                <option value="8">8</option>
                            
                                <option value="9">9</option>
                            
                        </select>
                    </div>
                </div>
                <div class="children-section col-xs-6">
                    <div class="children-field">
                        <label class="control-label" for="children" data-toggle="popover" data-placement="right">Child (5-15)</label>
                        <select class="form-control" id="children" name="ChildrenTravelling" data-bind="options: childrenOptions, optionsText: 'text', optionsValue: 'value', value: children">
                            
                                <option selected value="0">0</option>
                            
                                <option value="1">1</option>
                            
                                <option value="2">2</option>
                            
                                <option value="3">3</option>
                            
                                <option value="4">4</option>
                            
                                <option value="5">5</option>
                            
                                <option value="6">6</option>
                            
                                <option value="7">7</option>
                            
                                <option value="8">8</option>
                            
                                <option value="9">9</option>
                            
                        </select>
                    </div>
                </div>


                 
                <div class="out-section col-xs-6">
                    <h3 class="QuickSearch-out-heading">Departure</h3>
                    <div data-bind='css: { "has-error": outDateTimeInvalid }'>

                        <div class="clearfix datetime-field">
                            <input id="date" type="date" name"date" min="17-12-2015" value="20-Dec-15"/>
                            <label class="sr-only" for="outDepartOrArrive">Outward Departing or Arriving</label>
                            <select class="form-control" id="outDepartOrArrive" name="OutwardLeaveAfterOrBefore">
                                
                                    <option selected value="A">Departing</option>
                                
                                    <option value="B">Arriving</option>
                                
                            </select>
                            <div class="hh pull-left">
                                <label class="sr-only" for="outHour">Outward hour</label>
                                <select class="form-control" id="outHour" name="OutwardHour">
                                    
                                        <option value="0">00</option>
                                    
                                        <option value="1">01</option>
                                    
                                        <option value="2">02</option>
                                    
                                        <option value="3">03</option>
                                    
                                        <option value="4">04</option>
                                    
                                        <option value="5">05</option>
                                    
                                        <option value="6">06</option>
                                    
                                        <option value="7">07</option>
                                    
                                        <option value="8">08</option>
                                    
                                        <option value="9">09</option>
                                    
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
                                    
                                        <option selected value="21">21</option>
                                    
                                        <option value="22">22</option>
                                    
                                        <option value="23">23</option>
                                    
                                </select>
                            </div>
                            <div class="mm pull-right">
                                <label class="sr-only" for="outMinute">Outward minute</label>
                                <select class="form-control" id="outMinute" name="OutwardMinute">
                                    
                                        <option value="0">00</option>
                                    
                                        <option value="15">15</option>
                                    
                                        <option value="30">30</option>
                                    
                                        <option selected value="45">45</option>
                                    
                                </select>
                            </div>
                            <div class="field-error datetime-error tooltip bottom">
                                <div class="tooltip-arrow"></div>
                                <div class="tooltip-inner"></div>
                            </div>
                            <div id="dateTimeError" class="field-error datetime-error tooltip bottom">
                                <div class="tooltip-arrow"></div>
                                <div class="tooltip-inner"></div>
                            </div>
                        </div>
                        <div class="checkbox checkbox-sm">
                            <label for="isOneWay" class="control-label">
                                <input type="checkbox" id="isOneWay" name="SingleJourneyCheckBox" value="Single" data-bind="checked: isOneWay"/>One way<span class="sr-only"> journey</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="return-section col-xs-6">
                    <h3 class="QuickSearch-return-heading">Return</h3>
                        <div class="clearfix datetime-field">
                            <input id="date" type="date" name"date" min="17-12-2015">
                            <label class="sr-only" for="returnDepartOrArrive">Return Departing or Arriving</label>
                            <select class="form-control" id="returnDepartOrArrive" name="InwardLeaveAfterOrBefore" >
                                
                                    <option selected value="A">Departing</option>
                                
                                    <option value="B">Arriving</option>
                                
                            </select>
                            <div class="hh pull-left">
                                <label class="sr-only" for="returnHour">Return hour</label>
                                <select class="form-control" id="returnHour" name="ReturnHour">
                                    
                                        <option value=""></option>
                                    
                                        <option value="0">00</option>
                                    
                                        <option value="1">01</option>
                                    
                                        <option value="2">02</option>
                                    
                                        <option value="3">03</option>
                                    
                                        <option value="4">04</option>
                                    
                                        <option value="5">05</option>
                                    
                                        <option value="6">06</option>
                                    
                                        <option value="7">07</option>
                                    
                                        <option value="8">08</option>
                                    
                                        <option value="9">09</option>
                                    
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
                                    
                                </select>
                            </div>
                            <div class="mm pull-right">
                                <label class="sr-only" for="returnMinute">Return minute</label>
                                <select class="form-control" id="returnMinute" name="ReturnMinute">
                                    
                                        <option value=""></option>
                                    
                                        <option value="0">00</option>
                                    
                                        <option value="15">15</option>
                                    
                                        <option value="30">30</option>
                                    
                                        <option value="45">45</option>
                                    
                                </select>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>

                        </div>

                <input type="submit" value="Get Times and Tickets"/>


            </fieldset>
        </form>
    </div>
</div>
</div>
=======
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
            <option value="2016">2016</option>
            <option value="2017">2017</option>
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
>>>>>>> upstream/master
