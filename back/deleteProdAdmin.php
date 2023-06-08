
<?php
require_once 'env.php';
$mysqli = new mysqli("localhost", $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_name']);

if (isset($_POST['id'])) {
    $prod_id = $_POST['id'];

    // Удаляем все строки из таблицы "values_of_characteristics", связанные с удаляемой строкой из таблицы "products"
    $sql = "DELETE FROM values_of_characteristics WHERE product_id = $prod_id";
    if ($mysqli->query($sql)) {
        // Если удаление прошло успешно, удаляем строку из таблицы "products"
        $sql = "DELETE FROM products WHERE id = $prod_id";
        if ($mysqli->query($sql)) {
            echo "Product deleted successfully.";
        } else {
            echo "Error deleting product: " . $mysqli->error;
        }
    } else {
        echo "Error deleting product: " . $mysqli->error;
    }
}
