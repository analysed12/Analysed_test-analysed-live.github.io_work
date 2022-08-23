
<?php


    session_start();      //session has been started
   include 'connection1.php';     //database connection page included


?>

<?php include ('header1.php')?>
<link rel="stylesheet" href="./css/myMessages.css">
<link rel="stylesheet" href="./css/myMessages_1.css">
<title>Messages</title>
<div class="container">
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">My Messages</h1>
        </div>
        <div class="row-ekam-flex-myMessages">
            <div class="left-side-myMessages">
                <div class="nameAndInfo-myMessages">
                    <i class="fa fa-chevron-left back-icon-myMessages" aria-hidden="true"></i>
                    <span>
                        <h1>Bjom Jonson</h1>
                        <p>Task ID: 23128</p>
                    </span>
                    </div>
                    <span class="icon-nameAndInfo"><i class="fa fa-thumb-tack" aria-hidden="true"></i> 2 </span>
                    <span class="icon-nameAndInfo"><i class="fa fa-paperclip" aria-hidden="true"></i> 1</span>
                <div class="messages-container-myMessages">
                    <span class="date-of-messages-container-myMessages">Today</span>
                    <div class="messagesDiv-left-side-myMessages">
                      <?php
                      $sender=$_GET['s_id'];
                      $sql ="select * from chat where s_id = 1 ";
                      $res = $conn->query($sql);
                      if ($res->num_rows>0) {
                        while ($row=$res->fetch_assoc()) {

                          ?>
                        <div class="sender-messages">
                            <p class="sender-image-sender-messages"><?php echo $row['name']; ?></p>
                            <p class="sender-messages-message-received-myMessages"><?php echo $row['msg']; ?></p>
                            <span class="messages-seen-time-sender-messages">Seen <?php echo $row['date']; ?><i class="fa fa-check" aria-hidden="true"></i></span>
                        </div>
                      <?php }}

                      $conn->close(); ?>
                    </div>
                    <div class="messagesDiv-right-side-myMessages">
                      <?php
                      $recv =  $_GET['r_id'];
                      $sql ="select * from chat where r_id = 2";
                      $res = $conn->query($sql);
                      if ($res->num_rows>0) {
                        while ($row=$res->fetch_assoc()) {

                          ?>
                        <div class="receiver-messages">
                            <p class="receiver-messages-message-received-myMessages"><?php echo $row['msg']; ?></p>
                            <span class="receiver-image-receiver-messages"><?php echo $row['name']; ?></span>
                            <span class="messages-seen-time-receiver-messages">Seen <?php echo $row['date']; ?><i class="fa fa-check" aria-hidden="true"></i></span>
                        </div>
                      <?php }}

                      $conn->close(); ?>
                    </div>



                </div>
                <form action="post" action="send.php">
                <div class="inputforMessages-send-messages-myMessages">
                        <i class="fa fa-smile-o" aria-hidden="true"></i>
                        <input type="text" name="msg" placeholder="Type your message here" id="">
                        <div class="paperclip-and-sendButton-inputforMessages">
                        <a href="#"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                          <input type="submit" value="send"><a href="#"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                        </div>
                    </div>
                  </form>
            </div>

            <div class="right-side-myMessages">
                <div class="tabsForMyMessages-right-side">
                    <span class="status-tabsFromMyMessages active">Description</span>
                </div>
                <div class="main-content-right-side-myMessages">
                <section class="nameandDesignation-container-mymessages border-bottom">
                    <div class="nameandDesignation-right-side-myMessages">
                        <p>Bjom Johnson</p>
                        <p style="font-size: 14px;margin-top:7px;">Recruiter</p>
                    </div>
                    <span>EW</span>
                </section>
                <div class="company-nameand-info-main-content-right-side-myMessages">
                        <section class="flexitem-company-nameand-info">
                            <img src="./img/Uber-logo.png" alt="">
                            <span>
                                <p style="font-size: 18px;margin-top:7px;color:#2D3E50">Uber Area</p>
                                <p style="font-size: 14px;margin-top:7px;color:#979797">Mumbai, India</p>
                            </span>
                        </section>
                        <p class="para-companydescription-main-content-right-side-myMessages">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        </p>
                        <div class="company-info-websiteand-details-right-side-myMessages">
                            <span><i class="fa fa-globe" aria-hidden="true"></i> www.company.net</span>
                            <span><i class="fa fa-envelope-o" aria-hidden="true"></i> companyna@gmail.com</span>
                            <span><i class="fa fa-phone" aria-hidden="true"></i> +91 9090900900</span>
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> Lorem, address, place</span>
                        </div>
                        <button class="seeallJobs_right-side-mymessages">
                        See all jobs
                        </button>
                    </div>
                </section>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
