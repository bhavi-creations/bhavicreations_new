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

            padding: 22px 0;
            background: transparent;
            position: absolute;
            width: 100%;
            z-index: 1000;

        }



        @media(max-width:992px) {
            .navbar {
                background: black !important;
            }
        }

        .navbar-brand {

            font-size: 52px;
            font-weight: 800;
            color: #246BFF !important;

        }

        .nav-link {

            color: #fff !important;
            margin: 0 12px;
            font-size: 15px;

        }

        .nav-link:hover {

            color: #246BFF !important;

        }

        .talk_btn {

            background: var(--blue);
            padding: 14px 28px;
            border-radius: 14px;
            color: #fff;
            font-weight: 600;

        }
</style>
  


</head>

<body>

    <nav class="navbar navbar-expand-lg">

        <div class="container">

            <a class="navbar-brand" href="#">LOGO</a>

            <button class="navbar-toggler bg-white" data-bs-toggle="collapse" data-bs-target="#menu">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav mx-auto">

                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>

                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>

                    <li class="nav-item"><a class="nav-link" href="service.php">Services</a></li>

                    <li class="nav-item"><a class="nav-link" href="brand.php">Brand Stories</a></li>

                    <li class="nav-item"><a class="nav-link" href="package.php">Packages</a></li>

                    <li class="nav-item"><a class="nav-link" href="achievement.php">Achievements</a></li>

                    <!-- <li class="nav-item"><a class="nav-link" href="#">Brochure</a></li> -->

                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

                </ul>

                <a href="#" class="talk_btn">

                    Let's Talk

                </a>

            </div>

        </div>

    </nav>





   