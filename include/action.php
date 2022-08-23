<!--- Query for textbox and checkbox filters--->

<?php include('connection1.php') ?>

<?php
if(isset($_POST['action'])){
$sql="SELECT * from interview where status !='' and position!='' and company!=''";

if (isset($_POST['status'])){

$status=implode("','",$_POST['status']);
$sql .="AND status IN('".$status."')";

}
if (isset($_POST['position'])){

$position=$_POST['position'];
$sql .="AND position LIKE '%$position%'";

}
if (isset($_POST['company'])){

$company=$_POST['company'];
$sql .="AND company LIKE '%$company%'";

}

$result=$conn->query($sql);

if($result->num_rows>0){
while($row=$result->fetch_assoc()){
	?>
	<div class="single-container-cards-DasboardJobs candidatesjobs-applied">
        <a href="">

            <?php
            $status=$row["status"];
            if($status=="Active") { ?>
                <p class="candidate-status-jobs Active"><?php echo $row["status"]; ?></p>
            <?php   }
            if($status=="Unfinished"){ ?>
                <p class="candidate-status-jobs Unfinished"><?php echo $row["status"]; ?></p>
            <?php } 
            if($status=="Completed"){ ?>
                <p class="candidate-status-jobs Completed"><?php echo $row["status"]; ?></p>
            <?php } ?>

            <img src="./img/Ellipse 148-1.png" alt="">
            <h3 class="job-headingnname"><?php echo $row["name"]; ?></h3>
            <p class="skill-job-candiate"><?php echo $row["position"]; ?></p>

            <p class="applied-in-iD">Applied in 2 companies</p>

            <div class="row-flex-jobj">
                <p class="jobStatus-interviewDone notactive"><span></span> <?php echo $row['company']; ?> </p>
            </div>

            <div class="upcomingInterviews-p">
                <?php 
                $interview=$row["interview"];
                if($interview=="Completed"){
                    ?>
                    <p>Interview</p>
                    <p>Completed <img src="./img/Path 2211.svg"></p>
                <?php }
                else{
                    ?>
                    <p>Upcoming Interview</p>
                    <?php
                    $date=$row['date']; 
                    $datetime=date_format(new DateTime($date),"\\O\\n d M, Y \\a\\t H A");
                    ?>
                    <p><?php echo $datetime; ?></p>
                <?php } ?>
            </div>

            <a href="" class="resumepdfDownload row-flex-jobj"><img src="./img/File.svg" style="margin-right: 10px;width:20px"><?php echo $row["Resume"]; ?></a>

            <div class="seemorebutton-social">
                <a href="index.php" class="seemoreButton">See more</a>
            </div>

        </a>
    </div>
    <?php
    }
}
else{
    ?>
    <h3>No records found matching the search criteria.</h3>
<?php }
}
?>


 <!--- Query for sortby filters --->

<?php
if(isset($_POST['sort_val'])){

	if($_POST['sort_val'] == "Recent"){ 

		$sql="SELECT * from interview order by applied_date desc";
        $result=$conn->query($sql);

    }
    else if($_POST['sort_val'] == "Old"){ 

        $sql="SELECT * from interview order by applied_date asc";
        $result=$conn->query($sql);

    }
    else{

        $sql="SELECT * from interview";
        $result=$conn->query($sql);

    }
    if($result){
        while($row=$result->fetch_assoc()){
            ?>
            <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
        <a href="">

            <?php
            $status=$row["status"];
            if($status=="Active") { ?>
                <p class="candidate-status-jobs Active"><?php echo $row["status"]; ?></p>
            <?php   }
            if($status=="Unfinished"){ ?>
                <p class="candidate-status-jobs Unfinished"><?php echo $row["status"]; ?></p>
            <?php } 
            if($status=="Completed"){ ?>
                <p class="candidate-status-jobs Completed"><?php echo $row["status"]; ?></p>
            <?php } ?>

            <img src="./img/Ellipse 148-1.png" alt="">
            <h3 class="job-headingnname"><?php echo $row["name"]; ?></h3>
            <p class="skill-job-candiate"><?php echo $row["position"]; ?></p>

            <p class="applied-in-iD">Applied in 2 companies</p>

            <div class="row-flex-jobj">
                <p class="jobStatus-interviewDone notactive"><span></span> <?php echo $row['company']; ?> </p>
            </div>

            <div class="upcomingInterviews-p">
                <?php 
                $interview=$row["interview"];
                if($interview=="Completed"){
                    ?>
                    <p>Interview</p>
                    <p>Completed <img src="./img/Path 2211.svg"></p>
                <?php }
                else{
                    ?>
                    <p>Upcoming Interview</p>
                    <?php
                    $date=$row['date']; 
                    $datetime=date_format(new DateTime($date),"\\O\\n d M, Y \\a\\t H A");
                    ?>
                    <p><?php echo $datetime; ?></p>
                <?php } ?>
            </div>

            <a href="" class="resumepdfDownload row-flex-jobj"><img src="./img/File.svg" style="margin-right: 10px;width:20px"><?php echo $row["Resume"]; ?></a>

            <div class="seemorebutton-social">
                <a href="index.php" class="seemoreButton">See more</a>
            </div>

        </a>
    </div>
    <?php
    }
}
}
?>
