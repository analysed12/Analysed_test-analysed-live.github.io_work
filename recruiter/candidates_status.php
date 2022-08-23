<?php include('connection1.php'); ?>

<?php 
//session_start();
// if(isset($_SESSION['firstname']) && isset($_POST['select-box']))
// {
  // $firstname=$_SESSION['firstname'];
  // $status=$_POST['select-box'];
  // $date=date("Y-m-d");
  // $sql=mysqli_query($conn,"update candidates set status='$status',last_updated='$date' where firstname='$firstname'");
// }
?>

  <link rel="stylesheet" href="./css/candidates_status.css">
  <body>
  <?php include('candidates_status_header.php') ?>

  
  <form method="post" id="form">

    <?php
    $c_id=$_GET['c_id'];
    $sql=mysqli_query($conn,"select * from candidates where candidate_id='$c_id'");
    $check=mysqli_num_rows($sql)>0;
    if($check){
      while($row=mysqli_fetch_assoc($sql)){
        ?>
        
 <div class="options">
  <p><a style="text-decoration:none" href="Candidates_specific.php?c_id=<?php echo $row['candidate_id']; ?>"> At a glance</a></p><br>
  <span style="color:#3598DB"><!-- <a style="text-decoration:none" href="candidates_status.php?c_id=<?php //echo $row['candidate_id']; ?>"> --> <b>| Status </b> </a></span>
   <p><a style="color:#979797" href="candidates_activity.php?c_id=<?php echo $row['candidate_id']; ?>">Activity</a></p>
    <p class="p1"><a style="color:#979797" href="candidates_files.php?c_id=<?php echo $row['candidate_id']; ?>">Files</a></p>
     <p class="p1"><a style="color:#979797" href="candidates_notes.php?c_id=<?php echo $row['candidate_id']; ?>">Notes</a></p>
     </div>
     <!-- Start of Status box -->
     <div class="box">  
       <div class="box-1">
        Status&emsp;&emsp;
        <p> <span style="color:#979797;">Last Updated</span>
       <?php
         $date=$row['last_updated']; 
         $lastupdated=date("d-m-Y",strtotime($date));
         ?>

           <?php echo $lastupdated; ?>
    </p>

         <select class="sortbySelect" name="select-box" id="select-box" style="color:#3598DB;" onchange="document.getElementById('form').submit();">
         <option value="">Select status</option>
        <option value="Active">Active</option>
        <option value="Inactive">In active</option>
        </select>
        </div>
</div>
</form>
<div class="box-2">
<div class="box-2-1">
Current Employer</div>



<div class="box-2-1-1">
<p>Company Name<br>
<span style="color:black"><?php echo $row["company_name"]; ?></span></p>
</div>
<div class="box-2-1-2">
<p>Current Salary<br>
<span style="color:black"><?php echo $row["current_salary"]; ?></span></p>
</div>
<div class="box-2-1-3">
<p>Expected Salary<br>
<span style="color:black"><?php echo $row["salary_range1"]; ?></span></p>
</div>
<div class="box-2-1-4">
<p>Notice<br>
<span style="color:black">$5000</span></p>
</div>
</div>

<div class="box-3">
<div class="box-3-1">
Rates</div>
<div class="box-3-1-1">
<p>Daily Rate(Low)<br>
<span style="color:black">$500</span></p>
</div>
<div class="box-3-1-2">
<p>Daily Rate(High)<br>
<span style="color:black">$500</span></p>
</div></div>
<div class="engagement"><a href="#">USER ENGAGEMENT?</a></div>
<?php } } ?>