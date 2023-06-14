<?php
// Start session
session_start();
include ("connect.php");

$conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password
    // ...

    // Check if the username already exists in the database
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        // Insert new user record into the database
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['username'] = $username;
            header('Location: login.php');

            exit();
        } else {
            // Registration successful
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
       echo "username already exist!"; 
    }
}

$conn->close();
?>