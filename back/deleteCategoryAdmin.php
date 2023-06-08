<?php
require_once 'env.php';
$mysqli = new mysqli("localhost", $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_name']);

if (isset($_POST['delete_category'])) {
    $category_id = $_POST['id'];

    // Check if there are any products that use this category
    $result = $mysqli->query("SELECT * FROM products WHERE category_id = '{$category_id}'");
    if ($result->num_rows > 0) {
        // Delete all characteristics values that belong to the products
        $mysqli->query("DELETE FROM values_of_characteristics WHERE product_id IN (SELECT id FROM products WHERE category_id = '{$category_id}')");

        // Delete all products that use this category
        $mysqli->query("DELETE FROM products WHERE category_id = '{$category_id}'");
    }

    // Check if there are any characteristics that use this category
    $result = $mysqli->query("SELECT * FROM characteristics WHERE category_id = '{$category_id}'");
    if ($result->num_rows > 0) {
        // Delete all characteristics that use this category
        $mysqli->query("DELETE FROM characteristics WHERE category_id = '{$category_id}'");
    }

    // Delete the category
    if ($mysqli->query("DELETE FROM categories WHERE id = '{$category_id}'")) {
        echo "Category deleted successfully.";
    } else {
        echo "Error deleting category: " . $mysqli->error;
    }
}
?>