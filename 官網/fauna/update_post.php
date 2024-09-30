<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = @$_POST['id'];
    $product = @$_POST['product'];
    $title  = @htmlspecialchars(stripslashes($_POST['title']),  ENT_QUOTES);
    $href   = @trim(htmlspecialchars(stripslashes($_POST['href']),  ENT_QUOTES));
    $date   = @htmlspecialchars(stripslashes($_POST['date']),   ENT_QUOTES);
    $news_name= @trim(htmlspecialchars(stripslashes($_POST['news_name']),   ENT_QUOTES));
    $content= @$_POST['content'];
    $img= @trim(htmlspecialchars(stripslashes($_POST['img']),   ENT_QUOTES));
    $description= @trim(htmlspecialchars(stripslashes($_POST['description']),   ENT_QUOTES));
    $dateModified= @$_POST['dateModified'];
    $author= @trim(htmlspecialchars(stripslashes($_POST['author']),   ENT_QUOTES));
    $canonical= @trim(htmlspecialchars(stripslashes($_POST['canonical']),   ENT_QUOTES));
    $en= @trim(htmlspecialchars(stripslashes($_POST['en']),   ENT_QUOTES));
    $cn= @trim(htmlspecialchars(stripslashes($_POST['cn']),   ENT_QUOTES));

    $product = !empty($product) ? "'$product'" : "NULL";
    $href = !empty($href) ? "'$href'" : "NULL";
    $news_name = !empty($news_name) ? "'$news_name'" : "NULL";
    $content = !empty($content) ? "'$content'" : "NULL";
    $author = !empty($author) ? "'$author'" : "NULL";
    $canonical = !empty($canonical) ? "'$canonical'" : "NULL";
    $en = !empty($en) ? "'$en'" : "NULL";
    $cn = !empty($cn) ? "'$cn'" : "NULL";

    $msg =array();
    // $ares = "sqlite:/sites/golbals/events.db";
    $ares = "sqlite:/sites/global/events.db";


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

        $query = "UPDATE news SET title ='{$title}', date = '{$date}', redirect = $href, product = $product, news_name = $news_name, content = $content, img = '{$img}', description = '{$description}', dateModified = '{$dateModified}', author = $author, canonical = $canonical, en = $en, cn = $cn WHERE id=$id";

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