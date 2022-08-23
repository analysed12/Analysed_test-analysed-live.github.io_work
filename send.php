
<?php


    session_start();      //session has been started
   include 'connection1.php';     //database connection page included


$msg = $_POST['msg'];
$name ="Erick";

$sql = "insert into chat(msg,name)values('$msg','$name')";
$res= $conn->query($sql);

header("location : myMessages.php");

?>
