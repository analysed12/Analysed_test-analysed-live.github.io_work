
<?php 
session_start();
include('header.php');
$flag=0;
?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/mails.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- <style type="text/css">
  .section3{
    display: none;
  } 
</style>
 -->
</head>
<body>

<div class="container">
    <div class="bread-crumbs_Mytools-recruiter">
        <a href="./dashboard.php">Dashboard</a> > <a href="mails.php">My Mails</a> 
    </div>
    <br><br>
    <hr>
   <div class="section1">
   	<button class="new_mail"><a href="mail_login.php" class="nm">New Mail <i class="fa fa-envelope"></i></a></button>
   	<div class="elements">
   		<ul>
   			<a href=""><li class="sec">Inbox</li> </a><div class="inbox"><p>16</p></div>
   			<a href=""><li class="sec1">Starred</li></a><div class="starred"><p>5</p></div>
   			<a href=""><li class="sec2">Drafts</li></a>
   			<a href=""><li class="sec3">Trash</li></a>
   			<a href=""><li class="sec4">Spam</li></a>
   		</ul>
   	</div>
    <!-- <div class="elements1">
    <select name="inbox" id="dropdown">
    <option value="inbox">Inbox</option>
    <option value="starred">Starred</option>
    <option value="drafts">Drafts</option>
    <option value="trash">Trash</option>
    <option value="spam">Spam</option>
    </select>
    </div> -->
   	<br><br>
   	<div class="label">
   		<div class="cir1"><img src="img/cir1.JPG"><p>Label 1</p></div> 
   		<div class="cir2"><img src="img/cir2.JPG"><p>Label 2</p></div> 
   		<div class="cir3"><img src="img/cir3.JPG"><p>Label 3</p></div> 
   		<div class="cir4"><img src="img/cir4.JPG"><p>Label 4</p></div> 
   	</div>
   	<div class="add_ac"><button class="but1">Add account +</button></div>

   </div> 

   <!-- <div class="section2"> -->
   	<!-- <div class="mail" id="result1"  > -->
   	<!-- <?php // include 'connection1.php';
       /* $email= $_SESSION['email'];*/
   ?> -->
   <div class="mail" id="result1" onclick="myFunction()" >
   <?php include 'connection1.php';
   $email= $_SESSION['email'];
   // $sql=mysqli_query($conn,"select * from recruiter where email= $email;");
   //  $check=mysqli_num_rows($sql)>0;
   //  if($check){
   //      while($row=mysqli_fetch_assoc($sql)){
   //          $email=$row['email'];

