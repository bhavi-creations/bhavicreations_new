<?php
// 1. Database Connection
include './db.connection/db_connection.php';

// Identifier capture
$blog_input = isset($_GET['id']) ? $_GET['id'] : '';

if (empty($blog_input)) {
    echo "<h1 style='color:gold; text-align:center; margin-top:50px;'>Invalid Blog Request</h1>";
    exit;
}

// 2. Fetch Blog Data
$stmt = $conn->prepare("
    SELECT 
        id, title, slug, main_content, full_content, 
        title_image, main_image, video, 
        telugu_title, telugu_main_content, telugu_full_content,
        section1_image, service, hashtags, keypoints
    FROM blogs 
    WHERE id = ? OR slug = ?
");

$stmt->bind_param("ss", $blog_input, $blog_input);
$stmt->execute();
$result = $stmt->get_result();
$blog = $result->fetch_assoc();

if (!$blog) {
    echo "<h1 style='color:gold; text-align:center; margin-top:50px;'>Blog Not Found!</h1>";
    exit;
}

// Data mapping with Fallback Logic
$blog_id = $blog['id'];
$title = $blog['title'];
$main_content = $blog['main_content'];
$full_content = $blog['full_content'];
$main_image = $blog['main_image'];
$video = $blog['video'];
$telugu_title = !empty($blog['telugu_title']) ? $blog['telugu_title'] : $title;
$telugu_main_content = !empty($blog['telugu_main_content']) ? $blog['telugu_main_content'] : $main_content;
$telugu_full_content = !empty($blog['telugu_full_content']) ? $blog['telugu_full_content'] : $full_content;
$service = $blog['service'];

$stmt->close();

// 4. Fetch all services for search autocomplete
$services_stmt = $conn->prepare("SELECT DISTINCT service FROM blogs WHERE service IS NOT NULL AND service != '' ORDER BY service");
$services_stmt->execute();
$services_result = $services_stmt->get_result();
$all_services = [];
while ($row = $services_result->fetch_assoc()) {
    $all_services[] = $row['service'];
}
$services_stmt->close();

// 5. Fetch related blogs (same service)
$related_stmt = $conn->prepare("
    SELECT id, title, slug, main_image, service, created_at 
    FROM blogs 
    WHERE service = ? AND id != ? 
    ORDER BY created_at DESC 
    LIMIT 5
");
$related_stmt->bind_param("si", $service, $blog_id);
$related_stmt->execute();
$related_result = $related_stmt->get_result();

// 6. Fetch all blogs for circular slider
$latest_sql = "SELECT id, title, main_image, slug FROM blogs ORDER BY created_at DESC";
$latest_res = $conn->query($latest_sql);
$all_blogs = [];
while ($row = $latest_res->fetch_assoc()) {
    $all_blogs[] = $row;
}
$total_blogs = count($all_blogs);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= strip_tags($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        /* Global Styles */
        body {
            background-color: #0a0a0a;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }

        .fullblogs_section {
            background-color: #0a0a0a;
            padding-top: 140px;
            padding-bottom: 50px;
            min-height: 100vh;
        }

        /* Content Wrapper */
        .content-wrapper {
            color: #e0e0e0 !important;
        }

        .content-wrapper p,
        .content-wrapper span,
        .content-wrapper div,
        .content-wrapper li,
        .content-wrapper h1,
        .content-wrapper h2,
        .content-wrapper h3,
        .content-wrapper h4,
        .content-wrapper h5,
        .content-wrapper h6 {
            color: inherit;
        }

        .content-wrapper [style*="color: #000000"],
        .content-wrapper [style*="color: rgb(0, 0, 0)"],
        .content-wrapper [style*="color: black"] {
            color: #000000 !important;
        }

        .blog-title {
            color: #ffd700;
            font-weight: 800;
            font-size: 2.5rem;
            text-shadow: 0 2px 20px rgba(255, 215, 0, 0.1);
        }

        .badge_service_name {
            background: linear-gradient(135deg, #ffd700, #f7971e);
            color: #0a0a0a;
            font-weight: 700;
            border-radius: 25px;
            padding: 8px 25px;
            font-size: 0.9rem;
        }

        .lang-btn {
            color: #ffd700;
            border: 2px solid #ffd700;
            padding: 10px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            background: transparent;
        }

        .lang-btn:hover {
            background: #ffd700;
            color: #0a0a0a;
        }

        .lang-btn.active {
            background: #ffd700 !important;
            color: #0a0a0a !important;
            border: 2px solid #ffd700 !important;
        }

        /* ========== STICKY SIDEBAR ========== */
        .sidebar-sticky {
            position: sticky;
            top: 120px;
            align-self: flex-start;
        }

        /* Sidebar Styles */
        .sidebar-card {
            background: #1a1a1a;
            border-radius: 12px;
            padding: 22px;
            margin-bottom: 25px;
            border: 1px solid #2a2a2a;
            transition: all 0.3s ease;
        }

        .sidebar-card:hover {
            border-color: #ffd700;
        }

        .sidebar-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #ffd700;
            border-bottom: 2px solid #2a2a2a;
            padding-bottom: 12px;
            margin-bottom: 18px;
        }

        .sidebar-title i {
            margin-right: 10px;
            color: #ffd700;
        }

        /* Search Box */
        .search-wrapper {
            position: relative;
        }

        .search-wrapper input {
            width: 100%;
            padding: 12px 45px 12px 18px;
            border: 2px solid #2a2a2a;
            border-radius: 30px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background: #0a0a0a;
            color: #ffffff;
        }

        .search-wrapper input::placeholder {
            color: #666;
        }

        .search-wrapper input:focus {
            outline: none;
            border-color: #ffd700;
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.1);
            background: #111;
        }

        .search-wrapper .search-icon {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .search-wrapper .search-icon:hover {
            color: #ffd700;
        }

        /* Search Suggestions */
        .suggestions-box {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: #1a1a1a;
            border: 2px solid #ffd700;
            border-top: none;
            border-radius: 0 0 12px 12px;
            max-height: 250px;
            overflow-y: auto;
            display: none;
            z-index: 1000;
            box-shadow: 0 8px 25px rgba(0,0,0,0.5);
        }

        .suggestions-box.active {
            display: block;
        }

        .suggestion-item {
            padding: 10px 18px;
            cursor: pointer;
            transition: all 0.2s ease;
            border-bottom: 1px solid #2a2a2a;
            color: #e0e0e0;
            text-decoration: none;
            display: block;
        }

        .suggestion-item:hover {
            background: #2a2a2a;
            color: #ffd700;
        }

        .suggestion-item:last-child {
            border-bottom: none;
        }

        .suggestion-item .service-tag {
            background: #ffd700;
            padding: 2px 10px;
            border-radius: 12px;
            font-size: 0.65rem;
            font-weight: 600;
            margin-left: 8px;
            color: #0a0a0a;
        }

        /* Related Blogs */
        .related-blog-item {
            display: flex;
            gap: 12px;
            padding: 10px 0;
            border-bottom: 1px solid #2a2a2a;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
        }

        .related-blog-item:last-child {
            border-bottom: none;
        }

        .related-blog-item:hover {
            transform: translateX(5px);
        }

        .related-blog-item img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 8px;
            flex-shrink: 0;
        }

        .related-blog-item .blog-info {
            flex: 1;
        }

        .related-blog-item .blog-info h6 {
            font-size: 0.85rem;
            font-weight: 600;
            margin: 0 0 4px 0;
            color: #ffffff;
            line-height: 1.3;
        }

        .related-blog-item .blog-info .service-badge {
            font-size: 0.65rem;
            background: #2a2a2a;
            padding: 2px 10px;
            border-radius: 12px;
            color: #ffd700;
        }

        /* Contact Info */
        .contact-info p {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #b0b0b0;
        }

        .contact-info p i {
            width: 30px;
            color: #ffd700;
            font-size: 1.1rem;
        }

        /* Social Links */
        .social-links {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #2a2a2a;
            color: #ffffff;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 1.2rem;
        }

        .social-links a:hover {
            transform: translateY(-3px);
        }

        .social-links a.facebook:hover { background: #1877f2; color: #fff; }
        .social-links a.twitter:hover { background: #000000; color: #fff; }
        .social-links a.instagram:hover { background: #e4405f; color: #fff; }
        .social-links a.youtube:hover { background: #ff0000; color: #fff; }
        .social-links a.linkedin:hover { background: #0a66c2; color: #fff; }

        /* Email Subscription */
        .email-input-group {
            display: flex;
            gap: 10px;
        }

        .email-input-group input {
            flex: 1;
            padding: 10px 15px;
            border: 2px solid #2a2a2a;
            border-radius: 25px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            background: #0a0a0a;
            color: #ffffff;
        }

        .email-input-group input::placeholder {
            color: #666;
        }

        .email-input-group input:focus {
            outline: none;
            border-color: #ffd700;
        }

        .email-input-group button {
            padding: 10px 20px;
            background: linear-gradient(135deg, #ffd700, #f7971e);
            border: none;
            border-radius: 25px;
            color: #0a0a0a;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .email-input-group button:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
        }

        /* ========== CIRCULAR SLIDER ========== */
        .fullblogs_section_1 {
            background: #0a0a0a;
            padding: 60px 0 80px 0;
            border-top: 1px solid #1a1a1a;
        }

        .blogs_color {
            color: #ffd700 !important;
            font-weight: 800;
            font-size: 2.2rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            position: relative;
        }

        .blogs_color::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(90deg, #ffd700, #f7971e);
            border-radius: 2px;
        }

        /* Circular Slider Container */
        .circular-slider-container {
            position: relative;
            overflow: hidden;
            padding: 20px 0;
        }

        .circular-slider-track {
            display: flex;
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            gap: 25px;
        }

        .circular-slide {
            flex: 0 0 calc(33.333% - 17px);
            min-width: calc(33.333% - 17px);
        }

        .circular-card {
            background: #1a1a1a;
            border: 1px solid #2a2a2a;
            border-radius: 12px;
            transition: all 0.4s ease;
            padding: 15px;
            cursor: pointer;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .circular-card:hover {
            border-color: #ffd700;
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(255, 215, 0, 0.08);
        }

        .circular-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .circular-card .blog-title-text {
            color: #ffffff;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 600;
            margin-top: 12px;
            transition: color 0.3s ease;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-align: center;
        }

        .circular-card .blog-title-text:hover {
            color: #ffd700;
        }

        /* Slider Navigation */
        .slider-nav {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }

        .slider-nav button {
            background: transparent;
            border: 2px solid #ffd700;
            color: #ffd700;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slider-nav button:hover {
            background: #ffd700;
            color: #0a0a0a;
            transform: scale(1.1);
        }

        .slider-nav button:disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }

        .slider-nav button:disabled:hover {
            background: transparent;
            color: #ffd700;
            transform: none;
        }

        /* Slide indicators */
        .slide-indicators {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 15px;
        }

        .slide-indicators .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #2a2a2a;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .slide-indicators .dot.active {
            background: #ffd700;
            width: 30px;
            border-radius: 10px;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #0a0a0a;
        }

        ::-webkit-scrollbar-thumb {
            background: #ffd700;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #f7971e;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .fullblogs_section {
                padding-top: 100px;
            }
            .blog-title {
                font-size: 2rem;
            }
            .sidebar-card {
                padding: 18px;
            }
            .sidebar-sticky {
                position: relative;
                top: 0;
            }
            .circular-slide {
                flex: 0 0 calc(50% - 12.5px);
                min-width: calc(50% - 12.5px);
            }
        }

        @media (max-width: 768px) {
            .fullblogs_section {
                padding-top: 80px;
            }
            .blog-title {
                font-size: 1.6rem;
            }
            .blogs_color {
                font-size: 1.4rem;
            }
            .email-input-group {
                flex-direction: column;
            }
            .email-input-group button {
                width: 100%;
            }
            .sidebar-card {
                padding: 15px;
            }
            .circular-slide {
                flex: 0 0 100%;
                min-width: 100%;
            }
            .circular-card img {
                height: 180px;
            }
            .slider-nav button {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            .fullblogs_section {
                padding-top: 70px;
            }
            .blog-title {
                font-size: 1.3rem;
            }
            .lang-btn {
                padding: 8px 20px;
                font-size: 0.85rem;
            }
            .blogs_color {
                font-size: 1.1rem;
            }
            .circular-card img {
                height: 150px;
            }
            .circular-card .blog-title-text {
                font-size: 0.85rem;
            }
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <main class="fullblogs_section">
        <div class="container py-4">
            <div class="row g-4">
                <!-- LEFT COLUMN: Main Blog Content -->
                <div class="col-lg-8">
                    <div class="d-flex justify-content-center mb-4">
                        <button id="english-btn" class="lang-btn active btn">English</button>
                        <button id="telugu-btn" class="lang-btn ms-3 btn">తెలుగు</button>
                    </div>

                    <?php if (!empty($service)): ?>
                        <div class="text-center mb-4">
                            <span class="badge_service_name px-4 py-2">
                                <i class="fas fa-tag me-2"></i><?= htmlspecialchars($service) ?>
                            </span>
                        </div>
                    <?php endif; ?>

                    <div class="text-center mb-5">
                        <?php if (!empty($video)): ?>
                            <video controls class="w-100 shadow" style="max-width:800px; border-radius:15px;">
                                <source src="./admin/uploads/videos/<?= $video ?>" type="video/mp4">
                            </video>
                        <?php elseif (!empty($main_image)): ?>
                            <img src="./admin/uploads/photos/<?= $main_image ?>" class="shadow" style="max-height:500px; width:auto; border-radius: 15px;">
                        <?php endif; ?>
                    </div>

                    <h1 class="blog-title text-center mb-4">
                        <span id="title-en"><?= $title ?></span>
                        <span id="title-te" style="display:none;"><?= $telugu_title ?></span>
                    </h1>

                    <div class="content-wrapper">
                        <div class="main-content fs-5 mb-4">
                            <div id="main-en"><?= $main_content ?></div>
                            <div id="main-te" style="display:none;"><?= $telugu_main_content ?></div>
                        </div>

                        <div class="full-content">
                            <div id="full-en"><?= $full_content ?></div>
                            <div id="full-te" style="display:none;"><?= $telugu_full_content ?></div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN: Sticky Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <!-- Search Box -->
                        <div class="sidebar-card">
                            <div class="sidebar-title">
                                <i class="fas fa-search"></i> Search Blogs
                            </div>
                            <div class="search-wrapper">
                                <input type="text" id="searchInput" placeholder="Search by service or category..." autocomplete="off">
                                <span class="search-icon"><i class="fas fa-arrow-right"></i></span>
                                <div class="suggestions-box" id="suggestionsBox"></div>
                            </div>
                        </div>

                        <!-- Related Blogs -->
                        <div class="sidebar-card">
                            <div class="sidebar-title">
                                <i class="fas fa-newspaper"></i> Related Blogs
                            </div>
                            <?php if ($related_result->num_rows > 0): ?>
                                <?php while ($related = $related_result->fetch_assoc()): ?>
                                    <a href="fullblog.php?id=<?= $related['slug'] ?: $related['id'] ?>" class="related-blog-item">
                                        <img src="./admin/uploads/photos/<?= $related['main_image'] ?: 'default.jpg' ?>" alt="<?= htmlspecialchars($related['title']) ?>">
                                        <div class="blog-info">
                                            <h6><?= htmlspecialchars($related['title']) ?></h6>
                                            <span class="service-badge"><?= htmlspecialchars($related['service']) ?></span>
                                        </div>
                                    </a>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <p class="text-muted mb-0">No related blogs found.</p>
                            <?php endif; ?>
                        </div>

                        <!-- Contact Info -->
                        <div class="sidebar-card">
                            <div class="sidebar-title">
                                <i class="fas fa-address-card"></i> Contact Us
                            </div>
                            <div class="contact-info">
                                <p><i class="fas fa-phone"></i> +91 96423 43434</p>
                                <p><i class="fas fa-envelope"></i> admin@bhavicreations.com</p>
                                <p><i class="fas fa-map-marker-alt"></i>Plot no 28, RTO Office Rd, behind lazza icecream shop, Ranga Rao Nagar, Kakinada, Vakalapudi, Andhra Pradesh 533003</p>
                                <p><i class="fas fa-clock"></i> Open 6Am to 9pm</p>
                            </div>
                        </div>

                        <!-- Email Subscription -->
                        <!-- <div class="sidebar-card">
                            <div class="sidebar-title">
                                <i class="fas fa-envelope-open-text"></i> Subscribe
                            </div>
                            <p class="text-muted small">Get the latest blogs directly in your inbox.</p>
                            <div class="email-input-group">
                                <input type="email" id="subscribeEmail" placeholder="Enter your email">
                                <button onclick="subscribeNewsletter()">Subscribe</button>
                            </div>
                            <div id="subscribeMessage" class="mt-2 small"></div>
                        </div> -->

                        <!-- Social Media -->
                        <div class="sidebar-card">
                            <div class="sidebar-title">
                                <i class="fas fa-share-alt"></i> Connect With Us
                            </div>
                            <div class="social-links">
                                <a href="https://www.facebook.com/BhavicreationsPvtLtd/" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://in.pinterest.com/bhavicreations/" target="_blank" class="twitter"><i class="bi bi-pinterest"></i></a>
                                <a href="https://www.instagram.com/bhavicreations_pvtl" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.youtube.com/@bhavicreationspvtltd" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
                                <a href="https://www.linkedin.com/in/bhavi-creations-pvt-ltd-926651235" target="_blank" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Circular Slider Section -->
    <div class="fullblogs_section_1">
        <div class="container">
            <h1 class="d-flex justify-content-center py-4 blogs_color">
                <i class="fas fa-star me-3"></i>LATEST BLOGS
            </h1>
            
            <?php if ($total_blogs > 0): ?>
                <div class="circular-slider-container">
                    <div class="circular-slider-track" id="sliderTrack">
                        <?php 
                        // Duplicate blogs for seamless circular effect
                        $display_blogs = array_merge($all_blogs, $all_blogs, $all_blogs);
                        foreach ($display_blogs as $index => $row): 
                            $sidebar_img = !empty($row['main_image']) ? "./admin/uploads/photos/{$row['main_image']}" : "default.png";
                            $sidebar_title = htmlspecialchars($row['title']);
                            $blog_url = "fullblog.php?id=" . (!empty($row['slug']) ? $row['slug'] : $row['id']);
                        ?>
                            <div class="circular-slide" data-index="<?= $index ?>">
                                <div class="circular-card">
                                    <a href="<?= $blog_url ?>" style="text-decoration:none;">
                                        <img src="<?= $sidebar_img ?>" alt="<?= $sidebar_title ?>">
                                        <span class="blog-title-text"><?= $sidebar_title ?></span>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="slider-nav">
                    <button id="prevSlide" aria-label="Previous">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button id="nextSlide" aria-label="Next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>

                <!-- Indicators -->
                <div class="slide-indicators" id="slideIndicators">
                    <?php 
                    $total_slides = $total_blogs;
                    for ($i = 0; $i < $total_slides; $i++): 
                    ?>
                        <span class="dot <?= $i === 0 ? 'active' : '' ?>" data-index="<?= $i ?>"></span>
                    <?php endfor; ?>
                </div>
            <?php else: ?>
                <p class="text-center text-muted">No blogs available.</p>
            <?php endif; ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ========== LANGUAGE TOGGLE ==========
            const enBtn = document.getElementById("english-btn");
            const teBtn = document.getElementById("telugu-btn");

            function switchLang(lang) {
                const isEn = (lang === 'en');
                document.getElementById("title-en").style.display = isEn ? "inline" : "none";
                document.getElementById("main-en").style.display = isEn ? "block" : "none";
                document.getElementById("full-en").style.display = isEn ? "block" : "none";

                document.getElementById("title-te").style.display = isEn ? "none" : "inline";
                document.getElementById("main-te").style.display = isEn ? "none" : "block";
                document.getElementById("full-te").style.display = isEn ? "none" : "block";

                enBtn.classList.toggle('active', isEn);
                teBtn.classList.toggle('active', !isEn);
            }

            if (enBtn && teBtn) {
                enBtn.onclick = () => switchLang('en');
                teBtn.onclick = () => switchLang('te');
            }

            // ========== SEARCH AUTOCOMPLETE ==========
            const searchInput = document.getElementById('searchInput');
            const suggestionsBox = document.getElementById('suggestionsBox');
            const allServices = <?= json_encode($all_services) ?>;

            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    const query = this.value.toLowerCase().trim();
                    
                    if (query.length === 0) {
                        suggestionsBox.classList.remove('active');
                        return;
                    }

                    const matches = allServices.filter(service => 
                        service.toLowerCase().includes(query)
                    );

                    if (matches.length > 0) {
                        suggestionsBox.innerHTML = matches.map(service => `
                            <a href="blogs.php?service=${encodeURIComponent(service)}" class="suggestion-item">
                                <i class="fas fa-tag me-2"></i> ${service}
                                <span class="service-tag">Service</span>
                            </a>
                        `).join('');
                        suggestionsBox.classList.add('active');
                    } else {
                        suggestionsBox.innerHTML = `<div class="suggestion-item text-muted">No services found</div>`;
                        suggestionsBox.classList.add('active');
                    }
                });

                document.addEventListener('click', function(e) {
                    if (!e.target.closest('.search-wrapper')) {
                        suggestionsBox.classList.remove('active');
                    }
                });
            }

            // ========== SUBSCRIBE FUNCTION ==========
            window.subscribeNewsletter = function() {
                const email = document.getElementById('subscribeEmail').value;
                const message = document.getElementById('subscribeMessage');
                
                if (!email || !email.includes('@')) {
                    message.innerHTML = '<span style="color: #dc3545;">Please enter a valid email address.</span>';
                    return;
                }

                message.innerHTML = '<span style="color: #28a745;">Thank you for subscribing! 🎉</span>';
                document.getElementById('subscribeEmail').value = '';
            }

            document.getElementById('subscribeEmail').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    window.subscribeNewsletter();
                }
            });

            // ========== CIRCULAR SLIDER ==========
            const track = document.getElementById('sliderTrack');
            const prevBtn = document.getElementById('prevSlide');
            const nextBtn = document.getElementById('nextSlide');
            const dots = document.querySelectorAll('.dot');
            const totalBlogs = <?= $total_blogs ?>;
            
            if (track && totalBlogs > 0) {
                let currentIndex = 0;
                let slidesPerView = 3;
                let isTransitioning = false;
                let autoPlayInterval;

                // Calculate slides per view based on screen width
                function getSlidesPerView() {
                    if (window.innerWidth < 768) return 1;
                    if (window.innerWidth < 992) return 2;
                    return 3;
                }

                slidesPerView = getSlidesPerView();

                // Get all slides
                const slides = track.querySelectorAll('.circular-slide');
                const totalSlides = slides.length;
                const visibleSlides = slidesPerView;
                
                // Calculate slide width
                function getSlideWidth() {
                    const containerWidth = track.parentElement.offsetWidth;
                    const gap = 25;
                    return (containerWidth - (visibleSlides - 1) * gap) / visibleSlides;
                }

                // Update track position
                function updateSlider(animate = true) {
                    if (isTransitioning) return;
                    
                    const slideWidth = getSlideWidth();
                    const gap = 25;
                    const offset = currentIndex * (slideWidth + gap);
                    
                    track.style.transition = animate ? 'transform 0.6s cubic-bezier(0.4, 0, 0.2, 1)' : 'none';
                    track.style.transform = `translateX(-${offset}px)`;
                    
                    // Update dots
                    const dotIndex = currentIndex % totalBlogs;
                    dots.forEach((dot, i) => {
                        dot.classList.toggle('active', i === dotIndex);
                    });
                }

                // Handle infinite loop
                function handleInfiniteLoop() {
                    const totalVisibleSlides = totalBlogs;
                    const maxIndex = totalVisibleSlides;
                    
                    if (currentIndex >= maxIndex) {
                        isTransitioning = true;
                        currentIndex = 0;
                        updateSlider(false);
                        setTimeout(() => {
                            isTransitioning = false;
                            updateSlider(true);
                        }, 50);
                    } else if (currentIndex < 0) {
                        isTransitioning = true;
                        currentIndex = maxIndex - 1;
                        updateSlider(false);
                        setTimeout(() => {
                            isTransitioning = false;
                            updateSlider(true);
                        }, 50);
                    } else {
                        updateSlider(true);
                    }
                }

                // Next slide
                function nextSlide() {
                    if (isTransitioning) return;
                    currentIndex++;
                    if (currentIndex >= totalBlogs) {
                        currentIndex = 0;
                    }
                    handleInfiniteLoop();
                }

                // Previous slide
                function prevSlide() {
                    if (isTransitioning) return;
                    currentIndex--;
                    if (currentIndex < 0) {
                        currentIndex = totalBlogs - 1;
                    }
                    handleInfiniteLoop();
                }

                // Auto play
                function startAutoPlay() {
                    if (autoPlayInterval) clearInterval(autoPlayInterval);
                    autoPlayInterval = setInterval(nextSlide, 3000);
                }

                function stopAutoPlay() {
                    if (autoPlayInterval) {
                        clearInterval(autoPlayInterval);
                        autoPlayInterval = null;
                    }
                }

                // Event listeners
                nextBtn.addEventListener('click', () => {
                    stopAutoPlay();
                    nextSlide();
                    startAutoPlay();
                });

                prevBtn.addEventListener('click', () => {
                    stopAutoPlay();
                    prevSlide();
                    startAutoPlay();
                });

                // Dot clicks
                dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        stopAutoPlay();
                        currentIndex = index;
                        handleInfiniteLoop();
                        startAutoPlay();
                    });
                });

                // Handle resize
                let resizeTimeout;
                window.addEventListener('resize', () => {
                    clearTimeout(resizeTimeout);
                    resizeTimeout = setTimeout(() => {
                        const newSlidesPerView = getSlidesPerView();
                        if (newSlidesPerView !== slidesPerView) {
                            slidesPerView = newSlidesPerView;
                            updateSlider(false);
                        }
                    }, 250);
                });

                // Pause on hover
                const sliderContainer = track.parentElement;
                sliderContainer.addEventListener('mouseenter', stopAutoPlay);
                sliderContainer.addEventListener('mouseleave', startAutoPlay);

                // Initialize
                updateSlider(false);
                startAutoPlay();
            }
        });
    </script>
</body>

</html>
<?php 
$conn->close(); 
?>