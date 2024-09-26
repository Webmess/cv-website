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

// Retrieve data from tables
$personal_info = getData('personal_info');
$education = getData('education');
$skills = getData('skills');
$projects = getData('projects');
$contact_form = getData('contact_form');

// Create an array to store the data
$data = array(
    'personal_info' => $personal_info,
    'education' => $education,
    'skills' => $skills,
    'projects' => $projects,
    'contact_form' => $contact_form
);

// Output the data in a format that can be used by your HTML files
echo json_encode($data);

// Close connection
$conn->close();
?>