?>
<?php
   $sql=mysqli_query($conn,"select * from send_mail");
    $check=mysqli_num_rows($sql)>0;
    if($check){
        while($row=mysqli_fetch_assoc($sql)){

?>
        <?php
        $sql=mysqli_query($conn,"select * from send_mail where toEmail ='$email'");
        $check=mysqli_num_rows($sql)>0;
        if($check){
          while($row=mysqli_fetch_assoc($sql)){
            ?>
             <a class="mail_ahref" style="text-decoration:none" href="mails.php?id=<?php echo $row['mail_id'] ?>">
                <div class="row" id="<?php echo $row["mail_id"]; ?>" onclick="openEmail(this)">
                    <div class="column">
                        <p class="col-2"><?php echo $row["toEmail"]; ?> <!-- <span><?php //echo $row["phone"]; ?></span> --></p>
                        <span class="col-span-2"><?php echo $row["subjectName"]; ?></span>
                    </div>
                    <div class="column" style="margin-left: 0px;margin-right: 20px;">
                        <p class="col-3"><span class="msg"><?php echo $row["message"]; ?></span></p>
                        <!-- <span class="col-span-3"><a href='./includes/delete.php?id=<?php// echo $row["contact_id"] ?>' onclick='checkdelete()' style="color:red;text-decoration:none"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></span> -->
                    </div>
                </div>
              </a>
        <?php }}?>
        </div>


    <!-- <?php

 /* $data = require_once 'rec_config.php';

  $mail_handle =  imap_open("{imap.gmail.com:993/ssl}", $data['mail']['username'],  $data['mail']['password']);
  // $headers = imap_headers($mail_handle);
  $last = imap_num_msg($mail_handle);
  $single_mail = imap_header($mail_handle, $last);
  // $single_mail_body = imap_body($mail_handle, $last);

  echo"<pre>";

  print_r($single_mail);

  echo"</pre>";
  imap_close($mail_handle); */
?> -->
    </div>
</div>

  <?php 
        if($id=isset($_GET['id'])){
          ?>  
   <div class="section3" id="sec3">
        	<div class="mail_des" id="des">
        		<?php
        		// $id = "<script>document.writeln(y);</script>" ;
        		 // $id=$_GET['id'];
        		  // echo $id;

				$sql=mysqli_query($conn,"select * from send_mail where mail_id ='$id'");
				$check=mysqli_num_rows($sql)>0;
				if($check){
					while($row=mysqli_fetch_assoc($sql)){
						?>
        
				<div class="header">
					<p class="col_1"><img src="img/mail.JPG"></p>
					<span class="col_span_1"><?php echo $row["toEmail"]; ?></span>
					<span class="col_span_2"><a href='./includes/delete4.php?id=<?php echo $row["mail_id"] ?>' onclick='checkdelete()' style="color:grey;text-decoration:none"><i class="fa fa-trash" aria-hidden="true"></i></a></span>
					<p class="col_2"><img src="img/mail_back.JPG"></p>
					<p class="col_3"><img src="img/mail_next.JPG"></p>
				</div>	
				
				<div class="mail_area">

					<p class="col_4">Subject: <?php echo $row["subjectName"]; ?></p>
					<span class="col_span_4">Message: <?php echo $row["message"]; ?></span>
					<!-- <p class="col_5" style="color: grey;">Attachments</p>
					<a style="color:#3598DB;text-decoration:none" href="img/<?php  echo $row["file"]; ?>" download><span style="color:#3598DB"><span class="col_span_5"><?php  echo $row["file"]; ?></span></a>  -->
				</div>
				<div class="inputforMessages-send-messages-myMessages">
                        <input type="text" name="msg" placeholder="Type your message here" id="">
                        <div class="paperclip-and-sendButton-inputforMessages">
                        <a href="#"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                          <input type="submit" value="send"><a href="#"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                        </div>
        </div>
       
        

				<?php }}?>
        	</div>
        	
    </div>
     <?php } 
      else{
      ?>
       
            <div class="section3" id="sec3">
           
          </div>

        <?php }?>
   
</div>
</body>
<?php }} ?>


<script>
    function checkdelete(){
        return confirm('Are you sure you want to delete this email?');
    }

</script>
<script type="text/javascript">
  function myFunction() {
  $flag=1;
}
</script>
 <!-- <script type="text/javascript">
  const result1 = document.querySelector('#result1');
  const sec3 = document.querySelector('#sec3');
result1.addEventListener('click',() =>{
  document.querySelector('#sec3').style.display='block'
    sec3.classList.add('active');
})
</script>

<script>
function myFunc() {
  var x = document.getElementById("des");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

</script> -->
<!-- <script type="text/javascript">
	let y;
	function openEmail(e){
		console.log(e.id);
		y=e.id;
		// document.cookie = escape("mail_id") + "=" + escape("y") + ;
    window.location.reload();
		createCookie("mail_id",y,30);
		window.location.reload();
	}
	function createCookie(name, value, seconds) {
    var expires;
      
    if (seconds) {
        var date = new Date();
        date.setTime(date.getTime()+(30*1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
      
    document.cookie = escape(name) + "=" + 
        escape(value) + expires + "; path=/";
}
</script>
 -->
