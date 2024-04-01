<?php
// Include the database connection file
include_once 'db_connection.php';

// Handle file upload - this part doesn't seem relevant to your form submission, so you may remove it if unnecessary

// Process form submission
if (isset($_POST['submit'])) {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert data into database using prepared statements to prevent SQL injection
    $sql = "INSERT INTO tabs (username, email, password) VALUES (?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        // Print alert prompt
        echo "<script>alert('Data inserted successfully.')</script>";
        // Redirect to index.php
        echo "<script>window.location.href = 'signup.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$con->close();
?>
