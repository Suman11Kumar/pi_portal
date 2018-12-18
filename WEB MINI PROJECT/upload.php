<?php
$connect=mysqli_connect("localhost","root","","pi_portal");
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imageToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["imageToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imageToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$image=basename( $_FILES["imageToUpload"]["name"],".jpg"); // used to store the filename in a variable


$target_file = $target_dir . basename($_FILES["resumeToUpload"]["name"]);
$uploadOk = 1;
$resumeFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["resumeToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an pdf - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an pdf.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["resumeToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($resumeFileType != "doc" && $resumeFileType != "pdf") {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["resumeToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["resumeToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$image=basename( $_FILES["imageToUpload"]["name"],".jpg"); // used to store the filename in a variable
$resume=basename( $_FILES["resumeToUpload"]["name"],".pdf");

//storind the data in your database
$query= "INSERT INTO photo_resume (PHOTO,RESUME) VALUES ('$image','$resume')";
mysql_query($query);

?>