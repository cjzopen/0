$('.big').each(function(){
  var $this = $(this);
  var end = parseInt($this.text());
  var start = 0;
  var counter = setInterval(timer, 2000/end);
  function timer(){
    $this.text(start);
    if(start>=end){
      clearInterval(counter);
    }
    start+=1;
  }
})