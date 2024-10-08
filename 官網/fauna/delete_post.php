<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = @$_POST['id'];

    $msg =array();
    $ares = "sqlite:/example/global/events.db";


        putenv("TZ=ASIA/TAIPEI");
        $submitDate = date("Y-m-d H:i:s", time());
        // $ip = $_SERVER['REMOTE_ADDR'];


        try{
            $db = new PDO($ares);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $msg['db'] = true;
        }catch (PDOException $e) {
            $msg['db'] = false;
            $log = $e->getMessage();
        }

        $query = "DELETE FROM news WHERE id=$id";

        $rs = $db->exec($query);

        $msg['send'] = true;
        $msg['time'] = $submitDate;
        // }

    // echo $msg;
    header("Content-type: application/json");
    echo json_encode($msg);
    exit();
}

// if no POST
header('Location: index.php');