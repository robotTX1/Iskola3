<?php
    session_start();
    require_once 'configDB.php';
    include_once 'Product.class.php';
    include_once 'Cart.class.php';

    $cart = new Cart();
    extract($_POST);
    $product=(array) new Product($id,$name,$price,1);
    $cart->addProduct($product);

    $_SESSION['tot_qty']=$cart->getQuantity();
    echo $cart->getQuantity();

?>