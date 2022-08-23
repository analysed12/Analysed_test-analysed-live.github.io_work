<?php 
session_start();
if($_SESSION['email']==null)
{
    header("Location:index.php");
}
?>
<link rel="stylesheet" href="./css/referrals.css"> <!--linking to the css file-->
<?php include('header.php');
include('connection1.php');
?> <!--including the header file-->

<title>Referrals</title>  <!--title of the page-->

<div class="title">
    <p>Refer to your peers so that they</p>
    <p>can also use our awesome platform!</p>
    <img src="./img/referral.png" >
</div>

<div class="social">
    <p> Share via</p>
    <div class="media">
    <img src="./img/linkedin.png" >
    <img src="./img/twitter.png" >
    <img src="./img/gmail.png" >
    <img src="./img/facebook.png" >
    </div>
</div>
<?php
$sql="SELECT * FROM recruiter where email= '" .  $_SESSION['email'] . "'";
        $result_1 = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_array($result_1)) {
                                               
                                        
                                        	 ?>
<div class="box">
  <span class="copy" id="share"><?php echo $row['referralStr']; ?></span>
    <!--<input type="text" id="box">-->
    <button class="copy" id="copy" onclick="copyToclipboard()"> Copy Link</button>
</div>

<div class="referrals">
    <p> Your Referrals</p>
    <div class="referral">
                <div class="div1">
                    <span class="s0">
                        <p class="p1">Sent On</p>
                        <p class="p2">05-05-2021</p>
                    </span>
                    <span class="s1">
                        <span>
                            <p  class="p3">Name</p>
                            <p class="p4">Sloan Freeman</p>
                        </span>
                    </span>
                    <span class="s2">
                            <p class="p5">Email</p>
                            <p class="p6">sloanfreeman@gmail.com</p>
                    </span>
                    <span class="s3">
                            <p class="p7">Sent <br>through</p>
                            <img src="img/r1.JPG" class="img1">
                    </span>
                    <span class="s4">
                            <p class="p8">Status</p>
                            <p class="p9">Pending</p>
                    </span>
                </div>
                
        </div>

    <div class="referral1">
                <div class="div1">
                    <span>
                        <p class="p1">Sent On</p>
                        <p class="p2">05-05-2021</p>
                    </span>
                    <span class="s1">
                        <span>
                            <p  class="p3">Name</p>
                            <p class="p4">Sloan Freeman</p>
                        </span>
                    </span>
                    <span class="s2">
                            <p class="p5">Email</p>
                            <p class="p6">sloanfreeman@gmail.com</p>
                    </span>
                    <span class="s3">
                            <p class="p7">Sent <br>through</p>
                            <img src="img/r2.JPG" class="img1">
                    </span>
                    <span class="s4">
                            <p class="p8">Status</p>
                            <p class="p9">Pending</p>
                    </span>
                </div>
                
        </div>

            <div class="referral2">
                <div class="div1">
                    <span>
                        <p class="p1">Sent On</p>
                        <p class="p2">05-05-2021</p>
                    </span>
                    <span class="s1">
                        <span>
                            <p  class="p3">Name</p>
                            <p class="p4">Sloan Freeman</p>
                        </span>
                    </span>
                    <span class="s2">
                            <p class="p5">Email</p>
                            <p class="p6">sloanfreeman@gmail.com</p>
                    </span>
                    <span class="s3">
                            <p class="p7">Sent <br>through</p>
                            <img src="img/r3.JPG" class="img1">
                    </span>
                    <span class="s4">
                            <p class="p8">Status</p>
                            <p class="p9">Pending</p>
                    </span>
                </div>
                
        </div>
</div>
<?php } 

?>
<script>
function copyToclipboard()
{
    var range = document.createRange();
                    range.selectNode(document.getElementById("share"));
                    window.getSelection().removeAllRanges(); // clear current selection
                    window.getSelection().addRange(range); // to select text
                    document.execCommand("copy");
                    window.getSelection().removeAllRanges();// to deselect
                    alert('Referral link copied');

}
</script>