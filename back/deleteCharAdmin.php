
<?php
require_once 'env.php';
$mysqli = new mysqli("localhost", $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_name']);

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    
    // Удалить связанные записи в таблице `values_of_characteristics`
    $sql = "DELETE FROM values_of_characteristics WHERE characteristic_id = $id";
    if (!$mysqli->query($sql)) {
        echo "Error deleting related values: " . $mysqli->error;
        exit;
    }
    
    // Удалить запись из таблицы `characteristics`
    $sql = "DELETE FROM characteristics WHERE id = $id";
    if ($mysqli->query($sql)) {
        echo "Characteristic deleted successfully.";
    } else {
        echo "Error deleting characteristic: " . $mysqli->error;
    }
}
?>