<?php
require_once 'connect.php';

// Retrieve data from education table
$education = mysqli_query($db, "SELECT * FROM education");

// Check if the query was successful
if (!$education) {
  http_response_code(500);
  echo json_encode(['error' => 'Failed to retrieve education data']);
  exit;
}

// Create an array to store the formatted data
$formattedEducation = [];

// Loop through the education and format them
while ($row = mysqli_fetch_assoc($education)) {
  $formattedEducationItem = [
    'degree' => $row['degree'],
    'institution' => $row['institution'],
    'start_date' => $row['start_date'],
    'end_date' => $row['end_date']
  ];
  $formattedEducation[] = $formattedEducationItem;
}

// Output the formatted data in JSON format
echo json_encode($formattedEducation);
?>