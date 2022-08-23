<?php
// $recruiter_id=$_POST['recruiter_id'];
// $firstname=$_POST['firstname'];
$jobseeker_id=$_POST['jobseeker_id'];
$skill=$_POST['skill'];
$git=$_POST['git'];
$linkedin=$_POST['linkedin'];
$twitter=$_POST['twitter'];
$about=$_POST['about'];
$colname=$_POST['colname'];
$degree=$_POST['degree'];
$syey=$_POST['syey'];
$compname=$_POST['compname'];
$role=$_POST['role'];
$duration=$_POST['duration'];
$projects=$_POST['projects'];
$lang=$_POST['lang'];
$resume=$_POST['resume'];

 // $r_id=$_GET['r_id'];
 // $r_id=$_GET['r_id'];

if( !empty($jobseeker_id)|| !empty($skill)|| !empty($git)|| !empty($linkedin) || !empty($twitter)|| !empty($about)|| !empty($colname)|| !empty($degree)|| !empty($syey)|| !empty($compname)|| !empty($role) || !empty($duration) || !empty($projects) || !empty($hobbies) || !empty($lang)|| !empty($resume) )
{
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="analysed";


	$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
	if(mysqli_connect_error())
	{
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	} 
	else
	{
		
		// $SELECT="SELECT resume From profile_db where resume=? Limit 1";
		$INSERT="INSERT Into profile_db (jobseeker_id,skill,git,linkedin,twitter, about, colname, degree,syey,compname,role,duration,projects, hobbies, lang, resume) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		// $stmt=$conn->prepare($SELECT);
		// $stmt->bind_param("s",$resume);
		// $stmt->execute();
		// $stmt->bind_result($resume);
		// $stmt->store_result();
		// $rnum=$stmt->num_rows;

		// if($rnum==0)
		// {
		// 	$stmt->close();
			$stmt=$conn->prepare($INSERT);
			$stmt->bind_param("isssssssssssssss",$jobseeker_id,$skill,$git,$linkedin,$twitter,$about, $colname,$degree,$syey,$compname,$role,$duration,$projects,$hobbies,$lang,$resume);
			$stmt->execute();
			echo "Your data is recorded successfully";

		// }
		// else
		// {
		// 	echo "Please try again with different email";
		// }
		$stmt->close();
		$conn->close();
	}
}
else
{
	echo "All fields are required";
	die();
}


?>
