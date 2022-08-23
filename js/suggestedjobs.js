const hamburger = document.querySelector(".hamburger");
const sideBarMenu = document.querySelector(".sidebar_main");
const container = document.querySelector('.container');
const mainNav = document.querySelector('.nav_main');
const menuForSidebar = document.querySelector('.menuForSidebar');


const sideBarShow = () =>{
    sideBarMenu.classList.toggle('toggleSideBar')
}

const sideBarHide = () =>{
    sideBarMenu.classList.toggle('toggleSideBar')
}
menuForSidebar.addEventListener("click", sideBarHide);
hamburger.addEventListener("click", sideBarShow);


function addskills(){
    var x = document.getElementById("addskill");
    x.h
}
