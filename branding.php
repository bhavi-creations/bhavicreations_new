<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branding | What it is, Types & Benefits</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
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

        * {
            box-sizing: border-box;
        }

        body {
            background: radial-gradient(ellipse at top, #0a0f28 0%, var(--bg-dark) 55%, #000 100%);
            color: var(--text);
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        .display-font {
            font-family: 'Space Grotesk', sans-serif;
        }

        .grain-overlay {
            position: fixed;
            inset: 0;
            pointer-events: none;
            background-image: radial-gradient(circle at 20% 20%, var(--neon-glow) 0%, transparent 35%),
                radial-gradient(circle at 80% 70%, rgba(36, 107, 255, 0.25) 0%, transparent 40%);
            z-index: 0;
        }

        .content-wrap {
            position: relative;
            z-index: 1;
        }

        /* NAV */
        .navbar-custom {
            background: rgba(5, 8, 22, 0.7);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid var(--border-color);
        }

        .navbar-brand span {
            background: linear-gradient(90deg, var(--blue), #7db3ff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: 700;
        }

        /* HERO */
        .hero-section {
            padding: 140px 0 90px;
            text-align: center;
        }

        .eyebrow-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 18px;
            border: 1px solid var(--border-color);
            border-radius: 999px;
            background: var(--card-bg);
            color: var(--text-gray);
            font-size: 0.8rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .eyebrow-tag .dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--primary-blue);
            box-shadow: 0 0 10px 2px var(--neon-glow);
        }

        .hero-title {
            font-size: clamp(2.4rem, 5vw, 4rem);
            font-weight: 700;
            line-height: 1.08;
            margin: 26px 0 22px;
            letter-spacing: -0.02em;
        }

        .hero-title .glow-word {
            background: linear-gradient(90deg, #7db3ff, var(--blue) 60%, #a685ff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero-sub {
            max-width: 680px;
            margin: 0 auto;
            color: var(--text-gray);
            font-size: 1.08rem;
            line-height: 1.7;
        }

        /* SECTION LABELS */
        .section-label {
            font-size: 0.78rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--primary-blue);
            font-weight: 600;
            margin-bottom: 10px;
        }

        .section-heading {
            font-size: clamp(1.8rem, 3.2vw, 2.6rem);
            font-weight: 700;
            margin-bottom: 16px;
        }

        .section-desc {
            color: var(--text-gray);
            max-width: 620px;
        }

        section {
            padding: 80px 0;
            border-top: 1px solid var(--border-color);
        }

        /* KEY POINTS - HERO SECTION CARD */
        .glass-panel {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 36px;
            backdrop-filter: blur(10px);
        }

        .point-row {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 14px 0;
            border-bottom: 1px dashed var(--border-color);
        }

        .point-row:last-child {
            border-bottom: none;
        }

        .point-icon {
            flex: 0 0 auto;
            width: 26px;
            height: 26px;
            border-radius: 8px;
            background: rgba(13, 110, 253, 0.15);
            border: 1px solid rgba(13, 110, 253, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-blue);
            font-size: 0.75rem;
            font-weight: 700;
        }

        /* TYPES GRID */
        .type-card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 18px;
            padding: 28px;
            height: 100%;
            position: relative;
            transition: transform .35s ease, border-color .35s ease, box-shadow .35s ease;
            overflow: hidden;
        }

        .type-card::before {
            content: "";
            position: absolute;
            top: -40%;
            right: -40%;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, var(--neon-glow), transparent 70%);
            opacity: 0;
            transition: opacity .35s ease;
        }

        .type-card:hover {
            transform: translateY(-6px);
            border-color: rgba(13, 110, 253, 0.5);
            box-shadow: 0 18px 40px -12px rgba(13, 110, 253, 0.35);
        }

        .type-card:hover::before {
            opacity: 1;
        }

        .type-index {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 2rem;
            font-weight: 700;
            color: rgba(210, 216, 245, 0.15);
            line-height: 1;
        }

        .type-card h3 {
            font-size: 1.15rem;
            margin: 10px 0 8px;
            color: #fff;
        }

        .type-card p {
            color: var(--text-gray);
            font-size: 0.92rem;
            margin-bottom: 6px;
        }

        .type-example {
            font-size: 0.82rem;
            color: var(--primary-blue);
            font-style: italic;
        }

        /* BENEFITS */
        .benefit-card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 24px;
            height: 100%;
            transition: border-color .3s ease, transform .3s ease;
        }

        .benefit-card:hover {
            border-color: var(--primary-blue);
            transform: translateY(-4px);
        }

        .benefit-num {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--primary-blue), #6f42c1);
            color: #fff;
            font-weight: 700;
            font-size: 0.9rem;
            margin-bottom: 14px;
        }

        .benefit-card h4 {
            font-size: 1.02rem;
            color: #fff;
            margin-bottom: 6px;
        }

        .benefit-card p {
            color: var(--text-gray);
            font-size: 0.9rem;
            margin: 0;
        }

        footer {
            text-align: center;
            padding: 40px 0;
            color: var(--text-gray);
            font-size: 0.85rem;
            border-top: 1px solid var(--border-color);
        }

        footer .glow-word {
            color: var(--primary-blue);
        }
    </style>
