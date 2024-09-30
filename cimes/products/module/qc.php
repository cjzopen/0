<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');
$page['css']=array('/public/css/module.css');
$page['title'] = 'QC品質管理系統,SPC 即時發現錯誤避免造成損失';
$page['description'] = 'QC(Quality Control)品質管理系統在生產過程中蒐集資料，並運用統計分析發現異常現象，即時處理以降低生產損失。其中On-Line SPC 強調即時性，在錯誤未發生前，即時發現改善，避免造成重大損失。';
$page['css']=array('/public/css/newsletter-list.css');
$page['ogimage'] = 'https://cimes.ares.com.tw/public/img/og/qc.jpg';
$canonical="https://cimes.ares.com.tw/products/module/qc.php";
$hreflang = 'https://cimes.ares.com.tw/en/products/module/qc.php';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<style>
.loading{display:none;}
</style>
<div class="all">
<?php
$module_name='品質管理系統';
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
include('_menu.php');
?>
  <main>
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8">
            <div class="row justify-content-center align-items-center no-gutters">
              <div class="col-auto text-lg-center mb-3" id="module-icon" aria-hidden="true">
<?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/public/img/products/module/svg/qc.svg'); ?>
              </div>
              <div class="col">
                <h1 class="pl-2"><span class="dline d-block">品質管理系統</span>QC（Quality Control）</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-12 col-lg-8">
            <p>QC 品質管理系統是在生產過程中蒐集資料，並運用統計的分析方式，即時發現異常的現象加以處理，以降低生產損失。因此 ciMes 內的品管系統包含了 On-Line SPC，強調的是即時性，在錯誤未發生之前，即時發現並改善，避免造成生產的重大損失。</p>
            <p>QC 以統計手法為主，搭配生產資料之蒐集，因此與工程資料蒐集有密不可分的關係。QC 之架構可區分為幾個部分，分別為資料蒐集（Data Collection）、統計檢驗（Statistical）、呈現（Presentation）以及處置（Action）。資料蒐集由 WIP 模組負責；統計檢驗則代表 QC 系統所能提供的檢驗規則（Rule），例如 Western Electric Rules、Nelson Rules 等；呈現方式以圖形為主；當 QC 檢驗出現 OOC（Out of Control）的狀況時，系統便可以依據事先定義的處置方式進行處置，例如發訊息通知工程師處理。</p>
            <p>品質管理 QC 系統除了 SPC 的控制之外，同時亦支持其他品管常用的管理手法，例如 AQL、Sampling Size 信心水準、品質問題原因代碼管理（Reason Code），以及後續的品質異常處理與追蹤。</p>
            <figure class="text-center mb-5" itemscope itemtype="http://schema.org/ImageObject">
              <img class="img-fluid" src="/public/img/products/module/MES-QC.png" alt="依據工廠需求設定 SPC 監看標準" itemprop="image">
              <figcaption itemprop="description">依據工廠需求設定 SPC 監看標準</figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">客戶反饋</h2><hr>
        <div class="row justify-content-center">
          <div class="col-12 col-md-7">
            <div class="row align-items-center border rounded py-3 fff-bg">
              <div class="col-12 col-md-5">
                <img class="img-fluid" loading="lazy" width="1200" height="648" src="https://www.ares.com.tw/img/events/2020/gogoro-2.jpg" alt="*">
              </div>
              <div class="col-12 col-md-7">
                <h3>Gogoro 睿能創意</h3>
                <p>相較其他市面上的 MES，ciMes 在產業適用性上相對較高，可以做到 IT 與 OT 雙向控制的整合、製程配方管理、即時 SPC… 等；在硬體設備控制、資料蒐集分析，與產品成品半成品測試、管制上有很大幫助。</p>
                <div class="text-right"><a href="https://www.ares.com.tw/events/cimes-user-story-gogoro" class="btn btn-info" rel="noopener noreferrer" target="_blank">查看文章</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h2 class="text-center">相關文章</h2><hr>
        <ul class="justify-content-around newsletter-list disc">
<?php
$article =array(
  array(
    'text' => '如何運用 MES 提升智慧機械設備稼動率？',
    'url' => 'https://marketing.ares.com.tw/newsletter/2018-08-bnk/industry4'
  )
);
foreach ($article as $key) {
?>
<li><a href="<?= $key['url'] ?>" rel="noopener noreferrer" target="_blank"><?= $key['text'] ?></a></li>
<?php
}
?>
        </ul>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
</body>
</html>
