<?php include('header.php') ?>

<?php
   define('LOCALHOST','localhost');
   define('DB_USERNAME','root');
   define('DB_PASSWORD','');
   define('DB_NAME','analysed');
   $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die(mysqli_error());
?>

<title>job listing individual</title>
<link rel="stylesheet" href="css/job_listings_individuals_naman.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js">
</script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<style>
@media screen and (max-width:650) {
    .requiredblock {
        width: 350px !important;
        height: 125px !important;
    }
}
</style>

<?php
            $j_id=$_GET['j_id'];

            $sql="select * from joblistings where job_id='$j_id'";
            $res=mysqli_query($conn,$sql);
            if($res == TRUE)
            {
                $count=mysqli_num_rows($res);
                if($count >0)
                {
                    while($rows=mysqli_fetch_assoc($res))
                    {
                        $position=$rows['position'];
                        $start_date=$rows['start_date'];
                        $client_company=$rows['client_company'];
                        $end_date=$rows['end_date'];
                        $industry=$rows['industry'];
                        $qualification=$rows['qualification'];
                        $eligibility_criteria=$rows['eligibility_criteria'];
                        $skills=$rows['skills'];
                        $package_type=$rows['package_type'];
                        $package=$rows['package'];
                        $transportation=$rows['transportation'];
                        $required_experience=$rows['required_experience'];
                        $relevant_experience=$rows['relevant_experience'];
                        $irrelevant_experience=$rows['irrelevant_experience'];
                        $roles_and_opportunity=$rows['roles_and_opportunity'];
                        $learning_opportunity=$rows['learning_opportunity'];
                        $emp_endorsement=$rows['emp_endorsement'];
                        $emp_benefits=$rows['emp_benefits'];
                        $advert_job_description=$rows['advert_job_description'];
                        $advert_contact_name=$rows['advert_contact_name'];
                        $company_email=$rows['company_email'];
                        $advert_contact_no=$rows['advert_contact_no'];
                        $district=$rows['district'];
                        $state=$rows['state'];
                        $country=$rows['country'];
                        $job_type=$rows['job_type'];
                        $job_views=$rows['job_views'];
                        $priority=$rows['priority'];

                        $job_id=$rows['job_id'];

                        
                        //$Files=$rows['Files'];
                        //$Applicants=$rows['Applicants'];
                        //$Notes=$rows['Notes'];

                        $j_id=$_GET['j_id'];
                    }
                }
              }
                 ?>

