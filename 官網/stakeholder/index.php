<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$page['title']='利害人專區 | 資通電腦';
$page['description']='資通電腦員工專區、投資人專區、策略夥伴專區、聯絡我們';
$page['canonical']='https://www.ares.com.tw/stakeholder/';
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<style>
.stakeholder-place-title{
	display: inline-block;
	border-bottom:2px solid #2858aa;
	padding-bottom:4px;
	margin:1rem 0 4px;
}
</style>
  <figure class="slider">
    <img class="img-fluid lazyload" data-src="/img/service/stakeholder-banner-400.png" alt="*">
    <figcaption class="color-white">
      <div class="h5"><img src="/img/service/services-icon.svg" alt="*">利害人專區</div>
    </figcaption>
  </figure>
  <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">利害人專區</span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
  </div>
  <section>
    <h1 class="text-center" id="關注議題與溝通管道">關注議題與溝通管道</h1>
    <hr>
    <div class="container text-center">
      <p class="">以下提供資通各利害關係人關注議題與溝通管道，欲進一步了解相關資訊請點選各利害關係人專區</p>
      <ul class="row text-center h5">
        <li class="col-6 col-md-3">
          <a href="//web.ares.com.tw/aresoa/">
            <img src="/img/about-ares/stakeholder/stakeholder-icon-aresoa2.png" alt="員工專區" class="img-fluid">
            <div>員工專區</div>
          </a>
        </li>
        <li class="col-6 col-md-3 wow fadeInLeft">
          <a href="/governance/">
            <img src="/img/about-ares/stakeholder/stakeholder-icon-investor.png" alt="投資人專區" class="img-fluid">
            <div>投資人專區</div>
          </a>
        </li>
        <li class="col-6 col-md-3 wow fadeInLeft">
          <a href="/partners/#partners">
            <img src="/img/about-ares/stakeholder/stakeholder-icon-partner.png" alt="策略夥伴" class="img-fluid">
            <div>策略夥伴專區</div>
          </a>
        </li>
        <li class="col-6 col-md-3 wow fadeInLeft">
          <a href="/contact/">
            <img src="/img/about-ares/stakeholder/stakeholder-icon-contact.png" alt="contact" class="img-fluid">
            <div>聯絡我們</div>
          </a>
        </li>
      </ul>
    </div>
  </section>
  <section>
    <h2 class="text-center">利害關係人</h2>
    <hr>
    <div class="container">
      <h3 class="color-blue stakeholder-place-title">股東／投資人</h3>
      <div class="row">
        <div class="col-4 col-md-2">
          <strong>關切議題</strong>
          <ul class="decimal">
            <li>經營策略及展望</li>
            <li>經營績效</li>
            <li>誠信經營</li>
            <li>公司治理</li>
            <li>企業責任</li>
          </ul>
        </div>
        <div class="col-8 col-md-7">
          <strong>溝通管道、回應方式及頻率</strong>
          <ul class="decimal">
                  <li>每年召開一次股東常會。</li>
                  <li>每年至少召開兩次法人說明會。</li>
                  <li>公司財務資訊及重大訊息均依規定揭露於公司網站及公開資訊觀測站。</li>
                  <li>公司網站設立電子郵件信箱與聯絡電話，為投資者與公司之間建立暢通的溝通管道。</li>
                </ul>
        </div>
        <div class="col-12 col-md-3">
          <strong>聯絡窗口</strong>
          <ul>
            <li>丁小姐</li>
            <li>（02）2522-1351#813</li>
            <li>shiawyi@ares.com.tw</li>
          </ul>
        </div>
      </div>
      <h3 class="color-blue stakeholder-place-title">客戶</h3>
      <div class="row">
        <div class="col-4 col-md-2">
          <strong>關切議題</strong>
          <ul class="decimal">
                  <li>服務滿意度</li>
                  <li>社會責任</li>
                  <li>產品品質</li>
                  <li>公司治理</li>
                  <li>經營績效</li>
                </ul>
        </div>
        <div class="col-8 col-md-7">
          <strong>溝通管道、回應方式及頻率</strong>
          <ul class="decimal">
                  <li>公司針對日常業務，主要以拜訪、電話、EMAIL、會議等方式與客戶溝通。</li>
                  <li>每年不定期舉辦用戶活動。</li>
                  <li>每年不定期舉辦客戶滿意度問卷調查。</li>
                </ul>
        </div>
        <div class="col-12 col-md-3">
          <strong>聯絡窗口</strong>
          <ul>
                  <li>汪小姐</li>
                  <li>（02）2522-1351#301</li>
                  <li>jenny@ares.com.tw</li>
                </ul>
        </div>
      </div>
      <h3 class="color-blue stakeholder-place-title">供應商</h3>
      <div class="row">
        <div class="col-4 col-md-2">
          <strong>關切議題</strong>
          <ul class="decimal">
                  <li>供應商管理</li>
                  <li>誠信經營</li>
                  <li>技術能力</li>
                  <li>價格競爭力</li>
                </ul>
        </div>
        <div class="col-8 col-md-7">
          <strong>溝通管道、回應方式及頻率</strong>
          <ul class="decimal">
                  <li>公司針對日常業務，主要以電話、EMAIL 等方式與供應商溝通。</li>
                  <li>請供應商簽立供應商承諾書，並善盡企業社會責任等。</li>
                  <li>每年進行供應商評鑑。</li>
                </ul>
        </div>
        <div class="col-12 col-md-3">
          <strong>聯絡窗口</strong>
          <ul>
                  <li>余小姐</li>
                  <li>（02）2522-1351#381</li>
                  <li>carrie1415@ares.com.tw</li>
                </ul>
        </div>
      </div>
      <h3 class="color-blue stakeholder-place-title">員工</h3>
      <div class="row">
        <div class="col-4 col-md-2">
          <strong>關切議題</strong>
          <ul class="decimal">
                  <li>福利薪酬、健康安全</li>
                  <li>人才發展及培育</li>
                  <li>人權</li>
                  <li>多元溝通管道</li>
                  <li>經營績效</li>
                </ul>
        </div>
        <div class="col-8 col-md-7">
          <strong>溝通管道、回應方式及頻率</strong>
          <ul class="decimal">
                  <li>每年定期提供員工健康檢查並有醫師諮詢。</li>
                  <li>不定期舉辦員工大會，溝通公司經營方針與成果。</li>
                  <li>不定期舉辦員工滿意度調查。</li>
                  <li>設有員工申訴管道，可即時回應員工意見。</li>
                </ul>
        </div>
        <div class="col-12 col-md-3">
          <strong>聯絡窗口</strong>
          <ul>
                  <li>余小姐</li>
                  <li>（02）2522-1351#381</li>
                  <li>carrie1415@ares.com.tw</li>
                </ul>
        </div>
      </div>
          <!-- <table class="table">
            <thead>
              <tr>
                <th>利害關係人</th>
                <th>關切議題</th>
                <th>溝通管道、回應方式及頻率</th>
                <th width="48">聯絡窗口</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>股東／投資人</td>
                <td><ul class="decimal">
                  <li>經營策略及展望</li>
                  <li>經營績效</li>
                  <li>誠信經營</li>
                  <li>公司治理</li>
                  <li>企業責任</li>
                </ul></td>
                <td><ul class="decimal">
                  <li>每年召開一次股東常會。</li>
                  <li>每年至少召開兩次法人說明會。</li>
                  <li>公司財務資訊及重大訊息均依規定揭露於公司網站及公開資訊觀測站。</li>
                  <li>公司網站設立電子郵件信箱與聯絡電話，為投資者與公司之間建立暢通的溝通管道。</li>
                </ul></td>
                <td width="48"><ul>
                  <li>丁小姐</li>
                  <li>（02）2522-1351#813</li>
                  <li>shiawyi@ares.com.tw</li>
                </ul></td>
              </tr>
              <tr>
                <td>客戶</td>
                <td><ul class="decimal">
                  <li>服務滿意度</li>
                  <li>社會責任</li>
                  <li>產品品質</li>
                  <li>公司治理</li>
                  <li>經營績效</li>
                </ul></td>
                <td><ul class="decimal">
                  <li>公司針對日常業務，主要以拜訪、電話、EMAIL、會議等方式與客戶溝通。</li>
                  <li>每年不定期舉辦用戶活動。</li>
                  <li>每年不定期舉辦客戶滿意度問卷調查。</li>
                </ul></td>
                <td width="48"><ul>
                  <li>汪小姐</li>
                  <li>（02）2522-1351#301</li>
                  <li>jenny@ares.com.tw</li>
                </ul></td>
              </tr>
              <tr>
                <td>供應商</td>
                <td><ul class="decimal">
                  <li>供應商管理</li>
                  <li>誠信經營</li>
                  <li>技術能力</li>
                  <li>價格競爭力</li>
                </ul></td>
                <td><ul class="decimal">
                  <li>公司針對日常業務，主要以電話、EMAIL 等方式與供應商溝通。</li>
                  <li>請供應商簽立供應商承諾書，並善盡企業社會責任等。</li>
                  <li>每年進行供應商評鑑。</li>
                </ul></td>
                <td width="48"><ul>
                  <li>余小姐</li>
                  <li>（02）2522-1351#381</li>
                  <li>carrie1415@ares.com.tw</li>
                </ul></td>
              </tr>
              <tr>
                <td>員工</td>
                <td><ul class="decimal">
                  <li>福利薪酬、健康安全</li>
                  <li>人才發展及培育</li>
                  <li>人權</li>
                  <li>多元溝通管道</li>
                  <li>經營績效</li>
                </ul></td>
                <td><ul class="decimal">
                  <li>每年定期提供員工健康檢查並有醫師諮詢。</li>
                  <li>不定期舉辦員工大會，溝通公司經營方針與成果。</li>
                  <li>不定期舉辦員工滿意度調查。</li>
                  <li>設有員工申訴管道，可即時回應員工意見。</li>
                </ul></td>
                <td width="48"><ul>
                  <li>余小姐</li>
                  <li>（02）2522-1351#381</li>
                  <li>carrie1415@ares.com.tw</li>
                </ul></td>
              </tr>
            </tbody>
          </table> -->
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
</html>

