<?php
session_start();
if ($_SESSION['role'] != 'employer') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Form</title>
</head>
<body>
    <h1>Welcome, Employer!</h1>
    <form action="submit_employer_form.php" method="POST">
        <!-- Add your form fields here -->
        <button type="submit">Submit</button>
    </form>
</body>
</html>