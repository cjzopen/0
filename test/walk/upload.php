<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <title>上傳圖片</title>
    <meta name="description" content="">
<style>
    body{font-size: 18px;line-height:1.9;}
    .banner{
      -moz-transform: scaleX(-1);
        -o-transform: scaleX(-1);
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
        filter: FlipH;
        -ms-filter: "FlipH";
    }
</style>
</head>
<body>
<div class="container">
    <h1 class="text-center">上傳圖片</h1>
    <a href="index.php" class="btn btn-info">回上一頁</a>
    <a href="upload.php" class="btn btn-info">上傳圖片</a>
    <hr>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $uploadOk = 1;
    $path = realpath('../').$_POST['unc_path'];
    if(!empty($_FILES['uploaded_file'])){
      if(is_dir($path)){
          echo '<br />路徑已存在，沒有新增資料夾<br /><hr>';
      }else{
          mkdir($path);
          echo '<br />你新增了一個資料夾 '.$path.'<br /><hr>';
      }
      $total = count($_FILES['uploaded_file']['name']);
      for($i=0; $i<$total; $i++) {
          $path_file='';
          $path_file = $path . basename( $_FILES['uploaded_file']['name'][$i]);
          $temp = $_FILES['uploaded_file']['tmp_name'][$i];
          $imageFileType = pathinfo($path_file,PATHINFO_EXTENSION);
          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          && $imageFileType != "gif" && $imageFileType != "svg" ) {
              echo "Sorry, only JPG, JPEG, PNG , GIF, SVG files are allowed.<br>";
              $uploadOk = 0;
          }
          if (file_exists($path_file)) {
              echo "*你覆蓋了一個同名的檔案<br>";
          }
          if ($_FILES["uploaded_file"]["size"][$i] > 3145728) {
              echo "檔案大小超過 3 Mb<br>";
              $uploadOk = 0;
          }
          if($uploadOk !== 0){
            if(move_uploaded_file($temp, $path_file)) {
                echo "檔案 ".  basename( $_FILES['uploaded_file']['name'][$i]).
                " 上傳成功。<br> File size: " . ($_FILES["uploaded_file"]["size"][$i] / 1024)." Kb<br /><br><br>";
                echo '<script>var user = {title : "'.str_replace('\\','/',$path_file).'",action:"upload",user_name:"'. @$_SESSION['www-ares'].'" };$.ajax({ type: "POST",url: "log_post.php", data: user, cache:false });</script>';
              } else{
                  echo "在上傳圖片時發生錯誤，請再嘗試一次<br />";
              }
          }else{
            echo '<br>'.$_FILES['uploaded_file']['name'][$i].' 這個檔案在上傳時被擋下<br>';
          }
      }
    }
    exit;
}
?>
  <form id="contact_form" name="contact_form" enctype="multipart/form-data" action="upload.php?sent=1" method="POST" onsubmit="return formCheck();">
    <p class="bg-danger" style="border-radius: 25px;padding:6px 12px">路徑裡若有同名的檔案，將會直接覆蓋。</p>
    <input type="file" name="uploaded_file[]" id="uploaded_file" multiple="multiple"><br />
    <ul id="file-list"></ul><br><br>
    <label for="">要上傳的路徑 (UNC 倒斜線的寫法)</label>
    <input type="text" name="unc_path" id="unc_path" placeholder="\img\events\2017\" list="chocType"></input>
    <datalist id="chocType">
      <option value="\img\events\2018\">
    </datalist>
    <br /><br />
    <input class="btn btn-danger" type="submit" value="上傳">
  </form>
</div>
<script>
updateList = function() {
  var input = document.getElementById('uploaded_file');
  var output = document.getElementById('file-list');

  output.innerHTML = '<ul>';
  for (var i = 0; i < input.files.length; ++i) {
    output.innerHTML += '<li>' + input.files.item(i).name + '</li>';
  }
  output.innerHTML += '</ul>';
}
$('input[name="uploaded_file[]"]').change(function(){
    updateList();
});
function formCheck(){
  var pattern = /^\\{1}[\w\-]+(\\{1}[\w\-]+)*\\$/i;
  var isPass = true;
  var input_file = document.getElementById('uploaded_file');

  if(!pattern.test(contact_form.unc_path.value)){
      $('#unc_path').css('border-color','red');
      isPass = false;
  }else{
      $('#unc_path').css('border-color','#5cb85c');
  }
  if(input_file.files.length < 1){
      $('#uploaded_file').css('border','1px solid red');
      isPass = false;
  }else{
      $('#uploaded_file').css('border','none');
  }

  return isPass;
}
</script>
</body>
</html>