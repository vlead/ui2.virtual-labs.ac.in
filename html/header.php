<html>
  <script>
var e = document.createElement('#submit');
    function sendmymail(){
    var contactMessage = $("#contactMessage").val();
    var contactSubject = "Mail From : ".concat($("#contactName").val());
    var contactEmail = $("#contactEmail").val();
    $.ajax({
    type: "POST",
    url: "lib/test.php",
    data: { message: contactMessage, subject: contactSubject, email: contactEmail }

})
.done(function()
{
alert("done");
});

    }

  </script>
 <div class="navbar navbar-fixed-top">
 <div class="navbar-inner">
 <div class="container"  style="
    position: relative;
    z-index: 1000;
">
 <a href="/" class="brand">Virtual Labs</a>
 <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button> 
 <div class="nav-collapse collapse">
 <ul class="nav">
 <li> <a href="/">Home</a> </li>

 <li> <a href="http://ui2.virtual-labs.ac.in/about.php">About</a> </li>

 <li class="dropdown">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Labs<b class="caret"></b></a>
 <ul class="dropdown-menu">
 <li><a href="http://ui2.virtual-labs.ac.in/courses.php?vlab=lF">Biotechnical and Biomedical Engineering</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/courses.php?vlab=lD">Chemical Engineering</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/courses.php?vlab=lJ">Chemical Sciences</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/courses.php?vlab=lC">Civil Engineering</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/courses.php?vlab=lA">Computer Science</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/courses.php?vlab=lE">Electrical Engineering</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/courses.php?vlab=lB">Electronics Engineering</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/courses.php?vlab=lI">Mechanical Engineering</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/courses.php?vlab=lH">Physical Sciences</a></li>
 </ul>
 </li>

 <li class="dropdown">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Developers<b class="caret"></b></a>
 <ul class="dropdown-menu">
 <li><a href="http://ui2.virtual-labs.ac.in/institute_labs/iitb.php" target="_blank">IIT Bombay</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/institute_labs/iitd.php" target="_blank">IIT Delhi</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/institute_labs/iitk.php" target="_blank">IIT Kanpur</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/institute_labs/iitm.php" target="_blank">IIT Madras</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/institute_labs/iitkgp.php" target="_blank">IIT Kharagpur</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/institute_labs/iitg.php" target="_blank">IIT Guwahati</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/institute_labs/iitr.php" target="_blank">IIT Roorkee</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/institute_labs/iiith.php" target="_blank">IIIT Hyderabad</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/institute_labs/nitk.php" target="_blank">NIT Karnataka</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/institute_labs/amrita.php" target="_blank">Amrita University</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/institute_labs/coep.php/" target="_blank">COE Pune</a></li>
 <li><a href="http://ui2.virtual-labs.ac.in/institute_labs/dayalbagh.php" target="_blank">Dayalbagh University</a></li>
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
 <input id="contactName" type="text" name="name" class="input-xlarge"><br>
 <label class="label" for="email">Your E-mail</label><br>
 <input id="contactEmail" type="email" name="email" class="input-xlarge"><br>
 <label class="label" for="message">Enter a Message</label><br>
 <textarea id="contactMessage" name="message" class="input-xlarge"></textarea>
 </form>
 </div>
 <div class="modal-footer">
 <input class="btn btn-success" onclick="sendmymail()" type="submit" value="Send" id="submit">
 <a href="#" class="btn" data-dismiss="modal">Close</a>
 </div>
 </div>



 </ul><!-- div class="nav" ends here-->
 </div><!-- div class="nav-collapse collapse" ends here -->
 </div><!-- div class=container ends here -->
 </div>  <!-- div class=navbar-inner ends here -->
 </div> <!-- div class="navbar navbar-fixed-top" ends here -->
</html>
