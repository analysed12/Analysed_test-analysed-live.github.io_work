<?php include('connection1.php');
$id=$_GET['id'];
$query="DELETE FROM files WHERE file_id='$id'";
$result=mysqli_query($conn,$query);
if($result){
	header("Location: ../my_files.php");
}
else{
	echo "<script>alert('Sorry,process failed')</script>";
}
?>