const floatingIcon = () =>{
    document.querySelector('.floating-button-bottom-left-recruiter-db').classList.toggle('rotate-my-floating-button-bottom-left-recruiter-db')
    document.querySelector('.floating-div-ul-dashboard-recruiter').classList.toggle('display-ul-floating-list-onbutton');
}
document.querySelector('.floating-button-bottom-left-recruiter-db').addEventListener('click',floatingIcon);
