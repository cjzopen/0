<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "newsletter";
$str = null;
try {
  $db = new PDO($epaper_db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'epaper connection failed: ' . $e->getMessage();
  exit;
}

$rs = $db->query("SELECT * FROM newsletter ORDER BY month DESC")->fetchAll();

foreach ($rs as $row) {
  $years[] = substr($row['month'], 0, 4);
}
$last = max($years);

//網址後面的 get data
$str = $_SERVER["QUERY_STRING"];
if (stripos($str, "&") === false){
  $str = $_SERVER["QUERY_STRING"];
}else{
  $str = substr($str, 0, stripos($str, "&"));
}

if (empty($str)) {
  //今年文章列表
  $year = $last;
  include "list.php";
}elseif (strtolower($str[0]) == 'y' && in_array(substr($str, 1), $years)) {
  //當年份文章列表
  $year = substr($str, 1);
  include "list.php";
// }elseif(substr(strtolower($str),0,5)=='gclid' || substr(strtolower($str),0,3)=='_ga' || substr(strtolower($str),0,4)=='utm_'){
}elseif(preg_match('/(gclid|_ga|utm_|fbclid)/i', strtolower($str))){
  $year = $last;
  include "list.php";
}else {
  // header("HTTP/1.1 404 Not Found");
  // header("location: https://".$_SERVER['HTTP_HOST']."/404.php");
  include($_SERVER['DOCUMENT_ROOT'].'/404.php');
}

$str=null;
$rs=null;
$db=null;