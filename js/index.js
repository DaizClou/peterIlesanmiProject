// Navbar Onscroll CHhange bg
var myNav = document.getElementById("Navbar");
window.onscroll = function () {
  "use strict";
  if (document.body.scrollTop >= 200) {
    myNav.classList.add("bg-light");
    myNav.classList.remove("nav-transparent");
  } else {
    myNav.classList.add("nav-transparent");
    myNav.classList.remove("bg-light");
  }
};

// Swiper js Config
new Swiper(".achievements-slider", {
  speed: 600,
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  slidesPerView: "auto",
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
    clickable: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 40,
    },
    670: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
  },
});

// Navbar change Icon
let navToggler = document.querySelector(".navbar-toggler");

// Event Function
// Changes the icon depending on the class list
const changeNavbarTogglerIcon = () => {
  let isCollapsed = navToggler.classList.contains("collapsed");
  if (isCollapsed) {
    navToggler.innerHTML = `<i class="fa-solid fa-bars"></i>`;
  } else {
    navToggler.innerHTML = `<i class="fa-solid fa-xmark"></i>`;
  }
};

// Adding Event Listener to the Nav toggler
navToggler.addEventListener("click", changeNavbarTogglerIcon);
