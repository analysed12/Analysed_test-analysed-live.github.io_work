<?php include('connection1.php') ?>

<!--- Query for searchbox--->

<?php
session_start();
if(isset($_SESSION['company_name']))
{
	$company_name=$_SESSION['company_name'];
	if (isset($_POST['action']))
	{

		if (isset($_POST['search']))
		{
			$search=$_POST['search'];
			$result=mysqli_query($conn,"Select * from joblistings where position LIKE '%$search%' and client_company='$company_name'");
		}

		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
	?>

                                        <div class="row">
                        <p class="added-class-1">Added on <span><?php echo $row["added_on"]; ?></span></p>
                        <p class="added-class-2">Last Edited <span>05-08-2020</span></p>
                        <div class="column">
                            <input type="checkbox" id="c1" class="checkbox">
                            <label for="c1"></label>
                        </div>
                        <div class="column">
                            <span  class="span-class-red"></span>
                        </div>
                        <div class="column">
                            <p class="col-2"><?php echo $row["job_type"]; ?></p>
                        </div>
                        <div class="column">
                            <p class="col-3"><?php echo $row["position"]; ?></p>
                            <p class="col-3-1"><?php echo $row["job_id"]; ?></p>
                            <span class="col-span-3"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $row["country"]; ?></span>
                        </div>
                        <div class="column">
                            <p class="col-4">Company contact</p>
                            <p class="col-4-1"><?php echo $row["contact_client_company"]; ?></p>
                            <span class="col-span-4">sandrovicente@gmail.com</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-eye" aria-hidden="true"></i></p>
                            <span class="col-span-5">10</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-clipboard" aria-hidden="true"></i></p>
                            <span class="col-span-5">6</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-user" aria-hidden="true"></i></p>
                            <span class="col-span-5">1/4</span>
                        </div>
                        <div class="column">
                            <p class="col-6">Recruiter</p>
                            <p class="col-6-1"><?php echo $row["recruiters_name"]; ?></p>
                            <span class="col-span-6">sandrovicente@gmail.com</span>
                        </div>
                    </div>
	<?php
	}
}
else{
    ?>
    <h3 style="margin-top:30px;">No records found matching the search criteria.</h3>
    <?php 
    }
  }
}
?>

<!--- Query for sortby filters --->

<?php
if(isset($_POST['sort_val'])){
	$company_name=$_SESSION['company_name'];

	if($_POST['sort_val'] == "Recent"){ 

		$sql="SELECT * from joblistings where client_company='$company_name' order by added_on desc";
        $result=$conn->query($sql);

    }
    else if($_POST['sort_val'] == "Old"){ 

        $sql="SELECT * from joblistings where client_company='$company_name' order by added_on asc";
        $result=$conn->query($sql);

    }
    else{

        $sql="SELECT * from joblistings where client_company='$company_name'";
        $result=$conn->query($sql);

    }
    if($result){
        while($row=$result->fetch_assoc()){
            ?>

                    <div class="row">
                        <p class="added-class-1">Added on <span><?php echo $row["added_on"]; ?></span></p>
                        <p class="added-class-2">Last Edited <span>05-08-2020</span></p>
                        <div class="column">
                            <input type="checkbox" id="c1" class="checkbox">
                            <label for="c1"></label>
                        </div>
                        <div class="column">
                            <span  class="span-class-red"></span>
                        </div>
                        <div class="column">
                            <p class="col-2"><?php echo $row["job_type"]; ?></p>
                        </div>
                        <div class="column">
                            <p class="col-3"><?php echo $row["position"]; ?></p>
                            <p class="col-3-1"><?php echo $row["job_id"]; ?></p>
                            <span class="col-span-3"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $row["country"]; ?></span>
                        </div>
                        <div class="column">
                            <p class="col-4">Company contact</p>
                            <p class="col-4-1"><?php echo $row["contact_client_company"]; ?></p>
                            <span class="col-span-4">sandrovicente@gmail.com</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-eye" aria-hidden="true"></i></p>
                            <span class="col-span-5">10</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-clipboard" aria-hidden="true"></i></p>
                            <span class="col-span-5">6</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-user" aria-hidden="true"></i></p>
                            <span class="col-span-5">1/4</span>
                        </div>
                        <div class="column">
                            <p class="col-6">Recruiter</p>
                            <p class="col-6-1"><?php echo $row["recruiters_name"]; ?></p>
                            <span class="col-span-6">sandrovicente@gmail.com</span>
                        </div>
                    </div>

                    <?php
                }
            }
        }

     ?>




