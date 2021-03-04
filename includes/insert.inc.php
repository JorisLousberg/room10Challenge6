<?php
print_r($_FILES);
include_once('includes/uploadimage.inc.php');

$sql = "INSERT INTO tb_car (carname, brand, description, price, carimage) 
VALUES ('$car','$brand','$desc', '$price', '$name')";
$stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        //print_r($result);
