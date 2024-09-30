<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] ='HCP人資系統免費諮詢';
$page['description']='想了解HR系統如何提升人事、薪資、差勤、保險等管理效益？歡迎填寫服務表單留下聯絡資訊，將有專員盡速與您聯繫提供服務。';
$page['css']=array('/css/contact.css');
$hreflang=array(
  array(
    'lang'=>'en',
    'url'=>'https://hcp.ares.com.tw/en/contact/'
  )
);
require(PHP_WEB_ROOT.'/template/head.php');
?>
<div class="all" id="contact">
<?php
include(PHP_WEB_ROOT.'/template/menu.php');
aimg(
  '/img/contact/contact-banner-1366.jpg', //圖片
  '/img/contact/contact-banner-360.jpg 360w, /img/contact/contact-banner-720.jpg 720w, /img/contact/contact-banner-1366.jpg 1366w, /img/contact/contact-banner-1440.jpg 1440w', //srcset
  'HR線上諮詢', //alt
  '<h1>免費諮詢</h1>', //圖片上的字
  null //字的 class
);
?>
  <main>
    <nav class="breadcrumb" aria-label="breadcrumb" role="navigation">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $nowUrl ?>" itemprop="item"><span itemprop="name">免費諮詢</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </nav>
    <noscript>
      <style>#consult_form{display:none;}</style>
      <div class="container py-5">
        <p class="sub-color">您使用的系統封鎖了此頁面的 JavaScript</p>
        <h2 class="main-color">聯絡我們</h2>
        <address class="col-12 col-sm-6 col-lg-3 mb-0">
          <ul>
            <li>Email：<span>daphnelu@ares.com.tw</span></li>
            <li>電話：<span>+886-3-5716622 ext. 714</span></li>
            <li>傳真：<span>+886-3-5717889</span></li>
          </ul>
        </address>
      </div><br>
    </noscript>
    <form id="consult_form" name="consult_form" method="post" onsubmit="return formCheck();">
      <section>
        <fieldset class="container">
          <div class="row">
            <legend class="col-12 d-block d-sm-none h4">聯絡資訊</legend>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="company">服務單位 <span class="red">*</span></label>
              <p class="danger er1">☹ 請填寫服務單位</p>
              <input type="text" name="company" id="company" autofocus size="40" autocomplete="billing organization">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="department">部門 <span class="red">*</span></label>
              <p class="danger er5">☹️ 請填寫部門</p>
              <input type="text" name="department" id="department" size="40">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="name">姓名 <span class="red">*</span></label>
              <p class="danger er2">☹️ 請填寫姓名</p>
              <input type="text" name="name" id="name" size="30" autocomplete="billing given-name">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="jobTitle">職稱 <span class="red">*</span></label>
              <p class="danger er6">☹️ 請填寫職稱</p>
              <input type="text" name="jobTitle" id="jobTitle" size="40" autocomplete="billing organization-title">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="phone">電話 <span class="red">*</span></label>
              <p class="danger er3">☹️ 請填寫電話</p>
              <input type="tel" pattern="[0-9\#\,\)\(\+\-\s]+" name="phone" id="phone" autocomplete="billing tel">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="mobile">手機號碼</label>
              <input type="tel" pattern="[0-9\+\-]*" name="mobile" id="mobile" autocomplete="billing mobile">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="email"> Email <span class="red">*</span></label>
              <p class="danger er4">☹️ 請填寫 Email</p>
              <input type="text" name="email" id="email" autocomplete="billing email">
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
              <label for="otherRequire">需求說明</label>
              <p class="danger max200">✍️ 簡短敘述即可，將有專人與您聯繫</p>
              <textarea name="otherRequire" id="otherRequire" rows="6"></textarea>
            </div>
          </div>
        </fieldset>
      </section>
      <section class="gray-bg">
        <div class="container">
          <div class="row">
            <fieldset class="col-12 col-sm-6 col-lg-6">
              <legend class="mb-1 h4 mt-0">您是如何得知資通產品？<span class="red">*</span></legend>
              <p class="danger er7">☹️ 請至少勾選一個項目</p>
              <ul id="how-area">
                <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how1" value="資通電子報">
                  <label for="how1">資通電子報</label>
                </li>
                <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how2" value="資通粉絲團">
                  <label for="how2">資通粉絲團</label>
                </li>
                <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how3" value="Google搜尋">
                  <label for="how3">Google 搜尋</label>
                  <input type="text" placeholder="您搜尋之關鍵字" name="kfGoogle" id="kfGoogle" class="hidden">
                </li>
                <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how4" value="Yahoo搜尋">
                  <label for="how4">Yahoo 搜尋</label>
                  <input type="text" placeholder="您搜尋之關鍵字" name="kfYahoo" id="kfYahoo" class="hidden">
                </li>
                <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how5" value="參加研討會">
                  <label for="how5">參加研討會</label>
                </li>
                <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how7" value="媒體報導">
                  <label for="how7">媒體報導</label>
                </li>
                <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how8" value="親友介紹">
                  <label for="how8">親友介紹</label>
                </li>
                <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how9" value="同事介紹">
                  <label for="how9">同事介紹</label>
                </li>
                <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how10" value="其他">
                  <label for="how10">其他</label>
                  <input type="text" placeholder="請說明" name="kfOther" id="kfOther" class="hidden">
                  <p class="danger er-kfOther">☹ 說明欄未填寫</p>
                </li>
              </ul>
            </fieldset>
            <fieldset class="col-12 col-sm-6 col-lg-6">
              <legend class="mb-1 h4 mt-0">請問 貴公司預計導入費用為何？<span class="red">*</span></legend>
              <p class="danger er8">☹️ 請選取項目</p>
              <div>(單位：萬元)</div>
              <div class="wrap" style="--min: 0; --max: 100; --val: 0;">
                <input id="budget" name="budget" type="range" list="dl_budget" step="10" value="0">
                <output for="budget">請選擇</output>
                <label for="budget">
                  <!-- <div>(單位：萬元)</div> -->
                  <div class="labels" aria-hidden="true"><span style="--i: 1;">未編預算</span><span style="--i: 3;">300</span><span style="--i: 5;">500</span><span style="--i: 10;">1000</span>
                  </div>
                </label>
                <datalist id="dl_budget">
                  <option value="0" label="0"></option>
                  <option value="100"></option>
                  <option value="200" label="100萬以下"></option>
                  <option value="300"></option>
                  <option value="400" label="300萬以下"></option>
                  <option value="500"></option>
                  <option value="600" label="500萬以下"></option>
                  <option value="700"></option>
                  <option value="800" label="800萬以下"></option>
                  <option value="900"></option>
                  <option value="1000" label="1000萬以上"></option>
                </datalist>
              </div>
