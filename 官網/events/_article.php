<?php
// $global_db = "sqlite:/sites/global/events.db";
// try {
//   $db = new PDO($global_db);
//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//   echo 'Database connection failed: ' . $e->getMessage();
//   exit;
// }
//$last 取得最新一篇文章的年份
// $stmt = $db->query("SELECT date FROM news ORDER BY date DESC");
// $row = $stmt->fetch(PDO::FETCH_ASSOC);
// $year = substr($row['date'], 0, 4);
// $last = $year;
// if(isset($_GET['article'])){
  // $news_name = $_GET['article'];

  // if(is_numeric($news_name)){
    // $rs = $db->query("SELECT * FROM news WHERE id = '{$news_name}'");
  // }else{
    $rs = $db->query("SELECT * FROM news WHERE news_name = '{$news_name}' COLLATE NOCASE");
  // }
// }


$row = $rs->fetch(PDO::FETCH_ASSOC);
if(empty($row['description'])){
  $lead = mb_substr($row['content'], mb_strpos($row['content'], '<p>')+3);
  if (mb_substr($lead, 0, 8) === '<strong>') {
    $lead = mb_substr($lead, mb_strpos($lead, '<p>')+3);
  }
  $row['lead'] = trim(mb_strstr($lead, '</p>', true));
}else{
  $row['lead'] = $row['description'];
}

if (!empty($row['news_name'])){
  $row['href'] = 'https://www.ares.com.tw/events/'.$row['news_name'];
}else{
  $row['href'] = $nowUrl;
}

if(empty($row['img'])){
  $row['photo'] = 'https://www.ares.com.tw/img/ares.png';
  $pattern = '/<a class="frame".*>\s.*?<img.*?\s?.*?src=\"(.*?)\"/';
  if (preg_match($pattern, $row['content'], $matches)) {
    if (substr($matches[1], 0, 23) === 'https://www.ares.com.tw' || substr($matches[1], 0, 22) === 'http://www.ares.com.tw') {
      $row['photo'] = $matches[1];
    } else if(substr($matches[1], 0, 1) === '/' && substr($matches[1], 0, 2) !== '//'){
      $row['photo'] = 'https://www.ares.com.tw'.$matches[1];
    }
  }
}else{
  $row['photo'] = $row['img'];
  if (substr($row['img'], 0, 23) === 'https://www.ares.com.tw' || substr($row['img'], 0, 22) === 'http://www.ares.com.tw') {
    $row['photo'] = $row['img'];
  } else if(substr($row['img'], 0, 1) === '/' && substr($row['img'], 0, 2) !== '//'){
    $row['photo'] = 'https://www.ares.com.tw'.$row['img'];
  }
}




// block news
// function _bot_detected() {
//   return (
//     isset($_SERVER['HTTP_USER_AGENT'])
//     && preg_match('/bot|crawl|slurp|spider|mediapartners/i', $_SERVER['HTTP_USER_AGENT'])
//   );
// }
if(isset($row['product']) && preg_match('/(AFEIS|Analyzer|SWIFT|eAresBank|nuntio|treasury)/i', $row['product'])){
  header('HTTP/2 403 Forbidden');
  include('../404.php');
  // header("location: https://www.ares.com.tw/events/forbidden-403");
  exit;
}




//可以的話ogimg用大圖↓
$pattern = '/<a class="frame".*?\s?.*?href=\"(.*?)\"/';
if (preg_match($pattern, $row['content'], $matches)) {
  if (substr($matches[1], 0, 23) === 'https://www.ares.com.tw' || substr($matches[1], 0, 22) === 'http://www.ares.com.tw') {
    $row['ogimg'] = $matches[1];
  } else if(substr($matches[1], 0, 1) === '/' && substr($matches[1], 0, 2) !== '//'){
    $row['ogimg'] = 'https://www.ares.com.tw'.$matches[1];
  }
}else{
  $row['ogimg'] = $row['photo'];
}

