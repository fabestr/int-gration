'use strict';


/* $(window).load(function(event) {
    event.preventDefault();
    $(".loader").fadeOut();
    $('.container').fadeIn();
}) */

/* 
document.addEventListener('DOMContentLoaded', function(event) {
    // @link  https://developer.mozilla.org/fr/docs/Web/Events/DOMContentLoaded
   
    document.getElementsByClassName('loader')[0].style.display = 'none';
  }); */

var menuHidde = document.getElementById('menu_hidde');
var menuClick = document.querySelector('.menu_click');
var position = "name";


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
        
        //$('.title_main').toggleClass('anime_title');
        $('.title_main').html('<span class="name">Fabien</span><span class="name">Estrabaud</span>');
        //$('.title_main').toggleClass('anime_title');
       position = "name";
    
    }
      if($(window).scrollTop() > 250 && position != "formation") {
        console.log('formation');
            //$('.title_main').toggleClass('anime_title');
            $('.title_main').html('<span class="name">Formation</span>');
            $('.title_main').toggleClass('anime_title');
            position = "formation";
      }
    
  });



  