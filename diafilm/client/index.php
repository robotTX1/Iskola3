<?php 
  session_start();
  echo "Ez a token: ".session_id()."<br>";
  print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title>Diafilmek</title>
  </head>
  <body>
    <div class="container bg-light p-0">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded shadow ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item p-1 m-2">
              <a class="nav-link" href="index.php">Főoldal</a>
            </li>
            <li class="nav-item p-1 m-2">
              <a class="nav-link" href="index.php?prog=statisztika.php">Statisztika</a>
            </li>
            <li class="nav-item p-1 m-2">
              <a class="nav-link" href="index.php?prog=kiadok.php">Kiadók</a>
            </li>
            <li class="nav-item p-1 m-2">
              <a class="nav-link" href="index.php?prog=ujkiado.php">Új kiadó</a>
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-end">
          <li class="nav-item p-1 m-2">
            <a class="nav-link" href="index.php?prog=login.php">Bejelentkezés</a>
          </li>
          <li class="nav-item p-1 m-2">
            <a class="nav-link" href="index.php?prog=register.php">Regisztráció</a>
          </li>
        </div>
      </nav>

      <div class="row p-3 justify-content-center">
        <!--az URL-ben kapott program betöltése-->
        <?php
        //php logika-routingolás
          extract($_GET);

          if(isset($prog)) {
            include $prog;
          } else {
            include "fooldal.php";
          }
        ?>
      </div>

    </div>
  
    <script src="bootstrap/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/bootstrap.bundle.js"></script>
  </body>
</html>