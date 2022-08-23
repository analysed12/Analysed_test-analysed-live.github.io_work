<?php include('connection1.php'); ?>
<?php include('header.php') ?>
<link rel="stylesheet" href="css/my_files_remove.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>My Files</title>

<div class="main_body">
    <div class="heading_dash">
        <h1 class="head_txt">My files</h1><br>
        <p class="sub_txt">Manage Your Files<button class="addFilesMyTasks" id="myBtn">Add +</button></p>
    </div>

    <div class="cards_myTasks">
        <div class="cardItem_myTasks" id="cmt1">
            <p class="memoryUsed_myTasks">30MB/100GB <span class="v1"> Used&emsp;&emsp;&emsp;&emsp;&emsp; Available
                    space</span><br><br>
                <progress value="7" max="20"></progress>
            </p>
        </div>
        <div class="cardItem_myTasks" id="cmt2">
            <img src="img/Icon material-image.png">
            <span class="centered_span_myTasks">367KB</span>
            <?php
                $total_rows = mysqli_query($conn,"SELECT * FROM files where kb='367'");
                $num = mysqli_num_rows($total_rows);
                ?>
            <h4 class="headingInCard_myTasks"><?php echo htmlentities($num); ?></h4>
        </div>
        <div class="cardItem_myTasks" id="cmt3">
            <img src="img/Icon awesome-file-pdf.png">
            <span class="centered_span_myTasks">110KB</span>
            <?php
                $total_rows = mysqli_query($conn,"SELECT * FROM files where kb='110'");
                $num = mysqli_num_rows($total_rows);
                ?>
            <h4 class="headingInCard_myTasks"><?php echo htmlentities($num); ?></h4>
        </div>
        <div class="cardItem_myTasks" id="cmt4">
            <img src="img/Icon awesome-file-alt.png">
            <span class="centered_span_myTasks">500KB</span>
            <?php
                $total_rows = mysqli_query($conn,"SELECT * FROM files where kb='500'");
                $num = mysqli_num_rows($total_rows);
                ?>
            <h4 class="headingInCard_myTasks"><?php echo htmlentities($num); ?></h4>
        </div>
    </div><br>
    <div class="filterSection_myTasks">
        <form class="form">
            <div class="leftFilter_myTasks"><br>
                <img src="img/page.png" height="15px" width="15px">
                <select id="k1">
                    <option value="none" selected disabled hidden>File type</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
                <input type="text" name="search" placeholder=" Search by File name" class="centered_span_myTasks"
                    id="search"
                    oninput="myFunction()">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <img src="img/search-icon-blue.png" id="search-icon" height="15px" width="15px">
            </div>
        </form>

        <div class="rightFilter_myTasks">
            <span class="sortByMyTasks">Sort By: </span>
            <select name="multi_search" id="multi_search" class="sortbySelect" style="color:#3598DB;width:70px">
                <option>All</option>
                <option value="Recent">Recent</option>
                <option value="Old">Old</option>
            </select>
            <select name="" id="" class="sortFilter_myTasks">
                <option value="0">Last Edited ∨</option>
                <option value="1">Sort A-Z</option>
                <option value="2">Sort Z-A</option>
            </select>
        </div>
    </div>
    <form id="form1">
        <div class="filterSmall_myTasks">
            <div class="selectAllActions_filterSmall_myTasks" style="margin-left:734px">
                <input type="checkbox" name="checkboxSelectAll_myTasks" id="select-all">
                <label for="checkboxSelectAll_myTasks">Select All</label>
                <select name="Select action">
                    <option value="0">Select action</option>
                    <option value="1">Copy</option>
                    <option value="2">Cut</option>
                </select>
            </div>
        </div>
        <div class="result-container" id="result1">

            <?php
        $sql=mysqli_query($conn,"select * from files");
        $check=mysqli_num_rows($sql)>0;
        if($check){
            while($row=mysqli_fetch_assoc($sql)){
                ?>

            <div class="singleTasks_containerDiv">
                <div class="singletask_myTasks">
                    <!-- <input type="checkbox" name="checkBoxItem" class="largerCheckbox"> -->
                    <span class="date">
                        <p class="light_spanItem_singleTask_myTasks">Added on</p>
                        <p class="j1" id="j1"><b><?php echo $row["added_on"]; ?></b></p>
                    </span>
                    <span style="margin-left:30px" class="files">
                        <p style="color:#297FB8;margin-bottom:5px;font-size:16px;width:90px">
                            <?php echo $row["files"]; ?></p>
                        <p class="j1" id="j2"><b><?php echo $row["kb"] .' KB';?></b></p>
                    </span>
                    <span style="margin-left:30px" class="document">
                        <p class="light_spanItem_singleTask_myTasks">Type of Doc</p>
                        <p class="j1" id="j3"><b><?php echo $row["file_type"];?></b></p>
                    </span>
                    <span class="image">
                        <p><img src="img/Prof-1.png" height="50px" width="50px"></p>
                    </span>
                    <span style="margin-right:30px" class="name">
                        <p class="light_spanItem_singleTask_myTasks">Candidate name</p>
                        <p class="j1"><b><?php echo $row["firstname"]; ?></b></p>
                    </span>
                    <div class="button-div_myTasks">
                        <button style="font-size:14px;color:#EC4551" class="btn1"><a
                                href='./include/delete_files.php?id=<?php echo $row["file_id"] ?>'
                                onclick='checkdelete()' style="color:red;text-decoration:none">Delete <i
                                    class="fa fa-trash" aria-hidden="true"></i></a></button><br><br>
                        <button style="color:#3598DB" class="btn2"><a style="color:#3598DB;text-decoration:none"
                                href="img/<?php echo $row["files"]; ?>" download>Download <i class="fa fa-file"
                                    aria-hidden="true"></i></a></button>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
    </form>
</div>
</div>

<script>
$(document).ready(function() {
    $("#form1 #select-all").click(function() {
        $("#form1 input[type='checkbox']").prop('checked', this.checked);
    });
});
</script>

<script>
function checkdelete() {
    return confirm('Are you sure you want to delete this file?');
}
</script>

<script type="text/javascript">
function myFunction() {
    var action = 'data';
    var search = document.getElementById('search').value;


    $.ajax({
        url: './include/files_action.php',
        method: 'POST',
        data: {
            action: action,
            search: search
        },
        success: function(response) {
            $("#result1").html(response);

        }
    });
}
</script>

<script>
$(document).ready(function() {
    $("#multi_search").change(function() {
        var sort_val = $(this).val();

        $.ajax({
            url: './include/files_action.php',
            method: 'POST',
            data: {
                sort_val: sort_val
            },
            success: function(response) {
                $("#result1").html(response);
            }
        });
    });
});
</script>