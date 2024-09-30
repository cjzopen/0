var _BODY = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');


var consult_obj = {};


function formCheck(){
  var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  var pattern_tel =/^(\+|\(|\d){1}(\d|\)|\#|,|-|\s)+\d+$/;
  var isPass = true;
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
  if(! $("input[name='knowFrom[]']:checked").val()){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '如何得知',
      text: '未勾選 "如何得知資通產品"'
    });
  }
  if(consult_form.phone.value.length<5 || consult_form.phone.value.length>100){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '電話',
      text: '格式錯誤或未填，最多100字',
      onClose:function(){
        $('#phone').addClass("alert");
      }
    });
  }else{
    $('#phone').removeClass("alert");
  }
  if(consult_form.name.value.length<1 || consult_form.name.value.length>60){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '姓名',
      text: '姓名欄位未填或多於60字',
      onClose:function(){
        $('#name').addClass("alert");
      }
    });
  }else{
    $('#name').removeClass("alert");
  }
  if(consult_form.company.value.length<1 || consult_form.company.value.length>100){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '服務單位',
      text: '服務單位欄位未填，且最多100個字',
      onClose:function(){
        $('#company').addClass("alert");
      }
    });
  }else{
    $('#company').removeClass("alert");
  }
  if(!consult_form.product.value){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '產品',
      text: '產品欄位未填',
      onClose:function(){
        $('#product').addClass("alert");
      }
    });
  }else{
    $('#product').removeClass("alert");
  }
  if(!consult_form.user.value){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '你是誰',
      text: '',
      onClose:function(){
        $('#user').addClass("alert");
      }
    });
  }else{
    $('#user').removeClass("alert");
  }
  if(consult_form.user.value=='jenny@ares.com.tw' && (!consult_form.user.value=='潛客來電（台北）' || !consult_form.user.value=='潛客來信（台北）')){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '你是誰',
      text: '',
      onClose:function(){
        $('#source').addClass("alert");
      }
    });
  }else{
    $('#source').removeClass("alert");
  }

  //垃圾訊息 filter
  var expr = /KiCKtalks|可尼酷樂|http:|https:|goo\.gl|0rz|bit\.ly|\<script\>|scriptt\.cc|service\@/i;
  if(expr.test(consult_form.otherRequire.value)){
    Swal.fire({
      type: 'error',
      title: '需求欄內容',
      text: '輸入的資訊可能有垃圾訊息',
    });
    isPass = false;
  }

  if(isPass){
    var mobile,otherRequire,kfOther,email,department,jobTitle,othersend;
    consult_form.mobile.value ? mobile = consult_form.mobile.value : mobile = '';
    consult_form.email.value ? email = consult_form.email.value : email = '';
    consult_form.department.value ? department = consult_form.department.value : department = '';
    consult_form.jobTitle.value ? jobTitle = consult_form.jobTitle.value : jobTitle = '';
    consult_form.othersend.value ? othersend = consult_form.othersend.value : othersend = '';
    consult_form.otherRequire.value ? otherRequire = consult_form.otherRequire.value : otherRequire = '未填寫';
    $('#how10').is(':checked') ? kfOther = consult_form.kfOther.value : kfOther = '';
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
    consult_obj = {
      othersend: othersend,
      product : consult_form.product.value,
      user : consult_form.user.value,
      source: consult_form.source.value,
      request : 'Y',
      company : consult_form.company.value,
      phone : consult_form.phone.value,
      jobTitle : jobTitle,
      email : email,
      name : consult_form.name.value,
      department : department,
      mobile : mobile,
      otherRequire : otherRequire,
      knowFrom : $("input[name='knowFrom[]']:checked").map(function(){return $(this).val()}).get(),
      union : union,
      kfOther : kfOther,
      plan : 'Y',
      budget : budget,
    };
    console.log(consult_obj);

    $.ajax({
      type: "POST",
      url: 'post.php',
      data: consult_obj,
      beforeSend: function(){
        localStorage.setItem('consult_cache', JSON.stringify(consult_obj));
        $('#consult_form .btn-ctrl').append('<div class="temp btn">送出中...</div>')
        $('#consult_form .btn-ctrl button').hide();
      }
    })
    .done(function(data){
      console.log(data);
      data = JSON.parse(data);
      console.log(data);
      $(window).unbind('beforeunload');
      if(data.ending=='newDbError'){
        Swal.fire({
          type: 'error',
          title: '連線錯誤',
          text: ''
        });
      }else if(data.ending=='sendError'){
        Swal.fire({
          type: 'error',
          title: '伺服器異常',
          text: '請通知相關IT人員'
        });
      }
      else{
        dataLayer.push({
          "event": "form_post",
          "product_name": consult_form.product.value,
          "company": consult_form.company.value
        });
        alert('送出成功');
        setTimeout(function(){
          history.go(0);
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
          text: '請再試一次，或通知IT人員'
        });
        txt='Requested URL not found';
      } else if(x.status==500) {
        Swal.fire({
          type: 'error',
          title: 'Internel Server Error',
          text: '請再試一次，或通知IT人員'
        });
        txt='Internel Server Error';
      } else if(e=='parsererror') {
        Swal.fire({
          type: 'error',
          title: 'Parsing JSON Request failed',
          text: '請再試一次，或通知IT人員'
        });
        txt='JSON Request failed';
      } else if(e=='timeout'){
        Swal.fire({
          type: 'error',
          title: 'Request Time out',
          text: '請再試一次，或通知IT人員'
        });
        txt='Time out';
      } else {
        Swal.fire({
          type: 'error',
          title: 'Unknow Error',
          text: '請再試一次，或通知IT人員'
        });
        txt='Unknow Error';
      }
      console.log(x.responseText)
    })
    .always(function(){
      $('#consult_form .btn-ctrl .temp').remove();
      $('#consult_form .btn-ctrl button').show();
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
    if(btv<50){
      btt.text('尚未導入預算');
    }else if(btv<100){
      btt.text('小於50萬');
    }else if(btv<200){
      btt.text('50~100萬');
    }else if(btv<300){
      btt.text('100~200萬');
    }else if(btv<400){
      btt.text('200~300萬');
    }else if(btv<500){
      btt.text('300~400萬');
    }else if(btv<600){
      btt.text('400~500萬');
    }else if(btv<700){
      btt.text('500~1000萬');
    }else{
      btt.text('1000萬以上');
    }
  });
  // 如何得知 area input show
  $("#how-area input[type='checkbox']").on('change',function(){
    $(this).siblings("input[type='text']").toggleClass('d-none');
  });
});

