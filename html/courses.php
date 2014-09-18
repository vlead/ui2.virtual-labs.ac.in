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
<style type="text/css">
body{

}
    .input-append button.add-on {
        height: inherit !important;
    }

</style>

 </head>
 <body>
    <div id="wrap">
    	<!-- Navbar ================================================== -->    
	    <?php include 'header.php'; ?>
<!-- =====================================================================
	==========================div id="WRAP" ends here======================= -->

<!-- =====================================================================
===============================BREADCRUMBS================================
========================================================================== -->


   	<div class="container-fluid" >
   	   	<div class="tabbable tabs-left" >
 	
				<ul class="nav nav-tabs" >
	                <li id="lF_menu" class="menuitem"><a href="#lF" data-toggle="tab">Biotechnology and Biomedical Engineering</a></li>
	                <li id="lD_menu" class="menuitem"><a href="#lD" data-toggle="tab">Chemical Engineering</a></li>
	                <li id="lJ_menu" class="menuitem"><a href="#lJ" data-toggle="tab">Chemical Sciences</a></li>
	                <li id="lC_menu" class="menuitem"><a href="#lC" data-toggle="tab">Civil Engineering</a></li>
	                <li id="lA_menu" class="active menuitem"><a href="#lA" data-toggle="tab">Computer Science</a></li>
	                <li id="lE_menu" class="menuitem"><a href="#lE" data-toggle="tab">Electrical Engineering</a></li>
	                <li  id="lB_menu" class="menuitem"><a href="#lB" data-toggle="tab">Electronics Engineering</a></li>
	                <li id="lI_menu" class="menuitem"><a href="#lI" data-toggle="tab">Mechanical Engineering</a></li>
	                <li id="lH_menu" class="menuitem"><a href="#lH" data-toggle="tab">Physical Sciences</a></li>
	            </ul>
			<div class="tab-content">
			    
			    <div class="tab-pane  fade in active" id="lA">
							 <?php include 'labs/cse.php'; ?>
			    </div> <!-- ==== div class="tab-pane active" ==== -->
			    <div class="tab-pane fade" id="lB">
							 <?php include 'labs/electronics.php'; ?>

			    </div> <!-- ==== div class="tab-pane active" ==== -->
			    <div class="tab-pane fade" id="lC">
							 <?php include 'labs/civil.php'; ?>

			    </div>
			    <div class="tab-pane fade" id="lD">
							 <?php include 'labs/chemicaleng.php'; ?>

			    </div>
			    <div class="tab-pane fade" id="lE">
							 <?php include 'labs/electrical.php'; ?>

			    </div>
				            
			    <div class="tab-pane fade" id="lH">
							 <?php include 'labs/physical.php'; ?>

			    </div>
			    <div class="tab-pane fade" id="lI">
							 <?php include 'labs/mechanical.php'; ?>

			    </div>
			    <div class="tab-pane fade" id="lJ">
							 <?php include 'labs/chemicalsci.php'; ?>

			    </div>
			    <div class="tab-pane fade" id="lF">
							 <?php include 'labs/biotech.php'; ?>

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
	<?php include 'footer.php'; ?>






    <!-- Scripts before body ends
    ================================================== -->
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
