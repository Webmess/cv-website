<?php
require_once 'connect.php';

// Retrieve data from personal_info table
$personal_info = mysqli_query($db, "SELECT * FROM personal_info");

// Check if the query was successful
if (!$personal_info) {
  http_response_code(500);
  echo json_encode(['error' => 'Failed to retrieve personal info data']);
  exit;
}

// Create an array to store the formatted data
$formattedPersonalInfo = [];

// Loop through the personal info and format them
while ($row = mysqli_fetch_assoc($personal_info)) {
  $formattedPersonalInfoItem = [
    'name' => $row['name'],
    'email' => $row['email'],
    'phone' => $row['phone'],
    'bio' => $row['bio']
  ];
  $formattedPersonalInfo[] = $formattedPersonalInfoItem;
}

// Output the formatted data in JSON format
echo json_encode($formattedPersonalInfo);
?>