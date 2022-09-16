<link rel="stylesheet" href="css/profile_js_new.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Profile</title>

<?php 
session_start();
include('include/header.php') ?>
<?php include('db.php'); ?>
<?php include('connection1.php'); ?>

<?php
    $j_id=$_SESSION['jobSeekerID'];
    $sql="select * from jobseeker where jobseeker_id='$j_id'";
    $res=mysqli_query($conn,$sql);
    if($res == TRUE)
    {
        $count=mysqli_num_rows($res);
        if($count >0)
        {
            while($rows=mysqli_fetch_assoc($res))
            {
                $jobseeker_id=$rows['jobseeker_id'];
                $firstname=$rows['firstname'];
                $lastname=$rows['lastname'];
                $position=$rows['position'];
                $js_email=$rows['js_email'];
                $number=$rows['number'];
                $location=$rows['location'];
                $age=$rows['age'];
                $job_type=$rows['job_type'];
                $experience=$rows['experience'];
                
            }
        }
    }
?>

<div class="container c1" >
<section class="profileContainer small_Container">
    <div class="leftArea-profileContainer">
        <img src="./img/Screenshot_2021-03-22 Flow 1.png" class="profilepic-profileContainer">
        <div class="contactInfo-profileContainer">
            <section class="profileContactInfo-profileContainer">
                <p class="name_profileContactInfo-profileContainer"> <?php echo $firstname;?> <?php echo $lastname;?>  </p>
                <p class="designation_profileContactInfo-profileContainer">Lead - <?php echo $position;?></p>
        <div class="por">   
            <div class="portion1">
                <p class="email_profileContactInfo-profileContainer"style="color: #979797;"> Email: <?php echo $js_email;?></p>  
                <p class="phone_profileContactInfo-profileContainer" style="color: #979797;"> Phone Number: <?php echo $number;?></p>
                <p class="location_profileContactInfo-profileContainer">Location:  <?php echo $location;?></p>
            </div>

            <div class="portion2">
                <p class="email_profileContactInfo-profileContainer"style="color: #979797;"> Age: <?php echo $age;?></p>  
                <p class="phone_profileContactInfo-profileContainer" style="color: #979797;"> Availability: <?php echo $job_type;?></p>
                <p class="location_profileContactInfo-profileContainer">Experience:  <?php echo $experience;?></p>
            </div>
        </div>
                 
                
                           
            </section>
            <?php 
    $check="select * from profile_db_js where jobs_id='$j_id'";
