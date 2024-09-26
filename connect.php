<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to retrieve data from a table
function getData($table) {
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    return $data;
}

// Function to insert data into a table
function insertData($table, $data) {
    $sql = "INSERT INTO $table (";
    foreach ($data as $key => $value) {
        $sql .= $key . ", ";
    }
    $sql = rtrim($sql, ", ") . ") VALUES (";
    foreach ($data as $value) {
        $sql .= "'" . $value . "', ";
    }
    $sql = rtrim($sql, ", ") . ")";
    $conn->query($sql);
}

// Close connection
$conn->close();
?>