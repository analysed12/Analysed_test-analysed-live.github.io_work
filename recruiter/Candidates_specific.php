<?php include('connection1.php'); ?>

<?php
$c_id=$_GET['c_id'];
session_start();
// if(isset($_SESSION['firstname'])) {
    // $firstname=$_SESSION['firstname'];

    $sql=mysqli_query($conn,"select * from candidates where candidate_id='$c_id'");
    $check=mysqli_num_rows($sql)>0;

    if($check){
        while($row=mysqli_fetch_assoc($sql)){
            ?>


<?php include('header.php') ?>
<title>Dashboard</title>

<link rel="stylesheet" href="./css/Candidates_specific.css">

<body>
    <div class="container1">
        <div class="small_container1">
            <div class="bread-crumbs_Mytools-recruiter">
                <a href="dashboard.php" class="active-breadcrumb-link">Dashboard</a> > <a href="candidate_list.php"
                    class="active-breadcrumb-link">My Database</a> > <a href="" class="active-breadcrumb-link"><u>John
                        Smith</u></a>
            </div>
            <div class="profile-img">
                <img src="../img/<?php echo $row["image"]; ?>" width="130" height="130" style="margin: 25px" alt="">
                <h1><?php echo $row["firstname"]; ?><p1 style="font-family:verdana"><?php echo $row["candidate_id"]; ?>
                    </p1>
                </h1><br>
                <h2><span
                        style="color:#3598DB"><?php echo $row["current_title"]; ?>-</span><?php echo $row["company_name"]; ?>
                </h2><br>
                <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                    </svg> <?php echo $row["city_name"]; ?></h4>
            </div>
            <div class="button">
                <button><a href="edit-Candidates1.php?c_id=<?php echo $c_id?>"
                        style="text-decoration: none;color:#3598DB;">Edit candidate</a></button><br><br><br><br>
                <button><a href="img/<?php echo $row["resume"]; ?>" target="_blank"
                        style="text-decoration: none;color:#3598DB;">View Resume</a></button>
            </div>
            <div class="options">
                <span style="color:#3598DB">
                    <!-- <a style="color:#3598DB" href="#"> --><b>| </b> At a glance</a>
                </span>
                <p><a style="color:#979797" href="candidates_status.php?c_id=<?php echo $row['candidate_id']; ?>">
                        Status</a></p>
                <p><a style="color:#979797"
                        href="candidates_activity.php?c_id=<?php echo $row['candidate_id']; ?>">Activity</a></p>
                <p class="p1"><a style="color:#979797"
                        href="candidates_files.php?c_id=<?php echo $row['candidate_id']; ?>">Files</a></p>
                <p class="p1"><a style="color:#979797"
                        href="candidates_notes.php?c_id=<?php echo $row['candidate_id']; ?>">Notes</a></p>
            </div>
            <div class="options-card">
                <div class="summary">
                    <strong>Summary</strong>
                </div>
                <br>
                <div class="files">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3598DB"
                            class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                            <path
                                d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
                        </svg>Files&emsp;10
                    </p><br>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3598DB"
                            fill="currentColor" class="bi bi-sticky-fill" viewBox="0 0 16 16">
                            <path
                                d="M2.5 1A1.5 1.5 0 0 0 1 2.5v11A1.5 1.5 0 0 0 2.5 15h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 15 8.586V2.5A1.5 1.5 0 0 0 13.5 1h-11zm6 8.5a1 1 0 0 1 1-1h4.396a.25.25 0 0 1 .177.427l-5.146 5.146a.25.25 0 0 1-.427-.177V9.5z" />
                        </svg>Notes&emsp;35
                    </p><br>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3598DB"
                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>Experience <span class="spa">2 years<span>
                    </p><br>
                </div>
                <div class="source">
                    <span>Source</span>
                    <p style="color:black"><?php echo $row["source"]; ?></p>
                </div>
                <div class="source1">
                    <span>Available for</span>
                    <p style="color:black"><?php echo $row["candidate_type"]; ?></p>
                </div>
                <div class="source2">
                    <span>Current Salary</span>
                    <p style="color:black"><?php echo $row["current_salary"]; ?></p>
                </div>
                <div class="source3">
                    <span>Daily Rate</span>
                    <p style="color:black">N/A</p>
                </div>
            </div>
            <!-- Start of Skills box -->
            <div class="skills">
                <div class="skill">
                    <strong>Skills</strong>
                </div><br>
                <div class="skills1">
                    <span>
                        <?php
    $skills=$row['skills'];
    $explode_string = explode(',', $skills,0);
    echo $explode_string[0].'<br/><br/>';
    // echo $explode_string[1].'<br/><br/>';
    // echo $explode_string[2].'<br/><br/>';
    ?>
                    </span>
                </div>
            </div>
            <div class="status">

                <div class="status1"><b><?php echo $row["candidate_id"]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;</b>
                    <span style="color:#979797"><?php echo $row["last_updated"]; ?></span>
                </div>
                <br>
                <div class="status-name">
                    <span><?php echo $row["firstname"]; ?></span>
                    <p style="color:#3598DB"><?php echo $row["current_title"]; ?>
                        <span style="color:black; font-size:15px">|<?php echo $row["qualifications"]; ?></span>
                    </p>
                    <u
                        style="color:#979797">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u>
                    <br><br>
                    <span style="color:#979797; font-size:15px; font-family:CeraM; margin-left:-15px;">
                        Status&emsp;&emsp;&emsp;&emsp;&emsp;Availability date</span>
                    <br>
                </div>
                <div class="displayname">
                    <span
                        style="color:red"><?php echo $row["status"]; ?></span>&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $row["availability_date"]; ?>
                </div>
                <br>
                <br>
                <div class="employeement">
                    Employeement<br><br>
                    <p></p><?php echo $row["candidate_type"]; ?>
                    <br><br><br>
                    Currently Employed At<br><br>
                    <p><?php echo $row["company_name"]; ?></p>
                    <br>
                    <br><br>
                    Contact
                    <br>
                    <br>
                    <p style="margin-left:-0"><?php echo $row["candidate_email"]; ?></p>
                    <span style="color:black"><?php echo $row["countrycode"]; ?>
                        <?php echo $row["phone_no"]; ?></span><br>
                    <span style="color:black"><?php echo $row["countrycode"]; ?>
                        <?php echo $row["phone_no"]; ?></span><br>
                    <br><br>
                    Address<br><br>
                    <span style="color:black"><?php echo $row["address"]; ?><br>
                        <?php echo $row["city_name"]; ?>-<?php echo $row["zipcode"]; ?><br>
                        <?php echo $row["state"]; ?>,<?php echo $row["country"]; ?></span><br>
                    <br><br>
                    Owner<br><br>
                    <span style="color:#3598DB">Curtis Kulley</span>
                    <span style="color:black">abc@gmail.com</span><br>
                    <span style="color:black">+91 9876543210</span><br>
                    <br><br>
                    Assigned to<br><br>
                    <span style="color:#3598DB">Williams</span>
                    <span style="color:black">abc@gmail.com</span><br>
                    <span style="color:black">+91 9876543210</span><br>
                </div>
            </div>
            <div class="box-4">
                <div class="box-4-1">
                    <strong>Employeement History</strong><br><br>
                    <p>MERN stack developer</p><br>
                    <p>MERN stack developer</p>
                </div>
                <div class="box-4-1-1">
                    <span style="color:#3598DB;">Company name,City</span><br><br>
                    Job Description,brief about the job.Job Description,brief about the job.<br><br>
                    <span style="color:#979797;">November 2017-December 2019</span>
                    <br><br><br>
                    <span style="color:#3598DB">Company name,City</span><br><br>
                    Job Description,brief about the job.Job Description,brief about the job.<br><br>
                    <span style="color:#979797;">November 2017-December 2019</span>
                </div>
            </div>

            <div class="box-5">
                <div class="box-5-1">
                    <strong>Contact Info</strong><br><br>
                    <span
                        style="color:#3598DB; font-size:15px; font-family:Metro"><?php echo $row["candidate_email"]; ?></span><br><br>
                    <span style="color:black; font-size:15px; font-family:Metro"><?php echo $row["countrycode"]; ?>
                        <?php echo $row["phone_no"]; ?><br><br>
                        <?php echo $row["countrycode"]; ?> <?php echo $row["phone_no"]; ?><br><br><br>
                        <?php echo $row["address"]; ?><br><br>
                        <?php echo $row["city_name"]; ?>-<?php echo $row["zipcode"]; ?><br><br>
                        <?php echo $row["state"]; ?>,<?php echo $row["country"]; ?>.</span>
                </div>
            </div>
            <!-- Start of Task box -->
            <div class="box-6">
                <div class="imaview">Image view
                </div>
                <div class="box-6-1">
                    <strong>Tasks</strong><br><br>
                    <div class="taskscontent">
                        <img src="img/icon2.png" alt="" style="height:40px; width:40px;">
                        <p style="margin-left:50px">Fox hunt <span style="color:#3598DB">30%</span></p>
                    </div>
                    <div class="taskname"  style="margin-left:70%">
                        Task name Name of the task
                    </div>
                    <div class="assignedon"  style="margin-left:135%">
                        Assigned on <span style="color:black">20-12-2000</span>
                    </div>
                    <div class="deadline">
                        Dead line <span style="color:black">20-12-2000</span>
                    </div>
                </div>
                <div class="box-6-2">

                    <div class="taskscontent1">
                        <img src="img/icon2.png" alt=""
                            style="height:40px; width:40px; margin-top:140px; margin-left:240px; ">
                        <p style="margin-left:40px">Fox hunt <span style="color:#3598DB">30%</span></p>
                    </div>
                    <div class="taskname1"  style="margin-left:26%">
                        Task name Name of the task
                    </div>
                    <div class="assignedon1"  style="margin-left:50%">
                        Assigned on <span style="color:black">20-12-2000</span>
                    </div>
                    <div class="deadline1">
                        Dead line <span style="color:black">20-12-2000</span>
                    </div>
                </div>
            </div>
            <!-- End of Task box -->

            <!-- Start of Language box -->
            <div class="box-7">
                <div class="box-7-1">
                    <strong>Languages</strong><br><br>

                    <img src="img/a.png" alt="" style="height:50px; width:50px;">&emsp;&emsp;
                </div>
                <div class="box-7-1-1">English <span style="color:#979797;">&emsp;&emsp;Fluent</span><br><br>

                    <img src="img/a.png" alt="" style="height:50px; width:50px; margin-left:-75px; margin-top:9px">
                </div>
                <div class="box-7-1-2">English <span style="color:#979797;">&emsp;&emsp;Fluent</span><br><br>

                    <img src="img/a.png" alt="" style="height:50px; width:50px; margin-left:-75px;">
                </div>
                <div class="box-7-1-3">English <span style="color:#979797;">&emsp;&emsp;Fluent</span></div><br><br>

            </div>
            <!-- End of Language box -->

            <!-- Start of Education box -->
            <div class="box-8">
                <div class="box-8-1">
                    <strong>Education</strong><br><br>
                </div>
                <div class="degree">Bachelor of Technology(B.Tech)<br>
                    computer science</div>
                <div class="institute" style="margin-left:50%">
                    Indian Institute of Technology,Chennai.<br>
                    <span style="color:#979797;">20-12-2000</span>
                </div>
                <div class="degree">Bachelor of Technology(B.Tech)<br>
                    computer science</div>
                <div class="institute" style="margin-left:50%">
                    Indian Institute of Technology,Chennai.<br>
                    <span style="color:#979797;">20-12-2000</span>
                </div>
                <div class="degree">Bachelor of Technology(B.Tech)<br>
                    computer science</div>
                <div class="institute" style="margin-left:50%">
                    Indian Institute of Technology,Chennai.<br>
                    <span style="color:#979797;">20-12-2000</span>
                </div>
            </div>
            <!-- End  of Education box -->

            <!-- Start  of Certifications box -->
            <div class="box-9">
                <div class="box-9-1">
                    <strong>Certifications</strong><br><br>
                </div>
                <div class="certicontent">
                    <img src="img/badge.jpg" alt="" style="height:50px; width:50px; margin-left:26px;">
                    <p class="c1">Typography-01&emsp;&emsp;Futur&emsp;&emsp;<a href="#">view certificate</a><br><span
                            style="color:#979797;">2020</span></p>
                </div>
                <div class="certicontent">
                    <img src="img/badge.jpg" alt="" style="height:50px; width:50px; margin-left:26px;">
                    <p class="c1">Typography-01&emsp;&emsp;Futur&emsp;&emsp;<a href="#">view certificate</a><br><span
                            style="color:#979797;">2020</span></p>
                </div>
                <div class="certicontent">
                    <img src="img/badge.jpg" alt="" style="height:50px; width:50px; margin-left:26px;">
                    <p class="c1">Typography-01&emsp;&emsp;Futur&emsp;&emsp;<a href="#">view certificate</a><br><span
                            style="color:#979797;">2020</span></p>
                </div>
            </div>


            <!-- End  of Certifications box -->

            <!-- Start of Achievements box -->
            <div class="box-10">
                <div class="box-10-1">
                    <strong>Achievements</strong><br><br>
                </div>
                <div class="achievements">
                    Head of cyber security club in the college<br>
                    <span style="color:#979797;">2020-2021(expected)</span>
                </div><br><br> <br>
                <hr style="height:0px; width:70%;color:gray; margin-left:30px">
                <div class="achievements">
                    Head of cyber security club in the college<br>
                    <span style="color:#979797;">2020-2021(expected)</span>
                </div>
            </div>
            <!-- End  of Achievements  box -->
        </div>
    </div>
</body>
<?php }  } ?>