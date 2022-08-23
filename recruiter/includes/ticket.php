<?php
   session_start();
$recruiter_id=$_SESSION['recruiter_id'];
   $name = $_POST["name"];
    $email = $_POST["email"];
     $subject = $_POST["subject"];
      $message = $_POST["message"];
       $priority = $_POST["priority"];
        $tickettype = $_POST["tickettype"];

    if(isset($_POST['submit'])){
     

        $conn = mysqli_connect('localhost','root','','analysed');

        $sql = mysqli_query($conn,"INSERT INTO `tickets`(`recruiter_id`, `name`, `email`, `subject`, `message`, `priority`, `tickettype`) VALUES 
         ('$recruiter_id', '$name','$email','$subject','$message','$priority','$tickettype')");

        if($sql){
            unset($_POST['submit']);

            echo 'Data has been saved successfully!';

            echo '<a href="../complaint_tickets.php">Go back!</a>';


        }else{
            echo mysqli_error($conn);
        }
    }
   
?>
