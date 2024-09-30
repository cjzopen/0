<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$page['title']='公司治理 | 資通電腦';
$page['description']='資通電腦各項守則與規範、各年度董事會決議事項、公司辦法與主要股東名單';
$page['canonical']='https://www.ares.com.tw/governance/';
$page['css']=array('/lib/fancybox3/jquery.fancybox.min.css','/css/investor.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
include($_SERVER['DOCUMENT_ROOT'].'/template/investor-banner.php');
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
            <a href="" itemprop="item"><span itemprop="name">公司治理</span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
<?php
$investor = 'governance';
include($_SERVER['DOCUMENT_ROOT'].'/template/investor-list.php');
?>
      <div class="col-12 col-md-9">
        <section id="公司治理">
          <h2 class="text-left">公司治理</h2>
          <hr class="d-inline-block pr-1 mt-0">
          <h3 class="h4">董事會成員及委員會成員名單</h3>
          <div class="row">
            <div class="col-12 col-sm-6">
              <h4 class="color-brown h5">董事會</h4>
              <table class="table table-bordered table-striped wow fadeInUp">
                <tr>
                  <th class="bg-blue4">董事長</th>
                  <td class="p-2">余宏揚</td>
                </tr>
                <tr>
                  <th class="bg-blue4">董事</th>
                  <td class="p-2">林聖懿</td>
                </tr>
                <tr>
                  <th class="bg-blue4">董事</th>
                  <td class="p-2">林青龍</td>
                </tr>
                <tr>
                  <th class="bg-blue4">董事</th>
                  <td class="p-2">神通電腦（股）公司<br>代表人：楊香芸</td>
                </tr>
                <tr>
                  <th class="bg-blue4">董事</th>
                  <td class="p-2">神通電腦（股）公司<br>代表人：苗華斌</td>
                </tr>
                <tr>
                  <th class="bg-blue4">獨立董事</th>
                  <td class="p-2">黃明達</td>
                </tr>
                <tr>
                  <th class="bg-blue4">獨立董事</th>
                  <td class="p-2">尤錦堂</td>
                </tr>
                <tr>
                  <th class="bg-blue4">獨立董事</th>
                  <td class="p-2">張化雨</td>
                </tr>
                <tr>
                  <th class="bg-blue4">獨立董事</th>
                  <td class="p-2">陳君明</td>
                </tr>
              </table>
            </div>
            <div class="col-12 col-sm-6">
              <h4 class="color-brown h5">薪酬委員會</h4>
              <table class="table table-bordered table-striped wow fadeInUp">
                <tr>
                  <th class="bg-blue4">召集人</th>
                  <td class="p-2">黃明達</td>
                </tr>
                <tr>
                  <th class="bg-blue4">委員</th>
                  <td class="p-2">尤錦堂</td>
                </tr>
                <tr>
                  <th class="bg-blue4">委員</th>
                  <td class="p-2">張化雨</td>
                </tr>
                <tr>
                  <th class="bg-blue4">委員</th>
                  <td class="p-2">陳君明</td>
                </tr>
              </table>
              <h4 class="color-brown h5">審計委員會</h4>
              <table class="table table-bordered table-striped wow fadeInUp">
                <tr>
                  <th class="bg-blue4">召集人</th>
                  <td class="p-2">黃明達</td>
                </tr>
                <tr>
                  <th class="bg-blue4">委員</th>
                  <td class="p-2">尤錦堂</td>
                </tr>
                <tr>
                  <th class="bg-blue4">委員</th>
                  <td class="p-2">張化雨</td>
                </tr>
                <tr>
                  <th class="bg-blue4">委員</th>
                  <td class="p-2">陳君明</td>
                </tr>
              </table>
              <br><small>更新於 <time>2023-06-21</time></small>
            </div>
          </div>
          <br>
          <h3 class="h4">董事會決議事項</h3>
          <ul class="list-inline wow fadeInLeft">
            <li class="d-inline-block pr-1">
              <a  href="/files/pdf/112年董事會決議事項.pdf" class="list-group-item overflow-hidden rounded">112 年董事會決議事項</a>
            </li>
            <li class="d-inline-block pr-1">
              <a  href="/files/doc/111年董事會決議事項.docx" class="list-group-item overflow-hidden rounded">111 年董事會決議事項</a>
            </li>
            <li class="d-inline-block pr-1">
              <a  href="/files/doc/110年董事會決議事項.docx" class="list-group-item overflow-hidden rounded">110 年董事會決議事項</a>
            </li>
          </ul>
          <br>
          <h3 class="h4">董事會及功能性委員會相關訊息</h3>
          <ul class="list-inline wow fadeInLeft">
            <li class="d-inline-block pr-1">
              <a href="/files/pdf/董事選舉辦法.pdf" class="list-group-item overflow-hidden rounded">董事選舉辦法</a>
            </li>
            <li class="d-inline-block pr-1">
              <a data-fancybox data-type="iframe" href="Election/independent-director.html" class="list-group-item overflow-hidden rounded">獨立董事選任資訊</a>
            </li>
            <li class="d-inline-block pr-1">
              <a href="/files/pdf/董事多元化及獨立性情形.pdf" class="list-group-item overflow-hidden rounded" >董事多元化及獨立性情形</a>
            </li>
            <li class="d-inline-block pr-1">
              <a href="/files/pdf/董事會個別成員專業背景之介紹.pdf" class="list-group-item overflow-hidden rounded" >董事會個別成員專業背景之介紹</a>
            </li>
            <li class="d-inline-block pr-1">
              <a href="/files/pdf/112年獨立董事與內部稽核主管及會計師之溝通情形.pdf" class="list-group-item overflow-hidden rounded" >獨立董事與內部稽核主管及會計師之溝通情形</a>
            </li>
            <li class="d-inline-block pr-1">
              <a href="/files/pdf/112年薪資報酬委員會之組成、職責及運作情形.pdf" class="list-group-item overflow-hidden rounded" >112 年薪資報酬委員會之組成、職責及運作情形</a>
            </li>
            <li class="d-inline-block pr-1">
              <a href="/files/doc/111年薪資報酬委員會之組成、職責及運作情形.docx" class="list-group-item overflow-hidden rounded" >111 年薪資報酬委員會之組成、職責及運作情形</a>
            </li>
            <li class="d-inline-block pr-1">
              <a href="/files/pdf/112年審計委員會成員專業資格與經驗、年度工作重點及運作情形.pdf" class="list-group-item overflow-hidden rounded" >112 年審計委員會成員專業資格與經驗、年度工作重點及運作情形</a>
            </li>
            <li class="d-inline-block pr-1">
              <a href="/files/pdf/111年審計委員會成員專業資格與經驗、年度工作重點及運作情形.pdf" class="list-group-item overflow-hidden rounded" >111 年審計委員會成員專業資格與經驗、年度工作重點及運作情形</a>
            </li>
            <li class="d-inline-block pr-1">
              <a href="/files/doc/112年度董事會及其成員績效評估結果.docx" class="list-group-item overflow-hidden rounded" >112 年度董事會及其成員績效評估結果</a>
            </li>
            <li class="d-inline-block pr-1">
              <a href="/files/doc/112年度審計委員會績效評估結果.docx" class="list-group-item overflow-hidden rounded" >112 年度審計委員會績效評估結果</a>
            </li>
            <li class="d-inline-block pr-1">
              <a href="/files/doc/112年度薪酬委員會績效評估結果.docx" class="list-group-item overflow-hidden rounded" >112 年度薪酬委員會績效評估結果</a>
            </li>
          </ul>
          <br>
          <h3 class="h4">內部稽核</h3>
          <ul class="list-inline wow fadeInLeft">
            <li class="d-inline-block pr-1">
              <a href="/files/doc/內部稽核組織及其執行情形.docx" class="list-group-item overflow-hidden rounded">內部稽核組織及其執行情形</a>
            </li>
          </ul>
          <br>
          <h3 class="h4">公司重要內規</h3>
          <p>
            本公司董事會應盡善良管理人之注意義務，以督促公司實踐社會責任，並檢討其實施成效及持續改進，確保企業社會責任政策之落實。
          </p>
          <p>
            本公司從事營運活動遵循相關法規，避免從事不公平競爭之行為，與反賄賂貪瀆，以營造公平競爭環境。
          </p>
          <table class="table">
            <tbody>
              <tr>
                <td class="border-0"><a href="/files/doc/誠信經營政策.docx">誠信經營政策</a></td>
              </tr>
              <tr>
                <td><a href="/files/pdf/誠信經營作業守則.pdf">誠信經營作業守則</a></td>
              </tr>
              <tr>
                <td><a href="/files/pdf/誠信經營作業程序及行為指南.pdf">誠信經營作業程序及行為指南</a></td>
              </tr>
              <tr>
                <td><a href="/files/pdf/董事暨經理人道德行為準則.pdf">董事暨經理人道德行為準則</a></td>
              </tr>
              <tr>
                <td><a href="/files/pdf/員工從業道德行為準則.pdf">員工從業道德行為準則</a></td>
              </tr>
              <tr>
                <td><a data-fancybox data-type="iframe" href="rule/Reporting-system.html">檢舉制度</a></td>
              </tr>
              <tr>
                <td><a href="/files/pdf/公司治理實務守則.pdf">公司治理實務守則</a></td>
              </tr>
              <tr>
                <td><a href="/files/doc/董事會績效評估辦法.doc">董事會績效評估辦法</a></td>
              </tr>
              <tr>
                <td><a href="/files/pdf/永續發展實務守則.pdf">永續發展實務守則</a></td>
              </tr>
              <tr>
                <td><a href="/files/pdf/公司各項員工福利措施、退休制度與其實施情形.pdf">公司各項員工福利措施、退休制度與其實施情形</a></td>
              </tr>
              <tr>
                <td><a href="/files/doc/內部重大資訊處理作業.docx">內部重大資訊處理作業</a></td>
              </tr>
              <tr>
                <td><a href="/files/pdf/資通安全風險管理架構，訂定資通安全政策、具體管理方案及投入資通安全管理之資源.pdf">資通安全風險管理架構，訂定資通安全政策、具體管理方案及投入資通安全管理之資源</a></td>
              </tr>
              <tr>
                <td><a href="/files/pdf/112年供應商管理政策及執行情形.pdf">112 年供應商管理政策及執行情形</a></td>
              </tr>
              <tr>
                <td><a href="/files/pdf/風險管理政策、程序、風險管理範疇、組織架構及其運作情形.pdf">風險管理政策、程序、風險管理範疇、組織架構及其運作情形</a></td>
              </tr>
              <tr>
                <td><a href="/files/pdf/112年智慧財產管理計畫及當年度執行情形.pdf">112 年智慧財產管理計畫及當年度執行情形</a></td>
              </tr>
            </tbody>
          </table>
        </section>
        <section class="partners" id="公司辦法">
          <h2 class="text-left">公司辦法</h2>
          <hr class="d-inline-block pr-1 mt-0">
            <table class="table wow fadeInUp">
              <tbody>
                <tr>
                  <td class="border-0"><a href="/files/pdf/公司章程.pdf">公司章程</a></td>
                </tr>
                <tr>
                  <td><a href="/files/pdf/資金貸與他人作業程序_1050622.pdf">資金貸與他人作業程序</a></td>
                </tr>
                <tr>
                  <td><a href="/files/pdf/p03.pdf" >集團企業特定公司及關係人交易作業程序</a></td>
                </tr>
                <tr>
                  <td><a href="/files/pdf/取得或處分資產處理程序.pdf">取得或處分資產處理程序</a></td>
                </tr>
                <tr>
                  <td><a href="/files/pdf/p05.pdf" >股東會議事規則</a></td>
                </tr>
                <tr>
                  <td><a href="/files/pdf/背書保證作業程序.pdf" >背書保證作業程序</a></td>
                </tr>
                <tr>
                  <td><a href="/files/pdf/董事選舉辦法.pdf">董事選舉辦法</a></td>
                </tr>
                <tr>
                  <td><a href="/files/pdf/董事會議事規範.pdf" >董事會議事規範</a></td>
                </tr>
                <tr>
                  <td><a href="/files/pdf/p09.pdf" >買回股份轉讓員工辦法</a></td>
                </tr>
              </tbody>
            </table>
        </section>
        <section id="前十大股東名單">
          <h2 class="text-left">前十大股東名單</h2>
          <hr class="d-inline-block pr-1 mt-0">
          <p>最新資料以<a href="https://mops.twse.com.tw/mops/web/t144sb10_w">公開資訊觀測站</a>為主（停過日期：2023 年 4 月 23 日）</p>
          <table class="table table-bordered table-striped">
            <thead class="bg-blue4">
              <tr>
                <th>主要股東名稱</th>
                <th>持有股數</th>
                <th>持股比例</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>余宏揚</td>
                <td>3,558,449</td>
                <td>7.53%</td>
              </tr>
              <tr>
                <td>神通電腦股份有限公司</td>
                <td>1,336,409</td>
                <td>2.83%</td>
              </tr>
              <tr>
                <td>林聖懿</td>
                <td>867,090</td>
                <td>1.83%</td>
              </tr>
              <tr>
                <td>何曉倩</td>
                <td>699,000</td>
                <td>1.48%</td>
              </tr>
              <tr>
                <td>花旗託管柏克萊資本ＳＢＬ／ＰＢ投資專戶</td>
                <td>491,000</td>
                <td>1.04%</td>
              </tr>
              <tr>
                <td>余沁薇</td>
                <td>477,000</td>
                <td>1.01%</td>
              </tr>
              <tr>
                <td>宋祥榮</td>
                <td>476,352</td>
                <td>1.01%</td>
              </tr>
              <tr>
                <td>林青龍</td>
                <td>450,845</td>
                <td>0.95%</td>
              </tr>
              <tr>
                <td>謝瑞美</td>
                <td>419,000</td>
                <td>0.89%</td>
              </tr>
              <tr>
                <td>許淑英</td>
                <td>390,000</td>
                <td>0.83%</td>
              </tr>
            </tbody>
          </table>
          <br>
          <small>主要股東名單：<br>股權比例達 5% 以上之股東或股權比例占前 10 名之股東名稱、持股數額及比例。</small>
        </section>
        <section id="人權">
          <h2 class="text-left">人權政策</h2>
          <hr class="d-inline-block pr-1 mt-0">
          <p>本公司遵守相關勞動法規及遵循「聯合國世界人權宣言」、「聯合國商業與人權指導原則」、「聯合國全球盟約」與「聯合國國際勞動組織」等國際人權公約所揭櫫之原則，保障員工之合法權益及雇用政策無差別待遇等，建立工作規則、勞工申訴管道、員工心理健康諮商申請辦法、員工健康檢查申請辦法、性騷擾防治及處理要點、提案獎勵制度實施辦法、教育訓練外訓申請辦法、新進人員招募流程等適當之管理方法、程序，落實如下：</p>
          <ul class="disc">
            <li>本公司僱用員工，不因種族、階級、語言、思想、宗教、黨派、籍貫、性別、容貌、五官、出生地、性傾向、年齡、婚姻、身心障礙或以往工會會員身分而予以歧視。</li>
            <li>禁用童工、禁止人口販運、禁止強迫勞動。</li>
            <li>提供員工合理工作時間、薪酬及獎金紅利制度，並於每年舉行兩次考評，依據經營成果直接反映於員工薪酬上。</li>
            <li>女性員工佔公司近一半。</li>
            <li>辦理員工教育訓練。</li>
            <li>落實保險計劃與假勤制度。</li>
            <li>重視員工健康並提供健檢補助。</li>
            <li>依法提撥退休金。</li>
            <li>設置職工福利委員會。</li>
            <li>提供員工旅遊補助。</li>
            <li>本公司提供員工安全與健康工作環境等相關—措施如下：<ul class="decimal">
              <li>各樓層均設置火災警報器並每季做消防設備檢測。</li>
              <li>於定點設置自動體外心臟去顫器（AED）。</li>
              <li>於定點設置消防栓及滅火器。並不定期進行大樓安全逃生及滅火器使用教學。</li>
              <li>依市政府衛生局「菸害防治法新規定」辦公室全面禁菸。</li>
              <li>訂定「員工健康檢查辦法」並與健檢中心合作提供員工健檢補助。</li>
              <li>於辦公室設置血壓計、酒精消毒器與空氣清淨機。</li>
            </ul></li>
          </ul>
          <p>各項人權議題評估、風險減緩措施、具體作法與成效：</p>
          <ul class="disc">
            <li>提供具指標性及競爭力的薪資水準，並有透明且暢通的晉升管道與職涯發展。</li>
            <li>超額聘僱身心障礙員工。</li>
            <li>定時檢視評估人權制度：每年至少兩次審視本公司工作規則。</li>
            <li>人權相關教育訓練：本公司絕無雇用童工或非法勞工，也無發生族裔、性別、宗教、黨派、性傾向等岐視，或性騷擾、職場霸凌等事件；本公司於工作規則等管理規章，均明訂人權保障相關條文，以符合國際人權保障原則。本公司 112 年對員工實施人權保障相關教育訓練，共計 267 位同仁完成訓練，總時數為 44.5 小時，未來，將持續關注人權障議題，推動相關教育訓練，以提高人權保障意識，降低相關風險發生的可能性。</li>
          </ul>
        </section>
        <section id="反貪腐">
          <h2 class="text-left">反貪腐賄賂教育訓練</h2>
          <hr class="d-inline-block pr-1 mt-0">
          <p>目前訓練人次：267 人<br>時數：22.25 小時</p>
          <ul class="disc">
            <li>反貪腐賄賂已成全球性的問題，各國紛紛訂定反貪腐賄賂政策、法律來打擊跟防止貪腐賄賂，我們越來越多的客戶也在合約中加入反貪腐賄賂條款。</li>
            <li>貪腐賄賂的罰款跟法律刑責相當的沉重。同仁不可不慎。</li>
            <li>本課程目的在將貪腐賄賂的觀念，簡單扼要的介紹給同仁，以防止同仁觸了法而不自知。</li>
          </ul>
          <div><a class="color-blue" href="https://web.ares.com.tw/Aresoa/training/quiz/" rel="noindex nofollow">訓練內容</a></div>
        </section>
      </div>
    </div>
  </div>

<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script>
<svg class="d-none hide" aria-hidden="true">
  <defs>
    <symbol viewBox="0 0 512 512" id="word"><g fill="#1565c0"><path d="M294.656 13.014a10.667 10.667 0 0 0-9.045-2.133l-277.333 64A10.668 10.668 0 0 0 0 85.377v362.667a10.667 10.667 0 0 0 9.045 10.539l277.333 42.667c5.823.895 11.269-3.099 12.164-8.921.082-.535.124-1.076.124-1.617V21.377a10.661 10.661 0 0 0-4.01-8.363z"/><path d="M501.334 458.71H288c-5.891 0-10.667-4.776-10.667-10.667s4.776-10.667 10.667-10.667h202.667V74.71H288c-5.891 0-10.667-4.776-10.667-10.667S282.109 53.377 288 53.377h213.333c5.891 0 10.667 4.776 10.667 10.667v384c0 5.891-4.775 10.666-10.666 10.666z"/></g><path d="M181.334 352.044a10.666 10.666 0 0 1-10.24-7.723L138.667 230.87 106.24 344.321c-2.342 5.661-8.83 8.352-14.492 6.01a11.092 11.092 0 0 1-6.01-6.01L43.072 194.988c-1.786-5.614 1.318-11.612 6.932-13.398 5.614-1.786 11.612 1.318 13.398 6.932.063.198.12.398.172.599L96 302.55l32.427-113.45c2.342-5.661 8.83-8.352 14.492-6.01a11.092 11.092 0 0 1 6.01 6.01l32.405 113.451 32.427-113.429c1.535-5.614 7.331-8.921 12.945-7.386l.239.068c5.66 1.622 8.935 7.523 7.317 13.184l-42.667 149.333a10.667 10.667 0 0 1-10.261 7.723z" fill="#fafafa"/><g fill="#1565c0"><path d="M458.667 138.71H288c-5.891 0-10.667-4.776-10.667-10.667s4.776-10.667 10.667-10.667h170.667c5.891 0 10.667 4.776 10.667 10.667 0 5.892-4.776 10.667-10.667 10.667zM458.667 202.71H288c-5.891 0-10.667-4.776-10.667-10.667s4.776-10.667 10.667-10.667h170.667c5.891 0 10.667 4.776 10.667 10.667s-4.776 10.667-10.667 10.667zM458.667 266.71H288c-5.891 0-10.667-4.776-10.667-10.667s4.776-10.667 10.667-10.667h170.667c5.891 0 10.667 4.776 10.667 10.667 0 5.892-4.776 10.667-10.667 10.667zM458.667 330.71H288c-5.891 0-10.667-4.776-10.667-10.667s4.776-10.667 10.667-10.667h170.667c5.891 0 10.667 4.776 10.667 10.667 0 5.892-4.776 10.667-10.667 10.667zM458.667 394.71H288c-5.891 0-10.667-4.776-10.667-10.667s4.776-10.667 10.667-10.667h170.667c5.891 0 10.667 4.776 10.667 10.667 0 5.892-4.776 10.667-10.667 10.667z"/></g></symbol>
  </defs>
</svg>
</body>

</html>

