<?php
session_start();
error_reporting(0);

$target_dir = '../reports/';
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$error = '';
$success = '';
// Check if image file is a actual image or fake image
if (isset($_POST['submit'])) {
    $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
    if ($check !== false) {
        // $error = 'File is an image - ' . $check['mime'] . '.';
        $uploadOk = 1;
    } else {
        $error = 'File is not an image.';
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    $error = 'Sorry, file already exists.';
    $uploadOk = 0;
}

// // Check file size
// if ($_FILES['fileToUpload']['size'] > 500000) {
//     $error = 'Sorry, your file is too large.';
//     $uploadOk = 0;
// }

// Allow certain file formats
if (
    $imageFileType != 'jpg' &&
    $imageFileType != 'png' &&
    $imageFileType != 'jpeg' &&
    $imageFileType != 'pdf'
) {
    $error = 'Sorry, only JPG, JPEG, PNG & PDF files are allowed.';
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
        $success =
            'The file ' .
            htmlspecialchars(basename($_FILES['fileToUpload']['name'])) .
            ' has been uploaded.';
        // echo $success;
        $_SESSION['success'] = $success;
    } else {
        $error = 'Sorry, there was an error uploading your file.';
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #fileToUpload{
      position: relative;
      box-sizing: border-box;
      margin: 8px 0;

      top: 0%;
      width: 99%;
      height: 30px;
      text-align: center;
      box-sizing: border-box;
      left: 0.5%;
    }

    input[type="submit"] {
      position: relative;
      top: 0%;
      margin: 8px 0;
      width: 30%;
      height: 30px;
      text-align: center;
      box-sizing: border-box;
      left: 0.5%;
    }
    div {
      border: solid 2px black;
      height: 500px;
      width: 300px;
    }
    #error{
      position: relative;
      width: 30%;
      height: 60px;
      text-align: center;
      box-sizing: border-box;
      background-color: azure;
      left: 0.5%;
      border: 2px solid black;

    }
    #success{
      position: relative;
      width: 30%;
      height: 60px;
      text-align: center;
      box-sizing: border-box;
      background-color: azure;
      left: 0.5%;
      border: 2px solid black;
      color: green;

    }
  </style>
</head>
  <body>
    <form method="post" enctype="multipart/form-data">
      Select file to upload:
      <br>
      <input type="file" name="fileToUpload" id="fileToUpload" />
      <br>

      <input type="submit" value="Upload Report/Prescription" name="submit" />
    </form>
    <?php if ($uploadOk == 0) {
        echo '<div id="error"><h3>' . $error . '</h3></div>';
    } else {
        echo '<div id="success"><h3>' . $success . '</h3></div>';
    } ?>

   
    
   
  </body>
</html>
