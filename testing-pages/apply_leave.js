const selectAll = document.getElementById('checkAll');
const allBreakfast = document.querySelector('.all-breakfast');
const allLunch = document.querySelector('.all-lunch');
const allDinner = document.querySelector('.all-dinner');

selectAll.addEventListener('click', ()=>{
    const checkBoxes = document.querySelectorAll('form input[type="checkbox"]');
    checkBoxes.forEach(element => {
        element.checked = selectAll.checked;
    });
})
allBreakfast.addEventListener('click', ()=>{
    const checkBoxes = document.querySelectorAll('.breakfast');
    checkBoxes.forEach(element => {
        element.checked = allBreakfast.checked;
    });
})
allLunch.addEventListener('click', ()=>{
    const checkBoxes = document.querySelectorAll('.lunch');
    checkBoxes.forEach(element => {
        element.checked = allLunch.checked;
    });
})
allDinner.addEventListener('click', ()=>{
    const checkBoxes = document.querySelectorAll('.dinner');
    checkBoxes.forEach(element => {
        element.checked = allDinner.checked;
    });
})


//generating leave preference json

const form = document.querySelector('form');

const submitBtn = form.querySelector('button');

submitBtn.addEventListener('click', ()=>{
    const breakfastCheckLists = form.querySelectorAll('.breakfast');
    const lunchCheckLists = form.querySelectorAll('.lunch');
    const dinnerCheckLists = form.querySelectorAll('[type="checkbox"]');
    console.log(checkLists);
})