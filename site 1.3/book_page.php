<!DOCTYPE html>
<html>
<meta charset="UTF-8">
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
    background-image: url("library.png");
    min-height: 75%;
  }

  .menu {
    display: none;
  }
</style>

<body>
  <?php
  require 'header.php';
  ?>

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

  <div class="w3-sand w3-grayscale w3-large"></div>

  <?php

  if (isset($_GET['book'])) {

    require 'includes/dbh.inc.php';
    $sql = 'SELECT * FROM books WHERE book_id = ' . $_GET['book'] . ';';
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
      $row = mysqli_fetch_assoc($result);
      echo '<div class="w3-container" id="about">
              <div class="w3-content" style="max-width:700px">
                <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">'.$row['name'].'</span></h5>
                <p>'.$row['description'].'</p>
                <p><strong>Availability:</strong> Avem '.$row['pieces'].' bucati in stoc!</p>
                <p><button onclick = "alert(\'Rezervare efectuata pe numele dumneavoastra!\')" class="w3-button w3-black" type="submit">REZERVA ONLINE</button></p>
              </div>
            </div>';
    } else {
      header("Location: carti.php");
    }
  } else {
    header("Location: carti.php");
  }
  ?>
  <!-- Contact/Area Container -->
  <div class="w3-container" id="where" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:700px">
      <p>Pentru lectorii noi, am pregatit o sectie de review-uri in care acestia pot citi recenziile celor care au citit cartea de mai sus. Va invitam sa ne lasati mesajele voastre!</p>
      <form action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nume" required name="Nume"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Review" required name="Review"></p>
        <p><button class="w3-button w3-black" type="submit">SEND</button></p>
      </form>
    </div>
  </div>

  <?php
  require 'footer.php';
  ?>
</body>

</html>