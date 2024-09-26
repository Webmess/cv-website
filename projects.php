<?php
require_once 'connect.php';

// Retrieve data from projects table
$projects = mysqli_query($db, "SELECT * FROM projects");

// Check if the query was successful
if (!$projects) {
  http_response_code(500);
  echo json_encode(['error' => 'Failed to retrieve projects data']);
  exit;
}

// Create an array to store the formatted data
$formattedProjects = [];

// Loop through the projects and format them
while ($row = mysqli_fetch_assoc($projects)) {
  $formattedProjectItem = [
    'project_name' => $row['project_name'],
    'description' => $row['description'],
    'start_date' => $row['start_date'],
    'end_date' => $row['end_date']
  ];
  $formattedProjects[] = $formattedProjectItem;
}

// Output the formatted data in JSON format
echo json_encode($formattedProjects);
?>