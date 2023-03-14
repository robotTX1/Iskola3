<?php
include_once 'Product.class.php';

$p1=new Product('1','TV',1000,2);
$p2=new Product('2','Router',2000,3);
$p3=new Product('3','Mobil',3000,1);

$cart[]=(array)$p1;
$cart[]=(array)$p2;
$cart[]=(array)$p3;

foreach($cart as $item){
    print_r($item);
    echo '<br>';
    echo "darabszám:".$item['quantity'];
    echo '<hr>';
}

?>