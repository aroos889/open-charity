
(function($, Drupal) {
  Drupal.behaviors.sliderResults = {
    attach:function(){
        $('.blog-slider').owlCarousel({
            loop:true,
            margin:30,
            dots: false,
            nav:true,
            responsiveClass:true,
            navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            responsive:{
                0:{
                    items:1
                },
                545:{
                    items:2
                },
                768:{
                    items:3
                },
                992:{
                    items:4,
                    loop:false
                }
            }
        });
        
        $('.our-members-slider').owlCarousel({
            loop:true,
            margin:30,
            nav:false,
            responsiveClass:true,
            navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            responsive:{
                0:{
                    dots: false,
                    nav:true,
                    items:1
                },
                545:{
                    dots: true,
                    nav:false,
                    items:2
                },
                768:{
                    dots: true,
                    nav:false,
                    items:3
                },
                992:{
                    dots: true,
                    nav:false,
                    items:5,
                    loop:false
                }
            }
        });
    }
  };
}(jQuery, Drupal));
  
  