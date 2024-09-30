<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "product";
$page['title']='財報自行編製軟體 - 資通電腦';
$page['description']='透過財報自編工具與資料追蹤平台自動稽核勾稽，簡化財務報告編製處理流程，加速企業財報產出與備審時間，輕鬆面對 iXBRL 的實行。';
$page['canonical']='https://www.ares.com.tw/products/financial-reporting/';
// $page['css']=array('/css/product-fortify.css');
$page['ogimage']='https://www.ares.com.tw/img/product/financial-reporting/og.jpg';

include $_SERVER['DOCUMENT_ROOT'].'/template/head.php';

include __DIR__.'/_banner.php';
?>
<style>
.table-striped{background-color:#fff}
.table-striped>tbody>tr:nth-of-type(odd){background:#F5F7FA}
.table.table-striped th, .table.table-striped td{vertical-align:middle}
#com tbody tr>:nth-child(2){background:#F2FAFF}
#com tbody tr:nth-child(odd)>:nth-child(2){background:#E5F5FF}
.table.table-striped td{background:#F2F5F7}
.table.table-striped tr:nth-of-type(odd) td{background:#E6EDF2}
.text.sblue{color:#1787C9}
.bg-sblue{background-color:#1787C9}
</style>
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
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name">財報自行編製軟體</span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
<?php
include_once '_nav.php';
?>
  </div>
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 d-none d-md-block text-center">
          <img class="img-fluid" loading="lazy" width="274" height="272" src="/img/product/financial-reporting/kpmg.png" alt="*">
        </div>
        <div class="col-12 col-md-6">
          <h1 class="underline">企業該如何因應財務報告編製之責？</h1>
          <p class="mt-3">金融監督管理委員會（金管會）指示證交所及櫃買中心再次轉知上市櫃公司，重申財務報告編製（包括四大財務報表的數字及所有附註及附表）是公司管理階層之責任，企業應依規定自行編製財務報告，供會計師查核（核閱），因此，落實財務報告自行編製已勢在必行！</p>
          <p>而企業財務、會計人員現階段大多使用 Excel 進行財報編製，若如法令規定，往後將無法再仰賴會計師協助完成財報，所衍生出來複雜且龐大的作業流程與時間，必將成為財會人員沉重負擔！因此，借助能自動稽核勾稽、簡化財報編製處理流程的軟體與工具，將成為未來財報編製因應的新趨勢！</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <div class="container">
      <h2 class="text-center color-black">財務報告不只四大表還包含附註揭露</h2>
      <hr>
      <div class="row justify-content-center">
        <div class="col-12 col-md-9">
          <p>在編製財務報告時，不只四大報表合併資產負債表、合併綜合損益表、合併權益變動表與合併現金流量表，還包含附註揭露：重大會計說明、附註揭露事項…等項目。</p>
          <img class="img-fluid" loading="lazy" width="800" height="300" src="/img/product/financial-reporting/kpmg-2.png" alt="財務報表">
        </div>
      </div>
    </div>
  </section>
  <section class="color-white bg-lazyload" data-position="left" data-image="/img/product/financial-reporting/bg.jpg" data-bgcolor="#4ea2ca">
    <div class="container py-5">
      <div class="row">
        <div class="col-12 col-md-6"></div>
        <div class="col-12 col-md-6">
          <h2 class="underline border-white">自行編製財務報告流程中常見問題</h2>
          <ul class="check block mt-3">
            <li>附註底稿收集與更新耗時</li>
            <li>報告文字不會寫或更新不及時</li>
            <li>資料版本控管不易</li>
            <li>報告前後數字未勾稽</li>
            <li>報告編製及排版困難</li>
            <li>iXBRL 填寫耗時</li>
            <li>無覆核軌跡</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">財務報告自行編製解決方案</h2><hr>
      <div class="row justify-content-center">
        <div class="col-12 col-md-9">
          <p>資通電腦聯手集結業界財報編製專家與金融專業人士之力，提供全方位的財報自編解決方案，透過引領市場 30 年以上，廣泛應用於全球 172 個國家和地區會計事務所，具備 16 國語言超過 50 萬人使用的財報編製工具（CaseWare）與資料追蹤平台（CONVERGE），協助企業跳脫繁複的工作表、眼花撩亂的數字與惱人的表單連結，讓編製過程有所本也有跡可循，有效提升企業財報自編的能力，將財報編製的過程化繁為簡，解決企業財報自編的挑戰，同時滿足主管機關要求。</p>
          <img class="img-fluid" loading="lazy" width="800" height="379" src="/img/product/financial-reporting/flowchart.png" alt="運用財務結算、財報編製工具與資料追蹤平台，簡化財報編製流程，並留存軌跡">
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">產品優勢<br>加速企業完成財報編製</h2>
    <hr>
    <div class="container">
      <div class="row pt-3">
      <div class="col-12 col-md-6 ">
        <div class="bg-white rounded overflow-hidden h-100">
        <div class="px-3 py-2 color-white bg-sblue"><strong>CaseWare 財報編製工具</strong></div>
        <div class="p-3">
          <ul class="disc">
            <li>毋須改變現有工作流程</li>
            <li>財報排版簡單快速</li>
            <li>延展性高，快速產出 iXBRL 檔案</li>
            <li>自動勾稽避免人工缺失</li>
          </ul>
        </div>
        </div>
      </div>
      <div class="col-12 col-md-6 ">
        <div class="bg-white rounded overflow-hidden h-100">
        <div class="px-3 py-2 color-white bg-sblue"><strong>CONVERGE 資料追蹤平台</strong></div>
        <div class="p-3">
          <ul class="disc">
            <li>系統自動跟催減輕承辦人員負擔</li>
            <li>線上覆核留存軌跡</li>
            <li>檔案版本控管</li>
            <li>資料加密安全有保障</li>
          </ul>
        </div>
        </div>
      </div>
    </div>
    </div>
    <br>
  </section>
  <section>
    <h2 class="text-center">產品效益</h2>
    <hr>
    <div class="container text-center">
      <ul class="row">
        <li class="col-6 col-md-3">
          <img class="img-fluid rounded-circle bg-gray" loading="lazy" width="100" height="100" src="/img/product/financial-reporting/benefit-1.svg" alt="*">
          <div class="h5 pt-2">減少財報<br>出錯風險</div>
        </li>
        <li class="col-6 col-md-3">
          <img class="img-fluid rounded-circle bg-gray" loading="lazy" width="100" height="100" src="/img/product/financial-reporting/benefit-2.svg" alt="*">
          <div class="h5 pt-2">加速報告<br>產出時間</div>
        </li>
        <li class="col-6 col-md-3">
          <img class="img-fluid rounded-circle bg-gray" loading="lazy" width="100" height="100" src="/img/product/financial-reporting/benefit-3.svg" alt="*">
          <div class="h5 pt-2">大幅降低企業<br>財報備審時間</div>
        </li>
        <li class="col-6 col-md-3">
          <img class="img-fluid rounded-circle bg-gray" loading="lazy" width="100" height="100" src="/img/product/financial-reporting/benefit-4.svg" alt="*">
          <div class="h5 pt-2">協助企業輕鬆面對<br>iXBRL 的實行</div>
        </li>
      </ul>
    </div>
  </section>
  <section class="bg-gray">
    <h2 class="text-center">財報編製工具比一比</h2><hr>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <table class="table table-striped shadow" id="com">
            <thead>
              <tr class="bg-sblue color-white">
                <th width="168">項目</th>
                <th>使用專業工具編製財報</th>
                <th>使用 Excel 編製財報</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>資料正確性</th>
                <td><div class="d-flex"><svg class="mt-2 mr-1" aria-hidden="true" fill="#1787C9" width="16" height="16"><use xlink:href="#check-circle" /></svg><span>高，自動勾稽避免人工缺失</span></div>  </td>
                <td>低，人工來回核對易衍生錯誤</td>
              </tr>
              <tr>
                <th>編表格式失誤率</th>
                <td><div class="d-flex"><svg class="mt-2 mr-1" aria-hidden="true" fill="#1787C9" width="16" height="16"><use xlink:href="#check-circle" /></svg><span>局部鎖定，只修改必要之處</span></div></td>
                <td>高，易更動到排版格式</td>
              </tr>
              <tr>
                <th>版本控管難度</th>
                <td><div class="d-flex"><svg class="mt-2 mr-1" aria-hidden="true" fill="#1787C9" width="16" height="16"><use xlink:href="#check-circle" /></svg><span>容易</span></div></td>
                <td>困難</td>
              </tr>
              <tr>
                <th>iXBRL 填寫時程</th>
                <td><div class="d-flex"><svg class="mt-2 mr-1" aria-hidden="true" fill="#1787C9" width="16" height="16"><use xlink:href="#check-circle" /></svg><span>短</span></div></td>
                <td>長</td>
              </tr>
              <tr>
                <th>報告編製時程</th>
                <td><div class="d-flex"><svg class="mt-2 mr-1" aria-hidden="true" fill="#1787C9" width="16" height="16"><use xlink:href="#check-circle" /></svg><span>短，約 2 天</span></div></td>
                <td>長，約 10 天</td>
              </tr>
              <tr>
                <th>成本</th>
                <td><div class="d-flex"><svg class="mt-2 mr-1" aria-hidden="true" fill="#1787C9" width="16" height="16"><use xlink:href="#check-circle" /></svg><span>低</span></div></td>
                <td>高</td>
              </tr>
              <tr>
                <th><span class="text-danger">*</span>資料修訂/覆核軌跡</th>
                <td><div class="d-flex"><svg class="mt-2 mr-1" aria-hidden="true" fill="#1787C9" width="16" height="16"><use xlink:href="#check-circle" /></svg><span>有，如有權責分工可於同一檔案進行修訂，可追溯軌跡即時發現問題點</span></div></td>
                <td>無，如有權責分工需先保留母版，再將所有人員的修訂內容手動更新回母版</td>
              </tr>
              <tr>
                <th><span class="text-danger">*</span>資訊更新即時性<br></th>
                <td><div class="d-flex"><svg class="mt-2 mr-1" aria-hidden="true" fill="#1787C9" width="16" height="16"><use xlink:href="#check-circle" /></svg><span>高，透過專用平台即時交換</span></div></td>
                <td>低，需依賴 Email 或紙本交換</td>
              </tr>
            </tbody>
          </table>
          <small class="text-danger text-nowrap">*限購買 CONVERGE 之使用者</small>
        </div>
      </div>
    </div>
  </section>
  <section>
    <h2 class="text-center">硬體規格需求</h2><hr>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10">
          <table class="table table-striped table-bordered shadow">
            <thead>
              <tr>
                <th>項目</th>
                <th><img class="img-fluid" loading="lazy" width="76" height="38" src="/img/product/financial-reporting/CaseWare-logo.jpg" alt="CaseWare"><div class="color-blue">安裝在財報編製者電腦</div></th>
                <th><img class="img-fluid" loading="lazy" width="136" height="38" src="/img/product/financial-reporting/CONVERGE-logo.svg" alt="Converge"><div class="color-blue">安裝在 Server 供公司其他同仁登入使用</div></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>作業平台（OS）</th>
                <td>Windows 10 64-bit 或 Windows 8.1 64-bit</td>
                <td>Windows Server 2012R2 STD 以上</td>
              </tr>
              <tr>
                <th>中央處理器（CPU）</th>
                <td>1GHz 64-bit（建議 2GHz）</td>
                <td>4 vCPU</td>
              </tr>
              <tr>
                <th>記憶體（RAM）</th>
                <td>2GB（建議 8GB）</td>
                <td>32G RAM</td>
              </tr>
              <tr>
                <th>硬碟（HDD）</th>
                <td>至少 1GB 安裝空間，專案空間依實際需求增加</td>
                <td>AP Server：60GB，DB Server：200GB，File Server：1TB</td>
              </tr>
              <tr>
                <th>SSL 憑證</th>
                <td>-</td>
                <td>有</td>
              </tr>
              <tr>
                <th>電郵轉發（Mailrelay）</th>
                <td>-</td>
                <td>有</td>
              </tr>
              <tr>
                <th>通訊埠（Port）</th>
                <td>-</td>
                <td>443/1433</td>
              </tr>
              <tr>
                <th>其他</th>
                <td><ul class="disc">
                  <li>Office 2010 以上，或是 Office 365</li>
                  <li>Adobe Acrobat Reader 10.0 以上</li>
                </ul></td>
                <td>-</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray" id="case">
    <h2 class="text-center">我們的客戶</h2><hr>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="text sblue">上市公司</div>
          <ul class="disc text sblue" id="se">
            <li><span class="text-dark">1229 聯華實業投資控股</span></li>
            <li><span class="text-dark">1313 聯成化學科技</span></li>
            <li><span class="text-dark">1476 儒鴻企業</span></li>
            <li><span class="text-dark">1806 冠軍建材</span></li>
            <li><span class="text-dark">2471 資通電腦</span></li>
            <li><span class="text-dark">2515 中華工程</span></li>
            <li><span class="text-dark">2516 新亞建設開發</span></li>
            <li><span class="text-dark">2834 臺灣中小企業銀行</span></li>
            <li><span class="text-dark">2892 第一金融控股</span></li>
            <li><span class="text-dark">3005 神基科技</span></li>
            <li><span class="text-dark">3706 神達投資控股</span></li>
            <li><span class="text-dark">4904 遠傳電信</span></li>
            <li><span class="text-dark">5871 中租控股</span></li>
            <li><span class="text-dark">6235 華孚科技</span></li>
            <li><span class="text-dark">6277 宏正自動科技</span></li>
            <li><span class="text-dark">1473 台南企業</span></li>
            <li><span class="text-dark">2420 新巨企業</span></li>
            <li><span class="text-dark">3045 台灣大哥大</span></li>
            <li><span class="text-dark">5880 合作金庫金融控股</span></li>
          </ul>
        </div>
        <div class="col-12 col-md-6">
          <div class="text sblue">上櫃公司</div>
          <ul class="disc text sblue" id="otc">
            <li><span class="text-dark">5213 亞昕國際開發</span></li>
            <li><span class="text-dark">5425 台灣半導體</span></li>
            <li><span class="text-dark">5512 力麒建設</span></li>
            <li><span class="text-dark">8044 網路家庭國際資訊</span></li>
            <li><span class="text-dark">3611 鼎翰科技</span></li>
          </ul>
          <div class="text sblue">其他公司</div>
          <ul class="disc text sblue">
            <li><span class="text-dark">第一商業銀行</span></li>
            <li><span class="text-dark">第一金證券</span></li>
            <li><span class="text-dark">兆豐產物保險</span></li>
            <li><span class="text-dark">兆豐國際商業銀行</span></li>
            <li><span class="text-dark">神通資訊科技</span></li>
            <li><span class="text-dark">合作金庫商業銀行</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/template/footer.php';
?>
<script>
addEventListener('load', (event) => {
  const se_list = document.querySelectorAll('#se li');
  var se=Array.from(se_list).map(el => el.textContent);
  se.sort();
  var se_html='';
  se.forEach((element) => {
    se_html=se_html+'<li><span class="text-dark">'+element+'</span></li>';
  });
  $('#se').html(se_html);


  const otc_list = document.querySelectorAll('#otc li');
  var otc=Array.from(otc_list).map(el => el.textContent);
  otc.sort();
  var otc_html='';
  otc.forEach((element) => {
    otc_html=otc_html+'<li><span class="text-dark">'+element+'</span></li>';
  });
  $('#otc').html(otc_html);
});
</script>
</body>
</html>

