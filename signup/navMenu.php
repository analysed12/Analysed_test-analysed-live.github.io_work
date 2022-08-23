<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/index.css">
<div class="container">
        <nav class="navigation-bar-signup">
            <a href="/" class="analysed-logo-signup">Analysed</a>
            <i class="fa fa-bars navigation-menu-signup" aria-hidden="true" class=""></i>

            <ul class="analysed-navigation-items">
                <li><a href="../../recruiter/contact.php">Contact us</a></li>
                <li><a href="../../recruiter/aboutOrganization.php">About us</a></li>
            </ul>
</nav>

<script>
    const hamburger = document.querySelector('.navigation-menu-signup');
    const list = document.querySelector('.analysed-navigation-items');
    hamburger.addEventListener('click',()=>{
        list.classList.toggle('active');
        hamburger.classList.toggle('active');
        hamburger.classList.toggle('fa-bars');
        hamburger.classList.toggle('fa-times');

    })
</script>