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
    include "header_auth.php"
    ?>
    <div class="container_auth">
        <div class="form_auth">
<?php
    if(isset($_GET['message']) && $_GET['message'] == 'error'){
        echo "<p class='error'>Пользователя не существует</p>";
    }
?>
            <p>Авторизация</p>
            <form action="auth_back.php" class="inp_auth" method="POST">
                <input type="text" required placeholder="Логин" name="login">
                <input type="password" required placeholder="Пароль" name="password">
                <input type="submit" value="Войти" >
            </form>
        </div>
    </div>
    <?php
    include "footer.php"
    ?>
</body>
</html>