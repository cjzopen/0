<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$title	= @htmlspecialchars(stripslashes($_POST['title']),	ENT_QUOTES);
	$href	= @trim(htmlspecialchars(stripslashes($_POST['href']),	ENT_QUOTES));
	$date	= @htmlspecialchars(stripslashes($_POST['date']),	ENT_QUOTES);
	$summary= @htmlspecialchars(stripslashes($_POST['summary']),	ENT_QUOTES);
	$author = @htmlspecialchars(stripslashes($_POST['author']),	ENT_QUOTES);
	$img	= @trim(htmlspecialchars(stripslashes($_POST['img']),	ENT_QUOTES));
	$photo	= @trim(htmlspecialchars(stripslashes($_POST['photo']),	ENT_QUOTES));
	$tag = @htmlspecialchars(stripslashes($_POST['tag']),	ENT_QUOTES);

	$img = !empty($img) ? "'$img'" : "NULL";
	$photo = !empty($photo) ? "'$photo'" : "NULL";
	$author = !empty($author) ? "'$author'" : "NULL";

    $msg =array();
    $ares = "sqlite:/sites/argoerp/db/argoerp.sqlite";


		putenv("TZ=ASIA/TAIPEI");
		$submitDate = date("Y-m-d H:i:s", time());
		// $ip = $_SERVER['REMOTE_ADDR'];


        try{
            $db1 = new PDO($ares);
            $db1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $msg['db'] = true;
        }catch (PDOException $e) {
            $msg['db'] = false;
            $log = $e->getMessage();
        }

        $query = "INSERT INTO events_drerp (date, title, author, photo, lead, url, tag, img) VALUES ( '{$date}', '{$title}', $author,  $img, '{$summary}', '{$href}', '{$tag}', $photo)";

        $rs = $db1->exec($query);
        

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


