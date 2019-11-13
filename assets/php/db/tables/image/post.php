<?php
require_once('../../connection.php');
require_once('../queries/insert.php');

$targetDir = 'uploads/';
$image = $_FILES['image'];
$targetFile = $targetDir.basename($image['name']);
$uploadOk = 1;
$imageTmpName = $image['tmp_name'];
$imageName = $image['name'];

$check = getimagesize($imageTmpName);

if (file_exists($targetFile)) {
  echo 'Sorry, file already exists.';
  $uploadOk = 0;
}

if ($image['size'] > 500000) {
  echo 'Sorry, your file is too large.';
  $uploadOk = 0;
}

if ($check !== false) {
  echo 'File is an image - '.$check['mime'].'.';
} else {
  echo 'File is not an image.';
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo 'Sorry, your file was not uploaded.';
} else {
  if (move_uploaded_file($imageTmpName, $targetFile)) {
    
    $result = insertIntoByTableAndTexts(
      'src', "'$imageName'", 'image', $conn);

    if($result === TRUE) {
      echo "New Image src created successfully";
    } else {
      echo "Error: $conn->error";
    }
    echo '<img src="'.$targetFile.'" alt="new Image" />';
  } else {
    echo 'Sorry, there was an error uploading your file';
  }
}

?>