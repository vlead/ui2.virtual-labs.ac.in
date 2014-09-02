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

 </head>
 <body>
    <div id="wrap">
    	<!-- Navbar ================================================== -->    
	    <div class="navbar navbar-fixed-top"> 
			<div class="navbar-inner">
			 	<div class="container">
			 	  	<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
		            </button>	
			 	   <a href="index.html" class="brand">Virtual Labs</a>
			 	    <div class="nav-collapse collapse">
			 	    	<ul class="nav">
			 	    	 <li> <a href="index.html">Home</a> </li>
					 	    	
			 	    	 		<li> <a href="#">About</a> </li>

					 	    	<li class="dropdown">
				                 		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Labs<b class="caret"></b></a>
					                	<ul class="dropdown-menu">
						                  <li><a href="#">Computer Science</a></li>
						                  <li><a href="#">Electronics Engineering</a></li>
						                  <li><a href="#">Electrical Engineering</a></li>
						                  <li><a href="#">Civil Engineering</a></li>
						                  <li><a href="#">Mechanical Engineering</a></li>
						                  <li><a href="#">Physical Sciences</a></li>
						                  <li><a href="#">Chemical Sciences</a></li>
					                	</ul>
				                	</li>

				                	<li class="dropdown">
				                 		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Participating Institutes<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="http://iitd.ac.in">IIT Delhi</a></li>
									<li><a href="http://iitb.ac.in">IIT Bombay</a></li>
									<li><a href="http://iitk.ac.in">IIT Kanpur</a></li>
									<li><a href="http://iiit.ac.in">IIIT Hyderabad</a></li>
									<li><a href="http://iitg.ac.in">IIT Guwahati</a></li>
									<li><a href="http://iitr.ac.in">IIT Roorkee</a></li>
									<li><a href="http://iitm.ac.in">IIT Madras</a></li>
									<li><a href="http://iitkgp.ac.in">IIT Kharagpur</a></li>
									<li><a href="htpp://coep.org.in">COE Pune</a></li>
									<li><a href="http://dayalbagh.org.in">Dayalbagh University</a></li>
									<li><a href="http://nitk.ac.in">NIT Suratkal</a></li>
									<li><a href="http://amrita.edu/">Amrita University</a></li>

					                	</ul>
				                	</li>
			 	    	 		
							<li><a href="#form-content" role="button" data-toggle="modal">Contact</a></li>
							
							<div id="form-content" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" keyboard:"true" backdrop:"true">
								<div class="modal-header">
									<a class="close" data-dismiss="modal">x</a>
									<h3>Send me a message</h3>
								</div>
								<div class="modal-body">
									<form class="contact" name="contact">
										<label class="label" for="name">Your Name</label><br>
										<input type="text" name="name" class="input-xlarge"><br>
										<label class="label" for="email">Your E-mail</label><br>
										<input type="email" name="email" class="input-xlarge"><br>
										<label class="label" for="message">Enter a Message</label><br>
										<textarea name="message" class="input-xlarge"></textarea>
									</form>
								</div>
								<div class="modal-footer">
									<input class="btn btn-success" type="submit" value="Send" id="submit">
									<a href="#" class="btn" data-dismiss="modal">Close</a>
								</div>
							</div>
								<li><a href="#signin" role="button" data-toggle="modal">LogIn</a></li>
								<div id="signin" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" keyboard:"true" backdrop:"true">
									<div class="modal-header">
										<a class="close" data-dismiss="modal">x</a>
										<h3>Login</h3>
									</div>
									<div class="modal-body">
										<form class="contact" name="contact">
											<label class="label" for="name">User Name or Email</label><br>
											<input type="text" name="name" class="input-xlarge"><br>
											<label class="label" for="message">Password</label><br>
											<input type="password" name="password" class="input-xlarge"></input>
											<label class="checkbox">
											<input type="checkbox">Remember Password
											</label>
										</form>
										<p><a href="form.html">Click here to Register</a>
									</div>
									<div class="modal-footer">
										<input class="btn btn-success" type="submit" value="Sign In" id="submit">
									</div>
								</div>

			 	    	</ul><!-- div clas="nav" ends here-->
			 	    </div><!-- div class="nav-collapse collapse" ends here -->
			    </div><!-- div class=container ends here -->
			</div>	<!-- div class=navbar-inner ends here -->
		</div> <!-- div class="navbar navbar-fixed-top" ends here -->
