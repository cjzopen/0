
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <title>資通電腦用戶大會問卷調查</title>
  <meta name="description" content="">
  <meta name="robots" content="noindex,nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&amp;subset=chinese-traditional&display=swap" as="style" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/style.css">
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSBQD89');</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="dist/sweetalert2@8.js"></script>
</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSBQD89" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?php
$expiration = '2023-11-08 17:30:00';
$today = date('Y-m-d H:i:s');
$compare = strtotime($expiration) - strtotime($today);
if ($compare < 0) {
  echo '<p class="text-center">活動已結束。</p>';
  echo '<p class="text-center">謝謝您的支持！</p>';
exit;
}
?>
  <div id="all">
    <form class="card py-4 px-3 px-md-5" name="consult_form" id="consult_form" onsubmit="return false;">
      <h1 class="h4 mb-3">資通電腦用戶大會問卷調查</h1>
      <div id="block1" class="block">
        <div class="text-group">
          <input type="text" id="company" name="company" required>
          <span class="bar"></span>
          <label>公司</label>
        </div>
        <div class="d-flex">
          <div class="text-group w-50 pr-2">
            <input type="text" id="department" name="department" required>
            <span class="bar"></span>
            <label>部門</label>
          </div>
          <div class="text-group w-50 pl-2">
            <input type="text" id="jobtitle" name="jobtitle" required>
            <span class="bar"></span>
            <label>職稱</label>
          </div>
        </div>
        <div class="text-group">
          <input type="text" id="name" name="name" required>
          <span class="bar"></span>
          <label>姓名</label>
        </div>
        <div class="text-group">
          <input type="tel" id="phone" name="phone" required>
          <span class="bar"></span>
          <label>電話</label>
        </div>
        <div class="text-group">
          <input type="email" id="email" name="email" required>
          <span class="bar"></span>
          <label>Email</label>
        </div>
        <div class="pt-4">
          <div class="btn btn-success" id="block1_end">繼續</div>
        </div>
      </div>
      <div id="block2" class="block">
        <div class="h4">您對本次活動各方面的滿意程度？</div>
        <div class="question">
          <div class="h5 mt-5">會議場地</div>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_1" value="5"><span>非常滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_1" value="4"><span>滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_1" value="3"><span>普通</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_1" value="2"><span>不滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_1" value="1"><span>非常不滿意</span></label>
          <div class="text-group why">
            <input type="text" id="block2_1_why" name="block2_1_why" placeholder="原因是什麼？">
            <span class="bar"></span>
          </div>
        </div>
        <div class="question">
          <div class="h5 mt-5">早午茶點</div>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_2" value="5"><span>非常滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_2" value="4"><span>滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_2" value="3"><span>普通</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_2" value="2"><span>不滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_2" value="1"><span>非常不滿意</span></label>
          <div class="text-group why">
            <input type="text" id="block2_2_why" name="block2_2_why" placeholder="原因是什麼？">
            <span class="bar"></span>
          </div>
        </div>
        <div class="question">
          <div class="h5 mt-5">用餐場地</div>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_3" value="5"><span>非常滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_3" value="4"><span>滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_3" value="3"><span>普通</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_3" value="2"><span>不滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_3" value="1"><span>非常不滿意</span></label>
          <div class="text-group why">
            <input type="text" id="block2_3_why" name="block2_3_why" placeholder="原因是什麼？">
            <span class="bar"></span>
          </div>
        </div>
        <div class="question">
          <div class="h5 mt-5">午餐餐點</div>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_4" value="5"><span>非常滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_4" value="4"><span>滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_4" value="3"><span>普通</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_4" value="2"><span>不滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_4" value="1"><span>非常不滿意</span></label>
          <div class="text-group why">
            <input type="text" id="block2_4_why" name="block2_4_why" placeholder="原因是什麼？">
            <span class="bar"></span>
          </div>
        </div>
        <div class="question">
          <div class="h5 mt-5">場地動線</div>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_5" value="5"><span>非常滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_5" value="4"><span>滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_5" value="3"><span>普通</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_5" value="2"><span>不滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_5" value="1"><span>非常不滿意</span></label>
          <div class="text-group why">
            <input type="text" id="block2_5_why" name="block2_5_why" placeholder="原因是什麼？">
            <span class="bar"></span>
          </div>
        </div>
        <div class="question">
          <div class="h5 mt-5">整體流程</div>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_6" value="5"><span>非常滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_6" value="4"><span>滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_6" value="3"><span>普通</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_6" value="2"><span>不滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_6" value="1"><span>非常不滿意</span></label>
          <div class="text-group why">
            <input type="text" id="block2_6_why" name="block2_6_why" placeholder="原因是什麼？">
            <span class="bar"></span>
          </div>
        </div>
        <div class="question">
          <div class="h5 mt-5">服務人員態度</div>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_7" value="5"><span>非常滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_7" value="4"><span>滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_7" value="3"><span>普通</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_7" value="2"><span>不滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block2_7" value="1"><span>非常不滿意</span></label>
          <div class="text-group why">
            <input type="text" id="block2_7_why" name="block2_7_why" placeholder="原因是什麼？">
            <span class="bar"></span>
          </div>
        </div>
        <div class="pt-4">
          <div class="btn btn-success" id="block2_end">繼續</div>
        </div>
      </div>
      <div id="block3" class="block">
        <div class="h4">您對本次議題的滿意程度？</div>
        <div class="question">
          <div class="h5 mt-5">資通數位新策略 (上午場)</div>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_1" value="5"><span>非常滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_1" value="4"><span>滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_1" value="3"><span>普通</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_1" value="2"><span>不滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_1" value="1"><span>非常不滿意</span></label>
          <div class="text-group why">
            <input type="text" id="block3_1_why" name="block3_1_why" placeholder="原因是什麼？">
            <span class="bar"></span>
          </div>
        </div>
        <div class="question">
          <div class="h5 mt-5">企業永續發展的挑戰與契機 (上午場)</div>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_2" value="5"><span>非常滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_2" value="4"><span>滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_2" value="3"><span>普通</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_2" value="2"><span>不滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_2" value="1"><span>非常不滿意</span></label>
          <div class="text-group why">
            <input type="text" id="block3_2_why" name="block3_2_why" placeholder="原因是什麼？">
            <span class="bar"></span>
          </div>
        </div>
        <div class="question">
          <div class="h5 mt-5">勤美集團 數位轉型 (下午場)</div>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_3" value="5"><span>非常滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_3" value="4"><span>滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_3" value="3"><span>普通</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_3" value="2"><span>不滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_3" value="1"><span>非常不滿意</span></label>
          <div class="text-group why">
            <input type="text" id="block3_3_why" name="block3_3_why" placeholder="原因是什麼？">
            <span class="bar"></span>
          </div>
        </div>
        <div class="question">
          <div class="h5 mt-5">心臟保養 健康生活 (下午場)</div>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_4" value="5"><span>非常滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_4" value="4"><span>滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_4" value="3"><span>普通</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_4" value="2"><span>不滿意</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block3_4" value="1"><span>非常不滿意</span></label>
          <div class="text-group why">
            <input type="text" id="block3_4_why" name="block3_4_why" placeholder="原因是什麼？">
            <span class="bar"></span>
          </div>
        </div>
        <div class="pt-4">
          <div class="btn btn-success" id="block3_end">繼續</div>
        </div>
      </div>
      <div id="block4" class="block">
        <div class="h4">數位轉型規劃</div>
        <div class="" id="company-type">
          <div class="h5 mt-5">貴單位是銀行、金融相關行業嗎？</div>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block4_1" value="yes"><span>是</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block4_1" value="no"><span>否</span></label>
        </div>
        <div class="question supplement" id="products">
          <div class="h5 mt-5">貴單位有預計導入哪些解決方案（可複選）</div>
          <label class="radio-label"><input type="checkbox" class="option-input radio" name="block4_2[]" value="MES"><span>MES</span></label>
          <label class="radio-label"><input type="checkbox" class="option-input radio" name="block4_2[]" value="HR系統"><span>HR 系統</span></label>
          <label class="radio-label"><input type="checkbox" class="option-input radio" name="block4_2[]" value="Oracle ERP"><span>Oracle ERP</span></label>
          <label class="radio-label notbank"><input type="checkbox" class="option-input radio" name="block4_2[]" value="電子發票系統"><span>電子發票系統</span></label>
          <label class="radio-label"><input type="checkbox" class="option-input radio" name="block4_2[]" value="招募管理系統"><span>招募管理系統</span></label>
          <label class="radio-label"><input type="checkbox" class="option-input radio" name="block4_2[]" value="財報自編方案"><span>財報自編方案</span></label>
          <label class="radio-label bank"><input type="checkbox" class="option-input radio" name="block4_2[]" value="AML洗錢防制"><span>AML 洗錢防制</span></label>
          <label class="radio-label bank"><input type="checkbox" class="option-input radio" name="block4_2[]" value="法規報表申報"><span>法規報表申報</span></label>
          <label class="radio-label bank"><input type="checkbox" class="option-input radio" name="block4_2[]" value="財務交易系統"><span>財務交易系統</span></label>
          <label class="radio-label bank"><input type="checkbox" class="option-input radio" name="block4_2[]" value="原始保證金解決方案"><span>原始保證金解決方案</span></label>
          <label class="radio-label bank"><input type="checkbox" class="option-input radio" name="block4_2[]" value="衍伸性金融商品"><span>衍伸性金融商品</span></label>
          <label class="radio-label bank"><input type="checkbox" class="option-input radio" name="block4_2[]" value="國內外匯系統"><span>國內外匯系統</span></label>
          <label class="radio-label bank"><input type="checkbox" class="option-input radio" name="block4_2[]" value="海外分行核心系統"><span>海外分行核心系統</span></label>
          <label class="radio-label bank"><input type="checkbox" class="option-input radio" name="block4_2[]" value="投資組合管理系統"><span>投資組合管理系統</span></label>
          <label class="radio-label bank"><input type="checkbox" class="option-input radio" name="block4_2[]" value="外匯議價系統"><span>外匯議價系統</span></label>
          <label class="radio-label bank"><input type="checkbox" class="option-input radio" name="block4_2[]" value="視覺化圖型工具"><span>視覺化圖型工具</span></label>
          <label class="radio-label"><input type="checkbox" class="option-input radio" name="block4_2[]" value="文件加密"><span>文件加密</span></label>
          <label class="radio-label"><input type="checkbox" class="option-input radio" name="block4_2[]" value="源碼檢測"><span>源碼檢測</span></label>
          <label class="radio-label"><input type="checkbox" class="option-input radio" name="block4_2[]" value="端點安全"><span>端點安全</span></label>
          <label class="radio-label"><input type="checkbox" class="option-input radio" name="block4_2[]" value="資安課程平台"><span>資安課程平台</span></label>
          <label class="radio-label"><input type="checkbox" class="option-input radio" name="block4_2[]" value="憑證驗證服務"><span>憑證驗證服務</span></label>
          <label class="radio-label"><input type="checkbox" class="option-input radio" name="block4_2[]" value="委外服務"><span>委外服務</span></label>
          <label class="radio-label"><input type="checkbox" class="option-input radio" name="block4_2[]" value="系統整合開發"><span>系統整合開發</span></label>
        </div>
        <div class="question">
          <div class="h5 mt-5">預算規劃</div>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block4_3" value="低於 100 萬"><span>低於 100 萬</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block4_3" value="100至500 萬"><span>100-500 萬</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block4_3" value="500至1000 萬以上"><span>500-1,000 萬以上</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block4_3" value="1000 萬以上"><span>1,000 萬以上</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block4_3" value="其它："><span>其它</span></label>
          <div class="text-group why">
            <input type="text" id="block4_3_why" name="block4_3_why" placeholder="其它：">
            <span class="bar"></span>
          </div>
        </div>
        <div class="question">
          <div class="h5 mt-5">導入規劃</div>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block4_4" value="半年內"><span>半年內</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block4_4" value="半年到一年"><span>半年到一年</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block4_4" value="一年到一年半"><span>一年到一年半</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block4_4" value="一年半到二年"><span>一年半到二年</span></label>
          <label class="radio-label"><input type="radio" class="option-input radio" name="block4_4" value="其它："><span>其它</span></label>
          <div class="text-group why">
            <input type="text" id="block4_4_why" name="block4_4_why" placeholder="其它：">
            <span class="bar"></span>
          </div>
        </div>
        <div class="pt-4">
          <div class="btn btn-success" id="block4_end">繼續</div>
        </div>
      </div>
      <div id="block5" class="block">
        <div class="h4">服務與建議</div>
        <div class="question supplement">
          <div class="h5 mt-5">會後希望我們提供的服務（可複選）</div>
          <label class="radio-label"><input type="checkbox" class="option-input radio" name="block5_1[]" value="派員作更詳盡的產品解說"><span>派員作更詳盡的產品解說</span></label>
          <label class="radio-label"><input type="checkbox" class="option-input radio" name="block5_1[]" value="提供產品或服務的方案及報價"><span>提供產品或服務的方案及報價</span></label>
          <label class="radio-label"><input type="checkbox" class="option-input radio" name="block5_1[]" value="收到資通電子報"><span>收到資通電子報</span></label>
          <label class="radio-label"><input type="checkbox" class="option-input radio" name="block5_1[]" value="收到資通研討會資訊"><span>收到資通研討會資訊</span></label>
          <label class="radio-label"><input type="checkbox" class="option-input radio" name="block5_1[]" value="其它："><span>其它</span></label>
          <div class="text-group why">
            <input type="text" id="block5_1_why" name="block5_1_why" placeholder="其它：">
            <span class="bar"></span>
          </div>
        </div>
        <div>
          <div class="h5 mt-5 mb-3">您對本次活動的建議或對資通電腦期望合作方向？</div>
          <div class="text-group">
            <input type="text" id="advise" name="advise">
            <span class="bar"></span>
          </div>
        </div>
        <div class="pt-4">
          <div class="btn btn-success" id="block5_end">繼續</div>
        </div>
      </div>
      <div id="block6" class="block">
        <div class="h4">感謝您的回饋</div>
        <div class="h5 py-5">📣 請保留本頁截圖，以利兌換贈品。</div>
      </div>
    </form>
    <footer class="text-center mt-3">
      <small>感謝您的參與！歡迎隨時與我們聯繫：<a href="mailto:iris1858@ares.com.tw">iris1858@ares.com.tw</a><br><a href="https://www.ares.com.tw/privacy/" rel="noopener noreferrer" target="_blank">隱私權聲明</a><br>&copy;copyright 2023 資通電腦股份有限公司</small>
    </footer>
  </div>
