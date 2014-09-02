<!DOCTYPE html>
<html>
	<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta charsetr="etf-8">
	 <title>Virtual Labs</title>
	 <link href="http://fonts.googleapis.com/css?family=Oleo+Script:400" rel="stylesheet" type="text/css">
	 <link rel="stylesheet" href="../../css/bootstrap.css">
	 <link rel="stylesheet" href="../../css/bootstrap-responsive.css">
	 <link rel="stylesheet" href="../../css/override-style.css">
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	 <script src="../../js/bootstrap.min.js"></script>
	 <script src="../../js/bootstrap-modal.js"></script>
	 <script src="../../js/bootstrap-modalmanager.js"></script>

	 <style type="text/css">
body{
background-color: #6699cc;
}
	 </style>  

	</head>

	<body>
	
	<div id="wrap">
	<?php include '../../header.php'; ?>	


 <div class="container-fluid">
   	   	<div class="tabbable tabs-left">
	 			<ul class="nav nav-tabs" style = "position:relative;">
	                <li id="lA_menu" class="active menuitem"><a href="#lA" data-toggle="tab">Breaking Shift Cipher</a></li>
	                <li id="lB_menu" class="menuitem"><a href="#lB" data-toggle="tab">Breaking Substitution Cipher</a></li>
	                <li id="lC_menu" class="menuitem"><a href="#lC" data-toggle="tab">Vernom and Perfect Secrecy</a></li>
	                <li id="lD_menu" class="menuitem"><a href="#lD" data-toggle="tab">Message Authentication Course</a></li>
	                <li id="lE_menu" class="mwnuitem"><a href="#lE" data-toggle="tab">Cryptographic Hash Functions</a></li>
	                <li id="lF_menu" class="menuitem"><a href="#lF" data-toggle="tab">From DES to 3-DES</a></li>
	                <li id="lG_menu" class="menuitem"><a href="#lG" data-toggle="tab">AES and Modes of Operation</a></li>
	                <li id="lH_menu" class="menuitem"><a href="#lH" data-toggle="tab">Diffie-Hellman Key Establishment</a></li>
	                <li id="lI_menu" class="menuitem"><a href="#lI" data-toggle="tab">Public-Key Cryptosystems (PKCSv1.5)</a></li>
	                <li id="lJ_menu" class="menuitem"><a href="#lJ" data-toggle="tab">Digital Signatures Scheme</a></li>
	            </ul>
			<div class="tab-content">
			    
			    <div class="tab-pane active" id="lA">

			    	<div class="tabbable"> <!-- Only required for left/right tabs -->
			    		<ul class="nav nav-tabs">
			    			<li class="active"><a href="#tab1_lA" data-toggle="tab">Introduction</a></li>	
			    			<li><a href="#tab2_lA" data-toggle="tab">Theory</a></li>
			    			<li><a href="#tab3_lA" data-toggle="tab">Objective</a></li>
			    			<li><a href="#tab4_lA" data-toggle="tab">Perform</a></li>
			    			<li><a href="#tab5_lA" data-toggle="tab">Manual</a></li>
			    			<li><a href="#tab6_lA" data-toggle="tab">Quiz</a></li>
			    		</ul>
					<?php include 'exp1.php'; ?>	
			    	</div>
			    </div>         
			    <div class="tab-pane" id="lB">

			    	<div class="tabbable"> <!-- Only required for left/right tabs -->
			    		<ul class="nav nav-tabs">
			    			<li class="active"><a href="#tab1_lB" data-toggle="tab">Introduction</a></li>
			    			<li><a href="#tab2_lB" data-toggle="tab">Theory</a></li>
			    			<li><a href="#tab3_lB" data-toggle="tab">Objective</a></li>
			    			<li><a href="#tab4_lB" data-toggle="tab">Perform</a></li>
			    			<li><a href="#tab5_lB" data-toggle="tab">Manual</a></li>
			    			<li><a href="#tab6_lB" data-toggle="tab">Quiz</a></li>
			    		</ul>
					<?php include 'exp2.php'; ?>	
			    	</div>
			    </div>         
			    <div class="tab-pane" id="lC">
			    	<div class="tabbable"> <!-- Only required for left/right tabs -->
			    		<ul class="nav nav-tabs">
			    			<li class="active"><a href="#tab1_lC" data-toggle="tab">Introduction</a></li>
			    			<li><a href="#tab2_lC" data-toggle="tab">Theory</a></li>
			    			<li><a href="#tab3_lC" data-toggle="tab">Objective</a></li>
			    			<li><a href="#tab4_lC" data-toggle="tab">Perform</a></li>
			    			<li><a href="#tab5_lC" data-toggle="tab">Manual</a></li>
			    			<li><a href="#tab6_lC" data-toggle="tab">Quiz</a></li>
			    		</ul>
					<?php include 'exp3.php'; ?>	
			    	</div>
			    </div>         
			    <div class="tab-pane" id="lD">

			    	<div class="tabbable"> <!-- Only required for left/right tabs -->
			    		<ul class="nav nav-tabs">
			    			<li class="active"><a href="#tab1_lD" data-toggle="tab">Introduction</a></li>
			    			<li><a href="#tab2_lD" data-toggle="tab">Theory</a></li>
			    			<li><a href="#tab3_lD" data-toggle="tab">Objective</a></li>
			    			<li><a href="#tab4_lD" data-toggle="tab">Perform</a></li>
			    			<li><a href="#tab5_lD" data-toggle="tab">Manual</a></li>
			    			<li><a href="#tab6_lD" data-toggle="tab">Quiz</a></li>
			    		</ul>
					<?php include 'exp4.php'; ?>	
			    	</div>
			    </div>         
			    <div class="tab-pane" id="lE">

			    	<div class="tabbable"> <!-- Only required for left/right tabs -->
			    		<ul class="nav nav-tabs">
			    			<li class="active"><a href="#tab1_lE" data-toggle="tab">Introduction</a></li>
			    			<li><a href="#tab2_lE" data-toggle="tab">Theory</a></li>
			    			<li><a href="#tab3_lE" data-toggle="tab">Objective</a></li>
			    			<li><a href="#tab4_lE" data-toggle="tab">Perform</a></li>
			    			<li><a href="#tab5_lE" data-toggle="tab">Manual</a></li>
			    			<li><a href="#tab6_lE" data-toggle="tab">Quiz</a></li>
			    		</ul>
					<?php include 'exp5.php'; ?>	
			    	</div>
			    </div>         
			    <div class="tab-pane" id="lF">

			    	<div class="tabbable"> <!-- Only required for left/right tabs -->
			    		<ul class="nav nav-tabs">
			    			<li class="active"><a href="#tab1_lF" data-toggle="tab">Introduction</a></li>
			    			<li><a href="#tab2_lF" data-toggle="tab">Theory</a></li>
			    			<li><a href="#tab3_lF" data-toggle="tab">Objective</a></li>
			    			<li><a href="#tab4_lF" data-toggle="tab">Perform</a></li>
			    			<li><a href="#tab5_lF" data-toggle="tab">Manual</a></li>
			    			<li><a href="#tab6_lF" data-toggle="tab">Quiz</a></li>
			    		</ul>
					<?php include 'exp6.php'; ?>	
			    	</div>
			    </div>         
			    <div class="tab-pane" id="lG">

			    	<div class="tabbable"> <!-- Only required for left/right tabs -->
			    		<ul class="nav nav-tabs">
			    			<li class="active"><a href="#tab1_lG" data-toggle="tab">Introduction</a></li>
			    			<li><a href="#tab2_lG" data-toggle="tab">Theory</a></li>
			    			<li><a href="#tab3_lG" data-toggle="tab">Objective</a></li>
			    			<li><a href="#tab4_lG" data-toggle="tab">Perform</a></li>
			    			<li><a href="#tab5_lG" data-toggle="tab">Manual</a></li>
			    			<li><a href="#tab6_lG" data-toggle="tab">Quiz</a></li>
			    		</ul>
					<?php include 'exp7.php'; ?>	
			    	</div>
			    </div>         
			    <div class="tab-pane" id="lH">

			    	<div class="tabbable"> <!-- Only required for left/right tabs -->
			    		<ul class="nav nav-tabs">
			    			<li class="active"><a href="#tab1_lH" data-toggle="tab">Introduction</a></li>
			    			<li><a href="#tab2_lH" data-toggle="tab">Theory</a></li>
			    			<li><a href="#tab3_lH" data-toggle="tab">Objective</a></li>
			    			<li><a href="#tab4_lH" data-toggle="tab">Perform</a></li>
			    			<li><a href="#tab5_lH" data-toggle="tab">Manual</a></li>
			    			<li><a href="#tab6_lH" data-toggle="tab">Quiz</a></li>
			    		</ul>
					<?php include 'exp8.php'; ?>	
			    	</div>
			    </div>         
			    <div class="tab-pane" id="lI">

			    	<div class="tabbable"> <!-- Only required for left/right tabs -->
			    		<ul class="nav nav-tabs">
			    			<li class="active"><a href="#tab1_lI" data-toggle="tab">Introduction</a></li>
			    			<li><a href="#tab2_lI" data-toggle="tab">Theory</a></li>
			    			<li><a href="#tab3_lI" data-toggle="tab">Objective</a></li>
			    			<li><a href="#tab4_lI" data-toggle="tab">Perform</a></li>
			    			<li><a href="#tab5_lI" data-toggle="tab">Manual</a></li>
			    			<li><a href="#tab6_lI" data-toggle="tab">Quiz</a></li>
			    		</ul>
					<?php include 'exp9.php'; ?>	
			    	</div>
			    </div>         
			    <div class="tab-pane" id="lJ">

			    	<div class="tabbable"> <!-- Only required for left/right tabs -->
			    		<ul class="nav nav-tabs">
			    			<li class="active"><a href="#tab1_lJ" data-toggle="tab">Introduction</a></li>
			    			<li><a href="#tab2_lJ" data-toggle="tab">Theory</a></li>
			    			<li><a href="#tab3_lJ" data-toggle="tab">Objective</a></li>
			    			<li><a href="#tab4_lJ" data-toggle="tab">Perform</a></li>
			    			<li><a href="#tab5_lJ" data-toggle="tab">Manual</a></li>
			    			<li><a href="#tab6_lJ" data-toggle="tab">Quiz</a></li>
			    		</ul>
					<?php include 'exp10.php'; ?>	
			    	</div>
			    </div>         
	    </div>
    </div>
    </div>

	</div>
	<div id="push"></div>
