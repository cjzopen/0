<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $keyword = htmlspecialchars(stripslashes($_POST['keyword']), ENT_QUOTES);

  try{
    $db = new PDO("sqlite:/sites/global/servise.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch (PDOException $e) {
    $log = $e->getMessage();
    exit();
  }

  $query=$db->query("SELECT reply FROM question WHERE keyword='{$keyword}' COLLATE NOCASE");
  $row = $query->fetch(PDO::FETCH_ASSOC);
  if($row){
    $data = $row['reply'];
  }else{
    $keyword = 'default';
    $query=$db->query("SELECT reply FROM question WHERE keyword='{$keyword}' COLLATE NOCASE");
    $row = $query->fetch(PDO::FETCH_ASSOC);
    $data = $row['reply'];
  }
  echo $data;
}

?>