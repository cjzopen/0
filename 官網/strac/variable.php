<?php
$pageName='';
$page=array();
$host_link = 'https://www.ares.com.tw/';
$global_db = "sqlite:/sites/global/events.db";
$epaper_db = "sqlite:/sites/global/epaper.db";
// $age = date("Y") - 1981;
$age = date_diff(date_create('1980-12-03'), date_create('now'))->y+1;