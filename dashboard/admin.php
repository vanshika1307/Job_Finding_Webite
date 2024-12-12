<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - People Consultancy</title>
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

    <main class="dashboard admin-dashboard">
        <h1>Admin Dashboard</h1>
        <div class="dashboard-grid">
            <section class="manage-users">
                <h2>Manage Users</h2>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Type</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- User data will be dynamically inserted here -->
                    </tbody>
                </table>
            </section>
            <section class="manage-jobs">
                <h2>Manage Jobs</h2>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Company</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Job data will be dynamically inserted here -->
                    </tbody>
                </table>
            </section>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>

    <script src="../assets/js/main.js"></script>
</body>
</html>
