<?php
require_once 'env.php';
$mysqli = new mysqli("localhost", $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_name']);

if(isset($_POST['add_value'])){ 
    $value = $_POST['value'];
    $prod_id = $_POST['product_id'];
    $characteristic_id = $_POST['characteristic_id'];
    if (!$mysqli->query("INSERT INTO values_of_characteristics (product_id, characteristic_id, value) VALUES ('$prod_id','$characteristic_id','$value')")) {
        echo "Error adding product: " . $mysqli->error;
    } else {
        echo "Значение характеристики успешно добавлено";
    }
    $mysqli->close();
}
?>