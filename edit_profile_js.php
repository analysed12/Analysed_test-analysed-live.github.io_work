<!DOCTYPE html>
<html>
<head>
    <title>EDIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profile_js.css">
</head>
<style type="text/css">
    .profileContainer {
    display: flex!important;
    align-items: flex-start;
    justify-content: flex-start;
    padding-left: 30px;
}
.leftArea-profileContainer {
    flex-basis: 22%;
    }
    .portion2 {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: space-evenly;
}
.skillsInfo-profileContainer {
    margin-top: -7px;
    color: #333333;
    margin-left: 38px;
}
   .section3 {
    margin-top: -85%;
    margin-left: 73%;
    width: 19%;
    padding-right: 10px;
}
    .btn{
       margin-left: -116%;
    width: 97%;
    }
    #btn1{
   width: 97%;
    height: 37px;
    margin-top: -13.5%;
    margin-left: 109%;
    border-radius: 3px;
    text-decoration: none;
    }
    .rightArea-profileContainer {
            margin-left: 37px;
                width: 28%;
    }
    .detailed-profileContainer,.section2 {
        width: 230%;
    }

    #skill{
            margin-top: -3px;
    margin-bottom: 33px;
    width: 557px;
    }
    #c1 {
        margin-left: 100px;
    }
    .socialProfiles-profileContainer{
        width: 100%;
    }
    .singleItem_socialProfiles-profileContainer i{
            margin-top: -13%;
    }
   
</style>


