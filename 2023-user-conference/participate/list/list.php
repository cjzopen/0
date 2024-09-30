<?php
$db = new PDO("sqlite:../_assets/db/signup.db");
$result = $db->query("SELECT id, date, name, company, dept, title, phone, ext, mobile, email, confirm_email, isVeg, ps FROM signup");
$data = $result->fetchall(PDO::FETCH_ASSOC);
$result = null;
$db = null;

echo json_encode($data);
