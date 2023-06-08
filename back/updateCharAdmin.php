<?php
require_once 'env.php';

// Update a characteristic
$mysqli = new mysqli("localhost", $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_name']);
$characteristic_id = (int) $_POST['characteristic_id'];
$name = isset($_POST['name']) ? $mysqli->real_escape_string($_POST['name']) : null;
$image_link = isset($_POST['image_link']) ? $mysqli->real_escape_string($_POST['image_link']) : null;

if ($name && $image_link) {
    $stmt = $mysqli->prepare("UPDATE characteristics SET name=?, image_link=? WHERE id=?");
    $stmt->bind_param("ssi", $name, $image_link, $characteristic_id);
    $stmt->execute();
    $stmt->close();
} else if ($name) {
    $stmt = $mysqli->prepare("UPDATE characteristics SET name=? WHERE id=?");
    $stmt->bind_param("si", $name, $characteristic_id);
    $stmt->execute();
    $stmt->close();
} else if ($image_link) {
    $stmt = $mysqli->prepare("UPDATE characteristics SET image_link=? WHERE id=?");
    $stmt->bind_param("si", $image_link, $characteristic_id);
    $stmt->execute();
    $stmt->close();
}

// Close the database connection
$mysqli->close();

// Redirect back to the admin page
exit();
?>