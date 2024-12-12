<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings - People Consultancy</title>
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

        .job-listings {
            padding: 2rem;
            max-width: 1200px;
            margin: 2rem auto;
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 2rem;
        }

        .filters-section {
            background: #fff;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .filters-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .filter-group {
            margin-bottom: 1.5rem;
        }

        .filter-group h3 {
            color: #007b8f;
            margin-bottom: 0.5rem;
        }

        .filter-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d0e8ea;
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .salary-slider {
            width: 100%;
            margin: 1rem 0;
        }

        .jobs-section {
            background: transparent;
        }

        .job-card {
            background: #fff;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
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

        .clear-all {
            color: #007b8f;
            text-decoration: none;
            font-size: 0.9rem;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <main class="job-listings">
        <aside class="filters-section">
            <div class="filters-header">
                <h2>Filters</h2>
                <a href="#" class="clear-all">Clear all</a>
            </div>

            <div class="filter-group">
                <h3>Profile</h3>
                <input type="text" class="filter-input" placeholder="e.g. Marketing">
            </div>

            <div class="filter-group">
                <h3>Location</h3>
                <input type="text" class="filter-input" placeholder="e.g. Delhi">
            </div>

            <div class="filter-group">
                <h3>Job Type</h3>
                <div class="checkbox-group">
                    <input type="checkbox" id="work-from-home">
                    <label for="work-from-home">Work from home</label>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="part-time">
                    <label for="part-time">Part-time</label>
                </div>
            </div>

            <div class="filter-group">
                <h3>Annual salary (in lakhs)</h3>
                <input type="range" class="salary-slider" min="0" max="50" step="1">
                <div class="salary-range">₹0L - ₹50L</div>
            </div>

            <div class="filter-group">
                <h3>Experience</h3>
                <select class="filter-input">
                    <option>Select years of experience</option>
                    <option>0-1 years</option>
                    <option>1-3 years</option>
                    <option>3-5 years</option>
                    <option>5+ years</option>
                </select>
            </div>
        </aside>

        <section class="jobs-section">
            <!-- Example Job Cards -->
            <div class="job-card">
                <div class="job-header">
                    <div>
                        <h2 class="job-title">Senior Frontend Developer</h2>
                        <span class="company-name">TechCorp Solutions</span>
                    </div>
                    <img src="/company-logo.png" alt="Company Logo" width="50">
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
            </div>

            <div class="job-card">
                <div class="job-header">
                    <div>
                        <h2 class="job-title">Product Manager</h2>
                        <span class="company-name">Innovation Labs</span>
                    </div>
                    <img src="/company-logo.png" alt="Company Logo" width="50">
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
            </div>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>
</html>