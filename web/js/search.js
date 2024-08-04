let clearSearch = document.getElementById('clear_search')
let submitSearch = document.getElementById('search-line-id')

submitSearch.addEventListener('keyup', ()=> {
    if (submitSearch.value == '') {
        if (clearSearch.classList.contains('visible__search')) {
            clearSearch.classList.remove('visible__search')
        }
    } else {
        if (!clearSearch.classList.contains('visible__search')) {
            clearSearch.classList.add('visible__search')
        }
    }
})

clearSearch.addEventListener('click', ()=> {
    submitSearch.value = '';
    clearSearch.classList.remove('visible__search')
})