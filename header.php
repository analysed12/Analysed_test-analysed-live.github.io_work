<?php
   include 'conn.php';
   // session_start();
?>
<link rel="stylesheet" href="./css/index_js_remove.css">
<link rel="stylesheet" href="./css/Candidates_specific.css">
<link rel="stylesheet" href="./css/candidate_list.css">
<link rel="stylesheet" href="css/contact_list.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<nav class="sidebar_main">
    <ul class="sidebar_main-list">
        <li class="sidebar_main-listItems">
            <a href="#" class="sidebar_main-listlinks">
                <img src="./img/Menu.png" class="menuForSidebar" />
            </a>
        </li>
        <li class="sidebar_main-listItems">
            <a href="#" class="sidebar_main-listlinks">
                <img src="./img/nav-ele-1.png" />
            </a>
        </li>
        <li class="sidebar_main-listItems">
            <a href="#" class="sidebar_main-listlinks">
                <img src="./img/nav-ele-2.png" />
            </a>
        </li>
        <li class="sidebar_main-listItems">
            <a href="#" class="sidebar_main-listlinks">
                <img src="./img/nav-ele-3.png" />
            </a>
        </li>
        <li class="sidebar_main-listItems">
            <a href="#" class="sidebar_main-listlinks">
                <img src="./img/nav-ele-4.png" />
            </a>
        </li>
        <li class="sidebar_main-listItems">
            <a href="#" class="sidebar_main-listlinks">
                <img src="./img/nav-ele-5.png" />
            </a>
        </li>
        <li class="sidebar_main-listItems">
            <a href="#" class="sidebar_main-listlinks">
                <img src="./img/nav-ele-6.png" />
            </a>
        </li>
        <li class="sidebar_main-listItems">
            <a href="#" class="sidebar_main-listlinks">
                <img src="./img/nav-ele-7.png" />
            </a>
        </li>
        <li class="sidebar_main-listItems">
            <a href="#" class="sidebar_main-listlinks">
                <img src="./img/nav-ele-8.png" />
            </a>
        </li>
        <li class="sidebar_main-listItems">
            <a href="#" class="sidebar_main-listlinks">
                <img src="./img/nav-ele-9.png" />
            </a>
        </li>
    </ul>
</nav>
<div class="container">
    <img src="./img/hamburger-menu-icon.svg" alt="" class="hamburger">
    <nav class="nav_main">
        <h2 class="logo_heading">Analysed</h2>
        <form action="" method="post">
            <div class="input-field">
                <input type="text" name="searchForJobs" id="inputSearch" class="searchForJobs"
                    placeholder="Search for Jobs" />
                <button class="searchButton">
                    <img src="./img/search-icon-blue.png" />
                </button>
            </div>
        </form>

        <div class="profileInNav">
            <div class="notificationsDiv">
                <ul>
                    <li>
                        <?php
                            // contact_list
                           if(isset($_POST['searchForJobs'])){

                            $search = $_POST['searchForJobs'];
                            $search = preg_replace("#[^0-9a-z]#i","",$search);

                            $sql= "select * from addcontact WHERE fname like '%$search%' OR lname like '%$search%' ";

                            $run = mysqli_query($con,$sql);
                            $i= 1;

                            while($row =mysqli_fetch_assoc($run)) {
                            ?>


                        <div class="singletask_myTasks">
                            <input type="checkbox" name="checkBoxItem" style="border: 1px solid #3598db;">
                            <img src="upload/<?php echo $row['image']; ?>" width="65" height="65">
                            <span>
                                <p id="k1"><?php echo $row['fname'] ; ?></p>
                                <p id="k2">Company Name</p>
                            </span>
                            &emsp;&emsp;&emsp;&emsp;&emsp;
                            <span>
                                <p class="sub_1"><?php echo $row['job_title'] ; ?></p>
                                <p id="k2"><?php echo $row['company_name'];?></p>
                            </span>&emsp;
                            <span>
                                <p class="sub_1"><?php echo $row['phone'];?></p>
                                <p class="sub_1" style="line-height: 0.5;"><?php echo $row['email'];?></p>
                            </span>&emsp;&emsp;
                            <span style="color:#979797">
                                <p><img src="img/location-pin.png" width="15" height="16"><?php echo $row['city'];?></p>
                            </span>&emsp;&emsp;
                            <span>
                                <p id="k2">Added on
                                    <span style="color:#333333"> 05-05-2020</span></o>
                                <div class="button-div_myTasks">
                                    <p style="color:#3598DB">&nbsp;Edit <i class="fa fa-edit" aria-hidden="true"></i>
                                        <span style="font-size:14px;color:#EC4551">&emsp;&emsp;&emsp;&emsp;&emsp;Delete
                                            <i class="fa fa-trash" aria-hidden="true"></i></span>
                                    </p>
                                </div>
                            </span>

                        </div>

                        <?php }} ?>

                    </li>


                    <li>
                        <?php
              // candidates_list
             //checking for the condition to meet
             if(isset($_POST['searchForJobs'])){

                                 //if the condition is met assingnig value of search to variable

                                 $search = $_POST['searchForJobs'];
                                 $search = preg_replace("#[^0-9a-z]#i","",$search);

                                 //sql query to check all the rows with required value
                                 $sql= "select * from candidates WHERE firstname like '%$search%' OR lastname like '%$search%' ";

                                     $run = mysqli_query($con,$sql);
                                     $i= 1;

                             //printing values of all the rows with required parameter
                             while($row =mysqli_fetch_assoc($run)) {
                             ?>
                        <div class="list">
                            <input type="checkbox">
                            <div class="added"><span style="color:979797">05-05-2020</span> <br>#JB13069</div>
                            <img src="upload/<?php echo $row['image']; ?>" width="70" height="70" alt="">

                            <div class="uploaded">Uploaded by<br>
                                <?php echo $row['firstname']; ?></div>
                            <div class="added1"><span
                                    style="color:979797"><?php echo $row['companyName'] ; ?></span><br><?php echo $row['currentTitle'];?>
                            </div><br>
                            <div class="added2"><span
                                    style="color:979797">Status</span><br><?php echo $row['Industry'] ; ?></div>
                            <p href="#"> Peek <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                    fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg></p>
                        </div>
                        <?php }} ?>
                    </li>



                </ul>
            </div>

            <img src="./img/mail-icon-blue.png" alt="" class="notificationProfileInNav" />
            <img src="./img/notif-icon-blue.png" alt="" class="notificationProfileInNavNoti" />
            <section class="profileInfoInNav">
                <img src="./img/Profile-pic.png" alt="" class="profilePicInNav" />
                <span class="nameInNav">John Doe</span>
                <a href="#" class="dropDownMenu_nav">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <div class="dropDownDiv_nav">
                    <ul>
                        <li>
                            <a href="profile.php">Profile</a>
                        </li>
                        <li>
                            <a href="#" style="color: #51C46D">Logout</a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </nav>
</div>
<script src="./js/index.js"></script>