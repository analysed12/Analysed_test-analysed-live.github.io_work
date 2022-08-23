<?php include('connection1.php') ?>
<title>Dashboard</title>
    <link rel="stylesheet" href="./css/DashboardJobs.css">
    <link rel="stylesheet" href="./css/appliedCandidates.css">
    <link rel="stylesheet" href="./css/hiredCandidates.css">
    <link rel="stylesheet" href="./css/shortlistedJobs.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <body>
    <?php include('header.php') ?>
    <div class="container">

      <div class="small_container">
        <div class="bread-crumbs_Mytools-recruiter">
            <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="active-breadcrumb-link">Applied Candidates</a> 
        </div>
        <div class="row-flex-jobs-j alignitemsstart-shortlisted Dashboard-main-container-jobs">
            <div class="left-side-container-DashboardJ">
                <?php
                    $total_rows = mysqli_query($conn,"SELECT * FROM jobseeker where job_status='Hired'");
                    $num = mysqli_num_rows($total_rows);
                    ?>
                <h2 class="jobsCreateaDashboard-jobs">Hired Candidates <span>(<?php echo htmlentities($num); ?>)</span></h2>
                <div class="cards-section-container row-flex-jobs-j" id="result">

                     <?php
                        $sql=mysqli_query($conn,"select * from jobseeker where job_status='Hired'");
                        $check=mysqli_num_rows($sql)>0;
                        if($check){
                            while($row=mysqli_fetch_assoc($sql)){
                         ?>

                    <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
                            <a href="">
                                <div class="candidate-status-jobs hiredCandidates-img"><p>NEW</p><img src="./img/Path 2213.svg"></div>
                                <img src="./img/Ellipse 148-1.png" alt="">
                                <h3 class="job-headingnname"><?php echo $row["firstname"]; ?></h3>
                                <p class="skill-job-candiate hiredCandidates-p1"><?php echo $row["position"]; ?></p>
                                <div class="row-flex-jobj email-id-and-experience">
                                    <img src="./img/Mail icon.svg"> 
                                    <span><p class="grey-email-id">Email ID</p><p class="name-dark-id"><?php echo $row["js_email"]; ?></p></span>
                                </div>
                                <div class="row-flex-jobj email-id-and-experience">
                                    <img src="./img/briefcase.svg"> 
                                    <span class="span-experience-1">
                                    <p class="grey-email-id">Experience & Roles</p>
                                    <p class="name-dark-id row-flex-jobs-j"><span>Total</span> <span><?php echo $row["experience"]; ?> Years Experience </span></p>
                                    
                                    </span>
                                </div>
                                <div class="seemorebutton-social">
                                    <a href="index.php" class="seemoreButton">See more</a>
                                </div>
                            </a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
            </div>
            <div class="right-side-container-DashboardJ">
               <div class="row-flex-jobj justifycontent-flex-end">
                        <p class="sortbyText">Sort By :</p>
                        <select name="multi_search" id="multi_search" class="sortbySelect">
                            <option>All</option>
                            <option value="Recent">Recent</option>
                            <option value="Old">Old</option>
                        </select>
                    </div>
                <h2 class="filter-heading">Filter</h2>
                <form class="form">
                <div class="category-main-first">
                    
                        <label for="jobtitle" class="label-applied-candidates">Job Title</label>
                        <input type="text" id="jobtitle" placeholder="Job Title" class="input-applied-candidates" oninput="myFunction()" onclick="myFunction()">
                    
                </div>
                <div class="category-main-first">
                    
                        <label for="CompanyName" class="label-applied-candidates">Company Name</label>
                        <input type="text" id="company" placeholder="Company Name" class="input-applied-candidates" oninput="myFunction()" onclick="myFunction()">
                    
                </div>
            </form>
        </div>
    </div>

<script type="text/javascript">

    function myFunction(){
            var action='data';
            var position=document.getElementById('jobtitle').value;
            var company=document.getElementById('company').value;
            
        
        
            $.ajax({
                url:'./include/action4.php',
                method:'POST',
                data:{action:action,position:position,company:company},
                success:function(response){
                    $("#result").html(response);

                }
            });
        }
</script>
<script>
    $(document).ready(function(){
        $("#multi_search").change(function(){
            var sort_val=$(this).val();

            $.ajax({
                url:'./include/action4.php',
                method:'POST',
                data:{sort_val:sort_val},
                success:function(response){
                    $("#result").html(response);
                }
            });
        });
    });
</script>

