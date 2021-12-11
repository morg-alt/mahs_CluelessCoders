<?php
if (isset($_POST["signup-submit"])) {
    
    require "dbh.inc.php";

    $username = $_POST["uidUsers"];
    $email = $_POST["uidEmail"];
    $password = $_POST["prdtID"];

    if (empty($username) || empty($email) || empty($password)) {
        header("Location: ../purchase.php?error=emptyfields&uid=" . $username . "&uidEmail=" . $email);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../purchase.php?error=invalidmailuid");
        exit();

    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../purchase.php?error=invalidmail&uid=" . $username);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
        header("Location: ../purchase.php?error=invaliduid&mail=" . $email);
        exit();
    }
    else {
        $sql = "SELECT uidUsers FROM purchases WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../purchase.php?error=sqlerror");
            exit();
        }
    
    else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        IF ($resultCheck > 0) {
           header("Location: ../purchase.php?error=usertaken&mail=" . $email);
            exit(); 
        }
        else {
            $sql = "INSERT INTO purchases (uidUsers, emailUsers, prdtID) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../purchase.php?error=sqlerror");
                exit();
            }
            else {
                $hashedPwd = $password;

                mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                mysqli_stmt_execute($stmt);
                header("Location: ../purchase.php?purchase=success");
                exit();
            }
        }
      }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}
else {
    header("Location: ../purchase.php");
    exit();
}
