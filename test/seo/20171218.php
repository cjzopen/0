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
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
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
  <time>2017-12-18</time>
  <hr>
  詳細內容：<a href="https://support.google.com/webmasters/answer/7451184">SEO 入門指南</a>
  <br>
  <section>
    <h2>讓您的網站適合透過行動裝置瀏覽</h2>
    <p class="red">在 2016 年下半年，Google 已經開始實驗以行動版網站的內容為主，進行排名、剖析結構化資料和產生摘要。</p>
  </section>
  <section>
    <h2>網頁標題</h2>
    <ul>
    <li>選擇流暢易讀，而且可以有效傳達網頁內容主題的標題。</li>
    <li>每個網頁都要有獨一無二的標題</li>
    <li>使用簡短而明確的標題</li>
    </ul>
    <h3>避免</h3>
    <ul>
    <li class="red">使用既冗長又對使用者沒太大用處的標題。</li>
    <li>在標題標記中堆砌不必要的關鍵字。</li>
    </ul>
  </section>
  <section>
    <h2>說明中繼標記(網頁描述)</h2>
    <ul>
    <li>提供準確的網頁內容摘要</li>
    <li>為每個網頁撰寫獨一無二的說明</li>
    </ul>
    <h3>避免</h3>
    <ul>
    <li>使用籠統的描述，如「這是一個網頁」或「關於棒球卡的網頁」。</li>
    <li>在說明中只堆砌了一堆關鍵字。</li>
    <li>直接將文件的所有內容複製貼到說明中繼標記中。</li>
    </ul>
  </section>
  <section>
    <h2>標頭(h1~h6)</h2>
    <ul>
      <li>想像您在撰寫大綱</li>
      <li>需格外謹慎使用</li>
    </ul>
    <h3>避免</h3>
    <ul class="red">
      <li>標頭當成粗體用途</li>
      <li>過度使用</li>
      <li>文字過長</li>
      <li>為了設定文字樣式而使用標頭標記，而不是用標頭標記來呈現結構。</li>
    </ul>
  </section>
  <section>
    <h2>瞭解搜尋引擎使用網址的方式</h2>
    <p><通訊協定>://<主機名稱>/<路徑>/<檔案名稱>?<查詢字串>#<片段> <br> https://www.example.com/RunningShoes/Womens.htm?size=8#info</p>
    <ul>
      <li class="red">搜尋引擎一般會忽略<片段></li>
      <li>「https://example.com/fish」和「https://example.com/fish/」會被視為兩個不同網址</li>
    </ul>
  </section>
  <section>
    <h2>最佳化內容</h2>
    <p>為使用者 (而非搜尋引擎) 進行內容最佳化。並妥善編排您的內容，這樣可以讓訪客清楚瞭解一個內容主題的開始和結束位置。將您的內容按照邏輯分段，可以幫助使用者更快找到他們需要的內容。</p>
    <h3>避免</h3>
    <ul>
      <li>把各種不同主題的內容一股腦兒地塞在同一個網頁上，而且沒有分段、子標題，也不用版面配置區隔內容。</li>
      <li class="red">在網站各處放置重複或幾近相同的內容。</li>
      <li>重述 (甚至是複製) 現有內容，這樣做並不會為使用者帶來其他好處。</li>
      <li class="red">針對搜尋引擎插入大量不必要的關鍵字，這些關鍵字對使用者者毫無意義且易使人厭煩。</li>
      <li class="red">包含「連至這個網頁」之類的文字，這對使用者而言毫無意義。</li>
    </ul>
  </section>
  <section>
    <h2>善加使用連結</h2>
    <p>撰寫合適且簡明的超連結文字</p>
    <h3>避免</h3>
    <ul>
      <li class="red">撰寫籠統的錨定文字，例如「網頁」、「文章」或「按一下這裡」。</li>
      <li class="red">經常使用網頁網址做為錨定文字；雖然有時的確可以這麼做，例如宣傳或提及某個新網站的地址時。</li>
      <li>撰寫較長的錨定文字</li>
      <li>特意為搜尋引擎使用大量關鍵字或冗長的錨定文字。</li>
      <li>建立不必要的連結，這對使用者瀏覽網站沒有幫助。</li>
    </ul>
  </section>
  <section>
    <h2>圖片為何要設定 alt</h2>
    <ul>
    <li>如果使用者是透過輔助技術 (例如螢幕閱讀器) 瀏覽您的網站，alt 屬性的內容就可以為他們提供圖片的相關資訊。</li>
    <li>如果您把圖片設成連結，該圖片的替代文字就有類似文字連結錨定文字的作用。</li>
    <li>將圖片的檔案名稱和替代文字最佳化，可讓 Google 圖片搜尋等圖片搜尋專案更容易瞭解您的圖片。</li>
    </ul>
    <h3>最佳做法</h3>
    <p class="red">檔案名稱和替代文字同樣是以簡明扼要為佳。並避免在替代文字中堆砌關鍵字，或者複製並貼上完整的句子。<br>過長的替代文字可能會被視為垃圾內容。</p>
    <h3>避免</h3>
    <ul>
      <li>使用籠統的檔案名稱</li>
      <li class="red">檔案名稱過長</li>
      <li class="red">撰寫過長的替代文字</li>
    </ul>
  </section>
  <section>
    <h2>分析搜尋曝光度和使用者行為</h2>
  </section>
  <section>
    <h2>其它-1</h2>
    <ul>
      <li><a href="https://newsroom.fb.com/news/2017/12/news-feed-fyi-fighting-engagement-bait-on-facebook/">Fighting Engagement Bait on Facebook</a></li>
      <li><a href="https://www.facebook.com/ebcmoney/videos/1211699028932164/">video</a></li>
      <li><a href="http://www.yesharris.com/seo-social-signal/">社交訊號是否會影響 SEO的排名</a></li>
      <li>fb 粉絲專頁的權重越來越低，而社團的權重越來越高 (忘記在哪看的)</li>
    </ul>
  </section>
  <section>
    <h2>其它-2</h2>
    <p>SVG 壓縮</p>
    <p>在 illustrator 做好 svg 之後，用記事本打開會長這樣</p>
    <code>
