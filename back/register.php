<?php
require_once 'env.php';
if(isset($_POST['password']) && isset($_POST['login']) && isset($_POST['email'])){
    if(strlen($_POST['password']) < 6 ){
        http_response_code(400);
        exit('Мінімальна довжина паролю 6 символів');
    }else if(strlen($_POST['login']) < 4){
        http_response_code(400);
        exit('Мінімальна довжина логіна 4 символи');
    }else if(strlen($_POST['email']) < 5){
        http_response_code(400);
        exit('Мінімальна довжина email 5 символів');
    }else{
        $mysqli = new mysqli("localhost", $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_name']);

    // проверка на существующего юзера
    $result = $mysqli->query("SELECT COUNT(*) AS count FROM users WHERE login='{$_POST['login']}'");
    $row = $result->fetch_assoc();
    if ($row['count'] > 0) {
        exit('Этот логин уже был использован, попробуйте снова');
        http_response_code(400);
        
    }

    //добавление данных 
    $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $result = $mysqli->prepare("INSERT INTO users (login, password, email) VALUES (?, ?, ?)");
    $result->bind_param("sss", $_POST['login'], $password_hash, $_POST['email']);
    $result->execute();
    if($result){
        echo 'Ваш акаунт було зареєстровано! Увійдіть у нього повторно';
    }else{
        http_response_code(500);
        echo mysqli_error($mysqli);
    }
    }
}

?>