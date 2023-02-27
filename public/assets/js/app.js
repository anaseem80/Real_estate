$('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    rtl: true,
    responsive:{
        0:{
            items:1
        },
        900:{
            items:1
        },
        1000:{
            items:3
        }
    }
})
$('.owl-carousel-img').owlCarousel({
    items:1,
    loop:true,
    margin:10,
    rtl: false,
    autoplay:true,
    autoplayTimeout:500,
})


window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky ) {
    navbar.classList.add("fixed-top")
  } else {
    navbar.classList.remove("fixed-top");
  }
}
