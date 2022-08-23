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
			$result=mysqli_query($conn,"Select * from files where file_type LIKE '%$search%' and firstname='$firstname'");
		}

		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
	?>

	<div class="files"><input type="checkbox">
		<div class="added">
			<span style="color:979797">Added on</span> <br><?php echo $row["added_on"]; ?>
		</div>
		<div class="filename">
			<a href="#"><?php echo $row["files"]; ?></a><br><?php echo $row["kb"] .' KB';?>
		</div>
		<div class="resume"><?php echo $row["file_type"]; ?><br>
			<a style="color:green" href="img/<?php echo $row["files"]; ?>" target="_blank">View<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-eye-fill" viewBox="0 0 16 16"><path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/><path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/></svg></a>
		</div>
		<div class="internal">
			<?php echo $row["visibility"]; ?><br><?php echo $row["validity"]; ?>
		</div>
		<img src="img/Ellipse 148.png" width="70" height="70" alt="">
		<div class="uploaded">Uploaded by<br>
			<?php echo $row["firstname"]; ?>
		</div>
		<div class="delete">
			<span style="color:red">
				<a href='./include/delete.php?id=<?php echo $row["file_id"] ?>' onclick='checkdelete()' style="color:red;text-decoration:none">Delete</a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg>
			</span><br>
			<a style="color:#3598DB;text-decoration:none" href="img/<?php echo $row["files"]; ?>" download>
				<span style="color:#3598DB">Download<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-arrow-down-fill" viewBox="0 0 16 16"><path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8 5a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5A.5.5 0 0 1 8 5z"/></svg>
				</span>
			</a>
		</div>
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

		$sql="SELECT * from files where firstname='$firstname' order by added_on desc";
        $result=$conn->query($sql);

    }
    else if($_POST['sort_val'] == "Old"){ 

        $sql="SELECT * from files where firstname='$firstname' order by added_on asc";
        $result=$conn->query($sql);

    }
    else{

        $sql="SELECT * from files where firstname='$firstname'";
        $result=$conn->query($sql);

    }
    if($result){
        while($row=$result->fetch_assoc()){
            ?>

      <div class="files"><input type="checkbox">
		<div class="added">
			<span style="color:979797">Added on</span> <br><?php echo $row["added_on"]; ?>
		</div>
		<div class="filename">
			<a href="#"><?php echo $row["files"]; ?></a><br><?php echo $row["kb"] .' KB';?>
		</div>
		<div class="resume"><?php echo $row["file_type"]; ?><br>
			<a style="color:green" href="img/<?php echo $row["files"]; ?>" target="_blank">View<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-eye-fill" viewBox="0 0 16 16"><path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/><path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/></svg></a>
		</div>
		<div class="internal">
			<?php echo $row["visibility"]; ?><br><?php echo $row["validity"]; ?>
		</div>
		<img src="img/Ellipse 148.png" width="70" height="70" alt="">
		<div class="uploaded">Uploaded by<br>
			<?php echo $row["firstname"]; ?>
		</div>
		<div class="delete">
			<span style="color:red">
				<a href='./include/delete.php?id=<?php echo $row["file_id"] ?>' onclick='checkdelete()' style="color:red;text-decoration:none">Delete</a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg>
			</span><br>
			<a style="color:#3598DB;text-decoration:none" href="img/<?php echo $row["files"]; ?>" download>
				<span style="color:#3598DB">Download<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-arrow-down-fill" viewBox="0 0 16 16"><path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8 5a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5A.5.5 0 0 1 8 5z"/></svg>
				</span>
			</a>
		</div>
	</div>

	<?php
    }
  }
}
?>



