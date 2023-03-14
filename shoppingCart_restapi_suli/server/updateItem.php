<?php
    session_start();
    require_once 'configDB.php';
    include_once 'Product.class.php';
    include_once 'Cart.class.php';

    $cart = new Cart();
    extract($_GET);
    $cart->updateQuantity($id,$qty);   
    
    $_SESSION['tot_qty']=$cart->getQuantity();
    ///echo json_encode($_SESSION['cart']);
    echo json_encode(["msg"=>"sikeres módosítás!"]);

    ?>