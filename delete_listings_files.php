<?php
   define('LOCALHOST','localhost');
   define('DB_USERNAME','root');
   define('DB_PASSWORD','');
   define('DB_NAME','analyse');
   $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die(mysqli_error());
?>
<?php
$Id=$_GET['Id'];
$sql6="DELETE from job_files where Id=$Id";
$res6=mysqli_query($conn,$sql6);
 echo "<script> location.href='job_listings_files.php?j_id=J101'; </script>";

 ?>
