<?php 
session_start();
?>

<link rel="stylesheet" href="../css/recruiterLogIn.css"> <!--linking css file-->
<style type="text/css">
    .background #back{
            height: 100vh;
    width: 100%;
    }
    .loginbox #head{
            padding-left: 35px;
    left: 0;
    }
    .loginbox{
        box-shadow: 0px 2px 8px grey;
    }

    @media screen and (max-width: 609px){
       .background{
            height: 100%;
    width: 104%;
       }
       #list_items{
            display: flex;
    position: relative;
    left: -751px;
    font-size: 22px;
       }
       .navbar-nav li{
            border-radius: 12px;
        margin: 15px;
    font-size: 20px;
    padding: 12px;
    background-color: #3598DB;
       }
       .navbar-nav li a {
    color: white;
    font-weight: 100;
}
        .loginbox{
            top: -50%;
    left: 50%;
            width: 351px;
    padding-right: 4px;
        }
        .button{
            display: flex;
    position: relative;
    left: -18px;
        }
    }
</style>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title> <!--giving title to the page-->
<body>
<div class="background">
    <img src="../img/background.png" id="back"> <!--background picture-->
    <!-- <div class="collapse navbar-collapse" id="navbarResponsive">
                    <div class="navbar-nav text-uppercase pt-3 ml-auto nav-form-s" id="list_items">
                    <li class="nav-item">
                        <a class="nav-link" href="../signup/recruiter/Recruiter login.php">Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../signup/recruiter/index.php"> Join us</a>
                    </li>
                    </div>
    </div> -->
</div>

<div class="loginbox">
    <h3 id="head">Login With Your Valid Google Account</h3>

    <!-- form beign-->

<form action="mail_login.php" method="post">
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
<!-- <div class="bot">
<a href="">
<img src="./img/bot.png" style="width:70px;height:70px;">
</a>
</div> -->
</div>

</body>
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
    

$_SESSION['gmail']=$_POST['email'];
$_SESSION['password']=$_POST['password'];



// $query=mysqli_query($con,"insert into mail_login(email, password) values('$email','$password')");
    // echo '<script>alert("Email sent successfully !")</script>';
     echo '<script>window.location.href="send_mail.php";</script>';
}
?>

<!--end of php-->
