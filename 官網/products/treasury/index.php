<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='金融銀行財務交易系統 Treasury System - 資通電腦';
$page['description']='功能涵蓋國內外營業單位財務交易之匯利率、債劵與衍生性等主要基本金融商品，為台灣第一家貫穿金融前中後台金融作業系統，增加競爭力與效益，是金融業的絕佳選擇。';
$page['canonical']='https://www.ares.com.tw/products/treasury/';
$page['css']=array('/css/product-treasury1.css');
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
            <a href="<?= $page['canonical']; ?>" itemprop="item"><span itemprop="name">財務交易系統</span></a>
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
      <h2 class="text-center h2">財務交易系統</h2><hr>
      <p>資通電腦有鑒於台灣金融市場的國際化與銀行金融商品之創新成長，自 2003 年成為台灣第一家引進上線成功前中後台一貫性（STP；Straight Through Processing）財務交易系統（Treasury System）後，隨著國際金融市場演變與台灣金管單位的規範，提供更符合實務上需求之多樣化金融商品服務已是刻不容緩的工作。</p>
      <p>資通電腦以 <?=$age;?> 年的金融資訊系統研發經驗，創新出更符合台資金融產業當前實務需求的新一代財務交易系統，功能涵蓋國內外營業單位財務交易之匯利率，債劵與衍生性等主要基本金融商品，提供金融產業具備競爭力與事半功倍效益的絕佳選擇。</p>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 text-center d-none d-md-block">
          <img src="/img/product/treasury/tradingtool.png" alt="*" class="img-fluid" width="268" height="232" loading="lazy">
        </div>
        <div class="col-12 col-md-6">
          <h2 class="underline">金融、企業會計財務交易好工具</h2>
          <br>
          <p>資通財務交易系統涵蓋國內外營業單位財務交易之匯利率、債券與衍生性等主要基本金融商品，貫穿前中後台金融作業系統，協助金融機構順利進行前台交易下單、資金調度，中台投資組合、風險管理，以及後台清算交割、會計帳務等作業。</p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <h2 class="text-center">功能架構圖</h2>
    <hr>
    <div class="container">
    <figure class="text-center">
      <img class="img-fluid" src="/img/product/treasury/structure.jpg" alt="treasury structure" width="951" height="463" loading="lazy">
    </figure>
    </div>
  </section>
  <section class="bg-gray text-center">
    <h2>產品功能</h2>
    <hr>
    <div class="container">
      <ul class="row" id="function">
        <li class="col-12 col-md-3">
          <div class="circle-icon"></div>
          <div class="h5">外匯交易</div>
          <p>Foreign Exchange</p>
        </li>
        <li class="col-12 col-md-3">
          <div class="circle-icon"></div>
          <div class="h5">資金借貸</div>
          <p>Money Market</p>
        </li>
        <li class="col-12 col-md-3">
          <div class="circle-icon"></div>
          <div class="h5">固定收益商品</div>
          <p>Fixed Income</p>
        </li>
        <li class="col-12 col-md-3">
          <div class="circle-icon"></div>
          <div class="h5">匯率衍生性商品</div>
          <p>FX Derivatives</p>
        </li>
        <li class="col-12 col-md-3">
          <div class="circle-icon"></div>
          <div class="h5">利率衍生性商品</div>
          <p>Interest Rate Derivatives</p>
        </li>
        <li class="col-12 col-md-3">
          <div class="circle-icon"></div>
          <div class="h5">市場風險管理 / 評價</div>
          <p>Market Risk Management / Pricing</p>
        </li>
        <li class="col-12 col-md-3">
          <div class="circle-icon"></div>
          <div class="h5">法規遵循</div>
          <p>Regulation Compliance</p>
        </li>
        <li class="col-12 col-md-3">
          <div class="circle-icon"></div>
          <div class="h5">帳務</div>
          <p>G/L Accounting</p>
        </li>
        <li class="col-12 col-md-3">
          <div class="circle-icon"></div>
          <div class="h5">績效管理分析</div>
          <p>P/L Analysis</p>
        </li>
        <li class="col-12 col-md-3">
          <div class="circle-icon"></div>
          <div class="h5">TMU 與組合式商品銷售管理</div>
        </li>
      </ul>
    </div>
  </section>
  <section>
    <h2 class="text-center">產品效益</h2>
    <hr>
    <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 mb-3">
        <div class="color-white p-3" id="benefit-1">前台交易系統效益</div>
        <div class="p-3 border border-top-0">
          <ul class="disc">
          <li>自動產製客戶確認書</li>
          <li>自動化作業降低人工拆帳作業風險與成本</li>
          <li>提供即時評價資訊，確保交易價格合理性</li>
          <li>配合新商品特性調校系統自動化作業規則</li>
          <li>備有風險揭露功能</li>
          <li>增強衍生性商品市場風險管理</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-md-6 mb-3">
        <div class="color-white p-3" id="benefit-2">圖型工具效益</div>
        <div class="p-3 border border-top-0">
          <ul class="disc">
            <li>直覺式作業，從業員無需學習特別語法</li>
            <li>看圖快速了解商品</li>
            <li>加速新商品推廣（例如：結構化商品、選擇權 EKI）</li>
            <li>產生中文化文件（如：商品說明書、交易確認單據…等）</li>
            <li>商品經圖型化拆解後即試算（如：評價、風險值、敏感度）</li>
            <li>充分整合前台交易作業</li>
            <li>具有對應新商品的登錄能力</li>
            <li>自行定義到期（比價日）損益型態</li>
            <li>圖型自動紀錄拆解邏輯，無需人工拆解及匯入後台作業</li>
          </ul>
          <div class="text-right"><a class="btn btn-info" href="/products/visual-pricing-tool/">視覺化圖型工具</a></div>
        </div>
      </div>
      <div class="col-12 col-md-6 mb-3">
        <div class="color-white p-3" id="benefit-3">中台投資組合管理效益</div>
        <div class="p-3 border border-top-0">
          <ul class="disc">
            <li>支援多樣化衍生性金融商品</li>
            <li>使用者可自訂商品報酬型態</li>
            <li>設計模型考量波動度與多重風險因子</li>
            <li>跨商品評價模型設計</li>
            <li>從市場報價角度推估波動度微笑曲線</li>
            <li>全面性考量市場普遍使用模型</li>
            <li>評價模組無黑箱作業</li>
            <li>實際測試與使用</li>
            <li>在地化的充分支援</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-md-6 mb-3">
        <div class="color-white p-3" id="benefit-4">後台效益</div>
        <div class="p-3 border border-top-0">
          <ul class="disc">
            <li>解決金融商品複雜問題</li>
            <li>降低評價難度</li>
            <li>降低市場資料成本</li>
            <li>解決評價頻率（月/季/年）高，人力成本高的問題</li>
            <li>不需仰賴評價團隊（包括評價工具、人力、市場資料…等）</li>
            <li>解決查核期間有限，仍需仰賴外部專家意見的困難</li>
          </ul>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">產品比較表</h2>
    <hr>
    <div class="container">
      <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th></th>
            <th class="bg-blue4">國外</th>
            <th class="bg-blue4">國內</th>
            <th class="bg-blue color-white">資通電腦</th>
          </tr>
        </thead>
        <tbody class="bg-blue2">
          <tr>
            <th>經驗豐富</th>
            <td>★★★</td>
            <td>★</td>
            <td>★★</td>
          </tr>
          <tr>
            <th>架構成熟</th>
            <td>★★★</td>
            <td>★</td>
            <td>★★</td>
          </tr>
          <tr>
            <th>客製化能力</th>
            <td>★★</td>
            <td>★★</td>
            <td>★★★</td>
          </tr>
          <tr>
            <th>價格合理</th>
            <td>★</td>
            <td>★★</td>
            <td>★★★</td>
          </tr>
          <tr>
            <th>彈性擴充</th>
            <td>★★★</td>
            <td>★</td>
            <td>★★</td>
          </tr>
          <tr>
            <th>服務滿意度</th>
            <td>★★</td>
            <td>★</td>
            <td>★★★</td>
          </tr>
          <tr>
            <th>公司穩定</th>
            <td>★★</td>
            <td>★</td>
            <td>★★★</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <section>
    <h2 class="text-center">參考客戶</h2>
    <hr>
    <div class="container text-center">
      <div class="row">
        <div class="col-6 col-md-4">
          <div class="border p-3">
          <img class="img-fluid" src="/img/product/treasury/mega.png" alt="兆豐">
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="border p-3">
          <img class="img-fluid" src="/img/product/treasury/taichung.png" alt="台中銀行">
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="border p-3">
          <img class="img-fluid" src="/img/product/treasury/kgi.png" alt="凱基">
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script>
window.addEventListener("load", function() {
  $('#function li').each(function(i,e){
    var index = i+1;
    $(this).find('.circle-icon').css({"background-color": "#fff"});
    $(this).find('.circle-icon').html('<img src="/img/product/treasury/fuction-'+index+'.svg" alt="*">');
  })
  // console.log('產品功能 loaded')
})
</script>
</body>
</html>

