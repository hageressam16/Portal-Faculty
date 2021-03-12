<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Student name</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Profile Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="Student_qr/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="Student_qr/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="Student_qr/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="Student_qr/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="Student_qr/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="Student_qr/img/favicon.ico">
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Poppins:400,600,500,700' rel='stylesheet' type='text/css'>
<link href="Student_qr/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="Student_qr/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- Using Jquery -->
    <script>
    jQuery(document).ready(function($) {
        $('#sidebar-btn').click(function() {
            $('#sidebar').toggleClass('visible');
        });
    });
    </script>
<!--circlechart-->
<script src="js/jquery.circlechart.js"></script>
<!--circlechart-->

</head>
<body style="color:white">
        <div style="text-align:right;margin:10px 10px 0 0">
                <a href="Professor/User%20Help(Professor).pdf"><button type="submit" class="btn btn-danger">Help</button></a>
                    </div>
<div class="content">
		<div class="main">
		<div class="header">
		<div class="hd-img">
			<img src="Student_qr/images/2.jpg" alt=" " class="img-responsive" />
			</div>

			<h2>Student Name</h2>
			<p class="photo">Student at FCIH</p>
		</div>
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="header-bottom_3">
							<div class="jan">
								<h3>Edit profile</h3>
							</div>
                            <div class="jan-bottom">
							<div class="form-group row">
                        <label class="col-sm-3 form-control-label"><br> <br> &nbsp; Your ID</label>
                        <div class="col-sm-9"><br>
                          <input type="text" style="width:90%" disabled="" placeholder="20150444" class="form-control">
                        </div>
                      </div>
                            <div class="form-group row">
                        <label class="col-sm-3 form-control-label"> &nbsp; Cellular phone</label>
                        <div class="col-sm-9">
                          <input type="text" style="width:90%" disabled="" placeholder="0111" class="form-control">
                        </div>
                      </div>
                            <div class="form-group row">
                        <label class="col-sm-3 form-control-label"> &nbsp; Home Adress</label>
                        <div class="col-sm-9">
                          <input type="text" style="width:90%" disabled="" placeholder="Egypt" class="form-control">
                        </div>
                      </div>
                            <div class="form-group row">
                        <label class="col-sm-3 form-control-label"> &nbsp; Department</label>
                        <div class="col-sm-9">
                          <input type="text" style="width:90%" disabled="" placeholder="General" class="form-control">
                        </div>
                      </div>
                            <div class="form-group row">
                        <label class="col-sm-3 form-control-label"> &nbsp; Backup Email</label>
                        <div class="col-sm-9">
                          <input type="email" style="width:90%" placeholder="kaza@gmail.com" class="form-control">
                        </div>
                      </div>
                                <div class="form-group" style="margin:0 5px 0 10px">
							<br>
							<input id="exampleInputFile" type="file" required/>
							<p class="help-block">
								Please browse your profile picture.<br>
                                Best size is : 900*1216
							</p>
						</div>
                                <a href="tables1.html"><button type="submit" class="btn btn-primary">Save Changes</button></a>
                            </div>
						</div>
					</li>
					<li>
						<div class="header-bottom_3">
							<div class="jan">
								<h3>Scan Lecture QR code</h3>
							</div>
							<div class="jan-bottom">
								<div><object width="540" height="400" data="Student_qr\instascan-master\docs\index.html"></object>
                                <!--<video id="video" width="300" height="300" autoplay></video>
                                <button id="snap">Snap Photo</button>-->
							</div>
						</div>
					</li>
                    <li>
						<div class="header-bottom_3">
							<div class="jan">
								<h3>Select Cources</h3>
							</div>
							<div class="jan-bottom">
								   <div class="block">
                  <div class="title"><strong>Available Courses</strong><br><br></div>
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>Selections</th>
                          <th>Course</th>
                          <th>Professor</th>
                            <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row"><input type="checkbox" required></th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row"><input type="checkbox" required></th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row"><input type="checkbox" required></th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                                       <a href=""><button type="submit" class="btn btn-primary">Register</button></a>
                </div>
							</div>
						</div>
					</li>
                    <li>
						<div class="header-bottom_3">
							<div class="jan">
								<h3>Your Time table</h3>
							</div>
							<div class="jan-bottom">

							</div>
						</div>
					</li>
                    <li>
						<div class="header-bottom_3">
							<div class="jan">
								<h3>Send Special Request</h3>
							</div>
							<div class="jan-bottom">
								<form>
                                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label"><br> <br>Subject</label>
                        <div class="col-sm-9"> <br>
                          <input style="width:90%" type="text" placeholder="Subject of request" class="form-control" required>
                        </div>
                      </div>
                                    <div class="form-group">
                            <label for="message-text" class="form-control-label">Message &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                            <textarea rows="4" required="" name="message" id="message-text"
                                      placeholder="Write message" cols="48" ></textarea>
                        </div> <br> <br>
                                    <a href=""><button type="submit" class="btn btn-primary">Send</button></a>
                                </form>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>

						<!--FlexSlider-->
								<link rel="stylesheet" href="Student_qr/css/flexslider.css" type="text/css" media="screen" />
								<script defer src="Student_qr/js/jquery.flexslider.js"></script>
								<script type="text/javascript">
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
						<!--End-slider-script-->
	</div>
</div><div style="text-align:center;margin:0 0 10px 0">
                <a href="logout.php"><button type="submit" class="btn btn-danger">Logout</button></a>
                    </div>
   <!-- <script>// Grab elements, create settings, etc.
var video = document.getElementById('video');

// Get access to the camera!
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        video.src = window.URL.createObjectURL(stream);
        video.play();
    });
}

/* Legacy code below: getUserMedia
else if(navigator.getUserMedia) { // Standard
    navigator.getUserMedia({ video: true }, function(stream) {
        video.src = stream;
        video.play();
    }, errBack);
} else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
    navigator.webkitGetUserMedia({ video: true }, function(stream){
        video.src = window.webkitURL.createObjectURL(stream);
        video.play();
    }, errBack);
} else if(navigator.mozGetUserMedia) { // Mozilla-prefixed
    navigator.mozGetUserMedia({ video: true }, function(stream){
        video.src = window.URL.createObjectURL(stream);
        video.play();
    }, errBack);
}
*/</script>
    <script>// Elements for taking the snapshot
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');

// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
	context.drawImage(video, 0, 0, 640, 480);
});</script> -->
    <script src="Student_qr/vendor/jquery/jquery.min.js"></script>
    <script src="Student_qr/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="Student_qr/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="Student_qr/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="Student_qr/vendor/chart.js/Chart.min.js"></script>
    <script src="Student_qr/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="Student_qr/js/front.js"></script>
</body>
</html>
