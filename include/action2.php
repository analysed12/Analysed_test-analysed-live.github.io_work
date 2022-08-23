<?php include('connection1.php') ?>

<!--- Query for searchbox--->

<?php
session_start();
if(isset($_SESSION['firstname']))
{
	$firstname=$_SESSION['firstname'];
	if (isset($_POST['action']))
	{

		if (isset($_POST['search']))
		{
			$search=$_POST['search'];
			$result=mysqli_query($conn,"Select * from notes where note_type LIKE '%$search%' and firstname='$firstname'");
		}

		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
	?>

	<div class="main-notes">
		<input type="checkbox">
		<div class="lastupdated">Last Updated<br>
			<span style="color:black"><?php echo $row["last_edited"]; ?></span>
		</div>
		<img src="img/Ellipse 148.png" width="50" height="50" alt="">
		<div class="addedby">Added by<br>
			<span style="color:black"><?php echo $row["firstname"]; ?></span>
		</div>
		<div class="type">Type<br>
			<span style="color:black"><?php echo $row["note_type"]; ?></span>
		</div>
		<div class="timespent">Time Spent<br>
			<span style="color:black"><?php echo $row["time_spent"]; ?></span>
		</div>
		<div class="edit">
			<span style="color:#3598DB">Edit<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16"><path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/></svg>
			</span>

			<span style="color:red"><a href='./include/delete1.php?id=<?php echo $row["id"] ?>' onclick='checkdelete()' style="color:red;text-decoration:none">Delete</a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg>
			</span>
		</div>
		<div class="addedon">Added on<br>
			<span style="color:black"><?php echo $row["added_on"]; ?></span>
		</div>
		<p><?php echo $row["notes"]; ?></p>
	</div>

	<?php
	}
}
else{
    ?>
    <h3 style="margin-left:230px;margin-top:30px;">No records found matching the search criteria.</h3>
    <?php 
    }
  }
}
?>

<!--- Query for sortby filters --->

<?php
if(isset($_POST['sort_val'])){
	$firstname=$_SESSION['firstname'];

	if($_POST['sort_val'] == "Recent"){ 

		$sql="SELECT * from notes where firstname='$firstname' order by added_on desc";
        $result=$conn->query($sql);

    }
    else if($_POST['sort_val'] == "Old"){ 

        $sql="SELECT * from notes where firstname='$firstname' order by added_on asc";
        $result=$conn->query($sql);

    }
    else{

        $sql="SELECT * from notes where firstname='$firstname'";
        $result=$conn->query($sql);

    }
    if($result){
        while($row=$result->fetch_assoc()){
            ?>

    <div class="main-notes">
		<input type="checkbox">
		<div class="lastupdated">Last Updated<br>
			<span style="color:black"><?php echo $row["last_edited"]; ?></span>
		</div>
		<img src="img/Ellipse 148.png" width="50" height="50" alt="">
		<div class="addedby">Added by<br>
			<span style="color:black"><?php echo $row["firstname"]; ?></span>
		</div>
		<div class="type">Type<br>
			<span style="color:black"><?php echo $row["note_type"]; ?></span>
		</div>
		<div class="timespent">Time Spent<br>
			<span style="color:black"><?php echo $row["time_spent"]; ?></span>
		</div>
		<div class="edit">
			<span style="color:#3598DB">Edit<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16"><path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/></svg>
			</span>

			<span style="color:red"><a href='./include/delete1.php?id=<?php echo $row["id"] ?>' onclick='checkdelete()' style="color:red;text-decoration:none">Delete</a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg>
			</span>
		</div>
		<div class="addedon">Added on<br>
			<span style="color:black"><?php echo $row["added_on"]; ?></span>
		</div>
		<p><?php echo $row["notes"]; ?></p>
	</div>

	<?php
    }
  }
}
?>