</head>

<body>

    <div class="grain-overlay"></div>
    <div class="content-wrap">

        <!-- NAVBAR -->
        

        <!-- HERO -->
        <div class="hero-section" id="what-is">
            <div class="container">
                <span class="eyebrow-tag"><span class="dot"></span> Brand Strategy Basics</span>
                <h1 class="hero-title">What is <span class="glow-word">Branding</span>?</h1>
                <p class="hero-sub">
                    Branding is the process of creating a unique identity and image for a business,
                    product, or service. It helps people recognize, remember, and trust a brand
                    compared to its competitors.
                </p>

                <div class="row justify-content-center mt-5">
                    <div class="col-lg-8">
                        <div class="glass-panel text-start">
                            <div class="point-row">
                                <div class="point-icon">01</div>
                                <div>Creates a unique identity for a business.</div>
                            </div>
                            <div class="point-row">
                                <div class="point-icon">02</div>
                                <div>Includes elements like logo, colors, design, brand name, and tagline.</div>
                            </div>
                            <div class="point-row">
                                <div class="point-icon">03</div>
                                <div>Builds a positive impression in customers' minds.</div>
                            </div>
                            <div class="point-row">
                                <div class="point-icon">04</div>
                                <div>Increases brand value and reputation.</div>
                            </div>
                            <div class="point-row">
                                <div class="point-icon">05</div>
                                <div>Helps a business stand out in the competitive market.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TYPES OF BRANDING -->
        <section id="types">
            <div class="container">
                <div class="section-label">Categories</div>
                <h2 class="section-heading">Types of Branding</h2>
                <p class="section-desc mb-5">Businesses use different branding strategies depending on what they want the audience to recognize — a product, a company, a person, or an experience.</p>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="type-card">
                            <div class="type-index">01</div>
                            <h3>Product Branding</h3>
                            <p>Creating a unique identity and image for a specific product.</p>
                            <div class="type-example">e.g. A mobile phone brand or a food product having its own identity.</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="type-card">
                            <div class="type-index">02</div>
                            <h3>Corporate Branding</h3>
                            <p>Building the overall image and reputation of a company.</p>
                            <div class="type-example">e.g. Creating trust and recognition for the entire organization.</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="type-card">
                            <div class="type-index">03</div>
                            <h3>Personal Branding</h3>
                            <p>Creating a unique identity for an individual.</p>
                            <div class="type-example">e.g. Entrepreneurs, influencers, and professionals building their own personal brand.</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="type-card">
                            <div class="type-index">04</div>
                            <h3>Service Branding</h3>
                            <p>Creating a strong identity for a service.</p>
                            <div class="type-example">e.g. Banking, education, and healthcare services.</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="type-card">
                            <div class="type-index">05</div>
                            <h3>Digital Branding</h3>
                            <p>Building a brand presence through online platforms.</p>
                            <div class="type-example">e.g. Websites, social media, and online advertising.</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="type-card">
                            <div class="type-index">06</div>
                            <h3>Retail Branding</h3>
                            <p>Creating a unique identity for a retail store or shopping business.</p>
                            <div class="type-example">e.g. A distinct store look, layout, and shopping experience.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BENEFITS -->
        <section id="benefits">
            <div class="container">
                <div class="section-label">Why it matters</div>
                <h2 class="section-heading">Uses & Benefits of Branding</h2>
                <p class="section-desc mb-5">Branding provides many benefits for a business — from trust to growth.</p>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="benefit-card">
                            <div class="benefit-num">1</div>
                            <h4>Builds Customer Trust</h4>
                            <p>Strong branding helps customers trust the business and its products.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="benefit-card">
                            <div class="benefit-num">2</div>
                            <h4>Improves Recognition</h4>
                            <p>Customers can easily identify and remember the brand.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="benefit-card">
                            <div class="benefit-num">3</div>
                            <h4>Competitive Advantage</h4>
                            <p>Helps the business stand out from competitors.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="benefit-card">
                            <div class="benefit-num">4</div>
                            <h4>Customer Loyalty</h4>
                            <p>A strong brand encourages customers to choose the same brand repeatedly.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="benefit-card">
                            <div class="benefit-num">5</div>
                            <h4>Business Value</h4>
                            <p>A powerful brand improves the overall value of the company.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="benefit-card">
                            <div class="benefit-num">6</div>
                            <h4>Boosts Sales & Growth</h4>
                            <p>Good branding attracts more customers and increases business opportunities.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="benefit-card">
                            <div class="benefit-num">7</div>
                            <h4>Professional Image</h4>
                            <p>Branding gives the business a reliable and professional identity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            Crafted with a <span class="glow-word">deep-space blue</span> identity — BrandLab &copy; 2026
        </footer>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php include 'footer.php'; ?>