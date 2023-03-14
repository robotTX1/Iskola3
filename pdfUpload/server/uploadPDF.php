<?php
    if(isset($_FILES['myPDF'])) {
        // extension
        $extension = pathinfo($_FILES['myPDF']['name'], PATHINFO_EXTENSION);

        // new filename (unique)
        $newFileName = time().'.'.$extension;

        // upload image to folder
        move_uploaded_file($_FILES['myPDF']['tmp_name'], '../documents/'.$newFileName);

        echo json_encode(['pdfSrc' => '../documents/'.$newFileName]);
    }
?>