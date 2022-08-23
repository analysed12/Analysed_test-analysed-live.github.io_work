<?php include('header.php')?>
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


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>

<link rel="stylesheet" href="css/user_profile_login.css">
<body>

    <br><br>
    <div class="container">
    <div class="row" style="margin-left:20px">
        <div class="col-2">
            <div class="card" id="m1">
                <img src="img/img1.png" height="220px" width="278px" id="m2"><br>
                <div class="main_b">
                <p class="v1">Naruto Uzumaki</p>
                <p class="v2">Web developer</p>
                <p class="v3"><img src="img/locat.png" height="14px" width="13px"> Bangalore</p><br>
                <p class="v4">About</p>
                <p class="v3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p><br>
                <p class="v4">naruto@gmail.com</p>
                <p class="v4">+91 9000900090</p><br>
                <p class="v6"><button class="v5" id="myBtn1" > PHP </button>&nbsp;&nbsp;
                <button class="v5" id="myBtn2" > MySQL </button>&nbsp;<br><br>
                <button class="v5" id="myBtn3" > Node.js </button></p>
                </div>
            </div>
        </div>
        <div class="col-10" >
            <div class="categories-mytasks-1-active">
                <button class="x1" id="nac" onclick="location.href='user_activity.php'"> Activity Log </button>
                <button class="x1" id="ac" onclick="location.href='user_profile_login.php'"> Login activity </button>
                <button class="x1" id="nac" onclick="location.href='user_profile_files.php'"> Shared files </button>
            </div><br><br>
            <div class="left_Calendar_main">
                    <div class="selection-body_Calendar_main">
                        <div class="month_year-selection-body">
                            <select name="" id="" class="month-selection-body">
                                <option value="0">Jan</option>
                                <option value="1">Feb</option>
                                <option value="2">Mar</option>
                                <option value="3">Apr</option>
                                <option value="4">May</option>
                                <option value="5">Jun</option>
                                <option value="6">Jul</option>
                                <option value="7">Aug</option>
                                <option value="8">Sep</option>
                                <option value="9">Oct</option>
                                <option value="10">Nov</option>
                                <option value="11">Dec</option>
                            </select>
                            <select name="" id="" class="year-selection-body">
                                <option value="0">2021</option>
                                <option value="1">2022</option>
                                <option value="2">2023</option>
                                <option value="3">2024</option>
                                <option value="4">2025</option>
                                <option value="5">2026</option>
                                <option value="6">2027</option>
                                <option value="7">2028</option>
                                <option value="8">2029</option>
                                <option value="9">2030</option>
                                <option value="10">2031</option>
                                <option value="11">2032</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="main-container_Calendar">
                        <div class="weekDays-main-container_Calendar">
                            <span class="weekDays_span">S</span>
                            <span class="weekDays_span">M</span>
                            <span class="weekDays_span">T</span>
                            <span class="weekDays_span">W</span>
                            <span class="weekDays_span">T</span>
                            <span class="weekDays_span">F</span>
                            <span class="weekDays_span">S</span>
                        </div>
                        <div class="dates_weekDays-main-container_Calendar">
                            <table>
                            <tr class="rowForDates_week">
                                <td class="weekDays_rowForDates_week">27</td>
                                <td class="weekDays_rowForDates_week">28
                                    <div class="span-class">
                                        <span class="sign-out" onclick="location.href='user_profile_login-1.php'"><i class="fas fa-sign-out-alt"></i></span>
                                        <span class="sign-in"><i class="fas fa-sign-in-alt"></i></span>
                                        <span class="sign-in"><i class="fas fa-sign-in-alt"></i></span>
                                    </div>
                                </td>
                                <td class="weekDays_rowForDates_week">29</td>
                                <td class="weekDays_rowForDates_week">30</td>
                                <td class="weekDays_rowForDates_week">1</td>
                                <td class="weekDays_rowForDates_week">2</td>
                                <td class="weekDays_rowForDates_week">3</td>
                            </tr>
                            <tr class="rowForDates_week">
                                <td class="weekDays_rowForDates_week">4</td>
                                <td class="weekDays_rowForDates_week">5</td>
                                <td class="weekDays_rowForDates_week">6</td>
                                <td class="weekDays_rowForDates_week">7</td>
                                <td class="weekDays_rowForDates_week">8</td>
                                <td class="weekDays_rowForDates_week">9</td>
                                <td class="weekDays_rowForDates_week">10</td>
                            </tr>
                            <tr class="rowForDates_week">
                                <td class="weekDays_rowForDates_week">11</td>
                                <td class="weekDays_rowForDates_week">12
                                <div class="span-class">
                                        <span class="sign-out" onclick="location.href='user_profile_login-1.php'"><i class="fas fa-sign-out-alt"></i></span>
                                        <span class="sign-in"><i class="fas fa-sign-in-alt"></i></span>
                                        <span class="sign-in"><i class="fas fa-sign-in-alt"></i></span>
                                    </div>
                                </td>
                                <td class="weekDays_rowForDates_week">13</td>
                                <td class="weekDays_rowForDates_week">14</td>
                                <td class="weekDays_rowForDates_week">15
                                <div class="span-class">
                                        <span class="sign-out"><i class="fas fa-sign-out-alt"></i></span>
                                        <span class="sign-in"><i class="fas fa-sign-in-alt"></i></span>
                                        <span class="sign-in"><i class="fas fa-sign-in-alt"></i></span>
                                    </div></td>
                                <td class="weekDays_rowForDates_week">16</td>
                                <td class="weekDays_rowForDates_week">17</td>
                            </tr>
                            <tr class="rowForDates_week">
                                <td class="weekDays_rowForDates_week">18</td>
                                <td class="weekDays_rowForDates_week">19</td>
                                <td class="weekDays_rowForDates_week">20</td>
                                <td class="weekDays_rowForDates_week">21</td>
                                <td class="weekDays_rowForDates_week">22</td>
                                <td class="weekDays_rowForDates_week">23</td>
                                <td class="weekDays_rowForDates_week">24</td>
                            </tr>
                            <tr class="rowForDates_week">
                                <td class="weekDays_rowForDates_week last-row">25</td>
                                <td class="weekDays_rowForDates_week last-row">26</td>
                                <td class="weekDays_rowForDates_week last-row">27</td>
                                <td class="weekDays_rowForDates_week last-row">28</td>
                                <td class="weekDays_rowForDates_week last-row">29</td>
                                <td class="weekDays_rowForDates_week last-row">30</td>
                                <td class="weekDays_rowForDates_week last-row">31</td>
                            </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <br><br><br>
</div>
</body>