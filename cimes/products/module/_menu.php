<?php
aimg(
  '/public/img/products/product-banner-1440.jpg', //圖片
  'ciMes 核心模組', //圖片上的字
  null //字的 class
);
?>
  <div class="breadcrumb" aria-label="breadcrumb">
    <ol class="container" itemscope itemtype="http://schema.org/BreadcrumbList">
      <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
        <meta itemprop="position" content="1" />
      </li>
      <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="../" itemprop="item"><span itemprop="name">產品介紹</span></a>
        <meta itemprop="position" content="2" />
      </li>
      <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="./" itemprop="item"><span itemprop="name">核心模組</span></a>
        <meta itemprop="position" content="3" />
      </li>
      <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name"><?= isset($module_name) ? $module_name : '' ?></span></a>
        <meta itemprop="position" content="4" />
      </li>
    </ol>
  </div>
  <nav class="supmenu">
      <ul class="text-center mb-0">
        <li><a href="wip.php" title="在製管理系統">WIP</a></li>
        <li><a href="qc.php" title="品質管理系統">QC</a></li>
        <li><a href="tooling.php" title="零配件管理系統">Tooling</a></li>
        <li><a href="pm.php" title="機台預修保養">PM</a></li>
        <li><a href="mms.php" title="物料管理系統">MMS</a></li>
        <li><a href="cms.php" title="載具管理系統">CMS</a></li>
        <li><a href="wrp.php" title="報表系統">WRP</a></li>
        <li><a href="lms.php" title="標籤管理系統">LMS</a></li>
        <li><a href="alm.php" title="警示管理系統">ALM</a></li>
        <li><a href="eks.php" title="電子看板系統">EKS</a></li>
      </ul>
  </nav>