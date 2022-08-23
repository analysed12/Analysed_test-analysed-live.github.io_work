<?php

   include 'connection1.php';
   session_start();
?>
<title>Dashboard</title>
<link rel="stylesheet" href="./css/Candidates_specific.css">
<link rel="stylesheet" href="./css/candidate_list_remo.css">

<body>
    <?php include('header.php') ?>
    <form action="" method="post">
        <div class="container container-adjust">
            <div class="small_container">
                <div class="bread-crumbs_Mytools-recruiter">
                    <a href="dashboard.php" class="active-breadcrumb-link"><u>Dashboard</u></a> > <a
                        href="candidate_list.php" class="active-breadcrumb-link"><u>My Database</u></a>
                </div>
                <div class="database">
                    My Database<br><br>
                    <span>View and manage your candidates</span>
                </div>
                <div class="search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" fill="#3598DB"
                        class="bi bi-eye-fill" viewBox="0 0 16 16"><a href="#" class="toggle-button">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                            <path
                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                        </a>
                    </svg>
                    <span id="m1">All Status&nbsp;&nbsp;|</span>
                    <input type="text" name="searchCandidatesNames" id="inputSearch_12" class="searchForJobs-cal svg1"
                        placeholder="Search by candidate name " />
                    <button class="searchButton-cal">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <div class="add">
                    <button class="btn" id="myBtn"><a style="color:white" href="addCandidates1.php">Add +</a></button>
                </div>

                <div class="sort">
                    <span style="color:#979797">Sort by &emsp;</span><span style="color:#3598DB">Experience
                        &emsp;</span>
                    <span>
                        <select name="Experience" id="cars">
                            <option value="volvo">Last edited</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select></span>
                </div>
                <div class="radio">
                    <span style="color:#3598DB"><input type="check-box"> Select all &emsp;
                        <select name="action" id="cars">
                            <option value="volvo">Select action</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select></span>
                </div>

                <div class="navbar">
                    <div class="navbar-links">
                        <div class="qual">
                            <p>Qualification</p>

                            <select name="qualification" id="cars">
                                <option value=""> Required qualification</option>
                                <option value="MSc">MSc</option>
                                <option value="BSc">BSc</option>
                                <option value="B.Com">B.Com</option>
                            </select>
                        </div><br>
                        <div class="qual1">
                            <p>Minimum years of experience</p>

                            <input name="experience" type="text" placeholder="Enter number">

                        </div><br>
                        <div class="qual2">
                            <p>Country</p>

                            <select name="country" id="cars">
                                <option value=""> Select country</option>
                                <option value="India">India</option>
                                <option value="Australia">Australia</option>
                                <option value="Japan">Japan</option>
                            </select>
                        </div><br>
                        <div class="qual3">
                            <p>State</p>

                            <select name="state" id="cars">
                                <option value="volvo"> Select state</option>
                                <option value="karnataka">karnataka</option>
                                <option value="UP">UP</option>
                                <option value="Maharastra">Maharastra</option>
                            </select>
                        </div><br>
                        <div class="qual4">
                            <p>City</p>

                            <select name="cityname" id="cars">
                                <option value=""> Select city</option>
                                <option value="Kolkata">Kolkata</option>
                                <option value="Berlin">Berlin</option>
                                <option value="London">London</option>
                            </select>
                        </div>
                        <button class="btn1"><a href="#">Apply</a></button>
                    </div>
                </div>

                <input type="submit" name="filter" id="btn-filter" class="default-button-for-recruiter-dashboard"
                    value="filter">

                <div class="cont">

                    <?php
     $flag=0;
     if((isset($_POST['searchCandidatesNames'])) OR (isset($_POST['filter'])))   //condition to find set of variable of search and Filters
     {
       // code block to search according to given clauses
      $candidate_id = $_POST['candidate_id'];
       $qualification = $_POST['qualification'];
       $ownership = $_POST['country'];
       $State = $_POST['state'];
       $cityname = $_POST['cityname'];
       $search = $_POST['searchCandidatesNames'];
       $search = preg_replace("#[^0-9a-z]#i","",$search);
       $sql="SELECT * FROM `candidates` WHERE firstname='$search' OR lastname= '$search' OR qualifications='$qualification' OR country= '$ownership' OR state = '$State' OR city_name ='$cityname'";
       $flag=1;
     }

     if($flag == 0)
     {
       // code block for all data to be displayed if there are no clauses
         $sql="select * from candidates ";
     }
        // query to establish connection from database and get the output of required query
       $res=mysqli_query($conn,$sql);
       if($res == TRUE)
       {
          // getting no of rows from table and assigning it to a variable. If this is more than 0 then all rows will be printed
           $count=mysqli_num_rows($res);
           if($count > 0)
           {

             // displaying all the data from the table
               while($row=mysqli_fetch_assoc($res))
               {

            ?>
                    <a style="text-decoration:none"
                        href="Candidates_specific.php?c_id=<?php echo $row['candidate_id']; ?>">
                        <div class="list">
                            <input type="checkbox">
                            <div class="added added-time"><span
                                    style="color:979797"><?php echo $row['last_updated'] ; ?></span>
                                <br><?php echo $row['candidate_id']; ?>
                            </div>
                            <img src="../img/<?php echo $row['image']; ?>" width="70" height="70" alt="">

                            <div class="uploaded">
                                Uploaded by<br>
                                <div class="fname"> <?php echo $row['firstname']; ?></div>
                            </div>
                            <div class="added1"><span
                                    style="color:979797"><?php echo $row['company_name'] ; ?></span><br><span
                                    style="color:black"><?php echo $row['current_title'];?></span></div>
                            <div class="added2"><span style="color:979797">Status</span><br><?php echo $row['status'];?>
                            </div>
                            <p class="peek"><a
                                    href="edit-Candidates1.php?edit_Candidates=<?php echo $row['candidate_id'];?>"> Peek
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                        fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg></p>
                            <p class="less">Show less</p>
                        </div>
                    </a>
                    <?php }}} ?>

                </div>

            </div>
        </div>
    </form>


    <script type="text/javascript">
    const toggleButton = document.getElementsByClassName('toggle-button')[0]
    const navbarLinks = document.getElementsByClassName('navbar-links')[0]
    toggleButton.addEventListener('click', () => {
        navbarLinks.classList.toggle('active')
    })

    $(".less").toggle(function() {
        $(this).text("Show less").siblings(".added").show();
    }, function() {
        $(this).text("Show more").siblings(".added").hide();
    });
    </script>
</body>