<?php

   include 'connection1.php';     //database connection page included
   // session_start();        //session has been started


?>

<?php include ('include/header.php') ?>
<link rel="stylesheet" type="text/css" href="./css/search1.css">
<link rel="stylesheet" href="./css/candidate_list.css">
<link rel="stylesheet" href="./css/contact_list.css">
<link rel="stylesheet" href="./css/job_listings.css">
<link rel="stylesheet" href="./css/client_list.css">
<link rel="stylesheet" href="./css/search1.css">

<div class="container">
          <!-- <div class="categories">
            <div class="cat1"><p>All</p></div>
            <div class="cat1"><p>Jobs</p></div>
            <div class="cat1"><p>Clients</p></div>
            <div class="cat1"><p>Contacts</p></div>
            <div class="cat1"><p>Candidates</p></div>
          </div> -->

          <div id="details">
            <div id="only_jobs">
          <h1 >Jobs</h1>
          <div class="col-md-12" >
            <div class="card mt-4">
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    include 'connection1.php';
                    if(isset($_GET['searchForJobs'])){
                      $filtervalues =$_GET['searchForJobs'];
                      $query= "SELECT * FROM joblistings WHERE CONCAT(job_id,position,job_type,client_company,recruiters_name,status,state,start_date,openings,contact_client_company,job_views,company_email) LIKE '%$filtervalues%'";
                      $query_run= mysqli_query($conn,$query);

                      if(mysqli_num_rows($query_run))
                      {
                        foreach ($query_run as $items) {
                          ?>
                          <a style="text-decoration:none" href="job_listings_individual.php?j_id=<?=$items['job_id']; ?>">

            <div class="singletask_myTasks">
                <!-- <input type="checkbox" name="checkBoxItem" style="border: 1px solid #3598db;" > -->
                <img src="../img/<?=$items['picture'];?>" width="65" height="65">
                <span>
                    <p class="light_spanItem_singleTask_myTasks">Added on</p>
                    <p class="date_s"><?=$items['start_date']; ?></p>
                </span>
                <span>
                    <p class="ac_assis"><?=$items['position']; ?></p>
                    <p class="id_num">#<?=$items['job_id']; ?></p>
                    <p class="loc_pin"><i class="fa fa-map-marker"></i> <?=$items['state']; ?></p>
                </span>
                <span>
                    <p style="color:#333333;font-size:14px;line-height:1px "><?=$items['job_type']; ?></p>
                    <p style="color:#979797;font-size:14px "><?=$items['openings']; ?> openings</p>
                </span>

                <span>
                    <p style="color:#979797;line-height:1px ">Company contact</p>
                    <p style="color:#3598DB;line-height:1px "><b><?=$items['contact_client_company']; ?></b></p>
                    <p style="color:#333333"><?=$items['client_company']; ?></p>
                </span>
                <span>
                    <img src="img/eye-icon.jpg" width="25" height="15"><br>
                    <p style="color:#333333; "><b>&nbsp;<?=$items['job_views']; ?></b></p>
                </span>
                <span>
                    <img src="img/task-icon.png" width="20" height="20"><br>
                    <p style="color:#333333; "><b>&nbsp;6</b></p>
                </span>
                <span>
                    <img src="img/person-icon.png" width="25" height="20"><br>
                    <p style="color:#333333; "><b>&nbsp;1/4</b></p>
                </span>
                <span>
                    <p style="color:#979797;line-height:1px ">Recruiter</p>
                    <p style="color:#3598DB;line-height:1px "><b><?=$items['recruiters_name']; ?></b></p>
                    <p style="color:#333333"><?=$items['company_email']; ?></p>
                </span>
            </div>
                          <?php
                        }
                      }
                      else{
                        ?>
                        <tr>
                      <td colspan="3">No record found</td>
                    </tr>
                    <?php
                      }
                    }
                    ?>
                    

                  </tbody>
                </table>
              </div>
            </div>
          </div>

         </div>
      </div>
  </div>