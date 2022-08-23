<?php include('connection1.php');
session_start();
// echo $_SESSION['gmail'] ;
//     echo $_SESSION['password'] ;     
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/Exception.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/PHPMailer.php');
if (isset($_POST['sendMailBtn'])) {
    
    $fromEmail = $_POST['fromEmail'];
    $toEmail = $_POST['toEmail'];
    $subjectName = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    $to = $toEmail;
    $subject = $subjectName;
    // $headers = "MIME-Version: 1.0" . "\r\n";
    // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
   //  $message = '<!doctype html>
			// <html lang="en">
			// <head>
			// 	<meta charset="UTF-8">
			// 	<meta name="viewport"
			// 		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
			// 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
			// 	<title>Document</title>
			// </head>
			// <body>
			// <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
			// 	<div class="container">
   //               '.$message.'<br/>
   //                  Regards<br/>
   //                '.$fromEmail.'
			// 	</div>
			// </body>
			// </html>';
    $message = $message;
    $result = @mail($to, $subject, $message, $headers);
    $query=mysqli_query($conn,"insert into send_mail(fromEmail,toEmail,subjectName, message, file) values('$fromEmail','$toEmail','$subjectName','$message','$compfile')");
    
    try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = ' smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;   
                             //Enable SMTP authentication
    $mail->Username   = $_SESSION['gmail'];                     //SMTP username
    $mail->Password   = $_SESSION['password'];               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($_SESSION['gmail']);
    $mail->addAddress($toEmail);     //Add a recipient

    //Attachments
    // $mail->addAttachment($file);         //Add attachments
     //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subjectName;
    $mail->Body    = "Name: ". $_SESSION['gmail'] ." <br> Email: $toEmail <br> Message: $message"; 


    $mail->send();
    echo "<script>alert('Message has been sent')</script>";
     echo '<script>window.location.href="mails.php";</script>';
    }
     catch (Exception $e) {
    echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
    }

}

 ?>
