<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['HTTP_HOST'] == 'edm.ares.com.tw') {
  $company  = @htmlspecialchars(stripslashes($_POST['company']),  ENT_QUOTES);
  $department = @htmlspecialchars(stripslashes($_POST['department']), ENT_QUOTES);
  $jobtitle   = @htmlspecialchars(stripslashes($_POST['jobtitle']),   ENT_QUOTES);
  $name     = @htmlspecialchars(stripslashes($_POST['name']),     ENT_QUOTES);
  $phone    = @htmlspecialchars(stripslashes($_POST['phone']),    ENT_QUOTES);
  $email    = @htmlspecialchars(stripslashes($_POST['email']),    ENT_QUOTES);
  $question  = @$_POST['question'];
  $answer  = @$_POST['answer'];
  // $budget  = @$_POST['budget'];
  // $budget = @htmlspecialchars(stripslashes($_POST['budget']), ENT_QUOTES);
  $advise = @htmlspecialchars(stripslashes($_POST['advise']), ENT_QUOTES);
  $msg = array();
  $msg['block']='';
  $msg['db']='';
  $msg['epaper']='';
  $msg['success']='';

  $question= implode("|",$question);
  $answer= implode("|",$answer);

  $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
  if (!preg_match($pattern, $email)) {
    $msg['block'] = 'Email 格式有誤';
    echo json_encode($msg);
    exit();
  }
  $pattern = '(http|script|UPDATE|update|delete|DELETE|insert|INSERT|\.js|xss|\/\/|\<|\>)';
  if(preg_match($pattern, $company) === 1 || preg_match($pattern, $department) === 1 || preg_match($pattern, $name) === 1 || preg_match($pattern, $jobtitle) === 1 || preg_match($pattern, $phone) === 1 || preg_match($pattern, $advise) === 1) {
    $msg['block'] = '出現禁止輸入的字句';
    echo json_encode($msg);
    exit();
  }


  putenv("TZ=ASIA/TAIPEI");
  $submitDate = date("Y-m-d H:i:s", time());
    // $ip = $_SERVER['REMOTE_ADDR'];


  try{
    $db = new PDO("sqlite:eew.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch (PDOException $e) {
    $log = $e->getMessage();
    $msg['db'] = $log;
    echo json_encode($msg);
    exit();
  }

  $query = "INSERT INTO qu (day, company, department, name, jobtitle, phone, email, q, a, advise) VALUES ( '{$submitDate}', '{$company}', '{$department}', '{$name}', '{$jobtitle}', '{$phone}', '{$email}', '{$question}', '{$answer}', '{$advise}')";

  $rs = $db->exec($query);
  $db = null;
  $rs = null;

  $msg['success'] = 'success';
  // }else{
    // $msg['ending'] = 'recaptchaNoChecked';
  // }

  echo json_encode($msg);
  exit();
}

// if no POST
header('Location: index.php');


