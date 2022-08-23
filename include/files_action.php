<?php include('connection1.php') ?>

<!--- Query for searchbox--->

<?php
	if (isset($_POST['action']))
	{

		if (isset($_POST['search']))
		{
			$search=$_POST['search'];
			$result=mysqli_query($conn,"Select * from files where file_type LIKE '%$search%'");
		}

		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
	?>

    <div class="singleTasks_containerDiv">
        <div class="singletask_myTasks">
            <input type="checkbox" name="checkBoxItem" class="largerCheckbox">
            <span>
                <p class="light_spanItem_singleTask_myTasks">Added on</p>
                <p class="j1"><b><?php echo $row["added_on"]; ?></b></p>
            </span>
            <span style="margin-left:30px">
                <p style="color:#297FB8;margin-bottom:5px;font-size:16px"><?php echo $row["files"]; ?></p>
                <p class="j1"><b><?php echo $row["kb"] .' KB';?></b></p>
            </span>
            <span style="margin-left:30px">
                <p class="light_spanItem_singleTask_myTasks">Type of Doc</p>
                <p class="j1"><b><?php echo $row["file_type"];?></b></p>
            </span>
            <span>
                <p><img src="img/Prof-1.png" height="50px" width="50px"></p>
            </span>
             <span style="margin-right:30px">
                <p class="light_spanItem_singleTask_myTasks">Candidate name</p>
                <p class="j1"><b><?php echo $row["firstname"]; ?></b></p>
            </span>
            <div class="button-div_myTasks">
                <button style="font-size:14px;color:#EC4551"><a href='./include/delete_files.php?id=<?php echo $row["file_id"] ?>' onclick='checkdelete()' style="color:red;text-decoration:none">Delete <i class="fa fa-trash" aria-hidden="true"></i></a></button><br><br>
                <button style="color:#3598DB"><a style="color:#3598DB;text-decoration:none" href="img/<?php echo $row["files"]; ?>" download>Download <i class="fa fa-file" aria-hidden="true"></i></a></button>
            </div>
        </div>
    </div>

    <?php
	}   
}
else{
    ?>

    <h3>No records found matching the search criteria.</h3>

    <?php 
    }
  }
?>

<!--- Query for sortby filters --->

<?php
if(isset($_POST['sort_val'])){

	if($_POST['sort_val'] == "Recent"){ 

		$sql="SELECT * from files order by added_on desc";
        $result=$conn->query($sql);

    }
    else if($_POST['sort_val'] == "Old"){ 

        $sql="SELECT * from files order by added_on asc";
        $result=$conn->query($sql);

    }
    else{

        $sql="SELECT * from files";
        $result=$conn->query($sql);

    }
    if($result){
        while($row=$result->fetch_assoc()){
            ?>

        <div class="singleTasks_containerDiv">
	        <div class="singletask_myTasks">
                <input type="checkbox" name="checkBoxItem" class="largerCheckbox">
                <span>
                    <p class="light_spanItem_singleTask_myTasks">Added on</p>
                    <p class="j1"><b><?php echo $row["added_on"]; ?></b></p>
                </span>
                <span style="margin-left:30px">
                    <p style="color:#297FB8;margin-bottom:5px;font-size:16px"><?php echo $row["files"]; ?></p>
                    <p class="j1"><b><?php echo $row["kb"] .' KB';?></b></p>
                </span>
                <span style="margin-left:30px">
                    <p class="light_spanItem_singleTask_myTasks">Type of Doc</p>
                    <p class="j1"><b><?php echo $row["file_type"];?></b></p>
                </span>
                <span>
                    <p><img src="img/Prof-1.png" height="50px" width="50px"></p>
                </span>
                <span style="margin-right:30px">
                    <p class="light_spanItem_singleTask_myTasks">Candidate name</p>
                    <p class="j1"><b><?php echo $row["firstname"]; ?></b></p>
                </span>
                <div class="button-div_myTasks">
                    <button style="font-size:14px;color:#EC4551"><a href='./include/delete_files.php?id=<?php echo $row["file_id"] ?>' onclick='checkdelete()' style="color:red;text-decoration:none">Delete <i class="fa fa-trash" aria-hidden="true"></i></a></button><br><br>
                    <button style="color:#3598DB"><a style="color:#3598DB;text-decoration:none" href="img/<?php echo $row["files"]; ?>" download>Download <i class="fa fa-file" aria-hidden="true"></i></a></button>
                </div>
            </div>
        </div>

        <?php
      }
    }
 }
?>




 



