<?php
    include_once 'OOP/professor.php';
    $professor = new professor();
?>
<?php
    if ($_SERVER ['REQUES_METHOD'] = 'POST' && isset($_POST['Login'])){
				$login =$professor-> Addqrcode($_POST);
        //header('location:Professor\phpqrcode\index.php');
      }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dr.Folan</title>

    <!-- favicon -->
    <link href="Professor/favicon.png" rel=icon>

    <!-- web-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

    <!-- font-awesome -->
    <link href="Professor/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="Professor/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style CSS -->
    <link href="Professor/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<div class="columns-block">
<div class="left-col-block blocks">
    <header class="header">
        <div class="content text-center">
            <h1>Hi, I'm Dr.Folan!</h1>

            <p class="lead">Professor at FCIH</p>
            <ul class="social-icon">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="profile-img"></div>
    </header>
    <!-- .header-->
</div>
<!--<div><object width="400" height="400" data="User Help(Professor).pdf">Help</object> </div> -->
<div class="right-col-block blocks">
<section class="section-wrapper section-experience gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div style="text-align:right">
                <a href="logout.php"><button type="submit" class="btn btn-danger">logout</button></a>
              </div> <br>
                    <div style="text-align:right">
                    <a href="Professor/User%20Help(Professor).pdf"><button type="submit" class="btn btn-danger">Help</button></a>
                        </div>
                <div class="section-title">
                    <br>
                    <h2>little About me</h2>
                </div>
            </div>
            <div class="col-md-12">
                <p>
                    Credibly embrace visionary internal or "organic" sources and business benefits. Collaboratively
                    integrate efficient portals rather than customized customer service. Assertively deliver
                    frictionless services via leveraged interfaces. Conveniently evisculate accurate sources and
                    process-centric expertise. Energistically fabricate customized imperatives through cooperative
                    catalysts for change.

                </p>

                <p>
                    Dramatically predominate mission-critical materials and cooperative systems. Holisticly synergize
                    optimal results through team building "outside the box" thinking. Seamlessly facilitate frictionless
                    relationships via robust imperatives. Monotonectally brand wireless products and excellent action
                    items. Monotonectally disintermediate granular alignments via sustainable infomediaries.
                </p>
                 <div class="col-lg-4">
                <div class="block">
                  <div class="block-body text-center">
                    <button type="button" data-toggle="modal" data-target="#myModals" class="btn btn-primary">Edit</button>
                      <form>
                    <div id="myModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Description</strong>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label>General information about you</label>
                                <input type="text" placeholder="Who Iam?" class="form-control" required>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>

<!-- .expertise-wrapper -->

<section class="section-wrapper skills-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Skills</h2>
                </div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="progress-wrapper">

                    <div class="progress-item">
                        <span class="progress-title">Marketing</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="62" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 62%"><span class="progress-percent"> 62%</span>
                            </div>
                        </div>
                        <!-- .progress -->
                         <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                    <!-- .skill-progress -->


                    <div class="progress-item">
                        <span class="progress-title"><br> Market Research</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 90%"><span class="progress-percent"> 90%</span>
                            </div>
                        </div>
                         <button type="submit" class="btn btn-danger">Delete</button>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->


                    <div class="progress-item">
                        <span class="progress-title"><br> Organisational Skills</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 75%;"><span class="progress-percent"> 75%</span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->

                    <div class="progress-item">
                        <span class="progress-title"><br> Communtcation Skills</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 55%;"><span class="progress-percent"> 55%</span>
                            </div>
                        </div>
                         <button type="submit" class="btn btn-danger">Delete</button>
                        <!-- /.progress -->
                    </div>
                    <!-- /.skill-progress -->
                    <div class="progress-item">
                        <span class="progress-title"><br> Project Management</span>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                 aria-valuemax="100" style="width: 80%;"><span class="progress-percent"> 80%</span>
                            </div>
                        </div>
                         <button type="submit" class="btn btn-danger">Delete</button>
                        <!-- .progress -->
                    </div>
                    <!-- .skill-progress -->
                     <div class="col-lg-4">
                <div class="block">
                  <div class="block-body text-center"> <br>
                    <button type="button" data-toggle="modal" data-target="#myModali" class="btn btn-primary">Add</button>
                      <form>
                    <div id="myModali" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Edit Skills</strong>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label>Skill</label>
                                <input type="text" placeholder="Skill name" class="form-control" required>
                              </div>
                              <div class="form-group">
                                <label>Percent of progress (0 -> 100)</label>
                                <input type="number" placeholder="ex. 40" class="form-control" required>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
                </div>
                <!-- /.progress-wrapper -->
            </div>
        </div>
        <!--.row -->
    </div>
    <!-- .container-fluid -->
</section>
<!-- .skills-wrapper -->

