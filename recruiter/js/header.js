const hamburger = document.querySelector(".hamburger");
const sideBarMenu = document.querySelector(".sidebar_main");
const profileDropdownDiv = document.querySelector('.dropDownDiv_nav');
const menuForSidebar = document.querySelector('.menuForSidebar');
const notiMail = document.querySelector('.notificationProfileInNavNoti');

const notificationDiv = document.querySelector('.notificationsDiv');
const profileInvo = document.querySelector('.profileInfoInNav');
const profileIcons = document.querySelector('.profileInNav');
const profileDropdownLink = document.querySelector('.dropDownMenu_nav');
var x = window.matchMedia("(max-width: 500px)")

if(window.location.href.includes('profile.php')){
    profileInvo.style.display = 'none';
    profileIcons.style.flexBasis = '5%';
    notificationDiv.style.right = '1%';
    if(x.matches){
        profileIcons.style.flexBasis = '20%';
        notificationDiv.style.right = '-200%';
    }
}

const sideBarShow = () =>{
    sideBarMenu.classList.toggle('toggleSideBar')
}

const notifDiv = () => {
    notificationDiv.classList.toggle('activeNotificationsDiv')
}
profileDropdownLink.addEventListener('click',()=>{
    profileDropdownDiv.classList.toggle('dropDownDiv_nav_active')
})
menuForSidebar.addEventListener("click", sideBarShow);
hamburger.addEventListener("click", sideBarShow);
notiMail.addEventListener("click", notifDiv);

// const Item = document.querySelector('#searchBtn')
// Item.addEventListener('click',() =>{
//     document.querySelector('#details').style.display='block'
    
    
// })

 const targetDiv = document.querySelector("#details");
    const btnn = document.querySelector("#searchBtnn");
    btnn.onclick = () => {
      if (targetDiv.style.display !== 'none') {
        targetDiv.style.display = 'none'
      } else {
        targetDiv.style.display = 'block'
      }
    };
