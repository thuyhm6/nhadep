/**
    * selectImages
    * menuleft
    * tabs
    * progresslevel
    * collapse_menu
    * fullcheckbox
    * showpass
    * gallery
    * coppy
    * select_colors_theme
    * icon_function
    * box_search
    * preloader
*/

; (function ($) {

  "use strict";

  var selectImages = function () {
    if ($(".image-select").length > 0) {
      const selectIMG = $(".image-select");
      selectIMG.find("option").each((idx, elem) => {
        const selectOption = $(elem);
        const imgURL = selectOption.attr("data-thumbnail");
        if (imgURL) {
          selectOption.attr(
            "data-content",
            "<img src='%i'/> %s"
              .replace(/%i/, imgURL)
              .replace(/%s/, selectOption.text())
          );
        }
      });
      selectIMG.selectpicker();
    }
  };

  var menuleft = function () {
    if ($('div').hasClass('section-menu-left')) {
      var bt = $(".section-menu-left").find(".has-children");
      bt.on("click", function () {
        var args = { duration: 200 };
        if ($(this).hasClass("active")) {
          $(this).children(".sub-menu").slideUp(args);
          $(this).removeClass("active");
        } else {
          $(".sub-menu").slideUp(args);
          $(this).children(".sub-menu").slideDown(args);
          $(".menu-item.has-children").removeClass("active");
          $(this).addClass("active");
        }
      });
      $('.sub-menu-item').on('click', function (event) {
        event.stopPropagation();
      });
    }
  };

  var tabs = function () {
    $('.widget-tabs').each(function () {
      $(this).find('.widget-content-tab').children().hide();
      $(this).find('.widget-content-tab').children(".active").show();
      $(this).find('.widget-menu-tab').find('li').on('click', function () {
        var liActive = $(this).index();
        var contentActive = $(this).siblings().removeClass('active').parents('.widget-tabs').find('.widget-content-tab').children().eq(liActive);
        contentActive.addClass('active').fadeIn("slow");
        contentActive.siblings().removeClass('active');
        $(this).addClass('active').parents('.widget-tabs').find('.widget-content-tab').children().eq(liActive).siblings().hide();
      });
    });
  };

  $('ul.dropdown-menu.has-content').on('click', function (event) {
    event.stopPropagation();
  });
  $('.button-close-dropdown').on('click', function () {
    $(this).closest('.dropdown').find('.dropdown-toggle').removeClass('show');
    $(this).closest('.dropdown').find('.dropdown-menu').removeClass('show');
  });

  var progresslevel = function () {
    if ($('div').hasClass('progress-level-bar')) {
      var bars = document.querySelectorAll('.progress-level-bar > span');
      setInterval(function () {
        bars.forEach(function (bar) {
          var t1 = parseFloat(bar.dataset.progress);
          var t2 = parseFloat(bar.dataset.max);
          var getWidth = (t1 / t2) * 100;
          bar.style.width = getWidth + '%';
        });
      }, 500);
    }
  }

  var collapse_menu = function () {
    $(".button-show-hide").on("click", function () {
      $('.layout-wrap').toggleClass('full-width');
    })
  }

  var fullcheckbox = function () {
    $('.total-checkbox').on('click', function () {
      if ($(this).is(':checked')) {
        $(this).closest('.wrap-checkbox').find('.checkbox-item').prop('checked', true);
      } else {
        $(this).closest('.wrap-checkbox').find('.checkbox-item').prop('checked', false);
      }
    });
  };

  var showpass = function () {
    $(".show-pass").on("click", function () {
      $(this).toggleClass("active");
      var input = $(this).parents(".password").find(".password-input");

      if (input.attr("type") === "password") {
        input.attr("type", "text");
      } else if (input.attr("type") === "text") {
        input.attr("type", "password");
      }
    });
  }

  var gallery = function () {
    $(".button-list-style").on("click", function () {
      $(".wrap-gallery-item").addClass("list");
    });
    $(".button-grid-style").on("click", function () {
      $(".wrap-gallery-item").removeClass("list");
    });
  }

  var coppy = function () {
    $(".button-coppy").on("click", function () {
      myFunction()
    });
    function myFunction() {
      var copyText = document.getElementsByClassName("coppy-content");
      navigator.clipboard.writeText(copyText.text);
    }
  }

  var select_colors_theme = function () {
    if ($('div').hasClass("select-colors-theme")) {
      $(".select-colors-theme .item").on("click", function (e) {
        $(this).parents(".select-colors-theme").find(".active").removeClass("active");
        $(this).toggleClass("active");
      })
    }
  }

  var icon_function = function () {
    if ($('div').hasClass("list-icon-function")) {
      $(".list-icon-function .trash").on("click", function (e) {
        $(this).parents(".product-item").remove();
        $(this).parents(".attribute-item").remove();
        $(this).parents(".countries-item").remove();
        $(this).parents(".user-item").remove();
        $(this).parents(".roles-item").remove();
      })
    }
  }

  var box_search = function () {

    $(document).on('click', function (e) {
      var clickID = e.target.id; if ((clickID !== 's')) {
        $('.box-content-search').removeClass('active');
      }
    });
    $(document).on('click', function (e) {
      var clickID = e.target.class; if ((clickID !== 'a111')) {
        $('.show-search').removeClass('active');
      }
    });

    $('.show-search').on('click', function (event) {
      event.stopPropagation();
    }
    );
    $('.search-form').on('click', function (event) {
      event.stopPropagation();
    }
    );
    var input = $('.header-dashboard').find('.form-search').find('input');
    input.on('input', function () {
      if ($(this).val().trim() !== '') {
        $('.box-content-search').addClass('active');
      } else {
        $('.box-content-search').removeClass('active');
      }
    });

  }

  var retinaLogos = function () {
    var retina = window.devicePixelRatio > 1 ? true : false;
    if (retina) {
      if ($(".dark-theme").length > 0) {
        $('#logo_header').attr({ src: 'images/logo/logo.png', width: '154px', height: '52px' });
      } else {
        $('#logo_header').attr({ src: 'images/logo/logo.png', width: '154px', height: '52px' });
      }
    }
  };

  var preloader = function () {
    setTimeout(function () {
      $("#preload").fadeOut("slow", function () {
        $(this).remove();
      });
    }, 1000);
  };


  // Dom Ready
  $(function () {
    selectImages();
    menuleft();
    tabs();
    progresslevel();
    collapse_menu();
    fullcheckbox();
    showpass();
    gallery();
    coppy();
    select_colors_theme();
    icon_function();
    box_search();
    retinaLogos();
    preloader();

  });

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($('#spinner').length > 0) {
        $('#spinner').removeClass('show');
      }
    }, 1);
  };
  spinner();


  // Initiate the wowjs
  new WOW().init();


  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('.sticky-top').addClass('shadow-sm').css('top', '0px');
    } else {
      $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
    }
  });


  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
    return false;
  });


  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000
  });


  // Date and time picker
  $('.date').datetimepicker({
    format: 'L'
  });
  $('.time').datetimepicker({
    format: 'LT'
  });


  // Header carousel
  $(".header-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1500,
    loop: true,
    nav: false,
    dots: true,
    items: 1,
    dotsData: true,
  });


  // Testimonials carousel
  $('.testimonial-carousel').owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    loop: true,
    nav: false,
    dots: true,
    items: 1,
    dotsData: true,
  });

})(jQuery);


