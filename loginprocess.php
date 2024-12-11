<?php
session_start();

// Connect to the database
$conn = new mysqli("localhost", "root", "123456789", "PeopleConsultancy");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Query to check user credentials
    $sql = "SELECT * FROM users WHERE email = ? AND role = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $role);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user was found
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify the password
        if (password_verify($password, $user['password'])) {
            $_SESSION['email'] = $email;
            $_SESSION['role'] = $role;

            // Redirect based on role
            if ($role == "candidate") {
                header("Location: userloginform.php");
            } else if ($role == "employer") {
                header("Location: employerform.php");
            }
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Invalid email or role.";
    }

    $stmt->close();
}

$conn->close();
?>