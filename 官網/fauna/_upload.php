<?php
exit;
require('ip.php');
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <title>上傳圖片</title>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
</head>
<body>
<?php
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
// foreach ($_FILES["fileToUpload"]["name"] as $key => $value) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.<br>";
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.<br>";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 3145728) {
        echo "Sorry, your file is too large.<br>";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" && $imageFileType != "svg" ) {
        echo "Sorry, only JPG, JPEG, PNG , GIF, SVG files are allowed.<br>";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.<br>";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br/>";
            echo "檔案大小: " . ($_FILES["fileToUpload"]["size"] / 1024)." Kb<br />";
        } else {
            echo "Sorry, there was an error uploading your file.<br>";
        }
    }
// }
}
// if (isset($_POST['submitted'])) {
//     if ($_FILES["file"]["error"] > 0){
// 　　echo "Error: " . $_FILES["file"]["error"];
// 　}else{
// 　　echo "檔案名稱: " . $_FILES["file"]["name"]."<br/>";
// 　　echo "檔案類型: " . $_FILES["file"]["type"]."<br/>";
// 　　echo "檔案大小: " . ($_FILES["file"]["size"] / 1024)." Kb<br />";
// 　　echo "暫存名稱: " . $_FILES["file"]["tmp_name"];
// 　　move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);　//移動檔案
// 　}
// }else{
//     echo '';
// }
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
    選擇檔案:<input type="file" name="fileToUpload[]" id="fileToUpload" multiple/><br><br>
    <ul id="file-list"></ul><br><br>
    <input type="submit" name="submit" value="上傳檔案" /></form>
<script>
updateList = function() {
  var input = document.getElementById('fileToUpload');
  var output = document.getElementById('file-list');

  output.innerHTML = '<ul>';
  for (var i = 0; i < input.files.length; ++i) {
    output.innerHTML += '<li>' + input.files.item(i).name + '</li>';
  }
  output.innerHTML += '</ul>';
}
$('input[name="fileToUpload"]').change(function(){
    updateList();
});
</script>
</body>
</html>