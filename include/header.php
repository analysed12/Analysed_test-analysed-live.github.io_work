<?php 
       include('db.php'); ?>
         <?php include('connection1.php'); ?>

<link rel="stylesheet" href="./css/index.css">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<nav class="sidebar_main">
      <ul class="sidebar_main-list">
        <li class="sidebar_main-listItems">
          <a href="#" class="sidebar_main-listlinks">
            <img src="./img/Menu.png" class="menuForSidebar"/>
          </a>
        </li>
        <li class="sidebar_main-listItems">
          <a href="js_dashboard.php" class="sidebar_main-listlinks">
            <img src="./img/nav-ele-1.png" />
          </a>
        </li>
        <li class="sidebar_main-listItems">
          <a href="mytasks1.php" class="sidebar_main-listlinks">
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
          <a href="js_schedule.php" class="sidebar_main-listlinks">
            <img src="./img/nav-ele-5.png" />
          </a>
        </li>
        <li class="sidebar_main-listItems">
          <a href="mytasks.php" class="sidebar_main-listlinks">
            <img src="./img/nav-ele-6.png" />
          </a>
        </li>
        <li class="sidebar_main-listItems">
          <a href="js_message.php" class="sidebar_main-listlinks">
            <img src="./img/nav-ele-7.png" />
          </a>
        </li>
        <li class="sidebar_main-listItems">
          <a href="complaint_tickets.php" class="sidebar_main-listlinks">
            <img src="./img/nav-ele-8.png" />
          </a>
        </li>
        <li class="sidebar_main-listItems">
          <a href="referrals.php" class="sidebar_main-listlinks">
            <img src="./img/nav-ele-9.png" />
          </a>
        </li>
      </ul>
</nav>
<div class="container">
    <img src="./img/hamburger-menu-icon.svg" alt="" class="hamburger">
      <nav class="nav_main">
        <h2 class="logo_heading">Analysed</h2>
       <form action="./search1_js.php" method="GET">
            <div class="input-field">
                <input type="text" name="searchForJobs" value="<?php if(isset($_GET['searchForJobs'])){echo $_GET['searchForJobs'];} ?>" id="inputSearch" class="searchForJobs" placeholder="Search for Jobs" />
                <button class="searchButton" id="searchBtn">
                    <img src="./img/search-icon-blue.png" />
                </button>
            </div></form>
        <div class="profileInNav">
        <div class="notificationsDiv">
        <ul>
        <li>
          <a href="#">
            <div><h3>Eric Hogwarts</h3> <span>23 Mins Ago</span></div>
            This is a sample email
          </a>
        </li>
        <li>
          <a href="#">
            <div><h3>Eric Hogwarts</h3> <span>23 Mins Ago</span></div>
            This is a sample email
          </a>
        </li>
        <li>
          <a href="#">
            <div><h3>Eric Hogwarts</h3> <span>23 Mins Ago</span></div>
            This is a sample email
          </a>
        </li>
        <li>
          <a href="#">
            <div><h3>Eric Hogwarts</h3> <span>23 Mins Ago</span></div>
            This is a sample email
          </a>
        </li>
        <li>
          <a href="#">
            <div><h3>Eric Hogwarts</h3> <span>23 Mins Ago</span></div>
            This is a sample email
          </a>
        </li>
      </ul>
        </div>
          <img
            src="./img/mail-icon-blue.png"
            alt=""
            class="notificationProfileInNav"
          />
          <img
            src="./img/notif-icon-blue.png"
            alt=""
            class="notificationProfileInNavNoti"
          />
          <section class="profileInfoInNav">
            <img src="./img/Profile-pic.png" alt="" class="profilePicInNav" />
            <span class="nameInNav">John Doe</span>
            <a href="#" class="dropDownMenu_nav">
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
            <div class="dropDownDiv_nav">
              <ul>
                <li>
                <a style="text-decoration:none" href="profile_js.php">
                  Profile</a>
                </li>
                <li>
                   <a href="logout_js.php" style="color: #51C46D">Logout</a>
                </li>
              </ul>
            </div>
          </section>
        </div>
      </nav>
</div>
<script src="./js/index.js"></script>
