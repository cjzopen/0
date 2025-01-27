<?php
// $global_db = "sqlite:/example/global/events.db";
// try {
//   $db = new PDO($global_db);
//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//   echo 'Database connection failed: ' . $e->getMessage();
//   exit;
// }
// //$last 取得最新一篇文章的年份
// $stmt = $db->query("SELECT date FROM news ORDER BY date DESC");
// $row = $stmt->fetch(PDO::FETCH_ASSOC);
// $year = substr($row['date'], 0, 4);
// $last = $year;
// if (!isset($_SESSION['events'])){
//   $year = $_SESSION['events'];
// }elseif(isset($_GET['year'])){
//   $year = $_GET['year'];
// }else{
//   $year = substr($row['date'], 0, 4);
// }
$query = "SELECT * FROM news ORDER BY date DESC";
$rs = $db->query($query)->fetchAll();

$page['title']='最新消息 | 資通電腦';
$page['canonical']='https://www.ares.com.tw/events/';

// array_push($page['other'],'<meta name="robots" content="noindex,follow">');
$amp='https://www.ares.com.tw/amp/events/';
$page['description']='包含近期消息、動態、活動訊息與產品資訊等文章，歡迎使用者深入瞭解資通文化與其產品帶來的好處';
$page['css']=array('/css/events.css');
include($_SERVER['DOCUMENT_ROOT'].'/template/head.php');
?>
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
            <a href="" itemprop="item"><span itemprop="name">最新消息</span></a>
            <meta itemprop="position" content="2">
          </li>
        </ul>
      </div>
    </div>
    <div class="bg-gray paging text-center">
      <i class="prev">&lt;</i>
      <ul role="list">
<?php  for($i=$last; $i>=1999; $i-- ){ ?>
        <li role="listitem"><a href="y<?= $i; ?>" class="<?= $year== $i ? 'act' : ''?>"><?= $i; ?></a></li>
<?php } ?>
      </ul>
      <i class="next">&gt;</i>
    </div>
  </div>
  <section class="list" itemscope itemtype="https://schema.org/ItemList">
    <div class="container">
      <h1 class="text-center h2">最新消息</h1>
      <hr>
<?php
include('_list-handle.php');
?>
    </div>
  </section>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/template/footer.php');
?>
<script src="/js/events-list.js" defer></script>
</body>
</html>