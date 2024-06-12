<?php 
require 'bd.php';
    $work_time_footer = $_POST['work_time_footer'];
    $sql = "UPDATE `footer` SET `work_time_footer` = '$work_time_footer'";
    if ($conn -> query($sql)) {
        header("Location:edit.php?message=Update");
    } else {
        header("Location:edit.php?message=ERORR");
    }   
?>
<?php 
require 'bd.php';
    $address_footer = $_POST['address_footer'];
    $sql = "UPDATE `footer` SET `address_footer` = '$address_footer'";
    if ($conn -> query($sql)) {
        header("Location:edit.php?message=Update");
    } else {
        header("Location:edit.php?message=ERORR");
    }   
?>