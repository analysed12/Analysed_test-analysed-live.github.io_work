<?php include('connection1.php'); ?>

<?php
session_start();
// if(isset($_SESSION['company_name'])) {
//     $company_name=$_SESSION['company_name'];
//     $sql=mysqli_query($conn,"select * from client where company_name='$company_name'");
     $c_id=$_GET['c_id'];
    $sql=mysqli_query($conn,"select * from client where client_id='$c_id'");
    $check=mysqli_num_rows($sql)>0;
    if($check){
        while($row=mysqli_fetch_assoc($sql)){
            $company_name=$row['company_name'];
?>
<?php include('header.php') ?>
<title>Dashboard</title>
<link rel="stylesheet" href="css/client_activity_remove.css">

<body>
    <div class="container">
        <div class="small_container">
            <div class="bread-crumbs_Mytools-recruiter">
                <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href=""
                    class="unactive-breadcrumb-link">My Database</a> > <a href="" class="unactive-breadcrumb-link">Add
                    Client</a> > <a href="" class="active-breadcrumb-link"> Fox Hunt</a>
            </div>

            <div class="profile-img">
                <img src="img/Fox hunt.png" alt="">
                <h1><?php echo $row["company_name"]; ?><p1><span><i class="fa fa-pencil-square-o fa-lg"
                                aria-hidden="true"></i></span><?php echo $row["client_id"]; ?> </p1>
                </h1><br>
                <h2><span><?php echo $row["industry"]; ?></span></h2><br>
                <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                    </svg> <?php echo $row["country"]; ?></h4>
            </div>
            <div class="button">
                <button>Edit client</button>
            </div>

            <div class="options">
                <p class="p1"><a href="client_individual.php?c_id=<?php echo $row['client_id']; ?>">At a glance</a></p>
                <p class="p1"><a href="client_jobs.php?c_id=<?php echo $row['client_id']; ?>">Hires</a></p>
                <p class="p1"><a href="client_contacts.php?c_id=<?php echo $row['client_id']; ?>">Contacts</a></p>
                <p><a href="client_appointments.php?c_id=<?php echo $row['client_id']; ?>">Appointments</a></p>
                <p style="color:#3598DB;margin-left:-2px"> <b style="margin-right: 10px;">|</b>Activity</p>
                <p><a href="client_files.php?c_id=<?php echo $row['client_id']; ?>">Files</a></p>
                <p class="p1"><a href="client_notes.php?c_id=<?php echo $row['client_id']; ?>">Notes</a></p>
            </div>

            <div class="status">
                <div class="status1">
                    <p><?php echo $row["client_id"]; ?></p>
                    <span>05-05-2021</span>
                </div>
                <div class="status-name" style="margin-top:30px;">
                    <span style="margin-left:50px;"><?php echo $row["company_name"]; ?></span>
                    <p style="color:#3598DB;margin-left:40px"><?php echo $row["industry"]; ?></p>
                    <p style="color:#979797;font-size:18px;margin-left:25px"><i class="fa fa-briefcase"
                            aria-hidden="true"></i> Jobs</p>
                    <p style="color:#979797;font-size:18px;margin-left:140px;margin-top: -23px;"><i
                            class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $row["country"]; ?></p>
                    <u
                        style="color:#979797;margin-left:15px">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u>
                    <br><br>
                    <span
                        style="color:#979797; font-size:15px; margin-left:15px;">Status&emsp;&emsp;Ownership&emsp;&emsp;Source</span>
                    <br>
                </div>

                <div class="displayname">
                    <span><?php echo $row["status"]; ?></span>&emsp;&emsp;<?php echo $row["ownership"]; ?>&emsp;&emsp;&emsp;<?php echo $row["source"]; ?>
                </div>
                <br><br>

                <div class="fee">
                    <span>Average fee&emsp;&emsp;&emsp;&emsp;Current fee</span><br>
                </div>

                <div class="fee-percent">
                    <span>10%</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;4%
                </div>
                <br><br>
                <div class="employeement">
                    <p style="margin-left:8px">Parent Company</p>
                    <p style="color:black;margin-top:10px"><?php echo $row["parent_company"]; ?></p>
                </div>
                <br><br>

                <div class="details">
                    <p style="color:#979797;padding-top: 0px;">Created by</p>
                    <br>
                    <p style="color:#3598DB;">Curtis kelly</p>
                    <p style="color:black;">abc@gmail.com</p>
                    <p style="color:black;">+91 9876543210</p>
                    <br><br>

                    <?php
                     $name=$row["active_contact"];
                     $sql=mysqli_query($conn,"select * from contacts where company='$company_name' and fname='$name'");
                     $check1=mysqli_num_rows($sql)>0;
                     if($check1){
                        while($row1=mysqli_fetch_assoc($sql)){
                        ?>

                    <p style="color:#979797;padding-top: 0px;">Active conatct</p>
                    <br>
                    <p style="color:#3598DB;"><?php echo $row1["fname"]; ?></p>
                    <p style="color:black;"><?php echo $row1["email"]; ?></p>
                    <p style="color:black;"><?php echo $row1["phone"]; ?></p>
                    <br><br>
                    <?php } } ?>
                    <p style="color:#979797;padding-top: 0px;">Contact info</p>
                    <br>
                    <p style="color:#3598DB;"><?php echo $row["main_email"]; ?></p>
                    <p style="color:black;"><?php echo $row["contact_no"]; ?></p>
                    <p style="color:black;"><?php echo $row["contact_no"]; ?></p>
                    <br><br>
                    <p style="color:#979797;padding-top: 0px;">Address</p>
                    <br>
                    <p style="color:black"><?php echo $row["address"]; ?></p>
                    <p style="color:black;"> <?php echo $row["city"]; ?>-<?php echo $row["zipcode"]; ?></p>
                    <p style="color: black;"><?php echo $row["state"]; ?>,<?php echo $row["country"]; ?>.</p>
                    <br><br>
                </div>
            </div>
            <?php } } ?>

            <div class="left-side-container-1">
                <div class="recent-activity">
                    <div class="heading">
                        <p class="mainHeading">Recent Activity</p>
                        <span class="mainheading-left">View all</span>
                    </div>
                    <div class="content">
                        <div class="recent-content-1">
                            <p><i class="fa fa-suitcase" aria-hidden="true"></i></p>
                        </div>
                        <div class="recent-content">
                            <p class="heading-1">Task Created</p>
                            <span><i class="fa fa-history" aria-hidden="true"></i> X Time ago</span>
                            <p class="recent-content-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                voluptua. At vero eos t</p>
                        </div>
                        <hr style="color: #979797">
                        <div class="recent-content-2">
                            <p><i class="fa fa-envelope" aria-hidden="true"></i></p>
                        </div>
                        <div class="recent-content">
                            <p class="heading-1">Mail Sent</p>
                            <span><i class="fa fa-history" aria-hidden="true"></i> X Time ago</span>
                            <p class="recent-content-content-1">SUB: eirmod tempor sadipscing elitr, sed diam nonumy</p>
                            <p class="recent-content-content-2">TO: consetetur</p>
                        </div>
                        <hr style="color: #979797">
                        <div class="recent-content-3">
                            <p><i class="fa fa-phone" aria-hidden="true"></i></p>
                        </div>
                        <div class="recent-content">
                            <p class="heading-1">Call Scheduled</p>
                            <span><i class="fa fa-history" aria-hidden="true"></i> X Time ago</span>
                            <p class="recent-content-content-1">AT: 8:00AM, 23 Jul 2020</p>
                            <p class="recent-content-content-2">WITH: consetetur sadipscing elitr</p>
                        </div>
                    </div>
                </div>

                <div class="mail-box">
                    <div class="scroll-test">
                        <div class="box-content" id="list">
                            <div class="box-content-rounded active">
                                <p><a href="#" onclick="divVisibility('Div1');"><i class="fa fa-envelope-o fa-lg"
                                            aria-hidden="true"></i></a></p>
                            </div>
                            <div class="box-content-rounded">
                                <p><a href="#" onclick="divVisibility('Div2');"><i class="fa fa-phone fa-lg"
                                            aria-hidden="true"></i></a></p>
                            </div>
                            <div class="box-content-rounded">
                                <p><a href="#" onclick="divVisibility('Div3');"><i class="fa fa-suitcase fa-lg"
                                            aria-hidden="true"></i></a></p>
                            </div>
                            <div class="box-content-rounded">
                                <p><a href="#" onclick="divVisibility('Div4');"><i class="fa fa-question fa-lg"
                                            aria-hidden="true"></i></a></p>
                            </div>
                            <div class="box-content-rounded">
                                <p><a href="#" onclick="divVisibility('Div5');"><i class="fa fa-comments fa-lg"
                                            aria-hidden="true"></i></a></p>
                            </div>
                            <div class="box-content-rounded">
                                <p><a href="#" onclick="divVisibility('Div6');"><i class="fa fa-pencil fa-lg"
                                            aria-hidden="true"></i></a></p>
                            </div>
                            <div class="box-content-rounded">
                                <p><a href="#" onclick="divVisibility('Div7');"><i class="fa fa-file fa-lg"
                                            aria-hidden="true"></i></a></p>
                            </div>
                        </div>
                        <div class="box-content-rounded-span">
                            <p>Mail</p>
                            <p>Calls</p>
                            <p>Tasks</p>
                            <p style="margin-left:-20px">Queries</p>
                            <p style="margin-left:-30px">Interactions</p>
                            <p style="margin-left:-30px">Notes</p>
                            <p style="margin-left:-10px">Files</p>
                        </div>
                    </div>

                    <div id="Div1">
                        <div class="mail-content">
                            <p class="heading-1 sub2">Mail Sent</p>
                            <p class="right-content-1">View mail</p>
                            <span class="right-content-2">9:30PM | 9 Jul, 2020</span>
                            <p class="recent-content-content-1 sub">TO: eirmod tempor</p>
                            <p class="recent-content-content-2 sub1">SUB: consetetur sadipscing elitr, sed diam nonumy
                            </p>
                        </div>
                        <hr style="color:#979797;margin-top:10px;">
                        <div class="mail-content">
                            <p class="heading-1 sub2">Mail Sent</p>
                            <p class="right-content-1">View mail</p>
                            <span class="right-content-2">9:30PM | 9 Jul, 2020</span>
                            <p class="recent-content-content-1 sub">TO: eirmod tempor</p>
                            <p class="recent-content-content-2 sub1">SUB: consetetur sadipscing elitr, sed diam nonumy
                            </p>

                        </div>
                        <hr style="color:#979797;margin-top:10px;">
                        <div class="mail-content">
                            <p class="heading-1 sub2">Mail Sent</p>
                            <p class="right-content-1">View mail</p>
                            <span class="right-content-2">9:30PM | 9 Jul, 2020</span>
                            <p class="recent-content-content-1 sub">TO: eirmod tempor</p>
                            <p class="recent-content-content-2 sub1">SUB: consetetur sadipscing elitr, sed diam nonumy
                            </p>
                        </div>
                        <hr style="color:#979797;margin-top:10px;">
                        <div class="mail-content">
                            <p class="heading-1 sub2">Mail Sent</p>
                            <p class="right-content-1">View mail</p>
                            <span class="right-content-2">9:30PM | 9 Jul, 2020</span>
                            <p class="recent-content-content-1 sub">TO: eirmod tempor</p>
                            <p class="recent-content-content-2 sub1">SUB: consetetur sadipscing elitr, sed diam nonumy
                            </p>
                        </div>
                        <div class="button-1">
                            <button class="next-btn">Go to Calls</button>
                        </div>
                    </div>

                    <div id="Div2" style="display: none;">
                        <div class="mail-content">
                            <p class="heading-1 sub2">Called made</p>
                            <p class="right-content-1">View mail</p>
                            <span class="right-content-2">9:30PM | 9 Jul, 2020</span>
                            <p class="recent-content-content-1 sub">AT: 8:00AM, 23 Jul 2020</p>
                            <p class="recent-content-content-2  sub1 ">WITH: consetetur sadipscing elitr</p>
                        </div>
                        <hr style="color:#979797;margin-top:10px;">
                        <div class="mail-content">
                            <p class="heading-1 sub2">Called made</p>
                            <p class="right-content-1">View mail</p>
                            <span class="right-content-2">9:30PM | 9 Jul, 2020</span>
                            <p class="recent-content-content-1 sub">AT: 8:00AM, 23 Jul 2020</p>
                            <p class="recent-content-content-2 sub1">WITH: consetetur sadipscing elitr</p>
                        </div>
                        <hr style="color:#979797;margin-top:10px;">
                        <div class="mail-content">
                            <p class="heading-1 sub2">Called made</p>
                            <p class="right-content-1">View mail</p>
                            <span class="right-content-2">9:30PM | 9 Jul, 2020</span>
                            <p class="recent-content-content-1 sub">AT: 8:00AM, 23 Jul 2020</p>
                            <p class="recent-content-content-2 sub1">WITH: consetetur sadipscing elitr</p>
                        </div>
                        <hr style="color:#979797;margin-top:10px;">
                        <div class="mail-content">
                            <p class="heading-1 sub2">Called made</p>
                            <p class="right-content-1">View mail</p>
                            <span class="right-content-2">9:30PM | 9 Jul, 2020</span>
                            <p class="recent-content-content-1 sub">AT: 8:00AM, 23 Jul 2020</p>
                            <p class="recent-content-content-2 sub1">WITH: consetetur sadipscing elitr</p>
                        </div>
                        <div class="button-1">
                            <button class="next-btn">Go to Calls</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php  ?>

<script>
var btnContainer = document.getElementById("list");
var btns = btnContainer.getElementsByClassName("box-content-rounded");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener('click', function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace("active");
        this.className += " active";
    });
}
</script>

<script>
var divs = ["Div1", "Div2", "Div3", "Div4", "Div5", "Div6"];
var visibleDivId = null;

function divVisibility(divId) {
    if (visibleDivId === divId) {
        visibleDivId = null;
    } else {
        visibleDivId = divId;
    }
    hideNonVisibleDivs();
}

function hideNonVisibleDivs() {
    var i, divId, div;
    for (i = 0; i < divs.length; i++) {
        divId = divs[i];
        div = document.getElementById(divId);
        if (visibleDivId === divId) {
            div.style.display = "block";
        } else {
            div.style.display = "none";
        }
    }
}
</script>