// 要先載入  g-recaptcha
var widgetId1;
var onloadCallback = function() {
  widgetId1 = grecaptcha.render(document.getElementById('example1'));
};

function formCheck(){
  var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
  var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  var isPass = true;
  var dataLayer = window.dataLayer || [];

  $('p.danger').hide();

  function scrollMove(txt) {
    txt.show();
    $body.stop(true, false).animate({
      scrollTop: txt.offset().top - 120
    }, 750);
  };

  if(! $("input[name='agree']").is(':checked')){
    scrollMove($('.er11'));
    isPass = false;
  }else{
    $('.er11').hide();
  }
  if(! pattern.test(consult_form.email.value)){
    scrollMove($('.er4'));
    isPass = false;
  }else{
    $('.er4').hide();
  }
  if(consult_form.name.value.length<1){
    scrollMove($('.er2'));
    isPass = false;
  }else{
    $('.er2').hide();
  }
  //grecaptcha.getResponse() 只抓的到第1個，所以改寫成這樣來區分
  var recaptcha1 = $('#example1 .g-recaptcha-response').val();
  if(!recaptcha1){
    isPass = false;
    if(!$('#subs-block').length){
      $('#example1').after('<p class="danger block" id="subs-block"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 機器人驗證未勾選</p>');
    }
  }else{
    $('#subs-block').remove();
  }
  if(isPass){
    if(consult_form.company.value){
      var company = consult_form.company.value;
    }else{
      var company = '未提供';
    }
    var user = {
      company : company,
      email : consult_form.email.value,
      name : consult_form.name.value,
      'g-recaptcha-response' : recaptcha1,
      'secret' : '6LcpDzsUAAAAAM2npS4P_R4_uYYeQHbPMIuBERk-'
    };

    $.ajax({
      type: "POST",
      url: "/php/post-epaper.php",
      data: user,
      beforeSend: function(){
        $('#consult .btn-ctrl').append('<div class="loading button button--border-medium button--round-s button--text-thin button--size">送出中...<i class="fa fa-refresh fa-spin fa-fw"></i></div>')
        $('#consult .btn-ctrl button').hide()
      },
      success: function(data){
        $(window).unbind('beforeunload');
        // console.log(data);
        if(data=='newDbError'){
          // ga('send', 'event', 'contact', '電子報', 'db error');
          Swal.fire({
            type: 'error',
            title: '伺服器連線錯誤',
            text: '請再試一次，或嘗試聯絡客服。'
          });
        }
        else if(data=='recaptchaFail'){
          // scrollMove($('.er12'));
          Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: '機器人驗證失敗。'
          });
        }
        else if(data=='repeat'){
          // ga('send', 'event', 'contact', '電子報', 'repeat');
          Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: '此 email 已訂閱電子報'
          });
        }else if(data=='blocked'){
          Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: '請輸入正確的 Email 格式'
          });
        }else if(data=='success'){
          // ga('send', 'event', 'contact', '電子報', 'success');
          dataLayer.push({
            "event": "epaper_send",
            "who": consult_form.email.value.substr(0,6)
          });
          // reset form
          $('#consult_form')[0].reset();
          Swal.fire({
            type: 'success',
            title: '成功',
            text: '感謝您訂閱資通電子報，您將收到一封「訂閱確認」郵件。請閱讀並點擊郵件上的連結，以完成訂閱程序。',
            footer: '若未收到還煩請寄信至 jenny@ares.com.tw 告知。'
          });
          setTimeout(function(){
            $('#consult_form .btn-ctrl').html('<p class="text-center" style="color:#4cae4c">感謝您訂閱資通電子報，您將收到一封「訂閱確認」郵件。請閱讀並點擊郵件上的連結，以完成訂閱程序。<br>若未收到還煩請寄信至 jenny@ares.com.tw 告知欲訂閱電子報，謝謝。</p>');
            // alert('感謝您訂閱 ARES 電子報，您將收到一封「訂閱確認」郵件。請閱讀並點擊郵件上的連結，以完成訂閱程序。');
          }, 0);
        }else{
          Swal.fire({
            type: 'error',
            title: '確認信寄送失敗',
            text: '請再試一次，或嘗試聯絡客服 jenny@ares.com.tw'
          });
        }
        // console.log(data)
      },
      error: function(ts){
        var text= ts.responseText;
        // ga('send', 'event', 'contact', '電子報', 'error');
        Swal.fire({
          type: 'error',
          title: '發生不明錯誤',
          text: '請再試一次，或嘗試聯絡客服 jenny@ares.com.tw'
        });
        console.log(text)
      },
      complete: function(){
        $('#consult .btn-ctrl .loading').remove()
        $('#consult .btn-ctrl button').show();
        grecaptcha.reset();
      }
    });
  }

  return false;
};