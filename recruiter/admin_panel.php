<?php include('header.php')?>
<link rel="stylesheet" href="./css/dashboard.css">
<link rel="stylesheet" href="./css/admin_panel_remo.css">

<body>
    <div class="container">
        <div class="small_container-1">
            <div class="heading_dash">
                <h1 class="mainHeadingDash">Admin Panel</h1>
                <p class="mainParaDash">create and manage your user types</p>
            </div>
            <div class="row-recruiter quickaccess-links-container">
                <a href="client_list.php" class="quickaccess-links-recruiter">Clients <svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-building" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                        <path
                            d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                    </svg></a>

                <a href="contact_list.php" class="quickaccess-links-recruiter">Contacts <svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                        <path
                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                    </svg></a>

                <a href="#" class="quickaccess-links-recruiter">Placements <svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path
                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        <path fill-rule="evenodd"
                            d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                    </svg></a>
            </div>
            <span class="row-recruiter upcoming_interview_top_span">
                <div class="search-box">
                    <details id="dropdown" class="dropdown">
                        <summary class="dropdown-button">
                            <span id="selected-item" class="selected-item"><i class="fa fa-filter"></i> All types</span>
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
                    <input class="search-form-input" type="text" name="search" placeholder="Search by company name">
                    <button class="searchButton second-search">
                        <img src="./img/search-icon-blue.png" />
                    </button>
                </div>
                <button class="btn" id="myBtn" type="button"><a href="create_new_user.php">Create new user
                        +</a></button>
            </span>

            <!-- The Modal -->
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">close</span>
                    <div class="heading_dash">
                        <h1 class="mainHeadingDash" style="font-size:18px;color:#333333;margin-left:30px">Select the
                            type of user</h1>
                        <span class="" style="color:#979797;margin-left:30px;margin-bottom:110px;">Select a pre-defined
                            user type or create a new one</span>
                    </div>
                    <div class="row-recruiter quickaccess">
                        <a href="#" class="quickaccess-links link-1"
                            style="border: 1px solid #2D3E50;color:#2D3E50;">Resourcing team <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-gear" viewBox="0 0 16 16">
                                <path
                                    d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                <path
                                    d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                            </svg></a>

                        <a href="#" class="quickaccess-links link-2"
                            style="border: 1px solid #FFBD06;color:#FFBD06;">Finance team <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-cash-stack" viewBox="0 0 16 16">
                                <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                <path
                                    d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z" />
                            </svg></a>

                        <a href="#" class="quickaccess-links link-3"
                            style="border: 1px solid #51C46D;color:#51C46D">Enterprise admin <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-building" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                <path
                                    d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                            </svg></a>

                        <a href="#" class="quickaccess-links link-4"
                            style="border: 1px solid #E84BC4;color:#E84BC4;">Master admin <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-shield-plus" viewBox="0 0 16 16">
                                <path
                                    d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                <path
                                    d="M8 4.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5V5a.5.5 0 0 1 .5-.5z" />
                            </svg></a>

                        <a href="#" class="quickaccess-links link-5"
                            style="border: 1px solid #3598DB;color:#3598DB;">Contact care <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                            </svg></a>

                        <a href="#" class="quickaccess-links link-6"
                            style="border: 1px solid #8C60EB;color:#8C60EB;">Recruiter <i class="fa fa-file-code-o"
                                aria-hidden="true"></i></a>
                    </div>
                    <div class="heading_dash">
                        <h1 class="mainHeadingDash" style="font-size:15px;color:#333333;margin-left:30px"><a href="#"
                                style="color:black">Create custom user <i class="fa fa-user"></i></a></h1>
                        <div class="right-column-1">
                            <a href="#">Proceed</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-recruiter">
                <h2 class="heading-for-general-information-right-side-add-client-container"
                    style="color:#2D3E50;font-size:18px;">Resource team</h2>
            </div>
            <div class="row">
                <div class="column">
                    <img src="./img/Ellipse -2.png">
                    <span
                        style="background-color:#51C46D;height:10px;width:10px;border-radius:100%;display:inline-block;margin-left:-16px"></span>
                </div>
                <div class="column">
                    <img src="./img/Ellipse -4.png">
                    <span
                        style="background-color:#979797;height:10px;width:10px;border-radius:100%;display:inline-block;margin-left:-16px;"></span>
                </div>
                <div class="column">
                    <img src="./img/Ellipse -5.png">
                    <span
                        style="background-color:#979797;height:10px;width:10px;border-radius:100%;display:inline-block;margin-left:-16px;"></span>
                </div>
                <div class="column">
                    <img src="./img/Ellipse -3.png">
                    <span
                        style="background-color:#51C46D;height:10px;width:10px;border-radius:100%;display:inline-block;margin-left:-16px;"></span>
                </div>
                <div class="column">
                    <p>+2</p>
                </div>
                <div class="right-column">
                    <a href="#">Expand</a>
                </div>
            </div>
            <div class="row-recruiter" style="padding-top:30px">
                <h2 class="heading-for-general-information-right-side-add-client-container"
                    style="color:#FFBD06;font-size:18px;">Finance team</h2>
            </div>
            <div class="row">
                <div class="column">
                    <img src="./img/Ellipse -2.png">
                    <span
                        style="background-color:#51C46D;height:10px;width:10px;border-radius:100%;display:inline-block;margin-left:-16px"></span>
                </div>
                <div class="column">
                    <img src="./img/Ellipse -4.png">
                    <span
                        style="background-color:#979797;height:10px;width:10px;border-radius:100%;display:inline-block;margin-left:-16px;"></span>
                </div>
                <div class="column">
                    <img src="./img/Ellipse -5.png">
                    <span
                        style="background-color:#979797;height:10px;width:10px;border-radius:100%;display:inline-block;margin-left:-16px;"></span>
                </div>
                <div class="column">
                    <p>+1</p>
                </div>
                <div class="right-column">
                    <a href="#">Expand</a>
                </div>
            </div>
            <div class="row-recruiter" style="padding-top:30px">
                <h2 class="heading-for-general-information-right-side-add-client-container"
                    style="color:#E84BC4;font-size:18px;">Master admin</h2>
            </div>
            <div class="row">
                <div class="column">
                    <img src="./img/Ellipse -2.png">
                    <span
                        style="background-color:#979797;height:10px;width:10px;border-radius:100%;display:inline-block;margin-left:-16px;"></span>
                </div>
                <div class="column">
                    <img src="./img/Ellipse -4.png">
                    <span
                        style="background-color:#979797;height:10px;width:10px;border-radius:100%;display:inline-block;margin-left:-16px;"></span>
                </div>
                <div class="right-column">
                    <a href="#">Expand</a>
                </div>
            </div>
            <div class="row-recruiter" style="padding-top:30px">
                <h2 class="heading-for-general-information-right-side-add-client-container"
                    style="color:#297FB8;font-size:18px;">Contract care</h2>
            </div>
            <div class="row">
                <div class="column">
                    <img src="./img/Ellipse -2.png">
                    <span
                        style="background-color:#51C46D;height:10px;width:10px;border-radius:100%;display:inline-block;margin-left:-16px"></span>
                </div>
                <div class="column">
                    <img src="./img/Ellipse -4.png">
                    <span
                        style="background-color:#979797;height:10px;width:10px;border-radius:100%;display:inline-block;margin-left:-16px;"></span>
                </div>
                <div class="column">
                    <img src="./img/Ellipse -5.png">
                    <span
                        style="background-color:#979797;height:10px;width:10px;border-radius:100%;display:inline-block;margin-left:-16px;"></span>
                </div>
                <div class="column">
                    <img src="./img/Ellipse -3.png">
                    <span
                        style="background-color:#51C46D;height:10px;width:10px;border-radius:100%;display:inline-block;margin-left:-16px"></span>
                </div>
                <div class="column">
                    <p>+3</p>
                </div>
                <div class="right-column">
                    <a href="#">Expand</a>
                </div>
            </div>
            <div class="row-recruiter" style="padding-top:30px">
                <h2 class="heading-for-general-information-right-side-add-client-container"
                    style="color:8C60EB;font-size:18px;">Recruiters</h2>
            </div>
            <div class="row">
                <div class="column">
                    <img src="./img/Ellipse -2.png">
                    <span
                        style="background-color:#51C46D;height:10px;width:10px;border-radius:100%;display:inline-block;margin-left:-16px"></span>
                </div>
                <div class="right-column">
                    <a href="#">Expand</a>
                </div>
            </div>
        </div>
    </div>
</body>


<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
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