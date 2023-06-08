<?php
require_once 'env.php';

// Update a category
$mysqli = new mysqli("localhost", $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_name']);
if(isset($_POST['update_value'])){
    $mysqli->query("UPDATE values_of_characteristics SET value='{$_POST['value']}' WHERE id='{$_POST['id']}'");
    echo "Значення характеристики було успішно змінане";
}else{
    echo $mysqli->error;
}
// Close the database connection
$mysqli->close();

// Redirect back to the admin page
exit();
?>