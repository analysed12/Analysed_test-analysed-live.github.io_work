<?php

include 'connection1.php';          //database connection page included
session_start();             //session has been started

    // posting all data from personal information page to global variables using $_Session['']

if (isset($_POST['next'])) {

    $_SESSION['current_title']  = $_POST['currentTitle'];
    $_SESSION['company_Name'] = $_POST['companyName'];
    $_SESSION['candidate_Type'] = $_POST['candidateType'];
    $_SESSION['employment_Preference'] = $_POST['employmentPreference'];
    $_SESSION['source'] = $_POST['source'];
    $_SESSION['recruiter'] = $_POST['recruiter'];
    $_SESSION['current_Salary'] = $_POST['currentSalary'];
    $_SESSION['salary_Range1'] = $_POST['salaryRange1'];
    $_SESSION['salary_Range2'] = $_POST['salaryRange2'];
}
?>

<?php include('header.php')?>
<!-- <link rel="stylesheet" href="./css/addClient.css"> -->
<link rel="stylesheet" href="./css/addCandidates1_remo.css">
<!-- <link rel="stylesheet" href="../signup/jobSeeker/css/index.css"> -->

<style>
.span-class-file-upload {
    display: block;
    padding: 16px;
    width: auto !important;
    margin-top: 10 !important;
    color: #979797;
    font-size: 14px;
    position: relative;
    border: 1px solid #d7d7d7;
    background: #fafbff;
}

.input-signup-div {
    flex-basis: 45%;
}

@media screen and (max-width:600px) {
    .small_container {
        width: 88% !important;
    }

    .small_container {
        margin-top: 0px;
    }

    .input-signup-div label {
        display: block;
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
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addClient-1">
                    <a href="addCandidates1.php" class="inactive">Personal infromation</a>
                </p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a
                        href="addCandidates2.php" class="inactive">Professional infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a
                        href="addCandidates3.php" class=" page-active">Skills & Qualification</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a
                        href="addCandidates4.php" class="inactive">Additional information</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1" id="general-information-addclient-1">
                <div class="row-recruiter sub-divs-image-child-main-heading" style="flex-wrap:nowrap;">
                    <img src="./img/creativity.svg" width="70px" style="margin-right: 10px;">
                    <h2
                        class="heading-for-general-information-right-side-add-client-container row-recruiter-add-client-info-head">
                        Skills &
                        Qualification
                    </h2>
                </div>
                <form action="addCandidates4.php" method="POST" enctype="multipart/form-data">
                    <!-- redirecting to Additional information page with data of Skills & Qualification -->
                    <div class="row-recruiter inputs-for-add-client-below-image-box">
                        <div class="right-side-image-box-right-add-client-1">
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <p class="input-para-add-client-ekam-1 talents fb-1">
                                    <label for="default-input-for-no.1">Talents*</label>
                                    <input type="text" name="talents" class="default-input-for-add-client-1"
                                        placeholder="Enter any special qualities the candidate has"
                                        id="default-input-for-no.1" required />
                                </p>
                                <div class="input-signup-div fx-city-name-1">
                                    <label for="file-upload">Upload resume </label>
                                    <label for="file-upload"><span class="span-class-file-upload">(*.docx, *.rtf, *.txt,
                                            *.pdf) <i class="fa fa-upload" aria-hidden="true"></i></span></label>
                                    <input type="file" name="resume" id="file-upload" placeholder="docx"
                                        style="display:none;" />
                                </div>
                            </div>
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client skillsdiv">
                                <p class="input-para-add-client-ekam-1 skills fb-1">
                                    <label for="default-input-for-no.1">Skills*</label>
                                    <input type="text" name="skills" class="default-input-for-add-client-1"
                                        placeholder="Enter skills" id="default-input-for-no.1" required />
                                </p>
                            </div>
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <p class="input-para-add-client-ekam-1 right-side fx-city-name-1 fb-2">
                                    <label for="default-select-for-no1 ">Qualification*</label>
                                    <select name="qualification" id="default-select-for-no.1"
                                        class="default-select-for-add-client-1" required />
                                    <option value="0" default>Select Status</option>
                                    <option value="MSc">MSc</option>
                                    <option value="BSc">BSc</option>
                                    <option value="B.Com">B.Com</option>
                                    </select>
                                </p>
                            </div>
                        </div>
                        <!-- <input type="submit" name="next"
                            class="save_button_addClient default-button-for-recruiter-dashboard bottom-save-btn"
                            value="Save"> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>