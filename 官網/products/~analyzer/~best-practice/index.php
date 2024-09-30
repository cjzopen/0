<?php
$pageName = "product";
// nav 判斷用
//首頁 home,最新消息 news, 專業服務 service, 產品介紹 product, 電子報 newsletter, 成功案例 bestPractice, 免費諮詢 consult
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <title>Analyzer 成功案例- 資通電腦股份有限公司</title>
    <meta name="description" content="資通電腦代理的 Analyzer 客戶關係管理系統之成功案例">
    <meta property="og:image" content="https://www.ares.com.tw/img/ares.png">
    <meta property="article:author" content="https://www.facebook.com/AresInternational" />
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="https://www.ares.com.tw/img/apple-touch-icon72.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main2016.css">
<?php
include($_SERVER['DOCUMENT_ROOT'].'/strac/header.php');
include ('../_banner.php');
?>
    <div class="sticky">
        <div class="ares-breadcrumb">
            <div class="container">
                <ul class="row">
                     
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="/" itemprop="url"><span itemprop="title">首頁</span></a>
                    </li>
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="../../"  itemprop="url"><span itemprop="title">產品類別</span></a>
                    </li>
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="../" itemprop="url"><span itemprop="title">Analyzer</span></a>
                    </li>
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?= @$nowUrl; ?>" itemprop="url"><span itemprop="title">成功案例</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="gray-bg paging text-center" id="title">
            <ul>
                <li><a href="../" class="">產品簡介</a></li>
                <li><a href="../aresbi-kpitemplate/" class="">資通商業智慧 KPI</a></li>
                <li><a href="" class="act">成功案例</a></li>
                <li><a href="../articles/" class="">相關文章</a></li>
                <li><a href="../consult/" class="">免費諮詢</a></li>
            </ul>
        </div>
    </div>
    <section class="list">
        <div class="container"></div>
    </section>
<?php 
include($_SERVER['DOCUMENT_ROOT'].'/strac/footer.php');
?>
    <script src="/js/article-loading.js"></script>
    <script src="/js/main2016.js"></script>
<script>
new articleLoading('Analyzer','best_practice');
</script>
</body>

</html>

