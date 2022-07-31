<html lang="en">
<head>
    
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
<?php
  $email = $_GET["email"];
  $subject = $_GET["subject"];
  $message = $_GET["message"];

 include 'logIn.php';

  $sql = "INSERT INTO kontakt (id_kontakt,email,subject,message) VALUES (null, ' $email' ,'$subject', '$message')";
  $result = $db->query($sql);
  $db -> close();
  ?>
<body onload="contactHandler()">
<div style="display:flex; align-items:center;flex-direction:column;">
  <span class="material-symbols-outlined loading">
  autorenew
  </span>
  <span>
  processing...
  </span>
</div>
</body>
<script src="script.js"></script>
</html>