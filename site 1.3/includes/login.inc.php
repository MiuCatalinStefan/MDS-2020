<?php
if (isset($_POST['login-submit'])) {

    require 'dbh.inc.php';
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    if (empty($username) or empty($password)) {

        exit();
    } else {

        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlCode");
            exit();
        } else {

            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {

                $pwdChech = password_verify($password, $row['password']);
                if ($pwdChech == false) {

                    header("Location: ../login.php?error=wrongPassword");
                    exit();
                } else if ($pwdChech == true) {

                    session_start();
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['userId'] = $row['user_id'];
                    header("Location: ../index.php?login=success");
                    exit();
                } else {

                    header("Location: ../login.php?error=wrongPassword");
                    exit();
                }
            } else {

                header("Location: ../login.php?error=noUser");
                exit();
            }
        }
    }
} else {
    header("Location: ../login.php");
    exit();
}
