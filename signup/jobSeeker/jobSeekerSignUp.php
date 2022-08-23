
<link rel="stylesheet" href="./signup/jobSeeker/css/jobSeekerSignUp.css"> <!--linking css file-->
<?php include('navBar.php')?><!--including navigation bar-->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Jobseeker Signup</title> <!--giving title to the page-->
<div class="title">   <!--class for the title (Signing Up as Recruiter)-->
<p> Signing Up as </p>
<h2>Jobseeker</h2>
</div>

<form action="jobSeekerSignUp.php" method="post" name="myForm" enctype="multipart/form-data">
                  <div class="tab">
                  <div class="personal-details">
	                        <p> Add personal details</p>

		                       <!-- First Name-->

                           <label class="name">Name<span>*</span></label>
						               <div class="first-name">
                           <input type="text" name="firstname" id="first_name" placeholder="First name" oninput="this.className=''" required>
                           </div>


					                 <!-- Last Name-->

					                 <div class="last-name">
                           <input type="text" name="lastname" id="last_name" placeholder="Last name" oninput="this.className=''" required>
                           </div>


					                 <!--Email-->

						               <div class="email">
                           <label>Email address<span>*</span></label>
                           <input type="email" name="js_email" id="email" placeholder="Email address" oninput="this.className=''" required>
                           </div>


						               <!--Phone number-->

						               <div class="phone">
                           <label class="number">Phone number<span>*</span></label>
                           <input type="tel" maxlength='10' name="number" id="mobile_no" placeholder="Phone number" oninput="this.className=''" required>
                           </div>

                           <!-- Address-->

					                 <div class="address">
                           <label>Address<span>*</span></label>
                           <input type="text" name="address" id="address" placeholder="Address" class="add" oninput="this.className=''" required>
                	         </div>

</div>
</div>

                     <div class="tab">
                     <div class="personal-details">
	                      <p> Add career details</p>

                           <!-- Qualification-->

                           <div class="qualification">
                           <label >Qualification<span>*</span></label>
                            <div class="select-qualification "  oninput="this.className=''" style="flex-wrap: nowrap;">

                           <select id="qualification-options" name="qualification">

                                <option value="Select qualification">Select qualification</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Undergraduate">Undergraduate</option>
                                <option value="Postgraduate">Postgraduate</option>
</select>
</div>
</div>



                           <!-- Year of passing-->
                           <div class="year-of-passing">
                           <label >Year of passing<span>*</span></label>
                           <input type="text" name="yearofpassing" id="year-of-passing" placeholder="Enter year of passing" oninput="this.className=''" required>
                           </div>

                     <!-- Experience-->

                     <div class="experience">
                           <label >Experience<span>*</span></label>
                           <input type="number" name="experience" id="experience" placeholder="Enter experience in years" oninput="this.className=''" required>
                           </div>

                           <!-- Skills-->

					                 <div class="skills">
                           <label >Skills<span>*</span></label>
                           <input type="text" name="skills" id="skills" placeholder="Enter Skills separated by commas.Ex:- Java, Html,MySql" oninput="this.className=''" required>
                           </div>
</div>

                                    <!-- Resume upload
                                     <div class="resume">
                                   <label> Resume<span>*</span></label>
                                   <input type="file" name="resume" oninput="this.className=''" required/> </div>-->

 </div>
</div>


                 <div class="tab">
                 <div class="personal-details">
	                      <p> Choose a password</p>
                             <!-- Password-->

                             <div class="choose-a-password">
                             <label >Select a Password<span>*</span></label>
                             <input type="password" name="password" id="password" placeholder="Enter Password" oninput="this.className=''" required>
                             </div>


                             <!-- Password-->

                             <div class="repeat-password">
                             <label >Repeat Password<span>*</span></label>
                             <input type="text" name="confirmpassword" id="confirmpassword" placeholder="Repeat Password" oninput="this.className=''" required>
                             </div>
                   </div>
                   </div>


                   <!--Next and Previous button-->
                   <div style="overflow:auto;">
                    <div style="float:right;">
                    <button type="button" id="prevBtn" onClick="nextPrev(-1)"> Previous</button>
                    <button type="button" id="nextBtn"  onClick="nextPrev(1)"> Next</button>
                </div>
                </div>



<!--Progress steps-->

                <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
<!--Submit button-->
            <div class="submitBtn">
            <input type="submit" id="submitBtn" name="register" value="Submit">
            </div>
  </form>

  <!--End of html form-->


<!--Beginning of javaScript-->
         <script>
             var currentTab=0; //current tab is set to be the first tab(0)
             showTab(currentTab); //display the current tab

  function showTab(n){
                 // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").style.display="none";
  } else {
    document.getElementById("nextBtn").style.display = "inline";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

//form validation



function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      alert("Input is required");
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}



function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<!--End of javascript-->



<!--Beginning of php-->
<?php
//$message='';
$con=mysqli_connect('localhost','root','','analysed');
if($con){
    //echo "done";
}
else{
    echo "failed".mysqli_connect_error();
}

if(isset($_POST["register"])){

$check_id=2;
$user_id=rand(999999,111111);
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$js_email=$_POST['js_email'];
$number=$_POST['number'];
$address=$_POST['address'];
$qualification=$_POST['qualification'];
$yearofpassing=$_POST['yearofpassing'];
$skills=$_POST['skills'];
$experience=$_POST['experience'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
//$target_dir="resume/";
//$target_file=$target_dir . basename($_FILES["resume"]["name"]);
//$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//$check=getimagesize($_FILES["resume"]["tmp_name"]);
//$image=basename($_FILES["resume"]["name"]);


if($confirmpassword!=$password){
  echo "<script>alert('Password and confirm password are different!')</script>"; //alert message
     echo "<script>window.open('jobSeekerSignUp.php','_self')</script>"; //redirects back to signup page
   }
   else  //if(move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file))
   {
   $reg="INSERT INTO jobseeker(check_id, user_id,firstname,lastname,js_email,number,address,qualification,yearofpassing,skills,experience,password,confirmpassword)VALUES('$check_id','$user_id','$firstname','$lastname','$js_email','$number','$address','$qualification','$yearofpassing','$skills','$experience','$password','$confirmpassword')";

mysqli_query($con,$reg);
echo "<script>alert('Registration Successful')</script>"; //alert message
echo "<script>window.open('jobSeekerLogIn.php','_self')</script>"; //redirects to login page

}

  echo "<script>alert ('Registration Unsuccessful')</script>";

}

?>

<!--end of php-->