<style>
[type='range'] {
  flex: 1;
  margin: 0;
  padding: 0;
  min-height: 1.5em;
  background: transparent;
  font: inherit;
}
[type='range'], [type='range']::-webkit-slider-thumb {
  -webkit-appearance: none;
}
[type='range']::-webkit-slider-runnable-track {
  box-sizing: border-box;
  border: none;
  width: 12.5em;
  height: 0.25em;
  background: #ccc;
}
[type='range']::-moz-range-track {
  box-sizing: border-box;
  border: none;
  width: 12.5em;
  height: 0.25em;
  background: #ccc;
}
[type='range']::-ms-track {
  box-sizing: border-box;
  border: none;
  width: 12.5em;
  height: 0.25em;
  background: #ccc;
}
[type='range']::-webkit-slider-thumb {
  margin-top: -0.625em;
  box-sizing: border-box;
  border: none;
  width: 1.5em;
  height: 1.5em;
  border-radius: 50%;
  background: #f90;
}
[type='range']::-moz-range-thumb {
  box-sizing: border-box;
  border: none;
  width: 1.5em;
  height: 1.5em;
  border-radius: 50%;
  background: #f90;
}
[type='range']::-ms-thumb {
  margin-top: 0;
  box-sizing: border-box;
  border: none;
  width: 1.5em;
  height: 1.5em;
  border-radius: 50%;
  background: #f90;
}
[type='range']::-ms-tooltip {
  display: none;
}
[type='range'] ~ output {
  display: none;
}
.js [type='range'] ~ output {
  display: block;
  position: absolute;
  left: 0.75em;
  top: 0;
  padding: .25em .5em;
  border-radius: 3px;
  transform: translate(calc((var(--val) - var(--min))/(var(--max) - var(--min))*18.5em - 50%));
  background: #6a70ba;
  color: #eee;
}

.wrap {
  display: flex;
  flex-direction: column-reverse;
  position: relative;
  width: 20em;
  height: 5.25em;
  color: #ccc;
  font: 1em/1 trebuchet ms, tahoma, sans-serif;
  margin: 1rem;
}

