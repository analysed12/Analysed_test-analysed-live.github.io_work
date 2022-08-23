<?php
   define('LOCALHOST','localhost');
   define('DB_USERNAME','root');
   define('DB_PASSWORD','');
   define('DB_NAME','analysed');
   $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die(mysqli_error());
?>
<?php
session_start();
if(isset($_SESSION['firstname']) && isset($_POST['submit']))

{
  $firstname=$_POST['firstname'];
  $file_type=$_POST['file_type'];
  $visibility=$_POST['visibility'];
  $validity=$_POST['validity'];
  $date=date("Y-m-d");
  $compfile=$_FILES["compfile"]["name"];

  move_uploaded_file($_FILES["compfile"]["tmp_name"],"img/".$_FILES["compfile"]["name"]);
  $filesize=$_FILES['compfile']['size'];
  $filesize=round($filesize/1024,2);

  $query=mysqli_query($con,"insert into files(added_on,file_type,visibility,validity,files,kb,firstname) values('$date','$file_type','$visibility','$validity','$compfile','$filesize','$firstname')");
  echo '<script> alert("Files added successfully");</script>';
}
?>
<!-- <link rel="stylesheet" href="./css/candidates_files.css"> -->
<link rel="stylesheet" href="./css/contact_specific-4_running.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
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
    height: 550px;
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
    margin-left: 50px;
    font-size: 20px;
    font: normal normal normal 15px/19px MetroM;
}

.input_type {
    margin-top: 10px;
    margin-left: 0px;
    width: 300px;
    height: 40px;
    border: 2px solid var(--unnamed-color-3598db);
    border: 2px solid #3598DB;
    border-radius: 7px;
    opacity: 1;
    margin-left: 50px;
}

.ro {
    width: 420px;
    height: 170px;
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

.addFilesMyTasks {
    border-radius: 8px;
    background-color: #6ec5ff;
    color: white;
    padding: 3px 12px;
    margin-right: 7%;
    width: 75px;
    height: 30px;
    border: #6ec5ff;

}

.add {
    margin-top: -40px;
    margin-left: 684px;
    /* width: 70px;
height: 35px;
background: var(--unnamed-color-3598db) 0% 0% no-repeat padding-box;
background: #3598DB 0% 0% no-repeat padding-box;
box-shadow: 1px 3px 10px #00000033;
border-radius: 8px;
opacity: 1; */
}

.add button {

    width: 97px;
    height: 35px;
    font: normal normal normal 15px/22px Metro;
    background-color: #3598DB;
    border: #3598DB;
    color: #FFFFFF;

}

.modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 13% auto;
    /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    height: 400px;
    width: 47%;
    /* Could be more or less, depending on screen size */
    border-radius: 11px;
}

