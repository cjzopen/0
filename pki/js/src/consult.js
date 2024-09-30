var _BODY = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');


var consult_obj = {};

if(localStorage.getItem('consult_cache') === null){
  // localStorage.setItem('consult_cache', JSON.stringify(consult_obj));
}else{
  consult_obj = JSON.parse(localStorage.getItem('consult_cache'));
  consult_form.company.value = consult_obj.company;
  consult_form.phone.value = consult_obj.phone;
  consult_form.jobTitle.value = consult_obj.jobTitle;
  consult_form.email.value = consult_obj.email;
  consult_form.name.value = consult_obj.name;
  consult_form.department.value = consult_obj.department;
}

function formCheck(product,postUrl){
  var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  var pattern_tel =/^(\+|\(|\d){1}(\d|\)|\#|,|-|\s)+\d+$/;
  var isPass = true;

  var link = window.location.href.split('#')[0].toString();
  product = product || 'uPKI';
  postUrl = postUrl || "/consult/post.php";

  var dataLayer = window.dataLayer || [];

  if($("input#how10").is(':checked') && (! consult_form.kfOther.value)){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '欄位未填',
      text: '得知資通產品>其它>說明欄位未填寫。',
      onClose:function(){
        $('#kfOther').addClass("alert");
      }
    });
  }else{
    $('#kfOther').removeClass("alert");
  }
  if(! $("input[name='agree']").is(':checked')){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '隱私權聲明',
      text: '未勾選同意資通電腦隱私權聲明'
    });
  }
  if(! $("input[name='knowFrom[]']:checked").val()){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '如何得知',
      text: '未勾選 "如何得知資通產品"'
    });
  }
  if(consult_form.otherRequire.value.length>120){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '需求說明',
      text: '專業顧問會與您聯繫，不用打太多字。或選擇寄Email給我們。',
      onClose:function(){
        $('#otherRequire').addClass("alert");
      }
    });
  }else{
    $('#otherRequire').removeClass("alert");
  }
  if(consult_form.jobTitle.value.length<1){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '職稱',
      text: '職稱欄位未填',
      onClose:function(){
        $('#jobTitle').addClass("alert");
      }
    });
  }else{
    $('#jobTitle').removeClass("alert");
  }
  if(consult_form.department.value.length<1){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '部門',
      text: '部門欄位未填',
      onClose:function(){
        $('#department').addClass("alert");
      }
    });
  }else{
    $('#department').removeClass("alert");
  }
  if(! pattern.test(consult_form.email.value)){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: 'Email',
      text: '格式錯誤或未填，若誤判請改用Email或電話諮詢',
      onClose:function(){
        $('#email').addClass("alert");
      }
    });
  }else{
    $('#email').removeClass("alert");
  }
  if(consult_form.phone.value<6){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '電話',
      text: '格式錯誤或未填，若誤判請改用Email或電話諮詢',
      onClose:function(){
        $('#phone').addClass("alert");
      }
    });
  }else{
    $('#phone').removeClass("alert");
  }
  if(consult_form.name.value.length<1){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '姓名',
      text: '姓名欄位未填',
      onClose:function(){
        $('#name').addClass("alert");
      }
    });
  }else{
    $('#name').removeClass("alert");
  }
  if(consult_form.company.value.length<1){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '服務單位',
      text: '服務單位欄位未填',
      onClose:function(){
        $('#company').addClass("alert");
      }
    });
  }else{
    $('#company').removeClass("alert");
  }

  //垃圾訊息 filter
  var expr = /KiCKtalks|可尼酷樂|http:|https:|goo\.gl|0rz|bit\.ly|script|xss|\.js|ppt\.cc|service\@/i;
  if(expr.test(consult_form.company.value) || expr.test(consult_form.otherRequire.value) || expr.test(consult_form.email.value)){
    Swal.fire({
      type: 'error',
      title: '欄位內容',
      text: '您輸入的資訊可能有打廣告之嫌疑，若遭誤判還煩請使用Email或電話諮詢，謝謝',
      onClose:function(){
        $('#company').addClass("alert");
      }
    });
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
      Swal.fire({
        type: 'error',
        title: '重覆諮詢',
        text: '您在稍早已送出諮詢資料'
      });
      isPass = false;
    }
  }

  if(isPass){
    var mobile,otherRequire,kfOther,epaper;
    consult_form.mobile.value ? mobile = consult_form.mobile.value : mobile = '';
    consult_form.otherRequire.value ? otherRequire = consult_form.otherRequire.value : otherRequire = '未填寫';
    $('#how10').is(':checked') ? kfOther = consult_form.kfOther.value : kfOther = '';
    $('#echeck').is(':checked') ? epaper=1 : epaper = 0;
    // if(consult_form.mobile.value){
    //   var mobile = consult_form.mobile.value;
    // }else{
    //   var mobile = '';
    // }
    // if(consult_form.otherRequire.value){
    //   var otherRequire = consult_form.otherRequire.value;
    // }else{
    //   var otherRequire = '未填寫';
    // }
    // if($('#how10').is(':checked')){
    //   var kfOther = consult_form.kfOther.value;
    // }else{
    //   var kfOther = '';
    // }
    if($('#how4').is(':checked')){
      $('#how4').val('Y搜('+ consult_form.kfYahoo.value +')');
    }
    if($('#how3').is(':checked')){
      $('#how3').val('G搜('+ consult_form.kfGoogle.value +')');
    }
    // if($('#echeck').is(':checked')){
    //   var epaper = 1;
    // }else{
    //   var epaper = 0;
    // }
    var union = '';
    var budget = $('#budget-text').text();
    var recaptcha = $('#consult_form .g-recaptcha-response').val();
    consult_obj = {
      product : product,
      link : link,
      request : 'Y',
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
      // 'g-recaptcha-response' : recaptcha
      'cf-turnstile-response': $('[name="cf-turnstile-response"]').val()
    };

    $.ajax({
      type: "POST",
      url: postUrl,
      data: consult_obj,
      beforeSend: function(){
        localStorage.setItem('consult_cache', JSON.stringify(consult_obj));
        $('#consult_form .btn-ctrl').append('<div class="temp btn">送出中...</div>')
        $('#consult_form .btn-ctrl button').hide();
      }
    })
    .done(function(data){
      data = JSON.parse(data);
      $(window).unbind('beforeunload');
      if(data.ending=='newDbError'){
        Swal.fire({
          type: 'error',
          title: '伺服器異常',
          text: '請稍後再嘗試，或改使用Email或電話諮詢，謝謝'
        });
      }else if(data.ending=='sendError'){
        Swal.fire({
          type: 'error',
          title: '連線錯誤',
          text: '請改使用Email或電話諮詢，謝謝'
        });
      }
      else if(!JSON.parse(data.captcha).success){
        Swal.fire({
          type: 'error',
          title: '驗證失敗',
          text: '機器人驗證失敗（'+JSON.parse(data.captcha)['error-codes'].toString()+'）。請再試一次，或嘗試用其它方式與我們聯絡'
        });
        // console.log(data.info);
      }
      else{
        localStorage.setItem('postDay',postDay);
        if(data.epaper == 'repeat'){
          // Swal.fire({
          //   type: 'error',
          //   title: '諮詢已送出',
          //   text: '但您已訂閱過電子報'
          // });
          alert('您之前已訂閱電子報');
        }else if(data.epaper == 'norepeat'){
          dataLayer.push({
            "event": "epaper_send",
            "who": consult_form.email.value.substr(0,6)
          });
        }
        dataLayer.push({
          "event": "form_post",
          "product_name": product,
          "company": consult_form.company.value
        });
        setTimeout(function(){
          window.location.replace("success.php");
        }, 0);
      }
    })
    .fail(function(x,e){
      var txt;
      if (x.status==0) {
        // alert('You are offline!!\n Please Check Your Network.');
        Swal.fire({
          type: 'error',
          title: 'offline',
          text: 'You are offline!!\n Please Check Your Network.'
        });
        txt='offline';
      } else if(x.status==404) {
        Swal.fire({
          type: 'error',
          title: 'Requested URL not found',
          text: '請再試一次，或改使用Email或電話諮詢'
        });
        txt='Requested URL not found';
      } else if(x.status==500) {
        Swal.fire({
          type: 'error',
          title: 'Internel Server Error',
          text: '請再試一次，或改使用Email或電話諮詢'
        });
        txt='Internel Server Error';
      } else if(e=='parsererror') {
        Swal.fire({
          type: 'error',
          title: 'Parsing JSON Request failed',
          text: '請再試一次，或改使用Email或電話諮詢'
        });
        txt='JSON Request failed';
      } else if(e=='timeout'){
        Swal.fire({
          type: 'error',
          title: 'Request Time out',
          text: '請再試一次，或改使用Email或電話諮詢'
        });
        txt='Time out';
      } else {
        Swal.fire({
          type: 'error',
          title: 'Unknow Error',
          text: '請再試一次，或改使用Email或電話諮詢'
        });
        txt='Unknow Error';
      }
      // dataLayer.push({
      //   "event": "form_post_fail",
      //   "product_name": product,
      //   "fail_type": txt
      // });
      console.log(x.responseText)
    })
    .always(function(){
      $('#consult_form .btn-ctrl .temp').remove();
      $('#consult_form .btn-ctrl button').show();
      // grecaptcha.reset();
      turnstile.reset();
    });
  }
  return false;
};
$('#submit-button').on('click',function(){
  formCheck();
});
$(function(){
  $('#otherRequire').on('paste input',function(){
    $('#otherRequire-length').text(consult_form.otherRequire.value.length);
  });
  $('#budget').on('change input',function(){
    var btv = consult_form.budget.value;
    var btt = $('#budget-text');
    if(btv<30){
      btt.text('尚未導入預算');
    }else if(btv<100){
      btt.text('小於100萬');
    }else if(btv<200){
      btt.text('100~200萬');
    }else if(btv<300){
      btt.text('200~300萬');
    }else if(btv<400){
      btt.text('300~400萬');
    }else if(btv<500){
      btt.text('400~500萬');
    }else{
      btt.text('500萬以上');
    }
  });
  // 如何得知 area input show
  $("#how-area input[type='checkbox']").on('change',function(){
    $(this).siblings("input[type='text']").toggleClass('d-none');
  });
});

