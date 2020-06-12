<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="loginstyle.css">
    <meta charset="UTF-8">
    <title>Log In | Biblioteca Online</title>
</head>

<body>

    <!--Top-Bar Menu-->
    <?php
    require 'header.php';
    ?>

    <div id="login">

        <form class="modal-content animate" action="includes/login.inc.php" method="POST">

            <div class="container">
                <?php
                if(isset($_GET['error'])) {
                    if ($_GET['error'] == 'sqlCode') {
                        echo "<p style='text-align: center; color: red'> Eroare baza de date! </p>";
                    } else if ($_GET['error'] == 'noUser') {
                        echo "<p style='text-align: center; color: red'> Acest username nu apartine niciunui utilizator! </p>";
                    } else if ($_GET['error'] == 'wrongPassword') {
                        echo "<p style='text-align: center; color: red'> Parola gresita! </p>";
                    }
                }
                ?>
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Username..." name="uname" required>

                <label for="psw"><b>Parola</b></label>
                <input type="password" placeholder="Parola..." name="psw" required>

                <button type="submit" name="login-submit">Login</button>
                <label>
                    <!-- <input type="checkbox" checked="checked" name="remember"> Remember me -->
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <a href="signup.php" id="registerButton">Sign Up</a>
                <!-- <span class="psw"><a href="#">Forgot password?</a></span> -->
            </div>
        </form>
    </div>

    <?php
    require 'footer.php';
    ?>

</body>

</html>