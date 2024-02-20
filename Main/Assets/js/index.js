$(document).ready(function () {
  width = $(document).width();

  $('.french-row').css('display', 'none');
  $('.germany-row').css('display', 'none');
  $('.english').css('opacity', '1');
  $('.english div').css('background', '#00336A');

  $(".menu-call").click(function (e) {
    $(document).scrollTop(20000);
  });

  $(".logo").click(function (e) {
    location.replace("index.php");
  });

  $(".name").click(function (e) {
    location.replace("index.php");
  });

  $('.french').click(function (e) {
    $('.english-row').css('display', 'none');
    $('.germany-row').css('display', 'none');
    $('.french-row').css('display', 'block');
    $('.english').css('opacity', '0.7');
    $('.english div').css('background', '#c4c4c4');
    $('.germany').css('opacity', '0.7');
    $('.germany div').css('background', '#c4c4c4');
    $('.french').css('opacity', '1');
    $('.french div').css('background', '#00336A');
  });

  $('.english').click(function (e) {
    $('.french-row').css('display', 'none');
    $('.germany-row').css('display', 'none');
    $('.english-row').css('display', 'block');
    $('.french').css('opacity', '0.7');
    $('.french div').css('background', '#c4c4c4');
    $('.germany').css('opacity', '0.7');
    $('.germany div').css('background', '#c4c4c4');
    $('.english').css('opacity', '1');
    $('.english div').css('background', '#00336A');
  });

  $('.germany').click(function (e) {
    $('.french-row').css('display', 'none');
    $('.english-row').css('display', 'none');
    $('.germany-row').css('display', 'block');
    $('.french').css('opacity', '0.7');
    $('.french div').css('background', '#c4c4c4');
    $('.english').css('opacity', '0.7');
    $('.english div').css('background', '#c4c4c4');
    $('.germany').css('opacity', '1');
    $('.germany div').css('background', '#00336A');
  });

  var count_menu = 0;

  $('.header-hambergurmenu').click(function (e) {
    count_menu++;
    if (count_menu % 2 == 0) {
      $('.header-hambergurmenu-title').css('display', 'none');
      $('.header-hambergurmenu-bg').css('display', 'none');
    }
    else {
      $('.header-hambergurmenu-title').css('display', 'flex');
      $('.header-hambergurmenu-bg').css('display', 'flex');
    }

  });

  $('#teacher').hover(function () {
    $('#teacher-sub').css('display', 'flex');
  }, function () {
    $('#teacher-sub').css('display', 'none');
  }
  );

  $('#personal').hover(function () {
    $('#personal-sub').css('display', 'flex');
  }, function () {
    $('#personal-sub').css('display', 'none');
  }
  );

  $('#personal-sub').hover(function () {
    $('#personal-sub').css('display', 'flex');
    }, function () {
      $('#personal-sub').css('display', 'none');
    }
  );

  $('#teacher-sub').hover(function () {
    $('#teacher-sub').css('display', 'flex');
    }, function () {
      $('#teacher-sub').css('display', 'none');
    }
  );


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
