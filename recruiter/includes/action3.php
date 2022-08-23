<?php include('connection1.php') ?>

<!--- Query for searchbox--->

<?php
session_start();
if(isset($_SESSION['company_name'])) {

    $company_name=$_SESSION['company_name'];

	if (isset($_POST['action']))
	{

		if (isset($_POST['search']))
		{
			$search=$_POST['search'];
			$result=mysqli_query($conn,"Select * from client_files where file_type LIKE '%$search%' and company_name='$company_name'");
		}

		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
	?>
	            <div class="row">
                    <div class="column">
                        <input type="checkbox" id="c1" class="checkbox">
                        <label for="c1"></label>
                    </div>
                    <div class="column">
                        <p class="col-1">Added on</p>
                        <span class="col-span-1"><?php echo $row["added_on"]; ?></span>
                    </div>
                    <div class="column">
                         <p class="col-2"><?php echo $row["files"]; ?></p>
                        <span class="col-span-2"><?php echo $row["kb"] .' KB';?></span>
                        
                    </div>
                    <div class="column">
                        <p class="col-3"><?php echo $row["file_type"];?></p>
                        <span class="col-span-3"><a style="color:green" href="img/<?php echo $row["files"]; ?>" target="_blank">View <i class="fa fa-eye" aria-hidden="true"></i></a></span>
                    </div>
                    <div class="column">
                        <p class="col-4"><?php echo $row["visibility"];?></p>
                        <span class="col-span-4"><?php echo $row["validity"];?></span>
                    </div>
                    <div class="column">
                        <img src="./img/Ellipse -4@2x.png" class="img">
                    </div>
                    <div class="column">
                        <p class="col-5">Uploaded by</p>
                        <span class="col-span-5">Sasuke Uchiha</span>
                    </div>
                    <div class="column">
                        <p class="col-6"><a href='./includes/delete1.php?id=<?php echo $row["file_id"] ?>' onclick='checkdelete()' style="color:red;text-decoration:none">Delete <i class="fa fa-trash" aria-hidden="true"></i></a></p>
                        <span class="col-span-6"><a style="color:#3598DB;text-decoration:none" href="img/<?php echo $row["files"]; ?>" download>Download <i class="fa fa-file" aria-hidden="true"></i></a></span>
                    </div>
                </div>
	<?php
	}
}
else{
    ?>
    <h3 style="margin-left:50px;margin-top:10px;">No records found matching the search criteria.</h3>
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

		$sql="SELECT * from client_files where company_name='$company_name' order by added_on desc";
        $result=$conn->query($sql);

    }
    else if($_POST['sort_val'] == "Old"){ 

        $sql="SELECT * from client_files where company_name='$company_name' order by added_on asc";
        $result=$conn->query($sql);

    }
    else{

        $sql="SELECT * from client_files where company_name='$company_name'";
        $result=$conn->query($sql);

    }
    if($result){
        while($row=$result->fetch_assoc()){
            ?>

                <div class="row">
                    <div class="column">
                        <input type="checkbox" id="c1" class="checkbox">
                        <label for="c1"></label>
                    </div>
                    <div class="column">
                        <p class="col-1">Added on</p>
                        <span class="col-span-1"><?php echo $row["added_on"]; ?></span>
                    </div>
                    <div class="column">
                         <p class="col-2"><?php echo $row["files"]; ?></p>
                        <span class="col-span-2"><?php echo $row["kb"] .' KB';?></span>
                        
                    </div>
                    <div class="column">
                        <p class="col-3"><?php echo $row["file_type"];?></p>
                        <span class="col-span-3"><a style="color:green" href="img/<?php echo $row["files"]; ?>" target="_blank">View <i class="fa fa-eye" aria-hidden="true"></i></a></span>
                    </div>
                    <div class="column">
                        <p class="col-4"><?php echo $row["visibility"];?></p>
                        <span class="col-span-4"><?php echo $row["validity"];?></span>
                    </div>
                    <div class="column">
                        <img src="./img/Ellipse -4@2x.png" class="img">
                    </div>
                    <div class="column">
                        <p class="col-5">Uploaded by</p>
                        <span class="col-span-5">Sasuke Uchiha</span>
                    </div>
                    <div class="column">
                        <p class="col-6"><a href='./includes/delete1.php?id=<?php echo $row["file_id"] ?>' onclick='checkdelete()' style="color:red;text-decoration:none">Delete <i class="fa fa-trash" aria-hidden="true"></i></a></p>
                        <span class="col-span-6"><a style="color:#3598DB;text-decoration:none" href="img/<?php echo $row["files"]; ?>" download>Download <i class="fa fa-file" aria-hidden="true"></i></a></span>
                    </div>
                </div>

                <?php
            }
        }
    }
?>



