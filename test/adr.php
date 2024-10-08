<?php
$db = new PDO("sqlite:/example/global/epaper.db");

$subscribe = array();
$result = $db->query("SELECT email FROM mailinglist WHERE confirmed='1'");
foreach ($result->fetchAll() as $row) {
  $subscribe[] = $row['email'];
}
$unsubscribe = array();
$result = $db->query("SELECT email FROM unsubscribe");
foreach ($result->fetchAll() as $row) {
  $unsubscribe[] = $row['email'];
}
$unknown = array();
$result = $db->query("SELECT email FROM unknown");
foreach ($result->fetchAll() as $row) {
  $unknown[] = $row['email'];
}

$deny = array();
$result = $db->query("SELECT email FROM deny");
foreach ($result->fetchAll() as $row) {
  $deny[] = $row['email'];
}

$_html='';
$c=1;
foreach ($subscribe as $email) {
  if(!in_array($email, $unknown) && !in_array($email, $deny) && !in_array($email, $unsubscribe)){
    $_html.='<br>'.$c.':'.strtolower($email);
    $c++;
  }
}
// echo $_html;
$result=null;
$db=null;
?>