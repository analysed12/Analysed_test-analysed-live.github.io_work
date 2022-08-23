<?php include('connection1.php');
$id=$_GET['id'];
$query="DELETE FROM  client_notes WHERE note_id='$id'";
$result=mysqli_query($conn,$query);
if($result){
	header("Location: ../client_notes.php");
}
else{
	echo "<script>alert('Sorry,process failed')</script>";
}
?>