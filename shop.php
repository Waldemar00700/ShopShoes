<?php
#-CONNECTION DATABASE---#
include "./php/database.php";
$result = mysqli_query($con,"SELECT * FROM `product`");

?>
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
                <H2>Каталог</H2>
            </div>

            <div class="catalog__box">
                <?php
            if(mysqli_num_rows($result)>0)
            {
                
                while($foot = mysqli_fetch_assoc($result))
            { ?>

                    <div class="catalog__inner">
                        <div class="id__order">
                            <h2>Atribute:
                                <?php echo $foot['id']; ?> </h2>
                        </div>
                        <div class="catalog__title">
                            <h2>
                                <?php echo $foot['name']; ?>
                            </h2>
                        </div>
                        <div class="catalog__img">
                            <img width="300px" src="./<?php echo $foot['img']; ?>">
                        </div>
                        <div class="cost&buy">
                            <div class="price">
                                <?php echo $foot['cost'];?>$</div>
                            <a class="buy_btn" href="add-cart.php?id=<?php echo $foot['id']; ?>">BUY</a>
                        </div>
                    </div>
                    <?php
            }
            
            }
            else{
                echo "0";
            }
                   ?>

                        <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>

                       <!-- SCRIPT -->
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                            <script src="./js/JQuery3.3.1.js"></script>
                            <script src="./js/shop.js"></script>
                            <script src="./js/jquery.fancybox.min.js"></script>



    </body>

    </html>