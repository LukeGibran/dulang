let no = document.getElementById('no');
let remove = document.getElementById('remove');
let modal = document.querySelector('.modal')

remove.addEventListener('click', ()=>{
    modal.classList.remove('hide');
    modal.classList.add('show');
})

no.addEventListener('click', ()=>{
    modal.classList.add('hide');
    modal.classList.remove('show');
})