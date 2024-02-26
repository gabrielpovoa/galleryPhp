<?php
require("connection.php");

if (isset($_FILES['fileUpload']) && isset($_POST['description'])) {
    $alloedExtension = ['jpg', 'png', 'gif', 'jpeg'];
    $fielSent = $_FILES['fileUpload'];
    if ($fielSent['error']) {
        die('Error catched ' . $fielSent['error']);
    }
    $description = $_POST['description'];
    $folder = 'uploads/';
    $fileName = $fielSent['name'];
    $newFileName = uniqid();
    $extensionFile = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $path = $folder . $newFileName . "." . $extensionFile;

    // if ($extensionFile !== array_filter($alloedExtension)) {
    //     die('Extension ' . $extensionFile . ' not allowed');
    //     header('Location: index.php');
    //     exit;
    // }
    $moving = move_uploaded_file($fielSent['tmp_name'], $path);
    if ($moving) {
        $sql = $pdo->query("INSERT INTO elephant_gallery (Path, Description, Date_upload, Original_name) VALUES ('$path', '$description', NOW(), '$fileName')");
        header("Location: index.php");
        $fielSent[""] = "";
        $description = "";
    } else {
        echo "Fail";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <main>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="dragNdrop">
                <input type="file" id="dragNdrop" name="fileUpload" hidden accept="image/*" />
                <div class="dropArea">
                    <img src="assets/dragOrDrop.png" alt="">
                </div>
                <label for="picDetails" class="description">Enter a Description or Name for the picture
                    <input type="text" id="picDetails" value="" name="description" />
                </label>
                <input type="submit" value="send">
            </label>
        </form>
        <article>
            <h1>Gallery</h1>
            <?php
            $sql = $pdo->query("SELECT * FROM elephant_gallery");
            foreach ($sql as $row):
                ?>
                <figure>
                    <img src="<?= $row['Path'] ?>" alt="<?= $row['Description'] ?>" />
                    <figcaption>
                        <?= $row['Description'] ?>
                    </figcaption>
                </figure>
                <?php
            endforeach; ?>
        </article>
    </main>
</body>

</html>