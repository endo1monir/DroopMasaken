$('.new-project-slider').owlCarousel({
    rtl: true,
    loop: true,
    margin: 0,
    autoplay: true,
    smartSpeed: 2000,
    dragEndSpeed: 2000,
    center: true,
    /*  animateOut: 'animate__lightSpeedInLeft',
     animateIn: 'animate__lightSpeedInLeft', */
    dots: false,
    nav: true,
    responsiveClass: true,
    navText: [
       '<i class="fas fa-long-arrow-alt-right"></i>',
       '<i class="fas fa-long-arrow-alt-left"></i>'
    ],
    responsive: {
       0: {
          items: 1
       },
       500: {
          items: 1
       },
       768: {
          items: 3
       },
       1000: {
          items: 3
       }
    }
 });