&lt;!-- Generator: Adobe Illustrator 18.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  --&gt;
&lt;!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"&gt;
&lt;svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 52.502 52.502" style="enable-background:new 0 0 52.502 52.502;" width="20px" height="20px" xml:space="preserve"&gt;
&lt;g&gt;
  &lt;path style="fill:#FEFEFE;" d="M21.524,16.094V4.046L1.416,23.998l20.108,20.143V32.094c0,0,17.598-4.355,29.712,16
    c0,0,3.02-15.536-10.51-26.794C40.727,21.299,34.735,15.696,21.524,16.094z"/&gt;
  &lt;path style="fill:#FEFEFE;" d="M51.718,50.857l-1.341-2.252C40.163,31.441,25.976,32.402,22.524,32.925v13.634L0,23.995
    L22.524,1.644v13.431c12.728-0.103,18.644,5.268,18.886,5.494c13.781,11.465,10.839,27.554,10.808,27.715L51.718,50.857z
     M25.645,30.702c5.761,0,16.344,1.938,24.854,14.376c0.128-4.873-0.896-15.094-10.41-23.01c-0.099-0.088-5.982-5.373-18.533-4.975
    l-1.03,0.03V6.447L2.832,24.001l17.692,17.724V31.311l0.76-0.188C21.354,31.105,23.014,30.702,25.645,30.702z"/&gt;
&lt;/g&gt;
&lt;/svg&gt;
    </code>
    <p>但對於網頁來說，這段 code 有太多贅詞，會佔掉 html 文本的空間，你敢拿這段程式碼叫 Justin 貼嗎？所以需要再處理讓它好看一點</p>
    <p>SVG 壓縮處理網站：<a href="https://jakearchibald.github.io/svgomg/">SVGOMG</a><br>把 svg 拉進去，下載下來就會變下面這樣</p>
    <code>
&lt;svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52.502 52.502" width="20" height="20"&gt;&lt;g fill="#fefefe"&gt;&lt;path d="M21.524 16.094V4.046L1.416 23.998l20.108 20.143V32.094s17.598-4.355 29.712 16c0 0 3.02-15.536-10.51-26.794.001-.001-5.991-5.604-19.202-5.206z"/&gt;&lt;path d="M51.718 50.857l-1.341-2.252c-10.214-17.164-24.401-16.203-27.853-15.68v13.634L0 23.995 22.524 1.644v13.431c12.728-.103 18.644 5.268 18.886 5.494 13.781 11.465 10.839 27.554 10.808 27.715l-.5 2.573zM25.645 30.702c5.761 0 16.344 1.938 24.854 14.376.128-4.873-.896-15.094-10.41-23.01-.099-.088-5.982-5.373-18.533-4.975l-1.03.03V6.447L2.832 24.001l17.692 17.724V31.311l.76-.188c.07-.018 1.73-.421 4.361-.421z"/&gt;&lt;/g&gt;&lt;/svg&gt;
    </code>
    <p>從 1114 字變成 687 字，若再加上換行、縮排和空格則不只 1114</p>
  </section>
  <footer>
  <h2></h2>
  <h5 class="text-right">Report by cj .</h5>
  </footer>
</div>
</body>
</html>