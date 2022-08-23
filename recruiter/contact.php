<?php include('header.php')?>
<?php
   define('LOCALHOST','localhost');
   define('DB_USERNAME','root');
   define('DB_PASSWORD','');
   define('DB_NAME','analysed');
   $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die(mysqli_error());
?>

<?php
           if(isset($_POST['send']))
           {
  
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $contact=$_POST['contact'];
            $message=$_POST['message'];
            $email=$_POST['email'];
            $contact_us_id='C102';
             

            $sql2="INSERT INTO contact_us VALUES ('$contact_us_id', '$firstname' , '$lastname' , '$email' , '$contact' , '$message')";
             $res2=mysqli_query($conn,$sql2);
             if($res2 === TRUE)
              {
                   echo "<script> location.href='js_nearby_job.php'; </script>";
              }
           }
      ?>


<link rel="stylesheet" href="./css/contact_remove.css">
<title>Analysed</title>
<div class="container">
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Reach out to us</h1>
            <p class="mainParaDash">We love to hear from you</p>
        </div>
        <section class="contact-us-section-box row-recruiter">
            <div class="left-flex-contact-us-section-box" id="img-1">
                <img src="./img/delivery_address.svg" class="contact-us-svg-recruiter">
                <div class="row-recruiter contact-info-left-flex-contact-us-section-box" id="below">
                    <span>
                        <span class="grey-small-text-contact-us">Address</span>
                        <p class="black-text-contact-us-image-below">Hyderabad</p>
                    </span>
                    <span>
                        <span class="grey-small-text-contact-us">General Support</span>
                        <p class="black-text-contact-us-image-below">support@analysed.in</p>
                    </span>
                </div>
                <div class="row-recruiter contact-info-left-flex-contact-us-section-box" id="below">
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
                <form method="POST" id="contact-us-recruiter">
                    <!-- <form action="/" id="contact-us-recruiter"> -->
                    <div class="row-recruiter input-labels-contact-us">
                        <span>
                            <label for="first-name-recruiter-contact-us" id="fn">First Name *</label><br>
                            <input type="text" placeholder="Enter your first name" name="firstname" required
                                id="first-name-recruiter-contact-us" class="fn-1" required>
                        </span>
                        <span>
                            <label for="first-name-recruiter-contact-us" id="ln">Last Name</label><br>
                            <input type="text" placeholder="Enter your last name" name="lastname"
                                id="last-name-recruiter-contact-us " class="ln-1" required>
                        </span>
                    </div>
                    <span id="next-header">
                        <label for="email-recruiter-contact-us">Email *</label><br>
                        <input type="email" placeholder="Enter your email address" name="email" required
                            id="email-recruiter-contact-us">
                    </span>
                    <span id="next-header">
                        <label for="number-recruiter-contact-us">Contact number *</label><br>
                        <input type="tel" placeholder="Enter your phone number" maxlength=10 required name="contact"
                            id="number-recruiter-contact-us" required>
                    </span>
                    <span id="next-header">
                        <label for="Message-recruiter-contact-us">Message *</label><br>
                        <input placeholder="Enter your message here" required id="Message-recruiter-contact-us"
                            name="message" required></input>
                    </span>
                    <button class="button-recruiter-contact-us-submit" name="send">Send message&nbsp;<i
                            class="fa fa-paper-plane" aria-hidden="true"></i></button>
                </form>
            </div>
        </section>