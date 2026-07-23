<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Outdoor Branding & Advertising</title>

  <!-- Bootstrap 5 + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <!-- Font Awesome 6 (free) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <style>
    /* ===== CUSTOM VARIABLES ===== */
    :root {
      --blue: #246BFF;
      --dark: #050816;
      --card: #0B1023;
      --border: #1A2446;
      --text: #D2D8F5;
    }

    /* ===== GLOBAL ===== */
    body {
      background: var(--dark);
      color: var(--text);
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      line-height: 1.6;
      padding: 2rem 1.5rem;
      display: flex;
      justify-content: center;
      min-height: 100vh;
    }

    .outdoor_media-wrapper {
      max-width: 1280px;
      width: 100%;
      background: var(--card);
      border-radius: 2.5rem;
      padding: 2.8rem 2.5rem;
      border: 1px solid var(--border);
      box-shadow: 0 30px 50px -15px rgba(0, 0, 0, 0.7);
    }

    h2,
    h3,
    h4,
    h5 {
      color: #ffffff;
      font-weight: 600;
      letter-spacing: -0.02em;
    }

    .text-accent {
      color: var(--blue);
    }

    .outdoor_media-divider {
      border: 0;
      height: 1px;
      background: linear-gradient(90deg, var(--border), var(--blue), var(--border));
      margin: 2.8rem 0;
      opacity: 0.4;
    }

    /* ===== SECTION 1: Hero ===== */
    .outdoor_media_feature-item {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      color: #e2e8f5;
      font-size: 1rem;
    }

    .outdoor_media_feature-item i {
      color: var(--blue);
      font-size: 1.2rem;
      width: 1.8rem;
      text-align: center;
    }

    .outdoor_media_right-image {
      background: var(--dark);
      border-radius: 2rem;
      padding: 0.5rem;
      border: 1px solid var(--border);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 240px;
    }

    .outdoor_media_right-image img {
      max-width: 100%;
      height: auto;
      border-radius: 1.5rem;
      display: block;
      background: #111a33;
      box-shadow: 0 12px 30px -10px rgba(0, 0, 0, 0.6);
      width: 100%;
      max-height: 300px;
      object-fit: cover;
    }

    /* ===== OUTDOOR BRANDING CARDS ===== */
    /* ===== BENEFITS CARDS ===== */
    .outdoor_media-benefit-card {
      background: var(--dark);
      padding: 1.6rem 1.4rem;
      border-radius: 1.5rem;
      border: 1px solid var(--border);
      transition: 0.25s ease;
      height: 100%;
    }

    .outdoor_media-benefit-card:hover {
      border-color: #8b5cf6;
      background: #0d0f2a;
      transform: translateY(-4px);
    }

    .outdoor_media-benefit-card .outdoor_media-benefit-icon {
      font-size: 2rem;
      color: var(--blue);
      margin-bottom: 0.8rem;
    }

    .outdoor_media-benefit-card h5 {
      font-size: 1.1rem;
      margin-bottom: 0.4rem;
    }

    .outdoor_media-benefit-card p {
      color: var(--text);
      font-size: 0.92rem;
      opacity: 0.85;
      margin-bottom: 0;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
      .outdoor_media-wrapper {
        padding: 1.8rem 1.2rem;
      }

      .outdoor_media_right-image {
        min-height: 160px;
      }

      .outdoor_media-card .card-number {
        width: 1.8rem;
        height: 1.8rem;
        font-size: 0.7rem;
        top: -8px;
        right: -8px;
      }
    }

    @media (max-width: 576px) {
      .outdoor_media-card .outdoor_media-icon {
        font-size: 2rem;
      }

      .outdoor_media-card .outdoor_media-name {
        font-size: 0.85rem;
      }
    }
  </style>
</head>

