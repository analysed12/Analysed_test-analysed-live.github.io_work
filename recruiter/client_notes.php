<?php include('connection1.php'); ?>

<?php
session_start();
// if(isset($_SESSION['company_name'])) {
//     $company_name=$_SESSION['company_name'];
//     $sql=mysqli_query($conn,"select * from client where company_name='$company_name'");
     $c_id=$_GET['c_id'];
    $sql=mysqli_query($conn,"select * from client where client_id='$c_id'");
    $check=mysqli_num_rows($sql)>0;
    if($check){
        while($row=mysqli_fetch_assoc($sql)){
            $company_name=$row['company_name'];
?>
<?php include('header.php') ?>
<title>Dashboard</title>
<link rel="stylesheet" href="./css/client_notes2.css">
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
                <p><a href="client_files.php?c_id=<?php echo $row['client_id']; ?>">Files</a></p>
                <p style="color:#3598DB;margin-left:-2px"> <b style="margin-right: 10px;">|</b>Notes</p>
            </div>

            <div class="status">
                <div class="status1">
                    <p><?php echo $row["client_id"]; ?></p>
                    <span>05-05-2021</span>
                </div>
                <div class="status-name" style="margin-top:30px;">
                    <span style="margin-left:50px;"><?php echo $row["company_name"]; ?></span>
                    <p style="color:#3598DB;margin-left:40px"><?php echo $row["industry"]; ?></p>
                    <p style="color:#979797;font-size:18px;margin-left:25px"><i class="fa fa-briefcase"
                            aria-hidden="true"></i> Jobs</p>
                    <p style="color:#979797;font-size:18px;margin-left:140px;margin-top: -23px;"><i
                            class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $row["country"]; ?></p>
                    <u
                        style="color:#979797;margin-left:15px">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u>
                    <br><br>
                    <span
                        style="color:#979797; font-size:15px; margin-left:15px;">Status&emsp;&emsp;Ownership&emsp;&emsp;Source</span>
                    <br>
                </div>

                <div class="displayname">
                    <span><?php echo $row["status"]; ?></span>&emsp;&emsp;<?php echo $row["ownership"]; ?>&emsp;&emsp;<?php echo $row["source"]; ?>
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
                                    <span id="selected-item" class="selected-item"> <i class="fa fa-pencil"
                                            aria-hidden="true"></i> Author</span>
                                </summary>
                            </details>
                            <input class="search-form-input" type="text" name="search" id="search"
                                placeholder="Search by Note content" oninput="myFunction()">
                            <button class="searchButton">
                                <img src="./img/search-icon-blue.png" />
                            </button>
                        </div>
                        <button class="btn" id="myBtn" type="button">Add +</button>
                    </span>
                </form>

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

                    <div class="files-added" id="result1">

                        <?php
                $sql=mysqli_query($conn,"select * from client_notes where company_name='$company_name' ");
                $check=mysqli_num_rows($sql)>0;
                if($check){
                    while($row=mysqli_fetch_assoc($sql)){
                        ?>

                        <div class="row">
                            <div class="column">
                                <input type="checkbox" id="c1" class="checkbox">
                                <label for="c1"></label>
                            </div>
                            <div class="column">
                                <p class="col-1">Last Updated</p>
                                <span class="col-span-1"><?php echo $row["last_edited"]; ?></span>
                            </div>
                            <div class="column">
                                <img src="./img/Ellipse -5.png" class="img">
                            </div>
                            <div class="column">
                                <p class="col-2">Uploaded by</p>
                                <span class="col-span-2">Sasuke Uchiha</span>
                            </div>
                            <div class="column">
                                <p class="col-3">Type</p>
                                <span class="col-span-3"><?php echo $row["note_type"]; ?></span>
                            </div>
                            <div class="column">
                                <p class="col-4">Time spent</p>
                                <span class="col-span-4"><?php echo $row["time_spent"]; ?></span>
                            </div>
                            <div class="column">
                                <p class="col-5">Edit <i class="fa fa-pencil" aria-hidden="true"></i></p>
                            </div>
                            <div class="column">
                                <p class="col-6"><a href='./includes/delete2.php?id=<?php echo $row["note_id"] ?>'
                                        onclick='checkdelete()' style="color:red;text-decoration:none">Delete <i
                                            class="fa fa-trash" aria-hidden="true"></i></a></p>
                            </div>

                            <div class="column" style="margin-top:80px;margin-left: -838px;">
                                <p class="col-1">Added on</p>
                                <span class="col-span-1"><?php echo $row["added_on"]; ?></span>
                            </div>
                            <div class="column" style="margin-top:-5px;margin-left: 200px;padding-right: 10px;">
                                <p style="font-size: 16px;" id="notes"><?php echo $row["notes"]; ?></p>
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
        url: './includes/action4.php',
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
            url: './includes/action4.php',
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