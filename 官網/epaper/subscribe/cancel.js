var widgetId2, onloadCallback = function() {
  widgetId2 = grecaptcha.render(document.getElementById("example2"))
};

function cancelCheck() {
    //是否在同一天諮詢
  const date = new Date();
  const year = date.getFullYear();
  const month = date.getMonth() + 1;
  const day = date.getDate();
  const CANCEL = [year, month, day].join('-');
  if (localStorage.getItem('CANCEL') !== null) {
    var oldCANCEL = localStorage.getItem('CANCEL');
    if(oldCANCEL == CANCEL){
      alert('發生錯誤。請嘗試聯絡客服');
    }
  }else{
    var e, a = window.opera ? "CSS1Compat" == document.compatMode ? $("html") : $("body") : $("html,body"),
      c = !0,
      o = window.dataLayer || [];
    if ($(".erc").hide(), $("#sc").remove(), /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i.test(cancel_form.cemail.value) ? $(".erc").hide() : ((e = $(".erc")).show(), a.stop(!0, !1).animate({
        scrollTop: e.offset().top - 120
      }, 200), c = !1), $("#example2 .g-recaptcha-response").val() ? $("#recaptcha-block").remove() : (c = !1, $("#recaptcha-block").length || $("#example2").after('<p class="danger block" id="recaptcha-block"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 機器人驗證未勾選</p>')), c) {
      var t = {
        email: cancel_form.cemail.value
      };
      $.ajax({
        type: "POST",
        url: "./cancel.php",
        data: t,
        beforeSend: function() {
          $("#cancel_form .btn-ctrl").append('<div class="loading button button--border-medium button--round-s button--text-thin button--size">送出中...<i class="fa fa-refresh fa-spin fa-fw"></i></div>'), $("#cancel_form .btn-ctrl button").hide()
        },
        success: function(e) {
          if ($(window).unbind("beforeunload"), "newDbError" == e) alert("連線錯誤，請稍後再嘗試。");
          else if ("blocked" == e) alert("請輸入正確的 email 格式");
          else {
            localStorage.setItem('CANCEL',CANCEL);
            $("#cancel_form").after('<p id="sc" class="text-center" style="color:#4cae4c">您已完成退訂電子報程序，我們將停止寄發電子報給您。</p>'), $("#cancel_form").hide();
            var a = new Date;
            o.push({
              event: "epaper_cancel",
              who: cancel_form.cemail.value + " : " + a
            }), $("#cancel_form")[0].reset()
          }
          console.log(e)
        },
        error: function(e) {
          var a = e.responseText;
          alert("發生錯誤。請再試一次，或嘗試聯絡客服"), console.log(a)
        },
        complete: function() {
          $("#cancel_form .btn-ctrl .loading").remove()
        }
      })
    }
  }
  
  return !1
}