<!DOCTYPE html>
<html>

<head>
    <title>EDIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profile_remove.css">
</head>
<style type="text/css">
.c1 {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    margin-left: 25px;
    margin-top: 30px;
}

.profileContainer {
    display: flex !important;
    align-items: flex-start;
    justify-content: flex-start;
    flex-wrap: wrap;
}

.leftArea-profileContainer {
    margin-right: 26%;
    height: 70%;
}

.rightArea-profileContainer {
    flex-basis: 70%;
    width: 60%;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}

.detailed-profileContainer {
    margin-bottom: 40px;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    padding: 20px 24px;
    border-radius: 20px;
    box-shadow: 0px 0px 10px lightgrey;
    width: 200%;
}

.section2 {
    margin-bottom: 40px;
    margin-left: -225px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    padding: 10px;
    border-radius: 20px;
    box-shadow: 0px 0px 10px lightgrey;
    width: 200%;
    height: auto;
    justify-content: space-around;
}

.btn {
    margin-left: -464px;
}

#btn1 {
    margin-top: -30px;
    margin-left: 30px;
}

#btn1,
.btn {
    display: flex;
    width: 230px;
    align-items: center;
    justify-content: center;
    background: white;
    color: #3598db;
    border: 1px solid #3598db;
    width: 78%;
    height: 30px;
    border-radius: 8px;
}

.section3 {
    width: 39%;
    position: relative;
    top: -651px;
    left: 497px;
}
</style>

