<?php
// Start the session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Calculate base URL if not already defined
$base_url = '';
$current_dir = dirname($_SERVER['PHP_SELF']);
$project_dir = '/people-consultancy'; // Update this to match your project folder name

if ($current_dir !== $project_dir) {
    $base_url = str_repeat('../', substr_count(trim($current_dir, '/'), '/'));
}
?>

<header>
    <style>
        header {
            background-color: #007b8f;
            padding: 1rem 2rem;
            color: #ffffff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-size: 1.5rem;
            color: #ffffff;
            text-decoration: none;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 1rem;
            margin: 0;
            padding: 0;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover,
        nav a.active {
            background-color: #005f6b;
        }
    </style>
    <div class="container">
        <a href="<?php echo $base_url; ?>index.php" class="logo">People Consultancy</a>
        <nav>
            <ul>
                <li><a href="<?php echo $base_url; ?>index.php" <?php if($current_page == 'index.php') echo 'class="active"'; ?>>Home</a></li>
                <li><a href="<?php echo $base_url; ?>jobs/list.php" <?php if($current_page == 'list.php') echo 'class="active"'; ?>>Jobs</a></li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <?php if ($_SESSION['user_type'] == 'admin'): ?>
                        <li><a href="<?php echo $base_url; ?>dashboard/admin.php">Dashboard</a></li>
                    <?php elseif ($_SESSION['user_type'] == 'company'): ?>
                        <li><a href="<?php echo $base_url; ?>dashboard/company.php">Dashboard</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo $base_url; ?>dashboard/user.php">Dashboard</a></li>
                    <?php endif; ?>
                    <li><a href="<?php echo $base_url; ?>chat/chat.php">Messages</a></li>
                    <li><a href="<?php echo $base_url; ?>logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="<?php echo $base_url; ?>login.php" <?php if($current_page == 'login.php') echo 'class="active"'; ?>>Login</a></li>
                    <li><a href="<?php echo $base_url; ?>register.php" <?php if($current_page == 'register.php') echo 'class="active"'; ?>>Register</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>

