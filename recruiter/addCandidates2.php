<?php
include 'connection1.php';          //database connection page included
session_start();             //session has been started

// posting all data from personal information page to global variables using $_Session['']

if (isset($_POST['next'])) {


$_SESSION['firstname']  = $_POST['firstname'];
$_SESSION['lastname']   = $_POST['lastname'];
$_SESSION['emailid']    = $_POST['emailid'];
$_SESSION['phonenumber'] = $_POST['phonenumber'];
$_SESSION['birthdate']   = $_POST['birthdate'];
$_SESSION['Industry']   = $_POST['Industry'];
$_SESSION['address']    = $_POST['address'];
$_SESSION['ownership']  = $_POST['ownership'];
$_SESSION['cityname']   = $_POST['cityname'];
$_SESSION['Zipcode']    = $_POST['Zipcode'];
$_SESSION['State']      = $_POST['State'];



// method to insert any image or doc files in database
    $td="../img/";
    $tf=$td.basename($_FILES["image"]["name"]);

    $_SESSION['image']  = basename($_FILES["image"]["name"]);

    $move= move_uploaded_file($_FILES["image"]["tmp_name"] , $tf);

    if (!($move)) {

        echo "something wrong";
    }
}

?>

<?php include('header.php')?>
<!-- <link rel="stylesheet" href="./css/addClient.css"> -->
<link rel="stylesheet" href="./css/addCandidates1_remo.css">
<!-- <link rel="stylesheet" href="../signup/jobSeeker/css/index.css"> -->

<style>
@media (min-width:601px) {
    .salary-range-1 {
        width: 45%;
        margin-right: 10px;
    }

    .salary-range-2 {
        width: 45%;
        margin-left: 10px;
    }
}

@media screen and (max-width:600px) {
    .small_container {
        width: 88% !important;
    }

    .small_container {
        margin-top: 0px;
    }
}
</style>

<title>Analysed</title>
<div class="container">
    <div class="bread-crumbs_Mytools-recruiter">
        <a href="recruiter/dashboard.php" class="unactive-breadcrumb-link">Dashboard</a> > <a href=""
            class="unactive-breadcrumb-link">My Database</a> > <a href="" class="active-breadcrumb-link">Add
            candidates</a>
    </div>
    <div class="small_container">
        <div class="small_container_flex-div-1"
            style="display:flex; justify-content:space-between; align-items:center;">
            <div class="heading_dash">
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
        <div class="row-recruiter container-for-add-client-main actual-container" style="flex-wrap:nowrap; width:100%;">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addClient-1"><a
                        href="addCandidates1.php" class="inactive">Personal infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a
                        href="addCandidates2.php" class=" page-active">Professional infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a
                        href="addCandidates3.php" class="inactive">Skills & Qualification</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a
                        href="addCandidates4.php" class="inactive">Additional information</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1" id="general-information-addclient-1">
                <div class="row-recruiter sub-divs-image-child-main-heading" style="flex-wrap:nowrap;">
                    <img src="./img/professional.png" width="70px" style="margin-right: 10px;">
                    <h2
                        class="heading-for-general-information-right-side-add-client-container row-recruiter-add-client-info-head">
                        Professional information
                    </h2>
                </div>
                <form action="addCandidates3.php" method="POST" enctype="multipart/form-data">
                    <!-- redirecting to skills & Qualification page with data of professional information -->
                    <div class="row-recruiter inputs-for-add-client-below-image-box">
                        <div class="right-side-image-box-right-add-client-1">
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client can2-div-1 ">
                                <p class="input-para-add-client-ekam-1 fx-city-name-1 fb-2">
                                    <label for="default-input-for-no.1">Current Title*</label>
                                    <input type="text" name="currentTitle" class="default-input-for-add-client-1"
                                        placeholder="Enter current job title" id="default-input-for-no.1" required />
                                </p>
                                <p class="input-para-add-client-ekam-1 fx-city-name-1 fb-2">
                                    <label for="default-input-for-no.1">Company Name*</label>
                                    <input type="text" name="companyName" class="default-input-for-add-client-1"
                                        placeholder="Candidate currently employed in?" id="default-input-for-no.1"
                                        required />
                                </p>
                            </div>
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <p class="input-para-add-client-ekam-1 right-side fx-city-name-1 fb-2">
                                    <label for="default-select-for-no1 ">Candidate Type*</label>
                                    <select name="candidateType" id="default-select-for-no.1"
                                        class="default-select-for-add-client-1" required />
                                    <option value="0" default>Select Status</option>
                                    <option value="1">Reviewed</option>
                                    <option value="2">Contacting</option>
                                    <option value="3">Hired</option>
                                    </select>
                                </p>
                                <p class="select-for-select-image-box-below-inputs fx-city-name-1 fb-2">
                                    <label for="default-select-for-no.3">Employment Preference*</label>
                                    <select name="employmentPreference" id="default-select-for-no.3"
                                        class="default-select-for-add-client-1" required />
                                    <option value="0" default>Temporary to permanent</option>
                                    <option value="1">Open</option>
                                    <option value="2">Closed</option>
                                    <option value="3">Working</option>
                                    </select>
                                </p>
                            </div>
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <p class="select-for-select-image-box-below-inputs fx-city-name-1 fb-2">
                                    <label for="default-select-for-no.3">Source*</label>
                                    <select name="source" id="default-select-for-no.3"
                                        class="default-select-for-add-client-1" required />
                                    <option value="0" default>Select your source (Ex. LikedIn)</option>
                                    <option value="1">Open</option>
                                    <option value="2">Closed</option>
                                    <option value="3">Working</option>
                                    </select>
                                </p>
                                <p class="select-for-select-image-box-below-inputs fx-city-name-1 fb-2">
                                    <label for="default-select-for-no.3">Recruiter*</label>
                                    <select name="recruiter" id="default-select-for-no.3"
                                        class="default-select-for-add-client-1" required />
                                    <option value="0" default>Select a recruiter</option>
                                    <option value="1">Open</option>
                                    <option value="2">Closed</option>
                                    <option value="3">Working</option>
                                    </select>
                                </p>
                            </div>
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <p class="input-para-add-client-ekam-1 fx-city-name-1 fb-2">
                                    <label for="default-input-for-no.2">Current Salary*</label>
                                    <input type="text" name="currentSalary" class="default-input-for-add-client-1"
                                        placeholder="Enter current salary" id="default-input-for-no.2" required />
                                </p>
                                <span class="input-para-add-client-ekam-1 desired-salary-p fb-2">
                                    <label for="default-input-for-no.2">Desired Salary Range*</label>
                                    <span class="row-recruiter salary-range">
                                        <input type="text" class="salary-range-1" name="salaryRange1"
                                            class="default-input-for-add-client-1 desired-salary"
                                            placeholder="Salary expected from" id="default-input-for-no.2" required />
                                        to
                                        <input type="text" class="salary-range-2" name="salaryRange2"
                                            class="default-input-for-add-client-1 desired-salary"
                                            placeholder="Salary expected to" id="default-input-for-no.2" required />
                                    </span>
                                </span>
                            </div>
                            <!-- <input type="submit" name="submit"
                                class="save_button_addClient default-button-for-recruiter-dashboard bottom-save-btn"
                                value="Save"> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>