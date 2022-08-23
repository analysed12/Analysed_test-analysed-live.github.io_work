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
			$result=mysqli_query($conn,"Select * from contacts where fname LIKE '%$search%' and company='$company_name'");
		}

		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
	?>

                <div class="row">
                    <div class="column">
                        <input type="checkbox" id="c1" class="checkbox" >
                        <label for="c1"></label>
                    </div>
                    <div class="column">
                        <p class="col-1">Last interacted</p>
                        <span class="col-span-1">05-05-2020</span>
                    </div>
                    <div class="column">
                        <img src="./img/Ellipse -4@2x.png" class="img">
                    </div>
                    <div class="column">
                        <p class="col-2"><?php echo $row["fname"]; ?> <span><?php echo $row["phone"]; ?></span></p>
                        <span class="col-span-2"><?php echo $row["email"]; ?></span>
                    </div>
                    <div class="column" style="margin-left: 0px;margin-right: 20px;">
                        <p class="col-3">Added on <span><?php echo $row["added_on"]; ?></span></p>
                        <span class="col-span-3"><a href='./includes/delete.php?id=<?php echo $row["contact_id"] ?>' onclick='checkdelete()' style="color:red;text-decoration:none"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></span>
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

		$sql="SELECT * from contacts where company='$company_name' order by added_on desc";
        $result=$conn->query($sql);

    }
    else if($_POST['sort_val'] == "Old"){ 

        $sql="SELECT * from contacts where company='$company_name' order by added_on asc";
        $result=$conn->query($sql);

    }
    else{

        $sql="SELECT * from contacts where company='$company_name'";
        $result=$conn->query($sql);

    }
    if($result){
        while($row=$result->fetch_assoc()){
            ?>
			 <div class="row">
                    <div class="column">
                        <input type="checkbox" id="c1" class="checkbox" >
                        <label for="c1"></label>
                    </div>
                    <div class="column">
                        <p class="col-1">Last interacted</p>
                        <span class="col-span-1">05-05-2020</span>
                    </div>
                    <div class="column">
                        <img src="./img/Ellipse -4@2x.png" class="img">
                    </div>
                    <div class="column">
                        <p class="col-2"><?php echo $row["fname"]; ?> <span><?php echo $row["phone"]; ?></span></p>
                        <span class="col-span-2"><?php echo $row["email"]; ?></span>
                    </div>
                    <div class="column" style="margin-left: 0px;margin-right: 20px;">
                        <p class="col-3">Added on <span><?php echo $row["added_on"]; ?></span></p>
                        <span class="col-span-3"><a href='./includes/delete.php?id=<?php echo $row["contact_id"] ?>' onclick='checkdelete()' style="color:red;text-decoration:none"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></span>
                    </div>
                </div>

   
                   
                    <?php
                }
            }
        }

     ?>




