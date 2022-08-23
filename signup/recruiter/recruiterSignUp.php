<link rel="stylesheet" href="./css/recruiterSignUp.css"> <!--linking css file-->
<?php include('navBar.php')?><!--including navigation bar-->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Recruiter Signup</title> <!--giving title to the page-->
<div class="title">   <!--class for the title (Signing Up as Recruiter)-->
<p> Signing Up as </p>
<h2> Recruiter</h2>
</div>

<form action="recruiterSignUp.php" method="post" name="myForm"> 
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
                           <input type="email" name="email" id="email" placeholder="Email address" oninput="this.className=''" required>
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
	                      <p> Add organization details</p>

                           <!-- Name of organization-->
                     
                           <div class="name-of-organization">
                           <label >Name of organization<span>*</span></label>
                           <input type="text" name="company_name" id="company_name" placeholder="Name of organization" oninput="this.className=''" required>
                           </div>	
				     

                           <!-- Designation-->
                     
					                 <div class="designation">
                           <label >Designation<span>*</span></label>
                           <input type="text" name="designation" id="designation" placeholder="Designation" oninput="this.className=''" required>
                	         </div>
                   

                           <!-- Officail email-->
                     
					                 <div class="offemail">
                           <label >Official Email<span>*</span></label>
                           <input type="email" name="off_email" id="off_email" placeholder="Official Email Id" oninput="this.className=''" required>
                           </div>	
				    

                           <!-- Company Address-->
                    
					                 <div class="company_address">
                           <label >Address<span>*</span></label>
                           <input type="text" name="off_address" id="off_address" placeholder="Address" oninput="this.className=''" required>
                	         </div>
                    

					                 <!-- Industry Type-->
                    
					                 <div class="industry">
                           <label >Industry<span>*</span></label>
                           <div class="industry-selectiion " name="industry" oninput="this.className=''" style="flex-wrap: nowrap;"><select>
								
