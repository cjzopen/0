<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <title></title>
  <meta name="description" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<style>
@import url(https://fonts.googleapis.com/earlyaccess/notosanstc.css);
*{
  margin: 0;
  padding: 0;
  list-style:none;
}
#all{
  max-width:1240px;
  margin:auto;
  padding:12px;
  font-family:"Noto Sans TC", "FangSong", Arial, serif;
}
h2{
  font-size: 2em;
  margin-top:3em;
}
p{
  font-size: 1.25em;
}
img{
  max-width:100%;
  height:auto;
  display:block;
  border:1px solid #bbb;
  box-shadow: 4px 4px 8px #999;
  margin:1em;
}
section+section{
  border-top: 1px solid #efefef;
}
.red{color:#d85030;}
ul>li{list-style-type: disc;}
</style>
<body>
  <div id="all">
  <h1>SEO 觀察報告</h1>
  <time>2018-08-30</time>
  <br>
  <section>
    <h2>反向連結網站的品質分數普遍不高或都是 nofollow</h2>
    <img width="720" src="img/201808301.png" alt="">
    <p>反向連結的品質與數量是拉高搜尋排名的方式之一。以 ArgoERP 為例，分數都落在 38~20 之間，且38還用 nofollow。</p>
    <p>鼎新靠一個奇怪的互聯網拉高，正航則是靠 itunes 拉高。</p>
  </section>
  <section>
    <h2>網頁描述(meta description)</h2>
    <p>對搜尋行為的ux有幫助，本身對於排名的影響力其實見仁見智。像是一些 pdf、word 本身並沒有網頁描述，或是網頁描述留白的知名論壇，排名照樣很高。</p>
    <h3>網頁描述是多變的</h3>
    <blockquote>Google automatically creates many of the meta descriptions on their own, regardless of the ones they wrote and regardless of whether or not the page appeared in the segmented groups they created for the study.</blockquote>
    <img src="img/201808302.png" alt="">
    <p>上圖為「在製品 mes」和「mes」對同一網頁的搜尋結果。</p>
    <p>網頁描述 對google機器人來說是備案，一般情況下它會配合使用者搜尋的關鍵字 和 網頁內容 產生網頁描述。所以有人建議把網頁描述寫成CTA、USP、數字取向，就跟寫google ads 的文案一樣。</p>
    <p>例外情況則會直接抓取網站的網頁描述，例如 中科院資安方案「ME 通訊軟體資安方案不同於市售類似產品，使用者無需重新學習操作介面」</p>
    <small>註1：google 網頁描述長度為160字節(不到80個中文字)。</small><br>
    <small>註2：網頁標題桌機有長度限制，但行動裝製貌似沒有。</small>
  </section>
  <section>
    <h2>語音搜尋比例越來越高</h2>
    <p>為因應語音搜尋使用者，有人認為網頁內容要更加口語化。</p>
    <!-- <p>3w1h(或4w1h)更屹立不搖</p> -->
    <a href="https://www.wordstream.com/blog/ws/2018/04/10/voice-search-statistics-2018">voice search statistics</a>
      <!-- <li>google 的結構化資料新增 speakable(BETA)</li> -->
  </section>
  <section>
    <h2>search console 不再記錄匿名查詢</h2>
    <blockquote>
      <strong>August 19 onward</strong>
      <p>Chart totals no longer include anonymous* (rare) queries when you apply a query filter. Previously, the chart totals included all anonymous queries when a "Queries not containing:" filter was applied. Because of this, you might see a drop in clicks and impressions when adding a filter that excludes specific queries. We believe that omitting anonymous queries from all query-filtered results is more consistent.</p>
      <small>* An anonymous query is a query submitted only a few users. We omit these queries from results to protect user privacy. Some sites will have very few unique queries; other sites will have a large proportion of anonymous queries.</small>
    </blockquote>
  </section>
  <section>
    <h2>其它</h2>
    <ul>
      <li><a href="https://www.awoo.com.tw/blog/2018/08/medic-update/">Google 7/20 演算法更新</a></li>
      <li><a href="https://madmimi.com/p/5b15bc">策略與戰術</a></li>
      <li><a href="https://www.udacity.com/course/responsive-images--ud882">網站圖片rwd免費教程</a></li>
      <li><a href="https://www.searchenginejournal.com/duckduckgo-receives-10m-financing-to-expand-global-impact/266199/">DuckDuckGo Receives $10M Financing to Expand Global Impact</a></li>
      <li><a href="https://www.ithome.com.tw/news/125530">Chrome與Firefox雙雙在今年10月將終止對賽門鐵克憑證的信賴</a></li>
      <li><a href="https://blog.google/products/ads/create-effective-ads/">Create more effective ads for today’s consumer</a></li>
    </ul>
  </section>
  <footer>
  <h2></h2>
  <h5 class="text-right">Report by cj .</h5>
  </footer>
</div>
</body>
</html>