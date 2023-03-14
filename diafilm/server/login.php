<?php
    session_start();
    extract($_POST);

    if($username == "valaki" && $password == 'valami') {
        $_SESSION['username'] = $username;
        echo json_encode(["msg" => "Sikeres bejelentkezés", "success" => true]);
    } else {
        echo json_encode(["msg" => "Sikertelen bejelentkezés", "success" => false]);
    }
?>