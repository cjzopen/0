<?php
$cfg['iplock'] = true;


$cfg['WanIPList'] = "61.220.36.130";//�~��IP
$cfg['LanIPList'] = "10.10.51";//����IP


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



if ($cfg['iplock']){
  $User_Ip = GetIP();
  $CheckWanIP = explode("|",$cfg['WanIPList']);
  $CheckLanIP = explode("|",$cfg['LanIPList']);
  $User_Ip_Lan = explode(".",$User_Ip);
  $User_Ip_Lan = $User_Ip_Lan[0].".".$User_Ip_Lan[1].".".$User_Ip_Lan[2];
  if (!in_array($User_Ip_Lan,$CheckLanIP)){
    if (!in_array($User_Ip,$CheckWanIP)){
      header('Location: https://www.youtube.com/watch?v=-GQKQ5vAskA');
      exit;
    }
  }
}
session_start();
if (!isset($_SESSION['wwwares'])) {
  include 'login.php';
  exit;
}