<body>
<?php
    session_start();
    include ('connection1.php');
    include ('include/header.php');
    $j_id=$_SESSION['jobSeekerID'];
    $sql="select * from profile_db_js WHERE jobs_id='$j_id'";
    $query_run=mysqli_query($conn,$sql);
    if($query_run == TRUE)
    {
        while($row=mysqli_fetch_assoc($query_run))
        {
            $sql_js="select * from jobseeker WHERE jobseeker_id='$j_id'";
    $query_run_js=mysqli_query($conn,$sql_js);
    if($query_run_js == TRUE)
    {
        while($row_js=mysqli_fetch_assoc($query_run_js))
        {
            ?>
<div class="container " id="c1">
<section class="profileContainer small_Container">
    <div class="leftArea-profileContainer">
        <img src="./img/Screenshot_2021-03-22 Flow 1.png" class="profilepic-profileContainer">
        <div class="contactInfo-profileContainer">
            <section class="profileContactInfo-profileContainer">
                <p class="name_profileContactInfo-profileContainer"> <?php echo $row_js['firstname'];?> <?php echo $row_js['lastname'];?>  </p>
                <p class="designation_profileContactInfo-profileContainer">Lead - <?php echo $row_js['position'];?></p>
        <div class="por">   
            <div class="portion1">
                <p class="email_profileContactInfo-profileContainer"style="color: #979797;"> Email: <?php echo $row_js['js_email'];?></p>  
                <p class="phone_profileContactInfo-profileContainer" style="color: #979797;"> Phone Number: <?php echo $row_js['number'];?></p>
                <p class="location_profileContactInfo-profileContainer">Location:  <?php echo $row_js['location'];?></p>
            </div>

            <div class="portion2">
                <p class="email_profileContactInfo-profileContainer"style="color: #979797;"> Age: <?php echo $row_js['age'];?></p>  
                <p class="phone_profileContactInfo-profileContainer" style="color: #979797;"> Availability: <?php echo $row_js['job_type'];?></p>
                <p class="location_profileContactInfo-profileContainer">Experience:  <?php echo $row_js['experience'];?></p>
            </div>
        </div>               
            </section>
        </div>
    </div>

    <form action="" method="POST">
    <section class="skillsInfo-profileContainer">
                <label for="skill" class="form-label">Skills <i class="fa fa-plus-square-o" aria-hidden="true"></i></label> 
                <input type="text" class="form-input" placeholder="Skills" id="skill"
                                name="skill" value="<?php echo $row['skill']?>">
    </section>
        
    <div class="rightArea-profileContainer">
        <div class="profileSection-profileContainer detailed-profileContainer">
            <h2 class="heading-profileContainer"><label for="about" class="form-label">About</label> <a href="#"><i class="fa fa-pencil" id="edit_pencil" aria-hidden="true"></i> </a></h2>
            <p class="para-profileContainer"> <input type="text" name="about" class="form-input" placeholder=" Enter About" id="about" name="about" value="<?php echo $row['about']?>"> </p>
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
 <p class="para-profileContainer">
    <input type="text"  class="form-input" name="compname" placeholder="Company Name" id="exp" value="<?php echo $row['compname']?>">
    <input type="text"  class="form-input" name="role" placeholder="Role" id="exp" value="<?php echo $row['role']?>">
    <input type="text"  class="form-input" name="duration" placeholder="Duration" id="exp" value="<?php echo $row['duration']?>">
 </p>
</div>

<div id="Education" class="tabcontent">
 <div class="edu1">
  <p class="para-profileContainer">Bachelor's Degree
    <input type="text"  class="form-input" name="b_colname" placeholder="College Name" id="edu" value="<?php echo $row['b_colname']?>">
    <input type="text"  class="form-input" name="b_degree" placeholder="Degree" id="edu" value="<?php echo $row['b_degree']?>">
    <input type="text"  class="form-input" name="b_syey" placeholder="Start Year - End Year" id="edu" value="<?php echo $row['b_syey']?>">
</p>
</div>
<div class="edu2">
    <p class="para-profileContainer">Master's Degree
    <input type="text"  class="form-input" name="m_colname" placeholder="College Name" id="edu"value="<?php echo $row['m_colname']?>" >
    <input type="text"  class="form-input" name="m_degree" placeholder="Degree" id="edu" value="<?php echo $row['m_degree']?>">
    <input type="text"  class="form-input" name="m_syey" placeholder="Start Year - End Year" id="edu" value="<?php echo $row['m_syey']?>">
</p>
</div>
</div>

<div id="Certificate" class="tabcontent">
  <!-- <h3 >Certificate</h3> -->
    <button class="btn2">
        Add more
    </button>
  <p class="para-profileContainer">
    <input type="file"  class="form-input" name="resume" placeholder="Add Resume" id="resume" accept=".doc,.docx,.pdf" value="<?php echo $row['resume']?>">
</p>
</div>
</div>


        <div class="form-group">
            
        </div>


        <!-- <form action="edit_profile.php"> -->
             <button type="submit" name="update" value="update" class="btn btn-primary">Update</button>
    <a href="profile.php" id="btn1">Cancel</a>
        <!-- </form> -->
    </div>
    <div class="section3">
        <div class="projectsSection-profileContainer detailed-profileContainer">
            <h2 class="heading-profileContainer"><label for="projects" class="form-label">Projects</label><a href="#"><i class="fa fa-pencil" aria-hidden="true" class="edit_pencil" style="float: right;"></i></a> </h2>
            <p class="para-profileContainer">
                <span><input type="text"  class="form-input" name="projects" placeholder="Enter Your Projects" id="projects" value="<?php echo $row['projects']?>" required></span>
            </p>
        </div>
        <div class="langSection-profileContainer detailed-profileContainer">
            <h2 class="heading-profileContainer"><label for="lang" class="form-label">Languages</label><a href="#"><i class="fa fa-pencil" aria-hidden="true" id="edit_pencil"></i> </h2>
            <p class="para-profileContainer">
                <span><input type="text"  class="form-input" name="lang" placeholder="Add Languages" id="lang" value="<?php echo $row['lang']?>" required style="text-decoration: none;list-style: none;">
                </span>
            </p>
        </div>
        <section class="socialProfiles-profileContainer">
                <div class="singleItem_socialProfiles-profileContainer">

                    <i class="fa fa-github-square" aria-hidden="true"></i>
                        <span>
                          <label for="git" class="form-label" id="git1">Github </label> 
                <input type="text" class="form-input" placeholder="Github Profile" id="git"
                                name="git"value="<?php echo $row['git']?>"  required> 
                        </span>
                </div>
                <div class="singleItem_socialProfiles-profileContainer">

                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                <span>
                                    <label for="linkedin" class="form-label" id="linkedin1">LinkedIn </label> 
                <input type="text" class="form-input" placeholder="LinkedIn Profile" id="linkedin"
                                name="linkedin" value="<?php echo $row['linkedin']?>" required>
                                </span>
                </div>

                <div class="singleItem_socialProfiles-profileContainer">

                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                <span>
                                    <label for="twitter" class="form-label"id="twitter1">Twitter </label> 
                <input type="text" class="form-input" placeholder="Twitter Profile" id="twitter"
                                name="twitter" value="<?php echo $row['twitter']?>" required>
                                </span>
                </div>
            </section>

    <!-- </div> -->
    </form>
<?php
  if(isset($_POST['update']))
  {
    $skill=$_POST['skill'];
$about=$_POST['about'];
$git=$_POST['git'];
$linkedin=$_POST['linkedin'];
$twitter=$_POST['twitter'];
$b_colname=$_POST['b_colname'];
$b_degree=$_POST['b_degree'];
$b_syey=$_POST['b_syey'];
$m_colname=$_POST['m_colname'];
$m_degree=$_POST['m_degree'];
$m_syey=$_POST['m_syey'];
$compname=$_POST['compname'];
$role=$_POST['role'];
$duration=$_POST['duration'];
$projects=$_POST['projects'];
$lang=$_POST['lang'];
$resume=$_POST['resume'];

$query ="UPDATE profile_db_js SET skill='$skill', about='$about',git='$git',linkedin='$linkedin', twitter='$twitter', b_colname='$b_colname',b_degree='$b_degree',b_syey='$b_syey',m_colname='$m_colname',m_degree='$m_degree',m_syey='$m_syey',compname='$compname', role='$role',duration='$duration',projects='$projects',lang='$lang', resume='$resume' where jobs_id='$j_id'  ";
$query_run = mysqli_query($conn,$query);

if($query_run==True)
{
    echo '<script> alert("Data Updated");</script>';
    // header("location:profile.php");
    //redirect to profile pg
  }
  else
  {
    echo '<script> alert("Data Not Updated");</script>';
  }
}
?>

          </section>
</div>
<?php }}}} ?>
        

        
</body>
<script>
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
  evt.currentTarget.className += "active";
}
</script>
</html>
