      <br>
      <div class="float-box">
        <div class="container">
          <fieldset class="row">
            <div class="col-xs-12 col-sm-6">
              <label for="company">服務單位 <span class="danger">*</span></label>
              <p class="danger er1"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 請填寫服務單位</p>
              <input type="text" name="company" id="company" size="40">
              <label for="name">聯絡人 <span class="danger">*</span></label>
              <p class="danger er2"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 請填寫姓名</p>
              <input type="text" name="name" id="name" size="30">
              <label for="phone">聯絡電話 <span class="danger">*</span></label>
              <p class="danger er3"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 請填寫電話</p>
              <input type="tel" pattern="[0-9\#\,\)\(\+\-\s]+" name="phone" id="phone" placeholder="0225221351">
              <label for="email">Email <span class="danger">*</span></label>
              <p class="danger er4"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 請填寫 Email</p>
              <input type="text" name="email" id="email">
            </div>
            <div class="col-xs-12 col-sm-6">
              <label for="department">部門 <span class="danger">*</span></label>
              <p class="danger er5"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 請填寫部門</p>
              <input type="text" name="department" id="department" size="40">
              <label for="jobTitle">職稱 <span class="danger">*</span></label>
              <p class="danger er6"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 請填寫職稱</p>
              <input type="text" name="jobTitle" id="jobTitle" size="40">
              <label for="mobile">手機號碼</label>
              <input type="tel" pattern="[0-9\-\+\s\(\)]*" name="mobile" id="mobile" placeholder="0912345678">
              <label for="otherRequire">需求說明</label>
              <p class="danger max200"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 長話短說即可，會有專人與您聯絡。也可使用Email或電話與我們聯絡。</p>
              <textarea name="otherRequire" id="otherRequire" rows="6" placeholder="如需備註需求請粗略填寫即可"></textarea>
            </div>
          </fieldset>
        </div>
      </div>
      <div class="gray-bg">
        <br>
        <div class="container">
          <fieldset class="row">
            <div class="col-xs-12 col-sm-6">
              <h3>您是如何得知資通產品？<span class="danger">*</span></h3>
              <p class="danger er7"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 請至少勾選一個項目</p>
              <ul id="how-area">
                <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how1" value="資通電子報">
                  <label for="how1"></label>
                  <span>資通電子報</span>
                </li>
                <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how2" value="資通粉絲團">
                  <label for="how2"></label>
                  <span>資通粉絲團</span>
                </li>
                <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how3" value="Google搜尋">
                  <label for="how3"></label>
                  <span>Google 搜尋</span>
                  <input type="text" placeholder="您搜尋之關鍵字" name="kfGoogle" id="kfGoogle" class="hidden">
                  <!-- <p class="danger er-kfGoogle"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 未填寫</p> -->
                </li>
                <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how4" value="Yahoo搜尋">
                  <label for="how4"></label>
                  <span>Yahoo, Bing, 百度搜尋</span>
                  <input type="text" placeholder="您搜尋之關鍵字" name="kfYahoo" id="kfYahoo" class="hidden">
                  <!-- <p class="danger er-kfYahoo"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 未填寫</p> -->
                </li>
                <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how5" value="參加研討會">
                  <label for="how5"></label>
                  <span>參加研討會</span>
                </li>
                <!-- <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how6" value="協會">
                  <label for="how6"></label>
                  <span>協會</span>
                  <input type="text" placeholder="請說明" name="union" id="union">
                  <p class="danger er-union"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 說明欄未填寫</p>
                </li> -->
                <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how7" value="媒體報導">
                  <label for="how7"></label>
                  <span>媒體報導</span>
                </li>
                <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how8" value="親友介紹">
                  <label for="how8"></label>
                  <span>親友介紹</span>
                </li>
                <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how9" value="同事介紹">
                  <label for="how9"></label>
                  <span>同事介紹</span>
                </li>
                <li class="ares-checkbox">
                  <input type="checkbox" name="knowFrom[]" id="how10" value="其他">
                  <label for="how10"></label>
                  <span>其他</span>
                  <input type="text" placeholder="請說明" name="kfOther" id="kfOther" class="hidden">
                  <p class="danger er-kfOther"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 說明欄未填寫</p>
                </li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-6">
              <h3>請問 貴公司預計導入費用為何？<span class="danger">*</span></h3>
              <p class="danger er8"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 請選取項目</p>
              <ul>
