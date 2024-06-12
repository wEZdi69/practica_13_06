<?php 
require 'bd.php';
    $text_contacts = $_POST['text_contacts'];
    $sql = "UPDATE `contacts` SET `txt_contacts` = '$text_contacts'";
    if ($conn -> query($sql)) {
        header("Location:edit.php?message=Update");
    } else {
        header("Location:edit.php?message=ERORR");
    }   
?>
<?php 
require 'bd.php';
    $text_mail_contacts = $_POST['text_mail_contacts'];
    $sql = "UPDATE `contacts` SET `txt_mail_contacts` = '$text_mail_contacts'";
    if ($conn -> query($sql)) {
        header("Location:edit.php?message=Update");
    } else {
        header("Location:edit.php?message=ERORR");
    }   
?>