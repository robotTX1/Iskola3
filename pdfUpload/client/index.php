<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF feltöltése</title>
    <style>
        .red {
            color: red;
        }

        iframe {
            width: 100vw;
            height: 95vh;
        }

        body {
            padding: 0;
            margin: 0;
        }
    </style>
</head>

<body>
    <form>
        <div>
            <label for="pdf">PDF feltöltése</label>
            <input type="file" name="pdf" id="pdf" onchange="uploadPDF(this)">
            <button onclick="download(event)">Download</button>
        </div>
    </form>
    <div class="msg red"></div>
    <iframe id="pdfViewer" src="" frameborder="0"></iframe>
    <script src="utils.js"></script>
    <script>
        const uploadPDF = (obj) => {
            const file = obj.files[0];

            if(file.type !== "application/pdf") {
                document.querySelector(".msg").innerHTML = "A feltöltött fájl típusa nem PDF!";
                return;
            }

            if(file.size > 1024 * 1024 * 2) {
                document.querySelector(".msg").innerHTML = "A feltöltött fájl túl nagy! Max 2MiB";
                return;
            }

            const formData = new FormData();
            formData.append("myPDF", file);

            const config = {
                method: "POST",
                body: formData
            };

            sendFile('../server/uploadPDF.php', config, renderPDF);
        }

        const download = (e) => {
            e.preventDefault();
            fetchData('../documents/1678690672.pdf', downloadCallback);
        }

        const downloadCallback = (data) => {
            console.log(data);
            let a = document.createElement('a');
            a.href = window.URL.createObjectURL(data);
            a.download = "FILENAME";
            a.click();
        }

        const renderPDF = (data) => {
            console.log(data);
            document.getElementById('pdfViewer').src = data.pdfSrc;
        }
    </script>

</body>

</html>