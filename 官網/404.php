<?php
if(http_response_code()==403){
  $st='403';
  $st_text='此網頁目前不公開';
}else{
  http_response_code(404);
  $st='404';
  $st_text='我們找不到您要瀏覽的網頁';
}
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$page['title']='找不到網頁 | 資通電腦';
$page['description']='';
$page['other']=array('<meta name="robots" content="noindex, nofollow">');
include_once $_SERVER['DOCUMENT_ROOT'].'/template/head.php';
?>
  <figure class="slider">
    <img class="img-fluid" src="/img/investor/investor-banner-400.png" alt="*">
    <figcaption class="color-blue">
      <h1 class="h3"><?= $st_text ?></h1>
    </figcaption>
  </figure>
  <section>
    <div class="container">
      <p class="text-center py-5 my-5">抱歉！<?= $st_text ?>。<br>您可以至 <a class="color-blue2" href="/sitemap/?from=404">網站地圖</a> 查看主要頁面，造成不便還請見諒。</p>
      <h2 class="text-center color-blue mt-5 pt-5">也許您對下列內容會有興趣</h2><hr>
      <div class="row justify-content-center">
        <div class="col-12 col-md-4">
          <div class="pb-3">
            <img class="img-fluid" src="https://hcp.ares.com.tw/img/products/features/global-international.svg" alt="*">
          </div>
          <h3 class="h5">人力資產管理</h3>
          <p>不斷更新與進化的 HCP，上百種參數解決 HR 面臨的各種狀況，帶領跨國企業提升管理效率。</p>
          <ul class="disc">
            <li><a class="color-blue2" href="https://hcp.ares.com.tw/products/modules/insurance?from=404">符合當地相關法律</a></li>
            <li><a class="color-blue2" href="https://hcp.ares.com.tw/products/modules/e-recruiting?from=404">完整 e 化企業招募流程</a></li>
            <li><a class="color-blue2" href="https://hcp.ares.com.tw/products/?from=404">高彈性與數位化</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-4">
          <div class="pb-3">
            <img class="img-fluid" src="https://www.ares.com.tw/img/product/fortify/fortify-4.svg" alt="*">
          </div>
          <h3 class="h5">原始碼安全檢測</h3>
          <p>運用 SCA 與 WebInspect 分析測試，對應各種環境與語言，強化您的應用程式安全性。</p>
          <ul class="disc">
            <li><a class="color-blue2" href="https://www.ares.com.tw/products/fortify/?from=404">Fortify 產品介紹</a></li>
            <li><a class="color-blue2" href="https://marketing.ares.com.tw/newsletter/2019-03-cyber-security/it?from=404">SCA 特色</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/template/footer.php';
?>
</body>
</html>
