<?php include 'conn.php';
session_start();
if( isset($_POST['submit']))
{
  // $firstname=$_SESSION['firstname'];
  $file_type=$_POST['file_type'];
  $visibility=$_POST['visibility'];
  $validity=$_POST['validity'];
  $date=date("Y-m-d");
  $compfile=$_FILES["compfile"]["name"];

  move_uploaded_file($_FILES["compfile"]["tmp_name"],"img/".$_FILES["compfile"]["name"]);
  $filesize=$_FILES['compfile']['size'];
  $filesize=round($filesize/1024,2);

  $query=mysqli_query($con,"insert into files(added_on,file_type,visibility,validity,files,kb,firstname) values('$date','$file_type','$visibility','$validity','$compfile','$filesize','$firstname')");
  echo '<script> alert("Files added successfully");</script>';
}
?>
 <?php include('candidates_status_header.php');
  $c_id = $_GET['c_id'];
   ?>
  <link rel="stylesheet" href="./css/candidates_files.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
  <style>
  .input-file{
	  padding-top:40px;
	  width: 122px;
	  height: 35px;
	  border: 1px solid var(--unnamed-color-3598db);
	  box-shadow: 0px 3px 6px #00000029;
	  border: 1px solid #3598DB;
	  border-radius: 6px;
	  opacity: 1;
	  padding:10px 20px;
  }
  </style>
  <body>
 
<div class="options">
 <p class="p1"><a style="color:#979797" href="Candidates_specific.php?c_id=<?php echo $candidate_id; ?>">At a glance</a></p>
    <p class="p1"><a style="color:#979797" href="candidates_status.php?c_id=<?php echo $candidate_id; ?>">Status</a></p>
   <p><a style="color:#979797" href="candidates_activity.php?c_id=<?php echo $candidate_id; ?>">Activity</a></p><br>
   <span style="color:#3598DB"><!-- <a style="color:#3598DB" href="candidates_files.php"> --> <b>| Files </b> </a></span>
      <p><a style="color:#979797" href="candidates_notes.php?c_id=<?php echo $candidate_id; ?>">Notes</a></p>
     </div>
	 
     <div class="search">
	 <form class="form">
     <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#3598DB" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
  <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/>
</svg> <span style="color:#3598DB">File name </span><span style="color:#979797"><strong>| </strong><input type="text" id="search" placeholder="Search by files"oninput="myFunction()" style="border:none;outline:none"></span>
        <i class="fa fa-search" style="color:#3598DB"></i>
		</form>
   </div>
  
   <div class="add">
<button class="btn" onclick="myFunct()" id="myBtn"><a style="color:white" href="#">Add+</a></button>
   </div>
   
  <div id="myModal" class="modal">
            <!-- Modal content -->
      <form method="post" enctype="multipart/form-data">
      <div class="modal-content">
                <span class="close">close</span>
                <div class="upload">Upload Files</div>
                <div class="filetype">File Type*<br>
                <select name="file_type">
    <option value="">Select file type</option>
    <option value="Resume">Resume</option>
    <option value="10th files">10th files</option>
    <option value="12th files">12th files</option>
  </select>
  </div>
  <div class="filetype">Visibility*<br>
                <select name="visibility" >
    <option value="">select visibility</option>
    <option value="Internal">Internal</option>
    <option value="External">External</option>
  </select>
  </div>
  <div class="filetype">Validity*<br>
                <select name="validity">
    <option value="">Select validity</option>
    <option value="System Verified">System verified</option>
  </select>
  <div class="box">
  <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-folder-symlink-fill" viewBox="0 0 16 16">
  <path d="M13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2l.04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3zM2.19 3c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293L7.586 3H2.19zm9.608 5.271-3.182 1.97c-.27.166-.616-.036-.616-.372V9.1s-2.571-.3-4 2.4c.571-4.8 3.143-4.8 4-4.8v-.769c0-.336.346-.538.616-.371l3.182 1.969c.27.166.27.576 0 .742z"/>
</svg>
<div class="drag">
Drag and Drop a File<br>
&emsp;&emsp;&emsp;or<br><br><br>
<label for="file" class="input-file">
  <input type="file" name="compfile" id="file" style="display: none">Browse
 </label><br>
<div class="a" style="margin-top:15px;margin-left:-30px">
<button name="submit" style="color:white">Upload</button></div>
</div>
  </div>
      </div>
    </form>
   </div>
</div>

   <div class="sort-by">
   <form id="form1">
   <div class="sort">
   <span style="color:#979797">Sort by &emsp;
   <select name="multi_search" id="multi_search" class="sortbySelect" style="color:#3598DB;width:60px">
   <option>All</option>
   <option value="Recent">Recent</option>
   <option value="Old">Old</option>
   </select>
   </span>
   <span class="cars">
    <select name="cars" id="cars" style="width:100px">
    <option value="volvo">Last edited</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select></span>
  </div>
   <div class="radio">
   <span style="color:#3598DB"><input type="checkbox" id="select-all"> Select all </span>&emsp;
   <select name="cars" id="cars">
    <option value="volvo">Select action</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
</div>

  <div class="files-added" id="result1">

  <?php
  $c_id=$_GET['c_id'];
  $sql=mysqli_query($con,"select * from files ");

  $check=mysqli_num_rows($sql)>0;
  if($check){
    while($row=mysqli_fetch_assoc($sql)){
      ?>

  <div class="files">
  <input type="checkbox">
  <div class="added"><span style="color:979797">Added on</span> <br><?php echo $row["added_on"]; ?></div>
  <div class="filename"><a href="#"><?php echo $row["files"]; ?></a><br><?php echo $row["kb"] .' KB';?></div>
  <div class="resume"><?php echo $row["file_type"]; ?><br><a style="color:green" href="img/<?php echo $row["files"]; ?>" target="_blank">View
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg>
</a>
</div>
<div class="internal">
<?php echo $row["visibility"]; ?><br><?php echo $row["validity"]; ?></div>
<img src="img/Ellipse 148.png" width="70" height="70" alt="">
<div class="uploaded">
Uploaded by<br>
<?php echo $row["firstname"]; ?></div>

<div class="delete">
<span  class="delete"style="color:red"><a href='./includes/delete3.php?id=<?php echo $row["file_id"] ?>' onclick='checkdelete()' style="color:red;text-decoration:none">Delete</a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></span><br>
<div class="download">
<a style="color:#3598DB;text-decoration:none" href="img/<?php echo $row["files"]; ?>" download><span   style="color:#3598DB"> Download <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-arrow-down-fill" viewBox="0 0 16 16">
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8 5a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5A.5.5 0 0 1 8 5z"/>
</svg></span></a></div>
</div>
</div>
<?php } } ?>
  </div>
  </form>
</div>
</body>
</form>
</body>
<script>
function myFunct(){
  
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


    $(document).ready(function(){
        $("#form1 #select-all").click(function(){
            $("#form1 input[type='checkbox']").prop('checked',this.checked);
        });
    });


  function myFunction(){
      var action='data';
      var search=document.getElementById('search').value;
    
        
      $.ajax({
        url:'./include/action1.php',
          method:'POST',
        data:{action:action,search:search},
        success:function(response){
          $("#result1").html(response);

        }
      });
    }

  $(document).ready(function(){
    $("#multi_search").change(function(){
      var sort_val=$(this).val();

      $.ajax({
        url:'./include/action1.php',
        method:'POST',
        data:{sort_val:sort_val},
        success:function(response){
          $("#result1").html(response);
        }
      });
    });
  });
}
  function checkdelete(){
    return confirm('Are you sure you want to delete this file?');
  }

</script>
