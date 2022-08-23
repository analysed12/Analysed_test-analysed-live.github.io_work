


<?php

   include 'connection1.php';
   session_start();

?>

<?php include('include/header.php') ?>
<?php include('modal1.php')?>
<link rel="stylesheet" href="./css/mytasks.css">
<title>My Tasks</title>

<div class="container">
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">My Files</h1>
            <p class="mainParaDash">Manage Your Files</p>
        </div>
        <button class="addFilesMyTasks" id="myBtn">Add +</button>

        <div class="cards_myTasks">
            <div class="cardItem_myTasks1">
                <p>
                    <span class="memoryUsed_myTasks">30MB/100GB Used</span>
                    <span class="avaiSpace_myTasks">Available space</span>
                </p>
               <div class="disk-usage"> <meter id="disk_d" value="0.3">30%</meter></div>
            </div>
            <div class="cardItem_myTasks">
                <i class="fa fa-file-image-o yellowIcon_myTasks" aria-hidden="true" ></i>
                <span class="centered_span_myTasks">367KB</span>
                <h4 class="headingInCard_myTasks">13</h4>
            </div>
            <div class="cardItem_myTasks">
                <i class="fa fa-file-code-o purpleIcon_myTasks" aria-hidden="true"></i>
                <span class="centered_span_myTasks">367KB</span>
                <h4 class="headingInCard_myTasks">13</h4>
            </div>
            <div class="cardItem_myTasks">
                <i class="fa fa-file-excel-o greenIcon_myTasks" aria-hidden="true"></i>
                <span class="centered_span_myTasks">367KB</span>
                <h4 class="headingInCard_myTasks">13</h4>
            </div>
        </div>
        <div class="filterSection_myTasks">
            <div class="leftFilter_myTasks">
                <select>
                    <option value="none" selected disabled hidden>File type</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
                <input type="text" name="FileName_myTasks" placeholder="Search Your File" class="inputSearchFileName_myTasks">
                <button class="searchButton_myTasks"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
            <div class="rightFilter_myTasks">
                <span class="sortByMyTasks">Sort By: </span><span class="recentMyTasks">Recent</span>
                <select name="" id="" class="sortFilter_myTasks">
                    <option value="0">Last Edited ∨</option>
                    <option value="1">Sort A-Z</option>
                    <option value="2">Sort Z-A</option>
                </select>
            </div>
        </div>
        <div class="filterSmall_myTasks">
            <select name="" id="">
                <option value="0">All </option>
                <option value="1">Sample</option>
                <option value="2">Sample</option>
                <option value="3">Sample</option>
            </select>
            <div class="selectAllActions_filterSmall_myTasks">
                <input type="checkbox" name="checkboxSelectAll_myTasks" id="checkboxSelectAll_myTasks">
                <label for="checkboxSelectAll_myTasks">Select All</label>
                <select name="Select action" id="">
                    <option value="0">Delete</option>
                    <option value="1">Copy</option>
                    <option value="2">Cut</option>
                </select>
            </div>
        </div>
        <div class="singleTasks_containerDiv">
          <?php
                      $sql= "select * from files";
                      $run = mysqli_query($conn,$sql);
                      $i= 1;

                      while($row =mysqli_fetch_assoc($run)) {
                      ?>

            <div class="singletask_myTasks">
                <input type="checkbox" name="checkBoxItem" >
                <span>
                    <p class="light_spanItem_singleTask_myTasks">Added on</p>
                    <p><?php echo $row['added_on']; ?></p>
                </span>
                <span>
                    <p style="color:#297FB8;margin-bottom:5px;"><?php echo $row['files']; ?></p>
                    <p><?php echo $row['kb']; ?> kb</p>
                </span>
                <span>
                    <p class="light_spanItem_singleTask_myTasks">Type of Doc</p>
                    <p><?php echo $row['file_type']; ?></p>
                </span>
                <span>
                    <p><img src="img/Prof-1.png" height="50px" width="50px"></p>
                </span>
                <span style="margin-right:30px">
                    <p class="light_spanItem_singleTask_myTasks">Candidate name</p>
                    <p class="j1"><b><?php echo $row["firstname"]; ?></b></p>
                </span>
                 <div class="button-div_myTasks">
                    <button style="font-size:14px;color:#EC4551"><a href='./include/delete_files.php?id=<?php echo $row["file_id"] ?>' onclick='checkdelete()' style="color:red;text-decoration:none">Delete <i class="fa fa-trash" aria-hidden="true"></i></a></button><br><br>
                    <button style="color:#3598DB"><a style="color:#3598DB;text-decoration:none" href="img/<?php echo $row["files"]; ?>" download>Download <i class="fa fa-file" aria-hidden="true"></i></a></button>
                </div>
            </div>

          <?php } ?>

        </div>
    </div>
</div>
<script src="./js/modal1.js"></script>
