<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "login";
$dbname2 = "Student_Records";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE users(user_no varchar(20) NOT NULL PRIMARY KEY,
password VARCHAR(20) NOT NULL,
domain CHAR(8) NOT NULL,)";

if (mysqli_query($conn, $sql)) {
    echo "Table 'users' created successfully";
} else {
    echo "Error creating table 'users': " . mysqli_error($conn);
}

mysqli_close($conn);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname2);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE students(studentID varchar(30) NOT NULL PRIMARY KEY,
name VARCHAR(50) NOT NULL,
surname VARCHAR(50) NOT NULL,)";

if (mysqli_query($conn, $sql)) {
    echo "Table 'students' created successfully";
} else {
    echo "Error creating table 'students': " . mysqli_error($conn);
}


?> 
