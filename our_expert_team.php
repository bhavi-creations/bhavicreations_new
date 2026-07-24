<?php
include 'db.connection/db_connection.php';

// Fetch all employees from database
$query = "SELECT * FROM employees ORDER BY id DESC";
$result = $conn->query($query);

// Fetch all unique roles for filters
$role_query = "SELECT DISTINCT role FROM employees WHERE role IS NOT NULL AND role != '' ORDER BY role";
$role_result = $conn->query($role_query);
$roles = [];
if ($role_result && $role_result->num_rows > 0) {
    while ($row = $role_result->fetch_assoc()) {
        $roles[] = $row['role'];
    }
}

// ✅ FUNCTION TO GET CORRECT IMAGE PATH - UPDATED FOR admin/public/uploads/
function getImagePath($image_name) {
    // If no image name, return default
    if (empty($image_name)) {
        return 'assets/images/default-avatar.jpg';
    }
    
    // 🔥 MAIN FIX: Check image in admin/public/uploads/ folder
    $paths_to_check = [
        // If frontend is in root folder
        'admin/public/uploads/' . $image_name,
        // If frontend is inside a subfolder
        '../admin/public/uploads/' . $image_name,
        // If frontend is deeper
        '../../admin/public/uploads/' . $image_name,
        // Alternative paths
        'public/uploads/' . $image_name,
        '../public/uploads/' . $image_name,
        './admin/public/uploads/' . $image_name,
        // Direct absolute path
        $_SERVER['DOCUMENT_ROOT'] . '/admin/public/uploads/' . $image_name,
        $_SERVER['DOCUMENT_ROOT'] . '/public/uploads/' . $image_name
    ];
    
    foreach ($paths_to_check as $path) {
        $check_path = ltrim($path, '/');
        if (file_exists($check_path)) {
            return $path;
        }
    }
    
    // If no image found, return default
    return 'assets/images/default-avatar.jpg';
}
?>



