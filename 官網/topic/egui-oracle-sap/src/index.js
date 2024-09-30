// import formatNumber from './format-number';
import * as theFn from './function.js';
import $ from "jquery";
// import './test.scss';



// if(!theFn.isTouchDevice()){
// }


var recaptcha ='';
$.getScript('https://www.google.com/recaptcha/api.js?render=6LdqGHgUAAAAAEnvUjSIVnIpNsAsyJLUaSGITd7l&hl=zh-TW')
.done(function(){
  grecaptcha.ready(function() {
    grecaptcha.execute('6LdqGHgUAAAAAEnvUjSIVnIpNsAsyJLUaSGITd7l', {action: 'homepage'})
    .then(function(token) {
      recaptcha = token;
      // console.log(recaptcha);
    });
  });
});
const btn = $('#contact_form button');
const $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');

function formCheck(){
  var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  var isPass = true;
  var msg = $('#msg');
  var dataLayer = window.dataLayer || [];

  // $('p.danger').hide();

  $('input,textarea').css('border-width','3px');
  msg.text('');
  msg.css('color','red');

  if(contact_form.company.value.length<1){
    $('#company').css('border-color','red');
    isPass = false;
    dataLayer.push({
      "event": "form_post_block",
      "fail_type": "company"
    });
  }else{
    $('#company').css('border-color','#5cb85c')
  }
  if(contact_form.name.value.length<1){
    $('#name').css('border-color','red');
    isPass = false;
    dataLayer.push({
      "event": "form_post_block",
      "fail_type": "name"
    });
  }else{
    $('#name').css('border-color','#5cb85c')
  }
  if(contact_form.phone.value.length<6){
    $('#phone').css('border-color','red');
    isPass = false;
    dataLayer.push({
      "event": "form_post_block",
      "fail_type": "phone"
    });
  }else{
    $('#phone').css('border-color','#5cb85c')
  }
  if(! pattern.test(contact_form.email.value)){
    $('#email').css('border-color','red');
    isPass = false;
    dataLayer.push({
      "event": "form_post_block",
      "fail_type": "email"
    });
  }else{
    $('#email').css('border-color','#5cb85c')
  }
  if(contact_form.otherRequire.value.length<1){
    $('#otherRequire').css('border-color','red');
    isPass = false;
    dataLayer.push({
      "event": "form_post_block",
      "fail_type": "otherRequire"
    });
  }else{
    $('#otherRequire').css('border-color','#5cb85c')
  }
  var expr = /KiCKtalks|可尼酷樂|http:|https:|goo\.gl|0rz|bit\.ly|<|>|script|\.js|xss|ppt\.cc|lihi\.cc|service\@/i;
  if(expr.test(contact_form.company.value) || expr.test(contact_form.name.value) || expr.test(contact_form.otherRequire.value)){
    msg.text('您輸入的資訊可能有打廣告之嫌疑，若遭誤判還煩請使用其它方式諮詢，謝謝');
    isPass = false;
    dataLayer.push({
      "event": "form_post_block",
      "fail_type": "blocked by js"
    });
  }
  if(isPass){
    var otherRequire = contact_form.otherRequire.value;
    // var budget = contact_form.budget.value;
    var user = {
      product : "eGUI",
      // request : request,
      company : contact_form.company.value,
      phone : contact_form.phone.value,
      // jobTitle : contact_form.jobTitle.value,
      email : contact_form.email.value,
      name : contact_form.name.value,
      company : contact_form.company.value,
      // mobile : mobile,
      otherRequire : otherRequire,
      // knowFrom : $("input[name='knowFrom[]']:checked").map(function(){return $(this).val()}).get(),
      // union : union,
      // kfOther : kfOther,
      // plan : "Y",
      // budget : budget,
      // visit : contact_form.visit.value,
      // epaper : contact_form.epaper.value,
      // epaper : 'N',
      'g-recaptcha-response' : recaptcha
    };

    $.ajax({
      type: "POST",
      url: "post.php",
      data: user,
      beforeSend: function(){
        btn.css({'opacity':'0.5','pointer-events':'none'});
        msg.text('');
        btn.text('送出中');
      }
    }).done(function(data){
      // console.log(data);
      if (typeof data === 'string') {
        data = JSON.parse(data);
      }
      // console.log(data);

      $('.g-recaptcha').css('border','none');
      if(data.ending == 'db'){
        dataLayer.push({
          "event": "form_post_fail",
          "fail_type": "db fail"
        });
        msg.text('伺服器連線出錯，請嘗試用其它方試連絡客服，造成不便還請見諒');
      }else if(data.ending == 'blocked'){
        dataLayer.push({
          "event": "form_post_fail",
          "fail_type": "blocked"
        });
        msg.text('您輸入的資訊可能有打廣告之嫌疑，若遭誤判還煩請使用其它方式諮詢，謝謝');
      }else if(data.ending == 'recaptchaFail'){
        dataLayer.push({
          "event": "form_post_fail",
          "fail_type": "recaptcha Fail:"+JSON.stringify(data.recaptcha)
        });
        msg.text('機器人驗證失敗，請重整後再試一次或使用其它方式諮詢，謝謝');
      }else if(data.ending == 'send'){
        dataLayer.push({
          "event": "form_post_fail",
          "fail_type": "send fail"
        });
        msg.text('SMTP出錯，請嘗試用其它方式諮詢，造成不便還請見諒');
      }else if(data.ending == 'success'){
        dataLayer.push({
          "event": "form_post"
        });
        msg.text('送出成功，我們將盡快與您聯絡');
        msg.css('color','#ffff00');
        btn.hide();
      }
    }).fail(function(jqXHR, status, errorThrown) {
      console.log('header load Error: ' + errorThrown)
      console.log('Status: ' + status)
      console.dir(jqXHR)
      var errMsg;
      if (jqXHR.status === 0) {
        errMsg = 'Not connect. Verify Network.';
      } else if (jqXHR.status == 404) {
        errMsg = 'Requested page not found. [404]';
      } else if (jqXHR.status == 500) {
        errMsg = 'Internal Server Error [500].';
      } else if (status === 'parsererror') {
        errMsg = 'Requested JSON parse failed.';
      } else if (status === 'timeout') {
        errMsg = 'Time out error.';
      } else if (status === 'abort') {
        errMsg = 'Ajax request aborted.';
      } else {
        errMsg = 'Uncaught Error./n' + jqXHR.responseText;
      }
      dataLayer.push({
        "event": "form_post_fail",
        "fail_type": errMsg
      });
      msg.text(errMsg)
    }).always(function(){
      btn.css({'opacity':'1','pointer-events':'all'})
      btn.text('送出');
      // grecaptcha.reset();
    });
  }

  return false;
};

btn.on('click',()=>{
  return formCheck();
});

$(window).on('load',()=>{
  $('#contact_form').show();
});