<?php include 'header.php'; ?>
    <style>
        @media (max-width:768px) {


            .button-grid {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                gap: 20px;
            }
        }




        @media (min-width:768px) and (max-width:1200px) {


            .button-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
        }


        @media (min-width:1201px) and (max-width:1600px) {


.button-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}
}

        .btn-animated {
            font-weight: bold;
            color: white;
            border-radius: 2rem;
            cursor: pointer;
            padding: 12px 24px;
            border: none;
            background-color: #3653f8;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
            text-decoration: none;
            font-size: 16px;
        }

        .btn-animated span {
            display: inline-block;
            transition: transform 0.3s ease;
        }

        .btn-animated::after {
            content: attr(data-text);
            position: absolute;
            left: 50%;
            top: 100%;
            transform: translateX(-50%);
            color: #fff;
            transition: top 0.3s ease;
        }

        .btn-animated:hover span {
            transform: translateY(-150%);
        }

        .btn-animated:hover::after {
            top: 50%;
            transform: translate(-50%, -50%);
        }
    </style>











   




   



    <section class="mb-5" style="padding-top:120px ">
        <div class="container">
            <div class="button-grid">
                <a href="logo_page.php" class="btn-animated" data-text="Logo"><span>Logo</span></a>
                <a href="website_page.php" class="btn-animated" data-text="Website"><span>Website</span></a>
                <a href="poster_page.php" class="btn-animated" data-text="Posters"><span>Posters</span></a>
                <a href="reels_page.php" class="btn-animated" data-text="Reels"><span>Reels</span></a>
                <a href="photoshoot_page.php" class="btn-animated" data-text="Photo Shoot"><span>Photo Shoot</span></a>
                <a href="videos_page.php" class="btn-animated" data-text="Videos"><span>Videos</span></a>
                <a href="testimonials_page.php" class="btn-animated" data-text="Testimonials"><span>Testimonials</span></a>
                <a href="animatedtestimonials_page.php" class="btn-animated" data-text="Animated Videos"><span>Animated Videos</span></a>
                <a href="visitingcards_page.php" class="btn-animated" data-text="Visiting Cards"><span>Visiting Cards</span></a>
                <a href="pamplets.php" class="btn-animated" data-text="Pamphlets"><span>Pamphlets</span></a>
                <a href="brochures_page.php" class="btn-animated" data-text="Brochures"><span>Brochures</span></a>
                <a href="hoardings_page.php" class="btn-animated" data-text="Hoardings"><span>Hoardings</span></a>
            </div>

        </div>
    </section>













<?php include 'footer.php' ; ?>