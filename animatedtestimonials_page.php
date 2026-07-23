<?php include 'header.php'; ?>

<style>
    .media-tab-buttons button {
        width: 100%;
        padding: 10px;
        background-color: #ddd;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        transition: all 0.3s ease;
    }



    .media-tab-buttons button.active {
        background-color: #007BFF;

        /* background-color: #28323c; */
        color: #fff;
    }

    @media (max-width:768px) {
        .media-tab-buttons button.active {
            font-size: 12px !important;
        }
    }

    .media-tab-content {
        display: none;
        padding: 15px;
        background-color: #000000;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .media-tab-content.active {
        display: block;
    }



    .media-box {
        margin: 10px 0;
    }

    img,
    video {
        max-width: 100%;
        height: auto;
    }

    @media (max-width:768px) {
        .media-tab-content video {
            width: 100% !important;
        }

    }

    /* size  */

    .media-tab-content {
        display: none;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 20px;
    }

    .media-tab-content.active {
        display: flex;
    }

    .equal-media {
        height: 250px;
        width: auto;
        object-fit: cover;
    }

    .media-tab-btn {
        padding: 10px 20px;
        margin: 5px;
        background-color: #ddd;
        border: none;
        cursor: pointer;
    }

    .media-tab-btn.active {
        background-color: #333;
        color: white;
    }

    @media (min-width:992px) and (max-width:1200px) {
        .logo_section {
            font-size: 10px !important;
        }

    }
</style>


<section class="mb-5" style="padding-top:120px;">


    <div class="container">


        <div class="row g-2 mb-4 row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 media-tab-buttons mx-1  justify-content-center align-items-center">
            <div><button class="media-tab-btn active" onclick="showMediaTab(event, 'animatedvideos')">animatedvideos</button></div>

        </div>

        <div style="text-align: right; margin: 10px 0;">
            <a href="pages.php">
                <button style="padding:8px 16px; background:#3653f8; color:white; border:none; border-radius:5px; cursor:pointer;">
                    Go Back
                </button>
            </a>
        </div>


        <div id="animatedvideo" class="media-tab-content active"><!-- active = default show -->
            <div class="row">
                <?php
                include 'db.connection/db_connection.php';

                // Fix: normalize spaces + case
                $sql = "SELECT * FROM our_works 
                WHERE REPLACE(TRIM(LOWER(media_type)), ' ', '') = 'animatedvideo' 
                ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

                        // Path fix: check if already contains uploads/staff/
                        $path = (strpos($file, 'uploads/staff/') !== false) ? $file : "admin/public/uploads/staff/" . $file;

                        echo "<div class='col-md-4 mb-4'>
                        <div class='card shadow-sm h-100'>
                            <div class='card-body p-2'>";

                        // If media_link exists → wrap
                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        // Video check
                        if (in_array($ext, ['mp4', 'webm', 'ogg', 'mov'])) {
                            $mime = ($ext === 'mp4') ? 'video/mp4' : (($ext === 'webm') ? 'video/webm' : (($ext === 'ogg') ? 'video/ogg' : 'video/mp4'));
                            echo "<video controls class='img-fluid' style='border-radius:8px; max-height:300px;'>
                            <source src='$path' type='$mime'>
                          </video>";
                        } else {
                            echo "<p class='text-muted text-center'>⚠ Only video formats supported for animated videos</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                            </div>
                        </div>
                    </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No animated videos uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>

       

    </div>




</section>





<script>
    function showMediaTab(event, tabName) {
        // Hide all tab contents
        const tabcontent = document.getElementsByClassName("media-tab-content");
        for (let i = 0; i < tabcontent.length; i++) {
            tabcontent[i].classList.remove("active");
        }

        // Deactivate all tab buttons
        const tablinks = document.getElementsByClassName("media-tab-btn");
        for (let i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove("active");
        }

        // Show selected tab
        const selectedTab = document.getElementById(tabName);
        if (selectedTab) {
            selectedTab.classList.add("active");
        }

        // Activate the button
        if (event && event.currentTarget) {
            event.currentTarget.classList.add("active");
        }

        // Update URL hash
        window.location.hash = tabName;
    }

    function showTabFromHash() {
        const hash = window.location.hash.substring(1); // Remove #
        const validTabs = ['animatedvideos', 'all', 'images', 'videos', 'logos']; // Add more if needed

        const defaultTab = 'animatedvideos';
        let tabToShow = validTabs.includes(hash) ? hash : defaultTab;

        const targetTab = document.getElementById(tabToShow);
        const targetBtn = document.querySelector(`.media-tab-btn[onclick*="'${tabToShow}'"]`);

        // Hide all tabs and remove active from all buttons
        document.querySelectorAll('.media-tab-content').forEach(tab => tab.classList.remove('active'));
        document.querySelectorAll('.media-tab-btn').forEach(btn => btn.classList.remove('active'));

        // Show desired tab and highlight its button
        if (targetTab) targetTab.classList.add('active');
        if (targetBtn) targetBtn.classList.add('active');
    }

    window.onload = showTabFromHash;
    window.onhashchange = showTabFromHash;
</script>




<?php include 'footer.php'; ?>