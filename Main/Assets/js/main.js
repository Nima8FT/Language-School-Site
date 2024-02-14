$(document).ready(function () {
  width = $(document).width();

  $(".menu-teacher").click(function (e) {
    if (width > 1800) {
      $(document).scrollTop(3450);
    } else if ((width < 1800) & (width > 1200)) {
      $(document).scrollTop(4300);
    } else if (width <= 1200) {
      $(document).scrollTop(7400);
    }
  });

  $(".menu-personal").click(function (e) {
    if (width > 1800) {
      $(document).scrollTop(7200);
    } else if ((width < 1800) & (width > 1200)) {
      $(document).scrollTop(8600);
    } else if (width <= 1200) {
      $(document).scrollTop(13500);
    }
  });

  $(".menu-news").click(function (e) {
    if (width > 1800) {
      $(document).scrollTop(5000);
    } else if ((width < 1800) & (width > 1200)) {
      $(document).scrollTop(6500);
    } else if (width <= 1200) {
      $(document).scrollTop(11400);
    }
  });

  $(".menu-aboutus").click(function (e) {
    if (width > 1800) {
      $(document).scrollTop(6050);
    } else if ((width < 1800) & (width > 1200)) {
      $(document).scrollTop(7500);
    } else if (width <= 1200) {
      $(document).scrollTop(12400);
    }
  });

  $(".menu-comments").click(function (e) {
    if (width > 1800) {
      $(document).scrollTop(8800);
    } else if ((width < 1800) & (width > 1200)) {
      $(document).scrollTop(10700);
    } else if (width <= 1200) {
      $(document).scrollTop(17500);
    }
  });

  $(".menu-call").click(function (e) {
    $(document).scrollTop(20000);
  });

  $(".logo").click(function (e) {
    location.replace("index.html");
  });

  $(".name").click(function (e) {
    location.replace("index.html");
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
