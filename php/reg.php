<?php
// POST
$surname = filter_var(trim($_POST['surname']),FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$phone = filter_var(trim($_POST['phone']),FILTER_SANITIZE_STRING);

// connect Database
$mysql = new mysqli('localhost','root','','support-bd');

// Запросы
$mysql-> query("Insert Into `support_users` (`surname`,`name`,`email`,`phone`) Values('$surname','$name','$email','$phone')");
$mysql-> close();

// BACK HEADER
header('Location: /');
?>