<body>

  <div class="outdoor_media-wrapper">

    <!-- ========== SECTION 1: Hero ========== -->
    <section class="row g-4 align-items-center mb-4">
      <div class="col-lg-6">
        <div class="outdoor_media_left-content">
          <h2 class="display-4 fw-bold">
            Outdoor <br />
            <span style="background: linear-gradient(135deg, var(--blue), #8b5cf6); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Branding</span>
            <br />&amp; Advertising
          </h2>
          <p class="text-light opacity-75 fs-5" style="max-width: 90%;">
            Make your brand visible everywhere with premium outdoor advertising solutions
            — from flex hoardings and unipoles to bus shelters, auto branding, and LED screens.
          </p>
          <div class="d-flex flex-column gap-2">
            <div class="outdoor_media_feature-item">
              <i class="fas fa-check-circle"></i> <span>Flex Hoardings &amp; Unipoles</span>
            </div>
            <div class="outdoor_media_feature-item">
              <i class="fas fa-check-circle"></i> <span>Bus Shelters &amp; Pole Kiosks</span>
            </div>
            <div class="outdoor_media_feature-item">
              <i class="fas fa-check-circle"></i> <span>Auto, Bus &amp; Shop Branding</span>
            </div>
            <div class="outdoor_media_feature-item">
              <i class="fas fa-check-circle"></i> <span>LED Screens &amp; Event Branding</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="outdoor_media_right-image">
          <img
            src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='500' height='320' viewBox='0 0 500 320'%3E%3Crect width='500' height='320' fill='%230b1023'/%3E%3Crect x='40' y='40' width='420' height='200' rx='24' fill='%231a2446' stroke='%23246bff' stroke-width='1.5'/%3E%3Ccircle cx='130' cy='120' r='36' fill='%23246bff' opacity='0.3'/%3E%3Crect x='190' y='100' width='160' height='16' rx='8' fill='%23246bff' opacity='0.7'/%3E%3Crect x='190' y='135' width='120' height='12' rx='6' fill='%23d2d8f5' opacity='0.3'/%3E%3Crect x='190' y='165' width='200' height='12' rx='6' fill='%23d2d8f5' opacity='0.2'/%3E%3Crect x='60' y='200' width='360' height='26' rx='14' fill='%23246bff' opacity='0.2'/%3E%3Crect x='140' y='260' width='180' height='32' rx='16' fill='%23246bff' opacity='0.8'/%3E%3C/svg%3E"
            alt="Outdoor Branding & Advertising"
            loading="lazy"
            class="img-fluid" />
        </div>
      </div>
    </section>

    <hr class="outdoor_media-divider" />

    <!-- ========== SECTION 2: Outdoor Branding Services ========== -->
    <section>
      <h3 class="d-flex align-items-center gap-2 fs-1 fw-semibold mb-4">
        <i class="fas fa-bullhorn" style="color: var(--blue);"></i> Outdoor Branding Solutions
      </h3>
      <div class="row g-4">

        <!-- 01. Roadside Flex Hoardings -->
        <div class="col-6 col-md-4 col-lg-3">
          <div class="outdoor_media-card">
            <span class="card-number">01</span>
            <div class="outdoor_media-icon flex"><i class="fas fa-flag"></i></div>
            <div class="outdoor_media-name">Roadside Flex Hoardings</div>
          </div>
        </div>

        <!-- 02. Unipole Hoardings -->
        <div class="col-6 col-md-4 col-lg-3">
          <div class="outdoor_media-card">
            <span class="card-number">02</span>
            <div class="outdoor_media-icon unipole"><i class="fas fa-tower-broadcast"></i></div>
            <div class="outdoor_media-name">Unipole Hoardings</div>
          </div>
        </div>

        <!-- 03. Pole Kiosks -->
        <div class="col-6 col-md-4 col-lg-3">
          <div class="outdoor_media-card">
            <span class="card-number">03</span>
            <div class="outdoor_media-icon pole"><i class="fas fa-circle"></i></div>
            <div class="outdoor_media-name">Pole Kiosks</div>
          </div>
        </div>

        <!-- 04. Bus Shelter Ads -->
        <div class="col-6 col-md-4 col-lg-3">
          <div class="outdoor_media-card">
            <span class="card-number">04</span>
            <div class="outdoor_media-icon bus-shelter"><i class="fas fa-bus"></i></div>
            <div class="outdoor_media-name">Bus Shelter Ads</div>
          </div>
        </div>

        <!-- 05. Auto Branding -->
        <div class="col-6 col-md-4 col-lg-3">
          <div class="outdoor_media-card">
            <span class="card-number">05</span>
            <div class="outdoor_media-icon auto"><i class="fas fa-car"></i></div>
            <div class="outdoor_media-name">Auto Branding</div>
          </div>
        </div>

        <!-- 06. Bus Branding -->
        <div class="col-6 col-md-4 col-lg-3">
          <div class="outdoor_media-card">
            <span class="card-number">06</span>
            <div class="outdoor_media-icon bus"><i class="fas fa-bus-simple"></i></div>
            <div class="outdoor_media-name">Bus Branding</div>
          </div>
        </div>

        <!-- 07. Shop Sign Boards -->
        <div class="col-6 col-md-4 col-lg-3">
          <div class="outdoor_media-card">
            <span class="card-number">07</span>
            <div class="outdoor_media-icon shop"><i class="fas fa-store"></i></div>
            <div class="outdoor_media-name">Shop Sign Boards</div>
          </div>
        </div>

        <!-- 08. Glow Sign Boards -->
        <div class="col-6 col-md-4 col-lg-3">
          <div class="outdoor_media-card">
            <span class="card-number">08</span>
            <div class="outdoor_media-icon glow"><i class="fas fa-lightbulb"></i></div>
            <div class="outdoor_media-name">Glow Sign Boards</div>
          </div>
        </div>

        <!-- 09. ACP Sign Boards -->
        <div class="col-6 col-md-4 col-lg-3">
          <div class="outdoor_media-card">
            <span class="card-number">09</span>
            <div class="outdoor_media-icon acp"><i class="fas fa-layer-group"></i></div>
            <div class="outdoor_media-name">ACP Sign Boards</div>
          </div>
        </div>

        <!-- 10. Wall Branding -->
        <div class="col-6 col-md-4 col-lg-3">
          <div class="outdoor_media-card">
            <span class="card-number">10</span>
            <div class="outdoor_media-icon wall"><i class="fas fa-wall"></i></div>
            <div class="outdoor_media-name">Wall Branding</div>
          </div>
        </div>

        <!-- 11. LED Digital Screens -->
        <div class="col-6 col-md-4 col-lg-3">
          <div class="outdoor_media-card">
            <span class="card-number">11</span>
            <div class="outdoor_media-icon led"><i class="fas fa-digital-tiling"></i></div>
            <div class="outdoor_media-name">LED Digital Screens</div>
          </div>
        </div>

        <!-- 12. Event Flex & Stage Branding -->
        <div class="col-6 col-md-4 col-lg-3">
          <div class="outdoor_media-card">
            <span class="card-number">12</span>
            <div class="outdoor_media-icon event"><i class="fas fa-calendar-star"></i></div>
            <div class="outdoor_media-name">Event Flex &amp; Stage Branding</div>
          </div>
        </div>

      </div>
    </section>

    <hr class="outdoor_media-divider" />

    <!-- ========== SECTION 3: Benefits of Outdoor Branding ========== -->
    <section>
      <h3 class="d-flex align-items-center gap-2 fs-1 fw-semibold mb-4">
        <i class="fas fa-rocket" style="color: #8b5cf6;"></i> Why Outdoor Branding Matters
      </h3>
      <div class="row g-4">
        <div class="col-md-6 col-lg-4">
          <div class="outdoor_media-benefit-card">
            <div class="outdoor_media-benefit-icon"><i class="fas fa-eye"></i></div>
            <h5>Maximum Visibility</h5>
            <p>Outdoor advertising reaches thousands daily with 24/7 visibility, creating top-of-mind brand awareness.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="outdoor_media-benefit-card">
            <div class="outdoor_media-benefit-icon"><i class="fas fa-people-group"></i></div>
            <h5>Massive Reach</h5>
            <p>Billboards and hoardings capture attention from pedestrians, commuters, and drivers across cities.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="outdoor_media-benefit-card">
            <div class="outdoor_media-benefit-icon"><i class="fas fa-clock"></i></div>
            <h5>24/7 Exposure</h5>
            <p>Unlike digital ads that disappear, outdoor branding works round the clock, every single day.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="outdoor_media-benefit-card">
            <div class="outdoor_media-benefit-icon"><i class="fas fa-bullseye"></i></div>
            <h5>Local Targeting</h5>
            <p>Strategic placement helps you reach specific neighborhoods, cities, or regions with precision.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="outdoor_media-benefit-card">
            <div class="outdoor_media-benefit-icon"><i class="fas fa-arrows-rotate"></i></div>
            <h5>High Recall Value</h5>
            <p>Outdoor ads have 70% higher recall than online ads, making your brand unforgettable.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="outdoor_media-benefit-card">
            <div class="outdoor_media-benefit-icon"><i class="fas fa-crown"></i></div>
            <h5>Cost-Effective</h5>
            <p>Outdoor branding offers one of the lowest cost-per-impression rates among all advertising mediums.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- subtle bottom note -->
    <div class="mt-5 pt-4 text-center border-top" style="border-color: var(--border) !important; opacity: 0.5; color: var(--text); font-size: 0.85rem;">
      <i class="fas fa-arrow-up text-accent me-1"></i> Outdoor Branding &amp; Advertising · no header, no footer
    </div>

  </div>
  <!-- end wrapper -->

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>