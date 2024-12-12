<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Job - People Consultancy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f8f5;
            margin: 0;
            padding: 0;
            color: #333;
            animation: fadeIn 1s ease-in;
        }

        main.job-application {
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 10px;
            max-width: 800px;
            margin: 2rem auto;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #007b8f;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
        }

        input, textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #007b8f;
            border-radius: 5px;
            margin-bottom: 0.5rem;
            outline: none;
            transition: border 0.3s;
        }

        input:focus, textarea:focus {
            border-color: #005f6b;
            box-shadow: 0 0 5px rgba(0, 123, 143, 0.5);
        }

        .btn-primary {
            background-color: #007b8f;
            color: #fff;
            padding: 0.75rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            width: 100%;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #005f6b;
        }

        .job-summary {
            background-color: #f8fdfd;
            padding: 1rem;
            border: 1px solid #d0e8ea;
            border-radius: 5px;
            margin-bottom: 1.5rem;
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
    <?php include '../includes/header.php'; ?>

    <main class="job-application">
        <h1>Apply for [Job Title]</h1>
        <div class="job-summary">
            <h2>[Job Title]</h2>
            <p>[Company Name] - [Job Location]</p>
        </div>
        <form id="job-application-form" action="../includes/submit_application.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="job_id" value="[JobID]">
            <div class="form-group">
                <label for="full-name">Full Name</label>
                <input type="text" id="full-name" name="full-name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="resume">Resume</label>
                <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
            </div>
            <div class="form-group">
                <label for="cover-letter">Cover Letter</label>
                <textarea id="cover-letter" name="cover-letter" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Application</button>
        </form>
    </main>

    <?php include '../includes/footer.php'; ?>

    <script src="../assets/js/main.js"></script>
</body>
</html>
