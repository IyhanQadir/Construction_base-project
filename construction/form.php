<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $number = trim($_POST['number']);
    $project_details = trim($_POST['project_details']);

    // Validate form data
    $errors = [];
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }
    if (empty($number)) {
        $errors[] = "Number is required.";
    }
    if (empty($project_details)) {
        $errors[] = "Project details are required.";
    }

    // If there are no errors, proceed to handle the form data
    if (empty($errors)) {
        // Example: Save the data to a database (replace with actual database code)
        /*
        $conn = new mysqli("hostname", "username", "password", "database");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $stmt = $conn->prepare("INSERT INTO projects (name, email, number, project_details) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $number, $project_details);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        */

        // Example: Send an email with the form data
        $to = "your_email@example.com";
        $subject = "New Project Application";
        $message = "Name: $name\nEmail: $email\nNumber: $number\nProject Details: $project_details";
        $headers = "From: no-reply@example.com";

        if (mail($to, $subject, $message, $headers)) {
            echo "Your application has been submitted successfully.";
        } else {
            echo "There was an error sending your application. Please try again.";
        }
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>