<script>
// history.pushState(null,null,'問卷.html');
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
const pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
var isPass = false;
const areas = $('.block');
$('#products').hide();
areas.hide();
$('#block1').show();
$(document).on('click','#block1_end',function(){
  isPass = true;
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
      title: '電話未填'
    });
  }
  if(isPass){
    $(window).scrollTop(0);
    areas.hide();
    $('#block2').fadeIn();
  }
});
$(document).on('click','#block2_end',function(){
  isPass = true;
  if(!$('#consult_form [name="block2_1"]:checked').val()){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '會議場地未勾選'
    });
  }
  if(!$('#consult_form [name="block2_2"]:checked').val()){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '早午茶點未勾選'
    });
  }
  if(!$('#consult_form [name="block2_3"]:checked').val()){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '用餐場地未勾選'
    });
  }
  if(!$('#consult_form [name="block2_4"]:checked').val()){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '午餐餐點未勾選'
    });
  }
  if(!$('#consult_form [name="block2_5"]:checked').val()){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '場地動線未勾選'
    });
  }
  if(!$('#consult_form [name="block2_6"]:checked').val()){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '整體流程未勾選'
    });
  }
  if(!$('#consult_form [name="block2_7"]:checked').val()){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '服務人員態度未勾選'
    });
  }
  if(isPass){
    $(window).scrollTop(0);
    areas.hide();
    $('#block3').fadeIn();
  }
});
$(document).on('click','#block3_end',function(){
  isPass = true;
  if(!$('#consult_form [name="block3_1"]:checked').val()){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '資通數位新策略未勾選'
    });
  }
  if(!$('#consult_form [name="block3_2"]:checked').val()){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '企業永續發展的挑戰與契機未勾選'
    });
  }
  if(!$('#consult_form [name="block3_3"]:checked').val()){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '勤美集團 數位轉型未勾選'
    });
  }
  if(!$('#consult_form [name="block3_4"]:checked').val()){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '心臟保養 健康生活未勾選'
    });
  }
  if(isPass){
    $(window).scrollTop(0);
    areas.hide();
    $('#block4').fadeIn();
  }
});
$(document).on('click','#block4_end',function(){
  isPass = true;
  if(isPass){
    $(window).scrollTop(0);
    areas.hide();
    $('#block5').fadeIn();
  }
});
$(document).on('click','#block5_end',function(){
  isPass = true;
  if($('#consult_form [name="block5_1[]"]:checked').map(function(){return $(this).val()}).get().toString().includes('其它') && consult_form.block5_1_why.value.length<1){
    isPass = false;
    Swal.fire({
      type: 'error',
      title: '其它欄未填寫'
    });
  }
  // if(!$('#consult_form [name="block5_1[]"]:checked').val()){
  //   isPass = false;
  //   Swal.fire({
  //     type: 'error',
  //     title: '會後希望我們提供的服務未勾選'
  //   });
  // }
  if(isPass){
    $(window).scrollTop(0);
    areas.hide();
    $('#block6').fadeIn();
  }
});
// $('#phone').on('input', function() {
//   $(this).val($(this).val().replace(/[^a-z]/gi, ''));
// });
$("#phone").on('keypress keyup blur input',function(e){
 let keyCode = e.which;
 /* 
 48-57 - (0-9)Numbers
 65-90 - (A-Z)
 97-122 - (a-z)
 */
 if((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122)){
   e.preventDefault();
 }
});
$('#consult_form [name="block2_1"],#consult_form [name="block2_2"],#consult_form [name="block2_3"],#consult_form [name="block2_4"],#consult_form [name="block2_5"],#consult_form [name="block2_6"],#consult_form [name="block2_7"],#consult_form [name="block3_1"],#consult_form [name="block3_2"],#consult_form [name="block3_3"],#consult_form [name="block3_4"]').on('change',function(){
  let $this = $(this);
  if($this.val()<=3){
    $this.parent('label').siblings('.why').slideDown(200);
  }else{
    $this.parent('label').siblings('.why').hide();
  }
})
// 產品數量控制
$(document).on('change','#consult_form [name="block4_1"]',function(){
  let $this = $(this).val();
  if($this == 'yes'){
    $('.notbank').hide();
    $('.bank').show();
  }else{
    $('.bank').hide();
    $('.notbank').show();
  }
  $('#company-type').hide();
  $('#products').show();
});
$('#consult_form [name="block4_3"],#consult_form [name="block4_4"]').on('change',function(){
  let $this = $(this);
  if($this.val().includes('其它')){
    $this.parent('label').siblings('.why').slideDown(200);
  }else{
    $this.parent('label').siblings('.why').hide();
  }
})
$('#consult_form [name="block5_1[]"]').on('change',function(){
  let $this = $(this);
  console.log($('#consult_form [name="block5_1[]"]:checked').map(function(){return $(this).val()}).get().toString())
  if($('#consult_form [name="block5_1[]"]:checked').map(function(){return $(this).val()}).get().toString().includes('其它')){
    $this.parent('label').siblings('.why').slideDown(200);
  }else{
    $this.parent('label').siblings('.why').hide();
  }
});
(function(){
  
  var isPass = true;
  $(document).on('click','#send',function(){
    var isPass = true;
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
    if(!consult_form.c1.value || !consult_form.c2.value || !consult_form.c3.value || !consult_form.c4.value || !consult_form.c5.value || ! $("input[name='c7[]']:checked").val()){
      isPass = false;
      Swal.fire({
        type: 'error',
        title: '有問題未填寫或勾選'
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
            question_text($("input[name='c6']")),
            question_text($("input[name='c7[]']"))
          ),
          answer:Array(
            consult_form.c1.value,
            consult_form.c2.value,
            consult_form.c3.value,
            consult_form.c4.value,
            consult_form.c5.value,
            consult_form.c6.value,
            $("input[name='c7[]']:checked").map(function(){return $(this).val()}).get().toString()+' '+consult_form.advisec7.value,
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
</script>
</body>
</html>