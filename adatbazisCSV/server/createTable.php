<?php
    require_once 'configDb.php';

    $file = new SplFileObject('./autok1sorban.txt');

    $sql = 'CREATE TABLE cars (
        id INT(11) NOT NULL AUTO_INCREMENT,
        name VARCHAR(50) NOT NULL,
        year INT(4) NOT NULL,
        doors INT(1) NOT NULL,
        color VARCHAR(30) NOT NULL,
        PRIMARY KEY (id)
    )';

    $stmt = $db->exec($sql);

    $sql = "";
    $i = 0;
    while(!$file->eof()) {
        $i++;
        $line = $file->fgets();
        echo $line;
        echo '<br>';
        list($name, $year, $doors, $color) = explode(';', $line);
        $sql = $sql."INSERT INTO cars values(null, '{$name}', {$year}, {$doors}, '{$color}');";
    }

    $stmt = $db->exec($sql);
    
    echo "Sorok száma az adatbázis táblájában: ".$i;
?>