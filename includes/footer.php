<?php
// Calculate base URL if not already defined
if (!isset($base_url)) {
    $base_url = '';
    $current_dir = dirname($_SERVER['PHP_SELF']);
    $project_dir = '/people-consultancy'; // Update this to match your project folder name

    if ($current_dir !== $project_dir) {
        $base_url = str_repeat('../', substr_count(trim($current_dir, '/'), '/'));
    }
}
?>
<footer>
    <style>
        footer {
            background-color: #007b8f;
            color: #ffffff;
            padding: 2rem;
            margin-top: 2rem;
            border-top: 4px solid #005f6b;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .footer-section {
            flex: 1;
            min-width: 200px;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
        }

        .footer-section p, .footer-section ul, .footer-section a {
            color: #d9f5f6;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section li {
            margin-bottom: 0.5rem;
        }

        .footer-section a {
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: #ffffff;
        }

        .social-icons {
            display: flex;
            gap: 0.5rem;
        }

        .social-icon {
            color: #ffffff;
            padding: 0.5rem;
            border: 1px solid #d9f5f6;
            border-radius: 50%;
            text-align: center;
            transition: background-color 0.3s, color 0.3s;
        }

        .social-icon:hover {
            background-color: #ffffff;
            color: #007b8f;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 1rem;
            font-size: 0.9rem;
        }
    </style>
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>People Consultancy is a leading job portal connecting talented individuals with exciting career opportunities.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="<?php echo $base_url; ?>index.php">Home</a></li>
                    <li><a href="<?php echo $base_url; ?>jobs/list.php">Jobs</a></li>
                    <li><a href="<?php echo $base_url; ?>contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Connect With Us</h3>
                <div class="social-icons">
                    <a href="#" class="social-icon">Facebook</a>
                    <a href="#" class="social-icon">Twitter</a>
                    <a href="#" class="social-icon">LinkedIn</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> People Consultancy. All rights reserved.</p>
        </div>
    </div>
</footer>