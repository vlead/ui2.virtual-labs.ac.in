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
<p><strong>Labs by IIT-Madras </strong></p>
   	   	<div class="tabbable tabs-left">
 	
				<ul class="nav nav-tabs">
	                <li id="lC_menu" class="active menuitem"><a href="#lC" data-toggle="tab">Civil Engineering</a></li>
	                <li id="lE_menu" class="menuitem"><a href="#lE" data-toggle="tab">Electrical Engineering</a></li>
	            </ul>
			<div class="tab-content">
			    
			    <div class="tab-pane active" id="lC">
			                  <ul align="center" class="thumbnails">
<li class="span2">
<div class="thumbnail">
<a href="http://www.vlab.co.in/ba_labs_all.php?id=7"><img src="../img/Structural-Engineering.png" alt=""></a>
<h5><a href="http://www.vlab.co.in/ba_labs_all.php?id=7"> Structural Engineering Lab</a></h5>
</div>
</li>

								</ul>
			    </div>
			    <div class="tab-pane" id="lE">
								<ul align="center" class="thumbnails">
<li class="span2">
<div class="thumbnail">
<a href="http://www.vlab.co.in/ba_labs_all.php?id=3"><img src="../img/Electrical-Machines,-Power-Electronics-&-Drives,-Power-Systems-&-Instrumentation.png" alt=""></a>
<h5><a href="http://www.vlab.co.in/ba_labs_all.php?id=3" text-decoration="none">Electrical Machines, Power Electronics & Drives, Power Systems & Instrumentation</a></h5>
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
*/			}

	 </script>


     <!-- Body Ends here
    ================================================== -->	
</html>
