<?php

include("../inc/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email      = $_POST["email"];
    $password   = $_POST["password"];

    $select_query = "SELECT id,username,password FROM users WHERE email='$email'";
    $result = $conn->query($select_query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $UserId             = $row["id"];
        $username           = $row["username"];
        $hashed_password    = $row["password"];
        if (password_verify($password, $hashed_password)) 
        {
            $_SESSION['UserId']     = $UserId;
            $_SESSION['Username']   = $username;
            header("location:../");
        } else {
            header("Location: ../login.php?errorCre=invalidCrediential");
        }
    } else {
        header("Location: ../login.php?error=invalidUsername");
    }

    $conn->close();
}
?>
