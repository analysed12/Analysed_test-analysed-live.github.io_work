<?php include('include/header.php')?>
<link rel="stylesheet" href="./css/complaint_tickets.css">
<title>Complaints</title>
<div class="container">
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Complaint Tickets</h1>
            <p class="mainParaDash">Raise an issue or check for updates on previous issues</p>
            <span><strong>Monday,</strong> 18th May, 2020</span>
        </div>
        <div class="ticket-select-options-div-complaint_tickets">
            <div class="row-recruiter">
            <span>
                <label for="ticket_type_label_complaint_tickets" class="ticket_type_label_complaint_tickets_label" id="label1">Ticket Type</label>
                <div class="ticket-after-div-select-element" id="arrow">
                    <select name="" id="ticket_type_label_complaint_tickets" class="label2">
                    <option value="0">All tickets</option>
                        <option value="1">Complaint</option>
                        <option value="2">Feedback</option>
                        <option value="3">Query</option>
                        <option value="4">Request</option>
                    </select>
                </div>
            </span>
            <span>
                <label for="ticket_type_label_complaint_tickets" class="ticket_type_label_complaint_tickets_label" id="label3">Priority</label>
                <div class="ticket-after-div-select-element" id="arrow1">
                <select name="" id="ticket_type_label_complaint_tickets" class="label4">
                    <option value="0">Select all</option>
                    <option value="1">High</option>
                    <option value="2">Medium</option>
                    <option value="3">Low</option>
                </select>
                </div>
            </span>       
            <button class="create-ticket-button-for-complaints-ticket" id="but1">Create ticket +</button>
            </div>
        </div>
        <div class="ticket-categories-options-tochoose">
            <div class="row-recruiter">
                <p class="sub-ticket-categories-options-tochoose sub-ticket-categories-options-tochoose-recent active" id="head1">Recent</p>
                <p class="sub-ticket-categories-options-tochoose sub-ticket-categories-options-tochoose-unassigned" id="head2">Unassigned</p>
                <p class="sub-ticket-categories-options-tochoose sub-ticket-categories-options-tochoose-closed" id="head3">Closed</p>
            </div>
        </div>
        <div class="recent-complaint-tickets-recruiter active complaint-tickets-recruiter-cards-div" id="complaints">
            <?php
  $sql=mysqli_query($conn,"select * from tickets_js ");

  $check=mysqli_num_rows($sql);
  if($check){
    while($row=mysqli_fetch_assoc($sql)){
      ?>
            <div class="complaint-card-recruiter-complaint-tickets">
                <div class="row-recruiter">
                    <span>
                        <p class="light-grey-text-complain-ticket complaint" id="comp1"><?php echo $row["tickettype"]; ?></p>
                    </span>
                    <span class="row-recruiter">
                       <!--  <img src="./img/Ellipse -1.png" class="image-margin-right-complaint-ticket-recruiter"> -->
                        <span>
                            <p  class="light-grey-text-complain-ticket" id="comp2">Added by</p>
                            <p class="black-text-ciomplaint-ticket-recruiter" id="comp3"><?php echo $row["name"]; ?></p>
                        </span>
                    </span>
                    <span class="span-message-complaint-ticket-recruiter">
                        <p class="light-grey-text-complain-ticket" id="comp4">Subject</p>
                        <p class="black-text-ciomplaint-ticket-recruiter" id="comp5"><?php echo $row["subject"]; ?></p>
                            <p class="light-grey-text-complain-ticket" id="comp4">Message</p>
                            <p class="black-text-ciomplaint-ticket-recruiter" id="comp5"><?php echo $row["message"]; ?></p>
                    </span>
                </div>
                <button class="delete-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Delete <i class="fa fa-trash" aria-hidden="true" style="color:#EC4551"></i></button>
                <button class="reply-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Reply <i class="fa fa-reply" aria-hidden="true" style="color:#51C46D"></i></button>
            </div>
            <?php } } ?>
        </div>
        
    </div>
</div>
<div class="create-ticket-recruiter-ekam">
    <form action="recruiter/includes/ticket_js.php" method="post">
        <p class="name-for-form-create-ticket-recruiter-ekam">Create ticket</p>
        <br>
        <div class="row-recruiter create-ticket-main-recruiter-complaints">
            <div class="create-ticket-subTicket-recruiter">
                <span>
                    <label for="name-input-complaint-tickets-recruiter">Name *</label>
                    <input type="text" id="name-input-complaint-tickets-recruiter" placeholder="Jobseeker name" name="name">
                </span>
                <span class="span-section-for-email-andlabels-complaints">
                    <label for="Email-input-complaint-tickets-recruiter">Email *</label>
                    <input type="text" id="Email-input-complaint-tickets-recruiter" name="email" placeholder="Enter the associated email address">
                </span>
                <span  class="span-section-for-email-andlabels-complaints">
                    <label for="Subject-input-complaint-tickets-recruiter">Subject *</label>
                    <input type="text" id="Subject-input-complaint-tickets-recruiter" name="subject" placeholder="Subject">
                </span>
            </div>
            <span class="create-ticket-subTicket-recruiter-2">
                <label for="message-input-complaint-tickets-recruiter">Message *</label>
                <textarea placeholder="Enter your message here" name="message" id="message-input-complaint-tickets-recruiter"></textarea>
            </span>
        </div>
    
        
        <div class="row-recruiter select-options-for-complaint-tickets">
            <span style="width:45%">
                <label for="options-input-complaint-tickets-recruiter">Priority *</label>
                <div class="row-recruiter select-options" style="justify-content:space-around;" name="priority">
                    <div class="row-recruiter" style="margin-right:35px"> <label for="options-input-complaint-tickets-recruiter-1" value="high"><input type="radio" name="priority" style="margin-right:8px" id="options-input-complaint-tickets-recruiter-1"> High</label></div>
                    <div class="row-recruiter" style="margin-right:35px"> <label for="options-input-complaint-tickets-recruiter-2" value="medium"><input type="radio" name="priority" style="margin-right:8px" id="options-input-complaint-tickets-recruiter-2"> Medium</label></div>
                    <div class="row-recruiter" style="margin-right:35px"> <label for="options-input-complaint-tickets-recruiter-3" vaue="low"><input type="radio" name="priority" style="margin-right:8px" id="options-input-complaint-tickets-recruiter-3"> Low</label></div>
                </div>
            </span>
            <span  style="width:45%" >
            <label for="complaint-type-input-complaint-tickets-recruiter">Ticket type*</label>
            <select id="complaint-type-input-complaint-tickets-recruiter" name="tickettype">
                <option value="Complaint">Complaint</option>
                <option value="Feedback">Feedback</option>
                <option value="Query">Query</option>
                <option value="Request">Request</option>
            </select>
            </span>
        </div>
        <span class="button-complaints-recruiter-complaints">
            <input type="button" class="close-button-for-dialog-box-create-tickets" value="Close"></input>
            <button type="submit" name="submit">Submit</button>
        </span>
    </form>
</div>
<script src="./js/complaint_tickets.js"></script>
