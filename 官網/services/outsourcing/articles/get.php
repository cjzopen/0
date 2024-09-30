<?php
require($_SERVER['DOCUMENT_ROOT'].'/php/product_events.php');
product_events($_GET['product'], $_GET['event_type']);
?>
