<!DOCTYPE html>
<html>
 <head>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta charsetr="etf-8">
	 <link href="http://fonts.googleapis.com/css?family=Oleo+Script:400" rel="stylesheet" type="text/css">
	 <title>Virtual Labs</title>
	 <link rel="stylesheet" href="../css/bootstrap.css">
	 <link rel="stylesheet" href="../css/bootstrap-responsive.css">
	 <link rel="stylesheet" href="../css/override-style.css">
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	 <script src="../js/bootstrap.min.js"></script>
	 <script src="../js/bootstrap-modal.js"></script>
	 <script src="../js/bootstrap-modalmanager.js"></script> 
<style type="text/css">
body{
background-color: #6699cc;
}
</style>


 </head>
 <body>
    <div id="wrap">
    	<!-- Navbar ================================================== -->    
	    <?php include '../header.php'; ?>
<!-- =====================================================================
	==========================div id="WRAP" ends here======================= -->

<!-- =====================================================================
===============================BREADCRUMBS================================
========================================================================== -->


   	<div class="container-fluid">
<p><strong>Labs by Dayalbagh University </strong></p>
   	   	<div class="tabbable tabs-left">
 	
				<ul class="nav nav-tabs">
	                <li id="lJ_menu" class="active menuitem"><a href="#lJ" data-toggle="tab">Chemical Sciences</a></li>
	                <li id="lE_menu" class="menuitem"><a href="#lE" data-toggle="tab">Electrical Engineering</a></li>
	                <li  id="lB_menu" class="menuitem"><a href="#lB" data-toggle="tab">Electronics Engineering</a></li>
	                <li id="lI_menu" class="menuitem"><a href="#lI" data-toggle="tab">Mechanical Engineering</a></li>
	            </ul>
			<div class="tab-content">
			    
			    <div class="tab-pane" id="lB">
			                  <ul align="center" class="thumbnails">
<li class="span2">
<div class="thumbnail">
<img src="../img/crypto.jpg" alt="">
<h5><a href="http://220.227.100.58/" text-decoration="none">Analytics Lab</a></h5>
</div>
</li>
<li class="span2">
<div class="thumbnail">
<a href="http://180.149.53.48/vlab/"><img src="../img/Simulation-of-Control-of-Magnetic-Levitation-System.png" alt=""></a>
<h5><a href="http://180.149.53.48/vlab/" text-decoration="none">Virtual Chemistry Lab</a></h5>
</div>
</li>
 
								</ul>
			    </div>
			    <div class="tab-pane" id="lE">
								<ul align="center" class="thumbnails">
<li class="span2">
<div class="thumbnail">
<a href="http://www.vpl-dayalbagh.in/"><img src="../img/Virtual-Power-Lab.png" alt=""></a>
<h5><a href="http://www.vpl-dayalbagh.in/" text-decoration="none">Virtual Power Lab</a></h5>
</div>
</li>

								</ul>	  

			    </div>
				<div class="tab-pane" id="lI">
								<ul align="center" class="thumbnails">
<li class="span2">
<div class="thumbnail">
<a href="http://websupplements.net/projects/virtual_labs/"><img src="../img/mobile-robotics.png" alt=""></a>
<h5><a href="http://websupplements.net/projects/virtual_labs/" text-decoration="none"> Virtual Microwave Laboratory</a></h5>
</div>
</li>

								</ul>	  
				</div>
				<div class="tab-pane active" id="lJ">
			                  <ul align="center" class="thumbnails">
							<li class="span2">
<div class="thumbnail">
<a href="http://14.139.245.214/mfvlab/"><img src="../img/mechatronics.png" alt=""></a>
<h5><a href="http://14.139.245.214/mfvlab/" text-decoration="none">Metal Forming Lab</a></h5>
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
	<?php include '../footer.php'; ?>






    <!-- Scripts before body ends
    ================================================== -->
	<script src="http://code.jquery.com/jquery-1.9.0.min.js"> </script>
	<script src="js/bootstrap.js"> </script>
 </body>
	 <script>
/*	var heeloo = getUrlVars()["vlab"];
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
*/
	 </script>


     <!-- Body Ends here
    ================================================== -->	
</html>
