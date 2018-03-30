var navToggle = document.querySelector('.page-header__toggler');
var navMain = document.querySelector('.main-nav');

navMain.removeAttribute("style");

navToggle.addEventListener('click', function() {
    navMain.classList.remove('main-nav--closed');
    navMain.classList.add('main-nav--opened');
});

var close = navMain.querySelector(".main-nav__btn");

close.addEventListener("click", function(event) {
  event.preventDefault();
  navMain.classList.remove("main-nav--opened");
  navMain.classList.add("main-nav--closed");
});

window.addEventListener("keydown", function(event) {
  if (event.keyCode === 27) {
    if (navMain.classList.contains("main-nav--opened")) {
      navMain.classList.remove("main-nav--opened");
      navMain.classList.add("main-nav--closed");
    }
  }
});
