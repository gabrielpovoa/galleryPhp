<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <main>
        <form action="./actions/upload.php" method="POST" enctype="multipart/form-data">
            <label for="dragNdrop">
                <input type="file" id="dragNdrop" name="fileUpload" hidden accept="image/*" />
                <div class="dropArea">
                    <img src="assets/dragOrDrop.png" alt="">
                </div>
                <input type="submit" value="send">
            </label>
        </form>
        <article>
            <h1>Gallery</h1>
            <figure>
                <img src="https://t0.gstatic.com/licensed-image?q=tbn:ANd9GcRdWHYJFfS758Bf6HEmXis8PL5wIENTGwecp4R5fM2t02DX_7pOFhAMA5CzmYbVW4ml"
                    alt="">
                <figcaption>{will come from the modal}</figcaption>
            </figure>
        </article>
    </main>
</body>

</html>