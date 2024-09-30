<div id="consult-section" class="section" data-nosnippet>
  <form class="container" id="consult_form" name="consult_form" method="post" onsubmit="return formCheck();">
    <!-- <div class="row py-3 mb-3 main-bg fff-color">
      <div class="col-12 col-md-4">電話：+886-2-2522-1351 分機 301 汪小姐</div>
      <div class="col-12 col-md-4">Email：jenny@ares.com.tw</div>
    </div> -->
    <h2 class="h3 text-center hr">立即預約專人諮詢</h2>
    <fieldset>
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="input-area">
            <input type="text" name="company" id="company" size="40" autocomplete="billing organization" placeholder="服務單位*">
            <label for="company">服務單位 *</label>
            <p class="danger er1">請填寫服務單位</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="input-area">
            <input type="text" name="department" id="department" size="40" placeholder="部門*">
            <label for="department">部門 *</label>
            <p class="danger er5">請填寫部門</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="input-area">
            <input type="text" name="name" id="name" size="30" autocomplete="billing given-name" placeholder="姓名*">
            <label for="name">姓名 *</label>
            <p class="danger er2">請填寫姓名</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="input-area">
            <input type="text" name="jobTitle" id="jobTitle" size="40" autocomplete="billing organization-title" placeholder="職稱*">
            <label for="jobTitle">職稱 *</label>
            <p class="danger er6">請填寫職稱</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="input-area">
            <input type="tel" name="phone" id="phone" autocomplete="billing tel" placeholder="電話1*">
            <label for="phone">電話1 *</label>
            <p class="danger er3">請填寫電話</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="input-area">
            <input type="tel" name="mobile" id="mobile" autocomplete="billing mobile" placeholder="電話2">
            <label for="mobile">電話2</label>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="input-area">
            <input type="text" name="email" id="email" autocomplete="billing email" placeholder="Email*">
            <label for="email"> Email *</label>
            <p class="danger er4">請填寫 Email</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <label class="d-none" for="budget">預計導入費用<span class="red">*</span></label>
          <select name="budget" id="budget" class="w-100">
            <option value="" selected disabled>預計導入費用*</option>
            <option value="目前尚未編列預算">目前尚未編列預算</option>
            <option value="101 萬～300 萬">101 萬～300 萬</option>
            <option value="301 萬～500 萬">301 萬～500 萬</option>
            <option value="1001 萬以上">1001 萬以上</option>
          </select>
          <p class="danger er8">請選取項目</p>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <label class="d-none" for="how">消息來源<span class="red">*</span></label>
          <select name="knowFrom" id="how" class="w-100">
            <option value="" selected disabled>消息來源*</option>
            <option value="資通電子報">資通電子報</option>
            <option value="資通粉絲團">資通粉絲團</option>
            <option value="G搜">Google 搜尋</option>
            <option value="Y搜">bing、yahoo、百度等搜尋</option>
            <option value="Gemini">Google AI（Gemini）</option>
            <option value="Copilot">Bing Chat（Copilot）</option>
            <option value="ChatGPT">ChatGPT</option>
            <option value="參加研討會">參加研討會</option>
            <option value="媒體報導">媒體報導</option>
            <option value="親友、同事介紹">親友、同事介紹</option>
            <option value="資通同仁介紹">資通同仁介紹</option>
            <option value="其他">其他</option>
          </select>
          <p class="danger er7">請選取項目</p>
          <input type="text" name="howother" id="howother">
        </div>
        <div class="col-12">
          <label class="d-none" for="otherRequire">需求說明</label>
          <p class="danger max200">簡短敘述即可，將有專人與您聯繫</p>
          <textarea name="otherRequire" id="otherRequire" rows="4" placeholder="需求說明（若敘述較長可考慮 email 諮詢：jenny@ares.com.tw）"></textarea>
        </div>
        <div class="col-12 mt-4">
          <div class="fff-bg p-3 border">
            <div class="h5 mb-1">資通電子報</div>
            <div class="ares-checkbox">
              <label for="echeck"><input type="checkbox" name="echeck" id="echeck" value="1"> 訂閱（若勾選將會收到一封確認信）</label>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-5 text-center">
        <div class="col-12">
          <span class="ares-checkbox">
            <label for="agree"><input type="checkbox" name="agree" id="agree" checked> 我已詳閱並同意<a href="https://www.ares.com.tw/privacy/" rel="noopener noreferrer" target="_blank" id="pop-agree" class="main-color">資通電腦隱私權聲明</a><span class="red">*</span></label>
          </span>
          <p class="danger er11 text-center">未勾選</p>
        </div>
        <div class="col-12 mt-3 ">
          <div class="g-recaptcha" data-sitekey="6LcpDzsUAAAAAM2npS4P_R4_uYYeQHbPMIuBERk-"></div>
        </div>
      </div>
    </fieldset>
    <div class="container text-center btn-ctrl mt-3" id="submit-area">
      <button type="button" class="btn mb-3 p-3 px-5" id="submit-button"><span>表單送出</span></button>
     </div>
  </form>
</div>