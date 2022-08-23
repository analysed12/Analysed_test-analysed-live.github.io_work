<title>Dashboard</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="./css/DashboardJobs.css">
    <link rel="stylesheet" href="./css/appliedCandidates.css">
    <link rel="stylesheet" href="./css/interviewDone.css">
    <link rel="stylesheet" href="./css/shortlistedJobs.css">
	<link rel="stylesheet" href="./css/myTasksNew.css">
	
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<body>
    <?php include('header.php') ?>
    <?php include('connection1.php') ?>
    <div class="container">

    	<div class="small_container">

    		<div class="bread-crumbs_Mytools-recruiter">
    			<a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="active-breadcrumb-link">Applied Candidates</a>
    		</div>

    		<div class="row-flex-jobs-j alignitemsstart-shortlisted Dashboard-main-container-jobs">

    			<div class="left-side-container-DashboardJ">

    				<?php
    				$total_rows = mysqli_query($conn,"SELECT * FROM interview");
    				$num = mysqli_num_rows($total_rows);
    				?>

    				<h2 class="jobsCreateaDashboard-jobs">Interviews Done<span>  (<?php echo htmlentities($num); ?>) </span></h2>
    				<div class="cards-section-container row-flex-jobs-j" id="result">

    					<?php
    					$sql=mysqli_query($conn,"select * from interview");
    					$check=mysqli_num_rows($sql)>0;
    					if($check){
    						while($row=mysqli_fetch_assoc($sql)){
    					 ?>

    							<div class="single-container-cards-DasboardJobs candidatesjobs-applied">
    								<a href="">

    									<?php
    									$status=$row["status"];
    									if($status=="Active") { ?>
    										<p class="candidate-status-jobs Active"><?php echo $row["status"]; ?></p>
    									<?php   }
    									if($status=="Unfinished"){ ?>
    										<p class="candidate-status-jobs Unfinished"><?php echo $row["status"]; ?></p>
    									<?php } 
    									if($status=="Completed"){ ?>
    										<p class="candidate-status-jobs Completed"><?php echo $row["status"]; ?></p>
    									<?php } ?>

    									<img src="./img/Ellipse 148-1.png" alt="">
    									<h3 class="job-headingnname"><?php echo $row["name"]; ?></h3>

    									<p class="skill-job-candiate"><?php echo $row["position"]; ?></p>

    									<p class="applied-in-iD">Applied companies</p>

    									<div class="row-flex-jobj">
    										<p class="jobStatus-interviewDone notactive"><span></span> <?php echo $row['company']; ?> </p>
    									</div>

    									<div class="upcomingInterviews-p">

    										<?php
    										$interview=$row["interview"];
    										if($interview=="Completed"){
    											?>
    											<p>Interview</p>
    											<p>Completed <img src="./img/Path 2211.svg"></p>
    										<?php }
    										else{
    											?>
    											<p>Upcoming Interview</p>
    											<?php
    											$date=$row['date']; 
    									        $datetime=date_format(new DateTime($date),"\\O\\n d M, Y \\a\\t H A");
    									        ?>
    									        <p><?php echo $datetime; ?></p>
    									    <?php } ?>

    									</div>

    									<a href="" class="resumepdfDownload row-flex-jobj"><img src="./img/File.svg" style="margin-right: 10px;width:20px"><?php echo $row["Resume"]; ?></a>

    									<div class="seemorebutton-social">
    										<a href="index.php" class="seemoreButton">See more</a>
    									</div>
    								</a>
    							</div>
    							<?php
    						}
    					}
    					?>
    				</div>
    			</div>


    			<div class="right-side-container-DashboardJ">
    				<div class="row-flex-jobj justifycontent-flex-end">
    					<p class="sortbyText">Sort By :</p>
    					<select name="multi_search" id="multi_search" class="sortbySelect">
    						<option>All</option>
    						<option value="Recent">Recent</option>
    						<option value="Old">Old</option>
    					</select>
    				</div>

    				<h2 class="filter-heading">Filter</h2>
    				<form class="form">

    					<div class="category-main-first">

    						<label for="jobtitle" class="label-applied-candidates">Job Title</label>
                            <input type="text" id="position" placeholder="Job Title" class="input-applied-candidates product_check" name="position"  oninput="myFunction()" onclick="myFunction()" autocomplete="off">

			            </div>

				        <div class="category-main-first">

				            <label for="CompanyName" class="label-applied-candidates">Company Name</label>
                            <input type="text" id="company" placeholder="Company Name" class="input-applied-candidates product_check" name="company"  oninput="myFunction()" onclick="myFunction()" autocomplete="off">

				        </div>
			
				        <div class="category-main-first">
				        	<p class="row-flex-jobs-j">
				        		<span class="heading-filter-dj" id="filterHeading3">Type of Interviews</span>
				        		<i class="fa fa-angle-down" aria-hidden="true"></i>
				        	</p>

				        	<div class="category-filters" id="categoryDiv3">
				        		<?php
				        		$sql="SELECT distinct status from interview order by status";
				        		$result=$conn->query($sql);
				        		while($row=$result->fetch_assoc()){
				        			?>
				        			<div class="row-flex-jobs-j">
				        				<span>
				        					<label class="form-check-label">
				        						<input type="checkbox" class="form-check-input product_check" value="<?= $row['status'];?>" id="status" onclick="myFunction()"><span> </span><?= $row['status']; ?>
				        					</label>
				        				</span>
				        				<p>
				        					<?php
				        					$st=$row['status'];
                                            $rt = mysqli_query($conn,"SELECT * FROM interview where status='$st'");
				                            $num1 = mysqli_num_rows($rt);
				                            ?>
				                            <?php echo htmlentities($num1); ?>
				                            	
				                        </p>
				                    </div>
				                <?php } ?>
				            </div>
				        </div>
				    </form>
				</div>
			</div>
		</body>
				
<script>
    const filterHeading3 = document.querySelector('#filterHeading3');

    const categoryDiv3 = document.querySelector('#categoryDiv3');

    
    filterHeading3.addEventListener('click',()=>{
        categoryDiv3.classList.toggle('active')
    })
</script>


<script type="text/javascript">

	function myFunction(){
			var action='data';
			var status= get_filter_text('status');
			var position=document.getElementById('position').value;
			var company=document.getElementById('company').value;
		
        
			$.ajax({
				url:'./include/action.php',
			    method:'POST',
				data:{action:action,status:status,position:position,company:company},
				success:function(response){
					$("#result").html(response);

				}
			});
		}

	
		function get_filter_text(text_id){
			var filterData=[];
			$('#'+text_id+':checked').each(function(){
				filterData.push($(this).val());
			});
			return filterData;
		}

</script>

<script>
	$(document).ready(function(){
		$("#multi_search").change(function(){
			var sort_val=$(this).val();

			$.ajax({
				url:'./include/action.php',
				method:'POST',
				data:{sort_val:sort_val},
				success:function(response){
					$("#result").html(response);
				}
			});
		});
	});
</script>

