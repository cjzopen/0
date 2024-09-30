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
$product= 'PKI';
$query = "SELECT news_name,product FROM news WHERE product LIKE '%{$product}%' AND success_case = true ORDER BY `date` DESC";
$rs = $db->query($query)->fetchAll();


$xml_header = '<?xml version="1.0" encoding="utf-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>';
$xml = new SimpleXMLElement($xml_header);

foreach ($rs as $row) {
  if(substr($row['news_name'], 0,4) !== 'http' && isset($row['news_name'])){
    $url = $xml->addChild('url');
    $loc = $url->addChild('loc','https://pki.ares.com.tw/best-practices/?case='.$row['news_name']);
  }
}
echo $xml->asXML();

$rs=null;
$db=null;
?>
