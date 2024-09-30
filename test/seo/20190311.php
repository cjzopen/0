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
@import url(https://fonts.googleapis.com/css?family=Noto+Sans+TC:400,700&amp;subset=chinese-traditional);
*{
  margin: 0;
  padding: 0;
  list-style:none;
}
body{font-size: 16px;}
#all{
  max-width:1240px;
  margin:auto;
  padding:12px;
  font-family:'Helvetica Neue', 'Noto Sans TC', 'FangSong', Arial, serif;
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
footer{
  margin-top: 10rem;
}
</style>
<body>
  <div id="all">
  <h1>...</h1>
  <time>2019-03-11</time>
  <br>
  <section>
    <h2>前言</h2>
    <p><a href="https://webmasters.googleblog.com/2009/09/google-does-not-use-keywords-meta-tag.html">Google does not use the keywords meta tag in web ranking</a></p>
    <p>google忽略Meta keywords，那 Bing呢？</p>
    <blockquote>
      <p>簡單來說，Bing把meta keywords當成一個spam signal (垃圾訊號)，如果你的meta keywords塞了一堆關鍵字，就可能會被歸類為垃圾網站。<br>因此雖然Bing會分析meta keywords的資料，但是卻不是正向訊號，不如不要用就沒有這個風險。</p>
    </blockquote>
    <a href="https://seo.dns.com.tw/archives/3204">Meta keywords 對於 SEO 有何意義？</a>
  </section>
  <section>
    <h2>Fortify</h2>
    <img src="img/20190311-0.png" alt="">
    <p>這兩頁不只黃金交叉，總流量還下降，排名也下降。</p>
    <p>另外打著fortify名號的網站近期越來越多，要再觀察。</p>
    <img src="img/20190311-3.png" alt="">
    <p>有興趣的人可以進去看這個網頁的原始碼與流量來源，是SEO的最高境界。</p>
    <p>可能沒有人會看，所以寫在這裡 <span style="background:#333;">沒有任何SEF，連h1 h2都沒有，description 還貼直接複製 title，外部連結也是0，連廣告都沒有，所有流量都是自然搜尋</span></p>
  </section>
  <section>
    <h2>eGUI</h2>
    <img src="img/20190311-1.png" alt="">
    <img src="img/20190311-2.png" alt="">
    <p>從上面2張圖可以看出eGUI的潛力，就算有228連假工作階段還是能較前期上升38%</p>
    <p>另外跟fortify一樣，現在出現在搜尋結果的頁面已經不是產品簡介了，而是現況。</p>
  </section>
  <section>
    <h2>ArgoERP</h2>
    <img src="img/20190311-.png" alt="">
    <p>流量雖然和之前差不多，但由於我把 什麼是erp 的權重丟給首頁，搜尋erp目前是首頁出現在搜尋結果中，而不是之前的 什麼是erp。覺得不好所以會再改回來。</p><br>
    <p>其它網頁沒有很明顯的變化。</p>
  </section>
  <section>
    <h2>Firefox 65以上的版本，只要花5秒設定，就可以無痛屏蔽 GA 等常見流量分析工具</h2>
    <p>目前看不出來有啥影響，可能只有我會去按？</p>
  </section>
  <section>
    <h2>Google承認在3月初更改演算法</h2>
    <p><a href="https://seo-hacker.com/analyzing-googles-march-algorithm-update/">Analyzing Google’s March Algorithm Update</a></p>
    <p>一般認為是對於網站內容品質的更近一步的更新。</p>
  </section>
  <section>
    <h2>「產品」搜尋結果將會改變</h2>
    <p><a href="https://webmasters.googleblog.com/2019/02/help-customers-discover-your-products.html">Help customers discover your products on Google</a></p>
    <p>Google對於「產品」搜尋結果的更新，可能要到Google Merchant Center設定。</p>
  </section>
  <section>
    <h2>觸控面積</h2>
    <img src="img/20190311-4.png" alt="">
    <p>Google欽點的網頁分析工具Lighthouse，在4.2版本中，SEO 對於太小或太近的觸控面積(超連結、按鈕)將會扣分，其它部分可以自己去try。</p>
  </section>
  <section>
    <h2>Google ads 9月開始把「平均排名」指標刪除</h2>
    <p>原因在於容易誤導，例如平均排名4 卻顯示在自然搜尋結果的下面。取而代之的是search top IS 等指標。</p>
  </section>
  <section>
    <h2>其它</h2>
    <img src="img/20190311-5.png" alt="">
    <p>鑒於ads有記錄可以查，若網站做了什麼很嚴重的事，可以記錄在GA裡才不會忘。</p>
  </section>
  <footer>
  <!-- <h2></h2> -->
  <h5 class="text-right">Report by cj .</h5>
  </footer>
</div>
</body>
</html>