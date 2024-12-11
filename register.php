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
            animation: fadeIn 1s ease-in;
        }

        .auth-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 2rem;
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

        input, select {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #007b8f;
            border-radius: 5px;
            outline: none;
            transition: all 0.3s;
        }

        input:focus, select:focus {
            border-color: #005f6b;
            box-shadow: 0 0 5px rgba(0, 123, 143, 0.5);
        }

        .btn-primary {
            display: block;
            width: 100%;
            background-color: #007b8f;
            color: #fff;
            padding: 0.75rem;
            border: none;
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
            <h1>Register</h1>
            <form id="register-form" action="includes/register_process.php" method="POST">
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
                        <option value="job-seeker">Job Seeker</option>
                        <option value="employer">Employer</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </main>
</body>
</html>
