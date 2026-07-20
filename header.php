<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Creative Agency</title>
    <link rel="stylesheet" href="./assets/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
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
</style>
  


</head>

<body>

    <nav class="navbar navbar-expand-lg ">

        <div class="container-fluid px-4 px-lg-5">

            <a class="navbar-brand" href="#">LOGO</a>

          
            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav mx-auto">

                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>

                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>

                    <li class="nav-item"><a class="nav-link" href="service.php">Services</a></li>

                    <li class="nav-item"><a class="nav-link" href="brands.php">Brand Stories</a></li>

                    <li class="nav-item"><a class="nav-link" href="package.php">Packages</a></li>

                    <li class="nav-item"><a class="nav-link" href="achievement.php">Achievements</a></li>

                    <!-- <li class="nav-item"><a class="nav-link" href="#">Brochure</a></li> -->

                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>

                </ul>

                <a href="#" class="talk_btn">

                    Let's Talk <i class="bi bi-arrow-up-right"></i>

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





   
