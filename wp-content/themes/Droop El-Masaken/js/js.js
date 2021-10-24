/*
 * Responsee JS - v6 - 2019-06-27
 * https://www.myresponsee.com
 * Copyright 2019, Vision Design - graphic zoo
 * Free to use under the MIT license.
*/
jQuery(document).ready(function($) {
  
  //loader
  $(".loader").fadeOut(1000);
 
  //nav bar top
   // Sticky Nav Bar
   $(window).scroll(function() {
    if ($(this).scrollTop() > 20){  
        $('.sticky').addClass("fixed");
    }
    else{
        $('.sticky').removeClass("fixed");
    }
  });
  //Responsee eside nav

  //Responsee nav
  // Add nav-text before top-nav
  $('.top-nav').before('<p class="nav-text"><span></span></p>');   
  $('.top-nav > ul > li ul').each(function(index, element) {
    var count = $(element).find('li').length;
    var content = '<span class="count-number"> ' + count + '</span>';
    $(element).closest('li').children('a').append(content);
  });
  $('.top-nav > ul li:has(ul)').addClass('submenu');
  $('.top-nav > ul ul li:has(ul)').addClass('sub-submenu').removeClass('submenu');
  $('.top-nav > ul li.submenu > a').attr('aria-haspopup', 'true').click(function() { 
    //Close other open sub menus
    $('.top-nav > ul li.submenu > ul').removeClass('show-ul', 'fast'); 
    $('.top-nav > ul li.submenu:hover > ul').toggleClass('show-ul', 'fast');
  }); 
  $('.top-nav > ul ul > li.sub-submenu > a').attr('aria-haspopup', 'true').click(function() {  
    //Close other open sub menus
    $('.top-nav ul ul li > ul').removeClass('show-ul', 'fast');  
    $('.top-nav ul ul li:hover > ul').toggleClass('show-ul', 'fast');   
  });
  //Mobile navigation
  $('.nav-text').click(function() { 
    $("body").toggleClass('show-menu');
  });  
 
  
});










    /**********loader******************/

 /**********scroll******************/
/* ------------------------top---------------------------*/
window.onload =function(){


/* *******footer********* */
var swiper = new Swiper('.sliderfooter', {
  slidesPerView: 3,
  spaceBetween: 4,
  loop: true,
  speed: 1500,
  autoplay: {
     delay: 2500,
     disableOnInteraction: false,
  },
  direction: 'vertical',
  navigation: {
     nextEl: '.footer_right',
     prevEl: '.footer_left',
  },
  breakpoints: {
     // when window width is <= 320px
     320: {
        spaceBetween: 20,
        slidesPerView: 2
     },
     // when window width is <= 480px
     480: {
        spaceBetween: 20,
        slidesPerView: 2
     },
     // when window width is <= 640px
     767: {
        spaceBetween: 20,
        slidesPerView: 2
     },
     991: {
        spaceBetween: 20,
        slidesPerView: 3
     }
  }
});


/* var swiper = new Swiper('.new-projects', {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
 
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  
}); */

var swiper = new Swiper('.tesmonials-slider', {
  slidesPerView: 2,
  spaceBetween: 30,
  
  
  autoplay: {
    delay: 2500,
    disableOnInteraction: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    // when window width is <= 320px
    320: {
       spaceBetween: 20,
       slidesPerView: 1
    },
    // when window width is <= 480px
    480: {
       spaceBetween: 20,
       slidesPerView: 1
    },
    // when window width is <= 640px
    767: {
       spaceBetween: 20,
       slidesPerView: 1
    },
    991: {
       spaceBetween: 20,
       slidesPerView: 2
    }
 }
});
};

/////////Smooth Scroll/////////
var scrollSpy = new bootstrap.ScrollSpy(document.body, {
  target: '#navbar-example'
})