<body>

    <br>
    <div class="bread-crumbs_Mytools-recruiter">
        <a href="dashboard.php"
            class="active-breadcrumb-link">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<u>Dashboard</u> </a> > <a
            href="candidate_list.php" class="active-breadcrumb-link"><u> My Database </u></a> > <a
            href="job_listings.php" class="active-breadcrumb-link"> <u>Job Listings </u></a>
        > <a href="" class="active-breadcrumb-link"><u><?php echo  $position ?></u></a>
    </div>

    <div class="container main-container">
        <div class="small_container">
            <div class="heading_dash1">
                <div class="row-flex-jobj">
                    <h1 class="mainHeadingDash"><?php echo  $position ?></h1>
                    <!-- <img src="./img/List icon.svg" style="margin-left: 30px;"> -->
                </div>
                <!-- <div class="mainParaDashDiv row-flex-jobj"> -->
                <div class="row-flex-jobj">
                    <a href="#"><?php echo  $client_company ?> &nbsp;- &nbsp;</a> #1544-1
                </div>
                <p style="color:#979797"><?php echo  $start_date ?></p>
                <!-- </div> -->
            </div>
            <div class="row">
                <div class="col-lg-1">
                    <div class="options">
                        <p style="color:#3598DB;margin-left:-2px"> <b style="margin-right: 5px;">|</b>Glance</p>
                        <p><a href="jobs_listings_activity_eval-1.php?j_id=<?php echo  $job_id ?>"
                                style="color: #979797">Applicants</a></p>
                        <p><a href="job_listings_activity_res.php?j_id=<?php echo  $job_id ?>"
                                style="color: #979797">Activity</a></p>
                        <p><a href="Job_listings_files.php?j_id=<?php echo  $job_id ?>" style="color: #979797">Files</a>
                        </p>
                        <p><a href="job_listings_notes.php?j_id=<?php echo  $job_id ?>" style="color: #979797">Notes</a>
                        </p>
                        <p><a href="job_listings_pub-2.php?j_id=<?php echo  $job_id ?>"
                                style="color: #979797">Publish</a></p>
                    </div>
                </div>

                <div class="col-lg-8 mb-4">
                    <div class="row" id="card-of-2">
                        <div class="col-7">
                            <br><br>
                            <div class="card" id="card-1-of-2">
                                <div class="card-body">
                                    <p class="m1"><strong>Summary</strong>
                                        <span id="summ">Last edited</span>
                                        <span
                                            style="color:#333333;font-size:14px"><b><?php echo  $start_date ?></b></span>
                                    </p><br>
                                    <div class="row">
                                        <div class="col-5">
                                            <p id="box_12"><img src="img/page.png" width="20"
                                                    height="20">&nbsp;Files&nbsp;<?php //echo $Files; ?></p>
                                            <p id="box_12"><img src="img/notes.png" width="20"
                                                    height="20">&nbsp;Notes&nbsp;<?php //echo $Notes; ?></p>
                                            <p id="box_12"><img src="img/briefcase.png" width="20"
                                                    height="20">&nbsp;Applicants&nbsp;<?php //echo $Applicants; ?></p>
                                        </div>
                                        <div class="col-7">
                                            <p style="color:#979797;font-size:14px;line-height:1.6">
                                                Industry&emsp;&emsp;&emsp;&emsp;&nbsp;Source<br>
                                                <span
                                                    style="color:#333333;font-size:16px;"><b><?php echo  $industry ?>&emsp;&emsp;&emsp;LinkedIn</b></span>
                                            </p>
                                            <p style="color:#979797;font-size:14px;line-height:1.6">Qualification
                                                req&emsp;Citizenship crit<br>
                                                <span
                                                    style="color:#333333;font-size:14px;"><?php echo  $qualification ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo  $eligibility_criteria ?></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <br><br>
                            <div class="card requiredblock">
                                <div class="card-body">
                                    <p class="m1"><strong>Required Skills</strong></p>
                                    <?php
                            $skills_arr = explode (",", $skills);
                            foreach($skills_arr as $value)
                            {
                        ?>
                                    <div class="chip"><?php echo $value;?></div>
                                    <?php
                            }
                        ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row " id="package">
                        <div class="col-4">
                            <div class="card" id="cards">
                                <div class="card-body ">
                                    <p class="b1">Package Type</p>
                                    <p class="b2"><?php echo  $package_type ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" id="cards">
                                <div class="card-body">
                                    <p class="b1">Package</p>
                                    <p class="b2">Rs. <?php echo  $package ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" id="cards">
                                <div class="card-body">
                                    <p class="b1">Transportation</p>
                                    <p class="b2"><?php echo  $transportation ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="row" id="experience">
                        <div class="col-4">
                            <div class="card" id="exp-card">
                                <div class="card-body">
                                    <p class="b1">Experience requirement</p>
                                    <p class="b3"><?php echo  $required_experience ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" id="exp-card">
                                <div class="card-body">
                                    <p class="b1">Relevant experience</p>
                                    <p class="b3"><?php echo  $relevant_experience ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" id="exp-card">
                                <div class="card-body">
                                    <p class="b1">Irrelevant experience</p>
                                    <p class="b3"><?php echo  $irrelevant_experience ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br><br>
                    <p class="indi1">Roles and responsibilities</p>
                    <p class="indi2"><?php echo  $roles_and_opportunity ?></p>

                    <br>
                    <p class="indi1">Learning oppurtunities</p>
                    <p class="indi2"><?php echo  $learning_opportunity ?></p>

                    <br>
                    <p class="indi1">Employee endorsements</p>
                    <p class="indi2"><?php echo  $emp_endorsement ?></p>

                    <br>
                    <p class="indi1">Employee benefits</p>
                    <p class="indi2"><?php echo  $emp_benefits ?></p>

                    <br>
                    <p class="indi1">Job description for the advert</p>
                    <p class="indi2"><?php echo  $advert_job_description ?></p>

                    <br>
                    <p class="indi1">Contact information for the advert</p>
                    <div class="row">
                        <div class="col-5">
                            <p class="b3" style="line-height:1.7"><?php echo  $advert_contact_name ?>
                                <br><?php echo  $company_email ?> <br><?php echo  $advert_contact_no ?>
                            </p>
                        </div>
                        <div class="col-7">
                            <p class="b3" style="line-height:1.7"><?php echo  $district ?> <br><?php echo  $state ?>
                                <?php echo  $country ?></p>
                        </div>
                    </div>
                </div>
                <!--center section-->

                <div class="col-lg-3 mb-4">

                    <br><br>
                    <div class="card" id="right-side-col">
                        <div class="card-body" id="right-side-body">
                            <div class="right-panel" id="right-side-body" style="text-align:center">
                                <br>
                                <div id="box_12">
                                    #JB1554-1&emsp;&emsp;
                                    <span style="color:#979797;"><?php echo  $start_date ?></span>
                                </div><br>
                                <div class="status-name">
                                    <!-- <div> -->
                                    <span id="r1"> <?php
                   if($priority == '3')
                   {
                ?>
                                        <img src="img/red-icon.png" width="30" height="20">
                                        <?php
                   }
                   elseif($priority == '2')
                   {
                ?>
                                        <img src="img/orange-icon.png" width="20" height="20">
                                        <?php
                    }
                    elseif($priority == '1')
                    {
                ?>
                                        <img src="img/Yellow-icon.png" width="20" height="20">
                                        <?php
                    }
                ?> <?php echo  $position ?></span>
                                    <p style="color:#3598DB;"><?php echo  $client_company ?><img
                                            src="img/launch-24px.png" width="15" height="17"><br>
                                        <span style="color:#979797;"><i class="fa fa-map-marker"></i>
                                            <?php echo  $district ?></span><br>
                                        <span style="color:#979797;line-height: 3;"><?php echo  $job_type ?>
                                    </p>
                                    <hr style="color:#979797;width:100%">
                                    </hr>
                                </div>
                                <!-- <div class="displayname">  -->
                                <div>

                                    <img src="img/eye-icon.jpg" width="25" height="20">&emsp;&emsp;
                                    <img src="img/task-icon.png" width="23" height="25">&emsp;&emsp;
                                    <img src="img/person-icon.png" width="23" height="20">
                                </div>
                                <!-- <div class="displayname">  -->
                                <div>
                                    <p><b><?php echo  $job_views ?> &nbsp;&emsp;&emsp;&emsp;&emsp;6
                                            &nbsp;&emsp;&emsp;1/4</b>
                                    </p>
                                </div><br><br>
                                <!-- <div class="displayname">  -->
                                <div>
                                    <p style="color:#979797; line-height:10%;">Status &emsp;&emsp;&emsp;Last Contact</p>
                                    <p><span style="color:#51C46D;">Active&nbsp;&emsp;&emsp;&emsp;</span><span
                                            style=""><?php echo  $start_date ?></span></p>
                                </div><br>
                                <!-- <div class="displayname">  -->
                                <div>
                                    <p style="color:#979797; line-height:10%;">Industry&emsp;&emsp;&emsp; Qualification
                                        req</p>
                                    <p style="color:#333333; "><b><?php echo  $industry ?>&emsp;&emsp;&emsp;&emsp;&emsp;
                                            <?php echo  $qualification ?>&emsp;&emsp;</b></p>
                                </div><br>
                                <!-- <div class="displayname"> -->
                                <div class="info1">
                                    <div>
                                        <p style="color:#979797; ">Created by</p>
                                        <p style="color:#3598DB; "><?php echo  $advert_contact_name ?></p>
                                        <p style="color:#333333; line-height:10%"><?php echo  $company_email ?></p>
                                        <p style="color:#333333; line-height:30%">+91 <?php echo  $advert_contact_no ?>
                                        </p>
                                    </div><br>

                                    <!-- <div class="displayname"> -->
                                    <div>
                                        <p style="color:#979797; ">Active Contact</p>
                                        <p style="color:#3598DB; "><?php echo  $advert_contact_name ?></p>
                                        <p style="color:#333333; line-height:10%"><?php echo  $company_email ?></p>
                                        <p style="color:#333333; line-height:30%">+91 <?php echo  $advert_contact_no ?>
                                        </p>
                                    </div><br>

                                    <!-- <div class="displayname"> -->
                                    <div>
                                        <p style="color:#979797; ">Assigned to</p>
                                        <p style="color:#3598DB; "><?php echo  $advert_contact_name ?></p>
                                        <p style="color:#333333; line-height:10%"><?php echo  $company_email ?></p>
                                        <p style="color:#333333; line-height:30%">+91 <?php echo  $advert_contact_no ?>
                                        </p>
                                    </div><br>

                                    <!-- <div class="displayname"> -->
                                    <div>
                                        <p style="color:#979797; ">Contact info</p>
                                        <p style="color:#3598DB; "><?php echo  $company_email ?></p>
                                        <p style="color:#333333; line-height:10%">+91 <?php echo  $advert_contact_no ?>
                                        </p>
                                        <p style="color:#333333; line-height:30%">+91 <?php echo  $advert_contact_no ?>
                                        </p>
                                    </div><br>
                                    <!-- <div class="displayname"> -->
                                    <div>
                                        <p style="color:#979797; ">Address</p>
                                        <p style="color:#333333; "><?php echo  $district ?> <br><?php echo  $state ?>,
                                            <?php echo  $country ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- right panel close -->
                        </div>
                        <!-- end of card body -->
                    </div>
                    <!-- end of card -->
                </div>
                <!-- end of column -->



            </div>
            <!-- Row ended -->


</body>