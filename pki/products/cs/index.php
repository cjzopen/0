<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/setting.php');

$page['title']='資料（庫）加密及遮罩伺服器';
// $page['css']=array('/lib/swiper4.3.3/swiper.min.css','/css/home.css');
$page['description']='Crypto Server資料庫加密伺服器支援個資加密，杜絕外洩與不當利用；遮罩技術去除資料與個人識別性，增加個資正當使用性，確保企業資料加密安全無虞。';
$page['canonical']=HOST_LINK.'/products/cs/';
$page['hreflang']=HOST_LINK.'/en/products/cs/';

require(PHP_WEB_ROOT.'/template/head.php');
?>
<div id="all">
<main>
<?php
$breadcrumb = '資料加密及遮罩伺服器';
include_once('../_menu.php');
?>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 d-none d-md-block text-center" aria-hidden="true">
          <img data-src="/img/products/cs/cs.png" alt="*" class="img-fluid lazyload">
        </div>
        <div class="col-12 col-md-6">
          <h1 class="h2"><div class="border-bottom border-width-3 border-color-red">資料庫加密及遮罩伺服器</div>Crypto Server</h1>
          <p>每秒加密 62,300 筆，安全效率都兼顧！</p>
          <p class="text-red">個資一體適用之平台利器，不但可針對資料庫與資料檔案加密、更可針對個資進行遮罩保護，絕對達成內部資料滴水不漏。</p>
          <ul class="disc text-red">
            <li><span class="text-black">企業機密資產受到保護</span></li>
            <li><span class="text-black">傳遞資料的安全</span></li>
            <li><span class="text-black">全面掌握存取與授權</span></li>
            <li><span class="text-black">安全加密</span></li>
            <li><span class="text-black">個資解密遮罩</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container text-center">
      <h2>架構</h2><hr>
      <img data-src="/img/products/cs/structure.png" alt="架構" class="img-fluid lazyload">
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center">特色</h2><hr>
      <ul class="row disc h4 text-red">
        <li class="col-12 col-md-6">
          <h3 class="h4">支援各式資料庫</h3>
          <p class="text-black h5 pr-5">不限資料庫種類，包括 MS SQL、Oracle、MySQL、Sybase、DB2 等。</p>
        </li>
        <li class="col-12 col-md-6">
          <h3 class="h4">支援多種程式語言</h3>
          <p class="text-black h5 pr-5">適用多種程式語言，包括 .NET、JSP、ASP、PHP、C、Visual Basic、Delphi、Java、PowerBuilder 等。</p>
        </li>
        <li class="col-12 col-md-6">
          <h3 class="h4">支援多平台</h3>
          <p class="text-black h5 pr-5">跨作業平台特性，包括 Windows、Linux、Solaris、Unix、IBM AIX 等。</p>
        </li>
        <li class="col-12 col-md-6">
          <h3 class="h4">Key 的保全</h3>
          <p class="text-black h5 pr-5">使用硬體加密模組（HSM），通過 FIPS 140-2 Level 3 安全認證，將加密金鑰儲存於硬體密碼模組內，並具有防止盜取資料之金鑰自動銷毀功能。</p>
        </li>
        <li class="col-12 col-md-6">
          <h3 class="h4">加密效率</h3>
          <p class="text-black h5 pr-5">使用對稱金鑰批次加密，平均測試結果約每秒 62300 次。</p>
        </li>
        <li class="col-12 col-md-6">
          <h3 class="h4">多元化加解密機制</h3>
          <p class="text-black h5 pr-5">支援對稱及非對稱演算法高達 140 多種（包含 3DES、AES、ARS256、RIJNDAEL、SKIPJACK、RC6、CDMF、IDEA、BLOWFISH、TWOFISH、CAST5、CAST128、CAST256、SERPENT、RC4、SEED、CAMELLIA 等）。</p>
        </li>
        <li class="col-12 col-md-6">
          <h3 class="h4">支援文件及資料庫加密</h3>
          <p class="text-black h5 pr-5">可加密資料庫的欄位資料，也可支援文件加密。</p>
        </li>
        <li class="col-12 col-md-6">
          <h3 class="h4">去識別化規則設定</h3>
          <p class="text-black h5 pr-5">依據個資盤點要求，輕鬆設定遮罩欄位及規格。</p>
        </li>
      </ul>
    </div>
  </section>
  <section>
    <div class="container text-center">
      <h2>優勢</h2><hr>
      <ul class="row justify-content-center">
        <li class="col-12 col-lg-4 mb-3">
          <img data-src="/img/products/cs/advantage-1.png" alt="*" class="img-fluid lazyload">
          <div class="h4">一體適用</div>
          <ol class="disc text-red mx-auto d-inline-block text-left">
            <li><span class="text-black">欄位加密</span></li>
            <li><span class="text-black">文件加密</span></li>
            <li><span class="text-black">資料交換需求</span></li>
            <li><span class="text-black">個資遮罩</span></li>
          </ol>
        </li>
        <li class="col-12 col-lg-4 mb-3">
          <img data-src="/img/products/cs/advantage-2.png" alt="*" class="img-fluid lazyload">
          <div class="h4">成本低廉</div>
          <ol class="disc text-red mx-auto d-inline-block text-left">
            <li><span class="text-black">彈性化的應用系統與金鑰管理</span></li>
            <li><span class="text-black">跨語言、跨平台、跨資料庫</span></li>
            <li><span class="text-black">一次導入全企業之個資平台</span></li>
          </ol>
        </li>
        <li class="col-12 col-lg-4 mb-3">
          <img data-src="/img/products/cs/advantage-3.png" alt="*" class="img-fluid lazyload">
          <div class="h4">保障企業資產</div>
          <ol class="disc text-red mx-auto d-inline-block text-left">
            <li><span class="text-black">確保機密資訊不外洩</span></li>
            <li><span class="text-black">DBA 賦予適當權力</span></li>
          </ol>
        </li>
      </ul>
    </div>
  </section>
</main>
<?php
require(PHP_WEB_ROOT.'/template/foot.php');
?>
</div>
</body>
</html>