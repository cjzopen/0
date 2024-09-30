<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$pageName = "news";
$str=null;
try {
  $db = new PDO($global_db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'database connection failed: ' . $e->getMessage();
  exit;
}

$query = sprintf("SELECT id, date, redirect, news_name FROM news ORDER BY date DESC");
$rs = $db->query($query)->fetchAll();

foreach ($rs as $row) {
  $years[] = substr($row['date'], 0, 4);
}
foreach ($rs as $row) {
  if(empty($row['redirect'])){
    // if(!empty($row['news_name'])){
      $news_names[] = strtolower($row['news_name']);
    // }else{
      // $news_names[] = 'article='.(int)$row['id'];
    // }
  }
}
$last = max($years);
// foreach ($rs as $row) {
//   $id[] = 'id='.$row['id'];
// }
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
  include "all.php";
}elseif (in_array(strtolower($str), $news_names)) {
  //$news_names 的文章內容
  $year = $last;
  $news_name = strtolower($str);
  include "article.php";
}elseif (strtolower($str[0]) == 'y' && in_array(substr($str, 1), $years)) {
  //當年份文章列表
  $year = substr($str, 1);
  include "list.php";
// }elseif(substr(strtolower($str),0,5)=='gclid' || substr(strtolower($str),0,3)=='_ga' || substr(strtolower($str),0,4)=='utm_'){
}elseif (strtolower($str[0]) == 'y' && !in_array(substr($str, 1), $years)) {
  $year = substr($str, 1);
  include "404.php";
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
?>
