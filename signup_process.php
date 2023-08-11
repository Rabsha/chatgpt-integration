<?php

include("../inc/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $check_result = $conn->query($check_query);
    if ($check_result->num_rows > 0) {
        header("Location: ../signup.php?error=alreadyexist");
    } else {
        $insert_query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($insert_query) === TRUE) {
            header("location:../signup.php?register=success");
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error; 
        }
    }
}
?>
