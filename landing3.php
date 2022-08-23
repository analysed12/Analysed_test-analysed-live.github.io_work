<link rel="stylesheet" href="./css/landing3.css"> <!--linking css file-->
<?php include('navBar.php')?><!--including navigation bar-->
<!--landing 3-->

<title> landing page</title>

<button type="button" id="joinUs" onClick=""> Join Us</button>
<div class="tab" id="tab3">
    <div class="one">
    <img src="./img/different.png" id="different" style="width:300px;height:250px;">
    <img src="./img/advantages.png" id="advantages" style="width:300px;height:260px;"> 
    <div class="about">
        <h2 class="different"> How are we different</h2>
        <p id="different">Analysed is different from every other job searching platforms as it offers<br>exclusive technologically advanced tools to perform disparate functions<br>or the recruitment process.</p>
        <h2 class="advantages">Our advantages</h2>
        <p id="advantages">We put our belief into this essential cause. Being an unbiased platform that<br> extensively provides to both recruiters and job seekers, we tend to make <br>our platform a uniform and even one. We aim at using technology as a<br>tool to fix the currently flawed recruitment process and job searching platforms.</p>
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
    <p> Back to top</p> 
    </a>
</div>

    <!--Next and Previous button-->
    <div class="btn-box" style="overflow:auto;">
                    <div style="float:right;">
                    <input type="button" id="prevBtn" name="prevBtn" value="<">
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
           location.href="landing4.php";
       } ;  
       document.getElementById("prevBtn").onclick=function(){
           location.href="landing2.php";
       } ;  

       </script>  