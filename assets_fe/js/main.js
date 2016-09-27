$(window).load(function(){
  $('.model-nav').sticky({ topSpacing: 0 });

  function initialize() {
      var marcadores = [
        ['Fengtai Devoto', -34.5948349,-58.4964584],
        ['Fengtai Lanús', -34.6861626,-58.3873964]
      ];
      var map = new google.maps.Map(document.getElementById('mapa_div'), {
        zoom: 11,
        center: new google.maps.LatLng(-34.637269, -58.460705),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      for (i = 0; i < marcadores.length; i++) {
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(marcadores[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    initialize();
});

$(document).ready(function() {

    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top-80
            }, 1000);
            return false;
          }
        }
      });
    });

    $('.model-carousel-desktop').owlCarousel({
        items : 3,
        navigation: true,
        pagination: false,
        navigationText: ["",""],
        itemsDesktopSmall:	[1024,3],
    });

    $('.model-carousel-mobile').owlCarousel({
       autoHeight : true,
       singleItem: true,
       items : 3,
       navigation: true,
       pagination: false,
       navigationText: ["",""],
       itemsDesktopSmall:	[1024,3],
    });

    if ($(window).width() < 768) {
      $('.model-carousel-mobile').show();
      $('.model-carousel-desktop').hide();
    } else if ($(window).width() > 768) {
      $('.model-carousel-mobile').hide();
      $('.model-carousel-desktop').show();
    }

    $(window).resize(function () {
      if ($(window).width() < 768) {
          $('.model-carousel-mobile').show();
          $('.model-carousel-desktop').hide();
      } else if ($(window).width() > 768) {
          $('.model-carousel-mobile').hide();
          $('.model-carousel-desktop').show();
      }
    });

    $(function(){
        $('.carousel').carousel({
              interval: 3000
            });
        $('.carousel-control.right').trigger('click');
    });

    $('#home-carousel').on('slide.bs.carousel', function () {
        $('.carousel-caption').addClass('animated slideInRight');
    });

    function modsNav(){
        $('.nav-item').click(function(){
            $('.nav-item').removeClass('active');
            $(this).addClass('active');
        });
    }

    $('.sub-nav').hide();

    function navMobile(){
        $('#main-nav').addClass('mobile-nav');
        $('#show-nav').show();
        $('#hide-nav').show();

        $('.has-submenu').click(function(){
            $(this).next('.sub-nav').slideDown();
            $('.sub-nav').mouseleave(function(){
                $(this).slideUp();
            });
        });
    }

    function navDesktop(){
        $('#main-nav').removeClass('mobile-nav');
        $('#show-nav').hide();
        $('#hide-nav').hide();

        $('.has-submenu').click(function(){
            $(this).next('.sub-nav').slideDown();
            $('.sub-nav').mouseleave(function(){
                $(this).slideUp();
            });
        });
    }

    $('#show-nav').click(function(){
        $('#main-nav').slideToggle();
    });

    $('#hide-nav').click(function(){
        $('#main-nav').slideToggle();
    });

    $(".news-thumb").text(function(index, currentText) {
        return currentText.substr(0, 210);
    });

    $(".imgLiquidFill").imgLiquid({fill: true});

    $('#home-carousel').carousel({
      interval: 4000
    });

    // $('.play-vid').magnificPopup({
    //     items: {
    //       src: 'https://www.youtube.com/watch?v=37s79jwROfI'
    //     },
    //     type: 'iframe' // this is default type
    // });

    if ($(window).width() < 992) {
        navMobile();
    } else if ($(window).width() > 992) {
        navDesktop();
    };

    $(window).resize(function () {
        if ($(window).width() < 992) {
            navMobile();
        } else if ($(window).width() > 992) {
            navDesktop();
        }
    });

});
