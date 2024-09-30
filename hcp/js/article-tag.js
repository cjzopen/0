$(document).on('click','.keyword',function(){
  var $this = $(this);
  var $keyword = $this.text();
    $('.keyword').removeClass('act');
    $this.addClass('act');
  if($keyword=='全部'){
    $('.article').show();
  }else{
    $('.article').hide();
    $('.article').each(function(){
      let $this = $(this);
      if($this.data('keyword').includes($keyword)){
        $this.fadeIn(200);
      }
    })
  }
});
$('.keyword-toggle').on('click', function(){
  $('.keyword-list').toggleClass('act');
})