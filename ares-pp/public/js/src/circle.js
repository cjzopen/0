$(function(){
  function typeClick(area,typeTextArea){
    area = area || '#circle .icon';
    typeTextArea = typeTextArea || '#support li';
    var areaLength = area.length;
    var areaIndex = '';
    var ww = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    $(area).on('click',function(){
      var $this = $(this).closest('.list');
      $('#areaContent').remove();
      $this.siblings().removeClass('active');
      areaIndex=$this.index();
      var typeText = $(typeTextArea).eq(areaIndex).html();
      var typeHtml = $.parseHTML('<div id="areaContent" class="col-12 gray-bg text-left p-3">'+typeText+'</div>');
      $this.addClass('active');
      if(ww>=992){
        if(areaLength%3 != 0){
          if(areaIndex == areaLength-1 || areaIndex%3 == 2){
            $this.after(typeHtml)
          }else{
            if(areaIndex == areaLength-2 || areaIndex%3 == 1){
              $this.next().after(typeHtml)
            }else{
              $this.next().next().after(typeHtml)
            }
          }
        }else{
          if(areaIndex%3 == 2){
            $this.after(typeHtml)
          }else if(areaIndex%3 == 1){
            $this.next().after(typeHtml)
          }else if(areaIndex%3 == 0){
            $this.next().next().after(typeHtml)
          }
        }
      }else if(ww<=576){
        $this.after(typeHtml)
      }else{
        if(areaLength%2 != 0){
          if(areaIndex == areaLength-1){
            $this.after(typeHtml)
          }else{
            if(areaIndex%2 == 1){
              $this.after(typeHtml)
            }else{
              $this.next().after(typeHtml)
            }
          }
        }else{
          if(areaIndex%2 == 1){
            $this.after(typeHtml)
          }else{
            $this.next().after(typeHtml)
          }
        }
      }
      $('#areaContent').slideDown()
    });
  }
  typeClick();
  $(window).resize(function(){
    $('#areaContent').remove();
    typeClick();
  })
})