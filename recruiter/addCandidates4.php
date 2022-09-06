<?php

include 'connection1.php';          //database connection page included
session_start();            //session has been started

    // posting all data from personal information page to global variables using $_Session['']
    if (isset($_POST['next'])) {


    $_SESSION['talent']  = $_POST['talents'];
    $_SESSION['skills'] = $_POST['skills'];
    $_SESSION['qualification'] = $_POST['qualification'];


    $td="../img/";
    $tf=$td.basename($_FILES["resume"]["name"]);

   $_SESSION['resume']  = basename($_FILES["resume"]["name"]);

    $move= move_uploaded_file($_FILES["resume"]["tmp_name"] , $tf);

    if (!($move)) {

        echo "something wrong";
    }
  }
?>

<?php include('header.php')?>
<!-- <link rel="stylesheet" href="./css/addClient.css"> -->
<link rel="stylesheet" href="./css/addCandidates1_remo.css">
<link rel="stylesheet" href="../signup/recruiter/css/index.css">
<title>Analysed</title>

<style>
@media screen and (max-width:600px) {
    .small_container {
        width: 88% !important;
    }

    .small_container {
        margin-top: 0px;
    }
}
</style>


<div class="container">
    <div class="bread-crumbs_Mytools-recruiter">
        <a href="recruiter/dashboard.php" class="unactive-breadcrumb-link">Dashboard</a> > <a href=""
            class="unactive-breadcrumb-link">My Database</a> > <a href="" class="active-breadcrumb-link">Add
            candidates</a>
    </div>
    <div class="small_container">
        <div class="small_container_flex-div-1"
            style="display:flex; justify-content:space-between; align-items:center;">
            <div class=" heading_dash">
                <h1 class="mainHeadingDash">Add Candidate</h1>
                <p class="mainParaDash">Please enter the details of the new candidates</p>
            </div>
            <div class="heading_dash_save_button">
                <input type="submit" name="next" class="save_button_addClient default-button-for-recruiter-dashboard"
                    value="Save">
                <img src="./img/save-icon.png" alt="" class="save_icon-img">
            </div>
        </div>
        <!-- <button class="save_button_addClient default-button-for-recruiter-dashboard">Save</button> -->
        <div class="row-recruiter container-for-add-client-main actual-container" style="flex-wrap:nowrap; width:100%">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addClient-1"><a
                        href="addCandidates1.php" class="inactive">Personal infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a
                        href="addCandidates2.php" class="inactive">Professional infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a
                        href="addCandidates3.php" class="inactive">Skills & Qualification</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a
                        href="addCandidates4.php" class=" page-active">Additional information</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1" id="general-information-addclient-1">
                <div class="row-recruiter sub-divs-image-child-main-heading" style="flex-wrap:nowrap;">
                    <img src="./img/additional.png" width="70px" style="margin-right: 10px;">
                    <h2
                        class="heading-for-general-information-right-side-add-client-container row-recruiter-add-client-info-head">
                        Additional information
                    </h2>
                </div>
                <form action="addcandidateInsert.php" method="POST" enctype="multipart/form-data">
                    <!-- redirecting to insert query page with data of Additional information -->
                    <div class="row-recruiter inputs-for-add-client-below-image-box">
                        <div class="right-side-image-box-right-add-client-1">
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <p class="input-para-add-client-ekam-1 fb-2">
                                    <label for="default-input-for-no.1">Candidates Comments*</label>
                                    <input type="text" name="candidateComment" class="default-input-for-add-client-1"
                                        placeholder="Enter comments" id="default-input-for-no.1" required />
                                </p>
                                <p class="input-para-add-client-ekam-1 fb-2">
                                    <label for="default-input-for-no.1">Availability Date*</label>
                                    <input type="date" name="availability" class="default-input-for-add-client-1"
                                        placeholder="Company name" id="default-input-for-no.1" required />
                                </p>
                            </div>
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <p class="select-for-select-image-box-below-inputs  fx-city-name-1 fb-1">
                                    <label for="default-select-for-no.6">Response type*</label>
                                    <select name="reasonType" id="default-select-for-no.6"
                                        class="default-select-for-add-client-1" required />
                                    <option value="0" default>Internal</option>
                                    <option value="1">Web Response</option>
                                    <option value="2">Submission</option>
                                    </select>
                                </p>
                            </div>
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <p class="select-for-select-image-box-below-inputs  fx-city-name-1 fb-2">
                                    <label for="default-select-for-no.6">Job*</label>
                                    <select name="job" id="default-select-for-no.6"
                                        class="default-select-for-add-client-1" required />
                                    <option value="0" default>Applying for which job</option>
                                    <option value="1">Open</option>
                                    <option value="2">Closed</option>
                                    <option value="3">Working</option>
                                    </select>
                                </p>
                                <p class="select-for-select-image-box-below-inputs  fx-city-name-1 fb-2">
                                    <label for="default-select-for-no.6">Accessibility*</label>
                                    <select name="accessebility" id="default-select-for-no.6"
                                        class="default-select-for-add-client-1" required />
                                    <option value="0" default>Internal</option>
                                    <option value="1">Open</option>
                                    <option value="2">Closed</option>
                                    <option value="3">Working</option>
                                    </select>
                                </p>
                            </div>
                        </div>
                        <!-- <input type="submit" name="submit"
                            class="save_button_addClient default-button-for-recruiter-dashboard bottom-save-btn"
                            value="Save"> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>