</br>
</br>
</br>
	<!-- Footer
	================================================== -->
	<?php include '../../footer.php'; ?>

	 </body>

	 <script>
	 	var heeloo = getUrlVars()["experiment"];
	 	var div_under_consideration = document.getElementById(heeloo);
/* 	   	$("li#tab1_lA").attr("class","tab-pane active");
                $("li#tab1_lB").attr("class","tab-pane active");
                $("li#tab1_lC").attr("class","tab-pane active");
                $("li#tab1_lD").attr("class","tab-pane active");
                $("li#tab1_lE").attr("class","tab-pane active");
                $("li#tab1_lF").attr("class","tab-pane active");
                $("li#tab1_lG").attr("class","tab-pane active");
                $("li#tab1_lH").attr("class","tab-pane active");*/

	 	$("div.tab-pane.active").attr("class","tab-pane");
	 	$(div_under_consideration).attr("class","tab-pane active");
	 	$("li.menuitem").attr("class","");
	 	$("li#"+heeloo+"_menu").attr("class","active");

		$("#tab1_lA").attr("class","tab-pane active");
                $("#tab1_lB").attr("class","tab-pane active");
                $("#tab1_lC").attr("class","tab-pane active");
                $("#tab1_lD").attr("class","tab-pane active");
                $("#tab1_lE").attr("class","tab-pane active");
                $("#tab1_lF").attr("class","tab-pane active");
                $("#tab1_lG").attr("class","tab-pane active");
                $("#tab1_lH").attr("class","tab-pane active");
                $("#tab1_lI").attr("class","tab-pane active");
                $("#tab1_lJ").attr("class","tab-pane active");
	 	function getUrlVars() {
			 var vars = {};
			 var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
					 vars[key] = value;
					 });
			 return vars;
		 }

</script>



</html>
