$(document).ready(function () {
  // Toggle submenu and icon
  $('.shopCollapse').click(function () {
    let submenu = $(this).find('.shopOpen');
    let iconElement = $(this).find('iconify-icon');
    submenu.toggleClass('active');
    iconElement.attr(
      'icon',
      iconElement.attr('icon') === 'ep:arrow-down-bold'
        ? 'ep:arrow-right-bold'
        : 'ep:arrow-down-bold'
    );
  });

  // Password visibility toggle
  $('.pasToggl').click(function () {
    let inputField = $(this).siblings('input');
    let isPassword = inputField.attr('type') === 'password';
    inputField.attr('type', isPassword ? 'text' : 'password');
    $(this)
      .find('iconify-icon')
      .attr('icon', isPassword ? 'ion:eye-outline' : 'ion:eye-off-outline');
  });

  // Switch between Register and Sign-In
  $('.RegisterBtn').click(function () {
    $('.Register').removeClass('d-none');
    $('.signIn').addClass('d-none');
  });
  $('.signInBtn').click(function () {
    $('.Register').addClass('d-none');
    $('.signIn').removeClass('d-none');
  });

  // Mobile search box toggle
  $('.searchMob').click(function () {
    $('.searchBoxMobile').addClass('active');
    $('.bottomNavBar').addClass('d-none');
  });
  $('.closeBtnSearch').click(function () {
    $('.searchBoxMobile').removeClass('active');
    $('.bottomNavBar').removeClass('d-none');
  });

  // *Swipper
  var bannerSwiper = new Swiper('#banner .mySwiper', {
    pagination: {
      el: '#banner .swiper-pagination',
      dynamicBullets: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  var swiper = new Swiper('#featureProduct .mySwiper', {
    slidesPerView: 5,
    spaceBetween: 10,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      991: {
        slidesPerView: 5,
      },
      450: {
        slidesPerView: 2,
      },
      414: {
        slidesPerView: 2,
      },
      300: {
        slidesPerView: 1,
      },
    },
  });

  // *  popup close
  $('.close-btn').click(function () {
    $('.popup').addClass('d-none');
  });

  $(window).on('load', function () {
    setTimeout(function () {
      $('.popup').removeClass('d-none');
      $('.popup').addClass('d-block');
    }, 2000);
  });

  // category Filtering
  var mixer = mixitup('.productCart');

  // countdown
  /* var countDownDate = new Date('Dec 9, 2024 18:00:00').getTime();
  var x = setInterval(function () {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById('days').innerHTML = days;
    document.getElementById('hours').innerHTML = hours;
    document.getElementById('mins').innerHTML = minutes;
    document.getElementById('secs').innerHTML = seconds;
  }, 1000);
  $('#video .vid').click(function () {
    console.log(1);

    $('#video-m').removeClass('d-none');
  }); */
});
