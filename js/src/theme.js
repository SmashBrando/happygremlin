( function( $ ) {
    $( document ).ready(function() {
        //Owl Carousel - Product Carousel
        var owlWrap = $('.product-carousel');
        // checking if the dom element exists
        if (owlWrap.length > 0) {
            owlWrap.each(function(){
                var carousel= $(this).find('.products');
                var arrows= $(this).find('.arrows');
                carousel.owlCarousel({
                    navRewind:true,
                    loop: false,
                    margin:30,
                    navContainer: arrows,
                    responsive:{
                        0:{
                            items:2,
                            nav:true
                        },
                        768:{
                            items:3,
                            nav:false
                        },
                        1000:{
                            items:4,
                            nav:true
                        }
                    }
                })
            });
        }

        var owlWrap = $('.blog-carousel');
        // checking if the dom element exists
        if (owlWrap.length > 0) {
            owlWrap.each(function(){
                var carousel= $(this).find('.blog-items');
                var arrows= $(this).find('.arrows');
                carousel.owlCarousel({
                    navRewind:true,
                    loop: false,
                    margin:30,
                    navContainer: arrows,
                    responsive:{
                        0:{
                            items:2,
                            nav:true
                        },
                        768:{
                            items:3,
                            nav:false
                        },
                        1000:{
                            items:4,
                            nav:true
                        }
                    }
                })
            });
        }

        //Accordion Features
        function close_accordion_section() {
            $('.accordion .accordion-section-title').removeClass('active');
            $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
        }
     
        $('.accordion-section-title').click(function(e) {
            // Grab current anchor value
            var currentAttrValue = $(this).attr('href');
     
            if($(e.target).is('.active')) {
                close_accordion_section();
            }else {
                close_accordion_section();
     
                // Add active class to section title
                $(this).addClass('active');
                // Open up the hidden content panel
                $('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
            }
     
            e.preventDefault();
        });
    });
    
} )( jQuery );