<option value="select industry">Select Industry</option>
<option value="Airlines/Aviation">Airlines/Aviation</option>
<option value="Alternative Dispute Resolution">Alternative Dispute Resolution</option>
<option value="Alternative Medicine">Alternative Medicine</option>
<option value="Animation">Animation</option>
<option value="Apparel/Fashion">Apparel/Fashion</option>
<option value="Architecture/Planning">Architecture/Planning</option>
<option value="Arts/Crafts">Arts/Crafts</option>
<option value="Automotive">Automotive</option>
<option value="Aviation/Aerospace">Aviation/Aerospace</option>
<option value="Banking/Mortgage">Banking/Mortgage</option>
<option value="Biotechnology/Greentech">Biotechnology/Greentech</option>
<option value="Broadcast Media">Broadcast Media</option>
<option value="Building Materials">Building Materials</option>
<option value="Business Supplies/Equipment">Business Supplies/Equipment</option>
<option value="Capital Markets/Hedge Fund/Private Equity">Capital Markets/Hedge Fund/Private Equity</option>
<option value="Chemicals">Chemicals</option>
<option value="Civic/Social Organization">Civic/Social Organization</option>
<option value="Civil Engineering">Civil Engineering</option>
<option value="Commercial Real Estate">Commercial Real Estate</option>
<option value="Computer Games">Computer Games</option>
<option value="Computer Hardware">Computer Hardware</option>
<option value="Computer Networking">Computer Networking</option>
<option value="Computer Software/Engineering">Computer Software/Engineering</option>
<option value="Computer/Network Security">Computer/Network Security</option>
<option value="Construction">Construction</option>
<option value="Consumer Electronics">Consumer Electronics</option>
<option value="Consumer Goods">Consumer Goods</option>
<option value="Consumer Services">Consumer Services</option>
<option value="Cosmetics">Cosmetics</option>
<option value="Dairy">Dairy</option>
<option value="Defense/Space">Defense/Space</option>
<option value="Design">Design</option>
<option value="E-Learning">E-Learning</option>
<option value="Education Management">Education Management</option>
<option value="Electrical/Electronic Manufacturing">Electrical/Electronic Manufacturing</option>
<option value="Entertainment/Movie Production">Entertainment/Movie Production</option>
<option value="Environmental Services">Environmental Services</option>
<option value="Events Services">Events Services</option>
<option value="Executive Office">Executive Office</option>
<option value="Facilities Services">Facilities Services</option>
<option value="Farming">Farming</option>
<option value="Financial Services">Financial Services</option>
<option value="Fine Art">Fine Art</option>
<option value="Fishery">Fishery</option>
<option value="Food Production">Food Production</option>
<option value="Food/Beverages">Food/Beverages</option>
<option value="Fundraising">Fundraising</option>
<option value="Furniture">Furniture</option>
<option value="Gambling/Casinos">Gambling/Casinos</option>
<option value="Glass/Ceramics/Concrete">Glass/Ceramics/Concrete</option>
<option value="Government Administration">Government Administration</option>
<option value="Government Relations">Government Relations</option>
<option value="Graphic Design/Web Design">Graphic Design/Web Design</option>
<option value="Health/Fitness">Health/Fitness</option>
<option value="Higher Education/Acadamia">Higher Education/Acadamia</option>
<option value="Hospital/Health Care">Hospital/Health Care</option>
<option value="Hospitality">Hospitality</option>
<option value="Human Resources/HR">Human Resources/HR</option>
<option value="Import/Export">Import/Export</option>
<option value="Individual/Family Services">Individual/Family Services</option>
<option value="Industrial Automation">Industrial Automation</option>
<option value="Information Services">Information Services</option>
<option value="Information Technology/IT">Information Technology/IT</option>
<option value="Insurance">Insurance</option>
<option value="International Affairs">International Affairs</option>
<option value="International Trade/Development">International Trade/Development</option>
<option value="Internet">Internet</option>
<option value="Investment Banking/Venture">Investment Banking/Venture</option>
<option value="Investment Management/Hedge Fund/Private Equity">Investment Management/Hedge Fund/Private Equity</option>
<option value="Judiciary">Judiciary</option>
<option value="Law Enforcement">Law Enforcement</option>
<option value="Law Practice/Law Firms">Law Practice/Law Firms</option>
<option value="Legal Services">Legal Services</option>
<option value="Legislative Office">Legislative Office</option>
<option value="Leisure/Travel">Leisure/Travel</option>
<option value="Library">Library</option>
<option value="Logistics/Procurement">Logistics/Procurement</option>
<option value="Luxury Goods/Jewelry">Luxury Goods/Jewelry</option>
<option value="Machinery">Machinery</option>
<option value="Management Consulting">Management Consulting</option>
<option value="Maritime">Maritime</option>
<option value="Market Research">Market Research</option>
<option value="Marketing/Advertising/Sales">Marketing/Advertising/Sales</option>
<option value="Mechanical or Industrial Engineering">Mechanical or Industrial Engineering</option>
<option value="Media Production">Media Production</option>
<option value="Medical Equipment">Medical Equipment</option>
<option value="Medical Practice">Medical Practice</option>
<option value="Mental Health Care">Mental Health Care</option>
<option value="Military Industry">Military Industry</option>
<option value="Mining/Metals">Mining/Metals</option>
<option value="Motion Pictures/Film">Motion Pictures/Film</option>
<option value="Museums/Institutions">Museums/Institutions</option>
<option value="Music">Music</option>
<option value="Nanotechnology">Nanotechnology</option>
<option value="Newspapers/Journalism">Newspapers/Journalism</option>
<option value="Non-Profit/Volunteering">Non-Profit/Volunteering</option>
<option value="Oil/Energy/Solar/Greentech">Oil/Energy/Solar/Greentech</option>
<option value="Online Publishing">Online Publishing</option>
<option value="Other Industry">Other Industry</option>
<option value="Outsourcing/Offshoring">Outsourcing/Offshoring</option>
<option value="Package/Freight Delivery">Package/Freight Delivery</option>
<option value="Packaging/Containers">Packaging/Containers</option>
<option value="Paper/Forest Products">Paper/Forest Products</option>
<option value="Performing Arts">Performing Arts</option>
<option value="Pharmaceuticals">Pharmaceuticals</option>
<option value="Philanthropy">Philanthropy</option>
<option value="Photography">Photography</option>
<option value="Plastics">Plastics</option>
<option value="Political Organization">Political Organization</option>
<option value="Primary/Secondary Education">Primary/Secondary Education</option>
<option value="Printing">Printing</option>
<option value="Professional Training">Professional Training</option>
<option value="Program Development">Program Development</option>
<option value="Public Relations/PR">Public Relations/PR</option>
<option value="Public Safety">Public Safety</option>
<option value="Publishing Industry">Publishing Industry</option>
<option value="Railroad Manufacture">Railroad Manufacture</option>
<option value="Ranching">Ranching</option>
<option value="Real Estate/Mortgage">Real Estate/Mortgage</option>
<option value="Recreational Facilities/Services">Recreational Facilities/Services</option>
<option value="Religious Institutions">Religious Institutions</option>
<option value="Renewables/Environment">Renewables/Environment</option>
<option value="Research Industry">Research Industry</option>
<option value="Restaurants">Restaurants</option>
<option value="Retail Industry">Retail Industry</option>
<option value="Security/Investigations">Security/Investigations</option>
<option value="Semiconductors">Semiconductors</option>
<option value="Shipbuilding">Shipbuilding</option>
<option value="Sporting Goods">Sporting Goods</option>
<option value="Sports">Sports</option>
<option value="Staffing/Recruiting">Staffing/Recruiting</option>
<option value="Supermarkets">Supermarkets</option>
<option value="Telecommunications">Telecommunications</option>
<option value="Textiles">Textiles</option>
<option value="Think Tanks">Think Tanks</option>
<option value="Tobacco">Tobacco</option>
<option value="Translation/Localization">Translation/Localization</option>
<option value="Transportation">Transportation</option>
<option value="Utilities">Utilities</option>
<option value="Venture Capital/VC">Venture Capital/VC</option>
<option value="Veterinary">Veterinary</option>
<option value="Warehousing">Warehousing</option>
<option value="Wholesale">Wholesale</option>
<option value="Wine/Spirits">Wine/Spirits</option>
<option value="Wireless">Wireless</option>
<option value="Writing/Editing">Writing/Editing</option>
                             </select>
                             </div>
                             </div>
                             

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
  </form>    <!--End of html form-->


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
    

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$number=$_POST['number'];
$address=$_POST['address'];
$company_name=$_POST['company_name'];
$designation=$_POST['designation'];
$off_email=$_POST['off_email'];
$off_address=$_POST['off_address'];
$industry=$_POST['industry'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];

if($confirmpassword!=$password){
  echo "<script>alert('Password and confirm password are different!')</script>"; //alert message
    echo "<script>window.open('recruiterSignUp.php','_self')</script>"; //redirects back to signup page
  }
  else{


    //query for registration
$reg="INSERT INTO recruiter(firstname,lastname,email,number,address,company_name,designation,off_email,off_address,industry,password,confirmpassword)VALUES('$firstname','$lastname','$email','$number','$address','$company_name','$designation','$off_email','$off_address','$industry','$password','$confirmpassword')";

mysqli_query($con,$reg);
echo "<script>alert('Registration Successful')</script>"; //alert message
echo "<script>window.open('recruiterLogIn.php','_self')</script>"; //redirects to login page
}
}
?>

<!--end of php-->
