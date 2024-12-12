<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - People Consultancy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f8f5;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .auth-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .btn {
            background-color: #007b8f;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #005f6b;
        }
        a {
            color: #007b8f;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <main class="auth-page">
        <div class="auth-container">
            <h1>Register</h1>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Connect to the database
                $conn = new mysqli("localhost", "root", "123456789", "PeopleConsultancy");

                // Check the connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Get the form data
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm-password'];
                $user_type = $_POST['user-type'];

                // Validate the input
                if (empty($name) || empty($email) || empty($password) || empty($confirm_password) || empty($user_type)) {
                    echo "<p>Please fill in all the required fields.</p>";
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<p>Invalid email format.</p>";
                } elseif ($password !== $confirm_password) {
                    echo "<p>Passwords do not match.</p>";
                } else {
                    // Check if the email is unique
                    $check_email_query = "SELECT * FROM users WHERE email = ?";
                    $stmt = $conn->prepare($check_email_query);
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        echo "<p>Email already registered.</p>";
                    } else {
                        // Hash the password
                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                        // Insert the user into the database
                        $insert_query = "INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)";
                        $stmt = $conn->prepare($insert_query);
                        $stmt->bind_param("ssss", $name, $email, $hashed_password, $user_type);

                        if ($stmt->execute()) {
                            echo "<p>Registration successful. Redirecting to the login page...</p>";
                            header("refresh:2;url=login.php");
                        } else {
                            echo "<p>Error: " . $insert_query . "<br>" . $conn->error . "</p>";
                        }
                    }

                    $stmt->close();
                }

                $conn->close();
            }
            ?>
            <form id="register-form" action="" method="POST">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>
                <div class="form-group">
                    <label for="user-type">I am a:</label>
                    <select id="user-type" name="user-type" required>
                        <option value="candidate">Job Seeker</option>
                        <option value="employer">Employer</option>
                    </select>
                </div>
                <button type="submit" class="btn">Register</button>
            </form>
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </main>
</body>
</html>