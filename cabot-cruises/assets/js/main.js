let menuTog1 = document.querySelector('#m1')
let menuTog2 = document.querySelector('#m2')
let navTog = document.querySelector('.openMenu')

menuToggle = (x) =>
{
    if(x == 0)
    {
        menuTog1.classList.add('menuToggle')
        menuTog2.classList.remove('menuToggle')
        navTog.classList.remove('menuToggle')
        toggle = 1;
    }
    else
    {
        menuTog1.classList.remove('menuToggle')
        menuTog2.classList.add('menuToggle')
        navTog.classList.add('menuToggle')
        toggle = 0;
    }
};