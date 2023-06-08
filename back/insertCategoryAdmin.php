<?php
require_once 'env.php';

// Insert a new category
$mysqli = new mysqli("localhost", $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_name']);
$name = $_POST['name'];
$image_link = $_POST['image_link'];
if(!$mysqli->query("INSERT INTO categories (name, image_link) VALUES ('$name', '$image_link')")){
    echo "Error adding product: " . $mysqli->error;
}else {
    echo "Category added successfully.";
}
$mysqli->close();
?>