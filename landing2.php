<link rel="stylesheet" href="./css/landing2.css"> <!--linking css file-->
<?php include('navBar.php')?><!--including navigation bar-->
<!--landing 2-->
<title> landing page</title>
<button type="button" id="joinUs" onClick=""> Join Us</button>
<div class="tab" id="tab2">
    <div class="one">
    <div class="title">
        <h2>Featured Tools</h2>
    </div>
    <img src="./img/resumeSorting.png" id="resumeSorting" style="width:150px;height:100px;">
    <img src="./img/chatbot.png" id="chatbot" style="width:150px;height:100px;">
    <img src="./img/analytics.png" id="analytics" style="width:150px;height:100px;">
    <img src="./img/businessOperations.png" id="businessOperations" style="width:150px;height:100px;">
    <img src="./img/onlineAssessment.png" id="onlineAssessment" style="width:150px;height:100px;">
    <img src="./img/onlineInterview.png" id="onlineInterview" style="width:150px;height:100px;">

    <div class="about">
        <p id="resumeSorting">Resume Sorting</p>
        <p id="chatbot">Chatbot</p>
        <p id="analytics">Analytics</p>
        <p id="businessOperations">Business Operations</p>
        <p id="onlineAssessment">Online Assessment</p>
        <p id="onlineInterview">Online Interview</p>
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
           location.href="landing3.php";
       } ;  
       document.getElementById("prevBtn").onclick=function(){
           location.href="landing.php";
       } ;  

       </script>  
           