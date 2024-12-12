<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details - People Consultancy</title>
    <style>
        /* Keeping your existing theme colors and animations */
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f8f5;
            margin: 0;
            padding: 0;
            color: #333;
            animation: fadeIn 1s ease-in;
        }

        .job-details {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .job-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
        }

        .job-title {
            color: #007b8f;
            margin: 0 0 0.5rem 0;
        }

        .company-info {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .job-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            margin: 1rem 0;
            padding: 1rem 0;
            border-top: 1px solid #d0e8ea;
            border-bottom: 1px solid #d0e8ea;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .skills-section {
            margin: 2rem 0;
        }

        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .skill-tag {
            background: #f8fdfd;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            color: #007b8f;
            border: 1px solid #d0e8ea;
        }

        .about-section, .responsibilities-section {
            margin: 2rem 0;
        }

        .section-title {
            color: #007b8f;
            margin-bottom: 1rem;
        }

        .responsibilities-list {
            padding-left: 1.5rem;
        }

        .responsibilities-list li {
            margin-bottom: 0.5rem;
        }

        .apply-button {
            background: #007b8f;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .apply-button:hover {
            background: #005f6b;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <main class="job-details">
        <!-- Example Job Details -->
        <div class="job-header">
            <div>
                <h1 class="job-title">Senior Frontend Developer</h1>
                <div class="company-info">
                    <img src="/company-logo.png" alt="TechCorp Solutions Logo" width="50">
                    <h2>TechCorp Solutions</h2>
                </div>
            </div>
            <button class="apply-button">Apply Now</button>
        </div>

        <div class="job-meta">
            <span class="meta-item">📍 Mumbai</span>
            <span class="meta-item">💼 5-8 years</span>
            <span class="meta-item">💰 ₹15-25 LPA</span>
            <span class="meta-item">🕒 Full Time</span>
            <span class="meta-item">📅 Posted 2 days ago</span>
        </div>

        <div class="about-section">
            <h3 class="section-title">About the Job</h3>
            <p>We are looking for an experienced Frontend Developer to join our dynamic team. You will be responsible for building and maintaining high-performance web applications using modern technologies and best practices.</p>
        </div>

        <div class="responsibilities-section">
            <h3 class="section-title">Key Responsibilities</h3>
            <ul class="responsibilities-list">
                <li>Develop and maintain responsive web applications using React and TypeScript</li>
                <li>Collaborate with backend developers to integrate REST APIs</li>
                <li>Optimize applications for maximum speed and scalability</li>
                <li>Implement and maintain quality assurance practices</li>
                <li>Mentor junior developers and contribute to technical discussions</li>
            </ul>
        </div>

        <div class="skills-section">
            <h3 class="section-title">Skills Required</h3>
            <div class="skills-list">
                <span class="skill-tag">React</span>
                <span class="skill-tag">TypeScript</span>
                <span class="skill-tag">Node.js</span>
                <span class="skill-tag">REST APIs</span>
                <span class="skill-tag">Git</span>
                <span class="skill-tag">Webpack</span>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>
</html>