<?php

$host = 'localhost'; // адрес сервера 
$database = 'shopshoes'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
// connect Database
$con = mysqli_connect('localhost','root','','shopshoes');
if(!$con)
   {
    echo 'Невозможно подключиться к серверу';
   }
   
   if(!mysqli_select_db($con,'shopshoes'))
   {
    echo 'Ошибка базы данных';
   }
   ?>