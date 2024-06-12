<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>БизнесАвто</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"/>
</head>
<body style='overflow-x:hidden;'>
    <?php
    include "header.php"
    ?>
    <div class="container2">
        <div class="introduction" id="introduction">
            <div class="img_introduction">
                <img src="./media/images/Group 1.png" alt="">
                <div class="text_introduction">
                    <img src="./media/images/icons8-сервисы 1.png" alt="">
                    <?php
                    require 'bd.php';
                    $sql = "SELECT * FROM `overview`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = $result -> fetch_assoc()){
                        echo "<p>".$row['txt_overview']."</p>";
                    }
                    ?>
                </div>
            </div>
            <div class="slaider">
                    <div class="slaider_content">
                    <?php
                        require 'bd.php';
                        $sql = "SELECT * FROM `slider`";
                        $result = mysqli_query($conn, $sql);
                            while ($row = $result -> fetch_assoc()){
                                echo "<div><img src='".$row['img_slider']."' alt=''> <p>'".$row['txt_slider']."'</p></div>";
                            }
                    ?>
                    </div>
            </div>
            <div class="btn_introduction">
                <a href="https://kamaz.ru/about/general-information/"><button class="link_introduction">Узнать больше <img class="image1" src="./media/images/Arrow 1.png"alt=""> <img class="image2" src="./media/images/Arrow 1 (2).png"alt=""></button></a>
            </div>
        </div>
    </div>
    <div class="container3">
        <div class="info_brand" id="info_brand">
            <p class="title_info">Информация о бренде </p>
            <p class="txt_info_brand">Производственные мощности составляют 71 тысячу автомобилей в год. Около 2,4 млн машин сошли с конвейера за всё время работы предприятия.</p>
            <div class="more_info_brand">
                <p class="title_more_info_brand">Рынок</p>
                <p class="txt_more_info_brand">Принадлежит 47% Российского рынка тяжелых грузовых автомобилей</p>
            </div>
            <div class="img_info_brand">
                <img src="./media/images/Group 12.png" alt="">
            </div>
            <div class="info_brand_2">
                <div class="more_info_brand_2">
                    <p class="title_more_info_brand_2">Производство</p>
                    <p class="txt_more_info_brand_2"> Занимает 14-е место в мире по объёму производства тяжёлых грузовиков </p>
                </div>
                <div class="more_info_brand_3">
                    <p class="title_more_info_brand_3">Выпуск</p>
                    <p class="txt_more_info_brand_3"> За время работы выпущено более <br> 2 400 000 <br> Грузовых автомобилей </p>
                </div>
            </div>
        </div>
        <div class="btn_introduction">
            <a href="https://kamaz.ru/about/"><button class="link_introduction">Узнать больше <img class="image1" src="./media/images/Arrow 1.png"alt=""> <img class="image2" src="./media/images/Arrow 1 (2).png"alt=""></button></a>
        </div>
    </div>
    <div class="container4">
        <p class="title_info" id="products">Продукция</p>
        <div class="products">
            <?php
                require 'bd.php';
                $sql = "SELECT * FROM `products`";
                $result = mysqli_query($conn, $sql);
                    while ($row = $result -> fetch_assoc()){
                        echo "
                            <div>
                                <div class='card_product'>
                                    <img src='".$row['img_products']."' alt=''>
                                    <p>".$row['txt_products']."</p>
                                </div>
                                <div class='btn_product'>
                                    <a href='".$row['link_products']."'><button class='link_product'>Перейти <img class='image_product_1' src='./media/images/Arrow 4.png'alt=''> <img class='image_product_2' src='./media/images/Arrow 4 (2).png'alt=''></button></a>                            </div>
                            </div>";
                    }
            ?>
        </div>
    </div>
    <div class="container5">
            <div class="title_info" id="contacts">
                <p>Контакты</p>
            </div>
            <div class="contacts">
            <p id="phone">Телефон</p>
                    <?php
                        require 'bd.php';
                        $sql = "SELECT * FROM `contacts`";
                        $result = mysqli_query($conn, $sql);
                        while ($row = $result -> fetch_assoc()){
                            echo "<p id='txt'>".$row['txt_contacts']."</p>";
                        }
                    ?>
                <p id="mail">Почта</p>
                    <?php
                        require 'bd.php';
                        $sql = "SELECT * FROM `contacts`";
                        $result = mysqli_query($conn, $sql);
                        while ($row = $result -> fetch_assoc()){
                            echo "<p id='txt'>".$row['txt_mail_contacts']."</p>";
                        }
                    ?>
            </div>
    </div>
    <?php
    include "footer.php"
    ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="./slick/slick.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>