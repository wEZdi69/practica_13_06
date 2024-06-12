<?php 
require 'bd.php';
$id = $_POST['id_delete'];
    $sql_delete = "DELETE FROM `products` WHERE id_products = $id";
    if($conn ->query($sql_delete) === TRUE) {
        header ('Location: delete.php?message=succes');
    } else {
        header ('Location: delete.php?message=error');
    }
?>
<?php 
require 'bd.php';
$id = $_POST['id_delete_slider'];
    $sql_delete = "DELETE FROM `slider` WHERE id_slider = $id";
    if($conn ->query($sql_delete) === TRUE) {
        header ('Location: delete.php?message=succes');
    } else {
        header ('Location: delete.php?message=error');
    }
?>