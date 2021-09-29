$(document).on('click', '.dropdown .nav-link', function () {
      $(this).addClass('active-a').siblings().removeClass('active-a')
});
$(document).ready(function () {
      $('.navbar-nav .nav-item .nav-link').click(function () {
            $('.nav-item .nav-link').removeClass("active-a");
            $(this).addClass("active-a");
      });
});


$(document).ready(function () {
      $(".dropdown").hover(
            function () {
                  $('.dropdown-menu', this).fadeIn(300);
            },
            function () {
                  $('.dropdown-menu', this).fadeOut(300);
            });
});

// owl slider-1
$('#testimonial-slider').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    dots: true,
    autoplay: false,
    navText: [
        '<i class="far fa-chevron-up" aria-hidden="true"></i>',
        '<i class="far fa-chevron-down" aria-hidden="true"></i>'
    ],
      responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

// owl slider-1
$('#slider-1').owlCarousel({
      loop:true,
      margin:0,
      nav:false,
      dots: true,
      autoplay: false,
      navText: [
          '<i class="far fa-chevron-up" aria-hidden="true"></i>',
          '<i class="far fa-chevron-down" aria-hidden="true"></i>'
      ],
        responsiveClass:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  });

    $(document).ready(function ($) {
      $('.sec-slider .slider-1 .owl-nav').addClass('slider-nav');
      $('.sec-slider .slider-1 .slider-nav .owl-prev').addClass('slider-prev');
      $('.sec-slider .slider-1 .slider-nav .owl-next').addClass('slider-next');
      $('.sec-slider .slider-1 .owl-dots').addClass('slider-dots');
    });


    // owl slider-2
$('#collection-slider').owlCarousel({
      loop:true,
      margin:0,
      nav: true,
      dots: false,
      autoplay: false,
      navText: [
          '<i class="far fa-chevron-left" aria-hidden="true"></i>',
          '<i class="far fa-chevron-right" aria-hidden="true"></i>'
      ],
        responsiveClass:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:5
          }
      }
  });

  // owl slider-2
$('#product-slider-1').owlCarousel({
    loop:true,
    margin:0,
    nav: true,
    dots: false,
    autoplay: false,
    navText: [
        '<i class="far fa-chevron-left" aria-hidden="true"></i>',
        '<i class="far fa-chevron-right" aria-hidden="true"></i>'
    ],
      responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:5
        }
    }
});

$('#product-slider-2').owlCarousel({
    loop:true,
    margin:0,
    nav: true,
    dots: false,
    autoplay: false,
    navText: [
        '<i class="far fa-chevron-left" aria-hidden="true"></i>',
        '<i class="far fa-chevron-right" aria-hidden="true"></i>'
    ],
      responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:5
        }
    }
});

$('#product-slider-3').owlCarousel({
    loop:true,
    margin:0,
    nav: true,
    dots: false,
    autoplay: false,
    navText: [
        '<i class="far fa-chevron-left" aria-hidden="true"></i>',
        '<i class="far fa-chevron-right" aria-hidden="true"></i>'
    ],
      responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:5
        }
    }
});

$('#product-slider-4').owlCarousel({
    loop:true,
    margin:0,
    nav: true,
    dots: false,
    autoplay: false,
    navText: [
        '<i class="far fa-chevron-left" aria-hidden="true"></i>',
        '<i class="far fa-chevron-right" aria-hidden="true"></i>'
    ],
      responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:5
        }
    }
});
$('#product-slider-5').owlCarousel({
    loop:true,
    margin:0,
    nav: true,
    dots: false,
    autoplay: false,
    navText: [
        '<i class="far fa-chevron-left" aria-hidden="true"></i>',
        '<i class="far fa-chevron-right" aria-hidden="true"></i>'
    ],
      responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:5
        }
    }
});

  $(document).ready(function ($) {
      $('.sec-collection .collection-slider .owl-nav').addClass('collect-nav');
      $('.sec-collection .collection-slider .collect-nav .owl-prev').addClass('collect-prev');
      $('.sec-collection .collection-slider .collect-nav .owl-next').addClass('collect-next');
      $('.sec-collection .collection-slider .owl-dots').addClass('collect-dots');
    });

    
// slider 3
    $('#buy-slider').owlCarousel({
      loop:true,
      margin:0,
      nav: false,
      dots: false,
      autoplay: false,
      navText: [
          '<i class="far fa-chevron-left" aria-hidden="true"></i>',
          '<i class="far fa-chevron-right" aria-hidden="true"></i>'
      ],
        responsiveClass:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:3
          }
      }
  });

  