const counters = document.querySelectorAll('.counter');
const speed = 200; // tốc độ hiệu ứng

counters.forEach(counter => {
  const updateCount = () => {
    const target = +counter.getAttribute('data-target');
    const count = +counter.innerText;
    const increment = Math.ceil(target / speed);

    if (count < target) {
      counter.innerText = count + increment;
      setTimeout(updateCount, 15);
    } else {
      counter.innerText = target;
    }
  };

  updateCount();
});

// Quy trình làm việc 

function showTab(tabId) {
  const tabs = document.querySelectorAll('.tab');
  const contents = document.querySelectorAll('.tab-content');

  tabs.forEach(tab => tab.classList.remove('active'));
  contents.forEach(content => content.classList.remove('active'));

  document.querySelector(`.tab[onclick="showTab('${tabId}')"]`).classList.add('active');
  document.getElementById(tabId).classList.add('active');
}

// set thời gian khuyến mãi

  (() => {
      'use strict';
      const forms = document.querySelectorAll('.needs-validation');
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    })();

    // Countdown to New Year 2025
    const targetDate = new Date(Date.now() + 3 * 24 * 60 * 60 * 1000);
    const daysEl = document.getElementById('days');
    const hoursEl = document.getElementById('hours');
    const minutesEl = document.getElementById('minutes');
    const secondsEl = document.getElementById('seconds');

    function updateCountdown() {
      const now = new Date().getTime();
      const distance = targetDate - now;
      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);
      daysEl.textContent = days;
      hoursEl.textContent = hours;
      minutesEl.textContent = minutes;
      secondsEl.textContent = seconds;
    }

    setInterval(updateCountdown, 1000);
    updateCountdown();

