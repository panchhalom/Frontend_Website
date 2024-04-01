<?php
// Include the database connection file
include_once 'db_connection.php';

// Handle file upload - this part doesn't seem relevant to your form submission, so you may remove it if unnecessary

// Process form submission
if (isset($_POST['submit'])) {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Insert data into database using prepared statements to prevent SQL injection
    $sql = "INSERT INTO cont (username, email) VALUES (?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $username, $email);

    if ($stmt->execute()) {
        // Print alert prompt
        echo "<script>alert('We will get in touch with you.')</script>";
        // Redirect to index.php
        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$con->close();
?>
