<!DOCTYPE html>
<html>
 <head>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta charsetr="etf-8">
	 <title>Virtual Labs</title>
	 <link href="http://fonts.googleapis.com/css?family=Oleo+Script:400" rel="stylesheet" type="text/css">
	 <link rel="stylesheet" href="css/bootstrap.css">
	 <link rel="stylesheet" href="css/bootstrap-responsive.css">
	 <link rel="stylesheet" href="css/override-style.css">
     <script src="jquery-2.0.1.min.js"></script> 
     <script src="js/bootstrap.min.js"></script>  
     <script src="js/bootstrap-modal.js"></script>
     <script src="js/bootstrap-modalmanager.js"></script>  
     <style>
     .nav{
     	margin-left:0px;
     }
     .tabbable{
     	width:100%;
     }
     </style>
 </head>
 <body>

    <div id="wrap">
    
  
    <!-- Navbar ================================================== -->    
     <?php include 'header.php'; ?>

<div class="container-fluid">
    <div class="row-fluid">
    <div class="span2">
    <!--Sidebar content-->
 
<p>
<img src="img/nitish.jpg" alt="dp" ></p>

    </div>
    <div class="span10" style="background-color:#354b59;
      border-style:solid;border-radius:10px; color:white;
        padding:15px;" >  
    <!--Body content-->
<p> <h3>NITISH MITTAL<button class="btn btn-primary" type="button" style="float:right;" onclick="windows.location.href=form.html"><i class="icon-th-large icon-edit"></i>&nbsp;Edit Settings</button></h3>
    NSIT New Delhi<br>
	20 yrs old<br>
	India<br>
	Email&nbsp;:&nbsp;nitishmittal94@gmail.com

</p> 
    </div>
    </div>
    </div>
   	<div class"container-fluid">
   	   	<div class="tabbable tabs-left">
 	
				<ul class="nav nav-tabs">
	                <li class="active"><a href="#lA" data-toggle="tab">Labs Subscribed</a></li>
	                <li class=""><a href="#lB" data-toggle="tab">Experiments Done</a></li>
	                <li class=""><a href="#lC" data-toggle="tab">Experiments Pending</a></li>
	                <li class=""><a href="#lD" data-toggle="tab">Reports</a></li>
			
	              
	                
	            </ul>
			<div class="tab-content">
			    
			    <div class="tab-pane active" id="lA">
			                 
			                  <h3>Courses Subscribed</h3>
			                  <p>-></p>
							
								<ul align="center" class="thumbnails">
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/graphics.jpg" alt="">
									      <h6>Computer Graphics</h6>
									      <p></p>
									    </div>
									  </li>
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/ds.jpg" alt="">
									      <h6>Data Structures</h6>
									      <p></p>
									    </div>
									  </li>
									  <li class="span2">
									    <div class="thumbnail">
									      <img src="img/software.jpg" alt="">
									      <h6>Software Engineering</h6>
									      <p></p>
									    </div>
									  </li>
									 
									 
								</ul>
			    </div> <!-- ==== div class="tab-pane active" ==== -->
			    <div class="tab-pane" id="lB">
					<h3>Experiments Done</h3>
			                  <p>-></p>
			                  <ul align="center" class="thumbnails">
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h6>computer graphics</h6>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h6>algorithms</h6>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h6>data structures</h6>
								      <p></p>
								    </div>
								  </li>
								  
								</ul>

			    </div> <!-- ==== div class="tab-pane active" ==== -->
			    <div class="tab-pane" id="lC">
						<h3>EXPERIMENTS PENDING</h3>			                  
						<p>-></p>
			                  <ul align="center" class="thumbnails">
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h6>computer graphics</h6>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h6>algorithms</h6>
								      <p></p>
								    </div>
								  </li>
								 							 
								</ul>
			    </div>
			    <div class="tab-pane" id="lD">
					<h3>REPORTS</h3>
			                  <p>-></p>
			                  <ul align="center" class="thumbnails">
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h6>computer graphics</h6>
								      <p></p>
								    </div>
								  </li>
								  <li class="span2">
								    <div class="thumbnail">
								      <img src="img/comp.gif" alt="">
								      <h6>algorithms</h6>
								      <p></p>
								    </div>
								  </li>
								 
			    </div>
			    
			              
			</div>
	    </div>
    </div>
</div>
</br>
	<div id="push"></div>

</br>

<!-- =====================================================================
	==========================div id="WRAP" ends here======================= -->
<!-- FOOTER ---------------------------------------- -->

<?php include 'footer.php'; ?>


    <!-- Scripts before body ends
    ================================================== -->
	<script src="http://code.jquery.com/jquery-1.9.0.min.js"> </script>
	<script src="js/bootstrap.js"> </script>
 </body>
     <!-- Body Ends here
    ================================================== -->	
</html>
