


<?php

   include 'connection1.php';
   session_start();

?>




<?php include('include/header.php')?>
  <link rel="stylesheet" href="./css/mytasks1.css" />
  <div class="container">
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">My Tasks</h1>
            <p class="mainParaDash">Lorem Ipsum gerolit pecona devousi tero</p>
        </div>
        <div class="categories-mytasks-1-active">
          <p class="category-mytasks1 active" id="category-mytasks1-1">All</p>
          <p class="category-mytasks1 " id="category-mytasks1-2">Active</p>
          <p class="category-mytasks1 " id="category-mytasks1-3">Completed</p>
        </div>







        <?php
                    $sql= "select * from task";
                    $run = mysqli_query($conn,$sql);
                    $i= 1;

                    while($row =mysqli_fetch_assoc($run)) {
                    ?>


        <div class="row-mytasks-1-container row-first-ekam-categories active" id="container-for-mytasks-1-1">
          <div class="card-item-mytasks-1">
            <span class="row-mytasks-1-ekam">
              <span class="row-name-and-image-mytasks-1">
                <img src="./img/Profile2.png" alt="" srcset="">
                <span>D<?php echo $row['assigned_to']; ?></span>
              </span>
              <span class="twodaysleft-mytasks-1">2 days left</span>
            </span>
            <p class="default-para-mytasks1-ekam"><?php echo $row['task_name']; ?></p>
            <section class="progress-bar-mytasks1"><span></span></section> <span style="margin-left:8px;color:#979797"><?php echo $row['progress']; ?></span>
            <div class="row-subrow-mytasks-1-item row-mytasks-1-container">
              <section class="todoInprocess-mytasks-1"><span>Todo</span><p><?php echo $row['todo']; ?></p></section>
              <section class="todoInprocess-mytasks-1"><span>In-Process</span><p><?php echo $row['InProcess']; ?></p></section>
              <section class="todoInprocess-mytasks-1"><span>To Test</span><p><?php echo $row['toTest']; ?></p></section>
              <section class="todoInprocess-mytasks-1"><span>Completed</span><p><?php echo $row['completed']; ?></p></section>
            </div>
            <div class="row-subrow-images-cta-mytasks-1-item row-mytasks-1-container">
              <div class="imgs-cta-container-mytasks-1">
                <img src="./img/Profile3.png" alt="" srcset="">
                <img src="./img/Profile2.png" alt="" srcset="">
                <img src="./img/Profile4.png" alt="" srcset="">
                <img src="./img/Profile4.png">
              </div>
              <button>Open</button>
            </div>
          </div>
<?php } ?>
        </div>

        <?php
                    $sql= "select * from task where type_of_task='active'";
                    $run = mysqli_query($conn,$sql);
                    $i= 1;

                    while($row =mysqli_fetch_assoc($run)) {
                    ?>

        <div class="row-mytasks-1-container row-first-ekam-categories " id="container-for-mytasks-1-2">
          <div class="card-item-mytasks-1">
            <span class="row-mytasks-1-ekam">
              <span class="row-name-and-image-mytasks-1">
                <img src="./img/Profile2.png" alt="" srcset="">
                <span>D<?php echo $row['assigned_to']; ?></span>
              </span>
              <span class="twodaysleft-mytasks-1">2 days left</span>
            </span>
            <p class="default-para-mytasks1-ekam"><?php echo $row['task_name']; ?></p>
            <section class="progress-bar-mytasks1"><span></span></section> <span style="margin-left:8px;color:#979797"><?php echo $row['progress']; ?></span>
            <div class="row-subrow-mytasks-1-item row-mytasks-1-container">
              <section class="todoInprocess-mytasks-1"><span>Todo</span><p><?php echo $row['todo']; ?></p></section>
              <section class="todoInprocess-mytasks-1"><span>In-Process</span><p>27</p><?php echo $row['InProcess']; ?></section>
              <section class="todoInprocess-mytasks-1"><span>To Test</span><p>71</p><?php echo $row['toTest']; ?></section>
              <section class="todoInprocess-mytasks-1"><span>Completed</span><p>97</p><?php echo $row['completed']; ?></section>
            </div>
            <div class="row-subrow-images-cta-mytasks-1-item row-mytasks-1-container">
              <div class="imgs-cta-container-mytasks-1">
                <img src="./img/Profile3.png" alt="" srcset="">
                <img src="./img/Profile2.png" alt="" srcset="">
                <img src="./img/Profile4.png" alt="" srcset="">
                <img src="./img/Profile4.png">
              </div>
              <button>Open</button>
            </div>
          </div>

        <?php } ?>
        </div>



        <?php
                    $sql= "select * from task where type_of_task='completed'";
                    $run = mysqli_query($conn,$sql);
                    $i= 1;

                    while($row =mysqli_fetch_assoc($run)) {
                    ?>

        <div class="row-mytasks-1-container row-first-ekam-categories " id="container-for-mytasks-1-3">
          <div class="card-item-mytasks-1">
            <span class="row-mytasks-1-ekam">
              <span class="row-name-and-image-mytasks-1">
                <img src="./img/Profile2.png" alt="" srcset="">
                <span>D<?php echo $row['assigned_to']; ?></span>
              </span>
              <span class="twodaysleft-mytasks-1">2 days left</span>
            </span>
            <p class="default-para-mytasks1-ekam"><?php echo $row['task_name']; ?></p>
            <section class="progress-bar-mytasks1"><span></span></section> <span style="margin-left:8px;color:#979797"><?php echo $row['progress']; ?></span>
            <div class="row-subrow-mytasks-1-item row-mytasks-1-container">
              <section class="todoInprocess-mytasks-1"><span>Todo</span><p><?php echo $row['todo']; ?></p></section>
              <section class="todoInprocess-mytasks-1"><span>In-Process</span><p>27</p><?php echo $row['InProcess']; ?></section>
              <section class="todoInprocess-mytasks-1"><span>To Test</span><p>71</p><?php echo $row['toTest']; ?></section>
              <section class="todoInprocess-mytasks-1"><span>Completed</span><p>97</p><?php echo $row['completed']; ?></section>
            </div>
            <div class="row-subrow-images-cta-mytasks-1-item row-mytasks-1-container">
              <div class="imgs-cta-container-mytasks-1">
                <img src="./img/Profile3.png" alt="" srcset="">
                <img src="./img/Profile2.png" alt="" srcset="">
                <img src="./img/Profile4.png" alt="" srcset="">
                <img src="./img/Profile4.png">
              </div>
              <button>Open</button>
            </div>
          </div>

        <?php } ?>
        </div>
    </div>
  </div>
