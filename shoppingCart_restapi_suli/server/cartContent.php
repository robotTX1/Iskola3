<?php
session_start();
if(isset($_SESSION['cart']) && $_SESSION['tot_qty']>0)
    echo json_encode($_SESSION['cart']);
else
    echo json_encode(["error"=>true]);

?>