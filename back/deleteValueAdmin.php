
<?php
require_once 'env.php';
$mysqli = new mysqli("localhost", $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_name']);

if (isset($_POST['id'])) {
    $id = $_POST['id'];    
    // Удалить запись из таблицы `values_of_characteristics`
    $sql = "DELETE FROM values_of_characteristics WHERE id = $id";
    if ($mysqli->query($sql)) {
        echo "Значення характеристики успішно видалено.";
    } else {
        echo $mysqli->error;
    }
}
?>