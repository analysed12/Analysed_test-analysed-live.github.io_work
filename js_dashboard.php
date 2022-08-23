<?php 
session_start();
if($_SESSION['jobSeekerID']==null)
{
    header("Location:index.php");
}

include('include/header.php');
include('conn.php'); ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<title>Dashboard</title>
<link rel="stylesheet" href="css/js_dashboard.css">
<body>
<?php
        $jobseeker_ID = $_SESSION['jobSeekerID'];
        $sql="SELECT * FROM jobseeker where jobseeker_id= '" .  $jobseeker_ID . "'";
        $result_1 = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_array($result_1)) {
            
                                        
        ?>
    <div class="main_body" >
        <br><br><br>
        <!-- Heading -->
        <div>
          <h1 class="head_1">Dashboard</h1>
          <p class="sub_1">Welcome back, <?php echo $row['firstname'];?>!</p>
        </div>
        <br>
        <!-- line 1 -->
      <div class="row" id="li-1">
          <div class="col-md-2" id="up-cards">
             <div class="cards-description">
                 Jobs applied
                 <div class="numbers"><h2>1</h2></div>
             </div>
             <div class="cards-image">
             <img src="./img/stats-img-1.png" alt="" class="cardImageDash" />
             </div>
          </div>
         
          <div class="col-md-2" id="cards">
             <div class="cards-description">
                 Jobs nearby
                 <div class="numbers"><h2>30</h2></div>
             </div>
             <div class="cards-image">
             <img src="./img/js_near1.png" alt="" class="cardImageDash" />
             </div>
          </div>

          <div class="col-md-2" id="cards">
             <div class="cards-description">
                 Shortlisted
                 <div class="numbers"><h2>10</h2></div>
             </div>
             <div class="cards-image">
             <img src="./img/stats-img-3.png" alt="" class="cardImageDash" />
             </div>
          </div>

          <div class="col-md-2" id="cards">
             <div class="cards-description">
                 Starred jobs
                 <div class="numbers"><h2>2</h2></div>
             </div>
             <div class="cards-image">
             <img src="./img/stats-img-4.png" alt="" class="cardImageDash" />
             </div>
          </div>
      </div>
        <br><br>

 <!-- line 2 -->
 

        <!-- line 2 -->
        <div class="row" id="map1">
            <div class="col-6">
                <div class="card" id="cards">
                    <p class="leftText">Jobs near you
                    <span class="rightText">
                        <img src="./img/setting-icon-blue.png" />
                        <?php echo $row['city'];?><br></span>
                    </p>
                    <div class="img-map">
                    <a href="jobsNearYou.php"><img src="img/map.png" alt=""  /></a>
        </div>
                    <p><br><br>
                        <span style="color: #333333;font-size: 18px;font-family: MetroM; margin-left:40px">Job title</span>
                        <span  class="jobs">Jobs available</span>
                        <hr style="width:90%;margin-left:30px;"></hr>
                        <p class="loc_2">MERN stack developer <span  class="job-num">506</span></p>
                        <p class="loc_2">MEAN stack developer <span class="job-num" >114</span></p>
                        <p class="loc_2">Django developer <span class="job-num-3"  >678</span></p>
                        <p class="loc_2">React-native front end developer <span class="job-num-2">89</span></p>
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="card" id="cards">
                    <p class="leftText">Profile viewed
                        <span class="rightText1">
                        <img src="./img/setting-icon-blue.png" />
                        Last 30 days<br></span>
                    </p>
                    <p class="loc_3" style="margin-left:30px">Total views: 136<br><br></p>
                    <div class="img-map">
                    <a href=""><img src="./img/graph.png" alt="" class="map_des"  width="670px"></a></div>
                    <p><br><br>
                        <span style="color: #333333;font-size: 18px;font-family: MetroM; margin-left:40px">Skills</span>
                        <span class="jobs-1" >No. of Company</span>
                        <hr style="width:90%;margin-left:30px;"></hr>
                        <p class="loc_2">Python <span  class="comp-1">506</span></p>
                        <p class="loc_2">Design Xd <span class="comp-2" >114</span></p>
                        <p class="loc_2">Html & CSS <span class="comp-3">678</span></p>
                        <p class="loc_2">React Js <span  class="comp-4">89</span></p>
                    </p>
                </div>
            </div>
        </div>

        <!-- line 3 -->

        <p class="head_11"><br>Recommended for you</p>
        <div class="row" id="job-list">
            <?php
                $jobseeker_City = $row['city'];
                $sqlCity="SELECT * FROM joblistings LIMIT 3";
                $result_City = mysqli_query($con,$sqlCity);
                while ($rowCity = mysqli_fetch_array($result_City)) {
            ?>
            <!-- job 1 -->
            <div class="col-md-3" id="cards">
                <div class="icons" style="float:right;">
                    <img src="img/share-icon.png" height="23" width="25">&emsp;
                    <img src="img/star-icon.png" height="23" width="25">
                </div>
                <div class="companyName">
                    <img src="img/Airbnb-logo.png" height="50" width="50" style="float:left;margin-right: 20px;"/>
                    <span style="line-height:1;"><b><?php echo $rowCity['client_company']; ?></b></span><br>
                    <span style="color:grey;font-size:14px;"> London,UK</span>
                </div>
                <br>
                <div class="designation">
                    <br><?php echo strtoupper($rowCity['position']); ?>
                </div>
                <progress value="2" max="20" ></progress>
                <span class="days"> 2 days left</span >
                <p style="font-size:13px;line-height:5px;color:blue"> <i><?php echo $rowCity['skills']; ?></i></p>
                <div class="last_job_content">
                        <p style="float:left"><br>Full Time</p><br>
                       
                        <a href="jobsDescription.php?job_ID=<?php echo  $rowCity['job_id'];?>" id="second" style="float:right;"> <button class="btn btn-outline-primary btn-color" style="border-radius:25px">Apply Now</button></a>
                    </div>
            </div>
            <?php } ?>
            <div id="temp3">
                    <a href="js_more_job.php">
                    <p class="more_m">Show all </p></a>
                </div>
        </div>




        
            <!-- line 4 -->
        <p class="head_11"><br>Search for specific job</p>
        <div class="row" id="specific-job">
            <div class="col mx-1">
                <p class="s1" id="k1"> <img src="img/DataAnalysis.png" height="100px" width="120px" style="margin-top:41px" ><br><br><br> <span class="o1">Data Analysis</span></p>
                
            </div>
            <div class="col mx-1">
                <p class="s1" id="k2"> <img src="img/Seo.png" height="100px" width="120px" style="margin-top:41px" ><br><br><br> <span class="o1">SEO</span> </p>
            </div>
            <div class="col mx-1">
                <p class="s1" id="k3"> <img src="img/PythonDeveloper.png" height="100px" width="120px" style="margin-top:41px" ><br><br><br> <span class="o1">Python developer</span> </p>
            </div>
            <div class="col mx-1">
                <p class="s1" id="k4"> <img src="img/WebDeveloper.png" height="100px" width="120px" style="margin-top:41px" ><br><br><br> <span class="o1">Web Developer</span> </p>
            </div>
            <div class="col mx-1 more_m1">
                <a href="">
                <p >Show  all </p></a>
            </div>
        </div>

        <!-- line 5 -->
        <br><br><br>
        
        <div class="card" id="li_5">
            <span class="leftText1">&emsp;Upcoming Interviews<a href="js_schedule.php"><button class="addFilesMyTasks1"> Schedule an interview + </button></a><br><br>
            </span>
            <p class="s4" > 
                <span class="last_t1" >NAME</span>
                <span class="last_t2">DATE</span>
                <span class="last_t3">JOB ROLE</span>
            </p>
            <div class="row" id="interview">
                <div class="col-1" style="margin-left:30px"><img src="img/Profile1.png" height="60px" width="60px"></div>
                <div class="col-3" id="b_9"><p id="b_8">John Smith</p><p id="b_8">Company</p></div>
                <div class="col-7">
                    <span id="b_9"><i class='fas fa-calendar'> </i>&nbsp;12th May, 2020 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Full stack web developer</span><br>
                    <span id="b_8"><img src="img/grey-clock-icon.png" height="15px" width="15px">&nbsp; 5pm</span>
                </div>
                <div class="col-1" id="b_9"></div>
            </div>
            <hr style="margin-left:30px;width:92%"></hr>

            <div class="row" id="interview">
                <div class="col-1" style="margin-left:30px"><img src="img/Prof-2.png" height="60px" width="60px"></div>
                <div class="col-3" id="b_9"><p id="b_8">John Smith</p><p id="b_8">Company</p></div>
                <div class="col-7">
                    <span id="b_9"><i class='fas fa-calendar'> </i>&nbsp;12th May, 2020 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Full stack web developer</span><br>
                    <span id="b_8"><img src="img/grey-clock-icon.png" height="15px" width="15px">&nbsp; 5pm</span>
                </div>
                <div class="col-1" id="b_9"></div>
            </div>
            <hr style="margin-left:30px;width:92%"></hr>

            <div class="row" id="interview">
                <div class="col-1" style="margin-left:30px"><img src="img/Profile3.png" height="60px" width="60px"></div>
                <div class="col-3" id="b_9"> <p id="b_8">John Smith</p><p id="b_8">Company</p></div>
                <div class="col-7">
                    <span id="b_9"><i class='fas fa-calendar'> </i>&nbsp;12th May, 2020 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Full stack web developer</span><br>
                    <span id="b_8"><img src="img/grey-clock-icon.png" height="15px" width="15px">&nbsp; 5pm</span>
                </div>
                <div class="col-1" id="b_9"></div>
            </div>
            <hr style="margin-left:30px;width:92%"></hr>

            <div class="row" id="interview">
                <div class="col-1" style="margin-left:30px"><img src="img/Profile4.png" height="60px" width="60px"></div>
                <div class="col-3" id="b_9"> <p id="b_8">John Smith</p><p id="b_8">Company</p></div>
                <div class="col-7">
                    <span id="b_9"><i class='fas fa-calendar'> </i>&nbsp;12th May, 2020 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Full stack web developer</span><br>
                    <span id="b_8"><img src="img/grey-clock-icon.png" height="15px" width="15px">&nbsp; 5pm</span>
                </div>
                <div class="col-1" id="b_9"></div>
            </div>
        </div>
        
        <br><br><br><br><br><br>
    </div>
</body>
        <?php } ?>
</html>
