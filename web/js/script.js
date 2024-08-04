let rightNum = document.querySelector('.number__right');

if (rightNum.textContent.length == 2) {
    if (!rightNum.classList.contains('double__num')) {
        rightNum.classList.add('double__num')
        if (rightNum.classList.contains('triple__num')) {
            rightNum.classList.remove('triple__num');
        }
    }
} else {
    if (!rightNum.classList.contains('triple__num')) {
        rightNum.classList.add('triple__num')
        if (rightNum.classList.contains('double__num')) {
            rightNum.classList.remove('double__num');
        }
    }
}


let ownerID = document.getElementById('popup_owner_id');
let ownerClose = document.getElementById('popup_close');
let popup = document.querySelector('.popup')

ownerID.addEventListener('click', ()=> {
    if(!popup.classList.contains('visible')) {
        popup.classList.add('visible');
    } else {
        popup.classList.remove('visible');
    }
})

ownerClose.addEventListener('click', ()=> {
    popup.classList.remove('visible');
})