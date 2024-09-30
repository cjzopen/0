var product_check = document.querySelectorAll('[name="product[]"]');
var product;
for (var i = 0; i < product_check.length; i++) {
  product_check[i].addEventListener('change', function(){
    if(document.querySelectorAll('[name="product[]"]:checked').length >=3){
      $('[name="product[]"]:not(:checked)').attr('disabled',true);
    }else{
      $('[name="product[]"]:not(:checked)').attr('disabled',false);
    }
    product = $("input[name='product[]']:checked").map(function(){return $(this).val()}).get();
  });
}

$('#keyword').hide();
var how_select = document.querySelector('#how');
how_select.addEventListener('change', function(e){
  if(this.value =='Google 搜尋' || this.value =='Yahoo, Bing, 百度搜尋'){
    $('#keyword').show();
  }else{
    $('#keyword').hide();
  }
});

var text_length = 0;
$("#otherRequire").on("paste input", function() {
  text_length = consult_form.otherRequire.value.length;
  $("#otherRequire-length").text(text_length);
})

var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
function formCheck(){
  // reset
  $('.border-danger').removeClass('border-danger');
  $('.warning').remove();
  var isPass = true;
  var t=0;
  var dataLayer = window.dataLayer || [];


  function send_warning(e,warning_msg,txt) {
    txt = (typeof txt !== 'undefined') ?  txt : '格式錯誤或未填寫';
    $(e).after('<div class="warning text-danger">'+txt+'</div>');
    isPass = false;
    dataLayer.push({
      "event": "form_post_fail",
      "product_name": product,
      "fail_type": warning_msg
    });
  };

  if(! how_select.value){
    send_warning('#how','js know from block');
  }
  if(consult_form.otherRequire.value.length>200){
    scrollMove($('.max200'));
    isPass = false;
    dataLayer.push({
      "event": "form_post_fail",
      "product_name": product,
      "fail_type": "js require block"
    });
  }else{
    $('.max200').hide();
  }
  if(consult_form.jobTitle.value.length<1){
    scrollMove($('.er6'));
    isPass = false;
    dataLayer.push({
      "event": "form_post_fail",
      "product_name": product,
      "fail_type": "js job title block"
    });
    // ga('send', 'event', 'consult', 'block', 'jobTitle');
  }else{
    $('.er6').hide();
  }
  if(consult_form.department.value.length<1){
    scrollMove($('.er5'));
    isPass = false;
    dataLayer.push({
      "event": "form_post_fail",
      "product_name": product,
      "fail_type": "js department block"
    });
    // ga('send', 'event', 'consult', 'block', 'department');
  }else{
    $('.er5').hide();
  }
  if(! pattern.test(consult_form.email.value)){
    scrollMove($('.er4'));
    isPass = false;
    dataLayer.push({
      "event": "form_post_fail",
      "product_name": product,
      "fail_type": "js email block"
    });
    // ga('send', 'event', 'consult', 'block', 'email');
  }else{
    $('.er4').hide();
  }
  if(consult_form.phone.value.length<6){
    scrollMove($('.er3'));
    isPass = false;
    dataLayer.push({
      "event": "form_post_fail",
      "product_name": product,
      "fail_type": "js phone block"
    });
    // ga('send', 'event', 'consult', 'block', 'phone');
  }else{
    $('.er3').hide();
  }
  if(consult_form.name.value.length<1){
    scrollMove($('.er2'));
    isPass = false;
    dataLayer.push({
      "event": "form_post_fail",
      "product_name": product,
      "fail_type": "js name block"
    });
    // ga('send', 'event', 'consult', 'block', 'name');
  }else{
    $('.er2').hide();
  }
  if(consult_form.company.value.length<1){
    scrollMove($('.er1'));
    isPass = false;
    dataLayer.push({
      "event": "form_post_fail",
      "product_name": product,
      "fail_type": "js company block"
    });
    // ga('send', 'event', 'consult', 'block', 'company');
  }else{
    $('.er1').hide();
  }
  if(! $("input[name='product[]']:checked").val()){
    scrollMove($('.er0'));
    isPass = false;
    dataLayer.push({
      "event": "form_post_fail",
      "product_name": product,
      "fail_type": "js product block"
    });
    // ga('send', 'event', 'consult', 'block', 'product');
  }else{
    $('.er0').hide();
  }
  if($('input[name="product[]"]:checked').length > 3){
    alert('Too many products!');
    isPass = false;
    dataLayer.push({
      "event": "form_post_fail",
      "product_name": product,
      "fail_type": "js product block"
    });
  }

  //垃圾訊息 filter
  var expr = /KiCKtalks|嘉興|可尼酷樂|222970080|0920788525|olay0405|http:|https:|goo\.gl|0rz|bit\.ly|script|\.js|xss|ppt\.cc|service\@/i;
  if(expr.test(consult_form.company.value) || expr.test(consult_form.phone.value) || expr.test(consult_form.jobTitle.value) || expr.test(consult_form.otherRequire.value) || expr.test(consult_form.email.value)){
    alert('您輸入的資訊可能有打廣告之嫌疑，若遭誤判還煩請使用其它方式諮詢，謝謝');
    isPass = false;
    dataLayer.push({
      "event": "form_post_fail",
      "product_name": product,
      "fail_type": "js spam block"
    });
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
    // if($('#how6').is(':checked')){
    //   var union = consult_form.union.value;
    // }else{
    //   var union = '';
    // }
    if($('#how10').is(':checked')){
      var kfOther = consult_form.kfOther.value;
    }else{
      var kfOther = '';
    }
    if($('#how4').is(':checked')){
      $('#how4').val('Yahoo('+ consult_form.kfYahoo.value +')');
    }
    if($('#how3').is(':checked')){
      $('#how3').val('Google('+ consult_form.kfGoogle.value +')');
    }
    if($('#echeck').is(':checked')){
      var epaper = 1;
    }else{
      var epaper = 0;
    }
    // if(consult_form.plan.value == 'N'){
    //   var plan = 'N';
    //   var budget = '尚無導入計畫';
    // }else{
    //   var plan = 'Y';
    //   var budget = consult_form.budget.value;
    // }
    var product = $("input[name='product[]']:checked").map(function(){return $(this).val()}).get();
    var union = '';
    var budget = consult_form.budget.value;
    var recaptcha = $('#consult_form .g-recaptcha-response').val();
    var user = {
      product : product,
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
      // visit : consult_form.visit.value,
      epaper : epaper,
      'g-recaptcha-response' : recaptcha
    };

    $.ajax({
      type: "POST",
      url: "post.php",
      data: user,
      beforeSend: function(){
        $('#consult .btn-ctrl').append('<div class="loading button button--border-medium button--round-s button--text-thin button--size">送出中...<i class="fa fa-refresh fa-spin fa-fw"></i></div>')
        $('#consult .btn-ctrl button').hide()
      },
      success: function(data){
        data = JSON.parse(data);
        $(window).unbind('beforeunload');
        if(data.db=='newDbError'){
          dataLayer.push({
            "event": "form_post_fail",
            "product_name": product,
            "fail_type": "db error"
          });
          alert('連線錯誤，請稍後再嘗試，或聯絡客服')
          // ga('send', 'event', 'consult', 'send', 'db error');
        }else if(data.ending=='recaptchaNoChecked'){
          scrollMove($('.er12'));
          // ga('send', 'event', 'consult', 'block', 'recaptcha');
        }else if(data.ending=='blocked'){
          dataLayer.push({
            "event": "form_post_fail",
            "product_name": product,
            "fail_type": "後端過濾"
          });
          alert('輸入的資訊不尋常或格式錯誤，例如 Email 格式。若遭誤判還煩請使用其它方式諮詢，謝謝');
        }
        // else if(data=='successAndEpaper'){
        //   alert('資料送出成功。');
        //   window.location.replace("http://www.ares.com.tw/epaper/subscribe/");
        // }
        else{
          // alert('資料送出成功。');
          // ga('send', 'event', 'consult', 'send', 'success');
          dataLayer.push({
            "event": "form_post",
            "product_name": product,
            "google_conversion_label": "ug89CPuGsWoQkMfiyAM"
          });
          if(data.epaper=='repeat'){
            alert('您之前已訂閱電子報');
          }else if(data.epaper=='norepeat'){
            dataLayer.push({
              "event": "epaper_send",
              "who": consult_form.email.value.substr(0,6)
            });
          }
          setTimeout(function(){
            window.location.replace("/consult/success.php");
          }, 0);
        }
      },
      error: function(x,e){
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
        // ga('send', 'event', 'consult', 'send', txt);
        dataLayer.push({
          "event": "form_post_fail",
          "product_name": product,
          "fail_type": txt
        });
        console.log(x.responseText)
      },
      complete: function(){
        $('#consult .btn-ctrl .loading').remove();
        $('#consult .btn-ctrl button').show();
        grecaptcha.reset();
      }
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
  $('#pop-agree').click(function(){
    $('.agree-content').fadeIn()
    $('body').addClass('ofh')
  })

  $('.agree-content').on('click', function(e) {
    if (e.target !== this)
    return;

    $('.agree-content').fadeOut()
    $('body').removeClass('ofh')
  })
  $('#agree-close').click(function(){
    $('.agree-content').fadeOut()
    $('body').removeClass('ofh')
  })
})