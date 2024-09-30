<!-- content circles =============================================================================== -->
<aside id="contact-circles" itemscope itemtype="http://www.schema.org/Organization">
  <div class="container circles">
    <h2 class="text-center mb-0">免費諮詢</h2>
    <hr>
    <div class="row justify-content-center text-center" itemprop="contactPoint" itemscope itemtype="http://www.schema.org/ContactPoint">
      <meta itemprop="contactType" content="customer service">
      <div class="col-12 col-sm-6 col-lg-3">
        <a href="tel:+886-2-25221351,,301" rel="nofollow">
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/tel.svg'); ?>
          <address><span itemprop="telephone">+886-2-2522-1351</span><br><sup class="black-color">分機 301 汪小姐</sup></address>
        </a>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <a itemprop="url" href="<?= HOST_LINK ?>contact/" rel="nofollow">
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/contactus.svg'); ?>
          <p>線上諮詢</p>
        </a>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <a href="mailto:jenny@ares.com.tw" rel="nofollow">
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/mail.svg'); ?>
          <address itemprop="email">jenny@ares.com.tw</address>
        </a>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <a href="https://www.ares.com.tw/epaper/subscribe/" rel="nofollow">
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/newsletter.svg'); ?>
          <p>訂閱電子報</p>
        </a>
      </div>
    </div>
  </div>
</aside>
<!-- footer =============================================================================== -->
<footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
  <div id="back-to-top">
    <a href="" title="Back to top" role="button">
      <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="274 364 64 64">
        <path fill="#FFFFFF" d="M299.88,400.547l6.12-6.107l6.12,6.107l1.88-1.88l-8-8l-8,8L299.88,400.547z"/>
        <path fill="none" d="M290,380h32v32h-32V380z"/>
      </svg>
    </a>
  </div>
  <div id="social-btn">
    <div class="social-wrap">
      <a title="社群" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="-20 -20 64 64">
          <path fill="none" d="M0,0h24v24H0V0z"/>
          <path d="M18,16.08c-0.76,0-1.439,0.3-1.96,0.77L8.91,12.7C8.96,12.47,9,12.24,9,12s-0.04-0.47-0.09-0.7l7.05-4.11 C16.5,7.69,17.21,8,18,8c1.66,0,3-1.34,3-3s-1.34-3-3-3s-3,1.34-3,3c0,0.24,0.04,0.47,0.09,0.7L8.04,9.81C7.5,9.31,6.79,9,6,9 c-1.66,0-3,1.34-3,3s1.34,3,3,3c0.79,0,1.5-0.311,2.04-0.811l7.12,4.16c-0.051,0.211-0.08,0.431-0.08,0.65 c0,1.609,1.311,2.92,2.92,2.92s2.92-1.311,2.92-2.92S19.609,16.08,18,16.08z"/>
        </svg>
      </a>
      <ul>
        <li>
          <a href="https://www.youtube.com/user/AresTaiwan" rel="external nofollow" accesskey="y" title="資通 youtube 頻道">
            <svg width="48" height="48" viewBox="-12 -12 48 48">
              <path d="M19.016,3.508H4.984C2.231,3.508,0,5.74,0,8.494v7.014c0,2.752,2.231,4.984,4.984,4.984h14.031 c2.753,0,4.984-2.232,4.984-4.984V8.494C24,5.74,21.769,3.508,19.016,3.508z M15.645,12.342l-6.563,3.129 c-0.176,0.084-0.377-0.043-0.377-0.236V8.777c0-0.195,0.207-0.322,0.383-0.234l6.563,3.326 C15.846,11.967,15.842,12.248,15.645,12.342z"/>
            </svg>
          </a>
        </li>
        <li>
          <a href="https://www.facebook.com/AresInternational/" rel="external nofollow" title="資通粉絲團">
            <svg width="48" height="48" viewBox="-12 -12 48 48">
              <path d="M17.999,0.006L14.888,0c-3.496,0-5.756,2.318-5.756,5.906v2.725H6.002c-0.271,0-0.49,0.219-0.49,0.488v3.945 c0,0.271,0.219,0.49,0.49,0.49h3.129v9.956C9.131,23.781,9.351,24,9.62,24h4.084c0.27,0,0.488-0.219,0.488-0.488v-9.957h3.66 c0.27,0,0.487-0.219,0.487-0.49l0.002-3.944c0-0.129-0.051-0.254-0.143-0.346c-0.093-0.092-0.218-0.143-0.349-0.143h-3.66V6.322 c0-1.111,0.267-1.674,1.711-1.674h2.097c0.271,0,0.489-0.221,0.489-0.49V0.494C18.489,0.225,18.271,0.006,17.999,0.006z"/>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 col-lg-3">
        <h4>HRM 人資管理</h4>
        <ul>
          <li><a href="<?= HOST_LINK ?>products/modules/hrm">人事資料管理模組</a></li>
          <li><a href="<?= HOST_LINK ?>products/modules/salary">薪資獎金管理模組</a></li>
          <li><a href="<?= HOST_LINK ?>products/modules/attendance">差勤請假管理模組</a></li>
          <li><a href="<?= HOST_LINK ?>products/modules/insurance">地方保險管理模組</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <h4>HRD 人資發展</h4>
        <ul>
          <li><a href="<?= HOST_LINK ?>products/modules/competence">員工職能管理模組</a></li>
          <li><a href="<?= HOST_LINK ?>products/modules/training">教育訓練管理模組</a></li>
          <li><a href="<?= HOST_LINK ?>products/modules/performance">員工績效管理模組</a></li>
          <li><a href="<?= HOST_LINK ?>products/modules/recruit">人才招募管理模組</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <h4>加值服務</h4>
        <ul>
          <li><a href="<?= HOST_LINK ?>products/modules/ess-mss">員工／主管自助系統（ESS／MSS）</a></li>
          <li><a href="<?= HOST_LINK ?>products/modules/e-recruiting">線上招募管理系統</a></li>
          <li><a href="<?= HOST_LINK ?>products/modules/ehr-mobile">人資行動 App（eHR Mobile）</a></li>
          <li><a href="<?= HOST_LINK ?>products/modules/bis">商業智慧系統（BIS）</a></li>
          <li><a href="<?= HOST_LINK ?>products/modules/usp">薪資密封袋</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <h4>專業顧問服務</h4>
        <ul>
          <li><a href="<?= HOST_LINK ?>products/modules/consultant-service">客服網站、日常問題諮詢、遠端偵測服務、定期客戶回訪、定期教育訓練課程</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="b-area py-2">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-7 col-lg-6 order-2 order-sm-1 order-lg-1">
          <small>版權所有 &copy; <span itemprop="copyrightYear"><?= date('Y'); ?></span> <span itemprop="copyrightHolder">資通電腦股份有限公司</span></small>
        </div>
        <div class="col-12 col-sm-5 col-lg-6 order-1 order-sm-2 order-lg-2 text-left text-sm-right">
          <a href="<?= HOST_LINK ?>sitemap/" accesskey="m"><small>網站地圖</small></a> | <a href="https://www.ares.com.tw/privacy/" rel="external nofollow noopener" target="_blank"><small>隱私權聲明</small></a>
        </div>
      </div>
    </div>
  </div>
</footer>