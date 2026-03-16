<?php

$servername = "localhost";
$username = "admin";
$password = "william";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts (name,email,phone,message)
VALUES ('$name','$email','$phone','$message')";

if ($conn->query($sql) === TRUE) {
    header("Location: contact.html?success=1");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>
