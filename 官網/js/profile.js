var btn = $('#accordionExample').find('.btn.rounded-0');
var list = $('#show-list').find('.collapse');
var tri=true;
var i;

list_reset();

if (localStorage.getItem('btn-index') === null) {
  localStorage.setItem('btn-index',0);
  list_active(0);
}else{
  i= Math.max(localStorage.getItem('btn-index')-1,0);
  list_reset();
  list_active(i);
}
i=0 || localStorage.getItem('btn-index');
var rep = setInterval(function(){
  list_reset();
  i>=6&&(i=0);
  list_active(i);
  i++;
  localStorage.setItem('btn-index',i);
},7000);
if(tri){
  btn.on('click',function(){
    clearInterval(rep);
    btn.removeClass('act');
    tri=false;
  })
}
btn.on('click',function(){
  var list_index = $(this).index();
  list_reset();
  list_active(list_index);
  localStorage.setItem('btn-index',list_index+1);
});

function list_reset(){
  btn.removeClass('act');
  list.removeClass('show');
}
function list_active(ind){
  btn.eq(ind).addClass('act');
  list.eq(ind).addClass('show');
}