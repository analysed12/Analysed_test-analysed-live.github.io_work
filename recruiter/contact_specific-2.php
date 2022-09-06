<?php

include 'connection1.php';     //database connection page included
session_start();        //session has been started


?>

<?php include('header.php') ?>
<?php

 // $c_id=15;
 $sql="select * from client";
 $res=mysqli_query($conn,$sql);
 if($res == TRUE)
 {
     $count=mysqli_num_rows($res);
     if($count >0)
     {
         while($rows=mysqli_fetch_assoc($res))
         {
             $name=$rows['company_name'];
             $company_name=$rows['company'];
             $client_img=$rows['company_img'];
             $role=$rows['role'];
             $main_email=$rows['main_email'];
             $contact_no=$rows['contact_no'];
             $added_on=$rows['last_updated'];
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
             $contact_id=$rows['contact_id'];
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
<link rel="stylesheet" href="./css/contact_specific-2_shu.css">

<body>
    <div class="container container-adjust">
        <div class="small_container">
            <div class="bread-crumbs_Mytools-recruiter">
                <a href="dashboard.php" class="unactive-breadcrumb-link">Dashboard</a> > <a href="contact_list.php"
                    class="unactive-breadcrumb-link">My Contact</a> > <a href="" class="unactive-breadcrumb-link">Add
                    Contact</a> > <a href="" class="unactive-breadcrumb-link"> Client List</a> > <a href=""
                    class="active-breadcrumb-link"><?php echo  $name ?></a>
            </div>

            <br><br>
            <div class="profile-img">
                <?php echo '<img src="../img/'.$picture.' " >' ;   ?>
                <h1><?php echo  $fname, $lname ?><p1> #<?php echo  $contact_id ?></p1>
                </h1><br>
                <h2><?php echo  $company_name ?> - <span><?php echo  $role ?></span></h2><br>
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
                <p><a href="contact_specific-1.php?c_id=<?php echo $c_id; ?>"> At a glance</a></p>
                <p style="color:#3598DB;margin-left:-2px"> <b style="margin-right: 10px;">|</b> Appointments</p>
                <p><a href="contact_specific-3.php?c_id=<?php echo $c_id; ?>">Activity</a></p>
                <p><a href="contact_specific-5.php?c_id=<?php echo $c_id; ?>">Jobs</a></p>
                <p><a href="contact_specific-4.php?c_id=<?php echo $c_id; ?>">Files</a></p>
                <p><a href="contact_specific-6.php?c_id=<?php echo $c_id; ?>">Notes</a></p>
            </div>

            <br><br>
            <div class="status">
                <div class="status1">
                    <p>#<?php echo  $contact_id ?></p>
                    <span><?php echo  $added_on ?></span>
                </div>
                <div class="status-name" style="margin-top:30px;">
                    <span style="margin-left:50px;"><?php echo  $fname, $lname ?></span>
                    <p style="color:#3598DB;margin-left:70px"><?php echo  $company_name ?> <span style="color:black">|
                            <?php echo  $role ?></span></p>
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

                    <p style="color:#3598DB;"><?php echo  $main_email ?></p>
                    <p style="color:black;">+91 <?php echo  $contact_no ?></p>
                    <p style="color:black;">+91 <?php echo  $contact_no ?></p>
                    <br><br>
                    <p style="color:#979797;padding-top: 0px;">Address</p>

                    <p style="color:black"><?php echo  $city ?></p>
                    <p style="color: black;"><?php echo  $state ?> , <?php echo  $country ?>.</p>
                    <br><br>
                </div>
            </div>



            <?php
         // $cs_id=3;
         $c_id=$_GET['c_id'];
         $sql1="select * from contacts where contact_id='$c_id'";
         $res1=mysqli_query($conn,$sql1);
         if($res1 == TRUE)
         {
             $count=mysqli_num_rows($res1);
             if($count >0)
             {
                 while($rows=mysqli_fetch_assoc($res1))
                 {
                     $last_edited=$rows['added_on'];
                     $files=$rows['files'];
                     $notes=$rows['notes'];
                     $jobs=$rows['job_title'];
                     $visibility=$rows['visibility'];
                     $source=$rows['source'];
                     $validity=$rows['validity'];
                     $type=$rows['contact_type'];
                     $skills=$rows['skills'];
                     $email=$rows['email'];
                     $contact_no=$rows['phone'];
                     $city=$rows['city'];
                     $state=$rows['state'];
                     $country=$rows['country'];
                 }
             }
           }
         ?>

            <div class="left-side-container-1">

                <div class="Appt-button">
                    <h2> Appointments</h2>
                    <button class="button-print">
                        <a style="text-decoration: none; color: white;" href="#"> <i class="fa fa-print"></i> Print a
                            Timetable </a>
                    </button>
                </div>

                <div class="filter-options1">
                    <form method="post">

                        <div class="filter-options">

                            <div class="col-3">
                                <div class="filterSmall_myTasks1">
                                    <select name="qualification" id="val1" style="color:#3598DB;">
                                        <option value="0"> <i class="fa fa-search"></i>Search by name or number</option>
                                        <option value="1">PG</option>
                                        <option value="2">ME</option>
                                    </select>
                                </div>
                            </div>



                            <div class="col-3">
                                <div class="filterSmall_myTasks1">
                                    <select name="country" id="val1" style="color:#3598DB;">
                                        <option value="0">All Catergories</option>
                                        <option value="1"></option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-2">

                                <div class="filterSmall_myTasks1">
                                    <select name="state" id="val3" style="color:#3598DB;">
                                        <option value="0">All Statuses</option>
                                        <option value="1"></option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-2">

                                <div class="filterSmall_myTasks1">
                                    <input type="date" id="val3" name="date" class="input1">
                                </div>
                            </div>

                            <div>
                                <button type="submit" name="btnfilter" class="apply_1"> New Appointment</button>
                            </div>

                        </div>
                        <br>
                    </form>
                    <div class="table-data">
                        <table id="customers">
                            <tr>
                                <th>Time</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Company</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>9:00</td>
                                <td>29-06-2022</td>
                                <td>Chris Turner</td>
                                <td>9876543210</td>
                                <td>ABC Technical Support</td>
                                <!-- <td><img src="./img/edit-icon.png" alt="" height=30 width=30 /></td>
                                <td><img src="./img/delete-icon.png" alt="" height=30 width=30 /></td> -->
                                <td><button type="submit" name="btnfilter" class="start-appt-btn"> Start
                                        Appointment</button></td>

                            </tr>

                            <tr>
                                <td>9:00</td>
                                <td>29-06-2022</td>
                                <td>Chris Turner</td>
                                <td>9876543210</td>
                                <td>ABC Technical Support</td>
                                <!-- <td><img src="./img/edit-icon.png" alt="" height=30 width=30 /></td>
                                <td><img src="./img/delete-icon.png" alt="" height=30 width=30 /></td> -->
                                <td><button type="submit" name="btnfilter" class="start-appt-btn"> Start
                                        Appointment</button></td>

                            </tr>

                            <tr>
                                <td>9:00</td>
                                <td>29-06-2022</td>
                                <td>Chris Turner</td>
                                <td>9876543210</td>
                                <td>ABC Technical Support</td>
                                <!-- <td><img src="./img/edit-icon.png" alt="" height=30 width=30 /></td>
                                <td><img src="./img/delete-icon.png" alt="" height=30 width=30 /></td> -->
                                <td><button type="submit" name="btnfilter" class="start-appt-btn"> Start
                                        Appointment</button></td>

                            </tr>

                            <tr>
                                <td>9:00</td>
                                <td>29-06-2022</td>
                                <td>Chris Turner</td>
                                <td>9876543210</td>
                                <td>ABC Technical Support</td>
                                <!-- <td><img src="./img/edit-icon.png" alt="" height=30 width=30 /></td>
                                <td><img src="./img/delete-icon.png" alt="" height=30 width=30 /></td> -->
                                <td><button type="submit" name="btnfilter" class="start-appt-btn"> Start
                                        Appointment</button></td>

                            </tr>

                            <tr>
                                <td>9:00</td>
                                <td>29-06-2022</td>
                                <td>Chris Turner</td>
                                <td>9876543210</td>
                                <td>ABC Technical Support</td>
                                <!-- <td><img src="./img/edit-icon.png" alt="" height=30 width=30 /></td> -->
                                <!-- <td><img src="./img/delete-icon.png" alt="" height=30 width=30 /></td> -->
                                <td><button type="submit" name="btnfilter" class="start-appt-btn"> Start
                                        Appointment</button></td>
                            </tr>

                            <tr>
                                <td>9:00</td>
                                <td>29-06-2022</td>
                                <td>Chris Turner</td>
                                <td>9876543210</td>
                                <td>ABC Technical Support</td>
                                <!-- <td><img src="./img/edit-icon.png" alt="" height=30 width=30 /></td>
                                <td><img src="./img/delete-icon.png" alt="" height=30 width=30 /></td> -->
                                <td><button type="submit" name="btnfilter" class="start-appt-btn"> Start
                                        Appointment</button></td>
                            </tr>

                        </table>
                    </div>





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