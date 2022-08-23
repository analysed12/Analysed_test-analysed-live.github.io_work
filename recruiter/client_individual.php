<?php include('connection1.php'); ?>

<?php
session_start();

// if(isset($_SESSION['company_name'])) {

    // $company_name=$_SESSION['company_name'];
    $c_id=$_GET['c_id'];
    $sql=mysqli_query($conn,"select * from client where client_id='$c_id'");
    
    $check=mysqli_num_rows($sql)>0;
    if($check){
        while($row=mysqli_fetch_assoc($sql)){
            $company_name=$row['company_name'];
            
?>

<?php include('header.php') ?>
<title>Dashboard</title>
<link rel="stylesheet" href="./css/client_individual_remo_harsh.css">

<body>
    <div class="container">
        <div class="small_container">
            <div class="bread-crumbs_Mytools-recruiter">
                <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href=""
                    class="unactive-breadcrumb-link">My Database</a> > <a href="" class="unactive-breadcrumb-link">Add
                    Client</a> > <a href="" class="active-breadcrumb-link"> Fox Hunt</a>
            </div>

            <div class="profile-img">
                <img src="img/<?php echo $row["company_img"]; ?>" alt="">
                <h1><?php echo $row["company_name"]; ?><p1><span><i class="fa fa-pencil-square-o fa-lg"
                                aria-hidden="true"></i></span><?php echo $row["client_id"]; ?></p1>
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
                <p style="color:#3598DB;margin-left:-2px"> <b style="margin-right: 10px;">|</b>At a glance</p>
                <p><a href="client_jobs.php?c_id=<?php echo $row['client_id']; ?>">Hires</a></p>
                <p><a href="client_contacts.php?c_id=<?php echo $row['client_id']; ?>">Contacts</a></p>
                <p class="p1"><a href="client_appointments.php?c_id=<?php echo $row['client_id']; ?>">Appointments</a>
                </p>
                <p class="p1"><a href="client_activity.php?c_id=<?php echo $row['client_id']; ?>">Activity</a></p>
                <p class="p1"><a href="client_files.php?c_id=<?php echo $row['client_id']; ?>">Files</a></p>
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
                    <span><?php echo $row["status"]; ?></span>&emsp;&emsp;&emsp;<?php echo $row["ownership"]; ?>&emsp;&emsp;<?php echo $row["source"]; ?>
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
                    <p style="color: black;"><?php echo $row["state"]; ?>, <?php echo $row["country"]; ?></p>
                    <br><br>
                </div>
            </div>

            <div class="left-side-container-1">
                <div class="row-recruiter quickaccess-links-container">
                    <a href="#" class="quickaccess-links-recruiter"><i class="fa fa-suitcase fa-lg" aria-hidden="true"
                            style="color:#51C46D;margin-left:-30px;padding-right: 10px;"></i> Available jobs
                        <span>

                            <?php
                            $total_rows = mysqli_query($conn,"SELECT * FROM joblistings where client_company='$company_name' ");
                            $num = mysqli_num_rows($total_rows);
                            ?>

                            <?php echo htmlentities($num); ?>

                        </span>
                    </a>
                    <a href="#" class="quickaccess-links-recruiter"><i class="fa fa-user fa-lg" aria-hidden="true"
                            style="color:#297FB8;margin-left:-30px;padding-right: 10px;"></i> Contacts
                        <span>

                            <?php
                            $total_rows = mysqli_query($conn,"SELECT * FROM contacts where company='$company_name' ");
                            $num = mysqli_num_rows($total_rows);
                            ?>

                            <?php echo htmlentities($num); ?>

                        </span>
                    </a>
                    <a href="#" class="quickaccess-links-recruiter"><i class="fa fa-file-text fa-lg" aria-hidden="true"
                            style="color:#8C60EB;margin-left:-30px;padding-right: 10px;"></i> Files
                        <span>

                            <?php
                            $total_rows = mysqli_query($conn,"SELECT * FROM client_files where company_name='$company_name' ");
                            $num = mysqli_num_rows($total_rows);
                            ?>

                            <?php echo htmlentities($num); ?>

                        </span>
                    </a>
                    <a href="#" class="quickaccess-links-recruiter"><i class="fa fa-sticky-note fa-lg"
                            aria-hidden="true" style="color:#FFBD06;margin-left:-30px;padding-right: 10px;"></i> Notes
                        <span>

                            <?php
                            $total_rows = mysqli_query($conn,"SELECT * FROM client_notes where company_name='$company_name' ");
                            $num = mysqli_num_rows($total_rows);
                            ?>

                            <?php echo htmlentities($num); ?>

                        </span>
                    </a>
                </div>

                <div class="company-desc">
                    <div class="heading">
                        <p class="mainHeading">Company Description</p>
                        <span class="mainheading-left">Last edited <span>21-05-2020</span></span>
                    </div>
                    <div class="company-content">
                        <p class="p2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem saepe accusantium
                            doloremque?
                            SAtque quisquam, consectetur adipisicing elit. Provident rem, cum, atque vero libero
                            architecto molestiae quod distinctio, iusto nostrum deserunt. Quos tempore alias consequatur
                            commodi, velit error voluptatibus reprehenderit laborum reiciendis eveniet dolorum fugiat
                            inventore doloribus consequuntur quo distinctio laudantium repellendus

                            <?php echo $row["company_desc"]; ?></p>
                    </div>
                </div>

                <div class="contact-info">
                    <div class="heading">
                        <p class="mainHeading">Contact info</p>
                    </div>
                    <div class="contact-content">
                        <p><i class="fa fa-phone" aria-hidden="true"></i></p>
                        <p class="contact-email"><?php echo $row["main_email"]; ?></p>
                        <span><?php echo $row["contact_no"]; ?></span>
                        <span><?php echo $row["contact_no"]; ?></span>
                    </div>

                    <div class="contact-content">
                        <p><i class="fa fa-building" aria-hidden="true"></i></p>
                        <p class="contact-address"><?php echo $row["address"]; ?></p>
                        <span><?php echo $row["city"]; ?> - <?php echo $row["zipcode"]; ?></span>
                        <span><?php echo $row["state"]; ?>, <?php echo $row["country"]; ?></span>
                    </div>
                </div>

                <?php
                
                $sql=mysqli_query($conn,"select * from client_notes where company_name='$company_name' order by added_on desc limit 1");
                $check=mysqli_num_rows($sql)>0;
                if($check){
                    while($row1=mysqli_fetch_assoc($sql)){
                        ?>

                <div class="last-note">
                    <div class="heading">
                        <p class="mainHeading">Last Note</p>
                        <span class="mainheading-left">Last edited <span style="font-size: 16px;color:black">
                                <?php echo $row1["last_edited"]; ?></span></span>
                    </div>
                    <div class="last-note-profile">
                        <img src="./img/Profile-pic.png" style="margin-top: 12px;">
                        <p>Added by</p>
                        <span>Sasuke Uchiha</span>
                    </div>
                    <div class="last-note-content"> <?php echo $row1["notes"]; ?>
                    </div>
                </div>

                <?php } } ?>

                <?php
                $name=$row["active_contact"];
                $sql=mysqli_query($conn,"select * from contacts where company='$company_name' and fname='$name'");
                $check=mysqli_num_rows($sql)>0;
                if($check){
                    while($row=mysqli_fetch_assoc($sql)){
                        ?>

                <div class="active-contact">
                    <div class="heading">
                        <p class="mainHeading">Active Contact</p>
                        <span class="mainheading-left" id="del" style="color:red;margin-top:-30px"><i
                                class="fa fa-trash" aria-hidden="true"></i></span>
                    </div>
                    <div class="active-contact-content">
                        <img src="img/Ellipse -4@2x.png" style="margin-left:60px;margin-top:15px">
                        <p><?php echo $row["fname"]; ?></p>
                        <p style="color:#979797;margin-left: 60px;"><?php echo $row["email"]; ?></p>
                        <span><?php echo $row["phone"]; ?></span>
                    </div>
                </div>
                <?php } } ?>



                <div class="open-jobs">
                    <p>Open jobs</p>
                    <?php
                    $sql=mysqli_query($conn,"select * from joblistings where client_company='$company_name'");
                    $check=mysqli_num_rows($sql)>0;
                    if($check){
                        while($row=mysqli_fetch_assoc($sql)){
                        ?>
                    <div class="row">
                        <div class="column">
                            <input type="checkbox" id="c1" class="checkbox">
                            <label for="c1"></label>
                        </div>
                        <div class="column">
                            <span class="span-class-red"></span>
                        </div>
                        <div class="column">
                            <p class="col-2">Added on</p>
                            <p class="col-2-1"><?php echo $row["added_on"]; ?></p>
                            <span class="col-span-2"><?php echo $row["job_type"]; ?></span>
                        </div>
                        <div class="column">
                            <p class="col-3"><?php echo $row["position"]; ?></p>
                            <p class="col-3-1"><?php echo $row["job_id"]; ?></p>
                            <span class="col-span-3"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                <?php echo $row["country"]; ?></span>
                        </div>
                        <div class="column">
                            <p class="col-4">Company contact</p>
                            <p class="col-4-1"><?php echo $row["contact_client_company"]; ?></p>
                            <span class="col-span-4">sandrovicente@gmail.com</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-eye" aria-hidden="true"></i></p>
                            <span class="col-span-5">10</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-clipboard" aria-hidden="true"></i></p>
                            <span class="col-span-5">6</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-user" aria-hidden="true"></i></p>
                            <span class="col-span-5">1/4</span>
                        </div>
                        <div class="column">
                            <p class="col-6">Recruiter</p>
                            <p class="col-6-1"><?php echo $row["recruiters_name"]; ?></p>
                            <span class="col-span-6">sandrovicente@gmail.com</span>
                        </div>
                    </div>
                    <?php } } ?>
                </div>
            </div>
        </div>
    </div>
</body>
<?php } } ?>
<script>
var items = document.getElementsByName('item');
var selectedItem = document.getElementById('selected-item');
var dropdown = document.getElementById('dropdown');

items.forEach(item => {
    item.addEventListener('change', () => {
        if (item.checked) {
            selectedItem.innerHTML = item.value;
            dropdown.open = false;
        }
    });
});
</script>