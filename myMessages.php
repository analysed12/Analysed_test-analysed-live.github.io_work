

<?php


    session_start();      //session has been started
   include 'connection1.php';     //database connection page included


?>


<?php include ('header1.php')?>
<link rel="stylesheet" href="./css/myMessages.css">
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
                        <h1>Rick</h1>
                        <!-- <?php echo $_SESSION['firstname']; ?> -->
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
                    <span class="status-tabsFromMyMessages active">Status</span>
                    <a href="myMessages_1.php"><span class="status-tabsFromMyMessages ">Description</span></a>
                </div>
                <div class="main-content-right-side-myMessages">
                <section class="status-right-side-myMessages">
                    <span class="status-indicator-InProgress-myMessages"> </span>
                    <p>In Progress</p>
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                </section>
                <p class="upload-Date-myMessages">Uploaded 1 day ago</p>
                <section class="deliveryTime-right-side-myMessages">
                    <i class="fa fa-flag-o" aria-hidden="true"></i>
                    <section>
                        <p class="date-for-submission-myMessages">17 December, 2019</p>
                        <p class="estimateddate-for-submission-myMessages">Estimated Delivery</p>
                        <p class="starteddate-for-submission-myMessages"> <strong>Started</strong> 15 days ago </p>
                    </section>
                </section>
                <p class="assignedto-mymessages-right-side">Assigned to</p>
                <section class="nameandDesignation-container-mymessages">
                    <div class="nameandDesignation-right-side-myMessages">
                        <p>Bjom Johnson</p>
                        <p>Senior front end developer</p>
                    </div>
                    <span>EW</span>
                </section>
                <section class="location-mymessages-rightSide">
                    <p>Location</p>
                    <p>Tornfast, Sweden</p>
                </section>
                <section class="location-mymessages-rightSide">
                    <p>Timezone</p>
                    <p>PST UTC-8</p>
                </section>
                <section class="location-mymessages-rightSide">
                    <p>Skills</p>
                    <p>HTML, CSS, PHP & Javascript</p>
                </section>
                </section>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
