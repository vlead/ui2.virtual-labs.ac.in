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
<p><strong>Labs by NITK-Surathkal </strong></p>
   	   	<div class="tabbable tabs-left">
 	
				<ul class="nav nav-tabs">
	                <li id="lD_menu" class="active menuitem"><a href="#lD" data-toggle="tab">Chemical Engineering</a></li>
	                <li id="lC_menu" class="menuitem"><a href="#lC" data-toggle="tab">Civil Engineering</a></li>
	                <li id="lE_menu" class="menuitem"><a href="#lE" data-toggle="tab">Electrical Engineering</a></li>
	                <li  id="lB_menu" class="menuitem"><a href="#lB" data-toggle="tab">Electronics Engineering</a></li>
	                <li id="lI_menu" class="menuitem"><a href="#lI" data-toggle="tab">Mechanical Engineering</a></li>
	            </ul>
			<div class="tab-content">
			    
			    <div class="tab-pane" id="lB">
			                  <ul align="center" class="thumbnails">
<li class="span2">
<div class="thumbnail">
<a href="http://solve.nitk.ac.in/"><img src="../img/vlsi.png" alt=""></a>
<h5><a href="http://solve.nitk.ac.in/" text-decoration="none"> Advanced Communication</a></h5>
</div>
</li>

								</ul>

			    </div> <!-- ==== div class="tab-pane active" ==== -->
			    <div class="tab-pane" id="lC">
			                  <ul align="center" class="thumbnails">
<li class="span2">
<div class="thumbnail">
<a href="http://solve.nitk.ac.in/index.php?option=com_content&view=section&id=14&Itemid=77"><img src="../img/Strength-of-Materials-and-fluid-Mechanics.png" alt=""></a>
<h5><a href="http://solve.nitk.ac.in/index.php?option=com_content&view=section&id=14&Itemid=77"> Strength of Materials and fluid Mechanics</a></h5>
</div>
</li>

								</ul>
			    </div>
			    <div class="tab-pane active" id="lD">
			                  <ul align="center" class="thumbnails">
<li class="span2">
<div class="thumbnail">
<a href="http://solve.nitk.ac.in/index.php?option=com_content&view=category&id=61&Itemid=98"><img src="../img/Physical-Chemistry.png" alt=""></a>
<h5><a href="http://solve.nitk.ac.in/index.php?option=com_content&view=category&id=61&Itemid=98" text-decoration="none"> Process control,reaction engineering and unit operations lab</a></h5>
</div>

								</ul>
			    </div>
			    <div class="tab-pane" id="lE">
								<ul align="center" class="thumbnails">
<li class="span2">
<div class="thumbnail">
<a href="http://solve.nitk.ac.in/"><img src="../img/PLC.png" alt=""></a>
<h5><a href="http://solve.nitk.ac.in/" text-decoration="none"> Industrial Electric Drives And Substation Automation</a></h5>
</div>
</li>

								</ul>	  

			    </div>
				            
				<div class="tab-pane" id="lI">
								<ul align="center" class="thumbnails">
<li class="span2">
<div class="thumbnail">
<a href="http://solve.nitk.ac.in/index.php?option=com_content&view=article&id=150&Itemid=97"><img src="../img/mechatronics.png" alt=""></a>
<h5><a href="http://solve.nitk.ac.in/index.php?option=com_content&view=article&id=150&Itemid=97" text-decoration="none"></a>Mechanics of Machine Lab</h5>
</div>
</li>
<li class="span2">
<div class="thumbnail">
<a href="http://solve.nitk.ac.in/index.php?option=com_content&view=article&id=149&Itemid=96"><img src="../img/mechatronics.png" alt=""></a>
<h5><a href="http://solve.nitk.ac.in/index.php?option=com_content&view=article&id=149&Itemid=96" text-decoration="none">Machine Dynamics and Vibration Lab</a></h5>
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
