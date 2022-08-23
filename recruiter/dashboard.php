<?php include('recruiter_header.php');
       include('connection1.php'); ?>
<link rel="stylesheet" href="./css/dashboard.css">
<link rel="stylesheet" href="./css/circle.css">

<div class="floating-divand-button-dashboard-recruiter">
    <ul class="floating-div-ul-dashboard-recruiter">
        <li><a href="addClient.php">Add Client</a></li>
        <li><a href="addContact.php">Add Contact</a></li>
        <li><a href="../addCandidate.php">Candidate</a></li>
        <li><a href="../schedule.php">Schedule Interview</a></li>
        <li><a href="createRecruitement.php">Create Job</a></li>
        <li><a href="createTasks.php">Create Task</a></li>
    </ul>
    <button class="floating-button-bottom-left-recruiter-db"><i class="fa fa-plus" aria-hidden="true"></i></button>
</div>
<div class="small_container-1">
    <div class="heading_dash">
        <h1 class="mainHeadingDash">Quick access</h1>
        <p class="mainParaDash">Navigate with ease to essential pages</p>
    </div>
    <div class="row-recruiter quickaccess-links-container">
        <a href="schedule.php" class="quickaccess-links-recruiter">My Schedule <i class="fa fa-calendar-check-o"
                aria-hidden="true"></i></a>
        <a href="mails.php" class="quickaccess-links-recruiter">My Mails <i class="fa fa-envelope-o"
                aria-hidden="true"></i></a>
        <a href="my_files.php" class="quickaccess-links-recruiter">My Files <i class="fa fa-file-code-o"
                aria-hidden="true"></i></a>
        <a href="../myTasksNew.php" class="quickaccess-links-recruiter">My Tasks <i class="fa fa-check"
                aria-hidden="true"></i></a>
    </div>
    <div class="main-dashboard-container-recruiter">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Dashboard</h1>
            <p class="mainParaDash">Welcome back
                <?php
                                            $sql="SELECT firstname FROM recruiter where email= '" . $_SESSION['email'] . "'";
                                        	$result_1 = mysqli_query($db,$sql);
                                            while ($row = mysqli_fetch_array($result_1)) {
                                                echo $row['firstname'];}
                                        
                                        	 ?>!</p>
        </div>
        <section class="cards_recruiter-items row-recruiter">
            <div class="cardItemDash_recruiter">
                <section class="numberSection"><a href="DashboardJobs.php">
                        <p class="cardItemDash_recruiterheadingCards">Jobs Created</p>
                        <h3 class="cardItemDash_recruiternumberCards"><?php
                                        	$id = $db->query("SELECT * FROM joblistings");
                                        	echo $id->num_rows;
                                        	 ?></h3>
                </section>
                <div class="c100 p25" style="background-color: #EC45512E;">
                    <span style="color: #EC4551!important;">+4%</span>
                    <div class="slice">
                        <div class="bar" style="border-color: #EC4551!important;"></div>
                        <div class="fill" style="border-color: #EC4551!important;"></div>
                    </div>
                </div></a>
            </div>
            <div class="cardItemDash_recruiter">
                <section class="numberSection"><a href="Appliedcandidates.php">
                        <p class="cardItemDash_recruiterheadingCards">Applied candidates</p>
                        <h3 class="cardItemDash_recruiternumberCards"><?php
                                        	$id = $db->query("SELECT * FROM jobseeker");
                                        	echo $id->num_rows;
                                        	 ?></h3>
                </section>
                <div class="c100 p65" style="background-color: #FFC73C40;">
                    <span style="color: #FDCA3B!important;">+5%</span>
                    <div class="slice">
                        <div class="bar" style="border-color: #FDCA3B!important;"></div>
                        <div class="fill" style="border-color: #FDCA3B!important;"></div>
                    </div>
                </div></a>
            </div>
            <div class="cardItemDash_recruiter">
                <section class="numberSection"><a href="interviewDone.php">
                        <p class="cardItemDash_recruiterheadingCards">Interviews done</p>
                        <h3 class="cardItemDash_recruiternumberCards"><?php
                                        	$id = $db->query("SELECT * FROM interview");
                                        	echo $id->num_rows;
                                            ?></h3>
                </section>
                <div class="c100 p29" style="background-color: #E0FADC;">
                    <span style="color: #0F9D58!important;">+14%</span>
                    <div class="slice">
                        <div class="bar" style="border-color: #0F9D58!important;"></div>
                        <div class="fill" style="border-color: #0F9D58!important;"></div>
                    </div>
                </div></a>
            </div>
            <div class="cardItemDash_recruiter">
                <section class="numberSection"><a href="hiredCandidates.php">
                        <p class="cardItemDash_recruiterheadingCards">Hired candidates</p>
                        <h3 class="cardItemDash_recruiternumberCards"><?php
                                        	$id = $db->query("SELECT * FROM jobseeker where job_status='Hired'");
                                        	echo $id->num_rows;
                                            ?></h3>
                </section>
                <div class="c100 p29" style="background-color: #D3EEFF;">
                    <span style="color: #3598DB!important;">+14%</span>
                    <div class="slice">
                        <div class="bar" style="border-color: #3598DB!important;"></div>
                        <div class="fill" style="border-color: #3598DB!important;"></div>
                    </div>
                </div></a>
            </div>
            <div class="cardItemDash_recruiter">
                <section class="numberSection"><a href="TasksCreated.php">
                        <p class="cardItemDash_recruiterheadingCards">Tasks Created</p>
                        <h3 class="cardItemDash_recruiternumberCards"><?php
                                        	$id = $db->query("SELECT * FROM task");
                                        	echo $id->num_rows;
                                            ?></h3>
                </section>
                <div class="c100 p29" style="background-color: #8C60EB4F;">
                    <span style="color:#8C60EB!important;">+14%</span>
                    <div class="slice">
                        <div class="bar" style="border-color: #8C60EB!important;"></div>
                        <div class="fill" style="border-color: #8C60EB!important;"></div>
                    </div>
                </div></a>
            </div>
            <div class="cardItemDash_recruiter">
                <section class="numberSection"><a href="../shortListedJobs.php">
                        <p class="cardItemDash_recruiterheadingCards">Shortlisted</p>
                        <h3 class="cardItemDash_recruiternumberCards"><?php
                                        	$id = $db->query("SELECT * FROM jobseeker");
                                        	echo $id->num_rows;
                                            ?></h3>
                </section>
                <div class="c100 p29" style="background-color: #E84BC42B;">
                    <span style="color: #E84BC4!important;">+14%</span>
                    <div class="slice">
                        <div class="bar" style="border-color: #E84BC4!important;"></div>
                        <div class="fill" style="border-color: #E84BC4!important;"></div>
                    </div>
                </div></a>
            </div>
        </section>
        <section class="active-jobs_recruiter row-recruiter">
            <div class="chart-div_active-jobs_recruiter">
                <span class="row-recruiter chart-span_active-jobs_recruiter">
                    <p>Active Jobs</p>

                </span>
                <div class="active_jobs_img">
                    <img src="img/graph.png">
                </div>
                <!-- <div id="curve_chart" style="width: 500px; height: 400px"></div> -->
                <div class="jobtitles_chart-div_active-jobs_recruiter">
                    <span>
                        <p>Job title</p>
                        <p>Applications</p>
                    </span>
                    <span>
                        <p>MERN stack developer</p>
                        <p><?php
                                        	$id = $db->query("SELECT job_title FROM jobapply WHERE job_title='MERN stack developer'");
                                        	echo $id->num_rows;
                                            ?></p>
                    </span>
                    <span>
                        <p>Android Studio Developer</p>
                        <p><?php
                                        	$id = $db->query("SELECT job_title FROM jobapply WHERE job_title='Android Studio Developer'");
                                        	echo $id->num_rows;
                                            ?></p>
                    </span>
                    <span>
                        <p>Django developer</p>
                        <p><?php
                                        	$id = $db->query("SELECT job_title FROM jobapply WHERE job_title='Django developer'");
                                        	echo $id->num_rows;
                                            ?></p>
                    </span>
                    <span>
                        <p>React-native front end developer</p>
                        <p><?php
                                        	$id = $db->query("SELECT job_title FROM jobapply WHERE job_title='React-native front end developer'");
                                        	echo $id->num_rows;
                                            ?></p>
                    </span>
                </div>
            </div>
            <div class="applications-new-applications_active-jobs_recruiter">
                <div class="applications_active-jobs_recruiter_div">
                    <span class="row-recruiter chart-span_active-jobs_recruiter">
                        <p>Applications</p>
                        <a href="#">Last 30 days</a>
                    </span>
                    <div class="linebar_spanwidth_applications row-recruiter">
                        <span style="background-color:#51C46D;height:5px;width:4%;display:inline-block"> </span>
                        <span style="background-color:#6EC5FF;height:5px;width:13%;display:inline-block"> </span>
                        <span style="background-color:#FDCA3B;height:5px;width:27%;display:inline-block"> </span>
                        <span style="background-color:#EC4551;height:5px;width:56%;display:inline-block"> </span>
                    </div>
                    <div class="linebar_description_applications row-recruiter">
                        <span style="padding:10px 0px;">
                            <span
                                style="background-color:#51C46D;height:10px;width:10px;border-radius:100%;display:inline-block"></span>
                            Approved
                        </span>
                        <p><?php
                                        	$id = $db->query("SELECT approved FROM jobapply WHERE approved=1 AND date BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()");
                                        	echo $id->num_rows;
                                            ?></p>
                    </div>
                    <div class="linebar_description_applications row-recruiter">
                        <span style="padding:10px 0px;">
                            <span
                                style="background-color:#6EC5FF;height:10px;width:10px;border-radius:100%;display:inline-block"></span>
                            Shortlisted
                        </span>
                        <p><?php
                                        	$id = $db->query("SELECT shortlist FROM jobapply WHERE shortlist=1 AND date BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()");
                                        	echo $id->num_rows;
                                            ?></p>
                    </div>
                    <div class="linebar_description_applications row-recruiter">
                        <span style="padding:10px 0px;">
                            <span
                                style="background-color:#FDCA3B;height:10px;width:10px;border-radius:100%;display:inline-block"></span>
                            On-hold
                        </span>
                        <p><?php
                                        	$id = $db->query("SELECT on_hold FROM jobapply WHERE on_hold=1 AND date BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()");
                                        	echo $id->num_rows;
                                            ?></p>
                    </div>
                    <div class="linebar_description_applications row-recruiter">
                        <span style="padding:10px 0px;">
                            <span
                                style="background-color:#EC4551;height:10px;width:10px;border-radius:100%;display:inline-block"></span>
                            Rejected
                        </span>
                        <p><?php
                                        	$id = $db->query("SELECT reject FROM jobapply WHERE reject=1 AND date BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()");
                                        	echo $id->num_rows;
                                            ?></p>
                    </div>


                </div>
                <div class="newapplications_active-jobs_recruiter_div">
                    <span class="row-recruiter chart-span_active-jobs_recruiter">
                        <p>New applicants</p>
                        <a href="#">Today</a>
                    </span>
                    <div class="row-recruiter applicant_single_recruiter_div">
                        <?php $result = mysqli_query($db, "SELECT * FROM jobapply where date=CURDATE()"); ?>


                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>

                                </tr>
                            </thead>
                            <?php while ($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo $row['fname']; ?></td>
                                <td><?php echo $row['job_title']; ?></td>



                            </tr>

                            <?php }?>
                        </table>
                    </div>
                </div>
            </div>

    </div>
    </section>
    <section class="upcoming_interviews_recruiter_div ">
        <span class="row-recruiter upcoming_interview_top_span">
            <p>Upcoming Interviews</p>
            <a href="schedule.php">Schedule an Interview +</a>
        </span>

        <?php $result = mysqli_query($db, "SELECT * FROM interview"); ?>
        <div class="card mb-4">
            <div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" height="350px" cellspacing="0">
                    <thead style="background-color: rgb(173, 216, 230); height: 40px; font-size: 13px;">
                        <tr>
                            <th style="text-align: left;padding: 6px; justify-content: left;">Name</th>
                            <th style="text-align: left;padding: 6px; justify-content: left;">Date</th>
                            <th style="text-align: left;padding: 6px; justify-content: left;">Position</th>
                        </tr>
                    </thead>
                    <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tr
                        style="position: relative; left: 6px; justify-content: space-between;  padding: 1px 2px 3px 4px;">
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['position']; ?></td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Approved', 'Shortlist'],


                //PHP Code

                <?php
              $query="select * from chart";
              $res=mysqli_query($conn,$query);
              while($data=mysqli_fetch_array($res)){
                $year=$data['year'];
                $sale=$data['sale'];
                $expense=$data['expenses'];
          ?>['<?php echo $year;?>', <?php echo $sale;?>, <?php echo $expense;?>],
                <?php
              }

          ?>


            ]);

            var options = {
                title: 'JOBS',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
        </script>

        <script src="./js/dashboard.js"></script>


        <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
        </script>