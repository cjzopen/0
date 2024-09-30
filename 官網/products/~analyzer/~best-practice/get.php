<?php
// if($_GET['event_type'] == 'best_practice'){
// 	require($_SERVER['DOCUMENT_ROOT'].'/php/best_practice.php');
// 	exit();
// }
require($_SERVER['DOCUMENT_ROOT'].'/php/product_events.php');
product_events($_GET['product'], $_GET['event_type']);
?>