<section class="section-wrapper section-experience gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title"><h2>Work Experience</h2></div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="content-item">
                    <small>2015 - Present</small>
                    <h3>Head of market research</h3>
                    <h4>Computer & Motor Ltd.</h4>

                    <p>United Kingdom, London</p>
                     <button type="submit" class="btn btn-danger">Delete</button>
                </div>
                <!-- .experience-item -->
                <div class="content-item">
                    <small>2012 - 2015</small>
                    <h3>Media Analyst</h3>
                    <h4>BizzNiss</h4>

                    <p>United Kingdom, London</p>
                     <button type="submit" class="btn btn-danger">Delete</button>
                </div>
                <!-- .experience-item -->
                <div class="content-item">
                    <small>2010 - 2012</small>
                    <h3>Budget Administrator</h3>
                    <h4>Somsom LLC</h4>

                    <p>United Kingdom, London</p>
                     <button type="submit" class="btn btn-danger">Delete</button>
                </div>
                                 <div class="col-lg-4">
                <div class="block">
                  <div class="block-body text-center">
                    <button type="button" data-toggle="modal" data-target="#myModaln" class="btn btn-primary">Add</button>
                      <form>
                    <div id="myModaln" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Edit Experience</strong>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label>From</label>
                                <input type="date" class="form-control" required>
                              </div>
                             <div>
                              <div>
                            <label class="form-control-label">To :</label> <br>
                            <input id="optionsRadios1" type="radio" checked="" value="option1" name="optionsRadios2" required>
                            <label for="optionsRadios1">Present</label>
                              </div>
                          <div>
                            <input id="optionsRadios2" type="radio" value="option2" name="optionsRadios2" required>
                            <label for="optionsRadios2"><input type="date" class="form-control"></label>
                          </div>
                            </div>
                                <div class="form-group">
                                <label>Position</label>
                                <input type="text" placeholder="ex. Manager" class="form-control" required>
                              </div>
                                <div class="form-group">
                                <label>Organization</label>
                                <input type="text" placeholder="ex. microsoft" class="form-control" required>
                              </div>
                                <div class="form-group">
                                <label>Country</label>
                                <input type="text" placeholder="ex. Egypt" class="form-control" required>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
                <!-- .experience-item -->
            </div>
        </div>
        <!--.row-->
    </div>
    <!-- .container-fluid -->

</section>
<!-- .section-experience -->

<section class="section-wrapper section-education">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title"><h2>Education</h2></div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="content-item">
                    <small>2010 - 2012</small>
                    <h3>MA Product Design</h3>
                    <h4>University of California</h4>

                    <p>United Kingdom, London</p>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
                <!-- .experience-item -->
                <div class="content-item">
                    <small>2007 - 2010</small>
                    <h3>Business marketing course</h3>
                    <h4>Royal Academy of Business</h4>

                    <p>United Kingdom, London</p>
                    <button type="submit" class="btn btn-danger">Delete</button>

                </div>
                <!-- .experience-item -->
                <div class="content-item">
                    <small>2002 - 2006</small>
                    <h3>BA (Hons) Design</h3>
                    <h4>University of Michigan</h4>

                    <p>United Kingdom, London</p>
                    <button type="submit" class="btn btn-danger">Delete</button>

                </div>
                 <div class="col-lg-4">
                <div class="block">
                  <div class="block-body text-center">
                    <button type="button" data-toggle="modal" data-target="#myModale" class="btn btn-primary">Add</button>
                      <form>
                    <div id="myModale" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Edit Education</strong>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label>From</label>
                                <input type="date" class="form-control" required>
                              </div>
                              <div class="form-group">
                                <label>To</label>
                                <input type="date" class="form-control" required>
                              </div>
                                <div class="form-group">
                                <label>Field</label>
                                <input type="text" placeholder="ex. faculty" class="form-control" required>
                              </div>
                                <div class="form-group">
                                <label>place</label>
                                <input type="text" placeholder="ex. faculty" class="form-control" required>
                              </div>
                                <div class="form-group">
                                <label>Country</label>
                                <input type="text" placeholder="ex. Egypt" class="form-control" required>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
                <!-- .experience-item -->
            </div>
        </div>
        <!--.row-->
    </div>
    <!-- .container-fluid -->

</section>
<!-- .section-education -->
<section class="section-wrapper section-experience gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Your Picture </h2>
                </div>
            </div>
            <div class="col-md-12">
                 <div class="col-lg-4">
                <div class="block">
                  <div class="block-body text-center">
                    <div class="form-group">
							<br>
							<input id="exampleInputFile" type="file" required/>
							<p class="help-block">
								Please browse your profile picture.<br>
                                Best size is : 900*1216
							</p>
                         <button type="submit" class="btn btn-primary">Submit</button>
						</div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
