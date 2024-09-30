<?php
header('Access-Control-Allow-Origin: https://challenges.cloudflare.com');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');

$captcha=$_POST['cf-turnstile-response'];
$msg = array();
// echo $captcha;
// exit;
//  if (!$captcha) {
//    echo '<h2>Please check the the captcha form.</h2>';
//          exit;
//  }

// $secretKey = "0x4AAAAAAANYo9glx0gH1JRVFxGqQ17PJMU";
$secretKey = "2x0000000000000000000000000000000AA";

$ip = $_SERVER['REMOTE_ADDR'];

$url_path = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
$data = array('secret' => $secretKey, 'response' => $captcha, 'remoteip' => $ip);



$opts = array(
  'http'=> array(
    'method'=> 'POST',
    // 'header'=> 'Content-Type: application/x-www-form-urlencoded',
    'content'=> http_build_query($data)
  )
);
$query= stream_context_create($opts);
$result = file_get_contents($url_path, false, $query);


echo $result;
$array = json_decode($result, true);

$success = $array['success'];

if ($success) {
    // 如果 $success 是 true，執行這裡的代碼
    echo "操作成功！";
} else {
    // 如果 $success 是 false，執行這裡的代碼
    echo "操作失敗。";
}

// echo json_encode($result);

// $object = json_decode($result);
// $a =  $object->success ? 'true' : 'false';
// if($a){
//   $responseKeys = json_decode($result,true);
//   echo $responseKeys;
// }else{
//   $msg['ending'] = 'recaptchaFail';
//   echo json_encode($msg);
//   exit();
// }



// echo $responseKeys['success'];
// echo $responseKeys['challenge_ts'];
// echo $responseKeys['hostname'];
// echo $responseKeys['error-codes'];
// echo $responseKeys['action'];







// $options = array(
//   'http' => array(
//     'method' => 'POST',
//     'content' => http_build_query($data)
//   )
// );

// $stream = stream_context_create($options);

// $result = file_get_contents(
//     $url_path, false, $stream);

// $response =  $result;
 
//  $responseKeys = json_decode($response,true);
//  print_r ($responseKeys);
//   if(intval($responseKeys["success"]) !== 1) {
//      echo '<h2>spam?</h2>';
//   } else { 
//     echo 'EHE';
// }
?>
