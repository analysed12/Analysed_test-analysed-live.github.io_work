
<?php include('connection1.php');
$id=$_GET['id'];
$query="DELETE FROM notes WHERE id='$id'";
$result=mysqli_query($conn,$query);
if($result){
	header("Location: ../candidates_notes.php");
}
else{
	echo "<script>alert('Sorry,process failed')</script>";
}
?>