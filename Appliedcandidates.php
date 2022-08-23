<?php
include 'connection1.php';         //database connection page included
session_start();            //session has been started
?>


<title>Dashboard</title>
    <link rel="stylesheet" href="./css/DashboardJobs.css">
    <link rel="stylesheet" href="./css/appliedCandidates.css">
    <link rel="stylesheet" href="./css/shortlistedJobs.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <body>
    <?php include('header.php') ?>
    <div class="container">

      <div class="small_container">
        <div class="bread-crumbs_Mytools-recruiter">
            <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="active-breadcrumb-link">Applied Candidates</a>
        </div>
        <form action="" method="post">
        <div class="row-flex-jobs-j alignitemsstart-shortlisted Dashboard-main-container-jobs">
            <div class="left-side-container-DashboardJ">

                    <?php
                    $total_rows = mysqli_query($conn,"SELECT * FROM candidates");
                    $num = mysqli_num_rows($total_rows);
                    ?>

                <h2 class="jobsCreateaDashboard-jobs">Applied Candidates <span> (<?php echo htmlentities($num); ?>)</span></h2>
                <div class="cards-section-container row-flex-jobs-j" id="result">
                    <?php
                        $sql=mysqli_query($conn,"select * from candidates");
                        $check=mysqli_num_rows($sql)>0;
                        if($check){
                            while($row=mysqli_fetch_assoc($sql)){
                         ?>
                        <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
                            <a href="">

                                <?php
                                $status=$row["candidate_type"];      //here candidateType is used to check status of candidate
                                if($status=="Reviewed") { ?>
                                    <p class="candidate-status-jobs Reviewed">Reviewed</p>
                                <?php   }
                                if($status=="Contacting"){ ?>
                                    <p class="candidate-status-jobs Contacting">Contacting</p>
                                <?php }
                                if($status=="Hired"){ ?>
                                    <p class="candidate-status-jobs Hired">Hired</p>
                                <?php } ?>

                                <img src="upload/<?php echo $row["image"]; ?>" alt="">
                                <h3 class="job-headingnname"><?php echo $row["firstname"]; ?></h3>
                                <!-- <p class="skill-job-candiate"><?php echo $row["position"]; ?></p> -->
                                <ul class="candidate-desc">
                                    <li><?php echo $row["qualifications"]; ?></li>
                                    <!-- <li><?php echo $row["experience"]; ?> Year Experience</li> -->
                                    <!-- <li><?php echo $row["job_type"]; ?></li> -->
                                    <li><?php echo $row["skills"]; ?></li>
                                </ul>
                                <div class="row-flex-jobs-j seemorebutton-social">
                                    <a href="index.php" class="seemoreButton">See more</a>
                                    <div class="row-flex-jobs-j social-media-icons">
                                      <a href="https://www.linkedin.com/shareArticle?mini=true&url=<URL>&t=<TITLE>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Linkedin"><img src="./img/Icon zocial-linkedin.svg" alt=""></a>
                                      <a href="https://twitter.com/share?url=<URL>&text=<TITLE>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><img src="./img/Icon feather-twitter.svg" alt=""></a>
                                      <a href="mailto:?subject=[SUBJECT]&body=<URL>" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Mail" ><img src="./img/Icon material-mail-outline.svg" alt=""></a>
                                    </div>
                                </div>
                                <p class="date-created-jobsDashboard">Applied Recently</p>
                            </a>
                    </div>
                    <?php
                            }
                        }
                        ?>

                        </form>
                   <!-- <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
                            <a href="">
                                <p class="candidate-status-jobs Contacting">Contacting</p>
                                <img src="./img/Ellipse 148-1.png" alt="">
                                <h3 class="job-headingnname">Jane Williams</h3>
                                <p class="skill-job-candiate">Java developer</p>
                                <ul class="candidate-desc">
                                    <li>Computer Science Degree</li>
                                    <li>1 Year Experience</li>
                                    <li>Full-Time Job</li>
                                    <li>Basic programming, Java, AWS</li>
                                </ul>
                                <div class="row-flex-jobs-j seemorebutton-social">
                                    <a href="index.php" class="seemoreButton">See more</a>
                                    <div class="row-flex-jobs-j social-media-icons">
                                        <a href="#"><img src="./img/Icon zocial-linkedin.svg" alt=""></a>
                                        <a href="#"><img src="./img/Icon feather-twitter.svg" alt=""></a>
                                        <a href="#"><img src="./img/Icon material-mail-outline.svg" alt=""></a>
                                    </div>
                                </div>
                                <p class="date-created-jobsDashboard">Applied Recently</p>
                            </a>
                    </div>
                    <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
                            <a href="">
                                <p class="candidate-status-jobs Hired">Hired</p>
                                <img src="./img/Ellipse 148-1.png" alt="">
                                <h3 class="job-headingnname">Jane Williams</h3>
                                <p class="skill-job-candiate">Java developer</p>
                                <ul class="candidate-desc">
                                    <li>Computer Science Degree</li>
                                    <li>1 Year Experience</li>
                                    <li>Full-Time Job</li>
                                    <li>Basic programming, Java, AWS</li>
                                </ul>
                                <div class="row-flex-jobs-j seemorebutton-social">
                                    <a href="index.php" class="seemoreButton">See more</a>
                                    <div class="row-flex-jobs-j social-media-icons">
                                        <a href="#"><img src="./img/Icon zocial-linkedin.svg" alt=""></a>
                                        <a href="#"><img src="./img/Icon feather-twitter.svg" alt=""></a>
                                        <a href="#"><img src="./img/Icon material-mail-outline.svg" alt=""></a>
                                    </div>
                                </div>
                                <p class="date-created-jobsDashboard">Applied Recently</p>
                            </a>
                    </div>-->
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
                        <input type="text" name="jobtitle" id="jobtitle" placeholder="Job Title" class="input-applied-candidates" oninput="myFunction()">

                </div>
                <div class="category-main-first">

                        <label for="Location" class="label-applied-candidates">Location</label>
                        <input type="text" name="location" id="location" placeholder="Location" class="input-applied-candidates" oninput="myFunction()">

                </div>
                <div class="category-main-first">
                    <p class="row-flex-jobs-j">
                        <span class="heading-filter-dj" id="filterHeading3">Qualification</span>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>

                    </p>
                    <div class="category-filters" id="categoryDiv3">
                        <?php
                        $sql="SELECT distinct qualification from jobseeker order by qualification";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                            ?>
                        <div class="row-flex-jobs-j">
                            <span>
                                <label class="qualification">
                                    <input type="checkbox" value="<?= $row['qualification'];?>" id="qualification" onclick="myFunction()"><span> </span><?= $row['qualification']; ?>
                                </label>
                            </span>
                            <p>
                                <?php
                                $qualification=$row['qualification'];
                                $rt = mysqli_query($conn,"SELECT * FROM jobseeker where qualification='$qualification'");
                                $num1 = mysqli_num_rows($rt);
                                ?>
                                <?php echo htmlentities($num1); ?>
                            </p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="category-main-first">
                    <p class="row-flex-jobs-j">
                        <span class="heading-filter-dj" id="filterHeading4">Employment type</span>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>

                    </p>
                    <div class="category-filters" id="categoryDiv4">
                        <?php
                        $sql="SELECT distinct job_type from jobseeker order by 	job_type";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                            ?>
                        <div class="row-flex-jobs-j">
                            <span>
                                <label class="job_type">
                                    <input type="checkbox" value="<?= $row['job_type'];?>" id="job_type" onclick="myFunction()"><span> </span><?= $row['job_type']; ?>
                                </label>
                            </span>
                            <p>
                                <?php
                                $job_type=$row['job_type'];
                                $rt = mysqli_query($conn,"SELECT * FROM jobseeker where job_type='$job_type'");
                                $num1 = mysqli_num_rows($rt);
                                ?>
                                <?php echo htmlentities($num1); ?>
                            </p>
                        </div>
                        <?php } ?>

                    </div>
                </div>
                <div class="category-main-first">
                    <p class="row-flex-jobs-j">
                        <span class="heading-filter-dj"  id="filterHeading5">Status</span>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>

                    </p>
                    <div class="category-filters" id="categoryDiv5">
                        <?php
                        $sql="SELECT distinct status from jobseeker order by status";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                            ?>
                        <div class="row-flex-jobs-j">
                            <span>
                               <label class="job_type">
                                    <input type="checkbox" value="<?= $row['status'];?>" id="status" onclick="myFunction()"><span> </span><?= $row['status']; ?>
                                </label>
                            </span>
                            <p>
                                <?php
                                $status=$row['status'];
                                $rt = mysqli_query($conn,"SELECT * FROM jobseeker where job_status='$status'");
                                $num1 = mysqli_num_rows($rt);
                                ?>
                                <?php echo htmlentities($num1); ?>
                            </p>
                        </div>
                    <?php } ?>

                    </div>
                </div>
            </form>
        </div>
    </div>
