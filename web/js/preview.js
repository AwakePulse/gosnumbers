let numberLeft = document.getElementById('number_left').textContent;
let numberMidle = document.getElementById('number_midle').textContent;
let numberRight = document.getElementById('number_midle_right').textContent;
let numberRegion = document.getElementById('number_right').textContent;
let saveButton = document.getElementById('save_but');

//Реализовать через fetch()

saveButton.addEventListener('click', ()=>{
    $.post('../controller/savedata.php',
        {data:
            {
                'numberLeft' : numberLeft,
                'numberMidle' : numberMidle,
                'numberRight' : numberRight,
                'numberRegion' : numberRegion
            }
        }
    );
    saveButton.innerHTML = 'Успешно!';
    saveButton.disabled = true;
    reload();
})

function reload() {
    setTimeout(() => window.location.replace('addnum.php'), 500);
}