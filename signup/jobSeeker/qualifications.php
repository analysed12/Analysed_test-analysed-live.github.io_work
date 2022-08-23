<?php
include 'connection1.php';
session_start();
if (isset($_POST['next'])) {

  $_SESSION['Firstname']  = $_POST['Firstname'];
  $_SESSION['Lastname']   = $_POST['Lastname'];
  $_SESSION['Emailaddress']    = $_POST['Emailaddress'];
  $_SESSION['Phonenumber'] = $_POST['Phonenumber'];
  $_SESSION['Password'] = $_POST['Password'];
  $_SESSION['ConfirmPassword'] = $_POST['ConfirmPassword'];
  $_SESSION['Address'] = $_POST['Address'];
}
?>


<?php include('../navMenu.php')?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>



            <div class="row-signup hero-section-justify-content max-width-row">
                <div class="left-side-flex-container-signup">
                    <p class="signup-heading-signup-recruiter">
                        Sign up
                    </p>
                    <p class="progress-bar-signup"><span style="width:100%;"></span></p>
                    <p class="personal-details-heading">Career details</p>
                    <form action="jobseekerins.php" method="post" enctype = "multipart/form-data">
                        <div class="row-signup input-section-row">
                        <div class="input-signup-div industry">
                                <label for="industry-selection-1">Qualification</label>
                                <select id="industry-selection-1" name="qualification" required />
                                    <option>Select Qualification</option>
                                    <option value="Btech">Btech</option>
                                    <option value="Mtech">Mtech</option>
                                </select>
                            </div>
                            <div class="input-signup-div industry">
                                <label for="industry-selection-1">Year of passing</label>
                                <select id="industry-selection-1" name="passing" required />
                                    <option>Select Year of passing</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                </select>
                            </div>
                            <div class="input-signup-div industry">
                                <label for="industry-selection-1">Institute</label>
                                <select id="industry-selection-1" name="institue" required />
                                    <option>Select Institute</option>
                                    <option value="BVCOE">BVCOE</option>
                                    <option value="MAIT">MAIT</option>
                                    <option value="DTU">DTU</option>
                                    <option value="IIT">IIT</option>
                                </select>
                            </div>
                            <div class="input-signup-div industry">
                                <label for="industry-selection-1">Education type</label>
                                <select id="industry-selection-1" name="education" required />
                                    <option>Select Education type</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Part-time">Part-time</option>
                                </select>
                            </div>
                            <div class="input-signup-div ">
                                <label for="input-first-name">Skills</label>
                                <input type="text" name="Skills" placeholder="Skills" id="input-first-name" required />
                            </div>
                            <div class="input-signup-div industry">
                                <label for="industry-selection-1">Industry <span style="color:#979797;font-size:14px">(you want to work in)</span></label>
                                <select id="industry-selection-1" name="industry" required />
                                    <option>Select Education type</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Part-time">Part-time</option>
                                </select>
                            </div>
                            <div class="input-signup-div industry">
                                <label for="industry-selection-1">Experience</label>
                                <select id="industry-selection-1" name="experience" required />
                                    <option>Select Experience</option>
                                    <option value="fresher">Fresher</option>
                                    <option value="1year">1 Year</option>
                                </select>
                            </div>
                            <div class="input-signup-div">
                                <label for="file-upload">Upload resume <span>6 MB max</span></label>
                                <label for="file-upload"><span class="span-class-file-upload">(*.docx, *.rtf, *.txt, *.pdf) <i class="fa fa-upload" aria-hidden="true"></i></span></label>
                               <input type="file" name="resume" id="file-upload" placeholder="docx" style="display:none;" />
                            </div>

                        </div>
                        <button type="submit" name="next" class="submit-signup-button"><img src="../images/Next.svg"></button>
                    </form>
                </div>
                <div class="right-side-flex-container-signup">
                    <img src="../images/js.svg" alt="">
                </div>
            </div>
</div>
