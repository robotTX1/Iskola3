<?php
    if(isset($_FILES['myImage'])) {
        // extension
        $extension = pathinfo($_FILES['myImage']['name'], PATHINFO_EXTENSION);

        // new filename (unique)
        $newFileName = time().'.'.$extension;

        // upload image to folder
        move_uploaded_file($_FILES['myImage']['tmp_name'], '../images/'.$newFileName);

        echo json_encode(['imgSrc' => '../images/'.$newFileName]);
    }
?>