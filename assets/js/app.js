$(document).ready(function() {

  if (document.documentElement.clientWidth > 414) {
    $('#fullpage').fullpage({
      anchors: ['Home', 'Portfolio', 'Experiences', 'Formations', 'Contact'],
      menu: '#nav',
    });
  }

  // Nav Links
  $('#nav li').hide();
  $('#nav li').each(function(i) {
    setTimeout(function() {
      $('#nav li').eq(i).show().addClass('bounceIn');
    }, 200 * i);
  });
  // $('.menu a[href^="#"]').on('click', function(e) {
  //   e.preventDefault();
  //
  //   var target = this.hash;
  //   var $target = $(target);
  //
  //   $('.menu li').siblings().removeClass('active');
  //   $(this).parent().addClass('active');
  //
  //   $('html, body').stop().animate({
  //     'scrollTop': $target.offset().top
  //   }, 200, 'swing')
  // })
  //
  // // scroll system
  // $(window).scroll(function() {
  //   var scrollData = $(this).scrollTop();
  //   console.log(scrollData);
  //
  //   if (scrollData > 0) {
  //     console.log('youpla');
  //   }
  // });



});
