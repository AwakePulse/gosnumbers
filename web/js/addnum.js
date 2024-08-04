//Делит из инпутов херни ----------------------------------------------------------------------------------------------------------//

let leftSeries = document.getElementById('left_series');
let mainNumber = document.getElementById('main_number');
let rightSeries = document.getElementById('right_series');
let region = document.getElementById('region');


leftSeries.addEventListener('keyup', replaceNumber);

mainNumber.addEventListener('keyup', replaceWord);

rightSeries.addEventListener('keyup', replaceNumber);

region.addEventListener('keyup', replaceWord);


//Функции для делита --------------------------------------------------------------------------------------------------------------//


function replaceNumber() {  
    this.value = this.value.replace(/[^а-яё\s]/gi, '');
}

function replaceWord() {
    this.value = this.value.replace(/[^0-9]/g, '');
}


//Галочки -------------------------------------------------------------------------------------------------------------------------//

let checkMarkOne = document.querySelector('.check__mark__one');
let checkMarkTwo = document.querySelector('.check__mark__two');
let checkMarkThree = document.querySelector('.check__mark__three');
let checkMarkFour = document.querySelector('.check__mark__four');

let submitBut = document.getElementById('sub_but');
let visibleMarks;


leftSeries.addEventListener('keyup', ()=>{
    if (leftSeries.value == '' || leftSeries.value.length < 1) {
        if (checkMarkOne.classList.contains('visible__mark')) {
            checkMarkOne.classList.remove('visible__mark');
        }
    } else {
        if (!checkMarkOne.classList.contains('visible__mark')) {
            checkMarkOne.classList.add('visible__mark');
        }
    }

    visibleMarksFun();
});

mainNumber.addEventListener('keyup', ()=>{
    if (mainNumber.value == '' || mainNumber.value.length < 3) {
        if (checkMarkTwo.classList.contains('visible__mark')) {
            checkMarkTwo.classList.remove('visible__mark');
        }
    } else {
        if (!checkMarkTwo.classList.contains('visible__mark')) {
            checkMarkTwo.classList.add('visible__mark');
        }
    }

    visibleMarksFun();
});

rightSeries.addEventListener('keyup', ()=>{
    if (rightSeries.value == '' || rightSeries.value.length < 2) {
        if (checkMarkThree.classList.contains('visible__mark')) {
            checkMarkThree.classList.remove('visible__mark');
        }
    } else {
        if (!checkMarkThree.classList.contains('visible__mark')) {
            checkMarkThree.classList.add('visible__mark');
        }
    }

    visibleMarksFun();
});

region.addEventListener('keyup', ()=>{
    if (region.value == '' || region.value.length < 2) {
        if (checkMarkFour.classList.contains('visible__mark')) {
            checkMarkFour.classList.remove('visible__mark');
        }
    } else {
        if (!checkMarkFour.classList.contains('visible__mark')) {
            checkMarkFour.classList.add('visible__mark');
        }
    }

    visibleMarksFun();
});

//Функция для кнопы ---------------------------------------------------------------------------------------------------------------//

function visibleMarksFun() {
    visibleMarks = document.querySelectorAll('.visible__mark');

    if(visibleMarks.length == 4) {
        submitBut.disabled = false;
    } else {
        submitBut.disabled = true;
    }
}