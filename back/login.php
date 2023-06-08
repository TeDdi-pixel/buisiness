<?php
require_once 'env.php';

if(isset($_POST['login']) && isset($_POST['password'])) {
    $mysqli = new mysqli("localhost", $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_name']);

    // Prepare a statement to retrieve the user's id, login, and hashed password
    $result = $mysqli->prepare("SELECT id, login, password FROM users WHERE login=?");
    $result->bind_param("s", $_POST['login']);
    $result->execute();
    $result->store_result();

    if($result->num_rows() > 0) {
        // Fetch the user's id, login, and hashed password
        $result->bind_result($user_id, $user_login, $hashed_password);
        $result->fetch();

        // Verify the user's password
        if(password_verify($_POST['password'], $hashed_password)) {

            // Check if the user is an admin
            $is_admin = strpos($user_login, "admin") === 0;

            // Construct the response object with the user's id and admin status
            $response = [
                "id" => $user_id,
                "isAdmin" => $is_admin,
                "login" => $user_login
            ];

            // Send the response object as JSON
            header('Content-Type: application/json');
            echo json_encode($response);

        } else {
            http_response_code(401);
            exit('Invalid login credentials');
        }
    } else {
        http_response_code(401);
        exit('Invalid login credentials');
    }
} else {
    http_response_code(400);
    exit('Bad request');
}
?>