$page['title']=str_replace('"','\'',strip_tags($row['title'])).' | 資通電腦';
$page['description']=str_replace('"','\'',strip_tags($row['lead']));
$page['canonical']=$row['href'];
$amp='https://www.ares.com.tw/amp/events/'.$row['news_name'];
$page['ogimage']=strip_tags($row['ogimg']);
$page['ogtype']='article';
$page['css']=array('/lib/fancybox3/jquery.fancybox.min.css','/css/events.min.css?2008');
$page['other']=array('<meta property="fb:app_id" content="900338710010817">','<meta content="https://www.facebook.com/AresInternational/" property="article:author">');
$jquery_lib='jquery-3.4.1.min.js';
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": "<?= $page['canonical'] ?>",
  "headline": "<?= strip_tags($row['title']) ?>",
  "image": "<?= $page['ogimage'] ?>",
  "datePublished": "<?= $row['date'] ?>",
  "dateModified": "<?= isset($row['dateModified']) ? $row['dateModified'] : $row['date'] ?>",
  "publisher": {
    "@type": "Organization",
    "@id": "https://www.ares.com.tw/#organization",
    "name": "資通電腦",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.ares.com.tw/img/areslogo.png"
    }
  },
  "author": {
    <?= isset($row['author']) ? '"@type": "Person","name": "'.$row['author'].'"' : '"@id": "https://www.ares.com.tw/#organization"' ?>
  },
  "description": "<?= $page['description'] ?>"
}
</script>
<script type="application/ld+json">
{
 "@context": "http://schema.org/",
 "@type": "WebPage",
 "speakable":
 {
  "@type": "SpeakableSpecification",
  "cssSelector": ["h1", "#content>p:first-of-type"]
  },
 "url": "<?= $page['canonical'] ?>"
 }
</script>
<?php
include_once('banner.php');
?>
  <div class="sticky">
    <div class="ares-breadcrumb" aria-label="breadcrumb">
      <div class="container">
        <ul class="row" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">首頁</span></a>
            <meta itemprop="position" content="1">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="./" itemprop="item"><span itemprop="name">最新消息</span></a>
            <meta itemprop="position" content="2">
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?= $page['canonical'] ?>" itemprop="item" class="false"><span itemprop="name"><?= strip_tags($row['title']);?></span></a>
            <meta itemprop="position" content="3">
          </li>
        </ul>
      </div>
    </div>
    <div class="bg-gray paging text-center d-flex justify-content-center align-items-center">
      <i class="prev" aria-hidden="true">&lt;</i>
      <ul>
<?php  for($i=$last; $i>=1999; $i-- ){ ?>
        <li><a href="y<?= $i; ?>"><?= $i; ?></a></li>
<?php } ?>
      </ul>
      <i class="next" aria-hidden="true">&gt;</i>
    </div>
  </div>
  <section class="main_content">
      <div class="container px-lg-0 bg-white clearfix">
        <article id="article" class="bg-white">
          <h1 class="color-blue"><?= strip_tags($row['title']);?></h1>
          <div>
            <time datetime="<?= $row['date']?>"><?= $row['date'] ?></time>
          </div>
<?php include($_SERVER['DOCUMENT_ROOT'].'/strac/social-share.php'); ?>
          <br>
          <div id="content">
<?php
//相關新聞 刪除網址字串
$toBeFoundPattern = '/(<li>([\s]){0,15}(.*)([\s]){0,15}<br>([\s]){0,15}<a href=\"(.*)\">(.*)<\/a>([\s]){0,15}<\/li>)/i';
$toBeReplacedPattern = '<li><a href="$6">$3</a></li>';
$row['content'] = preg_replace( $toBeFoundPattern, $toBeReplacedPattern, $row['content'] );
echo (preg_replace( $toBeFoundPattern, $toBeReplacedPattern, $row['content'] ));
?>
          </div>
        </article>
        <aside class="relativeAside" role="complementary"></aside>
      </div>
<?php
include_once('synopsis.php');
?>
  </section>
<?php
$eventsConsult = '/consult/';
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script src="/lib/pangu4.0.7/pangu.js" defer></script>
<script src="/js/events.js?d=2020" defer></script>
<script src="/js/add_link.js" defer></script>
<?php
$useragent='';
if(isset($_SERVER['HTTP_USER_AGENT'])){
  $useragent=$_SERVER['HTTP_USER_AGENT'];
}

if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||!preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
  echo '<script src="/lib/fancybox3/jquery.fancybox.min.js" defer></script>';
}
?>
<script>
// $(function() {
//   var dataLayer = window.dataLayer || [];
//   var share_button = document.querySelectorAll('.resp-sharing-button__link');
//   for (var i = 0; i < share_button.length; i++){
//     var $this = share_button[i];
//     $this.addEventListener('click', function(){
//       dataLayer.push({
//         "event": "news_share",
//         "share_type": $this.getAttribute('aria-label')
//       })
//     });
//   }
// })
</script>
</body>
</html>