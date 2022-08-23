<?php
// $recruiter_id=$_POST['recruiter_id'];
// $firstname=$_POST['firstname'];
session_start();
$jobs_id=$_SESSION['jobSeekerID'];
$skill=$_POST['skill'];
$git=$_POST['git'];
$linkedin=$_POST['linkedin'];
$twitter=$_POST['twitter'];
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
$lang=$_POST['lang'];
$resume=$_POST['resume'];


// echo "<pre>";
// print_r($_POST);
// $compname = count($_POST["compname"]);
// echo $compname;


 $r_id=$_GET['r_id'];
 $r_id=$_GET['r_id'];

if( !empty($jobs_id)|| !empty($skill)|| !empty($git)|| !empty($linkedin) || !empty($twitter)|| !empty($about)|| !empty($b_colname)|| !empty($b_degree)|| !empty($b_syey)|| !empty($m_colname)|| !empty($m_degree)|| !empty($m_syey)|| !empty($compname)|| !empty($role) || !empty($duration) || !empty($projects)|| !empty($lang)|| !empty($resume) )
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
		
		$SELECT="SELECT jobs_id From profile_db_js where jobs_id=? Limit 1";
		$INSERT="INSERT Into profile_db_js (jobs_id,skill,git,linkedin,twitter, about, b_colname, b_degree,b_syey, m_colname, m_degree,m_syey,compname,role,duration,projects, lang, resume) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("i",$jobs_id);
		$stmt->execute();
		$stmt->bind_result($jobs_id);
		$stmt->store_result();
		$rnum=$stmt->num_rows;

		if($rnum==0)
		{
			$stmt->close();
			$stmt=$conn->prepare($INSERT);
			$stmt->bind_param("isssssssssssssssss",$jobs_id,$skill,$git,$linkedin,$twitter,$about, $b_colname,$b_degree,$b_syey,$m_colname,$m_degree,$m_syey,$compname,$role,$duration,$projects,$lang,$resume);
			$stmt->execute();

			echo "Your data is recorded successfully";

		}
		else
		{
			echo  '<script> alert("Data Already Filled");</script>';
			header("location:profile_js.php");
		}
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
