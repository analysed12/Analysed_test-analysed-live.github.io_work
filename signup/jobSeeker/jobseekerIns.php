<?php

include 'connection1.php';
session_start();
if (isset($_POST['next'])) {

  $_SESSION['qualification']  = $_POST['qualification'];
  $_SESSION['passing']   = $_POST['passing'];
  $_SESSION['institue']    = $_POST['institue'];
  $_SESSION['education'] = $_POST['education'];
  $_SESSION['Skills'] = $_POST['Skills'];
  $_SESSION['industry'] = $_POST['industry'];
  $_SESSION['experience'] = $_POST['experience'];

  $td="../img/";
  $tf=$td.basename($_FILES["resume"]["name"]);

 $_SESSION['resume']  = basename($_FILES["resume"]["name"]);

  $move= move_uploaded_file($_FILES["resume"]["tmp_name"] , $tf);

  if (!($move)) {

      echo "something wrong";
  }





  $query ="select * from jobseeker where js_email = '".$_SESSION['Emailaddress']."'";
      $run = mysqli_query($conn,$query);
      $row = mysqli_num_rows($run);

      if ($row>0) {
            echo "Email id already exist!  please try with another email id";
      }elseif ($_SESSION['Password'] !== $_SESSION['ConfirmPassword']) {
          echo "Your password does not match ! please try  again";
      }
      else{
          $sql='insert into jobseeker(firstname,lastname,js_email,number,Password,Confirmpassword,address,qualification,yearofpassing,institute,education,skills,job_type,experience,resume,added_on)values("'.$_SESSION['Firstname'].'",
          "'.$_SESSION['Lastname'].'",
          "'.$_SESSION['Emailaddress'].'",
          "'.$_SESSION['Phonenumber'].'",
          "'.$_SESSION['Password'].'",
          "'.$_SESSION['ConfirmPassword'].'",
          "'.$_SESSION['Address'].'",
          "'.$_SESSION['qualification'].'",
          "'.$_SESSION['passing'].'",
          "'.$_SESSION['institue'].'",
          "'.$_SESSION['education'].'",
          "'.$_SESSION['Skills'].'",
          "'.$_SESSION['industry'].'",
          "'.$_SESSION['experience'].'","'.$_SESSION['resume'].'",NOW())';

          $run = mysqli_query($conn,$sql);

          if ($run) {
                 echo " <script>window.open('index.php','_self')</script>";
          }

      }


}

?>
