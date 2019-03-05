jQuery('.hero-section').owlCarousel({
      loop:true,
      autoplay: false,
      dots:false,
      nav:true,
      navText: ["", ""],
      responsiveClass:true,
      autoplaySpeed : 800,
      touchDrag: true,
      callbacks:true,
      responsive:{
        0:{
          items:1,
        },
        768:{
          items:3,
        },
        1025:{
          items:3,
          loop:true,
        }
      }
});