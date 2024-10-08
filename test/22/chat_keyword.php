<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $keyword = htmlspecialchars(stripslashes($_POST['keyword']), ENT_QUOTES);

  try{
    $db = new PDO("sqlite:/example/global/servise.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch (PDOException $e) {
    $log = $e->getMessage();
    exit();
  }

  $data = '';
  $rs = $db->query("SELECT keyword FROM question WHERE keyword LIKE '%{$keyword}%' COLLATE NOCASE")->fetchAll();
  // foreach ($rs as $row) {
  //   $data = $data.'<option value="'.$row['keyword'].'">';
  // }
  if($rs){
    $data = $rs;
  }

  echo json_encode($data);
}

?>