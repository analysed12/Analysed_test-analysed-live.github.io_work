<?php include('header.php') ?>
<title>Dashboard</title>
<link rel="stylesheet" href="./css/client_list1_remov.css">

<body>
    <div class="container">
        <div class="small_container">
            <div class="bread-crumbs_Mytools-recruiter">
                <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href=""
                    class="unactive-breadcrumb-link">My Database</a> > <a href="" class="active-breadcrumb-link">Client
                    List</a>
            </div>
            <div class="heading_dash">
                <h1 class="mainHeadingDash">My Clients</h1>
                <p class="mainParaDash">View and manage your clients</p>
            </div>
            <div class="row-flex-jobs-j alignitemsstart-shortlisted Dashboard-main-container">
                <div class="left-side-container-DashboardJ">
                    <div class="category-main-first" style="display: flex">
                        <div class="col-sm" style="width:110px;margin-right: 70px;">
                            <label for="job" class="label-applied-candidates-1">Jobs</label>
                            <input type="text" id="jobs" placeholder="Enter digit" class="input-applied-candidates">
                        </div>
                        <div class="col-sm" style="width:110px">
                            <label for="contacts" class="label-applied-candidates-1">Contacts</label>
                            <input type="text" id="contacts" placeholder="Enter digit" class="input-applied-candidates">
                        </div>
                    </div>
                    <div class="category-main-first">
                        <label for="country" class="label-applied-candidates-1">Country</label>
                        <select name="country" id="country" class="input-applied-candidates">
                            <option value="0" default>Select country</option>
                            <option value="1">India</option>
                            <option value="2">America</option>
                        </select>
                    </div>
                    <div class="category-main-first">
                        <label for="state" class="label-applied-candidates-1">State</label>
                        <select name="state" id="state" class="input-applied-candidates">
                            <option value="0" default>Select state</option>
                            <option value="1">Tamil Nadu</option>
                            <option value="2">Kerala</option>
                        </select>
                    </div>
                    <div class="category-main-first">
                        <label for="City" class="label-applied-candidates-1">City</label>
                        <select name="city" id="city" class="input-applied-candidates">
                            <option value="0" default>Select city</option>
                            <option value="1">Chennai</option>
                            <option value="2">Coimbatore</option>
                        </select>
                    </div>
                    <div class="category-main-first" style="display: flex">
                        <div class="col-sm" style="width:110px;margin-right: 70px;">
                            <label for="P.Fee" class="label-applied-candidates-1">P.Fee</label>
                            <input type="text" id="fee" placeholder="Enter %" class="input-applied-candidates">
                        </div>
                        <div class="col-sm" style="width:110px">
                            <label for="C.Fee" class="label-applied-candidates-1">C.Fee</label>
                            <input type="text" id="fee" placeholder="Enter %" class="input-applied-candidates">
                        </div>
                    </div>
                </div>


                <div class="right-side-container-DashboardJ">
                    <span class="row-recruiter upcoming_interview_top_span">
                        <div class="search-box">
                            <details id="dropdown" class="dropdown">
                                <summary class="dropdown-button">
                                    <span id="selected-item" class="selected-item"> <i class="fa fa-eye"></i> All
                                        Status</span>
                                </summary>
                                <details-menu class="dropdown-menu">
                                    <div class="dropdown-menu-list">
                                        <label class="dropdown-menu-item">
                                            <input type="radio" name="item" value="1">
                                            <span>1</span>
                                        </label>
                                        <label class="dropdown-menu-item">
                                            <input type="radio" name="item" value="2">
                                            <span>2</span>
                                        </label>
                                        <label class="dropdown-menu-item">
                                            <input type="radio" name="item" value="3">
                                            <span>3</span>
                                        </label>
                                        <label class="dropdown-menu-item">
                                            <input type="radio" name="item" value="4">
                                            <span>4</span>
                                        </label>
                                    </div>
                                </details-menu>
                            </details>
                            <input class="search-form-input" type="search" name="search" placeholder="Search for users">
                            <button class="searchButton">
                                <img src="./img/search-icon-blue.png" />
                            </button>
                        </div>
                        <button class="btn" id="myBtn" type="button">Add +</button>
                    </span>
                    <div class="row-flex-jobj justifycontent-flex-end-1">
                        <p class="sortbyText">Sort by :
                            <select name="multi_search" id="multi_search" class="sortbySelect" style="color:#8BD0FF;">
                                <option>Recent</option>
                                <option value="Recent">All</option>
                                <option value="Old">Old</option>
                            </select>
                            <select id="multi_search" class="search_list">
                                <option value="" default class="search_list_option">Jobs</option>
                                <option value="1" class="search_list_option">1</option>
                                <option value="2" class="search_list_option">2</option>
                                <option value="3" class="search_list_option">3</option>
                            </select>
                        </p>
                    </div>

                    <div class="row-recruiter filter-div" style="float:right;margin-right: 1%;">
                        <div class="col-sm" style="margin-bottom: 30px;margin-top: -10px;">
                            <input type="checkbox" id="c" name="cb">
                            <label for="c" style="color:#3598DB;margin-right: 30px;"> Select all</label>
                        </div>
                        <select id="multi_search" class="search_list_1">
                            <option value="" default>Select action</option>
                            <option value="1"></option>
                            <option value="2"></option>
                            <option value="3"></option>
                        </select>
                    </div>

                    <div class="row" style="margin-top: 50px;">
                        <div class="column">
                            <input type="checkbox" id="c1" class="checkbox">
                            <label for="c1"></label>
                        </div>
                        <div class="column">
                            <p class="col-1">05-05-2020</p>
                            <span class="col-span-1">#CL13069</span>
                        </div>
                        <div class="column">
                            <img src="./img/Ellipse -4.png" class="img">
                        </div>
                        <div class="column">
                            <p class="col-2">Fox Hunt</p>
                            <span class="col-span-2">support@foxhunt.com</span>
                        </div>
                        <div class="column">
                            <p class="col-3"><i class="fa fa-briefcase" aria-hidden="true"></i> 4 Jobs</p>
                            <span class="col-span-3"><i class="fa fa-map-marker" aria-hidden="true"></i> London</span>
                        </div>
                        <div class="column">
                            <p class="col-4">Contacts</p>
                            <span class="col-span-4">5</span>
                        </div>
                        <div class="column">
                            <p class="col-5">Status</p>
                            <span class="col-span-5-live">Live</span>
                        </div>
                        <div class="column">
                            <p class="col-span-6">Peek <i class="fa fa-eye" aria-hidden="true"></i></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="column">
                            <input type="checkbox" id="c1" class="checkbox">
                            <label for="c1"></label>
                        </div>
                        <div class="column">
                            <p class="col-1">05-05-2020</p>
                            <span class="col-span-1">#CL13069</span>
                        </div>
                        <div class="column">
                            <img src="./img/Ellipse -4.png" class="img">
                        </div>
                        <div class="column">
                            <p class="col-2">Fox Hunt</p>
                            <span class="col-span-2">support@foxhunt.com</span>
                        </div>
                        <div class="column">
                            <p class="col-3"><i class="fa fa-briefcase" aria-hidden="true"></i> 4 Jobs</p>
                            <span class="col-span-3"><i class="fa fa-map-marker" aria-hidden="true"></i> London</span>
                        </div>
                        <div class="column">
                            <p class="col-4">Contacts</p>
                            <span class="col-span-4">5</span>
                        </div>
                        <div class="column">
                            <p class="col-5">Status</p>
                            <span class="col-span-5-inactive">Inactive</span>
                        </div>
                        <div class="column">
                            <p class="col-span-6">Peek <i class="fa fa-eye" aria-hidden="true"></i></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="column">
                            <input type="checkbox" id="c1" class="checkbox">
                            <label for="c1"></label>
                        </div>
                        <div class="column">
                            <p class="col-1">05-05-2020</p>
                            <span class="col-span-1">#CL13069</span>
                        </div>
                        <div class="column">
                            <img src="./img/Ellipse -4.png" class="img">
                        </div>
                        <div class="column">
                            <p class="col-2">Fox Hunt</p>
                            <span class="col-span-2">support@foxhunt.com</span>
                        </div>
                        <div class="column">
                            <p class="col-3"><i class="fa fa-briefcase" aria-hidden="true"></i> 4 Jobs</p>
                            <span class="col-span-3"><i class="fa fa-map-marker" aria-hidden="true"></i> London</span>
                        </div>
                        <div class="column">
                            <p class="col-4">Contacts</p>
                            <span class="col-span-4">5</span>
                        </div>
                        <div class="column">
                            <p class="col-5">Status</p>
                            <span class="col-span-5-Standby">Standby</span>
                        </div>
                        <div class="column">
                            <p class="col-span-6">Peek <i class="fa fa-eye" aria-hidden="true"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

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