//   slider 4

$('#footer-slider').owlCarousel({
    loop:true,
    margin:0,
    nav: false,
    dots: false,
    autoplay: false,
    navText: [
        '<i class="far fa-chevron-left" aria-hidden="true"></i>',
        '<i class="far fa-chevron-right" aria-hidden="true"></i>'
    ],
      responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

// navbar toggle shopping cart

const toggleBtn = document.querySelector(".shopping-toggle");

const sidebar = document.querySelector(".sidebar");

const closeBtn = document.querySelector(".close-btn");

toggleBtn.addEventListener("click", function () {
  sidebar.classList.toggle("show-sidebar");
});

closeBtn.addEventListener("click", function () {
  sidebar.classList.remove("show-sidebar");
});

// navbar toggle search

$(function () {
    $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });
    
    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });
    
    
    //Do not include! This prevents the form from submitting for DEMO purposes only!
    $('form').submit(function(event) {
        event.preventDefault();
        return false;
    })
});

// price range slider

$("#slider-range").slider({
    range: true, 
    min: 0,
    max: 30,
    step: 1,
    slide: function( event, ui ) {
      $( "#min-price").html(ui.values[ 0 ]);
      
      suffix = '';
      if (ui.values[ 1 ] == $( "#max-price").data('max') ){
         suffix = ' ';
      }
      $( "#max-price").html(ui.values[ 1 ] + suffix);         
    }
  });

//   increament-quantity
$(document).ready(function(){
    $('#qty_input').prop('disabled', true);
    $('#plus-btn').click(function(){
      $('#qty_input').val(parseInt($('#qty_input').val()) + 1 );
          });
        $('#minus-btn').click(function(){
      $('#qty_input').val(parseInt($('#qty_input').val()) - 1 );
      if ($('#qty_input').val() == 0) {
      $('#qty_input').val(1);
    }

          });
 });
 var toggleBtns = document.querySelector(".signin-toggles");

 var sidebars = document.querySelector(".sidebar--signin");
 
 var closeBtns = document.querySelector(".close-btns");
 
 toggleBtns.addEventListener("click", function () {
     sidebars.classList.toggle("show-sign");
 });
 
 closeBtns.addEventListener("click", function () {
     sidebars.classList.remove("show-sign");
 });
 
 // increment image 

 $(document).ready(function(){
 var minus = document.querySelector("#minus");
 var plus = document.querySelector("#plus");
 var input = document.querySelector("#input");
 
 var quantity = 1;
//  debugger;
 input.value = quantity;
 
 minus.addEventListener('click', function(event){
   if (quantity > 1) {
       quantity --;
     input.value = quantity;
   }
 });
 
 plus.addEventListener('click', function(event){
   quantity ++;
   input.value = quantity;
 });
});
 


//  user 

// navbar user toggle shopping cart


// on click 2 col query
$(document).ready(function(){
  $("#menu1").click(function(){
     $("#twocolum").css("width", "50%");
      $("#twocolum1").css("width", "50%");
      $("#twocolum2").css("width", "50%");
      $("#twocolum3").css("width", "50%");
      $("#twocolum4").css("width", "50%");
      $("#twocolum5").css("width", "50%");
      $("#twocolum6").css("width", "50%");
      $("#twocolum7").css("width", "50%");

      $(".producthideslideup").css("top", "86%");

  });
});

// on click 4 col query
$(document).ready(function(){
  $("#menu3").click(function(){
     $("#twocolum").css("width", "25%");
      $("#twocolum1").css("width", "25%");75%
      $("#twocolum2").css("width", "25%");
      $("#twocolum3").css("width", "25%");
      $("#twocolum4").css("width", "25%");
      $("#twocolum5").css("width", "25%");
      $("#twocolum6").css("width", "25%");
      $("#twocolum7").css("width", "25%");
      $(".producthideslideup").css("top", "75%");
  });
});

// on 3 col query

$(document).ready(function(){
  $("#menu2").click(function(){
     $("#twocolum").css("width", "33%");
      $("#twocolum1").css("width", "33%");
      $("#twocolum2").css("width", "33%");
      $("#twocolum3").css("width", "33%");
      $("#twocolum4").css("width", "33%");
      $("#twocolum5").css("width", "33%");
      $("#twocolum6").css("width", "33%");
      $("#twocolum7").css("width", "33%");
       $(".producthideslideup").css("top", "81%");

  });
});

