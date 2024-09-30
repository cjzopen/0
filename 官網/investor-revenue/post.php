<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['HTTP_HOST'] == 'www.ares.com.tw') {
  if(!isset($_POST['data'])){
    exit;
  }
  $date = strip_tags($_POST['data']);
  $year = substr($date,0,4);
  $investor_db = "sqlite:/sites/global/investor.db";
  try {
    $db = new PDO($investor_db);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo 'database connection failed: ' . $e->getMessage();
    exit;
  }
  if($year >= 2013){
    $rs = $db->query("SELECT * FROM incomes_ifrs WHERE month='{$date}' LIMIT 1");
    $row = $rs->fetch(PDO::FETCH_ASSOC);
    // foreach($r as $row){

      // $msg = [
      //   'month' => $row['month'],
      //   'this_year' => $row['this_year'],
      //   'last_year' => $row['last_year'],
      //   'diff' => $row['diff'],
      //   'percent' => $row['percent'],
      //   'this_total' => $row['this_total'],
      //   'last_total' => $row['last_total'],
      //   'diff_total' => $row['diff_total'],
      //   'percent_total' => $row['percent_total']
      // ];

    $msg = '<table class="table table-bordered table-striped text-center">
          <caption> (單位：新台幣仟元)</caption>
          <tr>
            <th class="bg-blue4 text-center">'. $row['month'] .'</th>
            <th class="bg-blue4 text-center">營業收入淨額</th>
          </tr>
          <tr>
            <th class="bg-blue4 text-center">本月</th>
            <td>'. $row['this_year'] .'</td>
          </tr>
          <tr>
            <th class="bg-blue4 text-center">去年同期</th>
            <td>'. $row['last_year'] .'</td>
          </tr>
          <tr>
            <th class="bg-blue4 text-center">增減金額</th>
            <td>'. $row['diff'] .'</td>
          </tr>
          <tr>
            <th class="bg-blue4 text-center">增減百分比</th>
            <td>'. $row['percent'] .' %</td>
          </tr>
          <tr style="border-top:2px solid #4479bc">
            <th class="bg-blue4 text-center">本年累計</th>
            <td>'. $row['this_total'] .'</td>
          </tr>
          <tr>
            <th class="bg-blue4 text-center">去年累計</th>
            <td>'. $row['last_total'] .'</td>
          </tr>
          <tr>
            <th class="bg-blue4 text-center">增減金額</th>
            <td>'. $row['diff_total'] .'</td>
          </tr>
          <tr>
            <th class="bg-blue4 text-center">增減百分比</th>
            <td>'. $row['percent_total'] .' %</td>
          </tr>
          <tr>
            <th class="bg-blue4 text-center">備註</th>
            <td id="note"><textarea name="investor-revenue-note" id="investor-revenue-note" rows="3" readonly="readonly">'. $row['note'] .'</textarea></td>
          </tr>
        </table>';
  }else{
    $lastDate = substr_replace($date, substr($date, 0, 4)-1, 0, 4);
    $thisYear = substr($date, 0, 4);
    $thisMonth = (int)substr($date, 5, 7);
    $lastYear = substr($lastDate, 0, 4);
    $lastMonth = (int)substr($lastDate, 5, 7);

    $rs = $db->query("SELECT * FROM incomes WHERE month='{$date}' LIMIT 1");
    $row = $rs->fetch(PDO::FETCH_ASSOC);

    $rs = $db->query("SELECT * FROM incomes WHERE month LIKE '%{$thisYear}%' ORDER BY month ASC LIMIT '{$thisMonth}'");
    $tt_row = $rs->fetchAll(PDO::FETCH_ASSOC);
    $thisTotalArray0=array();
    $thisTotalArray=array();
    foreach($tt_row as $this_total){
      array_push($thisTotalArray0,$this_total['invoice']);
      array_push($thisTotalArray,$this_total['income']);
    }
    if($thisYear >= 1997){

      $rs = $db->query("SELECT * FROM incomes WHERE month='{$lastDate}' LIMIT 1");
      $last_row = $rs->fetch(PDO::FETCH_ASSOC);

      $rs = $db->query("SELECT * FROM incomes WHERE month LIKE '%{$lastYear}%' ORDER BY month ASC LIMIT '{$lastMonth}'");
      $lt_row = $rs->fetchAll(PDO::FETCH_ASSOC);
      $lastTotalArray0=array();
      $lastTotalArray=array();
      foreach($lt_row as $last_total){
        array_push($lastTotalArray0,$last_total['invoice']);
        array_push($lastTotalArray,$last_total['income']);
      }
    }else{
      $last_row = array("income"=>0, "invoice"=>0);
      $lastTotalArray0=array(0);
      $lastTotalArray=array(0);
    }

    $row0['this_year'] = $row['invoice'];
    $row0['last_year'] = $last_row['invoice'];
    $row0['diff'] = $row0['this_year'] - $row0['last_year'];
    $row0['percent'] = @round($row0['diff'] / $row0['last_year'] *100, 2);
    $row0['this_total'] = array_sum($thisTotalArray0);
    $row0['last_total'] = array_sum($lastTotalArray0);
    $row0['diff_total'] = $row0['this_total'] - $row0['last_total'];
    $row0['percent_total'] = @round($row0['diff_total'] / $row0['last_total'] *100, 2);

    $row['this_year'] = $row['income'];
    $row['last_year'] = $last_row['income'];
    $row['diff'] = $row['this_year'] - $row['last_year'];
    $row['percent'] = @round($row['diff'] / $row['last_year'] *100, 2);
    $row['this_total'] = array_sum($thisTotalArray);
    $row['last_total'] = array_sum($lastTotalArray);
    $row['diff_total'] = $row['this_total'] - $row['last_total'];
    $row['percent_total'] = @round($row['diff_total'] / $row['last_total'] *100, 2);

    $msg = '<table class="table table-bordered table-striped text-center">
          <caption class="text-right"> (單位：新台幣仟元)</caption>
          <tr>
            <th class="bg-blue4 text-center">'. $row['month'] .'</th>
            <th class="bg-blue4 text-center">開立發票總金額</th>
            <th class="bg-blue4 text-center">營業收入淨額</th>
          </tr>
          <tr>
            <th class="bg-blue4 text-center">本月</th>
            <td>'. $row0['this_year'] .'</td>
            <td>'. $row['this_year'] .'</td>
          </tr>
          <tr>
            <th class="bg-blue4 text-center">去年同期</th>
            <td>'. $row0['last_year'] .'</td>
            <td>'. $row['last_year'] .'</td>
          </tr>
          <tr>
            <th class="bg-blue4 text-center">增減金額</th>
            <td>'. $row0['diff'] .'</td>
            <td>'. $row['diff'] .'</td>
          </tr>
          <tr>
            <th class="bg-blue4 text-center">增減百分比</th>
            <td>'. $row0['percent'] .' %</td>
            <td>'. $row['percent'] .' %</td>
          </tr>
          <tr style="border-top:3px solid #4479bc">
            <th class="bg-blue4 text-center">本年累計</th>
            <td>'. $row0['this_total'] .'</td>
            <td>'. $row['this_total'] .'</td>
          </tr>
          <tr>
            <th class="bg-blue4 text-center">去年累計</th>
            <td>'. $row0['last_total'] .'</td>
            <td>'. $row['last_total'] .'</td>
          </tr>
          <tr>
            <th class="bg-blue4 text-center">增減金額</th>
            <td>'. $row0['diff_total'] .'</td>
            <td>'. $row['diff_total'] .'</td>
          </tr>
          <tr>
            <th class="bg-blue4 text-center">增減百分比</th>
            <td>'. $row0['percent_total'] .' %</td>
            <td>'. $row['percent_total'] .' %</td>
          </tr>
        </table>';
  }
  echo $msg;
  // header('Content-Type: application/json');
  // echo json_encode($msg);
  exit();
}

// if no POST
header('Location: index.php');
