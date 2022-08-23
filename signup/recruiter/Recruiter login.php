<?php
session_start();
include 'connection1.php';
?>



<!Doctype html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel= "stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Signup</title>

<?php include('../navMenu.php')?>


            <div class="row-signup hero-section-justify-content max-width-row">
                <div class="left-side-flex-container-signup">
                    <p class="signup-heading-signup-recruiter">
                        Login
                    </p>
                    <p class="progress-bar-signup"><span style="width:100%;"></span></p><br><br>

                    <form action="Recruiter login_config.php" method="post">

                            <div class="input-signup-div">
                                <label for="input-first-name">Email</label>
                                <input type="email" name="email" placeholder="Email" id="input-first-name" required style="width:350px;">
                            </div><br>

                            <div class="input-signup-div">
                                <label for="input-first-name">Password</label>
                                <input type="password" name="password" placeholder="Password" id="input-first-name" required style="width:350px;">

                            </div>

                        <button type="submit" name="submit" class="submit-signup-button"><img src="../images/Next.svg"></button>
                    </form>
                </div>
                <div class="right-side-flex-container-signup">
                    <img src="../images/recruiter.svg" alt="">
                </div>