<?php
if(isset($budget_range) && is_array($budget_range) && count($budget_range) > 1){
  echo '<li><input type="radio" name="budget" value="'.reset($budget_range).' 萬以下"><span>'.reset($budget_range).' 萬以下</span></li>';
  foreach ($budget_range as $key=>$value) {
    // if ($value === reset($budget_range)) {}
    if ($value === end($budget_range)){
      echo '<li><input type="radio" name="budget" value="'.($value+1).' 萬以上"><span>'.($value+1).' 萬以上</span></li>';
    }else{
      echo '<li><input type="radio" name="budget" value="'.($value+1).'萬～'.($budget_range[$key+1]).' 萬"><span>'.($value+1).'萬～'.($budget_range[$key+1]).' 萬</span></li>';
    }
  }
}else{
  echo '<li>
                  <input type="radio" name="budget" value="100 萬以下">
                  <span>100 萬以下</span>
                </li>
                <li>
                  <input type="radio" name="budget" value="101 萬～500 萬">
                  <span>101 萬～500 萬</span>
                </li>
                <li>
                  <input type="radio" name="budget" value="501 萬～1000 萬">
                  <span>501 萬～1000 萬</span>
                </li>
                <li>
                  <input type="radio" name="budget" value="1001 萬以上">
                  <span>1001 萬以上</span>
                </li>';
}
?>

                <li>
                  <input type="radio" name="budget" value="目前尚未編列預算">
                  <span>目前尚未編列預算</span>
                </li>
              </ul>
              <!-- <h3>您是否希望資通專業顧問主動拜訪，為您提供相關諮詢服務？<span class="danger">*</span></h3>
              <p class="danger er9"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 請選取項目</p>
              <input type="radio" name="visit" id="visitYes" value="Y">
              <span> 是 </span>
              <input type="radio" name="visit" id="visitNo" value="N">
              <span> 否</span> -->
              <!-- <h3>是否訂閱資通電子報</h3>
              <ul>
                <li class="ares-checkbox">
                  <input type="checkbox" name="epaper" id="epaper" value="Y" checked>
                  <label for="epaper"></label>
                  <span>是</span>
                </li>
              </ul> -->
            </div>
            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-12 col-sm-6"></div>
                <div class="col-xs-12 col-sm-6">
                  <h3>資通電子報</h3>
                  <div class="ares-checkbox">
                    <input type="checkbox" name="echeck" id="echeck" value="1">
                    <label for="echeck"></label>
                    <span>訂閱 （若您勾選將會收到一封確認信）</span>
                  </div>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
      </div>
      <br>
      <div class="float-box">
        <div class="container text-center">
          <div class="row">
            <div class="col-xs-12">
              <span class="ares-checkbox">
                <input type="checkbox" name="agree" id="agree">
                <label for="agree"></label>
                <span>我已詳閱並同意<a href="javascript:void(0);" id="pop-agree" class="main-color">資通電腦隱私權聲明</a></span><span class="danger">*</span>
              </span>
              <p class="danger er11 text-center"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 未勾選</p>
            </div>
            <br><br>
            <div class="col-xs-12">
              <div class="g-recaptcha" data-sitekey="6LcpDzsUAAAAAM2npS4P_R4_uYYeQHbPMIuBERk-"></div>
              <span class="danger" style="vertical-align: top">*</span>
            </div>
            <p class="danger er12 text-center col-xs-12"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 未驗證</p>
            <br><br>
            <div class="col-xs-12 btn-ctrl">
              <button type="submit" class="button button--ujarak button--border-medium button--round-s button--text-thin button--size"><span>送出訊息</span></button>
            </div>
          </div>
        </div>
      </div>
<?php
include('privacy.php');
?>