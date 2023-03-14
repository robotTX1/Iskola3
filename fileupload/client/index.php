<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotó feltöltése</title>
</head>

<body>
    <form>
        <div>
            <label for="myimg">Fotó feltöltése</label>
            <input type="file" name="myimg" id="myimg" onchange="uploadImage(this)">
        </div>
    </form>
    <div class="uploaded-img"></div>
    <script src="utils.js"></script>
    <script>
        const uploadImage = (obj) => {
            const myFile = obj.files[0];
            if (!['image/jpeg', "image/png"].includes(myFile.type)) {
                document.querySelector('.uploaded-img').innerHTML = "This file must be PNG or JPEG!";
                obj.files[0].value = '';
            }

            if (myFile.size > 2 * 1024 * 1024) {
                document.querySelector('.uploaded-img').innerHTML = "This image is too big!";
            }

            const formData = new FormData();
            formData.append('myImage', myFile);
            const config = {
                method: 'POST',
                body: formData
            }

            sendFile('../server/upload.php', config, renderImage)
        }

        const renderImage = (data) => {
            console.log(data);
            document.querySelector('.uploaded-img').innerHTML = `
                <div>Sikeres feltöltés</div>
                <div><img src=${data.imgSrc} style='width: 1000px;' ></div>
            `;
        }
    </script>

</body>

</html>