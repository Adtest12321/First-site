<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="order.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>50</title>
</head>
<body> 
  <!--Nawigacja-->
   
  <div class="mobile-nav">
    <div class="logo">
      $50 website
    </div>
    <button class="menu-open" onclick="openMenu()"> <span class="material-symbols-outlined">
      menu
      </span> </button>
  </div>
    <div class="nav">
      <a href="#">
      <div class="logo">
        $50 website
      </div>
    </a>
    <div class="buttons">
      <a href="index.html"><div class="nav-button">Home</div></a>
      <a href="our_project.html"><div class="nav-button">Our projects</div></a>
      <a href="#"><div class="nav-button">contact us</div></a>
      <a href="order.php"><div class="nav-button nav-order">Order</div></a>
    </div>
    </div>
    <button onclick="openMenu()" class="close-menu-mobile-hidden"></button>

    <!----------CONTACT FORM---------------->
    <div class="contact-form">
        <h1>Contact form</h1>
        <form action="contacthandle.php" method="get" enctype="multipart/form-data">
        <input required="required" type="text" name="email" placeholder="E-mail" maxlength="40">
        <input type="text" name="subject" placeholder="Subject" maxlength="200">
        <textarea  name="message" placeholder="Message" maxlength="800"></textarea>
        <br><button type="submit">Submit</button>
</fomr>
    </div>
</body>

<script src="script.js"></script>
</html>