<script>

    const filterHeading3 = document.querySelector('#filterHeading3');
    const filterHeading4 = document.querySelector('#filterHeading4');
    const filterHeading5 = document.querySelector('#filterHeading5');
    const categoryDiv3 = document.querySelector('#categoryDiv3');
    const categoryDiv4 = document.querySelector('#categoryDiv4');
    const categoryDiv5 = document.querySelector('#categoryDiv5');

    filterHeading3.addEventListener('click',()=>{
        categoryDiv3.classList.toggle('active')
    })
    filterHeading4.addEventListener('click',()=>{
        categoryDiv4.classList.toggle('active')
    })
    filterHeading5.addEventListener('click',()=>{
        categoryDiv5.classList.toggle('active')
    })

</script>

<script type="text/javascript">

    function myFunction(){
            var action='data';
            var qualification= get_filter_text('qualification');
            var job_type= get_filter_text('job_type');
            var status= get_filter_text('status');
            var jobtitle=document.getElementById('jobtitle').value;
            var location=document.getElementById('location').value;


            $.ajax({
                url:'./include/candidates_action.php',
                method:'POST',
                data:{action:action,qualification:qualification,job_type:job_type,status:status,jobtitle:jobtitle,location:location},
                success:function(response){
                    $("#result").html(response);

                }
            });
        }


        function get_filter_text(text_id){
            var filterData=[];
            $('#'+text_id+':checked').each(function(){
                filterData.push($(this).val());
            });
            return filterData;
        }

</script>

<script>
    $(document).ready(function(){
        $("#multi_search").change(function(){
            var sort_val=$(this).val();

            $.ajax({
                url:'./include/candidates_action.php',
                method:'POST',
                data:{sort_val:sort_val},
                success:function(response){
                    $("#result").html(response);
                }
            });
        });
    });
</script>
