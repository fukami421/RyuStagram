$(window).on('load resize', function () {
  // navbarの高さを取得する
  var height = $('.navbar').height();
  // bodyのpaddingにnavbarんぼ高さを設定する
  $('body').css('padding-top', height + 10);
});