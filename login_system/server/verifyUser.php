<?php 
    session_start();
    
    require_once "configDB.php";
    extract($_GET);

    if(isset($_GET['username'])) {
        $sql = "SELECT COUNT(*) mr from users WHERE username='$username'";
    } elseif(isset($_GET['email'])) {
        $sql = "SELECT COUNT(*) mr from users WHERE email='$email'";
    } else {
        echo json_encode(['msg' => 'Nem sikerült a regisztráció!']);
        return;
    }

    try {
        $stmt = $db -> query($sql);
        echo json_encode(['msg' => $stmt->fetch()]);
    } catch(Exception $e) {
        echo json_encode(['msg' => 'Nem sikerült a regisztráció! - '.$e]);
    }

?>