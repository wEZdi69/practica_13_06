<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "kinzitaev_praktica";
$conn = mysqli_connect($servername,$username,$password,$dbname);
$conn -> set_charset('utf8');
if(!$conn){
    // die("Connection failed". my_sqli_connect_error());
}
else{
    // echo "succes";
}
?>