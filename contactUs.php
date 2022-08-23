


<?php

   include 'connection1.php';     //database connection page included
   session_start();        //session has been started


?>


<?php include('header.php')?>



<?php
           if(isset($_POST['send']))
           {

            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $contact=$_POST['contact'];
            $message=$_POST['message'];
            $email=$_POST['email'];



            $sql2="INSERT INTO contact_us (firstname,lastname,email,contact,message) VALUES ('$firstname' , '$lastname' , '$email' , '$contact' , '$message')";
             $res2=mysqli_query($conn,$sql2);
             if($res2 === TRUE)
              {
                   echo "<script> location.href='contact.php'; </script>";
              }
           }
      ?>


<link rel="stylesheet" href="./css/contact.css">
<title>Analysed</title>
<div class="container">
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Reach out to us</h1>
            <p class="mainParaDash">We love to hear from you</p>
        </div>
    <section class="contact-us-section-box row-recruiter">
        <div class="left-flex-contact-us-section-box">
            <img src="./img/delivery_address.svg" class="contact-us-svg-recruiter">
            <div class="row-recruiter contact-info-left-flex-contact-us-section-box">
                <span>
                    <span class="grey-small-text-contact-us">Address</span>
                    <p class="black-text-contact-us-image-below">Hyderabad</p>
                </span>
                <span>
                    <span class="grey-small-text-contact-us">General Support</span>
                    <p class="black-text-contact-us-image-below">support@analysed.in</p>
                </span>
            </div>
            <div class="row-recruiter contact-info-left-flex-contact-us-section-box">
                <span>
                    <span class="grey-small-text-contact-us">Contact Number</span>
                    <p class="black-text-contact-us-image-below">+91 (630)-003-6660</p>
                </span>
                <span>
                    <p class="black-text-contact-us-image-below">+91-(789)-327-8570</p>
                </span>
            </div>
        </div>
        <div class="right-flex-contact-us-section-box">
        <form method = "POST" id="contact-us-recruiter">
            <!-- <form action="/" id="contact-us-recruiter"> -->
            <div class="row-recruiter input-labels-contact-us">
                <span>
                    <label for="first-name-recruiter-contact-us">First Name *</label><br>
                    <input type="text" placeholder="Enter your first name" name="firstname" required id="first-name-recruiter-contact-us">
                </span>
                <span>
                    <label for="first-name-recruiter-contact-us">Last Name</label><br>
                    <input type="text" placeholder="Enter your last name" name="lastname"  id="last-name-recruiter-contact-us">
                </span>
            </div>
                    <span>
                    <label for="email-recruiter-contact-us">Email *</label><br>
                    <input type="email" placeholder="Enter your email address" name="email" required id="email-recruiter-contact-us">
                </span>
                <span>
                    <label for="number-recruiter-contact-us">Contact number *</label><br>
                    <input type="tel" placeholder="Enter your phone number" maxlength = 10 required name="contact" id="number-recruiter-contact-us">
                </span>
                <span>
                    <label for="Message-recruiter-contact-us">Message *</label><br>
                    <input placeholder="Enter your message here" required id="Message-recruiter-contact-us"  name="message"></input>
                </span>
                <button class="button-recruiter-contact-us-submit" name="send">Send message&nbsp;<i class="fa fa-paper-plane" aria-hidden="true"></i></button>
            </form>
        </div>
    </section>
