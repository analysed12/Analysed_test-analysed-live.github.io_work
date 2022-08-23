<!DOCTYPE html>
<html lang="en">
<!--TOP HEADER-->
<? include ('header_files.php')?>
<?php


include 'connection1.php';         //database connection page included
    session_start();        //session has been started



// posting all data from personal information page to global variables using $_Session['']
    $_SESSION['fname']  = isset($_POST['firstname']);
    $_SESSION['lname']  = isset($_POST['lname']);
    $_SESSION['status']  = isset($_POST['status']);
    $_SESSION['mname']  = isset($_POST['mname']);
    $_SESSION['email']  = isset($_POST['email']);
    $_SESSION['phone']  = isset($_POST['phone']);
    $_SESSION['address']  = isset($_POST['address']);
    $_SESSION['city']  = isset($_POST['city']);
    $_SESSION['zip_code']  = isset($_POST['zip_code']);
    $_SESSION['state']  = isset($_POST['state']);
    $_SESSION['country']  = isset($_POST['country']);



    // method to insert any files in database
    $td="../img/";
    $tf=$td.basename(isset($_FILES["picture"]["name"]));

    $_SESSION['image'] = basename(isset($_FILES["picture"]["name"]));

    $move= move_uploaded_file(isset($_FILES["picture"]["tmp_name"] , $tf));
?>
<!--HEADER FILES-->
<?php include('header.php')?>
<!--CSS FILES-->
<link rel="stylesheet" href="./css/addClientContact_remov.css">

<title>Analysed</title>


<style>
.top-submit-btn {
    width: 100px;
}
</style>
<form action="addContatadd.php" method="post" enctype="multipart/form-data">
    <!-- redirecting to Additional info page with data of professional info -->
    <div class="container">
        <div class="bread-crumbs_Mytools-recruiter">

            <a href="dashboard.php">Dashboard</a> > <a href="candidate_list.php">My Database</a> > <a href="#">Add
                Contact</a>
        </div>
        <div class="small_container">
            <div class="heading_dash">
                <h1 class="mainHeadingDash">Add Contact</h1>
                <p class="mainParaDash">Fill in the details to create a new client.</p>
            </div>
            <!-- <button class="save_button_addClient default-button-for-recruiter-dashboard">Save</button>-->
            <div class="row-recruiter container-for-add-client-main">
                <div class="left-side-row-for-add-client-container-1">
                    <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addContact-1"><a
                            href="addContact.php">Personal info</a></p>
                    <p class="links-for-add-client-low-side-row-for-add-client active"
                        id="link-categories-addContact-2"><a href="addContactProfessional.php"
                            class="active">Professional info</a></p>
                    <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addContact-3"><a
                            href="addContatadd.php">Additional info</a></p>
                </div>
                <!-- PERSONAL INFORMATION -->
                <div class="right-side-row-for-add-client-container-1" id="professional-information-addcontact-1">
                    <h2 class="heading-for-general-information-right-side-add-client-container  heading-addContact-2"><i
                            class="fa fa-user" aria-hidden="true"></i> Professional information</h2>
                    <div class="row-recruiter image-box-right-side-add-client">
                        <div class="right-side-image-box-right-add-client-1">
                            <div class="row-recruiter inputs-for-add-client-below-image-box">
                                <!-- CURRENT TITLE     -->
                                <p class="input-para-add-client-ekam-1">
                                    <label for="default-input-for-no.1">Current title </label>
                                    <input type="text" name="job_title" class="default-input-for-add-client-1"
                                        placeholder="Enter current job title of candidate" id="default-input-for-no.1"
                                        required>
                                </p>
                                <!-- COMPANY NAME -->
                                <p class="input-para-add-client-ekam-1">
                                    <label for="default-input-for-no.1011">Company name</label>
                                    <input type="text" name="company_name" class="default-input-for-add-client-1"
                                        placeholder="Candidate currently employed in?" id="default-input-for-no.1011"
                                        required>
                                </p>
                            </div>
                            <!-- CONTACT TYPE -->
                            <div class="row-recruiter inputs-for-add-client-below-image-box">
                                <p class="input-para-add-client-ekam-1 right-side" style="margin-left: 0px;">
                                    <label for="default-select-for-no1">Contact type *</label>
                                    <select name="contact_type" id="default-select-for-no.1"
                                        class="default-select-for-add-client-1" required>
                                        <option value="0" default>Client</option>
                                        <option value="1">Open</option>
                                        <option value="2">Closed</option>
                                        <option value="3">Working</option>
                                    </select>
                                </p>
                                <!-- DIVISION -->
                                <p class="input-para-add-client-ekam-1 right-side" style="margin-left: 0px;">
                                    <label for="default-select-for-no1">Division*</label>
                                    <select name="division" id="default-select-for-no.1"
                                        class="default-select-for-add-client-1" required>
                                        <option value="0" default>Other</option>
                                        <option value="1">Open</option>
                                        <option value="2">Closed</option>
                                        <option value="3">Working</option>
                                    </select>
                                </p>
                                <!-- SOURCE -->
                                <p class="input-para-add-client-ekam-1 right-side" style="margin-left: 0px;">
                                    <label for="default-select-for-no1">Source *</label>
                                    <select name="source" id="default-select-for-no.1"
                                        class="default-select-for-add-client-1" required>
                                        <option value="0" default>Select your source (Ex. LinkedIn)</option>
                                        <option value="1">Open</option>
                                        <option value="2">Closed</option>
                                        <option value="3">Working</option>
                                    </select>
                                </p>
                                <!-- REPORT -->
                                <p class="input-para-add-client-ekam-1 right-side" style="margin-left: 0px;">
                                    <label for="default-select-for-no1">Reports to *</label>
                                    <select name="reports_to" id="default-select-for-no.1"
                                        class="default-select-for-add-client-1" required>
                                        <option value="0" default>Select a recruiter</option>
                                        <option value="1">Open</option>
                                        <option value="2">Closed</option>
                                        <option value="3">Working</option>
                                    </select>
                                </p>
                                <!-- INDUSTRY -->
                                <p class="input-para-add-client-ekam-1 right-side" style="margin-left: 0px;">
                                    <label for="default-select-for-no1">Industry *</label>
                                    <select name="industry" id="default-select-for-no.1"
                                        class="default-select-for-add-client-1" required>
                                        <option value="0" default>Select Industry</option>
                                        <option value="1">Open</option>
                                        <option value="2">Closed</option>
                                        <option value="3">Working</option>
                                    </select>
                                </p>
                                <!-- REQUIRED SKILLS -->
                                <p class="input-para-add-client-ekam-1">
                                    <label for="default-input-for-no.2">Required skills </label>
                                    <input name="skills" type="text" class="default-input-for-add-client-1"
                                        placeholder="Enter Required skills" id="default-input-for-no.2" required>
                                </p>
                            </div>
                            <!-- SAVE BUTTON -->
                            <div class="heading_dash_save_button top-submit-btn">
                                <input type="submit" name="next"
                                    class="save_button_addClient default-button-for-recruiter-dashboard" value="Save">
                                <img src="./img/save-icon.png" alt="" class="save_icon-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>