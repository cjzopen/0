<?php
$url = 'https://hcp.ares.com.tw/sitemap/';
header('Link: <'.$url.'>; rel="canonical"');
header("HTTP/2 301 Moved Permanently");
header("Location: ".$url);
exit();
?>