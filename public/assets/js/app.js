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
  if (window.pageYOffset >= sticky + 200 ) {
    $(navbar).removeClass("py-3").addClass("py-2")
    $("navbar").removeClass("py-3").addClass("py-2")
  } else {
    $(navbar).removeClass("py-2").addClass("py-3")
  }
}


function ScrollFunction(x) {
  if (x.matches) { // If media query matches
    $(".enquires-box").addClass("fixed-bottom text-center shadow-lg")
    } else {
      $(".enquires-box").removeClass("fixed-bottom text-center shadow-lg")
  }
}

var x = window.matchMedia("(max-width: 700px)")
ScrollFunction(x) // Call listener function at run time
x.addListener(ScrollFunction) // Attach listener function on state changes
