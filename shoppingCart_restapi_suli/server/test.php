<?php
    include_once "Product.class.php";

    $p1 = new Product(1, "Krumpli", 10, 20);
    $p2 = new Product(2, "Még több krumpli", 15, 30);
    $p3 = new Product(2, "Sok sok krumpli", 5, 5);

    $cart[] = (array)$p1;
    $cart[] = (array)$p2;
    $cart[] = (array)$p3;

    foreach ($cart as $item) {
        print_r($item);
        echo "<br>";
        echo "darabszám: ".$item['quantity'];
        echo "<br>";
        echo "<br>";
    }
?>