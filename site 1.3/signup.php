<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="loginstyle.css">
    <meta charset="UTF-8">
    <title>Sign Up | Biblioteca Online</title>
</head>

<body>
    <!--Top-Bar Menu-->
    <?php
    require 'header.php';
    ?>

    <div id="signup">


        <form class="modal-content animate" action="includes/signup.inc.php" method="post">
            <h2>Inregistreaza un nou utilizator</h2>
            <?php
            if(isset($_GET['error'])) {
                if ($_GET['error'] == 'unmatchedPasswords') {
                    echo "<p style='text-align: center; color: red'> Passwords don't match! </p>";
                } else if ($_GET['error'] == 'sqlCode') {
                    echo "<p style='text-align: center; color: red'> Please do not try writing SQL code in any field! </p>";
                } else if ($_GET['error'] == 'usernameTaken') {
                    echo "<p style='text-align: center; color: red'> This username is already taken! </p>";
                }
            } else if (isset($_GET['signup'])) {
                if ($_GET['signup'] == 'success') {
                    echo "<p style='text-align: center; color: green'> Sign up successful! </p>";
                }
            }
            ?>

            <div class="container">
                <label for="email">Email</label>
                <input type="email" placeholder="Email..." name="email" required>

                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Username..." name="uname" required>

                <label for="psw"><b>Parola</b></label>
                <input type="password" placeholder="Parola..." name="psw" required>
                <input type="password" placeholder="Re-introdu parola..." name="psw-repeat" required>

                <button type="submit" name="signup-submit">Register</button>

            </div>

        </form>
    </div>

    <?php
    require 'footer.php';
    ?>

</body>

</html>