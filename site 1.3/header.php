<?php
session_start();
?>

<div class="w3-top">
    <div class="w3-row w3-padding w3-black">
        <div class="w3-col s3">
            <a href="index.php" class="w3-button w3-block w3-black">ACASA</a>
        </div>
        <div class="w3-col s3">
            <a href="carti.php" class="w3-button w3-block w3-black">CARTI</a>
        </div>
        <div class="w3-col s3">
            <a href="contact.php" class="w3-button w3-block w3-black">CONTACT</a>
        </div>
        <div class="w3-col s3">
            <?php
            if (!isset($_SESSION['userId'])) {
                echo '<a href="login.php" class="w3-button w3-block w3-black">LOGIN / SIGN-UP</a>';
            } else {
                echo '<a href="includes/logout.inc.php" class="w3-button w3-block w3-black">LOG OUT FROM: ' . $_SESSION['username'] . '</a>';
            }
            ?>
        </div>
    </div>
</div>