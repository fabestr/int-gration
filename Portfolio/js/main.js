'use strict';

var menuHidde = document.getElementById('menu_hidde');
var menuClick = document.querySelector('.menu_click');

menuClick.addEventListener('click', onClickToggleMenu);

function onClickToggleMenu(event) {
    event.preventDefault();
    
    menuHidde.classList.toggle('slide_menu');

    menuHidde.classList.toggle('slide_menu_return');

    menuHidde.classList.toggle('hidden');
}
