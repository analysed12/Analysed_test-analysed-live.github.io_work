<!--- Query for textbox and checkbox filters--->

<?php include('connection1.php') ?>

<?php
if(isset($_POST['action'])){
$sql="SELECT * from task where position !='' and company!='' and skills!=''";

if (isset($_POST['position'])){

$position=$_POST['position'];
$sql .="AND position LIKE '%$position%'";

}
if (isset($_POST['company'])){

$company=$_POST['company'];
$sql .="AND company LIKE '%$company%'";

}
if (isset($_POST['skills'])){

$skills=$_POST['skills'];
$sql .="AND skills LIKE '%$skills%'";

}

$result=$conn->query($sql);

if($result->num_rows>0){
while($row=$result->fetch_assoc()){
	?>
	                    <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
                            <a href="">
                                <p class="candidate-status-jobs"><img src="./img/More.svg"></p>
                                <img src="./img/Ellipse 148-1.png" alt="">
                                <h3 class="job-headingnname"><?php echo $row["assigned_to"]; ?></h3>
                                <p class="skill-job-candiate"><?php echo $row["position"]; ?></p>
                                <p class="taskassigned-taskcreated"><?php echo $row["jobtitle"]; ?></p>
                                <p class="lighgrey-text-task-created"><?php echo $row["description"]; ?></p>
                                <div class="upcomingInterviews-p tasks-created-p">

                                    <?php
                                    $date=$row['start_date']; 
                                    $start_date=date_format(new DateTime($date),"M d, Y");
                                    ?>

                                    <?php
                                    $date=$row['end_date']; 
                                    $end_date=date_format(new DateTime($date),"M d, Y");
                                    ?>

                                    <p class="row-flex-jobj"><img src="./img/Calendar(1).svg" style="margin-right: 10px;"><?php echo $start_date; ?>to <?php echo $end_date; ?> </p>

                                </div>
                                <div class="skills-taskscreated row-flex-jobs-j">
                                    <?php
                                     $skills = $row['skills'];
                                     $skill_arr = explode(',',$skills);
                                        for ($x = 0; $x < count($skill_arr); $x++) {
                                            ?>
                                            <span><?php echo $skill_arr[$x]; ?></span>
                                            <?php
                                        }
                                    ?>
                                </div>
                                <p class="date-created-jobsDashboard">Applied Recently</p>
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

		$sql="SELECT * from task order by created_on desc";
        $result=$conn->query($sql);

    }
    else if($_POST['sort_val'] == "Old"){ 

        $sql="SELECT * from task order by created_on asc";
        $result=$conn->query($sql);

    }
    else{

        $sql="SELECT * from task";
        $result=$conn->query($sql);

    }
    if($result){
        while($row=$result->fetch_assoc()){
            ?>

             <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
                            <a href="">
                                <p class="candidate-status-jobs"><img src="./img/More.svg"></p>
                                <img src="./img/Ellipse 148-1.png" alt="">
                                <h3 class="job-headingnname"><?php echo $row["assigned_to"]; ?></h3>
                                <p class="skill-job-candiate"><?php echo $row["position"]; ?></p>
                                <p class="taskassigned-taskcreated"><?php echo $row["jobtitle"]; ?></p>
                                <p class="lighgrey-text-task-created"><?php echo $row["description"]; ?></p>
                                <div class="upcomingInterviews-p tasks-created-p">

                                    <?php
                                    $date=$row['start_date']; 
                                    $start_date=date_format(new DateTime($date),"M d, Y");
                                    ?>

                                    <?php
                                    $date=$row['end_date']; 
                                    $end_date=date_format(new DateTime($date),"M d, Y");
                                    ?>

                                    <p class="row-flex-jobj"><img src="./img/Calendar(1).svg" style="margin-right: 10px;"><?php echo $start_date; ?>to <?php echo $end_date; ?> </p>

                                </div>
                                <div class="skills-taskscreated row-flex-jobs-j">
                                    <?php
                                     $skills = $row['skills'];
                                     $skill_arr = explode(',',$skills);
                                        for ($x = 0; $x < count($skill_arr); $x++) {
                                            ?>
                                            <span><?php echo $skill_arr[$x]; ?></span>
                                            <?php
                                        }
                                    ?>
                                </div>
                                <p class="date-created-jobsDashboard">Applied Recently</p>
                            </a>
                        </div>
            
    <?php
    }
}
}
?>
