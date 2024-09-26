<?php
require_once 'connect.php';

// Retrieve data from skills table
$skills = mysqli_query($db, "SELECT * FROM skills");

// Check if the query was successful
if (!$skills) {
  http_response_code(500);
  echo json_encode(['error' => 'Failed to retrieve skills data']);
  exit;
}

// Create an array to store the formatted data
$formattedSkills = [];

// Loop through the skills and format them
while ($row = mysqli_fetch_assoc($skills)) {
  $formattedSkillItem = [
    'skill_name' => $row['skill_name'],
    'description' => $row['description']
  ];
  $formattedSkills[] = $formattedSkillItem;
}

// Output the formatted data in JSON format
echo json_encode($formattedSkills);
?>