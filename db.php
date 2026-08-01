<?php
$servername = "sqlXXX.infinityfree.com"; 
$username   = "if0_XXXXXXX";             
$password   = "********";  
$dbname     = "if0_XXXXXXX_task2";   


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
?>