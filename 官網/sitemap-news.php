<?php
$db = "sqlite:/sites/global/events.db";
try{
  $db = new PDO($db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $msg['db'] = true;
}catch (PDOException $e) {
  $msg['db'] = false;
  $log = $e->getMessage();
}
$query = "SELECT news_name,product FROM news ORDER BY `date` DESC";
$rs = $db->query($query)->fetchAll();


$xml_header = '<?xml version="1.0" encoding="utf-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>';
$xml = new SimpleXMLElement($xml_header);

foreach ($rs as $row) {
  if(substr($row['news_name'], 0,4) !== 'http' && isset($row['news_name'])){
    if(isset($row['product']) && preg_match('/(AFEIS|Analyzer|SWIFT|eAresBank|nuntio|treasury)/i', $row['product'])){

    }else{
      $url = $xml->addChild('url');
      $loc = $url->addChild('loc','https://www.ares.com.tw/events/'.$row['news_name']);
    }
  }
}


$rs=null;
$db=null;

$db = "sqlite:/sites/global/en/events.db";
try{
  $db = new PDO($db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $msg['db'] = true;
}catch (PDOException $e) {
  $msg['db'] = false;
  $log = $e->getMessage();
}
$query = "SELECT news_name FROM news ORDER BY `date` DESC";
$rs = $db->query($query)->fetchAll();

foreach ($rs as $row) {
  if(substr($row['news_name'], 0,4) !== 'http' && isset($row['news_name'])){
    $url = $xml->addChild('url');
    $loc = $url->addChild('loc','https://www.ares.com.tw/en/events/'.$row['news_name']);
  }
}

echo $xml->asXML();

$rs=null;
$db=null;
?>