'use strict';

var menuHidde = document.getElementById('menu_hidde');
var menuClick = document.querySelector('.menu_click');
var position = "name"


menuClick.addEventListener('click', onClickToggleMenu);


function onClickToggleMenu(event) {
    event.preventDefault();
    
    menuHidde.classList.toggle('slide_menu');

    menuHidde.classList.toggle('slide_menu_return');
    setTimeout(function(){
        menuHidde.classList.toggle('hidden'); 
    }, 500);

}

$(window).scroll(function(){
    
      console.log($(window).scrollTop() );
      if($(window).scrollTop() < 250 && position != "name") {
        
        console.log('name');
        $('.title_main').toggleClass('anime_title');
        $('.title_main').html('<span class="name">Fabien</span><span class="name">Estrabaud</span>');
        //$('.title_main').toggleClass('anime_title');

        position = "name";
    
    }
      if($(window).scrollTop() > 250 && position != "competence") {
        console.log('competence');
            $('.title_main').toggleClass('anime_title');
            $('.title_main').html('<span class="name">compétences</span>');
           // $('.title_main').toggleClass('anime_title');
            position = "competence";
      }
    
  });
