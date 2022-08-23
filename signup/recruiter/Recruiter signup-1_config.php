
<?php

include 'connection1.php';
session_start();
if (isset($_POST['submit'])) {

  $_SESSION['companyname']  = $_POST['companyname'];
  $_SESSION['designation']   = $_POST['designation'];
  $_SESSION['offemail']    = $_POST['offemail'];
  $_SESSION['industry'] = $_POST['industry'];
  $_SESSION['offaddress'] = $_POST['offaddress'];
  if(isset($_POST['consultant'])){
    $consultant ='yes';
}
else{ $consultant ='no';}
 


  $query ="select * from recruiter where email = '".$_SESSION['email']."'";
      $run = mysqli_query($conn,$query);
      $row = mysqli_num_rows($run);

      if ($row>0) {
            echo "Email id already exist!  please try with another email id";
      }elseif ($_SESSION['password'] !== $_SESSION['password1']) {
          echo "Your password does not match ! please try  again";
      }
      else{
          $ReferralLinkStr = referral_Link();
          $sql='insert into recruiter(firstname,lastname,email,number,password,confirmpassword,address,company_name,designation,industry,off_email,off_address,consultant,referralStr)values("'.$_SESSION['firstname'].'",
          "'.$_SESSION['lastname'].'",
          "'.$_SESSION['email'].'",
          "'.$_SESSION['number'].'",
          "'.$_SESSION['password'].'",
          "'.$_SESSION['password1'].'",
          "'.$_SESSION['address'].'",
          "'.$_SESSION['companyname'].'",
          "'.$_SESSION['designation'].'",
          "'.$_SESSION['industry'].'",
          "'.$_SESSION['offemail'].'",
          "'.$_SESSION['offaddress'].'","'.$consultant.'","'.$ReferralLinkStr.'")';

           $run = mysqli_query($conn,$sql);

           if ($run) {
               
                 echo " <script>window.open('../../recruiter/dashboard.php','_self')</script>";
           }

      }


}

function referral_Link()
{
    $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz'; 
    $referralStr= '';
    $referralStr .=$_SESSION['firstname'];
    $referralStr .='@Analysed%';
    $referralStr .= substr(str_shuffle($str_result), 0, 45); 
    return $referralStr;
}

?>
