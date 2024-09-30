<?php
session_start();
if (!isset($_SESSION['consult-ares'])) {
  include 'login.php';
  exit;
}
?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>來電或來信諮詢</title>
  <link rel="stylesheet" href="bootstrap4.css">
  <meta name="robots" content="noindex, nofollow">
  <!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSBQD89');</script> -->
</head>
<body>
<style>
input[type="text"],input[type="tel"],textarea{-webkit-appearance:none;-moz-appearance:none;border-radius:3px;border:1px solid #707070;padding-left:0.375rem;padding-right:1.875rem;transition:all 0.4s ease;transition-property:border,background-color,color,box-shadow,padding;line-height:1;margin-bottom:1.25rem;height:2rem;display:block;width:100%}input[type="text"]:focus,input[type="tel"]:focus,textarea:focus{background-color:#fff;border:1px solid #cb1218;outline:none;transition:all 0.4s ease;transition-property:border,background-color,color,box-shadow,padding}label,[type="range"]{display:block;width:100%}[type="range"]{-webkit-appearance:none;-moz-appearance:none;appearance:none;background:transparent}[type="range"]::-webkit-slider-runnable-track{background:#97ccd8;border:none;border-radius:6px;height:.5rem}[type="range"]::-moz-range-track{background:#97ccd8;border:none;border-radius:6px;height:.5rem}[type="range"]::-webkit-slider-thumb{-webkit-appearance:none;border:none;height:1.25rem;width:1.25rem;border-radius:50%;background:#323232;margin-top:-.375rem}[type="range"]::-moz-range-thumb{border:none;height:1.25rem;width:1.25rem;border-radius:50%;background:#323232}[type="range"]::-ms-fill-lower{background-color:#2c6977;border-radius:6px}[type="range"]::-ms-fill-upper{background-color:#97ccd8;border-radius:6px}[type="range"]::-ms-thumb{border:none;height:1.25rem;width:1.25rem;border-radius:50%;background:#323232}[type="range"]::-ms-track{border-color:transparent;border-width:6px 0;color:transparent}[type="range"]:-moz-focusring{outline:1px solid transparent;outline-offset:-1px}[type="range"]:focus{outline:none}textarea{resize:vertical;overflow-x:hidden;height:auto}.ares-checkbox label{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAASCAYAAAC5DOVpAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAALiIAAC4iAari3ZIAAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAdklEQVQ4T2O8du3a/yNHjjD8/PmTgVygpKTE4OXlxcA4a9as/yCDREREGNjZ2aHSxIM3b96AHWJra8vAOHny5P8ggyIiIqDSpIFTp06BsZmZGQMTSIAcF2EDYMOoBUYNIx2MGkY6GOSGUVL8IAPqFkHUKxy9GAAm4zlQZUv65AAAAABJRU5ErkJggg==);background-repeat:no-repeat;background-size:1.25rem 1.25rem;background-position:center left;margin:0;padding-left:1.5rem;cursor:pointer;display:inline-block;width:auto;white-space:nowrap}.ares-checkbox [type="checkbox"]{display:none}.ares-checkbox [type="checkbox"]:checked+label{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAASCAYAAAC5DOVpAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAALiIAAC4iAari3ZIAAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAABeklEQVQ4T62Uv0sCYRjHv5qIUhnCVVx3FThU1tDQ0tbWfiDU3ODs0OzQ7CC4NbTa0OzQX9DSYFBDg6BIkndgXJT2C/N5fTw9fa0u/IDcPc/LfXy+z8H5TNNsFwoF2LaN/6IoCgzDgC+fz7cty0I9NIM3f4CP/87cRwuRzi8ej8OXy+Xa1Mxs7IlDryy/PuGgUoSmafBzzxO70Wmc78SQXlO508WzbHM2hNPtVSE8WlE6dZhPPMoigSkhoqsMR6aHg0jFFrE/H+GOGxJQND0U5A5wVrFw99zkakBG+VOxBfHPMmF6XRURe1yaNk7ua1x1cWSDo2e2dNeDNHFCjXKFzjQtHN9WuerjyC5qDb5z7yaxFBUT97A/v5C8KYvrMH3ZQ8MlpN0Mv34SHF6XUG2+c8eNIyNodNpFD4o6GJ92RBHH4ZIRJJQ9kC3VxfQ/MSKT7YTiZ0uPXI1nREbQTmg3V40XEVv25mRIZQRFJWGyWObO70z2EzS5j6OBbwkvoF0ZzwgwAAAAAElFTkSuQmCC)}.ares-checkbox [type="text"]{display:inline-block;width:15rem;margin:0}.alert{border-color:#cb1218 !important;background-color:#f8b1b3 !important}
ul,ol{list-style:none;}.mailname{user-select: none;cursor: pointer;}
</style>
  <div id="all" class="container mx-auto pb-5">
    <h1 class="text-center mb-5 py-5">來電或來信諮詢</h1>
    <p>若來信有附件，或圖文並茂，沒辦法就用原本在outlook轉寄的方式。</p>
    <p>有任何問題，請聯絡行銷部。</p>
    <form id="consult_form" name="consult_form" method="post">
      <section>
        <div class="p-3">
          你是誰<span class="text-danger" aria-hidden="true">*</span>
          <select class="w-100 p-2" name="user" id="user">
            <option value="" disabled selected>請選擇</option>
            <option value="jenny@ares.com.tw">jenny@ares.com.tw</option>
            <option value="daphnelu@ares.com.tw">daphnelu@ares.com.tw</option>
            <option value="chloe.chu@ares.com.tw">chloe.chu@ares.com.tw</option>
            <option value="clair.chueh@ares.com.tw">clair.chueh@ares.com.tw</option>
            <option value="ouying@ares.com.tw">ouying@ares.com.tw</option>
            <option value="iris1858@ares.com.tw">iris1858@ares.com.tw</option>
            <option value="ting1890@ares.com.tw">ting1890@ares.com.tw</option>
          </select>
        </div>
        <div class="p-3">
          來源<span class="text-danger" aria-hidden="true">*</span>
          <select class="w-100 p-2" name="source" id="source">
            <option value="潛客來電（台北）" selected>潛客來電（台北）</option>
            <option value="潛客來電（新竹）">潛客來電（新竹）</option>
            <option value="潛客來信（台北）">潛客來信（台北）</option>
            <option value="潛客來信（新竹）">潛客來信（新竹）</option>
            <option value="潛客來電（M1）">潛客來電（M1）</option>
          </select>
        </div>
        <div class="p-3">
          <label for="product">產品 <span class="text-danger" aria-hidden="true">*</span></label>
          <select class="w-100 p-2" name="product" id="product">
            <option value="" disabled selected>請選擇</option>
            <optgroup label="商業服務">
              <option value="ciMes">ciMes</option>
              <option value="IoT">IoT 物聯網解決方案</option>
              <option value="HCP">HCP</option>
              <option value="招募管理">招募管理系統</option>
              <option value="薪資密封袋">薪資密封袋</option>
              <option value="eGUI">eGUI 電子發票管理系統</option>
              <option value="GV">GV 統一發票管理系統</option>
              <option value="LT">NM / GIB / 十號公報</option>
              <option value="ORACLE">Oracle EPR、升級、維護、客製</option>
              <option value="GD-CRM">GD-CRM</option>
              <option value="財報自編">財報自編</option>
            </optgroup>
            <optgroup label="金融服務">
              <option value="AFEIS">AFEIS 國內外匯整合系統</option>
              <option value="Ares Cross Pricing System">ACPS 衍生性金融商品評價系統</option>
              <option value="eAresBank">eAresBank 海外分行核心系統</option>
              <option value="ARES Nuntio">ARES Nuntio 法規報表申報平台</option>
              <option value="Ares Smart Core Banking System">ASCBS 大陸核心系統</option>
              <option value="ARES Treasury System">ARES Treasury System 財務交易系統</option>
              <option value="ARES Portfolio System">ARES Portfolio System 投資組合管理系統</option>
              <option value="AML">AML 洗錢防制解決方案</option>
              <option value="KYC">KYC 混合雲名單掃描系統</option>
              <option value="Visual Pricing Tool">Visual Pricing Tool 視覺化圖型工具</option>
              <option value="ISDASIMM">ISDA SIMM 原始保證金合規</option>
              <option value="FXNS">FXNS 外匯議價系統</option>
            </optgroup>
            <optgroup label="資訊安全">
              <option value="ARES-PP">ARES-PP</option>
              <option value="uPKI">uPKI</option>
              <option value="Comodo">Comodo</option>
              <option value="Fortify">Fortify</option>
              <option value="Knowbe4">Knowbe4</option>
            </optgroup>
            <optgroup label="服務與支援">
              <option value="outsourcing">委外服務</option>
              <option value="GOV">政府專案</option>
              <option value="SI">系統整合開發</option>
              <option value="其它合作">其它</option>
            </optgroup>
          </select>
        </div>
        <fieldset class="container">
          <div class="row">
            <legend class="col-12 d-block d-sm-none h4">聯絡資訊</legend>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="company">服務單位 <span class="text-danger" aria-hidden="true">*</span></label>
              <input type="text" name="company" id="company" size="40" autocomplete="billing organization">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="department">部門 </label>
              <input type="text" name="department" id="department" size="40">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="name">姓名 <span class="text-danger" aria-hidden="true">*</span></label>
              <input type="text" name="name" id="name" size="30" autocomplete="billing given-name">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="jobTitle">職稱 </label>
              <input type="text" name="jobTitle" id="jobTitle" size="40" autocomplete="billing organization-title">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="phone">電話1 <span class="text-danger" aria-hidden="true">*</span></label>
              <input type="tel" name="text" id="phone" autocomplete="billing tel">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="mobile">電話2</label>
              <input type="tel" name="text" id="mobile" autocomplete="billing mobile">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="email"> Email </label>
              <input type="text" name="email" id="email" autocomplete="billing email">
            </div>
            <div class="col-12 col-sm-12 col-lg-12">
              <label for="otherRequire">說明 (<span id="otherRequire-length"></span>)</label>
              <textarea name="otherRequire" id="otherRequire" rows="6" placeholder="不要有特殊符號"></textarea>
            </div>
          </div>
        </fieldset>
      </section>
      <section class="gray-bg">
        <div class="container">
          <div class="row">
            <fieldset class="col-12 col-sm-6 col-lg-6">
              <legend class="mb-1 h4 mt-0">得知資通產品管道<span class="text-danger" aria-hidden="true">*</span></legend>
              <ul id="how-area">
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how1" value="資通電子報">
                  <label for="how1">資通電子報</label>
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how2" value="資通粉絲團">
                  <label for="how2">資通粉絲團</label>
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how3" value="G搜">
                  <label for="how3">Google 搜尋</label>
                  <input type="text" placeholder="您搜尋之關鍵字" name="kfGoogle" id="kfGoogle" class="d-none">
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how4" value="Y搜">
                  <label for="how4">Yahoo 或其它搜尋</label>
                  <input type="text" placeholder="您搜尋之關鍵字" name="kfYahoo" id="kfYahoo" class="d-none">
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how5" value="參加研討會">
                  <label for="how5">參加研討會</label>
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how7" value="媒體報導">
                  <label for="how7">媒體報導</label>
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how8" value="親友、同事介紹">
                  <label for="how8">親友、同事介紹</label>
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how9" value="資通同仁介紹">
                  <label for="how9">資通同仁介紹</label>
                </li>
                <li class="ares-checkbox mb-2">
                  <input type="checkbox" name="knowFrom[]" id="how10" value="其他">
                  <label for="how10">其他</label>
                  <input type="text" placeholder="請說明" name="kfOther" id="kfOther" class="d-none">
                </li>
              </ul>
            </fieldset>
            <fieldset class="col-12 col-sm-6 col-lg-6">
              <legend class="mb-1 h4 mt-0">預計導入費用<span class="text-danger" aria-hidden="true">*</span></legend>
              <input class="my-3" type="range" id="budget" name="budget" min="0" max="800" value="1">
              <div id="budget-text">尚未導入預算</div>
            </fieldset>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-5"><img class="img-fluid" loading="lazy" width="" height="" src="send.jpg" alt="*"></div>
            <div class="col-12 col-md-7">
            <label for="othersend"><span class="text-danger">（預設只會寄給M1和Jenny）</span>要寄給誰： </label>
              <textarea placeholder="用英文 , 區隔，禁止空白鍵" name="othersend" id="othersend" class="w-100"></textarea>
              <div class="d-flex flex-wrap">
                <span class="mailname p-2 m-1 border rounded-pill" title="林聖懿">frank@ares.com.tw</span>
                <span class="mailname p-2 m-1 border rounded-pill" title="林青龍">cllin@ares.com.tw</span>
                <span class="mailname p-2 m-1 border rounded-pill" title="黃峻嘯">huang140@ares.com.tw</span>
                <span class="mailname p-2 m-1 border rounded-pill" title="蔡明璋">dean1512@ares.com.tw</span>
                <span class="mailname p-2 m-1 border rounded-pill" title="甯怡彰">ycning@ares.com.tw</span>
                <span class="mailname p-2 m-1 border rounded-pill" title="曾文光">jacky1423@ares.com.tw</span>
                <span class="mailname p-2 m-1 border rounded-pill" title="廖婉孜">vita@ares.com.tw</span>
                <span class="mailname p-2 m-1 border rounded-pill" title="徐康正">kevinhsu1414@ares.com.tw</span>
                <span class="mailname p-2 m-1 border rounded-pill" title="奚碩年">tomhsi@ares.com.tw</span>
                <span class="mailname p-2 m-1 border rounded-pill" title="劉逸傑">andyliu@ares.com.tw</span>
                <span class="mailname p-2 m-1 border rounded-pill" title="李宜純">ritalee1735@ares.com.tw</span>
                <span class="mailname p-2 m-1 border rounded-pill" title="留麗娟">jennyliu1531@ares.com.tw</span>
                <span class="mailname p-2 m-1 border rounded-pill" title="陳靜木棻">fion@ares.com.tw</span>
                <span class="mailname p-2 m-1 border rounded-pill" title="盧姵丞">daphnelu@ares.com.tw</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container text-center btn-ctrl mt-3">
          <button type="button" class="btn btn-primary mb-3 w-25" id="submit-button"><span>送 出</span></button>
        </div>
      </section>
    </form>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="sweetalert2@8.js"></script>
<script src="script.js?7"></script>
<script>
$('.mailname').on('click',function(){
  var $this = $(this)
  var othersend_temp = $('#othersend').val();
  if(othersend_temp){
    $('#othersend').val(othersend_temp+','+$this.text());
  }else{
    $('#othersend').val($this.text());
  }
})
</script>
</body>
</html>