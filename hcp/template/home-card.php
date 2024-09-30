<?php
$pattern = '/<a class="frame".*>\s.*?<img.*?\s?.*?src=\"(.*?)\"/';
// 最新消息
$rs = $db->query("SELECT * FROM news WHERE product LIKE '%{$product}%' ORDER BY date DESC LIMIT 1");
$news = $rs->fetch(PDO::FETCH_ASSOC);
if(!empty($news['img'])){
  $news['photo'] = 'https://www.ares.com.tw'.$news['img'];
}else{
  $news['photo'] = '/img/events.jpg';
}
if(!empty($news['content']) && !empty($news['news_name'])){
  $news['href'] = 'https://www.ares.com.tw/events/'.$news['news_name'];
  if (preg_match($pattern, $news['content'], $matches) && empty($news['img'])) {
    if (substr($matches[1], 0, 4) === 'http' || substr($matches[1], 0, 2) === '//') {
      $news['photo'] = $matches[1];
    }else{
      $news['photo'] = 'https://www.ares.com.tw'.$matches[1];
    }
  }
}elseif(!empty($news['redirect'])){
  $news['href'] = $news['redirect'];
}
if(empty($news['description'])){
  $news['lead'] = $news['title'];
  if (!empty($news['content'])) {
    $lead = mb_substr($news['content'], mb_strpos($news['content'], '<p>')+3);
    if (mb_substr($lead, 0, 8) === '<strong>') {
      $lead = mb_substr($lead, mb_strpos($lead, '<p>')+3);
    }
    $news['lead'] = strip_tags(trim(mb_strstr($lead, '</p>', true)));
  }
  if (!empty($news['redirect'])){
    if(strpos($news['href'], 'ares.com.tw')){
      $meta_content = @get_meta_tags($news['href']);
      if(!empty($meta_content['description'])){
        $news['lead'] = trim($meta_content['description']);
      }
    }
  }
}else{
  $news['lead'] = $news['description'];
}


