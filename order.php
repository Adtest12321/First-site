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
      <a href="contact.php"><div class="nav-button">contact us</div></a>
      <a href="order.php"><div class="nav-button nav-order">Order</div></a>
    </div>
    </div>
    <button onclick="openMenu()" class="close-menu-mobile-hidden"></button>
  
  <div class="content">
    <div class="form">
      <h1>Place order </h1>
      <form action="orderhandle.php" method="post" enctype="multipart/form-data" id="yourregularuploadformId">

        <span class="pytanie">Email:</span>
        <input required="required" spellcheck="false" id="email" name="email" type="text"><br>
        
        <span class="pytanie">General informations about your website:</span><br>
        <textarea  name="general" id="gen" cols="30" rows="10" spellcheck="false"></textarea><br>
        
        <hr width="90%" align="left">
        
        <span class="pytanie">Photos you want us to use:  (like logo)</span><br><br>
        <p style="  transform: translateY(100px); text-align: center; width: 80vw;">Drop up to 5 photos here:</p>
  <div class="drop-files-container">
        <input value="" id="files" type="file" name="files[]" accept="image/*" multiple><br>
  </div>
       
            
      <h1>Content (optional)</h1>

<input value="1"  id="iloscStron" name="iloscStron" type="number">
        <section id="pages">
        <span class="pytanie">Main page:</span><br>
        <textarea maxlength="400" name="strona1" id="page1" cols="30" rows="10" spellcheck="false"></textarea>
</section>
        

<button type="button" id="addpage-button" onclick="dodajStrone()">+ Add page</button><br>
        <button type="submit">Submit</button>
      </form>
    </div>
  </div>

</body>

<script src="script.js"></script>
<script src="dropArea.js"></script>
</html>

