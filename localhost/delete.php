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
<body>
<header>
        <div class="container">
            <div class="head">
                <span><img src="./media/images/image 6.png" alt=""></span>
                <a href="index.php" class="auth">Главная страница</a>
                <a href="edit.php" class="auth">Редакция</a>
                <a href="adminpanel.php" class="auth">Добавление</a>
            </div>
        </div>
        <div class="head_gradient"></div>
</header>
<div class="container_admin_panel">
    <div class="admin_panel">
        <p class="title_info_admin_panel">Админ панель</p>
        <p class="title_more_admin_panel">Удаление карточки товаров</p>
        <?php
                    if(isset($_GET['message']) && $_GET['message'] == 'ERORR'){
                        echo "<h1 class='erorr'>Ошибка</h1>";
                    }if(isset($_GET['message']) && $_GET['message'] == 'Update'){
                        echo "<h1 class='update'>Удаленно</h1>";
                    }
        ?>
        <div class="container4">
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
                                        <form method='POST' action='delete_back.php'>
                                            <div class='delete_delite'>
                                                <input type='hidden' name='id_delete' value='".$row['id_products']."'>
                                                <input type='checkbox' required class='checkbox_delite'>
                                                <input type='submit' value='Удалить' class='btn_card_admin_panel'>
                                            </div>
                                        </form>
                                    </div>
                                </div>";
                        }
                ?>
            </div>
        </div>
        <p class="title_more_admin_panel">Удаление картинок слайдера</p>
        <?php
                    if(isset($_GET['message']) && $_GET['message'] == 'ERORR'){
                        echo "<h1 class='erorr'>Ошибка</h1>";
                    }if(isset($_GET['message']) && $_GET['message'] == 'Update'){
                        echo "<h1 class='update'>Удаленно</h1>";
                    }
        ?>
        <div class="container4">
            <div class="products">
                <?php
                    require 'bd.php';
                    $sql = "SELECT * FROM `slider`";
                    $result = mysqli_query($conn, $sql);
                        while ($row = $result -> fetch_assoc()){
                            echo "
                                <div>
                                    <div><img src='".$row['img_slider']."' alt=''> <p class='txt_slider_delite'>'".$row['txt_slider']."'</p></div>
                                    <div class='btn_product'>
                                        <form method='POST' action='delete_back.php'>
                                            <div class='delete_delite'>
                                                <input type='hidden' name='id_delete_slider' value='".$row['id_slider']."'>
                                                <input type='checkbox' required class='checkbox_delite'>
                                                <input type='submit' value='Удалить' class='btn_card_admin_panel'>
                                            </div>
                                        </form>
                                    </div>
                                </div>";
                        }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
<?php
    include "footer.php"
?>