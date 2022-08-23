<?php

   include 'connection1.php';
   session_start();
?>


<?php include('header.php')?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/client_list.css">
<title>Analysed</title>


<body>
    <div class="container">
        <div class="small_container-1">
            <div class="heading_dash">
                <h1 class="mainHeadingDash">My Client</h1>
                <p class="mainParaDash">create new client and manage old ones</p><br>
            </div>
            <span>
                <a href="addClient.php"><button class="btn" id="myBtn" type="button">Add + </button></a>
            </span>
            <div class="search-box">
                <details id="dropdown" class="dropdown">
                    <summary class="dropdown-button">
                        <span id="selected-item" class="selected-item"><i class="fa fa-user"></i> Company</span>
                    </summary>
                    <details-menu class="dropdown-menu">
                        <div class="dropdown-menu-list">
                            <label class="dropdown-menu-item">
                                <input type="radio" name="item" value="1" checked>
                                <span>1</span>
                            </label>
                            <label class="dropdown-menu-item">
                                <input type="radio" name="item" value="2">
                                <span>2</span>
                            </label>
                            <label class="dropdown-menu-item">
                                <input type="radio" name="item" value="3">
                                <span>3</span>
                            </label>
                            <label class="dropdown-menu-item">
                                <input type="radio" name="item" value="4">
                                <span>4</span>
                            </label>
                        </div>
                    </details-menu>
                </details>
                <form method="post">
                    <input class="search-form-input" type="text" name="textsearch" placeholder="Search by company name">
                    <button type="submit" name="btnsearch" class="searchButton-client">
                        <img src="./img/search-icon-blue.png" / id="searchButtonImg">
                    </button>
                </form>
            </div>
            <div class="row-flex-jobj justifycontent-flex-end-1">
                <p class="sortbyText">Sort by :
                    <select name="multi_search" id="multi_search" class="sortbySelect" style="color:#8BD0FF;">
                        <option>Recent</option>
                        <option value="Recent">All</option>
                        <option value="Old">Old</option>
                    </select>
                    <select id="multi_search" class="search_list">
                        <option value="" default>Last Edited</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                    </select>
                </p>
            </div>

            <?php
 	$flag=0;
        if(isset($_POST['btnsearch']))
        {
          $textsearch=$_POST['textsearch'];
          $sql="SELECT * FROM `client` WHERE company_name='$textsearch'";
          $flag=1;
        }
        if($flag == 0)
        {
            $sql="select * from client";
        }

          $res=mysqli_query($conn,$sql);
          if($res == TRUE)
          {
              $count=mysqli_num_rows($res);
              if($count >0)
              {
                  while($rows=mysqli_fetch_assoc($res))
                  {
                      $client_id=$rows['client_id'];
                      $client_img=$rows['company_img'];
                      $name=$rows['company_name'];
                      $company_name=$rows['company'];
                      $role=$rows['role'];
                      $role_detail=$rows['role_detail'];
                      $main_email=$rows['main_email'];
                      $contact_no=$rows['contact_no'];
                      $added_on=$rows['last_updated'];

               ?>
            <a style="text-decoration:none" href="client_individual.php?c_id=<?php echo $client_id; ?>">
                <div class="row">
                    <!-- <div class="column">
                        <input type="checkbox" class="checkbox" id="c1">
                        <label for="c1"></label>
                    </div> -->
                    <div class="column" id="pic">

                        <img src="../img/<?php echo $rows['company_img']; ?>" width="65" height="65">
                    </div>
                    <div class="column" id="info">
                        <p class="col-1"><?php echo $name; ?></p>
                        <span class="col-span-1"><?php echo $company_name; ?></span>
                    </div>
                    <!-- span  start of more -->
                    <!--  <span id="dots">...</span> <div  id="more">  -->

                    <div class="column" id="contact_email">
                        <p class="col-3"><?php echo $contact_no; ?></p>
                        <span class="col-span-3"><?php echo $main_email; ?></span>
                    </div>

                    <div class="column" id="note">
                        <p class="col-4"><i class="fa fa-sticky-note" aria-hidden="true"></i> Note</p>
                        <span class="col-span-4"><i class="fa fa-bell" aria-hidden="true"></i> Remainder</span>
                    </div>
                    <div class="column">
                        <p class="col-5">Added on <span><?php echo $added_on; ?></span></p>
                        <span class="col-span-5"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</span>
                        <a href="delete_client_list.php?Id=<?php echo $client_id; ?>" class="colSpan5"><i
                                class="fa fa-trash" aria-hidden="true" style="color:red;"></i> Delete</a>
                    </div>
                    <!--   close of span  id more -->
                    <!-- <button onclick="myFunction()" id="myBtnn"> Read more</button> -->
                </div>
            </a>
            <?php
                 }
             }
         }
        ?>
        </div>
    </div>
</body>

<script>
var items = document.getElementsByName('item');
var selectedItem = document.getElementById('selected-item');
var dropdown = document.getElementById('dropdown');

items.forEach(item => {
    item.addEventListener('change', () => {
        if (item.checked) {
            selectedItem.innerHTML = item.value;
            dropdown.open = false;
        }
    });
});
</script>


<!-- readmore less script for smaller screen -->
<!-- 
<script>
function myFunction() {
    // console.log(ele);
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtnn");

  if (dots.style.display == "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
 -->