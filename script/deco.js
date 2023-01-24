deco = document.querySelector('#deco');
user = document.querySelector('.user-img');
show = false;

user.addEventListener('click', showdeco => {
    if (show) {
        deco.classList.remove('deco');
        deco.classList.add('dnone');
        show = false;
    }else {
        deco.classList.remove('dnone');
        deco.classList.add('deco');
        show = true;
    }  
});