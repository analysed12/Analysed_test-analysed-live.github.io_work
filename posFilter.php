
<?php

   include 'connection1.php';
   session_start();
?>



<?php
include('config.php');

$sk = $_POST['skey'];  //php, java, marketing executive or 10k,20k...


$sqlall = "SELECT * FROM joblistings";


$sqlPos = "SELECT * FROM joblistings WHERE position LIKE '$sk%'";

$sqlPac = "SELECT * FROM joblistings WHERE package LIKE '$sk%'";

$sqlCom = "SELECT * FROM joblistings WHERE company LIKE '$sk%'";

$sqlLoc = "SELECT * FROM joblistings WHERE country LIKE '$sk%'";


$resultPos = mysqli_query($conn,$sqlPos);
$resultPac = mysqli_query($conn,$sqlPac);
$resultCom = mysqli_query($conn,$sqlCom);
$resultLoc = mysqli_query($conn,$sqlLoc);

$resultall = mysqli_query($conn,$sqlall);



if($count = mysqli_num_rows($resultPos)){
    $retrieve = $resultPos;
    $finalcount = $count;
}
elseif($count1 = mysqli_num_rows($resultPac)){
    $retrieve = $resultPac;
    $finalcount = $count;
}
elseif($count2 = mysqli_num_rows($resultCom)){
    $retrieve = $resultCom;
    $finalcount = $count;
}
elseif($count3 = mysqli_num_rows($resultLoc)){
    $retrieve = $resultLoc;
    $finalcount = $count;
}
else{
    $retrieve = $resultall;
    $finalcount = $count;
}

$posarr = array();

while($row = mysqli_fetch_assoc($retrieve)){
    $temp = array();
    $temp['id'] = $row['job_id'];
    $temp['package_type'] = $row['package_type'];
    $temp['package'] = $row['package'];
    $temp['position'] = $row['position'];
    $temp['skills_req'] = $row['skills'];

    $temp['created_on'] = $row['added_on'];
    $temp['created_on'] = date('Y-m-d', strtotime($temp['created_on']));

    $temp['job_description'] = $row['advert_job_description'];
    $temp['job_description'] = substr($temp['job_description'], 0, 100);

    $temp['logo'] = $row['logo'];
    $temp['company_name'] = $row['company'];
    $temp['count'] = $finalcount;


    array_push($posarr,$temp);

}

echo json_encode($posarr);
?>
