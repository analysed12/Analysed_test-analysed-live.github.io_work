<?php 
session_start();
if($_SESSION['jobSeekerID']==null)
{
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<!--TOP HEADER-->
<?php include('header.php')?>

<link rel="stylesheet" href="./css/jobsDescription.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<title>Job Description</title>

<div class="container">
<div class="small_container">
    <div class="bread-crumbs_Mytools-recruiter" style="margin-bottom: 40px;">
            <a href="js_dashboard.php" class="active-breadcrumb-link">Dashboard</a> > <a href="" class="active-breadcrumb-link">Suggested Jobs</a> > <a href="" class="active-breadcrumb-link">Job Description</a> 
        </div>
    <div class="job-row-flex-JobDescription">
        <div class="left-side-jobDescription">
            <div class="share-icons-leftside-jobDescription">
            <a href="#" style="margin-right: 20px;"><img src="./img/Star.svg" class="share-and-star-icon-img"></a>
                <a href="#"><img src="./img/Share.svg" class="share-and-star-icon-img"></a>

            </div>
            <?php $JobID = $_GET['job_ID'];
             $sql="SELECT * FROM joblistings where job_id= '" .  $JobID . "'";
             $result_1 = mysqli_query($con,$sql);
             while ($row = mysqli_fetch_array($result_1)) {
               ?>
                        <!-- START OF JOB DESCRIPTION -->
            <h2 class="heading-dash"><?php echo $row['position']; ?></h2>
            <div class="icons-flex-left-side-jobsDescription">
                <span> <i class="fa fa-eye" aria-hidden="true" style="color:#FFBD06"></i> <?php echo $row['job_views']; ?> views</span>
                <span><i class="fa fa-users" aria-hidden="true" style="color:#8C60EB"></i> 4 applicants</span>
                <span><i class="fa fa-clock-o" aria-hidden="true" style="color:#0F9D58"></i> 23 days remaining</span>
            </div>   <!-- END OF JOB DESCRIPTION -->
            <div class="jobDescription-paragraph-left-side-jobsDescription">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
            </div>
                        <!-- SKILL SETS -->
            <div class="skills-leftSide-jobsDescription">
            <p>Skills</p>
            <?php 
              
              $string = $row['skills'];
              $str_arr = explode (",", $string);               
              for($i=0;$i<count($str_arr);$i++)
              { echo ' <span>'.$str_arr[$i].'</span>';
              }
              ?>
               
               
              
            </div>
                              <!-- REQUIREMENTS -->
            <div class="requirements-section-leftSide-jobsDescription">
                <p>Requirements</p>
                <section class="requirements-detail-left-side-JobsDescription">
                    <div class="requirements-subDetail-left-sideJobsDescription">
                        <span>Availability:</span> <p>Hourly</p>
                    </div>
                    <div class="requirements-subDetail-left-sideJobsDescription">
                        <span>Experience level:</span> <p>Intermediate (3-4 years)</p>
                    </div>
                    <div class="requirements-subDetail-left-sideJobsDescription">
                        <span>Languages:</span> <p><?php echo $row['Languages']; ?> </p>
                    </div>
                </section>
            </div>
            
                              <!-- APPLY FOR THE JOB -->
            <button class="applyNow-leftSide-jobsDescription" type="button"  data-toggle="modal" data-target="#myModal1">
                Apply for this job
            </button>

	<!-- Modal for Your Information-->
  <div class="modal fade" id="myModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="min-height:620px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><p class="text-primary">1.Your Information</p></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
	  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="first_name">First Name*</label>
      <input type="text" class="form-control" id="first_name" placeholder="Enter your First Name">
    </div>
    <div class="form-group col-md-6">
      <label for="last_name">Last Name*</label>
      <input type="text" class="form-control" id="last_name" placeholder="Enter your Last Name">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Email">Email ID*</label>
      <input type="email" class="form-control" id="Email" placeholder="Enter your Email Id">
    </div>
    <div class="form-group col-md-6">
      <label for="number">Phone No*</label>
      <input type="tel" class="form-control" id="number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Enter Phone Number">
    </div>
	</div>
  <div class="form-group">
    <label for="address">Address*</label>
    <input type="text" class="form-control" id="address" placeholder="Enter Address Line 1">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="country">Country*</label>
      <select id="country" class="form-control">
          <option value="1">Select Country</option>
          <option value="2">India</option>
          <option value="2">America</option>
      </select>
    </div>
	<div class="form-group col-md-6">
      <label for="state">State*</label>
      <select id="state" class="form-control">
          <option value="1">Select State</option>
          <option value="2">Tamil Nadu</option>
          <option value="2">Kerala</option>
      </select>
      
    </div>
 </div>
 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="city">City*</label>
      <input type="text" class="form-control" id="city" placeholder="Enter City Name">
    </div>
	<div class="form-group col-md-6">
      <label for="zipcode">Zip Code*</label>
      <input type="text" class="form-control" id="zipcode" placeholder="Enter Zip Code">
    </div>
 </div>
</form>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-prev" data-dismiss="modal" style="border:2px solid skyblue;">Back</button>
        <button type="button" class="btn btn-primary btn-next">Next</button>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="" data-toggle="modal" data-target="#myModal2" style="display:none;"></button>

<!--Modal for Resume Upload and Other Documents-->
<div class="modal fade" id="myModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="min-height:620px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><p class="text-primary">2.Resume Upload and Other Documents</p></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fileupload">Upload Resume <span style="font-size:13px;color:lightgray;">6 MB max</span></label>
      <p style="font-size:13px;color:lightgray;">Upload your resume if you have not already done so</p>
      <label for="fileupload" class="form-control" style="color:lightgray;">(*.doc,*.docx,*.rtf,*.txt,*.pdf)</label>
      
      <input type="file" class="form-control" id="fileupload" style="display:none;">
    </div>
    <div class="form-group col-md-6">
      <label for="url">LinkedIn Profile</label>
      <p style="font-size:13px;color:lightgray;">Copy & Paste URL link</p>
      <input type="text" class="form-control" id="url" placeholder="Enter LinkedIn URL">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Certificate/Licenses</label><br>
        <label for="firstimg" style="color:skyblue;font-size:15px;"><i class="fa fa-plus-circle"> </i> Add your Certificate</label>
      <input type="file" name=""  id="firstimg" style="display:none;visibility:none;">
    </div>
    <div class="form-group col-md-6">
      <label>Attachments</label><br>
        <label for="secondimg" style="color:skyblue;font-size:15px;"><i class="fa fa-plus-circle"> </i> Aditional Informaton</label>
      <input type="file" name=""  id="secondimg" style="display:none;visibility:none;">
    </div>
  </div>
</form>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-prev" data-dismiss="modal" style="border:2px solid skyblue;">Back</button>
        <button type="button" class="btn btn-primary btn-next">Next</button>
      </div>
    </div>
  </div>
</div>


<!-- Button trigger modal -->
<button type="button" class="" data-toggle="modal" data-target="#myModal3" style="display:none;"> 
</button>

<!--Work and Educational History--->
<div class="modal fade" id="myModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="min-height:620px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><p class="text-primary">3.Work and Education History</p></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="emp_history">Employment History</label><br>
      <label for="emp_history" style="color:skyblue;font-size:15px;"><i class="fa fa-plus-circle"> </i> Add Work History</label>
      <button type="button" name=""  id="emp_history" data-toggle="modal" data-target="#Modal1" style="display:none;visibility:none;"></button>
    </div>
  <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="top:155px;margin-left:-27%;width:550px">
      <div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="position">Position Title*</label>
      <input type="text" class="form-control" id="position" placeholder="Enter Position Title">
    </div>
    <div class="form-group col-md-6">
      <label for="company">Company Name*</label>
      <input type="text" class="form-control" id="company" placeholder="Enter Company Name">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="from">From*</label>
      <input type="date" class="form-control" id="from">
    </div>
    <div class="form-group col-md-6">
      <label for="to">To*</label>
      <input type="date" class="form-control" id="to">
    </div>
  </div>
</form>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save</button>
    </div>
</div>
</div>
</div>

    <div class="form-group col-md-6">
      <label for="education">Education</label><br>
      <label for="education" style="color:skyblue;font-size:15px;"><i class="fa fa-plus-circle"> </i> Add Education</label>
      <button type="button" name=""  id="education" data-toggle="modal" data-target="#Modal2" style="display:none;visibility:none;"></button>
    </div>
  </div>
  <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="top:155px;margin-left:50%;width:330px;font-size:15px;">
      <div>
        <button type="button" class="close" data-dismiss="modal1" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
  <form>
    <div class="form-group">
      <label for="topic">Field of Study/Topic*</label>
      <input type="text" class="form-control" id="topic" placeholder="Enter field of study">
    </div>
    <div class="form-group">
      <label for="institute">Institute*</label>
      <select id="institute" class="form-control">
          <option value="1"></option>
          <option value="2">PSG College of Arts & Science</option>
          <option value="3">ABC College</option>
          <option value="4">AAA College</option>
      </select>
    </div>

    <div class="form-group">
      <label for="year">Year of Passing*</label>
      <select id="year" class="form-control">
          <option value="1"></option>
          <option value="2">2023</option>
          <option value="3">2021</option>
      </select>
    </div>
</form>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save</button>
    </div>
</div>
</div>
</div>
<div class="form-group">
    <label for="inputAddress">Skills</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="">
</div>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-prev" data-dismiss="modal" style="border:2px solid skyblue;">Back</button>
        <button type="button" class="btn btn-primary btn-next">Next</button>
      </div>
    </div>
  </div>
</div>


<!--Review and Submit--->
<button type="button" class="" data-toggle="modal" data-target="#myModal4" style="display:none;"></button>

<!--Modal for review and submit--->
<div class="modal fade" id="myModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="min-height:620px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><p class="text-primary">4.Review and Submit</p></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
    <form>
    <div class="form-group col-md-6">
      <p class="row-flex-jobs-j">
        <span class="heading-filter-dj" id="filterHeading3">1.Your Information</span>
        <i class="fa fa-angle-down" aria-hidden="true"></i>
      </p>
    </div>
    <div class="form-group col-md-6">
      <p class="row-flex-jobs-j">
        <span class="heading-filter-dj" id="filterHeading3">2.Upload Resume and Other Documents</span>
        <i class="fa fa-angle-down" aria-hidden="true"></i>
      </p>
    </div>
    <div class="form-group col-md-6">
      <p class="row-flex-jobs-j">
        <span class="heading-filter-dj" id="filterHeading3">3.Work and Education History</span>
        <i class="fa fa-angle-down" aria-hidden="true"></i>
      </p>
    </div>
</form>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-prev" data-dismiss="modal" style="border:2px solid skyblue;">Back</button>
        <button type="button" class="btn btn-primary btn-next">Submit</button>
      </div>
    </div>
  </div>
</div>
</div>

      <div class="right-side-jobDescription">
            <p class="right-side-date-rightSide-jobDescription">05-05-2020</p>
            <div class="card-for-jobsDescription-rightSideJobDescription">
                <img src="./img/Airbnb-logo.png" alt="" srcset="" class="logo-for-jobDescription-rightSideJobDescription">
                <p class="companyname-for-jobsDescription-rightSideJobDescription">AirBnb</p>
                <span class="companyLocation-for-jobsDescription-rightSideJobDescription">London, UK</span>
                <p class="paragraphDetails-for-jobsDescription-rightSideJobDescription">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                <p class="websiteCompany-for-jobsDescription-rightSideJobDescription row-flex-jobj"> <img src="./img/Icon feather-globe.svg" class="rightJobDesc-images-sm"> www.company.net</p>
                <p class="mobile-for-jobsDescription-rightSideJobDescription  row-flex-jobj"><img src="./img/Icon feather-phone-call.svg" class="rightJobDesc-images-sm">+91-2919293812</p>
                <p class="mail-for-jobsDescription-rightSideJobDescription  row-flex-jobj"><img src="./img/envelope (1).svg" class="rightJobDesc-images-sm"> sample@companymail.com</p>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<script>
$("div[id^='myModal']").each(function(){
  
  var currentModal = $(this);
  
  //click next
  currentModal.find('.btn-next').click(function(){
    currentModal.modal('hide');
    currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show'); 
  });
  
  //click prev
  currentModal.find('.btn-prev').click(function(){
    currentModal.modal('hide');
    currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal('show'); 
  });

});

</script>
<script>
    const filterHeading3 = document.querySelector('#filterHeading3');

    const categoryDiv3 = document.querySelector('#categoryDiv3');

    
    filterHeading3.addEventListener('click',()=>{
        categoryDiv3.classList.toggle('active')
    })
</script>