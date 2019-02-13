'use strict';




/* $(function() {
  // Ici le DOM est prêt
}); */

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
var titleName = $('.title_name');
var titleCompetence = $('.title_competence');
var titleFormation = $('.title_formation');
var titleProject = $('.title_project');


$(titleCompetence).hide();
$(titleFormation).hide();
$(titleProject).hide();

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
        
       $(titleName).show('linear');
       $(titleCompetence).hide();
       $(titleFormation).hide('linear');
       $(titleProject).hide();
        /* $('.title_main').html('<span class="name">Fabien</span><span class="name">Estrabaud</span>');
        //$('.title_main').toggleClass('anime_title');*/
       position = "name";
    
    }
      if($(window).scrollTop() > 250 && $(window).scrollTop() < 350 && position != "formation") {
        console.log('formation');

           $(titleName).hide('linear');
           $(titleFormation).show( 'linear');
           $(titleCompetence).hide();
           $(titleProject).hide();

           /* $('.title_main').html('<span class="name">Formation</span>');
            $('.title_main').toggleClass('anime_title');*/
            position = "formation";
      } 
    
  });



  