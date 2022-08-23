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
			$result=mysqli_query($conn,"Select * from client_notes where note_type LIKE '%$search%' and company_name='$company_name'");
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
                        <p class="col-1">Last Updated</p>
                        <span class="col-span-1"><?php echo $row["last_edited"]; ?></span>
                    </div>
                    <div class="column">
                        <img src="./img/Ellipse -5.png" class="img">
                    </div>
                    <div class="column">
                        <p class="col-2">Uploaded by</p>
                        <span class="col-span-2">Sasuke Uchiha</span>
                    </div>
                    <div class="column">
                        <p class="col-3">Type</p>
                        <span class="col-span-3"><?php echo $row["note_type"]; ?></span>
                    </div>
                    <div class="column">
                        <p class="col-4">Time spent</p>
                        <span class="col-span-4"><?php echo $row["time_spent"]; ?></span>
                    </div>
                    <div class="column">
                        <p class="col-5">Edit <i class="fa fa-pencil" aria-hidden="true"></i></p>
                    </div>
                    <div class="column">
                        <p class="col-6"><a href='./includes/delete2.php?id=<?php echo $row["note_id"] ?>' onclick='checkdelete()' style="color:red;text-decoration:none">Delete <i class="fa fa-trash" aria-hidden="true"></i></a></p>
                    </div>

                    <div class="column" style="margin-top:80px;margin-left: -838px;">
                        <p class="col-1">Added on</p>
                        <span class="col-span-1"><?php echo $row["added_on"]; ?></span>
                    </div>
                    <div class="column" style="margin-top:-5px;margin-left: 200px;padding-right: 10px;">
                        <p style="font-size: 16px;"><?php echo $row["notes"]; ?></p>
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

		$sql="SELECT * from client_notes where company_name='$company_name' order by added_on desc";
        $result=$conn->query($sql);

    }
    else if($_POST['sort_val'] == "Old"){ 

        $sql="SELECT * from client_notes where company_name='$company_name' order by added_on asc";
        $result=$conn->query($sql);

    }
    else{

        $sql="SELECT * from client_notes where company_name='$company_name'";
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
                        <p class="col-1">Last Updated</p>
                        <span class="col-span-1"><?php echo $row["last_edited"]; ?></span>
                    </div>
                    <div class="column">
                        <img src="./img/Ellipse -5.png" class="img">
                    </div>
                    <div class="column">
                        <p class="col-2">Uploaded by</p>
                        <span class="col-span-2">Sasuke Uchiha</span>
                    </div>
                    <div class="column">
                        <p class="col-3">Type</p>
                        <span class="col-span-3"><?php echo $row["note_type"]; ?></span>
                    </div>
                    <div class="column">
                        <p class="col-4">Time spent</p>
                        <span class="col-span-4"><?php echo $row["time_spent"]; ?></span>
                    </div>
                    <div class="column">
                        <p class="col-5">Edit <i class="fa fa-pencil" aria-hidden="true"></i></p>
                    </div>
                    <div class="column">
                        <p class="col-6"><a href='./includes/delete2.php?id=<?php echo $row["note_id"] ?>' onclick='checkdelete()' style="color:red;text-decoration:none">Delete <i class="fa fa-trash" aria-hidden="true"></i></a></p>
                    </div>

                    <div class="column" style="margin-top:80px;margin-left: -838px;">
                        <p class="col-1">Added on</p>
                        <span class="col-span-1"><?php echo $row["added_on"]; ?></span>
                    </div>
                    <div class="column" style="margin-top:-5px;margin-left: 200px;padding-right: 10px;">
                        <p style="font-size: 16px;"><?php echo $row["notes"]; ?></p>
                    </div>
                </div>

                <?php
            }
        }
    }
?>



