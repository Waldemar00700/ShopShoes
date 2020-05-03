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
   include "./cart.php";   
   
// POST
$email = filter_var(trim($_POST['email__client']),FILTER_SANITIZE_STRING);
 $name_client = filter_var(trim($_POST['name__client']),FILTER_SANITIZE_STRING);
 $surname_client = filter_var(trim($_POST['surname__client']),FILTER_SANITIZE_STRING);
 $phone_client = filter_var(trim($_POST['phone__client']),FILTER_SANITIZE_STRING);
 $address_client = filter_var(trim($_POST['address__client']),FILTER_SANITIZE_STRING);
$vvvv = $_POST['btnr'];
$cs = $_POST['countss'];
 $sql ="INSERT INTO client (email,name,surname,phone) VALUES ('$email', '$name_client', '$surname_client', '$phone_client')";
 
 if(!mysqli_query($con,$sql))
         {
         }
         else
         {
         }

          $sql ="INSERT INTO buy (email_client,address,attribute,cout) VALUES ('$email', '$address_client','$vvvv','$cs')";
        
         if(!mysqli_query($con,$sql))
         {
         
          echo 'Произошла непредвидиная ошибка с покупкой';
          echo $vvvv;
          echo $cs;
         }
         else
         {
          echo 'Спасибо за покупку';
          echo $vvvv;
          echo $cs;
         }
?>
