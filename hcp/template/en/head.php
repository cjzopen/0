<?php
$longTail='Human Resources Management System';
if(!empty($page['title'])){
  if(strpos( $page['title'], 'HCP' ) !== false ){
    $longTail='Human Resources Management System';
  }else{
    $longTail='HCP Human Capital Planner';
  }
}
?>
<!DOCTYPE html>
<html lang="zh" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="UTF-8">
  <title><?= !empty($page['title']) ? $page['title'] : 'HCP' ?> - <?= $longTail ?></title>
  <meta name="description" content="<?= !empty($page['description']) ? $page['description'] : '' ?>">
  <meta http-equiv="x-dns-prefetch-control" content="on" />
  <link rel="dns-prefetch" href="//www.googletagmanager.com" />
  <link rel="dns-prefetch" href="//www.google-analytics.com" />
  <link rel="dns-prefetch" href="//connect.facebook.net" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <link rel="canonical" href="<?= $canonical ?>">
<?= !empty($another) ? $another :'' ?>
  <meta name="google-site-verification" content="6krx5LGMtKDh0K9cg-ceFlv-AzttHNpxzxs0sboQc3w">
  <meta property="og:title" content="<?= !empty($page['title']) ? $page['title'] : 'HCP' ?> - <?= $longTail ?>" />
  <meta property="og:description" content="<?= !empty($page['description']) ? $page['description'] : '' ?>" />
  <meta property="og:image" content="https://hcp.ares.com.tw/img/og.jpg" />
  <meta property="og:url" content="<?= $canonical ?>" />
  <meta property="og:type" content="website" />
  <link rel="alternate" hreflang="en" href="<?= $canonical ?>" />
<?php
if(is_array($hreflang) && count($hreflang) >=1){
  foreach($hreflang as $va ) {
    if(isset($va['lang']) && isset($va['url'])){
      if($va['lang']=='zh-TW'){
        echo '<link rel="alternate" hreflang="x-default" href="'.$va['url'].'" />';
      }
      echo '<link rel="alternate" hreflang="'.$va['lang'].'" href="'.$va['url'].'" />';
    }
  }
}
?>
  <link rel="shortcut icon" href="/img/favicon.ico">
  <link rel="stylesheet" href="/css/main.css">
<?php
if(isset($page['css'])){
  foreach($page['css'] as $css) {
    // include (PHP_WEB_ROOT.$css);
    echo '<link rel="stylesheet" href="'.$css.'">';
  }
}
?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSBQD89');
</script>
</head>
<body>
<script defer src="/lib/jquery.js?v=3.6.0"></script>
<noscript>
  <style>#translateLink,.loading,.lazyload[alt="*"]{display:none!important;}</style>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSBQD89" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>