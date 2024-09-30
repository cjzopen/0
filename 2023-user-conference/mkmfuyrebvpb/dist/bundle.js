window.addEventListener("load", function() {
  var css = document.querySelector('link[rel=preload]');
  css.rel='stylesheet';
});

var supportPromise = ('Promise' in window);
if(!supportPromise){
  $.ajax({
    url: "/dist/promise-polyfill.js",
    dataType: "script",
    async: false
  });
}
function question_text(e){
  return e.closest('.question').find('.h5').text();
}


// $('input[name=f4]').change(function(){
//   if(this.value =='yes'){
//     $('#budget-slider').slideDown();
//   }else{
//     $('#budget-slider').hide();
//   }
// });

(function(){
  var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  var isPass = true;
  $(document).on('click','#send',function(){
    var $this = $(this);
    if(! pattern.test(consult_form.email.value)){
      isPass = false;
      Swal.fire({
        type: 'error',
        title: 'Email 格式錯誤'
      });
    }
    if(consult_form.name.value.length<2){
      isPass = false;
      Swal.fire({
        type: 'error',
        title: '姓名未填'
      });
    }
    if(consult_form.company.value.length<1){
      isPass = false;
      Swal.fire({
        type: 'error',
        title: '公司未填'
      });
    }
    if(consult_form.department.value.length<1){
      isPass = false;
      Swal.fire({
        type: 'error',
        title: '部門未填'
      });
    }
    if(consult_form.jobtitle.value.length<1){
      isPass = false;
      Swal.fire({
        type: 'error',
        title: '職稱未填'
      });
    }
    if(consult_form.phone.value.length<5){
      isPass = false;
      Swal.fire({
        type: 'error',
        title: '手機未填'
      });
    }
    if(!consult_form.c1.value || !consult_form.c2.value || !consult_form.c3.value || !consult_form.c4.value || !consult_form.c5.value || ! $("input[name='c6[]']:checked").val()){
      isPass = false;
      Swal.fire({
        type: 'error',
        title: '有問題未勾選'
      });
    }
    // if(!consult_form.budget.value){
    //   isPass = false;
    //   Swal.fire({
    //     type: 'error',
    //     title: '是否導入未勾選'
    //   });
    // }
    if(isPass){
      $.ajax({
        type: "POST",
        url: 'post.php', //暫時設定的回傳data
        data: {
          company:consult_form.company.value,
          department:consult_form.department.value,
          jobtitle:consult_form.jobtitle.value,
          name:consult_form.name.value,
          phone:consult_form.phone.value,
          email:consult_form.email.value,
          question:Array(
            question_text($("input[name='c1']")),
            question_text($("input[name='c2']")),
            question_text($("input[name='c3']")),
            question_text($("input[name='c4']")),
            question_text($("input[name='c5']")),
            question_text($("input[name='c6[]']"))
          ),
          answer:Array(
            consult_form.c1.value,
            consult_form.c2.value,
            consult_form.c3.value,
            consult_form.c4.value,
            consult_form.c5.value,
            $("input[name='c6[]']:checked").map(function(){return $(this).val()}).get().toString()
          ),
          // budget:consult_form.budget.value,
          advise:consult_form.advise.value
        },
        beforeSend: function(){
          $this.hide();
        }
      })
      .done(function(data){
        data = JSON.parse(data);
        if(data.block){
          Swal.fire({
            type: 'error',
            title: '輸入錯誤',
            text:data.block
          });
        }
        else if(data.db){
          Swal.fire({
            type: 'error',
            title: '資料庫連線錯誤',
            text:data.db
          });
        }
        else if(data.success){
          Swal.fire({
            type: 'success',
            title: '送出成功',
            text:'問卷填寫完成'
          })
          .then((result) => {
            $this.removeAttr('id');
            $this.removeClass('btn btn-success');
            $this.html('送出成功');
          });
        }else{
          Swal.fire({
            type: 'error',
            title: '不明錯誤',
            text:'請再試一次，或嘗試與我們聯絡'
          });
        }
      })
      .fail(function(x,e){
        var txt;
        if (x.status==0) {
          txt='You are offline!!\n Please Check Your Network.';
        } else if(x.status==404) {
          txt='Requested URL not found.';
        } else if(x.status==500) {
          txt='Internel Server Error.';
        } else if(e=='parsererror') {
          txt='Error.\nParsing JSON Request failed.';
        } else if(e=='timeout'){
          txt='Request Time out.';
        } else {
          txt='Unknow Error.';
        }
        console.log(x.responseText);
        Swal.fire({
          type: 'error',
          title: txt,
          text:'請再試一次，或嘗試與我們聯絡'
        });
      })
      .always(function(){
        $this.show();
      });
    }
  });
})();



