<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <link href="css/rsignup.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/business_email.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  </head>
  <body>
  <p style="position:absolute; left:77px; top:30px; font-family:CeraB; font-size:18px;">Signing up as</p>
  <p id="recruiterheading">Recruiter</p>
  <br><br><br><br><br>
    <div class="container-fluid" style="background:transparent;">
      <section id="mainBody">
        <div class="main row col-lg-7 col-md-12" style="width:633px;height:420px;margin-left:5%">
          <section id="signup" style="background-color:white;margin-left:-15px">
		  <form method="post" action="index.php">
		  <p id="signupquestion">Do you have a business Email?</p><br>
		  <input type="email" name="b_email" id="inputEmail4" placeholder="Enter you business email here"/>
		   <br><br>
		   <button type="submit" id="getstarted-btn" onclick="location.href='index.php'">Get Started</button>
		   <br><br><br><br>
		   <p style="margin-left:55%;color:black;margin-right:-55%;">Don't have a business email ?<br> <a href="index.php" style="color:#007bff;text-decoration:none;margin-left:25%">Click Here</a></p>
		  </form>
            
            <!--<div class="form-group" id="new-business-email-form">Don't have a business email ?<br> <a href="./recruiter-signup.php" style="color:#007bff;text-decoration:none">Click Here</a></div>
          </form>-->
          </section>
         
        </div>
      </section>
    </div>
    <footer class="footer-section sticky-bottom">
  		<div class="container">
  			<div class="row">

  				<div class="col-md-12 text-center">Analysed 2018. All Rights
  					Reserved.</div>

  			</div>
  		</div>
  	</footer>
    <!-- <script src="js/signup.js"></script> -->
  </body>
</html>

