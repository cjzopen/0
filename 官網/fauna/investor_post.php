<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $month  = @htmlspecialchars(stripslashes($_POST['month']),  ENT_QUOTES);
  $this_year  = @htmlspecialchars(stripslashes($_POST['this_year']),  ENT_QUOTES);
  $last_year  = @htmlspecialchars(stripslashes($_POST['last_year']),  ENT_QUOTES);
  $diff  = @htmlspecialchars(stripslashes($_POST['diff']),  ENT_QUOTES);
  $percent  = @htmlspecialchars(stripslashes($_POST['percent']),  ENT_QUOTES);
  $this_total  = @htmlspecialchars(stripslashes($_POST['this_total']),  ENT_QUOTES);
  $last_total  = @htmlspecialchars(stripslashes($_POST['last_total']),  ENT_QUOTES);
  $diff_total  = @htmlspecialchars(stripslashes($_POST['diff_total']),  ENT_QUOTES);
  $percent_total  = @htmlspecialchars(stripslashes($_POST['percent_total']),  ENT_QUOTES);
  $note  = @htmlspecialchars(stripslashes($_POST['note']),  ENT_QUOTES);

  $note = !empty($note) ? $note : "無";
  $msg =array();
  $ares = "sqlite:/sites/global/investor.db";
  putenv("TZ=ASIA/TAIPEI");
  $submitDate = date("Y-m-d H:i:s", time());
  try{
    $db = new PDO($ares);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $msg['db'] = true;
  }catch (PDOException $e) {
    $msg['db'] = false;
    $log = $e->getMessage();
  }
  $query = "INSERT INTO incomes_ifrs (month, this_year, last_year, diff, percent, this_total, last_total, diff_total, percent_total, note) VALUES ( '{$month}', '{$this_year}', '{$last_year}', '{$diff}', '{$percent}', '{$this_total}', '{$last_total}', '{$diff_total}', '{$percent_total}', '{$note}')";
  $rs = $db->exec($query);
  $msg['send'] = true;
  $msg['time'] = $submitDate;

  header("Content-type: application/json");
  echo json_encode($msg);
  exit();
}
// if no POST
header('Location: index.php');