<?php

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE magicpost_main (
filedir varchar(40) PRIMARY KEY,
fromkey VARCHAR(40) NOT NULL,
tokey VARCHAR(40) NOT NULL,
time INT(10)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MagicPost created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();


?>
