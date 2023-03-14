<?php 
    session_start();

    require_once "configDB.php";
    require_once "Product.class.php";
    require_once "Cart.class.php";

     $cart = new Cart();
     extract($_GET);
     $cart->remove($id);

    $_SESSION['tot_qty'] = $cart -> getQuantity();
    echo json_encode($_SESSION['cart']);
?>