<!-- ============================================ -->
<!-- OUR EXPERT TEAM SECTION -->
<!-- ============================================ -->
<section class="our_expert_team my-5">
    <div class="container">
        <!-- Section Title -->
        <div class="section-header text-center mb-5">
            <h2 class="section-title">Our Expert Team</h2>
            <p class="section-subtitle">Meet our highly skilled and experienced Expert Team</p>
            <div class="title-line"></div>
        </div>

        <!-- Category Filters - Dynamic from Database -->
        <div class="category-filters text-center mb-4">
            <button class="filter-btn active" data-category="all">All</button>
            <?php foreach ($roles as $role): ?>
                <button class="filter-btn" data-category="<?= strtolower(str_replace(' ', '_', $role)) ?>">
                    <?= htmlspecialchars($role) ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Team Grid - Dynamic from Database -->
        <div class="team-grid">
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while($employee = $result->fetch_assoc()): 
                    $category = strtolower(str_replace(' ', '_', $employee['role']));
                    $image_path = getImagePath($employee['image']);
                ?>
                    <div class="team-member" data-category="<?= $category ?>">
                        <div class="member-card">
                            <div class="member-image">
                                <img src="<?= $image_path ?>" 
                                     alt="<?= htmlspecialchars($employee['employee_name']) ?>"
                                     loading="lazy">
                                <!-- <div class="member-overlay">
                                    <div class="social-icons">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div> -->
                            </div>
                            <div class="member-info">
                                <h4><?= htmlspecialchars($employee['employee_name']) ?></h4>
                                <span class="member-role"><?= htmlspecialchars($employee['role']) ?></span>
                                <p class="member-desc"><?= htmlspecialchars($employee['description'] ?? 'Experienced professional dedicated to quality care') ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12 text-center text-white">
                    <p>No team members added yet. Please add employees from admin panel.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<style>
    /* Our Expert Team Section */
    .our_expert_team {
        padding: 80px 0 100px;
        background: #0a0a0a;
        position: relative;
        overflow: hidden;
    }

    /* Section Header */
    .section-header {
        position: relative;
    }

    .section-title {
        font-size: 2.8rem;
        font-weight: 800;
        color: #246bff;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin-bottom: 15px;
        text-shadow: 0 2px 20px rgba(255, 215, 0, 0.1);
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: #b0b0b0;
        font-weight: 300;
        letter-spacing: 1px;
    }

    .title-line {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #4973cc, rgb(73, 115, 204));
        margin: 20px auto 0;
        border-radius: 4px;
        position: relative;
    }

    .title-line::before {
        content: '';
        position: absolute;
        width: 40px;
        height: 4px;
        background: #246bff;
        border-radius: 4px;
        left: -50px;
        opacity: 0.5;
    }

    .title-line::after {
        content: '';
        position: absolute;
        width: 40px;
        height: 4px;
        background: #246bff;
        border-radius: 4px;
        right: -50px;
        opacity: 0.5;
    }

    /* Category Filters */
    .category-filters {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 12px;
        margin-bottom: 40px;
    }

    .filter-btn {
        padding: 10px 28px;
        border: 2px solid #2a2a2a;
        background: transparent;
        color: #b0b0b0;
        border-radius: 30px;
        font-weight: 600;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.4s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .filter-btn:hover {
        border-color: #246bff;
        color: #246bff;
        transform: translateY(-3px);
        box-shadow: 0 5px 20px rgba(255, 215, 0, 0.1);
    }

    .filter-btn.active {
        background: linear-gradient(135deg, #246bff, rgb(73, 115, 204));
        color: #0a0a0a;
        border-color: #246bff;
        box-shadow: 0 5px 25px rgba(255, 215, 0, 0.3);
    }

    /* Team Grid */
    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 30px;
        margin-top: 10px;
    }

    /* Team Member Card */
    .team-member {
        transition: all 0.5s ease;
    }

    .team-member.hidden {
        display: none;
    }

    .member-card {
        background: #1a1a1a;
        border-radius: 15px;
        overflow: hidden;
        border: 1px solid #2a2a2a;
        transition: all 0.4s ease;
        height: 100%;
        position: relative;
    }

    .member-card:hover {
        border-color: #246bff;
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(255, 215, 0, 0.08);
    }

    /* Member Image */
    .member-image {
        position: relative;
        overflow: hidden;
        background: #111;
        width: 100%;
        height: 300px;
    }

    .member-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
        display: block;
        background: #1a1a1a;
    }

    .member-card:hover .member-image img {
        transform: scale(1.08);
    }

    /* Image Overlay */
    .member-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.4s ease;
        backdrop-filter: blur(3px);
    }

    .member-card:hover .member-overlay {
        opacity: 1;
    }

    /* Social Icons */
    .social-icons {
        display: flex;
        gap: 15px;
        transform: translateY(20px);
        transition: all 0.4s ease;
    }

    .member-card:hover .social-icons {
        transform: translateY(0);
    }

    .social-icons a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: rgba(255, 215, 0, 0.15);
        color: #246bff;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .social-icons a:hover {
        background: #246bff;
        color: #0a0a0a;
        transform: translateY(-5px) rotate(360deg);
        box-shadow: 0 5px 20px rgba(255, 215, 0, 0.3);
    }

    /* Member Info */
    .member-info {
        padding: 22px 25px 25px;
        text-align: center;
    }

    .member-info h4 {
        color: #ffffff;
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 5px;
        transition: color 0.3s ease;
    }

    .member-card:hover .member-info h4 {
        color: #246bff;
    }

    .member-role {
        display: inline-block;
        background: linear-gradient(135deg, #246bff, rgb(73, 115, 204));
        color: #ffffff;
        font-size: 0.75rem;
        font-weight: 700;
        padding: 4px 16px;
        border-radius: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 10px;
    }

    .member-desc {
        color: #b0b0b0;
        font-size: 0.9rem;
        line-height: 1.6;
        margin-bottom: 0;
    }

    /* Animation without shaking */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.95) translateY(15px);
        }
        to {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }

    .team-member {
        animation: fadeIn 0.5s ease forwards;
    }

    .team-member.hidden {
        display: none !important;
    }

    /* Responsive */
    @media (max-width: 991px) {
        .our_expert_team {
            padding: 60px 0 70px;
        }
        .section-title {
            font-size: 2.2rem;
        }
        .team-grid {
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 25px;
        }
        .member-image {
            height: 260px;
        }
    }

    @media (max-width: 768px) {
        .our_expert_team {
            padding: 50px 0 60px;
        }
        .section-title {
            font-size: 1.8rem;
        }
        .section-subtitle {
            font-size: 0.95rem;
        }
        .category-filters {
            gap: 8px;
        }
        .filter-btn {
            padding: 8px 18px;
            font-size: 0.75rem;
        }
        .team-grid {
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }
        .member-image {
            height: 220px;
        }
        .member-info {
            padding: 18px 18px 20px;
        }
        .member-info h4 {
            font-size: 1rem;
        }
        .member-desc {
            font-size: 0.8rem;
        }
    }

    @media (max-width: 576px) {
        .our_expert_team {
            padding: 40px 0 50px;
        }
        .section-title {
            font-size: 1.5rem;
        }
        .section-subtitle {
            font-size: 0.85rem;
        }
        .team-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        .member-image {
            height: 250px;
        }
        .social-icons a {
            width: 40px;
            height: 40px;
            font-size: 1rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Category Filter
        const filterButtons = document.querySelectorAll('.filter-btn');
        const teamMembers = document.querySelectorAll('.team-member');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');

                const category = this.getAttribute('data-category');

                teamMembers.forEach(member => {
                    const memberCategory = member.getAttribute('data-category');
                    if (category === 'all' || memberCategory === category) {
                        member.classList.remove('hidden');
                        // Reset animation to prevent shaking
                        member.style.animation = 'none';
                        void member.offsetHeight; // Force reflow
                        member.style.animation = 'fadeIn 0.5s ease forwards';
                    } else {
                        member.classList.add('hidden');
                    }
                });
            });
        });

        // Trigger All filter by default
        const allBtn = document.querySelector('.filter-btn[data-category="all"]');
        if (allBtn) {
            allBtn.click();
        }
    });
</script>

