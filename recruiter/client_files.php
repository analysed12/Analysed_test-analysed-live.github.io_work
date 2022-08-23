<?php include('connection1.php'); ?>

<?php
session_start();
// if(isset($_SESSION['company_name'])) {
    // $company_name=$_SESSION['company_name'];
    // $sql=mysqli_query($conn,"select * from client where company_name='$company_name'");
    $c_id=$_GET['c_id'];
    $sql=mysqli_query($conn,"select * from client where client_id='$c_id'");
    $check=mysqli_num_rows($sql)>0;
    if($check){
        while($row=mysqli_fetch_assoc($sql)){
             $company_name=$row['company_name'];
?>
<?php
if( isset($_POST['submit']))
{
  // $firstname=$_SESSION['firstname'];
    // $firstname=$_POST['firstname'];
  $file_type=$_POST['file_type'];
  $visibility=$_POST['visibility'];
  $validity=$_POST['validity'];
  $date=date("Y-m-d"); 
  $compfile=$_FILES["compfile"]["name"];

  move_uploaded_file($_FILES["compfile"]["tmp_name"],"img/".$_FILES["compfile"]["name"]);
  $filesize=$_FILES['compfile']['size'];
  $filesize=round($filesize/1024,2);

  $query=mysqli_query($conn,"insert into client_files(added_on,file_type,visibility,validity,files,kb) values('$date','$file_type','$visibility','$validity','$compfile','$filesize')");
  echo '<script> alert("Files added successfully");</script>';
} 
?>
<?php include('header.php') ?>
<title>Dashboard</title>
<link rel="stylesheet" href="./css/client_files_remove.css">
<link rel="stylesheet" href="./css/header_remove1.css">
<link rel="stylesheet" href="./css/index_remov.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style type="text/css">
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
<title>Dashboard</title>
<link rel="stylesheet" href="./css/client_files.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<body>
    <div class="container">
        <div class="small_container">
            <div class="bread-crumbs_Mytools-recruiter">
                <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href=""
                    class="unactive-breadcrumb-link">My Database</a> > <a href="" class="unactive-breadcrumb-link">Add
                    Client</a> > <a href="" class="active-breadcrumb-link"> Fox Hunt</a>
            </div>

            <div class="profile-img">
                <img src="img/Fox hunt.png" alt="">
                <h1><?php echo $row["company_name"]; ?><p1><span><i class="fa fa-pencil-square-o fa-lg"
                                aria-hidden="true"></i></span> <?php echo $row["client_id"]; ?></p1>
                </h1><br>
                <h2><span><?php echo $row["industry"]; ?></span></h2><br>
                <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                    </svg> <?php echo $row["country"]; ?></h4>
            </div>
            <div class="button">
                <button>Edit client</button>
            </div>

            <div class="options">
                <p class="p1"><a href="client_individual.php?c_id=<?php echo $row['client_id']; ?>">At a glance</a></p>
                <p class="p1"><a href="client_jobs.php?c_id=<?php echo $row['client_id']; ?>">Hires</a></p>
                <p class="p1"><a href="client_contacts.php?c_id=<?php echo $row['client_id']; ?>">Contacts</a></p>
                <p class="p1"><a href="client_appointments.php?c_id=<?php echo $row['client_id']; ?>">Appointments</a>
                </p>
                <p><a href="client_activity.php?c_id=<?php echo $row['client_id']; ?>">Activity</a></p>
                <p style="color:#3598DB;margin-left:-2px"> <b style="margin-right: 10px;">|</b>Files</p>
                <p><a href="client_notes.php?c_id=<?php echo $row['client_id']; ?>">Notes</a></p>
            </div>

            <div class="status">
                <div class="status1">
                    <p><?php echo $row["client_id"]; ?></p>
                    <span >05-05-2021</span>
                </div>
                <div class="status-name" style="margin-top:30px;">
                    <span style="margin-left:38%;color:black"><?php echo $row["company_name"]; ?></span>
                    <p style="color:#3598DB;margin-left:22%"><?php echo $row["industry"]; ?></p>
                    <p style="color:#979797;font-size:18px;margin-left:25px"><i class="fa fa-briefcase"
                            aria-hidden="true"></i> Jobs</p>
                    <p style="color:#979797;font-size:18px;margin-left:140px;margin-top: -23px;"><i
                            class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $row["country"]; ?></p>
                    <!-- <u
                        style="color:#979797;margin-left:15px">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u> -->
                    <br><br>
                    <span
                        style="color:#979797; font-size:15px; margin-left:15px;">Status&emsp;&emsp;Ownership&emsp;&emsp;Source</span>
                    <br>
                </div>

                <div class="displayname" style="color:black">
                    <span><?php echo $row["status"]; ?></span>&emsp;&emsp;<?php echo $row["ownership"]; ?>&emsp;&emsp;&emsp;<?php echo $row["status"]; ?>
                </div>
                <br><br>

                <div class="fee">
                    <span>Average fee&emsp;&emsp;&emsp;&emsp;Current fee</span><br>
                </div>

                <div class="fee-percent">
                    <span>10%</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;4%
                </div>
                <br><br>
                <div class="employeement">
                    <p style="margin-left:8px">Parent Company</p>
                    <p style="color:black;margin-top:10px"><?php echo $row["parent_company"]; ?></p>
                </div>
                <br><br>

                <div class="details">
                    <p style="color:#979797;padding-top: 0px;">Created by</p>
                    <br>
                    <p style="color:#3598DB;">Curtis kelly</p>
                    <p style="color:black;">abc@gmail.com</p>
                    <p style="color:black;">+91 9876543210</p>
                    <br><br>
                    <?php
                     $name=$row["active_contact"];
                     $sql=mysqli_query($conn,"select * from contacts where company='$company_name' and fname='$name'");
                     $check1=mysqli_num_rows($sql)>0;
                     if($check1){
                        while($row1=mysqli_fetch_assoc($sql)){
                        ?>
                    <p style="color:#979797;padding-top: 0px;">Active conatct</p>
                    <br>
                    <p style="color:#3598DB;"><?php echo $row1["fname"]; ?></p>
                    <p style="color:black;"><?php echo $row1["email"]; ?></p>
                    <p style="color:black;"><?php echo $row1["phone"]; ?></p>
                    <br><br>
                    <?php } } ?>
                    <p style="color:#979797;padding-top: 0px;">Contact info</p>
                    <br>
                    <p style="color:#3598DB;"><?php echo $row["main_email"]; ?></p>
                    <p style="color:black;"><?php echo $row["contact_no"]; ?></p>
                    <p style="color:black;"><?php echo $row["contact_no"]; ?></p>
                    <br><br>
                    <p style="color:#979797;padding-top: 0px;">Address</p>
                    <br>
                    <p style="color:black"><?php echo $row["address"]; ?></p>
                    <p style="color:black;"> <?php echo $row["city"]; ?>-<?php echo $row["zipcode"]; ?></p>
                    <p style="color: black;"><?php echo $row["state"]; ?>,<?php echo $row["country"]; ?>.</p>
                    <br><br>
                </div>
            </div>
            <?php } } ?>

            <div class="left-side-container-1">
                <form class="form">
                    <span class="row-recruiter upcoming_interview_top_span">
                        <div class="search-box">
                            <details id="dropdown" class="dropdown">
                                <summary class="dropdown-button">
                                    <span id="selected-item" class="selected-item"> <i class="fa fa-file"
                                            aria-hidden="true"></i> File type</span>
                                </summary>

                            </details>
                            <input class="search-form-input" type="text" name="search" id="search"
                                placeholder="Search by File name" oninput="myFunction()">
                            <button class="searchButton">
                                <img src="./img/search-icon-blue.png" />
                            </button>
                        </div>
                        <button class="btn" id="myBtn" type="button">Add +</button>
                    </span>
                </form>
                <div id="myModal" class="modal">
                    <!-- Modal content -->
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
                </div>

                <form class="form" id="form1">
                    <div class="row-flex-jobj justifycontent-flex-end-1">
                        <p class="sortbyText">Sort by :
                            <select name="multi_search" id="multi_search" class="sortbySelect">
                                <option>All</option>
                                <option value="Recent">Recent</option>
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
                            <input type="checkbox" id="select-all" name="cb">
                            <label for="select-all" class="select-col-label"> Select all</label>
                        </div>
                        <select id="multi_search" class="search_list_1">
                            <option value="" default>Select action</option>
                            <option value="1"></option>
                            <option value="2"></option>
                            <option value="3"></option>
                        </select>
                    </div>

                    <!--  <div class="files-added" id="result1">
 -->
                    <!-- <?php
              /*  $c_id=$_GET['c_id'];
                $sql=mysqli_query($conn,"select * from client_files ");
                $check=mysqli_num_rows($sql)>0;
                if($check){
                    while($row=mysqli_fetch_assoc($sql)){ */
                        ?> -->

                    <div class="files-added" id="result1">

                        <?php
  $c_id=$_GET['c_id'];
  $sql=mysqli_query($con,"select * from client_files ");

  $check=mysqli_num_rows($sql)>0;
  if($check){
    while($row=mysqli_fetch_assoc($sql)){
      ?>

                        <div class="files">
                            <input type="checkbox">
                            <div class="added"><span style="color:979797">Added on</span>
                                <br><?php echo $row["added_on"]; ?>
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
                                <span style="color:red"><a
                                        href='./includes/delete3.php?id=<?php echo $row["file_id"] ?>'
                                        onclick='checkdelete()' style="color:red;text-decoration:none">Delete</a><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg></span><br>
                                <a style="color:#3598DB;text-decoration:none" href="img/<?php echo $row["files"]; ?>"
                                    download><span style="color:#3598DB"> Download <svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-file-arrow-down-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8 5a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5A.5.5 0 0 1 8 5z" />
                                        </svg></span></a>
                            </div>
                        </div>
                        <?php } } ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php  ?>

<!-- <script>
    function checkdelete(){
        return confirm('Are you sure you want to delete this file?');
    }
</script>

<script>
    $(document).ready(function(){
        $("#form1 #select-all").click(function(){
            $("#form1 input[type='checkbox']").prop('checked',this.checked);
        });
    });
</script>
<script type="text/javascript">

    function myFunction(){
            var action='data';
            var search=document.getElementById('search').value;
        
        
            $.ajax({
                url:'./includes/action3.php',
                method:'POST',
                data:{action:action,search:search},
                success:function(response){
                    $("#result1").html(response);

                }
            });
        }
</script> -->

<!-- <script>
    $(document).ready(function(){
        $("#multi_search").change(function(){
            var sort_val=$(this).val();

            $.ajax({
                url:'./includes/action3.php',
                method:'POST',
                data:{sort_val:sort_val},
                success:function(response){
                    $("#result1").html(response);
                }
            });
        });
    });
</script> -->
<script>
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
        url: './include/action3.php',
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
            url: './include/action3.php',
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