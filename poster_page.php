<?php include 'header.php' ; ?>
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
            background-color: #090909;
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
            <div><button class="media-tab-btn active" onclick="showMediaTab(event, 'posters')">posters</button></div>
         
        </div>

        <div style="text-align: right; margin: 10px 0;">
            <a href="pages.php">
                <button style="padding:8px 16px; background:#3653f8; color:white; border:none; border-radius:5px; cursor:pointer;">
                    Go Back
                </button>
            </a>
        </div>

        <div id="posters" class="media-tab-content active">
            <div class="row">

                <div class="row">
                    <?php
                    include 'db.connection/db_connection.php'; // Update path if needed

                    $sql = "SELECT * FROM our_works WHERE media_type = 'posters' ORDER BY id DESC";
                    $result = $conn->query($sql);

                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $file = htmlspecialchars($row['file_path']);
                            $title = htmlspecialchars($row['title']);
                            $link = htmlspecialchars($row['media_link']);
                            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                            $path = "admin/public/uploads/staff/" . $file;

                            echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body p-2'>";

                            if (!empty($link)) echo "<a href='$link' target='_blank'>";

                            if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                                echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                            } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                                echo "<video controls class='img-fluid' style='border-radius: 8px;'>
                        <source src='$path' type='video/$ext'>
                    </video>";
                            } elseif ($ext === 'pdf') {
                                echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                            } else {
                                echo "<p class='text-muted text-center'>Unsupported file format</p>";
                            }

                            if (!empty($link)) echo "</a>";

                            echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                        }
                    } else {
                        echo "<div class='col-12'><p class='text-muted text-center'>No posters uploaded yet.</p></div>";
                    }

                    $conn->close();
                    ?>


                </div>
            </div>

        </div>
    



      

      

    </div>
</section>

  
   



<?php include 'footer.php'; ?>