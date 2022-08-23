<!DOCTYPE html>
<html lang="en">
<!--TOP HEADER-->
<?php include ('header_files.php')?>

<?php
   include 'connection1.php';     //database connection page included
   session_start();        //session has been started
?>

<?php include('header.php') ?>
<?php
if(isset($_POST['submit']))
{

    $usertype=$_POST['usertype'];
    $name=$_POST['name'];
    $designation=$_POST['designation'];
    $phone_number=$_POST['phone_number'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $notification=$_POST['notification'];
    $checkbox1=$_POST['user'];
    $chk="";
    foreach($checkbox1 as $chk1)
   {
      $chk .= $chk1.",";
   }
   $compfile=$_FILES["compfile"]["name"];
   move_uploaded_file($_FILES["compfile"]["tmp_name"],"img/".$_FILES["compfile"]["name"]);
   $sql=mysqli_query($conn,"insert into user (image,usertype,name,designation,phone_number,email,password,notification,user_details) values ('$compfile','$usertype','$name','$designation','$phone_number','$email','$password','$notification','$chk')");
   echo '<script>alert("User Created Successfully!!")</script>';
    }
?>
<!--CSS FILES-->
<link rel="stylesheet" href="./css/addClient_aw.css">
<link rel="stylesheet" href="./css/create_new_user_remove.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<title>Analysed</title>
<!-- START OF INTERNAL STYLESHEET -->
<style>
#imageUpload {
    display: none;
}

#profileImage {
    cursor: pointer;
    border-radius: none;
}

#profile-container {
    width: 101px;
    height: 101px;
    background: #FFFFFF 0% 0% no-repeat padding-box;
    box-shadow: 0px 0px 8px #00000029;
    opacity: 1;
    overflow: hidden;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
}

.background-class {
    width: 40px;
    height: 40px;
    background: #3598DB 0% 0% no-repeat padding-box;
    opacity: 1;
    border-radius: 50%;
    margin-top: -40px;
    margin-left: 75px;
    position: relative;
    border: 2px solid white;
}

