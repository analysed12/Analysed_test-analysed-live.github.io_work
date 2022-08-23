

<?php

   include 'connection1.php';     //database connection page included
   session_start();        //session has been started


?>

<?php include('header.php')?>

<link rel="stylesheet" href="css/js_search_result.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<body>

    <br><br>
    <div class="right_shift">
       <div class="heading">
           Search
       </div>
       <div class="subHead">
            Search for jobs, candidates, clients and more
       </div><br><br><br>
       <div class="input-field2">
<form action="" method="post"><input
            name="searchForJobs"
            id="inputSearch"
            class="searchForJobs2"
            placeholder="Machine Lear"
          />
          <!-- &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          &emsp;&emsp;&emsp; &emsp;&emsp; -->
          <button class="searchButton2" name="search"  style="color: #3598DB; margin-top:-20px">
          <i class="fa fa-search" aria-hidden="true"></i>
          </button></form>
        </div><br><br>
        <div style="display:flex">
            <button class="addFilesMyTasks1" name="peopleCard" id="myBtn1" onclick="window.location.href = 'js_search_result_1.php';"> People </button>&emsp;&emsp;
            <button class="addFilesMyTasks1" name="jobsCard" id="myBtn2" > Jobs </button>&emsp;&emsp;
            <button class="addFilesMyTasks1" name="companiesCard" id="myBtn3" > Companies </button>&emsp;&emsp;
            <button class="addFilesMyTasks1" name="groupCard" id="myBtn1" > &nbsp;Groups </button>&emsp;&emsp;
            <button class="addFilesMyTasks1" name="eventsCard" id="myBtn1" >&nbsp; Events </button>&emsp;&emsp;
            <button class="addFilesMyTasks1" name="coursesCard" id="myBtn1" > Courses </button>
        </div><br><br><br>




        <div class="card" style="width:95%;height:auto">


            <p id="val1"><b>People </b></p><br>
            <div class="row">

              <?php
              $flag=0;
              if((isset($_POST['search'])) OR (isset($_POST['peopleCard'])))   //condition to find set of variable of search and Filters
              {
                // code block to search according to given clauses

                $search = $_POST['searchForJobs'];
                $search = preg_replace("#[^0-9a-z]#i","",$search);
                $sql="SELECT * FROM `candidates` WHERE firstname='$search' OR lastname= '$search'";
                $flag=1;
              }

              if($flag == 0)
              {
                // code block for all data to be displayed if there are no clauses
                  $sql="select * from candidates";
              }
                 // query to establish connection from database and get the output of required query
                $res=mysqli_query($conn,$sql);
                if($res == TRUE)
                {
                   // getting no of rows from table and assigning it to a variable. If this is more than 0 then all rows will be printed
                    $count=mysqli_num_rows($res);
                    if($count > 0)
                    {

                      // displaying all the data from the table
                        while($row=mysqli_fetch_assoc($res))
                        {

                     ?>

                <div class="col-2">&emsp;&emsp;
                    <img src="img/prof.png" height="71px" width="71px">
                </div>
                <div class="col-10">
                    <span id="val1"><b><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></b></span><br>
                    <span id="val2"><?php echo $row['current_title']; ?></span><br>
                    <span id="val3"><?php echo $row['country']; ?></span>
                    <hr id="val4"></hr>
                </div>

                <?php }}} ?>
            </div>
            <hr></hr><br>
            <p id="val5">See all result</p>
        </div>

        <br><br>


