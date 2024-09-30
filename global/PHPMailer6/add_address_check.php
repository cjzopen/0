<?php
if (empty($product)) {
  $product='unknow';
}
switch ($product) {
  case 'ArgoERP':
  case 'GD-CRM':
  case 'Agile PLM':
  case 'ORACLE':
  case 'EBS':
  case 'NetSuite':
  case 'eGUI':
  case 'GV':
  case 'LT':
  case 'ARES-PP':
    $addAddress = array(
      'dean1512@ares.com.tw' => 'Dean',
      'cllin@ares.com.tw' => '林青龍'
    );
    break;
  case 'ciMes':
  case 'IoT':
  case 'Surf-Workflow':
    $addAddress = array(
      'jacky1423@ares.com.tw' => '曾文光',
      'ycning@ares.com.tw' => '甯怡彰',
      'daphnelu@ares.com.tw' => '盧姵丞'
    );
    break;
  case 'HCP':
  case '招募管理':
    $addAddress = array(
      'huang140@ares.com.tw' => '黃峻嘯',
      'vita@ares.com.tw' => 'Vita'
    );
    break;
  case 'Analyzer':
    $addAddress = array(
      'vita@ares.com.tw' => 'Vita'
    );
    break;
  case 'CMO':
  case 'GCRS':
  case 'NHMS':
  case '財報自編':
  case 'PowerBudget':
    $addAddress = array(
      'dean1512@ares.com.tw' => 'Dean'
    );
    break;
  case 'AFEIS':
  case 'eAresBank':
  case 'FSTP':
  case 'ARES Nuntio':
  case 'SWIFT':
  case 'Ares Smart Core Banking System':
  case 'ARES Treasury System':
  case 'ARES Portfolio System':
  case 'Visual Pricing Tool':
  case 'Ares Cross Pricing System':
  case 'ISDASIMM':
  case 'FXNS':
    $addAddress = array(
      'frank@ares.com.tw' => '林聖懿',
    );
    break;
  case 'AML':
  case 'KYC':
    $addAddress = array(
      'tomhsi@ares.com.tw' => '奚碩年',
      'frank@ares.com.tw' => '林聖懿'
    );
    break;
  case 'Comodo':
    $addAddress = array(
      'kevinhsu1414@ares.com.tw' => '徐康正',
      'huang140@ares.com.tw' => '黃峻嘯'
    );
    break;
  case 'Fortify':
  case 'NCSIST':
  case 'KnowBe4':
  $addAddress = array(
    'huang140@ares.com.tw' => '黃峻嘯',
    'vita@ares.com.tw' => 'Vita'
  );
  break;
  case 'uPKI':
  case 'outsourcing':
  case 'GOV':
  case 'SI':
    $addAddress = array(
      'huang140@ares.com.tw' => '黃峻嘯'
    );
    break;
  default:
    $addAddress = array(
      'ouying@ares.com.tw' => '歐音'
      // 'cj1895@ares.com.tw' => 'test'
    );
}
?>