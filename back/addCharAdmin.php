<?php
require_once 'env.php';
$mysqli = new mysqli("localhost", $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_name']);

if(isset($_POST['add_char'])){ 
    $name = $_POST['name'];
    $category = $_POST['category_id'];
    if (!$mysqli->query("INSERT INTO characteristics (name, category_id) VALUES ('$name','$category')")) {
        echo $mysqli->error;
    } else {
        echo "Характеристика успешно создана";
    }
    $mysqli->close();
}
?>