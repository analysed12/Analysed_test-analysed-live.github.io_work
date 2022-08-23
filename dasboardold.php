
    <title>Dashboard</title>
  <body>
    <?php include('header.php') ?>
    <div class="container">
      <div class="small_container">
        <div class="heading_dash">
          <h1 class="mainHeadingDash">Dashboard</h1>
          <p class="mainParaDash">Welcome back, John Doe!</p>
        </div>
        <section class="cardsSection">
          <div class="cardItemDash">
            <section class="numberSection">
              <p class="headingCards">Jobs Applied</p>
              <h3 class="numberCards">1</h3>
            </section>
            <img src="./img/stats-img-1.png" alt="" class="cardImageDash" />
          </div>
          <div class="cardItemDash">
            <section class="numberSection">
              <p class="headingCards">Jobs Nearby</p>
              <h3 class="numberCards">30</h3>
            </section>
            <img src="./img/stats-img-2.png" alt="" class="cardImageDash" />
          </div>
          <div class="cardItemDash">
            <section class="numberSection">
              <p class="headingCards">Shortlisted</p>
              <h3 class="numberCards">10</h3>
            </section>
            <img src="./img/stats-img-3.png" alt="" class="cardImageDash" />
          </div>
          <div class="cardItemDash">
            <section class="numberSection">
              <p class="headingCards">Starred Jobs</p>
              <h3 class="numberCards">2</h3>
            </section>
            <img src="./img/stats-img-4.png" alt="" class="cardImageDash" />
          </div>
        </section>
        <section class="mapJobsSection">
          <div class="mapJobsSingle">
            <section class="headingForMapJobs">
              <span class="leftText">Jobs near you</span>
              <span class="rightText">
                <img src="./img/setting-icon-blue.png" />
                <span>Langley</span>
              </span>
            </section>
            <img src="./img/map.png" alt="" class="mapForJobsImage"/>
            <ul class="jobTitleList">
              <li class="jobTitleListItem active">
                <span>Job title</span>
                <span>Jobs Available</span>
              </li>
              <li class="jobTitleListItem">
                <span>Mern Stack Developer</span>
                <span>506</span>
              </li>
              <li class="jobTitleListItem">
                <span>Mean Stack Developer</span>
                <span>114</span>
              </li>
              <li class="jobTitleListItem">
                <span>Django Developer</span>
                <span>506</span>
              </li>
              <li class="jobTitleListItem">
                <span>React Developer</span>
                <span>506</span>
              </li>
            </ul>
          </div>
          <div class="mapJobsSingle">
            <section class="headingForMapJobs">
              <span class="leftText">Profile viewed</span>
              <span class="rightText">
                <img src="./img/setting-icon-blue.png" />
                <span>Last 30 Days</span>
              </span>
            </section>
            <span class="totalViews">Total Views: 136</span>
            <img src="./img/graph.png" alt="" class="mapForJobsImage"/>
            <ul class="jobTitleList">
              <li class="jobTitleListItem active">
                <span>Skills</span>
                <span>No. of Company</span>
              </li>
              <li class="jobTitleListItem">
                <span>Python</span>
                <span>506</span>
              </li>
              <li class="jobTitleListItem">
                <span>Design Xd</span>
                <span>114</span>
              </li>
              <li class="jobTitleListItem">
                <span>HTML & CSS</span>
                <span>506</span>
              </li>
              <li class="jobTitleListItem">
                <span>React Developer</span>
                <span>506</span>
              </li>
            </ul>
          </div>
        </section>
        <section class="recommendedForYou">
          <h4 class="heading_main_dash">Recommended for you</h4>

          <div class="cards_recommendedForYou">
            <div class="cardsItem_recommendedForYou">
                  <div class="icons-sharing-recommendedForYou">
                    <img src="./img/share-icon.png" class="shareIcon_recommendedForYou">
                    <img src="./img/star-icon.png" class="shareIcon_recommendedForYou">
                  </div>
              <section class="cardsItem_desc_sec">
                  <img src="./img/Airbnb-logo.png" alt="" class="cardsItem_Image">
                  <span class="cardsItem_Name">AirBnb</span>
              </section>
              <h4>Frontend Developer</h4>
              <span class="cardsItem_duration">2 Days Left</span>
              <p class="cardsItem_skills">HTML,CSS,UI,Frontend</p>
              <div class="cta_cardDesc">
                <span>Full time</span>
                <button class="ApplyNow_cardDesc">Apply Now</button>
              </div>
            </div>
            <div class="cardsItem_recommendedForYou">
                  <div class="icons-sharing-recommendedForYou">
                    <img src="./img/share-icon.png" class="shareIcon_recommendedForYou">
                    <img src="./img/star-icon.png" class="shareIcon_recommendedForYou">
                  </div>
              <section class="cardsItem_desc_sec">
                  <img src="./img/Netflix-logo.png" alt="" class="cardsItem_Image">
                  <span class="cardsItem_Name">Netflix</span>
              </section>
              <h4>Frontend Developer</h4>
              <span class="cardsItem_duration">2 Days Left</span>
              <p class="cardsItem_skills">HTML,CSS,UI,Frontend</p>
              <div class="cta_cardDesc">
                <span>Full time</span>
                <button class="ApplyNow_cardDesc">Apply Now</button>
              </div>
            </div>
            <div class="cardsItem_recommendedForYou">
                  <div class="icons-sharing-recommendedForYou">
                    <img src="./img/share-icon.png" class="shareIcon_recommendedForYou">
                    <img src="./img/star-icon.png" class="shareIcon_recommendedForYou">
                  </div>
              <section class="cardsItem_desc_sec">
                  <img src="./img/Uber-logo.png" alt="" class="cardsItem_Image">
                  <span class="cardsItem_Name">Uber</span>
              </section>
              <h4>Frontend Developer</h4>
              <span class="cardsItem_duration">2 Days Left</span>
              <p class="cardsItem_skills">HTML,CSS,UI,Frontend</p>
              <div class="cta_cardDesc">
                <span>Full time</span>
                <button class="ApplyNow_cardDesc">Apply Now</button>
              </div>
            </div>
            <div class="cardsItem_recommendedForYou viewMoreLink_recommendedForYou">
              <a href="#" class="viewMore_cardsItem_recommendedForYou">View More ></a>
            </div>
          </div>
        </section>
        <section class="searchForSpecificJob">
          <h4 class="heading_main_dash">Search for specific job</h4>
          <div class="specificJobCards">
            <div class="singleItem_specificJobCards">
              <img src="./img/DataAnalysis.png">
              <p>Data Analysis</p>
            </div>
            <div class="singleItem_specificJobCards">
              <img src="./img/Seo.png">
              <p>SEO</p>
            </div>
            <div class="singleItem_specificJobCards">
              <img src="./img/PythonDeveloper.png">
              <p>Python Developer</p>
            </div>
            <div class="singleItem_specificJobCards">
              <img src="./img/WebDeveloper.png">
              <p>Web Developer</p>
            </div>
            <div class="cardsItem_recommendedForYou viewMoreLink_recommendedForYou">
              <a href="#" class="viewMore_cardsItem_recommendedForYou">View More ></a>
            </div>
          </div>
        </section>
        <section class="upcomingInterviews">
          <div class="container_upcomingInterviews">
            <div class="main_cta_upcomingInterviews">
              <p>Upcoming Interviews</p>
              <a href="#">Schedule an interview +</a>
            </div>
            <div class="heading_upcomingInterviews">
              <p>NAME</p>
              <p>DATE</p>
              <p>JOB ROLE</p>
            </div>
            <div class="companies_upcomingInterviews">
              <div class="singleCompany_upcomingInterview">
                <div class="companyDetails_upcomingInterview">
                  <img src="./img/Profile1.png">
                  <span class="name_upcomingInterviews"><p>John Smith</p>
                <p class="designationInterview">Company</p></span>
                  
                </div>
                <div class="schedule_upcomingInterview">
                  <img src="./img/black-calendar-icon.png">
                  <p>12th May,2020</p>
                  <!-- <span>
                    
                    </span>
                  <img src="./img/grey-clock-icon.png"> <p>5 PM</p> -->
                  
                </div>
                <p class="role_upcomingInterview">
                  Full stack web developer
                </p>
              </div>
              <div class="singleCompany_upcomingInterview">
                <div class="companyDetails_upcomingInterview">
                  <img src="./img/Profile1.png">
                  <span class="name_upcomingInterviews"><p>John Smith</p>
                <p class="designationInterview">Company</p></span>
                  
                </div>
                <div class="schedule_upcomingInterview">
                  <img src="./img/black-calendar-icon.png">
                  <p>12th May,2020</p>
                  <!-- <span>
                    
                    </span>
                  <img src="./img/grey-clock-icon.png"> <p>5 PM</p> -->
                  
                </div>
                <p class="role_upcomingInterview">
                  Full stack web developer
                </p>
              </div>
              <div class="singleCompany_upcomingInterview">
                <div class="companyDetails_upcomingInterview">
                  <img src="./img/Profile1.png">
                  <span class="name_upcomingInterviews"><p>John Smith</p>
                <p class="designationInterview">Company</p></span>
                  
                </div>
                <div class="schedule_upcomingInterview">
                  <img src="./img/black-calendar-icon.png">
                  <p>12th May,2020</p>
                  <!-- <span>
                    
                    </span>
                  <img src="./img/grey-clock-icon.png"> <p>5 PM</p> -->
                  
                </div>
                <p class="role_upcomingInterview">
                  Full stack web developer
                </p>
              </div>
              <div class="singleCompany_upcomingInterview">
                <div class="companyDetails_upcomingInterview">
                  <img src="./img/Profile1.png">
                  <span class="name_upcomingInterviews"><p>John Smith</p>
                  <p class="designationInterview">Company</p></span>
                  
                </div>
                <div class="schedule_upcomingInterview">
                  <img src="./img/black-calendar-icon.png">
                  <p>12th May,2020</p>
                  <!-- <span>
                    
                    </span>
                  <img src="./img/grey-clock-icon.png"> <p>5 PM</p> -->
                  
                </div>
                <p class="role_upcomingInterview">
                  Full stack web developer
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </body>

</html>
