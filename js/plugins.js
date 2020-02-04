$(document).ready(function() {
  console.log('plugins initilized.');

  // WOW Animate effects
  // new WOW().init();

  // Tiny Slider
  // var slider = tns({
  //   container: '.tiny-slider',
  //   items: 1,
  //   responsive: {
  //     640: {
  //       edgePadding: 20,
  //       gutter: 20,
  //       items: 2
  //     },
  //     700: {
  //       gutter: 30
  //     },
  //     900: {
  //       items: 3
  //     }
  //   }
  // });


  // Rellax Parallax
  // var rellax = new Rellax('.rellax');
  var rellax = new Rellax('.rellax', {
    breakpoints: [576, 768, 992, 1201]
  });

  // refresh on resize
  window.onresize = function(event) {
    rellax.refresh();
    // console.log('refreshed');
  };

  //destroy on phones
  if( getMobileOS() ){
    rellax.destroy();
    // console.log('destroyed');
  }

  //check if phones
  function getMobileOS() {
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;
    // console.log('user agent: '+userAgent);
    if (/windows phone/i.test(userAgent)) {
      return true;
    }
    if (/android/i.test(userAgent)) {
      return true;
    }
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
      return true;
    }
    return false;
  }


  //back to top
  backToTop();
  function backToTop(){
    $(".back-to-top").css("display","none");
    $(window).scroll(function(){
      if($(window).scrollTop() > 0 ){
        $(".back-to-top").fadeIn(300);
      } else {
        $(".back-to-top").fadeOut(300);
      }
    });
    $(".back-to-top").click(function(){
      $("html, body").animate({
        scrollTop: 0
      }, 500);
    });
  };


});