"use strict";

jQuery(document).ready(function($)
    {
        // carousel function
        $('.owl-carousel').owlCarousel({
            loop:true,
            nav:true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1,
                    loop:true
                },
                600:{
                    items:1,
                    loop:true
                },
                1000:{
                    items:1,
                    loop:true
                }
            }
        });

        // main navigation color change on scroll function
        $(document).scroll(function () {
            var $nav = $(".main-nav");
            $nav.toggleClass('lightBg', $(this).scrollTop() > $nav.height());
        });
       
    }
);


//burger-menu functions
let burgerIcon = document.querySelector(".burger-menu-icon");
burgerIcon.addEventListener("click", function(){
    burgerIcon.classList.toggle("fa-bars");
    burgerIcon.classList.toggle("fa-times");
    document.querySelector(".menu").classList.toggle("burger");
});

let navLinks=document.querySelectorAll(".nav-links a");
for(let i=0; i<navLinks.length; i++){
    navLinks[i].addEventListener("click", function(){
        document.querySelector(".nav-links").classList.remove("burger");
        burgerIcon.classList.add("fa-bars");
        burgerIcon.classList.remove("fa-times");
    });
}


// gallery filter
$('.gallery-buttons a').click(function(e) {
      e.preventDefault();
      var a = $(this).attr('href');
      a = a.substr(1);
      $('.gallery-img a').each(function() {
        if (!$(this).hasClass(a) && a !='all')
          $(this).addClass('hide');
        else
          $(this).removeClass('hide');
      });
    });

$('.gallery-img a').click(function(e) {
    e.preventDefault();
    var $i = $(this);
    $('.gallery-img a').not($i).toggleClass('hide');
    $i.toggleClass('show');
});