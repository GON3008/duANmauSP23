window.onscroll = function() {myFunction()};

var scroller = document.getElementById("onScroll");
var sticky = scroller.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    scroller.classList.add("stick");
  } else {
    scroller.classList.remove("stick");
  }
}