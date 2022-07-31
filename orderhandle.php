<html lang="en">
<head>
    
<script src="script.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="order.css">
    <meta charset="UTF-8">
    <style>@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body  >
<div style="display:flex; align-items:center;flex-direction:column;">
  <span class="material-symbols-outlined loading">
  autorenew
  </span>
  <span>
  processing...
  </span>
</div>
<?php


$isemail = 0;
  $email="";  
  $gen = "";
  $files = "";
  $pages = "";
  $ilosc = $_POST["iloscStron"];
  $email = $_POST["email"];
  if(isset($_POST["general"])){$gen = $_POST["general"];}

  //file upload
  $total = count($_FILES["files"]["name"]);
  for ($i=0; $i < $total; $i++) { 
$target_dir = "uploads/";
$target_file = basename($_FILES["files"]["name"][$i]);
$uploadOk = 1;
$samename = 0;
$imageFileType = strtolower(pathinfo($target_dir . $target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["files"]["tmp_name"][$i]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_dir . $target_file)) {
  $samename = 1;
}

// Check file size
//if ($_FILES["files"]["size"][$i] > 500000) {
//  echo "Sorry, your file is too large.";
//  $uploadOk = 0;
//}

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
if($samename == 1){
  if (move_uploaded_file($_FILES["files"]["tmp_name"][$i], $target_dir . $email .$target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["files"]["name"][$i])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}else{

  if (move_uploaded_file($_FILES["files"]["tmp_name"][$i], $target_dir . $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["files"]["name"][$i])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}
$files = $files.'  '.$target_file;
}
///file upload end
  $pages="";

    for ($i=1; $i < $ilosc+1; $i++) { 
    $str[$i-1] = $_POST["strona$i"];
  }
  for ($i=0; $i < $ilosc; $i++) { 
    $pages = $pages.$str[$i];
  }
  include 'logIn.php';

//===========dodac target_file do bazy jako nazwa pliku
  $sql = "INSERT INTO zamowienia (id,email,general, pages, zdjecia) VALUES (null, ' $email' ,'$gen', '$pages', '$files')";
  $result = $db->query($sql);
  $db -> close();

  ?>
  <script>orderHandler();</script>
</body>
</html>