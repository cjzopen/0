<?php
http_response_code(301);
header('Location: https://www.ares.com.tw/esg/'); 
exit();


require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$page['title']='企業永續發展 | 資通電腦';
$page['description']='資通電腦遵守相關勞動法規，保障員工合法權益，關懷員工身心健康，每年提供健檢補助，加強友善工作環境。並履行企業社會責任，響應節能減碳政策，持續進行社會關懷扶助弱勢兒童，贊助社團法人國際生命線台灣總會行動生命線系統建置，協助建構完整自防治網絡，推動自殺防治工作。';
$page['canonical']='https://www.ares.com.tw/esg/';
// $page['css']=array('/lib/fancybox3/jquery.fancybox.min.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
$breadcrumb='企業永續發展';
include($_SERVER['DOCUMENT_ROOT'].'/template/about-banner.php');
?>
  <div class="h-n bg-blue">
    <ul class="text-center">
      <li class="act"><a href="./#title">永續發展</a></li>
      <li><a href="./social-contribution.php#title">社會關懷</a>
    </ul>
  </div>
  <section class="csr">
    <h1 class="text-center">永續發展</h1>
    <hr>
    <div class="container">
      <h2>永續發展執行情形</h2>
      <div class="row">
        <div class="col-12 col-md-5">
          <table class="table table-bordered">
            <tr><td><a href="/files/pdf/永續發展執行情形.pdf"><span>永續發展執行情形</span></a></td></tr>
            <tr><td><a href="/files/pdf/永續發展實務守則.pdf"><span>永續發展實務守則</span></a></td></tr>
          </table>
        </div>
      </div>
      <br>
      <p class="color-blue">永續發展專（兼）職單位：</p>
      <p>本公司永續發展推動由管理部兼辦。</p>
      <br>
      <h2>環境保護</h2>
      <p>本公司屬軟體產業並未生產電子、電氣設備、部件和材料，故沒有歐盟電機電子設備有害物質限用指令（RoHS）中實施環境管理物質適用範圍之重金屬、有機氯化合物、有機溴化合物及廢電機電子設備指令（WEEE）、耗能產品綠色設計指令（EuP）等相關廢棄物產生，因無生產製程，故無直接排放量（範疇一）。</p>
      <p>本公司主要耗能來自於外購電力，以及公務車汽、柴油。最近 2 年主要排放源為外購電力，占整體排放量 94% 以上，其餘為移動排放源（公務車之汽、柴油），屬於間接排放量（範疇二）。</p>
      <table class="table table-bordered">
        <caption style="caption-side:top">最近 2 年溫室氣體排放量（含各地辦公室及子公司）</caption>
        <tbody>
          <tr>
            <th>年度</th>
            <th>溫室氣體排放量（tonCO2e）</th>
          </tr>
          <tr>
            <td>110</td>
            <td>243,265.71</td>
          </tr>
          <tr>
            <td>109</td>
            <td>265,836.45</td>
          </tr>
        </tbody>
      </table>
      <p>營運過程中，除一般民生用水外不會產生額外廢水，用水來源 100% 來自自來水公司，未使用地下水或其他方式水源，汙水皆依主管機關規範排放處理，無水污染疑慮。為珍惜水資源，本公司持續宣導並提倡同仁節約用水的觀念及行動。</p>
      <p>本公司長年關注水資源節能環保議題，在節水計畫方面，從全面落實日常生活節約用水做起。110年本公司用水量為7,265立方公尺，取水來源為自來水，用水量相較109年8,853立方公尺，節省了17.9%。</p>
      <table class="table table-bordered">
        <caption style="caption-side:top">最近 2 年用水量（含各地辦公室及子公司）</caption>
        <tbody>
          <tr>
            <th>年度</th>
            <th>用水量（立方公尺）</th>
            <th>員工總數（人）</th>
            <th>平均用水量（立方公尺）</th>
          </tr>
          <tr>
            <td>110</td>
            <td>7,265</td>
            <td>3,648</td>
            <td>1.99</td>
          </tr>
          <tr>
            <td>109</td>
            <td>8,853</td>
            <td>3,696</td>
            <td>2.40</td>
          </tr>
          </tr>
        </tbody>
      </table>
      <p>本公司為響應節能減碳政策，鼓勵員工響應環保，採取措施如下：</p>
      <ul class="disc">
        <li>辦公室照明設備全數改為 LED 燈。</li>
        <li>設備採購以有能源之星標章或符合 RoHS 等規範者為優先採購。</li>
        <li>垃圾分類資源回收：分為一般垃圾、塑膠與保麗龍、瓶罐等三區。</li>
        <li>設置回收紙箱及影印紙箱將廢紙回收再利用。</li>
        <li>宣導並提倡同仁節約用水的觀念及行動。</li>
      </ul>
      <p>本公司廢棄物主要為同仁日常生活所產生，皆已按照當地政府規定分類回收處理。</p>
      <table class="table table-bordered">
        <caption style="caption-side:top">廢棄物總重量（含各地辦公室及子公司）</caption>
        <tbody>
          <tr>
            <th>年度</th>
            <th>廢棄物總重量（公噸）</th>
          </tr>
          <tr>
            <td>110</td>
            <td>0.036</td>
          </tr>
          <tr>
            <td>109</td>
            <td>0.042</td>
          </tr>
          </tr>
        </tbody>
      </table>
      <br><br>
      <h2>員工關懷</h2>
      <p>本公司遵守相關勞動法規，保障員工之合法權益，重視員工健康並提供健檢補助，提供良好的工作環境及勞工維繫良好之勞資關係。</p>
      <!-- <a class="color-blue" href="https://www.ares.com.tw/events/Ares-nursery-benefit" rel="external">文：友善職場育兒環境</a> -->
      <br>
      <h2>友善職場</h2>
      <p>運用獎金制度鼓勵同仁積極參與產品創新與研發，創造公司創新環境並增進公司最大利潤。積極促進內部同仁自我提升，為員工建立不同的創意發揮舞台，讓員工能在擅長的領域、熱愛的事物上盡情揮灑，並體恤員工的辛勞和加強友善工作環境。</p>
      <br>
      <ul class="row">
        <li class="col-12 col-sm-6 col-md-4">
          <a href="https://www.ares.com.tw/events/Ares-nursery-benefit">
            <figure>
              <img width="350" height="200" loading="lazy" src="/img/about/csr/csr-1.jpg" alt="哺乳室" class="img-fluid ml-auto mr-auto">
              <figcaption>設置女性職員哺（集）乳室，提供彈性上下班制度，創造一個溫暖正面且多元的理想工作環境。</figcaption>
            </figure>
          </a>
        </li>
        <li class="col-12 col-sm-6 col-md-4">
          <a href="https://www.ares.com.tw/events/Ares-employees-events">
            <figure>
              <img width="350" height="200" loading="lazy" src="/img/about/csr/csr-2.jpg" alt="員工大會" class="img-fluid ml-auto mr-auto">
              <figcaption>舉辦員工大會，增進同仁之間情誼，並舉辦每周登山社規劃不同行程，讓同仁釋放平時工作壓力，樂活充電。</figcaption>
            </figure>
          </a>
        </li>
        <li class="col-12 col-sm-6 col-md-4">
          <a href="https://marketing.ares.com.tw/newsletter/2017-02-fortify/management">
            <figure>
              <img width="350" height="200" loading="lazy" src="/img/about/csr/csr-3.jpg" alt="減重計畫" class="img-fluid ml-auto mr-auto">
              <figcaption>實施「資通減重計畫」，透過實質獎勵鼓勵同仁們愛惜身體健康，擁有健康身心享受美好生活。</figcaption>
            </figure>
          </a>
        </li>
        <li class="col-12 col-sm-6 col-md-4">
          <a href="https://www.ares.com.tw/events/ares-aed-cpr-201910">
            <figure>
              <img width="350" height="200" loading="lazy" src="/img/events/2019/aed-cpr-201910-2.jpg" alt="AED" class="img-fluid ml-auto mr-auto">
              <figcaption>辦公室設置 AED 急救設備，並提供同仁急救相關教育訓練，打造安心職場。</figcaption>
            </figure>
          </a>
        </li>
        <li class="col-12 col-sm-6 col-md-4">
          <!-- <a href="https://www.ares.com.tw/events/ares-aed-cpr-201910"> -->
            <figure>
              <img width="350" height="200" loading="lazy" src="/img/about/csr/csr-5.jpg" alt="量血壓" class="img-fluid ml-auto mr-auto">
              <figcaption>實施量測血壓計畫，督促員工追蹤自身健康，定期測量血壓。</figcaption>
            </figure>
          <!-- </a> -->
        </li>
        <li class="col-12 col-sm-6 col-md-4">
          <!-- <a href="https://www.ares.com.tw/events/ares-aed-cpr-201910"> -->
            <figure>
              <img width="350" height="200" loading="lazy" src="/img/about/csr/csr-6.jpg" alt="空氣清淨機" class="img-fluid ml-auto mr-auto">
              <figcaption>辦公室增購醫療級空氣清淨機，打造健康職場環境。</figcaption>
            </figure>
          <!-- </a> -->
        </li>
      </ul>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<!-- <script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script> -->
