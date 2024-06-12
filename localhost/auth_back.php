<?php
$login = $_POST['login'];
$pass = $_POST['password'];
require 'bd.php';
if(empty($login) || empty($pass)){
    echo "Заполните все поля";
}else{
    $sql = "SELECT login FROM `users` WHERE login = '$login' AND password = '$pass'";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0){
        while($row = $result->fetch_assoc()){
            header("Location:adminpanel.php");
        }
    } else{
        echo "Такого пользователя не существует ";
        header("Location:auth.php?message=error");
    }
}
?>