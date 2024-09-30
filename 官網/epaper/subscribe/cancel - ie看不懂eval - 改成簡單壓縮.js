var widgetId2;
var onloadCallback = function() {
  widgetId2 = grecaptcha.render(document.getElementById('example2'));
};

function cancelCheck(){
  var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
  var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  // var rel= /select|write|update|delete|exec|count|'|"|=|;|>|<|%/i;
  var isPass = true;
  var dataLayer = window.dataLayer || [];

  $('.erc').hide();
  $('#sc').remove();

  function scrollMove(txt) {
    txt.show();
    $body.stop(true, false).animate({
      scrollTop: txt.offset().top - 120
    }, 200);
  };
  if(! pattern.test(cancel_form.cemail.value)){
    scrollMove($('.erc'));
    isPass = false;
  }else{
    $('.erc').hide();
  }
  var recaptcha2 = $('#example2 .g-recaptcha-response').val();
  if(!recaptcha2){
    isPass = false;
    if(!$('#recaptcha-block').length){
      $('#example2').after('<p class="danger block" id="recaptcha-block"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 機器人驗證未勾選</p>');
    }
  }else{
    $('#recaptcha-block').remove();
  }
  if(isPass){
    var user = {
      email : cancel_form.cemail.value
    };

    $.ajax({
      type: "POST",
      url: "./cancel.php",
      data: user,
      beforeSend: function(){
        $('#cancel_form .btn-ctrl').append('<div class="loading button button--border-medium button--round-s button--text-thin button--size">送出中...<i class="fa fa-refresh fa-spin fa-fw"></i></div>')
        $('#cancel_form .btn-ctrl button').hide()
      },
      success: function(data){
        $(window).unbind('beforeunload');
        if(data=='newDbError'){
          // ga('send', 'event', 'contact', '電子報', 'db error');
          alert('連線錯誤，請稍後再嘗試。')
        }
        // else if(data=='recaptchaNoChecked'){
        //   scrollMove($('.er12'));
        // }
        else if(data=='blocked'){
          // ga('send', 'event', 'contact', '電子報', 'nodata');
          alert('請輸入正確的 email 格式');
        }
        else{
          // ga('send', 'event', 'contact', '電子報', 'unsubscribe');
          $('#cancel_form').after('<p id="sc" class="text-center" style="color:#4cae4c">您已完成退訂電子報程序，我們將停止寄發電子報給您。</p>');
          $('#cancel_form').hide();
          var da = new Date();
          dataLayer.push({
            "event": "epaper_cancel",
            "who": cancel_form.cemail.value+" : "+da
          });
          // reset form
          $('#cancel_form')[0].reset();
        }
        console.log(data)
      },
      error: function(ts){
        var text= ts.responseText;
        // ga('send', 'event', 'contact', '電子報', 'error');
        alert('發生錯誤。請再試一次，或嘗試聯絡客服')
        console.log(text)
      },
      complete: function(){
        $('#cancel_form .btn-ctrl .loading').remove()
        // $('#cancel_form .btn-ctrl button').show()
      }
    });
  }

  return false;
};