<!-- companies -->
        <div class="card" style="width:95%;height:auto">
            <p id="val1"><b>Companies</b></p><br>
            <div class="row">
              <?php
              $flag=0;
              if((isset($_POST['search'])) OR (isset($_POST['companiesCard']))) //condition to find set of variable of search and Filters
              {
                // code block to search according to given clauses

                $search = $_POST['searchForJobs'];
                $search = preg_replace("#[^0-9a-z]#i","",$search);
                $sql="SELECT * FROM `joblistings` WHERE 	client_company='$search'";
                $flag=1;
              }

              if($flag == 0)
              {
                // code block for all data to be displayed if there are no clauses
                  $sql="select * from joblistings";
              }
                 // query to establish connection from database and get the output of required query
                $res=mysqli_query($conn,$sql);
                if($res == TRUE)
                {
                   // getting no of rows from table and assigning it to a variable. If this is more than 0 then all rows will be printed
                    $count=mysqli_num_rows($res);
                    if($count > 0)
                    {

                      // displaying all the data from the table
                        while($row=mysqli_fetch_assoc($res))
                        {

                     ?>
                <div class="col-2">&emsp;&emsp;
                    <img src="img/m-circle.png" height="71px" width="71px">
                </div>
                <div class="col-10">
                    <span id="val1"><b><?php echo $row['client_company']; ?></b></span><br>
                    <span id="val2"><?php echo $row['location']; ?></span><br>
                    <span id="val3">4 Jobs opening</span>
                    <hr id="val4"></hr>
                </div>
              <?php }}} ?>
              </div>
                          <hr></hr><br>
            <p id="val5">See all result</p>
        </div>

        <br><br>




<!-- jobs -->
        <div class="card" style="width:95%;height:auto">
            <p id="val1"><b>Jobs </b></p><br>
            <div class="row">
              <?php
              $flag=0;
              if((isset($_POST['search'])) OR (isset($_POST['jobsCard'])))  //condition to find set of variable of search and Filters
              {
                // code block to search according to given clauses

                $search = $_POST['searchForJobs'];
                $search = preg_replace("#[^0-9a-z]#i","",$search);
                $sql="SELECT * FROM `joblistings` WHERE 	client_company='$search'";
                $flag=1;
              }

              if($flag == 0)
              {
                // code block for all data to be displayed if there are no clauses
                  $sql="select * from joblistings";
              }
                 // query to establish connection from database and get the output of required query
                $res=mysqli_query($conn,$sql);
                if($res == TRUE)
                {
                   // getting no of rows from table and assigning it to a variable. If this is more than 0 then all rows will be printed
                    $count=mysqli_num_rows($res);
                    if($count > 0)
                    {

                      // displaying all the data from the table
                        while($row=mysqli_fetch_assoc($res))
                        {

                     ?>
                <div class="col-2">&emsp;&emsp;
                    <img src="img/icon.png" height="71px" width="71px">
                </div>
                <div class="col-10">
                    <span id="val1"><b><?php echo $row['designation']; ?></b></span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <img src="img/share-icon.png" height="20px" width="22px">&emsp;
                    <img src="img/star-icon.png" height="20px" width="22px"><br>
                    <span id="val2"><?php echo $row['client_company']; ?></span><br>
                    <span id="val3"><?php echo $row['location']; ?>,<?php echo $row['state']; ?>,<?php echo $row['country']; ?></span><br>
                    <span id="val3"><img src="img/check.png" height="20px" width="20px">Actively recruiting</span><br>
                    <span id="val3">3 days ago . Easy apply</span>
                    <hr id="val4"></hr>
                </div>
                <?php }}} ?>
            </div>

            <hr></hr><br>
            <p id="val5">See all result</p>
        </div>

        <br><br>
        <a href="#" class="previous">&laquo; Previous</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <span id="down-text">
            <a href="#" class="mid">1 </a>
            <a href="#" class="coming">2</a>
            <a href="#" class="coming">3</a>
            <a href="#" class="coming">4</a>
            <a href="#" class="coming">5</a>
            <a href="#" class="coming">6</a>
            <a href="#" class="coming">7</a>
            <a href="#" class="coming">. . . </a>
            <a href="#" class="coming">56</a>
        </span>&emsp;&emsp;
        <a href="#" class="next">Next &raquo;</a>
        <br><br><br><br><br><br><br><br><br><br>
    </div>

</body>
