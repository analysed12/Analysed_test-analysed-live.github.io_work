const JobInfo = document.querySelector('#link-categories-addRec-1');
const SkillsInfo = document.querySelector('#link-categories-addRec-2');
const RoleInfo = document.querySelector('#link-categories-addRec-3');
const PaymentInfo = document.querySelector('#link-categories-addRec-4');

const JobInfoDiv = document.querySelector('#job-information-createRec-1');
const SkillsInfoDiv = document.querySelector('#skills-information-createRec-1');
const RoleInfoDiv = document.querySelector('#role-information-createRec-1');
const PaymentInfoDiv = document.querySelector('#payment-information-createRec-1');

const startingFunctionaddClient = () => {
    JobInfo.classList.add('active');
    SkillsInfo.classList.remove('active');
    RoleInfo.classList.remove('active');
    PaymentInfo.classList.remove('active');

    JobInfoDiv.style.display = 'block'
    SkillsInfoDiv.style.display = 'none'
    RoleInfoDiv.style.display = 'none'
    PaymentInfoDiv.style.display = 'none'
}

document.onload = startingFunctionaddClient();

JobInfo.addEventListener('click',()=>{
        JobInfo.classList.add('active');
        SkillsInfo.classList.remove('active');
        RoleInfo.classList.remove('active');
        PaymentInfo.classList.remove('active');

        JobInfoDiv.style.display = 'block'
        SkillsInfoDiv.style.display = 'none'
        RoleInfoDiv.style.display = 'none'
        PaymentInfoDiv.style.display = 'none'
})
SkillsInfo.addEventListener('click',()=>{
    JobInfo.classList.remove('active');
    SkillsInfo.classList.add('active');
    RoleInfo.classList.remove('active');
    PaymentInfo.classList.remove('active');

    JobInfoDiv.style.display = 'none'
    SkillsInfoDiv.style.display = 'block'
    RoleInfoDiv.style.display = 'none'
    PaymentInfoDiv.style.display = 'none'
})
RoleInfo.addEventListener('click',()=>{
    JobInfo.classList.remove('active');
    SkillsInfo.classList.remove('active');
    RoleInfo.classList.add('active');
    PaymentInfo.classList.remove('active');

    JobInfoDiv.style.display = 'none'
    SkillsInfoDiv.style.display = 'none'
    RoleInfoDiv.style.display = 'block'
    PaymentInfoDiv.style.display = 'none'
})
PaymentInfo.addEventListener('click',()=>{
    JobInfo.classList.remove('active');
    SkillsInfo.classList.remove('active');
    RoleInfo.classList.remove('active');
    PaymentInfo.classList.add('active');

    JobInfoDiv.style.display = 'none'
    SkillsInfoDiv.style.display = 'none'
    RoleInfoDiv.style.display = 'none'
    PaymentInfoDiv.style.display = 'block'
})