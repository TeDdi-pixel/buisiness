<?php
require_once 'env.php';

// Update a category
$mysqli = new mysqli("localhost", $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_name']);
$category_id = (int) $_POST['category_id'];
$name = isset($_POST['name']) ? $mysqli->real_escape_string($_POST['name']) : null;
$image_link = isset($_POST['image_link']) ? $mysqli->real_escape_string($_POST['image_link']) : null;

if ($name && $image_link) {
    $mysqli->query("UPDATE categories SET name='$name', image_link='$image_link' WHERE id='$category_id'");
} else if ($name) {
    $mysqli->query("UPDATE categories SET name='$name' WHERE id='$category_id'");
} else if ($image_link) {
    $mysqli->query("UPDATE categories SET image_link='$image_link' WHERE id='$category_id'");
}


// Close the database connection
$mysqli->close();

// Redirect back to the admin page
exit();
?>