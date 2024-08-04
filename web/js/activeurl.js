let main = document.getElementById('main_url');
let addnum = document.getElementById('addnum_url');

if(location.pathname == '/views/main.php') { // *
    if(!main.classList.contains('active')) {
        main.classList.add('active');
        if(addnum.classList.contains('active')) {
            addnum.classList.remove('active');
        }
    }
} else {
    if(!addnum.classList.contains('active')) {
        addnum.classList.add('active');
        if(main.classList.contains('active')) {
            main.classList.remove('active');
        }
    }
}

//При настройке ЧПУ убрать у * из УРЛа .php