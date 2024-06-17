<?php
// Configuration
$db_host = 'localhost';
$db_username = 'test';
$db_password = 'your_password';
$db_name = 'conection';

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Insert data into database
    $sql = "INSERT INTO contacts (name, email, mobile_number, subject, message) VALUES ('$name', '$email', '$mobile_number', '$subject', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: ". $sql. "<br>". $conn->error;
    }
}

$conn->close();
?>