$res=mysqli_query($conn,$check);
        $count=mysqli_num_rows($res);
        if($count >0)
        {
            if($rows=mysqli_fetch_assoc($res))
            {

        ?>
            <form action="" method="POST">
            <section class="skillsInfo-profileContainer">
                <h3 class="form-label">Skills<i class="fa fa-plus-square-o" aria-hidden="true" id="edit_pencil"></i></h3>
            <p id="skill"><?php echo $rows['skill'] ?></p>
            </section>
            <!--  -->

            <a style="text-decoration:none" href="edit_profile_js.php" id="edit">
                Edit Profile
        </a>

        </div>
    </div>

    <div class="rightArea-profileContainer">
        <div class="profileSection-profileContainer detailed-profileContainer">
            <h3 class="heading-profileContainer">About<i class="fa fa-pencil" aria-hidden="true" id="edit_pencil"></i> </a> </h3>
            <p class="para-profileContainer"><?php echo $rows['about'] ?></p>
        </div>

        <div class="section2">
  <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Experience')">Experience</button>
  <button class="tablinks" onclick="openCity(event, 'Education')">Education</button>
  <button class="tablinks" onclick="openCity(event, 'Certificate')">Certificate</button>
</div>


<div id="Experience" class="tabcontent">
  <!-- <h3 >Experience</h3> -->
    <button class="btn2">
        Add more
    </button>
 <img src="./img/Screenshot_2021-03-22 Flow 1.png" class="exp_img">
    <p class="exp1"><?php echo $rows['compname'] ?></p>
    <p class="exp2"><?php echo $rows['role'] ?></p>
    <p class="exp3"><?php echo $rows['duration'] ?></p>
</div>

<div id="Education" class="tabcontent">
 <div class="edu1" id="ed1">
  <p class="para-profileContainer" id ="edu_para">Bachelor's Degree
    <p class="edu"><?php echo $rows['b_colname']  ?></p>
    <p class="edu0"><?php echo $rows['b_degree'] ?></p>
    <p class="edu3"><?php echo $rows['b_syey'] ?></p>
  </p>
</div>
<div class="edu2" id="ed2">
    <p class="para-profileContainer" id="edu_para">Master's Degree
   <p class="edu4"><?php echo $rows['m_colname'] ?></p>
    <p class="edu5"><?php echo $rows['m_degree'] ?></p>
    <p class="edu6"><?php echo $rows['m_syey'] ?></p>
    </p>
</div>
</div> 


<div id="Certificate" class="tabcontent">
  <!-- <h3 >Certificate</h3> -->
    <button class="btn2">
        Add more
    </button>
  <p class="para-profileContainer">
    <input type="file"  class="form-input" name="resume" placeholder="Add Resume" id="resume" accept=".doc,.docx,.pdf"value="<?php echo $rows['resume'] ?>" required>
</p>
</div>
</div>

        <div class="form-group">
            
        </div>
            <input type="Submit" name="Submit" value="Submit" class="btn btn-success" id="btn1">
            <!-- 2 php closing brackets -->

    </div>
    <div class="section3">
        <div class="projectsSection-profileContainer detailed-profileContainer">
            <h3 class="heading-profileContainer">Projects<i class="fa fa-pencil" aria-hidden="true" id="edit_pencil"></i> </a> </h3>
            <p class="para-profileContainer" id="projects"><?php echo $rows['projects'] ?></p>
        </div>
        <div class="langSection-profileContainer detailed-profileContainer">
            </p> -->
            <h3 class="heading-profileContainer">Languages<i class="fa fa-pencil" aria-hidden="true" id="edit_pencil"></i> </a> </h3>
            <p class="para-profileContainer" id="lang"><?php echo $rows['lang'] ?></p>
        </div>
        <section class="socialProfiles-profileContainer">
                <div class="singleItem_socialProfiles-profileContainer">

                    <i class="fa fa-github-square" aria-hidden="true" style="margin-top: -13%;"></i>
                        <span>
            <h3 class="heading-profileContainer">Github</h3>
            <p class="para-profileContainer" id="git" style="top: -20px"><?php echo $rows['git'] ?></p>
                        </span>
                </div>
                <div class="singleItem_socialProfiles-profileContainer">

                    <i class="fa fa-linkedin-square" aria-hidden="true" style="margin-top: -13%;"></i>
                                <span>
            <h3 class="heading-profileContainer">LinkedIn</h3>
            <p class="para-profileContainer" id="linkedin" style="top: -20px"><?php echo $rows['linkedin'] ?></p>
                        </span>
                </div>

                <div class="singleItem_socialProfiles-profileContainer">

                    <i class="fa fa-twitter-square" aria-hidden="true" style="margin-top: -13%;"></i>
                                <span>
            <h3 class="heading-profileContainer">Twitter</h3>
            <p class="para-profileContainer" id="twitter" style="top: -20px"><?php echo $rows['twitter'] ?></p>
                        </span>
                </div>
            </section>

    </div>
    </form>
<?php }}

