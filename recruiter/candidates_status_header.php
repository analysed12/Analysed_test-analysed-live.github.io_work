<?php include 'connection1.php'; ?>

<?php
// if(isset($_SESSION['firstname'])) {

    // $firstname=$_SESSION['firstname'];
    $c_id=$_GET['c_id'];
    $sql=mysqli_query($conn,"select * from candidates where candidate_id='$c_id'");
    $check=mysqli_num_rows($sql)>0;

    if($check){
        while($row=mysqli_fetch_assoc($sql)){
            ?>
<title>Dashboard</title>

       <link rel="stylesheet" href="./css/candidates_status_header.css">
<body>
   <?php include('header.php') ?>

<div class="container">
<div class="small_container">
        <div class="bread-crumbs_Mytools-recruiter">
            <a href=" dashboard.php" class="active-breadcrumb-link">Dashboard</a> >  <a href=" candidate_list.php" class="active-breadcrumb-link">My Database</a> >  <a href="" class="active-breadcrumb-link"><u>John Smith</u></a>
        </div>
 <div class="profile-img">
   <img src="../img/<?php echo $row["image"]; ?>" width="130" height="130" style="margin: 25px" alt="">
  <h1><?php echo $row["firstname"]; ?><p1 style="font-family:verdana"><?php echo $row["candidate_id"]; ?></p1></h1><br>
  <h2><span style="color:#3598DB"><?php echo $row["current_title"]; ?>-</span><?php echo $row["company_name"]; ?></h2><br>
  <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
</svg> <?php echo $row["city_name"]; ?></h4>
</div>
<div class="button">
<button><a href="edit-Candidates1.php" style="text-decoration: none;color:#3598DB;">Edit candidate</a></button><br><br><br><br>
<button ><a href="img/<?php echo $row["resume"]; ?>" target="_blank" style="text-decoration: none;color:#3598DB;">View Resume</a></button>
  </div>
          <div class="status">
       
     <div class="status1"><b><?php echo $row["candidate_id"]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</b>
     <span style="color:#979797">05-05-2021</span>
     </div>
     <br>
     <div class="status-name">
     <span><?php echo $row["firstname"]; ?></span>
     <p style="color:#3598DB"><?php echo $row["current_title"]; ?>
     <span style="color:black; font-size:15px">|<?php echo $row["qualifications"]; ?></span></p>
     <u style="color:#979797">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u>
     <br><br>
     <span style="color:#979797; font-size:15px; font-family:CeraM; margin-left:-15px;">
     Status&emsp;&emsp;&emsp;&emsp;&emsp;Availability date</span>
     <br>
     </div>
    <div class="displayname">
    <span style="color:red"><?php echo $row["status"]; ?></span>&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $row["availability_date"]; ?>
    </div>
    <br>
    <br>
    <div class="employeement">
    Employeement<br><br>
    <p><?php echo $row["candidate_type"]; ?></p>
    <br><br><br>
    Currently Employed At<br><br>
    <p><?php echo $row["company_name"]; ?></p>
    <br>
    <br><br>
    Contact
    <br>
    <br>
    <p style="margin-left:-0"><?php echo $row["candidate_email"]; ?></p>
    <span style="color:black"><?php echo $row["countrycode"]; ?> <?php echo $row["phone_no"]; ?></span><br>
    <span style="color:black"><?php echo $row["countrycode"]; ?> <?php echo $row["phone_no"]; ?></span><br>
    <br><br>
     Address<br><br>
    <span style="color:black"><?php echo $row["address"]; ?><br>
    <?php echo $row["city_name"]; ?><br>
    <?php echo $row["state"]; ?>, <?php echo $row["country"]; ?></span><br>
    <br><br>
    Owner<br><br>
    <span style="color:#3598DB">Curtis Kulley</span>
    <span style="color:black">abc@gmail.com</span><br>
    <span style="color:black">+91 9876543210</span><br>
<br><br>
 Assigned to<br><br>
    <span style="color:#3598DB">Williams</span>
    <span style="color:black">abc@gmail.com</span><br>
    <span style="color:black">+91 9876543210</span><br>
</div>  </div>

<?php } }  ?>