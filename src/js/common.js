'use strict';

global.jQuery = require('jquery');
let svg4everybody = require('svg4everybody'),
  tippy = require('tippy.js'),
  Swiper = require('swiper'),
  fancybox = require('@fancyapps/fancybox'),
  tabslet = require('tabslet'),
  Imask = require('imask'),
  popup = require('jquery-popup-overlay');

jQuery(document).ready(function($) {
  // Toggle nav menu
  $('.nav-toggle').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('active');
    $('.header__nav').toggleClass('open');
  });

  // Modal
  $('.modal').popup({
    transition: 'all 0.3s',
    onclose: function() {
      $(this).find('label.error').remove();
      $(this).find('.wpcf7-response-output').hide();
      $(this).find('.wpcf7-not-valid-tip').remove();
    }
  });

  let tooltip = function() {
    let mql = window.matchMedia('(min-width: 768px)');

    let handleWidthChange = function(mql) {
      if (mql.matches) {
        const els = document.querySelectorAll('.services-card');
        tippy(els, {
          content(reference) {
            let content = reference.querySelector('.services-card__text');
            return content;
          },
          theme: 'tomato',
          distance: -60
        });
      }
    };

    mql.addListener(handleWidthChange);
    handleWidthChange(mql);

  };

  let gallerySlider = new Swiper('.s-gallery-slider', {
    slidesPerView: 2.78,
    spaceBetween: -40,
    centeredSlides: true,
    loop: true,
    speed: 800,
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 3000,
    },
    breakpoints: {
      1200: {
        slidesPerView: 2.5,
        spaceBetween: -30
      },
      992: {
        slidesPerView: 2.1,
        spaceBetween: -30
      },
      767: {
        slidesPerView: 1.5,
        spaceBetween: -30
      },
      576: {
        slidesPerView: 1,
        spaceBetween: 20
      }
    }
  });

  $().fancybox({
    selector : '[data-fancybox="gallery"]',
    thumbs   : false,
    hash     : false,
    loop: true,
    beforeClose : function(instance) {
      if ($('.s-gallery-slider').length) {
        gallerySlider.slideTo( instance.currIndex);
      }
    }
  });

  $('.advantages-tabs').tabslet({
    animation: true,
  });

  let contactForm = function() {
    $('.contact-form').each(function() {
      let submit = $(this).find('[type="submit"]');
      let button = $(this).find('[data-contact-btn] button');

      if (submit.length) {
        button.find('.text').html(submit.val());
        submit.replaceWith(button);
        $(this).find('.ajax-loader').remove();
      }
    });

    // Loader
    $('.contact-form form').on('submit', function () {
      let btn = $(this).find('.btn');

      if (btn.hasClass('btn-link')) {
        btn.addClass("btn-loading");
        btn.find('.text').css('display', 'none');
      } else {
        btn.addClass("btn-loading");
      }
    });

    $('.wpcf7').on('wpcf7spam wpcf7invalid wpcf7mailsent wpcf7mailfailed', function (e) {
      let form = $('.contact-form');
      $(form).find('.btn').removeClass("btn-loading");
    });
  };

  let inputMask = function() {
    let inputMask = $('input[type="tel"]');
    let maskOptions = {
      mask: '+{7} (000) 000-00-00'
    };

    if (inputMask.length) {
      inputMask.each(function(i, el) {
        IMask(el, maskOptions);
      });
    }

  };

  $('a[href*="#"]')
  // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        let target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();

          let offset;

          if ($(window).width() > 1199) {
            offset = $('.header').height();
          }
          else {
            offset = $('.header').height();
          }

          $('.nav-toggle').toggleClass('active');
          $('.header__nav').toggleClass('open');

          $('html, body').animate({
            scrollTop: target.offset().top - offset - 20
          }, 1000);
        }
      }
    });

  // Fixed header
  let fixedHeader = function(e) {
    let header =  $('.header');
    let h = header.innerHeight();

    if (e.scrollTop() > 150) {
      // header.css('padding-bottom', h);
      header.addClass('fixed');
    }
    else {
      // header.css('padding-bottom', 0);
      header.removeClass('fixed');
    }
  };

  $('.form-field').focus(function() {
    $(this).next('.wpcf7-not-valid-tip').remove();
  });
  
  tooltip();
  contactForm();
  inputMask();
  fixedHeader($(this));

  $(window).scroll(function() {
    fixedHeader($(this));
  });

  // SVG
  svg4everybody({});
});