<?php
require_once 'env.php';
$mysqli = new mysqli("localhost", $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_name']);

if(isset($_POST['add_product'])){ // проверяем, была ли отправлена форма
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image_link = $_POST['image_link'];
    $category = $_POST['category_id'];
    if (!$mysqli->query("INSERT INTO products (name, price, image_link, category_id) VALUES ('$name','$price','$image_link','$category')")) {
        echo "Error adding product: " . $mysqli->error;
    } else {
        echo "Product added successfully.";
    }
    $mysqli->close();
}
?>