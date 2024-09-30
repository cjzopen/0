<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title']='透過7大要素選擇MES廠商';
$page['description'] = '從認證肯定、廠商信譽、產品彈性、廠商經驗、產品功能、系統維護、產品價值的角度，選擇最符合企業需求的製造執行系統解決方案。';
$canonical='https://cimes.ares.com.tw/knowmes/how/';
$hreflang = 'https://cimes.ares.com.tw/en/knowmes/how/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all" id="how">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/what/whatsmes-banner-1440.jpg', //圖片
  '/public/img/what/whatsmes-banner-720.jpg 720w, /public/img/what/whatsmes-banner-1440.jpg 1440w', //srcset
  '*', //alt
  file_get_contents($_SERVER['DOCUMENT_ROOT']."/public/img/what/whatsmes-banner-icon.svg").'<span>認識 MES</span>', //圖片上的字
  null //字的 class
);
?>
  <main>
    <div class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="../" itemprop="item"><span itemprop="name">認識 MES</span></a>
          <meta itemprop="position" content="2" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">如何選 MES</span></a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>
    </div>
<?php include('../_menu.php'); ?>
    <section itemscope itemtype="https://schema.org/FAQPage">
      <div class="container">
        <h1 itemprop="about" class="text-center mb-0">選擇 MES 廠商的 7 大要素</h1>
        <hr>
        <div id="accordion-toggle" class="d-inline-block mb-3" role="button">+ Open All</div>
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-6">
            <div class="row">
              <div class="col-12">
                <div class="accordion">
                  <input type="checkbox" id="ac-7"  checked="checked"/><label class="main-bg fff-color" for="ac-7" aria-haspopup="true"><strong>認證肯定</strong></label>
                  <article class="accordion-body">
                    <ul>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">MES產品是否獲國內外肯定？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color" aria-labelledby="ac-7"><span itemprop="text">廠商的得獎口碑是很重要的指標，好的 MES 系統應該有國內外認證與肯定。能獲得國際肯定的系統必定符合國際潮流與趨勢，國內肯定則能符合台灣產業所需。</span></p>
                        <!-- <p class="main-color">資通電腦 ciMes：<span>受國際肯定獲 Gartner 建議台灣唯一參考的 MES 廠商</span><span>受國際肯定獲微軟 ISV 獨立軟體開發商驗證</span><span>取得國內台灣精品獎殊榮</span></p> -->
                      </li>
                    </ul>
                  </article>
                </div>
              </div>
              <div class="col-12">
                <div class="accordion">
                  <input type="checkbox" id="ac-1"/><label class="sub-bg fff-color" for="ac-1"><strong>廠商信譽</strong></label>
                  <article class="accordion-body">
                    <ul>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">廠商是否為國內外之上市上櫃公司？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color" aria-labelledby="ac-1"><span itemprop="text">具有一定規模的廠商，才不會讓您的 MES 系統在導入後變成求助無門的孤兒。</span></p>
                      </li>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">廠商之商譽及口碑是否良好？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color" aria-labelledby="ac-1"><span itemprop="text">廠商過去累積的口碑也是一個很重要的參考指標。</span></p>
                      </li>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">廠商在台灣是否有研發及顧問團隊？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color" aria-labelledby="ac-1"><span itemprop="text">MES 研發及顧問團隊都在台灣，才能夠提供最快速的支援及最好的服務。</span></p>
                      </li>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">廠商是否能夠提供兩岸三地的服務？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color" aria-labelledby="ac-1"><span itemprop="text">愈來愈多的製造業者跨足兩岸三地，在大陸的工廠導入系統後若有緊急狀況，是否能夠得到最快速的支援。</span></p>
                      </li>
                    </ul>
                  </article>
                </div>
              </div>
              <div class="col-12">
                <div class="accordion">
                  <input type="checkbox" id="ac-2" ><label class="main-bg fff-color" for="ac-2"><strong>產品彈性</strong></label>
                  <article class="accordion-body">
                    <ul>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">系統是否為一完整性產品？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color"><span itemprop="text">「完整性的系統」與「Template 系統」最大的差異在於是否需要大幅度的客製投入及後續維護的困難度。</span></p>
                      </li>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">產品是否提供未來的擴充性？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color"><span itemprop="text">MES 產品之各模組若有後續更新版本，是否提供免費的更新服務也是關注項目。</span></p>
                      </li>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">是否可以透過快速設定而不用客製？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color"><span itemprop="text">好的 MES 系統能夠透過線上快速設定的方式，調整到最符合公司內部所需要的系統環境，而減少客製的動作。</span></p>
                      </li>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">產品是否仍在研發新模組？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color"><span itemprop="text">系統供應商是否有優秀的團隊，繼續研發新的模組，讓系統架構更趨完整。</span></p>
                      </li>
                    </ul>
                  </article>
                </div>
              </div>
              <div class="col-12">
                <div class="accordion">
                  <input type="checkbox" id="ac-3" ><label class="sub-bg fff-color" for="ac-3"><strong>廠商經驗</strong></label>
                  <article class="accordion-body">
                    <ul>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">廠商是否具有 CIM 及 MES 的經驗？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color"><span itemprop="text">擁有 CIM 及 MES 經驗的廠商，對於客戶來說比較具有保障。</span></p>
                      </li>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">MES 產品是否已有 Reference Site？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color"><span itemprop="text">產品擁有 Reference Site 代表經過其他客戶的驗證，相對來說穩定性較高。</span></p>
                      </li>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">廠商於貴產業是否有經驗？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color"><span itemprop="text">對於所屬產業有所了解，除了溝通較為快速外，亦能夠帶來更多產業中創新的作業方法。</span></p>
                      </li>
                    </ul>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-6">
            <div class="row">
              <div class="col-12">
                <div class="accordion">
                  <input type="checkbox" id="ac-4" ><label class="sub-bg fff-color" for="ac-4"><strong>產品功能</strong></label>
                  <article class="accordion-body">
                    <ul>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">產品是否是量身訂做的？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color"><span itemprop="text">好的 MES 系統預留充分的彈性，可以因應公司特性做出最符合需求的調整。</span></p>
                      </li>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">產品導入所需的時間多長？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color"><span itemprop="text">導入的時間過長，會嚴重影響生產線，增加成本支出，並引起員工反感。</span></p>
                      </li>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">產品功能是否完整？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color"><span itemprop="text">有經驗的系統供應商，必須能夠整合其他符合需求的應用軟體，為企業提供最佳的解決方案。</span></p>
                      </li>
                    </ul>
                  </article>
                </div>
              </div>
              <div class="col-12">
                <div class="accordion">
                  <input type="checkbox" id="ac-5" ><label class="main-bg fff-color" for="ac-5"><strong>系統維護</strong></label>
                  <article class="accordion-body">
                    <ul>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">發生問題時，是否能馬上獲得解決？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color"><span itemprop="text">系統供應商是否能提供完整的服務保證，讓問題能在最短時間內獲得解決，減少損失。</span></p>
                      </li>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">需要花費大筆預算進行系統維護嗎？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color"><span itemprop="text">系統的設計架構是否完整穩定，可以減少導入後的維護支出。</span></p>
                      </li>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">系統維護是否困難，而對 MIS 人員造成負擔？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color"><span itemprop="text">系統是否需要專精某種特殊程式語言的人，才能進行開發或維護。</span></p>
                      </li>
                    </ul>
                  </article>
                </div>
              </div>
              <div class="col-12">
                <div class="accordion">
                  <input type="checkbox" id="ac-6" ><label class="sub-bg fff-color" for="ac-6"><strong>產品價值</strong></label>
                  <article class="accordion-body">
                    <ul>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">能否以最實惠的價格導入最符合需求的 MES 系統？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color"><span itemprop="text">國外的 MES 系統價格昂貴，是否有本土化且價格合理的系統供應商，能提供與國外系統同等級的服務。</span></p>
                      </li>
                      <li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <span itemprop="name">導入 MES 後能幫我節省多少成本及提高多少客戶滿意度？</span>
                        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="main-color"><span itemprop="text">整體 ROI 的評估：投入 MES 的成本，能夠協助公司節省多少無謂支出及資源浪費，並帶來更高的客戶滿意度。</span></p>
                      </li>
                    </ul>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
?>
</div>
<script src="/public/js/main.js" async></script>
<script>
$(function(){
var btnToggle = $('#accordion-toggle');
function handler1(){
  $(this).text('- Close All');
  $('.accordion input').prop('checked',true);
  $(this).one("click", handler2);
}
function handler2(){
  $(this).text('+ Open All');
  $('.accordion input').prop('checked',false);
  $(this).one("click", handler1);
}
btnToggle.one("click", handler1);
})
</script>
</body>
</html>