<?php

   include 'connection1.php';   //database connection page included
    session_start();     //session has been started



?>
<?php
$Id=$_GET['Id'];
$sql6="DELETE from contact_files where Id=$Id";
$res6=mysqli_query($conn,$sql6);
 echo "<script> location.href='contact_specific-4.php'; </script>";

 ?>
