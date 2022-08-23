<?php
session_start();
$recruiter_id=$_SESSION['recruiter_id'];
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

// echo "<pre>";
// print_r($_POST);
// $compname = count($_POST["compname"]);
// echo $compname;


if( !empty($recruiter_id)|| !empty($about)|| !empty($b_colname)|| !empty($b_degree)|| !empty($b_syey)|| !empty($m_colname)|| !empty($m_degree)|| !empty($m_syey)||  !empty($compname)|| !empty($role) || !empty($duration) || !empty($projects) )
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
		
		$SELECT="SELECT recruiter_id From profile_db_rec where recruiter_id=? Limit 1";
		$INSERT="INSERT Into profile_db_rec (recruiter_id,about,b_colname,b_degree,b_syey,m_colname,m_degree,m_syey,compname,role,duration,projects) values (?,?,?,?,?,?,?,?,?,?,?,?)";


	// 	for($i=0;$i<$compname;$i++){
	// 		$INSERT .="'".$_POST["about"]."','".$_POST["b_colname"]."','".$_POST["b_degree"]."','".$_POST["b_syey"]."','".$_POST["m_colname"]."','".$_POST["m_degree"]."','".$_POST["m_syey"]."','".$_POST["compname"][$i]."', '".$_POST["role"][$i]."', '".$_POST["duration"][$i]."','".$_POST["projects"]."')";
	// 	}
	// $finalQuery = rtrim($INSERT,',');
	// $insertdata = mysqli_query($conn,$finalQuery); 
	// if(!empty($insertdata)){
	// 	echo "Data submitted";
	// }
 		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("i",$recruiter_id);
		$stmt->execute();
		$stmt->bind_result($recruiter_id);
		$stmt->store_result();
		$rnum=$stmt->num_rows;

		if($rnum==0)
		{
			$stmt->close();
			$stmt=$conn->prepare($INSERT);
			// echo "$recruiter_id";
			$stmt->bind_param("isssssssssss",$recruiter_id,$about,$b_colname,$b_degree,$b_syey,$m_colname,$m_degree,$m_syey, $compname,$role,$duration,$projects);
			$stmt->execute();
			echo "Your data is recorded successfully";

		}
		else
		{
			echo  '<script> alert("Data Already Filled");</script>';
			
		}
		$stmt->close();
		$conn->close();
	}
}
else
{
	echo '<script> alert("All Fields are required");</script>';
	die();
} 
?>
