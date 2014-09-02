<!DOCTYPE html>
<html>
 <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta charsetr="etf-8">
         <link href="http://fonts.googleapis.com/css?family=Oleo+Script:400" rel="stylesheet" type="text/css">
         <title>Virtual Labs</title>
         <link rel="stylesheet" href="css/bootstrap.css">
         <link rel="stylesheet" href="css/bootstrap-responsive.css">
         <link rel="stylesheet" href="css/override-style.css">
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
         <script src="js/bootstrap.min.js"></script>
         <script src="js/bootstrap-modal.js"></script>
         <script src="js/bootstrap-modalmanager.js"></script> 
<style>
body{
background-color: #6699cc;
}
</style>
 </head>
 <body>
    <div id="wrap">
      <!-- Navbar ================================================== -->
      <?php include 'header.php'; ?>

 <!-- =====================================================================
  ==========================div id="WRAP" ends here======================= -->

  <div class="container" id="faq">

<div id="inner_faq">

<form id="form_246914" class="appnitro" method="post" action="insert.php" name="FeedbackForm" onsubmit="return xssValidation()">
<div class="form_description">
<h2>Feedback for Virtual Labs</h2>
<hr>
        <br>
        <br>
<p><b>Thank you for visiting Virtual-Labs. We will really appreciate if you could spare some time in filling out the following details. Your feedback is extremely important to us.
</b>
</p>
</div>						
<ul>

