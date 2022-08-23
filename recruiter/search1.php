<?php

   include 'connection1.php';     //database connection page included
   // session_start();        //session has been started


?>

<?php include('./recruiter_header.php') ?>
<link rel="stylesheet" type="text/css" href="./css/search1.css">
<link rel="stylesheet" href="css/candidate_list.css">
<link rel="stylesheet" href="./css/contact_list.css">
<link rel="stylesheet" href="css/job_listings.css">
<link rel="stylesheet" href="css/client_list.css">

<div class="container">
          <div class="categories">
            <div class="cat1" id="all"><p>All</p></div>
            <div class="cat1" id="jobs_item"><p>Jobs</p></div>
            <div class="cat1" id="clients_item"><p>Clients</p></div>
            <div class="cat1" id="contacts_item"><p>Contacts</p></div>
            <div class="cat1" id="candidates_item"><p>Candidates</p></div>
          </div>

          <div id="details">
            <div id="only_jobs">
          <h1 >Jobs</h1>
          <div class="col-md-12" >
            <div class="card mt-4">
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <!-- <th>Job ID</th>
                      <th>Position</th>
                      <th>Job Type</th> -->
                     <!--  <th>Client Company</th>
                      <th>Business Manager</th>
                      <th>Status</th>
                      <th>Recruiter's Name</th>
                      <th>State</th> -->
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

          <div id="only_clients">
          <h1>Clients</h1>
          <div class="col-md-12" >
            <div class="card mt-4">
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <!-- <tr>
                      <th>ID</th>
                      <th>companyName</th>
                      <th>status</th>
                    </tr> -->
                  </thead>
                  <tbody>
                    <?php 
                    include 'connection1.php'; 
                    if(isset($_GET['searchForJobs'])){
                      $filtervalues =$_GET['searchForJobs'];
                      $query= "SELECT * FROM client WHERE CONCAT(company_img,client_id,company_name,main_email,role,role_detail,contact_no,state) LIKE '%$filtervalues%'";
                      $query_run= mysqli_query($conn,$query);

                      if(mysqli_num_rows($query_run))
                      {
                        foreach ($query_run as $items) {
                          ?>
                          <a style="text-decoration:none" href="client_individual.php?c_id=<?=$items['client_id']; ?>">
                         <div class="singletask_myTasks">
                           <input type="checkbox" name="checkBoxItem" style="border: 1px solid #3598db;" >

               <img src="../img/<?=$items['company_img']; ?>" width="65" height="65">
                <span >
                    <p id="k1"><?=$items['client_id'] ; ?></p>
                    <p id="k2"><?=$items['company_name'];?></p>
                </span>
                &emsp;&emsp;&emsp;&emsp;&emsp;
                <span >
                    <p class="sub_1"><?=$items['role'];?></p>
                    <p id="k2"><?=$items['role_detail'];?></p>
                </span>&emsp;
                <span >
                    <p class="sub_1"><?=$items['contact_no'];?></p>
                    <p class="sub_1" style="line-height: 0.5;"><?=$items['main_email'];?></p>
                </span>&emsp;&emsp;
                <span style="color:#979797">
                    <img src="img/location-pin.png" width="15" height="16"><?=$items['state'];?>
                </span>&emsp;&emsp;
                <span>
                    <div class="button-div_myTasks">
                        <p style="color:#3598DB">&nbsp;Edit <i class="fa fa-edit" aria-hidden="true"></i>
                        <span style="font-size:14px;color:#EC4551">&emsp;&emsp;&emsp;&emsp;&emsp;Delete <i class="fa fa-trash" aria-hidden="true"></i></span></p>
                    </div>
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

          <div id="only_contacts">
          <h1>Contacts</h1>
          <div class="col-md-12" >
            <div class="card mt-4">
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <!-- <tr>
                      <th>ID</th>
                      <th>company</th>
                      <th>FirstName</th>
                    </tr> -->
                  </thead>
                  <tbody>
                    <?php 
                    include 'connection1.php'; 
                    if(isset($_GET['searchForJobs'])){
                      $filtervalues =$_GET['searchForJobs'];
                      $query= "SELECT * FROM contacts WHERE CONCAT(company_name,fname,job_title,company,phone,email,city,added_on,picture) LIKE '%$filtervalues%'";
                      $query_run= mysqli_query($conn,$query);

                      if(mysqli_num_rows($query_run))
                      {
                        foreach ($query_run as $items) {
                          ?>
                <a style="text-decoration:none" href="contact_specific-1.php?c_id=<?=$items['contact_id']; ?>">
               <div class="singletask_myTasks">
                <input type="checkbox" name="checkBoxItem" style="border: 1px solid #3598db;" >
                <img src="../img/<?=$items['picture'];?>" width="65" height="65">
                <span >
                    <p id="k1"><?=$items['fname'] ; ?></p>
                    <p id="k2"><?=$items['company_name'];?></p>
                </span>
                &emsp;&emsp;&emsp;&emsp;&emsp;
                <span >
                    <p class="sub_1"><?=$items['job_title'];?></p>
                    <p id="k2"><?=$items['company'];?></p>
                </span>&emsp;
                <span >
                    <p class="sub_1"><?=$items['phone'];?></p>
                    <p class="sub_1" style="line-height: 0.5;"><?=$items['email'];?></p>
                </span>&emsp;&emsp;
                <span style="color:#979797">
                    <img src="img/location-pin.png" width="15" height="16"><?=$items['city'];?>
                </span>&emsp;&emsp;
                <span>
                    <p id="k2">Added on
                    <span style="color:#333333"><?=$items['added_on'];?></span></o>
                    <div class="button-div_myTasks">
                        <p style="color:#3598DB">&nbsp;Edit <i class="fa fa-edit" aria-hidden="true"></i>
                        <span style="font-size:14px;color:#EC4551">&emsp;&emsp;&emsp;&emsp;&emsp;Delete <i class="fa fa-trash" aria-hidden="true"></i></span></p>
                    </div>
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
        </span>
      </div>



          <div id="only_candidates">
          <h1>Candidates</h1>
          <div class="col-md-12" >
            <div class="card mt-4">
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <!-- <tr>
                      <th>ID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                    </tr> -->
                  </thead>
                  <tbody>
                    <?php 
                    include 'connection1.php'; 
                    if(isset($_GET['searchForJobs'])){
                      $filtervalues =$_GET['searchForJobs'];
                      $query= "SELECT * FROM candidates WHERE CONCAT(firstname,lastname,last_updated,candidate_id,image,company_name,current_title,status,skills) LIKE '%$filtervalues%'";
                      $query_run= mysqli_query($conn,$query);

                      if(mysqli_num_rows($query_run))
                      {
                        foreach ($query_run as $items) {
                          ?>
             <a style="text-decoration:none" href="Candidates_specific.php?c_id=<?=$items['candidate_id']; ?>">    
            <div class="singletask_myTasks">
                <img src="../img/<?php echo $row['picture'];?>" width="65" height="65">
                <span >
                    <p id="k1"><?=$items['firstname'] ; ?></p>
                    <p id="k2"><?= $items['lastname'];?></p>

                </span>
                &emsp;&emsp;&emsp;&emsp;&emsp;
                <span >
                  <p class="sub_1"><?= $items['candidate_id'];?></p>
                    <p class="sub_1"><?= $items['company_name'];?></p>
                    <p id="k2"><?= $items['skills'];?></p>
                </span>&emsp;
                <span >
                    <p class="sub_1"><?= $items['current_title'];?></p>
                    <p class="sub_1" style="line-height: 0.5;"><?= $items['status'];?></p>
                </span>&emsp;&emsp;
                <span style="color:#979797">
                    <span style="color:#333333"><?= $items['last_updated'];?></span>
                </span>&emsp;&emsp;
                <span>
                    <!-- <p id="k2">Added on -->
                    </p>
                

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
        </span>
      </div>

      </div>
  </div>

  <script type="text/javascript">
    const jobs_item = document.querySelector('#jobs_item');
const candidates_item = document.querySelector('#candidates_item')
const clients_item = document.querySelector('#clients_item')
const contacts_item = document.querySelector('#contacts_item')
const all = document.querySelector('#all')

jobs_item.addEventListener('click',() =>{
  document.querySelector('#only_jobs').style.display='block'
    document.querySelector('#only_clients').style.display='none'
    document.querySelector('#only_candidates').style.display='none'
    document.querySelector('#only_contacts').style.display='none'
    jobs_item.classList.add('active');
    candidates_item.classList.remove('active');
    clients_item.classList.remove('active');
    contacts_item.classList.remove('active');
    all.classList.remove('active');
})

candidates_item.addEventListener('click',() =>{
  document.querySelector('#only_jobs').style.display='none'
    document.querySelector('#only_clients').style.display='none'
    document.querySelector('#only_candidates').style.display='block'
    document.querySelector('#only_contacts').style.display='none'
    jobs_item.classList.remove('active');
    candidates_item.classList.add('active');
    clients_item.classList.remove('active');
    contacts_item.classList.remove('active');
    all.classList.remove('active');
})

clients_item.addEventListener('click',() =>{
  document.querySelector('#only_jobs').style.display='none'
    document.querySelector('#only_clients').style.display='block'
    document.querySelector('#only_candidates').style.display='none'
    document.querySelector('#only_contacts').style.display='none'
    jobs_item.classList.remove('active');
    candidates_item.classList.remove('active');
    clients_item.classList.add('active');
    contacts_item.classList.remove('active');
    all.classList.remove('active');
})

contacts_item.addEventListener('click',() =>{
  document.querySelector('#only_jobs').style.display='none'
    document.querySelector('#only_clients').style.display='none'
    document.querySelector('#only_candidates').style.display='none'
    document.querySelector('#only_contacts').style.display='block'
    jobs_item.classList.recruiters_name('active');
    candidates_item.classList.remove('active');
    clients_item.classList.remove('active');
    contacts_item.classList.add('active');
    all.classList.remove('active');
})

all.addEventListener('click',() =>{
  document.querySelector('#only_jobs').style.display='block'
    document.querySelector('#only_clients').style.display='block'
    document.querySelector('#only_candidates').style.display='block'
    document.querySelector('#only_contacts').style.display='block'
    jobs_item.classList.add('active');
    candidates_item.classList.remove('active');
    clients_item.classList.remove('active');
    contacts_item.classList.remove('active');
    all.classList.add('active');
})
  </script>