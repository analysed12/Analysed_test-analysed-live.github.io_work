<?php
session_start();
include 'connection1.php';

if (isset($_POST['submit'])) {

    $username = $_SESSION['username']=$_POST['username'];
    $pwd = $_POST['password'];
    $sql = "select * from recruiter where email = '$username'";
    $run = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($run);

    $pwd_fetch = $row['password'];
    $pwd_decode  =password_verify($pwd,$pwd_fetch);

    if ($pwd_decode) {
        echo "loggedin successfully";
    }
    else{

        echo "<script>window.open('index.php?error=username or password incorrect','_self')</script>";
    }


}


?>



<!DOCTYPE html>
<html class="no-js" prefix="og: http://ogp.me/ns#"  lang="en-IN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Analysed</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="" />
        <link href="img/mobiapp_logo_96dp.png" rel="apple-touch-icon" sizes="96x96">
        <link href="img/mobiapp_logo_96dp.png" rel="icon" sizes="96x96" type="image/png">
        <link href="img/mobiapp_logo_32dp.png" rel="icon" sizes="32x32" type="image/png">
        <meta content="img/mobiapp_logo_96dp.png" name="msapplication-TileImage">

        <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/style-form.css">

        <script src="js/jquery.min.js"></script>
        
        <style>.nav-form-s .forg-pass-md a{text-decoration: none; margin-top: -5px; text-transform: lowercase;} .btn {font-family: sans-serif;}</style>

    </head>

    <body>

      
        <!-- NAVIGATION
            ==============-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
              <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="img/main-logo.png" alt="" class="img-fluid"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  Login
                  <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <div class="navbar-nav text-uppercase pt-3 ml-auto nav-form-s">
                    <li class="nav-item">
                        <a class="nav-link" href="../signup/recruiter/Recruiter login.php">Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../signup/recruiter/index.php"> Join us</a>
                    </li>
                    </div>
                </div>
              </div>
            </nav>


           
        <!--APP HEADER
            ================-->
            <section class="masthead">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-lg-7 my-auto">
                    <div class="header-content mx-auto animated wow zoomIn" data-wow-duration="0.3s" data-wow-delay=".1s">
                      <h1 class="mx-auto">A Virtual Recruitment Platform</h1>
                      <p>Recruitment and hiring process has been a complex task for a long time and we plan to change that. Analysed helps recruiters in human analytics through AI and provides them with virtual testing tools to lighten the burden of the struggle for both recruiters and job aspirants. Let's eliminate together the troubles witnessed in the recruitment process and uncover a one stop solution to it.</p>
                      <a href="../signup/recruiter/index.php"><button  class="btn btn-white mt-4 py-2 px-3 ">Join us</button></a>
                    </div>
                  </div>
                  <div class="col-lg-5 my-auto">
                    <div class="device-container animated wow zoomIn" data-wow-duration="0.3s" data-wow-delay=".1s">
                    <img src="img/1-resize.png" class="banner-img-mod" alt="" style="opacity:1;">
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <div class="bg-banner-img">
              <!-- <img src="img/bg-curve.png" alt=""> -->
            </div>

           
            
                <div class="row h-100" id="clearView">
                  <div class="col-lg-6 my-auto">
                      <img src="img/Group 1461.svg">
                  </div>  

                  <div class="col-lg-6 my-auto">
                          <h2>Have a clear view of everything that's going on at all times</h2>
                          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                  </div>
                </div>
            
              
        <!-- APP ABOUT
            ================-->
            <section class="about" id="about">
              <div class="title-sections">
                  <div class="container">
                    <div class="row title-bar align-center">
                      <div class="col-md-12">
                        <h2 class="wow fadeInUp">How it all goes down</h2>                   
                      </div>
                    </div>
                  </div>
              </div>
              <br>
              <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="about-content-box wow  align-center fadeInUp" data-wow-delay="0.1s">
                        <img src="img/Group 1414.png" class="img-liquid align-center" alt="">
                        <h5>Job Aspirant</h5>
                        <p class="desc align-center">Job aspirants need to upload their resume and other important details for the virtual recruitment drive.</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="about-content-box wow fadeInUp" data-wow-delay="0.3s">
                        <img src="img/Group 1416.png" class="img-liquid" alt="">
                        <h5>Analysed</h5>
                        <p class="desc">Analysed strides with an advanced technology to reduce the unemployment rate and bridge the gap between education and corporate requirements.</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="about-content-box wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/Group 1417.png" class="img-liquid" alt="">
                        <h5>Recruiter</h5>
                        <p class="desc">A recruiter will be able to create their own virtual recruitment cell and set parameters according to their needs and requirements.</p>
                      </div>
                    </div>
                  </div>
              </div>
