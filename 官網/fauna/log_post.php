<?php
if(isset($_SERVER['PHP_AUTH_USER'])){
  $user_name = str_replace("aresoa\\", '', strtolower($_SERVER['PHP_AUTH_USER']));
}else{
  $user_name = 'unknow';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function GetIP(){
       if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
       $ip = getenv("HTTP_CLIENT_IP");
       else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
       $ip = getenv("HTTP_X_FORWARDED_FOR");
       else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
       $ip = getenv("REMOTE_ADDR");
       else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
       $ip = $_SERVER['REMOTE_ADDR'];
       else
       $ip = "unknown";
       return($ip);
    }
    putenv("TZ=ASIA/TAIPEI");
    if(!empty($_POST['title'])){
        $title  = @htmlspecialchars(stripslashes($_POST['title']),  ENT_QUOTES);
    }else{
        $title = '';
    }
    $action = @$_POST['action'];
    $time = date("Y-m-d H:i:s", time());
    if($user_name == 'unknow' && isset($_POST['user_name'])){
      $user_name = $_POST['user_name'];
    }
    $user_ip = $user_name.' / '. GetIP();
    $logdb = "sqlite:log.db";
    try{
        $db = new PDO($logdb);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $msg['db'] = true;
    }catch (PDOException $e) {
        $msg['db'] = false;
        $log = $e->getMessage();
    }
    $query = "INSERT INTO log (title, ip, post_time, action) VALUES ( '{$title}', '{$user_ip}', '{$time}', '{$action}')";

    $rs = $db->exec($query);
}