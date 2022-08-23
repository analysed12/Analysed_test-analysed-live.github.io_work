<?php

include 'conn.php';          //database connection page included
session_start();             //session has been started

?>

<?php include('header1.php')?>
<link rel="stylesheet" href="./css/addClient.css">
<link rel="stylesheet" href="./css/addCandidates1.css">
<title>Analysed</title>
<div class="container">
<div class="bread-crumbs_Mytools-recruiter">
        <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="unactive-breadcrumb-link">My Database</a> > <a href="" class="active-breadcrumb-link">Add candidates</a>
    </div>
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Add Candidate</h1>
            <p class="mainParaDash">Please enter the details of the new candidates</p>
        </div>
        <!-- <button class="save_button_addClient default-button-for-recruiter-dashboard">Save</button> -->
        <div class="row-recruiter container-for-add-client-main">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addClient-1"><a href="edit-Candidates1.php" >Personal infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a href="#" class="active">Professional infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="edit-Candidates3.php">Skills & Qualification</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="edit-Candidates4.php">Additional information</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1" id="general-information-addclient-1">
            <div class="row-recruiter" style="margin-bottom: 30px;">
                <img src="./img/mortarboard.svg" width="50px" style="margin-right: 30px;">
                    <h2 class="heading-for-general-information-right-side-add-client-container">Professional information</h2>
                </div>

                <form action="edit-Candidates3.php" method="post" enctype="multipart/form-data">

                                  <?php
                                  $_SESSION['cID'] = $_GET['edit_Candidates'];
                                  // echo   $_SESSION['cID'];
                                  if(isset($_GET['edit_Candidates'])){



                                  $sql= 'SELECT * from candidates where candidate_id ="'.$_SESSION['cID'].'" ';
                                  // query to establish connection from database and get the output of  query
                                  $run = mysqli_query($con,$sql);
                                  $i= 1;


                                  // displaying all the data from the table
                                   while($row =mysqli_fetch_assoc($run)) {

                                    ?>

                <div class="row-recruiter inputs-for-add-client-below-image-box">
                    <div class="right-side-image-box-right-add-client-1">
                                <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-input-for-no.1">Current Title*</label>
                                        <input type="text" name="currentTitle" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" value="<?php echo $row['currentTitle']; ?>">
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-input-for-no.1">Company Name*</label>
                                        <input type="text" name="companyName" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" value="<?php echo $row['companyName']; ?>">
                                    </p>
                                    <p class="input-para-add-client-ekam-1 right-side fx-city-name-1">
                                        <label for="default-select-for-no1 ">Candidate Type*</label>
                                        <select name="candidateType" id="default-select-for-no.1" class="default-select-for-add-client-1">
                                            <option value="<?php echo $row['candidateType']; ?>" default><?php echo $row['candidateType']; ?></option>
                                            <option value="Contract">Contract</option>
                                            <option value="Temporary">Temporary</option>
                                            <option value="Permanent">Permanent</option>
                                        </select>
                                    </p>
                                    <form  action="edit-Candidates3.php" method="post">
                                      <input type="text" name="edit" value="<?php echo $row['candidate_id'];?>">
                                    </form>

                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1">
                                        <label for="default-select-for-no.3">Employment Preference*</label>
                                            <select name="employmentPreference" id="default-select-for-no.3" class="default-select-for-add-client-1">
                                                <option value="<?php echo $row['employmentPreference']; ?>" default><?php echo $row['employmentPreference']; ?></option>
                                                <option value="Temporary to permanent">Temporary to permanent</option>
                                                <option value="Temporary">Temporary</option>
                                                <option value="Permanent">Permanent</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1">
                                        <label for="default-select-for-no.3">Source*</label>
                                            <select name="source" id="default-select-for-no.3" class="default-select-for-add-client-1">
                                                <option value="<?php echo $row['source']; ?>" default><?php echo $row['source']; ?></option>
                                                <option value="Linkedin">Linkedin</option>
                                                <option value="Internshala">Internshala</option>
                                                <option value="Indeed">Indeed</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1">
                                        <label for="default-select-for-no.3">Recruiter*</label>
                                            <select name="recruiter" id="default-select-for-no.3" class="default-select-for-add-client-1">
                                              <option value="<?php echo $row['recruiter']; ?>" default><?php echo $row['recruiter']; ?></option>
                                                <option value="Andrew foy">Andrew foy</option>
                                                <option value="Albert">Albert</option>
                                                <option value="Alex">Alex</option>
                                            </select>
                                    </p>

                                    <p class="input-para-add-client-ekam-1 fx-city-name-1 ">
                                        <label for="default-input-for-no.2">Current Salary*</label>
                                        <input type="text" name="currentSalary" class="default-input-for-add-client-1" placeholder="Company URL" id="default-input-for-no.2" value="<?php echo $row['currentSalary']; ?>">
                                    </p>
                                    <span class="input-para-add-client-ekam-1 desired-salary-p">
                                        <label for="default-input-for-no.2">Desired Salary Range*</label>
                                        <span class="row-recruiter">
                                            <input type="text" name="salaryRange1" class="default-input-for-add-client-1 desired-salary" placeholder="Company URL" id="default-input-for-no.2" value="<?php echo $row['salaryRange1']; ?>"> to
                                            <input type="text" name="salaryRange2" class="default-input-for-add-client-1 desired-salary" placeholder="Company URL" id="default-input-for-no.2" value="<?php echo $row['salaryRange2']; ?>">
                                        </span>
                                    </span>

                                </div>
                                <a  href="edit-Candidates3.php?edit_Candidates=<?php echo $row['candidate_id'];?>"><input type = "submit" name = "next" class="save_button_addClient default-button-for-recruiter-dashboard" value="Save" ></a>
                        </div>
                    </form>
                  <?php }}?>

            </div>
        </div>
    </div>
</div>
</div>
