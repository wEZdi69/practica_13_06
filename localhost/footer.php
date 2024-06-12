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
<footer>
        <div class="footer_gradient"></div>
        <div class="container6">
            <div class="info_footer">
                <div>
                    <div class="info_footer_2">
                        <img src="./media/images/mingcute_time-line.png" alt="">
                        <?php
                            require 'bd.php';
                            $sql = "SELECT * FROM `footer`";
                            $result = mysqli_query($conn, $sql);
                            while ($row = $result -> fetch_assoc()){
                                echo "<p>".$row['work_time_footer']."</p>";
                            }
                        ?>
                    </div>
                    <div class="info_footer_2">
                        <img src="./media/images/bx_map.png" alt="">
                        <?php
                            require 'bd.php';
                            $sql = "SELECT * FROM `footer`";
                            $result = mysqli_query($conn, $sql);
                            while ($row = $result -> fetch_assoc()){
                                echo "<p>".$row['address_footer']."</p>";
                            }
                        ?>
                    </div>
                    <div class="info_footer_2">
                        <img src="./media/images/ph_phone.png" alt="">
                        <?php
                            require 'bd.php';
                            $sql = "SELECT * FROM `contacts`";
                            $result = mysqli_query($conn, $sql);
                            while ($row = $result -> fetch_assoc()){
                                echo "<p>".$row['txt_contacts']."</p>";
                            }
                        ?>
                    </div>
                    <div class="info_footer_2">
                        <img src="./media/images/tabler_mail.png" alt="">
                        <?php
                            require 'bd.php';
                            $sql = "SELECT * FROM `contacts`";
                            $result = mysqli_query($conn, $sql);
                            while ($row = $result -> fetch_assoc()){
                                echo "<p>".$row['txt_mail_contacts']."</p>";
                            }
                        ?>
                    </div>
                </div>
                <div class="brand_footer">
                    <div class="logo">
                        <img src="./media/images/image 6.png" alt="">
                    </div>
                    <div class="txt_brand_footer">
                        <p>Статьи</p>
                        <div class="logo_and_txt_brand_footer">
                            <div>
                                <img src="./media/images/image 2.png" alt="">
                            </div>
                            <p><a href="https://kamaz.ru/">KAMAZ</a></p>
                        </div>
                        <div class="logo_and_txt_brand_footer">
                            <div>
                                <img src="./media/images/Vector.png" alt="">
                            </div>
                            <p><a href="https://icons8.ru/">Icons8</a></p>
                        </div>
                        <div class="logo_and_txt_brand_footer">
                            <div>
                                <img src="./media/images/image 4.png" alt="">
                            </div>
                            <p><a href="https://bizavto.com/">bizavto</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>