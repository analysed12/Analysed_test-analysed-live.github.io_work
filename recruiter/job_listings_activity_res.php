<?php include('header.php') ?>
<?php
   include 'connection1.php';
   // session_start();
?>

<head>
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" href="job_listings_files2.css"> -->
    <link rel="stylesheet" href="css/job_listings_activity_res_re.css">
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>

    <meta name="viewport" content="width=device-width,initial-scale=1.0">
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
        $flag1=0;
        $flag2=0;
        $flag3=0;
        if(isset($_POST['btnsearch1']))
        {
            $text1=$_POST['text1'];
            $sql1="select * from joblistings where contact_client_company='$text1'";
            $flag1=1;
        }

        if(isset($_POST['btnsearch2']))
        {
            $text2=$_POST['text2'];
            $sql2="select * from joblistings where contact_client_company='$text2'";
            $flag2=1;
        }

        if(isset($_POST['btnsearch3']))
        {
            $text3=$_POST['text3'];
            $sql3="select * from joblistings where contact_client_company='$text3'";
            $flag3=1;
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
                        $status=$rows['status'];
                        $priority=$rows['priority'];
                        $job_id=$rows['job_id'];

                        $j_id=$_GET['j_id'];
                    }
                }
              }
                 ?>
    <style type="text/css">
    #web_down_icon,
    #re_down_icon,
    #sr_down_icon,
    #place_down_icon {
        display: none;
    }

    #webresponses,
    #ResumeEvaluation,
    #SubmittedResumes,
    #Placements {
        display: none;
    }
    </style>

</head>

