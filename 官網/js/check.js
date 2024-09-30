
function formCheck(product,postUrl){
  var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
  var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  var pattern_tel =/^(\+|\(|\d){1}(\d|\)|\#|,|-|\s)+\d+$/;
  var isPass = true;

  var link = window.location.href.split('#')[0].toString();
  product = product || '產品諮詢';
  postUrl = postUrl || "/php/post.php";

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
  if(consult_form.otherRequire.value.length>500){
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
  if(! pattern_tel.test(consult_form.phone.value)||consult_form.phone.value.length<5 || consult_form.phone.value.length>20){
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
  var expr = /KiCKtalks|嘉興|可尼酷樂|222970080|0920788525|olay0405|http:|https:|goo\.gl|0rz|bit\.ly|\<script\>|\.js|xss|ppt\.cc|service\@/i;
  if(expr.test(consult_form.company.value) || expr.test(consult_form.phone.value) || expr.test(consult_form.jobTitle.value) || expr.test(consult_form.otherRequire.value) || expr.test(consult_form.email.value)){
    alert('您輸入的資訊可能有打廣告之嫌疑，若遭誤判還煩請使用其它方式諮詢，謝謝');
    isPass = false;
  }

  //是否在同一天諮詢
  const date = new Date();
  const year = date.getFullYear();
  const month = date.getMonth() + 1;
  const day = date.getDate();
  const postDay = [year, month, day].join('-');
  if (localStorage.getItem('postDay') !== null) {
    var oldPostDay = localStorage.getItem('postDay');
    if(oldPostDay == postDay){
      isPass = false;
      alert('您在稍早已送出諮詢資料');
    }
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
        $('#consult .btn-ctrl').append('<div class="loading button button--border-medium button--round-s button--text-thin button--size">送出中...<i class="fa fa-refresh fa-spin fa-fw"></i></div>')
        $('#consult .btn-ctrl button').hide()
      },
      success: function(data){
        data = JSON.parse(data);
        $(window).unbind('beforeunload');
        if(data.db=='newDbError'){
          alert('連線錯誤，請稍後再嘗試。')
          // ga('send', 'event', 'contact', product, 'db error');
        }else if(data.ending=='recaptchaNoChecked'){
          scrollMove($('.er12'));
        }else if(data.ending=='blocked'){
          dataLayer.push({
            "event": "form_post_fail",
            "product_name": product,
            "fail_type": "後端過濾"
          });
          alert('輸入的資訊異常或格式錯誤，例如 Email 格式。若遭誤判還煩請使用其它方式諮詢，謝謝');
        }else if(data.ending == 'recaptchaFail'){
          dataLayer.push({
            "event": "form_post_fail",
            "fail_type": "recaptcha Fail:"+JSON.stringify(data.recaptcha)
          });
          alert('機器人驗證失敗，請重整後再試一次或使用其它方式諮詢，謝謝');
        }else{
          // ga('send', 'event', 'contact', product, 'success');
          localStorage.setItem('postDay',postDay);
          dataLayer.push({
            "event": "form_post",
            "product_name": product,
            "company": consult_form.company.value
          });
          function getCookieValue(name){
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(let i=0; i < ca.length; i++){
              let c = ca[i].trim();
              if(c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length);
            }
            return null;
          }
          var daerValue = getCookieValue('daer');
          if(daerValue !== null){
            dataLayer.push({
              'event': 'cpc_consult_' + daerValue
            });
          }
          if(data.epaper=='repeat'){
            alert('您之前已訂閱電子報');
          }else if(data.epaper=='norepeat'){
            dataLayer.push({
              "event": "epaper_send",
              "who": consult_form.email.value.substr(0,6)
            });
          }
          setTimeout(function(){
            window.location.replace("success.php");
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
        // ga('send', 'event', 'contact', product, txt);
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