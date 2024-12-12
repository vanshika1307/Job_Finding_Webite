<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Dashboard - People Consultancy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f8f5;
            margin: 0;
            padding: 0;
            color: #333;
            animation: fadeIn 1s ease-in;
        }

        main.dashboard {
            padding: 2rem;
            max-width: 1200px;
            margin: 2rem auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #007b8f;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        section {
            background-color: #f8fdfd;
            padding: 1.5rem;
            border-radius: 5px;
            border: 1px solid #d0e8ea;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .btn {
            display: inline-block;
            margin-bottom: 1rem;
            padding: 0.75rem 1.5rem;
            background-color: #007b8f;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #005f6b;
        }

        table.data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        table.data-table th, table.data-table td {
            border: 1px solid #d0e8ea;
            padding: 0.75rem;
            text-align: left;
        }

        table.data-table th {
            background-color: #007b8f;
            color: #ffffff;
        }

        table.data-table tr:nth-child(even) {
            background-color: #f1f9f9;
        }

        table.data-table tr:hover {
            background-color: #e1f5f5;
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

    <main class="dashboard company-dashboard">
        <h1>Welcome, [Company Name]!</h1>
        <div class="dashboard-grid">
            <section class="manage-jobs">
                <h2>Your Job Postings</h2>
                <a href="post-job.php" class="btn">Post New Job</a>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Posted Date</th>
                            <th>Applications</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Job postings will be dynamically inserted here -->
                    </tbody>
                </table>
            </section>
            <section class="company-profile">
                <h2>Company Profile</h2>
                <form id="company-profile-form" action="../includes/update_company_profile.php" method="POST">
                    <div class="form-group">
                        <label for="company-name">Company Name</label>
                        <input type="text" id="company-name" name="company-name" value="[Company Name]" required>
                    </div>
                    <div class="form-group">
                        <label for="company-description">Company Description</label>
                        <textarea id="company-description" name="company-description" required>[Company Description]</textarea>
                    </div>
                    <div class="form-group">
                        <label for="company-logo">Company Logo</label>
                        <input type="file" id="company-logo" name="company-logo" accept="image/*">
                    </div>
                    <button type="submit" class="btn">Update Profile</button>
                </form>
            </section>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>

    <script src="../assets/js/main.js"></script>
</body>
</html>
