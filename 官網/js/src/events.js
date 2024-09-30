$(function() {
  var i = window.dataLayer || [];

  // if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || $("a[rel^='photo']")){
  //   $.getScript("/lib/fancybox3/jquery.fancybox.min.js").done(function(){
  //     (function() { var css = document.createElement('link'); css.href = '/lib/fancybox3/jquery.fancybox.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })();
  //     $("a[rel^='photo']").fancybox({protect: true});
  //   });
  // }
  var p = $(window).width();
  $(".paging li").hide(),
  p < 500 ? ($(".paging li:lt(3)").show(),
  $(".paging .prev").click(function() {
    var i = $(".paging ul").children("li:visible:first");
    i.prevAll(":lt(3)").show(),
    i.prev().nextAll().hide()
  }),
  $(".paging .next").click(function() {
    var i = $(".paging ul").children("li:visible:last");
    i.nextAll(":lt(3)").show(),
    i.next().prevAll().hide()
  })) : ($(".paging li:lt(5)").show(),
  $(".paging .prev").click(function() {
    var i = $(".paging ul").children("li:visible:first");
    i.prevAll(":lt(5)").show(),
    i.prev().nextAll().hide()
  }),
  $(".paging .next").click(function() {
    var i = $(".paging ul").children("li:visible:last");
    i.nextAll(":lt(5)").show(),
    i.next().prevAll().hide()
  }));

    // add_link
    embed_links("#content");

  $('#synopsis').appendTo('#content');

  var aside = $('aside.relativeAside');
  if($('article .relateArticle').length){
    var inside = $('article .relateArticle');
    aside.html('<div class="relateArticle" itemscope itemtype="http://schema.org/WebPage"><br><p>loading...</p><br></div>');
    aside.find('.relateArticle').html(inside.html());
    inside.remove();
  }else{
    aside.remove();
    $('article').css({
      'float':'none',
      'margin-left':'auto',
      'margin-right':'auto'
    })
  }
});