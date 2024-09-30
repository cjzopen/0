const _svg = $('#the-svg');
_svg.find('text').hide();
_svg.find('image').hide();
_svg.find('#tc5').hide();
$(function(){
  // $.each('symbol image',function(){
  //   if($(this).attr('data-href')){
  //     $(this).attr('xlink:href',$(this).attr('data-href'));
  //   }
  // });
  new Vivus('the-svg', {
    type: 'scenario',
    duration: 100,
    onReady: function(){
      _svg.find('text').fadeIn(250);
      _svg.find('image').fadeIn(250);
    },
    animTimingFunction: Vivus.EASE_OUT
  },function(){
    _svg.find('#tc5').show();
  });


  const btnToggle = $('#accordion-toggle');
  function handler1(){
    $(this).text('- Close All');
    $('.accordion input').prop('checked',true);
    $(this).one("click", handler2);
  }
  function handler2(){
    $(this).text('+ Open All');
    $('.accordion input').prop('checked',false);
    $(this).one("click", handler1);
  }
  btnToggle.one("click", handler1);
});