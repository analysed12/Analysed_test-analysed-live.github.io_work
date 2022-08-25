<?php include('header.php') ?>


<?php
   define('LOCALHOST','localhost'); 
   define('DB_USERNAME','root');
   define('DB_PASSWORD','');
   define('DB_NAME','analysed');
   $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die(mysqli_error());
?>

<title>Dashboard</title>

<link rel="stylesheet" href="css/job_listings_notes_naman.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<link
    href="https://blogfonts.com/css/aWQ9MTc2OSZzdWI9NzY5JmM9bSZ0dGY9bWV0cm9wb2xpcy5yZWd1bGFyLm90ZiZuPW1ldHJvcG9saXMtcmVndWxhcg/Metropolis Regular.otf"
    rel="stylesheet" type="text/css" />
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


<?php
    $flag=0;
    if(isset($_POST['btnsearch']))
    {
       $textsearch=$_POST['textsearch'];
       $sql2="SELECT * FROM `notes` WHERE type='$textsearch'";
       $flag=1;
    }


    ?>
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

                    }
                }
              }
                 ?>

<body>

    <div class="main_body">
        <div class="small_container" style="margin-top:0%;"><br>
            <div class="bread-crumbs_Mytools-recruiter">
                <a href="dashboard.php" class="active-breadcrumb-link">&emsp;&emsp;&emsp;<u>Dashboard</u></a> > <a
                    href="candidate_list.php" class="active-breadcrumb-link"><u>My Database</u></a> > <a href=""
                    class="active-breadcrumb-link"><u>Job_Listings</u></a>
                > <a href="" class="active-breadcrumb-link"><u><?php echo  $position ?></u></a>
            </div>
            <br>
            <div class="heading_dash1" id="heading1">
                <div class="row-flex-jobj">
                    <h1 class="mainHeadingDash" id="position1" style="font-size:35px;">
                        &emsp;&emsp;<?php echo  $position ?></h1>
                </div>

                <div class="row-flex-jobj">
                    <a href="#">&emsp;&emsp;&emsp;&emsp;<?php echo  $client_company ?>- </a> #1544-1
                </div>
                <p><br>&emsp;&emsp;&emsp;&emsp;<?php echo  $start_date ?></p>
            </div>
        </div>

        <div class="container container-adjust">
            <div class="row">
                <div class="col-lg-1 mb-4 row-m-bottom">
                    <div class="options">
                        <p class="p1"><a href="job_listings_individual.php?j_id=<?php echo  $job_id ?>"
                                style="color:#979797;" id="te1">Glance </a></p>
                        <p class="p1"><a href="jobs_listings_activity_eval-1.php?j_id=<?php echo  $job_id ?>"
                                style="color:#979797;" id="te1">Applicants </a></p>
                        <p class="p1"><a href="job_listings_activity_res.php?j_id=<?php echo  $job_id ?>"
                                style="color:#979797;" id="te1">Activity</a></p>
                        <p class="p1"><a href="job_listings_files.php?j_id=<?php echo  $job_id ?>"
                                style="color:#979797;" id="te1">
                                Files </a></p>
                        <span style="color:#3598DB;" class="options-notes" id="te1"><b> Notes</b></span>
                        <p class="p1"><a href="job_listings_pub-2.php?j_id=<?php echo  $job_id ?>"
                                style="color:#979797;" id="te1">Publish </a></p>
                    </div>

                </div>
                <div class="col-lg-8 mb-4">
                    <div class="row">
                        <div class="filterSection_myTasks">
                            <form method="post">
                                <div class="leftFilter_myTasks">
                                    <img src="img/pen.png" width="17px" height="17px">
                                    <select id="k1">
                                        <option value="none" selected disabled hidden>Author</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                    <input type="text" name="textsearch" placeholder="Search by Note content"
                                        class="centered_span_myTasks">
                                    &emsp;
                                    <button type="submit" name="btnsearch"><img src="img/search-icon-blue.png"
                                            height="15px" width="15px"></button>
                                </div>
                            </form>

                            <button class="addFilesMyTasks" id="myBtn" style="margin-left:1px">Add +</button>

                            <div class="row">
                                <span class="sortByMyTasks">Sort By: </span><span class="recentMyTasks">Recent</span>

                            </div>
                            <div class="row">
                                <div class="filterSmall_myTasks">
                                    <div class="selectAllActions_filterSmall_myTasks" style="margin-left: 570px;"><br>
                                        <div class="select-dropdown">
                                            <input type="checkbox" name="checkboxSelectAll_myTasks"
                                                id="checkboxSelectAll_myTasks">

                                            <label for="checkboxSelectAll_myTasks">Select All</label>
                                            <select name="Select action">
                                                <option value="0">Select action</option>
                                                <option value="1">Copy</option>
                                                <option value="2">Cut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                    <br>

                    <!-- start cards -->
                    <?php
            //       if($flag == 0)
            //       {
            //           $sql2="select * from notes";
            //       }
            // //$sql="select * from notes";
            // $res=mysqli_query($conn,$sql2);
            // if($res == TRUE)
            // {
            //     $count=mysqli_num_rows($res);
            //     if($count >0)
            //     {
            //         while($rows=mysqli_fetch_assoc($res))
            //         {
            //             $Id=$rows['Id'];
            //             $n_id=$rows['n_id'];
            //             $last_updated=$rows['last_updated'];
            //             $added_on=$rows['added_on'];
            //             $added_by=$rows['added_by'];
            //             $img=$rows['img'];
            //             $type=$rows['type'];
            //             $time=$rows['time'];
            //             $content=$rows['content'];


                 ?>
                    <div class="row">
                        <div class="col-md-12 mb-4 main-card-div">
                            <div class="card ">
                                <div class="card-body">
                                    <div class="row " id="align-of-card">
                                        <div class=" card-body-checkbox">
                                            <input type="checkbox" name="checkBoxItem">
                                        </div>
                                        <div class=" card-body-div">
                                            <p class="light_spanItem_singleTask_myTasks">Last updated</p>
                                            <p style="font-family: 'metropolis-regular', sans-serif;font-size:14px;">
                                                <?php echo "05-05-2020" //$last_updated; ?></p>

                                        </div>
                                        <div class=" card-body-div">
                                            <img src="img/Ellipse 148.png" width="50px" height="50px">
                                        </div>
                                        <div class="card-body-div card-body-div-added">
                                            <p class="light_spanItem_singleTask_myTasks">Added by</p>
                                            <p style="font-family: 'metropolis-regular', sans-serif;font-size:14px;">
                                                <?php echo "Vincent Hughes" //$added_by; ?></p>
                                        </div>
                                        <div class="card-body-div card-body-div-type">
                                            <p class="light_spanItem_singleTask_myTasks">Type</p>
                                            <p style="font-family: 'metropolis-regular', sans-serif;font-size:14px;">
                                                <?php echo
                                                "Resume Evalution" //$type; ?></p>
                                        </div>
                                        <div class="card-body-div">
                                            <p class="light_spanItem_singleTask_myTasks">Time Spent</p>
                                            <p style="font-family: 'metropolis-regular', sans-serif;font-size:14px;">
                                                <?php echo "30min" //$time; ?></p>
                                        </div>
                                        <div class="card-body-div card-body-div-edit">
                                            <div class="button-div_myTasks">
                                                <button style="color:#3598DB" class="class-
                                                ">Edit <i class="fa fa-edit" aria-hidden="true"></i></button>
                                                <a href="delete_notes.php?Id=<?php //echo $Id; ?>"><button
                                                        class="class-font-size"
                                                        style="font-size:14px;color:#EC4551">Delete <i
                                                            class="fa fa-trash" aria-hidden="true"></i></button></a>

                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-1 card-body-div-1">
                                        </div>
                                        <div class="col-2">
                                            <p class="light_spanItem_singleTask_myTasks">Added on</p>
                                            <p class="class-font-size"
                                                style="font-family: 'metropolis-regular', sans-serif;font-size:14px;">
                                                <?php echo "05-05-2020" //$added_on; ?></p>
                                        </div>
                                        <div class="col-9" id="texts">
                                            <p class="class-font-size"
                                                style="font-family: 'metropolis-light-4', sans-serif;color:#333333;font-size:14px;">
                                                <?php echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, totam soluta! Sint quia sequi aliquam odio libero optio! Eligendi autem aspernatur eum quisquam eveniet nesciunt obcaecati culpa delectus velit quam." //$content; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                //         }
                //     }
                // }
            ?>

                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card" id="right-side-col" style="width: 250px;">
                        <div class="card-body" id="right-side-body">
                            <div class="right-panel" style="text-align:center">
                                <br>
                                <div id="box_12">
                                    #JB1554-1&emsp;&emsp;
                                    <span style="color:#979797;font-size:13px"><?php echo  $start_date ?></span>
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
                                    <p style="color:#3598DB;font-size: 14px"><?php echo  $client_company ?><img
                                            src="img/launch-24px.png" width="15" height="17"><br>
                                        <span style="color:#979797;font-size:14px"><i class="fa fa-map-marker"></i>
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
                                    <p><b><?php echo  $job_views ?> &nbsp;&emsp;&emsp;6 &nbsp;&emsp;&emsp;1/4</b></p>
                                </div><br><br>
                                <!-- <div class="displayname">  -->
                                <div>
                                    <p style="color:#979797; line-height:10%;font-size:14px">Status
                                        &emsp;&emsp;&emsp;Last Contact</p>
                                    <p><span style="color:#51C46D;">Active&nbsp;&emsp;&emsp;&emsp;</span><span
                                            style=""><?php echo  $start_date ?></span></p>
                                </div><br>
                                <!-- <div class="displayname">  -->
                                <div>
                                    <p style="color:#979797; line-height:10%;font-size:14px">Industry&emsp;&emsp;&emsp;
                                        Qualification req</p>
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
                <!--end of col -->
            </div>
        </div>
        <!--end of container -->

    </div>
    <!-- end of main_body -->

</body>