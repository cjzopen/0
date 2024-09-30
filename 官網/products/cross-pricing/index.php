<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='衍生性金融商品評價系統 - 資通電腦';
$page['description']='提供即時評價、試算，幫助金融業面對突發狀況，順應 LIBOR 退場、巴塞爾協定（Basel III）等法規，即時掌握投資損益，做出最佳決策判斷。';
$page['canonical']='https://www.ares.com.tw/products/cross-pricing/';
$page['css']=array('/css/product-acps1.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
include (__DIR__.'/_banner.php');
?>
  <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../" itemprop="item"><span itemprop="name">產品類別</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" itemprop="item"><span itemprop="name">Ares Cross Pricing System</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
<?php
include (__DIR__.'/_nav.php');
?>
  </div>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 d-none d-md-block text-center">
          <img src="/img/product/cross-pricing/cross-pricing.svg" alt="*" class="img-fluid" width="280" height="255">
        </div>
        <div class="col-12 col-md-6">
          <h1 class="underline">衍生性金融商品評價系統</h1>
          <p class="justify">資通電腦衍生性金融商品評價系統（Ares Cross Pricing System）能支援各式結構型金融商品與衍生性金融商品，提供即時評價、試算；且無需學習專業語法的金融評價系統。幫助金融產業在面對市場突發狀況時，做出最佳決策判斷的智慧工具。更可搭配資通電腦投資組合管理系統（ARES Portfolio System），藉由直覺性的視覺化操作體驗與創新服務概念，讓銀行端使用者買賣金融商品時能充分瞭解商品全貌並即時掌握投資損益。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center">系統特色</h2><hr>
      <div class="row">
      <figure class="col-12 col-md-4 text-center order-md-2 mb-3">
        <img src="/img/product/cross-pricing/cross-pricing-2.svg" alt="彈性、即時與經濟" class="img-fluid">
      </figure>
      <div class="col-12 col-md-4 order-md-1">
        <div class="bg-white p-3 rounded mb-3">
          <div class="h5 color-orange">彈性</div>
          <ul class="disc">
            <li>可整合銀行端前台 / 後台系統</li>
            <li>多種評價模型</li>
            <li>提供各式風險情境分析</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-md-4 order-md-3">
        <div class="bg-white p-3 rounded mb-3">
          <div class="h5">即時</div>
          <ul class="disc">
            <li>與金管法規同步</li>
            <li>GPU 運算提升 8 倍效能</li>
          </ul>
        </div>
        <div class="bg-white p-3 rounded mb-3">
          <div class="h5 color-blue2">經濟</div>
          <ul class="disc">
            <li>無需自行開發評價模型</li>
            <li>無須培養資訊工程團隊</li>
            <li>外商品質合理收費</li>
          </ul>
        </div>
      </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">系統功能</h2>
      <hr>
      <ul class="disc">
        <li>支援多樣金融商品評價，含各式新奇選擇權、IRS/CCS、結構型債券、可轉換債券等</li>
        <li>提供前台交易試算</li>
        <li>提供評價後擔保品暨保證金計算之用</li>
        <li>計算希臘字母（Greeks），以利操作避險策略參考與中台風險監控</li>
        <li>計算 VaR、敏感度分析、情境分析提供中台做風險管理決策依據</li>
        <li>提供多樣且適當的 LIBOR 退場所需評價模型</li>
      </ul>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center">衍生性金融商品評價系統解決以下困擾</h2>
      <hr>
      <div class="row">
          <div class="panel mb-3 col-12 col-md-6">
            <div class="p-3 bg-blue color-white h5 mb-0" role="tab">既有的前、後台系統無法處理評價需求</div>
            <div class="bg-white border border-top-0 p-3" role="tabpanel">
              <ul class="disc">
                <li>彈性調整與客製評價系統模型</li>
                <li>依評價需求加入 GPU 運算</li>
              </ul>
            </div>
          </div>
          <div class="panel mb-3 col-12 col-md-6">
            <div class="p-3 bg-blue color-white h5 mb-0" role="tab">評價系統需因應金檢順應法規</div>
            <div class="bg-white border border-top-0 p-3" role="tabpanel">
              <ul class="disc">
                <li>提供評價說明文件</li>
                <li>提供驗證報告書</li>
                <li>順應 Basel III 規定，提供所需量化數字</li>
                <li>提供 LIBOR 退場評價轉換機制</li>
              </ul>
            </div>
          </div>
          <div class="panel mb-3 col-12 col-md-6">
            <div class="p-3 bg-blue color-white h5 mb-0" role="tab">無龐大資訊團隊，但需評價支援</div>
            <div class="bg-white border border-top-0 p-3" role="tabpanel">
              <ul class="disc">
                <li>
                  <span class="plus">多種評價模型</span>
                  <ul class="decimal">
                    <li>B-S model</li>
                    <li>二項樹模型</li>
                    <li>蒙地卡羅模擬法 + 變異數縮減法</li>
                    <li>隨機波動度模型
                      <ul class="disc">
                      <li>Heston Model</li>
                      </ul>
                    </li>
                    <li>隨機利率模型
                      <ul class="disc">
                      <li>殖利率曲線建構</li>
                      <li>Vasicek Model</li>
                      <li>CIR Model</li>
                      <li>BDT Model</li>
                      <li>Hull &amp; White Model</li>
                      <li>BGM Model (用於結構型商品)</li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <span class="plus">支援多種衍生性金融商品</span>
                  <ul class="decimal">
                    <li>匯率衍生性金融商品
                      <ul class="disc">
                      <li>European Plain Vanilla Option</li>
                      <li>Bermuda Plain Vanilla Option</li>
                      <li>American Plain Vanilla Option</li>
                      <li>One-Touch Digital</li>
                      <li>No-Touch Digital</li>
                      <li>Cash-Or-Nothing Option</li>
                      <li>Knock-In Forward</li>
                      <li>Knock-Out Forward</li>
                      <li>Knock Into Forward</li>
                      <li>Range Resettable Forward</li>
                      <li>Dual Currency Range Resettable Forward</li>
                      <li>Discrete Barrier Option</li>
                      <li>European Barrier Option</li>
                      <li>Double Barrier Option</li>
                      <li>Outside Barrier Option</li>
                      <li>KIKO</li>
                      <li>Asset-Or-Nothing Option</li>
                      <li>Lookback Option</li>
                      <li>Asian Option</li>
                      <li>Flipping Barrier Option</li>
                      <li>Strike Step Call</li>
                      <li>Barrier Reverse Convertibles</li>
                      <li>Ratchet Option</li>
                      <li>Row-Down Option</li>
                      <li>Instalment Option</li>
                      <li>TRF</li>
                      <li>AKO</li>
                      <li>DKO</li>
                      <li>EKO</li>
                      <li>Bonus DKO</li>
                      <li>Bonus</li>
                      <li>Pivot</li>
                      <li>Digital Count</li>
                      </ul>
                    </li>
                    <li>利率衍生性金融商品／簡易型債券
                      <ul class="disc">
                      <li>Bond</li>
                      <li>IRS</li>
                      <li>CCS</li>
                      <li>Cancelable IRS</li>
                      <li>Range Accrual IRS</li>
                      <li>Cap / Floor</li>
                      <li>Swaption</li>
                      <li>Option on Bond</li>
                      <li>Bermuda Swaption</li>
                      </ul>
                    </li>
                    <li>結構型商品
                      <ul class="disc">
                      <li>Convertible Bond</li>
                      <li>European Convertible Bond</li>
                      <li>標的連結型債券</li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li>提供顧問服務與教育訓練</li>
              </ul>
            </div>
          </div>
          <div class="panel mb-3 col-12 col-md-6">
            <div class="p-3 bg-blue color-white h5 mb-0" role="tab">無法理解現有系統提供的評價報表</div>
            <div class="bg-white border border-top-0 p-3" role="tabpanel">
              <ul class="disc">
                <li>針對所需商品與模型需求，提供第三方評價驗證</li>
              </ul>
            </div>
          </div>
          <div class="panel mb-3 col-12 col-md-6">
            <div class="p-3 bg-blue color-white h5 mb-0" role="tab">購買外商評價系統，報表無法順應國內需求</div>
            <div class="bg-white border border-top-0 p-3" role="tabpanel">
              <ul class="disc">
                <li>提供 Excel 試算版本</li>
              </ul>
            </div>
          </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container text-center">
      <h2>系統架構圖</h2><hr>
      <img src="/img/product/cross-pricing/cross-pricing-3.png" alt="評價結果產製報表" class="img-fluid" width="840" height="430">
    </div>
  </section>
  <section class="bg-gray">
    <div class="container text-center">
    <h2>規格</h2>
    <hr>
    <div class="row">
      <div class="col-12 col-md-6">
        <table class="table table-bordered">
          <caption class="h5 bg-blue color-white p-3">硬體建議規格</caption>
          <thead>
            <tr>
              <th>設備名稱</th>
              <th>規格</th>
            </tr>
          </thead>
          <tbody class="bg-blue4">
            <tr>
              <td>CPU</td>
              <td>Intel i7-7700</td>
            </tr>
            <tr>
              <td>HDD</td>
              <td>512G</td>
            </tr>
            <tr>
              <td>RAM</td>
              <td>16G</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-12 col-md-6">
        <table class="table table-bordered">
          <caption class="h5 bg-info color-white p-3">系統軟體規格</caption>
          <thead>
            <tr>
              <th>軟體名稱</th>
              <th>版本</th>
              <th>需授權</th>
            </tr>
          </thead>
          <tbody class="bg-blue2">
            <tr>
              <td>CentOS</td>
              <td>7.4</td>
              <td>NO</td>
            </tr>
            <tr>
              <td>R</td>
              <td>3.4.3</td>
              <td>NO</td>
            </tr>
            <tr>
              <td>PHP</td>
              <td>7.2</td>
              <td>NO</td>
            </tr>
            <tr>
              <td>PostgreSQL</td>
              <td>10</td>
              <td>NO</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    </div>
  </section>
<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script>
window.addEventListener("load", function() {
  var plus =$('.panel .plus');
  plus.next().hide();
  plus.on('click', function(){
    $(this).next().slideToggle();
  })
})
</script>
</body>
</html>