<style>
.h-n ul{position:static;top: auto;width: 100%;padding:15px 0 1px;margin:0;}
.h-n li{
  padding:.75rem;
  display:inline-block;
  width: 10rem;
  margin-right:.5rem;margin-left: .5rem;
  background: #ebebeb;
  background-image: -webkit-linear-gradient(180deg, #fff 0%, #ebebeb 100%);
  background-image: -o-linear-gradient(180deg, #fff 0%, #ebebeb 100%);
  background-image: -moz-linear-gradient(180deg, #fff 0%, #ebebeb 100%);
  background-image: linear-gradient(180deg, #fff 0%, #ebebeb 100%);
  background-repeat: no-repeat;
  border:none;
}
.h-n li.act{
  background-color:#fff;
  background-image:none;
  color:#2858aa;
  position:relative;
}
.h-n ul, .h-n li.act:before, .h-n li.act:after {
  display: block!important;
}
.h-n li.act:before {
  width: 100%;
  height: 4px;
  top: 100%;
  left: 0;
}
.h-n li.act:after {
  bottom: -4px;
  left: 50%;
  height: 5px;
  width: 5px;
  margin: 0 0 -3px -2px;
  transform: rotate(45deg);
}
.h-n li.act:before, .h-n li.act:after {
  content: '';
  position: absolute;
  background-color: #2858aa;
  display: none;
}
</style>
<svg class="d-none hide" aria-hidden="true">
  <defs>
    <symbol viewBox="0 0 512 512" id="word"><g fill="#1565c0"><path d="M294.656 13.014a10.667 10.667 0 0 0-9.045-2.133l-277.333 64A10.668 10.668 0 0 0 0 85.377v362.667a10.667 10.667 0 0 0 9.045 10.539l277.333 42.667c5.823.895 11.269-3.099 12.164-8.921.082-.535.124-1.076.124-1.617V21.377a10.661 10.661 0 0 0-4.01-8.363z"/><path d="M501.334 458.71H288c-5.891 0-10.667-4.776-10.667-10.667s4.776-10.667 10.667-10.667h202.667V74.71H288c-5.891 0-10.667-4.776-10.667-10.667S282.109 53.377 288 53.377h213.333c5.891 0 10.667 4.776 10.667 10.667v384c0 5.891-4.775 10.666-10.666 10.666z"/></g><path d="M181.334 352.044a10.666 10.666 0 0 1-10.24-7.723L138.667 230.87 106.24 344.321c-2.342 5.661-8.83 8.352-14.492 6.01a11.092 11.092 0 0 1-6.01-6.01L43.072 194.988c-1.786-5.614 1.318-11.612 6.932-13.398 5.614-1.786 11.612 1.318 13.398 6.932.063.198.12.398.172.599L96 302.55l32.427-113.45c2.342-5.661 8.83-8.352 14.492-6.01a11.092 11.092 0 0 1 6.01 6.01l32.405 113.451 32.427-113.429c1.535-5.614 7.331-8.921 12.945-7.386l.239.068c5.66 1.622 8.935 7.523 7.317 13.184l-42.667 149.333a10.667 10.667 0 0 1-10.261 7.723z" fill="#fafafa"/><g fill="#1565c0"><path d="M458.667 138.71H288c-5.891 0-10.667-4.776-10.667-10.667s4.776-10.667 10.667-10.667h170.667c5.891 0 10.667 4.776 10.667 10.667 0 5.892-4.776 10.667-10.667 10.667zM458.667 202.71H288c-5.891 0-10.667-4.776-10.667-10.667s4.776-10.667 10.667-10.667h170.667c5.891 0 10.667 4.776 10.667 10.667s-4.776 10.667-10.667 10.667zM458.667 266.71H288c-5.891 0-10.667-4.776-10.667-10.667s4.776-10.667 10.667-10.667h170.667c5.891 0 10.667 4.776 10.667 10.667 0 5.892-4.776 10.667-10.667 10.667zM458.667 330.71H288c-5.891 0-10.667-4.776-10.667-10.667s4.776-10.667 10.667-10.667h170.667c5.891 0 10.667 4.776 10.667 10.667 0 5.892-4.776 10.667-10.667 10.667zM458.667 394.71H288c-5.891 0-10.667-4.776-10.667-10.667s4.776-10.667 10.667-10.667h170.667c5.891 0 10.667 4.776 10.667 10.667 0 5.892-4.776 10.667-10.667 10.667z"/></g></symbol>
  </defs>
</svg>
</body>
</html>

