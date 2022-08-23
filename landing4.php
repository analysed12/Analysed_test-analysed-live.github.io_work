<link rel="stylesheet" href="./css/landing4.css"> <!--linking css file-->
<?php include('navBar.php')?><!--including navigation bar-->
<!--landing 4-->

<title> landing page</title>

<button type="button" id="joinUs" onClick=""> Join Us</button>
<div class="tab" id="tab4">
    <div class="one">
    <img src="./img/service.png" id="service" style="width:300px;height:250px;"> 
    <div class="about">
        <h2 class="service">Services we provide</h2>
        <p id="service">We do not augment that we transform your big dreams to reality, we just commence<br>with little ones. Bridging the gap between a recruiter and an aspirant is our sole motive.<br>We, at Analysed, believe that every person holds a potential to reach at zenith of their<br>career.</p>
    </div>
    <img src="./img/image.jpg" id="image" style="width:1500px;height:200px;"> 
    <img src="./img/instagram1.png" id="instagram" style="width:25px;height:25px;"> 
    <img src="./img/twitter1.png" id="twitter" style="width:25px;height:25px;"> 
    <img src="./img/facebook1.png" id="facebook" style="width:25px;height:25px;"> 
    <img src="./img/linkedin1.png" id="linkedin" style="width:25px;height:25px;"> 

    <div class="contactUs">
        <p>Contact us</p>
        <br>
        <br>
        <p>Connect with us 24/7</p>
        <p>+91 (630) 003 6660</p>
        <p>+91 (789) 327 8570</p>
        <p>support@analysed.in</p>
    </div>

    <div class="information">
        <p>Information</p>
        <br>
        <br>
        <a href="#">About us</a><br>
        <a href="#">Work With Us</a><br>
        <a href="#">Privacy Policy</a><br>
        <a href="#">Terms & Conditions</a><br>
        <a href="#">FAQs</a>
    </div>

    <div class="message">
        <p>Send us a message</p>
        <form action="" method="post">
            <div class="name">
        <input type="text" name="name" id="name" placeholder="Name" oninput="this.className=''" required>
</div>
<div class="email">
        <input type="email" name="email" id="email" placeholder="Email address" oninput="this.className=''" required>
</div>
<div class="msg">
        <input type="text" name="msg" id="msg" placeholder="Message" oninput="this.className=''" required>
</div>
<div class="btn">
        <input type="submit" id="submitBtn" name="submit" value="Submit">
</div>
        </form>
    </div>
    <p id="company">Analysed 2022</p>

   
    </div>
</div>

<!--chatbot-->
<div class="bot">
<a href="">
<img src="./img/bot.png" style="width:70px;height:70px;">
</a>
</div>
</div>

<!--back to top-->
<div class="up">
    <a style="text-decoration:none" href="landing.php">
    <img src="./img/up.png" > 
    <p> Back to top</p> 
    </a>
</div>

    <!--Next and Previous button-->
    <div class="btn-box" style="overflow:auto;">
                    <div style="float:right;">
                    <input type="button" id="prevBtn" name="prevBtn" value="<">
                    
                </div>
                </div>


<!--step-->
<div style="text-align:left;margin-top:-20px;">
                <span class="step" id="step1" ></span>
                <span class="step" id="step2" ></span>
                <span class="step" id="step3"></span>
                <span class="step" id="step4"></span>
            </div>  

            <script> 
       
       document.getElementById("prevBtn").onclick=function(){
           location.href="landing3.php";
       } ;  

       </script>  
           