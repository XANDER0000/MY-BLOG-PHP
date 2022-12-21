const burger = document.getElementById('burger')
const nav = document.getElementById('nav')

burger.addEventListener('click', function() {
 if(burger.classList.contains('active')) {
  burger.classList.remove('active')
  nav.classList.remove('active')
 } else {
  burger.classList.add('active')
  nav.classList.add('active')
 }
})

// SWIPER /////////////////////////////////////////////////////////
const swiper = new Swiper(".mySwiper", {
 pagination: {
   el: ".swiper-pagination",
 },
 navigation: {
   nextEl: ".swiper-button-next",
   prevEl: ".swiper-button-prev",
 },
});