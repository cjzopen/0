<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>線上報名人數統計</title>
<style type="text/css">
<!--
body {
	font-size: 62.5%;
	font-family: "Microsoft JhengHei", Arial, sans-serif;
	xcolor: #60636C;
	}
h1 { font-size: 2.2em; }
h2 { font-size: 1.6em; }
li { font-size: 1.4em; }
table {
    border: 1px solid #B5B7C4;
    border-collapse: collapse;
	}
th {
    text-align: center;
    color: #60636C;
    background: #D7D8DD;
	background: -moz-linear-gradient(top, #EAEBF0, #D7D8DD);
    background: -webkit-gradient(linear, center top, center bottom, from(#EAEBF0), to(#D7D8DD));
    font-weight: bold;
	}
td { background-color: white; }
th, td {
    border: 1px solid #B5B7C4;
    padding: 10px 5px;
    white-space: nowrap;
    font-size: 1.4em;
}
tr:nth-child(even) { background: #D4D4D4}
.altRow { background-color: #F3F4F8; }
-->
</style>
</head>

<body>
<?php
	$db = new PDO("sqlite:../_assets/db/signup.db");
	echo "<h1>線上報名人數統計</h1>\n";
	
	$query  = "SELECT COUNT(rowid) FROM signup";
	$result = $db->query($query);
	$total  = $result->fetchColumn();
	$query  = "SELECT * FROM signup";
	$result = $db->query($query);
	$data	= $result->fetchAll();
	$result = null;
	
    echo "<p>&nbsp;</p>\n";
	echo "<h2>報名人數：{$total}</h2>\n";
?>
<table>
	<tr>
		<th>　</th>
		<th>報名時間</th>
		<th>姓名</th>
		<th>公司</th>
		<th>部門</th>
		<th>職稱</th>
		<th>電話</th>
		<th>手機</th>
		<th>信箱</th>
		<th>確認信</th>
		<th>用餐</th>
	</tr>
<?php
	for ($i=0; $i<$total; $i++) {
		$j = $i + 1;
		$td = ($i%2) ? "		<td class=\"altRow\">" : "		<td>";
		echo "	<tr>\n";
		echo "{$td}{$j}</td>\n";
		echo "{$td}{$data[$i]['date']}</td>\n";
		echo "{$td}{$data[$i]['name']}</td>\n";
		echo "{$td}{$data[$i]['company']}</td>\n";	
		echo "{$td}{$data[$i]['dept']}</td>\n";
		echo "{$td}{$data[$i]['title']}</td>\n";
		echo "{$td}{$data[$i]['phone']}</td>\n";
		echo "{$td}{$data[$i]['mobile']}</td>\n";
		echo "{$td}{$data[$i]['email']}</td>\n";
		echo "{$td}{$data[$i]['confirm_email']}</td>\n";
		echo "{$td}{$data[$i]['isVeg']}</td>\n";
		echo "	</tr>\n";
	}
?>
</table>
</body>
</html>
