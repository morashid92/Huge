<h1>SwiftRailz</h1>
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
