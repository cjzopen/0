<?php
$global_db = "sqlite:/example/global/events.db";
try {
  $db = new PDO($global_db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
  exit;
}

if(isset($_GET['year'])){
  $year = $_GET['year'];
}
$query = "SELECT * FROM news WHERE date LIKE '{$year}%' ORDER BY date DESC";
$rs = $db->query($query)->fetchAll();

?>
    <div class="container">
      <h1 class="text-center h2">最新消息</h1>
      <hr>
<?php
include('_list-handle.php');
?>
    </div>