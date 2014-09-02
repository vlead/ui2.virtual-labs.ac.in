<!DOCTYPE html>
<html>
 <head>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta charsetr="etf-8">
	 <title>Virtual Labs</title>
	 <link rel="stylesheet" href="css/bootstrap.css">
	 <link rel="stylesheet" href="css/bootstrap-responsive.css">
	 <link rel="stylesheet" href="css/override-style.css">
	 <script src="jquery-2.0.1.min.js"></script> 
	 <script src="js/bootstrap.min.js"></script>  
	 <script src="js/bootstrap-modal.js"></script>
	 <script src="js/bootstrap-modalmanager.js"></script>  

	<style type="text/css">
		.well { background: #fff; text-align: center; }
		.modal { text-align: left; }


/* GLOBAL STYLES
   -------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
/*	padding-bottom: 40px;*/
color: #5a5a5a;
}


/* CUSTOMIZE THE CAROUSEL
   -------------------------------------------------- */

/* Carousel base class */
.carousel {
	margin-bottom: 0px;
}

.carousel .container {
position: relative;
	  z-index: 9;
}

.carousel-control {
height: 20px;
	margin-top: 0;
	font-size: 40px;
	text-shadow: 0 1px 1px rgba(0,0,0,.4);
	background-color: transparent;
border: 0;
	z-index: 10;
}

.carousel .item {
height: 610px;
}
.carousel img {
position: absolute;
top: 0;
left: 0;
      min-width: 100%;
height: 900px;
} 

.carousel-caption {
	background-color: rgba(139, 139, 139, 0.41);
position: static;
	  max-width: 550px;
padding: 0 20px;
	 margin-top: 142px;
}
.carousel-caption h1,
	.carousel-caption .lead {
margin: 0;
	line-height: 1.25;
color: black;
       text-shadow: 0 1px 1px rgba(0,0,0,.4);
	}
.carousel-caption .btn {
	margin-top: 10px;
}

/* MARKETING CONTENT
   -------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .span4 {
	text-align: center;
}
.marketing h2 {
	font-weight: normal;
}
.marketing .span4 p {
	margin-left: 10px;
	margin-right: 10px;
}

/* Featurettes
   ------------------------- */

.featurette-divider {
margin: 80px 0; /* Space out the Bootstrap <hr> more */
}
.featurette {
	padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
overflow: hidden; /* Vertically center images part 2: clear their floats. */
}
.featurette-image {
	margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
}

/* Give some space on the sides of the floated elements so text doesn't run right into it. */
.featurette-image.pull-left {
	margin-right: 40px;
}
.featurette-image.pull-right {
	margin-left: 40px;
}

/* Thin out the marketing headings */
.featurette-heading {
	font-size: 50px;
	font-weight: 300;
	line-height: 1;
	letter-spacing: -1px;
}

.carousel-caption p {
padding: 3px;
}

/* RESPONSIVE CSS
   -------------------------------------------------- */

@media (max-width: 979px and min-width: 767px) {

	.container.navbar-wrapper {
		margin-bottom: 0;
width: auto;
	}
	.navbar-inner {
		border-radius: 0;
margin: -20px 0;
	}

	.carousel .item {
height: 580px;
	}
	.carousel img {
width: auto;
height: 5870px;
	}

	.featurette {
height: auto;
padding: 0;
	}
	.featurette-image.pull-left,
		.featurette-image.pull-right {
display: block;
float: none;
       max-width: 40%;
margin: 0 auto 20px;
		}
}


@media (max-width: 767px) {

	.navbar-inner {
margin: -20px;
	}

	.carousel {
		margin-left: -20px;
		margin-right: -20px;
	}
	.carousel .container {

	}
	.carousel .item {
height: 520px;
	}
	.carousel img {
height: 520px;
	}
	.carousel-caption {
width: 65%;
padding: 0 70px;
	 margin-top: 100px;
	}
	.carousel-caption h1 {
		font-size: 30px;
	}
	.carousel-caption .lead,
		.carousel-caption .btn {
			font-size: 18px;
		}

	.marketing .span4 + .span4 {
		margin-top: 40px;
	}

	.featurette-heading {
		font-size: 30px;
	}
	.featurette .lead {
		font-size: 18px;
		line-height: 1.5;
	}

}
</style>






 </head>
 <body>

 <div id="wrap">
<?php include 'header.php'; ?>
 <!-- Navbar ================================================== -->    
 <!-- Carousel
 ================================================== -->
 <div id="myCarousel" class="carousel slide" >
 <div class="carousel-inner">
 <div class="item">
 <img src="img/cs_online.jpg" alt="">
 <div class="container">
 <div class="carousel-caption">
 <h1>At Virtual Labs, we innovate</h1>
 <p class="lead">we are engaged in creating and innovating back at our offices, its more like a garage.</p>
 <p> <a href="form.html" class="btn btn-primary btn-large"><i class="icon-th-large icon-white"></i>SignUp</a> </p>
 </div>
 </div>
 </div>
 <div class="item">
 <img src="img/electrical.jpg" alt="">
 <div class="container">
 <div class="carousel-caption">
 <h1>Want to collaborate?</h1>
 <p class="lead">Our doors are always open for like minded people who believe in creating new things and spread happiness.</p>
 <p> <a href="about.html" class="btn btn-primary btn-large"><i class="icon-th-large icon-white"></i>About Us</a>  </p>
 </div>
 </div>
 </div>
 <div class="item active">
 <img src="img/experimentgirl.jpg" alt="">
 <div class="container">
 <div class="carousel-caption">
 <h1>Perform experiments</h1>
<h1> from anywhere, for free</h1>
 <p class="lead">Virtual Labs takes you on a journey of online labs</p>
 <p> <a href="courses.php?vlab=lA" class="btn btn-primary btn-large"><i class="icon-th-large icon-white"></i>   All Labs</a> </p>
 </div>
 </div>
 </div>
 </div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev">&#60;</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">&#62;</a>
 </div><!-- /.carousel -->
	<!-- CSS3 Buttons
    ================================================== -->
<!--		<div class="container-fluid" align="center">
		    <div class="row-fluid">
			                <ul id="menu-css">  
						        <li><a href="#">Computer Science</a></li>  
						        <li><a href="#">Electrical Engineering</a></li>  
						        <li><a href="#">Electronics Engineering</a></li>  
						        <li><a href="#">Civil Engineering</a></li>  
						    </ul>
			    			<ul id="menu-css">  
			    			    <li><a href="#">Chemical Sciences</a></li>  
						        <li><a href="#">Industrial Production Engineering</a></li>  
						        <li><a href="#">Mechanical Engineering</a></li>  
						        <li><a href="#">Physics</a></li>  
						    </ul>
		    </div>    
		</div>  -->
    </div> 
    </br>
	<div id="push"></div><br/><br/>
 <!-- =====================================================================
	==========================div id="WRAP" ends here======================= -->
    <!-- Footer
    ================================================== -->
    
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
<script type="text/javascript">
  $(document).ready(function() {
		      $('.carousel .slide').carousel({
			            interval: 10;
				        })
		        });
</script>



     <!-- Body Ends here
    ================================================== -->	
</html>
