<!DOCTYPE html>

<html lang="en">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux (vers 6 November 2007), see www.w3.org">
  <meta charset="utf-8">

  <title>Registration Page</title>
  <meta name="viewport" content=
  "width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content=""><!-- Le styles -->
  <link href="css/bootstrap.css" rel="stylesheet" type=
  "text/css">
  <link href="css/bootstrap-responsive.css" rel="stylesheet"
  type="text/css">
  <link href="css/override-style.css" rel="stylesheet" type=
  "text/css">
  <link href=
  "http://fonts.googleapis.com/css?family=Oleo+Script:400" rel=
  "stylesheet" type="text/css">
  <script src=
  "http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"
  type="text/javascript">
</script>
  <script src="js/bootstrap.min.js" type="text/javascript">
</script>
  <script src="js/bootstrap-modal.js" type="text/javascript">
</script>
  <script src="js/bootstrap-modalmanager.js" type=
  "text/javascript">
</script><!--    <style type="text/css">
    .well { background: #fff; text-align: center; }
    .modal { text-align: left; }
    </style> -->
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  <!-- Le fav and touch icons -->
</head>

<body>
  <div id="wrap">
    <?php include 'header.php'; ?>


    <br/>
    <br/>
    <br/>
    <div class="container">
      <div class="row">
        <div class="span8">
          <form class="form-horizontal" id="registerHere" method=
          'post' action=''>
            <fieldset>
              <legend>Registration</legend>

              <div class="control-group">
                <label class="control-label" for="input01">Full
                Name</label>

                <div class="controls">
                  <input type="text" class="input-xlarge" id=
                  "full_name" name="full_name" rel="popover"
                  data-content="Enter your first and last name."
                  data-original-title="Full Name">
                </div>
               </div>

              <div class="control-group">
                <label class="control-label" for=
                "input01">Username</label>

                <div class="controls">
                  <input type="text" class="input-xlarge" id=
                  "user_name" name="user_name" rel="popover"
                  data-content="Enter your username"
                  data-original-title="User Name">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for=
                "input01">Email</label>

                <div class="controls">
                  <input type="text" class="input-xlarge" id=
                  "user_email" name="user_email" rel="popover"
                  data-content="What’s your email address?"
                  data-original-title="Email">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for=
                "input01">Gender</label>

                <div class="controls">
                  <select name="gender" id="gender">
                    <option value="">
                      Gender
                    </option>

                    <option value="male">
                      Male
                    </option>

                    <option value="female">
                      Female
                    </option>

                    <option value="other">
                      Other
                    </option>
                  </select>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="input01">Are you
                a student or professional</label>

                <div class="controls">
                  <label class="radio"><input type="radio" name=
                  "optionsRadios" id="optionsRadios1" value=
                  "option1" checked>Student</label> <label class=
                  "radio"><input type="radio" name="optionsRadios"
                  id="optionsRadios2" value=
                  "option2">Professional</label>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="input01">College
                Name</label>

                <div class="controls">
                  <select class="span3">
                    <option>
                      Internation Institute of Information
                      Technology Hyderabad
                    </option>

                    <option>
                      Indian Institute of Information Technology
                      Mumbai
                    </option>

                    <option>
                      Indian Institute of Information Technology
                      Delhi
                    </option>

                    <option>
                      Indian Institute of Information Technology
                      Kanpur
                    </option>

                    <option>
                      Indian Institute of Information Technology
                      Madras
                    </option>

                    <option>
                      Indian Institute of Information Technology
                      Kharaghpur
                    </option>

                    <option>
                      Indian Institute of Information Technology
                      Guwahati
                    </option>

                    <option>
                      IT-BHU Varanasi
                    </option>

                    <option>
                      Indian School Of Mines Dhanbad
                    </option>

                    <option>
                      Bits Pilani-Pilani campus
                    </option>

                    <option>
                      Bits Pilani-Hyderabad campus
                    </option>

                    <option>
                      Bits Pilani-Goa campus
                    </option>
                  </select>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="input01">About
                Me</label>

                <div class="controls">
                  <textarea rows="3">
		  </textarea>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="input01">Upload a
                Picture of yourself</label>

                <div class="controls">
                  <input type="file" id="fname" size="50">
                </div>
              </div>

              <div class="control-group">
                <div class="control-group">
                  <label class="control-label" for=
                  "input01">Password</label>

                  <div class="controls">
                    <input type="password" class="input-xlarge" id=
                    "pwd" name="pwd" rel="popover" data-content=
                    "6 characters or more! Be tricky"
                    data-original-title="Password">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label" for=
                  "input01">Confirm Password</label>

                  <div class="controls">
                    <input type="password" class="input-xlarge" id=
                    "cpwd" name="cpwd" rel="popover" data-content=
                    "Re-enter your password for confirmation."
                    data-original-title="Re-Password">
                  </div>
                </div><!--     <div class="control-group">
                <label class="control-label" for="input01">Gender</label>
              <div class="controls">
                <select name="gender" id="gender" >
                                        <option value="">Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                        <option value="other">Other</option>
                                       
                                      </select>
               
              </div>
        
        </div> -->

                <div class="control-group">
                  <div class="controls">
                    <button type="submit" class="btn btn-success"
                    rel="tooltip" title="first tooltip">Create My
                    Account</button>
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    
  </div><!--/wrap-->

  <div id="push"></div><br>
  <br/>
  <br/>
  <!-- Footer
        ================================================== -->
<?php include 'footer.php'; ?><!-- Le javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src=
  "http://twitter.github.com/bootstrap/assets/js/jquery.js" type=
  "text/javascript">
</script><script src=
"http://twitter.github.com/bootstrap/assets/js/bootstrap-transition.js"
  type="text/javascript">
</script><script src=
"http://twitter.github.com/bootstrap/assets/js/bootstrap-alert.js"
  type="text/javascript">
</script><script src=
"http://twitter.github.com/bootstrap/assets/js/bootstrap-modal.js"
  type="text/javascript">
</script><script src=
"http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"
  type="text/javascript">
</script><script src=
"http://twitter.github.com/bootstrap/assets/js/bootstrap-scrollspy.js"
  type="text/javascript">
</script><script src=
"http://twitter.github.com/bootstrap/assets/js/bootstrap-tab.js"
type="text/javascript">
</script><script src=
"http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"
  type="text/javascript">
</script><script src=
"http://twitter.github.com/bootstrap/assets/js/bootstrap-popover.js"
  type="text/javascript">
</script><script type="text/javascript" src=
"http://jzaefferer.github.com/jquery-validation/jquery.validate.js">
</script><script type="text/javascript">
        $(document).ready(function(){
                        $('#registerHere input').hover(function()
                        {
                        $(this).popover('show')
                });
                        $("#registerHere").validate({
                                rules:{
                                        full_name:"required",
                                        user_name:"required",
                                        user_email:{
                                                        required:true,
                                                        email: true
                                                },
                                        pwd:{
                                                required:true,
                                                minlength: 6
                                        },
                                        cpwd:{
                                                required:true,
                                                equalTo: "#pwd"
                                        },
                                        gender:"required"
                                },
                                messages:{
                                        full_name:"Enter your first and last name",
                                        user_name:"Enter a username",
                                        user_email:{
                                                required:"Enter your email address",
                                                email:"Enter valid email address"
                                        },
                                        pwd:{
                                                required:"Enter your password",
                                                minlength:"Password must be minimum 6 characters"
                                        },
                                        cpwd:{
                                                required:"Enter confirm password",
                                                equalTo:"Password and Confirm Password must match"
                                        },
                                        gender:"Select Gender"
                                },
                                errorClass: "help-inline",
                                errorElement: "span",
                                highlight:function(element, errorClass, validClass) {
                                        $(element).parents('.control-group').addClass('error');
                                },
                                unhighlight: function(element, errorClass, validClass) {
                                        $(element).parents('.control-group').removeClass('error');
                                        $(element).parents('.control-group').addClass('success');
                                }
                        });
                });
  </script><iframe src="http://demos.9lessons.info/counter.html"
  frameborder="0" scrolling="no" height="0"></iframe>
</body>
</html>
