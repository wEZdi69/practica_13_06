<?php 
require 'bd.php';
    $text_over = $_POST['text_overview'];
    $sql = "UPDATE `overview` SET `txt_overview` = '$text_over'";
    if ($conn -> query($sql)) {
        header("Location:edit.php?message=Update");
    } else {
        header("Location:edit.php?message=ERORR");
    }   
?>