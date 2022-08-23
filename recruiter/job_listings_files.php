<?php include('header.php') ?>


<?php
   define('LOCALHOST','localhost'); 
   define('DB_USERNAME','root');
   define('DB_PASSWORD','');
   define('DB_NAME','analysed');
   $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die(mysqli_error());
?>

<title>Dashboard</title>

<link rel="stylesheet" href="css/job_listings_files_remo.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
#upload-modal {
    background-color: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    left: 0%;
    top: 0%;
    position: fixed;
    z-index: 2;
    display: none;
}

#upload-container {
    width: 850px;
    height: 500px;
    background-color: white;
    border-radius: 10px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    padding: 10px;
    /* text-align: center; */

}

.upload {
    margin-top: 20px;
    margin-left: 20px;
    color: #3598DB;
    font: normal normal normal 20px/19px CeraB;
}

.filetype {
    margin-top: 20px;
    margin-left: 20px;
    font: normal normal normal 15px/19px MetroM;
}

.filetype select {
    margin-top: 10px;
    margin-left: 0px;
    width: 300px;
    height: 40px;
    border: 2px solid var(--unnamed-color-3598db);
    border: 2px solid #3598DB;
    border-radius: 7px;
    opacity: 1;
}

.ro {
    width: 420px;
    height: 250px;
    border: 3px dashed #707070;
    border-radius: 8px;
    background: #FFFFFF 0% 0% no-repeat padding-box;
    align-items: center;
}

.addFilesMyTasks1 {
    display: flex;
    right: 2%;
    box-shadow: 1px 3px 10px #00000033;
    border-radius: 8px;
    background-color: #fff;
    color: #3598DB;
    padding: 8px 16px;
    border: 2px solid #3598DB;
    align-items: center;
    width: auto;
    height: 47px;
    margin-left: 210px;
}

@media screen and (max-width:650px) {
    #upload-container {
        /* position: relative;
    width: 369px;
    height: 820px;
    margin-top: 20px;
    margin-bottom: 20px;
    font-size: 21px;
    justify-content: center; */

        background-color: #fefefe;
        margin: 13% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 56%;
        height: 943px;
        border-radius: 11px;
    }

    .ro {
        position: relative;
        width: 339px;
        height: 328px;
        left: -51px;
        top: 28px;
    }

    .filetype {
        font-size: 21px;
    }

}
</style>

<?php
   $flag=0;
   if(isset($_POST['btnsearch']))
   {
     $textsearch=$_POST['textsearch'];
      $sql5="SELECT * FROM `job_files` WHERE file_name='$textsearch' ";
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

                        $j_id=$_GET['j_id'];
                    }
                }
              }
                 ?>

