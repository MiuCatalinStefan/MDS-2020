<?php
if (isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';

    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $passwordRepeat = $_POST['psw-repeat'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {

        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        exit();
    } else if ($password != $passwordRepeat) {

        header("Location: ../signup.php?error=unmatchedPasswords&uname=$username&mail=$email");
        exit();
    } else {

        $sql = "SELECT username FROM users WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlCode");
            exit();
        } else {

            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck=mysqli_stmt_num_rows($stmt);
            if($resultCheck != 0) {

                header("Location: ../signup.php?error=usernameTaken");
                exit();
            } else {

                $sql = "INSERT INTO users (email, username, password) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlCode");
                    exit();
                } else {

                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $email, $username, $hashedPwd);
                    mysqli_stmt_execute($stmt);

                    header("Location: ../signup.php?signup=success"); 
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    
    header("Location: ../signup.php");
    exit(); 
}