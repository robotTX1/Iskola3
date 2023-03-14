<?php
    header("Access-Control-Allow-Origin: *");
    // print_r($_GET);
    // echo "<br>".$_GET['id'];

    // adatbázis kapcsolódás

    $diakok=[
        [
        "nev"=>"Gyula",
        "szak"=>"Szoftverfejlesztő",
        "szev"=>2002
        ],
        [
        "nev"=>"Peti",
        "szak"=>"Művészetek",
        "szev"=>2001
        ],
        [
        "nev"=>"Anna",
        "szak"=>"Női szabó",
        "szev"=>2003
        ]
    ];

    echo json_encode($diakok);
?>