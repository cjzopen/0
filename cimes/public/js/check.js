var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
function formCheck(product,postUrl){
  var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  var pattern_tel =/^(\+|\(|\d){1}(\d|\)|\#|,|-|\s)+\d+$/;
  var isPass = true;

  var link = window.location.href.split('#')[0].toString();
  product = product || 'ciMes';
  postUrl = postUrl || "/contactus/post.php";

  $('p.danger').hide();

  function scrollMove(txt) {
    txt.show();
    $body.stop(true, false).animate({
      scrollTop: txt.offset().top - 120
    }, 750);
  };

  var dataLayer = window.dataLayer || [];

  if($("input#how10").is(':checked') && (! consult_form.kfOther.value)){
    scrollMove($('.er-kfOther'));
    isPass = false;
  }else{
    $('.er-kfOther').hide();
  }
  if(! $("input[name='agree']").is(':checked')){
    scrollMove($('.er11'));
    isPass = false;
  }else{
    $('.er11').hide();
  }
  if(! $("input[name='budget']:checked").val()){
    scrollMove($('.er8'));
    isPass = false;
  }else{
    $('.er8').hide();
  }
  if(! $("input[name='knowFrom[]']:checked").val()){
    scrollMove($('.er7'));
    isPass = false;
  }else{
    $('.er7').hide();
  }
  if(consult_form.otherRequire.value.length>200){
    scrollMove($('.max200'));
    isPass = false;
  }else{
    $('.max200').hide();
  }
  if(consult_form.jobTitle.value.length<1){
    scrollMove($('.er6'));
    isPass = false;
  }else{
    $('.er6').hide();
  }
  if(consult_form.department.value.length<1){
    scrollMove($('.er5'));
    isPass = false;
  }else{
    $('.er5').hide();
  }
  if(! pattern.test(consult_form.email.value)){
    scrollMove($('.er4'));
    isPass = false;
  }else{
    $('.er4').hide();
  }
  if(! pattern_tel.test(consult_form.phone.value)||consult_form.phone.value.length<5 || consult_form.phone.value.length>100){
    scrollMove($('.er3'));
    isPass = false;
  }else{
    $('.er3').hide();
  }
  if(consult_form.name.value.length<1){
    scrollMove($('.er2'));
    isPass = false;
  }else{
    $('.er2').hide();
  }
  if(consult_form.company.value.length<1){
    scrollMove($('.er1'));
    isPass = false;
  }else{
    $('.er1').hide();
  }

  //垃圾訊息 filter
  var expr = /KiCKtalks|可尼酷樂|嘉興|olay0405|http:|https:|goo\.gl|0rz|bit\.ly|\.js|xss|ppt\.cc|service\@/i;
  if(expr.test(consult_form.company.value) || expr.test(consult_form.otherRequire.value) || expr.test(consult_form.email.value)){
    alert('您輸入的資訊可能有打廣告之嫌疑，若遭誤判還煩請使用其它方式諮詢，謝謝');
    isPass = false;
  }

  if(isPass){
    if($("input[name='request']").is(':checked')){
      var request = 'Y';
    }else{
      var request = 'N';
    }
    if(consult_form.mobile.value){
      var mobile = consult_form.mobile.value;
    }else{
      var mobile = '';
    }
    if(consult_form.otherRequire.value){
      var otherRequire = consult_form.otherRequire.value;
    }else{
      var otherRequire = '未填寫';
    }
    if($('#how10').is(':checked')){
      var kfOther = consult_form.kfOther.value;
    }else{
      var kfOther = '';
    }
    if($('#how4').is(':checked')){
      $('#how4').val('Y搜('+ consult_form.kfYahoo.value +')');
    }
    if($('#how3').is(':checked')){
      $('#how3').val('G搜('+ consult_form.kfGoogle.value +')');
    }
    if($('#echeck').is(':checked')){
      var epaper = 1;
    }else{
      var epaper = 0;
    }
    var union = '';
    var budget = consult_form.budget.value;
    var recaptcha = $('#consult_form .g-recaptcha-response').val();
    var user = {
      product : product,
      link : link,
      request : request,
      company : consult_form.company.value,
      phone : consult_form.phone.value,
      jobTitle : consult_form.jobTitle.value,
      email : consult_form.email.value,
      name : consult_form.name.value,
      department : consult_form.department.value,
      mobile : mobile,
      otherRequire : otherRequire,
      knowFrom : $("input[name='knowFrom[]']:checked").map(function(){return $(this).val()}).get(),
      union : union,
      kfOther : kfOther,
      plan : 'Y',
      budget : budget,
      epaper : epaper,
      'g-recaptcha-response' : recaptcha
    };

    $.ajax({
      type: "POST",
      url: postUrl,
      data: user,
      beforeSend: function(){
        $('#consult_form .btn-ctrl').append('<div class="temp btn btn-cimes">送出中...</div>')
        $('#consult_form .btn-ctrl button').hide();
        $('.loading').attr('data-text','資料送出中...').show();
        // $('.loading').show()
      }
    })
    .done(function(data){
      data = JSON.parse(data);
      $(window).unbind('beforeunload');
      if(data.db=='newDbError'){
        dataLayer.push({
          "event": "form_post_fail",
          "product_name": product,
          "fail_type": "連線錯誤"
        });
        alert('連線錯誤，請稍後再嘗試。');
      }else if(data.ending=='recaptchaFail'){
        scrollMove($('.er12'));
      }else{
        dataLayer.push({
          "event": "form_post",
          "product_name": product,
          "company": consult_form.company.value
        });
        if(data.epaper == 'repeat'){
          alert('您之前已訂閱電子報');
        }else if(data.epaper == 'norepeat'){
          dataLayer.push({
            "event": "epaper_send",
            "who": consult_form.email.value.substr(0,6)
          });
        }
        window.location.replace("success.php");
      }
    })
    .fail(function(x,e){
      var txt;
      if (x.status==0) {
        alert('You are offline!!\n Please Check Your Network.');
        txt='offline';
      } else if(x.status==404) {
        alert('Requested URL not found.\n請再試一次，或嘗試聯絡客服');
        txt='Requested URL not found';
      } else if(x.status==500) {
        alert('Internel Server Error.\n請再試一次，或嘗試聯絡客服');
        txt='Internel Server Error';
      } else if(e=='parsererror') {
        alert('Error.\nParsing JSON Request failed.\n請再試一次，或嘗試聯絡客服');
        txt='JSON Request failed';
      } else if(e=='timeout'){
        alert('Request Time out.');
        txt='Time out';
      } else {
        alert('Unknow Error.\n請再試一次，或嘗試聯絡客服');
        txt='Unknow Error';
      }
      dataLayer.push({
        "event": "form_post_fail",
        "product_name": product,
        "fail_type": txt
      });
      console.log(x.responseText)
    })
    .always(function(){
      $('#consult_form .btn-ctrl .temp').remove();
      $('#consult_form .btn-ctrl button').show();
      grecaptcha.reset();
      $('.loading').hide();
    });
  }
  return false;
};
$(function(){
  // 如何得知 area input show
  $("#how-area input[type='checkbox']").on('change',function(){
    $(this).siblings("input[type='text']").toggleClass('hidden');
  });
  //隱私權保護政策
  var agreeArea = $('.agree-content');
  $('#pop-agree').click(function(){
    agreeArea.fadeIn()
    $body.addClass('act')
  })

  agreeArea.on('click', function(e) {
    if (e.target !== this)
      return;

    agreeArea.fadeOut()
    $body.removeClass('act')
  })
  $('#agree-close').click(function(){
    agreeArea.fadeOut()
    $body.removeClass('act')
  })
})