$(window).on('load resize', function () {
  // navbarの高さを取得する
  var height = $('.navbar').height();
  $('body').css('padding-top', height + 10);
});