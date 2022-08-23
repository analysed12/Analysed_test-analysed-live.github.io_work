<?php
include 'connection1.php';         //database connection page included
session_start();            //session has been started
?>

<title>Dashboard</title>
    <link rel="stylesheet" href="./css/DashboardJobs.css">
    <link rel="stylesheet" href="./css/appliedCandidates.css">
    <link rel="stylesheet" href="./css/interviewDone.css">
    <link rel="stylesheet" href="./css/tasksCreated.css">
    <link rel="stylesheet" href="./css/shortlistedJobs.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <body>
    <?php include('header.php') ?>
    <div class="container">

      <div class="small_container">
        <div class="bread-crumbs_Mytools-recruiter">
            <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="active-breadcrumb-link">Tasks Created</a>
        </div>
        <div class="row-flex-jobs-j alignitemsstart-shortlisted Dashboard-main-container-jobs">
            <div class="left-side-container-DashboardJ">
                <?php
                    $total_rows = mysqli_query($conn,"SELECT * FROM task");
                    $num = mysqli_num_rows($total_rows);
                    ?>
                <h2 class="jobsCreateaDashboard-jobs">Tasks Created<span> (<?php echo htmlentities($num); ?>)</span></h2>
                <div class="cards-section-container row-flex-jobs-j" id="result">

                    <?php
                        $sql=mysqli_query($conn,"select * from task");
                        $check=mysqli_num_rows($sql)>0;
                        if($check){
                            while($row=mysqli_fetch_assoc($sql)){
                         ?>

                    <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
                            <a href="">
                                <p class="candidate-status-jobs"></p>
                                <img src="<?php echo $row["task_img"]; ?>" alt="">
                                <h3 class="job-headingnname"><?php echo $row["assigned_to"]; ?></h3>
                                <p class="skill-job-candiate"><?php echo $row["position"]; ?></p>
                                <p class="taskassigned-taskcreated"><?php echo $row["jobtitle"]; ?></p>
                                <p class="lighgrey-text-task-created"><?php echo $row["description"]; ?></p>
                                <div class="upcomingInterviews-p tasks-created-p">

                                    <?php
                                    $date=$row['start_date'];
                                    $start_date=date_format(new DateTime($date),"M d, Y");
                                    ?>

                                    <?php
                                    $date=$row['end_date'];
                                    $end_date=date_format(new DateTime($date),"M d, Y");
                                    ?>

                                    <p class="row-flex-jobj"><img src="./img/Calendar(1).svg" style="margin-right: 10px;"><?php echo $start_date; ?>to <?php echo $end_date; ?> </p>

                                </div>
                                <div class="skills-taskscreated row-flex-jobs-j">
                                    <?php
                                     $skills = $row['skills'];
                                     $skill_arr = explode(',',$skills);
                                        for ($x = 0; $x < count($skill_arr); $x++) {
                                            ?>
                                            <span><?php echo $skill_arr[$x]; ?></span>
                                            <?php
                                        }
                                    ?>
                                </div>
                                <p class="date-created-jobsDashboard">Applied Recently</p>
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
                <div class="category-main-first">

                    <label for="Skills" class="label-applied-candidates">Skills</label>
                    <input type="text" id="skills" placeholder="Skills" class="input-applied-candidates" oninput="myFunction()" onclick="myFunction()">

            </div>
        </form>
    </div>
</div>

<script>
    const filterHeading3 = document.querySelector('#filterHeading3');

    const categoryDiv3 = document.querySelector('#categoryDiv3');


    filterHeading3.addEventListener('click',()=>{
        categoryDiv3.classList.toggle('active')
    })


</script>

<script type="text/javascript">

    function myFunction(){
            var action='data';
            var position=document.getElementById('jobtitle').value;
            var company=document.getElementById('company').value;
            var skills=document.getElementById('skills').value;


            $.ajax({
                url:'./include/action3.php',
                method:'POST',
                data:{action:action,position:position,company:company,skills:skills},
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
                url:'./include/action3.php',
                method:'POST',
                data:{sort_val:sort_val},
                success:function(response){
                    $("#result").html(response);
                }
            });
        });
    });
</script>
