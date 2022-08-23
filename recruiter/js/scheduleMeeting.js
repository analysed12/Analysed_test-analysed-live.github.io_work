const Button1 = document.querySelector('#queries-category-heading-meeting-1');
const Button2 = document.querySelector('#queries-category-heading-meeting-2');
const Button3 = document.querySelector('#queries-category-heading-meeting-3');
const Button4 = document.querySelector('#queries-category-heading-meeting-4');
const Button5 = document.querySelector('#queries-category-heading-meeting-5');

const Button1Div = document.querySelector('#queries-schedule-meeting-1');
const Button2Div = document.querySelector('#queries-schedule-meeting-2');
const Button3Div = document.querySelector('#queries-schedule-meeting-3');
const Button4Div = document.querySelector('#queries-schedule-meeting-4');
const Button5Div = document.querySelector('#queries-schedule-meeting-5');


const startingFunctionaddClient = () => {
    Button1.classList.remove('unactive');
    Button2.classList.add('unactive');
    Button3.classList.add('unactive');
    Button4.classList.add('unactive');
    Button5.classList.add('unactive');


    Button1Div.classList.add('active');
    Button2Div.remove('active');
    Button3Div.remove('active');
    Button4Div.remove('active');
    Button5Div.remove('active');
}

document.onload = startingFunctionaddClient();

Button1.addEventListener('click',()=>{
    Button1.classList.remove('unactive');
    Button2.classList.add('unactive');
    Button3.classList.add('unactive');
    Button4.classList.add('unactive');
    Button5.classList.add('unactive');


    Button1Div.classList.add('active');
    Button2Div.remove('active');
    Button3Div.remove('active');
    Button4Div.remove('active');
    Button5Div.remove('active');
    })
    Button2.addEventListener('click',()=>{
        Button1.classList.add('unactive');
        Button2.classList.remove('unactive');
        Button3.classList.add('unactive');
        Button4.classList.add('unactive');
        Button5.classList.add('unactive');
    
        Button1Div.classList.remove('active');
        Button2Div.add('active');
        Button3Div.remove('active');
        Button4Div.remove('active');
        Button5Div.remove('active');
})
Button3.addEventListener('click',()=>{
    Button1.classList.add('unactive');
    Button2.classList.add('unactive');
    Button3.classList.remove('unactive');
    Button4.classList.add('unactive');
    Button5.classList.add('unactive');

    Button1Div.classList.remove('active');
    Button2Div.remove('active');
    Button3Div.add('active');
    Button4Div.remove('active');
    Button5Div.remove('active');
})
Button4.addEventListener('click',()=>{
    Button1.classList.add('unactive');
    Button2.classList.add('unactive');
    Button3.classList.add('unactive');
    Button4.classList.remove('unactive');
    Button5.classList.add('unactive');

    Button1Div.classList.remove('active');
    Button2Div.remove('active');
    Button3Div.remove('active');
    Button4Div.add('active');
    Button5Div.remove('active');
})
Button5.addEventListener('click',()=>{
    Button1.classList.add('unactive');
    Button2.classList.add('unactive');
    Button3.classList.add('unactive');
    Button4.classList.add('unactive');
    Button5.classList.remove('unactive');

    Button1Div.classList.remove('active');
    Button2Div.remove('active');
    Button3Div.remove('active');
    Button4Div.remove('active');
    Button5Div.add('active');
})