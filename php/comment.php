<?php
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
   
// POST
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$comments = filter_var(trim($_POST['comments']),FILTER_SANITIZE_STRING);

// Запросы
$sql ="INSERT INTO comments (email_client,comment) VALUES ('$email', '$comments')";
if(!mysqli_query($con,$sql))
{
 echo 'Произошла непредвидиная ошибка';
 
}
else
{
 echo 'Спасибо за отзыв!';

}
?>