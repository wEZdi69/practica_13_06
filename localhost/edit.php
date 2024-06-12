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
                <a href="adminpanel.php" class="auth">Добавление</a>
                <a href="delete.php" class="auth">Удаление</a>
            </div>
        </div>
        <div class="head_gradient"></div>
</header>
<div class="container_admin_panel">
    <div class="admin_panel">
        <p class="title_info_admin_panel">Админ панель</p>
        <p class="title_more_admin_panel">Изменение информации история компании</p>
        <?php
                    if(isset($_GET['message']) && $_GET['message'] == 'ERORR'){
                        echo "<h1 class='erorr'>Ошибка</h1>";
                    }if(isset($_GET['message']) && $_GET['message'] == 'Update'){
                        echo "<h1 class='update'>Обновлено</h1>";
                    }
        ?>
        <div class="continer_admin_panel">
            <div class="overview">
                <form method="POST" action="edit_back.php">
                    <?php
                    require 'bd.php';
                    $sql = "SELECT * FROM `overview`";
                    $result2 = $conn->query($sql);
                    if ($result2->num_rows > 0) {
                        while($row2 = $result2->fetch_assoc()) {
                            echo '<textarea class="overview_txt" name="text_overview">'.$row2['txt_overview'].'</textarea>';
                        }
                    }
                    ?>
                    <div>
                        <input type="checkbox" required class="checkbox_over">
                        <input type="submit" value="Изменить" class="btn_card_admin_panel">
                    </div>
                </form>
            </div>
        </div>
        <p class="title_more_admin_panel">Изменение информации контанты</p>
        <div class="continer_admin_panel">
            <div class="overview">
                <form method="POST" action="contacts_back.php">
                    <?php
                    require 'bd.php';
                    $sql = "SELECT * FROM `contacts`";
                    $result2 = $conn->query($sql);
                    if ($result2->num_rows > 0) {
                        while($row2 = $result2->fetch_assoc()) {
                            echo '<textarea class="overview_txt" name="text_contacts">'.$row2['txt_contacts'].'</textarea>';
                            echo '<textarea class="overview_txt" name="text_mail_contacts">'.$row2['txt_mail_contacts'].'</textarea>';
                        }
                    }
                    ?>
                    <div>
                        <input type="checkbox" required class="checkbox_over">
                        <input type="submit" value="Изменить" class="btn_card_admin_panel">
                    </div>
                </form>
            </div>
        </div>
        <p class="title_more_admin_panel">Изменение информации подвал</p>
        <div class="continer_admin_panel">
            <div class="overview">
                <form method="POST" action="footer_back.php">
                    <?php
                    require 'bd.php';
                    $sql = "SELECT * FROM `contacts`";
                    $result2 = $conn->query($sql);
                    if ($result2->num_rows > 0) {
                        while($row2 = $result2->fetch_assoc()) {
                            echo '<textarea class="overview_txt" name="text_contacts">'.$row2['txt_contacts'].'</textarea>';
                            echo '<textarea class="overview_txt" name="text_mail_contacts">'.$row2['txt_mail_contacts'].'</textarea>';
                        }
                    }
                    $sql2 = "SELECT * FROM `footer`";
                    $result3 = $conn->query($sql2);
                    if ($result3->num_rows > 0) {
                        while($row3 = $result3->fetch_assoc()) {
                            echo '<textarea class="overview_txt" name="work_time_footer">'.$row3['work_time_footer'].'</textarea>';
                            echo '<textarea class="overview_txt" name="address_footer">'.$row3['address_footer'].'</textarea>';
                        }
                    }
                    ?>
                    <div>
                        <input type="checkbox" required class="checkbox_over">
                        <input type="submit" value="Изменить" class="btn_card_admin_panel">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<?php
    include "footer.php"
?>