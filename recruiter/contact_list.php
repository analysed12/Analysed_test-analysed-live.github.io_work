<?php

   include 'connection1.php';
   session_start();
?>
<?php include('header.php') ?>
<title>Dashboard</title>
<link rel="stylesheet" href="./css/contact_list_remove.css">
<!-- <link rel="stylesheet" href="./css/header1.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body>
    <br>
    <div class="main_body">
        <div class="head_txt">
            My Contact
        </div>
        <form action="" method="post">
            <div>
                <a href="#" class="sub_11">Create new contact and manage old ones</a>
                <button class="addFilesMyTasks1"><a style="text-decoration: none; color: white;"
                        href="addContact.php">Add + </a></button>
            </div>

            <div class="container" style="margin-left:-2%;">
                <div class="row">
                    <div class="col-7">
                        <div class="input-field1">
                            <img src="img/person.png" alt="" height="25px" width="25px" class="box_1"><span
                                id="m1">Company | &nbsp;</span>
                            <input type="text" name="searchForNames" id="inputSearch_12"
                                class="searchForJobs searchforjobs1" placeholder="Search by name " />
                            <button class="searchButton">
                                <img src="img/search-icon-blue.png" width="15" height="15" style="font:right" />
                            </button>
                        </div>
                    </div>
                    <div class="col-5">
                        <span class="sortByMyTasks">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Sort By:
                        </span>
                        <span class="recentMyTasks"><a href="/" class="active-breadcrumb-link">Recent </a></span>
                        <span class="sortByMyTasks" style="color:black">Last Edited &nbsp;<img src="img/dropdown.png"
                                width="15" height="10" style="font:right" /></span>
                    </div>
                </div><br>
            </div>

            <div class="singleTasks_containerDiv">
                <div class="row singleTask_alldiv">
                    <?php

                           // if(isset($_POST['searchForNames'])){

                            // $search = $_POST['searchForNames'];
                            // $search = preg_replace("#[^0-9a-z]#i","",$search);

                            $sql= "select * from contacts  ";

                            $run = mysqli_query($conn,$sql);
                            $i= 1;

                            while($row =mysqli_fetch_assoc($run)) {
                            ?>
                    <a style="text-decoration:none" href="contact_specific-1.php?c_id=<?php echo $row['contact_id'] ?>">
                        <div class="singletask_myTasks">
                            <input type="checkbox" name="checkBoxItem" style="border: 1px solid #3598db;">
                            <img src="../img/<?php echo $row['picture'];?>" width="65" height="65">
                            <span class="singletask-span-1">
                                <p id="k1"><?php echo $row['fname'] ; ?></p>
                                <p id="k2"><?php echo $row['company_name'];?></p>
                            </span>
                            &emsp;&emsp;&emsp;&emsp;&emsp;
                            <span class="singletask-span-2">
                                <p class="sub_1"><?php echo $row['job_title'];?></p>
                                <p id="k2"><?php echo $row['company'];?></p>
                            </span>&emsp;
                            <span class="singletask-span-3">
                                <p class="sub_1 singletask-span-phone"><?php echo $row['phone'];?></p>
                                <p class="sub_1 singletask-span-email" style="line-height: 0.5;">
                                    <?php echo $row['email'];?></p>
                            </span>&emsp;&emsp;
                            <span style="color:#979797" class="singletask-span-4">
                                <p id="k2 singletask-span-add">Added on
                                    <span style="color:#333333"><?php echo $row['added_on'];?></span>
                                </p>
                                <div class="singletask-span-location">
                                    <img src="img/location-pin.png" width="15" height="16"><?php echo $row['city'];?>
                                </div>
                            </span>&emsp;&emsp;
                            <span class="singletask-span-5">
                                <div class="button-div_myTasks">
                                    <p style="color:#3598DB">&nbsp;Edit <i class="fa fa-edit" aria-hidden="true"></i>
                                        <span style="font-size:14px;color:#EC4551">&emsp;&emsp;&emsp;&emsp;&emsp;Delete
                                            <i class="fa fa-trash" aria-hidden="true"></i></span>
                                    </p>
                                </div>
                            </span>

                        </div>
                    </a>

                    <?php } ?>


                    <!--    <?php

                    /*         if(!isset($_POST['searchForNames'])){

                                $sql= "select * from contacts ";
                                $run = mysqli_query($conn,$sql);
                                $i= 1;

                                 while($row =mysqli_fetch_assoc($run)) {
                            // code...


                        ?>       
<a style="text-decoration:none" href="contact_specific-1.php?c_id=<?php echo $contact_id ?>">
 <div class="singletask_myTasks">
                <input type="checkbox" name="checkBoxItem" style="border: 1px solid #3598db;" >
                <img src="img/<?php echo $row['picture'];?>" width="65" height="65">
                <span >
                    <p id="k1"><?php echo $row['fname'] ; ?></p>
                    <p id="k2"><?php echo $row['company_name'];?></p>
                </span>
                &emsp;&emsp;&emsp;&emsp;&emsp;
                <span >
                    <p class="sub_1"><?php echo $row['job_title'];?></p>
                    <p id="k2"><?php echo $row['company'];?></p>
                </span>&emsp;
                <span >
                    <p class="sub_1"><?php echo $row['phone'];?></p>
                    <p class="sub_1" style="line-height: 0.5;"><?php echo $row['email'];?></p>
                </span>&emsp;&emsp;
                <span style="color:#979797">
                    <img src="img/location-pin.png" width="15" height="16"><?php echo $row['city'];?>
                </span>&emsp;&emsp;
                <span>
                    <p id="k2">Added on
                    <span style="color:#333333"><?php echo $row['added_on'];?></span></o>  */
                    // <div class="button-div_myTasks">
                        // <p style="color:#3598DB">&nbsp;Edit <i class="fa fa-edit" aria-hidden="true"></i>
                        // <span style="font-size:14px;color:#EC4551">&emsp;&emsp;&emsp;&emsp;&emsp;Delete <i class="fa fa-trash" aria-hidden="true"></i></span></p>
                    // </div>
                // </span>

    // </div>  
    // </a>          
            // <?php }} ?> -->
                </div>
        </form>
    </div>

    </div>
    <!-- </a> -->
    <br><br>
    </div>