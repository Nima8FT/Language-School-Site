$(document).ready(function () {
  $(".menu-teacher").click(function (e) {
    $(document).scrollTop(2610);
  });

  $(".menu-personal").click(function (e) {
    $(document).scrollTop(7260);
  });

  $(".menu-history").click(function (e) {
    $(document).scrollTop(3690);
  });

  $(".menu-aboutus").click(function (e) {
    $(document).scrollTop(6450);
  });

  $(".menu-call").click(function (e) {
    $(document).scrollTop(8242);
  });

  $('.logo').click(function (e) { 
    location.replace('index.html');
  });

  $('.name').click(function (e) { 
    location.replace('index.html');
  });
}); 

document.addEventListener("DOMContentLoaded", function () {
  let currentIndex = 0;
  const slider = document.querySelector(".slider");
  const slides = document.querySelectorAll(".slide");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");

  function showSlide(index) {
    currentIndex = index;
    updateSlider();
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    updateSlider();
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    updateSlider();
  }

  function updateSlider() {
    const translateValue = -currentIndex * -33.3;
    slider.style.transform = `translateX(${translateValue}%)`;
  }

  nextBtn.addEventListener("click", nextSlide);
  prevBtn.addEventListener("click", prevSlide);

  setInterval(nextSlide, 5000); // Change slide every 3 seconds
});