<script>
    document.querySelector('#category-mytasks1-1').addEventListener('click',()=>{
      document.querySelector('#category-mytasks1-1').classList.add('active');
      document.querySelector('#category-mytasks1-2').classList.remove('active');
      document.querySelector('#category-mytasks1-3').classList.remove('active');
      document.querySelector('#container-for-mytasks-1-1').classList.add('active');
      document.querySelector('#container-for-mytasks-1-2').classList.remove('active');
      document.querySelector('#container-for-mytasks-1-3').classList.remove('active');
    })
    document.querySelector('#category-mytasks1-2').addEventListener('click',()=>{
      document.querySelector('#category-mytasks1-2').classList.add('active');
      document.querySelector('#category-mytasks1-1').classList.remove('active');
      document.querySelector('#category-mytasks1-3').classList.remove('active');
      document.querySelector('#container-for-mytasks-1-1').classList.remove('active');
      document.querySelector('#container-for-mytasks-1-2').classList.add('active');
      document.querySelector('#container-for-mytasks-1-3').classList.remove('active');
    })
    document.querySelector('#category-mytasks1-3').addEventListener('click',()=>{
      document.querySelector('#category-mytasks1-3').classList.add('active');
      document.querySelector('#category-mytasks1-1').classList.remove('active');
      document.querySelector('#category-mytasks1-2').classList.remove('active');
      document.querySelector('#container-for-mytasks-1-1').classList.remove('active');
      document.querySelector('#container-for-mytasks-1-2').classList.remove('active');
      document.querySelector('#container-for-mytasks-1-3').classList.add('active');
    })
</script>
