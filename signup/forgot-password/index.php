<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>

<body>

<?php include('../navMenu.php')?>

        <div class="row-signup hero-section-justify-content max-width-row">
            <div class="left-side-flex-container-signup">
                <a href="#" class="back-to-sign-in-link">Back to Sign in</a>
                <p class="personal-details-heading">Forgot your password?</p>
                <p class="light-grey-para-forgot-p">Send a link to your email to reset your password</p>

                <?php
                  
                  $conn = mysqli_connect("localhost","root","","virtualanalyse");
                  if(isset($_POST['btnsubmit']))
                  {
                      $email=$_POST['email'];
                      $sql="select * from emails where email ='$email'";
                      $res= mysqli_query($conn,$sql);
                      if($res == true)
                      {
                        $count =mysqli_num_rows($res);
                        if($count==1)
                        {
                         $row=mysqli_fetch_assoc($res);
                         $id=$row['id'];
                         $name=$row['name'];

                        $subject = "Password reset Request";
                        $body = "Hey $name,
                        Your Analysed password can be reset by clicking link below. If you did not request for a new password, please ignore this email.

                        Link:  http://localhost/Dashboard1/signup/forgot-password/forgot-password.php?id=$id";

                        $sender_email="From: saudagar1209@gmail.com";
                        
                        if(mail($email,$subject,$body,$sender_email))
                        {
                            echo "<script type='text/javascript'>alert('Password reset link sent to your mail')</script>";
                            $_SESSION['msg'] ="Please check your email";
                            header('http://localhost/Dashboard1/signup/forgot-password/'); 
                        }
                        else
                        {
                            echo "<script type='text/javascript'>alert('Sorry we couldnt send the mail. Try again')</script>";
                        }  
                    }
                    else
                    {
                        echo "<script type='text/javascript'>alert('No Email found')</script>";
                    }
                   }

                  }
                ?>

                <form action="" method="POST">
                    <div class="row-signup input-section-row">
                        <div class="input-signup-div">
                            <label for="input-first-name">Email ID</label>
                            <input type="email" name="email" placeholder="Enter your Email ID" >
                        </div>
                    </div>
                    <button type="submit" name="btnsubmit" class="submit-signup-button"><img src="../images/Next.svg"></button>
                </form>

            </div>
            <div class="right-side-flex-container-signup">
                <img src="../images/fp.svg" alt="">
            </div>
        </div>
</div>
</body>
</html>