// 成功案例
$rs = $db->query("SELECT news.id, news.date, news.title, news.content, news.redirect, news.news_name, news.description, news.img
        FROM news, best_practice WHERE best_practice.product LIKE '%{$product}%' AND news.id = best_practice.news_id ORDER BY news.date DESC");

$best_practice = $rs->fetch(PDO::FETCH_ASSOC);
if($best_practice['title'] == $news['title']){
  $best_practice = $rs->fetch(PDO::FETCH_ASSOC);
}
if (!empty($best_practice['redirect'])) {
  $best_practice['href'] = $best_practice['redirect'];
} elseif (!empty($best_practice['news_name'])) {
  $best_practice['href'] = 'https://www.ares.com.tw/events/'.$best_practice['news_name'];
} else {
  $best_practice['href'] = 'https://www.ares.com.tw/events/'.$best_practice['id'];
}
if(!empty($best_practice['img'])){
  $best_practice['photo'] = 'https://www.ares.com.tw'.$best_practice['img'];
}else{
  $best_practice['photo'] = '/img/events.jpg';
}
if(!empty($best_practice['content']) && !empty($best_practice['news_name'])){
  if (preg_match($pattern, $best_practice['content'], $matches) && empty($best_practice['img'])) {
    if (substr($matches[1], 0, 4) === 'http' || substr($matches[1], 0, 2) === '//') {
      $best_practice['photo'] = $matches[1];
    }else{
      $best_practice['photo'] = 'https://www.ares.com.tw'.$matches[1];
    }
  }
}
if (empty($best_practice['description'])){
  if (!empty($best_practice['content'])) {
    if(preg_match('/<ul class=\"[\w\s\-]*summary-effect\">[\s]*(.*?)<\/ul>/s',$best_practice['content'],$matches)){
      $best_practice['lead'] = '<ul class="card-text check mb-0">'.$matches[1].'</ul>';
    }else{
      $lead = mb_substr($best_practice['content'], mb_strpos($best_practice['content'], '<p>')+3);
      if (mb_substr($lead, 0, 8) === '<strong>') {
        $lead = mb_substr($lead, mb_strpos($lead, '<p>')+3);
      }
      $best_practice['lead'] = '<p class="card-text mb-0">'.strip_tags(trim(mb_strstr($lead, '</p>', true))).'</p>';
    }
  }
}else{
  $best_practice['lead'] = $best_practice['description'];
}


// 知識分享
$rs = $db->query("SELECT * FROM articles WHERE product LIKE '%{$product}%' ORDER BY date DESC LIMIT 1");
$knowledge = $rs->fetch(PDO::FETCH_ASSOC);
if(!empty($knowledge['img'])){
  $knowledge['photo'] = $knowledge['img'];
}else{
  $knowledge['photo'] = '/img/knowledge.jpg';
}
if (!empty($knowledge['href'])) {
  $knowledge['href'] = $knowledge['href'];
} elseif (!empty($knowledge['news_name'])) {
  $knowledge['href'] ='https://www.ares.com.tw/events/'.$knowledge['news_name'];
}
$knowledge['lead'] = $knowledge['title'];
if (empty($knowledge['description'])) {
  if (!empty($knowledge['content'])) {
    $lead = mb_substr($knowledge['content'], mb_strpos($knowledge['content'], '<p>')+3);
    if (mb_substr($lead, 0, 8) === '<strong>') {
      $lead = mb_substr($lead, mb_strpos($lead, '<p>')+3);
    }
    $knowledge['lead'] = trim(mb_strstr($lead, '</p>', true));
  }
  if(strpos($knowledge['href'], 'ares.com.tw')){
    $meta_content = @get_meta_tags($knowledge['href']);
    if(!empty($meta_content['description'])){
      $knowledge['lead'] = $meta_content['description'];
    }
  }
}else{
  $knowledge['lead'] = $knowledge['description'];
}

$rs=null;
$db=null;
?>
    <section class="pt-5 mt-3">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <article class="card h-entry hentry">
              <div class="d-none author vcard"><a href="https://www.ares.com.tw" class="url fn">資通電腦</a></div>
              <time class="entry-date dt-published published d-none" datetime="<?= @$news['date'] ?>"><?= @$news['date'] ?></time>
              <time class="entry-date dt-updated updated d-none" datetime="<?= isset($news['dateModified']) ? $news['dateModified'] : $news['date'] ?>"><?= isset($news['dateModified']) ? $news['dateModified'] : $news['date'] ?></time>
              <a href="<?= $news['href']; ?>" class="u-url" rel="bookmark" tabindex="-1" aria-label="<?= strip_tags($news['title']); ?>">
                <figure class="card-img-top ratio-box entry-thumbnail">
                  <img class="mx-auto lazyload" data-src="/img/events.jpg" alt="<?= strip_tags($news['title']); ?>">
                </figure>
              </a>
              <h2 class="type category">最新消息</h2>
              <div class="card-body">
                  <!-- <time datetime=""></time> -->
                <h3 class="card-title sub-color p-name entry-title"><a href="<?= $news['href']; ?>" title="<?= strip_tags($news['title']); ?>"><?= strip_tags($news['title']); ?></a></h3>
                <p class="card-text mb-0 p-summary entry-summary"><a href="<?= $news['href']; ?>" tabindex="-1"><?= strip_tags($news['lead']); ?></a></p>
                <span class="grad"></span>
              </div>
            </article>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <article class="card h-entry hentry">
              <div class="d-none author vcard"><a href="https://www.ares.com.tw" class="url fn">資通電腦</a></div>
              <time class="entry-date dt-updated updated d-none" datetime="<?= @$knowledge['date'] ?>"><?= @$knowledge['date'] ?></time>
              <a href="<?= $knowledge['href']; ?>" class="u-url" rel="bookmark" tabindex="-1" aria-label="<?= strip_tags($knowledge['title']); ?>">
                <figure class="card-img-top ratio-box entry-thumbnail">
                  <img class="mx-auto lazyload" data-src="/img/knowledge.jpg" alt="<?= strip_tags($knowledge['title']); ?>">
                </figure>
              </a>
              <h2 class="type category">知識分享</h2>
              <div class="card-body">
                <h3 class="card-title sub-color p-name entry-title"><a href="<?= $knowledge['href']; ?>" title="<?= strip_tags($knowledge['title']); ?>"><?= strip_tags($knowledge['title']); ?></a></h3>
                <p class="card-text mb-0 p-summary entry-summary"><a href="<?=$knowledge['href']; ?>" tabindex="-1"><?= strip_tags($knowledge['lead']); ?></a></p>
                <span class="grad"></span>
              </div>
            </article>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <article class="card h-entry hentry">
              <div class="d-none author vcard"><a href="https://www.ares.com.tw" class="url fn">資通電腦</a></div>
              <time class="entry-date dt-updated updated d-none" datetime="<?= @$best_practice['date'] ?>"><?= @$best_practice['date'] ?></time>
              <a href="<?= $best_practice['href']; ?>" class="u-url" rel="bookmark" tabindex="-1" aria-label="<?= strip_tags($best_practice['title']); ?>">
                <figure class="card-img-top ratio-box entry-thumbnail">
                  <img class="mx-auto lazyload" data-src="/img/best-practices.jpg" alt="<?= strip_tags($best_practice['title']); ?>">
                </figure>
              </a>
              <h2 class="type category">成功案例</h2>
              <div class="card-body">
                <h3 class="card-title sub-color p-name entry-title"><a href="<?= $best_practice['href']; ?>" title="<?= strip_tags($best_practice['title']); ?>"><?= strip_tags($best_practice['title']); ?></a></h3>
                <a href="<?= $best_practice['href']; ?>" title="<?= strip_tags($best_practice['lead']); ?>" class="p-summary entry-summary" tabindex="-1"><?= $best_practice['lead']; ?></a>
                <span class="grad"></span>
              </div>
            </article>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card">
              <a href="/contact/" rel="nofollow" tabindex="-1" aria-label="線上與電話諮詢">
                <figure class="card-img-top ratio-box">
                  <img class="mx-auto lazyload" data-src="/img/inquiry.jpg" alt="線上及電話諮詢">
                </figure>
              </a>
              <h2 class="type">免費諮詢</h2>
              <div class="card-body">
                <h4 class="card-title sub-color"><a href="/contact/" rel="nofollow">您是否想要進一步評估呢？</a></h4>
                <p class="card-text mb-0"><a href="/contact/" rel="nofollow" tabindex="-1">請立即在線上留下您的資料<br>或來電：02-2522-1351 ext. 301。<br>我們將盡快與您連絡，並安排專業顧問到貴公司提供免費的現場諮詢！</a></p>
                <span class="grad"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>