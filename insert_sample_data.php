<?php
// Hash the passwords
$hashed_password_candidate = password_hash('password123', PASSWORD_DEFAULT);
$hashed_password_employer = password_hash('password123', PASSWORD_DEFAULT);

// Connect to the database
$conn = new mysqli("localhost", "root", "123456789", "PeopleConsultancy");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert sample data
$sql = "INSERT INTO users (email, password, role) VALUES
('candidate@example.com', '$hashed_password_candidate', 'candidate'),
('employer@example.com', '$hashed_password_employer', 'employer')";

if ($conn->query($sql) === TRUE) {
    echo "Sample data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>