<?php
putenv("TZ=ASIA/TAIPEI");
$submitDate = date("Y-m-d H:i:s", time());
echo $submitDate;
if(!file_exists('test.json')){
  $create_file = fopen('test.json', 'w');
}else{
  echo 'exist';
}
?>