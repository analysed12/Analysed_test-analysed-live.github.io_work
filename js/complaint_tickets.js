const allcategories = document.querySelector('.sub-ticket-categories-options-tochoose');
const recentCategory = document.querySelector('.sub-ticket-categories-options-tochoose-recent');
const unassignedCategory = document.querySelector('.sub-ticket-categories-options-tochoose-unassigned');
const closedCategory = document.querySelector('.sub-ticket-categories-options-tochoose-closed');
const recentDiv = document.querySelector('.recent-complaint-tickets-recruiter ');
const unassignedDiv = document.querySelector('.unassigned-complaint-tickets-recruiter');
const closedDiv = document.querySelector('.closed-complaint-tickets-recruiter');
const createTicketButton = document.querySelector('.create-ticket-button-for-complaints-ticket');
const closeTicketButton =  document.querySelector('.close-button-for-dialog-box-create-tickets');

createTicketButton.addEventListener('click',()=>{
    document.querySelector('.create-ticket-recruiter-ekam').classList.toggle('active');
})
closeTicketButton.addEventListener('click',()=>{
    document.querySelector('.create-ticket-recruiter-ekam').classList.toggle('active');
})
recentCategory.addEventListener('click',()=>{
    closedCategory.classList.remove('active');
    unassignedCategory.classList.remove('active');
    recentCategory.classList.add('active');

    recentDiv.classList.add('active');
    unassignedDiv.classList.remove('active');
    closedDiv.classList.remove('active');
})
unassignedCategory.addEventListener('click',()=>{
    closedCategory.classList.remove('active');
    unassignedCategory.classList.add('active');
    recentCategory.classList.remove('active');

    recentDiv.classList.remove('active');
    unassignedDiv.classList.add('active');
    closedDiv.classList.remove('active');
})
closedCategory.addEventListener('click',()=>{
    closedCategory.classList.add('active');
    unassignedCategory.classList.remove('active');
    recentCategory.classList.remove('active');

    recentDiv.classList.remove('active');
    unassignedDiv.classList.remove('active');
    closedDiv.classList.add('active');
})