<li style="list-style:none" id="li_1">
<label class="description" for="element_1">Name (Optional)</label>
<div>
<input id="element_1" name="element_1" class="element text medium" maxlength="255" value="" type="text"> 
</div> 
</li>
<li style="list-style:none" id="li_2">
<label class="description" for="element_2">Email (Optional)</label>
<div>
<input id="element_2" name="element_2" class="element text medium" maxlength="255" value="" type="text"> 
</div> 
</li>
<!-- <li style="list-style:none" id="li_3" > -->
<!-- <label class="description" for="element_3">Contact Number (Optional)</label> -->
<!-- <span> -->
<!-- 	<input id="element_3_1" name="element_3_1" class="element text" size="3" maxlength="3" value="" type="text"> - -->
<!-- 		<label for="element_3_1">(###)</label> -->
<!-- </span> -->
<!-- <span> -->
<!-- 	<input id="element_3_2" name="element_3_2" class="element text" size="3" maxlength="3" value="" type="text"> - -->
<!-- 		<label for="element_3_2">###</label> -->
<!-- </span> -->
<!-- <span> -->
<!-- 	<input id="element_3_3" name="element_3_3" class="element text" size="4" maxlength="4" value="" type="text"> -->
<!-- 		<label for="element_3_3">####</label> -->
<!-- </span> -->

<!-- </li>	 -->
<li style="list-style:none" id="li_13">
<label class="description" for="element_13">Designation </label>
<span>
<input id="element_13_1" name="element_13_1" class="element checkbox" value="0" type="radio">
<label class="choice" for="element_13_1">Faculty</label>
<input id="element_13_1" name="element_13_1" class="element checkbox" value="1" type="radio">
<label class="choice" for="element_13_2">Student</label>
</span> 
</li>		
<li style="list-style:none" class="section_break">
<h2>System Details</h2>
<p></p>
</li>
<li style="list-style:none" id="li_14">
<label class="description" for="element_14">1. Please select which web browser you used.  </label>
<span>
<input id="element_14_1" name="element_14[]" class="element checkbox" value="firefox" type="checkbox">
<label class="choice" for="element_14_1">Mozilla Firefox</label>
<input id="element_14_2" name="element_14[]" class="element checkbox" value="ie" type="checkbox">
<label class="choice" for="element_14_2">Internet Explorer</label>
<input id="element_14_3" name="element_14[]" class="element checkbox" value="chrome" type="checkbox">
<label class="choice" for="element_14_3">Google Chrome</label>
<input id="element_14_4" name="element_14[]" class="element checkbox" value="safari" type="checkbox">
<label class="choice" for="element_14_4">Safari</label>

</span> 
</li>
<li style="list-style:none" id="li_15">
<label class="description" for="element_15">2. Please select which operating system you used.  </label>
<span>
<input id="element_15_1" name="element_15[]" class="element checkbox" value="windows" type="checkbox">
<label class="choice" for="element_15_1">Windows</label>
<input id="element_15_2" name="element_15[]" class="elemen checkbox" value="linux" type="checkbox">
<label class="choice" for="element_15_2">Linux</label>
<input id="element_15_3" name="element_15[]" class="element checkbox" value="mac" type="checkbox">
<label class="choice" for="element_15_3">MacOS</label>

</span> 
</li>
<li style="list-style:none" id="li_16">
<label class="description" for="element_16">3. Please select which internet connection you used.</label>
<span>
<input id="element_16_1" name="element_16[]" class="element checkbox" value="broadband" type="checkbox">
<label class="choice" for="element_16_1">Broadband</label>
<input id="element_16_2" name="element_16[]" class="element checkbox" value="dialup" type="checkbox">
<label class="choice" for="element_16[]">Dial Up</label>
<input id="element_16_3" name="element_16[]" class="element checkbox" value="usb" type="checkbox">
<label class="choice" for="element_16[]">USB Internet</label>
<input id="element_16_4" name="element_16[]" class="element checkbox" value="college" type="checkbox">
<label class="choice" for="element_16_4">College Internet</label>

</span> 
</li>
<li style="list-style:none" class="section_break">
<h2>Feedback for the Lab Tested</h2>
</li>
<li style="list-style:none" id="li_6">
<label class="description" for="element_6">1. Name the Lab you have tested. </label>
<div>
<select id="element_6" name="element_6" class="element text medium" maxlength="255">
<option>Select the Lab </option> 
<option>cse01 Data Structures</option>
<option>cse02 Computer Programming</option>
<option>cse03 Programming and Data Structures</option>
<option>cse04 Problem Solving</option>
<option>cse05 Principles of Programming Languages</option>
<option>cse06 Data Mining</option>
<option>cse07 Databases</option>
<option>cse08 Software Engineering</option>
<option>cse09 Systems and Software</option>
<option>cse10 Computer Organisation and Architecture (IIT-KGP)</option>
<option>cse11 Computer Organisation (IIIT-H)</option>
<option>cse12 FPGA Embedded Systems</option>
<option>cse13 Advanced VLSI</option>
<option>cse14 VLSI</option>
<option>cse15 Digital Logic Design</option>
<option>cse16 Speech and Signal Processing</option>
<option>cse17 Mobile Robotics</option>
<option>cse18 Computer Graphics</option>
<option>cse19 Basics of Image Processing</option>
<option>cse20 Pattern Recognition</option>
<option>cse21 Optical Remote Sensing</option>
<option>cse22 Artificial Neural Networks</option>
<option>cse23 Computational Linguistics</option>
<option>cse24 Natural Language Processing</option>
<option>cse28 Advanced Networking(IIT-KGP)</option>
<option>cse29 Cryptography(IIIT-H)</option>
<option>cse30 Analog CMOS VLSI Circuit Design</option>
<option>CCNSB01: Molecular Fluorescence Spectroscopy</option>
<option>CCNSB02: Colloid and Surface Chemistry</option>
<option>CCNSB03: Molecular Absorption Spectroscopy</option>
<option>CCNSB04: Quantum Chemistry</option>
<option>CCNSB05: Circular Dichronism Spectroscopy</option>
<option>CCNSB06: Physical Chemistry</option>
<option>CCNSB07: Molecular Interactions</option>
<option>EERC01:Basic Engineering Mechanics &amp; Strength of Materials</option>
<option>EERC02: Soil Mechanics &amp; Foundation Engineering</option>
<option>EERC03: Hydraulics &amp; Fluid Mechanics</option>
<option>EERC04: Basic Structural Analysis</option>
<option>EMT: Electromagnetic Theory</option>			</select>
</div> 
</li>
<li style="list-style:none" id="li_7">
<label class="description" for="element_7">2. List of Experiments Performed </label>
<div>
<textarea id="element_7" name="element_7" class="element textarea medium"></textarea> 
</div> 
</li>
<li style="list-style:none" id="li_18">
<label class="description" for="element_18">3. State your opinion for the following questions:</label>
<div>
<table id="element_18" name="element_18" class="calender" border="1">
<tbody><tr><th></th>
<th>Excellent</th>
<th>Very Good</th>
<th>Good</th>
<th>Average</th>
<th>Poor</th></tr>
</tbody><tbody>
<tr>
<td>To what degree was the actual lab environment simulated?</td>
<td align="center"><input id="element_19" name="element_19" class="element text medium" maxlength="300" value="5" type="radio"></td>
<td align="center"><input id="element_19" name="element_19" class="element text medium" maxlength="300" value="4" type="radio"></td>
<td align="center"><input id="element_19" name="element_19" class="element text medium" maxlength="300" value="3" type="radio"></td>
<td align="center"><input id="element_19" name="element_19" class="element text medium" maxlength="300" value="2" type="radio"></td>
<td align="center"><input id="element_19" name="element_19" class="element text medium" maxlength="300" value="1" type="radio"></td>
</tr>
<tr>
<td>To what extent did you have control over the interactions?</td>
<td align="center"><input id="element_20" name="element_20" class="element text medium" maxlength="300" value="5" type="radio"></td>
<td align="center"><input id="element_20" name="element_20" class="element text medium" maxlength="300" value="4" type="radio"></td>
<td align="center"><input id="element_20" name="element_20" class="element text medium" maxlength="300" value="3" type="radio"></td>
<td align="center"><input id="element_20" name="element_20" class="element text medium" maxlength="300" value="2" type="radio"></td>
<td align="center"><input id="element_20" name="element_20" class="element text medium" maxlength="300" value="1" type="radio"></td>
</tr>
<tr>
<td>How do you rate the online performance of the experiment?</td>
<td align="center"><input id="element_21" name="element_21" class="element text medium" maxlength="300" value="5" type="radio"></td>
<td align="center"><input id="element_21" name="element_21" class="element text medium" maxlength="300" value="4" type="radio"></td>
<td align="center"><input id="element_21" name="element_21" class="element text medium" maxlength="300" value="3" type="radio"></td>
<td align="center"><input id="element_21" name="element_21" class="element text medium" maxlength="300" value="2" type="radio"></td>
<td align="center"><input id="element_21" name="element_21" class="element text medium" maxlength="300" value="1" type="radio"></td>
</tr>
<tr>
<td>Were the measurement and analysis of data found to be easy?</td>
<td align="center"><input id="element_22" name="element_22" class="element text medium" maxlength="300" value="5" type="radio"></td>
<td align="center"><input id="element_22" name="element_22" class="element text medium" maxlength="300" value="4" type="radio"></td>
<td align="center"><input id="element_22" name="element_22" class="element text medium" maxlength="300" value="3" type="radio"></td>
<td align="center"><input id="element_22" name="element_22" class="element text medium" maxlength="300" value="2" type="radio"></td>
<td align="center"><input id="element_22" name="element_22" class="element text medium" maxlength="300" value="1" type="radio"></td>
</tr>
<tr>
<td>Was the procedure found to be helpful?</td>
<td align="center"><input id="element_23" name="element_23" class="element text medium" maxlength="300" value="5" type="radio"></td>
<td align="center"><input id="element_23" name="element_23" class="element text medium" maxlength="300" value="4" type="radio"></td>
<td align="center"><input id="element_23" name="element_23" class="element text medium" maxlength="300" value="3" type="radio"></td>
<td align="center"><input id="element_23" name="element_23" class="element text medium" maxlength="300" value="2" type="radio"></td>
<td align="center"><input id="element_23" name="element_23" class="element text medium" maxlength="300" value="1" type="radio"></td>
</tr>
<tr>
<td>Were the references provided are consistent with the objectives of the experiment ?</td>
<td align="center"><input id="element_24" name="element_24" class="element text medium" maxlength="300" value="5" type="radio"></td>
<td align="center"><input id="element_24" name="element_24" class="element text medium" maxlength="300" value="4" type="radio"></td>
<td align="center"><input id="element_24" name="element_24" class="element text medium" maxlength="300" value="3" type="radio"></td>
<td align="center"><input id="element_24" name="element_24" class="element text medium" maxlength="300" value="2" type="radio"></td>
<td align="center"><input id="element_24" name="element_24" class="element text medium" maxlength="300" value="1" type="radio"></td>
</tr>
<tr>
<td>Were the results of experiment easily interpretable?</td>
<td align="center"><input id="element_25" name="element_25" class="element text medium" maxlength="300" value="5" type="radio"></td>
<td align="center"><input id="element_25" name="element_25" class="element text medium" maxlength="300" value="4" type="radio"></td>
<td align="center"><input id="element_25" name="element_25" class="element text medium" maxlength="300" value="3" type="radio"></td>
<td align="center"><input id="element_25" name="element_25" class="element text medium" maxlength="300" value="2" type="radio"></td>
<td align="center"><input id="element_25" name="element_25" class="element text medium" maxlength="300" value="1" type="radio"></td>
</tr>
<tr>
<td>Has the lab experience helped you in developing a clear understanding of the experiment and related topics?</td>
<td align="center"><input id="element_26" name="element_26" class="element text medium" maxlength="300" value="5" type="radio"></td>
<td align="center"><input id="element_26" name="element_26" class="element text medium" maxlength="300" value="4" type="radio"></td>
<td align="center"><input id="element_26" name="element_26" class="element text medium" maxlength="300" value="3" type="radio"></td>
<td align="center"><input id="element_26" name="element_26" class="element text medium" maxlength="300" value="2" type="radio"></td>
<td align="center"><input id="element_26" name="element_26" class="element text medium" maxlength="300" value="1" type="radio"></td>
</tr>
</tbody>
</table> 
</div> 
<label class="description" for="element_9">4. Did you experience any problems? If "Yes" please give the reason below </label>
<div>
<textarea id="element_9" name="element_9" class="element textarea medium"></textarea> 
</div> 
</li>
<li style="list-style:none" id="li_11">
<label class="description" for="element_11">5. Please mention some points which you found interesting about the experiments </label>
<div>
<textarea id="element_11" name="element_11" class="element textarea medium"></textarea> 
</div> 
</li>
<li style="list-style:none" id="li_10">
<label class="description" for="element_10">6. Is there anything (specific/generic) feedback with respect to the experiments that you would like to share?  </label>
<div>  
<textarea id="element_10" name="element_10" class="element textarea medium"></textarea>
</div>
</li>

<li style="list-style:none" id="li_12">
<label class="description" for="element_12">7. Please suggest some points to improve the lab </label>
<div>
<textarea id="element_12" name="element_12" class="element textarea medium"></textarea> 
</div> 
</li>
<li style="list-style:none" id="li_8">	
<label class="description" for="element_8">8. Did you find the experiments helpful in learning the underlying concepts? </label>
<span>
<input id="element_8" name="element_8" class="element radio" value="1" type="radio">
<label class="choice" for="element_17_1">Yes</label>
<input id="element_8" name="element_8" class="element radio" value="2" type="radio">
<label class="choice" for="element_17_2">No</label>
</span>
</li>    
<li style="list-style:none" id="li_17">
<label class="description" for="element_17">9. Would you recommend this lab to your friends? </label>
<span>
<input id="element_17" name="element_17" class="element radio" value="1" type="radio">
<label class="choice" for="element_17_1">Yes</label>
<input id="element_17" name="element_17" class="element radio" value="2" type="radio">
<label class="choice" for="element_17_2">No</label>
<input id="element_17" name="element_17" class="element radio" value="3" type="radio">
<label class="choice" for="element_17_3">Maybe</label>
</span> 
</li>
<li style="list-style:none" id="li_27">
<label class="description" for="element_27">10. Additional Comments about the lab </label>
<div>
<textarea id="element_27" name="element_27" class="element textarea medium"></textarea>
</div>
</li>
<li style="list-style:none" id="li_28">
<label class="description" for="element_28"> Type verification image:</label>
<div>
<input name="element_28" id="element_28" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:14px;font-family:Verdana, Arial,   Helvetica, sans-serif; font-size:11px;" type="text">
<img src="verificationimage.php" alt="verification image, type it in the box" height="24" align="absbottom" width="50">
</div>
</li>

<li style="list-style:none" class="buttons">
<input name="form_id" value="246914" type="hidden">

<input id="saveForm" class="button_text" name="submit" value="Submit" align="middle" type="submit">
<input id="saveForm" class="button_text" name="reset" value="Reset" align="middle" type="reset">
</li>

</ul>
</form>	




    </div>
      </div>


</div>
  <div id="push"></div>
</br>
</br>
</br>
    <!-- Footer
    ================================================== -->
    <?php include 'footer.php'; ?>
    <!-- Scripts before body ends
    ================================================== -->
 </body>
     <!-- Body Ends here
    ================================================== -->
</html>
                                                                                                                                       137,3         Bot

