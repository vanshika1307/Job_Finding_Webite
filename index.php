<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Consultancy - Find Your Dream Job</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f8f5;
            color: #333;
            margin: 0;
            padding: 0;
            animation: fadeIn 1s ease-in;
        }

        .home-page {
            padding: 2rem;
        }

        .hero {
            background-color: #007b8f;
            color: #ffffff;
            text-align: center;
            padding: 3rem 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .search-form {
            display: flex;
            justify-content: center;
            gap: 1rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .search-form input {
            padding: 0.75rem;
            border-radius: 5px;
            border: 1px solid #ffffff;
            flex: 1;
            outline: none;
            transition: border 0.3s;
        }

        .search-form input:focus {
            border-color: #a9d0d3;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
        }

        .search-form button {
            background-color: #ffffff;
            color: #007b8f;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s, transform 0.3s;
        }

        .search-form button:hover {
            background-color: #f0f7f8;
            transform: scale(1.05);
        }

        .featured-jobs {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .featured-jobs h2 {
            color: #007b8f;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .job-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            max-width: 900px;
            margin: 0 auto;
        }

        .job-card {
            background: #fff;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .job-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .job-title {
            color: #007b8f;
            margin: 0;
            font-size: 1.2rem;
        }

        .company-name {
            color: #666;
            font-weight: 500;
        }

        .job-meta {
            display: flex;
            gap: 2rem;
            margin: 1rem 0;
            color: #666;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .tag {
            background: #f8fdfd;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.9rem;
            color: #007b8f;
            border: 1px solid #d0e8ea;
        }

        .view-all {
            display: block;
            text-align: center;
            margin: 2rem auto 0;
            color: #007b8f;
            border: 1px solid #007b8f;
            padding: 0.75rem 2rem;
            border-radius: 5px;
            text-decoration: none;
            max-width: 200px;
            transition: background-color 0.3s, color 0.3s;
        }

        .view-all:hover {
            background-color: #007b8f;
            color: #ffffff;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main class="home-page">
        <section class="hero">
            <h1>Find Your Dream Job</h1>
            <p>Discover opportunities that match your skills and aspirations</p>
            <form class="search-form">
                <input type="text" placeholder="Job title, keywords, or company" required>
                <input type="text" placeholder="City, state, or remote" required>
                <button type="submit">Search Jobs</button>
            </form>
        </section>

        <section class="featured-jobs">
            <h2>Featured Jobs</h2>
            <div class="job-list">
                <!-- Frontend Developer Position -->
                <a href="jobs/details.php?id=1" class="job-card">
                    <div class="job-header">
                        <div>
                            <h2 class="job-title">Senior Frontend Developer</h2>
                            <span class="company-name">TechCorp Solutions</span>
                        </div>
                        <img src="/images/techcorp-logo.png" alt="TechCorp Logo" width="50">
                    </div>
                    <div class="job-meta">
                        <span class="meta-item">📍 Mumbai</span>
                        <span class="meta-item">💼 5-8 years</span>
                        <span class="meta-item">💰 ₹15-25 LPA</span>
                    </div>
                    <div class="tags">
                        <span class="tag">React</span>
                        <span class="tag">TypeScript</span>
                        <span class="tag">Node.js</span>
                    </div>
                </a>

                <!-- Product Manager Position -->
                <a href="jobs/details.php?id=2" class="job-card">
                    <div class="job-header">
                        <div>
                            <h2 class="job-title">Product Manager</h2>
                            <span class="company-name">Innovation Labs</span>
                        </div>
                        <img src="/images/innovation-logo.png" alt="Innovation Labs Logo" width="50">
                    </div>
                    <div class="job-meta">
                        <span class="meta-item">📍 Bangalore</span>
                        <span class="meta-item">💼 3-5 years</span>
                        <span class="meta-item">💰 ₹18-28 LPA</span>
                    </div>
                    <div class="tags">
                        <span class="tag">Product Strategy</span>
                        <span class="tag">Agile</span>
                        <span class="tag">UX</span>
                    </div>
                </a>

                <!-- Data Scientist Position -->
                <a href="jobs/details.php?id=3" class="job-card">
                    <div class="job-header">
                        <div>
                            <h2 class="job-title">Senior Data Scientist</h2>
                            <span class="company-name">DataTech Analytics</span>
                        </div>
                        <img src="/images/datatech-logo.png" alt="DataTech Logo" width="50">
                    </div>
                    <div class="job-meta">
                        <span class="meta-item">📍 Hyderabad</span>
                        <span class="meta-item">💼 4-6 years</span>
                        <span class="meta-item">💰 ₹20-35 LPA</span>
                    </div>
                    <div class="tags">
                        <span class="tag">Python</span>
                        <span class="tag">Machine Learning</span>
                        <span class="tag">SQL</span>
                    </div>
                </a>
            </div>
            <a href="jobs/list.php" class="view-all">View All Jobs</a>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>