<body>
    <div class="bread-crumbs_Mytools-recruiter">
        <a href="dashboard.php" class="active-breadcrumb-link"><u>Dashboard</u></a> > <a href="candidate_list.php"
            class="active-breadcrumb-link"><u>My Database</u></a> > <a href=""
            class="active-breadcrumb-link"><u>Job_Listings</u></a>
        > <a href="" class="active-breadcrumb-link"><u><?php echo  $position ?></u></a>
    </div>
    <div class="container container-justify">
        <div class="small_container">
            <div class="heading_dash1" id="heading">
                <div class="row-flex-jobj">
                    <h1 class="mainHeadingDash"><?php echo  $position ?></h1>
                </div>
                <div class="row-flex-jobj">
                    <a href="#"><?php echo  $client_company ?>- </a> #1544-1

                </div>
                <p><br><?php echo  $start_date ?></p>
            </div>
            <div class="row">
                <div class="col-lg-1 mb-4">
                    <div class="options">
                        <p class="options-p"><a href="job_listings_individual.php?j_id=<?php echo  $job_id ?>"
                                style="color: #979797">Glance</a></p>
                        <p><a href="jobs_listings_activity_eval-1.php?j_id=<?php echo  $job_id ?>"
                                style="color: #979797">Applicants</a></p>
                        <p style="color:#3598DB;margin-left:-2px"> <b style="margin-right: 5px;">|</b>Activity</p>
                        <p><a href="Job_listings_files.php?j_id=<?php echo  $job_id ?>" style="color: #979797">Files</a>
                        </p>
                        <p><a href="job_listings_notes.php?j_id=<?php echo  $job_id ?>" style="color: #979797">Notes</a>
                        </p>
                        <p><a href="job_listings_pub-2.php?j_id=<?php echo  $job_id ?>"
                                style="color: #979797">Publish</a></p>
                    </div>
                </div>


                <div class="col-lg-8 mb-4" id="responses">
                    <!--  Start  of Web Responses -->
                    <p><br><br><b>Web responses</b>
                        <button id="web_right_icon"> <img src="img/dropdown_icon.jpeg" width="20px" height="20px">
                        </button>
                        <button id="web_down_icon"> <img src="img/dropdown_icon2.jpeg" width="20px" height="20px">
                        </button>
                    </p>

                    <br>
                    <div id="webresponses">
                        <div class="row">
                            <div class="col-7">
                                <form method="post">
                                    <div class="leftFilter_myTasks">
                                        <img src="img/chrome.png" width="20px" height="20px">
                                        <select>

                                            <option value="none" selected disabled hidden id="value_sel">All sources
                                            </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>

                                        <input type="text" name="text1" placeholder="Search by candidate"
                                            class="inputSearchFileName_myTasks">
                                        <button type="submit" name="btnsearch1" class="searchButton_myTasks"><i
                                                class="fa fa-search" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-5 filter-div">
                                <div class="row">
                                    <div class="rightFilter_myTasks">
                                        <span class="sortByMyTasks" style="margin-left:100px">Sort By: </span><span
                                            class="recentMyTasks">Recent </span>
                                        Source

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="filterSmall_myTasks">
                                        <div class="selectAllActions_filterSmall_myTasks">
                                            &emsp;
                                            <input type="checkbox" name="checkboxSelectAll_myTasks"
                                                id="checkboxSelectAll_myTasks">
                                            <label for="checkboxSelectAll_myTasks">Select All</label>
                                            <select name="Select action" style="color:#979797;width:80px">

                                                <option value="0">Select Action &nbsp;v</option>
                                                <option value="1">Copy</option>
                                                <option value="2">Cut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="singleTasks_containerDiv">
                            <?php
                           if($flag1 == 0)
                           {
                               $sql1="select * from joblistings";
                           }

                            $res=mysqli_query($conn,$sql1);
                            if($res == TRUE)
                            {
                                $count=mysqli_num_rows($res);
                                if($count >0)
                                {
                                    while($rows=mysqli_fetch_assoc($res))
                                    {

                                        $logo=$rows['logo'];
                                        $recruiters_name=$rows['recruiters_name'];
                                        $company_email=$rows['company_email'];
                                        $start_date=$rows['start_date'];
                                        $qualification=$rows['qualification'];
                                        $contact_client_company=$rows['contact_client_company'];
                                        $required_experience=$rows['required_experience'];

                                ?>
                            <div class="singletask_myTasks order-div-1">
                                <input type="checkbox" name="checkBoxItem">&emsp;
                                <span class="div-1-1">
                                    <p class="light_spanItem_singleTask_myTasks">Added on</p>
                                    <p class="light_spanItem_singleTask_myTasks" style="color:#333333;">
                                        <?php echo $start_date; ?></p>
                                </span>&emsp;
                                <!-- <?php echo '<img src="data:image;base64,'.base64_encode($logo).' "  style="width: 50px; height: 50px;" >' ;   ?> -->
                                <span class="div-1-2">
                                    <p class="light_spanItem_singleTask_myTasks"
                                        style="color:#297FB8;margin-bottom:5px;margin-right:50px;">
                                        <?php echo $contact_client_company; ?>&emsp;<span
                                            style="color:#333333;font-size:14px"><?php echo $qualification; ?></span>
                                    </p>
                                    <p class="light_spanItem_singleTask_myTasks"
                                        style="color:#333333;margin-bottom:5px;">
                                        <?php echo $company_email; ?>&emsp;&emsp;&emsp;</p>
                                </span>

                                <p class="through-linkedin">Through</p>
                                <span class="light_spanItem_singleTask_myTasks div-1-3"
                                    style=" color:#297FB8;margin-bottom:5px;">Linkedin&emsp;</span>
                                <span class="light_spanItem_singleTask_myTasks"
                                    style="color:#333333;"><?php echo $required_experience; ?></span>
                            </div>
                            <?php
                        }
                    }
                }
                ?>
                        </div>
                        <br>
                    </div> <!--  End of Web Responses -->

                    <!-- Start of Resume Evaluation -->
                    <p><b>Resume Evaluation</b>
                        <button id="re_right_icon"> <img src="img/dropdown_icon.jpeg" width="20px" height="20px">
                        </button>
                        <button id="re_down_icon"> <img src="img/dropdown_icon2.jpeg" width="20px" height="20px">
                        </button>
                    </p>

                    <br>
                    <div id="ResumeEvaluation">
                        <div class="row">
                            <div class="col-6 col-6-replace">
                                <form method="post">
                                    <div class="leftFilter_myTasks">
                                        <img src="img/eye.png" width="20px" height="20px">
                                        <select>
                                            <option value="none" selected disabled hidden id="value_sel">Search
                                                Recruiter</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                        <input type="text" name="text2" placeholder="Search by candidate"
                                            class="inputSearchFileName_myTasks">
                                        <button type="submit" name="btnsearch2"
                                            class="searchButton_myTasks edit-search-button edit-button-div-2"><i
                                                class="fa fa-search" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-6 filter-div">
                                <div class="row">
                                    <div class="rightFilter_myTasks">
                                        <span class="sortByMyTasks" style="margin-left:100px">Sort By: </span><span
                                            class="recentMyTasks">Recent </span>
                                        Last Edited

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="filterSmall_myTasks">
                                        <div class="selectAllActions_filterSmall_myTasks">
                                            &emsp;&emsp;&emsp;
                                            <input type="checkbox" name="checkboxSelectAll_myTasks"
                                                id="checkboxSelectAll_myTasks">
                                            <label for="checkboxSelectAll_myTasks">Select All</label>
                                            <select name="Select action" style="color:#979797;width:80px">

                                                <option value="0">Select Action &nbsp;v</option>
                                                <option value="1">Copy</option>
                                                <option value="2">Cut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="singleTasks_containerDiv">
                            <?php
                          if($flag2 ==0)
                          {
                            $sql2="select * from joblistings";
                          }

                $res=mysqli_query($conn,$sql2);
                if($res == TRUE)
                {
                    $count=mysqli_num_rows($res);
                    if($count >0)
                    {
                        while($rows=mysqli_fetch_assoc($res))
                        {

                            $logo=$rows['logo'];
                            $recruiters_name=$rows['recruiters_name'];
                            $company_email=$rows['company_email'];
                            $status=$rows['status'];
                            $start_date=$rows['start_date'];
                            $qualification=$rows['qualification'];
                            $contact_client_company=$rows['contact_client_company'];


                    ?>
                            <div class="singletask_myTasks singletask-align order-div-2">
                                <input type="checkbox" name="checkBoxItem" id="te2"> &emsp;
                                <?php echo '<img src="data:image;base64,'.base64_encode($logo).' "  style="width: 50px; height: 50px;" >' ;   ?>
                                <span class="div-2-1">
                                    <p class="light_spanItem_singleTask_myTasks1"><?php echo $contact_client_company; ?>
                                        (<?php echo $qualification; ?>)</p>
                                    <p class="light_spanItem_singleTask_myTasks"><?php echo $company_email; ?></p>
                                </span>&emsp;
                                <span class="div-2-2">
                                    <p class="light_spanItem_singleTask_myTasks">Status</p>
                                    <?php
                        if($status == 'Approved')
                        {
                    ?>
                                    <p style="color:#51C46D;font-size:14px">Approved</p>
                                    <?php
                        }
                        elseif($status == 'Rejected')
                        {
                    ?>
                                    <p style="color:#EC4551;font-size:14px">Rejected</p>
                                    <?php
                        }
                        elseif($status == 'Shortlisted')
                        {
                    ?>
                                    <p style="color:#FFBD06;font-size:14px">Shortlisted</p>
                                    <?php
                        }
                    ?>

                                </span>&emsp;
                                <span class="div-2-3">
                                    <p class="light_spanItem_singleTask_myTasks">Through</p>
                                    <p style="color:#3598DB;">LinkedIn</p>
                                </span>&emsp;&emsp;
                                <span class="div-2-4">
                                    <p class="light_spanItem_singleTask_myTasks">Recruiter name</p>
                                    <p><b><?php echo $recruiters_name; ?></b></p>
                                </span>&emsp;
                                <span class="div-2-5">
                                    <p class="light_spanItem_singleTask_myTasks">Added on <span
                                            style="color:#333333"><?php echo $start_date; ?></span></p>
                                    <p style="color:#3598DB;">&emsp;View resume</p>
                                </span>

                            </div>
                            <?php
                        }
                    }
                }
                ?>
                        </div>
                        <br>

                    </div>
                    <!-- start of Submitted Resumes -->
                    <p><b>Submitted Resumes</b>
                        <button id="sr_right_icon"> <img src="img/dropdown_icon.jpeg" width="20px" height="20px">
                        </button>
                        <button id="sr_down_icon"> <img src="img/dropdown_icon2.jpeg" width="20px" height="20px">
                        </button>
                    </p>

                    <br>
                    <div id="SubmittedResumes">
                        <div class="row">
                            <div class="col-6">
                                <form method="post">
                                    <div class="leftFilter_myTasks">
                                        <img src="img/eye.png" width="20px" height="20px">
                                        <select>
                                            <option value="none" selected disabled hidden>Select contact</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                        <input type="text" name="text3" placeholder="Search by candidate"
                                            class="inputSearchFileName_myTasks">
                                        <button type="submit" name="btnsearch3"
                                            class="searchButton_myTasks edit-search-button-3 edit-button-3"><i
                                                class="fa fa-search" aria-hidden="true"></i></button>

                                    </div>
                                </form>
                            </div>

                            <div class="col-2">

                            </div>

                            <div class="col-4">
                                <div class="row">
                                    <div class="rightFilter_myTasks">
                                        <span class="sortByMyTasks">Sort By: </span><span class="recentMyTasks">Recent
                                            &emsp;</span>
                                        Last Edited
                                        <img src="img/dropdown.png" width="16px" height="12px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="singleTasks_containerDiv">
                            <?php

                          if($flag3 ==0)
                          {
                              $sql3="select * from joblistings";
                          }

                $res=mysqli_query($conn,$sql3);
                if($res == TRUE)
                {
                    $count=mysqli_num_rows($res);
                    if($count >0)
                    {
                        while($rows=mysqli_fetch_assoc($res))
                        {

                            $logo=$rows['logo'];
                            $recruiters_name=$rows['recruiters_name'];
                            $company_email=$rows['company_email'];
                            $status=$rows['status'];
                            $start_date=$rows['start_date'];
                            $qualification=$rows['qualification'];
                            $contact_client_company=$rows['contact_client_company'];
                            $workspace_view=$rows['workspace_view'];
                            $client_company=$rows['client_company'];


                    ?>
                            <div class="singletask_myTasks singletask-align-3 order-div-3">
                                <img src="img/Ellipse 148.png" width="50px" height="50px">
                                <span class="div-3-1">
                                    <p style="color:#297FB8;margin-bottom:5px;margin-right:100px;font-size:13px">
                                        <?php echo $contact_client_company; ?><span
                                            style="color:#333333"><?php echo $qualification; ?></span></p>
                                    <p class="light_spanItem_singleTask_myTasks1"><?php echo $company_email; ?></p>
                                </span>
                                <?php echo '<img src="data:image;base64,'.base64_encode($logo).' "  style="width: 50px; height: 50px;" >' ;   ?>

                                <span class="div-3-2">
                                    <p class="light_spanItem_singleTask_myTasks">Recruiter</p>
                                    <p class="light_spanItem_singleTask_myTasks1"><b><?php echo $recruiters_name; ?></b>
                                    </p>
                                </span>&emsp;
                                <?php echo '<img src="data:image;base64,'.base64_encode($workspace_view).' "  style="width: 50px; height: 50px;" >' ;   ?>
                                <span class="div-3-3">
                                    <p class="light_spanItem_singleTask_myTasks">Company contact</p>
                                    <p class="light_spanItem_singleTask_myTasks1"><b><?php echo $client_company; ?></b>
                                    </p>
                                </span>&emsp;
                                <span class="div-3-4">
                                    <p class="light_spanItem_singleTask_myTasks">Sent on <span
                                            style="color:#333333">05-05-2020</span></p>
                                    <p style="color:#3598DB;">&emsp;View resume</p>
                                </span>
                            </div>
                            <?php
                        }
                    }
                }
                ?>

                        </div>
                        <br>

                    </div>
                    <!--end of Submitted Resumes -->


                    <!--Start  of Submitted Resumes -->
                    <p><b>Placements</b>
                        <button id="place_right_icon"> <img src="img/dropdown_icon.jpeg" width="20px" height="20px">
                        </button>
                        <button id="place_down_icon"> <img src="img/dropdown_icon2.jpeg" width="20px" height="20px">
                        </button>
                    </p>

                    <br>
                    <div id="Placements">
                        <div class="row">
                            <div class="col-6">
                                <div class="leftFilter_myTasks">
                                    <img src="img/eye.png" width="20px" height="20px">
                                    <select>
                                        <option value="none" selected disabled hidden>File type</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                    <input type="text" name="FileName_myTasks" placeholder="Search Your File"
                                        class="inputSearchFileName_myTasks">
                                    <button class="searchButton_myTasks"><i class="fa fa-search"
                                            aria-hidden="true"></i></button>

                                </div>
                            </div>

                            <div class="col-2">

                            </div>

                            <div class="col-4 col-4-edit">
                                <div class=" row">
                                    <div class="rightFilter_myTasks">
                                        <span class="sortByMyTasks">Sort By: </span><span class="recentMyTasks">Recent
                                            &emsp;</span>
                                        Last Edited
                                        <img src="img/dropdown.png" width="16px" height="12px">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="filterSmall_myTasks">
                                        <div class="selectAllActions_filterSmall_myTasks">
                                            &emsp;
                                            <input type="checkbox" name="checkboxSelectAll_myTasks"
                                                id="checkboxSelectAll_myTasks">
                                            <label for="checkboxSelectAll_myTasks">Select All</label>
                                            <select name="Select action" id="" style="color:#979797">

                                                <option value="0">Select Action &emsp;&emsp;&emsp;&emsp;&emsp;V</option>
                                                <option value="1">Copy</option>
                                                <option value="2">Cut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="singleTasks_containerDiv">



                        </div>
                        <br>

                    </div>
                </div>
                <!-- end of column -->

                <div class="col-lg-3 mb-4">
                    <div class="card" id="right-side-col" style="height:1500px;width:225px">
                        <div class="card-body" id="right-side-body">
                            <div class="right-panel" style="text-align:center">
                                <br>
                                <div id="box_12">
                                    #<?php echo  $j_id ?>&emsp;&emsp;
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
                <!-- end of column -->




            </div>
            <!-- Row ended -->
            <br>

            <script type="text/javascript">
            $(document).ready(() => {
                $("#web_right_icon").click(() => {
                    $("#webresponses").show();
                    $("#web_right_icon").hide();
                    $("#web_down_icon").show();
                });

                $("#web_down_icon").click(() => {
                    $("#webresponses").hide();
                    $("#web_down_icon").hide();
                    $("#web_right_icon").show();
                });

                //
                $("#re_right_icon").click(() => {
                    $("#ResumeEvaluation").show();
                    $("#re_right_icon").hide();
                    $("#re_down_icon").show();
                });

                $("#re_down_icon").click(() => {
                    $("#ResumeEvaluation").hide();
                    $("#re_down_icon").hide();
                    $("#re_right_icon").show();
                });
                //
                $("#sr_right_icon").click(() => {
                    $("#SubmittedResumes").show();
                    $("#sr_right_icon").hide();
                    $("#sr_down_icon").show();
                });

                $("#sr_down_icon").click(() => {
                    $("#SubmittedResumes").hide();
                    $("#sr_down_icon").hide();
                    $("#sr_right_icon").show();
                });
                //
                $("#place_right_icon").click(() => {
                    $("#Placements").show();
                    $("#place_right_icon").hide();
                    $("#place_down_icon").show();
                });

                $("#place_down_icon").click(() => {
                    $("#Placements").hide();
                    $("#place_down_icon").hide();
                    $("#place_right_icon").show();
                });


            });
            </script>
</body>