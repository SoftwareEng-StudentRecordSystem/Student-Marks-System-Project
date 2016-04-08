<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create login database
$sql = "CREATE DATABASE login";
if (mysqli_query($conn, $sql)) {
    echo "Database: 'login' created successfully";
} else {
    echo "Error creating database 'login': " . mysqli_error($conn);
}

// Create Student_Records database
$sql = "CREATE DATABASE Student_Records";
if (mysqli_query($conn, $sql)) {
    echo "Database: 'Student_Records' created successfully";
} else {
    echo "Error creating database 'Student_Records': " . mysqli_error($conn);
}

mysqli_close($conn);
?> 
   
