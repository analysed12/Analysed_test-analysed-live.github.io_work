<?php
    
    session_start();
   
    if(isset($_SESSION['info'])){
        extract($_SESSION['info']);

        $conn = mysqli_connect('localhost','root','','analysed');

        $sql = mysqli_query($conn,"INSERT INTO jobseeker (firstname,lastname,js_email,number,password,confirmpassword,address,qualification,yearofpassing,institute,education,skills,industry,experience) VALUES ('$Firstname','$Lastname','$Emailaddress','$Phonenumber','$Password','$ConfirmPassword','$Address','$qualification','$passing','$institue','$education','$Skills','$industry','$experience')");

        if($sql){
            //unset($_SESSION['info']);

            echo 'Data has been saved successfully!';
			 echo "<script>window.open('./../../../js_dashboard.php','_self')</script>";


        }else{
            echo mysqli_error($conn);
        }
    }


?>
