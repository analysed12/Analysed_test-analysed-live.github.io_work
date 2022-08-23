<!--- Query for textbox and checkbox filters--->

<?php include('connection1.php') ?>

<?php
if(isset($_POST['action'])){
$sql="SELECT * from jobseeker where position !='' and  location!='' and qualification!='' and job_type!='' and job_status!=''";

if (isset($_POST['qualification'])){

$qualification=implode("','",$_POST['qualification']);
$sql .="AND qualification IN('".$qualification."')";

}
if (isset($_POST['job_type'])){

$job_type=implode("','",$_POST['job_type']);
$sql .="AND job_type IN('".$job_type."')";

}
if (isset($_POST['status'])){

$status=implode("','",$_POST['status']);
$sql .="AND job_status IN('".$status."')";

}
if (isset($_POST['jobtitle'])){

$jobtitle=$_POST['jobtitle'];
$sql .="AND position LIKE '%$jobtitle%'";

}
if (isset($_POST['location'])){

$location=$_POST['location'];
$sql .="AND location LIKE '%$location%'";

}

$result=$conn->query($sql);

if($result->num_rows>0){
while($row=$result->fetch_assoc()){
	?>

    <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
        <a href="">
            <?php
            $status=$row["job_status"];
            if($status=="Reviewed") { ?>
                <p class="candidate-status-jobs Reviewed">Reviewed</p>
            <?php   }
            if($status=="Contacting"){ ?>
                <p class="candidate-status-jobs Contacting">Contacting</p>
            <?php } 
            if($status=="Hired"){ ?>
                <p class="candidate-status-jobs Hired">Hired</p>
            <?php } ?>

            <img src="./img/Ellipse 148-1.png" alt="">
            <h3 class="job-headingnname"><?php echo $row["firstname"]; ?></h3>
            <p class="skill-job-candiate"><?php echo $row["position"]; ?></p>
            <ul class="candidate-desc">
                <li><?php echo $row["qualification"]; ?></li>
                <li><?php echo $row["experience"]; ?> Year Experience</li>
                <li><?php echo $row["job_type"]; ?></li>
                <li><?php echo $row["skills"]; ?></li>
            </ul>
            <div class="row-flex-jobs-j seemorebutton-social">
                <a href="index.php" class="seemoreButton">See more</a>
                <div class="row-flex-jobs-j social-media-icons">
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<URL>&t=<TITLE>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Linkedin"><img src="./img/Icon zocial-linkedin.svg" alt="">
                    </a>
                    <a href="https://twitter.com/share?url=<URL>&text=<TITLE>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><img src="./img/Icon feather-twitter.svg" alt="">
                    </a>
                    <a href="mailto:?subject=[SUBJECT]&body=<URL>" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Mail" ><img src="./img/Icon material-mail-outline.svg" alt="">
                    </a>
                </div>
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

        $sql="SELECT * from jobseeker order by added_on desc";
        $result=$conn->query($sql);

    }
    else if($_POST['sort_val'] == "Old"){ 

        $sql="SELECT * from jobseeker order by added_on asc";
        $result=$conn->query($sql);

    }
    else{

        $sql="SELECT * from jobseeker";
        $result=$conn->query($sql);

    }
    if($result){
        while($row=$result->fetch_assoc()){
            ?>

             <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
        <a href="">
            <?php
            $status=$row["job_status"];
            if($status=="Reviewed") { ?>
                <p class="candidate-status-jobs Reviewed">Reviewed</p>
            <?php   }
            if($status=="Contacting"){ ?>
                <p class="candidate-status-jobs Contacting">Contacting</p>
            <?php } 
            if($status=="Hired"){ ?>
                <p class="candidate-status-jobs Hired">Hired</p>
            <?php } ?>

            <img src="./img/Ellipse 148-1.png" alt="">
            <h3 class="job-headingnname"><?php echo $row["firstname"]; ?></h3>
            <p class="skill-job-candiate"><?php echo $row["position"]; ?></p>
            <ul class="candidate-desc">
                <li><?php echo $row["qualification"]; ?></li>
                <li><?php echo $row["experience"]; ?> Year Experience</li>
                <li><?php echo $row["job_type"]; ?></li>
                <li><?php echo $row["skills"]; ?></li>
            </ul>
            <div class="row-flex-jobs-j seemorebutton-social">
                <a href="index.php" class="seemoreButton">See more</a>
                <div class="row-flex-jobs-j social-media-icons">
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<URL>&t=<TITLE>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Linkedin"><img src="./img/Icon zocial-linkedin.svg" alt="">
                    </a>
                    <a href="https://twitter.com/share?url=<URL>&text=<TITLE>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><img src="./img/Icon feather-twitter.svg" alt="">
                    </a>
                    <a href="mailto:?subject=[SUBJECT]&body=<URL>" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Mail" ><img src="./img/Icon material-mail-outline.svg" alt="">
                    </a>
                </div>
            </div>
            <p class="date-created-jobsDashboard">Applied Recently</p>
        </a>
    </div>
            
    <?php
    }
}
}
?>
