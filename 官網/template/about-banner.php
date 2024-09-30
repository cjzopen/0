<figure class="slider contact-area-hide d-none d-md-block" data-image="/img/about/about.jpg">
  <figcaption class="color-white">關於我們</figcaption>
</figure>
  <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical'] ?>" itemprop="item"><span itemprop="name"><?= isset($breadcrumb)? $breadcrumb : '關於資通' ?></span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
    <nav class="bg-gray paging text-center">
      <ul>
        <li><a href="/profile/">公司簡介</a></li>
        <!-- <li><a href="/vision/">經營理念</a></li> -->
        <li><a href="/milestone/">里程碑</a></li>
        <li><a href="/partners/">客戶及合作夥伴</a></li>
        <li><a href="/esg/">企業永續發展</a></li>
        <li><a href="/contact/">公司據點</a></li>
      </ul>
    </nav>
  </div>