<!-- =====================================================================
	==========================div id="WRAP" ends here======================= -->

<!-- =====================================================================
===============================BREADCRUMBS================================
========================================================================== -->


   	<div class="container-fluid">
   	   	<div class="tabbable tabs-left">
 	
				<ul class="nav nav-tabs">
	                <li id="lA_menu" class="active menuitem"><a href="#lA" data-toggle="tab">Computer Science</a></li>
	                <li  id="lB_menu" class="menuitem"><a href="#lB" data-toggle="tab">Electronics Engineering</a></li>
	                <li id="lC_menu" class="menuitem"><a href="#lC" data-toggle="tab">Civil Engineering</a></li>
	                <li id="lD_menu" class="menuitem"><a href="#lD" data-toggle="tab">Chemical Engineering</a></li>
	                <li id="lE_menu" class="menuitem"><a href="#lE" data-toggle="tab">Electrical Engineering</a></li>
	                <li id="lH_menu" class="menuitem"><a href="#lH" data-toggle="tab">Physical Sciences</a></li>
	                <li id="lI_menu" class="menuitem"><a href="#lI" data-toggle="tab">Mechanical Engineering</a></li>
	                <li id="lJ_menu" class="menuitem"><a href="#lJ" data-toggle="tab">Chemical Sciences</a></li>
	            </ul>
			<div class="tab-content">
			    
			    <div class="tab-pane active" id="lA">
							
								<ul align="center" class="thumbnails">
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/crypto.jpg" alt="">
									      <h5><a href="experiment_cse/cryptography-main.html" text-decoration="none">Cryptography</a></h5>
									      <p></p>
									    </div>
									  </li>
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/ds.jpg" alt="">
									      <h5><a href="experiment_cse/datastructures.html" text-decoration="none">Data Structures</a></h5>
									      <p></p>
									    </div>
									  </li>
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/programming.jpg" alt="">
									      <h5><a href="experiment_cse/popl.html" text-decoration="none">Programming Languages</a></h5>
									      <p></p>
									    </div>
									  </li>

									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/graphics.jpg" alt="">
									      <h5><a href="experiment_cse/computerprogramming.html" text-decoration="none">Computer Graphics</a></h5>
									      <p></p>
									    </div>
									  </li>
									

									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/mobilerobotics.jpg" alt="">
									      <h5><a href="experiment_cse/mobilerobotics.html" text-decoration="none">Mobile Robotics</a></h5>
									      <p></p>
									    </div>
									  </li>
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/software.jpg" alt="">
									      <h5><a href="experiment_cse/softwareeng.html" text-decoration="none">Software Engineering</a></h5>
									      <p></p>
									    </div>
									  </li>
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/system.jpg" alt="">
									      <h5><a href="experiment_cse/systemsandsoftware.html" text-decoration="none">Systems and Software</a></h5>
									      <p></p>
									    </div>
									  </li>
									  </ul>
			    </div> <!-- ==== div class="tab-pane active" ==== -->
			    <div class="tab-pane" id="lB">
			                  <ul align="center" class="thumbnails">
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_ece/bec.html" text-decoration="none">Basic Electronics Circuits</a></h5>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_ece/ssp.html" text-decoration="none">Speech Signal Processing</a></h5>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_ece/mobilerobotics.html" text-decoration="none">Mobile Robotics</a></h5>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_ece/ehd.html" text-decoration="none">Ebedded Hardware Design</a></h5>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_ece/vlsi.html" text-decoration="none">VLSI</a></h5>
								      <p></p>
								    </div>
								  </li>
								 
								</ul>

			    </div> <!-- ==== div class="tab-pane active" ==== -->
			    <div class="tab-pane" id="lC">
			                  <ul align="center" class="thumbnails">
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_civil/basicstructure.html">Basic Structural engineering lab</a></h5>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_civil/geotechnical.html">Geotechnical engineering lab</a></h5>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_civil/medicalsignal.html">Medical signal and image processing</a></h5>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_civil/softcomputingtools.html">Soft Computing tools in engineering</a></h5>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_civil/soilmechanics.html">Soil Mechanics Lab</a></h5>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_civil/surveying.html">Surveying Lab</a></h5>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_civil/trafficeng.html">Traffic Engineering</a></h5>
								      <p></p>
								    </div>
								  </li>
								   <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_civil/virtualsmart.html">Virtual Smart Structures and dynamic lab</a></h5>
								      <p></p>
								    </div>
								  </li>
																 
								</ul>
			    </div>
			    <div class="tab-pane" id="lD">
			                  <ul align="center" class="thumbnails">
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
									      <h5><a href="experiment_chemicaleng/hydrocarbon.html" text-decoration="none">Hydrocarbon Eng.</a></h5>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
									      <h5><a href="experiment_chemicaleng/heattransfer.html" text-decoration="none">Heat Transfer</a></h5>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
									      <h5><a href="experiment_chemicaleng/distillation.html" text-decoration="none">Distillation</a></h5>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
									      <h5><a href="experiment_chemicaleng/fluiddynamics.html" text-decoration="none">Fluid Dynamics</a></h5>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
									      <h5><a href="experiment_chemicaleng/biochemical.html" text-decoration="none">Bio Chemical Eng.</a></h5>
								      <p></p>
								    </div>
								  </li>
								
								</ul>
			    </div>
			    <div class="tab-pane" id="lE">
								<ul align="center" class="thumbnails">
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/comp.gif" alt="">
									      <h5><a href="experiment_electrical/digitalcircuits.html" text-decoration="none">Digital Circuits</a></h5>
									      <p></p>
									    </div>
									  </li>
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/comp.gif" alt="">
									      <h5><a href="experiment_electrical/power_electronics.html" text-decoration="none">Power Electronics</a></h5>
									      <p></p>
									    </div>
									  </li>
									  </li>
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/comp.gif" alt="">
									      <h5><a href="experiment_electrical/fluidmachinery.html" text-decoration="none">Fluid Mechanics and Machinery</a></h5>
									      <p></p>
									    </div>
									  </li>
									  </li>
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/comp.gif" alt="">
									      <h5><a href="experiment_electrical/electro_magnetic.html" text-decoration="none">Electro Magnetic fields</a></h5>
									      <p></p>
									    </div>
									  </li>
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/comp.gif" alt="">
									      <h5><a href="experiment_electrical/control_eng.html" text-decoration="none">Control Engineering</a></h5>
									      <p></p>
									    </div>
									  </li>
								</ul>	  

			    </div>
				            
				<div class="tab-pane" id="lH">
			                  <ul align="center" class="thumbnails">
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_physics/harmonicandwave.html">Harmonic Motion and waves lab</a></h5>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_physics/laseroptics.html.html">Laser Optics Virtual lab</a></h5>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_physics/solidstate.html">Solid State Physics Virtual Lab</a></h5>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_physics/nonlinear.html">Non-Linear Dynamics</a></h5>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_physics/magneticmaterials.html">Virtual lab for magnetics material Response</a></h5>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_physics/virtualheatandtherm.html">Virtual Heat and thermodynamics Lab</a></h5>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_physics/opticaldevicecharacter.html">Optical Device Characterization</a></h5>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h5><a href="experiment_physics/virtualoptics.html">Virtual Optics Lab</a></h5>
								    </div>
								  </li>
				</div>
				<div class="tab-pane" id="lI">
								<ul align="center" class="thumbnails">
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/computer.jpeg" alt="">
									      <h5><a href="experiment_mechanical/vibration_acoustics.html" text-decoration="none">Vibrations and Acoustics</a></h5>
									      <p></p>
									    </div>
									  </li>
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/computer.jpeg" alt="">
									      <h5><a href="experiment_mechanical/mine_automation.html" text-decoration="none">Mine Automation and virtual reality</a></h5>
									      <p></p>
									    </div>
									  </li>
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/computer.jpeg" alt="">
									      <h5><a href="experiment_mechanical/laserflow.html" text-decoration="none">Laser based Flow diagnostics</a></h5>
									      <p></p>
									    </div>
									  </li>
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/computer.jpeg" alt="">
									      <h5><a href="experiment_mechanical/faultdetection.html" text-decoration="none">Model Based Fault Detection</a></h5>
									      <p></p>
									    </div>
									  </li>
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/computer.jpeg" alt="">
									      <h5><a href="experiment_mechanical/mechatronics.html" text-decoration="none">Mechatronics</a></h5>
									      <p></p>
									    </div>
									  </li>
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/computer.jpeg" alt="">
									      <h5><a href="experiment_mechanical/micromachining.html" text-decoration="none">Micro Machining</a></h5>
									      <p></p>
									    </div>
									  </li>
								</ul>	  
				</div>
				<div class="tab-pane" id="lJ">
			                  <ul align="center" class="thumbnails">
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
									      <h5><a href="experiment_chemicalscience/hydrocarbon.html" text-decoration="none">Hydrocarbon Eng.</a></h5>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
									      <h5><a href="experiment_chemicalscience/heattransfer.html" text-decoration="none">Heat Transfer</a></h5>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
									      <h5><a href="experiment_chemicalscience/distillation.html" text-decoration="none">Distillation</a></h5>
								      <p></p>
								   </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
									      <h5><a href="experiment_chemicalscience/fluiddynamics.html" text-decoration="none">Fluid Dynamics</a></h5>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
									      <h5><a href="experiment_chemicalscience/biochemical.html" text-decoration="none">Bio Chemical Eng.</a></h5>
								      <p></p>
								    </div>
								  </li>
								
								</ul>
				</div>
			              
			</div>
	    </div>
    </div>
	</div>
	<br/>
	<div id="push"></div>
	<br/>
	<br/>
