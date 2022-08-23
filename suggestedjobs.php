

<?php

   include 'connection1.php';
   session_start();
?>


<?php include('header.php')?>
<link rel="stylesheet" href="./css/suggestedjobs.css" />
<div class="container">
    <div class="sugjob_breadcrumb_container">
        <ul class="sugjob_breadcrumb_container_ul">
            <li class="sugjob_breadcrumb_container_li"><a href="#">Dashboard</a></li>
            <li class="sugjob_breadcrumb_container_li"><a href="#">Suggested Jobs</a></li>
        </ul>
    </div>
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Suggested Jobs</h1>
            <div class="mainParaDash">
                <p>Sort by:</p>
                <select>
                    <option>Recent</option>
                </select>
                <p>Applicants:</p>
                <select>
                    <option>Low to high</option>
                </select>
            </div>
            <div class="main_sugjob_container">
                <div class="sugjob_cards sugjob_flex_item">
                <div class="sugjob_carditem">
                <div class="job_content">
                  <div class="icons">
                    <img src="img/share-icon.png">
                    <img src="img/star-icon.png">
                  </div>
                  <div class="company">
                    <div class="aligned">
                      <img src="img/Group 2908.png" />
                      <p style="padding: 10px; font-weight: 400;">Nike</p>
                    </div>
                  </div>
                  <div class="designation">
                    BUSINESS ANALYST
                  </div>
                  <div>
                    <progress value="2" max="20"></progress>
                    <p class="days">16 days left</p>
                  </div>
                  <div class="skills">
                    <h5> Data Visualisation, MS Office </h5>
                  </div>
                  <div class="last_job_content">
                    <p id="first">Full Time</p>
                    <a href="#" id="second">Apply Now</a>
                  </div>
                </div>
         </div>

         <div class="sugjob_carditem">
            <div class="job_content">
              <div class="icons">
                <img src="img/share-icon.png">
                <img src="img/star-icon.png">
              </div>
              <div class="company">
                <div class="aligned">
                  <img src="img/Group 2908.png" />
                  <p style="padding: 10px; font-weight: 400;">Nike</p>
                </div>
              </div>
              <div class="designation">
                BUSINESS ANALYST
              </div>
              <div>
                <progress value="2" max="20"></progress>
                <p class="days">16 days left</p>
              </div>
              <div class="skills">
                <h5> Data Visualisation, MS Office </h5>
              </div>
              <div class="last_job_content">
                <p id="first">Full Time</p>
                <a href="#" id="second">Apply Now</a>
              </div>
            </div>
     </div>


     <div class="sugjob_carditem">
        <div class="job_content">
          <div class="icons">
            <img src="img/share-icon.png">
            <img src="img/star-icon.png">
          </div>
          <div class="company">
            <div class="aligned">
              <img src="img/Group 2908.png" />
              <p style="padding: 10px; font-weight: 400;">Nike</p>
            </div>
          </div>
          <div class="designation">
            BUSINESS ANALYST
          </div>
          <div>
            <progress value="2" max="20"></progress>
            <p class="days">16 days left</p>
          </div>
          <div class="skills">
            <h5> Data Visualisation, MS Office </h5>
          </div>
          <div class="last_job_content">
            <p id="first">Full Time</p>
            <a href="#" id="second">Apply Now</a>
          </div>
        </div>
 </div>


 <div class="sugjob_carditem">
    <div class="job_content">
      <div class="icons">
        <img src="img/share-icon.png">
        <img src="img/star-icon.png">
      </div>
      <div class="company">
        <div class="aligned">
          <img src="img/Group 2908.png" />
          <p style="padding: 10px; font-weight: 400;">Nike</p>
        </div>
      </div>
      <div class="designation">
        BUSINESS ANALYST
      </div>
      <div>
        <progress value="2" max="20"></progress>
        <p class="days">16 days left</p>
      </div>
      <div class="skills">
        <h5> Data Visualisation, MS Office </h5>
      </div>
      <div class="last_job_content">
        <p id="first">Full Time</p>
        <a href="#" id="second">Apply Now</a>
      </div>
    </div>
</div>


<div class="sugjob_carditem">
    <div class="job_content">
      <div class="icons">
        <img src="img/share-icon.png">
        <img src="img/star-icon.png">
      </div>
      <div class="company">
        <div class="aligned">
          <img src="img/Group 2908.png" />
          <p style="padding: 10px; font-weight: 400;">Nike</p>
        </div>
      </div>
      <div class="designation">
        BUSINESS ANALYST
      </div>
      <div>
        <progress value="2" max="20"></progress>
        <p class="days">16 days left</p>
      </div>
      <div class="skills">
        <h5> Data Visualisation, MS Office </h5>
      </div>
      <div class="last_job_content">
        <p id="first">Full Time</p>
        <a href="#" id="second">Apply Now</a>
      </div>
    </div>
</div>


<div class="sugjob_carditem">
    <div class="job_content">
      <div class="icons">
        <img src="img/share-icon.png">
        <img src="img/star-icon.png">
      </div>
      <div class="company">
        <div class="aligned">
          <img src="img/Group 2908.png" />
          <p style="padding: 10px; font-weight: 400;">Nike</p>
        </div>
      </div>
      <div class="designation">
        BUSINESS ANALYST
      </div>
      <div>
        <progress value="2" max="20"></progress>
        <p class="days">16 days left</p>
      </div>
      <div class="skills">
        <h5> Data Visualisation, MS Office </h5>
      </div>
      <div class="last_job_content">
        <p id="first">Full Time</p>
        <a href="#" id="second">Apply Now</a>
      </div>
    </div>
</div>
                </div>
                <div class="sugjob_filter sugjob_flex_item ">
                <span style="margin-right: 15px; float:left;">Filters <img src="img/filter_list-24px.svg" style="margin-top: 12px;" /></span>
        <br><br><br>
        <p>Location</p>
        <input type="text" placeholder="Type location" class="loc">
        <p>Pay type salary</p>
        <div class="salary">
          <input type="text" id="t1" style="float: left;" placeholder="Min">
          <input type="text" id="t2" style="float:right;" placeholder="Max">
        </div>
        <p>Industry</p>
        <select title="Status" class="sel">
          <option disabled selected>Choose Industry</option>
          <option>Open</option>
          <option>Closed</option>
        </select>
        <p>Job Type</p>
        <br>
        <div class="radio-options">
          <input type="radio" value="1" name="jobtype"> Part-time
          <br><br>
          <input type="radio" value="2" name="jobtype"> Full-time
          <br><br>
          <input type="radio" value="3" name="jobtype"> Internship
        </div>
        <br>
        <div id="chip">
          <p> Add Skills +</p>
          <br>
        </div>
        <div class="chip">
          PHP <span class="close">&times;</span>
        </div>
        <div class="chip">
          MySQL<span class="close">&times;</span>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>
