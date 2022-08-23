<?php
include 'connection1.php';         //database connection page included
session_start();            //session has been started
?>

<?php include('header.php')?>
<!-- <link rel="stylesheet" href="./css/addClient_remov.css"> -->
<link rel="stylesheet" href="./css/addCandidates1_remo.css">

<style>
@media (min-width:559px) {

    .addcandidate-contact {
        margin-top: 0px !important;
    }

    .phn-number-div {
        margin-top: 10px !important;
    }

    .sub-divs-margin1 {
        margin-top: initial !important;
    }

    .phn-number--input-signup {
        width: 74%;
    }
}

@media (max-width:1480px) and (min-width:559px) {
    .contact-code {
        padding: 7px 0px !important;
    }
}

@media screen and (max-width:600px) {
    .small_container {
        margin-top: 0px;
    }

    .container-changes {
        margin-top: 0px !important;
    }

    .addcandidate-birth {
        margin-top: 15px !important;
    }
}
</style>


<title>Analysed</title>
<div class="container-changes">
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
            <div class="heading_dash_save_button top-submit-btn">
                <input type="submit" name="next" class="save_button_addClient default-button-for-recruiter-dashboard"
                    value="Save">
                <img src="./img/save-icon.png" alt="" class="save_icon-img">
            </div>
        </div>
        <!-- <button class="save_button_addClient default-button-for-recruiter-dashboard">Save</button> -->
        <div class="row-recruiter container-for-add-client-main actual-container" style="flex-wrap:nowrap; width:100%;">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-1"><a
                        href="addCandidates1.php" class="page-active">Personal
                        infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a
                        href="addCandidates2.php" class="inactive">Professional infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a
                        href="addCandidates3.php" class="inactive">Skills & Qualification</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a
                        href="addCandidates4.php" class="inactive">Additional information</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1" id="general-information-addclient-1">
                <div class="row-recruiter sub-divs-image-box-right-side-add-client all-info-sub-div">
                    <div class="row-recruiter sub-divs-image-child-main-heading">
                        <img src="./img/personal.png" width="70px" style="margin-right: 10px;">
                        <h2 class="heading-for-general-information-right-side-add-client-container">Personal information
                        </h2>
                    </div>
                    <div class="left-side-image-box-add-client-img">
                        <div class="left-side-image-box-add-client-1">
                            <div class="sub-divs-image-box-right-side-add-client">
                                <input type="file" name="image" class="input-image-upload-ekam-1-add-client"
                                    id="input-image-upload-ekam-1-add-client" />
                                <label class="label-for-image-upload-ekam-1client"
                                    for="input-image-upload-ekam-1-add-client">
                                    <h2><i class="" aria-hidden="true"></i></h2>
                                </label>
                            </div>
                        </div>
                        <img src="./img/photo.png" alt="" class="right-div-img">
                    </div>
                </div>
                <form action="addCandidates2.php" method="POST" enctype="multipart/form-data">
                    <!-- redirecting to professional information page with data of personal information -->
                    <div class="row-recruiter inputs-for-add-client-below-image-box">
                        <div class="right-side-image-box-right-add-client-1">
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <p class="input-para-add-client-ekam-1 fx-city-name-1 fb-3">
                                    <label for="default-input-for-no.1">First Name*</label>
                                    <input type="text" name="firstname" class="default-input-for-add-client-1"
                                        placeholder="First name" id="default-input-for-no.1" required />
                                </p>
                                <p class="input-para-add-client-ekam-1 fx-city-name-1 fb-3">
                                    <label for="default-input-for-no.1">Last Name*</label>
                                    <input type="text" name="lastname" class="default-input-for-add-client-1"
                                        placeholder="Last name" id="default-input-for-no.1" required />
                                </p>
                                <p class="select-for-select-image-box-below-inputs fx-city-name-1 fb-3">
                                    <label for="default-select-for-no.3">Status</label>
                                    <select name="Industry" id="default-select-for-no.3"
                                        class="default-select-for-add-client-1">
                                        <option value="0" default>New Candidate</option>
                                        <option value="1">Open</option>
                                        <option value="2">Closed</option>
                                        <option value="3">Working</option>
                                    </select>
                                </p>
                            </div>
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <p class="input-para-add-client-ekam-1 fx-city-name-1 fb-3">
                                    <label for="default-input-for-no.1">Email-ID*</label>
                                    <input type="email" name="emailid" class="default-input-for-add-client-1"
                                        placeholder="Enter mail Id" id="default-input-for-no.1" required />
                                </p>
                                <div class="input-signup-div fx-city-name-1 addcandidate-contact">
                                    <label for="input-first-name">Phone number</label>
                                    <div class="phn-number-div row-signup" style="flex-wrap: nowrap;"><select
                                            name="code" class="contact-code">
                                            <option value="+91">+91</option>
                                        </select><input type="tel" maxlength='10' name="phonenumber"
                                            placeholder="Phone number" id="input-first-name"
                                            class="phn-number--input-signup">
                                    </div>
                                </div>
                                <p
                                    class="input-para-add-client-ekam-1 fx-city-name-1 input-para-dob fb-3 addcandidate-birth">
                                    <label for="default-input-for-no.1">Birth Date*</label>
                                    <input type="date" name="birthdate" class="default-input-for-add-client-1"
                                        placeholder="Enter DOB" id="default-input-for-no.1" required />
                                </p>
                            </div>
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client sub-divs-margin1">
                                <p class="input-para-add-client-ekam-1 fb-3">
                                    <label for="default-input-for-no.2">Address*</label>
                                    <input type="text" name="address" class="default-input-for-add-client-1"
                                        placeholder="Enter Address" id="default-input-for-no.2" required />
                                </p>
                                <p class="input-para-add-client-ekam-1  fx-city-name-1 fb-3">
                                    <label for="default-select-for-no.13">City name</label>
                                    <input id="default-select-for-no.13" name="cityname" type="text"
                                        class="default-input-for-add-client-1" placeholder="Enter your city name">
                                </p>
                                <p class="input-para-add-client-ekam-1  fx-city-name-1 fb-3">
                                    <label for="default-select-for-no.13">Zipcode</label>
                                    <input id="default-select-for-no.13" name="Zipcode" type="text"
                                        class="default-input-for-add-client-1" placeholder="Enter zipcode of city">
                                </p>
                            </div>
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <p class="select-for-select-image-box-below-inputs  fx-city-name-1 fb-2">
                                    <label for="default-select-for-no.6">State</label>
                                    <select name="State" id="default-select-for-no.6"
                                        class="default-select-for-add-client-1">
                                        <option value="0" default>Andhra Pradesh</option>
                                        <option value="karnataka">karnataka</option>
                                        <option value="UP">UP</option>
                                        <option value="Maharastra">Maharastra</option>
                                    </select>
                                </p>
                                <p class="input-para-add-client-ekam-1 fx-city-name-1 fb-2">
                                    <label for="default-select-for-no.2">Country</label>
                                    <select name="ownership" id="default-select-for-no.2"
                                        class="default-select-for-add-client-1">
                                        <option value="0" default>Select Ownership</option>
                                        <option value="India">India</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Japan">Japan</option>
                                    </select>
                                </p>
                            </div>
                            <!-- <div class="heading_dash_save_button bottom-submit-btn">
                                <input type="submit" name="next"
                                    class="save_button_addClient default-button-for-recruiter-dashboard" value="Save">
                                <img src="./img/save-icon.png" alt="" class="save_icon-img">
                            </div> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>