<body>
    <div id="upload-modal">
        <div id="upload-container">
            <br><br>
            <p class="upload"> Upload Files
                <span id="closeit" class="content_2">Close</span>
            </p><br>


            <?php
              if(isset($_POST['btnupload']))
              {
                $documenttype=$_POST['file_type'];
                $fileName= $_FILES['file1']['name'];
                $fileTmpName=$_FILES['file1']['tmp_name'];
                $path="Documents/".$fileName;
                $ext = pathinfo($fileName, PATHINFO_EXTENSION);
                $created = @date('Y-m-d');
                $fileSize = $_FILES['file1']['size'];

                //echo $fileSize;

                  $sql4="INSERT INTO `js_files`(`JS_id`, `file_name`, `file_type`, `doc_type`, `file_size`, `added_on`)
                 VALUES ('JS111','$fileName','$ext','$documenttype',$fileSize,'$created')";
                 $res4=mysqli_query($conn,$sql4);
                 if($res4)
                 {
                   move_uploaded_file($fileTmpName, $path);
                 }


              }

          ?>
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div classs="col-5">
                        <div class="filetype">File Type*<br>
                            <select name="file_type">
                                <option value="">--Choose type---</option>
                                <option value="10th Certificate">10th Certificate</option>
                                <option value="12th Certificate">12th Certificate</option>
                                <option value="BE Certificate">BE Certificate</option>
                            </select>
                        </div>
                        <div class="filetype">Internal*<br>
                            <select name="internals" id="cars">
                                <option value="System Verified">System Verified</option>

                            </select>
                        </div>

                    </div>
                    <div class="col-7">
                        <div class="ro" style="margin-left:50px">
                            <p style="margin-left:60px;margin-top:40px"><img src="img/upload-box.svg" height="70px"
                                    width="80px">
                                <span id="sub_3">Drag a file and watch me go!</span>
                            </p>
                            <p class="bot4" style="margin-left:250px"> or </p>

                            <input type="file" name="file1" /><br>
                            <button type="submit" name="btnupload" class="addFilesMyTasks1" id="upload_btn"> Upload
                            </button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>


    <div class="main_body">
        <div class="small_container" style="margin-top:0%;"><br>
            <div class="bread-crumbs_Mytools-recruiter">
                <a href="dashboard.php" class="active-breadcrumb-link">&emsp;&emsp;&emsp;<u>Dashboard</u></a> > <a
                    href="candidate_list.php" class="active-breadcrumb-link"><u>My Database</u></a> ><a href=""
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

        <div class="container page-container">
            <div class="row page-container-row">
                <div class="col-lg-1 mb-4">

                    <div class="options">
                        <p class="p1 options-1"><a href="job_listings_individual.php?j_id=<?php echo  $job_id ?>"
                                style="color: #979797">Glance</a></p>
                        <p class="p1"><a href="jobs_listings_activity_eval-1.php?j_id=<?php echo  $job_id ?>"
                                style="color: #979797">Applicants</a></p>
                        <p class="p1"><a href="job_listings_activity_res.php?j_id=<?php echo  $job_id ?>"
                                style="color: #979797">Activity</a></p>
                        <p style="color:#3598DB;margin-left:-2px;display:flex;" class="p1"> <b
                                style="margin-right: 5px;">|</b>
                            Files</a></p>
                        <p class="p1"><a href="job_listings_notes.php?j_id=<?php echo  $job_id ?>"
                                style="color: #979797">Notes</a>
                        </p>
                        <p class="p1"><a href="job_listings_pub-2.php?j_id=<?php echo  $job_id ?>"
                                style="color: #979797">Publish</a></p>
                    </div>

                </div>
                <div class="col-lg-8 mb-4 main-mid-div" style="position: relative">
                    <div class="row row-width-reduce no-gutters g-0">
                        <div class="filterSection_myTasks">
                            <div class="leftFilter_myTasks">

                                <form method="post">
                                    <img src="img/page.png" height="16px" width="16px">
                                    <select id="k1">
                                        <option value="none" selected disabled hidden>File type</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>

                                    <input type="text" name="textsearch" placeholder=" Search by File name"
                                        class="centered_span_myTasks">

                                    <button type="submit" name="btnsearch"><img src="img/search-icon-blue.png"
                                            height="15px" width="15px"></button>
                                </form>

                            </div>
                            <button class="addFilesMyTasks" id="add_button">Add +</button>

                            <div class="row">
                                <span class="sortByMyTasks">Sort By: </span><span class="recentMyTasks">Recent</span>
                                <select name="" id="" class="sortFilter_myTasks">
                                    <option value="0">Last Edited ∨</option>
                                    <option value="1">Sort A-Z</option>
                                    <option value="2">Sort Z-A</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="filterSmall_myTasks">
                                    <div class="selectAllActions_filterSmall_myTasks"><br>
                                        <div class=" select-dropdown">
                                            <input type="checkbox" name="checkboxSelectAll_myTasks"
                                                id="checkboxSelectAll_myTasks">
                                
                                            <label for="checkboxSelectAll_myTasks">Select All</label>
                                            <select name="Select action" style="float:right">
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



                    <?php
                 if($flag == 0)
                 {
                   $sql5="SELECT * FROM `js_files`";
                 }
                  //$sql5="SELECT * FROM `job_files` WHERE JS_id='JS111'";
                  $res5=mysqli_query($conn,$sql5);
                  if($res5 == TRUE)
                  {
                    $count=mysqli_num_rows($res5);
                    if($count >0)
                    {
                      while($rows=mysqli_fetch_assoc($res5))
                      {
                         $Id=$rows['JS_id'];
                         $file_name=$rows['file_name'];
                         $file_type=$rows['file_type'];
                         $doc_type=$rows['doc_type'];
                         $file_size=$rows['file_size'];
                         $file_size=round(($file_size/1024));
                         $added_on=$rows['added_on'];

                  ?>
                    <div class="row" id="list-files">
                        <div class="singletask_myTasks">
                            <input type="checkbox" name="checkBoxItem" class="largerCheckbox">
                            <span class="myTasks-added">
                                <p class="light_spanItem_singleTask_myTasks">Added on</p>
                                <p class="j1 j2"><?php echo $added_on; ?></p>
                            </span>
                            <span style="margin-left:30px myTasks-file">
                                <p style="color:#297FB8;margin-bottom:5px;font-size:16px"><?php echo $file_name; ?></p>
                                <p class="j1 j2"><?php echo $file_size; ?>kb</p>
                            </span>
                            <span>
                                <p class="j1" style="margin-bottom:4px;"><?php echo $doc_type; ?></p>
                                <p style="color:#51C46D" class="j2">View <img src="img/greeneye.png" width="20px"
                                        height="17px">
                                </p>
                            </span>
                            <span style="margin-left:30px myTasks-internal">
                                <p class="j1" style="margin-bottom:4px;">Internal</p>
                                <p class="j1 j2">System Verified</p>
                            </span>
                            <span>
                                <p><img src="img/Prof-1.png" height="50px" width="50px"></p>
                            </span>
                            <span style="margin-right:30px myTasks-upload">
                                <p class="light_spanItem_singleTask_myTasks">Uploaded by</p>
                                <p class="j1">Sasuke Uchiha</p>
                            </span>
                            <div class="button-div_myTasks">
                                <a href="delete_listings_files.php?Id=<?php echo $Id; ?>"><button class="j1"
                                        style="color:#EC4551">Delete <i class="fa fa-trash"
                                            aria-hidden="true"></i></button><br></a>
                                <a href="download.php?filename=<?php echo $file_name; ?>"><button class="j1"
                                        style="color:#3598DB">Download <i class="fa fa-file"
                                            aria-hidden="true"></i></button></a>
                            </div>
                        </div>
                    </div>

                    <?php
                        }
                      }
                    }

                        ?>

                </div>
                <div class="col-lg-3 mb-4 right-div-margin-left">
                    <div class="card" id="right-side-col" style="width:275px;">
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
    <script type="text/javascript">
    $(document).ready(() => {
        $("#add_button").click(() => {
            $("#upload-modal").show();
        });

        $("#closeit").click(() => {
            $("#upload-modal").hide();
        });
    });
    </script>
</body>