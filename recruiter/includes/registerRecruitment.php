
<?php
    
    session_start();
   

    if(isset($_SESSION['info'])){
        extract($_SESSION['info']);

        $conn = mysqli_connect('localhost','root','','analysed');

         $sql = mysqli_query($conn,"INSERT INTO joblistings (position,industry,job_description,job_type,client_company,contact_client_company,business_dev_manager,status,priority,job_reference_number,designation,recruiters_name,openings,start_date,end_date,country,state,district,starting_time,ending_time,client_margin,advert_contact_name,advert_contact_no,skills,qualification,eligibility_criteria,required_experience,relevant_experience,irrelevant_experience,roles_and_opportunity,growth_opportunity,learning_opportunity,emp_endorsement,emp_benefits,reputation_of_org,advert_job_description,workspace_view,transportation,package_type,package_duration,package,bill_rate,markup,days_on,days_off,shift_pattern) VALUES ('$Position','$Industry','$file','$Jobtype','$client_company','$Contact_at_client_company','$Business_Development_Manager','$Status','$Priority','$Job_reference_number','$Designation','$Recruiters_name','$Number_of_openings','$Start_Date','$End_Date','$Joblocation1','$Joblocation2','$Joblocation3','$Starting_time','$Ending_time','$Client_margin','$Contact_information_for_the_advert','$advert_contact_no','$skills','$Qualifications','$Eligibility_criteria','$Experience_requirement','$Relevant_experience','$Irrelevant_experience','$Roles_and_responsibilities','$Growth_oppurtunities','$Learning_oppurtunities','$Employeee_endorsements','$Employee_benefits','$Reputation_of_organisation','$advert_Job_description','$Workspace_view','$Transportation','$Package_type','$Package_duration','$Package','$Bill_rate','$Markup','$Days_on','$Days_off','$Shift_pattern')");

        if($sql){
            unset($_SESSION['info']);

            echo 'Data has been saved successfully!';

            echo '<a href="../createRecruitement.php">Go back!</a>';


        }else{
            echo mysqli_error($conn);
        }
    }
   
?>
