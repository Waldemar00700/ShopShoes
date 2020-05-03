<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--  NEED STYLES  -->
    <meta charset="UTF-8">
    <title>ShoesShop</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/lightslider.css">
    <link rel="stylesheet" href="./css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- ЗАГОЛОВОК С ТЕЛЕФОННОЙ ИНФОРМАЦИЕЙ И ПОДДЕРЖКОЙ -->
        <div class="header_top">
            <div class="container">
                <div class="header_contacts">
                    <a class="header_phone" href="tel: +89503137981">+7 (950) 313 79 81</a>
                    <a class="header_email" href="">snowv9948@gmail.com</a>
                    <a class="Support_btn" href="cart.php">CART</a>
                </div>
            </div>
        </div>

        <div class="header_content">
            <div class="container">
                <div class="header__content-inner">

                    <!-- LOGO -->
                    <div class="header_logo">
                        <a href="#"><img src="img/logotype.png" alt=""></a>
                    </div>

                    <!-- NAVIGATION MENU -->
                    <div class="header_content_nav">
                        <nav class="menu">
                            <ul>
                                <li><a href="index.html">HOME</a></li>
                                <li><a href="shop.php">SHOP</a></li>
                                <li><a href="contact.html">CONTACT & COMMENTS</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>

    <!-- CATALOG -->
    <div class="container">
        <div class="BOX_HEADER_OUR_SPECIALIST">
            <H2>Готовы к покупке?</H2>
        </div>
        <?php
                    $cart = unserialize($_COOKIE['cart']);
                    $db = mysqli_connect('localhost','root','','shopshoes');
                    $total = 0;  ?>
            <div class="catalog__box">
            <form action="process_buy.php" method="post">
                <?php 
                   
                    foreach ($cart as $id => $count) {
                        $q = mysqli_query($db,"SELECT * FROM product where id = $id");
                        $goods = mysqli_fetch_assoc($q);
                        $price = $goods['cost'];
                      
                       

                        ?>

               
                    <div class="form__left">
                        <div class="cart__inner">
                            <div class="id__order">
                                <h2>Atribute:
                                    <?php echo $goods['id']; ?> </h2>
                            </div>
                            <div class="catalog__title">
                                <h2>
                                    <?php echo $goods['name']; ?>
                                </h2>
                            </div>
                            <div class="catalog__img">
                                <img width="150px" src="./<?php echo $goods['img']; ?>">
                            </div>
                            <div class="cost_buy">

                                <br> Цена -
                                <?php  echo  $price . "$" 
                                
                                ?>
                                
                                <button name = "btnr" value ="<?php echo $goods['id']; ?>"  type="submit"  class="Blog_btn">Оформить заказ </button>

                               
                            </div>
                        </div>

                    </div>

                    <?php
                    
                        echo "<br>";
                    }
                    
                 ?>
                        <div class="form__right">

                            <label for="name__client"><b>Имя</b></label><br>
                            <input placeholder="Enter Name" name="name__client"></input><br>

                            <label for="surname__client"><b>Фамилия</b></label><br>
                            <input placeholder="Enter Surname" name="surname__client"></input><br>

                            <label for="address__client"><b>Адрес</b></label><br>
                            <input placeholder="Enter Address" name="address__client"></input><br>

                            <label for="email__client"><b>Email</b></label><br>
                            <input placeholder="Enter Email" name="email__client"></input><br>

                            <label for="phone"><b>Номер телефона</b></label><br>
                            <input placeholder="Enter Phone" name="phone__client"></input><br>

                            <label for="countss"><b>Количество</b></label><br>
                                <input placeholder="Enter count" name="countss"></input><br>

                </form>

                </div>
            </div>



    </div>
    </div>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>

    <!-- SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./js/JQuery3.3.1.js"></script>
    <script src="./js/jquery.fancybox.min.js"></script>
    <script>
        function send() {
            let id_goods = document.querySelector('rel');
            console.log(id_goods);
            $.ajax({
                type: "POST",
                url: "process_buy.php",
                data: {
                    'ids': id_goods
                }
            })
        }
    </script>


</body>

</html>