<section class="section-wrapper section-education">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Generate new Lecture</h2>
                </div>
            </div>
            <div class="col-md-12">
                 <div class="col-lg-4">
                <div class="block">
                    <form id="contactForm" action="Professor\phpqrcode\index.php" method="POST">
                  <div class="block-body text-center">
                      <div>
                              <div>
                            <label class="form-control-label">Course Name</label> <br>
                            <input id="optionsRadios1" type="radio" checked="" value="Graphics" name="optionsRadios2" required>
                            <label for="optionsRadios1">Graphics</label>
                              </div>
                          <div>
                            <input id="optionsRadios2" type="radio" value="SystemAnalysis" name="optionsRadios2" required>
                            <label for="optionsRadios2">System Analysis</label>
                          </div>
                            </div>
                      <div class="form-group">
                                <label>Lecture Title</label>
                                <input type="text" placeholder="ex. Introduction" name="LectureTitle" class="form-control" required>
                              </div>
                      <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="data" placeholder="ex. Introduction" class="form-control" required>
                              </div>
                              <button type="submit"class="btn btn-primary">Generate</button>


                    </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
<section class="section-wrapper section-experience gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Registered Students </h2>
                </div>
            </div>
            <div class="col-md-12">
                 <div class="col-lg-4">
                <div class="block">
                  <div class="block-body text-center">
                         <a href="tables1.html"><button type="submit" class="btn btn-primary">Show</button></a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>

<section class="section-wrapper section-education">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title"><h2>Course Materials & Assignments</h2></div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="content-item">
                    <a href="#"><h3>BA (Hons) Design</h3></a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>

                <!-- .experience-item -->
                <div class="content-item">
                    <a href="#"><h3>BA (Hons) Design</h3></a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>

                <!-- .experience-item -->
                <div class="content-item">
                    <a href="#"><h3>BA (Hons) Design</h3></a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>

                 <div class="col-lg-4">
                <div class="block">
                  <div class="block-body text-center">
                    <button type="button" data-toggle="modal" data-target="#myModalf" class="btn btn-primary">Upload File</button>
                      <form>
                    <div id="myModalf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Upload File</strong>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label>Title of the file</label>
                                <input type="text" placeholder="Title" class="form-control" required>
                              </div>
                              <div class="form-group">
                                <label>Notes:</label>
                                <input type="text" placeholder="not required" class="form-control">
                              </div>
                              <div class="form-group">
							<br>
							<input id="exampleInputFile" type="file" required/>
							<p class="help-block">
								Please browse the file.
							</p>
						</div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
                <!-- .experience-item -->
            </div>
        </div>
        <!--.row-->
    </div>
    <!-- .container-fluid -->

</section>
<section class="section-contact section-wrapper gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Contact</h2>
                </div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <address>
                    <strong>Available time in college this week</strong><br>
                    Sunday 2:00Pm<br>
                    Wednsday 3:00pm
                </address>
                <address>
                    <strong>Email</strong><br>
                    <a href="mailto:#">coffee@amelie.me</a>
                </address>
                <div class="col-lg-4">
                <div class="block">
                  <div class="block-body text-center">
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Edit</button>
                      <form>
                    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Edit contact</strong>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label>Available Time</label> <br>
                                  <label>1st</label>
                                <input type="date" class="form-control" required>
                                <input type="time" class="form-control" required>
                                <label>2nd</label>
                                  <input type="date" class="form-control">
                                <input type="time" class="form-control">
                                <label>3rd</label>
                                  <input type="date" class="form-control">
                                <input type="time" class="form-control">
                              </div>
                                <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="ex. drfolan@fcih.com" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Facebook URL</label>
                                <input type="url" placeholder="ex. https://www.Facebook.com/dr.folan" class="form-control">
                              </div>
                                <div class="form-group">
                                <label>Twitter URL</label>
                                <input type="url" placeholder="ex. https://www.Twitter.com/dr.folan" class="form-control">
                              </div>
                                <div class="form-group">
                                <label>LinkedIn URL</label>
                                <input type="url" placeholder="ex. https://www.Linkedin.com/dr.folan" class="form-control">
                              </div>

                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="feedback-form">
                    <h2>Get in touch</h2>

                    <form id="contactForm" action="sendemail.php" method="POST">
                        <div class="form-group">
                            <label for="InputName">Name</label>
                            <input type="text" name="name" required="" class="form-control" id="InputName"
                                   placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">Email address</label>
                            <input type="email" name="email" required="" class="form-control" id="InputEmail"
                                   placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="InputSubject">Subject</label>
                            <input type="text" name="subject" class="form-control" id="InputSubject"
                                   placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Message</label>
                            <textarea class="form-control" rows="4" required="" name="message" id="message-text"
                                      placeholder="Write message"></textarea>
                        </div>
                        	 <input type="submit" id="btn" name="Login" class="btn btn-primary" value="Submit">

                    </form>
                </div>
                <!-- .feedback-form -->


            </div>
        </div>
    </div>
    <!--.container-fluid-->
</section>
<!--.section-contact-->
<!-- .footer -->
</div>
<!-- .right-col-block -->
</div>
<!-- .columns-block -->
</div>
<!-- #main-wrapper -->

<!-- jquery -->
<script src="Professor/js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap -->
<script src="Professor/js/bootstrap.min.js"></script>
<script src="Professor/js/scripts.js"></script>
</body>
</html>
