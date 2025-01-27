// input error message
$(document).on('change input','.input-error .form-control',function(){
  $(this).closest('.input-error').removeClass('input-error');
});

// menu
$(document).on('click','#menu-toggle-icon',function(){
  $('#menu').toggleClass('d-none');
  if($('#menu').hasClass('d-none')){
    $('#main-content').css('width','100%');
  }else{
    $('#main-content').css('width','');
  }
});
$(document).on('click','.menu-list-parent',function(e){
  e.preventDefault();
  $(this).next('.menu-list-child').slideToggle(200);
  return false;
});

// pagination
function table_pagination(table_element,pagination_element,perPage){
  perPage = (typeof perPage !== 'undefined') ?  perPage : 10;
  var searchTableTr = $(table_element).find('tbody tr');
  searchTableTr.hide();
  searchTableTr.slice(0, perPage).show();

  var pagination1 = new tui.Pagination(document.querySelector(pagination_element), {
    totalItems: searchTableTr.length,
    itemsPerPage: perPage,
    visiblePages: 5,
    centerAlign: true
  });
  pagination1.on('afterMove', function(evt) {
    var currentPage = evt.page;
    searchTableTr.hide();
    searchTableTr.slice((currentPage-1)*perPage, perPage*currentPage).show();
  });
}
var paginations = document.querySelectorAll('.table-with-pagination');
var per_page = 4;
for(var i=0; i < paginations.length; i++){
  console.log(i)
  paginations[i].classList.add('table-with-pagination-' + i);
  table_pagination('.table-with-pagination-' + i +' .table','.table-with-pagination-' + i +' .tui-pagination',per_page);
}

$(document).on('click','.click-to-open-modal',function(e){
  e.preventDefault();
  var target_model = $(this).attr('data-modal');
  $(target_model).fadeIn(150).css('padding-right','16px');
  $('body').addClass('modal-open').append('<div class="modal-backdrop fade show"></div>');
  $('.modal-backdrop').fadeIn(150);

  $(document).on('click','[data-dismiss="modal"]',function(e){
    e.preventDefault();
    $(target_model).fadeOut(150,function(){
      $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();
    });
    return false;
  });

  return false;
});

// input[file]
// var inputFile = document.querySelectorAll('.custom-file-input');
// if (inputFile) {
//   for (var i = 0; i < inputFile.length; i += 1) {
//     var elem = inputFile[i];
//     elem.addEventListener('change', function(){
//       var fileName = this.querySelector('input[type=file]').files[0].name;
//       this.querySelector('.custom-file-label').innerText = fileName;
//     });
//   }
// }
$('input[type=file]').on('change',function(){
  console.log($(this))
  var fileName = $(this).val().split(/(\\|\/)/g).pop();
  $(this).next('.custom-file-label').text(fileName);
})
