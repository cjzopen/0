<?php

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $product = @$_POST['product'];
  $link = @$_POST['link'];
  $company  = @htmlspecialchars(stripslashes($_POST['company']),  ENT_QUOTES);
  $department = @htmlspecialchars(stripslashes($_POST['department']), ENT_QUOTES);
  $name     = @htmlspecialchars(stripslashes($_POST['name']),     ENT_QUOTES);
  $jobTitle   = @htmlspecialchars(stripslashes($_POST['jobTitle']),   ENT_QUOTES);
  $phone    = @htmlspecialchars(stripslashes($_POST['phone']),    ENT_QUOTES);
  $mobile   = @htmlspecialchars(stripslashes($_POST['mobile']),   ENT_QUOTES);
  $email    = @htmlspecialchars(stripslashes($_POST['email']),    ENT_QUOTES);
  $request  = @$_POST['request'];
  // $plan    = @$_POST['plan'];
  $budget   = @$_POST['budget'];
  // $visit     = @$_POST['visit'];
  $epaper   = @$_POST['epaper'];
  $knowFrom   = @$_POST["knowFrom"];
  $union    = @htmlspecialchars(stripslashes($_POST['union']),  ENT_QUOTES);
  $kfOther  = @htmlspecialchars(stripslashes($_POST['kfOther']),  ENT_QUOTES);
  $otherRequire = @htmlspecialchars(stripslashes($_POST['otherRequire']), ENT_QUOTES);
  $test_obj = @$_POST['test_obj'];
  $msg = array();

  $length = count($knowFrom);
  for($i=0; $i<$length; $i++){
    if($knowFrom[$i] == "協會"){
      $knowFrom[$i] = $knowFrom[$i] ."(".$union.")";
    }
    if($knowFrom[$i] == "其他"){
      $knowFrom[$i] = $knowFrom[$i] ."(".$kfOther.")";
    }
    $knowFromAll= implode (",", $knowFrom);
  }

echo $product.','.$company.','.$budget.','.$test_obj['aw'];


  putenv("TZ=ASIA/TAIPEI");
  $submitDate = date("Y-m-d H:i:s", time());
  $ip = $_SERVER['REMOTE_ADDR'];



  $msg['ending'] = 'success';

  echo json_encode($msg);
  exit();
// }

// if no POST
// header('Location: index.php');


