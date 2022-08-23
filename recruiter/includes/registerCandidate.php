<?php
    
    session_start();
  
    if(isset($_SESSION['info'])){
        extract($_SESSION['info']);

        $conn = mysqli_connect('localhost','root','','virtual_analysed');

        $sql = mysqli_query($conn,"INSERT INTO Candidate (firstName,lastName,email,phoneNumber,birthDate,status,address,country,cityName,zipcode,state,currentTitle,companyName,candidateType,employement,source,recruiter,salary,salaryRange1,salaryRange2,talents,skills,qualification,comments,date,job,accessibility,response) VALUES ('$firstname','$lastname','$emailid','$phonenumber','$birthdate','$Industry','$address','$ownership','$cityname','$Zipcode','$State','$currentTitle','$companyName','$candidateType','$employmentPreference','$source','$recruiter','$currentSalary','$salaryRange1','$salaryRange2','$talents','$skills','$qualification','$candidateComment','$availability','$job','$accessebility','$reasonType')");

        if($sql){
            unset($_SESSION['info']);

            echo 'Data has been saved successfully!';

            echo '<a href="../addCandidates1.php">Go back!</a>';


        }else{
            echo mysqli_error($conn);
        }
    }


?>
