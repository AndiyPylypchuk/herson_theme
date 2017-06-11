'use strict';
if(!window.console) window.console = {};
if(!window.console.memory) window.console.memory = function() {};
if(!window.console.debug) window.console.debug = function() {};
if(!window.console.error) window.console.error = function() {};
if(!window.console.info) window.console.info = function() {};
if(!window.console.log) window.console.log = function() {};

// sticky footer
//-----------------------------------------------------------------------------
if(!Modernizr.flexbox) {
  (function() {
    var
      $pageWrapper = $('#page-wrapper'),
      $pageBody = $('#page-body'),
      noFlexboxStickyFooter = function() {
        $pageBody.height('auto');
        if($pageBody.height() + $('#header').outerHeight() + $('#footer').outerHeight() < $(window).height()) {
          $pageBody.height($(window).height() - $('#header').outerHeight() - $('#footer').outerHeight());
        } else {
          $pageWrapper.height('auto');
        }
      };
    $(window).on('load resize', noFlexboxStickyFooter);
  })();
}
if(ieDetector.ieVersion == 10 || ieDetector.ieVersion == 11) {
  (function(){
    var
      $pageWrapper = $('#page-wrapper'),
      $pageBody = $('#page-body'),
      ieFlexboxFix = function() {
        if($pageBody.addClass('flex-none').height() + $('#header').outerHeight() + $('#footer').outerHeight() < $(window).height()) {
          $pageWrapper.height($(window).height());
          $pageBody.removeClass('flex-none');
        } else {
          $pageWrapper.height('auto');
        }
      };
    ieFlexboxFix();
    $(window).on('load resize', ieFlexboxFix);
  })();
}

$(function() {

// placeholder
//-----------------------------------------------------------------------------
  $('input[placeholder], textarea[placeholder]').placeholder();

});
$(document).ready(function(){
 $('.js-slider-top').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    nextArrow:'<div class="btn-next"><i class="arrow arrow-right"></i></div>',
    prevArrow:'<div class="btn-prev"><i class="arrow arrow-left"></i></div>',
    fade: true,
    adaptiveHeight: true,
    asNavFor: '.js-slider-bot'
  });

  $('.js-slider-bot').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    asNavFor: '.js-slider-top',
    arrows: false,
    infinite: true,
    focusOnSelect: true,
    adaptiveHeight: true,
    responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 5
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    },
    {
      breakpoint: 544,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2
      }
    }
    ]
  });

  //gallery-slider
  $('.js-gallery-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    nextArrow:'<div class="btn-next"><i class="arrow arrow-right"></i></div>',
    prevArrow:'<div class="btn-prev"><i class="arrow arrow-left"></i></div>',
    fade: true,
    infinite: false,
    adaptiveHeight: true
  });
});