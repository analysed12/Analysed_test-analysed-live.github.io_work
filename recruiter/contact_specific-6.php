<?php include('header.php') ?>
<?php
   define('LOCALHOST','localhost');
   define('DB_USERNAME','root');
   define('DB_PASSWORD','');
   define('DB_NAME','analysed');
   $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die(mysqli_error());
?>
<?php
$flag=0;
if(isset($_POST['btnsearch']))
{
   $textsearch=$_POST['textsearch'];
   $sql3="SELECT * FROM `notes` WHERE type='$textsearch'";
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
<link rel="stylesheet" href="./css/contact_specific-6-1 (1).css">

<body>
    <div class="container container-adjust">
        <div class="small_container">
            <div class="bread-crumbs_Mytools-recruiter">
                <a href="dashboard.php" class="unactive-breadcrumb-link">Dashboard</a> > <a href="candidate_list.php"
                    class="unactive-breadcrumb-link">My Database</a> > <a href="addContact.php"
                    class="unactive-breadcrumb-link">Add Contact</a> > <a href="contact_list.php"
                    class="unactive-breadcrumb-link"> Client List</a> > <a href=""
                    class="active-breadcrumb-link"><?php echo  $fname, $lname ?></a>
            </div>

            <div class="profile-img">
                <?php echo '<img src="../img/'.$picture.' " >' ;   ?>
                <h1><?php echo  $fname, $lname ?><p1> #<?php echo  $c_id ?></p1>
                </h1><br>
                <h2><?php echo  $company_name ?>
                    <!--  - <span><?php //echo  $role ?></span -->
                </h2><br>
                <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                    </svg> <?php echo  $state ?></h4>
            </div>
            <div class="button">
                <button>Edit Contact</button>
            </div>

            <div class="options">
                <p><a href="contact_specific-1.php?c_id=<?php echo $c_id; ?>">At a glance</a></p>
                <p><a href="contact_specific-2.php?c_id=<?php echo $c_id; ?>">Appointments</a></p>
                <p><a href="contact_specific-3.php?c_id=<?php echo $c_id; ?>">Activity</a></p>
                <p><a href="contact_specific-5.php?c_id=<?php echo $c_id; ?>">Jobs</a></p>
                <p><a href="contact_specific-4.php?c_id=<?php echo $c_id; ?>">Files</a></p>
                <p style="color:#3598DB;margin-left:-2px"> <b style="margin-right: 10px;">|</b>Notes</p>

            </div>

            <div class="status">
                <div class="status1">
                    <p>#<?php echo  $c_id ?></p>
                    <span><?php echo  $added_on ?></span>
                </div>
                <div class="status-name" style="margin-top:30px;">
                    <span style="margin-left:50px;"><?php echo  $fname, $lname ?></span>
                    <p style="color:#3598DB;margin-left:70px"><?php echo  $company_name ?>
                        <!-- <span style="color:black">| <?php //echo  $role ?></span> -->
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

                    <form method="post">
                        <div class="search-box">


                            <details id="dropdown" class="dropdown">
                                <summary class="dropdown-button">
                                    <span id="selected-item" class="selected-item"> <i class="fa fa-pencil"
                                            aria-hidden="true"></i> Author</span>
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
                                placeholder="Search for type">
                            <button type="submit" name="btnsearch" class="searchButton">
                                <img src="./img/search-icon-blue.png" />
                            </button>


                        </div>
                    </form>
                    <button class="btn" id="myBtn" type="button">Add Note +</button>
                </span>
                <div class="row-flex-jobj justifycontent-flex-end-1">
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
                        <label for="c" class="select-col-label"> Select all</label>
                    </div>
                    <select id="multi_search" class="search_list_1">
                        <option value="" default>Select action</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                    </select>
                </div>

                <?php

                if($flag == 0)
                {
                  $sql3="select * from notes";
                }
            $res=mysqli_query($conn,$sql3);
            if($res == TRUE)
            {
                $count=mysqli_num_rows($res);
                if($count >0)
                {
                    while($rows=mysqli_fetch_assoc($res))
                    {
                        $id=$rows['id'];
                        $last_edited=$rows['last_edited'];
                        $added_on=$rows['added_on'];
                        $note_type=$rows['note_type'];
                        $firstname=$rows['firstname'];
                        $time_spent=$rows['time_spent'];
                        // $time=$rows['time'];
                        $notes=$rows['notes'];


                 ?>
                <div class="row row-adjust">

                    <div class="column">
                        <input type="checkbox" id="c1" class="checkbox">
                        <label for="c1"></label>
                    </div>
                    <div class="column" id="ld">
                        <p class="col-1">Last Updated</p>
                        <span class="col-span-1"><?php echo $last_edited; ?></span>
                    </div>
                    <div class="column">
                        <img src="./img/Ellipse -5.png" class="img">
                    </div>
                    <div class="column" id="ub">
                        <p class="col-2">Uploaded by</p>
                        <span class="col-span-2"><?php echo $firstname; ?></span>
                    </div>
                    <div class="column">
                        <p class="col-3">Type</p>
                        <span class="col-span-3"><?php echo $note_type; ?></span>
                    </div>
                    <div class="column">
                        <p class="col-4">Time spent</p>
                        <span class="col-span-4"><?php echo $time_spent; ?></span>
                    </div>
                    <div class="edit-changes-div">
                        <div class="column edit-edjust">
                            <p class="col-5"> <i class="fa fa-pencil" aria-hidden="true"></i></p>
                        </div>
                        <div class="column delete-adjust">
                            <p class="col-6"><a href='./includes/delete4.php?id=<?php echo $row["id"] ?>'
                                    onclick='checkdelete()' style="color:red;text-decoration:none"></a> <i
                                    class="fa fa-trash" aria-hidden="true"></i></p>
                        </div>
                    </div>

                    <div class="column added-on-adjust" style="margin-top:80px;margin-left: -750px;">
                        <p class="col-1">Added on</p>
                        <span class="col-span-1"><?php echo $added_on; ?></span>
                    </div>
                    <div class="column" id="note">
                        <p><?php echo $notes; ?></p>
                    </div>
                </div>
                <?php
                        }
                    }
                }
            ?>


            </div>
        </div>
    </div>
</body>

<script>
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