</br>

	<!-- Footer
	================================================== -->
	<div id="footer">
	<div class="container" style="width:65%">
	<div class="row">
	<div class="span3">
	Follow us on
	<a href="http://www.facebook.com">Facebook</a>,
	<a href="https://twitter.com">Twitter</a>, and 
	<a href="https://plus.google.com">Google+</a><br>

	<div id="pi">
	<marquee direction="left" scrolldelay="0">
	<img Title="IIT Bombay" src="img/pi/ib.jpg"/>
	<img Title="Dayalbagh" src="img/pi/dei.jpg"/>
	<img Title="IIIT-Hyd" src="img/pi/iiit.jpg"/>
	<img Title="Amrita University" src="img/pi/au.jpg"/>
	<img Title="IIT Delhi" src="img/pi/id.gif"/>
	<img Title="IIT Guwahati" src="img/pi/ig.png"/>
	<img Title="IIT Kanpur" src="img/pi/ika.png"/>
	<img Title="IIt Kharagpur" src="img/pi/ikh.gif"/>
	<img Title="IIT Madras" src="img/pi/im.gif"/>
	<img Title="IIT Roorkee" src="img/pi/ir.gif"/>
	<img Title="NIT Surathkal" src="img/pi/nk.jpg"/>
	<img Title="COE Pune" src="img/pi/pune.jpg"/>
	</marquee>
	</div>

	</div>
	<div class="span2a">

	<h6 class="footer-h">Information</h6>
	<a href="/how-it-works" id="how-it-works-footer-link">How It Works</a>
	<br>
	<a href="/faq">Help and FAQs</a>
	<br>
	<a href="/feedback/signup">Feedback</a>

	</div>
	<div class="span2a">

	<h6 class="footer-h">Community</h6>
	<a href="#">Blog</a>
	<br>
	<a href="#">Meetups</a>
	<br>
	<a href="#">News &amp; Media</a>

	</div>
	<div class="span2a">

	<h6 class="footer-h">Virtual Labs</h6>
	<a href="/us">About</a>
	<br>
	<a href="/jobs">Jobs</a>
	<br>
	<a href="/contact">Contact Us</a>
	</div>
	</div>
	</div>
	</div>






    <!-- Scripts before body ends
    ================================================== -->
	<script src="http://code.jquery.com/jquery-1.9.0.min.js"> </script>
	<script src="js/bootstrap.js"> </script>
 </body>
	 <script>
	var heeloo = getUrlVars()["vlab"];
	var div_under_consideration = document.getElementById(heeloo);
	$("div.tab-pane.active").attr("class","tab-pane");
	$(div_under_consideration).attr("class","tab-pane active");
	$("li.menuitem").attr("class","");
	$("li#"+heeloo+"_menu").attr("class","active");
	function getUrlVars() {
		    		var vars = {};
		        	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
					        vars[key] = value;
						    });
			    	return vars;
			}

	 </script>


     <!-- Body Ends here
    ================================================== -->	
</html>
