<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $rating = $_POST['rating'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    // Sanitize input data
    $rating = htmlspecialchars($rating);
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $feedback = htmlspecialchars($feedback);

    // Format the feedback data
    $feedbackData = "Rating: $rating
Name: $name
Email: $email
Feedback: $feedback

";

    // Save the feedback to a file
    $file = 'feedback.txt';
    file_put_contents($file, $feedbackData, FILE_APPEND | LOCK_EX);

    // Return a success response (you can customize this as needed)
    echo "Thank you for your feedback!";
}
?>