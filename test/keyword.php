<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <link rel="canonical" href="https://">
  <link rel="shortcut icon" href="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://">
</head>
<body>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<?php
function article($product){
  $db = new PDO("sqlite:/example/global/epaper-article.db");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $rs = $db->query("SELECT title, link, keyword FROM article WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%' ")->fetchAll();
  echo '<h1>'.$product.'</h1><table><tbody>';
  foreach ($rs as $row) {
    if(substr($row['link'], 0, 4)=='http'){
      $row['link']=$row['link'];
    }else{
      $row['link']='https://marketing.ares.com.tw/newsletter/'.$row['link'];
    }
    echo '<tr><td>'.$row['title'].'</td><td><a href="'.$row['link'].'">'.$row['link'].'</a></td><td>'.$row['keyword'].'</td>';
  }
  echo '</tbody></table><br><br>';
  $db=null;
  $rs=null;
}
article('ARES-PP');
article('ciMes');
article('job');
article('HCP');
article('招募管理');
article('PKI');
article('egui');
article('GV');
article('LT');
article('商業智慧BI');
article('政府專案');
article('委外服務');
article('系統整合');
article('eAresBank');
article('SWIFT');
article('PLM');
article('Oracle');
article('GD-CRM');
article('AFEIS');
article('FSTP');
article('GCRS');
article('ASCBS');
article('treasury');
article('nuntio');
article('fortify');
article('fxns');
article('portfolio');
article('ACPS');
article('ISDASIMM');
article('財報自編');
article('AML');
article('KYC');
article('Comodo');
article('ArgoERP');
article('Analyzer');





function keywords($product){
  $db = new PDO("sqlite:/example/global/epaper-article.db");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $rs = $db->query("SELECT keyword FROM article WHERE `date` <= date('now','-0 day') AND product LIKE '%{$product}%' ")->fetchAll();
  $keyword_array=array();
  $keywords='';
  $temp_number=0;
  foreach ($rs as $row) {
    if($temp_number==0){
      $keywords=$row['keyword'];
    }else if(!$row['keyword']){
      
    }else{
      $keywords=$keywords.'、'.$row['keyword'];
    }
    $temp_number++;
  }
  $db=null;
  $rs=null;
  $keyword_array=array_unique(explode('、',$keywords));
  echo '<h1>'.$product.'</h1>';
  print_r($keyword_array);
  echo '<br><br>';
}
keywords('ARES-PP');
keywords('ciMes');
keywords('job');
keywords('HCP');
keywords('招募管理');
keywords('PKI');
keywords('egui');
keywords('GV');
keywords('LT');
keywords('商業智慧BI');
keywords('政府專案');
keywords('委外服務');
keywords('系統整合');
keywords('eAresBank');
keywords('SWIFT');
keywords('PLM');
keywords('Oracle');
keywords('GD-CRM');
keywords('AFEIS');
keywords('FSTP');
keywords('GCRS');
keywords('ASCBS');
keywords('treasury');
keywords('nuntio');
keywords('fortify');
keywords('fxns');
keywords('portfolio');
keywords('ACPS');
keywords('ISDASIMM');
keywords('財報自編');
keywords('AML');
keywords('KYC');
keywords('Comodo');
keywords('ArgoERP');
keywords('Analyzer');
?>
</body>
</html>