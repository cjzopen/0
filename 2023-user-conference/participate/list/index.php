<?php
session_start();

if (!isset($_SESSION['login'])) {
	include 'login.php';
} 
elseif (preg_match('/(?i)msie [6-9]/',$_SERVER['HTTP_USER_AGENT'])) {
	include 'legacy.php';
} 
else {
	include 'modern.php';
    // include 'legacy.php';
}