/* The Close Button */
.close {
    color: #979797;
    float: right;
    font-size: 15px;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.modal-content .p-class {
    font-family: Metro;
    font-size: 20px;
    color: #333333;
    margin-bottom: 10px;
}

.modal-content p {
    font-family: Metro;
    color: #979797;
}

.right-column-1 a {
    color: #297FB8;
    float: right;
    margin-top: -30px;
    margin-right: 30px;

}

.modal-content .upload {
    margin-top: 20px;
    margin-left: 20px;
    color: #3598DB;
    font: normal normal normal 20px/19px CeraB;
}

.modal-content .filetype {
    margin-top: 20px;
    margin-left: 20px;
    font: normal normal normal 15px/19px MetroM;
}

.modal-content .filetype select {
    margin-top: 10px;
    margin-left: 0px;
    width: 300px;
    height: 40px;
    border: 2px solid var(--unnamed-color-3598db);
    border: 2px solid #3598DB;
    border-radius: 7px;
    opacity: 1;
}

.modal-content .filetype .box {
    margin-top: -220px;
    margin-left: 350px;
    width: 300px;
    height: 150px;
    background: var(--unnamed-color-ffffff) 0% 0% no-repeat padding-box;
    border: 1px dashed var(--unnamed-color-707070);
    background: #FFFFFF 0% 0% no-repeat padding-box;
    border: 1px dashed #707070;
    border-radius: 8px;
    opacity: 1;
}

.modal-content .filetype .box svg {
    margin-top: 25px;
    margin-left: 10px;
    color: #979797;
}

.modal-content .filetype .box .drag {
    margin-top: -70px;
    margin-left: 100px;
    font: normal normal normal 18px/19px CeraB;
}

.modal-content .filetype .box .drag button {
    margin-top: 20px;
    margin-left: 30px;
    width: 122px;
    height: 35px;
    border: 1px solid var(--unnamed-color-3598db);
    box-shadow: 0px 3px 6px #00000029;
    border: 1px solid #3598DB;
    border-radius: 6px;
    opacity: 1;
}

.modal-content .filetype .a button {
    margin-top: 60px;
    margin-left: 100px;
    width: 132px;
    height: 47px;
    border: #3598DB;
    background: var(--unnamed-color-3598db) 0% 0% no-repeat padding-box;
    background: #3598DB 0% 0% no-repeat padding-box;
    box-shadow: 0px 3px 6px #00000029;
    border-radius: 8px;
    opacity: 1;
}
</style>
<?php
$flag=0;
if(isset($_POST['btnsearch']))
{
   $textsearch=$_POST['textsearch'];
   $sql5="SELECT * FROM `files` WHERE files='$textsearch'";
   $flag=1;
}


?>
<?php
    $c_id=1004;
    $sql="select * from client ";
    $res=mysqli_query($conn,$sql);
    if($res == TRUE)
    {
        $count=mysqli_num_rows($res);
        if($count >0)
        {
            while($rows=mysqli_fetch_assoc($res))
            {
                // $name=$rows['name'];
                $company_name=$rows['company_name'];
                // $client_img=$rows['client_img'];
                $role=$rows['role'];
                $main_email=$rows['main_email'];
                $contact_no=$rows['contact_no'];
                // $added_on=$rows['added_on'];
                $city=$rows['city'];
                $state=$rows['state'];
                $country=$rows['country'];
                $status=$rows['status'];
                $division=$rows['division'];
                $internal=$rows['internal'];
                $created_by=$rows['created_by'];
                $created_email=$rows['created_email'];
                $created_no=$rows['created_no'];

            }
        }
    }
?>
<?php
    // $c_id=1004;
    // $sql="select * from contacts ";
  $c_id=$_GET['c_id'];
    $sql="select * from contacts where contact_id='$c_id'";
    $res=mysqli_query($conn,$sql);
    if($res == TRUE)
    {
        $count=mysqli_num_rows($res);
        if($count >0)
        {
            while($rows=mysqli_fetch_assoc($res))
            {
                $fname=$rows['fname'];
                $lname=$rows['lname'];
                $mname=$rows['mname'];
                $company=$rows['company'];
                $picture=$rows['picture'];
                $status=$rows['status'];
                $job_title=$rows['job_title'];
                $cemail=$rows['email'];
                $phone=$rows['phone'];
                $city=$rows['city'];
                $address=$rows['address'];
                $skills=$rows['skills'];
                $industry=$rows['industry'];
                $last_meeting=$rows['last_meeting'];
                $title=$rows['title'];
                $city=$rows['city'];
                $zip_code=$rows['zip_code'];
                $state=$rows['state'];
                $country=$rows['country'];
                $company_name=$rows['company_name'];
                $contact_type=$rows['contact_type'];
                $division=$rows['division'];
                $source=$rows['source'];
                $reports_to=$rows['reports_to'];
                $last_contact=$rows['last_contact'];
                $visibility=$rows['visibility'];
                $validity=$rows['validity'];
                $lastvisit=$rows['lastvisit'];
                $LinkedIn_profile=$rows['LinkedIn_profile'];
                $added_on=$rows['added_on'];
            }
        }
    }
?>
<title>Contact specific</title>
<link rel="stylesheet" href="./css/contact_specific-4.css">

<body>
    <?php include('header.php') ?>

    <div id="upload-modal">
        <div id="upload-container">


            <form method="post" enctype="multipart/form-data">
                <p class="upload"> Upload Files
                    <span id="closeit" class="content_2"
                        style="margin-left:700px;color:grey;font-size:14px">Close</span>
                </p><br>
                <span>
                    <label class="filetype">File Type*</label><br>
                    <input type="text" placeholder="Enter type of file" name="file_type" class="input_type">
                </span>


                <br><br>
                <span>
                    <label class="filetype">Internal*</label><br>
                    <input type="text" value="System Verified" placeholder="System Verified" name="internal"
                        class="input_type">
                </span>

                <div class="ro" style="margin-left:50px;margin-top:10px">
                    <br>
                    <p style="margin-left:60px;"><img src="../img/upload-box.svg" height="70px" width="80px">

                        <input type="file" name="file1" /><br><br>
                        <button type="submit" name="btnupload" class="addFilesMyTasks1" id="upload_btn"> Upload
                        </button>
                </div>

            </form>
        </div>
    </div>
    <div class="container container-adjust">
        <div class="small_container">
            <div class="bread-crumbs_Mytools-recruiter">
                <a href="dashboard.php" class="active-breadcrumb-link">Dashboard</a> > <a href="candidate_list.php"
                    class="active-breadcrumb-link">My Database</a> > <a href="addContact.php"
                    class="active-breadcrumb-link">Add Contact</a> > <a href="contact_list.php"
                    class="active-breadcrumb-link"> Client List</a> > <a href=""
                    class="active-breadcrumb-link"><?php echo  $fname, $lname ?></a>
            </div>

            <div class="profile-img">
                <?php echo '<img src="../img/'.$picture.' " >' ;   ?>
                <h1><?php echo  $fname, $lname ?><p1> #<?php echo  $c_id ?></p1>
                </h1><br>
                <h2><?php echo  $company_name ?>
                    <!-- - <span><?php //echo  $role ?></span> -->
                </h2><br>
                <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                    </svg> <?php echo  $state ?></h4>
            </div>
            <div class="button">
                <button onclick="window.location='addContact.php';">Edit Contact</button>
            </div>

            <div class="options">
                <p><a href="contact_specific-1.php?c_id=<?php echo $c_id; ?>">At a glance</a></p>
                <p><a href="contact_specific-2.php?c_id=<?php echo $c_id; ?>">Appointments</a></p>
                <p><a href="contact_specific-3.php?c_id=<?php echo $c_id; ?>">Activity</a></p>
                <p><a href="contact_specific-5.php?c_id=<?php echo $c_id; ?>">Jobs</a></p>
                <p style="color:#3598DB;margin-left:-2px"> <b style="margin-right: 10px;">|</b>Files</p>
                <p><a href="contact_specific-6.php?c_id=<?php echo $c_id; ?>">Notes</a></p>
            </div>

            <div class="status">
                <div class="status1">
                    <p>#<?php echo  $c_id ?></p>
                    <span><?php echo  $added_on ?></span>
                </div>
                <div class="status-name" style="margin-top:30px;">
                    <span style="margin-left:50px;"><?php echo  $fname, $lname ?></span>
                    <p style="color:#3598DB;margin-left:70px"><?php echo  $company_name ?> <span style="color:black">
                            <!-- | <?php // echo  $role ?></span> -->
                    </p>
                    <u
                        style="color:#979797;margin-left:15px">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u>
                    <br><br>
                    <span style="color:#979797; font-size:15px; margin-left:20px;">Status&emsp;&emsp;&emsp;&emsp;Last
                        Contact</span>
                    <br>
                </div>

                <div class="displayname">
                    <span><?php echo  $status ?></span>&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo  $added_on ?>
                </div>
                <br><br>

                <div class="fee">
                    <span>Division&emsp;&emsp;&emsp;&emsp;Internal</span><br>
                </div>

                <div class="fee-percent">
                    <span><?php echo  $division ?></span>&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo  $internal ?>
                </div>
                <br><br>

                <div class="details">
                    <p style="color:#979797;padding-top: 0px;">Created by</p>
                    <br>
                    <p style="color:#3598DB;"><?php echo  $created_by ?></p>
                    <p style="color:black;"><?php echo  $created_email ?></p>
                    <p style="color:black;">+91 <?php echo  $created_no ?></p>
                    <br><br>
                    <p style="color:#979797;padding-top: 0px;">Contact info</p>
                    <br>
                    <p style="color:#3598DB;"><?php echo  $main_email ?></p>
                    <p style="color:black;">+91 <?php echo  $contact_no ?></p>
                    <p style="color:black;">+91 <?php echo  $contact_no ?></p>
                    <br><br>
                    <p style="color:#979797;padding-top: 0px;">Address</p>
                    <br>
                    <p style="color:black"><?php echo  $city ?></p>
                    <p style="color: black;"><?php echo  $state ?> , <?php echo  $country ?>.</p>
                    <br><br>
                </div>
            </div>

            <div class="left-side-container-1">
                <span class="row-recruiter upcoming_interview_top_span">
                    <form method="post" class="form">
                        <div class="search-box">
                            <details id="dropdown" class="dropdown">
                                <summary class="dropdown-button">
                                    <span id="selected-item" class="selected-item"> <i class="fa fa-file"
                                            aria-hidden="true"></i> File type</span>
                                </summary>
                                <details-menu class="dropdown-menu">
                                    <div class="dropdown-menu-list">
                                        <label class="dropdown-menu-item">
                                            <input type="radio" name="item" value="1">
                                            <span>1</span>
                                        </label>
                                        <label class="dropdown-menu-item">
                                            <input type="radio" name="item" value="2">
                                            <span>2</span>
                                        </label>
                                        <label class="dropdown-menu-item">
                                            <input type="radio" name="item" value="3">
                                            <span>3</span>
                                        </label>
                                        <label class="dropdown-menu-item">
                                            <input type="radio" name="item" value="4">
                                            <span>4</span>
                                        </label>
                                    </div>
                                </details-menu>
                            </details>
                            <input class="search-form-input" type="search" name="textsearch"
                                placeholder="Search by File name">
                            <button type="submit" name="btnsearch" class="searchButton" id="cs-4">
                                <img src="./img/search-icon-blue.png" />
                            </button>
                        </div>
                    </form>
                </span>
            </div>
            <div class="add">
                <button class="btn" id="myBtn"><a style="color:white" href="#">Add File +</a></button>
            </div>

             <div id="myModal" class="modal">
                 Modal content -->
                <form method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <span class="close">close</span>
                        <div class="upload">Upload Files</div>
                        <div class="filetype">File Type*<br>
                            <select name="file_type">
                                <option value="">Select file type</option>
                                <option value="Resume">Resume</option>
                                <option value="10th files">10th files</option>
                                <option value="12th files">12th files</option>
                            </select>
                        </div>
                        <div class="filetype">Visibility*<br>
                            <select name="visibility">
                                <option value="">select visibility</option>
                                <option value="Internal">Internal</option>
                                <option value="External">External</option>
                            </select>
                        </div>
                        <div class="filetype">Validity*<br>
                            <select name="validity">
                                <option value="">Select validity</option>
                                <option value="System Verified">System verified</option>
                            </select>
                            <div class="box">
                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor"
                                    class="bi bi-folder-symlink-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2l.04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3zM2.19 3c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293L7.586 3H2.19zm9.608 5.271-3.182 1.97c-.27.166-.616-.036-.616-.372V9.1s-2.571-.3-4 2.4c.571-4.8 3.143-4.8 4-4.8v-.769c0-.336.346-.538.616-.371l3.182 1.969c.27.166.27.576 0 .742z" />
                                </svg>
                                <div class="drag">
                                    Drag and Drop a File<br>
                                    &emsp;&emsp;&emsp;or<br><br><br>
                                    <label for="file" class="input-file">
                                        <input type="file" name="compfile" id="file" style="display: none">Browse
                                    </label><br>
                                    <div class="a" style="margin-top:15px;margin-left:-30px">
                                        <button name="submit" style="color:white">Upload</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div> -->
            <div class="row-flex-jobj justifycontent-flex-end-1">
                <form id="form1">
                    <p class="sortbyText">Sort by :
                        <select name="multi_search" id="multi_search" class="sortbySelect">
                            <option>Recent</option>
                            <option value="Recent">All</option>
                            <option value="Old">Old</option>
                        </select>
                        <select id="multi_search" class="search_list">
                            <option value="" default class="search_list_option">Last Edited</option>
                            <option value="1" class="search_list_option">1</option>
                            <option value="2" class="search_list_option">2</option>
                            <option value="3" class="search_list_option">3</option>
                        </select>
                    </p>
            </div>
            <div class="row-recruiter">
                <div class="select-col">
                    <input type="checkbox" id="c" name="cb">
                    <label for="c" class="select-col-label" id="select-all"> Select all</label>
                </div>
                <select id="multi_search" class="search_list_1">
                    <option value="" default>Select action</option>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                </select>
            </div>

            <!-- <?php
     /* if($flag == 0)
      {
        $sql5="SELECT * FROM `files` where firstname='$fname' ";
      }

     $res5=mysqli_query($conn,$sql5);
      if($res5 == TRUE)
      {
        $count=mysqli_num_rows($res5);
        if($count >0)
        {
          while($rows=mysqli_fetch_assoc($res5))
          {
        $firstname=$_POST['firstname'];
        $file_type=$_POST['file_type'];
        $visibility=$_POST['visibility'];
        $validity=$_POST['validity'];
        $date=date("Y-m-d");
        $compfile=$_FILES["compfile"]["name"];

        move_uploaded_file($_FILES["compfile"]["tmp_name"],"img/".$_FILES["compfile"]["name"]);
        $filesize=$_FILES['compfile']['size'];
        $filesize=round($filesize/1024,2);

        $query=mysqli_query($con,"insert into files(added_on,file_type,visibility,validity,files,kb,firstname) values('$date','$file_type','$visibility','$validity','$compfile','$filesize','$firstname')");
        echo '<script> alert("Files added successfully");</script>';  */

      ?> -->
            <!--  <div class="row">
                    <div class="column">
                        <input type="checkbox" id="c1" class="checkbox">
                        <label for="c1"></label>
                    </div>
                    <div class="column">
                        <p class="col-1">Added on</p>
                        <span class="col-span-1"><?php //echo $added_on; ?></span>
                    </div>
                    <div class="column">
                         <p class="col-2"><?php// echo $files; ?></p>
                        <span class="col-span-2"><?php //echo $kb; ?>kb</span>

                    </div>
                    <div class="column">
                        <p class="col-3"><?php //echo $file_type; ?></p>
                        <span class="col-span-3">View <i class="fa fa-eye" aria-hidden="true"></i></span>
                    </div>
                    <div class="column">
                        <p class="col-4">Internal</p>
                        <span class="col-span-4">System verified</span>
                    </div>
                    <div class="column">
                        <img src="./img/Ellipse -4@2x.png" class="img">
                    </div>
                  <div style="display:flex;">
                    <div class="column">
                        <p class="col-5">Uploaded by</p>
                        <span class="col-span-5">Sasuke Uchiha</span>
                    </div>
                    <div class="column">
                       <a href="delete_contact_files.php?Id=<?php //echo $file_id; ?>"><button style="font-size:14px;color:#EC4551;background: none;border: none;">Delete <i class="fa fa-trash" aria-hidden="true"></i></button><br></a>
                       <a href="download.php?filename=<?php //echo $files; ?>"><button style="font-size:14px;color:#3598DB;background: none;border: none;">Download <i class="fa fa-file" aria-hidden="true"></i></button></a>
                   </div>
                  </div>
                </div>
                <?php
                  
                      ?>
            </div>
        </div>

    </div> -->
            <div class="files-added" id="result1">

                <?php
  $sql=mysqli_query($con,"select * from files ");

  $check=mysqli_num_rows($sql)>0;
  if($check){
    while($row=mysqli_fetch_assoc($sql)){
      ?>

                <div class="files">
                    <input type="checkbox">
                    <div class="added"><span style="color:979797">Added on</span> <br><?php echo $row["added_on"]; ?>
                    </div>
                    <div class="filename"><a
                            href="#"><?php echo $row["files"]; ?></a><br><?php echo $row["kb"] .' KB';?></div>
                    <div class="resume"><?php echo $row["file_type"]; ?><br><a style="color:green"
                            href="img/<?php echo $row["files"]; ?>" target="_blank">View
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green"
                                class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                <path
                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                            </svg>
                        </a>
                    </div>
                    <div class="internal">
                        <?php echo $row["visibility"]; ?><br><?php echo $row["validity"]; ?></div>
                    <img src="img/Ellipse 148.png" width="70" height="70" alt="">
                    <div class="uploaded">
                        Uploaded by<br>
                        <?php echo $row["firstname"]; ?></div>

                    <div class="delete">
                        <span style="color:red"><a href='./includes/delete3.php?id=<?php echo $row["file_id"] ?>'
                                onclick='checkdelete()' style="color:red;text-decoration:none">Delete</a><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                            </svg></span><br>
                        <a style="color:#3598DB;text-decoration:none" href="img/<?php echo $row["files"]; ?>"
                            download><span style="color:#3598DB"> Download <svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-file-arrow-down-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8 5a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5A.5.5 0 0 1 8 5z" />
                                </svg></span></a>
                    </div>
                </div>
                <?php } } ?>
            </div>
            </form>
        </div>
        <script type="text/javascript">
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>

        <!-- <script>
var items = document.getElementsByName('item');
var selectedItem = document.getElementById('selected-item');
var dropdown = document.getElementById('dropdown');

items.forEach(item => {
  item.addEventListener('change', () => {
    if (item.checked) {
      selectedItem.innerHTML = item.value;
      dropdown.open = false;
    }
  });
});
</script> -->
        <script>
        function checkdelete() {
            return confirm('Are you sure you want to delete this file?');
        }
        </script>

        <script>
        $(document).ready(function() {
            $("#form1 #select-all").click(function() {
                $("#form1 input[type='checkbox']").prop('checked', this.checked);
            });
        });
        </script>

        <script type="text/javascript">
        function myFunction() {
            var action = 'data';
            var search = document.getElementById('search').value;


            $.ajax({
                url: './include/action1.php',
                method: 'POST',
                data: {
                    action: action,
                    search: search
                },
                success: function(response) {
                    $("#result1").html(response);

                }
            });
        }
        </script>

        <script>
        $(document).ready(function() {
            $("#multi_search").change(function() {
                var sort_val = $(this).val();

                $.ajax({
                    url: './include/action1.php',
                    method: 'POST',
                    data: {
                        sort_val: sort_val
                    },
                    success: function(response) {
                        $("#result1").html(response);
                    }
                });
            });
        });
        </script>