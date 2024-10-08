<?php
require($_SERVER['DOCUMENT_ROOT'].'/strac/variable.php');
$investor_db = "sqlite:/example/global/investor.db";
$str=null;
try {
    $db = new PDO($investor_db);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'database connection failed: ' . $e->getMessage();
    exit;
}

$query = sprintf("SELECT id, date FROM events ORDER BY date DESC, time DESC");
$rs = $db->query($query)->fetchAll();

foreach ($rs as $row) {
    $years[] = substr($row['date'], 0, 4);
    $ids[] = $row['id'];
}
$last = max($years);

//網址後面的 get data
$str = $_SERVER["QUERY_STRING"];
// echo $str.$last;
// exit;
if (stripos($str, "&") === false){
    $str = $_SERVER["QUERY_STRING"];
}else{
    $str = substr($str, 0, stripos($str, "&"));
}

if (empty($str)) {
    //最新一年文章列表
    $year = $last;
    include "list.php";
}elseif (in_array($str, $ids)) {
    //$news_names 的文章內容
    $id=$str;
    include "article.php";
}elseif (strtolower($str[0]) == 'y' && in_array(substr($str, 1), $years)) {
    //當年份文章列表
    $year = substr($str, 1);
    include "list.php";
}else {
    // header('HTTP/1.1 404 Not Found');
    // header("location: https://".$_SERVER['HTTP_HOST']."/404.php");
    include($_SERVER['DOCUMENT_ROOT'].'/404.php');
}
$str=null;
$rs=null;
$db=null;
?>
