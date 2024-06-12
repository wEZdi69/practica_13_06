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
                <a href="delete.php" class="auth">Удаление</a>
            </div>
        </div>
        <div class="head_gradient"></div>
</header>
<div class="container_admin_panel">
    <div class="admin_panel">
        <p class="title_info_admin_panel">Админ панель</p>
        <p class="title_more_admin_panel">Создание карточки товара</p>
        <div class="continer_admin_panel">
            <div class="card_admin_panel">
                <form action="product_back.php" method="POST" class="form_card_admin_panel" enctype="multipart/form-data">
                    <p>Разрешенные форматы "jpg", "jpeg", "png"</p>
                    <input type="file" name="image" placeholder="">
                    <input type="text" name="title" placeholder="Название Товара" required>
                    <input type="text" name="link_product" placeholder="Сыллка на товар" required>
                    <input type="submit" value="Добавить" class="btn_card_admin_panel">
                </form>
            </div>
            <p class="title_more_admin_panel">Добавление к слайдеру</p>
            <div class="card_admin_panel">
                <form action="slider_edit_back.php" method="POST" class="form_card_admin_panel" enctype="multipart/form-data">
                    <p>Разрешенные форматы "jpg", "jpeg", "png"</p>
                    <input type="file" name="image" placeholder="">
                    <input type="text" name="title_slider" placeholder="Текст под слайдером" required>
                    <input type="submit" value="Добавить" class="btn_card_admin_panel">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<?php
    include "footer.php"
?>