<?php
    session_start();
    
    require_once "configDB.php";
    extract($_POST);
    
    $sql = "SELECT username un, password pw FROM users WHERE username='$username'";

    try {
        $stm = $db -> query($sql);
        if($stm->rowCount() == 1) {
            $row = $stm -> fetch();
            extract($row);
            $isValid = password_verify($password, $pw);

            if($isValid) {
                $_SESSION['username'] = $username;
                echo json_encode(["msg" => "ok"]);
            } else {
                echo json_encode(["msg" => "Felhasználónév/jelszó hibás!"]);
            }
        } else {
            echo json_encode(["msg" => "Hibás felhasználónév!"]);
        }
    } catch(exception $e) {
        echo json_encode(["msg" => "Hiba! - $e"]);
    }
?>