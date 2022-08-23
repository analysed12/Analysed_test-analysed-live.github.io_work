<?php include('header.php') ?>
<title>Dashboard</title>
<?php
   define('LOCALHOST','localhost');
   define('DB_USERNAME','root');
   define('DB_PASSWORD','');
   define('DB_NAME','analysed');
   $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die(mysqli_error());
?>
<link rel="stylesheet" href="./css/job_listings_pub-2_remov.css">
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


<body>

    <div class="main_body">
        <div class="small_container" style="margin-top:0%;"><br>
            <div class="bread-crumbs_Mytools-recruiter">
                <a href="dashboard.php" class="active-breadcrumb-link">&emsp;&emsp;&emsp;<u>Dashboard</u></a> > <a
                    href="candidate_list.php" class="active-breadcrumb-link"> <u>My Database</u></a> > <a href=""
                    class="active-breadcrumb-link"><u>Job_Listings</u></a>
                > <a href="" class="active-breadcrumb-link"><u>Actural Assistant</u></a>
            </div>
            <br>
            <div class="heading_dash1" id="heading1">
                <div class="row-flex-jobj">
                    <h1 class="mainHeadingDash" style="font-size:35px;">&emsp;&emsp;Actural Assistant</h1>
                </div>

                <div class="row-flex-jobj">
                    <a href="#">&emsp;&emsp;&emsp;&emsp;XYZ Pharmaceuticals- </a> #1544-1
                </div>
                <p><br>&emsp;&emsp;&emsp;&emsp;05-05-2020</p>
            </div>
        </div>
        <?php
$j_id=$_GET['job_id'];
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

                    }
                }
              }
                 ?>

        <div class="container container-adjust">
            <div class="row">
                <div class="col-1 mb-4">

                    <div class="options">
                        <p class="p1"><a href="job_listings_individual.php?j_id=<?php echo  $job_id ?>"
                                style="color: #979797">Glance</a></p>
                        <p class="p1"><a href="jobs_listings_activity_eval-1.php?j_id=<?php echo  $job_id ?>"
                                style="color: #979797">Applicants</a></p>
                        <p class="p1"><a href="job_listings_activity_res.php?j_id=<?php echo  $job_id ?>"
                                style="color: #979797">Activity</a></p>
                        <p><a href="job_listings_files.php?j_id=<?php echo  $job_id ?>" style="color:#979797;" id="te1">
                                Files </a></p>
                        <p><a href="job_listings_notes.php?j_id=<?php echo  $job_id ?>" style="color: #979797">Notes</a>
                        </p>
                        <p style="color:#3598DB;margin-left:-2px">Publish</p>
                    </div>
                </div>
                <div class="col-9 mb-4">

                    <?php
               if(isset($_POST['btncard']))
               {
                 ?>
                    <script type='text/javascript'>
                    $(document).ready(function() {
                        $("#btnc").hide();
                        $("#ti").show();

                    });
                    </script>
                    <?php
               }
                ?>


                    <div class="row" id="align-of-card">

                        <?php
                      $sql1="select * from joblistings";
                      $res=mysqli_query($conn,$sql1);
                      if($res == TRUE)
                      {
                          $count=mysqli_num_rows($res);
                          if($count >0)
                          {
                              while($rows=mysqli_fetch_assoc($res))
                              {

                                  $myimg=$rows['workspace_view'];
                                ?>

                        <div class="col-3">
                            <div class="card" id="pub1">
                                <div class="card-body" style="align:center"><br><br>

                                    <div id="ti" style="display:none;">
                                        <img src="img/tickimgg.png" width="100" height="95">
                                    </div>

                                    <form method="post">
                                        <button id="btnc" name="btncard">
                                            <?php echo '<img src="data:image;base64,'.base64_encode($myimg).' "  style="width: 100px; height: 95px;" >' ;   ?>
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <?php
                              }
                          }
                      }
                      ?>


                    </div><br><br>
                    <button class="nextMyTasks" id="myBtn">Next <img src="img/arrow-right.jpg" width="15"
                            height="20"></button>
                    <br>
                    <!-- cards -->




                </div>
                <div class="col-2 mb-4">
                    <div class="card" id="right-side-col" style="width:250px;">
                        <div class="card-body">

                            <div class="right-panel" style="text-align:center">
                                <!-- <div class="status1"> -->

                                <div style="font-size:14px;">
                                    <b>#JB1554-1&emsp;&emsp;&emsp;</b>
                                    <span style="color:#979797;">05-05-2020</span>
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
                                    <p style="color:#3598DB;line-height: 40%;font-size: 16px">
                                        <?php echo  $client_company ?><img src="img/launch-24px.png" width="15"
                                            height="17"><br><br><br>
                                        <span style="color:#979797;font-size:14px;"><img src="img/location-pin.png"
                                                width="13" height="13"> <?php echo  $district ?></span><br><br><br>
                                        <span style="color:#979797;line-height: 150%;font-size:14px;">
                                            <?php echo  $job_type ?>
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
                                            &nbsp;&emsp;&emsp;1/4</b></p>
                                </div><br><br>
                                <!-- <div class="displayname">  -->
                                <div>
                                    <p style="color:#979797; line-height:10%; font-size:14px;">Status
                                        &emsp;&emsp;&emsp;&emsp;&emsp;Last Contact</p>
                                    <p><span
                                            style="color:#51C46D;font-size:16px;">Active&nbsp;&emsp;&emsp;&emsp;&emsp;</span><span
                                            style="font-size:15px;font-weight:500"><?php echo  $start_date ?></span></p>
                                </div><br>
                                <!-- <div class="displayname">  -->
                                <div>
                                    <p style="color:#979797; line-height:10%;font-size:14px;">
                                        Industry&emsp;&emsp;Qualification req</p>
                                    <p style="color:#333333;font-size:16px;font-weight:600; ">
                                        <?php echo  $industry ?>&emsp;&emsp;&emsp; <?php echo  $qualification ?></p>
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
                                    </div><br>
                                </div>
                            </div>



                        </div>
                        <!-- end of card body -->
                    </div>
                    <!-- end of card -->


                </div>
                <!--end of col -->
            </div>
        </div>
        <!--end of container -->

    </div>
    <!-- end of main_body -->

</body>