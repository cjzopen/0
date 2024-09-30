<?php
$_db = "sqlite:/sites/global/epaper-article.db";
try {
  $db = new PDO($_db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'database connection failed: ' . $e->getMessage();
  exit;
}
$title='財報自編工具怎麼挑？常見問題整理大公開';
$product='';
$offset=0;
// $query = sprintf("SELECT title FROM article WHERE product LIKE %{$product}% ORDER BY `date` DESC LIMIT 1");
// $rs = $db->query($query)->fetchAll();
$rs = $db->query("SELECT * FROM article WHERE product LIKE '%{$product}%' AND title IS NOT '{$title}' AND content IS NOT null ORDER BY `date` DESC LIMIT 1 OFFSET $offset")->fetchAll();

foreach ($rs as $row) {
  echo '<article>'.$row['title'].'</article><div class="scroll-check"></div>';
}