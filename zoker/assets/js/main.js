(function ($) {
  "use strict";

  /*===========================================
        Table of contents
    01. On Load Function
    02. Preloader
    03. Mobile Menu Active
    04. Sticky fix
    05. Scroll To Top
    06. Set Background Image
    07. Popup Sidemenu
    08. Search Box Popup
    09. Magnific Popup
    10. Filter Menu
    11. Indicator
    12. Title Rotate
    13. Slider Tab
    14. Range Slider
    15. Procut Zoom Img
    16. Quantity Adder
    17. Rating Input Class Added
    18. Tab Animation
    19. Button Hove Effect
    00. Right Click Disable
    00. Inspect Element Disable
  =============================================*/


  /*---------- 01. On Load Function ----------*/  
  $(window).on('load', function () {    
    $('.preloader').hide();
  });

  /*---------- 02. Preloader ----------*/
  if ($('.preloader').length > 0) {
    $('.preloaderCls').each(function () {
      $(this).on('click', function (e) {
        e.preventDefault();
        $('.preloader').css('display', 'none');
      })
    });
  };



  /*---------- 03. Mobile Menu Active ----------*/
  $('.mobile-menu-active').vsmobilemenu({
    menuContainer: '.vs-mobile-menu',
    expandScreenWidth: $('.mobile-menu-active').data('expand'),
    menuToggleBtn: '.vs-menu-toggle',
  });



  /*---------- 04. Sticky fix ----------*/
  var lastScrollTop = '';
  var scrollToTopBtn = '.scrollToTop'

  function stickyMenu($targetMenu, $toggleClass) {
    var st = $(window).scrollTop();
    if ($(window).scrollTop() > 600) {
      if (st > lastScrollTop) {
        $targetMenu.removeClass($toggleClass);

      } else {
        $targetMenu.addClass($toggleClass);
      };
    } else {
      $targetMenu.removeClass($toggleClass);
    };
    lastScrollTop = st;
  };
  $(window).on("scroll", function () {
    stickyMenu($('.sticky-header'), "active");
    if ($(this).scrollTop() > 400) {
      $(scrollToTopBtn).addClass('show');
    } else {
      $(scrollToTopBtn).removeClass('show');
    }
  });



  /*---------- 05. Scroll To Top ----------*/
  $(scrollToTopBtn).on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, 3000);
    return false;
  });




  /*---------- 06.Set Background Image ----------*/
  if ($('[data-bg-src]').length > 0) {
    $('[data-bg-src]').each(function () {
      var src = $(this).attr('data-bg-src');
      $(this).css({
        'background-image': 'url(' + src + ')'
      });
    });
  };





  /*---------- 07. Popup Sidemenu ----------*/
  function popupSideMenu($sideMenu, $sideMunuOpen, $sideMenuCls, $toggleCls) {
    // Sidebar Popup
    $($sideMunuOpen).on('click', function (e) {
      e.preventDefault();
      $($sideMenu).addClass($toggleCls);
    });
    $($sideMenu).on('click', function (e) {
      e.stopPropagation();
      $($sideMenu).removeClass($toggleCls)
    });
    var sideMenuChild = $sideMenu + ' > div';
    $(sideMenuChild).on('click', function (e) {
      e.stopPropagation();
      $($sideMenu).addClass($toggleCls)
    });
    $($sideMenuCls).on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      $($sideMenu).removeClass($toggleCls);
    });
  };
  popupSideMenu('.sidemenu-wrapper', '.sideMenuToggler', '.sideMenuCls', 'show');





  /*---------- 08. Search Box Popup ----------*/
  function popupSarchBox($searchBox, $searchOpen, $searchCls, $toggleCls) {
    $($searchOpen).on('click', function (e) {
      e.preventDefault();
      $($searchBox).addClass($toggleCls);
    });
    $($searchBox).on('click', function (e) {
      e.stopPropagation();
      $($searchBox).removeClass($toggleCls);
    });
    $($searchBox).find('form').on('click', function (e) {
      e.stopPropagation();
      $($searchBox).addClass($toggleCls);
    });
    $($searchCls).on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      $($searchBox).removeClass($toggleCls);
    });
  };
  popupSarchBox('.popup-search-box', '.searchBoxTggler', '.searchClose', 'show');



  


  /*----------- 09. Magnific Popup ----------*/
  /* magnificPopup img view */
  $('.popup-image').magnificPopup({
    type: 'image',
    gallery: {
      enabled: true
    }
  });

  /* magnificPopup video view */
  $('.popup-video').magnificPopup({
    type: 'iframe'
  });




  /*----------- 10. Filter Menu ----------*/
  $('.filter-active').imagesLoaded(function () {
    var $filter = '.filter-active',
      $filterItem = '.grid-item',
      $filterMenu = '.filter-menu-active';

    if ($($filterMenu).length > 0) {
      var $grid = $($filter).isotope({
        itemSelector: $filterItem,
        filter: '*',
        masonry: {
          // use outer width of grid-sizer for columnWidth
          columnWidth: $filterItem
        }
      });
  
      // filter items on button click
      $($filterMenu).on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
          filter: filterValue
        });
      });
  
      // Menu Active Class 
      $($filterMenu).on('click', 'button', function (event) {
        event.preventDefault();
        $(this).addClass('active');
        $(this).siblings('.active').removeClass('active');
      });
    };
  });





  /*----------- 11. Indicator ----------*/
  $.fn.indicator = function () {
    var $menu = $(this),
      $linkBtn = $menu.find('a'),
      $btn = $menu.find('button');
    // Append indicator
    $menu.append('<span class="indicator"></span>');
    var $line = $menu.find('.indicator');  
    // Check which type button is Available
    if ($linkBtn.length) {
      var $currentBtn = $linkBtn;
    } else if ($btn.length) {
      var $currentBtn = $btn
    }
    // On Click Button Class Remove
    $currentBtn.on('click', function (e) {
      e.preventDefault();
      $(this).addClass('active');
      $(this).siblings('.active').removeClass('active');
      linePos()
    })
    // Indicator Position
    function linePos() {
      var $btnActive = $menu.find('.active'),
        $height = $btnActive.css('height'),
        $width = $btnActive.css('width'),
        $top = $btnActive.position().top + 'px',
        $left = $btnActive.position().left + 'px';
      $line.css({
        top: $top,
        left: $left,
        width: $width,
        height: $height,
      })
    }

    if ($menu.hasClass('vs-slider-tab')) {
      var linkslide = $menu.data('asnavfor');
      $(linkslide).on('afterChange', function (event, slick, currentSlide, nextSlide) {
        setTimeout(linePos, 10)
      });
    }    
    linePos()
  }

  // Call On Load
  if ($('.filter-menu-style1').length) {
    $('.filter-menu-style1').indicator();
  }
  if ($('.tab-indicator').length) {
    $('.tab-indicator').indicator();
  }







  /*----------- 12. Title Rotate ----------*/
  if($('.title-rotate').length) {
    $('.title-rotate').each(function () {
      var $title = $(this);
      var $letter = $title.text().split('');
      $title.html('')
      for (var i = 0; i < $letter.length; i++) {
        $title.prepend('<span class="letter">' + $letter[i] + '</span>')
      }
    })
  }



  /*----------- 13. Slider Tab   ----------*/
  $.fn.vsslideTab = function(btn){
    $(this).each(function(){
      var $menu = $(this),
      slider = $menu.data('asnavfor'),
      $btn = $menu.find(btn);
      var i = 0;
      // Change Slide on Btn Click
      $btn.each(function(){
        $(this).attr('data-slide-go-to', i)
        i++
        $(this).on('click', function(e){
          e.preventDefault();
          var slideno = $(this).data('slide-go-to');
          $(slider).slick('slickGoTo', slideno);
        })
      })
      // Change Btn Active Class On Slide Change
      $(slider).on('afterChange', function (event, slick, currentSlide, nextSlide) {
        $btn.removeClass('active');
        $('[data-slide-go-to=' + currentSlide + ']').addClass('active');
      });
    });
  };

  if ($('.vs-slider-tab').length) {
    $('.vs-slider-tab').vsslideTab('.tab-btn');
  }

  

  /*----------- 14. Range Slider ----------*/
  $("#slider-range").slider({
    range: true,
    min: 40,
    max: 600,
    values: [60, 570],
    slide: function (event, ui) {
      $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
    }
  });
  $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
  
  
  /*----------- 15. Procut Zoom Img ----------*/
  if ($('.zoom-thumb').length) {
    $('.zoom-thumb').each(function(){
      $(this).on('click', function(){
        var srcSet = $(this).data('zoom-image');
        $('.zoom-img').attr('src', srcSet);
      })
    })
  }


  /*----------- 16. Quantity Adder ----------*/
  $('.quantity-plus').each(function () {
    $(this).on('click', function () {
      var $qty = $(this).siblings(".qty-input");
      var currentVal = parseInt($qty.val());
      if (!isNaN(currentVal)) {
        $qty.val(currentVal + 1);
      }
    })
  });

  $('.quantity-minus').each(function () {
    $(this).on('click', function () {
      var $qty = $(this).siblings(".qty-input");
      var currentVal = parseInt($qty.val());
      if (!isNaN(currentVal) && currentVal > 1) {
        $qty.val(currentVal - 1);
      }
    });
  })

  /*----------- 17. Rating Input Class Added ----------*/
  if ($('.vs-rating-input').length > 0) {
    $('.vs-rating-input').each(function () {
      $(this).find('span').on('click', function () {
        $('.vs-rating-input span').addClass('active');
        $(this).nextAll('span').removeClass('active');
      });
    });
  };




  /*----------- 18. Tab Animation ----------*/
  $.fn.tabAnimation = function (){
    $(this).on('hide.bs.tab', function (e) {
      var $old_tab = $($(e.target).attr("href"));
      var $new_tab = $($(e.relatedTarget).attr("href"));

      if ($new_tab.index() < $old_tab.index()) {
        $old_tab.css('position', 'relative').css("bottom", "0").show();
        $old_tab.animate({
          "bottom": "-200px"
        }, 300, function () {
          $old_tab.css("bottom", 0).removeAttr("style");
        });
      } else {
        $old_tab.css('position', 'relative').css("top", "0").show();
        $old_tab.animate({
          "top": "-200px"
        }, 300, function () {
          $old_tab.css("top", 0).removeAttr("style");
        });
      }
    });
    $(this).on('show.bs.tab', function (e) {
      var $new_tab = $($(e.target).attr("href"));
      var $old_tab = $($(e.relatedTarget).attr("href"));

      if ($new_tab.index() > $old_tab.index()) {
        $new_tab.css('position', 'relative').css("bottom", "-200px");
        $new_tab.animate({
          "bottom": "0"
        }, 500);
      } else {
        $new_tab.css('position', 'relative').css("top", "-200px");
        $new_tab.animate({
          "top": "0"
        }, 500);
      }
    });
  }
  
  $('a[data-bs-toggle="tab"]').tabAnimation();



  /*----------- 19. Button Hove Effect ----------*/
  $.fn.hoverClass = function(element, eleClass){
    $(this).each(function(){
      $(this).on('mouseenter', function () {
        $(element).addClass(eleClass);
      }).on('mouseleave', function () {
        $(element).removeClass(eleClass);
      })
    })
  };
  
  $('.vs-btn:not(.style3), .ls-arrow, .slick-arrow').hoverClass('.vs-cursor, .vs-cursor2', 'style2');



  /*----------- 20. Hero Slider Active ----------*/

  $('.vs-hero-carousel').each(function () {
    var vsHslide = $(this);

    function d(data) {
      return vsHslide.data(data)
    }


    // Custom Style Set    
    vsHslide.on('sliderWillLoad', function (event, slider) {

      // Define Variable
      var respLayer = jQuery(this).find('.ls-responsive'),
        lsDesktop = 'ls-desktop',
        lsLaptop = 'ls-laptop',
        lsTablet = 'ls-tablet',
        lsMobile = 'ls-mobile',
        windowWid = jQuery(window).width(),
        lgDevice = 1025,
        mdDevice = 993,
        smDevice = 768;

      // Set Style on each Layer
      respLayer.each(function () {
        var layer = jQuery(this);

        function lsd(data) {
          return (layer.data(data) === '') ? layer.data(null) : layer.data(data);
        }
        // var respStyle = (windowWid < smDevice) ? ((lsd(lsMobile)) ? lsd(lsMobile) : lsd(lsTablet)) : ((windowWid < mdDevice) ? ((lsd(lsTablet)) ? lsd(lsTablet) : lsd(lsDesktop)) : lsd(lsDesktop)),
        var respStyle = (windowWid < smDevice) ? lsd(lsMobile) : ((windowWid < mdDevice ? lsd(lsTablet) : ((windowWid < lgDevice) ? lsd(lsLaptop) : lsd(lsDesktop)))),
          mainStyle = (layer.attr('style') !== undefined) ? layer.attr('style') : ' ';
        layer.attr('style', mainStyle + respStyle);
      });

    });


    vsHslide.layerSlider({
      allowRestartOnResize: true,
      maxRatio: (d('maxratio') ? d('maxratio') : 1),
      type: (d('slidertype') ? d('slidertype') : 'responsive'),
      pauseOnHover: (d('pauseonhover') ? true : false),
      navPrevNext: (d('navprevnext') ? true : false),
      hoverPrevNext: (d('hoverprevnext') ? true : false),
      hoverBottomNav: (d('hoverbottomnav') ? true : false),
      navStartStop: (d('navstartstop') ? true : false),
      navButtons: (d('navbuttons') ? true : false),
      loop: ((d('loop') == false) ? false : true),
      autostart: (d('autostart') ? true : false),
      height: (($(window).width() < 767) ? (d('sm-height') ? d('sm-height') : d('height')) : (d('height') ? d('height') : 1080)),
      responsiveUnder: (d('responsiveunder') ? d('responsiveunder') : 1220),
      layersContainer: (d('container') ? d('container') : 1220),
      showCircleTimer: (d('showcircletimer') ? true : false),
      skinsPath: 'layerslider/skins/',
      thumbnailNavigation: ((d('thumbnailnavigation') == false) ? false : true)
    });

    vsHslide.find('[data-ls-go]').each(function () {
      $(this).on('click', function (e) {
        e.preventDefault();
        var target = $(this).data('ls-go');
        vsHslide.layerSlider(target)
      });
    });

    

  });

  
  /*----------- 21. Counter Split ----------*/
  $('.counter-number').each(function(){
    var counter = $(this);
    var text = counter.html().split('');
    counter.html('');    
    for (var i = 0; i < text.length; i++) {
      var digit = '<span class="digit">' + text[i] + '</span>'
      counter.append(digit)
    }
  })
  
  
  /*----------- 22. Slick Slide Animation ----------*/
  $.fn.slickHero = function (){
    var slider = $(this);

    $('[data-ani-duration]').each(function () {
      var durationTime = $(this).data('ani-duration');
      $(this).css('animation-duration', durationTime);
    });
  
    $('[data-ani-delay]').each(function () {
      var delayTime = $(this).data('ani-delay');
      $(this).css('animation-delay', delayTime);
    });
  
    $('[data-ani]').each(function () {
      var animaionName = $(this).data('ani');
      $(this).addClass(animaionName);
      $('.slick-current [data-ani]').addClass('animated');
    });
  
    $('.vs-carousel').on('afterChange', function (event, slick, currentSlide, nextSlide) {
      $('[data-ani]').removeClass('animated');
      $('.slick-current [data-ani]').addClass('animated');
    });
  }

  if($('.hero-slick').length) {
    $('.hero-slick').slickHero();
  }
  
  




  /*----------- 00. Right Click Disable ----------*/
  // window.addEventListener('contextmenu', function (e) {
  //   // do something here... 
  //   e.preventDefault();
  // }, false);


  /*----------- 00. Inspect Element Disable ----------*/
  // document.onkeydown = function (e) {
  //   if (event.keyCode == 123) {
  //     return false;
  //   }
  //   if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
  //     return false;
  //   }
  //   if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
  //     return false;
  //   }
  //   if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
  //     return false;
  //   }
  //   if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
  //     return false;
  //   }
  // }


})(jQuery);