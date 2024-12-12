<?php
// This is your landing-page.php file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
/* Body Styling */
body {
        font-family: Arial, sans-serif;
        background-color: #e0f7fa; /* Turquoise blue */
        color: #333;
    }

    /* Navbar */
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 40px; /* Increased padding */
        background-color: #00838f;
        color: white;
        height: 80px; /* Increased height */
    }

    .navbar .logo img {
        height: 50px; /* Increased logo size */
    }

    .navbar .nav-links {
        list-style: none;
        display: flex;
        gap: 30px; /* Increased spacing between links */
        font-size: 18px; /* Increased font size */
    }

    .navbar .nav-links a {
        text-decoration: none;
        color: white;
    }

    /* Hero Section */
    .hero {
        text-align: center;
        padding: 60px 0; /* Increased padding */
        background: #4dd0e1; /* Light turquoise gradient */
        color: white;
    }

    .hero h1 {
        font-size: 36px; /* Increased heading size */
        margin-bottom: 20px; /* Added margin */
    }

    .hero p {
        font-size: 20px; /* Increased paragraph size */
    }

    /* Full-width Carousel */
    .carousel {
        position: relative;
        width: 100%;
        height: 600px; /* Increased height */
        overflow: hidden;
    }

    .carousel-container {
        display: flex;
        width: 600%; /* 6 images */
        height: 100%;
        transition: transform 0.5s ease-in-out;
    }

    .carousel-container img {
        width: 16.666%; /* 100% / 6 images */
        height: 100%;
        object-fit: cover;
    }

    /* Carousel Controls */
    .carousel-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        font-size: 36px; /* Increased button size */
        padding: 15px 20px; /* Increased padding */
        cursor: pointer;
        z-index: 10;
    }

    .carousel-btn.left {
        left: 20px; /* Adjusted left position */
    }

    .carousel-btn.right {
        right: 20px; /* Adjusted right position */
    }

    /* Carousel Indicators */
    .carousel-indicators {
        position: absolute;
        bottom: 20px; /* Increased bottom spacing */
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 10px; /* Increased spacing between indicators */
    }

    .carousel-indicators button {
        width: 15px; /* Increased indicator size */
        height: 15px;
        background-color: rgba(0, 0, 0, 0.5);
        border: none;
        border-radius: 50%;
        cursor: pointer;
    }

    .carousel-indicators button.active {
        background-color: white;
    }
</style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="http://localhost/people-consultancy/logo.png" alt="Logo">
        </div>
        <ul class="nav-links">
        <li><a href="dashboard\user.php">Home</a></li>
            <li><a href="#">Internships</a></li>
            <li><a href="#">Jobs</a></li>
           <li><a href="#">User Profile</a></li>
            <li><a href="#">Chat</a></li>
            <li><a href="http://localhost/people-consultancy/login.php">Login</a></li>
         
        </ul>
    </nav>


<!-- Full-Width Carousel -->
<section class="carousel">
    <div class="carousel-container" id="carouselContainer">
        <img src="http://localhost/people-consultancy/images/MB1.jpg" alt="Banner 1">
        <img src="http://localhost/people-consultancy/images/MB2.jpg" alt="Banner 2">
        <img src="http://localhost/people-consultancy/images/MB3.jpg" alt="Banner 3">
        <img src="http://localhost/people-consultancy/images/MB4.jpg" alt="Banner 4">
        <img src="http://localhost/people-consultancy/images/MB5.jpg" alt="Banner 5">
        <img src="http://localhost/people-consultancy/images/MB6.jpg" alt="Banner 6">
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-btn left" id="prevBtn">&#10094;</button>
    <button class="carousel-btn right" id="nextBtn">&#10095;</button>

    <!-- Carousel Indicators -->
    <div class="carousel-indicators" id="carouselIndicators">
        <button data-index="0" class="active"></button>
        <button data-index="1"></button>
        <button data-index="2"></button>
        <button data-index="3"></button>
        <button data-index="4"></button>
        <button data-index="5"></button>
    </div>
</section>

<script>
    // JavaScript for Carousel
    const carouselContainer = document.getElementById('carouselContainer');
    const images = carouselContainer.children;
    const totalImages = images.length;
    let index = 0;

    // Carousel Controls
    document.getElementById('prevBtn').addEventListener('click', () => {
        index = (index > 0) ? index - 1 : totalImages - 1;
        updateCarousel();
    });

    document.getElementById('nextBtn').addEventListener('click', () => {
        index = (index < totalImages - 1) ? index + 1 : 0;
        updateCarousel();
    });

    // Carousel Indicators
    const indicators = document.getElementById('carouselIndicators').children;
    Array.from(indicators).forEach(indicator => {
        indicator.addEventListener('click', () => {
            index = parseInt(indicator.getAttribute('data-index'));
            updateCarousel();
        });
    });

    function updateCarousel() {
        const width = carouselContainer.offsetWidth / totalImages;
        carouselContainer.style.transform = `translateX(-${index * width}px)`;
        Array.from(indicators).forEach((indicator, i) => {
            indicator.classList.toggle('active', i === index);
        });
    }

    // Automatically cycle through banners every 5 seconds
    setInterval(() => {
        index = (index < totalImages - 1) ? index + 1 : 0;
        updateCarousel();
    }, 5000);

    // Show controls only if JavaScript is enabled
    document.querySelectorAll('.carousel-btn').forEach(btn => btn.style.display = 'block');
</script>
</body>
</html>