.fa-camera {
    position: relative;
    color: white;
    margin-top: -35px;
    margin-left: 87px;
}
</style> <!-- END OF INTERNAL STYLESHEET -->
<div class="container">
    <div class="small_container">
        <div class="heading_dash" id="heading_dash1">
            <!-- CREATE USER -->
            <h1 class="mainHeadingDash" id="mainHeadingDash1">Create User</h1>
            <p class="mainParaDash" style="color:#3598DB;">Provide details and give user access controls.</p>
        </div>
        <form method="post" id="form1" enctype="multipart/form-data">
            <div class="row-recruiter image-box-right-side-add-client">
                <div class="left-side-image-box-add-client-1">
                    <div class="sub-divs-image-box-right-side-add-client">
                        <div id="profile-container">
                            <image id="profileImage" src="img/user1.png" width="101px" height="101px">
                        </div>
                        <h2 class="background-class" id="background-class"><i class="" aria-hidden="true"></i></h2>
                        <p class="image-upload-e" id="img_upload"><i class="fa fa-camera" aria-hidden="true"></i></p>
                        <input type="file" name="compfile" value="" id="imageUpload">
                    </div>
                </div>
            </div>
            <div class="row-recruiter container-for-add-client-main">
                <div class="right-side-row-for-add-client-container-1" id="general-information-addclient-1">
                    <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                        <div class="row-recruiter" style="padding-top:40px">
                            <!-- PERSONAL DETAILS -->
                            <h2 class="heading-for-general-information-right-side-add-client-container" id="heading_cnu"
                                style="color:#3598DB;font-size:23px;">Personal details</h2>
                        </div>
                    </div>
                    <div class="row-recruiter inputs-for-add-client-below-image-box" id="part1">
                        <div class="right-side-image-box-right-add-client-1">
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                    <label for="usertype"> Title <span style="color:#3598DB;">*</span></label>
                                    <select name="usertype" id="usertype" class="default-select-for-add-client-1"
                                        style="color:grey;">
                                        <option value="0" default>Select User type</option>
                                        <option value="Recruiter">Recruiter</option>
                                        <option value="Job seeker">Job seeker</option>
                                        <option value="client">Client</option>
                                    </select>
                                </p>
                                <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                    <label for="name">Name <span style="color:#3598DB;">*</span></label>
                                    <input type="text" name="name" class="default-input-for-add-client-1"
                                        placeholder="Enter name of the user" id="name">
                                </p>
                                <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                    <label for="designation">Designation <span style="color:#3598DB;">*</span></label>
                                    <input type="text" name="designation" class="default-input-for-add-client-1"
                                        placeholder="Enter designation" id="designation">
                                </p>
                                <div class="input-para-add-client-ekam-1 fx-city-name-1">
                                    <label for="phone_number">Phone number <span style="color:#3598DB;">*</span></label>
                                    <input type="tel" maxlength='10' name="phone_number" id="phone_number"
                                        class="default-input-for-add-client-1"
                                        placeholder="Enter a 10 digit phone number">
                                </div>

                                <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                    <label for="email">Email <span style="color:#3598DB;">*</span></label>
                                    <input type="email" name="email" class="default-input-for-add-client-1"
                                        placeholder="Enter the associated email-id" id="email">
                                </p>
                                <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                    <label for="password">Password <span style="color:#3598DB;">*</span></label>
                                    <input type="password" name="password" class="default-input-for-add-client-1"
                                        placeholder="Set the password for the account" id="password">
                                </p>
                            </div>
                        </div>
                    </div> <!-- NOTIFICATION DETAILS -->
                    <div class="row-recruiter" style="margin-bottom: 30px;">
                        <h2 class="heading-for-general-information-right-side-add-client-container" id="heading_part2"
                            style="color:#3598DB;font-size:23px;">Notification details</h2>
                    </div>
                    <div class="row-recruiter sub-divs-image-box-right-side-add-client" id="part2">
                        <div class="radio-item">
                            <input type="radio" id="ritema" name="notification" value="Allow email notifications"
                                checked="checked">
                            <label for="ritema">Allow email notifications</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritemb" name="notification" value="Allow user to choose settings">
                            <label for="ritemb">Allow user to choose settings</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="ritemc" name="notification" value="Don't allow email notifications">
                            <label for="ritemc">Don't allow email notifications</label>
                        </div>
                    </div>
                    <!-- USER ACCESS DETAILS -->
                    <div class="row-recruiter" id="header_part3" style="margin-bottom: 18px;">
                        <h2 class="heading-for-general-information-right-side-add-client-container" id="part3"
                            style="color:#3598DB;font-size:23px;">User access details</h2>
                        <div class="col-sm" id="col-sm">
                            <input type="checkbox" id="select-all">
                            <label for="select-all" style="color:#3598DB;"> Select all</label>
                        </div>
                    </div>
                    <div id="user_access">
                        <div class="row" style="padding-bottom:13px">
                            <div class="col-sm">
                                <input type="checkbox" id="c1" name="user[]" value="Access to database">
                                <label for="c1">Access to database</label>
                            </div>
                            <div class="col-sm">
                                <input type="checkbox" id="c2" name="user[]" value="Can create a job">
                                <label for="c2">Can create a job</label>
                            </div>
                            <div class="col-sm">
                                <input type="checkbox" id="c3" name="user[]" value="Can shortlist candidates">
                                <label for="c3">Can shortlist candidates</label>
                            </div>
                            <div class="col-sm">
                                <input type="checkbox" id="c4" name="user[]" value="Can add a company">
                                <label for="c4">Can add a company</label>
                            </div>
                        </div>
                        <div class="row" style="padding-bottom:13px">
                            <div class="col-sm">
                                <input type="checkbox" id="c5" name="user[]" value="Can add tasks">
                                <label for="c5">Can add tasks</label>
                            </div>
                            <div class="col-sm">
                                <input type="checkbox" id="c6" name="user[]" value="Can hire candidates">
                                <label for="c6">Can hire candidates</label>
                            </div>
                            <div class="col-sm">
                                <input type="checkbox" id="c7" name="user[]" value="Can view analytics">
                                <label for="c7">Can view analytics</label>
                            </div>
                            <div class="col-sm">
                                <input type="checkbox" id="c8" name="user[]" value="Can view billing details">
                                <label for="c8">Can view billing details</label>
                            </div>
                        </div>
                        <div class="row" style="padding-bottom:13px">
                            <div class="col-sm">
                                <input style="margin-left: -4px;" type="checkbox" id="c9" name="user[]"
                                    value="Can start or join video calls">
                                <label for="c9">Can start or join video calls</label>
                            </div>
                            <div class="col-sm">
                                <input type="checkbox" id="c10" name="user[]" value="Can schedule interviews">
                                <label for="c10">Can schedule interviews</label>
                            </div>
                            <div class="col-sm">
                                <input type="checkbox" id="c11" name="user[]" value="Can add candidates">
                                <label for="c11">Can add candidates</label>
                            </div>
                            <div class="col-sm">
                                <input type="checkbox" id="c12" name="user[]" value="Can reply to queries">
                                <label for="c12">Can reply to queries</label>
                            </div>
                        </div>
                        <div class="row" style="padding-bottom:13px">
                            <div class="col-sm">
                                <input type="checkbox" id="c13" name="user[]" value="Can create contracts">
                                <label for="c13">Can create contracts</label>
                            </div>
                            <div class="col-sm" id="c14_1">
                                <input type="checkbox" id="c14" name="user[]" value="Can edit details of organisation">
                                <label for="c14">Can edit details of organisation</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CREATE USER BUTTON -->
            <button type="submit" name="submit" class="btn create_user btn-success" id="create_but">Create user</button>
        </form>
    </div>
</div>

<script>
$("#profileImage").click(function(e) {
    $("#imageUpload").click();
});

function fasterPreview(uploader) {
    if (uploader.files && uploader.files[0]) {
        $('#profileImage').attr('src',
            window.URL.createObjectURL(uploader.files[0]));
    }
}

$("#imageUpload").change(function() {
    fasterPreview(this);
});
</script>
<script>
$(document).ready(function() {
    $("#form1 #select-all").click(function() {
        $("#form1 input[type='checkbox']").prop('checked', this.checked);
    });
});
</script>