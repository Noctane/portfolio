$(document).ready(function() {

$('#fullpage').fullpage({
  anchors: ['Home', 'Portfolio', 'Experiences', 'Formations', 'Contact'],
  menu: '#nav',
});


  // Nav Links

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
