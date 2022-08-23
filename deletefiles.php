<?php include('connection.php') ?>

<?php
$Id=$_GET['Id'];
$sql6="DELETE from js_files where Id=$Id";
$res6=mysqli_query($conn,$sql6);
 echo "<script> location.href='js_files.php'; </script>";

 ?>