[type='range'] {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 3em;
  background: repeating-linear-gradient(90deg, #ccc 0, #ccc 2px, transparent 0, transparent 1.85em) calc(.5*(1.5em - 2px)) 1.875em/calc(20em + 2px) 0.75em no-repeat;
  font: inherit;
}
[type='range'], [type='range']::-webkit-slider-thumb {
  -webkit-appearance: none;
}
[type='range']::-webkit-slider-runnable-track {
  box-sizing: border-box;
  border: none;
  width: 14em;
  height: 0.25em;
  background: #ccc;
}
[type='range']::-moz-range-track {
  box-sizing: border-box;
  border: none;
  width: 14em;
  height: 0.25em;
  background: #ccc;
}
[type='range']::-ms-track {
  box-sizing: border-box;
  border: none;
  width: 14em;
  height: 0.25em;
  background: #ccc;
}
[type='range']::-webkit-slider-thumb {
  margin-top: -0.625em;
  box-sizing: border-box;
  border: none;
  width: 1.5em;
  height: 1.5em;
  border-radius: 50%;
  background: #ccc;
}
[type='range']::-moz-range-thumb {
  box-sizing: border-box;
  border: none;
  width: 1.5em;
  height: 1.5em;
  border-radius: 50%;
  background: #ccc;
}
[type='range']::-ms-thumb {
  margin-top: 0;
  box-sizing: border-box;
  border: none;
  width: 1.5em;
  height: 1.5em;
  border-radius: 50%;
  background: #ccc;
}
[type='range']::-ms-tooltip {
  display: none;
}
[type='range']:focus {
  outline: none;
}
[type='range']:focus::-webkit-slider-thumb {
  background: #f90;
}
[type='range']:focus::-moz-range-thumb {
  background: #f90;
}
[type='range']:focus::-ms-thumb {
  background: #f90;
}
[type='range']:focus ~ label span {
  color: #6a70ba;
}
[type='range'] ~ label {
  color: #333;
}
[type='range'] ~ label span {
  color: #ccc;
}

.labels {
  position: absolute;
  bottom: 1.5em;
  left: 0.75em;
}
.labels span {
  position: absolute;
  left: calc(var(--i)*1.85em);
  transform: translate(-50%) scale(0.9);
  font-weight: 700;
  text-align: center;
}
</style>
            </fieldset>
            <div class="col-12">
              <div class="row">
                <div class="col-12 col-sm-6 col-lg-6"></div>
                <fieldset class="col-12 col-sm-6 col-lg-6">
                  <legend class="mb-1 h4 mt-0">資通電子報</legend>
                  <div class="ares-checkbox">
                    <input type="checkbox" name="echeck" id="echeck" value="1">
                    <label for="echeck">訂閱 （若您勾選將會收到一封確認信）</label>
                  </div>
                </fieldset>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <fieldset class="container text-center">
          <div class="row">
            <div class="col-12">
              <span class="ares-checkbox">
                <input type="checkbox" name="agree" id="agree">
                <label for="agree">我已詳閱並同意<a href="javascript:void(0);" id="pop-agree" class="main-color">資通電腦隱私權聲明</a><span class="red">*</span></label>
              </span>
              <p class="danger er11 text-center">☹️ 未勾選</p>
            </div>
            <div class="col-12 mt-3">
              <div class="g-recaptcha" data-sitekey="6LcpDzsUAAAAAM2npS4P_R4_uYYeQHbPMIuBERk-"></div>
            </div>
            <p class="danger er12 text-center col-12">☹️ 未驗證</p>
          </div>
        </fieldset>
        <div class="container text-center btn-ctrl mt-3">
          <button type="submit" class="btn btn-orange mb-3 w-25"><span>送 出</span></button>
        </div>
      </section>
    </form>
<?php
include(PHP_WEB_ROOT.'/template/privacy.php');
?>
  </main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="/js/main.js" defer></script>
<script src="/js/src/check-test.js" defer></script>
<script>
// (function(){
//   var _R = document.getElementById('budget'),
//   _W = _R.parentNode,
//   _O = _R.nextElementSibling;

//   document.documentElement.classList.add('js');

//   _R.addEventListener('input', function(e){
//     if(_R.value==0){
//       _O.value = '請選譯';
//     }else if(_R.value==10){
//       _O.value = '未編預算';
//     }else if(_R.value==20){
//       _O.value = '100~300萬';
//     }else if(_R.value==100){
//       _O.value = '1000萬以上';
//     }else{
//       _O.value = _R.value*10+'萬以下';
//     }
//     _W.style.setProperty('--val', +_R.value);
//   }, false);
// })();
</script>
</body>
</html>