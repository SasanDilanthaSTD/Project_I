<?php
if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $targetDirectory = "../../assets/use_image/userPictures/"; // Specify the directory where you want to store uploaded images.
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));


    // Check if the file is an actual image or a fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;

        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check file size (you can set your own size limit)
//    if ($_FILES["image"]["size"] > 500000) {
//        echo "Sorry, your file is too large.";
//        $uploadOk = 0;
//    }

    // Allow only specific image file formats (you can customize this list)
    $allowedFormats = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Check if the file already exists, and if so, delete it
        if (file_exists($targetFile)) {
            unlink($targetFile); // Delete the existing file
        }

        // Try to upload the new file
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
            header("Location: ../../pages/profedit.php?success=1");


           // file path save in database =  "../assets/use_image//userPictures/".basename($_FILES["image"]["name"])
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}