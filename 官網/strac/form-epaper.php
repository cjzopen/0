    <h2 class="text-center">訂閱</h2>
    <hr>
    <form id="consult_form" method="post" name="consult_form" onsubmit="return formCheck();">
      <div class="float-box" style="padding-top: 2rem">
        <div class="container">
          <fieldset class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
              <label for="company">服務單位 </label>
              <input type="text" name="company" id="company">
              <label for="name">姓名 <span class="danger">*</span></label>
              <p class="danger er2"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 請填寫姓名</p>
              <input type="text" name="name" id="name" value="<?= isset($_GET['name']) ? $_GET['name'] : '' ?>">
              <label for="email">Email <span class="danger">*</span></label>
              <p class="danger er4"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 請填寫 Email</p>
              <input type="text" name="email" id="email" value="<?= isset($_GET['mail']) ? $_GET['mail'] : '' ?>">
            </div>
          </fieldset>
        </div>
      </div>
      <div class="float-box" style="padding-top: 2rem">
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
            <p class="danger er12 text-center col-xs-12"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 未驗證</p>
            <div class="col-xs-12 text-center">
              <div class="g-recaptcha" data-sitekey="6LcpDzsUAAAAAM2npS4P_R4_uYYeQHbPMIuBERk-" id="example1"></div>
            </div>
            <div class="col-xs-12 btn-ctrl" style="padding-top: 2rem">
              <button type="submit" class="button button--ujarak button--border-medium button--round-s button--text-thin button--size"><span>送出</span></button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <script src="https://www.google.com/recaptcha/api.js?zh-TW"></script>