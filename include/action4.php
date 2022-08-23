<!--- Query for textbox and checkbox filters--->

<?php include('connection1.php') ?>

<?php
if(isset($_POST['action'])){
$sql="SELECT * from jobseeker where position !='' and company_name!='' and job_status='Hired'";

if (isset($_POST['position'])){

$position=$_POST['position'];
$sql .="AND position LIKE '%$position%'";

}
if (isset($_POST['company'])){

$company=$_POST['company'];
$sql .="AND company_name LIKE '%$company%'";

}

$result=$conn->query($sql);

if($result->num_rows>0){
while($row=$result->fetch_assoc()){
	?>

    <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
        <a href="">
            <div class="candidate-status-jobs hiredCandidates-img"><p>NEW</p><img src="./img/Path 2213.svg"></div>
            <img src="./img/Ellipse 148-1.png" alt="">
            <h3 class="job-headingnname"><?php echo $row["firstname"]; ?></h3>
            <p class="skill-job-candiate hiredCandidates-p1"><?php echo $row["position"]; ?></p>
            <div class="row-flex-jobj email-id-and-experience">
                <img src="./img/Mail icon.svg"> 
                <span><p class="grey-email-id">Email ID</p><p class="name-dark-id"><?php echo $row["js_email"]; ?></p></span>
            </div>
            <div class="row-flex-jobj email-id-and-experience">
                <img src="./img/briefcase.svg"> 
                <span class="span-experience-1">
                    <p class="grey-email-id">Experience & Roles</p>
                    <p class="name-dark-id row-flex-jobs-j"><span>Total</span> <span><?php echo $row["experience"]; ?> Years Experience </span></p>
                </span>
            </div>
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

		$sql="SELECT * from jobseeker where job_status='Hired' order by added_on desc";
        $result=$conn->query($sql);

    }
    else if($_POST['sort_val'] == "Old"){ 

        $sql="SELECT * from jobseeker where job_status='Hired' order by added_on asc";
        $result=$conn->query($sql);

    }
    else{

        $sql="SELECT * from jobseeker where job_status='Hired'";
        $result=$conn->query($sql);

    }
    if($result){
        while($row=$result->fetch_assoc()){
            ?>

    <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
        <a href="">
            <div class="candidate-status-jobs hiredCandidates-img"><p>NEW</p><img src="./img/Path 2213.svg"></div>
            <img src="./img/Ellipse 148-1.png" alt="">
            <h3 class="job-headingnname"><?php echo $row["firstname"]; ?></h3>
            <p class="skill-job-candiate hiredCandidates-p1"><?php echo $row["position"]; ?></p>
            <div class="row-flex-jobj email-id-and-experience">
                <img src="./img/Mail icon.svg"> 
                <span><p class="grey-email-id">Email ID</p><p class="name-dark-id"><?php echo $row["js_email"]; ?></p></span>
            </div>
            <div class="row-flex-jobj email-id-and-experience">
                <img src="./img/briefcase.svg"> 
                <span class="span-experience-1">
                    <p class="grey-email-id">Experience & Roles</p>
                    <p class="name-dark-id row-flex-jobs-j"><span>Total</span> <span><?php echo $row["experience"]; ?> Years Experience </span></p>
                </span>
            </div>
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