else{

    ?>
    <form action="profile_db_js.php" method="POST">
            <section class="skillsInfo-profileContainer">
                <label for="skill" class="form-label">Skills <i class="fa fa-plus-square-o" aria-hidden="true"></i></label> 
                <input type="textarea" class="form-input" placeholder="Skills" id="skill"
                                name="skill" required>
            </section>
            <!--  -->

            <a style="text-decoration:none" href="edit_profile_js.php" id="edit">
                Edit Profile
        </a>

        </div>
    </div>

    <div class="rightArea-profileContainer">
        <div class="profileSection-profileContainer detailed-profileContainer">
            <h2 class="heading-profileContainer"><label for="about" class="form-label">About</label> <a href="#"><i class="fa fa-pencil" id="edit_pencil" aria-hidden="true"></i> </a></h2>
            <p class="para-profileContainer"> <textarea rows="4" cols="65" class="form-input" placeholder=" Enter About" id="about" name="about"  required></textarea> </p>
        </div>

        <div class="section2">
  <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Experience')">Experience</button>
  <button class="tablinks" onclick="openCity(event, 'Education')">Education</button>
  <button class="tablinks" onclick="openCity(event, 'Certificate')">Certificate</button>
</div>


<div id="Experience" class="tabcontent">
  <!-- <h3 >Experience</h3> -->
    <a href="javascript:void(0)" class="add_more" id="btn2">
        Add more
    </a>
 <p class="para-profileContainer">
    <input type="text"  class="form-input" name="compname[]" placeholder="Company Name" required>
    <input type="text"  class="form-input" name="role[]" placeholder="Role" required>
    <input type="text"  class="form-input" name="duration[]" placeholder="Duration" required>
 </p>

 <div class="paste-new-form">
    
</div>
</div>

<div id="Education" class="tabcontent">
 <div class="edu1">
  <p class="para-profileContainer">Bachelor's Degree
    <input type="text"  class="form-input" name="b_colname" placeholder="College Name" id="edu" required>
    <input type="text"  class="form-input" name="b_degree" placeholder="Degree" id="edu" required>
    <input type="text"  class="form-input" name="b_syey" placeholder="Start Year - End Year" id="edu" required>
</p>
</div>
<div class="edu2">
    <p class="para-profileContainer">Master's Degree
    <input type="text"  class="form-input" name="m_colname" placeholder="College Name" id="edu" >
    <input type="text"  class="form-input" name="m_degree" placeholder="Degree" id="edu" >
    <input type="text"  class="form-input" name="m_syey" placeholder="Start Year - End Year" id="edu">
</p>
</div>
</div>

<div id="Certificate" class="tabcontent">
  <!-- <h3 >Certificate</h3> -->
    <button class="btn2">
        Add more
    </button>
  <p class="para-profileContainer">
    <input type="file"  class="form-input" name="resume" placeholder="Add Resume" id="resume" accept=".doc,.docx,.pdf"required>
</p>
</div>
</div>

        <div class="form-group">
        </div>
            <input type="Submit" name="Submit" value="Submit" class="btn btn-success" id="btn1">
    </div>
    <div class="section3">
        <div class="projectsSection-profileContainer detailed-profileContainer">
            <h2 class="heading-profileContainer"><label for="projects" class="form-label">Projects</label><a href="#"><i class="fa fa-pencil" aria-hidden="true" class="edit_pencil" style="float: right;"></i></a> </h2>
            <p class="para-profileContainer">
                <span><input type="text"  class="form-input" name="projects" placeholder="Enter Your Projects" id="projects" required></span>
            </p>
        </div>
        <div class="langSection-profileContainer detailed-profileContainer">
            <h2 class="heading-profileContainer"><label for="lang" class="form-label">Languages</label><a href="#"><i class="fa fa-pencil" aria-hidden="true" id="edit_pencil"></i> </h2>
            <p class="para-profileContainer">
                <span><input type="text"  class="form-input" name="lang" placeholder="Add Languages" id="lang"  required style="text-decoration: none;list-style: none;">
                </span>
            </p>
        </div>
        <section class="socialProfiles-profileContainer">
                <div class="singleItem_socialProfiles-profileContainer">

                    <i class="fa fa-github-square" aria-hidden="true"></i>
                        <span>
                          <label for="git" class="form-label">Github </label> 
                <input type="text" class="form-input" placeholder="Github Profile" id="git"
                                name="git" required> 
                        </span>
                </div>
                <div class="singleItem_socialProfiles-profileContainer">

                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                <span>
                                    <label for="linkedin" class="form-label">LinkedIn </label> 
                <input type="text" class="form-input" placeholder="LinkedIn Profile" id="linkedin"
                                name="linkedin" required>
                                </span>
                </div>

                <div class="singleItem_socialProfiles-profileContainer">

                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                <span>
                                    <label for="twitter" class="form-label">Twitter </label> 
                <input type="text" class="form-input" placeholder="Twitter Profile" id="twitter"
                                name="twitter"required>
                                </span>
                </div>
            </section>

    </div>
    </form>
<?php }?>
</section>

</div>
<script>


     $(document).ready(function(){

        $(document).on('click','.remove-btn',function(){
            $(this).closest('.para-profileContainer').remove();
        });

        $(document).on('click','#btn2',function(){
            $('.paste-new-form').append('<p class="para-profileContainer"><input type="text"  class="form-input" name="compname[]" placeholder="Company Name" required><input type="text"  class="form-input" name="role[]" placeholder="Role" required><input type="text"  class="form-input" name="duration[]" placeholder="Duration" required><button type="button" class="remove-btn btn btn-danger">Remove</button></p>');
});
});  
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


</script>
