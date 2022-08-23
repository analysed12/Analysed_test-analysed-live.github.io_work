<link rel="stylesheet" href="./css/recruiterLogIn.css"> <!--linking css file-->


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Recruiter Login</title> <!--giving title to the page-->

<div class="background">
    <img src="./img/background.png"> <!--background picture-->
    <ul class="navbar-nav"> <!--navigation bar-->
       <li> <a class="nav-link" id="contact" href="">Contact Us</a></li>
        <li><a class="nav-link" href="">About</a></li>
       <li> <a class="nav-link" href="">Login</a></li>
       <li> <a class="nav-link" href="recruiterSignUp.php">Join Us</a></li> <!--redirects to sign up page-->
	  </ul>
</div>

<div class="loginbox">
    <h3>Login</h3>

    <!-- form beign-->

<form action="recruiterLogIn.php" method="post">
    <!--email-->
    <div class="txt-field">
    <label>Email</label>
        <input type="email" name="email" placeholder="Username/Email" required>
        </div>

        <!--password-->
    <div class="txt-field">
    <label>Password</label>
        <input type="password" name="password"  placeholder="Password" required>     
    </div>
<!--forgot password and cancel -->
    <div class="pass">Forgot Password?</div>
<div class="button">
    <input type="submit" name="login" value="Login">
    <a href="">Cancel</a>
</div>
</form>
<!--form ends-->

<!--chatbot-->
<div class="bot">
<a href="">
<img src="./img/bot.png" style="width:70px;height:70px;">
</a>
</div>
</div>


<!--php code beign-->
<?php

$con=mysqli_connect('localhost','root','','analysed'); //connecting to the database
if($con){
    //echo "done";
}
else{
    echo "failed".mysqli_connect_error();
}

//condition for login
if(isset($_POST['login'])){
    

$email=$_POST['email'];
$password=$_POST['password'];

//query for login
$s="SELECT * FROM recruiter WHERE email='$email' && password='$password';";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
    
    echo "<script>alert('Login Successful')</script>"; //alert message
}

else{
    echo"<script>alert('Please enter correct email and password')</script>"; //alert mesage
}
}
?>

<!--end of php-->
