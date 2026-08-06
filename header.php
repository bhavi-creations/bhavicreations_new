<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Creative Agency</title>
    <link rel="stylesheet" href="./assets/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet"> -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <link href="assets/img/favicon.png" rel="icon">
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Outfit', sans-serif;
        }

        body {
            background: #050816;
            color: #fff;
            overflow-x: hidden;
            background-color: var(--bg-dark);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;



        }

        a {
            text-decoration: none;
        }

        :root {

        
           
            --blue: #246BFF;
            --dark: #050816;
            --card: #0B1023;
            --border: #1A2446;
            --text: #D2D8F5;


            --bg-dark: #04050a;
            --primary-blue: #0d6efd;
            --neon-glow: rgba(13, 110, 253, 0.5);
            --text-gray: #a9a9b3;
            --border-color: rgba(255, 255, 255, 0.1);
            --card-bg: rgba(255, 255, 255, 0.03);

            --bg: #04050a;
            --bg-soft: #080b18;
            --card: rgba(255, 255, 255, 0.03);
            --card-solid: #0B1023;
            --border: rgba(255, 255, 255, 0.1);
            --blue: #0d6efd;
            --blue-light: #6fa2ff;
            --glow: rgba(13, 110, 253, 0.5);
            --text: #ffffff;
            --text-gray: #a2a7bd;

        }

        . {
            background: var(--bg);
            color: var(--text);
        }



        .navbar {

            padding: 18px 0;
            background: transparent;
            position: absolute;
            width: 100%;
            z-index: 1000;

        }

        .navbar .container-fluid {
            gap: 1rem;
        }



        @media(max-width:992px) {
            .navbar {
                background: rgba(3, 5, 10, 0.96) !important;
                backdrop-filter: blur(16px);
                -webkit-backdrop-filter: blur(16px);
                padding: 14px 0;
            }

            .navbar-collapse {
                width: 100%;
                margin-top: 1rem;
                padding: 1rem 1rem 1.1rem;
                border-top: 1px solid rgba(255, 255, 255, 0.08);
                border-radius: 0 0 1.1rem 1.1rem;
                background: rgba(3, 5, 10, 0.98);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.22);
            }

            .navbar-nav {
                width: 100%;
                gap: 0.15rem;
            }

            .nav-item {
                width: 100%;
            }

            .nav-link {
                margin: 0;
                padding: 0.8rem 0;
                font-size: 0.98rem;
            }

            .nav-link.active::after {
                left: 0;
                transform: none;
                width: 2rem;
                height: 2px;
                border-radius: 999px;
                bottom: 0.35rem;
            }

            .talk_btn {
                width: 100%;
                justify-content: center;
                margin-top: 0.95rem;
            }

            .navbar-brand {
                font-size: 32px;
            }
        }

        .navbar-brand {

            font-size: clamp(30px, 3.3vw, 42px);
            font-weight: 800;
            color: #246BFF !important;
            line-height: 1;

        }

        .nav-link {

            color: #fff !important;
            margin: 0 12px;
            font-size: 15px;
            position: relative;
            padding-bottom: 0.5rem;

        }

        .nav-link:hover {

            color: #246BFF !important;

        }

        .nav-link.active {

            color: #246BFF !important;

        }

        .nav-link.active::after {

            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            width: 28px;
            height: 2px;
            border-radius: 999px;
            background: #246BFF;
            transform: translateX(-50%);
            box-shadow: 0 0 10px rgba(36, 107, 255, 0.9);

        }

        .talk_btn {

            background: linear-gradient(135deg, #0d6efd 0%, #246BFF 100%);
            padding: 12px 22px;
            border-radius: 14px;
            color: #fff;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: transform 0.25s ease, box-shadow 0.25s ease;

        }


        .talk_btn-section{
 background: linear-gradient(135deg, #0d6efd 0%, #246BFF 100%);
            padding: 12px 22px;
            border-radius: 50%;
            color: #fff;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }
        .talk_btn:hover {

            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(36, 107, 255, 0.28);

        }

        @media (hover: none) and (pointer: coarse) {

            .nav-link:hover {

                color: #fff !important;

            }

            .nav-link.active:hover {

                color: #246BFF !important;

            }

            .talk_btn:hover {

                transform: none;
                box-shadow: none;

            }

        }

        @media (min-width:1200px) {
            .index_navbar {
                margin-top: 50px !important;
            }

        }
    </style>



</head>

<body>
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    function nav_active($pages, $currentPage)
    {
        return in_array($currentPage, (array) $pages, true) ? 'active' : '';
    }
    ?>

    <nav class="navbar navbar-expand-lg  ">

        <div class="container-fluid px-4 px-lg-5">

            <!-- <a class="navbar-brand" href="#">LOGO</a> -->
            <img src="./assets/img/logo.webp" alt="logo" style="width: 150px; height: auto;">

            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav mx-auto">

                    <li class="nav-item"><a class="nav-link <?php echo nav_active(['index.php'], $currentPage); ?>" href="index.php">Home</a></li>

                    <li class="nav-item"><a class="nav-link <?php echo nav_active(['about.php'], $currentPage); ?>" href="about.php">About Us</a></li>

                    <li class="nav-item"><a class="nav-link <?php echo nav_active(['service.php'], $currentPage); ?>" href="service.php">Services</a></li>

                    <li class="nav-item"><a class="nav-link <?php echo nav_active(['brands.php'], $currentPage); ?>" href="brands.php">Brand Stories</a></li>

                    <li class="nav-item"><a class="nav-link <?php echo nav_active(['our_works.php'], $currentPage); ?>" href="our_works.php">portfolio</a></li>

                    <li class="nav-item"><a class="nav-link <?php echo nav_active(['package.php'], $currentPage); ?>" href="package.php">Packages</a></li>

                    <li class="nav-item"><a class="nav-link <?php echo nav_active(['achievement.php'], $currentPage); ?>" href="achievement.php">Achievements</a></li>

                    <!-- <li class="nav-item"><a class="nav-link" href="#">Brochure</a></li> -->

                    <li class="nav-item"><a class="nav-link <?php echo nav_active(['contact.php'], $currentPage); ?>" href="contact.php">Contact Us</a></li>


                </ul>




                <a href="tel:+919642343434" class="talk_btn d-block d-lg-none d-xl-block">
                    <i class="bi bi-telephone-fill"></i> Let's Talk
                </a>


                <a href="tel:+919642343434" class="talk_btn-section d-none d-lg-block d-xl-none">
                    <i class="bi bi-telephone-fill"></i> 
                </a>



            </div>


            <button class="navbar-toggler bg-white d-inline-flex align-items-center justify-content-center d-block d-lg-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu"
                aria-controls="menu"
                aria-expanded="false"
                aria-label="Toggle navigation">

                <i class="bi bi-list text-dark fs-2 lh-1"></i>

            </button>


        </div>
     



    </nav>

    <style>

    
.social-media{
    position: fixed;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    z-index: 999;
    background: #fff;
    padding: 10px 8px;
    border-radius: 14px 0 0 14px;
    box-shadow: 0 4px 12px rgba(0,0,0,.12);
}

.social-media a{
    width: 42px;
    height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
}

/* Brochure Image */
.social-media img{
    width: 42px;
    height: 42px;
    border-radius: 8px;
    transition: .3s;
}

/* WhatsApp */
.whatsapp-icon{
    width: 42px !important;
    height: 42px !important;
    background: #25D366;
    color: #fff;
    font-size: 24px;
    border-radius: 50%;
    transition: .3s;
}

.social-media img:hover,
.whatsapp-icon:hover{
    transform: scale(1.08);
}


.scrollBtn{
    display:none;
    position:fixed;
    bottom:25px;
    right:20px;
    width:55px;
    height:55px;
    border:none;
    border-radius:50%;
    background:#01539D;
    color:#fff;
    cursor:pointer;
    z-index:999;
    font-size:22px;
    box-shadow:0 5px 15px rgba(0,0,0,.2);
}

.scrollBtn:hover{
    background:#246BFF;
}
</style>

<div class="social-media">

    <!-- Download Brochure -->
    <a href="./assets/img/Bhavi Brochure.pdf"
       download
       title="Download Brochure">
        <img src="./assets/img/download.png"
             alt="Download Brochure"
             style="width:50px;">
    </a>

    <!-- WhatsApp -->
    <a href="https://api.whatsapp.com/send?phone=919642343434"
       target="_blank"
       title="Chat on WhatsApp"
       class="whatsapp-icon">
        <i class="fab fa-whatsapp"></i>
    </a>

</div>

<button id="scrollBtn" class="scrollBtn" title="Back to Top">
    <i class="bi bi-arrow-up"></i>
</button>



<script>
const scrollBtn = document.getElementById("scrollBtn");

window.onscroll = function () {
    if (document.documentElement.scrollTop > 200) {
        scrollBtn.style.display = "block";
    } else {
        scrollBtn.style.display = "none";
    }
};

scrollBtn.onclick = function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
};
</script>