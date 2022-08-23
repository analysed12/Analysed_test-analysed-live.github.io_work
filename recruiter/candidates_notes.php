<?php
include 'connection1.php';
session_start();
if(isset($_SESSION['firstname']) && isset($_POST['submit']))
{
  $firstname=$_SESSION["firstname"];
  $note_type=$_POST["note_type"];
  // $last_edited=$_POST["last_edited"];
  $time_spent=$_POST["time_spent"];
  $date=date("Y-m-d");
  $notes=$_POST["notes"];

  // move_uploaded_file($_NOTES["compnotes"]["tmp_name"],"img/".$_FILES["compnotes"]["name"]);
  // $filesize=$_NOTES['compnotes']['size'];
  // $filesize=round($filesize/1024,2);

  $query=mysqli_query($con,"insert into notes(firstname,note_type,notes,time_spent,added_on) values('$firstname','$note_type',$notes','$time_spent','$date')");
  echo '<script> alert("Files added successfully");</script>';
}
?>
<html>
<?php include('candidates_status_header.php') 
  // $candidate_id = $_GET['c_id'];
  ?>
 <link rel="stylesheet" href="./css/candidates_notes.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <body>
  
<div class="options">
  <p class="p1"><a style="color:#979797" href="Candidates_specific.php?c_id=<?php echo $candidate_id; ?>">At a glance</a></p>
   <p class="p1"><a style="color:#979797"  href="candidates_status.php?c_id=<?php echo $candidate_id; ?>">Status</a></p>
   <p><a style="color:#979797"  href="candidates_activity.php?c_id=<?php echo $candidate_id; ?>">Activity</a></p>
    <p><a style="color:#979797"  href="candidates_files.php?c_id=<?php echo $candidate_id; ?>">Files</a></p><br>
   <span style="color:#3598DB"><a style="color:#3598DB" href="candidates_notes.php"> <b>| Notes </b> </a></span>

     </div>
     <div class="search">
      <form class="form">
     <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#3598DB" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
  <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/>
</svg> <span style="color:#3598DB">File name&emsp;&emsp;</span><span style="color:#979797"><strong>|&emsp;&emsp;</strong><input type="text" id="search" placeholder="Search by note content" oninput="myFunction()" style="border:none;outline:none"></span>
        <i class="fa fa-search" style="color:#3598DB"></i>
      </form>
   </div>
   <div class="add">

   <button class="btn" id="myBtn"><a style="color:white" href="#">Add+</a></button>
   </div>
   <div id="myModal" class="modal">
            <!-- Modal content -->
			<form class="form" method="post">
      <div class="modal-content">
                <span class="close">close</span>
                <div class="upload">Add new note</div>
                <div class="filetype">Type*<br>
                <select name="note_type">
    <option value="">Note Type</option>
    <option value="Resume Evaluation">Resume Evaluation</option>
    <option value="Interview Process">Interview Process</option>
  </select>
  </div>
  <div class="filetype">Reference to*<br>
                <select name="reference_to" id="cars">
    <option value="volvo">Select Referenced Item</option>
    <option value="1">Saab</option>
    <option value="2">Opel</option>
    <option value="3">Audi</option>
  </select>
  </div>
  <div class="filetype">Job Reference*<br>
                <select name="job_reference" id="cars">
    <option value="volvo">Enter ID</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select>
  </div>
<div class="filetype1">Notes*<br>
<input type="text-area" placeholder="Enter text" name="notes"></div>
<div class="filetype2">Time Spent*<br>
<div class="input"><input type="text-area" placeholder="Enter text" name="time_spent"><br></div>
<button name="submit">Submit</button>
</div>
</div>
</form>
      </div>

   <div class="sort-by">
   <form class="form" id="form1">
   <div class="sort">
   <span style="color:#979797">Sort by &emsp;</span>
   <span style="color:#3598DB">
     <select name="multi_search" id="multi_search" class="sortbySelect" style="color:#3598DB;width:60px">
   <option>All</option>
   <option value="Recent">Recent</option>
   <option value="Old">Old</option>
   </select>
   </span>
   <span>
    <select name="last_edited" id="cars" style="width:130px">
    <option value="volvo">Last edited</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select></span>
  </div>
   <div class="radio">
   <span style="color:#3598DB"><input type="checkbox" id="select-all"> Select all &emsp;
   <select name="cars" id="cars">
    <option value="volvo">Select action</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select></span></div>
  <div class="files-added" id="result">
    <?php
    $c_id=$_GET['c_id'];
  $sql=mysqli_query($conn,"select * from notes where firstname='$firstname'");

  $check=mysqli_num_rows($sql)>0;
  if($check){
    while($row=mysqli_fetch_assoc($sql)){
      ?>


  <div class="main-notes">
  <input type="checkbox">
<div class="last_edited">Last Updated<br>
<!-- <span style="color:black"><?php  //echo $row["last_edited"]; ?></span> -->
</div>
<img src="img/Ellipse 148.png" width="50" height="50" alt="">
<div class="addedby">
Added by<br>
<span style="color:black"><?php echo $row["firstname"]; ?></span>
</div>
<div class="type">
Type<br>
<span style="color:black"><?php echo $row["note_type"]; ?></span>
</div>
<div class="timespent">
Time Spent<br>
<span style="color:black"><?php echo $row["time_spent"]; ?></span>
</div>
<div class="edit">
<span style="color:#3598DB">Edit<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></span>
<span style="color:red"><a href='./include/delete1.php?id=<?php echo $row["id"] ?>' onclick='checkdelete()' style="color:red;text-decoration:none">Delete</a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></span></div>
<div class="addedon">
Added on<br>
<span style="color:black"><?php echo $row["added_on"]; ?></span>
</div>
<p><?php echo $row["notes"]; ?></p>
<?php } } ?>
  </div>

  </form>
</div>

</html>

<script>
    var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<script>
	function checkdelete(){
		return confirm('Are you sure you want to delete this note?');
	}
</script>

<script>
    $(document).ready(function(){
        $("#form1 #select-all").click(function(){
            $("#form1 input[type='checkbox']").prop('checked',this.checked);
        });
    });
</script>

<script type="text/javascript">

	function myFunction(){
			var action='data';
			var search=document.getElementById('search').value;


			$.ajax({
				url:'./include/action2.php',
			    method:'POST',
				data:{action:action,search:search},
				success:function(response){
					$("#result").html(response);

				}
			});
		}

</script>

<script>
	$(document).ready(function(){
		$("#multi_search").change(function(){
			var sort_val=$(this).val();

			$.ajax({
				url:'./include/action2.php',
				method:'POST',
				data:{sort_val:sort_val},
				success:function(response){
					$("#result").html(response);
				}
			});
		});
	});
</script>