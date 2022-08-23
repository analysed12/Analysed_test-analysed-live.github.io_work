


<?php

   include 'connection1.php';
   session_start();

?>






<link rel="stylesheet" href="./css/jobsNearYou.css">
<?php include ('include/header.php') ?>
<title>Jobs near you</title>
    <div class="bgcolor-modal-JobsNearYou">




                    <div class="modal-jobsNearYou">

<form action="" method="post">
                        <span class="closeSettings-modal-jobsNearYou">Close</span>
                        <p class="location-settings-heading">Location settings</p>
                        <div class="container-modal-inputs-jobsNearYou">
                            <div class="grid-location-settings-modal">
                                <div class="column-1-location-settings-modal">
                                    <label for="enterLocation-modal-input">Location</label>
                                    <input type="text" name="location" placeholder="Enter Your Location" id="enterLocation-modal-input">
                                </div>
                                <div class="column-2-location-settings-modal">
                                    <label for="industry-modal-input">Industry</label>
                                    <select name="industry" id="industry-modal-input">
                                        <option value="0">Technology</option>
                                        <option value="1">Mechanical</option>
                                        <option value="2">Civil</option>
                                    </select>
                                </div>

                                <div class="column-1-location-settings-modal">
                                    <label for="jobsinRadius-modal-input">Job in radius</label>
                                    <input type="text" name="radius" placeholder="Enter job radius in kms" id="jobsinRadius-modal-input">
                                </div>
                                <div class="column-2-location-settings-modal">
                                    <label for="addSkills-modal-input">Add Skills +</label>
                                    <span id="addSkills-modal-input">PHP <i class="fa fa-times" aria-hidden="true"></i></span>
                                    <span id="addSkills-modal-input">MYSQL <i class="fa fa-times" aria-hidden="true"></i></span>
                                </div>

                                <div class="column-1-location-settings-modal">
                                    <label for="payTypeSalary-modal-input">Pay type salary</label>
                                    <input type="text" placeholder="min" id="payTypeSalary-modal-input">
                                    <input type="text" placeholder="max" id="payTypeSalary-modal-input">

                                <div class="radioButtons-jobsType-modal">
                                    <input type="radio" name="jobtype" id="partTime-jobType-modal" value="Part-time">Part-time
                                    <!-- <label for="partTime-jobType-modal">Part Time</label> -->
                                </div>
                                <div class="radioButtons-jobsType-modal">
                                    <input type="radio" name="jobtype" id="fullTime-jobType-modal" value="Full-time">Full Time
                                    <!-- <label for="fullTime-jobType-modal">Full Time</label> -->
                                </div>
                                <div class="radioButtons-jobsType-modal">
                                    <input type="radio" name="jobtype" id="intern-jobType-modal" value="Internship">Internship
                                    <!-- <label for="intern-jobType-modal">Internship</label> -->
                                </div>
                                </div>
                            </div>
                            <button class="applySetting-modal-jobsType" name="applySetting" value="">
                            Apply Setting
                        </button>
                    </div>
                    </form>
            </div>
    </div>



<div class="container">
    <div class="small_container ekam-position-relative-2">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Jobs near you</h1>
        </div>
        <div class="row-ekam-flex-JobsNearYou">
            <button class="locationsettings-button-jobsNearYou">
                Location settings <i class="fa fa-cog" aria-hidden="true"></i>
            </button>
            <div class="map-section-jobsNearYou">
                <img src="./img/map.png" alt="" class="map-image-section-jobsNearYou">
            </div>

            <div class="cards-section-jobsNearYou">

              <?php
              $flag=0;
              if(isset($_POST['applySetting']))   //condition to find set of variable of search and Filters
              {
                // code block to search according to given clauses
                $location = $_POST['location'];
                $industry = $_POST['industry'];
                $radius = $_POST['radius'];
                $jobtype = $_POST['jobtype'];
                // $search = $_POST['searchCandidatesNames'];
                // $search = preg_replace("#[^0-9a-z]#i","",$search);
                $sql="SELECT * FROM `joblistings` WHERE location= '$location' OR 	industry='$industry' OR radius= '$radius' OR job_type ='$jobtype'";
                $flag=1;
              }

              if($flag == 0)
              {
                // code block for all data to be displayed if there are no clauses
                  $sql="select * from joblistings";
              }
                 // query to establish connection from database and get the output of required query
                $res=mysqli_query($conn,$sql);
                if($res == TRUE)
                {
                   // getting no of rows from table and assigning it to a variable. If this is more than 0 then all rows will be printed
                    $count=mysqli_num_rows($res);
                    if($count > 0)
                    {

                      // displaying all the data from the table
                        while($row=mysqli_fetch_assoc($res))
                        {

                     ?>
                <div class="cardItem-section-jobsNearYou">
                    <div class="shareIcons-div-jobsNearYou">
                        <a href="#" class="link-shareButton-jobsNearYou">
                            <img src="./img/share-icon.png" alt="" class="shareButton-jobsNearYou">
                        </a>
                        <a href="#" class="link-starButton-jobsNearYou">
                            <img src="./img/star-icon.png" alt="" class="starButton-jobsNearYou">
                        </a>
                    </div>
                    <section class="cardItem-heading-info">
                        <img src="./img/<?php echo $row['logo'] ; ?>" alt="">
                        <span>
                            <h4><?php echo $row['client_company'] ; ?></h4>
                            <p><?php echo $row['location'] ; ?>,<?php echo $row['state'] ; ?></p>
                        </span>
                    </section>

                    <p class="designation-cardItem-jobsNearYou"><?php echo $row['designation'] ; ?></p>
                    <section class="duration-cardItem-jobsNearYou">
                        <span></span>
                        <p>2 Days Left</p>
                    </section>
                    <span class="skills-cardItem-jobsNearYou"><?php echo $row['skills'] ; ?></span>
                    <p class="jobs-description-cardItem-jobsNearYou">
                        <?php echo $row['advert_job_description'] ; ?>
                    </p>
                    <p class="timeTaken-cardItem-jobsNearYou"> <i class="fa fa-car" aria-hidden="true"></i> &nbsp;<?php echo $row['radius'] ; ?> mins</p>
                    <section class="row-ekam-flex-JobsNearYou fulltime-applynow-cardItem-jobsNearYou">
                        <span><?php echo $row['job_type'] ; ?></span>
                        <button class="applyNow-cardsItem-jobsNearYou">Apply Now</button>
                    </section>
                </div>
              <?php }}}?>
            </div>

        </div>

        </div>

    </div>
</div>
<script type="text/javascript">
    document.querySelector('.locationsettings-button-jobsNearYou').addEventListener('click', () =>{
        document.querySelector('.bgcolor-modal-JobsNearYou').style.display = 'block';
    })
    document.querySelector('.closeSettings-modal-jobsNearYou').addEventListener('click', () =>{
        document.querySelector('.bgcolor-modal-JobsNearYou').style.display = 'none';
    })
    document.querySelector('.applySetting-modal-jobsType').addEventListener('click', () =>{
        document.querySelector('.bgcolor-modal-JobsNearYou').style.display = 'none';
    })
</script>
