<link rel="stylesheet" href="./css/landing.css"> <!--linking css file-->
<?php include('navBar.php')?><!--including navigation bar-->

<title> landing page</title>

<button type="button" id="joinUs" onClick=""> Join Us</button>

<!--landing 1-->
<div class="tab" id="tab1">
<div class="one">
    <div class="title">
        <h2>How it all goes down</h2>
    </div>

    <div class="numberOne">
    <h2> #1</h2>
    </div>
    <div class="numberTwo">
    <h2> #2</h2>
    </div>
    <div class="numberThree">
    <h2> #3</h2>
</div>

<div class="picture">
    <img src="./img/aspirant1.png" id="aspirant" style="width:200px;height:150px;">
    <img src="./img/analysed1.png" id="analysed" style="width:200px;height:150px;">
    <img src="./img/recruiter1.png" id="recruiter" style="width:200px;height:150px;">
</div>

<div class="about">
    <h3 class="aspirants"> Job Aspirant</h3>
    <p id="aspirants"> Job aspirants need to upload their resume and <br>other important details for the virtual recruitment <br>drive.</p>
    <h3 class="analysed"> Analysed</h3>
    <p id="analysed"> Analysed strides with an advanced technology to <br> reduce the unemployment rate and bridge the<br> gap beten education and corporate</p>
    <h3 class="recruiters"> Recruiter</h3>
    <p id="recruiters">A recruiter will be able to create their own virtual<br>recruitment cell and set parameters according to<br>their needs and recruitments</p>
</div>

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
    <p  > Back to top</p> 
    </a>
</div>

    <!--Next and Previous button-->
    <div class="btn-box" style="overflow:auto;">
                    <div style="float:right;">
                    
                    <input type="button" id="nextBtn" name="nextBtn" value=">">
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
       document.getElementById("nextBtn").onclick=function(){
           location.href="landing2.php";
       } ;  
       </script>  

