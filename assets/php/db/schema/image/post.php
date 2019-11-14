<?php
require_once('../../connection.php');
require_once('../../queries/insert.php');
require_once('../../config/transform.php');

$targetdir = $_POST['targetdir'];
$src = isset($_FILES['src']) ? $_FILES['src'] : '';
$idsection = isset($_POST['idsection']) ? $_POST['idsection'] : '';
$title = isset($_POST['title']) ? $_POST['title'] : '';
$subtitle = isset($_POST['subtitle']) ? $_POST['subtitle'] : '';
$description = isset($_POST['description']) ? $_POST['description'] : '';

if ($src !== '') {
  $uploadOk = 1;
  $targetFile = $targetdir.basename($src['name']);
  $srcTmpName = $src['tmp_name'];
  $srcName = $src['name'];
  $check = getimagesize($srcTmpName);

  if (file_exists($targetFile)) {
    echo 'Sorry, file already exists.';
    $uploadOk = 0;  
  }
  
  if ($src['size'] > 500000) {
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
    if (move_uploaded_file($srcTmpName, $targetFile)) {
      
      $result = insertIntoByTableAndTexts(
        'src, idsection, title, subtitle, description', 
        "'$srcName', '$idsection', '$title', '$subtitle', '$description'", 
        'image', $conn);
  
      if ($result === TRUE) {
        echo "New Image src created successfully";
      } else {
        echo "Error: $conn->error";
      }
      echo '<img src="'.$targetFile.'" alt="new Image" />';
    } else {
      echo 'Sorry, there was an error uploading your file';
    }
  }
} else {
  $result = insertIntoByTableAndTexts(
    'src, idsection, title, subtitle, description', 
    "'', '$idsection', '$title', '$subtitle', '$description'", 
    'image', $conn);

  if ($result === TRUE) {
    echo "New Image src created successfully";
  } else {
    echo "Error: $conn->error";
  }

}

?>