<br>

              <!--FEATURED TOOLS-->
              <div class="title-sections">
                  <div class="container">
                    <div class="row title-bar align-center">
                      <div class="col-md-12">
                        <h2 class="wow fadeInUp" id="featured-tool-heading">Featured tools</h2>                   
                      </div>
                    </div>
                  </div>
              </div>
              <br>
              <div class="container">
                  <div class="row">
                    <div class="col-md-4 featured-tools"><img src="img/Group 1388.svg" class="tools-img">Resume Sorting</div>   
                    <div class="col-md-4 featured-tools"><img src="img/Group 1389.svg" class="tools-img">Chatbot</div> 
                    <div class="col-md-4 featured-tools"><img src="img/Group 1390.svg" class="tools-img">Analytics</div>                
                  </div>
                  <br><br>
                  <div class="row">
                    <div class="col-md-4 featured-tools"><img src="img/Group 1402.svg" class="tools-img">Business Operations</div>   
                    <div class="col-md-4 featured-tools"><img src="img/Group 1405.svg" class="tools-img">Online Assessment</div> 
                    <div class="col-md-4 featured-tools"><img src="img/Group 1406.svg" class="tools-img">Online Interview</div>                
                  </div>
              </div>
            </section>

            <section id="app-about" class="app-about">
              <div class="container">
                <div class="row first">                
                  <div class="col-md-7 wow fadeInLeft" data-wow-delay="0.6s">
                    <div class="app-about-cont">
                      <h3>How are we different?</h3>
                      <p class="text-justify">Analysed is different from every other job searching platforms as it offers exclusive technologically advanced tools to perform disparate functions or the recruitment process. We extensively provide tools and services to lighten the burden of the process.</p>
                    </div>
                  </div>
                  <div class="col-md-4 m-auto wow flipInX" data-wow-delay="0.3s">
                    <img src="img/Group 1429.png" alt="" class="first img-fluid">
                  </div>
                </div>


                <div class="row second">
                  <div class="col-md-4 wow flipInX mobile-view" data-wow-delay="0.6s">
                    <img src="img/advantages.png" alt="" class="third img-fluid">                    
                  </div>
                  <div class="col-md-4 wow flipInX desk-view" data-wow-delay="0.6s">
                    <img src="img/advantages.png" alt="" class="third img-fluid">
                  </div>
                  <div class="col-md-7 m-auto wow fadeInRight" data-wow-delay="0.3s">
                    <div class="app-about-cont right">
                      <h3>Our Advantages</h3>
                      <p class="text-justify">Our advantages are that we put our belief into this essential cause. Being an unbiased platform that extensively provides services to both recruiters and job seekers, we tend to make our platform a uniform and even one. We aim at using technology as a tool to fix the currently flawed recruitment process and job searching platforms.</p>
                    </div>
                  </div>
                 
                </div>
                <div class="row first first-three ">
                <div class="col-md-7 wow fadeInLeft" data-wow-delay="0.6s">
                      <div class="app-about-cont">                    
                        <h3>Services we provide</h3>
                        <p class="text-justify">We do not augment that we transform your big dreams to reality, we just commence with little ones. Bridging the gap between a recruiter and an aspirant is our sole motive. We, at Analysed, believe that every person holds a potential to reach at zenith of their career.</p>
                      </div>
                    </div>
                    <div class="col-md-4 m-auto wow flipInX" data-wow-delay="0.3s">
                      <img src="img/Group 1433.png" alt="" class="first img-fluid">
                    </div>
                  </div>
              </div>
            </section>


        <!-- FOOTER
            ==============-->
            <footer>
              <div id="footer-s1" class="footer-s1">
                <div class="footer">
                  <div class="container">
                    <div class="row">

                      <!-- SOCIAL MEDIA ICONS -->
                      <div class="col-md-3 col-sm-6 ">
                        <div class="footer-icons">
                        <i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/team" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/TeamAnalysed" target="_blank">  <i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/analysed-in/" target="_blank">  <i class="fab fa-linkedin"></i></a>
                        </div>
                      </div>
                      <!-- End SOCIAL MEDIA ICONS -->

                      <!-- CONTACT US -->
                      <div class="col-md-3 col-sm-6">
                        <div class="heading-footer"><h2>Contact Us</h2></div>
						<ul class="list-unstyled link-list">
                        <address class="address-details-f">
                          <li> Connect with us 24/7  <br> </li>
                          <li>  +91 (630) 003 6660 <br> </li>
                          <li>  +91 (789) 327 8570 <br> </li>
                          <li>  <a href="mailto:support@analysed.in" class="">support@analysed.in</a> </li>
                        </address>
                        </ul>
                      </div>
                      <!-- End CONTACT US -->

                      <!-- Recent Blog Entries -->
                      <div class="col-md-3 col-sm-6 ">
                          <div class="heading-footer"><h2>Information</h2></div>
                          <ul class="list-unstyled link-list" style="color:red">
                            <li> <a href="#" target="_blank">About Us</a></li>
                            <li> <a href="#" target="_blank">Work With Us</a></li>
                            <li> <a href="#" target="_blank">Privacy Policy</a></li>
                            <li> <a href="#" target="_blank">Terms & Conditions</a></li>
                            <li> <a href="#" target="_blank">FAQs</a></li>
                          </ul>
                        </div>
                        <!-- End Recent Blog Entries -->

                        <!-- Send Message -->
                        <div class="col-md-3 col-sm-6 ">
                          <div class="heading-footer"><h2>Send us a Message</h2></div>
                          <form name="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . '#main-contact-form2')?>">

                              <div class="form-group">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Name" required="required">
                              </div>
                              <div class="form-group">
                                <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Email Id" required="required">
                              </div>
                              <input type="hidden" name="formtype" value="contact">
                              <div class="form-group">
                                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your message" required="required"></textarea>
                              </div>
                              <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                            </form>
                        </div>
                      <!-- Send Message -->
                    </div>
                  </div><!--/container -->
                </div>
              </div>

              <div id="footer-bottom">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-12">
                              <div id="footer-copyrights">
                                  <p>Analysed Copyrights &copy; 2019. All Rights Reserved.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <a href="#home" id="back-to-top" class="btn btn-sm btn-green btn-back-to-top smooth-scroll hidden-sm hidden-xs" title="home" role="button">
                  <i class="fa fa-angle-up"></i>
              </a>
            </footer>

        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/app.js"></script>
		<!--<script src="https://lex-web-ui-codebuilddeploy-1n8z2jax4-webappbucket-14vb5g8743fh6.s3.amazonaws.com/lex-web-ui-loader.min.js"></script>
		<script>
		  var loaderOpts = {
			baseUrl: 'https://lex-web-ui-codebuilddeploy-1n8z2jax4-webappbucket-14vb5g8743fh6.s3.amazonaws.com/'
		  };
		  var loader = new ChatBotUiLoader.IframeLoader(loaderOpts);
		  loader.load()
			.catch(function (error) { console.error(error); });
		</script>-->
		<script src="https://lex-web-mx-codebuilddeploy-1k71slxns-webappbucket-rseursdbynux.s3.amazonaws.com/lex-web-ui-loader.min.js"></script>
		<script>
		  var loaderOpts = {
			baseUrl: 'https://lex-web-mx-codebuilddeploy-1k71slxns-webappbucket-rseursdbynux.s3.amazonaws.com/'
		  };
		  var loader = new ChatBotUiLoader.IframeLoader(loaderOpts);
		  loader.load()
			.catch(function (error) { console.error(error); });
		</script>
    </body>
</html>
