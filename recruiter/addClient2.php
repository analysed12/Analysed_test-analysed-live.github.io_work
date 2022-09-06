<?php
include 'connection1.php';              //database connection page included
session_start();                 //session has been started



if (isset($_POST['next']))
{
// posting all data from personal information page to global variables using $_Session[''
$_SESSION['main_email']  = $_POST['main_email'];
$_SESSION['contact_no']   = $_POST['contact_no'];
$_SESSION['address']    = $_POST['address'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['zipcode']   = $_POST['zipcode'];
$_SESSION['state']   = $_POST['state'];
$_SESSION['country']    = $_POST['country'];
}
?>
<style>
@media screen and (min-width:650px) {
    .save_icon-img {
        top: 10px !important;
    }
}

@media screen and (max-width:650px) {
    .right-side-row-for-add-client-container-1 {
        margin-left: 0px !important;
    }

    .heading-for-general-information-right-side-add-client-container-2 {
        left: 0px !important;
        top: -110px !important;
    }

    .default-button-for-recruiter-dashboard {
        margin-left: 18px;
    }

    body {
        overflow-x: hidden;
    }

    #client1 {
        margin-top: 120px !important;
    }

    .default-button-for-recruiter-dashboard {
        top: 595px !important;
    }

    .save3 {
        margin-top: -80px !important;
    }

    #save_2 {
        position: initial !important;
        margin-top: -270px;
    }
}
</style>

<?php include('header.php')?>
<link rel="stylesheet" href="./css/addClient_remove.css">
<title id="title">Analysed</title>
<form action="addClientInsert.php" method="post" enctype="multipart/form-data">
    <!-- redirecting to insert query page with data of Billing information -->
    <div class="container">
        <div class="bread-crumbs_Mytools-recruiter">
            <a href="./dashboard.php">Dashboard</a> > <a href="">My Database</a> > <a href="">Add client</a>
        </div>
        <div class="small_container">
            <div class="heading_dash">
                <h1 class="mainHeadingDash">Add Client</h1>
                <p class="mainParaDash">Fill in the details to create a new client.</p>
            </div>
            <!-- <button class="save_button_addClient default-button-for-recruiter-dashboard">Save</button> -->
            <div class="header_img_2">
                <!--Extra part added, required for responsiveness -->
                <a href="./dashboard.php"> <img src="img/cir2.JPG" class="back_img_2"></a>
                <!-- back to dashboard pg-->
                <img src="img/cir1.JPG" class="bg_img_2">
            </div>

            <div class="row-recruiter container-for-add-client-main actual-container">
                <div class="left-side-row-for-add-client-container-1">
                    <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addClient-1">
                        <a href="addClient.php">General info</a>
                    </p>
                    <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a
                            href="addClient1.php">Contact info</a></p>
                    <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a
                            href="addClient2.php" class="active">Billing info</a></p>
                </div>

                <div class="right-side-row-for-add-client-container-1" id="billing-info-addclient-1">
                    <h2 class="heading-for-general-information-right-side-add-client-container-2"><i class="fa fa-money"
                            aria-hidden="true"></i> Billing information</h2>
                    <div class="row-recruiter inputs-for-add-client-below-image-box" id="client1">
                        <p class="input-para-add-client-ekam-1 fx-city-name-1">
                            <label for="default-select-for-no.101">Bank name</label>
                            <input id="default-select-for-no.101" name="bank_name" type="text"
                                class="default-input-for-add-client-1" placeholder="Enter your bank name" required />
                        </p>
                        <p class="input-para-add-client-ekam-1 fx-city-name-1">
                            <label for="default-select-for-no.102">Bank ID</label>
                            <input id="default-select-for-no.102" name="bank_id" type="tel"
                                class="default-input-for-add-client-1" placeholder="Enter bank ID" required />
                        </p>
                        <p class="input-para-add-client-ekam-1  fx-city-name-1">
                            <label for="default-select-for-no.105">Bank account number</label>
                            <input id="default-select-for-no.105" name="bank_acc_no" type="text"
                                class="default-input-for-add-client-1" placeholder="Enter your bank account number"
                                required />
                        </p>
                        <p class="input-para-add-client-ekam-1">
                            <label for="default-select-for-no.103">IBAN #</label>
                            <input id="default-select-for-no.103" name="iban" type="text"
                                class="default-input-for-add-client-1" placeholder="Enter IBAN #" required />
                        </p>
                        <p class="input-para-add-client-ekam-1">
                            <label for="default-select-for-no.104">VAT #</label>
                            <input id="default-select-for-no.104" name="vat" type="text"
                                class="default-input-for-add-client-1" placeholder="Enter VAT #" required />
                        </p>
                        <br>
                    </div>
                    <br>
                    <div class="clientsavebutton">
                        <input type="submit" name="Save" class="save2 default-button-for-recruiter-dashboard"
                            id="save_2" value="Save">
                        <img src="./img/save-icon.png" alt="" class="save_icon-img">
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</form>