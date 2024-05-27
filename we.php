<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Define the file path
    $filePath = 'data.txt';

    // Format the data to be saved
    $data = "Name: $name\nEmail: $email\n\n";

    // Write the data to the file
    file_put_contents($filePath, $data, FILE_APPEND);

    // Display a success message
    echo "Hahaha!";
} else {
    echo "hatdog";
}
?>