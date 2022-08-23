

<!--php code beign-->
<?php
session_start();
$con=mysqli_connect('localhost','root','','analysed'); //connecting to the database
if($con){
    //echo "done";
}
else{
    echo "failed".mysqli_connect_error();
}

//condition for login
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$js_email=$_POST['js_email'];
$password=$_POST['js_password'];

//query for login
$sql = "SELECT * FROM jobseeker where js_email=? and Password=?";
            
            $stmt = $con->stmt_init();
            $stmt->prepare($sql);
            $stmt->bind_param("ss", $js_email,$password);
            $stmt->execute();
            $result = $stmt->get_result();
           $resultArray = $result->fetch_assoc();
            if($resultArray)
            {   
                $_SESSION['js_email']=$js_email;
                $_SESSION['jobSeekerID'] = $resultArray['jobseeker_id'];                                                       
                header("Location:./../../js_dashboard.php");                
            }
            else
            {
                echo "<script>alert('Invalid Login credentials.')</script>";
            }
            
}
?>

<!--end of php-->
