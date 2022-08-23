<?php include('connection1.php');
$id=$_GET['id'];
$query="DELETE FROM  send_mail where mail_id ='$id'";
$result=mysqli_query($conn,$query);
if($result){
	header("Location: ../mails.php");
}
else{
	echo "<script>alert('Sorry,process failed')</script>";
}
?>