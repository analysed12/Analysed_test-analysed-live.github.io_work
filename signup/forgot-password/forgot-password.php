<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>

<body>

<?php include('../navMenu.php')?>
        <div class="row-signup hero-section-justify-content max-width-row">
            <div class="left-side-flex-container-signup">
                <a href="#" class="back-to-sign-in-link">Back to Sign in</a>
                <p class="personal-details-heading">Reset password</p>
                <p class="light-grey-para-forgot-p">Please choose your new password</p>
               
                
                <?php 
                   $conn=mysqli_connect("localhost","root","","virtualanalyse");
                   if(isset($_POST['submit1']))
                   {
                       $id=$_GET['id'];
                       $pass1=$_POST['Password'];
                       $pass2=$_POST['ConfirmPassword'];
                       if ($pass1 == $pass2) 
                       {
                        $sql="UPDATE emails SET current_password='$pass1' where id='$id'";
                            $retval=mysqli_query($conn,$sql);
                            if($retval == TRUE)
                            {
                                echo "<script type='text/javascript'>alert('Password Updated Successfull. Login into your account')</script>";
                            }
                            else
                            {
                                echo "<script type='text/javascript'>alert('Could not update password')</script>";
                            }
                       }
                       else 
                       {
                        echo "<script type='text/javascript'>alert('Password does not match')</script>";
                       }
                   }
                ?>

                <form action="" method="POST">
                    <div class="row-signup input-section-row">
                        <div class="input-signup-div">
                            <label for="Password">Password</label>
                            <input type="Password" name="Password" placeholder="Password" id="Password" required>
                        </div>
                        <div class="input-signup-div">
                            <label for="ConfirmPassword">Confirm Password</label>
                            <input type="Password" name="ConfirmPassword" placeholder="Confirm Password" id="ConfirmPassword" required>
                        </div>
                    </div>
                    <button type="submit" name="submit1" class="submit-signup-button"><img src="../images/Next.svg"></button>
                </form>

            </div>
            <div class="right-side-flex-container-signup">
                <img src="../images/fp.svg" alt="">
            </div>
        </div>
</div>