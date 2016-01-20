<div class="container">

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <script type="text/javascript" src="/Huge/public/Javascript/postcode.class.js"></script>
    <script>
        var cp_access_token = "03450-36cb9-c1008-00878"; // ***** DON'T FORGET TO PUT YOUR ACCESS TOKEN HERE IN PLACE OF X's !!!! *****
        var cp_obj_1 = CraftyPostcodeCreate();
        cp_obj_1.set("access_token", cp_access_token); 
        cp_obj_1.set("first_res_line", "----- please select your address ----"); 
        cp_obj_1.set("res_autoselect", "0");
        cp_obj_1.set("result_elem_id", "crafty_postcode_result_display_1");
        cp_obj_1.set("form", "address");
        cp_obj_1.set("elem_company"  , "companyname"); // optional
        cp_obj_1.set("elem_street1"  , "address1");
        cp_obj_1.set("elem_street2"  , "address2"); // optional, but highly recommended
        cp_obj_1.set("elem_street3"  , "address3"); // optional
        cp_obj_1.set("elem_town"     , "town");
        cp_obj_1.set("elem_county"   , "county"); // optional
        cp_obj_1.set("elem_postcode" , "postcode");
        cp_obj_1.set("elem_house_num", "house_name"); // setting this results in the house name/number being separated onto its own line
        cp_obj_1.set("elem_udprn"    , "udprn"); // optional
        cp_obj_1.set("single_res_autoselect" , 1); // don't show a drop down box if only one matching address is found

    </script>

    <!-- login box on left side -->
     <div class="login-page-box">
        <div class="table-wrapper">
    <div class="login-box">
        <h2>Register a new account</h2>

        <!-- register form -->
        <form method="post" action="<?php echo Config::get('URL'); ?>login/register_action">
            <!-- the user name input field uses a HTML5 pattern check -->
            <input type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="Username (letters/numbers, 2-64 chars)" required />
            <input type="text" name="user_email" placeholder="email address (a real address)" required />
            <input type="password" name="user_password_new" pattern=".{6,}" placeholder="Password (6+ characters)" required autocomplete="off" />
            <input type="password" name="user_password_repeat" pattern=".{6,}" required placeholder="Repeat your password" autocomplete="off" />

            <!-- show the captcha by calling the login/showCaptcha-method in the src attribute of the img tag -->
            <img id="captcha" src="<?php echo Config::get('URL'); ?>login/showCaptcha" />
            <input type="text" name="captcha" placeholder="Please enter above characters" required />

            <!-- quick & dirty captcha reloader -->
            <a href="#" style="display: block; font-size: 11px; margin: 5px 0 15px 0; text-align: center"
               onclick="document.getElementById('captcha').src = '<?php echo Config::get('URL'); ?>login/showCaptcha?' + Math.random(); return false">Reload Captcha</a>

            <input type="submit" value="Register" />
        </form>
        

    </div>

    <div class="postcode-box">
            <div class="login-box">
                <h2>Billing Address</h2>
                <div>

    <form method="post" name="address">
    
               
        <input type="text" name="postcode" style="width: 100px;" placeholder="Postcode"/>

            <button type="button" onclick="cp_obj_1.doLookup()">Find Address</button>
        <div id="crafty_postcode_result_display_1" ></div>

        <input type="text" name="companyname" placeholder="Company Name"/> 
        <input type="text" name="house_name" placeholder="House Name/No"/>
        <input type="text" name="address1" placeholder="Address Line 1"/>   
        <input type="text" name="address2" placeholder="Address Line 2"/> 
        <input type="text" name="address3" placeholder="Address Line 3"/> 
        <input type="text" name="town" placeholder="Town"/>        
        <input type="text" name="county" placeholder="County"/>      

    </form>
    </div>
</div>
            </div>


</div>
</div>
</div>
