<?php
require_once 'env.php';
$mysqli = new mysqli("localhost", $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_name']);

if (isset($_POST['id'])) {
    $prod_id = $_POST['id'];
    $new_name = $mysqli->real_escape_string($_POST['name']);
    $new_price = $mysqli->real_escape_string($_POST['price']);
    $new_image_link = $mysqli->real_escape_string($_POST['image_link']);

    $sql = "UPDATE `products` SET `name`='$new_name', `price`='$new_price', `image_link`='$new_image_link' WHERE id='$prod_id'";
    if ($mysqli->query($sql)) {
        echo "Product updated successfully.";
    } else {
        echo "Error updating product: " . $mysqli->error;
    }
}
?>