<body>
    <?php
    session_start();
    include ('connection1.php');
    include ('header.php');
    $r_id=$_SESSION['recruiter_id'];
    $sql="select * from profile_db_rec WHERE recruiter_id='$r_id'";
    $query_run=mysqli_query($conn,$sql);
    if($query_run == TRUE)
    {
        while($row=mysqli_fetch_assoc($query_run))
        {
            $sql_rec="select * from recruiter WHERE recruiter_id='$r_id'";
    $query_run_rec=mysqli_query($conn,$sql_rec);
    if($query_run_rec == TRUE)
    {
        while($row_rec=mysqli_fetch_assoc($query_run_rec))
        {
            ?>
    <div class="container c1">
        <section class="profileContainer small_Container">
            <div class="leftArea-profileContainer">
                <img src="./img/Screenshot_2021-03-22 Flow 1.png" class="profilepic-profileContainer">
                <div class="contactInfo-profileContainer">
                    <section class="profileContactInfo-profileContainer">

                        <p class="name_profileContactInfo-profileContainer"> <?php echo $row_rec['firstname'];?>
                            <?php echo $row_rec['lastname'];?> </p>
                        <p class="designation_profileContactInfo-profileContainer">Lead -
                            <?php echo $row_rec['designation'];?></p>
                        <p class="location_profileContactInfo-profileContainer"><i class="fa fa-map-marker"
                                aria-hidden="true"></i> <?php echo $row_rec['off_address'];?></p>
                        <p class="email_profileContactInfo-profileContainer"><i class="fa fa-envelope"
                                aria-hidden="true"></i> <?php echo $row_rec['email'];?></p>
                        <p class="phone_profileContactInfo-profileContainer"> <i class="fa fa-phone"
                                aria-hidden="true"></i> <?php echo $row_rec['number'];?></p>

                    </section>
                </div>
            </div>
            <form action="" method="POST">
                <div class="rightArea-profileContainer">
                    <div class="profileSection-profileContainer detailed-profileContainer">
                        <h2 class="heading-profileContainer"><label for="about" class="form-label">About</label> <a
                                href="#"><i class="fa fa-pencil" aria-hidden="true" id="edit_pencil"></i> </a></h2>
                        <p class="para-profileContainer"> <input type="text" name="about" class="form-input"
                                placeholder=" Enter About" id="about" name="about" value="<?php echo $row['about']?>">
                        </p>
                    </div>
                    <div class="section2">
                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'Experience')">Experience</button>
                            <button class="tablinks" onclick="openCity(event, 'Education')">Education</button>
                        </div>


                        <div id="Experience" class="tabcontent">
                            <!-- <h3 >Experience</h3> -->
                            <button class="btn2">
                                Add more
                            </button>
                            <p class="para-profileContainer">
                                <input type="text" class="form-input" name="compname" placeholder="Company Name"
                                    id="exp" value="<?php echo $row['compname']?>">
                                <input type="text" class="form-input" name="role" placeholder="Role" id="exp"
                                    value="<?php echo $row['role']?>">
                                <input type="text" class="form-input" name="duration" placeholder="Duration" id="exp"
                                    value="<?php echo $row['duration']?>">
                            </p>
                        </div>

                        <div id="Education" class="tabcontent">
                            <div class="edu1">
                                <p class="para-profileContainer">Bachelor's Degree
                                    <input type="text" class="form-input" name="b_colname" placeholder="College Name"
                                        id="edu" value="<?php echo $row['b_colname']?>">
                                    <input type="text" class="form-input" name="b_degree" placeholder="Degree" id="edu"
                                        value="<?php echo $row['b_degree']?>">
                                    <input type="text" class="form-input" name="b_syey"
                                        placeholder="Start Year - End Year" id="edu"
                                        value="<?php echo $row['b_syey']?>">
                                </p>
                            </div>
                            <div class="edu2">
                                <p class="para-profileContainer">Master's Degree
                                    <input type="text" class="form-input" name="m_colname" placeholder="College Name"
                                        id="edu" value="<?php echo $row['m_colname']?>">
                                    <input type="text" class="form-input" name="m_degree" placeholder="Degree" id="edu"
                                        value="<?php echo $row['m_degree']?>">
                                    <input type="text" class="form-input" name="m_syey"
                                        placeholder="Start Year - End Year" id="edu"
                                        value="<?php echo $row['m_syey']?>">
                                </p>
                            </div>
                        </div>

                    </div>
                    <!-- <form action="edit_profile.php"> -->
                    <!-- <a href="profile_db_rec.php"> -->
                    <button type="submit" name="update" value="update" class="btn btn-primary">Update</button>
                    <a href="profile.php" id="btn1">Cancel</a>
                    <!-- </a> -->
                    <!-- </form> -->
                </div>
                <div class="section3">
                    <div class="projectsSection-profileContainer detailed-profileContainer">
                        <h2 class="heading-profileContainer"><label for="projects" class="form-label">Projects</label><a
                                href="#"><i class="fa fa-pencil" aria-hidden="true" class="edit_pencil"
                                    style="float: right;"></i></a> </h2>
                        <p class="para-profileContainer">
                            <span><input type="text" class="form-input" name="projects"
                                    placeholder="Enter Your Projects" id="projects"
                                    value="<?php echo $row['projects']?>"></span>
                        </p>
                    </div>
                </div>

            </form>


            <!-- <form action="edit_profile.php"> -->
            <!-- <input type="hidden" name="id " value="<?php //echo $row['recruiter_id'] ?>"> -->
            <!-- ?php

                            $sql= "select * from recruiter ;  ";

                             $run = mysqli_query($conn,$sql);
                            

                            if($row =mysqli_fetch_assoc($run)) {

                            ?> -->
            <!-- <a style="text-decoration:none" href="edit_profile.php?r_id=<?php //echo $row['recruiter_id'] ?>">
            <input type="" name="edit" value="EDIT" class="btn btn-success" id="btn1"></a> -->
            <!-- </form> -->



            <?php
  if(isset($_POST['update']))
  {
$about=$_POST['about'];
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

$query ="UPDATE profile_db_rec SET about='$about',b_colname='$b_colname',b_degree='$b_degree',b_syey='$b_syey',m_colname='$m_colname',m_degree='$m_degree',m_syey='$m_syey',compname='$compname', role='$role',duration='$duration',projects='$projects' where recruiter_id='$r_id'  ";
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
    <?php }} }}?>



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
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

</html>