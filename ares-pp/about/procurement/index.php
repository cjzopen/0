<?php
require($_SERVER['DOCUMENT_ROOT'].'/src/setting.php');

$page['title'] = '文件加密保護系統軟體採購評估';
$page['description'] = '運用 9 大問題點評估企業的文件加密保護系統是否安全。並進一步協助您遠離資安漏洞，徹底保護內外部文件安全。';
$canonical='https://ares-pp.ares.com.tw/about/procurement/';
// $hreflang = 'https://ares-pp.ares.com.tw/en/about/';

require($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<div class="all">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/menu.php');
aimg(
  '/public/img/procurement/procurement.jpg', //圖片
  null, //srcset
  '*', //alt
  null, //圖片上的字
  null //字的 class
);
?>
  <main>
    <nav class="breadcrumb" aria-label="breadcrumb">
      <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="../" itemprop="item"><span itemprop="name">產品介紹</span></a>
          <meta itemprop="position" content="2" />
        </li>
        <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name">採購評估</span></a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>
    </nav>
    <section class="pb-0">
      <div class="container">
        <h1 class="text-center mb-0">您企業的<span class="main-color">文件加密保護系統</span>夠安全嗎？</h1>
        <hr>
        <h2 class="text-center" style="line-height: 1.5">企業目前使用的文件加密解決方案是否存在著不安全性，已有更換文件安全防護系統的必要與需求？<br>運用 9 大問題點評估，作為採購新 DRM 文件保護系統依據。</h2>
      </div>
      <div class="container-fluid gray-bg">
        <div class="row justify-content-center">
          <ul class="col-12 col-md-8 col-lg-7 my-4" id="check">
            <li class="mt-3">
              <span class="main-color">1.</span> 能否阻止受保護的文件檔案內容被剪下，貼至未保護的文件檔案上？<br>
              <input style="width:1rem;height:1rem" type="radio" name="s1" value="1"> 是 <input style="width:1rem;height:1rem" type="radio" name="s1" value="0"> 否
            </li>
            <li class="mt-3">
              <span class="main-color">2.</span> 當受保護的文件被另存成其它檔案格式時，仍然能受到保護？<br>
              <input style="width:1rem;height:1rem" type="radio" name="s2" value="1"> 是 <input style="width:1rem;height:1rem" type="radio" name="s2" value="0"> 否
            </li>
            <li class="mt-3">
              <span class="main-color">3.</span> 能否終止任何一份檔案的使用權限？<br>
              <input style="width:1rem;height:1rem" type="radio" name="s3" value="1"> 是 <input style="width:1rem;height:1rem" type="radio" name="s3" value="0"> 否
            </li>
            <li class="mt-3">
              <span class="main-color">4.</span> 當文件檔案被大量惡意刪除時，是否能夠還原？<br>
              <input style="width:1rem;height:1rem" type="radio" name="s4" value="1"> 是 <input style="width:1rem;height:1rem" type="radio" name="s4" value="0"> 否
            </li>
            <li class="mt-3">
              <span class="main-color">5.</span> 能否透過整合 AD（Active Directory）帳號管控文件檔案？<br>
              <input style="width:1rem;height:1rem" type="radio" name="s5" value="1"> 是 <input style="width:1rem;height:1rem" type="radio" name="s5" value="0"> 否
            </li>
            <li class="mt-3">
              <span class="main-color">6.</span> 能否防止手機偷拍電子文件檔案？<br>
              <input style="width:1rem;height:1rem" type="radio" name="s6" value="1"> 是 <input style="width:1rem;height:1rem" type="radio" name="s6" value="0"> 否
            </li>
            <li class="mt-3">
              <span class="main-color">7.</span> 您的系統能否保護任何電子檔案的格式？<br>
              <input style="width:1rem;height:1rem" type="radio" name="s7" value="1"> 是 <input style="width:1rem;height:1rem" type="radio" name="s7" value="0"> 否
            </li>
            <li class="mt-3">
              <span class="main-color">8.</span> 能夠使用原生的應用程式開啟加密後的文件檔案嗎？<br>
              <input style="width:1rem;height:1rem" type="radio" name="s8" value="1"> 是 <input style="width:1rem;height:1rem" type="radio" name="s8" value="0"> 否
            </li>
            <li class="mt-3">
              <span class="main-color">9.</span> 加密後能不改變原始檔的副檔名嗎？<br>
              <input style="width:1rem;height:1rem" type="radio" name="s9" value="1"> 是 <input style="width:1rem;height:1rem" type="radio" name="s9" value="0"> 否
            </li>
          </ul>
          <div class="col-12 col-md-8 col-lg-7 pb-4">
            <a href="#" class="btn btn-cimes w-100">立即評估</a>
          </div>
        </div>
      </div>
    </section>
    <div id="resoult-box" class="container-fluid main-bg fff-color p-3 d-none">
      <div class="container col-12 col-md-8 text-center">
        <p id="resoult" class="h4"></p>
        <a style="color:#ff0" class="h4" href="https://ares-pp.ares.com.tw/contact/"><span class="passing-reverse">«</span> 立即使用隱私保鑣保護您的文件安全 <span class="passing">»</span></a>
      </div>
    </div>
  </main>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/template/foot.php');
$rs=null;
$db=null;
$row=null;
?>
</div>
<script>
window.addEventListener('load',function(){
  $('.btn-cimes').on('click',function(e){
    e.preventDefault();
    var text ='';
    var int = $('#check input:checked').length;
    var v= 0;
    if(int == 9){
      $('#check input:checked').each(function(){
        v += parseInt($(this).val());
      });
      if(v == 9){
        text='恭喜！您的企業文件資安防護安全性 OK，<br>如要更完全保護可參考 ARES PP DRM 文件加密解決方案，徹底保護內外部文件安全，防止資料外洩事件發生。';
      }else{
        text='當心！您的企業正面臨著嚴重的資安風險。';
      }
      $('#resoult-box a').show();
    }else{
      text = '你還有 '+(9-int)+' 個問題未填選';
      $('#resoult-box a').hide();
    }
    $('#resoult-box').removeClass('d-none');
    $('#resoult').html(text);
  });
})
</script>
</body>
</html>