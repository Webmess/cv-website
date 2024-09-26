<?php
require_once 'connect.php';

// Retrieve data from contact_form table
$contact_form = mysqli_query($db, "SELECT * FROM contact_form");

// Check if the query was successful
if (!$contact_form) {
  http_response_code(500);
  echo json_encode(['error' => 'Failed to retrieve contact form data']);
  exit;
}

// Create an array to store the formatted data
$formattedContactForm = [];

// Loop through the contact form and format them
while ($row = mysqli_fetch_assoc($contact_form)) {
  $formattedContactFormItem = [
    'name' => $row['name'],
    'email' => $row['email'],
    'message' => $row['message']
  ];
  $formattedContactForm[] = $formattedContactFormItem;
}

// Output the formatted data in JSON format
echo json_encode($formattedContactForm);
?>