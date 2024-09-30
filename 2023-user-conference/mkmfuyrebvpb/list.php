<?php


$db = "sqlite:eew.db";
try {
  $db = new PDO($db);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection failed: ' . $e->getMessage();
}

$rs=$db->query("SELECT q FROM qu LIMIT 1");
$row = $rs->fetch(PDO::FETCH_ASSOC);
$array = explode('|', $row['q']);
$q='';
foreach ($array as $value) {
  $q=$q.'<th style="font-size:12px">'.$value.'</th>';
}

$rs = $db->query("SELECT * FROM qu DESC")->fetchAll();



$cfg['WanIPList'] = "61.220.36.130";//外部IP
$cfg['LanIPList'] = "10.10.51";//內部IP

//取得使用者IP --- Start
function GetIP(){
  if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
    $ip = getenv("HTTP_CLIENT_IP");
  else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
    $ip = getenv("HTTP_X_FORWARDED_FOR");
  else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
    $ip = getenv("REMOTE_ADDR");
  else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
    $ip = $_SERVER['REMOTE_ADDR'];
  else
    $ip = "unknown";
  return($ip);
}
//取得使用者IP --- End

//判斷是否有啟用鎖IP判斷

  // $User_Ip = GetIP();
  // $CheckWanIP = explode("|",$cfg['WanIPList']);
  // $CheckLanIP = explode("|",$cfg['LanIPList']);
  // $User_Ip_Lan = explode(".",$User_Ip);
  // $User_Ip_Lan = $User_Ip_Lan[0].".".$User_Ip_Lan[1].".".$User_Ip_Lan[2];
  // if (!in_array($User_Ip_Lan,$CheckLanIP)){
  //   if (!in_array($User_Ip,$CheckWanIP)){
  //     echo "對不起!!您無法使用本系統，請聯絡系統管理員!!";
  //     // header('https://www.ares.com.tw');
  //     exit;
  //   }
  // }

?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8" />
  <title>─=≡Σ((( つ•̀ω•́)つ</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <link rel="shortcut icon" href="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
</head>
<body class="p-3">
  <?= 'your IP:'.GetIP() ?>
  <div class="container">最低 1 分</div>
<div class="container my-3" style="height: 80vh;overflow:auto;">
<table class="table table-striped" style="width:2340px">
  <thead>
    <tr>
      <th>時間</th>
      <th>公司</th>
      <th>部門</th>
      <th>職稱</th>
      <th width="96">姓名</th>
      <th>手機</th>
      <th>email</th>
<?= $q ?>
      <th>建議</th>
    </tr>
  </thead>
  <tbody>
<?php
foreach ($rs as $row) {
  $array = explode('|', $row['a']);
?>
    <tr>
      <td><?= $row['day'] ?></td>
      <td style="white-space:nowrap"><?= $row['company'] ?></td>
      <td style="white-space:nowrap"><?= $row['department'] ?></td>
      <td style="white-space:nowrap"><?= $row['jobtitle'] ?></td>
      <td style="white-space:nowrap"><?= $row['name'] ?></td>
      <td style="white-space:nowrap"><?= $row['phone'] ?></td>
      <td style="white-space:nowrap"><?= $row['email'] ?></td>
<?php
 foreach ($array as $value) {
   echo '<td style="white-space:nowrap">'.$value.'</td>';
 }
?>
      <!-- <td style="white-space:nowrap"></td> -->
      <td><?= $row['advise'] ?></td>
    </tr>

<?php
}

?>
  </tbody>
</table>
</div>
<div class="container">
  <a href="#" id="export">click to export CSV</a>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>


function exportTableToCSV($table, filename) {

    var $rows = $table.find('tr:has(td)'),

      // Temporary delimiter characters unlikely to be typed by keyboard
      // This is to avoid accidentally splitting the actual contents
      tmpColDelim = String.fromCharCode(11), // vertical tab character
      tmpRowDelim = String.fromCharCode(0), // null character

      // actual delimiter characters for CSV format
      colDelim = '","',
      rowDelim = '"\r\n"',

      // Grab text from table into CSV formatted string
      csv = '"' + $rows.map(function(i, row) {
        var $row = $(row),
          $cols = $row.find('td');

        return $cols.map(function(j, col) {
          var $col = $(col),
            text = $col.text().toString();
            // var temp = new RegExp('\\w+\\s', 'g');

            if(/^(0)([0-9]){9}/.test(text)){
              return '=""'+text.replace(/"/g, '""')+'""';
            }else{
              return text.replace(/"/g, '""'); // escape double quotes
            }

        }).get().join(tmpColDelim);

      }).get().join(tmpRowDelim)
      .split(tmpRowDelim).join(rowDelim)
      .split(tmpColDelim).join(colDelim) + '"';

    // Deliberate 'false', see comment below
    if (false && window.navigator.msSaveBlob) {

      var blob = new Blob([decodeURIComponent("\ufeff"+csv)], {
        type: 'text/csv;charset=utf-8'
      });

      // Crashes in IE 10, IE 11 and Microsoft Edge
      // See MS Edge Issue #10396033
      // Hence, the deliberate 'false'
      // This is here just for completeness
      // Remove the 'false' at your own risk
      window.navigator.msSaveBlob(blob, filename);

    } else if (window.Blob && window.URL) {
      // HTML5 Blob
      var blob = new Blob(["\ufeff"+csv], {
        type: 'text/csv;charset=utf-8'
      });
      var csvUrl = URL.createObjectURL(blob);

      $(this)
        .attr({
          'download': filename,
          'href': csvUrl
        });
    } else {
      // Data URI
      var csvData = 'data:text/csv;charset=utf-8,' + encodeURIComponent("\ufeff"+csv);

      $(this)
        .attr({
          'download': filename,
          'href': csvData,
          'target': '_blank'
        });
    }
  }

  // This must be a html <a> tag
  $("#export").on('click', function(event) {
    // CSV
    var args = [$('.table'), 'export.csv'];

    exportTableToCSV.apply(this, args);

    // If CSV, don't do event.preventDefault() or return false
    // We actually need this to be a typical hyperlink
  });
</script>

</body>
</html>