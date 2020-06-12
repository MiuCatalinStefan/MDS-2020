<!DOCTYPE html>
<html>
<title>Contact | Biblioteca Online</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
  body,
  html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
  }

  .bgimg {
    background-position: center;
    background-size: cover;
    background-image: url("https://www.wallpapers4u.org/wp-content/uploads/room_design_library_shelves_7910_1920x1080.jpg");
    min-height: 75%;
  }

  .menu {
    display: none;
  }
</style>

<body>

  <!-- Links (sit on top) -->
  <?php
  require 'header.php';
  ?>

  <!-- Header with image -->
  <header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
      <span class="w3-tag">Open from 6am to 5pm</span>
    </div>
    <div class="w3-display-middle w3-center">
      <span class="w3-text-white" style="font-size:90px">The Great<br>Library</span>
    </div>
    <div class="w3-display-bottomright w3-center w3-padding-large">
      <span class="w3-text-white">15 Adr street, 5015</span>
    </div>
  </header>

  <div><span>CONTACT</span></div>

  <?php
  require 'footer.php';
  ?>

</body>