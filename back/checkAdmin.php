<?php
    require_once 'env.php';
    $mysqli = new mysqli("localhost", $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_name']);
    if(isset($_POST['login']) && isset($_POST['password'])){
        $login = $_POST['login'];
        $result = $mysqli->query("SELECT login FROM users WHERE login = '{$login}'");

        if($result instanceof mysqli_result){
            if(mysqli_num_rows($result) > 0){
                $login = mysqli_fetch_row($result)[0];
                $isAdmin = false;
                if ($login === 'admin') {
                    $isAdmin = true;
                }
                $data = array('isAdmin' => $isAdmin);
                echo json_encode($data);
            }else{
                echo 'Failure';
            }
        }else{
            error_log("MySQL error: ".$mysqli->error);
            http_response_code(500);
            echo $mysqli->error;
        }
    }else{
        http_response_code(400);
        exit('Bad request');
    }
?>