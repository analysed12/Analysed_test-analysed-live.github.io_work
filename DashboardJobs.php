<?php

   include 'connection1.php';
   session_start();

?>


<title>Dashboard</title>
    <link rel="stylesheet" href="./css/shortlistedJobs.css">
    <link rel="stylesheet" href="./css/DashboardJobs.css">
  <body>
    <?php include('header.php') ?>
    <div class="container">

      <div class="small_container">
        <div class="bread-crumbs_Mytools-recruiter">
            <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="active-breadcrumb-link">Shortlisted Jobs</a>
        </div>
        <div class="row-flex-jobs-j alignitemsstart-shortlisted Dashboard-main-container-jobs">
            <div class="left-side-container-DashboardJ">

            <?php


                    $sql = "SELECT * FROM joblistings";

                    $res = mysqli_query($conn, $sql);

                    $count = mysqli_num_rows($res);
                    ?>

                    <h2 class="jobsCreateaDashboard-jobs">Jobs created <span>(<?php echo $count ?>)</span></h2>
                    <div class="cards-section-container row-flex-jobs-j">


                    <?php
                    if($count > 0)
                    {
                        //data available
                        while($row = mysqli_fetch_assoc($res))
                        {
                            //get required values
                            $id = $row['job_id'];
                            $job_title = $row['position'];
                            $job_desc = $row['advert_job_description'];
                            $job_created_on = $row['added_on'];
                            $skills = $row['skills'];
                            $package = $row['package'];
                            $package_type = $row['package_type'];
                            $company_logo = $row['logo'];
                            $company_name = $row['company'];

                            $skill_arr = explode(',',$skills);
                            ?>

                            <div class="single-container-cards-DasboardJobs">
                            <a href="#">
                                <img src="./<?php echo $company_logo ?>" width="130" height="130" style="margin: 25px" alt="">
                                <h3 class="job-headingnname"><?php echo $job_title; ?></h3>
                                <div class="row-flex-jobs-j companyname-and-salary">
                                    <p><?php echo $company_name ?></p>
                                    <p><?php echo $package; ?>/<?php echo $package_type ?></p>
                                </div>
                                <p class="job-desc-dashboard-jobs">

                                <!-- SELECT SUBSTRING('Quadratically',5,6); -->
                                <?php
                                echo substr($job_desc, 0, 100);

                                ?>
                                </p>
                                <div class="skills-div row-flex-jobs-j">
                                    <?php
                                        for ($x = 0; $x < count($skill_arr); $x++) {
                                            ?>
                                            <p><?php echo $skill_arr[$x]; ?></p>
                                            <?php
                                        }
                                    ?>

                                    <!-- <p>Remote Job</p>
                                    <p>Senior level</p>
                                    <p>HTML</p>
                                    <p>CSS</p>
                                    <p>Javascript</p> -->
                                </div>
                                <p class="date-created-jobsDashboard"><?php
                                $job_created_on = date('Y-m-d', strtotime($job_created_on));
                                echo $job_created_on; ?></p>
                                </a>
                    </div>

                            <?php

                        }
                    }
                    else{
                        //data unavailable
                        echo "<div>data fetching error</div>";
                    }

                ?>
                </div>
            </div>
            <div class="right-side-container-DashboardJ">
                <div class="row-flex-jobj justifycontent-flex-end">
                    <p class="sortbyText">Sort By :</p>
                    <select class="sortbySelect" name="select-box" id="select-box">
                        <option value="">None</option>
                        <option value="recent">Recent</option>
                        <option value="older">Older</option>
                    </select>
                </div>
                <h2 class="filter-heading">Filter</h2>
                <div class="category-main-first">
                    <p class="row-flex-jobs-j">
                        <span class="heading-filter-dj" id="filterHeading1">Job Roles</span>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </p>
                    <div class="category-filters" id="categoryDiv1">

                        <?php
                            // include('config.php');
                            $filter1 = "SELECT DISTINCT position FROM joblistings";
                            $f1_res = mysqli_query($conn, $filter1);
                            $count = mysqli_num_rows($f1_res);
                            if($count){
                                // echo '<script>alert("Inserted Successfully")</script>';
                                while($row = mysqli_fetch_assoc($f1_res)){
                                    ?>

                                    <div class="row-flex-jobs-j">
                                        <span>
                                            <input type="checkbox" class="c1" value="<?php echo $row['position']; ?>" id="type">
                                            <label for="type"><?php echo $row['position']; ?></label>
                                        </span>
                                        <p>24</p>
                                    </div>
                                    <?php
                                }
                            }
                            else{
                                echo '<script>alert("Insertion failed")</script>';
                            }
                        ?>
                    </div>
                </div>


                <div class="category-main-first">
                    <p class="row-flex-jobs-j">
                        <span class="heading-filter-dj" id="filterHeading2">Company name</span>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>

                    </p>
                    <div class="category-filters" id="categoryDiv2">
                    <?php
                            $filter2 = "SELECT DISTINCT company FROM joblistings";
                            $f2_res = mysqli_query($conn, $filter2);
                            $count = mysqli_num_rows($f2_res);
                            if($count){
                                // echo '<script>alert("Inserted Successfully")</script>';
                                while($row = mysqli_fetch_assoc($f2_res)){
                                    ?>

                                    <div class="row-flex-jobs-j">
                                        <span>
                                            <input type="checkbox" class="c1" value="<?php echo $row['company']; ?>" id="type">
                                            <label for="type"><?php echo $row['company']; ?></label>
                                        </span>
                                        <p>24</p>
                                    </div>

                                    <?php
                                }
                            }
                            else{
                                echo '<script>alert("Insertion failed")</script>';
                            }
                        ?>

                    </div>
                </div>
                <div class="category-main-first">
                    <p class="row-flex-jobs-j">
                        <span class="heading-filter-dj" id="filterHeading3">Package</span>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>

                    </p>
                    <div class="category-filters" id="categoryDiv3">
                    <?php
                            // include('config.php');
                            $filter3 = "SELECT DISTINCT package FROM joblistings";
                            $f3_res = mysqli_query($conn, $filter3);
                            $count = mysqli_num_rows($f3_res);
                            if($count){
                                // echo '<script>alert("Inserted Successfully")</script>';
                                while($row = mysqli_fetch_assoc($f3_res)){
                                    ?>

                                    <div class="row-flex-jobs-j">
                                        <span>
                                            <input type="checkbox" class="c1" value="<?php echo $row['package']; ?>" id="type">
                                            <label for="type"><?php echo $row['package']; ?></label>
                                        </span>
                                        <p>24</p>
                                    </div>

                                    <?php
                                }
                            }
                            else{
                                echo '<script>alert("Insertion failed")</script>';
                            }
                        ?>

                    </div>
                </div>
                <div class="category-main-first">
                    <p class="row-flex-jobs-j">
                        <span class="heading-filter-dj" id="filterHeading4">Location</span>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>

                    </p>
                    <div class="category-filters" id="categoryDiv4">
                    <?php
                            // include('config.php');
                            $filter4 = "SELECT DISTINCT country FROM joblistings";
                            $f4_res = mysqli_query($conn, $filter4);
                            $count = mysqli_num_rows($f4_res);
                            if($count){
                                // echo '<script>alert("Inserted Successfully")</script>';
                                while($row = mysqli_fetch_assoc($f4_res)){
                                    ?>

                                    <div class="row-flex-jobs-j">
                                        <span>
                                            <input type="checkbox" class="c1" value="<?php echo $row['country']; ?>" id="type">
                                            <label for="type"><?php echo $row['country']; ?></label>
                                        </span>
                                        <p>24</p>
                                    </div>

                                    <?php
                                }
                            }
                            else{
                                echo '<script>alert("Insertion failed")</script>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    const filterHeading1 = document.querySelector('#filterHeading1');
    const filterHeading2 = document.querySelector('#filterHeading2');
    const filterHeading3 = document.querySelector('#filterHeading3');
    const filterHeading4 = document.querySelector('#filterHeading4');
    const filterHeading5 = document.querySelector('#filterHeading5');
    const categoryDiv1 = document.querySelector('#categoryDiv1');
    const categoryDiv2 = document.querySelector('#categoryDiv2');
    const categoryDiv3 = document.querySelector('#categoryDiv3');
    const categoryDiv4 = document.querySelector('#categoryDiv4');
    const categoryDiv5 = document.querySelector('#categoryDiv5');

    filterHeading1.addEventListener('click',()=>{
        categoryDiv1.classList.toggle('active')
    })
    filterHeading2.addEventListener('click',()=>{
        categoryDiv2.classList.toggle('active')
    })
    filterHeading3.addEventListener('click',()=>{
        categoryDiv3.classList.toggle('active')
    })
    filterHeading4.addEventListener('click',()=>{
        categoryDiv4.classList.toggle('active')
    })

    function deleteChild(){
        var e = document.querySelector(".cards-section-container");

        //e.firstElementChild can be used.
        var child = e.lastElementChild;
        while (child) {
            e.removeChild(child);
            child = e.lastElementChild;
            }
            }
        // end of delete child


    function ajaxFilter(jsonUrl, data, multiCheckKey){
        $.ajax({
                url:jsonUrl,
                method:'post',
                data:{skey : data},  //php, java, or 10k,20k...
                dataType:'text',
                success:function(data)
                {
                    // clearing the previous cards
                    let checkcount = $('input[type="checkbox"]:checked').length;
                    let selectval = $("#select-box").val();
                    if(checkcount == 1 || selectval != "" || multiCheckKey == false){
                        //this part is for multicheck
                        deleteChild();
                    }
                    const obj = JSON.parse(data);
                    // window.alert(data);
                    for (let a of obj) {
                        var structure = [
                            '<div class="single-container-cards-DasboardJobs">',
                                '<a href="">',
                                '<img src="./'+ a.logo +'" width="130" height="130" style="margin: 25px" alt="">',
                                '<h3 class="job-headingnname">'+ a.position +'</h3>',
                                '<div class="row-flex-jobs-j companyname-and-salary">',
                                '<p>'+ a.company_name +'</p>',
                                '<p>'+ a.package +'/'+ a.package_type +'</p>',
                                '</div>',
                                '<p class="job-desc-dashboard-jobs">',
                                '' + a.job_description + '',
                                '</p>',
                                '<div class="skills-div row-flex-jobs-j">',
                                '<p>'+ a.skills_req +'</p>',
                                '</div>',
                                '<p class="date-created-jobsDashboard">'+ a.created_on +'</p>',
                                '</a>',
                            '</div>'
                        ];

                        $(structure.join('')).prependTo('.cards-section-container');
                    }
                }

            });
            // end of ajax
    }

    $("input:checkbox.c1").click(function() {   //here (.) represents class .c1
        if($(this).prop('checked')) {
            let value = $(this).val();
            multiCheckKey = true;
            ajaxFilter('posFilter.php', value, multiCheckKey);
        }else{
            $checkCount = $('input[type="checkbox"]:checked').length;  //checkbox checked count
            if($checkCount == 0){
                let value = '*';
                multiCheckKey = false;
                ajaxFilter('posFilter.php', value, multiCheckKey);
            }

        }
    });

    $(document).ready(function(){
        $("#select-box").on('change',function(){
            var value = $(this).val();
            multiCheckKey = true;

            ajaxFilter('select-box.php', value, multiCheckKey);
        });
    });
</script>
