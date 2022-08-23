const GeneralInfo = document.querySelector('#link-categories-addClient-1');
const ContactInfo = document.querySelector('#link-categories-addClient-2');
const BillingInfo = document.querySelector('#link-categories-addClient-3');

const GeneralInfoDiv = document.querySelector('#general-information-addclient-1');
const ContactInfoDiv = document.querySelector('#contact-info-addclient-1');
const BillingInfoDiv = document.querySelector('#billing-info-addclient-1');
const startingFunctionaddClient = () => {
    GeneralInfo.classList.add('active');
    ContactInfo.classList.remove('active');
    BillingInfo.classList.remove('active');

    GeneralInfoDiv.style.display = 'block'
    ContactInfoDiv.style.display = 'none'
    BillingInfoDiv.style.display = 'none'

}

document.onload = startingFunctionaddClient();

    GeneralInfo.addEventListener('click',()=>{
        GeneralInfo.classList.add('active');
        ContactInfo.classList.remove('active');
        BillingInfo.classList.remove('active');
    
        GeneralInfoDiv.style.display = 'block'
        ContactInfoDiv.style.display = 'none'
        BillingInfoDiv.style.display = 'none'
    })
ContactInfo.addEventListener('click',()=>{
    ContactInfo.classList.add('active');
    GeneralInfo.classList.remove('active');
    BillingInfo.classList.remove('active');

    ContactInfoDiv.style.display = 'block';
    GeneralInfoDiv.style.display = 'none';
    BillingInfoDiv.style.display = 'none';
})
BillingInfo.addEventListener('click',()=>{
    BillingInfo.classList.add('active');
    GeneralInfo.classList.remove('active');
    ContactInfo.classList.remove('active');

    BillingInfoDiv.style.display = 'block';
    GeneralInfoDiv.style.display = 'none';
    ContactInfoDiv.style.display = 'none';
})