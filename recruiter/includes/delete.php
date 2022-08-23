
<?php include('connection1.php');
$id=$_GET['id'];
$query="DELETE FROM  contacts WHERE contact_id='$id'";
$result=mysqli_query($conn,$query);
if($result){
	header("Location: ../client_contacts.php");
}
else{
	echo "<script>alert('Sorry,process failed')</script>";
}
?>