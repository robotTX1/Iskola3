<?php
session_start();
?>
<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script src="utils.js"></script>
    <title>Termékek</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" role="navigation">
        <span class="navbar-brand">Webshop</span>
        <div class="navbar-collapse collapse " id="menuid">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Főoldal</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?prog=products.php">Termékek</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?prog=contact.php">Kapcsolat</a></li>
            </ul>
        </div>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menuid" aria-controls="menuid" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <!--Itt fog megjelenni a kiválasztott program-->
    <div class="container  justify-content-center  pt-5">
        <?php

        if (isset($_GET["prog"]))
            include $_GET["prog"];
        else
            include "home.php";
            
print_r($_SESSION);
        ?>
    </div>

    <script src="menuHighlights.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>