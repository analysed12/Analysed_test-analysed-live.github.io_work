<?php
	session_start();

	include 'connection1.php';

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $run_query=mysqli_query($conn,"SELECT * FROM recruiter WHERE email='$email'AND password='$password'");
    $fetch =mysqli_fetch_assoc($run_query);    
    if(mysqli_num_rows($run_query))
    {
      // $_SESSION['firstname']=$firstname;
      // $_SESSION['recruiter_id']=$recruiter_id;
      $_SESSION['email']=$email;
      $_SESSION['recruiter_id']= $fetch['recruiter_id'];
        echo "<script>window.open('./../../recruiter/dashboard.php','_self')</script>";
    }
    else
    {
      echo "<script>alert('email or password is incorrect!')</script>";
      echo "<script>window.open('Recruiter login.php','_self')</script>";
    }
}
?>
