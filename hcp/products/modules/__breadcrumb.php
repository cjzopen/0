  <main>
    <div class="breadcrumb" aria-label="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
      <ol class="container">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/products/" itemprop="item"><span itemprop="name">產品介紹</span></a>
          <meta itemprop="position" content="2" />
        </li>
        <li class="breadcrumb-item">
          <span><?= $banner_text ?></span>
        </li>
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="<?= $canonical ?>" itemprop="item"><span itemprop="name"><?= $breadcrumb_text ?></span></a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>
    </div>