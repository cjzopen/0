window.addEventListener("load", function(){
  $('.supmenu a').on('click',function(e){
    e.preventDefault();
    var ajaxdata = {
      category:$(this).attr('data-category')
    };
    $.ajax({
      type: 'POST',
      url: '/src/company.php',
      data: ajaxdata
    }).done(function(data){
      data = JSON.parse(data);
      console.log(data);
      $('#category').html(data.html);
      if($('.breadcrumb li').length>=3){
        $('.breadcrumb-item.active span').text(data.title);
        $('.breadcrumb-item.active a').attr('href',data.link);
      }
      history.replaceState(ajaxdata, data.title, data.link);
      if($('#last-breadcrumb')){
        $('#last-breadcrumb').text(data.title);
      }else{
        $('.breadcrumb').append('<li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="" itemprop="item"><span id="last-breadcrumb" itemprop="name">'+data.title+'</span></a><meta itemprop="position" content="3"></li>');
      }
      document.getElementById('h2').scrollIntoView();
    });
    return false;
  })
})