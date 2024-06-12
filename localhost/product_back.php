<?php
require 'bd.php';
$title = $_POST['title'];
$link_proudct = $_POST['link_product'];
// $sql_2 = "INSERT INTO `product`(title, caption) VALUES ('$title','$caption')";
// if ($conn -> query($sql2)) {
//     echo "Добавлено";
//     header("Location:user.php");
// } else {
//     echo "Ошибка";
//     echo $sql;
// }


if (isset($_FILES['image'])) {
    // Получение информации о загруженной картинке
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileType = $_FILES['image']['type'];
    $fileError = $_FILES['image']['error'];
  
    // Проверка ошибок загрузки
    if ($fileError === 0) {
      // Разрешенные форматы файлов
      $allowedExtensions = array("jpg", "jpeg", "png");
  
      // Получение расширения файла
      $fileExtension = explode('.', $fileName);
      $fileExtension = strtolower(end($fileExtension));
  
      // Проверка формата файла
      if (in_array($fileExtension, $allowedExtensions)) {
        // Создание уникального имени файла
        $newFileName = uniqid() . "." . $fileExtension;
  
        // Перемещение файла на сервер
        $target = "uploads/" . $newFileName;
        if (move_uploaded_file($fileTmpName, $target)) {
          // Сохранение ссылки на картинку в базе данных
          $sql = "INSERT INTO products (img_products,txt_products,link_products) VALUES (?,'$title','$link_proudct')";
          $stmt = mysqli_prepare($conn, $sql);
  
          // Проверка подготовки SQL-запроса
          if ($stmt) {
            // Связывание параметра URL изображения
            mysqli_stmt_bind_param($stmt, "s", $target);
  
            // Выполнение SQL-запроса
            if (mysqli_stmt_execute($stmt)) {
                header("Location:adminpanel.php?message=succes");
            } else {
                header("Location:adminpanel.php?message=error");
            }
  
            // Закрытие запроса
            mysqli_stmt_close($stmt);
          } else {
            header("Location:adminpanel.php?message=error");
          }
        } else {
            header("Location:adminpanel.php?message=error");
        }
      } else {
        header("Location:adminpanel.php?message=error");
      }
    } else {
        header("Location:adminpanel.php?message=error");
    }
  }else{
    header("Location:adminpanel.php?message=error");
  }

?>