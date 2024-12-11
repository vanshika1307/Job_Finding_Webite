<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - People Consultancy</title>
    <style>
        body {
            background-color: #e8f8f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            animation: fadeIn 1s ease-in;
        }

        .auth-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            transition: transform 0.3s ease;
        }

        .auth-container:hover {
            transform: scale(1.02);
        }

        h1 {
            color: #007b8f;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
        }

        input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #007b8f;
            border-radius: 5px;
            outline: none;
            transition: all 0.3s;
        }

        input:focus {
            border-color: #005f6b;
            box-shadow: 0 0 5px rgba(0, 123, 143, 0.5);
        }

        .btn-primary {
            background-color: #007b8f;
            color: #fff;
            padding: 0.75rem;
            border: none;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #005f6b;
        }

        p {
            text-align: center;
            margin-top: 1rem;
            color: #555;
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
            <h1>Login</h1>
            <form id="login-form" action="includes/login_process.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="form-group">
                    <label for="role">Login as:</label>
                    <select id="role" name="role" required>
                        <option value="candidate">Candidate</option>
                        <option value="employer">Employer</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <p>Don't have an account? <a href="register.php">Register here</a></p>
            <p><a href="forgot_password.php">Forgot your password?</a></p>
        </div>
    </main>
</body>
</html>
